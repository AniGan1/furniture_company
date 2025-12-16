<table class="table">
  <thead>
    <tr>
      <th scope="col">№ договора</th>
      <th scope="col">Наименование изделия</th>
      <th scope="col">Наименование материала</th>
      <th scope="col">Сколько используется</th>
      <th scope="col">Стоимость</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($materials as $row){?>
    <tr>
      <th scope="col"><?=$row['id']?></th>
      <th scope="col"><?=$row['title']?></th>
      <th scope="col"><?=$row['name']?></th>
      <th scope="col"><?=$row['stock_quantity']?></th>
      <th scope="col"><?=$row['estimated_cost']?></th>
    </tr>
    <?php }?>
  </tbody>
</table>