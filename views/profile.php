<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="/328/dating/styles/personalInfo.css">
    <title>Profile</title>
</head>
<body>
<?php
include "../includes/navigation.html";
?>

<!--first column-->
<div class="row">
    <div class="col-lg-6">
        <div class="container">

            <h1>Profile</h1>

            <form class="form-group" id="profile" method="#">

                <div class="form-group">
                    <label class="bold" for="email" >Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label class="bold" for="state" >State</label>
                    <input type="text" class="form-control" id="state" name="state">
                </div>

                <fieldset class="form-group">

                    <label class="bold">Seeking</label>
                    <div class="radio-inline">
                        <input class="radio-inline" type="radio" name="gender" id="male" value="male">
                        <label class="radio-inline" for="male">
                            Male
                        </label>
                    </div>
                    <div class="radio-inline">
                        <input class="radio-inline" type="radio" name="gender" id="female" value="female">
                        <label class="radio-inline" for="female">
                            Female
                        </label>
                    </div>




            </form>
        </div>
    </div>

    <!--second column-->
    <div class="col-lg-6">
        <div class="container">
            <div class="form-group" id="bio">
                <label class="bold" for="bio" >Biography</label>
                <textarea class="form-control" id="biography" name="biography" rows="10" cols="25"></textarea>
            </div>
            <button class="btn btn-primary btn-lg" role="button" id="submit" type="submit">Next</button>
        </div>

    </div>

</div>

</body>
</html>