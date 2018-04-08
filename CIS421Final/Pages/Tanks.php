<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Tanks
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
        
        <form id="FormTan" name="FormTan" method ="post" action="Ranking.php">
        <div id="content">
            <div id="header">
                <h1><em>YOUR OWN PERSONALIZED DATABASE!</em></h1>
            </div>
            
            <select id="Tdrop">
                <option>D.Va </option>
                <option>Orisa</option>
                <option>Reinhardt</option>
                <option>Roadhog</option>
                <option>Winston</option>
                <option>Zarya</option>
            </select>
            <br><br>
           <div id="txtr">
            <input type="text" id="tantxt" >
            <input type="text" id="tantxt2" >
            <input type="text" id="tantxt3" >
            <input type="submit" value ="submit" id="sbmtdef" name="sbmtdef">
           </div>
        </form>
        </div>
<?php

?>
  </body>
    <footer align="center">&copy; James Grear 2018</footer>
</html>