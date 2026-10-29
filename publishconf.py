#!/usr/bin/env python
# -*- coding: utf-8 -*- #
from __future__ import unicode_literals

# This file is only used if you use `make publish` or
# explicitly specify it as your config file.

import os
import sys
sys.path.append(os.curdir)
from pelicanconf import *

SITEURL = 'https://cyberduck.io'
RELATIVE_URLS = False

# Preserve the feed URLs of the WordPress blog (blog.cyberduck.io/feed/, /feed/atom/, /feed/rss/)
FEED_ALL_RSS = 'blog/feed/index.xml'
FEED_ALL_ATOM = 'blog/feed/atom/index.xml'
CATEGORY_FEED_RSS = 'blog/category/%s/feed/index.xml'
CATEGORY_FEED_ATOM = 'blog/category/%s/feed/atom/index.xml'
FEED_MAX_ITEMS = 50

DELETE_OUTPUT_DIRECTORY = True

# Following items are often useful when publishing

#DISQUS_SITENAME = ""
#GOOGLE_ANALYTICS = ""
