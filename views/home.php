<!--Zach frehner
4/28/2020
home.php page
main view/entry page for the dating site-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="/328/dating/styles/styles.css">
    <title>Gunslingin' Singles</title>
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

<div class="main">
<!--first column-->
<div class="row">
    <div class="col">
        <div class="container left">
        <h1>Gunslingin' Singles</h1>
        <h3>The couple who shoots together, stays together.</h3>
            <br>
            <p>Welcome to the safest dating site on the web today! At my dating site you will meet other like minded
            individuals. We have the highest safety record of any dating site. Everyone here has a gun. User's are matched by
            gun type and location. Find out why so many others have found their life-long shooting partner!</p>

            <br>
            <h4>Hear what our users are saying about us!</h4>
            <div class="lines">
                <p><em>"I felt so safe knowing my date had a gun to protect me, and I even had a gun myself!" - Shelly</em></p>
                <p><em>"It was so easy to find a great woman on here! If you love guns, what's not to love?!" - John</em></p>
                <p><em>"You would be shocked how many matches you can find on this site! You won't have to look far, and everyone
                is really good looking!" - Melissa</em></p>
            </div>
            <a href="personalInfo" class="btn btn-primary btn-lg" id="submit">Create a Profile!</a>
        </div>
    </div>


<!--second column-->
    <div class="col">
        <div class="container">
        <img src="/328/dating/images/shooting.jpg" alt="Shooting Couple">
        </div>
    </div>
</div>

</div>

</body>
</html>