<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin — Sunlight.Quest</title>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background: #0c0804;
            color: #f5ead4;
            font-family: 'Georgia', serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        .card {
            width: 100%;
            max-width: 420px;
            border: 1px solid rgba(245,234,212,0.08);
            background: rgba(245,234,212,0.02);
            padding: 2.5rem 2rem;
        }

        .wordmark {
            text-align: center;
            margin-bottom: 0.5rem;
            font-family: 'Arial Black', Arial, sans-serif;
            font-size: 2rem;
            letter-spacing: 0.12em;
            color: #c1440e;
        }

        .subheading {
            text-align: center;
            font-size: 0.6rem;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            color: rgba(245,234,212,0.3);
            margin-bottom: 2rem;
        }

        .error-box {
            background: rgba(193,68,14,0.08);
            border: 1px solid rgba(193,68,14,0.3);
            color: #c1440e;
            font-size: 0.75rem;
            padding: 0.6rem 0.85rem;
            margin-bottom: 1.25rem;
            letter-spacing: 0.03em;
        }

        label {
            display: block;
            font-size: 0.5rem;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: rgba(245,234,212,0.3);
            margin-bottom: 0.4rem;
        }

        input[type="email"],
        input[type="password"] {
            display: block;
            width: 100%;
            background: rgba(245,234,212,0.04);
            border: 1px solid rgba(245,234,212,0.12);
            color: #f5ead4;
            font-family: 'Courier New', monospace;
            font-size: 0.85rem;
            letter-spacing: 0.08em;
            padding: 0.75rem 1rem;
            outline: none;
            transition: border-color 0.2s;
            margin-bottom: 1rem;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: rgba(193,68,14,0.55);
        }

        input::placeholder {
            color: rgba(245,234,212,0.18);
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            background: #c1440e;
            color: #f5ead4;
            border: none;
            font-family: 'Arial Black', Arial, sans-serif;
            font-size: 0.85rem;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            padding: 0.8rem 1rem;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 0.5rem;
        }

        button[type="submit"]:hover { background: #7a2b09; }
    </style>
</head>
<body>

    <div class="card">
        <div class="wordmark">SUNLIGHT<span style="color:rgba(245,234,212,0.4)">.</span>QUEST</div>
        <div class="subheading">Admin Access</div>

        @if ($errors->any())
        <div class="error-box">✗ &nbsp;{{ $errors->first('email') }}</div>
        @endif

        <form method="POST" action="/admin/login">
            @csrf

            <label for="email">Email</label>
            <input type="email"
                   id="email"
                   name="email"
                   value="{{ old('email') }}"
                   placeholder="admin@example.com"
                   autocomplete="email"
                   autofocus />

            <label for="password">Password</label>
            <input type="password"
                   id="password"
                   name="password"
                   placeholder="••••••••••••"
                   autocomplete="current-password" />

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
