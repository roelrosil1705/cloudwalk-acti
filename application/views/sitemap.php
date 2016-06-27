<?= '<?xml version="1.0" encoding="UTF-8" ?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= base_url();?></loc>
        <priority>1.0</priority>
    </url>

<!--    print_r($data);-->

    <!-- My code is looking quite different, but the principle is similar -->
    <?php //foreach($data as $url) { ?>
        <url>
            <loc>http://activationsadvertising.com</loc>
            <priority>0.5</priority>
        </url>
    <?php //} ?>
    <url>
        <loc>http://activationsadvertising.com/index.php/newspage</loc>
        <priority>0.5</priority>
    </url>

</urlset>