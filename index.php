<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Monedas</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="convertidor">
        <h1>Conversor de Monedas</h1>
        <form id="formularioConversion" method="post">
            <div>
                <label for="cantidad" name="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" required>
            </div>
            <div>
                <label for="Moneda1">De:</label>
                <select id="Moneda1" name="Moneda1" required>
                    <option value="USD">Dólar</option>
                    <option value="EUR">Euro</option>
                    <option value="MXN">Peso Mexicano</option>
                    <option value="GBP">Libra Esterlina</option>
                </select>
            </div>
            <div>
                <label for="Moneda2">A:</label>
                <select id="Moneda2" name="Moneda2" required>
                    <option value="USD">Dólar</option>
                    <option value="EUR">Euro</option>
                    <option value="MXN">Peso Mexicano</option>
                    <option value="GBP">Libra Esterlina</option>
                </select>
            </div>
            <button type="submit" onclick="convertir()" name="registro">Convertir</button>
            
        </form>
        <div id="result"></div>
    </div>

    

    <?php 
    
        include("registros.php");
    ?>

</body>
</html>
