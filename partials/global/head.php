<?php
        $title_tag = $title_tag ?? "";
        $partial_css = $partial_css ?? "";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_url('styles/reset.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_url('styles/main.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_url('styles/partials/' . $partial_css . '.css'); ?>">
    <link rel="icon" sizes="16x16" type="image/svg+xml" href="<?php echo get_url("/images/favicon.svg");?>">
    <title><?php echo $title_tag;?></title>
    <script src="https://kit.fontawesome.com/0a2ba5e508.js" crossorigin="anonymous"></script>
</head>