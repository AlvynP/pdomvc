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

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>">AlvynPapalia|</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link <?= ($data['title'] === 'Home') ? 'active' : '' ?>" href="<?= BASEURL; ?>">Home</a>
          <a class="nav-link <?= ($data['title'] === 'Data People') ? 'active' : '' ?>" href="<?= BASEURL; ?>/people">Json</a>
          <a class="nav-link <?= ($data['title'] === 'Data Orang') ? 'active' : '' ?>" href="<?= BASEURL; ?>/orang">Database</a>
          <a class="nav-link <?= ($data['title'] === 'About') ? 'active' : '' ?>" href="<?= BASEURL; ?>/about">About</a>
          <!-- <a class="nav-link disabled">Disabled</a> -->
        </div>
      </div>
    </div>
  </nav>