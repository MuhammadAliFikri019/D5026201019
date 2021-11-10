<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Ali Fikri</title>
</head>

<body>
    <script src="sequentialsearchjs.js"></script>
    <div class="container">
        <h1>Sequential Search</h1>
        <hr>
        <p>
            Disini saya Akan menjelaskan tentang <b>Sequential Search</b><br>
            Sequential search adalah teknik pencarian data dimana data dicari secara urut dari depan ke belakang atau
            dari awal sampai akhir berdasarkan key yang dicari (C, Antonius Rachmat dan M, Aditya Wikan, 2016).
            Kelebihan
            dari proses pencarian secara sequential search jika data yang dicari terletak di depan, maka data akan
            ditemukan dengan cepat. Tetapi dibalik kelebihannya ini, teknik ini juga memiliki kekurangan jika data yang
            dicari terletak di belakang atau paling akhir, maka akan membutuhkan waktu yang lama dalam proses
            pencariannya.
        </p>
        <p>
            Dalam Java Codingan yang digunakan seperti berikut
            <p></p>
            public class Main {
                public static void main(String [] args){ <br>
                    int [] angka = {1, 5, 10, 11, 14, 17}; <br>
                    int search = 12; <br>
                    boolean ketemu = false; <br>
                    <br>
                    for(int i = 0 ; i < angka.length; i++) {  <br>
                        if(key == angka[i]){ <br>
                            System.out.println("Data ditemukan pada index ke-" + i); <br>
                            ketemu = true; <br>
                            break; <br>
                        } <br>
                    } <br>
                    if (ketemu == false) {
                        console.log("Data tidak ditemukan");
                    }
        </p>
        <p>
            Sedangkan dalan Java Script Codingan yang digunakan
            <p></p>
            angka = [1, 5, 10, 11, 14, 17]; <br>
            ketemu = false; <br>
            key = 12; <br>
            <p></p>
            for (i = 0; i < angka.length; i++) { <br>
                if (key == angka[i]) { <br>
                    console.log(`Data ditemukan pada index ke-` + i); <br>
                    ketemu = true; <br>
                    break; <br>
                } <br>
            } <br>
            if (ketemu == false) { <br>
                console.log(`Data tidak ditemukan`); <br>
            } <br>

        </p>
        <P>
            <hr>
            Sehingga Hasil Yang keluar pada console adalah Data tidak ditemukan karena ketika kita search 12 dimana 12 tersebut tidak ada pada array angka sehingga membuat nilai ketemu menjadi false dan melakukan perintah console.log(`Data tidak ditemukan`)




        </P>
    </div>


</body>

</html>
