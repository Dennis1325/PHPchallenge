<?php
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

    <li class="listItems"><a class="listItems" href="insidePlaylist.php?playlist=jazzPlaylist">Jazz</a></li>
    <li class="listItems"><a class="listItems" href="insidePlaylist.php?playlist=rockPlaylist">Rock</a></li>
    <li class="listItems"><a class="listItems" href="insidePlaylist.php?playlist=hiphopPlaylist">Hip Hop</a></li>
    <li class="listItems"><a class="listItems" href="insidePlaylist.php?playlist=electroPlaylist">Electro</a></li>


</body>
<footer class="footer">
    © 2018 Company, Inc.
</footer>
</html>
<style>
    body{
        font-family: 'Roboto', sans-serif;
        background-image: url("img/Achtergrondfoto.jpg");
        text-align: center;
    }
    header{
        color: grey;
        background-color: black;
    }
    .container-fluid{
        padding-left: 10%;
    }
    .listItems{
        margin-top: 7%;
        font-size: 30px;
        color: white;
    }
    .footer{
        border-top: solid 1px black;
        margin-top: 5%;
        color: white;
        border-color: white;
        text-align: left;
    }

</style>
