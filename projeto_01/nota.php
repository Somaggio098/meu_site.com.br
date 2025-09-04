<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Nota</title>
</head>
<body style="background:linear-gradient(120deg,#6c63ff 0%,#00c8ff 100%); height:100vh; margin:0; font-family:Arial, Helvetica, sans-serif; display:flex; align-items:center; justify-content:center;">
    <form action="calculan_nota.php" method="post"
        style="background:#fff; padding:32px 28px; border-radius:16px; box-shadow:0 8px 32px rgba(44,62,80,0.15); display:flex; flex-direction:column; min-width:300px;">
        <h2 style="margin-bottom:24px; color:#2d3e50;">Calcular Nota</h2>
        <input type="text" name="disciplina" placeholder="Nome da disciplina"
            style="width:100%; padding:10px; margin-bottom:14px; border:1px solid #bfc9d4; border-radius:8px; font-size:16px;">
        <input type="number" name="nota" placeholder="Nota" step="0.01" min="0" max="10"
            style="width:100%; padding:10px; margin-bottom:20px; border:1px solid #bfc9d4; border-radius:8px; font-size:16px;">
        <button type="submit"
            style="background:linear-gradient(90deg,#6c63ff 0%,#48c6ef 100%); color:#fff; border:none; border-radius:8px; padding:10px 0; width:100%; font-size:16px; font-weight:bold; cursor:pointer;">
            Calcular
        </button>
    </form>
</body>
</html>