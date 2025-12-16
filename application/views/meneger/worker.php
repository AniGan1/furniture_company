<div class="row">
    <div class="col-lg-12">
        <h2>Рабочий</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">тип работы</th>
                    <th scope="col">запланированная стоимость</th>
                    <th scope="col">запланированный срок</th>
                    <th scope="col">идентификатор работника</th>
                    <th scope="col">фактическая_дата_завершения</th>
                    <th scope="col">статус</th>
                    <th scope="col">действие</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($work_selects as $row): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['work_type_id'] ?></td>
                        <td><?= $row['planned_cost'] ?></td>
                        <td><?= $row['planned_deadline'] ?></td>
                        <td><?= $row['worker_id'] ?></td>
                        <td><?= $row['actual_completion_date'] ?></td>
                        <td><?= $row['status'] ?></td>
                        <td>
                            <form method="post" action="<?= site_url('meneger/update_status') ?>">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>" />
                                <select name="status" class="form-control mb-2">
                                    <option value="Назначена" <?= $row['status'] == 'Назначена' ? 'selected' : '' ?>>Назначена
                                    </option>
                                    <option value="В работе" <?= $row['status'] == 'В работе' ? 'selected' : '' ?>>В работе
                                    </option>
                                    <option value="Выполнена" <?= $row['status'] == 'Выполнена' ? 'selected' : '' ?>>Выполнена
                                    </option>
                                    <option value="Принят" <?= $row['status'] == 'Принят' ? 'selected' : '' ?>>Принят</option>
                                </select>
                                <button type="submit" class="btn btn-primary">Изменить</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>