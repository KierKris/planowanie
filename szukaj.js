$(document).ready(function() {
    szukajKlienta(); // Wywołaj na początku, aby załadować wszystkie rekordy
});
function szukajKlienta() {
    var inputSzukaj = $('#szukaj').val();
    $.ajax({
        url: 'szukaj.php',
        type: 'GET',
        data: {szukaj: inputSzukaj},
        success: function(response) {
            $('#wynikiWyszukiwania').html(response);
        }
    });
}