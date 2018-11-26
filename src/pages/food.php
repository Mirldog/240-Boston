<!--talk about north end, different restaurants-->
<!--and food trucks. Fenway franks, boston beans-->
<!--frequent dunkins-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js"></script>
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
        <div class="sportsIntro">
            <h1>
                Foods of Boston
            </h1>
            <p>
                Boston has a wonderful selection of many different kinds of food. Most notably though, Boston is famous
                for its italian food, as a whole district of the city called 'The North End' is dedicated to italian
                culture and heritage. Restaurants in the north end range from high class fancy restaurants, to your
                friendly casual pizza joint.
            </p>
        </div>
        <div class="row">
            <div class="column">
                <h2>
                    Restaurants
                </h2>
                <h3 class="subsection">
                    Row 34
                </h3>
                <div>
                    Row 34 is a delicious SeaFood restaurant located off of Congress st. Its places like Row 34 that
                    make Boston as famous as it is for its unbeatable seafood. Offering a rang of food, from fried
                    calamari, to lobster rolls to Roaster Bluefish, there is no dish you could choose that would steer
                    you wrong. Row 34 is an essential stop to every visiting bostonian.
                </div>
                <h3 class="subsection spacing">
                    Sorellina
                </h3>
                <p>
                    Sorellina is an italian restaurant in the North End of Boston off of Huntinton Ave. It is a
                    sophisticated take on italian and mediterranean food. They offer dishes Milanese bone in veal or
                    Saltimbocca wrapped in prosciutto. The mixture of home-cooked quality food in a fancy restaurant
                    setting is an experience that cannot be missed.
                </p>
                <h3 class="subsection spacing">
                    Regina Pizza
                </h3>
                <p>
                    This pizza joint lets the pizza speak for itself. Regina Pizza is a world famous brand, and it
                    continues its tract of domination. Trip Advisor this past year named Boston the Hub of the best
                    pizza in the country. Regina Pizza sits alone at the center of that Hub. Delicious thin crust, brick
                    oven roasted goodness, topped with all the freshest ingredients, its impossible to go wrong here.
                </p>
            </div>
            <div class="column">
                <img src="../assets/img/34.jpg" alt="34" title="Restaurant 34" class="stateHouse" id="34" onclick=changeImageOne()>
                <img src="../assets/img/sorellina.jpeg" alt="sorellina" title="Sorellina" class="stateHouse" id="sor" onclick="changeImageTwo()">
                <img src="../assets/img/regina.jpg" alt="regina" title="Regina Pizza" class="stateHouse" id="reg" onclick="changeImageThree()">

            </div>
        </div>
    </div>
    <?php
    include('footer.php')
    ?>
</div>

</body>
</html>