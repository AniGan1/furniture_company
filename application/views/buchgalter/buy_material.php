<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <form action="buchgalter/buy_material" class="ms-auto me-auto" style="width: 400px;">
            <?php foreach ($material as $mat): ?>
                <div class="mb-3">
                    <label for="">Наименование материала: <?= $mat['name'] ?></label>
                </div>
                <div class="mb-3">
                    <label for="">Количество запасов: <?= $mat['stock_quantity'] ?> </label>
                </div>
            <?php endforeach; ?>
            <div class="mb-3">
                <label for="">Количество закупить: </label>
                <input type="number" name="quantity" class="form-control" min="10">
            </div>
            <button type="submit" class="btn btn-success">Закупить</button>
        </form>
    </div>
    <div class="col-1"></div>
</div>