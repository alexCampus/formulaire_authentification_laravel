<!DOCTYPE html>
<html>
    <head>
        <title>Be right back.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Be right back.</div>
                <p>Return to Home</p>
                <p id="id"></p>
                <a href="/"><button>HOME</button></a>
            </div>
        </div>
        <script type="text/javascript">
         <!--
            function Redirect() {
               window.location="/";
            }
            
            document.getElementById('id').innerHTML= "You will be redirected to main page in 5 sec.";
            setTimeout('Redirect()', 5000);
         //-->
      </script>
    </body>
</html>
