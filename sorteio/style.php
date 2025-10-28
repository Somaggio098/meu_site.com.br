<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sorteio da Rifa</title>
    <style>
        /* ======== ESTILO GLOBAL ======== */
        body {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            background: linear-gradient(135deg, #1c1f26, #2e3440);
            color: #e0e4eb;
            text-align: center;
            padding-top: 60px;
            margin: 0;
        }

        /* ======== CONTAINER ======== */
        .caixa {
            background: #2b313c;
            width: 450px;
            margin: auto;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
            border: 1px solid #3a414d;
        }

        /* ======== TÍTULOS ======== */
        h2 {
            color: #dce3ec;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 22px;
            margin-bottom: 10px;
        }

        h1 {
            color: #3da9fc;
            font-size: 30px;
            margin: 15px 0 20px;
        }

        h3 {
            color: #dce3ec;
            font-size: 18px;
            margin-top: 25px;
        }

        /* ======== TEXTO E LABELS ======== */
        p, label {
            color: #b0bac5;
            font-size: 15px;
        }

        /* ======== CAMPOS E BOTÕES ======== */
        input, textarea, button {
            font-size: 15px;
            border-radius: 8px;
            border: none;
            margin-top: 8px;
            transition: all 0.3s ease;
        }

        input[type='number'], textarea {
            background: #3b4250;
            color: #e8ecf1;
            padding: 10px;
            border: 1px solid #4a5260;
            width: 80%;
        }

        textarea {
            height: 90px;
            resize: none;
        }

        button {
            background: #3da9fc;
            color: white;
            padding: 12px 30px;
            font-weight: 600;
            letter-spacing: 0.5px;
            cursor: pointer;
            box-shadow: 0 3px 10px rgba(61, 169, 252, 0.3);
            margin-top: 15px;
            border: none;
        }

        button:hover {
            background: #297ecf;
            transform: scale(1.04);
            box-shadow: 0 4px 12px rgba(61, 169, 252, 0.5);
        }

        /* ======== LISTA E RESULTADOS ======== */
        .lista {
            margin-top: 25px;
            text-align: left;
            background: #343b48;
            padding: 15px;
            border-radius: 10px;
            border-left: 3px solid #3da9fc;
        }

        .ganhador {
            background: #364254;
            border-left: 4px solid #3da9fc;
            padding: 12px;
            border-radius: 8px;
            margin: 8px 0;
            font-size: 16px;
        }

        /* ======== DATA ======== */
        .data {
            color: #c5ccd6;
            font-size: 14px;
            margin-bottom: 15px;
        }

        /* ======== LINHA DIVISÓRIA ======== */
        hr {
            border: none;
            border-top: 1px solid #444c5a;
            margin: 25px 0;
        }

        ul {
            list-style-type: "📦 ";
            padding-left: 20px;
        }

        ul li {
            margin: 5px 0;
            color: ;
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
            </label>#c5ccd6
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

            <button type="submit" name="sortear">🎲 Realizar Sorteio</button>
        </form>

        <hr>

        <?php
        if (isset($_POST['sortear'])) {
            $min = intval($_POST['min']);
            $max = intval($_POST['max']);
            $premiosTexto = trim($_POST['premios']);
            $premios = array_filter(array_map('trim', explode("\n", $premiosTexto)));

            if ($min < 1 || $max <= $min) {
                echo "<p style='color:#ff7676;'>⚠️ Intervalo inválido!</p>";
            } elseif (empty($premios)) {
                echo "<p style='color:#ff7676;'>⚠️ Digite pelo menos um prêmio!</p>";
            } else {
                $numeros = range($min, $max);
                shuffle($numeros);

                $ganhadores = array_slice($numeros, 0, count($premios));
                $dataHora = date('d/m/Y H:i:s');

                echo "<h1>🏆 Resultado do Sorteio</h1>";
                echo "<p class='data'>Sorteio realizado em: <strong>$dataHora</strong></p>";

                foreach ($ganhadores as $index => $g) {
                    $premio = htmlspecialchars($premios[$index]);
                    echo "<div class='ganhador'>
                            <strong>🎁 Prêmio:</strong> $premio<br>
                            🎟️ Número Sorteado: <b>$g</b>
                          </div>";
                }

                echo "<div class='lista'>";
                echo "<h3>📋 Lista de Ganhadores</h3>";
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
