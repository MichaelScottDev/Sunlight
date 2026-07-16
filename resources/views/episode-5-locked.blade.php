<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sunlight.Quest — Temporarily Unavailable</title>
    <meta name="robots" content="noindex"/>
    <style>
        *{margin:0;padding:0;box-sizing:border-box}
        body{background:#0c0804;color:#f5ead4;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;min-height:100vh;display:flex;align-items:center;justify-content:center;padding:24px}
        .card{max-width:440px;width:100%;border:1px solid rgba(245,234,212,0.1);background:rgba(20,11,11,0.6);padding:38px 30px;text-align:center}
        .brand{font-weight:800;letter-spacing:0.14em;font-size:1.35rem;margin-bottom:26px}
        .brand .dot{color:#c1440e}
        .lock{font-size:2rem;margin-bottom:16px}
        .ep{font-size:0.6rem;letter-spacing:0.24em;text-transform:uppercase;color:#c1440e;margin-bottom:12px}
        h1{font-size:1.25rem;font-weight:600;line-height:1.35;margin-bottom:14px}
        p.notice{font-size:0.84rem;line-height:1.65;color:rgba(245,234,212,0.55);margin-bottom:28px}
        form{display:flex;flex-direction:column;gap:12px}
        input{background:#0d0d0d;border:1px solid rgba(245,234,212,0.15);color:#f5ead4;padding:13px 14px;font-size:0.9rem;letter-spacing:0.05em;text-align:center;border-radius:0}
        input:focus{outline:none;border-color:rgba(193,68,14,0.6)}
        button{background:#c1440e;color:#fff;border:none;padding:13px;font-size:0.72rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:600;cursor:pointer}
        button:hover{background:#a8390b}
        .err{color:#e07b5a;font-size:0.72rem}
        .back{display:inline-block;margin-top:24px;font-size:0.62rem;letter-spacing:0.14em;text-transform:uppercase;color:rgba(245,234,212,0.3);text-decoration:none}
        .back:hover{color:rgba(245,234,212,0.6)}
    </style>
</head>
<body>
    <div class="card">
        <div class="brand">SUNLIGHT<span class="dot">.QUEST</span></div>
        <div class="lock">🔒</div>
        <div class="ep">Episode 5</div>
        <h1>Temporarily Unavailable</h1>
        <p class="notice">The contents of this page are temporarily blocked while street issues are being resolved.</p>
        <form method="POST" action="/episode-5/access">
            @csrf
            @if(session('ep5_error'))
                <div class="err">Incorrect password. Please try again.</div>
            @endif
            <input type="password" name="password" placeholder="Enter access password" autofocus autocomplete="off" />
            <button type="submit">Unlock &rarr;</button>
        </form>
        <a href="/" class="back">&larr; Back to Sunlight.Quest</a>
    </div>
</body>
</html>
