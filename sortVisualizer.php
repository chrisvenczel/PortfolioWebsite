<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'Includes/headInfo.php';?>

    <link rel="stylesheet" href="CSS/sortVisualizer.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="Sketches/SortVisualizer/sortVis.js"></script>
    <title>Christopher Venczel | Sorting Visualizer</title>
    <meta name="description" 
    content="">
</head>

<body>
    <?php include 'Includes/header.php';?>
    <?php include 'Includes/footer.php';?>

    <div id="topControlsBar">
        <table id="controlTable">
            <tr>
            <!-- ALGORITHM -->
            <td id="algorithmBox">
                <div id="algorithmTxt">
                    Algorithm:
                </div>
                <div id="dropdownBox">
                    Insertion Sort
                    <div id="arrow">⮛<div>
                </div>
            </td>

            <!-- EFFICIENCY -->
            <td id="efficiencyBox">
                Time Complexity:<br>\(O(n^2)\)
            </td>

            <!-- SORT SPEED -->
            <td id="sortSpeedBox">
                <div id="speedTxt">
                    Sort Speed: Fast
                </div>
                <input autocomplete="off" type="range" id="speedSlider" name="quality" min="1" max="4" value="3">
            </td>

            <!-- LOADING MSG -->
            <td id="loadBox">
                <div id="loadText">
                    Sorted
                </div>
            </td>

            <!-- PLAY BUTTON -->
            <td id="playBox">
                <button id="playBtn" class="ctrlBtn" type="button">
                    &#9654;
                </button>
            </td>
            </tr>
        </table>
    </div>

    <table id="algOptions">
        <tr><td>Insertion Sort</td></tr>
        <tr><td>Selection Sort</td></tr>
        <tr><td>Bubble Sort</td></tr>
        <tr><td>Merge Sort</td></tr>
        <tr><td>Heap Sort</td></tr>
        <tr><td>Quicksort</td></tr>
        <tr><td>LSD Base 10 Radix Sort</td></tr>
        <tr><td>MSD Base 10 Radix Sort</td></tr>
        <tr><td>LSD Base 2 Radix Sort</td></tr>
        <tr><td>MSD Base 2 Radix Sort</td></tr>
    </table>

    <a id="learnMore" class="basicLink" target="_blank"
    href="https://en.wikipedia.org/wiki/Sorting_algorithm">
    <b style="text-decoration: initial;">&#9432;</b> Learn More
    </a>
</body>

</html> 