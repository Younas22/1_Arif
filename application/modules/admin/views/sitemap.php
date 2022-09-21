<?php echo'<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc><?php echo base_url();?></loc>
        <priority>1.0</priority>
        <changefreq>daily</changefreq>
    </url>
 
 
    <!-- Sitemap -->
    <?php foreach($blog_category as $blog) { ?>
    <url>
        <loc><?php echo base_url()."blog/category/".$blog->category_title ?></loc>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
    </url>
    <?php } ?>

    <url>
        <loc><?php echo base_url('about-us'); ?></loc>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url('terms'); ?></loc>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url('privacy'); ?></loc>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url('contact'); ?></loc>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
    </url>


    <?php foreach($blog_details as $blog_detail => $blogs) { ?>
    <url>
        <loc><?php echo base_url()."blog/details/".str_replace(" ","-",$blogs['title']); ?></loc>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
    </url>
    <?php } ?>

    
    <url>
        <loc><?php echo base_url('blog/details/faq?'); ?></loc>
        <priority>0.5</priority>
        <priority>daily</priority>
    </url>
 
 
</urlset>

