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
      <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary mb-2 viewCreateData" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg> Create Data
          </button>
        </div>
        <div class="col text-end">
          <form action="<?= BASEURL; ?>/orang/search" method="post">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="search" name="keyword" id="keyword" autocomplete="off">
              <div class="input-group-append">
                <button class="btn btn-secondary" type="submit" id="buttonSearch"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                  </svg></button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <!-- Button trigger modal -->

      <ul class="list-group">

        <?php foreach ($data['orang'] as $o) : ?>

          <li class="list-group-item">
            <div class="row ">
              <div class="col ">
                <?= $o['name']; ?>
              </div>

              <div class="col gap-2 text-end">
                <a href="<?= BASEURL; ?>/orang/detail/<?= $o['id']; ?>" class="badge bg-primary text-decoration-none">detail</a>
                <a href="<?= BASEURL; ?>/orang/edit/<?= $o['id']; ?>" class="badge bg-warning text-decoration-none viewModalEdit" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $o['id']; ?>">edit</a>
                <a href="<?= BASEURL; ?>/orang/delete/<?= $o['id']; ?>" class="badge bg-danger text-decoration-none" onclick="return confirm('are you sure?')">delete</a>
              </div>
            </div>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Create Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/orang/create" method="POST">
          <input type="hidden" name="id" id="id">
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
            <input type="text" name="email" id="email" class="form-control" placeholder="example@example.com">
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