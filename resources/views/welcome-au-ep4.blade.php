<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sunlight.Quest — Episode 4: The Accountant</title>
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
        ::-webkit-scrollbar{width:3px}::-webkit-scrollbar-track{background:#0c0804}::-webkit-scrollbar-thumb{background:#3d7a4a}
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
        .nav-dropdown-menu a.nav-accent-sage:hover{color:#3d7a4a}
        /* story chapter */
        .story-chapter{border-left:2px solid rgba(245,234,212,0.08);padding-left:1.5rem;transition:border-color 0.3s ease}.story-chapter:hover{border-left-color:rgba(61,122,74,0.4)}
        /* evidence file rows */
        .evidence-vault{border:1px solid rgba(245,234,212,0.07);margin-top:1rem}
        .ev-header{display:flex;align-items:center;justify-content:space-between;padding:0.6rem 0.9rem;background:rgba(245,234,212,0.025);cursor:pointer;user-select:none;border-bottom:1px solid rgba(245,234,212,0.05)}
        .ev-header:hover{background:rgba(245,234,212,0.04)}
        .ev-toggle{font-size:0.55rem;color:rgba(245,234,212,0.25);transition:transform 0.25s}.ev-header.open .ev-toggle{transform:rotate(180deg)}
        .ev-body{display:none}.ev-body.open{display:block}
        .ev-zip-bar{padding:0.55rem 0.9rem;background:rgba(245,234,212,0.015);border-top:1px solid rgba(245,234,212,0.05);display:flex;align-items:center;justify-content:space-between}
        .ev-file{display:flex;align-items:center;gap:0.65rem;padding:0.65rem 0.9rem;border-bottom:1px solid rgba(245,234,212,0.04);transition:background 0.2s;cursor:pointer;position:relative;overflow:hidden}
        .ev-file:last-child{border-bottom:none}
        .ev-file:hover{background:rgba(245,234,212,0.03)}
        .ev-file::before{content:'';position:absolute;left:0;top:0;bottom:0;width:2px;transform:scaleY(0);transform-origin:bottom;transition:transform 0.3s}
        .ev-file:hover::before{transform:scaleY(1)}
        .ef-hot::before{background:#c1440e}.ef-gold::before{background:#c98a10}.ef-sage::before{background:#3d7a4a}.ef-violet::before{background:#7c6aaa}
        .ev-icon{width:30px;height:30px;display:flex;align-items:center;justify-content:center;border:1px solid rgba(245,234,212,0.07);font-size:0.65rem;flex-shrink:0;letter-spacing:0.04em}
        .ev-pdf{background:rgba(193,68,14,0.08);color:#c1440e}
        .ev-img{background:rgba(61,122,74,0.08);color:#3d7a4a}
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
        .mv-dl-sage{border-color:rgba(61,122,74,0.35);color:#3d7a4a}.mv-dl-sage:hover{border-color:#3d7a4a;background:rgba(61,122,74,0.08)}
        .mv-dl-hot{border-color:rgba(193,68,14,0.35);color:#c1440e}.mv-dl-hot:hover{border-color:#c1440e;background:rgba(193,68,14,0.08)}
        /* pdf placeholder */
        .pdf-ph{background:rgba(245,234,212,0.02);border:1px solid rgba(245,234,212,0.06);max-width:640px;width:100%;padding:2.5rem 2rem;text-align:center}
        .pdf-ph-pages{display:flex;gap:0.5rem;justify-content:center;margin-bottom:1.5rem}
        .pdf-ph-page{width:64px;height:82px;border:1px solid rgba(245,234,212,0.08);background:rgba(245,234,212,0.02);display:flex;flex-direction:column;gap:4px;padding:6px;border-top:3px solid rgba(61,122,74,0.4)}
        .pdf-ph-line{height:2px;background:rgba(245,234,212,0.06);border-radius:1px}
        /* stat */
        .stat-number{font-family:'Bebas Neue',sans-serif;letter-spacing:0.04em;line-height:1}
    </style>
</head>
<body class="bg-ink text-paper font-mono overflow-x-hidden" style="background-color:#0c0804;background-image:linear-gradient(160deg,rgba(61,122,74,0.08) 0%,transparent 40%,rgba(193,68,14,0.03) 100%)">

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
                <a href="/episode-3" class="nav-accent-gold">← Episode 3 — The Compliance Machine</a>
                <a href="/episode-4" class="nav-accent-sage" style="color:#3d7a4a">⬤ Episode 4 — The Accountant</a>
            </div>
        </div>
        <span class="text-[0.52rem] tracking-[0.18em] uppercase border px-3 py-1.5 blink" style="border-color:rgba(61,122,74,0.6);color:#3d7a4a">⬤ EP.04</span>
    </div>
</nav>

<!-- ══ AU STRIPE ══ -->
<div style="position:fixed;top:56px;left:0;right:0;z-index:49;height:2px;background:linear-gradient(90deg,#3d7a4a 0%,#c98a10 35%,#c1440e 65%,#3d7a4a 100%);opacity:0.55;pointer-events:none"></div>

<!-- ══ MEDIA VIEWER OVERLAY ══ -->
<div id="mv-wrap">
    <div class="mv-head">
        <div>
            <div id="mv-tag" class="text-[0.48rem] tracking-[0.22em] uppercase text-sage mb-0.5">Evidence File</div>
            <div id="mv-title" class="font-display text-lg tracking-widest">DOCUMENT</div>
        </div>
        <button class="mv-close-btn" onclick="closeMV()">✕ Close</button>
    </div>
    <div class="mv-body" id="mv-body"></div>
    <div class="mv-foot">
        <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20" id="mv-meta"></span>
        <div class="flex-1"></div>
        <button class="mv-dl-btn mv-dl-sage" id="mv-dl-btn" onclick="downloadFile()">⬇ Download File</button>
        <button class="mv-close-btn" onclick="closeMV()">✕ Close</button>
    </div>
</div>


<!-- ══════════════════════════════════════
     EPISODE 4 HERO
══════════════════════════════════════ -->
<section class="relative min-h-screen flex flex-col pt-14">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-b from-ink/60 via-ink/80 to-ink"></div>
        <div class="scanlines absolute inset-0"></div>
    </div>
    <div class="relative z-10 flex items-center justify-between px-5 md:px-10 py-3 border-b border-paper/[0.05]">
        <div class="flex items-center gap-4">
            <span class="font-display text-[0.62rem] tracking-[0.14em] text-sage">EP.04</span>
            <div class="w-px h-4 bg-paper/10"></div>
            <span class="text-[0.55rem] tracking-[0.22em] uppercase text-paper/30">Season 1 — The Accountant</span>
        </div>
        <div class="hidden sm:flex items-center gap-3 text-[0.52rem] tracking-[0.18em] uppercase text-paper/22">
            <span>In Production</span><div class="w-px h-3 bg-paper/10"></div><span class="text-sage">2026</span>
        </div>
    </div>
    <div class="relative z-10 flex-1 grid grid-cols-1 lg:grid-cols-[1fr_360px]">
        <div class="flex flex-col justify-center px-5 md:px-10 py-8 lg:py-10">
            <div class="fade-up mb-5" style="animation-delay:0.1s">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-5 h-px bg-sage"></div>
                    <span class="text-[0.55rem] tracking-[0.28em] uppercase text-sage">Federal Court · ATO · Tax Fraud Investigation</span>
                    <span class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/22 border border-paper/10 px-2 py-0.5">NSD2438/2025</span>
                </div>
                <h1 class="font-display leading-[0.88] tracking-wide" style="font-size:clamp(2.8rem,7vw,5.5rem)">THE<br><span class="text-sage">ACCOUNTANT.</span></h1>
                <p class="font-serif italic text-paper/40 mt-3 leading-relaxed max-w-lg" style="font-size:clamp(0.9rem,2vw,1.15rem)">She had access to his finances. She had his trust. She used both deliberately. Now she's running an NDIS business.</p>
            </div>
            <div class="fade-up" style="animation-delay:0.25s">
                <div class="flex items-center gap-3 mb-2">
                    <span class="text-[0.52rem] tracking-[0.2em] uppercase text-sage/60">▶ Video — Coming Soon</span>
                </div>
                <div class="w-full aspect-video border" style="border-color:rgba(61,122,74,0.2);background:#060606;position:relative;display:flex;align-items:center;justify-content:center;overflow:hidden">
                    <div class="scanlines" style="position:absolute;inset:0;opacity:0.5"></div>
                    <div style="text-align:center;position:relative;z-index:2">
                        <div style="width:60px;height:60px;border:2px solid rgba(61,122,74,0.4);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto">
                            <span style="color:rgba(61,122,74,0.5);font-size:1.2rem;margin-left:3px">▶</span>
                        </div>
                        <div style="margin-top:0.75rem;font-size:0.48rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(245,234,212,0.2);font-family:'DM Mono',monospace">Episode 4 — Video Pending Upload</div>
                    </div>
                    <div style="position:absolute;bottom:0.75rem;left:0;right:0;text-align:center">
                        <div style="font-size:0.44rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(61,122,74,0.25);font-family:'DM Mono',monospace">sunlight.quest · season 1 · ep.04</div>
                    </div>
                </div>
            </div>
            <!-- Chapter nav -->
            <div class="fade-up mt-5 border border-paper/[0.07]" style="animation-delay:0.35s;background:rgba(12,8,4,0.7)">
                <div class="px-4 py-2 border-b border-paper/[0.06]">
                    <span class="text-[0.46rem] tracking-[0.22em] uppercase text-paper/22">Episode 4 — Chapters</span>
                </div>
                <div class="flex flex-wrap gap-0">
                    <a href="#hellen-pertekes" class="flex items-center gap-2 px-4 py-3 hover:bg-paper/[0.03] transition-colors border-r border-paper/[0.06]">
                        <span class="font-display text-[0.62rem] text-sage">01</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/55 leading-none mb-0.5">Hellen Pertekes</div>
                            <div class="text-[0.47rem] text-paper/22 tracking-wider">Books R Us · ATO · NSD2438/2025</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Right sidebar — case stats -->
        <div class="hidden lg:flex flex-col border-l border-paper/[0.06] divide-y divide-paper/[0.05]">
            <div class="p-6 fade-up" style="animation-delay:0.15s">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-sage mb-3">Case Reference</div>
                <div class="font-display text-xl tracking-wide text-paper/80 mb-1">NSD2438/2025</div>
                <div class="text-[0.52rem] text-paper/30 leading-relaxed">Federal Court of Australia · Commissioner of Taxation</div>
            </div>
            <div class="p-6 fade-up" style="animation-delay:0.2s">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-sage mb-3">Key Subject</div>
                <div class="font-display text-xl tracking-wide text-paper/80 mb-1">HELLEN PERTEKES</div>
                <div class="text-[0.52rem] text-paper/30 leading-relaxed">Director — Born to Shine Disability Services<br>Former Director — Books R Us Accounting</div>
            </div>
            <div class="p-6 fade-up" style="animation-delay:0.25s">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-sage mb-3">Alleged Amount — Medical Scam</div>
                <div class="stat-number text-5xl text-hot mb-1">$20K</div>
                <div class="text-[0.52rem] text-paper/30 leading-relaxed">Obtained under false pretence — fabricated illness</div>
            </div>
            <div class="p-6 fade-up" style="animation-delay:0.3s">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-sage mb-3">Status</div>
                <div class="flex items-center gap-2">
                    <span class="text-[0.44rem] tracking-[0.15em] uppercase border border-sage/50 text-sage px-2 py-0.5 blink">⬤ ACTIVE PROCEEDINGS</span>
                </div>
                <div class="text-[0.52rem] text-paper/30 mt-2 leading-relaxed">Hostile witness · ATO subpoena pending</div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     EPISODE 4 CONTENT
══════════════════════════════════════ -->
<div class="max-w-4xl mx-auto px-5 md:px-10 py-16 space-y-16">

    <!-- ── HELLEN PERTEKES ── -->
    <div id="hellen-pertekes">

        <div class="flex items-center gap-3 mb-4 reveal">
            <span class="text-[0.5rem] tracking-[0.2em] uppercase text-sage border border-sage/40 px-2 py-1">Chapter 01 — Financial Fraud</span>
            <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Books R Us Accounting · Federal Court</span>
        </div>

        <!-- Portrait -->
        <div class="reveal mb-8">
            <div class="mx-auto border overflow-hidden" style="max-width:340px;border-color:rgba(61,122,74,0.3)">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/hellen_pertekes.jpeg" alt="Hellen Pertekes" class="w-full object-cover object-center" loading="lazy" />
                <div class="px-3 py-2 border-t" style="background:rgba(0,0,0,0.35);border-color:rgba(61,122,74,0.2)">
                    <div class="text-[0.43rem] tracking-[0.15em] uppercase text-sage/70">Hellen Pertekes · Books R Us Accounting · Born to Shine Disability Services</div>
                </div>
            </div>
        </div>

        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-4 leading-tight reveal">THE ACCOUNTANT<br><span class="text-sage">WHO DIDN'T LODGE.</span></h2>
        <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-8 reveal">"She had full access to his financial records. She had been trusted to lodge his tax returns. She chose not to. And then she told a colleague why."</p>

        <!-- Stat grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-10 reveal">
            <div class="bg-ink px-5 py-5 text-center">
                <div class="stat-number text-4xl text-sage mb-1">0</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Returns lodged</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Despite being paid to do so</div>
            </div>
            <div class="bg-ink px-5 py-5 text-center">
                <div class="stat-number text-4xl text-hot mb-1">$20K</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Medical scam</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Fabricated illness · No bills</div>
            </div>
            <div class="bg-ink px-5 py-5 text-center">
                <div class="stat-number text-4xl text-gold mb-1">1</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Federal Court case</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">NSD2438/2025 · Active</div>
            </div>
            <div class="bg-ink px-5 py-5 text-center">
                <div class="stat-number text-4xl text-paper/40 mb-1">2</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Businesses run</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Accounting · Then NDIS</div>
            </div>
        </div>

        <div class="space-y-10">

            <!-- Chapter 1: Books R Us -->
            <div class="story-chapter reveal" style="border-left-color:rgba(61,122,74,0.4)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-sage border border-sage/40 px-2 py-1">The Firm</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">BOOKS R US ACCOUNTING.<br><span class="text-sage">NOW OFFLINE. THE DOMAIN IS DOWN.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"She ran a bookkeeping firm. Adam Watson trusted her with his taxes. The website is gone now. The damage it left behind is not."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Hellen Pertekes operated <strong class="text-paper/65">Books R Us Accounting</strong>, a bookkeeping and accounting firm that can no longer be found at its former domain — <span class="text-sage/70">books-r-us.com.au</span> — which is now down. Adam Watson engaged the firm to handle his tax affairs. He paid for the service. Returns were not lodged. The ATO, in the course of pursuing Adam Watson as the taxpayer of record, became the mechanism through which the failure to lodge was first surfaced as a formal matter.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                    <div class="border border-sage/20 p-4" style="background:rgba(61,122,74,0.03)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-2">The Business (Former)</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Name:</strong> Books R Us Accounting</p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Domain:</strong> books-r-us.com.au — now down</p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Director:</strong> Hellen Pertekes</p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Service engaged:</strong> Tax returns — Adam Watson</p></div>
                        </div>
                    </div>
                    <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">What Was Not Done</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Tax returns not lodged with the ATO</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Client not notified of non-lodgement</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">No remediation offered when ATO proceedings commenced</p></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chapter 2: Intentional -->
            <div class="story-chapter reveal" style="border-left-color:rgba(193,68,14,0.5)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">The Admission</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">SHE SAID IT WAS INTENTIONAL.<br><span class="text-hot">JEALOUSY. TO A STAFF MEMBER. ON THE RECORD.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"She made a comment to a member of her own staff that she had deliberately not lodged Adam Watson's tax returns — because she was jealous of him."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">This was not an oversight. It was not a clerical error. According to information held by Adam Watson, Hellen Pertekes made a direct comment to a member of her staff that the failure to lodge was <strong class="text-paper/65">intentional</strong> — motivated by jealousy. The staff member is known. Adam Watson is moving to subpoena this individual as part of his case against the Commissioner of Taxation, where their testimony would speak directly to the question of whether the non-lodgement was deliberate professional misconduct rather than negligence.</p>
                <div class="border border-hot/25 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Why This Matters Legally</div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-1.5">Negligence vs Intent</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">Negligent non-lodgement and deliberate non-lodgement carry different legal consequences. An admission of intent transforms this from a professional failure into potential criminal conduct.</p>
                        </div>
                        <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-1.5">The Witness</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">The staff member to whom Pertekes made the comment is identified. A subpoena is being prepared. Their testimony would establish the admission as part of the court record.</p>
                        </div>
                        <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-1.5">The ATO Proceedings</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">Adam Watson is the named party before the Commissioner of Taxation — but the cause of the liability was his accountant's deliberate conduct. The witness evidence is central to that argument.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chapter 3: Hostile Witness / Federal Court -->
            <div class="story-chapter reveal" style="border-left-color:rgba(201,138,16,0.5)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Federal Court · NSD2438/2025</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">TREATED AS A HOSTILE WITNESS.<br><span class="text-gold">THE ATO IS MOVING TO SUBPOENA HER.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"In the Federal Court proceedings, Hellen Pertekes was treated as a hostile witness. She is not cooperating. The ATO has indicated they intend to subpoena her directly."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The Federal Court proceedings — reference <strong class="text-paper/65">NSD2438/2025</strong> — are the formal vehicle through which Adam Watson's case against the Commissioner of Taxation is being heard. In the course of those proceedings, Hellen Pertekes has been treated as a hostile witness: a designation that reflects her posture toward the proceeding and the parties who need her cooperation to establish the facts. She has not cooperated voluntarily. The Australian Taxation Office is now moving to subpoena her, which would compel her attendance and testimony regardless of her cooperation.</p>
                <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">Case Summary</div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div class="space-y-2">
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Court:</strong> Federal Court of Australia</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Reference:</strong> NSD2438/2025</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Named respondent:</strong> Commissioner of Taxation</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Pertekes's status:</strong> Hostile witness</p></div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">ATO action:</strong> Subpoena of Pertekes pending</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Adam's action:</strong> Subpoena of staff witness pending</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Status:</strong> Active proceedings</p></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chapter 4: Born to Shine NDIS -->
            <div class="story-chapter reveal" style="border-left-color:rgba(61,122,74,0.5)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-sage border border-sage/40 px-2 py-1">The New Business</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">BOOKS R US IS DOWN.<br><span class="text-sage">BORN TO SHINE DISABILITY SERVICES IS UP.</span></h3>

                <!-- Logo -->
                <div class="reveal mb-5 flex items-center gap-4">
                    <div class="border border-paper/[0.08] p-3 shrink-0" style="background:#ffffff">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/Born-To-Shine-Circle-Logo.webp" alt="Born to Shine Disability Services" class="h-14 w-auto" loading="lazy" />
                    </div>
                    <div>
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-sage mb-0.5">Currently Operating</div>
                        <div class="font-display text-lg tracking-wide text-paper/75 leading-tight">BORN TO SHINE<br>DISABILITY SERVICES</div>
                        <div class="text-[0.5rem] text-paper/30 mt-1">borntoshinedisabilityservices.com.au · NDIS Provider · Director: Hellen Pertekes</div>
                    </div>
                </div>

                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"After Books R Us went offline, she opened an NDIS business. She is the Director. The clients are now disabled Australians accessing government-funded care — not taxpayers."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">While the Federal Court proceedings are active and the ATO is pursuing her as a hostile witness, Hellen Pertekes has moved into an entirely different sector. She is now the Director of <strong class="text-paper/65">Born to Shine Disability Services</strong>, an NDIS provider operating at <span class="text-sage/70">borntoshinedisabilityservices.com.au</span>. The National Disability Insurance Scheme is a Commonwealth-funded program that directs public money to registered providers who deliver services to Australians with disability. Registration as an NDIS provider carries obligations, background checks, and ongoing compliance requirements.</p>

                <div class="border border-sage/20 p-5 mb-5" style="background:rgba(61,122,74,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-3">Born to Shine Disability Services — What Is Known</div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Director:</strong> Hellen Pertekes</p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Sector:</strong> NDIS — disability services</p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Website:</strong> borntoshinedisabilityservices.com.au</p></div>
                        </div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Funding:</strong> Commonwealth — NDIS participants' plans</p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Previous business:</strong> Books R Us Accounting — domain now down</p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Concurrent proceedings:</strong> Active — Federal Court NSD2438/2025</p></div>
                        </div>
                    </div>
                </div>

                <div class="border border-hot/25 px-5 py-4" style="background:rgba(193,68,14,0.05)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">The Public Interest Question</div>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed">A person who is simultaneously a hostile witness in Federal Court proceedings, the subject of a pending ATO subpoena, and the alleged source of a deliberate decision to withhold a client's tax lodgements — is operating as the director of an NDIS business funded by Commonwealth money. The NDIS Commission maintains registration and quality standards for providers. Whether the matters currently before the Federal Court are being disclosed as part of any registration or compliance obligation is a question that sits within the Commission's remit.</p>
                </div>
            </div>

            <!-- Chapter 5: The $20,000 Scam -->
            <div class="story-chapter reveal" style="border-left-color:rgba(193,68,14,0.5)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">The Scam</span>
                    <span class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/25 border border-paper/10 px-2 py-0.5">Fabricated Illness · $20,000</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">"I NEED $20,000 FOR MEDICAL BILLS."<br><span class="text-hot">SHE NEVER HAD AN ILLNESS.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"She told Adam Watson she needed $20,000 urgently for medical bills. He provided it. When he called her doctor, he learned she had no illness."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">At a point while Hellen Pertekes was acting as Adam Watson's accountant — and while his tax returns were not being lodged — she approached him with a claim of urgent financial need. She told him she required <strong class="text-paper/65">$20,000 for medical bills</strong> arising from a serious illness. Adam Watson provided the money. It was only after the payment, when he contacted her doctor directly, that he learned she had no illness. There were no medical bills. The emergency did not exist.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                    <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-2">The Story She Told</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Serious illness requiring urgent treatment</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">$20,000 required immediately for medical bills</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Adam Watson provided the funds</p></div>
                        </div>
                    </div>
                    <div class="border border-sage/20 p-4" style="background:rgba(61,122,74,0.03)">
                        <div class="text-[0.44rem] tracking-[0.15em] uppercase text-sage mb-2">What Adam Found</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Called her doctor directly after payment</p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Doctor confirmed no illness on record</p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">No medical bills. No treatment. No illness.</p></div>
                        </div>
                    </div>
                </div>

                <div class="border border-hot/30 px-5 py-4" style="background:rgba(193,68,14,0.06)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">The Pattern</div>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed">A person who was simultaneously failing to lodge a client's tax returns — and has since admitted to a staff member that this was intentional — also obtained $20,000 from that same client under a fabricated medical emergency. The two acts of dishonesty were concurrent. They were directed at the same person. And the professional relationship that made both possible was one built on trust: she was his accountant, she had access to his financial information, and he had no reason at the time to question her.</p>
                </div>

                <!-- Jewel Apartment — court sale -->
                <div class="border border-hot/30 p-5 mt-5 mb-5" style="background:rgba(193,68,14,0.05)">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">Consequential Loss — Court-Ordered Sale</span>
                    </div>
                    <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">$6 MILLION APARTMENT.<br><span class="text-hot">SOLD BY THE COURT FOR $3.5 MILLION.</span></h4>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">As a direct consequence of Hellen Pertekes's failure to lodge Adam Watson's tax returns, the Jewel apartment that Adam had purchased for <strong class="text-paper/65">$6 million</strong> was sold during proceedings — not by Adam, but by the Court. The forced sale realised <strong class="text-paper/65">$3.5 million</strong>: a loss of $2.5 million on a single asset, sold at a fraction of its value because the proceedings created by her conduct required it.</p>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">This is the concrete financial consequence of what Pertekes described — according to her own staff member — as an intentional act. It is not an abstract ATO dispute. It is a $2.5 million gap between what Adam Watson owned and what he was left with after the intervention of someone he paid to protect his financial affairs.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-1">Purchase Price</div>
                            <div class="font-display text-xl text-paper/70 mb-1">$6,000,000</div>
                            <p class="text-[0.6rem] text-paper/38 leading-relaxed">Jewel apartment, Gold Coast. Purchased by Adam Watson. Asset held before proceedings.</p>
                        </div>
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-1">Court Sale Price</div>
                            <div class="font-display text-xl text-hot mb-1">$3,500,000</div>
                            <p class="text-[0.6rem] text-paper/38 leading-relaxed">Sold by order of the Court during ATO proceedings. Not a voluntary sale. A fraction of market value.</p>
                        </div>
                        <div class="border border-hot/30 p-4" style="background:rgba(193,68,14,0.06)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-1">Loss on Asset</div>
                            <div class="font-display text-xl text-hot mb-1">−$2,500,000</div>
                            <p class="text-[0.6rem] text-paper/38 leading-relaxed">The direct financial consequence of Pertekes's admitted intentional non-lodgement — on a single property alone.</p>
                        </div>
                    </div>
                </div>

                <!-- Evidence vault -->
                <div class="evidence-vault mt-6">
                    <div class="ev-header" onclick="this.classList.toggle('open');this.nextElementSibling.classList.toggle('open')">
                        <div class="flex items-center gap-2">
                            <span class="text-[0.48rem] tracking-[0.22em] uppercase text-sage">📁 Evidence Files</span>
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Hellen Pertekes · Federal Court · ATO</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">Pending upload</span>
                            <span class="ev-toggle">▼</span>
                        </div>
                    </div>
                    <div class="ev-body">
                        <div class="ev-file ef-sage" style="cursor:default">
                            <div class="ev-icon ev-img">📄</div>
                            <div class="ev-meta">
                                <div class="ev-name">federal_court_NSD2438_2025.pdf</div>
                                <div class="ev-desc">PDF · Federal Court · NSD2438/2025 · Commissioner of Taxation · Pending upload</div>
                            </div>
                            <span class="ev-cta text-sage/40">Pending →</span>
                        </div>
                        <div class="ev-file ef-sage" style="cursor:default">
                            <div class="ev-icon ev-img">📄</div>
                            <div class="ev-meta">
                                <div class="ev-name">doctor_confirmation.pdf</div>
                                <div class="ev-desc">PDF · Doctor confirmation — no illness on record · Pending upload</div>
                            </div>
                            <span class="ev-cta text-sage/40">Pending →</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- ══ FOOTER ══ -->
<footer class="border-t border-paper/[0.05] px-5 md:px-10 py-8 max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-4">
    <div class="font-display text-xl tracking-widest text-paper/18">SUNLIGHT<span class="text-dim">.QUEST</span></div>
    <div class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/10 text-center">© 2026 Sunlight.Quest — Investigative Journalism — Gold Coast, QLD</div>
    <div class="flex gap-4">
        <a href="/" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 1</a>
        <a href="/episode-2" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 2</a>
        <a href="/episode-3" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 3</a>
        <a href="/episode-4" class="text-[0.52rem] tracking-[0.14em] uppercase text-sage/40 hover:text-sage transition-colors">Episode 4</a>
    </div>
</footer>


<script>
var EVIDENCE = {};
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
    else if (e.type === 'image') { body.innerHTML = buildImageViewer(e); }
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
        pagesHtml += '<div class="pdf-ph-page"><div class="pdf-ph-line" style="height:3px;background:rgba(61,122,74,0.3)"></div>' +
            Array(8).fill('<div class="pdf-ph-line"></div>').join('') + '</div>';
    }
    return '<div class="pdf-ph">' +
        '<div style="font-size:0.48rem;letter-spacing:0.22em;text-transform:uppercase;color:rgba(61,122,74,0.6);margin-bottom:1rem">PDF Document — Evidence File</div>' +
        '<div class="pdf-ph-pages">' + pagesHtml + '</div>' +
        '<div style="font-family:\'Bebas Neue\',sans-serif;font-size:1.4rem;letter-spacing:0.06em;color:rgba(245,234,212,0.5);margin-bottom:0.75rem">' + (e.title || 'DOCUMENT') + '</div>' +
        '<div style="font-size:0.62rem;line-height:1.7;color:rgba(245,234,212,0.35);max-width:480px;margin:0 auto">' + (e.desc || '') + '</div>' +
        (e.url ? '<div style="margin-top:1.5rem"><a href="' + e.url + '" target="_blank" rel="noopener" style="display:inline-block;font-size:0.5rem;letter-spacing:0.18em;text-transform:uppercase;color:#3d7a4a;border:1px solid rgba(61,122,74,0.4);padding:0.45rem 1.1rem;text-decoration:none">▶ OPEN PDF IN NEW TAB</a></div>' : '') +
        '<div style="margin-top:1rem;font-size:0.5rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(245,234,212,0.2);border:1px solid rgba(245,234,212,0.07);display:inline-block;padding:0.35rem 0.75rem">' + (e.filename || 'document.pdf') + '</div>' +
        '</div>';
}

function buildImageViewer(e) {
    var src = e.src || e.url || '';
    return '<div style="max-width:820px;width:100%;text-align:center">' +
        (src ? '<img src="' + src + '" style="max-width:100%;max-height:80vh;border:1px solid rgba(245,234,212,0.07)" />' : '') +
        '<div style="margin-top:0.75rem;font-size:0.52rem;line-height:1.7;color:rgba(245,234,212,0.35)">' + (e.desc || '') + '</div>' +
        '</div>';
}

document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') { closeMV(); }
});

// Scroll reveal
var obs = new IntersectionObserver(function(entries){
    entries.forEach(function(e){if(e.isIntersecting)e.target.classList.add('in');});
},{threshold:0.08});
document.querySelectorAll('.reveal').forEach(function(el){obs.observe(el);});
</script>
</body>
</html>
