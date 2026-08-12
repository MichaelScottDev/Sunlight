<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
    <title>Restricted — Confidential Document</title>
    <style>
        *{margin:0;padding:0;box-sizing:border-box}
        body{background:#1a1c20;color:#e8e8ea;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;min-height:100vh;display:flex;align-items:center;justify-content:center;padding:24px}
        .card{max-width:420px;width:100%;border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.03);padding:38px 30px;text-align:center}
        .lock{font-size:2rem;margin-bottom:16px}
        h1{font-size:1.05rem;font-weight:600;margin-bottom:8px}
        p{font-size:0.82rem;line-height:1.6;color:rgba(232,232,234,0.55);margin-bottom:26px}
        form{display:flex;flex-direction:column;gap:12px}
        input{background:#0d0e10;border:1px solid rgba(255,255,255,0.15);color:#e8e8ea;padding:13px 14px;font-size:0.9rem;text-align:center}
        input:focus{outline:none;border-color:rgba(120,150,220,0.6)}
        button{background:#3a5a9a;color:#fff;border:none;padding:13px;font-size:0.72rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:600;cursor:pointer}
        button:hover{background:#31518c}
        .err{color:#e07b7b;font-size:0.72rem}
    </style>
</head>
<body>
    <div class="card">
        <div class="lock">🔒</div>
        <h1>Restricted — Confidential Document</h1>
        <p>This is a private incident report prepared for Queensland Police. Enter the access password to continue.</p>
        <form method="POST" action="{{ url()->current() }}/access">
            @csrf
            @if(session('incident_error'))
                <div class="err">Incorrect password. Please try again.</div>
            @endif
            <input type="password" name="password" placeholder="Access password" autofocus autocomplete="off" />
            <button type="submit">Unlock &rarr;</button>
        </form>
    </div>
</body>
</html>
