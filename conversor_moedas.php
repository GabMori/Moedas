<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="container">
        <h2>Conversor de Moedas</h2>
        <form method="POST" action="">
            <label for="moeda1">Moeda de Origem:</label>
            <select name="moeda1" id="moeda1">
                <option value="USD">USD - Dólar Americano</option>
                <option value="EUR">EUR - Euro</option>
                <option value="BRL">BRL - Real Brasileiro</option>
                <option value="GBP">GBP - Libra Esterlina</option>
                <option value="JPY">JPY - Iene Japonês</option>
                <option value="CHF">CHF - Franco Suíço</option>
                <option value="CAD">CAD - Dólar Canadense</option>
                <option value="AUD">AUD - Dólar Australiano</option>
            </select>

            <label for="moeda2">Moeda de Destino:</label>
            <select name="moeda2" id="moeda2">
                <option value="USD">USD - Dólar Americano</option>
                <option value="EUR">EUR - Euro</option>
                <option value="BRL">BRL - Real Brasileiro</option>
                <option value="GBP">GBP - Libra Esterlina</option>
                <option value="JPY">JPY - Iene Japonês</option>
                <option value="CHF">CHF - Franco Suíço</option>
                <option value="CAD">CAD - Dólar Canadense</option>
                <option value="AUD">AUD - Dólar Australiano</option>
            </select>

            <label for="quantias">Quantias (separadas por vírgulas):</label>
            <input type="text" name="quantias" id="quantias" placeholder="Exemplo: 10, 20, 30" required>

            <label for="taxaCambio">Taxa de Câmbio:</label>
            <input type="number" step="0.0001" name="taxaCambio" id="taxaCambio" required>

            <button type="submit">Converter</button>
        </form>

        <?php
        function calcularConversao($quantia, $taxaCambio) {
            return $quantia * $taxaCambio;
        }

        function aplicarConversao(array $quantias, $taxaCambio) {
            return array_map(function ($quantia) use ($taxaCambio) {
                return calcularConversao((float)trim($quantia), $taxaCambio);
            }, $quantias);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $moeda1 = $_POST['moeda1'];
            $moeda2 = $_POST['moeda2'];
            $quantias = explode(',', $_POST['quantias']);
            $taxaCambio = (float)$_POST['taxaCambio'];

            if ($moeda1 === $moeda2) {

                echo "<p>Por favor, insira moedas diferentes!</p>";

            } else {
                $resultados = aplicarConversao($quantias, $taxaCambio);

                echo "<p>Conversões de $moeda1 para $moeda2:</p>";
                echo "<ul>";

                foreach ($resultados as $index => $resultado) {
                  
                    echo "<li>{$quantias[$index]} $moeda1 -> " . number_format($resultado, 2) . " $moeda2</li>";
                }
                echo "</ul>";
            }
        }
        ?>
    </div>
</body>
</html>
