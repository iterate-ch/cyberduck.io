#!/usr/bin/env python
# -*- coding: utf-8 -*- #
from __future__ import unicode_literals

AUTHOR = u'iterate GmbH'
SITENAME = u'Cyberduck'
SITEURL = 'https://cyberduck.io'

PATH = 'content'

TIMEZONE = 'Europe/Paris'

DEFAULT_LANG = u'en'

# Feed generation is usually not desired when developing
FEED_ALL_ATOM = None
CATEGORY_FEED_ATOM = None
TRANSLATION_FEED_ATOM = None
AUTHOR_FEED_ATOM = None
AUTHOR_FEED_RSS = None

# Blogroll
LINKS = ()

# Social widget
SOCIAL = ()

DEFAULT_PAGINATION = False

# Blog (exported from WordPress, see tools/wp_export.py)
ARTICLE_PATHS = ['blog']
PAGE_PATHS = ['pages']

# The blog is served from its own vhost (docroot output/blog), so blog-internal links drop the /blog prefix
def bloghost(url):
    url = url.lstrip('/')
    return '/' + (url[len('blog/'):] if url.startswith('blog/') else '' if url == 'blog' else url)


JINJA_FILTERS = {'bloghost': bloghost}
ARTICLE_URL = 'blog/{date:%Y}/{date:%m}/{date:%d}/{slug}/'
ARTICLE_SAVE_AS = 'blog/{date:%Y}/{date:%m}/{date:%d}/{slug}/index.html'
BLOG_URL = 'blog/'
BLOG_SAVE_AS = 'blog/index.html'
PAGINATED_TEMPLATES = {'blog': 5, 'category': 5}
PAGINATION_PATTERNS = (
    (1, '{url}', '{save_as}'),
    (2, '{base_name}/page/{number}/', '{base_name}/page/{number}/index.html'),
)

# Uncomment following line if you want document-relative URLs when developing
RELATIVE_URLS = True

# Specify a customized theme, via path relative to the settings file
THEME = "themes/bootstrap"
THEME_STATIC_DIR = '.'
THEME_STATIC_PATHS = ['static']

CSS_FILE = 'style.css'

PAGE_URL = '{slug}'
PAGE_SAVE_AS = '{slug}/index.html'

PAGE_LANG_URL = '{slug}'
PAGE_LANG_SAVE_AS = '{slug}/index.{lang}.html'

# No category page
CATEGORY_URL = 'blog/category/{slug}/'
CATEGORY_SAVE_AS = 'blog/category/{slug}/index.html'
TAG_SAVE_AS = ''
AUTHOR_SAVE_AS = ''

DIRECT_TEMPLATES = ('blog',)

# DIRECT_TEMPLATES, which are ('index', 'tags', 'categories', 'archives') by default, work a bit differently
# than noted above. Only the _SAVE_AS settings are available
ARCHIVES_SAVE_AS = ''
AUTHORS_SAVE_AS = ''
CATEGORIES_SAVE_AS = ''
TAGS_SAVE_AS = ''

# The static paths you want to have accessible on the output path “static”. By default, Pelican will
# copy the “images” folder to the output folder. copied without parsing their contents.
STATIC_PATHS = ['img','blog','robots.txt','favicon.ico','.well-known']

TYPOGRIFY = False

TWITTER_USERNAME = 'cyberduckapp'
GOOGLE_ANALYTICS = 'UA-3203018-1'

PLUGIN_PATHS = ['plugins']

PLUGINS = [
    'multicat',
    'minify'
]

#CSS_MIN = True
JS_MIN = False
#HTML_MIN = True
#INLINE_CSS_MIN = True
#INLINE_JS_MIN = True

from datetime import date
CURRENTYEAR = date.today().year
