<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="/328/dating/styles/personalInfo.css">
    <title>Personal Information</title>
</head>
<body>
<?php
    include "../includes/navigation.html";
?>

    <!--first column-->
    <div class="row">
        <div class="col-lg-6">
            <div class="container">

    <h1>Personal Information</h1>

    <form class="form-group" id="personal" method="#">

        <div class="form-group">
            <label class="bold" for="firstName" >First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName">
        </div>

        <div class="form-group">
            <label class="bold" for="lastName" >Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName">
        </div>

        <div class="form-group">
            <label class="bold" for="age" >Age</label>
            <input type="number" class="form-control" id="age" name="age">
        </div>

        <fieldset class="form-group">

            <label class="bold">Gender</label>
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

            <div class="form-group">
                <label class="bold" for="phone" >Phone Number</label>
                <input type="number" class="form-control" id="phone" name="phone">
            </div>



    </form>
            </div>
        </div>




        <!--second column-->
        <div class="col-lg-6">
            <div class="container">
        <p id="privacy"><em>Note:</em> All information is protected by our <a href="#">privacy policy</a>. Profile information
        can only be viewed by others with your permission.</p>

    </div>
            <div class="container">
            <button class="btn btn-primary btn-lg" role="button" id="submit" type="submit">Next</button>
            </div>

</div>

    </div>





</body>
</html>