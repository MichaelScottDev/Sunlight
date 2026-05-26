<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sunlight.Quest — Access</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        display: ['"Bebas Neue"', 'sans-serif'],
                        mono: ['"DM Mono"', 'monospace'],
                    },
                    colors: {
                        ink:   '#060606',
                        paper: '#f5ead4',
                        hot:   '#c1440e',
                        dim:   '#7a2b09',
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Mono:wght@300;400&display=swap" rel="stylesheet">
    <style>
        body { background:#060606; color:#f5ead4; }
        body::after {
            content:'';
            position:fixed;inset:0;
            background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.72' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
            pointer-events:none;z-index:9999;
        }
        input[type=password] {
            background: rgba(245,234,212,0.04);
            border: 1px solid rgba(245,234,212,0.12);
            color: #f5ead4;
            outline: none;
            letter-spacing: 0.12em;
            font-family: 'DM Mono', monospace;
            width: 100%;
            padding: 0.75rem 1rem;
            font-size: 0.85rem;
            transition: border-color 0.2s;
        }
        input[type=password]:focus { border-color: rgba(193,68,14,0.6); }
        input[type=password]::placeholder { color: rgba(245,234,212,0.2); letter-spacing:0.1em; }
        button[type=submit] {
            background: #c1440e;
            color: #f5ead4;
            border: none;
            font-family: 'Bebas Neue', sans-serif;
            letter-spacing: 0.2em;
            font-size: 0.95rem;
            padding: 0.75rem 2.5rem;
            cursor: pointer;
            transition: background 0.2s;
            width: 100%;
        }
        button[type=submit]:hover { background: #7a2b09; }
    </style>
</head>
<body class="h-full flex items-center justify-center min-h-screen px-5">

    <div style="width:100%;max-width:360px">

        <!-- Wordmark -->
        <div class="text-center mb-10">
            <div class="font-display text-4xl tracking-widest mb-1">SUNLIGHT<span style="color:#c1440e">.QUEST</span></div>
            <div class="text-[0.48rem] tracking-[0.28em] uppercase" style="color:rgba(245,234,212,0.2)">Investigative Journalism · Gold Coast</div>
        </div>

        <!-- Gate card -->
        <div style="border:1px solid rgba(245,234,212,0.08);background:rgba(245,234,212,0.02);padding:2rem">
            <div class="text-[0.5rem] tracking-[0.22em] uppercase mb-5" style="color:rgba(245,234,212,0.25)">Access Required</div>

            @if($error)
            <div class="mb-4 text-[0.58rem] tracking-wide" style="color:#c1440e;background:rgba(193,68,14,0.08);border:1px solid rgba(193,68,14,0.25);padding:0.6rem 0.85rem;">
                ✗ &nbsp;Incorrect password. Try again.
            </div>
            @endif

            <form method="POST" action="/site-access">
                @csrf
                <input type="hidden" name="intended" value="{{ $intended }}">
                <div class="mb-4">
                    <input type="password"
                           name="password"
                           placeholder="Enter access password"
                           autocomplete="current-password"
                           autofocus />
                </div>
                <button type="submit">ENTER</button>
            </form>
        </div>

        <div class="text-center mt-6 text-[0.44rem] tracking-[0.14em] uppercase" style="color:rgba(245,234,212,0.1)">
            This site is private. Authorised access only.
        </div>

    </div>

</body>
</html>
