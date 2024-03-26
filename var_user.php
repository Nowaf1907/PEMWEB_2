<?php
 // definisikan variables
 $nama = 'Rosalie Naurah';
 $umur = 13;
 $berat = 22.4;

 echo 'Namaku adalah : ' . $nama;
 echo '<br>';
 echo 'Nama : ' . $nama;
 echo '<br/>Umur : ' . $umur.' Tahun';
 echo '<br/>Berat : '.$berat.' Kg';

 echo "<br/>Hello $nama Apakabar";

 echo '<hr>';

 // variable system
 echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
 echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

 echo '<hr>';

 //devinisikan variabel konstanta
 //define: untuk memanggil variabel konstanta
 define('PELAJARAN', 'pemweb');

 echo PELAJARAN;
 
 ?>