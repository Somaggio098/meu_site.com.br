<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form style="border: 2px solid black; padding: 100px; width: 200px; border-radius: 30px; background-color: bisque; text-align: center; align-items: center; justify-content: center; padding: auto;" action="nota.php" method="post">
         <label for="Nome">Nome do aluno(a):</label>
        <input type="text" name="nome" id="nome" required><br><br>
        <label for="Materia">Materia:</label>
        <input type="text" name="nome" id="nome" required><br><br>
         <label for="nota">Digite sua nota:</label>
          <input type="number" name="nota" id="nota" step="any" required><br><br> 
       <button type="submit">Calcular Nota</button>
    </form>
</body>
</html>