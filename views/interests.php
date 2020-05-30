<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="/328/dating/styles/personalInfo.css">
    <title>Interests</title>
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
<h1>Interests</h1>


<h3>Indoor Interests</h3>
    <hr>
    <div class="form-check">
        <form action="#" method="post" class="form-horizontal">

            <!-- get indoor -->
            <div class="form-group">
                <!--<label class="col-sm-2 control-label"></label>-->
                <div class="col-sm-4">


                    <repeat group="{{ @indoor }}" value="{{ @activity }}">
                        <label><input type="checkbox"
                                      name="indoor[]"
                                      value="{{ @activity }}"
                        <check if="{{ !empty(@selectedIndoor) && in_array(@activity, @selectedIndoor) }}">checked="checked"</check>>{{ ucfirst(@activity) }}
                        </label><br>
                    </repeat>
                </div>
                <span class="err">
                    <check if="{{ isset(@errors['indoor']) }}">
                        {{ @errors['indoor'] }}
                    </check>
                </span><br>
            </div>
<h3>Outdoor Interests</h3>
            <hr>

            <!-- get outdoor -->
            <div class="form-group">
                <!--<label class="col-sm-2 control-label"></label>-->
                <div class="col-sm-4">

                    <repeat group="{{ @outdoor }}" value="{{ @activity2 }}">
                        <label><input type="checkbox"
                                      name="outdoor[]"
                                      value="{{ @activity2 }}"
                            <check if="{{ !empty(@selectedOutdoor) && in_array(@activity2, @selectedOutdoor) }}">checked="checked"</check>>{{ ucfirst(@activity2) }}
                        </label><br>
                    </repeat>
                </div>
                <span class="err">
                    <check if="{{ isset(@errors['outdoor']) }}">
                        {{ @errors['outdoor'] }}
                    </check>
                </span><br>
            </div>


    <button class="btn btn-primary btn-lg" role="button" id="submit" type="submit">Next</button>
        </form>
</div>
</div>


</body>
</html>