# Cyberduck Website

This is the development home for the [Cyberduck](https://github.com/iterate-ch/cyberduck) [website](https://cyberduck.io).

## Requirements

Python 3.13 (`minify-html` has no prebuilt wheels for newer versions yet).

```commandline
python3.13 -m venv .
source bin/activate
pip install -r requirements.txt
```

## Build

### Regenerate pages on changes

```commandline
invoke regenerate
```

### Run local web server

```commandline
invoke serve
```