<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
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
                Survey
            </h1>
            <p>
                Please fill out this form to let me know how your visit to Boston was!
            </p>
        </div>

        <form method="GET" onclick="return formValidate()" action="process.php">
            <div class="container">
                <div class="left">

                    <fieldset>
                        <legend>Boston Data</legend>
                        <p>What your favorite attraction?</p>
                        <select name="selection" id="fav">
                            <option value=null>--Please choose one--</option>
                            <option value="Fanueil Hall">Fanueil Hall</option>
                            <option value="Fenway Park">Fenway Park</option>
                            <option value="TD Garden">TD Garden</option>
                            <option value="Freedom Trail">Freedom Trail</option>
                            <option value="Aquarium">Aquarium</option>
                            <option value="Prudential Center">Prudential Center</option>
                        </select>

                        <p>Name One thing you ate while you were there</p>
                        <input type="text" name="attraction" placeholder="Food" id="food">


                        <p>Have you gone to a Sports game?</p>
                        <div class="indent">
                            <label for="yes"> Yes:<input type="radio" id="yes" name="attended" value="Yes"/></label>
                            <label for="no"> No:<input type="radio" id="no" name="attended" value="No" /></label>
                        </div>


                        <p>Restaurants you've eaten at</p>
                        <div class="spot">
                            <label for="Bocca">Bocca<input type="checkbox" id="Bocca" name="position" /></label>

                            <label for="Regina">Regina<input type="checkbox" id="Regina" name="position" /></label>

                            <label for="Restaurant 34">Restaurant 34<input type="checkbox" id="Restaurant 34" name="position" /></label>

                            <label for="Sorrelina">Sorellina<input type="checkbox" id="Sorrelina" name="position" /></label>

                            <label for="Other">Other<input type="checkbox" id="Other" name="position" /></label>
                        </div>


                        <div>
                            <p class="rating">How would you rate your experience?</p>
                            <input type="range" name="exp" id="myRange" min="0" max="5" step="1" list="volsettings"/>
                            <datalist id="volsettings" class="volset">
                                <option value=0>0</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                            </datalist>
                        </div>


                        <p>Please write out your favorite moment in Boston</p>
                        <textarea name="ta" id="ta"></textarea>
                    </fieldset>
                </div>

                <div class="right">
                    <fieldset>
                        <legend>Personal Data</legend>

                        <p>Your Name :</p>
                        <input id="name" type="text" name="name" placeholder="Your Full Name" />

                        <p>Your Email :</p>
                        <input id="email" type="email" name="email" placeholder="Valid Email Address" />

                        <p>Date Visited</p>
                        <input id="date" type="date" name="date" placeholder="Date" />

                    </fieldset>
                </div>

                <div class="button-container">
                    <input type="submit" class="button" value="Send" onclick="validateForm()" />
                </div>

            </div>

        </form>
    </div>
    <?php
    include('footer.php')
    ?>
</div>

</body>
</html>
