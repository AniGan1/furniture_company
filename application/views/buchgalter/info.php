<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <h2>Сведения</h2>

        <form action="buchgalter/info" class="ms-auto me-auto" style="width: 600px;">
            <h3>Сведения об объемах выполненных работ за период</h3>
            <div class="d-flex gap-3 align-content-center">
                <div class="mb-2">
                    <label for="">Дата:</label>
                    <input type="date" name="date" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Работник:</label>
                    <select name="id_user" class="form-control">
                        <?php foreach ($workers as $worker): ?>
                            <option value="<?= $worker['id_user'] ?>"><?= $worker['fio'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-primary">Поиск</button>
                </div>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>№ договора</th>
                    <th>Наименование изделия</th>
                    <th>Наименование работы</th>
                    <th>Стоимость работ</th>
                    <th>Срок выполнения</th>
                    <th>Фактически выполнено</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($otchets as $otchet): ?>
                    <tr>

                        <td><?= $otchet['id'] ?></td>
                        <td><?= $otchet['title'] ?></td>
                        <td><?= $otchet['name'] ?></td>
                        <td><?= $otchet['total_price'] ?></td>
                        <td><?= $otchet['deadline'] ?></td>
                        <td><?= $otchet['done'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <form action="buchgalter/info" class="ms-auto me-auto" style="width: 500px;">
            <h3>Сведения об объемах выполненных мастерами работ с_____ по _____</h3>
            <div class="d-flex gap-3 align-content-center">
                <div class="mb-2">
                    <label for="">С:</label>
                    <input type="date" name="first_date" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">До:</label>
                    <input type="date" name="second_date" class="form-control">
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-primary">Поиск</button>
                </div>
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>№ Рабочего </th>
                    <th>Ф.И.О Рабочего</th>
                    <th>Стоимость работ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dones as $done): ?>
                    <tr>
                        <td><?= $done['id_user'] ?></td>
                        <td><?= $done['fio'] ?></td>
                        <td><?= $done['planned_cost'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-1"></div>
</div>