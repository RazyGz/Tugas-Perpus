<?php


// Logika saya belum sampai

$grade = 90;
$predicate = getPredicate($grade);
echo "Grade: {$grade} - Predicate: {$predicate}";

function getPredicate($grade) {
    if ($grade > 90) {
        return "A+";
    } elseif ($grade > 80 && $grade <= 90) {
        return "A";
    } elseif ($grade > 70 && $grade <= 80) {
        return "B+";
    } elseif ($grade > 60 && $grade <= 70) {
        return "B";
    } elseif ($grade > 50 && $grade <= 60) {
        return "C+";
    } elseif ($grade > 40 && $grade <= 50) {
        return "C";
    } elseif ($grade > 30 && $grade <= 40) {
        return "D";
    } else {
        return "E";
    }

}

echo '<br>';

$x = 1;
while($x <= 10) {
    echo "Angka $x <br>";
    $x++;
}

for($x=1;$x<=10;$x++) {
    echo $x;
    // membuat perulangan yang menampilkan angka satu sampai sepuluh sesuai dengan aturan yang sudah di buat kondisi di atas.
}

echo "<br>";

function tampilkan_nama() {
    echo "Nama saya Aaron Cahya Kurniawan Moklet";
}
tampilkan_nama ();
echo "<br>";


// $array_fruits = array('Apple', 'Orange', 'Watermelon', 'Mango',);

$array = [];
$array[] = 'One';
$array[] = 'Two';
$array[] = 'Three';
echo '<pre>';
print_r($array);

// Array model pertama

$array = ['One', 'Two', 'Three'];

// get the first element of the $array 
echo $array[0];
echo "<br>";

// get the second element of the $array
echo $array[1];
echo "<br>";

// get the third element of the $array
echo $array[2];
echo "<br>";

// Array model kedua

$array = ['One', 'Two', 'Three'];
foreach ($array as $element) {
echo $element;
echo '<br>';
}

// Array model ketiga

$array = ['One', 'Two', 'Three'];
$array_length = count($array);

for ($i = 0; $i < $array_length; ++$i) {
echo $array[$i];
echo '<br>';
}

$employee = [
    'nama' => 'Aaron',
    'email' => 'Aaroncahyakurniawan2000@gmail.com',
    'phone' => '08819695036',
    'hobbies' => ['Game', 'Reading', 'Music',],
    'profiles' => ['instagram' => '@razy.artofficiall', 'Tiktok' => 'razy.gz7']
];

echo "<br>";

// mengambil value dari nama
echo $employee['nama'];
echo "<br>";

echo "<br>";

// mengambil semua value 
foreach ($employee as $key => $value) {
    echo $key. ':' .$value;
    echo "<br>";
}

// mengakases nilai dari array multidimensi
echo $employee ['hobbies'][0]; {
echo ", ";
echo $employee ['hobbies'][1];
echo ", ";
echo $employee ['profiles']['instagram'];
echo ", ";
echo $employee ['profiles']['Tiktok'];
}
?>