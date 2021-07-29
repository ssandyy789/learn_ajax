$.ajax({
    type: "POST",
    url: "index.php",
    data: formData,
    dataType: "json",
    encode: true,
}).done(function (data) {
    console.log(data);

    if (!data.success) {
        if (data.errors.name) {
            $("#fname").addClass("has-error");
            $("#fname").append(
                '<div class="help-block">' + data.errors.name + "</div>"
            );
        }

        if (data.errors.email) {
            $("#lname").addClass("has-error");
            $("#lname").append(
                '<div class="help-block">' + data.errors.email + "</div>"
            );
        }

    } else {
        $("form").html(
            '<div class="alert alert-success">' + data.message + "</div>"
        );
    }

});

event.preventDefault();

// ...
