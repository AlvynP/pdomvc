<div class="container">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h4 class="card-title"><?= $data['orang']['name']; ?></h4>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['orang']['address']; ?></h6>
      <p class="card-text"><?= $data['orang']['email']; ?></p>
      <a href="<?= BASEURL; ?>/orang" class="card-link badge bg-primary text-decoration-none">Back</a>
    </div>
  </div>
</div>