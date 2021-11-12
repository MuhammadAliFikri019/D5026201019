<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Nilai</title>
</head>
<body>
    <h2>Masukan 5 angka, cari angka tersebut ada di index ke berapa</h2>

<form name="angka" id="angka" method="GET">
        <label>Angka ke 1</label><br>
        <input type="number" id="angka1" name="angka1"><br>
        <label>Angka ke 2</label><br>
        <input type="number" id="angka2" name="angka2"><br>
        <label>Angka ke 3</label><br>
        <input type="number" id="angka3" name="angka3"><br>
        <label>Angka ke 4</label><br>
        <input type="number" id="angka4" name="angka4"><br>
        <label>Angka ke 5</label><br>
        <input type="number" id="angka5" name="angka5"><br>
        <label>Masukkan angka untuk dicari index ke berapa</label><br>
        <input type="number" id="angka6" name="angka6"><br>
        <input type="submit" id="submit" value="Submit">
    </form>
        <?php
         error_reporting (E_ALL ^ E_NOTICE);
  // unordered list

  $angka1 = $_GET["angka1"];
  $angka2 = $_GET["angka2"];
  $angka3 = $_GET["angka3"];
  $angka4 = $_GET["angka4"];
  $angka5 = $_GET["angka5"];
  $arr = array($angka1, $angka2, $angka3, $angka4, $angka5);
  $ketemu = false;
  // searched value
  $x = $_GET["angka6"];
  for ($i = 0; $i < count($arr); $i++) {
    if ($x == $arr[$i] ) {
        echo "Angka tersebut ditemukan pada index ke" .$i ;
        $ketemu = true;
        break;
    }
  }
  if ($ketemu == false) {
    echo "Tidak ditemukan angka tersebut";
  }
?>
</body>
</html>

