<?php
//$data = file_get_contents('http://localhost/mvc/public/json/data_people_dummy.json');
//$people = json_decode($data, true);

//var_dump($people[0]["name"]);
//echo $people[0]["name"];
// var_dump($data['orang']);
?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <?= Flasher::flash(); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Create data
      </button>
      <ul class="list-group">
        <?php foreach ($data['orang'] as $o) : ?>

          <li class="list-group-item d-flex justify-content-between align-items-center">
            <?= $o['name']; ?>
            <a href="<?= BASEURL; ?>/orang/detail/<?= $o['id']; ?>" class="badge bg-primary text-decoration-none">detail</a>
          </li>

        <?php endforeach; ?>
      </ul>

    </div>
  </div>
</div>

<!-- modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Modal Title</h5>
        <button class="close" aria-label="Close" type="button" data-bs-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="button">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/orang/create" method="POST">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" autofocus>
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>