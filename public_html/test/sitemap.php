<?php
header("Content-Type: application/xml; charset=utf-8");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
$base_url = "https://test.dm110.jp";
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__));
foreach ($files as $file) {
    if ($file->isFile() && preg_match("/\.(php|html)$/", $file->getFilename())) {
        $path = str_replace(__DIR__, "", $file->getPathname());
        $path = str_replace("\\", "/", $path);
        if (preg_match("/(inc|__|vendor|_notes|common|css|js|images)/i", $path)) continue;
        $url = $base_url . $path;
        $url = str_replace("index.php", "", $url);
        $url = str_replace("index.html", "", $url);
        echo "  <url>\n    <loc>" . htmlspecialchars($url) . "</loc>\n  </url>\n";
    }
}
echo "</urlset>\n";
?>