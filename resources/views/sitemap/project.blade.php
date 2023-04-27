<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($project as $projects)
        <sitemap>
            <loc>{{ route('project.single' , $projects->slug) }}</loc>
            <lastmod>{{$projects->updated_at}}</lastmod>
        </sitemap>
    @endforeach
</sitemapindex>
