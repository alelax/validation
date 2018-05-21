$(document).ready(function() {

    var myForm = $('#myForm');

    myForm.submit(function(e) {
        var username = $('#username').val();

        if (
            username.length = 0
            || !username.includes('@')
            || !username.includes('.')
        ) {
            alert('Inserisci una mail corretta');

            return false;
        }

        var password = $('#password').val();

        if (password.length < 5) {
            alert('Inserisci una password di almeno 5 caratteri');

            return false;
        }

        return true;
    });

});
