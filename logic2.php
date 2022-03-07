<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="logic2.css">
</head>
<body>
    
<div class="container">
    <!-- 2,1 -->
    <div class="atas">
<table border="1" cellpadding="10" cellspacing="0">

<?php
 for ( $i=1; $i <=9; $i++ ) {
     echo "<tr>";

     for ( $j=1; $j <= 9; $j++) {

         if ( $j==$i) {
            echo "<td> * </td>";
        }
        else{
            echo "<td> - </td>";
          }

     }
 }
?>
</table>

<!-- 2,2 -->
<table border="1" cellpadding="10" cellspacing="0">

<?php
 for ( $i=1; $i <=9; $i++ ) {
     echo "<tr>";

     for ( $j=1; $j <= 9; $j++) {

         if ( 9 - $i - -1 == $j) {
            echo "<td> * </td>";
        }
        else{
            echo "<td> - </td>";
          }

     }
 }
?>
</table>

<!-- 2,3 -->
<table border="1" cellpadding="10" cellspacing="0">

<?php
 for ( $i=1; $i <=9; $i++ ) {
     echo "<tr>";

     for ( $j=1; $j <= 9; $j++) {

         if ( $j==$i) {
            echo "<td> * </td>";
        }
        elseif ( 9 - $i - -1 == $j) {
            echo "<td> * </td>";
        }
        else{
            echo "<td> - </td>";
          }

     }
 }
?>
</table>
</div>





<!-- 2,4 -->
<div class="bawah">
<table border="1" cellpadding="10" cellspacing="0">

<?php
 for ( $i=1; $i <=9; $i++ ) {
     echo "<tr>";

     for ( $j=1; $j <= 9; $j++) {

         if ( $j<=$i) {
            echo "<td> * </td>";
        }
        else{
            echo "<td> - </td>";
          }

     }
 }
?>
</table>


<!-- 2,5 -->
<table border="1" cellpadding="10" cellspacing="0">

<?php
 for ( $i=1; $i <=9; $i++ ) {
     echo "<tr>";

     for ( $j=1; $j <= 9; $j++) {

         if ( $i > 9 - $j ) {
            echo "<td> * </td>";
        }
        else{
            echo "<td> - </td>";
          }

     }
 }
?>
</table>


<!-- 2,6 -->
<table border="1" cellpadding="10" cellspacing="0">

<?php
for ( $i=1; $i <=9; $i++) {
    echo "<tr>";

    for ( $j=1; $j <= 9; $j++) {

        if ( $j>=$i + 1) {
           echo "<td> - </td>";
       }
       elseif ( $i < 9 - $j + 1 ) {
        echo "<td> - </td>";
    }
       else{
           echo "<td> * </td>";
         }

    }
}
?>
</table>
</div>
</body>
</html>