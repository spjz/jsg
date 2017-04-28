<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Joe Doherty <io@spjz.uk>" />
    <meta name="keywords" content="" />
    <?= $this->tag->getTitle() ?>
    <?= $this->tag->stylesheetLink('css/app.css') ?>
    <?= $this->tag->stylesheetLink('bower_components/font-awesome/css/font-awesome.min.css') ?>
  </head>

  <body>

    <?= $this->getContent() ?>

    <?= $this->tag->javascriptInclude('bower_components/jquery/dist/jquery.js') ?>
    <?= $this->tag->javascriptInclude('bower_components/what-input/what-input.js') ?>
    <?= $this->tag->javascriptInclude('bower_components/foundation-sites/dist/foundation.js') ?>
    <?= $this->tag->javascriptInclude('js/app.js') ?>
  </body>
</html>
