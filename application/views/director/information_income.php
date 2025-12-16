<h3 class="text-center">Сведения о доходах за период</h3>

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
      <th scope="col">№ договора</th>
      <th scope="col">Наименование изделия</th>
      <th scope="col">Заказчик</th>
      <th scope="col">Срок выполнения</th>
      <th scope="col">Выполнено работ на сумму</th>
      <th scope="col">Оплачено</th>
    </tr>
  </thead>
  <tbody>
    
      <?php foreach($contracts as $row){?>
        <tr>
      <th scope="row"><?=$row['id']?></th>
      <th scope="row"><?=$row['product_name']?></th>
      <th scope="row"><?=$row['fio']?></th>
      <th scope="row"><?=$row['deadline']?></th>
      <th scope="row"><?=$row['planned_cost']?></th>
      <th scope="row"><?=$row['amount'] ?></th>
      </tr>
      <?php }?>
    
  </tbody>
</table>