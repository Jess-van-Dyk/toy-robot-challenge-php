<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Toy Robot Simulator</title>
</head>
<body>
    <div>
        <H1>Toy Robot Test</H1>
    </div>
    <div class="table">
        
        <?php
        for ($y = 4; $y >= 0; $y--) {
            for ($x = 0; $x < 5; $x++) {
                echo '<div class="cell"></div>';
            }
        }
        ?>
        <div class="robot"></div>
    </div>
    
    <div class="input-container">
    <div class="input">
        <label for="x-axis">X:</label>
        <input type="number" id="x-axis" class="input-field" min="0" max="4">
    </div>
    <div class="input">
        <label for="y-axis">Y:</label>
        <input type="number" id="y-axis" class="input-field" min="0" max="4">
    </div>
    <div class="input">
        <label for="direction">Direction:</label>
        <select id="direction" class="input-field">
            <option value="NORTH">NORTH</option>
            <option value="EAST">EAST</option>
            <option value="SOUTH">SOUTH</option>
            <option value="WEST">WEST</option>
        </select>
    </div>
    <button class="btn" id="place-btn">Move Robot</button>
</div>

    <script src="script.js"></script>
</body>
</html>