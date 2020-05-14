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
<?php
include "328/dating/includes/navigation.html";
?>
<div class="container">
    <form class="form-group" id="profile" method="post" action="#">
        <h1>Profile</h1>
        <hr>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label class="bold" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label class="bold" for="states">States</label>
                    <select class="bold custom-select" name="states" id="states">
                        <repeat group="{{ @states }}" value="{{ @state }}">
                            <option value="{{ @states }}" value="{{ @state }}">{{ @state }}</option>
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