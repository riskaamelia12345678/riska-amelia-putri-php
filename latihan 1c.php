<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1c</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

   .container {
            display: flex;
            flex-direction: column; /* Stack rows vertically */
            border: 1px solid #ccc; /* Outline for the main shape */
            padding: 10px; /* Some padding inside the main outline */
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .row {
            display: flex;
        }

        .box {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            margin: 2px; /* Small margin between boxes for separation */
        }
    </style>
</head>
<body>

    <div class="container">
        <?php
        // Define variables for the letters
        $letterA = "A";
        $letterB = "B";
        $letterC = "C";
        ?>

        <div class="row">
            <div class="box"><?php echo $letterA; ?></div>
        </div>
        <div class="row">
            <div class="box"><?php echo $letterA; ?></div>
            <div class="box"><?php echo $letterB; ?></div>
        </div>
        <div class="row">
            <div class="box"><?php echo $letterA; ?></div>
            <div class="box"><?php echo $letterB; ?></div>
            <div class="box"><?php echo $letterC; ?></div>
        </div>
    </div>

</body>
</html>