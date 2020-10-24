
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/images/favicon.png">
<?php include '../../include_title.php'; ?>
    <!-- Bootstrap Core CSS -->

    <!-- แบมะ -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/bootstrap_plugin.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/report.css" rel="stylesheet">
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- แบมะ -->

    <!-- You can change the theme colors from here -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<?php

                                        $doc_id = $_GET['id'];
                                        $sql_salary = "SELECT * FROM tb_salary WHERE doc_id = '".$doc_id."' ";
                                        $query_salary = mysqli_query($conn,$sql_salary);
                                        $result_salary = mysqli_fetch_assoc($query_salary);

                                        $doc_id = $result_salary['doc_id'];
                                        $person_id = $result_salary['person_id'];
                                        $contract_id = $result_salary['contract_id'];

                                      
                                        $sql ="SELECT * FROM tb_contract WHERE person_id = '".$person_id."' ";
                                        $query = mysqli_query($conn,$sql);
                                        $num_rows = mysqli_num_rows($query);
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                        {
                                            //$doc_id = $row['doc_id'];
                                            $foreword = unserialize($row['foreword']);
                                        }

?>

<body id="<?php //echo $body['name'];?>">
    <div class="page">
        <table border="0" align="center" width="100%" class="statement-view text-gray-900">
            <tr>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                <strong>มหาวิทยาลัยราชภัฏยะลา</strong> <br>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                โครงการ "<?php echo $project_name?>" <br>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    กิจกรรม <?php echo $activity?> <br>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    ชื่อ <?php echo $prefix?><?php echo $firtname?>&nbsp;&nbsp;<?php echo $lastname?> <br>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    ตำแหน่ง <?php echo $position_name?> <br>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    ประจำเดือน <?php echo $month_thai?>&nbsp;<?php echo $year_thai?> <br>
                </td>
            </tr>

            <tr>
                <td>
                    <br>
                    <table border="1" align="center" width="100%" class="statement-view text-gray-900">
                            <?php
                                    $i=1;
                                    $i<="";
                                   $foreword1 = array($foreword);

                                    foreach ($foreword1 as $foreword1){
                                     $j=0;
                                     //echo "<p><b>ตัวชี้วัด</b></p>";
                                     //echo "<ul>";
                                        foreach ($foreword1 as $foreword1[$j]){
                                             $value = $foreword1[$j];
                                             //echo "<tr><td>{$value}</td></tr>";
                                            //echo "<li>{$value}</li>";
                                            $j++;

                                   // echo "</ul>";


                                ?>
                        <tr>
                            <td colspan="3" align="left">
                                &nbsp;&nbsp;<?php echo $i;?>.<?php echo $value?> <br>
                            </td>
                        </tr>
                        <?php $i++; }}?>
                    </table><br>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="border-0 padding-0">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0">
                                <table width="300px" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                        
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0"></td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                        อาจารย์<?php echo $t_firstname;?>&nbsp;&nbsp;<?php echo $t_lastname;?>
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="border-0 padding-0" align="center">ผู้ควบคุมการปฏิบัติงาน</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="3" class="border-0">
                    &nbsp;
                </td>
            </tr>
        </table>
    </div>


    <script src="<?php //echo site_common_node_modules_url('jquery/dist/jquery.min.js');?>"></script>
</body>

</html>
