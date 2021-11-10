<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktikum</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>

    <style>
        .card {
            width: 43%;
            border-radius: 15px;
        }
        .card-header{
            text-align: center;
            background-color: #ffffed;
            border: 0;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="card mx-auto">
            <div class="card-header">
                <h2><b>JavaScript From Validation</b></h2>
            </div>
            <br>
            <div class="card-body"></div>
            <div class="container">
                <p style="color: red;">* All fields are mandatory *</p>
                <form id="formvalidation" action="https://www.sea.playblackdesert.com/Main/Index">
                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="username">Username(6-8 characters):</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="state">State:</label>
                        <select class="form-control" id="state">
                            <option>Please Choose</option>
                            <option>USA</option>
                            <option>Japan</option>
                            <option>UK</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="zip">Zip Code:</label>
                        <input class="form-control" id="zip" name="zip">
                    </div>
                    <button type="check" class="btn btn-warning btn-lg btn-block text-white">Check Form</button>
                    <br>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#formvalidation").validate({
                rules: {
                    name: {
                        required: true,
                        lettersonly: true,
                    },
                    username: {
                        required: true,
                        minlength: 6,
                        maxlength: 8
                    },
                    email: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    address: {
                        required: true
                    },
                    zip: {
                        required: true,
                        minlength: 6,
                        maxlength: 6,
                        digits: true
                    }
                },
                messages: {
                    name: {
                        required: "Please Enter Your Name",
                        lettersonly: "Only Alphabet"
                    },
                    username: {
                        required: "Please Enter Your Username",
                        minlength: "must be containt 6-8 characters",
                        maxlength: "must be containt 6-8 characters"
                    },
                    email: {
                        required: "Please Enter Your Email"
                    },
                    state: {
                        required: "Please Enter Your State"
                    },
                    address: {
                        required: "Please Enter Your Address"
                    },
                    zip: {
                        required: "Please Enter Your Zip",
                        minlength: "must be containt 6 characters",
                        maxlength: "must be containt 6 characters",
                        digits: "must be number"
                    }
                }
            }
            );
        });
    </script>

</body>

</html>

<script>
    $(document).ready(function () {
        $("#submit").click(function () {
            var nama = $("#nama").val();
            var harga = $("#harga").val();
            var jenis = $("#jenis").val();
            var kode = $("#kode").val();


            if (nama.length == "") {
                alert("Please enter your nama barang");
                return false;
            } else {
                if (!(nama.length >= 10 && nama.length <= 10)) {
                    alert("must be containt 10 characters");
                    return false;
                }
            }
            if (harga.length == "") {
                alert("Please enter your harga");
                return false;
            } else {
                var pattern_harga = /^\d{4,}$/;
                if (!pattern_harga.test(harga)) {
                    alert("must be number and containt 6 characters");
                    return false;
                }
                if (!min)) {
            alert("must be number and containt 6 characters");
            return false;
        }
    }
    if (jenis.length == "") {
        alert("Please select jenis");
        return false;
    }
    if (kode.length == "") {
        alert("Please enter your barcode");
        return false;
    } else {
        var pattern_kode = /^\d{10}$/;
        if (!pattern_kode.test(kode)) {
            alert("must be number and containt 10 characters");
            return false;
        }
    }
    return true;
});
});
</script>
