<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadoraa</title>

<style>
     body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

h2, h3 {
    text-align: center;
}

.div-form {
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.buttons {
    text-align: center;
}

button {
    padding: 10px 20px;
    margin: 0 5px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color: #4CAF50;
    color: #fff;
}

button:hover {
    background-color: #45a049;
}

.result {
    text-align: center;
    margin-top: 20px;
}

</style>

</head>
<body>
    <h2>Daniela Berenice Cruz Llaven 9°A</h2>
    <h3>Operaciones Básicas</h3>

   <div class="div-form">
   <form method="POST" action="">
        <label for="num1">Número 1:</label>
        <input type="text" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Número 2:</label>
        <input type="text" id="num2" name="num2" required>
        <br><br>
        <div class="buttons">
            <button type="submit" name="operation" value="sumar">Sumar</button>
            <button type="submit" name="operation" value="restar">Restar</button>
            <button type="submit" name="operation" value="multiplicar">Multiplicar</button>
            <button type="submit" name="operation" value="dividir">Dividir</button>


        </div>

    </form>
   </div> 
    

    <?php
    // Validaciones
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $num1 = htmlspecialchars($_POST['num1']);
        $num2 = htmlspecialchars($_POST['num2']);
        $operation = htmlspecialchars($_POST['operation']);
        

        // Verificacion de números válidos
        if (filter_var($num1, FILTER_VALIDATE_FLOAT) !== false && filter_var($num2, FILTER_VALIDATE_FLOAT) !== false) {
            $num1 = floatval($num1);
            $num2 = floatval($num2);
        
        // Realizar la operación seleccionada
            if ($operation == "sumar") {
                $resultado = $num1 + $num2;
                echo "<h2>Resultado de la Suma: $resultado</h2>";
            } elseif ($operation == "restar") {
                $resultado = $num1 - $num2;
                echo "<h2>Resultado de la Resta: $resultado</h2>";
            } elseif ($operation == "multiplicar"){
                $resultado = $num1 * $num2;
                echo "<h2>Resultado de la multiplicacion: $resultado</h2>";
            }elseif ($operation == "dividir"){
                if($num2 != 0)
                $resultado = $num1 / $num2;
                echo "<h2>Resultado de la division: $resultado</h2>";
            }else {
                echo "<h2>Operación no válida</h2>";
            }
        } else {
            echo "<h2>Por favor, ingrese números válidos.</h2>";
        }
    }
    ?>
</body>
</html>