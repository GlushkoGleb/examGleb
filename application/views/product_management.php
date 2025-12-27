<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="text-center">
                        <h2 class="h2-title">Управление товарами</h2>
                    </div>
                    <table class="table table-hover">
                        <tr class="table-secondary">
                            <th>Номер товара</th>
                            <th>Фото</th>
                            <th>Название товара</th>
                            <th>Вес</th>
                            <th>Стоимость</th>
                            <th>Действие</th>
                        </tr>
                        <?php
                        foreach ($tovar as $row) {
                            echo '
                        <tr><td>' . $row['id_tovar'] .
                                '</td><td>' . $row['photo'] .
                                '</td><td>' . $row['name_tovar'] .
                                '</td><td>' . $row['ves'] .
                                '</td><td>' . $row['price'] .
                                '<td><a href="manager/delete/' . $row['id_tovar'] . '"><button type="button" class="btn btn-danger">Удалить</button></a></td>
                        </tr>';
                        }
                        ?>
                    </table>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <h2 class="h2-title">Добавить товар</h2>
                    </div>
                    <form method="post" action="manager/add_tovar">
                        <div class="mb-3">
                            <label for="Input1" class="form-label">Фото</label>
                          <input type="file" id="photo" name="photo" accept="image/*" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="Input1" class="form-label">Название товара</label>
                            <input type="text" class="form-control" name="name_tovar">
                        </div>
                        <div class="mb-3">
                            <label for="Input2" class="form-label">Вес</label>
                            <input type="number" class="form-control" name="ves">
                        </div>
                        <div class="mb-3">
                            <label for="Input3" class="form-label">Стоимость товара</label>
                            <input type="text" class="form-control" name="price">
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-secondary mb-3">Добавить</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>
</main>