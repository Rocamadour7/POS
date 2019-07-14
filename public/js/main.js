$('#productsModal').on('hidden.bs.modal', function (e) {
    $('#productsSelect').val("");
    $('#productsSelect').removeClass('is-invalid');
    $('#quantity').removeClass('is-invalid');
    $('#quantity').val('');
    $('#quantity').prop('disabled', true);
});

function addProduct() {
    var form = document.getElementById('addProductForm');

    if (!form.checkValidity()) {
        if (!$('#productsSelect').val()) $('#productsSelect').addClass('is-invalid');
        if (!$('#quantity').val()) $('#quantity').addClass('is-invalid');
        return;
    }

    var productJson = JSON.parse($('#productsSelect').val());
    var id = productJson.id;
    var name = $('#productsSelect option:selected').text();
    var description = productJson.description;
    var quantity = parseInt($('#quantity').val());
    var price = parseFloat(productJson.price);
    var total = quantity * price;

    $('#productsTable tbody').append('<tr><td>' + id + '</td><td>' + name + '</td><td>' + description + '</td><td>' + quantity + '</td><td>' + price.toFixed(2) + '</td><td class="total">' + total.toFixed(2) + '</td><td onclick="removeProduct(this)">&times;</td></tr>');

    calculateTotal();

    $('#productsModal').modal('hide');
}

function removeProduct(e) {
    $(e).parent().remove();

    calculateTotal();
}

function enableQuantity() {
    $('#productsSelect').removeClass('is-invalid');
    $('#quantity').prop('disabled', false);
}

function calculateTotal() {
    var total = 0;
    $('.total').each(function () {
        total += parseFloat(this.innerText);
    });

    $('#total').text('$ ' + total.toFixed(2));
}