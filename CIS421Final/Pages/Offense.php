<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Offense
        </title>
        <link rel="shortcut icon" href="../over.png">
        <link rel = "stylesheet"  href="../CSS/Styles.css"> 
    </head>
    <body>
        <nav>
             <ul>
                 <li><a href ="../index.php">Home</a></li>
                 <li><a href="Ranking.php">Ranking</a></li>
                 <li><a href ='#'>Roles</a>
                    <ul>
                        <li><a href ="Support.php">Support</a></li>
                        <li><a href ="Offense.php">Offense</a></li>
                        <li><a href ="Defense.php">Defense</a></li>
                        <li><a href ="Tanks.php">Tank</a></li>
                    </ul> 
                 </li>
             </ul>
        </nav>     
        
        <div id="content">
            <div id="header">
                <h1><em>YOUR OWN PERSONALIZED DATABASE!</em></h1>
            </div>
            
            <form id="FormOff" name="FormOff" method ="post" action="Ranking.php">
            <select id="Odrop">
                <option>Doomfist </option>
                <option>Genji</option>
                <option>McCree</option>
                <option>Pharah</option>
                <option>Reaper</option>
                <option>Soldier: 76</option>
                <option>Sombra</option>
                <option>Tracer</option>
            </select>
            <br><br>
           <div id="txtr">
            <input type="text" id="Offtxt" >
            <input type="text" id="Offtxt2" >
            <input type="text" id="Offtxt3" >
            <input type="submit" value ="submit" id="sbmtoff" name="sbmtoff">
           </div>
            </form>
        </div>
<?php

?>
  </body>
    <footer align="center">&copy; James Grear 2018</footer>
</html>