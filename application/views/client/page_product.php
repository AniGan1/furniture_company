<div class="row">
    <div class="col-1"></div>
    <div class="col-10">

        <form action="client/buy" method="post" class="ms-auto me-auto" style="width: 500px;">
            <h2>Оформление заказа</h2>
            <div class="mb-3">
                <label for="">Наименование изделия: <?= $product[0]['title']; ?></label>
                <input type="text" name="id_good" value="<?= $product[0]['id_good']; ?>" hidden>
            </div>
            <div class="mb-3">
                <label for="">Цена: <?= $product[0]['price']; ?> рублей</label>
                <input type="text" name="standard_cost" value="<?= $product[0]['price']; ?>" hidden>
            </div>
            <div class="mb-3">
                <label for="">Количество:</label>
                <input type="number" name="count" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="">Дата окончания:</label>
                <input type="date" name="planned_deadline" class="form-control" required>
            </div>
            <div class="ms-auto ms-auto">
                <button type="submit" class="btn btn-success">Заказать</button>
            </div>

        </form>
    </div>
    <div class="col-1"></div>
</div>