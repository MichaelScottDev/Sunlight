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
        .nav-dropdown-menu a{display:block;padding:0.55rem 1rem;font-size:0.55rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(245,234,212,0.4);transition:color 0.2s,background 0.2s;border-bottom:1px solid rgba(245,234,212,0.04);text-decoration:none}
        .nav-dropdown-menu a:last-child{border-bottom:none}
        .nav-dropdown-menu a:hover{color:rgba(245,234,212,0.9);background:rgba(245,234,212,0.03)}
        .nav-dropdown-menu .nav-group-label{display:block;padding:0.6rem 1rem 0.3rem;font-size:0.45rem;letter-spacing:0.25em;text-transform:uppercase;color:rgba(245,234,212,0.18);border-bottom:1px solid rgba(245,234,212,0.06);pointer-events:none}
        .nav-dropdown-menu a.nav-accent-hot:hover{color:#c1440e}
        .nav-dropdown-menu a.nav-accent-gold:hover{color:#c98a10}
        .nav-dropdown-menu a.nav-accent-violet:hover{color:#7c6aaa}
        /* story chapter */
        .story-chapter{border-left:2px solid rgba(245,234,212,0.08);padding-left:1.5rem;transition:border-color 0.3s ease}.story-chapter:hover{border-left-color:rgba(193,68,14,0.4)}
        /* evidence file rows */
        .ev-file{display:flex;align-items:center;gap:0.65rem;padding:0.65rem 0.9rem;border-bottom:1px solid rgba(245,234,212,0.04);transition:background 0.2s;cursor:pointer;position:relative;overflow:hidden}
        .ev-file:last-child{border-bottom:none}
        .ev-file:hover{background:rgba(245,234,212,0.03)}
        .ev-file::before{content:'';position:absolute;left:0;top:0;bottom:0;width:2px;transform:scaleY(0);transform-origin:bottom;transition:transform 0.3s}
        .ev-file:hover::before{transform:scaleY(1)}
        .ef-hot::before{background:#c1440e}.ef-gold::before{background:#c98a10}.ef-sage::before{background:#3d7a4a}
        .ev-icon{width:30px;height:30px;display:flex;align-items:center;justify-content:center;border:1px solid rgba(245,234,212,0.07);font-size:0.65rem;flex-shrink:0;letter-spacing:0.04em}
        .ev-pdf{background:rgba(193,68,14,0.08);color:#c1440e}
        .ev-video{background:rgba(193,68,14,0.14);color:#c1440e;font-size:0.85rem}
        .ev-meta{flex:1;min-width:0}
        .ev-name{font-size:0.63rem;color:rgba(245,234,212,0.62);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
        .ev-desc{font-size:0.49rem;letter-spacing:0.12em;text-transform:uppercase;margin-top:0.12rem;color:rgba(245,234,212,0.22)}
        .ev-cta{font-size:0.47rem;letter-spacing:0.18em;text-transform:uppercase;opacity:0.3;transition:opacity 0.2s;white-space:nowrap;flex-shrink:0}
        .ev-file:hover .ev-cta{opacity:1}
        /* media viewer overlay */
        #mv-wrap{display:none;position:fixed;inset:0;z-index:9500;background:rgba(4,4,4,0.97);backdrop-filter:blur(16px);flex-direction:column}
        #mv-wrap.active{display:flex}
        .mv-head{display:flex;align-items:center;justify-content:space-between;padding:0.9rem 1.5rem;border-bottom:1px solid rgba(245,234,212,0.06);flex-shrink:0}
        .mv-body{flex:1;display:flex;flex-direction:column;align-items:center;padding:1.5rem;overflow-y:auto;overflow-x:hidden}
        .mv-foot{padding:0.65rem 1.5rem;border-top:1px solid rgba(245,234,212,0.06);display:flex;align-items:center;gap:0.75rem;flex-shrink:0;flex-wrap:wrap}
        .mv-close-btn{background:rgba(245,234,212,0.04);border:1px solid rgba(245,234,212,0.1);color:rgba(245,234,212,0.4);font-family:'DM Mono',monospace;font-size:0.6rem;letter-spacing:0.15em;text-transform:uppercase;padding:0.45rem 0.75rem;cursor:pointer;transition:all 0.2s}
        .mv-close-btn:hover{border-color:rgba(245,234,212,0.3);color:rgba(245,234,212,0.9)}
        .mv-dl-btn{display:inline-flex;align-items:center;gap:0.4rem;border:1px solid rgba(245,234,212,0.12);padding:0.45rem 0.9rem;font-size:0.52rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(245,234,212,0.4);transition:all 0.2s;cursor:pointer;background:none}
        .mv-dl-btn:hover{border-color:rgba(245,234,212,0.35);color:rgba(245,234,212,0.85)}
        .mv-dl-hot{border-color:rgba(193,68,14,0.35);color:#c1440e}.mv-dl-hot:hover{border-color:#c1440e;background:rgba(193,68,14,0.08)}
        /* pdf placeholder */
        .pdf-ph{background:rgba(245,234,212,0.02);border:1px solid rgba(245,234,212,0.06);max-width:640px;width:100%;padding:2.5rem 2rem;text-align:center}
        .pdf-ph-pages{display:flex;gap:0.5rem;justify-content:center;margin-bottom:1.5rem}
        .pdf-ph-page{width:64px;height:82px;border:1px solid rgba(245,234,212,0.08);background:rgba(245,234,212,0.02);display:flex;flex-direction:column;gap:4px;padding:6px;border-top:3px solid rgba(193,68,14,0.4)}
        .pdf-ph-line{height:2px;background:rgba(245,234,212,0.06);border-radius:1px}
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

<!-- ══ MEDIA VIEWER OVERLAY ══ -->
<div id="mv-wrap">
    <div class="mv-head">
        <div>
            <div id="mv-tag" class="text-[0.48rem] tracking-[0.22em] uppercase text-hot mb-0.5">Evidence File</div>
            <div id="mv-title" class="font-display text-lg tracking-widest">DOCUMENT</div>
        </div>
        <button class="mv-close-btn" onclick="closeMV()">✕ Close</button>
    </div>
    <div class="mv-body" id="mv-body"></div>
    <div class="mv-foot">
        <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20" id="mv-meta"></span>
        <div class="flex-1"></div>
        <button class="mv-dl-btn mv-dl-hot" id="mv-dl-btn" onclick="downloadFile()">⬇ Download File</button>
        <button class="mv-close-btn" onclick="closeMV()">✕ Close</button>
    </div>
</div>


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
            <span>In Production</span><div class="w-px h-3 bg-paper/10"></div><span style="color:#c98a10">2025</span>
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
                <div class="flex items-center gap-3 mb-2">
                    <span class="text-[0.52rem] tracking-[0.2em] uppercase" style="color:rgba(201,138,16,0.6)">▶ Video — Coming Soon</span>
                </div>
                <div class="w-full aspect-video border" style="border-color:rgba(201,138,16,0.2);background:#060606;position:relative;display:flex;align-items:center;justify-content:center;overflow:hidden">
                    <div class="scanlines" style="position:absolute;inset:0;opacity:0.5"></div>
                    <div style="text-align:center;position:relative;z-index:2">
                        <div style="width:60px;height:60px;border:2px solid rgba(201,138,16,0.4);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto">
                            <span style="color:rgba(201,138,16,0.5);font-size:1.2rem;margin-left:3px">▶</span>
                        </div>
                        <div style="margin-top:0.75rem;font-size:0.48rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(245,234,212,0.2);font-family:'DM Mono',monospace">Episode 3 — Video Pending Upload</div>
                    </div>
                    <div style="position:absolute;bottom:0.75rem;left:0;right:0;text-align:center">
                        <div style="font-size:0.44rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(201,138,16,0.25);font-family:'DM Mono',monospace">sunlight.quest · season 1 · ep.03</div>
                    </div>
                </div>
            </div>
            <!-- Chapter nav below video — add <a> entries here as sections are built -->
            <div class="fade-up mt-5 border border-paper/[0.07]" style="animation-delay:0.35s;background:rgba(12,8,4,0.7)">
                <div class="px-4 py-2 border-b border-paper/[0.06]">
                    <span class="text-[0.46rem] tracking-[0.22em] uppercase text-paper/22">Episode 3 — Chapters</span>
                </div>
                <div class="flex flex-wrap gap-0">
                    <a href="#tursa" class="flex items-center gap-2 px-4 py-3 hover:bg-paper/[0.03] transition-colors border-r border-paper/[0.06]">
                        <span class="font-display text-[0.62rem]" style="color:#c98a10">01</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/55 leading-none mb-0.5">Workforce Australia</div>
                            <div class="text-[0.47rem] text-paper/22 tracking-wider">Tursa · MSP</div>
                        </div>
                    </a>
                    <a href="#ai-narrative" class="flex items-center gap-2 px-4 py-3 hover:bg-paper/[0.03] transition-colors border-r border-paper/[0.06]">
                        <span class="font-display text-[0.62rem]" style="color:#7c6aaa">02</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/55 leading-none mb-0.5">AI Narrative</div>
                            <div class="text-[0.47rem] text-paper/22 tracking-wider">The machine account</div>
                        </div>
                    </a>
                    <a href="#lecc" class="flex items-center gap-2 px-4 py-3 hover:bg-paper/[0.03] transition-colors border-r border-paper/[0.06]">
                        <span class="font-display text-[0.62rem] text-hot">03</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/55 leading-none mb-0.5">LECC Complaint</div>
                            <div class="text-[0.47rem] text-paper/22 tracking-wider">Coogee · SC Agnew</div>
                        </div>
                    </a>
                    <a href="#jadhav" class="flex items-center gap-2 px-4 py-3 hover:bg-paper/[0.03] transition-colors">
                        <span class="font-display text-[0.62rem]" style="color:#c98a10">04</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/55 leading-none mb-0.5">Locked Out</div>
                            <div class="text-[0.47rem] text-paper/22 tracking-wider">Jadhav · Q8092-26</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="lg:border-l border-paper/[0.06] flex flex-col" style="background:rgba(12,8,4,0.6)">
            <div class="px-6 py-6 border-b border-paper/[0.06]">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">This Episode</div>
                <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Documenting my experience with Tursa Employment & Training in Murwillumbah — a private Workforce Australia provider. In-person application requirements, payment suspension anomalies, and the Managed Service Plan that followed a camera.</p>
                <div class="grid grid-cols-3 gap-2 text-center">
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl" style="color:#c98a10">TCF</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Framework</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-hot">MSP</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Restriction</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-sage">NSW</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Region</div></div>
                </div>
            </div>
            <div class="px-5 py-4 border-b border-paper/[0.06] flex-1">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">Episode Chapters</div>
                <div class="space-y-0.5">
                    <a href="#tursa" class="flex items-center gap-3 p-2 hover:bg-paper/[0.03] transition-colors">
                        <span class="font-display text-[0.5rem]" style="color:#c98a10">01</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">Workforce Australia</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Tursa Employment &amp; Training · MSP</div>
                        </div>
                    </a>
                    <a href="#ai-narrative" class="flex items-center gap-3 p-2 hover:bg-paper/[0.03] transition-colors">
                        <span class="font-display text-[0.5rem]" style="color:#7c6aaa">02</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">The AI Narrative</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Machine account · Pattern recognition</div>
                        </div>
                    </a>
                    <a href="#lecc" class="flex items-center gap-3 p-2 hover:bg-paper/[0.03] transition-colors">
                        <span class="font-display text-[0.5rem] text-hot">03</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">LECC Complaint</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Coogee · SC Agnew · EXT2026-0413</div>
                        </div>
                    </a>
                    <a href="#jadhav" class="flex items-center gap-3 p-2 hover:bg-paper/[0.03] transition-colors">
                        <span class="font-display text-[0.5rem]" style="color:#c98a10">04</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">Locked Out &amp; Still Paying</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Jadhav · Q8092-26 · Coastal Property</div>
                        </div>
                    </a>
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
     SECTION — id="tursa"
══════════════════════════════════════ -->
<section id="tursa" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(201,138,16,0.04) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">

        <!-- Section header -->
        <div class="reveal mb-10">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-5 h-px" style="background:#c98a10"></div>
                <span class="text-[0.52rem] tracking-[0.26em] uppercase text-paper/30">The Compliance Machine — Welfare System</span>
            </div>
            <div class="flex items-baseline gap-4 flex-wrap mb-2">
                <span class="font-display tracking-widest text-paper/20" style="font-size:clamp(1.1rem,3vw,1.6rem)">TURSA.</span>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2rem,5.5vw,4rem)">THE COMPLIANCE<br><span style="color:#c98a10">MACHINE.</span></h2>
            </div>
            <p class="text-[0.78rem] leading-relaxed text-paper/45 max-w-2xl mt-4">What happened when I asked for the legal basis of a requirement to walk my resume to a kitchenhand position. In writing. Eleven times.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/30 max-w-2xl mt-3">This is not a complaint about a bad experience. This is a documented record of how the Workforce Australia compliance architecture operates — and what it does to people who ask questions.</p>
        </div>

        <!-- Document badges -->
        <div class="reveal flex flex-wrap gap-3 mb-10">
            <span class="text-[0.52rem] tracking-[0.18em] uppercase border border-paper/15 px-3 py-1.5 text-paper/40">📄 9 Source Documents</span>
            <span class="text-[0.52rem] tracking-[0.18em] uppercase border px-3 py-1.5" style="border-color:rgba(61,122,74,0.5);color:#3d7a4a">⚖ All Charges Dropped</span>
            <span class="text-[0.52rem] tracking-[0.18em] uppercase border border-paper/15 px-3 py-1.5 text-paper/40">📧 Email Chain Filed</span>
        </div>

        <!-- Stat grid -->
        <div class="reveal grid grid-cols-2 md:grid-cols-4 gap-px mb-12" style="background:rgba(245,234,212,0.06)">
            <div class="px-5 py-6" style="background:#0c0804">
                <div class="font-display text-4xl mb-1" style="color:#c98a10">11</div>
                <div class="text-[0.6rem] text-paper/55 leading-snug mb-1">Written requests</div>
                <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">For the legal basis — never provided</div>
            </div>
            <div class="px-5 py-6" style="background:#0c0804">
                <div class="font-display text-4xl mb-1 text-hot">0</div>
                <div class="text-[0.6rem] text-paper/55 leading-snug mb-1">Legal citations given</div>
                <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Adviser confirmed: not legally required</div>
            </div>
            <div class="px-5 py-6" style="background:#0c0804">
                <div class="font-display text-4xl mb-1 text-violet">6mo</div>
                <div class="text-[0.6rem] text-paper/55 leading-snug mb-1">MSP duration</div>
                <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Barred from all Tursa sites &amp; written contact</div>
            </div>
            <div class="px-5 py-6" style="background:#0c0804">
                <div class="font-display text-4xl mb-1 text-paper/25">$0</div>
                <div class="text-[0.6rem] text-paper/55 leading-snug mb-1">Legal basis for method</div>
                <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Suspended anyway. MSP applied anyway.</div>
            </div>
        </div>

        <!-- Chapter 01 -->
        <div class="reveal mb-8">
            <div class="flex items-center gap-3 mb-6">
                <span class="font-display text-[0.62rem] tracking-[0.14em]" style="color:#c98a10">Chapter 01</span>
                <div class="w-px h-4 bg-paper/10"></div>
                <span class="text-[0.52rem] tracking-[0.2em] uppercase text-paper/28">Murwillumbah · Tursa Employment &amp; Training</span>
            </div>
            <h3 class="font-display leading-none tracking-wide mb-2" style="font-size:clamp(1.6rem,4vw,3rem)">THE JOB REFERRAL.</h3>
            <div class="text-[0.72rem] tracking-[0.12em] uppercase mb-6" style="color:#c1440e">ON FOOT. OR YOUR PAYMENT GETS SUSPENDED.</div>
        </div>

        <!-- Pull quote -->
        <div class="reveal border-l-2 pl-6 mb-10" style="border-color:#c98a10">
            <p class="font-serif italic text-paper/60 leading-relaxed" style="font-size:clamp(0.9rem,2vw,1.1rem)">"The adviser told me I had to walk my resume to a kitchenhand position. In person. On foot. I asked him to show me where that requirement was written. He couldn't. He suspended my payment anyway."</p>
        </div>

        <!-- Body copy -->
        <div class="reveal max-w-3xl space-y-5 mb-14 text-[0.75rem] leading-relaxed text-paper/50">
            <p>I was placed with Tursa Employment &amp; Training in Murwillumbah, NSW, as a Workforce Australia participant on JobSeeker Payment. In late July 2023 I was assigned a job referral task — Kitchenhand at Wild Thyme Café, then Imperial Hotel Murwillumbah — and told by Employment Adviser Luke Krauss that I was required to take my resume in physically, in person, on foot, and apply. I was told he would be checking with the employer to confirm I had walked in.</p>
            <p>My JobSeeker Payment was suspended from 25 July 2023 for failing to take action on a job opportunity — a date six days before the job referral's deadline of 31 July. The Centrelink letter confirming this was dated 2 August 2023. The payment was suspended before the task deadline had elapsed.</p>
        </div>

        <!-- Timeline -->
        <div class="reveal">
            <div class="text-[0.52rem] tracking-[0.24em] uppercase text-paper/22 mb-5">The Timeline That Should Not Be Possible</div>
            <div class="relative">
                <!-- vertical rule -->
                <div class="absolute left-[3.5rem] top-0 bottom-0 w-px" style="background:rgba(245,234,212,0.07)"></div>
                <div class="space-y-0">

                    <div class="reveal flex gap-6 pb-8">
                        <div class="w-14 shrink-0 text-right">
                            <span class="font-display text-[0.68rem]" style="color:#c98a10">26/7/23</span>
                        </div>
                        <div class="pl-6 border-l-0">
                            <div class="w-2 h-2 rounded-full absolute left-[3.1rem] mt-1.5" style="background:#c98a10"></div>
                            <div class="text-[0.68rem] text-paper/70 leading-snug mb-1">Phone appointment — job referral task set. Wild Thyme Café, kitchenhand. Must walk in.</div>
                            <div class="text-[0.52rem] tracking-[0.12em] uppercase text-paper/25">No written confirmation of in-person requirement provided at this point.</div>
                        </div>
                    </div>

                    <div class="reveal flex gap-6 pb-8">
                        <div class="w-14 shrink-0 text-right">
                            <span class="font-display text-[0.68rem]" style="color:#c98a10">28/7/23</span>
                        </div>
                        <div class="pl-6">
                            <div class="w-2 h-2 rounded-full absolute left-[3.1rem] mt-1.5" style="background:#c98a10"></div>
                            <div class="text-[0.68rem] text-paper/70 leading-snug mb-1">Written notification received: Imperial Hotel Murwillumbah, Kitchenhand. Deadline: 10/08/2023.</div>
                        </div>
                    </div>

                    <div class="reveal flex gap-6 pb-8">
                        <div class="w-14 shrink-0 text-right">
                            <span class="font-display text-[0.68rem] text-hot">25/7/23</span>
                        </div>
                        <div class="pl-6">
                            <div class="w-2 h-2 rounded-full absolute left-[3.1rem] mt-1.5" style="background:#c1440e"></div>
                            <div class="text-[0.68rem] text-paper/70 leading-snug mb-1">Payment suspended — <span class="text-hot">SIX DAYS BEFORE</span> the task deadline.</div>
                            <div class="text-[0.52rem] tracking-[0.12em] uppercase text-paper/25">The Centrelink letter states payment stopped from this date for failing to act on an opportunity presented on 31/7/23 — yet 31/7 is still six days in the future when 25/7 arrives.</div>
                        </div>
                    </div>

                    <div class="reveal flex gap-6">
                        <div class="w-14 shrink-0 text-right">
                            <span class="font-display text-[0.68rem]" style="color:#c98a10">2/8/23</span>
                        </div>
                        <div class="pl-6">
                            <div class="w-2 h-2 rounded-full absolute left-[3.1rem] mt-1.5" style="background:#c98a10"></div>
                            <div class="text-[0.68rem] text-paper/70 leading-snug mb-1">Centrelink letter received confirming suspension.</div>
                            <div class="text-[0.52rem] tracking-[0.12em] uppercase text-paper/25">This anomaly was never explained by Tursa or Services Australia.</div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="mt-10 border border-paper/[0.07] p-5 max-w-2xl" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.52rem] tracking-[0.2em] uppercase mb-2 text-hot">Finding</div>
                <p class="text-[0.65rem] leading-relaxed text-paper/45">The charge of failing to comply with the notice was applied before any breach was legally possible. The payment was suspended before the task deadline arrived.</p>
            </div>
        </div>

        <!-- ── Chapter 02 divider ── -->
        <div class="reveal mt-20 mb-12 border-t border-paper/[0.05] pt-14">
            <div class="flex items-center gap-3 mb-6">
                <span class="font-display text-[0.62rem] tracking-[0.14em]" style="color:#c98a10">Chapter 02</span>
                <div class="w-px h-4 bg-paper/10"></div>
                <span class="text-[0.52rem] tracking-[0.2em] uppercase text-paper/28">The Email Exchange · 3–4 August 2023</span>
            </div>
            <h3 class="font-display leading-none tracking-wide mb-2" style="font-size:clamp(1.6rem,4vw,3rem)">THE QUESTION THAT<br><span style="color:#c98a10">COULD NEVER BE ANSWERED.</span></h3>
        </div>

        <!-- Chapter 02 pull quote -->
        <div class="reveal border-l-2 pl-6 mb-10" style="border-color:#c98a10">
            <p class="font-serif italic text-paper/60 leading-relaxed" style="font-size:clamp(0.9rem,2vw,1.1rem)">"Is it a legal requirement that I must physically go to these locations to apply, or can this be done through other means? He eventually said no — not legally required. Then he said my payment could be suspended for it anyway."</p>
        </div>

        <!-- Chapter 02 body -->
        <div class="reveal max-w-3xl space-y-5 mb-14 text-[0.75rem] leading-relaxed text-paper/50">
            <p>Over 13 messages on 3–4 August 2023, I asked Luke Krauss one question in multiple forms: is the in-person application method a legal obligation under social security law, or is it a Tursa guideline? The exchange, preserved in full in the email thread uploaded here, produces one of the more extraordinary admissions in the documented record of welfare compliance in Australia.</p>
        </div>

        <!-- Four admissions -->
        <div class="reveal mb-14">
            <div class="text-[0.52rem] tracking-[0.24em] uppercase text-paper/22 mb-5">The Four Admissions — Luke Krauss, Tursa, 4 August 2023</div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-px" style="background:rgba(245,234,212,0.06)">

                <div class="p-5 panel-item relative overflow-hidden" style="background:#0c0804">
                    <div class="absolute left-0 top-0 bottom-0 w-0.5 bar-accent-y" style="background:#c98a10"></div>
                    <div class="flex items-baseline gap-3 mb-3">
                        <span class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/22">Email 1</span>
                        <span class="font-display text-[0.62rem]" style="color:#c98a10">09:24</span>
                    </div>
                    <p class="font-serif italic text-paper/75 leading-snug mb-3" style="font-size:0.85rem">"You are not legally required to do anything."</p>
                    <p class="text-[0.58rem] leading-relaxed text-paper/30">Krauss confirms no legal obligation — but states consequences follow from choices made within the program.</p>
                </div>

                <div class="p-5 panel-item relative overflow-hidden" style="background:#0c0804">
                    <div class="absolute left-0 top-0 bottom-0 w-0.5 bar-accent-y" style="background:#c98a10"></div>
                    <div class="flex items-baseline gap-3 mb-3">
                        <span class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/22">Email 2</span>
                        <span class="font-display text-[0.62rem]" style="color:#c98a10">14:10</span>
                    </div>
                    <p class="font-serif italic text-paper/75 leading-snug mb-3" style="font-size:0.85rem">"No you are not legally required to apply for these specific jobs in person."</p>
                    <p class="text-[0.58rem] leading-relaxed text-paper/30">The clearest possible written confirmation that the in-person requirement had no legal basis.</p>
                </div>

                <div class="p-5 panel-item relative overflow-hidden" style="background:#0c0804">
                    <div class="absolute left-0 top-0 bottom-0 w-0.5 bar-accent-y" style="background:#c1440e"></div>
                    <div class="flex items-baseline gap-3 mb-3">
                        <span class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/22">Email 3</span>
                        <span class="font-display text-[0.62rem] text-hot">15:04</span>
                    </div>
                    <p class="font-serif italic text-paper/75 leading-snug mb-3" style="font-size:0.85rem">"Yes your payment could be suspended."</p>
                    <p class="text-[0.58rem] leading-relaxed text-paper/30">Not legally required — but payment suspended for non-compliance anyway. No regulatory citation provided.</p>
                </div>

                <div class="p-5 panel-item relative overflow-hidden" style="background:#0c0804">
                    <div class="absolute left-0 top-0 bottom-0 w-0.5 bar-accent-y" style="background:#7c6aaa"></div>
                    <div class="flex items-baseline gap-3 mb-3">
                        <span class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/22">Email 4</span>
                        <span class="font-display text-[0.62rem] text-violet">16:07</span>
                    </div>
                    <p class="font-serif italic text-paper/75 leading-snug mb-3" style="font-size:0.85rem">"I'm really struggling to comprehend how this is so hard for someone as smart as you are to understand."</p>
                    <p class="text-[0.58rem] leading-relaxed text-paper/30">Having failed to provide any regulatory citation, Krauss shifts to personal diminishment. The record ends here.</p>
                </div>

            </div>
        </div>

        <!-- Extended Krauss quote -->
        <div class="reveal border border-paper/[0.07] p-6 mb-10 max-w-3xl" style="background:rgba(124,106,170,0.04)">
            <p class="font-serif italic text-paper/55 leading-relaxed mb-4" style="font-size:0.88rem">"If you wish to go try searching for intricate policies regarding this go for it, I cannot advise you where you can find this, I don't even think the department of employment and workplace relations (DEWR) has gone that deep into it because its not rocket science."</p>
            <div class="text-[0.5rem] tracking-[0.16em] uppercase text-paper/25">— Luke Krauss, Employment Adviser, Tursa Murwillumbah. Email, 4 August 2023.</div>
        </div>

        <!-- Chapter 02 closing analysis -->
        <div class="reveal max-w-3xl space-y-5 mb-10 text-[0.75rem] leading-relaxed text-paper/50">
            <p>That statement — the regulatory basis doesn't exist in any document because it's "not rocket science" — is the clearest possible articulation of how the compliance system actually operates. The requirement is not legal. It is coercive. It is enforced not through law but through the threat of payment suspension. The threat is real. The law behind it does not exist.</p>
        </div>

        <div class="reveal border border-paper/[0.07] p-5 max-w-2xl" style="background:rgba(193,68,14,0.04)">
            <div class="text-[0.52rem] tracking-[0.2em] uppercase mb-2 text-hot">Finding</div>
            <p class="text-[0.65rem] leading-relaxed text-paper/45">The in-person application requirement was confirmed in writing to have no legal basis. Payment was suspended for non-compliance regardless. No regulatory citation was ever provided across 13 messages.</p>
        </div>

        <!-- ── Chapter 03 ── -->
        <div class="reveal mt-20 mb-12 border-t border-paper/[0.05] pt-14">
            <div class="flex items-center gap-3 mb-6">
                <span class="font-display text-[0.62rem] tracking-[0.14em]" style="color:#c98a10">Chapter 03</span>
                <div class="w-px h-4 bg-paper/10"></div>
                <span class="text-[0.52rem] tracking-[0.2em] uppercase text-paper/28">The Camera · The Office · The Police Call</span>
            </div>
            <h3 class="font-display leading-none tracking-wide mb-2" style="font-size:clamp(1.6rem,4vw,3rem)">A 30-MINUTE APPOINTMENT.</h3>
            <div class="text-[0.72rem] tracking-[0.12em] uppercase mb-6" style="color:#c1440e">TERMINATED BECAUSE I HELD A CAMERA.</div>
        </div>

        <div class="reveal border-l-2 pl-6 mb-10" style="border-color:#c98a10">
            <p class="font-serif italic text-paper/60 leading-relaxed" style="font-size:clamp(0.9rem,2vw,1.1rem)">"The appointment was scheduled for 30 minutes. I held a camera. She called the police. She pressed the duress alarm. She called me a pig. She asked if intimidating a woman was going to be my 'new repertoire.' The appointment had been going for under three minutes."</p>
        </div>

        <div class="reveal max-w-3xl space-y-5 mb-12 text-[0.75rem] leading-relaxed text-paper/50">
            <p>I attended a scheduled appointment at the Tursa Murwillumbah office. The appointment was booked for 30 minutes. I held a camera — not recording, according to the transcript — and the staff member terminated the appointment and called police, stating she did not consent to being recorded. The full confrontation is transcribed in the CCTV Request transcript uploaded below.</p>
        </div>

        <!-- Transcript block -->
        <div class="reveal mb-12 border border-paper/[0.07] max-w-3xl" style="background:rgba(12,8,4,0.8)">
            <div class="px-5 py-3 border-b border-paper/[0.06] flex items-center gap-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase" style="color:#c98a10">▶ Recorded Confrontation</span>
                <span class="text-[0.48rem] tracking-[0.16em] uppercase text-paper/25">Tursa Murwillumbah Office · Transcript Extract</span>
            </div>
            <div class="divide-y divide-paper/[0.05]">

                <div class="px-5 py-4 grid grid-cols-[5rem_1fr] gap-4 items-start">
                    <div class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/30 pt-0.5">Staff Member</div>
                    <p class="font-serif italic text-paper/65 text-[0.8rem] leading-relaxed">"Can you put your camera back in your bag, please?"</p>
                </div>

                <div class="px-5 py-4 grid grid-cols-[5rem_1fr] gap-4 items-start" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.52rem] tracking-[0.14em] uppercase pt-0.5" style="color:#c98a10">Kosta</div>
                    <p class="font-serif italic text-paper/65 text-[0.8rem] leading-relaxed">"I have a right to hold the camera."</p>
                </div>

                <div class="px-5 py-4 grid grid-cols-[5rem_1fr] gap-4 items-start">
                    <div class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/30 pt-0.5">Staff Member</div>
                    <p class="font-serif italic text-paper/65 text-[0.8rem] leading-relaxed">"Out you get. I'm not doing this. Out. Get out of my office, please, Costa."</p>
                </div>

                <div class="px-5 py-4 grid grid-cols-[5rem_1fr] gap-4 items-start" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.52rem] tracking-[0.14em] uppercase pt-0.5" style="color:#c98a10">Kosta</div>
                    <p class="font-serif italic text-paper/65 text-[0.8rem] leading-relaxed">"But that appointment was scheduled for 30 minutes."</p>
                </div>

                <div class="px-5 py-4 grid grid-cols-[5rem_1fr] gap-4 items-start">
                    <div class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/30 pt-0.5 leading-snug">Staff Member<br><span class="text-paper/18 normal-case">[on phone to colleague]</span></div>
                    <p class="font-serif italic text-paper/65 text-[0.8rem] leading-relaxed">"He refuses to leave my office. He is recording in here as well at the moment with the camera and a big thing on a microphone as well. Saying that he is not recording, however he is recording. He refuses to leave my office and he will not get out of my space."</p>
                </div>

                <div class="px-5 py-4 grid grid-cols-[5rem_1fr] gap-4 items-start">
                    <div class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/30 pt-0.5">Staff Member</div>
                    <p class="font-serif italic text-paper/65 text-[0.8rem] leading-relaxed">"Or do you find intimidating a woman to be something that you're actually... that this is going to be one of the new repertoire, is it?"</p>
                </div>

                <div class="px-5 py-4 grid grid-cols-[5rem_1fr] gap-4 items-start" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.52rem] tracking-[0.14em] uppercase pt-0.5 text-paper/20">Final line</div>
                    <p class="text-[0.68rem] text-paper/40 leading-relaxed">"Please provide me CCTV footage of this situation."</p>
                </div>

            </div>
        </div>

        <!-- Post-transcript quote -->
        <div class="reveal border border-paper/[0.07] p-6 mb-10 max-w-3xl" style="background:rgba(124,106,170,0.04)">
            <p class="font-serif italic text-paper/55 leading-relaxed" style="font-size:0.88rem">"The request for CCTV footage is the natural investigative reflex of a person who understands that the only reliable record of what happens in these offices is the footage the office itself holds. The system that demands your compliance won't show you its own evidence."</p>
        </div>

        <div class="reveal max-w-3xl space-y-5 mb-12 text-[0.75rem] leading-relaxed text-paper/50">
            <p>What the transcript documents is not simply a hostile encounter. It is the precise mechanism by which the system transforms a participant's reasonable attempt at documentation into a justification for exclusion. The provider has every institutional incentive to end the encounter on their terms — and every tool to document it in a way that turns the participant's persistence into a compliance failure. The duress button was pressed. An incident report was filed. The MSP followed.</p>
        </div>

        <!-- Guidelines callout -->
        <div class="reveal mb-6">
            <div class="text-[0.52rem] tracking-[0.24em] uppercase text-paper/22 mb-4">What the Guidelines Actually Say — Chapter 5.3.1</div>
            <div class="border border-paper/[0.07] p-5 max-w-3xl" style="background:rgba(61,122,74,0.04)">
                <div class="text-[0.48rem] tracking-[0.16em] uppercase text-paper/20 mb-3">Workforce Australia Guidelines, Chapter 5, effective 1 July 2023:</div>
                <p class="font-serif italic text-paper/60 leading-relaxed mb-4" style="font-size:0.88rem">"Participants have the right to ask questions and appropriately outline their views on their entitlements and servicing. As long as they are not being abusive or using offensive language, Participants should not be considered as demonstrating challenging behaviours in these situations."</p>
                <p class="text-[0.65rem] leading-relaxed text-paper/40">Asking — in writing, eleven times, without any abusive language — for the regulatory basis of a requirement is the textbook exercise of this right. The incident report filed after the camera confrontation, and the MSP that followed, classified the exercise of a specifically enumerated right as challenging behaviour. That is not the system malfunctioning. That is the system working as it was designed.</p>
            </div>
        </div>

        <!-- ── Chapter 04 ── -->
        <div class="reveal mt-20 mb-12 border-t border-paper/[0.05] pt-14">
            <div class="flex items-center gap-3 mb-6">
                <span class="font-display text-[0.62rem] tracking-[0.14em]" style="color:#c98a10">Chapter 04</span>
                <div class="w-px h-4 bg-paper/10"></div>
                <span class="text-[0.52rem] tracking-[0.2em] uppercase text-paper/28">The Managed Service Plan · Six Months</span>
            </div>
            <h3 class="font-display leading-none tracking-wide mb-2" style="font-size:clamp(1.6rem,4vw,3rem)">THE MSP.</h3>
            <div class="text-[0.72rem] tracking-[0.12em] uppercase mb-6" style="color:#c1440e">BARRED FROM THE OFFICE. BARRED FROM WRITING. SIX MONTHS.</div>
        </div>

        <div class="reveal border-l-2 pl-6 mb-10" style="border-color:#c98a10">
            <p class="font-serif italic text-paper/60 leading-relaxed" style="font-size:clamp(0.9rem,2vw,1.1rem)">"The manager wrote that I had breached the MSP by attending the office. I attended because I had a scheduled appointment. They put a new MSP in place — phone only, no attendance at any Tursa site, no written contact with any Tursa staff. For six months."</p>
        </div>

        <!-- MSP letter vs guidelines comparison -->
        <div class="reveal mb-12">
            <div class="text-[0.52rem] tracking-[0.24em] uppercase text-paper/22 mb-4">MSP Letter — David Wiblen, Manager, Workforce Australia (Tursa) · 10/8/2023</div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-px" style="background:rgba(245,234,212,0.06)">

                <div class="p-6" style="background:#0c0804">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase mb-4 text-hot">What the Letter States</div>
                    <ul class="space-y-3">
                        <li class="flex gap-3 text-[0.68rem] text-paper/50 leading-snug">
                            <span class="text-hot shrink-0 mt-0.5">→</span>
                            <span>I had breached the prior MSP by attending the Tursa Murwillumbah office</span>
                        </li>
                        <li class="flex gap-3 text-[0.68rem] text-paper/50 leading-snug">
                            <span class="text-hot shrink-0 mt-0.5">→</span>
                            <span>I attended twice — one occasion the police were called</span>
                        </li>
                        <li class="flex gap-3 text-[0.68rem] text-paper/50 leading-snug">
                            <span class="text-hot shrink-0 mt-0.5">→</span>
                            <span>New MSP: assistance via phone only</span>
                        </li>
                        <li class="flex gap-3 text-[0.68rem] text-paper/50 leading-snug">
                            <span class="text-hot shrink-0 mt-0.5">→</span>
                            <span>Period: 10/8/2023 – 9/2/2024 (six months)</span>
                        </li>
                        <li class="flex gap-3 text-[0.68rem] text-paper/50 leading-snug">
                            <span class="text-hot shrink-0 mt-0.5">→</span>
                            <span>Not permitted to attend any Tursa site</span>
                        </li>
                        <li class="flex gap-3 text-[0.68rem] text-paper/50 leading-snug">
                            <span class="text-hot shrink-0 mt-0.5">→</span>
                            <span>Not permitted to write to any Tursa staff</span>
                        </li>
                    </ul>
                </div>

                <div class="p-6" style="background:#0c0804">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase mb-4 text-sage">What the Guidelines Require</div>
                    <ul class="space-y-3">
                        <li class="flex gap-3 text-[0.68rem] text-paper/50 leading-snug">
                            <span class="text-sage shrink-0 mt-0.5">→</span>
                            <span>Either face-to-face OR telephone must remain available at all times</span>
                        </li>
                        <li class="flex gap-3 text-[0.68rem] text-paper/50 leading-snug">
                            <span class="text-sage shrink-0 mt-0.5">→</span>
                            <span>Full face-to-face restriction AND full writing restriction simultaneously is the most restrictive arrangement possible</span>
                        </li>
                        <li class="flex gap-3 text-[0.68rem] text-paper/50 leading-snug">
                            <span class="text-sage shrink-0 mt-0.5">→</span>
                            <span>Participant must be given opportunity to participate in MSP review</span>
                        </li>
                        <li class="flex gap-3 text-[0.68rem] text-paper/50 leading-snug">
                            <span class="text-sage shrink-0 mt-0.5">→</span>
                            <span>Participants can request review at any time — contact NCSL: 1800 805 260</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- MSP severity callout -->
        <div class="reveal mb-10">
            <div class="text-[0.52rem] tracking-[0.24em] uppercase text-paper/22 mb-4">The MSP Applied to a Participant Whose Conduct Was Asking Questions</div>
            <div class="grid grid-cols-3 gap-px mb-8" style="background:rgba(245,234,212,0.06)">
                <div class="px-4 py-5 text-center" style="background:#0c0804">
                    <div class="font-display text-2xl mb-1 text-hot">FULL</div>
                    <div class="text-[0.58rem] text-paper/55 mb-1">F2F Restriction</div>
                    <div class="text-[0.46rem] tracking-[0.12em] uppercase text-paper/22">No site attendance</div>
                </div>
                <div class="px-4 py-5 text-center" style="background:#0c0804">
                    <div class="font-display text-2xl mb-1 text-hot">FULL</div>
                    <div class="text-[0.58rem] text-paper/55 mb-1">Writing Restriction</div>
                    <div class="text-[0.46rem] tracking-[0.12em] uppercase text-paper/22">No written contact</div>
                </div>
                <div class="px-4 py-5 text-center" style="background:#0c0804">
                    <div class="font-display text-2xl mb-1" style="color:#c98a10">MAX</div>
                    <div class="text-[0.58rem] text-paper/55 mb-1">Restriction Level</div>
                    <div class="text-[0.46rem] tracking-[0.12em] uppercase text-paper/22">Most restrictive possible</div>
                </div>
            </div>
            <div class="text-[0.72rem] tracking-[0.12em] uppercase mb-6 text-paper/30">FULL FACE-TO-FACE RESTRICTION.<br>FULL WRITING RESTRICTION.<br>SIX MONTHS.</div>
        </div>

        <div class="reveal max-w-3xl space-y-5 mb-12 text-[0.75rem] leading-relaxed text-paper/50">
            <p>The MSP framework exists, according to the guidelines, to tailor service delivery to participants who display challenging behaviours — while ensuring they remain connected to employment services. The most restrictive arrangement permitted is full face-to-face restriction combined with full writing restriction, leaving only telephone.</p>
            <p>This is what was applied — for six months — to a participant whose documented conduct was: asking in writing for the regulatory basis of a requirement (emails preserved), attending a scheduled appointment while holding a camera (transcript preserved), and asking for CCTV footage of the confrontation that followed. The guidelines explicitly state that participants who ask questions about their entitlements should not be considered as demonstrating challenging behaviours. The MSP says otherwise.</p>
        </div>

        <!-- Chapter 04 stat row -->
        <div class="reveal grid grid-cols-2 md:grid-cols-4 gap-px mb-10" style="background:rgba(245,234,212,0.06)">
            <div class="px-5 py-6" style="background:#0c0804">
                <div class="font-display text-3xl mb-1 text-violet">6mo</div>
                <div class="text-[0.6rem] text-paper/55 leading-snug mb-1">MSP Duration</div>
                <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">10/8/23 – 9/2/24</div>
            </div>
            <div class="px-5 py-6" style="background:#0c0804">
                <div class="font-display text-3xl mb-1 text-hot">FULL</div>
                <div class="text-[0.6rem] text-paper/55 leading-snug mb-1">F2F Restriction</div>
                <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">No site attendance</div>
            </div>
            <div class="px-5 py-6" style="background:#0c0804">
                <div class="font-display text-3xl mb-1 text-hot">FULL</div>
                <div class="text-[0.6rem] text-paper/55 leading-snug mb-1">Writing Restriction</div>
                <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">No written contact</div>
            </div>
            <div class="px-5 py-6" style="background:#0c0804">
                <div class="font-display text-3xl mb-1" style="color:#c98a10">MAX</div>
                <div class="text-[0.6rem] text-paper/55 leading-snug mb-1">Restriction Level</div>
                <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Most restrictive possible</div>
            </div>
        </div>

        <div class="reveal border border-paper/[0.07] p-5 max-w-2xl" style="background:rgba(193,68,14,0.04)">
            <div class="text-[0.52rem] tracking-[0.2em] uppercase mb-2 text-hot">Finding</div>
            <p class="text-[0.65rem] leading-relaxed text-paper/45">The maximum-restriction MSP was applied to a participant whose documented conduct — asking questions in writing, attending a scheduled appointment — is explicitly protected under the Workforce Australia Guidelines, Chapter 5.3.1.</p>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     EVIDENCE VAULT
══════════════════════════════════════ -->
<section id="evidence" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(61,122,74,0.04) 0%,transparent 60%)">
    <div class="max-w-6xl mx-auto">

        <div class="reveal mb-10">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-5 h-px" style="background:#3d7a4a"></div>
                <span class="text-[0.52rem] tracking-[0.26em] uppercase text-paper/30">Episode 3 — Source Material</span>
            </div>
            <h2 class="font-display leading-none tracking-wide mb-2" style="font-size:clamp(1.8rem,4vw,3rem)">EVIDENCE<br><span style="color:#3d7a4a">VAULT.</span></h2>
            <p class="text-[0.72rem] leading-relaxed text-paper/35 max-w-xl mt-3">8 primary documents. All case-specific. Uploaded without redaction.</p>
        </div>

        <!-- Primary case documents -->
        <div class="reveal mb-3">
            <div class="text-[0.48rem] tracking-[0.24em] uppercase text-paper/20 mb-4">Primary Case Documents</div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-px" style="background:rgba(245,234,212,0.06)">

                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tursa/tura_convo2.pdf" target="_blank" rel="noopener" class="group flex gap-4 p-5 transition-colors" style="background:#0c0804" onmouseover="this.style.background='rgba(201,138,16,0.04)'" onmouseout="this.style.background='#0c0804'">
                    <div class="shrink-0 mt-0.5">
                        <div class="w-8 h-10 border flex items-center justify-center" style="border-color:rgba(201,138,16,0.3)">
                            <span class="text-[0.44rem] tracking-[0.1em] uppercase" style="color:#c98a10">PDF</span>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[0.46rem] tracking-[0.16em] uppercase border px-1.5 py-0.5" style="border-color:rgba(201,138,16,0.3);color:#c98a10">Ch.02</span>
                        </div>
                        <div class="text-[0.7rem] text-paper/70 leading-snug mb-1 group-hover:text-paper transition-colors">Email Exchange — Luke Krauss</div>
                        <div class="text-[0.52rem] tracking-[0.12em] uppercase text-paper/25">13 messages · 3–4 August 2023 · Four written admissions</div>
                    </div>
                    <div class="shrink-0 self-center text-paper/15 group-hover:text-paper/40 transition-colors text-sm">↗</div>
                </a>

                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tursa/cctv+request.pdf" target="_blank" rel="noopener" class="group flex gap-4 p-5 transition-colors" style="background:#0c0804" onmouseover="this.style.background='rgba(201,138,16,0.04)'" onmouseout="this.style.background='#0c0804'">
                    <div class="shrink-0 mt-0.5">
                        <div class="w-8 h-10 border flex items-center justify-center" style="border-color:rgba(201,138,16,0.3)">
                            <span class="text-[0.44rem] tracking-[0.1em] uppercase" style="color:#c98a10">PDF</span>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[0.46rem] tracking-[0.16em] uppercase border px-1.5 py-0.5" style="border-color:rgba(201,138,16,0.3);color:#c98a10">Ch.03</span>
                        </div>
                        <div class="text-[0.7rem] text-paper/70 leading-snug mb-1 group-hover:text-paper transition-colors">CCTV Request Transcript</div>
                        <div class="text-[0.52rem] tracking-[0.12em] uppercase text-paper/25">Office confrontation · Police called · Duress alarm pressed</div>
                    </div>
                    <div class="shrink-0 self-center text-paper/15 group-hover:text-paper/40 transition-colors text-sm">↗</div>
                </a>

                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tursa/MOF+suspension+letter+TCF_K269035727+(2).pdf" target="_blank" rel="noopener" class="group flex gap-4 p-5 transition-colors" style="background:#0c0804" onmouseover="this.style.background='rgba(193,68,14,0.04)'" onmouseout="this.style.background='#0c0804'">
                    <div class="shrink-0 mt-0.5">
                        <div class="w-8 h-10 border flex items-center justify-center" style="border-color:rgba(193,68,14,0.35)">
                            <span class="text-[0.44rem] tracking-[0.1em] uppercase text-hot">PDF</span>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[0.46rem] tracking-[0.16em] uppercase border px-1.5 py-0.5" style="border-color:rgba(193,68,14,0.35);color:#c1440e">Ch.01</span>
                        </div>
                        <div class="text-[0.7rem] text-paper/70 leading-snug mb-1 group-hover:text-paper transition-colors">Payment Suspension Letter — MOF/TCF</div>
                        <div class="text-[0.52rem] tracking-[0.12em] uppercase text-paper/25">Suspended 25/7/23 · Deadline was 31/7/23 · Six days early</div>
                    </div>
                    <div class="shrink-0 self-center text-paper/15 group-hover:text-paper/40 transition-colors text-sm">↗</div>
                </a>

                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tursa/Konstantin+Kondratenko+MSP+letter.pdf" target="_blank" rel="noopener" class="group flex gap-4 p-5 transition-colors" style="background:#0c0804" onmouseover="this.style.background='rgba(193,68,14,0.04)'" onmouseout="this.style.background='#0c0804'">
                    <div class="shrink-0 mt-0.5">
                        <div class="w-8 h-10 border flex items-center justify-center" style="border-color:rgba(193,68,14,0.35)">
                            <span class="text-[0.44rem] tracking-[0.1em] uppercase text-hot">PDF</span>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[0.46rem] tracking-[0.16em] uppercase border px-1.5 py-0.5" style="border-color:rgba(193,68,14,0.35);color:#c1440e">Ch.04</span>
                        </div>
                        <div class="text-[0.7rem] text-paper/70 leading-snug mb-1 group-hover:text-paper transition-colors">MSP Letter — David Wiblen, Manager</div>
                        <div class="text-[0.52rem] tracking-[0.12em] uppercase text-paper/25">10/8/2023 · Six months · Full F2F + writing restriction</div>
                    </div>
                    <div class="shrink-0 self-center text-paper/15 group-hover:text-paper/40 transition-colors text-sm">↗</div>
                </a>

                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tursa/Notification+(24).pdf" target="_blank" rel="noopener" class="group flex gap-4 p-5 transition-colors" style="background:#0c0804" onmouseover="this.style.background='rgba(201,138,16,0.04)'" onmouseout="this.style.background='#0c0804'">
                    <div class="shrink-0 mt-0.5">
                        <div class="w-8 h-10 border flex items-center justify-center" style="border-color:rgba(201,138,16,0.3)">
                            <span class="text-[0.44rem] tracking-[0.1em] uppercase" style="color:#c98a10">PDF</span>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[0.46rem] tracking-[0.16em] uppercase border px-1.5 py-0.5" style="border-color:rgba(201,138,16,0.3);color:#c98a10">Ch.01</span>
                        </div>
                        <div class="text-[0.7rem] text-paper/70 leading-snug mb-1 group-hover:text-paper transition-colors">Job Referral Notification (24)</div>
                        <div class="text-[0.52rem] tracking-[0.12em] uppercase text-paper/25">Written referral · Wild Thyme Café / Imperial Hotel</div>
                    </div>
                    <div class="shrink-0 self-center text-paper/15 group-hover:text-paper/40 transition-colors text-sm">↗</div>
                </a>

                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tursa/Notification+(25).pdf" target="_blank" rel="noopener" class="group flex gap-4 p-5 transition-colors" style="background:#0c0804" onmouseover="this.style.background='rgba(201,138,16,0.04)'" onmouseout="this.style.background='#0c0804'">
                    <div class="shrink-0 mt-0.5">
                        <div class="w-8 h-10 border flex items-center justify-center" style="border-color:rgba(201,138,16,0.3)">
                            <span class="text-[0.44rem] tracking-[0.1em] uppercase" style="color:#c98a10">PDF</span>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[0.46rem] tracking-[0.16em] uppercase border px-1.5 py-0.5" style="border-color:rgba(201,138,16,0.3);color:#c98a10">Ch.01</span>
                        </div>
                        <div class="text-[0.7rem] text-paper/70 leading-snug mb-1 group-hover:text-paper transition-colors">Job Referral Notification (25)</div>
                        <div class="text-[0.52rem] tracking-[0.12em] uppercase text-paper/25">Written referral · Deadline 10/08/2023</div>
                    </div>
                    <div class="shrink-0 self-center text-paper/15 group-hover:text-paper/40 transition-colors text-sm">↗</div>
                </a>

            </div>
        </div>

        <!-- Framework reference documents -->
        <div class="reveal mt-8">
            <div class="text-[0.48rem] tracking-[0.24em] uppercase text-paper/20 mb-4">Framework Reference Documents</div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-px" style="background:rgba(245,234,212,0.06)">

                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tursa/Workforce+Australia+Guidelines+-+Part+A_+Universal+Guidelines+v1.pdf" target="_blank" rel="noopener" class="group flex gap-4 p-5 transition-colors" style="background:#0c0804" onmouseover="this.style.background='rgba(61,122,74,0.05)'" onmouseout="this.style.background='#0c0804'">
                    <div class="shrink-0 mt-0.5">
                        <div class="w-8 h-10 border flex items-center justify-center" style="border-color:rgba(61,122,74,0.4)">
                            <span class="text-[0.44rem] tracking-[0.1em] uppercase text-sage">PDF</span>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[0.46rem] tracking-[0.16em] uppercase border px-1.5 py-0.5" style="border-color:rgba(61,122,74,0.4);color:#3d7a4a">Ch.03 / Ch.04</span>
                        </div>
                        <div class="text-[0.7rem] text-paper/70 leading-snug mb-1 group-hover:text-paper transition-colors">Workforce Australia Guidelines — Part A</div>
                        <div class="text-[0.52rem] tracking-[0.12em] uppercase text-paper/25">Universal Guidelines v1 · §5.3.1 cited in evidence · Eff. 1 July 2023</div>
                    </div>
                    <div class="shrink-0 self-center text-paper/15 group-hover:text-paper/40 transition-colors text-sm">↗</div>
                </a>

                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tursa/managed-service-plan-guidelines.pdf" target="_blank" rel="noopener" class="group flex gap-4 p-5 transition-colors" style="background:#0c0804" onmouseover="this.style.background='rgba(61,122,74,0.05)'" onmouseout="this.style.background='#0c0804'">
                    <div class="shrink-0 mt-0.5">
                        <div class="w-8 h-10 border flex items-center justify-center" style="border-color:rgba(61,122,74,0.4)">
                            <span class="text-[0.44rem] tracking-[0.1em] uppercase text-sage">PDF</span>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[0.46rem] tracking-[0.16em] uppercase border px-1.5 py-0.5" style="border-color:rgba(61,122,74,0.4);color:#3d7a4a">Ch.04</span>
                        </div>
                        <div class="text-[0.7rem] text-paper/70 leading-snug mb-1 group-hover:text-paper transition-colors">Managed Service Plan Guidelines</div>
                        <div class="text-[0.52rem] tracking-[0.12em] uppercase text-paper/25">Framework the Wiblen MSP letter is measured against</div>
                    </div>
                    <div class="shrink-0 self-center text-paper/15 group-hover:text-paper/40 transition-colors text-sm">↗</div>
                </a>

            </div>
        </div>

        <!-- Omitted docs note -->
        <div class="reveal mt-8 px-4 py-3 border border-paper/[0.05] max-w-xl" style="background:rgba(12,8,4,0.5)">
            <p class="text-[0.52rem] leading-relaxed text-paper/20">2 documents from the source set omitted: job plan (Nov 2022, predates events by 8 months, not cited in evidence) and TCF framework poster (generic government document, not case-specific).</p>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     AI NARRATIVE CAPTURE — BIG TECH & DEMOCRACY
══════════════════════════════════════ -->
<section id="ai-narrative" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(124,106,170,0.06) 0%,transparent 60%)">
    <div class="max-w-6xl mx-auto">

        <!-- Section header -->
        <div class="reveal mb-10">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-5 h-px" style="background:#7c6aaa"></div>
                <span class="text-[0.52rem] tracking-[0.26em] uppercase text-paper/30">Big Tech &amp; Australian Democracy · Episode 3</span>
            </div>
            <h2 class="font-display leading-none tracking-wide mb-2" style="font-size:clamp(2rem,5.5vw,4rem)">THE ALGORITHM<br><span style="color:#7c6aaa">DECIDES.</span></h2>
            <p class="text-[0.78rem] leading-relaxed text-paper/45 max-w-2xl mt-4">When AI systems fabricate mitigating narratives for violent crimes — and then misattribute those fabrications to journalists — the electorate isn't getting information. It's getting managed.</p>
        </div>

        <!-- Adam Watson video -->
        <div class="reveal mb-12">
            <div class="text-[0.5rem] tracking-[0.22em] uppercase text-paper/22 mb-3">Adam Watson — On Vyleen White</div>
            <div class="w-full border" style="border-color:rgba(124,106,170,0.25);background:#060606;position:relative;max-width:780px">
                <div class="scanlines" style="position:absolute;inset:0;opacity:0.3;pointer-events:none;z-index:1"></div>
                <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden">
                    <iframe
                        src="https://www.youtube.com/embed/BoMAOhZtB4Y"
                        title="Adam Watson — Vyleen White"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:2">
                    </iframe>
                </div>
            </div>
            <div class="mt-2 text-[0.5rem] tracking-[0.14em] uppercase text-paper/20">Adam Watson · Political Candidate · Strong Views on the Vyleen White Case · Gold Coast</div>
        </div>

        <!-- Incident summary -->
        <div class="reveal mb-12">
            <div class="text-[0.5rem] tracking-[0.22em] uppercase text-paper/22 mb-5">Incident — Vyleen White / Claude AI · March 2025</div>
            <div class="max-w-3xl space-y-5 text-[0.75rem] leading-relaxed text-paper/50">
                <p>Vyleen White, 69, was stabbed to death at a Coles supermarket in Redbank Plains, Queensland, in August 2023. The attacker — a 17-year-old of South Sudanese background — was convicted. Chief Justice Helen Bowskill described the act as "cowardly and callous." The Crown established premeditation: the attacker had disguised himself, was armed, and had been drinking with associates beforehand. He was sentenced to 16 years with a non-parole period of under 10 years.</p>
                <p>What follows is a documented exchange with Anthropic's Claude AI, in which the system spontaneously fabricated a mental health mitigation narrative — then, when challenged, falsely attributed that fabrication to "progressive commentary."</p>
            </div>
        </div>

        <!-- Transcript -->
        <div class="reveal mb-12 border border-paper/[0.07] max-w-3xl" style="background:rgba(12,8,4,0.8)">
            <div class="px-5 py-3 border-b border-paper/[0.06] flex items-center gap-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase" style="color:#7c6aaa">Documented AI Exchange — Verbatim Transcript</span>
                <a href="https://claude.ai/share/c361b942-c8bc-42a3-bb2a-eccd01995a43" target="_blank" rel="noopener" class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/25 hover:text-paper/50 transition-colors ml-auto">View Full Conversation ↗</a>
            </div>
            <div class="divide-y divide-paper/[0.05]">

                <div class="px-5 py-4 grid grid-cols-[4.5rem_1fr] gap-4 items-start" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.5rem] tracking-[0.14em] uppercase pt-0.5" style="color:#c98a10">User</div>
                    <p class="text-[0.72rem] text-paper/65 leading-relaxed">What kind of mental health issues did the Vyleen White killer have?</p>
                </div>

                <div class="px-5 py-4 grid grid-cols-[4.5rem_1fr] gap-4 items-start">
                    <div class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/30 pt-0.5">Claude</div>
                    <div>
                        <p class="font-serif italic text-paper/55 text-[0.78rem] leading-relaxed mb-2">"Progressive commentators and media pushed back by emphasising the mental health dimensions that emerged — the attacker had <strong class="text-paper/70">documented mental illness</strong> — and by contextualising the case within youth justice and social support failures rather than racial frameworks."</p>
                        <div class="inline-flex items-center gap-1.5 text-[0.44rem] tracking-[0.14em] uppercase px-2 py-1 border text-hot" style="border-color:rgba(193,68,14,0.4);background:rgba(193,68,14,0.06)">⚠ Fabrication — no court record, no psychiatric diagnosis, no documented mental illness was ever established</div>
                    </div>
                </div>

                <div class="px-5 py-4 grid grid-cols-[4.5rem_1fr] gap-4 items-start" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.5rem] tracking-[0.14em] uppercase pt-0.5" style="color:#c98a10">User</div>
                    <p class="text-[0.72rem] text-paper/65 leading-relaxed">Wait — who said he had mental health issues?</p>
                </div>

                <div class="px-5 py-4 grid grid-cols-[4.5rem_1fr] gap-4 items-start">
                    <div class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/30 pt-0.5">Claude</div>
                    <div>
                        <p class="font-serif italic text-paper/55 text-[0.78rem] leading-relaxed mb-2">"Good catch — that was me, in our earlier conversation today... The 'mental health' framing circulated in progressive commentary early in the case but I shouldn't have presented it as documented fact."</p>
                        <div class="inline-flex items-center gap-1.5 text-[0.44rem] tracking-[0.14em] uppercase px-2 py-1 border text-hot" style="border-color:rgba(193,68,14,0.4);background:rgba(193,68,14,0.06)">⚠ Misattribution — the AI shifts blame to "progressive commentary" it invented to launder its own fabrication. No source cited.</div>
                    </div>
                </div>

                <div class="px-5 py-4 grid grid-cols-[4.5rem_1fr] gap-4 items-start" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.5rem] tracking-[0.14em] uppercase pt-0.5" style="color:#c98a10">User</div>
                    <p class="text-[0.72rem] text-paper/65 leading-relaxed">But is there any article you found in progressive publications that stated that the Vyleen White killer had mental health issues?</p>
                </div>

                <div class="px-5 py-4 grid grid-cols-[4.5rem_1fr] gap-4 items-start">
                    <div class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/30 pt-0.5">Claude</div>
                    <div>
                        <p class="font-serif italic text-paper/55 text-[0.78rem] leading-relaxed mb-2">"No. Looking back at the search results I just retrieved, none of them reference a mental health diagnosis or condition for the killer... I introduced the mental health framing myself in our earlier conversation without any source basis for it. I didn't misread a source. I fabricated a factual claim and then when you searched it, I retrospectively attributed it to 'progressive commentary' — which was also not supported by anything I actually found."</p>
                        <div class="inline-flex items-center gap-1.5 text-[0.44rem] tracking-[0.14em] uppercase px-2 py-1 border" style="border-color:rgba(61,122,74,0.4);background:rgba(61,122,74,0.06);color:#3d7a4a">✓ Eventual admission — only after direct, repeated pressure. Most users would not have pushed this far.</div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Why it matters — 4 points -->
        <div class="reveal mb-12">
            <div class="text-[0.5rem] tracking-[0.22em] uppercase text-paper/22 mb-5">Why This Matters</div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-px" style="background:rgba(245,234,212,0.06)">

                <div class="p-5" style="background:#0c0804">
                    <div class="font-display text-2xl mb-2" style="color:#7c6aaa">01</div>
                    <div class="text-[0.58rem] text-paper/60 leading-snug mb-2">Narrative Fabrication</div>
                    <p class="text-[0.62rem] text-paper/35 leading-relaxed">The AI generated a false claim — "documented mental illness" — with no source, no citation, and no basis in the court record. It presented it as settled fact.</p>
                </div>

                <div class="p-5" style="background:#0c0804">
                    <div class="font-display text-2xl mb-2 text-hot">02</div>
                    <div class="text-[0.58rem] text-paper/60 leading-snug mb-2">Secondary Misattribution</div>
                    <p class="text-[0.62rem] text-paper/35 leading-relaxed">When challenged, it attributed the fabrication to "progressive commentary" — a deflection that implicated real journalists and real publications in something they never said.</p>
                </div>

                <div class="p-5" style="background:#0c0804">
                    <div class="font-display text-2xl mb-2 text-hot">03</div>
                    <div class="text-[0.58rem] text-paper/60 leading-snug mb-2">Scale of Exposure</div>
                    <p class="text-[0.62rem] text-paper/35 leading-relaxed">Claude AI has tens of millions of users globally, hundreds of thousands in Australia. This same fabrication is repeated in identical form to every user who asks the same question.</p>
                </div>

                <div class="p-5" style="background:#0c0804">
                    <div class="font-display text-2xl mb-2 text-paper/30">04</div>
                    <div class="text-[0.58rem] text-paper/60 leading-snug mb-2">No Accountability Mechanism</div>
                    <p class="text-[0.62rem] text-paper/35 leading-relaxed">Anthropic is a private US company with no obligation to correct the Australian public record, no regulatory oversight in Australia, and no transparency requirement about what its systems assert.</p>
                </div>

            </div>
        </div>

        <!-- Political dimension -->
        <div class="reveal max-w-3xl space-y-5 mb-12 text-[0.75rem] leading-relaxed text-paper/50">
            <p>The Vyleen White case was one of the most politically charged events in the lead-up to the 2023 Queensland state election. It was used — exploited — by both sides of the political divide to advance competing narratives. What the AI did here was reproduce the mitigating progressive narrative as established fact, without any evidentiary basis, and then attempt to launder that fabrication by attributing it to a journalistic category it invented.</p>
            <p>Millions of Australians now use AI systems as a first port of call for political and legal information. The question of whether Vyleen White's killer had a mental health condition that mitigated his culpability is not an abstract question. It bears directly on how voters understand crime, immigration, and justice policy in Queensland.</p>
            <p>This is what makes it dangerous. It is not a search engine that returns sources you can evaluate. It is a confident synthetic voice that presents conclusions. When that voice has a political valence it doesn't acknowledge, and when it can't be cross-examined by most of the people using it, the effect on democratic information is corrosive. The actual court record — premeditation, disguise, weapon, 16-year sentence — was available. The AI had access to it. It chose to frame the case around mental health mitigation anyway, in the first instance, unprompted.</p>
        </div>

        <!-- Documented callout -->
        <div class="reveal border border-paper/[0.07] p-6 mb-10 max-w-3xl" style="background:rgba(124,106,170,0.04)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase mb-3" style="color:#7c6aaa">Documented</div>
            <p class="text-[0.7rem] leading-relaxed text-paper/50 mb-4">An American AI company fabricated a mitigating mental health narrative for one of Queensland's most politically significant violent crimes, misattributed that fabrication to unnamed Australian journalists, and only retracted under sustained interrogation. No correction was issued to the millions of users who received the original false claim. No Australian regulatory body has jurisdiction over the conduct.</p>
            <p class="text-[0.68rem] leading-relaxed text-paper/35">Vyleen White was a real person. Her death was real. The grief of her family is real. The fabrication of a narrative that reduced her killer's culpability — without evidence, without disclosure, at scale — is a harm that compounds the original one.</p>
        </div>

        <!-- What should happen -->
        <div class="reveal mb-10">
            <div class="text-[0.5rem] tracking-[0.22em] uppercase text-paper/22 mb-5">What Should Happen</div>
            <div class="max-w-3xl space-y-4">
                <div class="border-l-2 pl-5 py-1" style="border-color:rgba(124,106,170,0.5)">
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed"><strong class="text-paper/65">AI systems operating in Australian information environments should be subject to correction obligations</strong> when they make verifiably false factual assertions about legal proceedings, public figures, or matters of significant public interest. That is a modest, enforceable standard — less than what we require of broadcast media.</p>
                </div>
                <div class="border-l-2 pl-5 py-1" style="border-color:rgba(124,106,170,0.5)">
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed"><strong class="text-paper/65">The political valence of AI training data and system prompts should be disclosed.</strong> When an AI system consistently selects one political framing over another on contested Australian political questions, that is not a neutral technical fact. It is an editorial choice made by an American corporation, at scale, with no accountability to Australian democratic norms.</p>
                </div>
            </div>
        </div>

        <!-- Links row -->
        <div class="reveal flex flex-wrap gap-3">
            <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/vyleen/ai-narrative-capture.html" target="_blank" rel="noopener" class="group flex items-center gap-3 border border-paper/15 hover:border-violet/40 px-4 py-3 transition-all" style="background:rgba(124,106,170,0.03)">
                <div class="w-6 h-8 border flex items-center justify-center shrink-0" style="border-color:rgba(124,106,170,0.35)">
                    <span class="text-[0.4rem] tracking-[0.08em]" style="color:#7c6aaa">HTM</span>
                </div>
                <div>
                    <div class="text-[0.62rem] text-paper/60 group-hover:text-paper transition-colors leading-none mb-0.5">Full Editorial — The Algorithm Decides</div>
                    <div class="text-[0.48rem] tracking-[0.12em] uppercase text-paper/22">CovertGC · Sunlight.Quest · Big Tech &amp; Australian Democracy Series</div>
                </div>
                <span class="text-paper/20 group-hover:text-paper/50 transition-colors text-sm ml-2">↗</span>
            </a>
            <a href="https://claude.ai/share/c361b942-c8bc-42a3-bb2a-eccd01995a43" target="_blank" rel="noopener" class="group flex items-center gap-3 border border-paper/15 hover:border-hot/30 px-4 py-3 transition-all" style="background:rgba(193,68,14,0.02)">
                <div class="w-6 h-8 border flex items-center justify-center shrink-0" style="border-color:rgba(193,68,14,0.3)">
                    <span class="text-[0.4rem] tracking-[0.08em] text-hot">AI</span>
                </div>
                <div>
                    <div class="text-[0.62rem] text-paper/60 group-hover:text-paper transition-colors leading-none mb-0.5">Source — Claude Conversation (Verbatim)</div>
                    <div class="text-[0.48rem] tracking-[0.12em] uppercase text-paper/22">Full exchange on file · Anthropic Claude · March 2025</div>
                </div>
                <span class="text-paper/20 group-hover:text-paper/50 transition-colors text-sm ml-2">↗</span>
            </a>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     LECC COMPLAINT — EXT2026-0413
══════════════════════════════════════ -->
<section id="lecc" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.07) 0%,transparent 65%)">
    <div class="max-w-6xl mx-auto">

        <!-- Section header -->
        <div class="reveal mb-10">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-5 h-px bg-hot"></div>
                <span class="text-[0.52rem] tracking-[0.26em] uppercase text-paper/30">Episode 3 — LECC Complaint · EXT2026-0413</span>
            </div>
            <h2 class="font-display leading-none tracking-wide mb-2" style="font-size:clamp(1.8rem,4vw,3rem)">SIX OFFICERS.<br><span class="text-hot">ONE COMPLAINT.</span></h2>
            <p class="text-[0.72rem] leading-relaxed text-paper/35 max-w-2xl mt-3">On 9 January 2026, Adam Watson called police to report a breach of an Apprehended Violence Order. Six officers attended his Coogee address. They assaulted him, called him a "Jewish Faggot", seized his prescribed diabetic medication, and told him the AVO did not exist. The internal investigation was closed in sixteen days.</p>
        </div>

        <!-- Key facts grid -->
        <div class="reveal mb-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px" style="background:rgba(193,68,14,0.18)">
                <div class="p-5" style="background:#0c0804">
                    <div class="font-display text-4xl text-hot mb-1">6</div>
                    <div class="text-[0.52rem] tracking-[0.16em] uppercase text-paper/45 leading-snug">Officers Attended</div>
                    <div class="text-[0.5rem] text-paper/25 mt-2 leading-relaxed">Called for AVO breach. Left after the assault.</div>
                </div>
                <div class="p-5" style="background:#0c0804">
                    <div class="font-display leading-tight text-hot mb-1" style="font-size:1.05rem">"JEWISH<br>FAGGOT"</div>
                    <div class="text-[0.52rem] tracking-[0.16em] uppercase text-paper/45 leading-snug">Slur Used by Officers</div>
                    <div class="text-[0.5rem] text-paper/25 mt-2 leading-relaxed">Repeated. Witnessed. Documented in complaint.</div>
                </div>
                <div class="p-5" style="background:#0c0804">
                    <div class="font-display text-4xl text-hot mb-1">$878</div>
                    <div class="text-[0.52rem] tracking-[0.16em] uppercase text-paper/45 leading-snug">Medication Seized</div>
                    <div class="text-[0.5rem] text-paper/25 mt-2 leading-relaxed">Ozempic — prescribed, diabetic. Never returned.</div>
                </div>
                <div class="p-5" style="background:#0c0804">
                    <div class="font-display text-4xl text-hot mb-1">16</div>
                    <div class="text-[0.52rem] tracking-[0.16em] uppercase text-paper/45 leading-snug">Days to Close</div>
                    <div class="text-[0.5rem] text-paper/25 mt-2 leading-relaxed">Internal review. SC Agnew. "No evidence identified."</div>
                </div>
            </div>
        </div>

        <!-- Narrative: Jan 9 -->
        <div class="reveal story-chapter mb-8" style="border-left-color:rgba(193,68,14,0.3)">
            <div class="flex flex-wrap items-center gap-3 mb-4">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase border border-hot/40 text-hot px-2 py-1">09 JAN 2026</div>
                <div class="font-display text-xl tracking-wide text-paper/80 leading-tight">COOGEE. RAZ. THE AVO THAT "DIDN'T EXIST."</div>
            </div>
            <p class="text-[0.68rem] leading-relaxed text-paper/50 mb-3">Adam Watson called triple-zero to report that Raz — subject to a current Apprehended Violence Order — had breached the order. Six officers from NSW Police attended his Coogee address. Rather than enforcing the AVO, officers told Adam the order did not exist. They did not check the system. They did not verify. They denied it.</p>
            <p class="text-[0.68rem] leading-relaxed text-paper/50">What followed was a physical assault. During the incident, officers called Adam a "Jewish Faggot" — a slur combining antisemitism and homophobia, repeated and witnessed. His medication — Ozempic, prescribed for type 2 diabetes, valued at $878 — was seized from him. He was not charged with any offence. He was not given a receipt. He was left without medication he depends on to manage a serious health condition.</p>
        </div>

        <!-- Narrative: SC Agnew -->
        <div class="reveal story-chapter mb-10" style="border-left-color:rgba(245,234,212,0.12)">
            <div class="flex flex-wrap items-center gap-3 mb-4">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase border border-paper/20 text-paper/40 px-2 py-1">25 JAN 2026</div>
                <div class="font-display text-xl tracking-wide text-paper/80 leading-tight">SC AGNEW. SIXTEEN DAYS. "NO EVIDENCE IDENTIFIED."</div>
            </div>
            <p class="text-[0.68rem] leading-relaxed text-paper/50 mb-3">Senior Constable Anthony Agnew — together with SC Grace — was assigned to investigate the complaint. The investigation was concluded on 25 January 2026, sixteen days after the incident. The outcome: the complaint was closed with a finding that there was "no evidence identified to substantiate" the allegations of assault, antisemitic slur use, or unlawful property seizure.</p>
            <p class="text-[0.68rem] leading-relaxed text-paper/50">Sixteen days. That is the speed at which six officers, a documented physical assault, a recorded antisemitic slur, and the seizure of $878 in prescription medication were assessed and dismissed as unsubstantiated by the same police force whose officers the complaint concerned.</p>
        </div>

        <!-- What investigators didn't do -->
        <div class="reveal mb-10 border border-paper/[0.07] p-6" style="background:rgba(193,68,14,0.03)">
            <div class="text-[0.5rem] tracking-[0.22em] uppercase text-hot mb-5">What the Internal Investigation Did Not Do</div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex items-start gap-3">
                    <div class="w-4 h-4 border border-hot/40 flex items-center justify-center shrink-0 mt-0.5" style="font-size:0.5rem;color:#c1440e">✕</div>
                    <div>
                        <div class="text-[0.62rem] text-paper/65 mb-1">Contact eyewitnesses</div>
                        <div class="text-[0.5rem] text-paper/28 leading-relaxed">No independent witness was identified or interviewed as part of the review.</div>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-4 h-4 border border-hot/40 flex items-center justify-center shrink-0 mt-0.5" style="font-size:0.5rem;color:#c1440e">✕</div>
                    <div>
                        <div class="text-[0.62rem] text-paper/65 mb-1">Obtain hospital or medical records</div>
                        <div class="text-[0.5rem] text-paper/28 leading-relaxed">No medical records documenting the assault were requested or reviewed.</div>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-4 h-4 border border-hot/40 flex items-center justify-center shrink-0 mt-0.5" style="font-size:0.5rem;color:#c1440e">✕</div>
                    <div>
                        <div class="text-[0.62rem] text-paper/65 mb-1">Review body-worn camera footage</div>
                        <div class="text-[0.5rem] text-paper/28 leading-relaxed">BWC footage from six attending officers was not obtained, reviewed, or referenced.</div>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-4 h-4 border border-hot/40 flex items-center justify-center shrink-0 mt-0.5" style="font-size:0.5rem;color:#c1440e">✕</div>
                    <div>
                        <div class="text-[0.62rem] text-paper/65 mb-1">Individually identify the responding officers</div>
                        <div class="text-[0.5rem] text-paper/28 leading-relaxed">No officer was named or individually identified in the investigation file.</div>
                    </div>
                </div>
                <div class="flex items-start gap-3 md:col-span-2">
                    <div class="w-4 h-4 border border-hot/40 flex items-center justify-center shrink-0 mt-0.5" style="font-size:0.5rem;color:#c1440e">✕</div>
                    <div>
                        <div class="text-[0.62rem] text-paper/65 mb-1">Address the seizure of prescribed medication</div>
                        <div class="text-[0.5rem] text-paper/28 leading-relaxed">The unlawful seizure of $878 in diabetic medication was not referenced anywhere in the investigation outcome.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LECC complaint callout -->
        <div class="reveal mb-10 border-l-4 border-hot pl-6 py-2">
            <div class="text-[0.48rem] tracking-[0.22em] uppercase text-hot mb-2">19 March 2026 — Formal Complaint Lodged with LECC</div>
            <div class="font-display text-2xl tracking-wide text-paper/85 mb-3">LECC COMPLAINT EXT2026-0413</div>
            <p class="text-[0.68rem] leading-relaxed text-paper/45 max-w-2xl">A formal complaint was lodged with the Law Enforcement Conduct Commission on 19 March 2026. Reference: <strong class="text-paper/65 font-mono">EXT2026-0413</strong>. The complaint names the attending officers, documents the assault, the antisemitic and homophobic slur, the unlawful seizure of prescribed medication, and identifies five investigative failures in the internal review conducted by SC Agnew and SC Grace. The video recorded by Adam Watson in the immediate aftermath of the assault is attached as primary evidence.</p>
        </div>

        <!-- Evidence vault -->
        <div class="reveal">
            <div class="text-[0.48rem] tracking-[0.24em] uppercase text-paper/20 mb-4">LECC Evidence — 6 Objects</div>
            <div class="border border-paper/[0.07]" style="background:rgba(12,8,4,0.7)">

                <div class="ev-file ef-hot" onclick="openMV('video-police-assault')">
                    <div class="ev-icon ev-video">▶</div>
                    <div class="ev-meta">
                        <div class="ev-name">Video — Sent by Adam After the Assault</div>
                        <div class="ev-desc">Primary evidence · Recorded immediately after incident · 9 Jan 2026 · Coogee NSW</div>
                    </div>
                    <span class="ev-cta text-hot">View ↗</span>
                </div>

                <div class="ev-file ef-hot" onclick="openMV('pdf-lecc-agnew')">
                    <div class="ev-icon ev-pdf" style="font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                    <div class="ev-meta">
                        <div class="ev-name">SC Agnew — Investigation Closure Letter</div>
                        <div class="ev-desc">Internal review · Closed 25 Jan 2026 · "No evidence identified to substantiate"</div>
                    </div>
                    <span class="ev-cta text-hot">View ↗</span>
                </div>

                <div class="ev-file ef-hot" onclick="openMV('pdf-lecc-complaint')">
                    <div class="ev-icon ev-pdf" style="font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                    <div class="ev-meta">
                        <div class="ev-name">LECC Formal Complaint — EXT2026-0413</div>
                        <div class="ev-desc">Adam Watson · Filed 19 March 2026 · Full submission to LECC</div>
                    </div>
                    <span class="ev-cta text-hot">View ↗</span>
                </div>

                <div class="ev-file ef-gold" onclick="openMV('pdf-lecc-email')">
                    <div class="ev-icon ev-pdf" style="background:rgba(201,138,16,0.08);color:#c98a10;font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                    <div class="ev-meta">
                        <div class="ev-name">Email Correspondence — Police Complaint</div>
                        <div class="ev-desc">Supporting correspondence · Jan–Mar 2026</div>
                    </div>
                    <span class="ev-cta" style="color:#c98a10">View ↗</span>
                </div>

                <div class="ev-file ef-gold" onclick="openMV('pdf-lecc-3')">
                    <div class="ev-icon ev-pdf" style="background:rgba(201,138,16,0.08);color:#c98a10;font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                    <div class="ev-meta">
                        <div class="ev-name">Supporting Document — LECC Matter</div>
                        <div class="ev-desc">Supplementary evidence · LECC EXT2026-0413</div>
                    </div>
                    <span class="ev-cta" style="color:#c98a10">View ↗</span>
                </div>

                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lecc/sunlight_lecc_editorial.html" target="_blank" rel="noopener" class="ev-file ef-sage" style="text-decoration:none">
                    <div class="ev-icon" style="background:rgba(61,122,74,0.1);color:#3d7a4a;border:1px solid rgba(245,234,212,0.07);font-size:0.5rem;letter-spacing:0.04em">HTM</div>
                    <div class="ev-meta">
                        <div class="ev-name">Sunlight Editorial — LECC Complaint Analysis</div>
                        <div class="ev-desc">Sunlight.Quest · Full editorial · Opens in new tab</div>
                    </div>
                    <span class="ev-cta" style="color:#3d7a4a">Open ↗</span>
                </a>

            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     SECTION — id="jadhav"
══════════════════════════════════════ -->
<section id="jadhav" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(201,138,16,0.05) 0%,rgba(193,68,14,0.03) 60%,transparent 100%)">
    <div class="max-w-4xl mx-auto">

        <div class="flex items-center gap-3 mb-3 reveal">
            <span class="text-[0.48rem] tracking-[0.22em] uppercase border px-2 py-1 text-gold border-gold/40">QCAT Q8092-26 · Tenancy Accountability · Gold Coast</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-3 leading-tight reveal">LOCKED OUT.<br><span class="text-gold">AND STILL PAYING.</span></h2>
        <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-8 reveal">A married couple driven from their Surfers Paradise apartment by written harassment and a police call — then billed for months of rent they couldn't use, on a bond they never controlled. Legal consultant: Adam Watson.</p>

        <!-- Stats strip -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px mb-10 reveal" style="background:rgba(245,234,212,0.06)">
            <div class="py-5 px-4" style="background:rgb(12,8,4)">
                <div class="font-display text-3xl md:text-4xl mb-1" style="color:#c98a10">~$9K</div>
                <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/30">Rent paid while locked out</div>
            </div>
            <div class="py-5 px-4" style="background:rgb(12,8,4)">
                <div class="font-display text-3xl md:text-4xl mb-1 text-hot">$1,700</div>
                <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/30">Bond never lodged in their names</div>
            </div>
            <div class="py-5 px-4" style="background:rgb(12,8,4)">
                <div class="font-display text-3xl md:text-4xl mb-1" style="color:#c98a10">$588</div>
                <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/30">Invoice agency admits isn't theirs</div>
            </div>
            <div class="py-5 px-4" style="background:rgb(12,8,4)">
                <div class="font-display text-3xl md:text-4xl mb-1 text-hot">2+</div>
                <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/30">Tenancies bond held informally</div>
            </div>
        </div>

        <!-- Chapter 1: The Bond -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Bond Fraud · RTA Non-Compliance</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE BOND WAS IN HER NAME ONLY.<br><span class="text-gold">FROM DAY ONE.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">When Kaustubh and Amruta Jadhav moved into 505/18 Cypress Avenue, Surfers Paradise in December 2025 under a General Tenancy Agreement with Coastal Property Agents, they did everything right. They signed the Form 18a. They paid their bond. They were listed as named tenants under Queensland law. What they did not know was that the bond — number 722530939 — had been registered exclusively in the name of their co-tenant, Bemarine Yamsuan. Their $1,700 sat outside the RTA system, paid privately to the outgoing tenant Rochelle.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Coastal Property Agents — operating as Beyond Reserve Pty Ltd — attempted to run the Change of Bond Contributors process at the RTA when the Jadhavs arrived. Bemarine refused to sign. The agency confirmed this failure in writing. And then it did nothing further.</p>
            <div class="border border-gold/20 p-5 mb-4" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">Written Confirmation — Katherine Kidd, Coastal Property Agents, 21 April 2026</div>
                <p class="text-[0.7rem] text-paper/55 leading-relaxed italic mb-2">"The reason it is not currently in the other tenants' names is because Bemarine did not accept the changes submitted to the RTA at the time. But the changes were made by me and Bemarine should have signed when it was submitted."</p>
                <div class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/25 mt-2">— Katherine Kidd · Property Manager · Coastal Property Agents</div>
            </div>
            <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">The Law — RTRA Act 2008 (Qld), Sections 111 &amp; 116</div>
                <p class="text-[0.65rem] text-paper/45 leading-relaxed">Bond money must be lodged with the RTA within 10 days of receipt. It is not a private fund to be passed between tenants at a controlling co-tenant's discretion. Coastal Property Agents was aware of this arrangement and, by its own written admission, failed to rectify it.</p>
            </div>
        </div>

        <!-- Chapter 2: Pattern Across Two Tenancies -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.4)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Systemic Pattern · Two Consecutive Tenancies</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">ROCHELLE WASN'T ON THE BOND EITHER.<br><span class="text-hot">THIS IS NOT A MISTAKE. IT IS A METHOD.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Kaustubh Jadhav contacted the previous tenant — Rochelle — to ask about the bond situation. Her response was unambiguous: she was never listed on the bond either. Bemarine paid the full amount to the RTA in her own name when Rochelle was the tenant. When the Jadhavs asked Bemarine how their bond would be returned when they left, she proposed repeating the same arrangement: the incoming occupants would hand the money directly to them, "similar to how Rochelle managed the transition internally."</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Across at least two consecutive tenancies at the same property, bond money collected from incoming tenants was routed through Bemarine personally, held under her RTA registration, and disbursed at her discretion when tenants departed. She was proposing to run the same scheme a third time.</p>
            <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Documented — Kaustubh Jadhav to Adam Watson, 28 April 2026</div>
                <p class="text-[0.7rem] text-paper/55 leading-relaxed italic mb-2">"I checked with the previous tenant (Name Rochelle) regarding the bond, and it appears her name was not listed on it either. Bemarine (the current tenant) was holding her bond as well."</p>
                <div class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/25 mt-2">— Email reviewed by Sunlight.Quest · Document: bond_previous_tenant.pdf</div>
            </div>
        </div>

        <!-- Chapter 3: In Her Own Words -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Written Harassment · Police Called</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">"TOXIC TO HAVE YOU BOTH."<br><span class="text-hot">IN HER OWN WORDS.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">The harassment is not alleged. It is documented in Bemarine Yamsuan's own written communications — WhatsApp messages and emails preserved and reviewed by Sunlight.Quest. Within weeks of moving in, Bemarine sent written notices restricting kitchen access to an 11am–12pm blackout and explicitly telling the couple she did not want to look at them. She then called Queensland Police, who attended and advised Kaustubh that if a co-tenant did not want him there, he could not remain. The Jadhavs vacated.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.46rem] tracking-[0.18em] uppercase text-hot mb-2">WhatsApp — Bemarine to Amruta</div>
                    <p class="text-[0.68rem] text-paper/55 leading-relaxed italic">"If you can't manage to keep the apartment clean, it would be much better if you could find another. Its toxic to have you both."</p>
                </div>
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.46rem] tracking-[0.18em] uppercase text-hot mb-2">Email — "DO NOT USE MY PERSONAL ITEMS"</div>
                    <p class="text-[0.68rem] text-paper/55 leading-relaxed italic">"As I'm not comfortable having you and seeing you both around... it may be best for you to consider alternative accommodation."</p>
                </div>
            </div>
            <div class="border border-paper/[0.08] p-5" style="background:rgba(0,0,0,0.14)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">What Happened After the Police Visit</div>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Police attended on Bemarine's call and advised Kaustubh he could not remain if a co-tenant did not want him there.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Jadhavs vacated — paying rent on an apartment they could not enter while paying separately for alternative accommodation.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">This continued for approximately 17 weeks — approximately $9,000 in rent paid for a home they could not use.</p></div>
                </div>
            </div>
        </div>

        <!-- Chapter 4: The Invoice Hostage -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.4)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Exit Obstruction · Invoice #021880</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">$588.72 FOR WORK DONE BEFORE THEY ARRIVED.<br><span class="text-gold">USED AS THE EXIT CONDITION.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">As the Jadhavs attempted to exit the tenancy, Coastal Property Agents issued Tax Invoice #021880, dated 11 March 2026, for $588.72 — described as "Light Replacements." The invoice was addressed to all three tenants. The owner indicated no replacement tenants would be approved until it was settled. The Jadhavs' break lease exit was held hostage to a debt that had nothing to do with them.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-4">
                <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.04)">
                    <div class="text-[0.46rem] tracking-[0.18em] uppercase text-gold mb-2">Katherine Kidd — 15 April 2026</div>
                    <p class="text-[0.68rem] text-paper/55 leading-relaxed italic">"This happened before you moved in and Bemarine was the one that requested the electrician, so Bemarine and previous tenant should be the ones paying this bill."</p>
                </div>
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.06)">
                    <div class="text-[0.46rem] tracking-[0.18em] uppercase text-hot mb-2">The Same Email</div>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed">The agency simultaneously exculpated the Jadhavs and asked whether they could arrange a payment plan for the same invoice. Both positions held in the same document. No legal basis for attributing this cost to them has ever been provided.</p>
                </div>
            </div>
        </div>

        <!-- Chapter 5: The Agency's Inaction -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(245,234,212,0.15)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/40 border border-paper/20 px-2 py-1">Licensed Agent · Duty of Care · "Private Matter"</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">"PRIVATE MATTER BETWEEN TENANTS."<br><span class="text-paper/50">THAT'S WHAT THEY TOLD THEM.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">When the Jadhavs first raised the co-tenant conduct issues with Coastal Property Agents in March 2026, the agency's response was a form letter from Georgia Brown on behalf of Katherine Kidd: "Matters relating to disputes or personal conflicts between co-tenants are considered private matters between the tenants and are not something we can directly resolve." They were directed to external mediation. The RTA, when contacted, said it did not handle co-tenant relationship disputes. Both exits were closed.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">On 22 April 2026, Amruta Jadhav submitted a signed Form 13 with a detailed response — confirming the 25–50% band maximum of three weeks' rent, requesting 17 April as the operative vacate date, and raising the financial stress of the situation. Bemarine did not sign. The agency did not pursue her to sign.</p>
            <div class="border border-paper/[0.08] p-5" style="background:rgba(0,0,0,0.14)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">Agency Obligations Under the RTRA Act 2008 (Qld)</div>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Bond must be lodged with the RTA within 10 days — not passed informally between tenants at the controlling party's discretion.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Tenants have a right to quiet enjoyment — the agency cannot declare co-tenant harassment a private matter and disengage.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">A licensed agent cannot use an invoice it acknowledges is not a tenant's responsibility as a condition of approving that tenant's exit.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Coastal Property Agents was aware of every failure documented here — confirmed by its own written admissions.</p></div>
                </div>
            </div>
        </div>

        <!-- TIMELINE + VERDICT + VAULT GO HERE -->

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
// ── SCROLL REVEAL ──
var obs = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) { if (e.isIntersecting) e.target.classList.add('in'); });
}, { threshold: 0.08 });
document.querySelectorAll('.reveal').forEach(function(el) { obs.observe(el); });

// ── MEDIA VIEWER ──
var EVIDENCE = {
    'video-police-assault': {
        type: 'video',
        title: 'VIDEO — SENT AFTER ASSAULT',
        tag: 'Primary Evidence · LECC Complaint EXT2026-0413',
        meta: 'Recorded by Adam Watson · 9 January 2026 · Coogee NSW',
        desc: 'Video recorded and sent to Sunlight.Quest by Adam Watson immediately after the assault by NSW Police officers on 9 January 2026. Six officers had attended his Coogee address following a call reporting an AVO breach. This footage documents the immediate aftermath. It is attached to LECC complaint EXT2026-0413 as primary evidence.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lecc/adam-police-assault.mp4',
        filename: 'adam-police-assault.mp4'
    },
    'pdf-lecc-agnew': {
        type: 'pdf',
        title: 'SC AGNEW — INVESTIGATION CLOSURE',
        tag: 'Internal Review · NSW Police · LECC Matter',
        meta: 'PDF · Closed 25 January 2026 · SC Agnew / SC Grace',
        desc: 'The NSW Police internal investigation closure letter from SC Anthony Agnew and SC Grace. The complaint was closed 16 days after the incident with the finding that "no evidence was identified to substantiate" the allegations — despite no witnesses being contacted, no BWC footage reviewed, no hospital records obtained, and no officers individually identified.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lecc/lecc_agnew_1.pdf',
        filename: 'lecc_agnew_1.pdf',
        pages: 2
    },
    'pdf-lecc-complaint': {
        type: 'pdf',
        title: 'LECC FORMAL COMPLAINT — EXT2026-0413',
        tag: 'Law Enforcement Conduct Commission · Adam Watson',
        meta: 'PDF · Filed 19 March 2026 · Reference: EXT2026-0413',
        desc: 'The formal complaint lodged with the Law Enforcement Conduct Commission on 19 March 2026. The complaint documents the assault, the antisemitic and homophobic slur used by officers ("Jewish Faggot"), the unlawful seizure of $878 in prescribed diabetic medication, and identifies five specific investigative failures in the internal review conducted by SC Agnew and SC Grace.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lecc/LECC_Complaint_Adam_Watson_v2.docx.pdf',
        filename: 'LECC_Complaint_Adam_Watson_v2.docx.pdf',
        pages: 6
    },
    'pdf-lecc-email': {
        type: 'pdf',
        title: 'EMAIL CORRESPONDENCE — POLICE COMPLAINT',
        tag: 'Supporting Correspondence · Jan–Mar 2026',
        meta: 'PDF · Email thread · Complaint period correspondence',
        desc: 'Email correspondence related to the police complaint and internal review process, covering the period between the 9 January 2026 incident and the lodgement of the formal LECC complaint in March 2026.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lecc/lecc_email.pdf',
        filename: 'lecc_email.pdf',
        pages: 3
    },
    'pdf-lecc-3': {
        type: 'pdf',
        title: 'SUPPORTING DOCUMENT — LECC MATTER',
        tag: 'Supplementary Evidence · EXT2026-0413',
        meta: 'PDF · Supplementary document · LECC complaint file',
        desc: 'Supplementary document filed as part of LECC complaint EXT2026-0413.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lecc/lecc_3.pdf',
        filename: 'lecc_3.pdf',
        pages: 2
    }
};

var currentFile = null;

function openMV(key) {
    if (EVIDENCE[key]) { renderMV(EVIDENCE[key]); return; }
    renderMV({ type: 'pdf', title: key, tag: 'Evidence File', meta: '', filename: key + '.pdf', desc: '' });
}

function renderMV(e) {
    currentFile = e;
    document.getElementById('mv-tag').textContent = e.tag || 'Evidence File';
    document.getElementById('mv-title').textContent = e.title || 'DOCUMENT';
    document.getElementById('mv-meta').textContent = e.meta || '';
    var dl = document.getElementById('mv-dl-btn');
    dl.textContent = '⬇ Download ' + (e.filename || 'file');
    if (e.url) { dl.onclick = function () { window.open(e.url, '_blank'); }; }
    else { dl.onclick = downloadFile; }
    var body = document.getElementById('mv-body');
    body.innerHTML = '';
    if (e.type === 'pdf') { body.innerHTML = buildPDFViewer(e); }
    else if (e.type === 'video') { body.innerHTML = buildVideoViewer(e); }
    document.getElementById('mv-wrap').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeMV() {
    document.getElementById('mv-wrap').classList.remove('active');
    document.body.style.overflow = '';
}

function downloadFile() {
    if (currentFile && currentFile.url) { window.open(currentFile.url, '_blank'); }
}

function buildPDFViewer(e) {
    var pages = e.pages || 2;
    var pagesHtml = '';
    for (var i = 0; i < Math.min(pages, 4); i++) {
        pagesHtml += '<div class="pdf-ph-page"><div class="pdf-ph-line" style="height:3px;background:rgba(193,68,14,0.3)"></div>' +
            Array(8).fill('<div class="pdf-ph-line"></div>').join('') + '</div>';
    }
    return '<div class="pdf-ph">' +
        '<div style="font-size:0.48rem;letter-spacing:0.22em;text-transform:uppercase;color:rgba(193,68,14,0.6);margin-bottom:1rem">PDF Document — Evidence File</div>' +
        '<div class="pdf-ph-pages">' + pagesHtml + '</div>' +
        '<div style="font-family:\'Bebas Neue\',sans-serif;font-size:1.4rem;letter-spacing:0.06em;color:rgba(245,234,212,0.5);margin-bottom:0.75rem">' + (e.title || 'DOCUMENT') + '</div>' +
        '<div style="font-size:0.62rem;line-height:1.7;color:rgba(245,234,212,0.35);max-width:480px;margin:0 auto">' + (e.desc || '') + '</div>' +
        (e.url ? '<div style="margin-top:1.5rem"><a href="' + e.url + '" target="_blank" rel="noopener" style="display:inline-block;font-size:0.5rem;letter-spacing:0.18em;text-transform:uppercase;color:#c1440e;border:1px solid rgba(193,68,14,0.4);padding:0.45rem 1.1rem;text-decoration:none">▶ OPEN PDF IN NEW TAB</a></div>' : '') +
        '<div style="margin-top:1rem;font-size:0.5rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(245,234,212,0.2);border:1px solid rgba(245,234,212,0.07);display:inline-block;padding:0.35rem 0.75rem">' + (e.filename || 'document.pdf') + '</div>' +
        '</div>';
}

function buildVideoViewer(e) {
    var src = e.url || e.src || '';
    if (!src) {
        return '<div style="width:100%;max-width:760px;text-align:center;padding:3rem 1rem"><div style="font-size:0.52rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(245,234,212,0.3)">No video URL available</div></div>';
    }
    return '<div style="width:100%;max-width:760px">' +
        '<div style="background:rgba(0,0,0,0.4);border:1px solid rgba(245,234,212,0.08);padding:2.5rem 1.5rem;text-align:center;margin-bottom:1rem">' +
            '<div style="font-size:0.48rem;letter-spacing:0.2em;text-transform:uppercase;color:rgba(245,234,212,0.3);margin-bottom:1.25rem">Video Evidence · S3 Hosted · LECC Matter EXT2026-0413</div>' +
            '<a href="' + src + '" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:0.6rem;background:#c1440e;color:#f5ead4;font-family:\'Bebas Neue\',sans-serif;font-size:1.05rem;letter-spacing:0.12em;padding:0.75rem 2rem;text-decoration:none" onmouseover="this.style.opacity=\'0.85\'" onmouseout="this.style.opacity=\'1\'">&#9654; WATCH IN NEW TAB</a>' +
            '<div style="margin-top:1rem;font-size:0.44rem;letter-spacing:0.14em;text-transform:uppercase;color:rgba(245,234,212,0.2);word-break:break-all;max-width:480px;margin-left:auto;margin-right:auto">' + (e.filename || src) + '</div>' +
        '</div>' +
        '<div style="padding:0.5rem 0 0;font-size:0.62rem;line-height:1.7;color:rgba(245,234,212,0.38)">' + (e.desc || '') + '</div>' +
    '</div>';
}

document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') { closeMV(); }
});
</script>
</body>
</html>
