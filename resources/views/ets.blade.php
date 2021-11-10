<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
    <style>
        .container-fluid {
            width: 85%;
        }

        input {
            display: inline-block;
        }

        @media (min-width: 900px) {
            .container-fluid {
                padding: 2% 5%;
            }

            h4 {
                font-size: 1.3rem;
            }

            h2 {
                font-size: 1.5rem;
            }

            .ob1 {
                margin-left: 270px;
            }

            .ob2 {
                margin-left: 350px;
            }

            .ob3 {
                margin-left: 278px;
            }

            .ob4 {
                margin-left: 269px;
            }

            .btn {
                padding: 10px 150px;
            }
        }

        .card {
            padding: 2% 5%;
        }

        .card-header {
            background-color: transparent;
            border: none !important;
            font-size: 2rem;
        }

        @media (max-width : 500px) {
            .card-header {
                font-size: 1rem;
            }
        }

        .btn-primary {
            background-color: blue;
            border: none !important;
            color: #303030;
        }

        .btn-secondary {
            background-color: rgb(63, 236, 63);
            border: none !important;
            color: #303030;
        }
    </style>

    <title>Ets</title>
</head>

<body>
    <div class="container-fluid">
        <div class="card">
            <h4>Muhammad Ali Fikri</h4>
            <h4>Ali</h4>
            <h4>5026201019</h4>
            <div class="card-header text-center">Form Input Data Barang</div>
            <div class="card-body">
                <form id="input" class="row g-3" action="https://www.sea.playblackdesert.com/Main/Index">
                    <div class="row mt-5 justify-content-around">
                        <div class="col-lg-5">
                            <h2>Nama Barang <span class="ob1">:</span> </h2>
                        </div>
                        <div class="col-lg-6"><input type="text" class="form-control" id="nama" name="nama"></div>
                    </div>
                    <div class="row my-5 justify-content-around">
                        <div class="col-lg-5">
                            <h2>Harga <span class="ob2">:</span> </h2>
                        </div>
                        <div class="col-lg-6"><input type="text" class="form-control" id="harga" name="harga"></div>
                    </div>
                    <div class="row  justify-content-around">
                        <div class="col-lg-5">
                            <h2>Jenis Barang <span class="ob3">:</span> </h2>
                        </div>
                        <div class="col-lg-6">
                            <select id="jenis" name="jenis" class="form-select">
                                <option value=""></option>
                                <option value="true">Makanan</option>
                                <option value="true">Minuman</option>
                                <option value="true">Non Mamin</option>
                            </select>
                        </div>
                    </div>
                    <div class="row my-5 justify-content-around">
                        <div class="col-lg-5">
                            <h2>Kode Barcode<span class="ob4">:</span> </h2>
                        </div>
                        <div class="col-lg-6"><input type="text" class="form-control" id="kode" name="kode"></div>
                    </div>
                    <div class="row mt-5">
                        <div class="d-flex flex-lg-row flex-column justify-content-center">
                            <button type="submit" class="btn btn-primary btn-lg text-white">Kirim</button>
                            <button type="reset"
                                class="btn ms-lg-5 mt-4 mt-lg-0 btn-secondary btn-lg text-black">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#input").validate({
                rules: {
                    nama: {
                        required: true,
                        minlength: 10
                    },
                    harga: {
                        required: true,
                        digits: true,
                        min: 5000
                    },
                    jenis: {
                        required: true,
                    },
                    kode: {
                        required: true,
                        digits: true,
                        minlength: 10
                    }
                },
                messages: {
                    nama: {
                        required: "Must not blank",
                        minlength: "minimum 10 character",
                    },
                    harga: {
                        required: "Must not blank",
                        digits: "Must Number",
                        min: "Minimum harga 5000"
                    },
                    jenis: {
                        required: "Must not blank",
                    },
                    kode: {
                        required: "Must not blank",
                        digits: "Must Number",
                        minlength: "Minimum 10 Number"
                    },
                }
            })
        })
    </script>
</body>

</html>
