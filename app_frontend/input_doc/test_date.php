<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php

    $str_day = 2;
    $str_month = 3;
    $str_year = 4;

    if($str_day == "01"){
      $day_thai = "๐๑";
    }else if($str_day == "02"){
      $day_thai = "๐๒";
    }else if($str_day == "03"){
      $day_thai = "๐๓";
    }else if($str_day == "04"){
      $day_thai = "๐๔";
    }else if($str_day == "05"){
      $day_thai = "๐๕";
    }else if($str_day == "06"){
      $day_thai = "๐๖";
    }else if($str_day == "07"){
      $day_thai = "๐๗";
    }else if($str_day == "08"){
      $day_thai = "๐๘";
    }else if($str_day == "09"){
      $day_thai = "๐๙";
    }else if($str_day == "10"){
      $day_thai = "๑๐";
    }else if($str_day == "11"){
      $day_thai = "๑๑";
    }else if($str_day == "12"){
      $day_thai = "๑๒";
    }else if($str_day == "13"){
      $day_thai = "๑๓";
    }else if($str_day == "14"){
      $day_thai = "๑๔";
    }else if($str_day == "15"){
      $day_thai = "๑๕";
    }else if($str_day == "16"){
      $day_thai = "๑๖";
    }else if($str_day == "17"){
      $day_thai = "๑๗";
    }else if($str_day == "18"){
      $day_thai = "๑๘";
    }else if($str_day == "19"){
      $day_thai = "๑๙";
    }else if($str_day == "20"){
      $day_thai = "๒๐";
    }else if($str_day == "21"){
      $day_thai = "๒๑";
    }else if($str_day == "22"){
      $day_thai = "๒๒";
    }else if($str_day == "23"){
      $day_thai = "๒๓";
    }else if($str_day == "24"){
      $day_thai = "๒๔";
    }else if($str_day == "25"){
      $day_thai = "๒๕";
    }else if($str_day == "26"){
      $day_thai = "๒๖";
    }else if($str_day == "27"){
      $day_thai = "๒๗";
    }else if($str_day == "28"){
      $day_thai = "๒๘";
    }else if($str_day == "29"){
      $day_thai = "๒๙";
    }else if($str_day == "30"){
      $day_thai = "๓๐";
    }else if($str_day == "31"){
      $day_thai = "๓๑";
    }


    if($str_month == "01"){
      $month_thai = "มกราคม";
    }else if($str_month == "02"){
      $month_thai = "กุมภาพันธ์";
    }else if($str_month == "03"){
      $month_thai = "มีนาคม";
    }else if($str_month == "04"){
      $month_thai = "เมษายน";
    }else if($str_month == "05"){
      $month_thai = "พฤษภาคม";
    }else if($str_month == "06"){
      $month_thai = "มิถุนายน";
    }else if($str_month == "07"){
      $month_thai = "กรกฎาคม";
    }else if($str_month == "08"){
      $month_thai = "สิงหาคม";
    }else if($str_month == "09"){
      $month_thai = "กันยายน";
    }else if($str_month == "10"){
      $month_thai = "ตุลาคม";
    }else if($str_month == "11"){
      $month_thai = "พฤศจิกายน";
    }else if($str_month == "12"){
      $month_thai = "ธันวาคม";
    }

    echo $day_thai;
    echo $month_thai;


    ?>


    <?php


    $num = 478569;

function thainumDigit($num){

    return str_replace(array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),

 array( "o" , "๑" , "๒" , "๓" , "๔" , "๕" , "๖" , "๗" , "๘" , "๙" ),

    $num);

};

?>

<?php

$aaa = "555556";

echo thainumDigit($aaa);

echo thainumDigit("ไก่ 3 ตัว หมู 2 ตัว มีขารวมกัน 14 ขา " );

?>


<?php

$message = "๑๑๑๑๑๑๒๒๒๒๒ บาท";
$numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
$numarabic = array("1","2","3","4","5","6","7","8","9","0");


$test = str_replace($numthai,$numarabic,$message);
// $test = str_replace($numarabic,$numthai,$message);
echo $test;

?>



  </body>
</html>
