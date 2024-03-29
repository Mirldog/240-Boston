<!--overview topics covered, pictures etc-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boston</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/slide.js"></script>
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,500|Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body class="index">

    <div class="navBar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img class="icon" src="assets/img/boston_icon.png" alt="icon"/>
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
                    <li class="nav-item active auto">
                        <a class="nav-link navItem" href="">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item auto">
                        <a class="nav-link navItem" href="pages/area.php">Area</a>
                    </li>
                    <li class="nav-item auto">
                        <a class="nav-link navItem" href="pages/attractions.php">Attractions</a>
                    </li>
                    <li class="nav-item auto">
                        <a class="nav-link navItem" href="pages/food.php">Food</a>
                    </li>
                    <li class="nav-item auto">
                        <a class="nav-link navItem" href="pages/history.php">History</a>
                    </li>
                    <li class="nav-item auto">
                        <a class="nav-link navItem" href="pages/jobs.php">Jobs</a>
                    </li>
                    <li class="nav-item auto">
                        <a class="nav-link navItem" href="pages/sports.php">Sports</a>
                    </li>
                    <li class="nav-item auto">
                        <a class="nav-link navItem" href="pages/comments.php">Comments</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto last">
                    <li class="nav-item auto">
                        <a class="nav-link navItem noBorder" href="pages/form.php">Form</a>
                    </li>
                    <li class="nav-item auto">
                        <a class="nav-link navItem noBorder" href="pages/contact.php">Contact</a>
                    </li>
                    <li class="nav-item auto">
                        <a class="nav-link navItem noBorder" href="pages/resources.php">Resources</a>
                    </li>
                    <li class="nav-item auto">
                        <a class="nav-link navItem noBorder" href="pages/grading.php">Grading</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="content">
        <div class="leftBar"></div>
        <div class="rightBar"></div>
        <div class="skylineImgContainer">
            <img src="assets/img/boston-skyline.jpg" class="skylineImg" alt="City skyline" title="City Skyline">
        </div>
        <div class="dceIndex">
            <div class="opening">
                <h1>The City of Boston</h1>
                <p class="openText">
                    Welcome to Boston, a beautiful city with lots to do, and places to go. There is so much to discover
                    here, with new and interesting places around seemingly every corner. From its long rich history,
                    to its relentless sports teams, its competitive job market, or its endless selection of incredible
                    restaurants, Boston is an amazing place to visit, or even live. You'll never get bored of the views,
                    or the attractions either. There are seasonal events, yearly traditions, and plenty of places to go
                    out and have fun if you are bored.

                    Its even easy to get around, as public transportation is abundant from all parts of the city. Buses
                    are easy to find, or there are public bikes that can be found and ridden all around the town.
                </p>

            </div>

            <div class="openingImage">
                <img src="assets/img/winterweather.jpg" id="slides" class="winter" title="Winter storm" alt="Boston winter">
            </div>
            <?php
            include('footer.php')
            ?>

        </div>


    </div>




</body>
</html>