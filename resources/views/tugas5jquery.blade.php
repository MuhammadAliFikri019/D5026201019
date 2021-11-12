<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jqueryshowhide</title>

    <style>
        * {
            padding: 0%;
            margin: 0%;
            box-sizing: 0;
            outline: none;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 70px;
            max-width: 400px;
            margin: auto;
        }

        .menu,
        .content {
            width: 100%;
        }

        select {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            font-weight: 700;
            border: none;
            border-radius: 8px;
            border: 2px sienna;
            box-shadow: 0px 10px 10px gray;
            appearance: none;
        }

        .content {
            margin: 30px 0;
        }

        .content .data {
            padding: 25px;
            border: 2px solid black;
            border-radius: 10px;
        }

        .content p {
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid grey;
        }

        .content p b {
            font-weight: 500;
        }

        .content p span {
            float: right;
            font-weight: normal;
        }
        .data{
            display: none;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="menu">
            <select id="nama">
                <option value="zaki">Zaki</option>
                <option value="zara">Zara</option>
                <option value="albert">Albert</option>
            </select>
        </div>


        <div class="content">
            <div id="zaki" class="data">
                <p><b>Nama Lengkap</b><span>Zaki Rama</span></p>
                <p><b>Umur</b><span>16 Tahun</span></p>
                <p><b>Alamat</b><span>Sidoarjo</span></p>
            </div>
            <div id="zara" class="data">
                <p><b>Nama Lengkap</b><span>Zara Nala</span></p>
                <p><b>Umur</b><span>17 Tahun</span></p>
                <p><b>Alamat</b><span>Surabaya</span></p>
            </div>
            <div id="albert" class="data">
                <p><b>Nama Lengkap</b><span>Albert Radi</span></p>
                <p><b>Umur</b><span>20 Tahun</span></p>
                <p><b>Alamat</b><span>Gresik</span></p>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#nama").on(`change`, function(){
                $(".data").hide();
                $("#" + $(this).val()).fadeIn(700);
            }).change();
        });

    </script>

</body>

</html>
