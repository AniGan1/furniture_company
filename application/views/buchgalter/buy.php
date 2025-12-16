<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <h2>Закупка ьматериалов</h2>
        <table class="table">
            <thead>
                <tr>
                    <td>Наименование</td>
                    <td>Количество запасов</td>
                    <td>ВЗаимодействие</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materials as $material): ?>
                    <tr>
                        <td><?= $material['name'] ?></td>
                        <td><?= $material['stock_quantity'] ?></td>
                        <td><a href="buchgalter/buy_material/<?= $material['id'] ?>" class="btn btn-primary">Закупить</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <form action="" method="post" style="width: 400px;" class="ms-auto meauto">

        </form>
    </div>
    <div class="col-1"></div>
</div>