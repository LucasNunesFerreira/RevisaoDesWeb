<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="valor_n">Informe o valor de N:</label>
        <input type="number" id="valor_n" name="valor_n" required>
        <br><br>
        <label for="multiple">Seleção múltipla?</label>
        <input type="checkbox" id="multiple" name="multiple">
        <br><br>
        <button type="submit">Gerar</button>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["valor_n"];
    $multiple = isset($_POST["multiple"]);

    echo "<h2>Resultado:</h2>";
    echo "<select ";
    if ($multiple) {
        echo "multiple ";
    }
    echo ">";
    for ($i = 1; $i <= $n; $i++) {
        echo "<option value='$i'>$i</option>";
    }
    echo "</select>";
}
?>