<?php
require_once( dirname(__FILE__) . '/plugin/install-prep.php' );
?>
<!doctype html>
<html>
<head>
<title>Installation Preparation for WordPress Installation Bundles</title>
</head>
<style>
body {
	font-family: sans-serif;
    padding: 10px;
}
.wrap {
    width: 730px;
    margin: 0 auto;
    padding: 10px 30px;
    border: 1px solid #c8c8c8;
    border-radius: 5px;
    min-height: 500px;
}
a {
    text-decoration: none;
}
</style>
<body>
<div class="wrap">
<h4>WordPress Installation Bundles Packaging Script</h4>
<!-- <p><strong>Step 0: Empty Receiving Folder</strong></p>
<p><button><a href="?install-prep&key=ac3k&action=empty">Empty Files</a></button></p>
<p>You must do this manually.</p>-->
<p><strong>Step 1: Copy Files</strong></p>
<p><button><a href="?install-prep&key=ac3k&action=copy">Copy Files</a></button></p>
<p><strong>Step 2: Copy .htaccess</strong></p>
<p><button><a href="?install-prep&key=ac3k&action=htaccess">Copy .htaccess</a></button></p>
<p><strong>Step 3: Clean Files</strong></p>
<p><button><a href="?install-prep&key=ac3k&action=clean">Clean Files</a></button></p>
<p><strong>Step 4: Zip Files</strong></p>
<p><button><a href="?install-prep&key=ac3k&action=archive">Zip Files</a></button></p>
<p><strong>Step 5: Run Report</strong></p>
<p><button><a href="?install-prep&key=ac3k&action=run-report">Run Report</a></button></p>
<p><strong>Run the Whole Show ... Silently</strong></p>
<p><button><a href="?install-prep&key=ac3k&action=silent-run">Silent Run</a></button></p>
</div>
</body>
</html>
