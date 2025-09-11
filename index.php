<!DOCTYPE html>
<header>
    <meta charset="UTF-8">
    <title>Calculator</title>
</header>
<body>
    <form action="calculatorprocess.php" method="post">
        <input type="number" placeholder="1" name="digit1" required><br><br>
        <label>Operator</label><select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select><br><br>
        <input type="number" placeholder="1" name="digit2" required><br><br>
        <button type="submit">Hitung</button><br><br>
    </form>
    <h2>Hasil Perhitungan</h2>
    <?php
    if (isset($_GET['hasil'])) {
        $digit1 = $_GET['digit1'];
        $digit2 = $_GET['digit2'];
        $operator = $_GET['operator'];
        $hasil = $_GET['hasil'];

        echo "<p>$digit1 $operator $digit2 = <b>$hasil</b></p>";
    } else {
        echo "<p>Belum ada perhitungan.</p>";
    }
    ?>
    <br>
</body>
</html>
