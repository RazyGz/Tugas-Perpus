<?php

// $nama = "Aaron Cahya Kurniawan";
// $umur = 17;
// $asalSekolah = 'SMK Telkom Malang';

// echo "Halo, perkenalkan namaku ".$nama.", aku berusia ".$umur." tahun. Sekarang aku bersekolah di ".$asalSekolah;
// echo '<br>';
// echo '<br>';

// $employee = [
//     'name' => 'John',
//     'email' => 'john@example.com',
//     'phone' => '1234567890',
// ];

// $employee = [
// 	'name' => 'John',
// 	'email' => 'john@example.com',
// 	'phone' => '1234567890',
// ];

// // get the value of employee name
// echo $employee['name'];

// // get all values
// foreach ($employee as $key => $value) {
// echo $key . ':' . $value;
// echo '<br>';
// }

// $employee = [
//     'name' => 'John',
//     'email' => 'john@example.com',
//     'phone' => '1234567890',
//     'hobbies' => ['Football', 'Tennis'],
//     'profiles' => ['facebook' => 'johnfb', 'twitter' => 'johntw']
// ];

//   // access hobbies
// echo $employee['hobbies'][0];
//   // Football

// echo $employee['hobbies'][1];
//   // Tennis

//   // access profiles
// echo $employee['profiles']['facebook'];
//   // johnfb

// echo $employee['profiles']['twitter'];
//   // johntw

//   echo '<br>';
//   echo '<br>';
//   echo "Halo, selamat belajar Fanani Akbar Abimanyu di SMK Telkom Malang <br>";
// // Belajar Variable
// $nama = "Fanani Akbar Abimanyu";
// $umur = 17;
// $asalSekolah = "SMK Telkom Malang";

// echo "Halo perkenalkan nama saya ".$nama.", aku berusia ".$umur." tahun Sekarang aku bersekolah di ".$asalSekolah." <br>";

// // Belajar Variable di bawah data string karena berisi text atau kalimat.
// $tes = "Saya Pergi Kerja";

// // Belajar Variable yang merupakan bertipe data  integer.
// $bilangan_pertama = 15;
// $bilangan_kedua = 2004;

// // Belajar Variable yang bertipe data float karena berisi bilngan desimal.
// $angka = 12.177;

// // Belajar Variable yang bertipe data boolean berisi nilai benar / salah.
// $x = false;
// $y = true;

// Kondisi (if dan else)
// $teman = "andi";
// if ($teman == "andi") {
//       echo "dia adalah teman saya";
// }else {
// echo "dia bukan teman saya <br>";
// }

// // Switch
// $angka = 3;
// switch ($angka) {
//     case 1: 
//         echo "Isi variable angka adalah satu";
//         break;
//     case 2: 
//         echo "Isi variable angka adalah satu";
//         break;
//     case 3;
//         echo "Isi variable adalah tiga <br>";
//         break;
//     default;
//         echo "Isi variable tidak di temukan";
//         break;
// }

// $x = 1;
// while($x <= 10) {
//     echo "Angka $x <br>";
//     $x++;
// }

// for($x=1;$x<=10;$x++) {
//     echo $x;
//      // membuat perulangan yang menampilkan angka satu sampai sepuluh sesuai dengan aturan yang sudah di buat kondisi di atas.
// }

// echo "<br>";

// function tampilkan_nama() {
//     echo "Nama saya Fanani Akbar Abimanyu Moklet";
// }
// tampilkan_nama ();
// echo "<br>";

// // $array_fruits = array('Apple', 'Orange', 'Watermelon', 'Mango',);

// $array = [];
// $array[] = 'One';
// $array[] = 'Two';
// $array[] = 'Three';
// echo '<pre>';
// print_r($array);

// // Array model pertama

// $array = ['One', 'Two', 'Three'];
// get the first element of the $array 
// echo $array[0];
// echo "<br>";

// // get the second element of the $array
// echo $array[1];
// echo "<br>";

// // get the third element of the $array
// echo $array[2];
// echo "<br>";

// Array model kedua

// $array = ['One', 'Two', 'Three'];
// foreach ($array as $element) {
// echo $element;
// echo '<br>';
// }

// Array model ketiga

// $array = ['One', 'Two', 'Three'];
// $array_length = count($array);
// for ($i = 0; $i < $array_length; ++$i) {
// echo $array[$i];
// echo '<br>';
// }

// $employee = [
//     'nama' => 'Abim',
//     'email' => 'fananiabimanyu@gmail.com',
//     'Phone' => '082257313006',
// ];

// echo "<br>";

// // mengambil value dari nama
// echo $employee['nama'];
// echo "<br>";

// echo "<br>";

// // mengambil semua value 
// foreach ($employee as $key => $value) {
//     echo $key. ':' .$value;
//     echo "<br>";
// }

$siswa = array(
  ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'], 
  ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'], 
  ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'], 
  ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'], 
);

foreach ($siswa as $key => $value) {
  echo $value['nama'];
  echo '<br>';
  echo $value['kelas'];
  echo " - ";   
  echo $value['jurusan'];
  echo '<br>';
}

$dataProduk = array(
    ['produk' => 'Galaxy S21', 'merk' => 'Samsung', 'harga' => 'Rp19000000', 'status' => 'true'],
    ['produk' => 'Galaxy A71', 'merk' => 'Samsung', 'harga' => 'Rp20999000', 'status' => 'false'],
    ['produk' => 'Galaxy S21', 'merk' => 'Samsung', 'harga' => 'Rp19000000', 'status' => 'true'],
    ['produk' => 'Galaxy S21', 'merk' => 'Samsung', 'harga' => 'Rp19000000', 'status' => 'false'],
    );
    
    foreach ($dataProduk as $key => $value) {
        echo $value['merk'];
        echo '<br>';
        echo '<br>';
        echo $value['produk'];
        echo "<br>";   
        echo "<br>";   
        echo $value['harga'];
        echo '<br>';
        echo '<br>';
        if ($value['status'] == "true") {
            echo "Stok Tersedia";
            echo '<br>';
            echo '<br>';
            echo "Order";
    } else {
        echo "Tidak Tersedia";
    }
        echo '<br>';
        echo '<br>';
      }


?>
