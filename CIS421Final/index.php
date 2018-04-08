 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Overwatch Stats 
        </title>
        <link rel="shortcut icon" href="over.png">
        <link rel = "stylesheet"  href="CSS/Styles.css"> 
    </head>
    <body>
        <nav>
             <ul>
                 <li><a href ="index.php">Home</a></li>
                 <li><a href="Pages/Ranking.php">Ranking</a></li>
                 <li><a href ="Pages/Roles.php">Game</a>
                 </li>
             </ul>
        </nav>  
        
        <div id="content">
            <div id="header">
                <h1><em>YOUR OWN PERSONALIZED DATABASE!</em></h1>
            </div>
           
            <p> This is a website which holds all of your stats</p>
            <p>It serves as your own personal tool to store everything overwatch</p>
            <p>Feel free to also head over to rankings and see how you stack up against the competition</p>
            
            <h2 align="center">Bug Fixes</h2>
            <ul id="bugs">      
                <li> Fixed a bug that sometimes failed to teleport players using Symmetra’s Teleporter if they used an ability that increased their movement speed when passing through it (e.g. Doomfist’s Rocket Punch)</li>
                <li>Fixed a bug that caused some objects to block projectiles on Blizzard World (e.g. souvenir carts)</li>
                <li>Fixed a bug that prevented the “Restore Defaults” button from resetting all settings in the Social Options tab</li>
                <li>Fixed a bug that caused players to delete characters in the “Save Highlight” text box if they pressed down the delete input while their settings were below 60 FPS</li>
                <li> Fixed a bug that caused the user interface to indicate two control points on a single control point map when playing a custom game</li>
            </ul>
        </div> 
        <?php
        // put your code here
        ?>
    </body>
    <footer align="center">&copy; James Grear 2018</footer>
</html>
