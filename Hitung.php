<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Kubus - Reza Rahardian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>SELAMAT DATANG DI WEBSITE SAYA</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="media.html">Media Sosial</a></li>
                <li><a href="hitung.php" class="active">Hitung Kubus</a></li>
            </ul>
        </div>
        <div class="content">
            <h2>Hitung Kubus</h2>
            <div class="kubus-container">
                <h3>Menghitung Volume Kubus</h3>
                <form method="post">
                    <label>Panjang sisi (cm): </label>
                    <input type="number" name="sisi" step="0.01" required><br>
                    <input type="submit" name="submit" value="Hitung">
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $sisi = $_POST['sisi'];
                    $luas = $sisi * $sisi * $sisi;
                    echo "<p>Volume = $sisi x $sisi x $sisi = $luas cm³</p>";
                }
                ?>
            </div>
        </div>
        <div class="footer">
            <p>Copyright &copy; Benjamin Athallah</p>
        </div>
    </div>
</body>
</html>