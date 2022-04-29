<?php
$PAGE_TITLE = 'ページタイトル';
$PAGE_URL = '/path/to/page';
$PAGE_DESCRIPTION = 'ページ概要';
$PAGE_OG_IMAGE = '/path/to/og-image';
$COMMON_SITE_NAME = 'サイト名';
?>
<!-- ▼▼▼ OGP ▼▼▼ -->
<meta property="og:locale" content="ja_JP">
<meta property="og:title" content="<?php echo $PAGE_TITLE; ?>">
<meta property="og:type" content="article">
<!-- <meta property="og:url" content="<?php echo $PAGE_URL; ?>"> -->
<meta property="og:description" content="<?php echo $PAGE_DESCRIPTION; ?>">
<!-- <meta property="og:image" content="<?php echo $PAGE_OG_IMAGE; ?>"> -->
<meta property="og:site_name" content="<?php echo $COMMON_SITE_NAME; ?>">
<!-- ▲▲▲ OGP ▲▲▲ -->