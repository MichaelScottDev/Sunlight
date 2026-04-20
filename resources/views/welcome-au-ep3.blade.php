<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sunlight.Quest — Episode 3: The Compliance Machine</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        display: ['"Bebas Neue"', 'sans-serif'],
                        mono:    ['"DM Mono"', 'monospace'],
                        serif:   ['"Instrument Serif"', 'serif'],
                    },
                    colors: {
                        ink:    '#0c0804',
                        paper:  '#f5ead4',
                        hot:    '#c1440e',
                        dim:    '#7a2d08',
                        gold:   '#c98a10',
                        sage:   '#3d7a4a',
                        violet: '#7c6aaa',
                    },
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Mono:ital,wght@0,300;0,400;0,500;1,400&family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
    <style>
        body::after{content:'';position:fixed;inset:0;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.72' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");pointer-events:none;z-index:9498}
        ::-webkit-scrollbar{width:3px}::-webkit-scrollbar-track{background:#0c0804}::-webkit-scrollbar-thumb{background:#c98a10}
        @keyframes blink{0%,100%{opacity:1}50%{opacity:0.25}}.blink{animation:blink 2s step-end infinite}
        @keyframes fadeUp{from{opacity:0;transform:translateY(18px)}to{opacity:1;transform:translateY(0)}}.fade-up{animation:fadeUp 0.65s ease both}
        .reveal{opacity:0;transform:translateY(24px);transition:opacity 0.55s ease,transform 0.55s ease}.reveal.in{opacity:1;transform:translateY(0)}
        #case-panel{transition:transform 0.4s cubic-bezier(0.4,0,0.2,1);transform:translateX(100%)}#case-panel.open{transform:translateX(0)}
        .scanlines{background:repeating-linear-gradient(0deg,transparent,transparent 2px,rgba(0,0,0,0.03) 2px,rgba(0,0,0,0.03) 4px);pointer-events:none}
        .bar-accent-y{transition:transform 0.35s ease;transform:scaleY(0);transform-origin:bottom}.panel-item:hover .bar-accent-y{transform:scaleY(1)}
        .nav-dropdown{position:relative}
        .nav-dropdown-menu{display:none;position:absolute;top:calc(100% + 8px);right:0;background:rgba(12,8,4,0.97);backdrop-filter:blur(12px);border:1px solid rgba(245,234,212,0.08);min-width:220px;z-index:100;box-shadow:0 24px 48px rgba(0,0,0,0.7)}
        .nav-dropdown:hover .nav-dropdown-menu,.nav-dropdown-menu:hover{display:block}
        .nav-dropdown-menu a{display:block;padding:0.55rem 1rem;font-size:0.55rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(245,234,212,0.4);transition:color 0.2s,background 0.2s;border-bottom:1px solid rgba(245,234,212,0.04)}
        .nav-dropdown-menu a:last-child{border-bottom:none}
        .nav-dropdown-menu a:hover{color:rgba(245,234,212,0.9);background:rgba(245,234,212,0.03)}
        .nav-dropdown-menu .nav-group-label{display:block;padding:0.6rem 1rem 0.3rem;font-size:0.45rem;letter-spacing:0.25em;text-transform:uppercase;color:rgba(245,234,212,0.18);border-bottom:1px solid rgba(245,234,212,0.06);pointer-events:none}
        .nav-dropdown-menu a.nav-accent-hot:hover{color:#c1440e}
        .nav-dropdown-menu a.nav-accent-gold:hover{color:#c98a10}
        .nav-dropdown-menu a.nav-accent-violet:hover{color:#7c6aaa}
        .nav-dropdown-menu a.nav-accent-sage:hover{color:#3d7a4a}
    </style>
</head>
<body class="bg-ink text-paper font-mono overflow-x-hidden" style="background-color:#0c0804;background-image:linear-gradient(160deg,rgba(201,138,16,0.07) 0%,transparent 40%,rgba(61,122,74,0.03) 100%)">

<!-- ══ NAV ══ -->
<nav class="fixed top-0 left-0 right-0 z-50 flex justify-between items-center px-5 py-3 bg-ink/95 backdrop-blur-md border-b border-paper/[0.06]">
    <div class="flex items-center gap-4">
        <a href="/" class="font-display text-2xl tracking-widest">SUNLIGHT<span class="text-hot">.QUEST</span></a>
        <span class="hidden sm:block text-[0.52rem] tracking-[0.2em] uppercase text-paper/20 border-l border-paper/10 pl-4">Investigative Vlog Series</span>
    </div>
    <div class="flex items-center gap-3">
        <div class="nav-dropdown hidden md:block">
            <button class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors border border-paper/15 hover:border-paper/30 px-3 py-1.5">Episodes ▾</button>
            <div class="nav-dropdown-menu">
                <span class="nav-group-label">All Episodes</span>
                <a href="/" class="nav-accent-hot">← Episode 1 — The Beginning</a>
                <a href="/episode-2" class="nav-accent-violet">← Episode 2 — The Network</a>
                <a href="/episode-3" class="nav-accent-gold" style="color:#c98a10">⬤ Episode 3 — The Compliance Machine</a>
            </div>
        </div>
        <span class="text-[0.52rem] tracking-[0.18em] uppercase border px-3 py-1.5" style="border-color:rgba(201,138,16,0.6);color:#c98a10">⬤ EP.03</span>
    </div>
</nav>

<!-- ══ AU STRIPE ══ -->
<div style="position:fixed;top:56px;left:0;right:0;z-index:49;height:2px;background:linear-gradient(90deg,#c1440e 0%,#c98a10 35%,#3d7a4a 65%,#c1440e 100%);opacity:0.55;pointer-events:none"></div>

<!-- ══ SIDE PANEL ══ -->
<div id="case-panel" class="fixed top-0 right-0 bottom-0 z-[300] w-full sm:w-96 bg-[#0d0d0d] border-l border-paper/[0.08] overflow-y-auto flex flex-col">
    <div class="sticky top-0 bg-[#0d0d0d] border-b border-paper/[0.07] px-5 py-4 flex justify-between items-center z-10">
        <div>
            <div class="text-[0.52rem] tracking-[0.25em] uppercase mb-0.5" style="color:#c98a10">Episode 3 — The Compliance Machine</div>
            <div class="font-display text-xl tracking-widest">CASE FILES</div>
        </div>
        <button onclick="togglePanel()" class="text-paper/30 hover:text-paper text-xs tracking-widest border border-paper/10 hover:border-paper/30 px-3 py-2 transition-all">✕</button>
    </div>
    <div class="flex-1 p-4 space-y-2">
        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/18 px-1 pt-3 pb-0.5">Coming Soon</div>
        <div class="border border-paper/[0.06] p-4 bg-paper/[0.02]">
            <div class="text-[0.5rem] tracking-[0.18em] uppercase text-paper/22 mb-2">Episode in Production</div>
            <div class="text-[0.62rem] text-paper/28 leading-relaxed">Case files and evidence will be published here as the episode rolls out.</div>
        </div>
    </div>
    <div class="p-4 border-t border-paper/[0.06]">
        <a href="/episode-2" class="block w-full text-center border border-paper/20 hover:border-gold/50 hover:bg-gold/5 font-display tracking-widest text-paper/60 hover:text-paper py-3 text-sm transition-all">← EPISODE 2</a>
    </div>
</div>
<div id="panel-bd" onclick="togglePanel()" style="display:none;position:fixed;inset:0;z-index:299;background:rgba(0,0,0,0.55)"></div>


<!-- ══════════════════════════════════════
     EPISODE 3 HERO
══════════════════════════════════════ -->
<section class="relative min-h-screen flex flex-col pt-14">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-b from-ink/60 via-ink/80 to-ink"></div>
        <div class="scanlines absolute inset-0"></div>
    </div>
    <div class="relative z-10 flex items-center justify-between px-5 md:px-10 py-3 border-b border-paper/[0.05]">
        <div class="flex items-center gap-4">
            <span class="font-display text-[0.62rem] tracking-[0.14em]" style="color:#c98a10">EP.03</span>
            <div class="w-px h-4 bg-paper/10"></div>
            <span class="text-[0.55rem] tracking-[0.22em] uppercase text-paper/30">Season 1 — The Compliance Machine</span>
        </div>
        <div class="hidden sm:flex items-center gap-3 text-[0.52rem] tracking-[0.18em] uppercase text-paper/22">
            <span>1 Chapter</span><div class="w-px h-3 bg-paper/10"></div><span style="color:#c98a10">2025</span>
        </div>
    </div>
    <div class="relative z-10 flex-1 grid grid-cols-1 lg:grid-cols-[1fr_360px]">
        <div class="flex flex-col justify-center px-5 md:px-10 py-8 lg:py-10">
            <div class="fade-up mb-5" style="animation-delay:0.1s">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-5 h-px" style="background:#c98a10"></div>
                    <span class="text-[0.55rem] tracking-[0.28em] uppercase" style="color:#c98a10">Workforce Australia Investigation</span>
                    <span class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/22 border border-paper/10 px-2 py-0.5">Murwillumbah NSW</span>
                </div>
                <h1 class="font-display leading-[0.88] tracking-wide" style="font-size:clamp(2.8rem,7vw,5.5rem)">THE COMPLIANCE<br><span style="color:#c98a10">MACHINE.</span></h1>
                <p class="font-serif italic text-paper/40 mt-3 leading-relaxed max-w-lg" style="font-size:clamp(0.9rem,2vw,1.15rem)">Private employment providers, compliance mechanisms, and the cost of asking questions.</p>
            </div>
            <div class="fade-up" style="animation-delay:0.25s">
                <div class="flex items-center gap-3 mb-2"><span class="text-[0.52rem] tracking-[0.2em] uppercase" style="color:rgba(201,138,16,0.6)">▶ Video — Coming Soon</span></div>
                <div id="player-ep3" class="w-full aspect-video border" style="border-color:rgba(201,138,16,0.2);box-shadow:0 0 80px rgba(201,138,16,0.07),0 0 0 1px rgba(245,234,212,0.025);background:#060606;position:relative;display:flex;align-items:center;justify-content:center;overflow:hidden">
                    <div class="scanlines" style="position:absolute;inset:0;opacity:0.5"></div>
                    <div style="text-align:center;position:relative;z-index:2">
                        <div style="width:60px;height:60px;border:2px solid rgba(201,138,16,0.4);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto;transition:all 0.3s" onmouseover="this.style.borderColor='#c98a10';this.style.background='rgba(201,138,16,0.12)'" onmouseout="this.style.borderColor='rgba(201,138,16,0.4)';this.style.background='transparent'">
                            <span style="color:rgba(201,138,16,0.5);font-size:1.2rem;margin-left:3px">▶</span>
                        </div>
                        <div style="margin-top:0.75rem;font-size:0.48rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(245,234,212,0.2);font-family:'DM Mono',monospace">Episode 3 — Video Pending Upload</div>
                    </div>
                    <div style="position:absolute;bottom:0.75rem;left:0;right:0;text-align:center">
                        <div style="font-size:0.44rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(201,138,16,0.25);font-family:'DM Mono',monospace">sunlight.quest · season 1 · ep.03</div>
                    </div>
                </div>
            </div>
            <!-- Chapter nav below video -->
            <div class="fade-up mt-5 border border-paper/[0.07]" style="animation-delay:0.35s;background:rgba(12,8,4,0.7)">
                <div class="px-4 py-2 border-b border-paper/[0.06]"><span class="text-[0.46rem] tracking-[0.22em] uppercase text-paper/22">Episode 3 — Chapters</span></div>
                <div class="flex flex-wrap gap-0">
                    <a href="#tursa" class="flex items-center gap-2 px-4 py-3 border-r border-paper/[0.06] transition-all group" onmouseover="this.style.background='rgba(201,138,16,0.08)'" onmouseout="this.style.background=''">
                        <span class="font-display text-[0.62rem]" style="color:#c98a10">01</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">My Experience with Tursa</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Compliance · Murwillumbah</div></div>
                    </a>
                    <div class="flex items-center gap-2 px-4 py-3 opacity-30 cursor-not-allowed">
                        <span class="font-display text-[0.62rem] text-paper/30">02</span>
                        <div><div class="text-[0.6rem] text-paper/30 leading-none mb-0.5">More Coming</div><div class="text-[0.47rem] text-paper/18 tracking-wider">In production</div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:border-l border-paper/[0.06] flex flex-col" style="background:rgba(12,8,4,0.6)">
            <div class="px-6 py-6 border-b border-paper/[0.06]">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">This Episode</div>
                <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Documenting my experience with Tursa Employment & Training in Murwillumbah — a private Workforce Australia provider. In-person application requirements, payment suspension anomalies, and the Managed Service Plan that followed a camera.</p>
                <div class="grid grid-cols-3 gap-2 text-center">
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl" style="color:#c98a10">1</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Chapter</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-hot">TCF</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Framework</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-sage">NSW</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Region</div></div>
                </div>
            </div>
            <div class="px-5 py-4 border-b border-paper/[0.06] flex-1">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">Episode Chapters</div>
                <div class="space-y-0.5">
                    <a href="#tursa" class="flex items-center gap-3 py-2.5 px-3 border border-transparent cursor-pointer transition-all group no-underline" onmouseover="this.style.background='rgba(201,138,16,0.05)';this.style.borderColor='rgba(201,138,16,0.2)'" onmouseout="this.style.background='';this.style.borderColor='transparent'">
                        <span class="font-display text-sm w-5 shrink-0" style="color:#c98a10">01</span>
                        <div class="flex-1 min-w-0">
                            <div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">My Experience with Tursa</div>
                            <div class="text-[0.52rem] text-paper/22 tracking-wider">Compliance & Murwillumbah</div>
                        </div>
                        <span class="text-[0.52rem] text-paper/18 shrink-0" style="color:rgba(201,138,16,0.4)">▶</span>
                    </a>
                </div>
                <div class="mt-4 border border-paper/[0.06] p-3" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-1 blink" style="color:#c98a10">⬤ In Production</div>
                    <div class="text-[0.58rem] text-paper/28 leading-relaxed">More chapters being prepared. Evidence being compiled.</div>
                </div>
            </div>
            <div class="px-5 py-5">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 blink mb-2">← Episode 2 also available</div>
                <a href="/episode-2" class="block w-full text-center border border-paper/20 hover:border-gold/50 hover:bg-gold/5 font-display tracking-widest text-paper/60 hover:text-paper py-3 text-sm transition-all">WATCH EPISODE 2</a>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     TURSA — PLACEHOLDER
══════════════════════════════════════ -->
<section id="tursa" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(201,138,16,0.04) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-gold"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-gold">Chapter 01 — My Story</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">MY EXPERIENCE<br><span class="text-gold">WITH TURSA</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">Tursa Employment & Training, Murwillumbah NSW. Private Workforce Australia provider. 2023.</p>
            </div>
            <div class="max-w-xs">
                <div class="flex flex-wrap gap-2">
                    <span class="text-[0.52rem] tracking-[0.18em] uppercase border px-2 py-1 opacity-60" style="color:#c98a10;border-color:rgba(201,138,16,0.4)">⚖ Workforce Australia</span>
                    <span class="text-[0.52rem] tracking-[0.18em] uppercase border px-2 py-1 opacity-60" style="color:#c1440e;border-color:rgba(193,68,14,0.4)">📋 TCF — Targeted Compliance</span>
                </div>
            </div>
        </div>

        <div class="reveal border border-paper/[0.07] p-10 text-center" style="background:rgba(201,138,16,0.025)">
            <div class="w-8 h-px mx-auto mb-6" style="background:#c98a10"></div>
            <div class="font-display text-3xl tracking-widest mb-3" style="color:#c98a10">COMING SOON</div>
            <p class="font-serif italic text-paper/35 text-lg leading-relaxed max-w-lg mx-auto">This chapter is being prepared. Evidence is compiled and the full account will be published here.</p>
            <div class="mt-8 text-[0.52rem] tracking-[0.2em] uppercase text-paper/20">Episode 3 · Chapter 01 · My Experience with Tursa Employment & Training</div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     FOOTER
══════════════════════════════════════ -->
<footer class="border-t border-paper/[0.05] px-5 md:px-10 py-10 max-w-6xl mx-auto">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
        <div>
            <div class="font-display text-xl tracking-widest text-paper/18 mb-1">SUNLIGHT<span class="text-dim">.QUEST</span></div>
            <div class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/12">© 2026 Sunlight.Quest — Investigative Journalism</div>
        </div>
        <div class="text-right">
            <div class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/18 mb-1">Episode 3</div>
            <div class="text-[0.6rem] text-paper/28">The Compliance Machine — Workforce Australia</div>
            <div class="text-[0.5rem] text-paper/15 mt-0.5">Murwillumbah NSW · Tursa Employment & Training · 2023</div>
        </div>
    </div>
</footer>

<script>
// ── PANEL ──
function togglePanel() {
    var panel = document.getElementById('case-panel');
    var bd = document.getElementById('panel-bd');
    var open = panel.classList.contains('open');
    panel.classList.toggle('open', !open);
    bd.style.display = open ? 'none' : 'block';
    document.body.style.overflow = open ? '' : 'hidden';
}

// ── SCROLL REVEAL ──
var obs = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) { if (e.isIntersecting) e.target.classList.add('in'); });
}, { threshold: 0.08 });
document.querySelectorAll('.reveal').forEach(function(el) { obs.observe(el); });
</script>
</body>
</html>
