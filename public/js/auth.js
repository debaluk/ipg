// ajax login
$("#login").on("click", function(e) {
    e.preventDefault();
    $("#login").prop("disabled", true).text('Proses...')
    $("input").prop("readonly", true)
    // kirim data
    $.ajax({
        type: $("form").attr("method"),
        url: $("form").attr("action"),
        data: $("form").serialize(),
        success: function(response) {
            responValidasi(['login', 'Login'], ['username', 'password'], response);
        },
        error: (xhr, status, message) => {
            Swal.fire({
                icon: 'error',
                title: 'Oops',
                text: `${message}`
            })
            $("#login").prop("disabled", false).text('Login')
            $("input").prop("readonly", false)
        }
    });
});