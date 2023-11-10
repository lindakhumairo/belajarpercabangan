<?php
  $mata_kuliah = 'matematika';
  $nilai       = 80;

  if($nilai > 90){
    $hasil = "Nilai kamu A";
  }elseif($nilai > 70 && $nilai <= 90){
    $hasil = "Nilai kamu B";
  }elseif($nilai > 50 && $nilai <= 70){
    $hasil = "Nilai kamu C";
  }else{
    $hasil = "Kamu harus belajar lagi";
  }
  

  echo $hasil;
?>