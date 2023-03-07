<form method="POST" action="7_3-2.php">
        <label for="num_campos">Quantidade de campos:</label>
        <input type="number" id="num_campos" name="num_campos" required>
        <label for="tipo_campo">Tipo de campo:</label>
        <select id="tipo_campo" name="tipo_campo">
            <option value="text">Texto</option>
            <option value="number">Número</option>
            <option value="email">E-mail</option>
            <option value="date">Data</option>
            <option value="checkbox">Checkbox</option>
            <option value="radio">Radio</option>
        </select>
        <button type="submit">Gerar campos</button>
    </form>