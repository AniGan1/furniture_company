<table class="table">
  <thead>
    <tr>
      <th scope="col">№ договора</th>
      <th scope="col">Наименование изделия</th>
      <th scope="col">Наименование работы</th>
      <th scope="col">Срок выполнения</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($contra_works as $row){?>
    <tr>
      <th scope="col"><?=$row['id']?></th>
      <th scope="col"><?=$row['title']?></th>
      <th scope="col"><?=$row['name']?></th>
      <th scope="col"><?=$row['actual_completion_date']?></th>
    </tr>
    <?php }?>
  </tbody>
</table>