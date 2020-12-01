<!--
Author: Rachel Westwater
Using HTML with inline CSS and ajax
to allow the PHP to be 
rendered in a browser 
-->

<DOCTYPE html>
    <html lang = 'en'>
    <head>
        
        <meta charset = 'UTF-8'>
        <title> Cyberhawk Turbine Challenge </title>

        <link rel = 'shortcut icon' type = 'image/x-icon' href = 'favicon.ico' />
        
        <style>
            body {
                background-image: url('/assets/cloud_background.png');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                color: white;
                font-family: verdana;
            }
        
        </style>
    </head>

    <body>
        <h1 style = "text-align: center;" style = "backdrop-filter: blur(100px);" > Cyberhawk Turbine Challenge </h1>
        <p style = "text-align: center; margin: 10px;">Spin the wind turbine to inspect the items!</p>
        
        <!-- click button options -->
        <form>
            <input type = "button" value = "Spin Wind Turbine" id = "output" style = "display: block; margin: 0 auto;" onclick = "loadWindTurbine()" /> <!--centers submit button-->
        </form>


        <!-- using ajax to call windTurbine function from model -->
        <script>
            function loadWindTurbine() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("display_message").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "/model/wind_turbine.php", true);
            xhttp.send();
            }
        </script>
        
        <div id = "display_message" style = "text-align: center;" ></div>

    </body>