<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['assets/css/index.css', '@auto']) ?>
<link href="https://fonts.googleapis.com/css?family=Lato:700|Source+Sans+Pro" rel="stylesheet">

</head>
<body>

  <div class="page">
    <header class="header">
      <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

      <nav id="menu" class="menu">
        <?php foreach ($site->children()->listed() as $item): ?>
        <?= $item->title()->link() ?>
        <?php endforeach ?>
      </nav>
    </header>

