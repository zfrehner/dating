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
<?php
include "../includes/navigation.html";
?>
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
                                      value="{{ @indoor }}"> {{ ucfirst(@activity) }}</label><br>
                    </repeat>
                </div>
            </div>
<h3>Outdoor Interests</h3>
            <hr>

            <!-- get outdoor -->
            <div class="form-group">
                <!--<label class="col-sm-2 control-label"></label>-->
                <div class="col-sm-4">

                    <repeat group="{{ @outdoor }}" value="{{ @activity }}">
                        <label><input type="checkbox"
                                      name="outdoor[]"
                                      value="{{ @outdoor }}"> {{ ucfirst(@activity) }}</label><br>
                    </repeat>
                </div>
            </div>


    <button class="btn btn-primary btn-lg" role="button" id="submit" type="submit">Next</button>
        </form>
</div>
</div>


</body>
</html>