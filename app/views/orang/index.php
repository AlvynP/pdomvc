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