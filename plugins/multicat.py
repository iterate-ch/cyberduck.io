"""Allow articles in several categories.

Pelican supports a single Category per article. Posts may list additional
categories in a `Categories: A, B` metadata field; this plugin adds them to
the category listings and exposes `article.all_categories` to templates.
"""
from pelican import signals
from pelican.urlwrappers import Category


def add_categories(generator):
    by_slug = {c.slug: (c, list(articles)) for c, articles in generator.categories}
    for article in generator.articles:
        names = [n.strip() for n in str(getattr(article, 'categories', '')).split(',') if n.strip()]
        found = []
        for name in names:
            slug = Category(name, generator.settings).slug
            if slug not in by_slug:
                by_slug[slug] = (Category(name, generator.settings), [])
            cat, articles = by_slug[slug]
            if article not in articles:
                articles.append(article)
            found.append(cat)
        if not found and getattr(article, 'category', None):
            found = [article.category]
        article.all_categories = found
    generator.categories = sorted(
        ((c, sorted(a, key=lambda x: x.date, reverse=True)) for c, a in by_slug.values()),
        key=lambda t: t[0].name)


def register():
    signals.article_generator_finalized.connect(add_categories)
