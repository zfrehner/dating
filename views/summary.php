<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="/328/dating/styles/personalInfo.css">
    <title>Summary</title>
</head>
<body>
<?php
include "../includes/navigation.html";
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Summary</h1>
            <hr>
        </div>
        <div class="col-6">
            <label for="person" class="control-label"><strong>Personal Info</strong></label>
            <div class="col-lg-6" id="person">
                <ul class="list-group">
                    <li class="list-group-item">Name: {{ @SESSION.firstName}} {{ @SESSION.lastName}} </li>
                    <li class="list-group-item">Gender: {{ @SESSION.gender}}</li>
                    <li class="list-group-item">Age: {{ @SESSION.age}}</li>
                    <li class="list-group-item">Phone: {{ @SESSION.phone}}</li>
                    <li class="list-group-item">Email: {{ @SESSION.email}}</li>
                    <li class="list-group-item">State: {{ @SESSION.states}}</li>
                    <li class="list-group-item"><check if="{{ isset(@SESSION.indoor) }}">
                            Interests: {{ implode(@SESSION.indoor, ", ") }}, {{ implode(@SESSION.outdoor, ", ") }}
                        </check></li>
                    <li class="list-group-item">Seeking: {{ @SESSION.seeking}}</li>
                </ul>
            </div>
        </div>
        <div class="col-6">
            <div class="col-lg-6">
                <label for="person" class="control-label"><strong>Image</strong></label>
                <img src="images/man.png" class="rounded mx-auto d-block" >
            </div>
            <div class="mt-4 mb-4">
                <label for="person" class="bold col-mx-6 control-label">Biography</label>
                <div class="col-lg-6">
                    <p>{{ @SESSION.biography}}</p>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4 text-center">
            <a href="#"  class="btn btn-primary btn-lg align-center" id="contact">Contact Me!</a>
        </div>
    </div>
</div>
</body>
</html>