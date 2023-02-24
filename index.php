<?php
include('./modules/config.php');
$reqPage = $currentPage.'.php';
$_404 = false;
include('./modules/header.php');

$allFiles = scandir('./pages');
$files = array_diff($allFiles, array('.', '..'));
foreach($files as $file) {

    // Test if the requested page is a real page


    // Test if page = in page dir.
    if (in_array($reqPage,$files)){
        include('./pages/'.$reqPage);
        break;
    } else {
        include('./pages/page_404.php');
        $_404 = true;
        break;
    }
}
echo '';
if (!$_404)
    include('./modules/footer.php');
