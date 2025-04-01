<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Système est Compromis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: black;
            color: red;
            text-align: center;
            font-family: 'Courier New', monospace;
            overflow: hidden;
        }
        .container {
            margin-top: 10%;
            position: relative;
            z-index: 2;
        }
        .blink {
            animation: blinker 1s step-start infinite;
        }
        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
        .matrix {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: black;
            overflow: hidden;
            z-index: 1;
        }
        canvas {
            display: block;
        }
    </style>
</head>
<body>
    <div class="matrix">
        <canvas id="matrixCanvas"></canvas>
    </div>
    <div class="container text-center">
        <div class="alert p-5 rounded">
            <h1 class="blink">⚠️ Bien joué ! Vous avez hacké SALAC ⚠️</h1>
            <p class="fs-4">Vos fichiers sont désormais chiffrés.</p>
            <p class="fs-5">Payez 1 Bitcoin pour les récupérer.</p>
            <p class="fw-bold">Envoyez le paiement à l'adresse suivante :</p>
            <p class="fs-4 text-warning">1BitcoinAddressExample123</p>
        </div>
        <button class="btn btn-danger btn-lg">Payer Maintenant</button>
    </div>

    <script>
        const canvas = document.getElementById("matrixCanvas");
        const ctx = canvas.getContext("2d");
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        
        const chineseChars = "日ﾊﾐﾋｶﾘヲルフヲワヲヰァヵヶヅパビプヌモヨルワヲァヵヶヅ".split("");
        const fontSize = 16;
        const columns = canvas.width / fontSize;
        const drops = new Array(Math.floor(columns)).fill(1);

        function drawMatrix() {
            ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            ctx.fillStyle = "#0F0";
            ctx.font = fontSize + "px monospace";
            
            for (let i = 0; i < drops.length; i++) {
                const text = chineseChars[Math.floor(Math.random() * chineseChars.length)];
                ctx.fillText(text, i * fontSize, drops[i] * fontSize);
                if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
                    drops[i] = 0;
                }
                drops[i]++;
            }
        }
        setInterval(drawMatrix, 50);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>