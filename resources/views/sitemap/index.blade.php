<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <sitemap>
        <loc>{{ route('sitemap.static') }}</loc>
        <lastmod>{{\Carbon\Carbon::now()->subWeek()}}</lastmod>
    </sitemap>

    <sitemap>
        <loc>{{ route('sitemap.service') }}</loc>
        <lastmod>{{\Carbon\Carbon::now()}}</lastmod>
    </sitemap>

    <sitemap>
        <loc>{{ route('sitemap.article') }}</loc>
        <lastmod>{{\Carbon\Carbon::now()}}</lastmod>
    </sitemap>

    <sitemap>
        <loc>{{ route('sitemap.project') }}</loc>
        <lastmod>{{\Carbon\Carbon::now()}}</lastmod>
    </sitemap>

</sitemapindex>
