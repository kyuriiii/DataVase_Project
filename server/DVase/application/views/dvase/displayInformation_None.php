<? defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<html>
<head>
    <title> 식물 정보 </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
<table class="table table-borderless" style="width: 80%; text-align: center;" align="center">
    <tr>
        <td colspan="6"> <img src="http://15.164.251.97/dvaseFolder/learnSetImage/Acasia/adsgasdf.jpg" class="img-fluid" alt="Responsive image"> </td>
    </tr>
    <tr>
        <td>이름</th>
        <td colspan="5">1_0_plants name</td>
    </tr>
    <tr>
        <td>영문이름</th>
        <td colspan="5">1_0_plants eng_name</td>
    </tr>
    <tr>
        <td>꽃말</th>
        <td colspan="5">1_0_plants flower</td>
    </tr>
    <tr>
        <td>관리 수준</th>
        <td colspan="5">1_0_plants care</td>
    </tr>
    <tr>
        <td>물 주기</th>
        <td colspan="5">1_0_plants water</td>
    </tr>
    <?
    $i = 1;

    $result = array();
    foreach( $result as $row ){
        echo '
                <tr>
                    <td> 특징 '.$i.' </td>
                    <td colspan="5"> $row["feature"] </td>
                </tr>
                ';
        $i++;
    }

    ?>
</table>
</body>
</html>

