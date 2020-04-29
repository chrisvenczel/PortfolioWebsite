<!DOCTYPE html>
<html>

<head>
    <?php include 'Includes/headInfo.php';?>

    <link rel="stylesheet" href="CSS/index.css">
    <script src="Sketches/Index/indexSketch.js"></script>
    <title>Home</title>
</head>

<body>
    <?php include 'Includes/header.php';?>
    <?php include 'Includes/footer.php';?>

    <!-- The floating window -->
    <div id="controlWindow">
        <div id="grabber"></div>
        <div id="controls">
            <div id="sliders">
                <div class="sliderBox" id="box1" style="margin-top: 8px;">
                    Friction:
                </div>
                <div class="sliderBox" id="box2" style="margin-bottom: 8px;">
                    Gravity:
                </div>
            </div>
            <div id="buttonBox"></div>
        </div>
    </div>
</body>

</html> 