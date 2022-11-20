<?php
//$data = file_get_contents('http://localhost/mvc/public/json/data_people_dummy.json');
//$people = json_decode($data, true);

//var_dump($people[0]["name"]);
//echo $people[0]["name"];
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
        <?php foreach ($data['people'] as $p) : ?>
          <tbody>
            <tr>
              <td><?= $p["id"]; ?></td>
              <td><?= $p['name']; ?></td>
              <td><?= $p['address']; ?></td>
              <td><?= $p['email']; ?></td>
            </tr>
          </tbody>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>