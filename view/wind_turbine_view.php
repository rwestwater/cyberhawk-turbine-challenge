<!--
Author: Rachel Westwater
Using HTML with inline CSS and ajax
to allow the PHP to be 
rendered in a browser 
-->

<DOCTYPE html>
    <html lang='en'>
    <head>
        
        <meta charset='UTF-8'>
        <title> Cyberhawk Turbine Challenge </title>

        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
        
        <!-- styling background -->
        <style>
            body {
                background-color: #e6f8ff;
                font-family: verdana;
            }
        </style>

    </head>

    <body>
        <!-- header text and turbine gif styling -->
        <h1 style="text-align: center; color: #4e8a9f; margin: 20px;"> Cyberhawk Turbine Challenge </h1>
        <center><img src="/assets/wind_turbine.gif" alt="A picture of a wind turbine in a field" style="margin: 20px;"></center>
        <h3 style="text-align: center; color: #4e8a9f; margin: 20px;"> Spin the wind turbine to inspect the items! </h3>
        
        <!-- click button options -->
        <form>
            <input type="button" value="Spin Wind Turbine" id="output" style="display: block; 
                                                                              margin: 40px auto; 
                                                                              background-color: #4e8a9f; 
                                                                              border: none; 
                                                                              color: white;" onclick="loadWindTurbine()"/>
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
        
        <!-- render ajax call on page-->
        <div style="color: #4e8a9f; text-align: center;"  >
            <marquee direction="up" height="200" width="450" bgcolor="#e6f8ff" text-color="#4e8a9f"><div id="display_message" style="text-align: center;" ></div></marquee>
        </div>    
    </body>