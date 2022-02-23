<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="USIL">
<meta name="description" content="<?php echo $general['description']; ?>">

<title><?php echo $general['title']; ?></title>

<?php // MAIN CSS ?>
<link rel="stylesheet" href="css/main.min.css<?=$v_?>">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="<?php echo $social['twitter']; ?>">
<meta name="twitter:title" content="<?php echo $general['title']; ?>">
<meta name="twitter:description" content="<?php echo $general['description']; ?>">
<meta name="twitter:creator" content="<?php echo $social['twitter']; ?>L">
<meta name="twitter:image" content="<?php echo $general['social_img_path']; ?>">

<meta property="og:title" content="<?php echo $general['title']; ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $general['base_url']; ?>" />
<meta property="og:image" content="<?php echo $general['social_img_path']; ?>" />
<meta property="og:description" content="<?php echo $general['description']; ?>" />
<meta property="og:site_name" content="<?php echo $social['facebook']; ?>" />
<meta property="fb:admins" content="126306088056175" />

<!-- Favicon-->
<link rel="shortcut icon" href="<?php echo $img_path; ?>favicon/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo $img_path; ?>favicon/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $img_path; ?>favicon/apple-icon-57x57.png" async>
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $img_path; ?>favicon/apple-icon-60x60.png" async>
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $img_path; ?>favicon/apple-icon-72x72.png" async>
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $img_path; ?>favicon/apple-icon-76x76.png" async>
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $img_path; ?>favicon/apple-icon-114x114.png" async>
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $img_path; ?>favicon/apple-icon-120x120.png" async>
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $img_path; ?>favicon/apple-icon-144x144.png" async>
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $img_path; ?>favicon/apple-icon-152x152.png" async>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $img_path; ?>favicon/apple-icon-180x180.png" async>
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $img_path; ?>favicon/android-icon-192x192.png" async>
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $img_path; ?>favicon/favicon-32x32.png" async>
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $img_path; ?>favicon/favicon-96x96.png" async>
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $img_path; ?>favicon/favicon-16x16.png" async>
<?php /* <link rel="manifest" href="<?php echo $img_path; ?>favicon/manifest.json"> */?>
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo $img_path; ?>favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#0e3a6f">

<?php // FAVICON ?>
<link rel="shortcut icon" type="image/png" href="images/favicon/favicon.ico">

<?php // GTM ?>
<?php include "i_GTM.php";?>