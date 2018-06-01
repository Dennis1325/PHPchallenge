<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>SpotiTube</title>
</head>
<body>
<div id="wrapper">

<div id="header">
    <nav id="Header" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a id="NavName" class="navbar-brand" href="index.php">SpotiTube</a>
            </div>
            <ul id="Links" class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="playlist.php">Playlists</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="playlists">
<li name="playlists[]">
    <lu>
        <div class="playlist" class="container-fluid">
            <a href="insidePlaylist.php?playlist=jazzPlaylist"><img name="jazzPlaylist" src="img/jazz.jpg"></a><br>
            <h4>Jazz</h4>
        </div>
    </lu>
    <lu>
        <div class="playlist" class="container-fluid">
            <a href="insidePlaylist.php?playlist=rockPlaylist"><img name="rockPlaylist" src="img/rock.jpg"></a>
            <h4>Rock</h4>
        </div>
    </lu>
    <lu><div class="playlist">
            <a href="insidePlaylist.php?playlist=hiphopPlaylist"><img name="hiphopPlaylist" src="img/hiphop.gif"></a>
            <h4>HipHop</h4>
        </div>
    </lu>
    <lu>
        <div class="playlist" id="electroPlaylist" class="container-fluid">
            <a href="insidePlaylist.php?playlist=electroPlaylist"><img name="electroPlaylist" src="img/electro.jpg"></a>
            <h4>Electro</h4>
        </div>
    </lu>
</li>
</div>


</div>



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
    .playlist{
        margin-top: 6%;
        margin-left: 10%;
        padding: 80px;
        float: left;
        text-align: center;
    }
    .playlist:hover{
        transition: 0.5s;
        -webkit-transform: scale(1.5);
    }
    h4{
        color: white;
    }
</style>
<?php
$conn = mysqli_connect('localhost','root','****','playlistdatabase');

if ($conn -> connect_error){
    die("connection failed: " . $conn->connect_error);
}
?>
