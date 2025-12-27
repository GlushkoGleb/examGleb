<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10"><br>
                <div class="card">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <form method="post" action="Main/autch_add">
                                    <div class="text-center">
                                        <h1>Авторизация</h1>
                                    </div>
                                    <div class="mb-3">
                                        <label for="login" class="form-label">Логин</label>
                                        <input type="text" class="form-control" name="login" placeholder="Введите логин" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Пароль</label>
                                        <input type="password" class="form-control" name="password" placeholder="Введите пароль" required>
                                    </div>
                                    <div class="d-grid gap-2 col-3 mx-auto">
                                        <button type="submit" class="btn btn-warning" style="width: 12rem;">Войти</button>
                                    </div><br>
                                </form>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</main>