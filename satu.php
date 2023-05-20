<?php

echo "Selamat Datang ";

$seseorang='Tugas Kelompok 2 : Anggota';

echo $seseorang;

echo "<h1> APLIKASI KALKULATOR MANUAL</h1>";
$n1=10;
$n2=2;
$operasi="+";
if($operasi=="+"){
    $hasil=$n1+$n2;
}elseif($operasi=='-'){
    $hasil=$n1-$n2;
}elseif($operasi=="*"){
    $hasil=$n1*$n2;
}elseif($operasi=="/"){
    $hasil=$n1/$n2;
}else{
    $hasil="kabohe";
}
echo "Nilai 1=".$n1.'<br>';
echo "Nilai 2=".$n2.'<br>';
echo "operasi".$operasi.'<br>';

echo "Hasilnya ".$hasil;

?>

