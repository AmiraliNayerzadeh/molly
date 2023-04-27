<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ route('home') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
        <lastmod>{{\Carbon\Carbon::now()->subWeek()}}</lastmod>
    </url>

    <url>
        <loc>{{ route('blog.archive') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
        <lastmod>{{\Carbon\Carbon::now()->subWeek()}}</lastmod>
    </url>

    <url>
        <loc>{{ route('service.main') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
        <lastmod>{{\Carbon\Carbon::now()->subWeek()}}</lastmod>
    </url>

    <url>
        <loc>{{ route('project.index') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
        <lastmod>{{\Carbon\Carbon::now()->subWeek()}}</lastmod>
    </url>

    <url>
        <loc>{{ route('Counseling') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
        <lastmod>{{\Carbon\Carbon::now()->subWeek()}}</lastmod>
    </url>

</urlset>
