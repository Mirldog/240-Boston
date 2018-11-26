<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Attractions</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,500|Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

<?php
include('header.php');
?>

<div class="content">
    <div class="leftBar gg"></div>
    <div class="rightBar gg"></div>
    <div class="dce">
    <?php
    require "../../../../dbConnect.inc";
    if ($mysqli) {
        if (isset($_GET['name']) && isset($_GET['comment'])) {
            if( $_GET['name']!='' && $_GET['comment']!='' ){
                /*
                    we are using client entered data - therefore we HAVE TO USE a prepared statement

                    https://www.w3schools.com/php/php_mysql_prepared_statements.asp

                    1)prepare my query
                    2)bind
                    3)execute
                    4)close
                */
                $stmt=$mysqli->prepare("insert into boston (name, comment) VALUES (?,?)");
                $stmt->bind_param("ss",$_GET['name'],$_GET['comment']);
                $stmt->execute();
                $stmt->close();
            }//end of if to make sure data is sent using $_GET
        }//end of isset
        //get contents of table and send back
        $sql = 'select name, comment from boston';
        $res=$mysqli->query($sql);
        if($res){
            while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
                $records[] = $rowHolder;
            }
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <link rel="stylesheet" href="../css/styles.css">
    <head>

    </head>
    <body>
    <div class="cont">
        <h1 class="comment-title">
            Comments...
        </h1>

        <h3 class="comment-sub">
            See what other people are saying!
        </h3>

        <div class="comments-list">
            <ul class="comment-section">
                <!-- for each loop going through records in database -->
                <?php
                foreach($records as $myRecord){

                ?>
                <li class="comments">
                    <div class="name"> <?php echo $myRecord['name'] . " says: "?></div><div class="comment"> <?php echo  $myRecord['comment'];} ?></div>
                </li>
            </ul>
        </div>

        <!-- form for adding data to db-->
        <form onclick="return commentValidate()" action="comments.php" method="GET" class="com-form">

            <p>Name:</p>
            <input type="text" name="name" id="name">
            <p>Comment: </p>
            <textarea rows="4" cols="50" name="comment" id="comment"></textarea><br/>

            <button type="submit">Submit</button>
        </form>
    </div>


</body>
</html>
