<!--
Author: Rachel Westwater
Embedding PHP within a HTML 
file to allow the PHP to be 
rendered in a browser 
-->

<DOCTYPE html>
    <html lang='en'>
    <head>
        
        <meta charset='UTF-8'>
        <title> Cyberhawk Turbine Challenge </title>
        <link rel='shortcut icon' type='image/x-icon' href='/assets/turbine_favicon.png' />
        
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
        <h1 style="text-align: center;" > Cyberhawk Turbine Challenge </h1>
        <p style="text-align: center;">Spin the wind turbine to inspect the items!</p>
        <form action="/model/wind_turbine.php">
            <input type="submit" value="Spin Wind Turbine" style="display: block; margin: 0 auto;"/> <!--centers submit button-->
        </form>  
    </body>