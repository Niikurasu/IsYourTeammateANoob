<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        
        <script src="Scripts/api-request.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="Styles/style.css">
    </head>
    <body>
    <form action="score.php" method="post">
    
      <center>
            <h1>Let's see if your teammate is a noob.<h1>
            <input type="text" placeholder="username" id="username" name="username"> <br><br>
            <button>PC</button> <button>XBOX</button> <button>PSN</button>
            <br><br><br><br>
            <button id='button' type='submit' name="someAction">Are you a noob?</button>
      <center>
    </form>
    </body>

</html>