<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <h2 class="h2-title">Оформление заказа</h2>
                    </div>
                    <form method="post" action="client/zakaz">
                        <div class="row mt-3">
                            <div class="col-3"></div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="Input1" class="form-label">Название товара : <?= $id_tovar ?></label>
                                    <input type="hidden" name="id_tovar" value="<?= $id_tovar ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="data_zakaz" class="form-label">Дата заказа</label>
                                    <input type="date" class="form-control" name="data_zakaz">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Адрес</label>
                                    <input type="address" class="form-control" name="address">
                                </div>
                                <div class="mb-3">
                                    <label for="sposob_oplaty" class="form-label">Способ оплаты</label>
                                    <input type="sposob_oplaty" class="form-control" name="sposob_oplaty">
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-secondary mb-3">Оформить заказ</button>
                                </div>
                            </div>
                            <div class="col-3"></div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>
</main>