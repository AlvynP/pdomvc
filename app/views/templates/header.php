<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['title']; ?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/datatable/datatables.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a href="<?= BASEURL; ?>" class="navbar-brand">AlvynPapalia|</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-expanded="false" aria-controls="navbarNavAltMarkup" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a href="<?= BASEURL; ?>" class="nav-item nav-link">Home</a>
          <a href="<?= BASEURL; ?>/people" class="nav-item nav-link">Json</a>
          <a href="<?= BASEURL; ?>/orang" class="nav-item nav-link">Database</a>
          <a href="<?= BASEURL; ?>/about" class="nav-item nav-link">About</a>
        </div>
      </div>
    </div>
  </nav>