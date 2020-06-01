<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/328/dating/styles/personalInfo.css">
    <title>Personal Information</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Men</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Women</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Both</a>
            </li>
        </ul>
    </div>
</nav>

<!--first column-->
<div class="row">
    <div class="col-lg-6">
        <div class="container">

            <h1>Personal Information</h1>
            <hr>

            <form class="form-group" id="personal" action="#" method="post">

                <div class="form-group">
                    <label class="bold" for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" value=" {{ @firstName }} ">
                </div>
                <span class="err">
                    <check if="{{ isset(@errors['firstName']) }}">
                        {{ @errors['firstName'] }}
                    </check>
                </span><br>

                <div class="form-group">
                    <label class="bold" for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" value=" {{ @lastName }} ">
                </div>
                <span class="err">
                    <check if="{{ isset(@errors['lastName']) }}">
                        {{ @errors['lastName'] }}
                    </check>
                </span><br>

                <div class="form-group">
                    <label class="bold" for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" value=" {{ @age }} ">
                </div>
                <span class="err">
                    <check if="{{ isset(@errors['age']) }}">
                        {{ @errors['age'] }}
                    </check>
                </span><br>

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
                        <label class="bold" for="phone">Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phone" value=" {{ @phone }} ">
                    </div>
                    <span class="err">
                    <check if="{{ isset(@errors['phone']) }}">
                        {{ @errors['phone'] }}
                    </check>
                </span><br>

                    <label class="bold" for="premium">Premium Membership</label>
                    <div class="form-group">
                        <label for="premium"><input type="checkbox" name="premium" id="premium">
                            Sign me up for a Premium Account!
                        </label>

                    </div>
        </div>
    </div>


    <!--second column-->
    <div class="col-lg-6">
        <div class="container">
            <p id="privacy"><em>Note:</em> All information is protected by our <a href="#">privacy policy</a>. Profile
                information
                can only be viewed by others with your permission.</p>

        </div>
        <a class="container">
            <button class="btn btn-primary btn-lg" role="button" id="submit" type="submit">Next</button>
    </div>
    </form>

</div>


</body>
</html>