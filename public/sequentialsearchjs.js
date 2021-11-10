angka = [1, 5, 10, 11, 14, 17];
ketemu = false;
key = 12;

    for (i = 0; i < angka.length; i++) {
        if (key == angka[i]) {
        console.log(`Data ditemukan pada index ke-` + i);
        ketemu = true;
        break;
        }
    }        
    if (ketemu == false) {
        console.log(`Data tidak ditemukan`);
    } 