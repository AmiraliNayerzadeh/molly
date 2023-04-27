<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($article as $articles)
        <sitemap>
            <loc>{{ route('blog.single' , $articles->slug) }}</loc>
            <lastmod>{{$articles->updated_at}}</lastmod>
        </sitemap>
    @endforeach
</sitemapindex>
