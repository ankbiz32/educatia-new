<?php echo '<?xml version="1.0" encoding="UTF-8"?>';
    $mod=date('Y-m-d');  
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

        <url>
            <loc><?=base_url()?></loc>
            <lastmod><?=$mod?></lastmod>
            <priority>1.00</priority>
        </url>
        <url>
            <loc><?=base_url()?>about</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>training</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>gallery</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>courses</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>events</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>contact</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>privacy</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>

    <?php  if(!empty($data)){  
    foreach($data as $d){?>
        <url>
            <loc><?=base_url('course/').$d->id.'/'.$d->slug?>/</loc>
            <priority>0.80</priority>
            <changefreq>daily</changefreq>
        </url>
    <?php } }?>

    <?php if(!empty($data2)){ 
    foreach($data2 as $d2){?>
        <url>
            <loc><?=base_url('news/').$d2->id.'/'.$d2->slug?>/</loc>
            <priority>0.80</priority>
            <changefreq>daily</changefreq>
        </url>
    <?php } }?>


</urlset>


