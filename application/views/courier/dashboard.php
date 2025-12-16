<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <table class="table">
            <thead>
                <tr>
                    <th>№ заказа</th>
                    <th>ФИО</th>
                    <th>Наименование изделия</th>
                    <th>Статус</th>
                    <th>Взаимодействие</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dones as $done): ?>
                    <tr>
                        <td><?= $done['id']; ?></td>
                        <td><?= $done['fio']; ?></td>
                        <td><?= $done['title']; ?></td>
                        <td><?= $done['status']; ?></td>
                        <td><a href="courier/upgrdae/<?= $done['id']; ?>/В пути" class="btn btn-primary">В пути</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-1"></div>
</div>