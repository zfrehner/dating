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
    <div class="row">
        <div class="col-12">
            <h1>Summary</h1>
            <hr>
        </div>
        <div class="col-6">
            <label for="person" class="control-label"><strong>Personal Info</strong></label>
            <div class="col-lg-6" id="person">
                <ul class="list-group">
                    <li class="list-group-item">Name: {{ @SESSION.member->getFname() }} {{ @SESSION.member->getLname() }} </li>
                    <li class="list-group-item">Gender: {{ @SESSION.member->getGender() }}</li>
                    <li class="list-group-item">Age: {{ @SESSION.member->getAge() }}</li>
                    <li class="list-group-item">Phone: {{ @SESSION.member->getPhone() }}</li>
                    <li class="list-group-item">Email: {{ @SESSION.member->getEmail() }}</li>
                    <li class="list-group-item">State: {{ @SESSION.member->getState() }}</li>
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