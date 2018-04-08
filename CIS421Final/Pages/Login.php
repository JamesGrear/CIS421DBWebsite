<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Login
        </title>
        <link rel="shortcut icon" href="../over.png">
        <link rel = "stylesheet"  href="../CSS/Styles.css"> 
    </head>
    <body id="login">
     <div class="row">
        <div class ="column2" style="background-color: #f99e1a;">
            <h2>Already signed up? Log in here.</h2>
            <form id="FormUse" name="FormUse" method ="post" action="Roles.php">
                <label for="olduse" id="old">Returning User</label> 
                <select id="olduse" name="olduse">
                    <option>--Pick Name Here--</option>
                </select>
                <br>
                <label for="newuse" id="old2">New User</label> <input type="text" id="new" name="newuse">
                <br><br>
                <input type="submit" value ="Login" id="sbmtuse" name="sbmtuse">
            </form>
        </div>
<?php

?>
     </div>  
  </body>
</html>
