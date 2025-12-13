<div class="row">
    <div class="col-1"></div>
    <div class="col-10">

        <form action="client/buy" method="post" class="ms-auto me-auto" style="width: 500px;">
            <h2>Оформление заказа</h2>
            <div class="mb-3">
                <label for="">Наименование изделия: <?= $product[0]['name']; ?></label>
                <input type="text" name="work_type_id" value="<?= $product[0]['id']; ?>" hidden>
            </div>
            <div class="mb-3">
                <label for="">Цена: <?= $product[0]['standard_cost']; ?> рублей</label>
                <input type="text" name="standard_cost" value="<?= $product[0]['standard_cost']; ?>" hidden>
            </div>
            <div class="mb-3">
                <label for="">Адрес: <?= $this->session->userdata['address'] ?></label>
            </div>
            <div class="mb-3">
                <label for="">Количество:</label>
                <input type="number" name="count" class="form-control" required>
            </div>
            <div class="ms-auto ms-auto">
                <button type="submit" class="btn btn-success">Заказать</button>
            </div>

        </form>
    </div>
    <div class="col-1"></div>
</div>