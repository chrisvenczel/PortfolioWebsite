<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'Includes/headInfo.php';?>

    <link rel="stylesheet" href="CSS/mandelbrot.css">
    <script src="Sketches/Mandelbrot/mandelbrot.js"></script>
    <title>Christopher Venczel | Mandelbrot Explorer</title>
    <meta name="description" 
    content="Explore and save images of the famous Mandelbrot set fractal. 
    Click and drag to move and scroll to zoom in and take a closer look.">
</head>

<body>
    <?php include 'Includes/header.php';?>
    <?php include 'Includes/footer.php';?>

    <div id="topControlsBar">
        <table id="controlTable">
            <tr>
            <!-- ZOOM -->
            <td id="zoom">
                Zoom:<br>3.2 x 10<sup>21</sup>
            </td>

            <!-- QUALITY -->
            <td id="quality">
                <div id="qualityTxt">
                    Quality: Medium
                </div>
                <input autocomplete="off" type="range" id="qualitySlider" name="quality" min="1" max="4" value="2">
            </td>

            <!-- LOADING MSG -->
            <td id="loadingMsg">
                <div id="loadText">
                    Loading: 15%
                </div>
                <div id="myProgress">
                <div id="myBar"></div>
                </div>
            </td>

            <!-- BUTTONS -->
            <td id="buttonBox">
                <table id="ctrlBtnTable">
                    <tr>
                    <td>
                    <button class="ctrlBtn" type="button">&nbsp;ℹ️&nbsp;&nbsp;info</button> 
                    </td>
                    <td>
                    <button id="resetBtn" class="ctrlBtn" type="button">🔄 reset position</button>
                    </td>
                    </tr>

                    <tr>
                    <td>
                    <button id="saveBtn" class="ctrlBtn" type="button">💾 save image</button> 
                    </td>
                    <td>
                    <button id="colBtn" class="ctrlBtn" type="button">🎨 new colors</button> 
                    </td>
                    </tr>
                </table >
            </td>
            </tr>
        </table>
    </div>
</body>

</html> 