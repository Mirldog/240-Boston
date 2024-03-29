<!--on the ocean, attractions of places-->
<!--in nearby cities/towns, architecture/-->
<!--building structures-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Area</title>
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
        <div class="row">
            <div class="sportsIntro">
                <h1 >
                    The Look of Boston
                </h1>
                <p>
                    Boston is full of vastly different neighborhoods and sections. These different areas can have
                    vastly different looks and feels to them. The business district is full of tall corporate office
                    buildings, while another borough of Boston will be full of stone masonry, loaded with
                    architecture from the 1600's. Due to Bostons old age, there is a wide range of different looks
                    that it accomplishes, creating a beautiful mix of old vintage and modern city.
                </p>
            </div>
            <div class="column">
                <h2>Notable Buildings</h2>
                <h3 class="subsection">
                    The State House
                </h3>
                <p>
                    The state house is a very notable building, and stands today as a US National Historic Landmark.
                    The building, designed by architect Charles Bulfinch, was completed in January of 1798. It is
                    considered an architectural masterpiece. Note the gold color on the dome of the building. Originally
                    the top of this building was not gold. When it was built, it was made of wood, only to be later
                    covered in copper due to leakage. Later the decision was made to make the dome gray, and then light
                    yellow. Then it was gilded in gold leaf. Before the advent of the skyscraper, it was the State House
                    dome that dominated the Boston skyline.
                </p>

                <h3 class="subsection">
                    The Harvard Science Center
                </h3>
                <p>
                    The Harvard Science Center is a very interesting looking building, with very little orthodox
                    architectural design standards followed. It was designed and built in the 1950's - 1960's. However
                    at this time, the economy was in the midst of decline, so funding was hard to come by. That was
                    until Polaroid inventor Edwin Land decided to fund the project and made a 12.5 million dollar
                    donation.
                </p>

                <h2>Ocean View</h2>
                <h3 class="subsection">Boston Harbor</h3>
                <p>
                    Boston succeeded as a city thanks to its close proximity to the ocean, allowing there to be a harbor
                    incoming and outgoing shipments. While the Harbor used to be one of the filthiest bodies of water in
                    America, recent reform has transformed it into among the cleanest. Because of its history of being
                    a filthy body of water, a song by The Standells was written in 1966 called "Dirty Water". That song
                    to this day is a Red Sox anthem to a victory at Fenway Park.
                </p>
            </div>
            <div class="column">
                <img src="../assets/img/statehouse.jpg" alt="statehouse" title="State House" class="stateHouse">
                <img src="../assets/img/scienceCenter.jpg" alt="scienceCenter" title="Science center" class="stateHouse spacing">
                <img src="../assets/img/harbor.jpg" alt="harbor" title="Harbor" class="stateHouse harbor">


            </div>
        </div>

    </div>
    <?php
    include('footer.php')
    ?>
</div>

</body>
</html>