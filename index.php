<?php
/**
 * Created by PhpStorm.
 * User: ssandyy
 * Date: 29-7-21
 * Time: 10:24 AM
 */

?>

<html>
<head>
    <title>Ajax learning</title>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>

<form id="contactForm1" action="#" method="post">
    <input type="text" id="fname" name="fname" placeholder="First Name"><br><br>
    <input type="text" id="lname" name="lname" placeholder="Last name:"><br><br>
    <input type="button" id="submitted" value="Submit">

</form>
<p id="success"></p>
<h2 id="demo" style="color: greenyellow;"> Successfully Submitted..!!</h2>

<script>
    $("#demo").hide();
    $("#submitted").on('click', function () {
        $.ajax({
            'type': 'GET',
            'success': function () {
                document.getElementById("success").innerHTML = 'Successfully submitted..!';
                $("#demo").show();
                setTimeout(function () {
                    $("#demo").hide();
                }, 4000);
            },
            'error': function (request, error) {
                alert("Request: " + JSON.stringify(request));
            }
        })
    });
</script>

</body>
</html>
