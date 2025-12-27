<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="h2-title">Личный кабинет</h2>
                    </div>
                    <table class="table table-hover">
                        <tr class="table-secondary">
                            <th>Номер заказа</th>
                            <th>Название товара</th>
                            <th>Вес</th>
                            <th>Стоимость</th>
                            <th>Дата заказа</th>
                            <th>Адрес</th>
                            <th>Способ оплаты</th>
                            <th>Статус</th>
                        </tr>
                        <?php
                        foreach ($zakaz as $row) {
                            echo '
                        <tr><td>' . $row['id_zakaz'] .
                                '</td><td>' . $row['name_tovar'] .
                                '</td><td>' . $row['ves'] .
                                '</td><td>' . $row['price'] .
                                '</td><td>' . $row['data_zakaz'] .
                                '</td><td>' . $row['address'] .
                                '</td><td>' . $row['sposob_oplaty'] .
                                '<td><a href="client/delete/' . $row['id_zakaz'] . '"><button type="button" class="btn btn-danger">Отменить</button></a></td>
                        </tr>';
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>