<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
    <script src="https://kit.fontawesome.com/4796adf8c7.js" crossorigin="anonymous"></script>
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a href="/pegawai"><i class="far fa-user"></i> Pegawai</a></li>
                <li><a href="/absen"><i class="far fa-clipboard"></i></i> Absen</a></li>
                <li><a href="/pendapatan"><i class="far fa-money-bill-alt"></i></i></i> Pendapatan</a></li>
                <li><a href="/laptop"><i class="fas fa-laptop"></i>Laptop</a></li>
                <li><a href="/karyawan1"><i class="far fa-user"></i> EAS</a></li>
            </ul>
            <div class="social_media">
                <a href="https://www.facebook.com/profile.php?id=100012004039481"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/Muhamma51724404"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/muhammadalifikri07"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="main_content">
            <div class="header">MUHAMMAD ALI FIKRI - 5026201019 <img src="/image/pikri.png" alt="fotomahasiswa" class="image"></div>
            <div class="body">
                <div>
                    @yield('judulhalaman')<br>
                    @section('konten')
                    @show
                </div>
            </div>
            <div class="footer">Hak Cipta Oleh Muhammad Ali Fikri - 5026201019</div>
        </div>

    </div>

</body>

</html>
