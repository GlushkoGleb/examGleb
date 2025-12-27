<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          <div class="text-center">
            <h2 class="h2-title">Товары</h2>
          </div>
          <div class="row">
            <div class="col">
              <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                foreach ($tovar as $row) {
                  echo '
                  <div class="col">
                  <div class="card">
                  <img src="img/' . $row['photo'] . '" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h3 class="card-title">' . $row['name_tovar'] . '</h3>
                  <h4 class="card-title">' . $row['ves'] . '</h4>
                  <small class="text-body-secondary">' . $row['price'] . ' рублей</small>
                  <div class="text-end">
                  <a href="client/zakaz/' . $row['id_tovar'] . '" class="btn btn-secondary">Оформить заказ</a>
                  </div>
                  </div>
                  </div>
                  </div>
                     ';
                }
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </section>
</main>