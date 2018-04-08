<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Roles
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
        
        <form id="FormRoles" name="FormRoles" method ="post" action="Stats.php">
        <div id="content">
            <div id="header">
                <h1><em>YOUR OWN PERSONALIZED DATABASE!</em></h1>
            </div>
    <p align="center"> Information highlighted in green relates to the game, otherwise information entered correlates to your hero</p>
                <p><h2 align="center"> 1. Choose your role </h2></p>
            <select id="RDrop" onchange="showdrop()">
                <option value="0" id="non">-- Select Role --</option>
                <option value="1" id="off">Defense</option>
                <option value="2" id="def">Support</option>
                <option value="3" id="tan">Tank</option>
                <option value="4" id="sup">Offense</option>
            </select>
            <br>
            
            <div id="f1" style="display: none">
            <p><h2 align="center"> 2. Choose your hero </h2></p>
            <select id="Rdrop"  onchange="showdrop()">
                <option>Bastion </option>
                <option>Hanzo</option>
                <option>Junkrat</option>
                <option>Mei</option>
                <option>Torbjörn</option>
                <option>Widowmaker</option>
            </select>
            </div>
            
            <br>
            
            <div id="f2" style="display: none">
            <p><h2 align="center"> 2. Choose your hero </h2></p>
            <select id="RDrop" onchange="showdrop()">
                <option>Ana </option>
                <option>Brigitte</option>
                <option>Lúcio</option>
                <option>Mercy</option>
                <option>Moira</option>
                <option>Symmetra</option>
                <option>Zenyatta</option>
            </select>
            </div>
            
            <br>
            
            <div id="f3" style="display: none">
            <p><h2 align="center"> 2. Choose your hero </h2></p>
            <select id="RDrop" onchange="showdrop()">
                <option>D.Va </option>
                <option>Orisa</option>
                <option>Reinhardt</option>
                <option>Roadhog</option>
                <option>Winston</option>
                <option>Zarya</option>
            </select>
            </div>
            
            <br>
            
            <div id="f4" style="display: none">
            <p><h2 align="center"> 2. Choose your hero </h2></p>
             <select id="RDrop" onchange="showdrop()">
                <option>Doomfist </option>
                <option>Genji</option>
                <option>McCree</option>
                <option>Pharah</option>
                <option>Reaper</option>
                <option>Soldier: 76</option>
                <option>Sombra</option>
                <option>Tracer</option>
            </select>
            </div>
            <br><br>
            <input type="submit" value ="submit" id="sbmtrol" name="sbmtrol">
        </div>
        </form>
<?php

?>
  </body>
    <footer align="center">&copy; James Grear 2018</footer>
</html>
