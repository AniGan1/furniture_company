<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <h2>Корзина</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>№Заказа</th>
                    <th>Дата создания</th>
                    <th>Срок выполнения</th>
                    <th>Фактически выполнено</th>
                    <th>Наименование изделия</th>
                    <th>Количество</th>
                    <th>Стоимость</th>
                    <th>Статус</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contracts as $contract): ?>
                    <tr>
                        <td><?= $contract['id'] ?></td>
                        <td><?= $contract['contract_date'] ?></td>
<<<<<<< HEAD
                        <td><?= $contract['deadline'] ?></td>
                        <td><?= $contract['done'] ?></td>
                        <td><?= $contract['id_good'] ?></td>
=======
                        <td></td>
                        <td><?= $contract['work_type_id'] ?></td>
>>>>>>> client
                        <td><?= $contract['count'] ?></td>
                        <td><?= $contract['total_price'] ?></td>
                        <td><?= $contract['status'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-1"></div>
</div>