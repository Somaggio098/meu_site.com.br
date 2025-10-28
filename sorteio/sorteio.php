<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sorteio de Números - Rifa</title>
    <style>
        /* ======== ESTILO GLOBAL ======== */
        body {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #e3e3e3;
            text-align: center;
            padding-top: 60px;
            margin: 0;
        }

        /* ======== CONTAINER ======== */
        .caixa {
            background: #ffffff15;
            backdrop-filter: blur(10px);
            width: 430px;
            margin: auto;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        /* ======== TÍTULOS ======== */
        h2 {
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 22px;
            margin-bottom: 10px;
        }

        h1 {
            color: #00b8ff;
            font-size: 34px;
            margin: 10px 0 20px;
        }

        h3 {
            color: #ffffff;
        }

        /* ======== TEXTO E LABELS ======== */
        p, label {
            color: #d1d9e6;
            font-size: 16px;
        }

        /* ======== CAMPOS E BOTÕES ======== */
        input, textarea, select, button {
            font-size: 15px;
            border-radius: 8px;
            border: none;
            margin-top: 8px;
            transition: all 0.3s ease;
        }

        input[type='number'], textarea, select {
            background: #e8f0fe;
            color: #1e3c56;
            padding: 10px;
            border: 1px solid #90a4ae;
            width: 80%;
        }

        textarea {
            height: 90px;
            resize: none;
        }

        button {
            background: linear-gradient(90deg, #007bff, #00b4ff);
            color: white;
            padding: 12px 30px;
            font-weight: 600;
            letter-spacing: 0.5px;
            cursor: pointer;
            box-shadow: 0 3px 10px rgba(0, 123, 255, 0.3);
            margin-top: 15px;
        }

        button:hover {
            background: linear-gradient(90deg, #005bb5, #0088cc);
            transform: scale(1.04);
            box-shadow: 0 4px 12px rgba(0, 150, 255, 0.4);
        }

        /* ======== LISTA E RESULTADOS ======== */
        .lista {
            margin-top: 25px;
            text-align: left;
            background: rgba(255, 255, 255, 0.08);
            padding: 15px;
            border-radius: 10px;
            border-left: 3px solid #00b8ff;
        }

        .ganhador {
            background: linear-gradient(90deg, #007bff33, #00b4ff33);
            border-left: 3px solid #00b4ff;
            padding: 10px;
            border-radius: 8px;
            margin: 6px 0;
            font-size: 16px;
        }

        /* ======== DATA ======== */
        .data {
            color: #aebfd3;
            font-size: 14px;
            margin-bottom: 15px;
        }

        /* ======== LINHA DIVISÓRIA ======== */
        hr {
            border: none;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin: 25px 0;
        }
    </style>
</head>
<body>
    <div class="caixa">
        <h2>🎟️ Sorteio de Números - Rifa</h2>

        <!-- Data e Hora Atual -->
        <div class="data">
            <?php
                date_default_timezone_set('America/Sao_Paulo');
                echo "📅 " . date('d/m/Y') . " — 🕒 " . date('H:i:s');
            ?>
        </div>

        <!-- Formulário -->
        <form method="post">
            <p>Escolha o intervalo da rifa:</p>
            <label>De: 
                <input type="number" name="min" value="<?php echo isset($_POST['min']) ? $_POST['min'] : 1; ?>" min="1">
            </label>
            <label>Até: 
                <input type="number" name="max" value="<?php echo isset($_POST['max']) ? $_POST['max'] : 100; ?>" min="1">
            </label>
            <br><br>

            <p>Digite os prêmios (um por linha):</p>
            <textarea name="premios" placeholder="Exemplo:
Celular
Smartwatch
Fone Bluetooth
Camiseta"><?php echo isset($_POST['premios']) ? htmlspecialchars($_POST['premios']) : ''; ?></textarea>
            <br><br>

            <button type="submit" name="sortear">🎲 Sortear</button>
        </form>

        <hr>

        <?php
        if (isset($_POST['sortear'])) {
            $min = intval($_POST['min']);
            $max = intval($_POST['max']);
            $premiosTexto = trim($_POST['premios']);
            $premios = array_filter(array_map('trim', explode("\n", $premiosTexto)));

            if ($min < 1 || $max <= $min) {
                echo "<p style='color:#ff5555;'>⚠️ Intervalo inválido!</p>";
            } elseif (empty($premios)) {
                echo "<p style='color:#ff5555;'>⚠️ Digite pelo menos um prêmio!</p>";
            } else {
                $numeros = range($min, $max);
                shuffle($numeros);

                $ganhadores = array_slice($numeros, 0, count($premios));
                $dataHora = date('d/m/Y H:i:s');

                echo "<h1>🏆 Ganhadores</h1>";
                echo "<p class='data'>Sorteio realizado em: <strong>$dataHora</strong></p>";

                foreach ($ganhadores as $index => $g) {
                    $premio = htmlspecialchars($premios[$index]);
                    echo "<p class='ganhador'><strong>🎁 Prêmio:</strong> $premio<br>🎟️ Número: <b>$g</b></p>";
                }

                echo "<div class='lista'>";
                echo "<h3>📋 Lista completa:</h3>";
                echo "<ul>";
                foreach ($ganhadores as $index => $g) {
                    $premio = htmlspecialchars($premios[$index]);
                    echo "<li><strong>$premio:</strong> Número $g</li>";
                }
                echo "</ul>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
