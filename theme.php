<?php global $Wcms ?>
<!DOCTYPE HTML>
<html>
<head>
<title><?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?></title>
<meta name="title" content="<?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?>" />
<meta name="description" content="<?= $Wcms->page('description') ?>">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/themes/arc/assets/css/main.css?v<?php echo(rand(1,15));?><?php echo(rand(1,15));?>" />
<?= $Wcms->css() ?>
</head>
<body class="is-preload">
<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>
<div id="page-wrapper">
<div id="header">
<a href="/" id="logo"><img src="/data/files/logo.png" alt="<?= $Wcms->page('title') ?>"></a>
<nav id="nav">
<ul>
<?= $Wcms->menu() ?>
</ul>
</nav>
</div>
<section class="wrapper style1">
<div class="container">
<div id="content">
<article>
<header>
<h2><?= $Wcms->page('keywords') ?></h2>
<p><?= $Wcms->page('description') ?></p>
</header>
<?= $Wcms->page('content') ?>
</article>
</div>
</div>
</section>
<div id="footer">
<div class="container">
<div class="row">
<?= $Wcms->block('subside') ?>
</div>
</div>
<div class="copyright">
<?= $Wcms->footer() ?>
</div>
</div>
</div>
<?= $Wcms->js() ?>
</body>
</html>
