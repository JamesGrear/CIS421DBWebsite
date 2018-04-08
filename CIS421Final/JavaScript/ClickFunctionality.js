/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function showdrop() {
        var rolename = document.getElementById("RDrop").value;
        
        if (rolename == 0) {
            document.getElementById("f1").style.display = "none";
            document.getElementById("f2").style.display = "none";
            document.getElementById("f3").style.display = "none";
            document.getElementById("f4").style.display = "none";
        }
        if (rolename == 1) {
            document.getElementById("f1").style.display = "block";
            document.getElementById("f2").style.display = "none";
            document.getElementById("f3").style.display = "none";
            document.getElementById("f4").style.display = "none";
        }
        if (rolename == 2) {
            document.getElementById("f1").style.display = "none";
            document.getElementById("f2").style.display = "block";
            document.getElementById("f3").style.display = "none";
            document.getElementById("f4").style.display = "none";
        }
        if (rolename == 3) {
            document.getElementById("f1").style.display = "none";
            document.getElementById("f2").style.display = "none";
            document.getElementById("f3").style.display = "block";
            document.getElementById("f4").style.display = "none";
        }
        if (rolename == 4) {
            document.getElementById("f1").style.display = "none";
            document.getElementById("f2").style.display = "none";
            document.getElementById("f3").style.display = "none";
            document.getElementById("f4").style.display = "block";
        }
    }
