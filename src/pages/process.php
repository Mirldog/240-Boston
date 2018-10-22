<?php

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $visitor = test_input($_POST['name']);
    $date = test_input($_POST['date']);
    $fav = test_input($_POST['fav']);
    $food = test_input($_POST['food']);


    $destination_email = "kxm9453@rit.edu";

    $email_subject = "Boston, MA - visitor";
    $email_body = "Visitor name: $visitor\n";
    $email_body .="Date: $date\n";
    $email_body .="Favorite Attraction: $fav\n";
    $email_body .="Food Eaten: $food\n";

    mail($destination_email, $email_subject, $email_body);

    echo 'Data Submitted'

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
<div class="navBar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img class="icon" src="../assets/img/boston_icon.png"/>
        <a class="navbar-brand" href="#">
            <table class="titleBlock">
                <tr>
                    <td class="title">
                        Boston
                    </td>
                </tr>
                <tr>
                    <td class="index title">
                        Mass.
                    </td>
                </tr>
            </table>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse all" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item auto">
                    <a class="nav-link navItem" href="../index.html">Home</a>
                </li>
                <li class="nav-item auto">
                    <a class="nav-link navItem" href="area.html">Area</a>
                </li>
                <li class="nav-item auto">
                    <a class="nav-link navItem" href="attractions.html">Attractions</a>
                </li>
                <li class="nav-item auto">
                    <a class="nav-link navItem" href="food.html">Food</a>
                </li>
                <li class="nav-item auto">
                    <a class="nav-link navItem" href="history.html">History</a>
                </li>
                <li class="nav-item auto">
                    <a class="nav-link navItem" href="jobs.html">Jobs</a>
                </li>
                <li class="nav-item auto">
                    <a class="nav-link navItem" href="sports.html">Sports</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto last">
                <li class="nav-item auto">
                    <a class="nav-link navItem noBorder" href="form.html">Form</a>
                </li>
                <li class="nav-item auto">
                    <a class="nav-link navItem noBorder" href="contact.html">Contact</a>
                </li>
                <li class="nav-item active auto">
                    <a class="nav-link navItem noBorder" href="resources.html">Resources<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>
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