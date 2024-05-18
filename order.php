<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OORDER O SASAKALIN KITA?</title>
</head>
<body>
    <?php
        session_start();

        if (!isset($_SESSION['username'])) {
            header("Location: login.php");
            exit;
        }

        $username = $_SESSION['username'];
        echo "<h1>Welcome to the Canteen, <span style='color: red;'>$username</span>!</h1>";
    ?>

    <h2>OORDER O SASAKALIN KITA?</h2>
    <form action="orderna.php" method="post">
        <p><b>Quantity</b></p>
        <ul>
            <li>Proben = 100php</li>
            <li>kwikwek = 150php</li>
            <li>Icecream = 300php</li>
        </ul>
        <b>Choose your order: </b>
        <select name="select_all">
            <option value="Proben">Proben</option><option value="kwikwek">kwikwek</option><option value="Icecream">Icecream</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity"><br><br>
        <label for="cash">Cash:</label>
        <input type="text" id="cash" name="cash"> <br><br>
        <input type="submit" value="Submit Order">
    </form>
</body>
</html>
