$(document).ready(function () {
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var name_tovar = button.data('name_tovar');
        var opisanie = button.data('opisanie');
        var name_category = button.data('name_category');
        var name_po = button.data('name_po');
        var name_vendor = button.data('name_vendor');
        var name_license = button.data('name_license');
        var price = button.data('price');
        var modal = $(this);
        modal.find('.modal-title').text(name_tovar);
        modal.find('#opisanie').text(opisanie);
        modal.find('#name_category').text('Категория: ' + name_category);
        modal.find('#name_po').text('Программное обеспечение: ' + name_po);
        modal.find('#name_vendor').text('Вендор: ' + name_vendor);
        modal.find('#name_license').text('Тип лицензий: ' + name_license);
        modal.find('#price').text('Стоимость товара: ' + price + ' руб.');
    })
});