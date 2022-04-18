<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CF Bot</title>


    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"
        integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP BUNDLE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"
        integrity="sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
</head>

<body>

    <h1 class="text-center">CF Bot Bruteforcer</h1>

    <br><br>
    <div class="container d-flex justify-content-center">
        <button type="submit" class="btn btn-primary" onclick="start()">Start</button>
    </div>
   

    <script>
        var start = () => {
            var data = { user_id: 'testing', user_pw: encodeURIComponent("testing"), returnUrl: encodeURIComponent('https://cf.gameclub.ph/'), isCaptcha: '1' };
            $.ajax({
                url: "https://www.gameclub.ph/Login/LoginAct",
                type: "POST",
                data: data,
                success: function (e) {
                    Result = parseInt(e.code);

                    if (Result == 1) {	// success
                        alert("Username: " + data.user_id + "\nPassword: " + data.user_pw);
                    }
                    else {
                        alert(Result);
                    }
                },
                error: function (xhr, status, error) {
                    console.log(error);
                    alert(xhr.responseText);
                    return;
                }
            });
        }

    </script>
</body>

</html>