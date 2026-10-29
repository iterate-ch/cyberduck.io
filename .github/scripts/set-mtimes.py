#!/usr/bin/env python3
"""Set modification dates of the built site so that unchanged files keep a stable date.

Usage: set-mtimes.py <previous-output> <new-output>

- File identical to the one in <previous-output>: reuse its modification date.
- Static file mirrored from a source file: date of the last commit touching the source.
- Anything else (generated): date of HEAD, the commit being built.

duck then only transfers files that differ when run with `--existing compare --preserve`.
"""
import filecmp
import os
import subprocess
import sys

# Output path prefix -> source directory it is copied from, first match wins
SOURCES = ['content', 'themes/bootstrap/static']


def git(*args):
    return subprocess.run(['git', *args], check=True, capture_output=True, text=True).stdout


def commit_times():
    """Map each tracked source path to the committer date of the newest commit touching it."""
    times = {}
    current = None
    for line in git('log', '--format=%x00%ct', '--name-only', '--', *SOURCES).splitlines():
        if line.startswith('\0'):
            current = int(line[1:])
        elif line:
            times.setdefault(line, current)
    return times


def main(previous, output):
    head = int(git('show', '-s', '--format=%ct', 'HEAD').strip())
    sources = commit_times()
    counts = {'cached': 0, 'source': 0, 'generated': 0}
    for root, _, files in os.walk(output):
        for name in files:
            path = os.path.join(root, name)
            rel = os.path.relpath(path, output)
            old = os.path.join(previous, rel)
            if os.path.isfile(old) and filecmp.cmp(old, path, shallow=False):
                t, kind = os.stat(old).st_mtime, 'cached'
            else:
                t, kind = next(((sources[s], 'source') for s in (f'{d}/{rel}' for d in SOURCES) if s in sources),
                               (head, 'generated'))
            counts[kind] += 1
            os.utime(path, (t, t))
    print(f'Set modification dates: {counts}')


if __name__ == '__main__':
    main(*sys.argv[1:3])
