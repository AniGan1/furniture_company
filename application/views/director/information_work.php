<h3 class="text-center">Сведения о ходе выполнения работ</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">№ п/п</th>
      <th scope="col">Наименование работы</th>
      <th scope="col">Стоимость</th>
      <th scope="col">Ф.И.О Рабочего</th>
      <th scope="col">Срок выполнения</th>
      <th scope="col">Фактически выполнено</th>
    </tr>
  </thead>
  <tbody>
    <?php $total = 0;?>
    <?php foreach($works as $key=>$row){?>
      <?php $total += $row['planned_cost']; ?>
    <tr>
      <th scope="row"><?=($key+1)?></th>
      <th scope="row"><?=$row['name']?></th>
      <th scope="row"><?=$row['planned_cost']?></th>
      <th scope="row"><?=$row['fio']?></th>
      <th scope="row"><?=$row['planned_deadline']?></th>
      <th scope="row"><?=$row['actual_completion_date']?></th>
    </tr>
    <?php }?>
    <tr>
      <th colspan="2">Итого</th>
      <th align='right' colspan="4"><?=$total ?></th>
    </tr>
  </tbody>
</table>