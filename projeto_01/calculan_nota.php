<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Nota</title>
</head>
<body style="background:linear-gradient(120deg,#6c63ff 0%,#00c8ff 100%); height:100vh; margin:0; font-family:Arial, Helvetica, sans-serif; display:flex; align-items:center; justify-content:center;">
    <div style="background:#fff; padding:32px 28px; border-radius:16px; box-shadow:0 8px 32px rgba(44,62,80,0.15); min-width:300px; text-align:center;">
        <h2 style="color:#2d3e50;">Resultado</h2>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $disciplina = isset($_POST['disciplina']) ? htmlspecialchars($_POST['disciplina']) : '';
                $nota = isset($_POST['nota']) ? floatval($_POST['nota']) : null;
                if ($disciplina !== '' && $nota !== null) {
                    if ($nota >= 7) {
                        $status = "Aprovado";
                        $cor = "#2ecc71";
                    } elseif ($nota >= 5) {
                        $status = "Recuperação";
                        $cor = "#f1c40f";
                    } else {
                        $status = "Reprovado";
                        $cor = "#e74c3c";
                    }
                    echo "<p style='font-size:1.2rem;'><strong>Disciplina:</strong> $disciplina</p>";
                    echo "<p style='font-size:1.2rem;'><strong>Nota:</strong> $nota</p>";
                    echo "<p style='font-size:1.3rem; color:$cor; font-weight:bold;'>$status</p>";
                } else {
                    echo "<p style='color:#e74c3c;'>Preencha todos os campos!</p>";
                }
            } else {
                echo "<p style='color:#e74c3c;'>Acesso inválido.</p>";
            }
        ?>
        <a href="nota.php" style="display:inline-block; margin-top:18px; background:#00c8ff; color:#fff; font-weight:bold; padding:10px 28px; border-radius:8px; text-decoration:none; font-size:1rem;">
            Voltar
        </a>
    </div>
</body>
</html>






