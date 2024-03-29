<!--aquarium, bowling, green trail-->
<!--concerts in south end, marathon-->
<!--parks, events-->

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
        <div class="sportsIntro">
            <h1>
                Attractions of Boston
            </h1>
            <p>
                Boston is home to many different attractions, so there is always plenty to do. Marketplaces allow for
                outlet type shopping, or if you feel the desire to learn, there is always the option to visit a
                museum, the aquarium or even the Freedom Trail. If its entertainment you desire, Fenway park and TD
                Garden are popular spots to catch the Red Sox or the Celtics.
            </p>
        </div>
        <div class="row">
            <div class="column">
                <h2>
                    Places to Learn
                </h2>
                <h3 class="subsection">
                    Aquarium
                </h3>
                <p>
                    The Aquarium is a great place to visit, especially  if you're looking to learn more about life under
                    the Ocean. The New England Aquarium offers a showcase of a wide range of wildlife. From sea lions,
                    to penguins, they even have an Octopus! To cap it all off, they have tour guides who will give you
                    all the insight on the species they have.
                </p>
                <h3 class="subsection spacing">
                    Museums
                </h3>
                <p>
                    There are a couple museums in Boston. On of which is the Museum of Fine arts. This museum is
                    phenomenal. It is the fifth largest museum in the united states, and holds home to over 450,000
                    pieces of art. That alone makes it hard to top, as it is one of the most extensive art collections
                    in the world.
                    Another museum to visit in Boston is the museum of science. Not only is it a science museum, but it
                    is also an indoor zoo. Learn about anything from the dinosaurs to the space age, and finish off your
                    experience by hitting the IMAX theater to fully immerse yourself into space.
                </p>
                <h3 class="subsection" >
                    Freedom Trail
                </h3>
                <p>
                    There is no place richer in history in Boston than the Freedom Trail. Schedule a tour guide to take
                    you all the way from the State House to Paul Revere's very resting place. The Freedom Trail connects
                    you to to 16 different historical sites on at 2.5 mile route.
                </p>
                <br><br>
                <h2>
                    Stadiums
                </h2>
                <h3 class="subsection">
                    Fenway
                </h3>
                <p>
                    Fenway Park, often dubbed 'Americas most beloved Ballpark', is one of the oldest baseball stadiums
                    to date. Famous for it's Fenway Franks, its a great place to sit back, watch a baseball game, and
                    relax (granted you're willing to drop 13 dollars on a beer!). Most notably, the park features a 38
                    foot wall called "The Green Monster", the highest wall in all of baseball.
                </p>
                <br><br>
                <h3 class="subsection spacing">
                    TD Garden
                </h3>
                <p>
                    TD Garden is home to the Boston Celtics and the Boston Bruins. It is a great place to visit when a
                    game is on. Interestingly, when the Celtics need to play after the Bruins play, the floor extends
                    out over the ice, and instantly transforms the hockey rink into a bastketball court.
                </p>
            </div>
            <div class="column">
                <img src="../assets/img/aquarium.jpg" alt="aquarium" title="Aquarium" class="stateHouse">
                <img src="../assets/img/fineArts.jpg" alt="fineArts" title="Fine Arts" class="stateHouse">
                <img src="../assets/img/freedom-trail.jpg" alt="freedomTrail" title="Freedom Trail" class="stateHouse">
                <img src="../assets/img/fenway.jpg" alt="fenway" title="Fenway" class="stateHouse">
                <img src="../assets/img/celtics.jpg" alt="celtics" title="Celtics" class="stateHouse">

            </div>
        </div>
    </div>
    <?php
    include('footer.php')
    ?>
</div>

</body>
</html>