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
CATEGORY_SAVE_AS = ''
TAG_SAVE_AS = ''
AUTHOR_SAVE_AS = ''

DIRECT_TEMPLATES = ()

# DIRECT_TEMPLATES, which are ('index', 'tags', 'categories', 'archives') by default, work a bit differently
# than noted above. Only the _SAVE_AS settings are available
ARCHIVES_SAVE_AS = ''
AUTHORS_SAVE_AS = ''
CATEGORIES_SAVE_AS = ''
TAGS_SAVE_AS = ''

# The static paths you want to have accessible on the output path “static”. By default, Pelican will
# copy the “images” folder to the output folder. copied without parsing their contents.
STATIC_PATHS = ['img', 'robots.txt', 'favicon.ico']

TYPOGRIFY = False

TWITTER_USERNAME = 'cyberduckapp'
GOOGLE_ANALYTICS = 'UA-3203018-1'