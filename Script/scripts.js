$(document).ready(function () {
    $('.sidenav').sidenav();
    const proxyurl = "https://cors-anywhere.herokuapp.com/";

    $("#contact__form").submit(function (event) {
        event.preventDefault();
        let email = $("#email").val();
        let password = $("#password").val();

        if(email && password){
            $("#api_conf").html("<p class='green-text'>Please fill in all fields ...</p>");
        }
        $.ajax({
            method: "POST",
            url: proxyurl +"https://blooming-meadow-78473.herokuapp.com/api/auth/",
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            data: JSON.stringify({ email: email, password: password }),
            beforeSend: function (data) {
                $("#api_conf").html("<p class='green-text'>Retrieving Data (may take a few seconds)...</p>");
                $(".resume-details").hide();
            },
            success: function (response) {
                $("#api_conf").html("<p class='green-text'>Successfully Retrieved Data</p>");
                $.ajax({
                    method: "GET",
                    url: proxyurl+"https://blooming-meadow-78473.herokuapp.com/api/resume/",
                    headers: { "x-auth-token": response.token },
                    dataType: "json",
                    contentType: "application/json; charset=utf-8",
                    success: function(response) {
                      var str = JSON.stringify(response, null, 2);
                      $(".resume-details").show();
                      $(".resume-details").html(str);
                    }
                  });
            },
            error: function (response) {
                $(".resume-details").hide();
                $("#api_conf").html("<p class='red-text'>Problem accessing data from the API, check credentials and try again.");
            }
        });
    });
});

