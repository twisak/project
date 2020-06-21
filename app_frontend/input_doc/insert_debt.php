
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

    $doc_id = $_POST['doc_id'];
		$name_train = $_POST['name_train'];
    $project_id = $_POST['project_id'];
    $person_id = $_POST['person_id'];
    $money_from = $_POST['money_from'];

    $list = $_POST['list'];
    $money_num = $_POST['money_num'];

    $lend_num = $_POST['lend_num'];
    $note_that = $_POST['note_that'];
    $date_note = $_POST['date_note'];
    $under = $_POST['under'];
    $along_with = $_POST['along_with'];
    $go_practice = $_POST['go_practice'];
    $depart_from = $_POST['depart_from'];
    $date_depart = $_POST['date_depart'];
    $time_depart = $_POST['time_depart'];
    $back = $_POST['back'];
    $date_back = $_POST['date_back'];
    $time_back = $_POST['time_back'];
    $open_money = $_POST['open_money'];
    $allowance = $_POST['allowance'];
    $allowance_day = $_POST['allowance_day'];
    $allowance_price = $_POST['allowance_price'];
    $allowance_sum = $_POST['allowance_sum'];
    $rest = $_POST['rest'];
    $rest_day = $_POST['rest_day'];
    $rest_sum = $_POST['rest_sum'];
    $vehicle = $_POST['vehicle'];
    $vehicle_sum = $_POST['vehicle_sum'];
    $other = $_POST['other'];
    $other_sum = $_POST['other_sum'];
    $document_num = $_POST['document_num'];



    $sql_tb_debt = "INSERT INTO tb_debt(doc_id, name_train, project_id, person_id, money_from, list, money_num, lend_num, note_that, date_note, under, along_with, go_practice, depart_from,
       date_depart, time_depart, back,date_back, time_back, open_money, allowance, allowance_day, allowance_price, allowance_sum, rest, rest_day, rest_sum, vehicle, vehicle_sum, other,other_sum,document_num )
                    VALUES ('".$doc_id."','".$name_train."','".$project_id."','".$person_id."','".$money_from."','".$list."',
                    '".$money_num."','".$lend_num."','".$note_that."','".$date_note."','".$under."','".$along_with."','".$go_practice."',
                    '".$depart_from."','".$date_depart."','".$time_depart."','".$back."','".$date_back."','".$time_back."','".$open_money."',
                    '".$allowance."','".$allowance_day."','".$allowance_price."','".$allowance_sum."','".$rest."','".$rest_day."','".$rest_sum."',
                    '".$vehicle."','".$vehicle_sum."','".$other."','".$other_sum."','".$document_num."')";
echo $sql_tb_debt;
     // echo $sql_tb_lend;
     // $query_tb_lend = mysqli_query($conn,$sql_tb_lend);
     //
     //  echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
     //  echo "<script>window.location='tb_doc_lend.php'</script>";

?>
</body>
</html>
