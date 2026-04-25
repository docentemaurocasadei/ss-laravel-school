<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SS Laravel School</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1e293b, #0f172a);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            max-width: 760px;
            padding: 50px;
            text-align: center;
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.35);
        }

        h1 {
            font-size: 48px;
            margin-bottom: 16px;
        }

        p {
            font-size: 20px;
            line-height: 1.6;
            color: #cbd5e1;
        }

        .badge {
            display: inline-block;
            margin-bottom: 20px;
            padding: 8px 16px;
            border-radius: 999px;
            background: #22c55e;
            color: #052e16;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            margin-top: 25px;
            padding: 14px 26px;
            background: #38bdf8;
            color: #082f49;
            text-decoration: none;
            font-weight: bold;
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="badge">Deploy automatico attivo</div>
        <h1>SS Laravel School</h1>
        <p>
            Applicazione Laravel dockerizzata, pubblicata su VPS con Nginx,
            MySQL e CI/CD tramite GitHub Actions.
        </p>
        <a class="btn" href="#">Ambiente di produzione online</a>
    </div>
</body>
</html>