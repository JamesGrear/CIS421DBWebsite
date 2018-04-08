<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Stats
        </title>
        <link rel="shortcut icon" href="../over.png">
        <link rel = "stylesheet"  href="../CSS/Styles.css"> 
        <script src="../JavaScript/ClickFunctionality.js"></script>
    </head>
    <body>
    <nav>
         <ul>
             <li><a href ="../index.php">Home</a></li>
             <li><a href="Ranking.php">Ranking</a></li>
             <li><a href ="Login.php">Game</a></li>
         </ul>
    </nav> 
    <form id="FormStats" name="FormStats" method ="post" action="Ranking.php">
    <div id="content">
    <div id="txtr">
                <div id="gam">
                    <p><h4 align="center"> Enter GameID </h4></p>
                    <input type="text" id="roltxt">
                    <br>
                    <p><h4 align="center"> Enter Map</h4></p>
                    <input type="text" id="roltxt">
                    <p><h4 align="center"> Enter Time Played </h4></p>
                    <input type="text" id="roltxt">
                </div>
                   <br>
                <p><h4 align="center"> Enter Damage </h4></p>
                <input type="text" id="roltxt">
                <p><h4 align="center"> Enter Healing </h4></p>
                <input type="text" id="roltxt">
                <p><h4 align="center"> Enter Time Played </h4></p>
                <input type="text" id="roltxt">
                <p><h4 align="center"> Enter Kills </h4></p>
                <input type="text" id="roltxt">
                <p><h4 align="center"> Enter Deaths </h4></p>
                <input type="text" id="roltxt">
                <p><h4 align="center"> Enter Games Won </h4></p>
                <input type="text" id="roltxt">
                <br><br>
                <input type="submit" value ="submit" id="sbmtstat" name="sbmtstat">
    </div>
    </div>
        <?php

?>
    </form>
  </body>
    <footer align="center">&copy; James Grear 2018</footer>
</html>

