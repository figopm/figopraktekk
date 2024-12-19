<?php

$mahasiswa = [
    "001" => "Figo",
    "002" => "Ica",
    "003" => "meliza",
    "004" => "pitri",
    "005" => "Rahmat"
];

// Untuk memasukkan value, kita harus membuat key yang merepresentasikan valuenya.
// Tanda "=>" dapat diartikan sebagai merujuk ke
// "Key" => "Value"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
</head>
<body>
<?php foreach ($mahasiswa as $nrp => $nama) : ?>
    <li><?php echo "$nrp : $nama"; ?></li>
<?php endforeach; ?>
</body>
</html>