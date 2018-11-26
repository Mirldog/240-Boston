<?php

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



require "../../../../dbConnect.inc";
//    if ($mysqli) {
//        if (isset($_GET['name'])) {
//            if ($_GET['name'] != '' && $_GET['email'] != '' && $_GET['date'] != ''&& $_GET['attraction'] != ''
//                && $_GET['food'] != ''&& $_GET['attended'] != '' && $_GET['position'] != ''&& $_GET[''] != 'exp'
//                && $_GET['ta'] != '') {

                $stmt = $mysqli->prepare("insert into bostonxp (favorite, food, sports,
                          restaurant, rate, moment, name, email, date) VALUES (?,?,?,?,?,?,?,?,?)");
                $stmt->bind_param("sssssssss", $_GET['selection'], $_GET['attraction'],$_GET['attended'],$_GET['position'],
                                    $_GET['exp'],$_GET['ta'],$_GET['name'],$_GET['email'],$_GET['date']);
                $stmt->execute();
                $stmt->close();


           // }
//        }
//    }


//
//    $visitor = test_input($_POST['name']);
//    $date = test_input($_POST['date']);
//    $fav = test_input($_POST['fav']);
//    $food = test_input($_POST['food']);
//
//
//    $destination_email = "kxm9453@rit.edu";
//
//    $email_subject = "Boston, MA - visitor";
//    $email_body = "Visitor name: $visitor\n";
//    $email_body .="Date: $date\n";
//    $email_body .="Favorite Attraction: $fav\n";
//    $email_body .="Food Eaten: $food\n";
//
//    mail($destination_email, $email_subject, $email_body);
//
//    echo 'Data Submitted'

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey</title>
    <link href="../css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,500|Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
include('header.php');
?>
<div class="content">
    <div class="leftBar"></div>
    <div class="rightBar"></div>
    <div class="dce">
        <div class="sportsIntro">
            <h1>
                Thank you for completing the form.
            </h1>
        </div>
    </div>
</div>
</body>