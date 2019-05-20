$(document).ready(function () {
    $('.sidenav').sidenav();
    $("#contact__form").submit(function (event) {
        event.preventDefault();
        let name = $("#contact__name").val();
        let email = $("#contact__email").val();
        let message = $("#contact__message").val();
        $.ajax({
            url: "functions/sendEmail.php",
            method: "POST",
            data: {
                email: email,
                name: name,
                message: message
            },
            beforeSend: function (data) {
                $("#email_conf").html("<p class='green-text'>Sending...</p>");
            },
            success: function (response) {
                $("#email_conf").html("<p class='green-text'>Email sent successfully, thank you for your time !");
            },
            error: function (response) {
                $("#email_conf").html("<p class='red-text'>problem sending email, please try again.");
            }
        });
    });

});