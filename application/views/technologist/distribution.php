<h3 class="text-center">Сведения о выпоненых работах</h3>

<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите начальную дату</label>
    <input type="date" name="date_start"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите окончательную дату</label>
    <input type="date" name="date_end" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="sub" class="btn btn-primary">Поискать</button>
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">№ п/п</th>
      <th scope="col">Наименование изделия</th>
      <th scope="col">Наименование работы</th>
      <th scope="col">Стоимость</th>
      <th scope="col">Срок выполнения</th>
      <th scope="col">Фактически выполнено</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($workers as $row){?>
    <tr>
      <th scope="col"><?=$row['id']?></th>
      <th scope="col"><?=$row['title']?></th>
      <th scope="col"><?=$row['name']?></th>
      <th scope="col"><?=$row['planned_cost']?></th>
      <th scope="col"><?=$row['planned_deadline']?></th>
      <th scope="col"><?=$row['actual_completion_date']?></th>
    </tr>
    <?php }?>
  </tbody>
</table>