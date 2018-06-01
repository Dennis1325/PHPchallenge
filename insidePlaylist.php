<?php

//dit is waar je je muziek kan uitkiezen
if ($_GET["playlist"] == "jazzPlaylist"){
    echo "<p id='eersteLink' class='link'><a href='insidePlaylist.php?jazzPlaylist1'>Turnabout Jazz Soul The Fragrance of Dark Coffee</a></p><br>";
    echo "<p class='link'><a href='insidePlaylist.php?jazzPlaylist2'>Dave Brubeck - Take Five</a></p><br>";
    echo "<p class='link'><a href='insidePlaylist.php?jazzPlaylist3'>Chet Baker - Autumn Leaves</a></p>";


}
// luister naar je muziek
if (isset($_GET['jazzPlaylist1'])){
    echo "<p class='videoLink'><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/HMnrl0tmd3k\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></p>";
}
elseif (isset($_GET['jazzPlaylist2'])){
    echo "<p class='videoLink'><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/vmDDOFXSgAs\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></p>";
}
elseif (isset($_GET['jazzPlaylist3'])){
    echo "<p class='videoLink'><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/sgn7VfXH2GY\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></p>";
}
//kies je rock
if ($_GET["playlist"] == "rockPlaylist"){
    echo "<p id='eersteLink' class='link'><a href='insidePlaylist.php?rockPlaylist1'>Ghost - Dance Macabre</a></p><br>";
    echo "<p class='link'><a href='insidePlaylist.php?rockPlaylist2'>Bad Wolves - Zombie</a></p><br>";
    echo "<p class='link'><a href='insidePlaylist.php?rockPlaylist3'>Godsmack - Bulletproof</a></p>";
}
// kijk naar je rock
if (isset($_GET['rockPlaylist1'])){
    echo "<p class='videoLink'><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/vU_6fXSIqL4\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></p>";
}
elseif (isset($_GET['rockPlaylist2'])){
    echo "<p class='videoLink'><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9XaS93WMRQQ\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></p>";
}
elseif (isset($_GET['rockPlaylist3'])){
    echo "<p class='videoLink'><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/wKdOrFGojQE\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></p>";
}
// kies je hiphop
if ($_GET["playlist"] == "hiphopPlaylist"){
    echo "<p id='eersteLink' class='link'><a href='insidePlaylist.php?hiphopPlaylist1'>Praise The Lord - ASAP Rocky ft.Skepta</a></p><br>";
    echo "<p class='link'><a href='insidePlaylist.php?hiphopPlaylist2'>This is America - Childish Gambino</a></p><br>";
    echo "<p class='link'><a href='insidePlaylist.php?hiphopPlaylist3'>Nice For What - Drake</a></p>";
}
// kijk naar je hiphop
if (isset($_GET['hiphopPlaylist1'])){
    echo "<p class='videoLink'><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_eDpH4hMW1o\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></p>";
}
elseif (isset($_GET['hiphopPlaylist2'])){
    echo "<p class='videoLink'><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VYOjWnS4cMY\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></p>";
}
elseif (isset($_GET['hiphopPlaylist3'])){
    echo "<p class='videoLink'><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/U9BwWKXjVaI\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></p>";
}
//kies je electro
if ($_GET["playlist"] == "electroPlaylist"){
    echo "<p id='eersteLink' class='link'><a href='insidePlaylist.php?electroPlaylist1'>Without You - Avicii</a></p><br>";
    echo "<p class='link'><a href='insidePlaylist.php?electroPlaylist2'>Summer - Calvin Harris</a></p><br>";
    echo "<p class='link'><a href='insidePlaylist.php?electroPlaylist3'>More Than You Know - Axwell /\ Ingrosso</a></p>";
}
elseif (isset($_GET['electroPlaylist1'])){
    echo "<p class='videoLink'><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/WRz2MxhAdJo\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></p>";
}
elseif (isset($_GET['electroPlaylist2'])){
    echo "<p class='videoLink'><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ebXbLfLACGM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></p>";
}
elseif (isset($_GET['electroPlaylist3'])){
    echo "<p class='videoLink'><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/GsF05B8TFWg\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></p>";
}


?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>SpotiTube</title>
</head>
<body>
<nav id="Header" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a id="NavName" class="navbar-brand" href="index.php">SpotiTube</a>
        </div>
        <ul id="Links" class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="playlist.php">Playlists</a></li>
        </ul>
    </div>
</nav>
<footer class="footer">
    © 2018 Company, Inc.
</footer>


</body>
</html>
<style>
    body{
        font-family: 'Roboto', sans-serif;
        background-image: url("img/Achtergrondfoto.jpg");
    }
    header{
        color: grey;
        background-color: black;
    }
    .container-fluid{
        padding-left: 10%;
    }
    .link{
        font-size: 30px;
        margin-top: 10px;
        text-align: center;
    }
    #eersteLink {
        margin-top: 10%;
    }
    .videoLink{
        margin-top: 10%;
        text-align: center;
    }
    .footer{
        border-top: solid 1px black;
        margin-top: 5%;
        color: white;
        border-color: white;
    }
    a{
        color: white;
        text-underline: none;
    }
    a:hover{
        color: black;
    }

</style>

