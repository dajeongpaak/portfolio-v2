<?php
        $title_tag = $title_tag ?? "";
        $partial_css = $partial_css ?? "";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title_tag;?></title>
    <meta name="robots" content="all" />
    <meta name="description" content="Front-end developer who designs and develops immersive web experience that fully engages users.">
    <meta name="author" content="Dajeong Park">
    <meta name="keywords" content="Developer, Designer, front-end, Vancouver">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   

    <meta property="og:title" content="Dajeong Park | Front-end developer portfolio" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://dajeongpark.com" />
    <meta property="og:image" content="<?php echo get_url("/images/main-logo.png"); ?>"/>

    <link rel="stylesheet" href="<?php echo get_url('styles/reset.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_url('styles/main.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_url('styles/partials/header.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_url('styles/partials/footer.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_url('styles/partials/' . $partial_css . '.css'); ?>">
    <link rel="icon" sizes="16x16" type="image/svg+xml" href="<?php echo get_url("/images/favicon.svg");?>">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6WX1XL9Z33"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-6WX1XL9Z33');
    </script>
</head>