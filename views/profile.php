<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/328/dating/styles/personalInfo.css">
    <title>Profile</title>
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
<div class="container">
    <form class="form-group" id="profile" method="post" action="#">
        <h1>Profile</h1>
        <hr>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label class="bold" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value=" {{ @email }} ">
                </div>
                <span class="err">
                    <check if="{{ isset(@errors['email']) }}">
                        {{ @errors['email'] }}
                    </check>
                </span><br>

                <div class="form-group">
                    <label class="bold" for="states">States</label>
                    <select class="bold custom-select" name="states" id="states">
                        <repeat group="{{ @states }}" value="{{ @state }}">
                            <option  name='states' value="{{ @state }}">{{ @state }}</option>
                            <check if="{{ @states == @selected }}">selected="selected"</check>>{{ @states }}</option>
                        </repeat>
                    </select>
                </div>
                <fieldset class="form-group">
                    <label class="bold">Seeking</label>
                    <div class="radio-inline">
                        <input class="radio-inline" type="radio" name="seeking" id="male" value="male">
                        <label class="radio-inline" for="male">
                            Male
                        </label>
                    </div>
                    <div class="radio-inline">
                        <input class="radio-inline" type="radio" name="seeking" id="female" value="female">
                        <label class="radio-inline" for="female">
                            Female
                        </label>
                    </div>
                    <label class="bold" for="premium">Premium Membership</label>
                    <div class="form-group">
                        <label for="premium"><input type="checkbox" name="premium" id="premium">
                        Sign me up for a Premium Account!
                        </label>

                    </div>
                </fieldset>
            </div>


            <div class="col">
                <div class="form-group">
                    <label class="bold" for="bio">Biography</label>
                    <textarea class="form-control" id="bio" name="biography" rows="10"
                                                             cols="25"></textarea>
                </div>
                <div>
                    <button class="btn btn-primary btn-lg" id="submit" type="submit">Next</button>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>