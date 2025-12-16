<form method="post" class="m-4">
    <select class="form-select mt-3" name="worker_id" aria-label="Default select example">
        <option selected>Выбрать работника</option>
        <?php foreach($users as $row){?>
        <option value="<?=$row['id_user']?>"><?=$row['fio']?></option>
        <?php }?>
    </select>
    <select class="form-select mt-3" name="contract_id" aria-label="Default select example">
        <option selected>Выбрать контракт</option>
        <?php foreach($contracts as $row){?>
        <option value="<?=$row['id']?>"><?=$row['id']?></option>
        <?php }?>
    </select>
    <select class="form-select mt-3" name="work_type_id" aria-label="Default select example">
        <option selected>Выбрать тип работы</option>
        <?php foreach($types as $row){?>
        <option value="<?=$row['id']?>"><?=$row['name']?></option>
        <?php }?>
    </select>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Стоимость работы</label>
        <input type="number" name="planned_cost" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Выбрать срок выполнения</label>
        <input type="date" name="planned_deadline" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Выбрать срок оконцания</label>
        <input type="date" name="actual_completion_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  <button type="submit" name="insert" class="btn btn-primary">Назначить</button>
</form>