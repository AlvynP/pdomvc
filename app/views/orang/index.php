<?php
//$data = file_get_contents('http://localhost/mvc/public/json/data_people_dummy.json');
//$people = json_decode($data, true);

//var_dump($people[0]["name"]);
//echo $people[0]["name"];
// var_dump($data['orang']);
?>
<div class="container">
  <div class="col">
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Adress</th>
            <th>Email</th>
          </tr>
        </thead>
        <?php foreach ($data['orang'] as $o) : ?>

          <tbody>
            <tr>
              <td><?= $o["id"]; ?></td>
              <td><?= $o['name']; ?></td>
              <td><?= $o['address']; ?></td>
              <td><?= $o['email']; ?></td>
            </tr>
          </tbody>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>