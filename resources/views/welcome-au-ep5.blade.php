<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sunlight.Quest — Episode 5: The Order They Agreed To</title>
    <!-- Social share preview — RBK (Rhys Briffa) as the thumbnail -->
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="Sunlight.Quest"/>
    <meta property="og:title" content="Sunlight.Quest — Episode 5: The Order They Agreed To"/>
    <meta property="og:description" content="Housing, accountability, and the characters who cross this record — including RBK."/>
    <meta property="og:url" content="https://sunlight.quest/episode-5"/>
    <meta property="og:image" content="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/rhys_briffa.png"/>
    <meta property="og:image:alt" content="RBK — Rhys Briffa"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Sunlight.Quest — Episode 5: The Order They Agreed To"/>
    <meta name="twitter:description" content="Housing, accountability, and the characters who cross this record — including RBK."/>
    <meta name="twitter:image" content="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/rhys_briffa.png"/>
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
    <link rel="stylesheet" href="https://cdn.vidstack.io/player/theme.css">
    <link rel="stylesheet" href="https://cdn.vidstack.io/player/video.css">
    <script src="https://cdn.vidstack.io/player" type="module"></script>
    <style>
        body::after{content:'';position:fixed;inset:0;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.72' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");pointer-events:none;z-index:9498}
        ::-webkit-scrollbar{width:3px}::-webkit-scrollbar-track{background:#0c0804}::-webkit-scrollbar-thumb{background:#c98a10}
        @keyframes blink{0%,100%{opacity:1}50%{opacity:0.25}}.blink{animation:blink 2s step-end infinite}
        @keyframes fadeUp{from{opacity:0;transform:translateY(18px)}to{opacity:1;transform:translateY(0)}}.fade-up{animation:fadeUp 0.65s ease both}
        .reveal{opacity:0;transform:translateY(24px);transition:opacity 0.55s ease,transform 0.55s ease}.reveal.in{opacity:1;transform:translateY(0)}
        .scanlines{background:repeating-linear-gradient(0deg,transparent,transparent 2px,rgba(0,0,0,0.03) 2px,rgba(0,0,0,0.03) 4px);pointer-events:none}
        .nav-dropdown{position:relative}
        .nav-dropdown-menu{display:none;position:absolute;top:calc(100% + 8px);right:0;background:rgba(12,8,4,0.97);backdrop-filter:blur(12px);border:1px solid rgba(245,234,212,0.08);min-width:220px;z-index:100;box-shadow:0 24px 48px rgba(0,0,0,0.7)}
        .nav-dropdown:hover .nav-dropdown-menu,.nav-dropdown-menu:hover{display:block}
        .nav-dropdown-menu a{display:block;padding:0.55rem 1rem;font-size:0.55rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(245,234,212,0.4);transition:color 0.2s,background 0.2s;border-bottom:1px solid rgba(245,234,212,0.04);text-decoration:none}
        .nav-dropdown-menu a:last-child{border-bottom:none}
        .nav-dropdown-menu a:hover{color:rgba(245,234,212,0.9);background:rgba(245,234,212,0.03)}
        .nav-dropdown-menu .nav-group-label{display:block;padding:0.6rem 1rem 0.3rem;font-size:0.45rem;letter-spacing:0.25em;text-transform:uppercase;color:rgba(245,234,212,0.18);border-bottom:1px solid rgba(245,234,212,0.06);pointer-events:none}
        .nav-dropdown-menu a.nav-accent-gold:hover{color:#c98a10}
        .story-chapter{border-left:2px solid rgba(245,234,212,0.08);padding-left:1.5rem;transition:border-color 0.3s ease}.story-chapter:hover{border-left-color:rgba(201,138,16,0.4)}
        .evidence-vault{border:1px solid rgba(245,234,212,0.07);margin-top:1rem}
        .ev-header{display:flex;align-items:center;justify-content:space-between;padding:0.6rem 0.9rem;background:rgba(245,234,212,0.025);cursor:pointer;user-select:none;border-bottom:1px solid rgba(245,234,212,0.05)}
        .ev-header:hover{background:rgba(245,234,212,0.04)}
        .ev-toggle{font-size:0.55rem;color:rgba(245,234,212,0.25);transition:transform 0.25s}.ev-header.open .ev-toggle{transform:rotate(180deg)}
        .ev-body{display:none}.ev-body.open{display:block}
        .ev-file{display:flex;align-items:center;gap:0.65rem;padding:0.65rem 0.9rem;border-bottom:1px solid rgba(245,234,212,0.04);transition:background 0.2s;cursor:pointer;position:relative;overflow:hidden}
        .ev-file:last-child{border-bottom:none}
        .ev-file:hover{background:rgba(245,234,212,0.03)}
        .ev-file::before{content:'';position:absolute;left:0;top:0;bottom:0;width:2px;transform:scaleY(0);transform-origin:bottom;transition:transform 0.3s}
        .ev-file:hover::before{transform:scaleY(1)}
        .ef-gold::before{background:#c98a10}.ef-hot::before{background:#c1440e}.ef-sage::before{background:#3d7a4a}
        .ev-icon{width:30px;height:30px;display:flex;align-items:center;justify-content:center;border:1px solid rgba(245,234,212,0.07);font-size:0.65rem;flex-shrink:0;letter-spacing:0.04em}
        .ev-pdf{background:rgba(201,138,16,0.08);color:#c98a10}
        .ev-img{background:rgba(61,122,74,0.08);color:#3d7a4a}
        .ev-meta{flex:1;min-width:0}
        .ev-name{font-size:0.63rem;color:rgba(245,234,212,0.62);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
        .ev-desc{font-size:0.49rem;letter-spacing:0.12em;text-transform:uppercase;margin-top:0.12rem;color:rgba(245,234,212,0.22)}
        .ev-cta{font-size:0.47rem;letter-spacing:0.18em;text-transform:uppercase;opacity:0.3;transition:opacity 0.2s;white-space:nowrap;flex-shrink:0}
        .ev-file:hover .ev-cta{opacity:1}
        #mv-wrap{display:none;position:fixed;inset:0;z-index:9500;background:rgba(4,4,4,0.97);backdrop-filter:blur(16px);flex-direction:column}
        #mv-wrap.active{display:flex}
        .mv-head{display:flex;align-items:center;justify-content:space-between;padding:0.9rem 1.5rem;border-bottom:1px solid rgba(245,234,212,0.06);flex-shrink:0}
        .mv-body{flex:1;display:flex;flex-direction:column;align-items:center;padding:1.5rem;overflow-y:auto;overflow-x:hidden}
        .mv-foot{padding:0.65rem 1.5rem;border-top:1px solid rgba(245,234,212,0.06);display:flex;align-items:center;gap:0.75rem;flex-shrink:0;flex-wrap:wrap}
        .mv-close-btn{background:rgba(245,234,212,0.04);border:1px solid rgba(245,234,212,0.1);color:rgba(245,234,212,0.4);font-family:'DM Mono',monospace;font-size:0.6rem;letter-spacing:0.15em;text-transform:uppercase;padding:0.45rem 0.75rem;cursor:pointer;transition:all 0.2s}
        .mv-close-btn:hover{border-color:rgba(245,234,212,0.3);color:rgba(245,234,212,0.9)}
        .mv-dl-btn{display:inline-flex;align-items:center;gap:0.4rem;border:1px solid rgba(245,234,212,0.12);padding:0.45rem 0.9rem;font-size:0.52rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(245,234,212,0.4);transition:all 0.2s;cursor:pointer;background:none}
        .mv-dl-btn:hover{border-color:rgba(245,234,212,0.35);color:rgba(245,234,212,0.85)}
        .mv-dl-gold{border-color:rgba(201,138,16,0.35);color:#c98a10}.mv-dl-gold:hover{border-color:#c98a10;background:rgba(201,138,16,0.08)}
        .stat-number{font-family:'Bebas Neue',sans-serif;letter-spacing:0.04em;line-height:1}
        /* timeline */
        .tl-item{display:grid;grid-template-columns:100px 1fr;gap:0;position:relative}
        .tl-item::before{content:'';position:absolute;left:99px;top:0;bottom:0;width:1px;background:rgba(201,138,16,0.15)}
        .tl-date{font-family:'DM Mono',monospace;font-size:0.55rem;color:rgba(245,234,212,0.3);padding:0.85rem 1rem 0.85rem 0;text-align:right;letter-spacing:0.05em;line-height:1.4}
        .tl-body{padding:0.85rem 0 0.85rem 1.25rem;border-bottom:1px solid rgba(245,234,212,0.04)}
        .tl-dot{position:absolute;left:94px;top:1.05rem;width:10px;height:10px;border-radius:50%;background:#0c0804;border:2px solid rgba(201,138,16,0.4);z-index:1}
        .tl-dot.tl-hot{border-color:rgba(193,68,14,0.6);background:rgba(193,68,14,0.1)}
        .tl-dot.tl-gold{border-color:rgba(201,138,16,0.7);background:rgba(201,138,16,0.12)}
        /* TIP MODAL */
        #sq-modal{display:none;position:fixed;inset:0;z-index:9600;background:rgba(0,0,0,0.9);backdrop-filter:blur(5px);overflow-y:auto;padding:24px 16px 56px}
        #sq-modal.open{display:block}
        .sq-modal-inner{max-width:680px;margin:0 auto;position:relative}
        .sq-modal-close-row{display:flex;justify-content:flex-end;margin-bottom:12px}
        .sq-modal-close-btn{background:#111;border:1px solid #2a2a2a;color:rgba(245,234,212,0.4);font-family:'DM Mono',monospace;font-size:11px;letter-spacing:1px;padding:7px 16px;cursor:pointer;transition:color 0.13s,border-color 0.13s}
        .sq-modal-close-btn:hover{color:rgba(245,234,212,0.85);border-color:#555}
        .sq-logo-row{display:flex;align-items:center;gap:14px;margin-bottom:6px}
        .sq-logo-bar{width:4px;height:40px;background:#c98a10;flex-shrink:0}
        .sq-logo-text{font-family:'Bebas Neue',sans-serif;font-size:30px;color:#f5f0e8;letter-spacing:3px;line-height:1}
        .sq-logo-sub{font-family:'Instrument Serif',serif;font-size:12px;color:#5a5045;font-style:italic}
        .sq-conf-strip{background:#c98a10;color:#0c0804;font-size:8px;letter-spacing:2px;text-transform:uppercase;padding:5px 12px;margin:12px 0 18px;display:inline-block}
        .sq-card{background:#111;border:1px solid #222;padding:22px;margin-bottom:2px}
        .sq-section{margin-bottom:22px}
        .sq-section-label{font-family:'Bebas Neue',sans-serif;font-size:12px;letter-spacing:2.5px;color:#f5f0e8;margin-bottom:12px;display:flex;align-items:center;gap:10px}
        .sq-section-label::after{content:'';flex:1;height:1px;background:#222}
        .sq-badge{font-family:'DM Mono',monospace;font-size:8px;letter-spacing:1px;padding:2px 6px;text-transform:uppercase}
        .sq-badge-opt{background:#1e1e1e;color:#4a4035}.sq-badge-req{background:#c98a10;color:#0c0804}
        .sq-field{margin-bottom:10px}
        .sq-field-hint{font-size:10px;color:#3a3530;margin-top:4px;letter-spacing:0.3px;line-height:1.5}
        .sq-grid2{display:grid;grid-template-columns:1fr 1fr;gap:10px}
        .sq-input,.sq-textarea,.sq-select{width:100%;background:#161616;border:1px solid #2a2a2a;color:#e8e2d4;font-family:'DM Mono',monospace;font-size:12px;padding:10px 12px;outline:none;border-radius:0;-webkit-appearance:none;appearance:none;transition:border-color 0.13s,background 0.13s}
        .sq-input:focus,.sq-textarea:focus,.sq-select:focus{border-color:#c98a10;background:#1a1510}
        .sq-input::placeholder,.sq-textarea::placeholder{color:#2e2a26;font-style:italic}
        .sq-textarea{resize:vertical;min-height:90px;line-height:1.65}
        .sq-select{background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M0 0l5 6 5-6z' fill='%23e8e2d4'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 12px center;background-color:#161616;padding-right:34px;cursor:pointer}
        .sq-select option{background:#161616;color:#e8e2d4}
        .sq-toggle-row{display:flex;align-items:flex-start;gap:11px;background:#161616;border:1px solid #2a2a2a;padding:11px 12px;margin-bottom:10px;cursor:pointer;font-family:'DM Mono',monospace;font-size:11px;color:#7a7060;line-height:1.55;user-select:none;transition:border-color 0.13s}
        .sq-toggle-row:hover{border-color:#3a3a3a}
        .sq-toggle-row input[type=checkbox]{accent-color:#c98a10;width:14px;height:14px;margin-top:2px;flex-shrink:0;cursor:pointer}
        .sq-checkbox-group{display:flex;flex-direction:column;gap:8px}
        .sq-checkbox-item{display:flex;align-items:flex-start;gap:10px;font-family:'DM Mono',monospace;font-size:11px;cursor:pointer;color:#6a6055;line-height:1.55;padding:2px 0}
        .sq-checkbox-item input[type=checkbox]{accent-color:#c98a10;width:14px;height:14px;margin-top:1px;flex-shrink:0;cursor:pointer}
        .sq-collapsible{display:none;margin-top:10px}.sq-collapsible.open{display:block}
        .sq-divider{border:none;border-top:1px solid #1e1e1e;margin:20px 0}
        .sq-form-footer{background:#0d0d0d;border:1px solid #222;border-top:3px solid #c98a10;padding:16px 22px;display:flex;align-items:center;justify-content:space-between;gap:16px}
        .sq-footer-note{font-size:10px;color:#3a3530;max-width:380px;line-height:1.7}
        #sq-submit-btn{font-family:'Bebas Neue',sans-serif;font-size:17px;letter-spacing:2.5px;background:#c98a10;color:#0c0804;border:none;padding:12px 30px;cursor:pointer;transition:background 0.13s,transform 0.1s;white-space:nowrap}
        #sq-submit-btn:hover{background:#a8720d}
        #sq-submit-btn:active{transform:scale(0.97)}
        #sq-success-state{display:none;text-align:center;padding:56px 24px}
        .sq-success-word{font-family:'Bebas Neue',sans-serif;font-size:60px;color:#c98a10;letter-spacing:5px;display:block;margin-bottom:12px}
        #sq-success-state p{font-family:'Instrument Serif',serif;font-size:17px;color:#5a5045;font-style:italic;line-height:1.75}
        @media(max-width:520px){.sq-grid2{grid-template-columns:1fr}.sq-form-footer{flex-direction:column;align-items:stretch}#sq-submit-btn{width:100%;text-align:center}}
    </style>
</head>
<body class="bg-ink text-paper font-mono overflow-x-hidden" style="background-color:#0c0804;background-image:linear-gradient(160deg,rgba(201,138,16,0.07) 0%,transparent 40%,rgba(193,68,14,0.03) 100%)">

<!-- ══ NAV ══ -->
<nav class="fixed top-0 left-0 right-0 z-50 flex justify-between items-center px-5 py-3 bg-ink/95 backdrop-blur-md border-b border-paper/[0.06]">
    <div class="flex items-center gap-4">
        <a href="/" class="font-display text-2xl tracking-widest">SUNLIGHT<span class="text-hot">.QUEST</span></a>
        <span class="hidden sm:block text-[0.52rem] tracking-[0.2em] uppercase text-paper/20 border-l border-paper/10 pl-4">Investigative Vlog Series</span>
    </div>
    <div class="flex items-center gap-3">
        <a href="/episode-4" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors border border-paper/15 hover:border-gold/50 px-3 py-1.5 transition-all">← Episode 4</a>
        <button onclick="openTipModal()" class="hidden md:flex items-center gap-1.5 text-[0.55rem] tracking-[0.2em] uppercase border border-gold/50 hover:border-gold hover:bg-gold/10 px-3 py-1.5 text-gold transition-all">⊕ Submit a Tip</button>
        <a href="/episode-4" title="Go to Episode 4" aria-label="Go to Episode 4" class="flex md:hidden items-center gap-1 px-2.5 h-8 border font-display text-[0.6rem] tracking-widest" style="border-color:rgba(201,138,16,0.5);color:#c98a10">‹ EP4</a>
        <span class="text-[0.52rem] tracking-[0.18em] uppercase border px-3 py-1.5 blink" style="border-color:rgba(201,138,16,0.6);color:#c98a10">⬤ EP.05</span>
    </div>
</nav>

<!-- ══ AU STRIPE ══ -->
<div style="position:fixed;top:56px;left:0;right:0;z-index:49;height:2px;background:linear-gradient(90deg,#c98a10 0%,#c1440e 35%,#c98a10 65%,#3d7a4a 100%);opacity:0.55;pointer-events:none"></div>

<!-- ══ MEDIA VIEWER OVERLAY ══ -->
<div id="mv-wrap">
    <div class="mv-head">
        <div>
            <div id="mv-tag" class="text-[0.48rem] tracking-[0.22em] uppercase text-gold mb-0.5">Evidence File</div>
            <div id="mv-title" class="font-display text-lg tracking-widest">DOCUMENT</div>
        </div>
        <button class="mv-close-btn" onclick="closeMV()">✕ Close</button>
    </div>
    <div class="mv-body" id="mv-body"></div>
    <div class="mv-foot">
        <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20" id="mv-meta"></span>
        <div class="flex-1"></div>
        <button class="mv-dl-btn mv-dl-gold" id="mv-dl-btn" onclick="downloadFile()">⬇ Download File</button>
        <button class="mv-close-btn" onclick="closeMV()">✕ Close</button>
    </div>
</div>


<!-- ══════════════════════════════════════
     EPISODE 5 HERO
══════════════════════════════════════ -->
<section class="relative min-h-screen flex flex-col pt-14">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-b from-ink/60 via-ink/80 to-ink"></div>
        <div class="scanlines absolute inset-0"></div>
    </div>
    <div class="relative z-10 flex items-center justify-between px-5 md:px-10 py-3 border-b border-paper/[0.05]">
        <div class="flex items-center gap-4">
            <span class="font-display text-[0.62rem] tracking-[0.14em] text-gold">EP.05</span>
            <div class="w-px h-4 bg-paper/10"></div>
            <span class="text-[0.55rem] tracking-[0.22em] uppercase text-paper/30">Season 1 — The Order They Agreed To</span>
        </div>
        <div class="hidden sm:flex items-center gap-3 text-[0.52rem] tracking-[0.18em] uppercase text-paper/22">
            <span>Published</span><div class="w-px h-3 bg-paper/10"></div><span class="text-gold">26 Jun 2026</span>
        </div>
    </div>
    <div class="relative z-10 flex-1 grid grid-cols-1 lg:grid-cols-[1fr_360px]">
        <div class="flex flex-col justify-start px-5 md:px-10 py-8 lg:py-10">
            <div class="fade-up mb-5" style="animation-delay:0.1s">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-5 h-px bg-hot"></div>
                    <span class="text-[0.55rem] tracking-[0.28em] uppercase text-hot">RBK · Rhys Briffa · Wollongong</span>
                    <span class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/22 border border-paper/10 px-2 py-0.5">Feels Like Extortion</span>
                </div>
                <h1 class="font-display leading-[0.88] tracking-wide" style="font-size:clamp(2.8rem,7vw,5.5rem)">STREET IMAGE ONLINE.<br><span class="text-hot">POLICE ON SPEED DIAL.</span></h1>
                <p class="font-serif italic text-paper/40 mt-3 leading-relaxed max-w-lg" style="font-size:clamp(0.9rem,2vw,1.15rem)">Adam engaged a rapper for some videos. What came back were strange messages, a girlfriend demanding money, and threats to call the police — all while still asking for feedback on the video. The whole thing has started to feel like extortion.</p>
            </div>
            <!-- RBK photo (video coming soon) -->
            <div class="fade-up mb-5" style="animation-delay:0.2s">
                <div class="relative border overflow-hidden" style="border-color:rgba(193,68,14,0.25)">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/rhys_briffa.png" alt="RBK — Rhys Briffa" class="w-full object-contain block" style="height:460px;background:#0c0804" loading="eager" />
                    <div class="absolute bottom-0 left-0 right-0 px-4 py-3" style="background:linear-gradient(transparent,rgba(12,8,4,0.92))">
                        <div class="text-[0.48rem] tracking-[0.18em] uppercase text-hot/80">RBK · Rhys Briffa</div>
                        <div class="text-[0.55rem] text-paper/40 mt-0.5">Video coming soon</div>
                    </div>
                </div>
            </div>
            <!-- Chapter nav -->
            <div class="fade-up border border-paper/[0.07]" style="animation-delay:0.35s;background:rgba(12,8,4,0.7)">
                <div class="px-4 py-2 border-b border-paper/[0.06]">
                    <span class="text-[0.46rem] tracking-[0.22em] uppercase text-paper/22">Episode 5 — Chapters</span>
                </div>
                <div class="flex flex-wrap gap-0">
                    <a href="#the-promise" data-chap-ep5="0" onclick="seekToChapterEp5(0)" class="flex items-center gap-2 px-4 py-3 hover:bg-gold/8 transition-all group" style="border:1px solid transparent">
                        <span class="font-display text-[0.62rem] text-gold">01</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">NCAT — Dept of Housing</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Consent order · LAHC · Aug 2025</div></div>
                    </a>
                    <a href="#nine-months" data-chap-ep5="1" onclick="seekToChapterEp5(1)" class="flex items-center gap-2 px-4 py-3 hover:bg-gold/8 transition-all group" style="border:1px solid transparent">
                        <span class="font-display text-[0.62rem] text-gold">02</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Nine Months</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Adjournment · No repairs</div></div>
                    </a>
                    <a href="#lights-out" data-chap-ep5="2" onclick="seekToChapterEp5(2)" class="flex items-center gap-2 px-4 py-3 hover:bg-hot/8 transition-all group" style="border:1px solid transparent">
                        <span class="font-display text-[0.62rem] text-hot">03</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Lights Out</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Life-support address · Ausgrid</div></div>
                    </a>
                    <a href="#rent-to-520" data-chap-ep5="3" onclick="seekToChapterEp5(3)" class="flex items-center gap-2 px-4 py-3 hover:bg-hot/8 transition-all group" style="border:1px solid transparent">
                        <span class="font-display text-[0.62rem] text-hot">04</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">$520 a Week</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Centrelink seized · No notice</div></div>
                    </a>
                    <a href="#accountability" data-chap-ep5="4" onclick="seekToChapterEp5(4)" class="flex items-center gap-2 px-4 py-3 hover:bg-gold/8 transition-all group" style="border:1px solid transparent">
                        <span class="font-display text-[0.62rem] text-gold">05</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Accountability</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Rose Jackson · Referrals</div></div>
                    </a>
                    <a href="#evidence-vault" data-chap-ep5="5" onclick="seekToChapterEp5(5)" class="flex items-center gap-2 px-4 py-3 hover:bg-gold/8 transition-all group" style="border:1px solid transparent">
                        <span class="font-display text-[0.62rem] text-gold">06</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Evidence</div><div class="text-[0.47rem] text-paper/22 tracking-wider">8 documents · NCAT orders</div></div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Right sidebar -->
        <div class="hidden lg:flex flex-col border-l border-paper/[0.06]" style="background:rgba(12,8,4,0.6)">
            <div class="px-6 py-6 border-b border-paper/[0.06] fade-up" style="animation-delay:0.15s">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">This Episode</div>
                <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">The NSW Land and Housing Corporation consented to a tribunal order — mould remediation, repairs, rent capped at $77.95 — by 1 November 2025. The deadline passed. The repairs weren't done. Then the power failed at a life-support address. Then the rent went to $520. This is what happens when an order has no enforcer.</p>
                <div class="grid grid-cols-3 gap-2 text-center">
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-gold">NCAT</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Tribunal</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-hot">$520</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Weekly rent</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-gold">NSW</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Housing Corp</div></div>
                </div>
            </div>
            <div class="px-5 py-4 border-b border-paper/[0.06]">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">Episode Chapters</div>
                <div class="space-y-0.5">
                    <button data-chap-ep5="0" onclick="seekToChapterEp5(0)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(201,138,16,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem] text-gold">01</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">NCAT — Dept of Housing</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Consent order · LAHC · Aug 2025</div>
                        </div>
                    </button>
                    <button data-chap-ep5="1" onclick="seekToChapterEp5(1)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(201,138,16,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem] text-gold">02</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">Nine Months</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Adjournment · No repairs</div>
                        </div>
                    </button>
                    <button data-chap-ep5="2" onclick="seekToChapterEp5(2)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(193,68,14,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem] text-hot">03</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">Lights Out</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Life-support address · Ausgrid</div>
                        </div>
                    </button>
                    <button data-chap-ep5="3" onclick="seekToChapterEp5(3)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(193,68,14,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem] text-hot">04</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">$520 a Week</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Centrelink seized · No notice</div>
                        </div>
                    </button>
                    <button data-chap-ep5="4" onclick="seekToChapterEp5(4)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(201,138,16,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem] text-gold">05</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">Accountability</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Rose Jackson · Referrals</div>
                        </div>
                    </button>
                    <button data-chap-ep5="5" onclick="seekToChapterEp5(5)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(201,138,16,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem] text-gold">06</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">Evidence</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">8 documents · NCAT orders</div>
                        </div>
                    </button>
                </div>
            </div>
            <div class="px-5 py-4 border-b border-paper/[0.06]">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">Key Numbers</div>
                <div class="space-y-2">
                    <div class="flex justify-between items-center py-1.5 border-b border-paper/[0.04]">
                        <span class="text-[0.55rem] text-paper/35">Rent cap (ordered)</span>
                        <span class="font-display text-base text-gold">$77.95/wk</span>
                    </div>
                    <div class="flex justify-between items-center py-1.5 border-b border-paper/[0.04]">
                        <span class="text-[0.55rem] text-paper/35">Standard subsidy</span>
                        <span class="font-display text-base text-paper/50">~$145/wk</span>
                    </div>
                    <div class="flex justify-between items-center py-1.5 border-b border-paper/[0.04]">
                        <span class="text-[0.55rem] text-paper/35">Amount billed</span>
                        <span class="font-display text-base text-hot">$520/wk</span>
                    </div>
                    <div class="flex justify-between items-center py-1.5 border-b border-paper/[0.04]">
                        <span class="text-[0.55rem] text-paper/35">Compensation ordered</span>
                        <span class="font-display text-base text-gold">$291.80</span>
                    </div>
                    <div class="flex justify-between items-center py-1.5">
                        <span class="text-[0.55rem] text-paper/35">Repair deadline</span>
                        <span class="font-display text-base text-hot">Missed</span>
                    </div>
                </div>
            </div>
            <div class="px-5 py-4">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">Category</div>
                <div class="flex flex-wrap gap-1.5">
                    <span class="text-[0.45rem] tracking-[0.14em] uppercase border border-gold/30 text-gold/70 px-2 py-1">NSW Housing</span>
                    <span class="text-[0.45rem] tracking-[0.14em] uppercase border border-gold/30 text-gold/70 px-2 py-1">NCAT</span>
                    <span class="text-[0.45rem] tracking-[0.14em] uppercase border border-gold/30 text-gold/70 px-2 py-1">Homes NSW</span>
                    <span class="text-[0.45rem] tracking-[0.14em] uppercase border border-gold/30 text-gold/70 px-2 py-1">Rose Jackson</span>
                    <span class="text-[0.45rem] tracking-[0.14em] uppercase border border-gold/30 text-gold/70 px-2 py-1">Accountability</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     EPISODE 5 CONTENT
══════════════════════════════════════ -->
<div class="max-w-4xl mx-auto px-5 md:px-10 py-16 space-y-16">

    <!-- ── SECTION: RBK / RHYS BRIFFA ── -->
    <div id="rbk">
        <div class="flex items-center gap-3 mb-4 reveal">
            <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">New Character — RBK</span>
            <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Rhys Briffa · Wollongong · Feels Like Extortion</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-4 leading-tight reveal">RBK.<br><span class="text-hot">STREET IMAGE ONLINE. POLICE ON SPEED DIAL.</span></h2>
        <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-8 reveal">"Adam engaged a rapper for some videos. What came back were strange text messages, a girlfriend demanding money outside a business associate's building, and threats to call the police — all while still asking for feedback on the video. The whole thing has started to feel like extortion."</p>

        <!-- Photo -->
        <div class="reveal mb-8">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/rhys_briffa.png" alt="Rhys Briffa — RBK" class="w-full border border-paper/[0.07]" style="max-height:520px;object-fit:contain;background:#0c0804" loading="lazy" />
            <div class="flex items-center justify-between px-3 py-2 border border-t-0 border-paper/[0.07]" style="background:rgba(193,68,14,0.06)">
                <span class="text-[0.45rem] tracking-[0.18em] uppercase text-hot">RBK · real name Rhys Briffa</span>
                <span class="text-[0.45rem] tracking-[0.14em] uppercase text-paper/25">Rapper · Wollongong, NSW</span>
            </div>
        </div>

        <!-- How it started -->
        <div class="story-chapter reveal mb-8">
            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">How It Started</div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">The rapper goes by <strong class="text-paper/70">RBK</strong>; his real name is <strong class="text-paper/70">Rhys Briffa</strong>. Adam Watson found him on TikTok, watched his videos, and wanted some made for his <strong class="text-paper/70">political campaign</strong>. In the course of chatting, Adam was — as he tends to be — honest: he shared that he likes bad boys, and that he is bi-curious.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">Rhys reciprocated the candour. He confided that he has <strong class="text-paper/70">always known he is bisexual</strong>, and told Adam he would leave his girlfriend for him — or, in his words, that she <em class="text-paper/70">"doesn't have to know."</em> Adam declined. He said he could not do that. Rhys has a <strong class="text-paper/70">child</strong> and lives in <strong class="text-paper/70">Wollongong</strong>.</p>
        </div>

        <!-- The girlfriend / Robert Huang / $1,000 -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="flex items-center gap-2 mb-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot">The Girlfriend · The $1,000</span>
                <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/50 text-hot px-1.5 py-0.5 blink">⬤ LOOKS LIKE EXTORTION</span>
            </div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">SHE TURNED UP AT ADAM'S OWN BUILDING.<br><span class="text-hot">HE TRIED TO HELP — AND GOT SPAT IN THE FACE.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Adam had a meeting with Rhys. The next day, Rhys's <strong class="text-paper/65">girlfriend came looking for Adam</strong> — at <strong class="text-paper/65">Adam's own building</strong>, a <strong class="text-paper/65">$415 million project</strong> of which Adam Watson is the <strong class="text-paper/65">sole director and sole shareholder</strong>. She began making accusations that Adam was trying to steal Rhys from her. <strong class="text-paper/65">Robert Huang gave her $1,000 to go away.</strong> From that point, the whole thing began to look like extortion.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">It escalated. Rhys's girlfriend called Robert Huang an <strong class="text-hot">"asian cunt."</strong> To be clear, Adam did <strong class="text-paper/65">not</strong> lose any contracts over this — but that is not the point. A partner turning up unannounced at the people you do business with, hurling racial abuse, is <strong class="text-paper/65">creating unnecessary drama</strong> that has no place anywhere near a serious commercial project.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">And this is the part that stings: Adam <strong class="text-paper/65">tried to help this guy</strong> — paid work, a platform, genuine belief in him — and all he got in return was <strong class="text-paper/65">spat in the face</strong>.</p>
        </div>

        <!-- The messages -->
        <div class="story-chapter reveal mb-8">
            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">The Messages — In His Own Words</div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Rhys's messages to Adam are a study in contradiction. In one, he casts Adam as the aggressor, denies wanting the money he had already taken, and — remarkably — <strong class="text-paper/65">boasts that his lawyer just got him off a 10-year sentence</strong>:</p>
            <div class="border-l-4 border-hot/60 pl-4 py-3 mb-4" style="background:rgba(193,68,14,0.05)">
                <p class="text-[0.68rem] text-paper/60 leading-relaxed italic">"Your just a creep cuz so do what you want I tried to say I'll do the video now you don't want to you kept offering me money's saying you like me asking me if I was bye sexual and shit so you definitely wanted more then a video now I don't want to be a part of this creepy shit you wanna get upset once again you never said I have to pay you back<br><br>You clearly stated you will give me what ever I want all I have to do is ask and you sent money to me when I asked you can take what you want to court but my lawayer is very good he just got me off a 10 year sentence so I will see in court Adam"</p>
                <p class="text-[0.5rem] text-paper/30 mt-2">— Rhys Briffa (RBK), to Adam Watson</p>
            </div>
            <div class="border border-gold/25 p-5 mb-4" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-3">Adam's Answer — "See You in Court"</div>
                <div class="flex flex-col sm:flex-row gap-4 items-start">
                    <div class="shrink-0 w-28 border border-paper/[0.07]" style="background:#0c0804">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/stephen_alexander_logo.jpeg" alt="Stephen Alexander — Alexander Lawyers" class="w-full h-auto block" style="object-fit:contain" loading="lazy" />
                    </div>
                    <div class="flex-1">
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed">Rhys wants to talk about lawyers and court. Adam is happy to oblige. Adam says <strong class="text-paper/65">Stephen Alexander of Alexander Lawyers</strong> is on speed dial — a solicitor who charges <strong class="text-paper/65">$9,000 an appearance</strong>. A boast about "seeing you in court" only frightens someone who cannot afford to be in the room. Adam can.</p>
                    </div>
                </div>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Then, having taken the money, he threatens to call the police — while in the very same breath asking for feedback on the video:</p>
            <div class="border-l-4 border-hot/60 pl-4 py-3" style="background:rgba(193,68,14,0.05)">
                <p class="text-[0.68rem] text-paper/60 leading-relaxed italic">"Stop call my phone please otherwise I will call police and tell them your harassing me you said tell me ideas on a video so let me know when you got some"</p>
                <p class="text-[0.5rem] text-paper/30 mt-2">— Rhys Briffa (RBK), to Adam Watson</p>
            </div>

            <div class="mt-6">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-3">The Screenshots — The Exchange in Full</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">The messages are below. At one point, apropos of nothing, Rhys <strong class="text-paper/65">randomly sent a calculator</strong> — the kind of non-sequitur that tells you the conversation had stopped being about a video some time ago.</p>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/sceenshot_whatsapp_1.png" target="_blank" rel="noopener" class="block border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/sceenshot_whatsapp_1.png" alt="RBK message screenshot" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_1.jpeg" target="_blank" rel="noopener" class="block border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_1.jpeg" alt="RBK message screenshot" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_2.jpeg" target="_blank" rel="noopener" class="block border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_2.jpeg" alt="RBK message screenshot" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_3.jpeg" target="_blank" rel="noopener" class="block border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_3.jpeg" alt="RBK message screenshot" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_4.jpeg" target="_blank" rel="noopener" class="block border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_4.jpeg" alt="RBK message screenshot" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_5.jpeg" target="_blank" rel="noopener" class="block border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_5.jpeg" alt="RBK message screenshot" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_6.jpeg" target="_blank" rel="noopener" class="block border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_6.jpeg" alt="RBK message screenshot" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_whatsapp_2.png" target="_blank" rel="noopener" class="block border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_whatsapp_2.png" alt="RBK message screenshot" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_whatsapp_3.png" target="_blank" rel="noopener" class="block border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/screenshots/screenshot_whatsapp_3.png" alt="RBK message screenshot" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                </div>
            </div>
        </div>

        <!-- Commentary: bite the hand / snitch / chit chat -->
        <div class="border border-gold/25 p-6 mb-8 reveal" style="background:rgba(201,138,16,0.04)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-3">The Behaviour — Bite the Hand, Then Call the Cops</div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">The pattern is its own story. The moment there was any disagreement, Rhys moved <strong class="text-paper/65">straight to threatening the police</strong> — while still wanting feedback on the video he was being paid to make. This is how you break a relationship and bite the hand that feeds you in the same message. A person is given an opportunity — paid work, a platform, someone who believed in him — and responds by taking the money, threatening the person who gave it, and reaching for law enforcement at the first sign of friction.</p>
            <div class="flex flex-col sm:flex-row gap-5 items-start">
                <div class="shrink-0 w-40 border border-paper/[0.07]" style="background:#0c0804">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/chit_chat.png" alt="RBK — Chit Chat" class="w-full h-auto block" style="object-fit:contain" loading="lazy" />
                </div>
                <div class="flex-1">
                    <p class="text-[0.72rem] leading-relaxed text-paper/50">There is a particular irony to guys like RBK — a hard street image broadcast to the internet, right up until the first disagreement, when the phone comes out to dial triple-zero. His own song goes <em class="text-paper/70">"chit chat, this, that — I don't want to talk about it."</em> But the moment it suits him, he'll talk about it — to the police. Chit chat, this, that — <strong class="text-paper/65">straight to a statement.</strong> The street image says one thing; the conduct says <strong class="text-paper/65">snitch.</strong></p>
                </div>
            </div>
        </div>

        <!-- Sympathy play -->
        <div class="story-chapter reveal mb-8">
            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">The Sympathy Play</div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Alongside the threats, Rhys has been flooding Adam's messages with lines like <em class="text-paper/70">"I have to feed my daughter!"</em> — the sympathy play, deployed on repeat. It is worth looking at that claim honestly. This is a man who has the <strong class="text-paper/65">time to make videos</strong>, who is <strong class="text-paper/65">wearing nice clothes</strong> in them, and who maintains a whole online persona — but whose stated priority, the instant money is on the table, is suddenly his child.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">People like this invoke their kids as a lever, not as a compass. If feeding your daughter were genuinely the priority, it would show in the choices — not just in the messages sent to a man you are simultaneously threatening with the police. The child is real. The concern, deployed this way, is a tactic.</p>
        </div>

        <!-- 373 Crown Street recording / entrapment concern -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">The Recorded Call — 373 Crown Street</div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">"LET'S KEEP THIS BETWEEN US<br><span class="text-hot">AND I'LL GIVE YOU WHAT YOU WANT."</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Rhys called <strong class="text-paper/65">373 Crown Street</strong> — a property Adam Watson owns — and the call was recorded. On that recording:</p>
            <div class="border-l-4 border-hot/60 pl-4 py-3 mb-4" style="background:rgba(193,68,14,0.05)">
                <p class="text-[0.68rem] text-paper/60 leading-relaxed italic mb-2"><span class="text-hot">RBK:</span> "Let's keep this between us and I'll give you what you want. If you're alone with me, what do you want to do with me?"</p>
                <p class="text-[0.68rem] text-paper/60 leading-relaxed italic mb-2"><span class="text-hot">Adam:</span> "Are you bisexual?"</p>
                <p class="text-[0.68rem] text-paper/60 leading-relaxed italic mb-2"><span class="text-hot">RBK:</span> "Yes."</p>
                <p class="text-[0.68rem] text-paper/60 leading-relaxed italic mb-2"><span class="text-hot">RBK:</span> "Why do you like me so much?"</p>
                <p class="text-[0.68rem] text-paper/60 leading-relaxed italic"><span class="text-hot">Adam:</span> "Because you've got tattoos and you're a bad boy."</p>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">Read in the cold light of the threats that followed, that exchange raises an obvious concern: <strong class="text-paper/65">setup and entrapment</strong>. "Let's keep this between us… if you're alone with me, what do you want to do with me?" — a person steering a conversation toward a private, compromising admission, on a call to a property he could later name, is exactly the shape a setup takes. With certain characters you meet through the internet and off the street, the friendly overture and the leading questions are not always what they seem. A recorded invitation to "keep it between us" can just as easily be the opening move of a shakedown as a genuine one.</p>
        </div>

        <!-- The entitlement / the freak slur / the opportunity -->
        <div class="border border-gold/25 p-6 mb-8 reveal" style="background:rgba(201,138,16,0.04)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-3">The Entitlement — And the Opportunity He Burned</div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Adam is genuinely upset that Rhys is now calling him a <strong class="text-paper/65">"freak."</strong> It matters, because stigmatising someone — reaching for the words that mark a person as deviant or dangerous — is one of the most corrosive things you can do to them. It is a label engineered to make a person untouchable, and it is deployed here by someone who, moments earlier, was asking on a recorded line what Adam wanted to do with him.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">There is a sadness underneath the entitlement. Adam gave Rhys an <strong class="text-paper/65">opportunity most people never get</strong> — paid creative work, a platform, someone who believed in him. He threw it away with both hands. One day his father is going to look back on all of this — on how his son treated the person who tried to lift him up — and understand exactly what was squandered. Entitlement always looks like strength in the moment. It reads as tragedy in hindsight.</p>
        </div>

        <!-- The threat — nothing to hide -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="flex items-center gap-2 mb-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot">The Threat</span>
                <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/50 text-hot px-1.5 py-0.5">A Threat That Isn't One</span>
            </div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">"I'LL TELL EVERYONE ADAM LIKES<br><span class="text-hot">BAD BOYS WITH TATTOOS."</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Rhys's latest message threatens to <strong class="text-paper/65">"tell everyone Adam likes bad boys with tattoos."</strong> It is offered as leverage. It is nothing of the kind. Adam said exactly that himself — <strong class="text-paper/65">on the record, in his own words, on the recorded call above</strong>: <em class="text-paper/70">"Because you've got tattoos and you're a bad boy."</em></p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">You cannot expose a man who has already said it plainly. Adam is <strong class="text-paper/65">bi-curious and open about it</strong>; he has never hidden it, never denied it, and does not intend to start. A threat only works when the target is ashamed. There is <strong class="text-paper/65">nothing here to be ashamed of</strong> — which is precisely why the threat lands as what it really is: another attempt at pressure from someone who has run out of anything else to pull.</p>
            <div class="border border-paper/[0.07] max-w-md" style="background:#0c0804">
                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/10_07_26/rbk_reveal_threat.png" target="_blank" rel="noopener" class="block"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/10_07_26/rbk_reveal_threat.png" alt="RBK threat message — 'tell everyone Adam likes bad boys with tattoos'" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
            </div>
        </div>

        <!-- Instagram + sponsors -->
        <div class="border border-paper/[0.08] p-6 mb-4 reveal" style="background:rgba(12,8,4,0.4)">
            <div class="flex items-center justify-between mb-4">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/40">His Platform &amp; Sponsors</div>
                <a href="https://www.instagram.com/rbkofficialfromda26/" target="_blank" rel="noopener" class="text-[0.44rem] tracking-[0.14em] uppercase text-gold border border-gold/30 px-2 py-0.5 hover:bg-gold/10 transition-colors">@rbkofficialfromda26 ↗</a>
            </div>
            <p class="text-[0.66rem] text-paper/45 leading-relaxed mb-4">For the record, RBK promotes the following partners and sponsors on his Instagram channel:</p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                <div class="border border-paper/[0.07] p-4 flex items-center justify-center" style="background:#fff;min-height:110px">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/wollongong_kebabs.webp" alt="Wollongong Kebabs" class="w-full max-w-[150px]" style="object-fit:contain" loading="lazy" />
                </div>
                <div class="border border-paper/[0.07] p-4 flex items-center justify-center" style="background:#fff;min-height:110px">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/tattoo_salon_studio.png" alt="Tattoo Salon Studio" class="w-full max-w-[150px]" style="object-fit:contain" loading="lazy" />
                </div>
                <div class="border border-paper/[0.07] p-4 flex items-center justify-center" style="background:#fff;min-height:110px">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/brunch_cartel.jpeg" alt="Brunch Cartel" class="w-full max-w-[150px]" style="object-fit:contain" loading="lazy" />
                </div>
            </div>
        </div>

        <!-- The accomplice — Myagi -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="flex items-center gap-2 mb-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot">The Accomplice — Myagi</span>
                <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/50 text-hot px-1.5 py-0.5">Pressure to Take It Down</span>
            </div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">RBK'S FRIEND CAME TO SILENCE THE STORY —<br><span class="text-hot">NOT TO ANSWER FOR IT.</span></h3>
            <div class="grid grid-cols-1 sm:grid-cols-[150px_1fr] gap-5 items-start mb-5">
                <div class="border border-paper/[0.07]" style="background:#0c0804">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/myiagi_profile.png" alt="Myagi — @myagi_anonimus" class="w-full h-auto block" style="object-fit:cover" loading="lazy" />
                    <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25 px-2 py-1.5 border-t border-paper/[0.06]">Myagi · @myagi_anonimus · Wollongong</div>
                </div>
                <div>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">RBK's friend — a Wollongong rapper who goes by <strong class="text-paper/65">Myagi</strong> (<a href="https://www.instagram.com/myagi_anonimus/" target="_blank" rel="noopener" class="text-hot underline">@myagi_anonimus</a>) — inserted himself into the matter. Not to address what his friend had done, but to <strong class="text-paper/65">pressure Adam Watson into taking the RBK material off Sunlight.Quest.</strong></p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50">His stated reason is the tell. He argues the section should come down because it is a <strong class="text-paper/65">detriment to the businesses mentioned</strong> — the sponsors, the venues — while carefully stepping around the one fact that created the problem: <strong class="text-paper/65">his friend ran a scam.</strong> The businesses were not named to hurt them; they were named because RBK attaches himself to them. If there is a detriment here, its author is the person who behaved this way — not the person who documented it.</p>
                </div>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">He then adopted an uptight, arrogant tone — as though Adam Watson were someone to be talked down to. It is worth remembering who Adam actually is: a <strong class="text-paper/65">genuine developer</strong>, the sole director and sole shareholder of the building at the centre of this episode. Coming in hot at a man of that standing, on behalf of a friend who scammed him, is a way of <strong class="text-paper/65">starting off on the wrong foot</strong> — and staying there. The messages are below.</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/rbk_1.jpeg" target="_blank" rel="noopener" class="block border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/rbk_1.jpeg" alt="Myagi message to Adam Watson (1 of 3)" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/rbk_2.jpeg" target="_blank" rel="noopener" class="block border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/rbk_2.jpeg" alt="Myagi message to Adam Watson (2 of 3)" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/rbk_3.jpeg" target="_blank" rel="noopener" class="block border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/rbk_3.jpeg" alt="Myagi message to Adam Watson (3 of 3)" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
            </div>
            <div class="mt-6 border border-gold/25 p-5" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-3">The Affiliation — And What He's Really Covering</div>
                <div class="flex flex-col sm:flex-row gap-5 items-start">
                    <div class="shrink-0 w-full sm:w-56 border border-paper/[0.07]" style="background:#0c0804">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/myiagi_rbk_promote.png" alt="Myagi's Instagram promoting RBK — R.B.K Chit Chat" class="w-full h-auto block" style="object-fit:contain" loading="lazy" />
                    </div>
                    <div class="flex-1">
                        <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">This is not a neutral bystander. Myagi's own Instagram <strong class="text-paper/65">promotes RBK directly</strong> — his page carries RBK's <em class="text-paper/70">"Chit Chat"</em> release, the very track quoted earlier in this section. The two are affiliated.</p>
                        <p class="text-[0.72rem] leading-relaxed text-paper/50">Which is what makes the intervention what it is. <strong class="text-paper/65">RBK is a police informant</strong> — the pattern documented across this section is the pattern of someone who reaches for the police the moment a situation stops going his way. Myagi is not defending an innocent man; he is <strong class="text-paper/65">running cover for a snitch</strong> and dressing it up as concern for local businesses. That does not launder. The record stays.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RBK's girlfriend — the pedophile smear -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">The Girlfriend's Message — The Pedophile Smear</div>
            <div class="grid grid-cols-1 sm:grid-cols-[150px_1fr] gap-5 items-start mb-5">
                <div class="border border-paper/[0.07]" style="background:#0c0804">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/rbk_girlfriend.png" alt="RBK's girlfriend — from his Instagram" class="w-full h-auto block" style="object-fit:cover" loading="lazy" />
                    <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25 px-2 py-1.5 border-t border-paper/[0.06]">RBK's girlfriend · From his Instagram</div>
                </div>
                <div>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">RBK's girlfriend also sent Adam Watson a message. Its purpose was to <strong class="text-paper/65">imply that Adam is a pedophile</strong>. It is worth naming that move for what it is, because it is so common it is almost a signature.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">At the gutter end of any dispute, <strong class="text-paper/65">"pedophile" is the first reflex</strong> — reached for the instant a person has nothing real to say. It is thrown not because it is true, but because it is the ugliest word to hand. And there is a poverty of imagination underneath it: an inability to sit with the simple possibility that someone might just be <strong class="text-paper/65">kind</strong> — that Adam extended genuine help, paid work, and belief, with no sinister motive at all. People who have only ever operated in bad faith cannot picture good faith, so they rename it as the worst thing they can think of.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50">For the record: the implication is <strong class="text-paper/65">false</strong>. There is no allegation, no complaint, no substance behind it — only the word, deployed exactly the way people like this always deploy it.</p>
                </div>
            </div>
            <div class="border border-paper/[0.07] max-w-md" style="background:#0c0804">
                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/girlfriend_message.png" target="_blank" rel="noopener" class="block"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/girlfriend_message.png" alt="Message from RBK's girlfriend to Adam Watson" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25 px-3 py-2 border-t border-paper/[0.06]">The message · RBK's girlfriend to Adam Watson</div>
            </div>
        </div>

        <!-- The tattoo shop — full circle -->
        <div class="border border-gold/25 p-6 mb-4 reveal" style="background:rgba(201,138,16,0.04)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-3">The Tattoo Shop — Full Circle</div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">One of the venues attached to RBK — the tattoo studio listed among his sponsors above — has its own story running underneath this one. <strong class="text-paper/65">Many of its people have quit.</strong> And rather than sit with why, the shop is said to have <strong class="text-paper/65">gone to the underworld for retribution</strong> over the exposure.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">That is a category error. <strong class="text-paper/65">You cannot run to the underworld to complain that someone exposed a snitch.</strong> It does not work that way — that world's own code has no sympathy for informants, and an appeal made on a snitch's behalf has a way of coming back on the person who made it. It has come <strong class="text-paper/65">full circle.</strong> There is a great deal more to this that sits in the background and cannot be set down here — but the shape of it is simple: the people trying to bury this story keep arriving at the same door, and the door keeps opening the wrong way for them.</p>
        </div>

        <!-- Skivz — RBK's video guy -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="flex items-center gap-2 mb-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot">The Video Guy — Skivz</span>
                <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/50 text-hot px-1.5 py-0.5">"What's It Got To Do With Me?"</span>
            </div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">THE MAN BEHIND RBK'S CAMERA —<br><span class="text-hot">AND A SLOGAN THAT DOESN'T SURVIVE CONTACT.</span></h3>
            <div class="grid grid-cols-1 sm:grid-cols-[160px_1fr] gap-5 items-start mb-5">
                <div class="border border-paper/[0.07]" style="background:#0c0804">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/skivz_instagram.png" alt="Skivz — @skivz" class="w-full h-auto block" style="object-fit:contain" loading="lazy" />
                    <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25 px-2 py-1.5 border-t border-paper/[0.06]">Skivz · @skivz · Wollongong</div>
                </div>
                <div>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">RBK's videos are made by a man who goes by <strong class="text-paper/65">Skivz</strong> — RBK named him directly as the person who films his content. On Instagram (<a href="https://www.instagram.com/skivz/" target="_blank" rel="noopener" class="text-hot underline">@skivz</a>) he carries a following in the tens of thousands and brands himself around <em class="text-paper/70">"Dad Life,"</em> fitness, and discipline.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50">He is closely tied to <strong class="text-paper/65">Donz Active</strong> — a Wollongong fitness and clothing label he promotes, tagged into its posts under the banners <em class="text-paper/70">"No Excuses,"</em> <em class="text-paper/70">"Discipline · Mindset,"</em> and the one that matters most here: <em class="text-paper/70">"Lead By Example."</em></p>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                <a href="https://www.instagram.com/p/DZzRSrcGVPf/?img_index=1" target="_blank" rel="noopener" class="block border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/skivz_photo.png" alt="Skivz (circled) promoting Donz Active" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                <div class="border border-paper/[0.07] p-6 flex flex-col items-center justify-center text-center" style="background:#fff">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/donz_active.png" alt="Donz Active" class="w-full max-w-[200px] mb-3" style="object-fit:contain" loading="lazy" />
                    <a href="https://www.instagram.com/donz_active/" target="_blank" rel="noopener" class="text-[0.44rem] tracking-[0.14em] uppercase text-ink/60 border border-ink/20 px-2 py-0.5 hover:bg-ink/5 transition-colors">@donz_active ↗</a>
                </div>
            </div>
            <div class="border border-gold/25 p-5 mb-5" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-3">The Slogan — "Lead By Example"</div>
                <div class="flex flex-col sm:flex-row gap-5 items-start">
                    <div class="shrink-0 w-full sm:w-64 border border-paper/[0.07]" style="background:#0c0804">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/donz_active_instagram.png" alt="Donz Active — 'No Excuses. Lead By Example'" class="w-full h-auto block" style="object-fit:contain" loading="lazy" />
                    </div>
                    <div class="flex-1">
                        <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Donz Active markets itself on <em class="text-paper/70">"Building A Stronger Community,"</em> <em class="text-paper/70">"Fitness · Discipline · Mindset,"</em> and <em class="text-paper/70">"No Excuses. Lead By Example."</em> They are good words. The only real test of words like that is what happens when they meet something inconvenient.</p>
                        <p class="text-[0.72rem] leading-relaxed text-paper/50">Adam Watson raised with Skivz that a <strong class="text-paper/65">young child in his family</strong> was being placed in and around RBK's videos — RBK being the person documented across this section for what looks, on the evidence, like a scam. The conversation was recorded. Skivz's answer speaks for itself.</p>
                    </div>
                </div>
                <div class="border-l-4 border-hot/60 pl-4 py-3 mt-4" style="background:rgba(193,68,14,0.05)">
                    <p class="text-[0.7rem] text-paper/60 leading-relaxed italic">"...so what's it got to do with me?"</p>
                    <p class="text-[0.5rem] text-paper/30 mt-2">— Skivz, to Adam Watson (recorded)</p>
                </div>
                <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div class="border border-paper/[0.07]" style="background:#0c0804">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/west_kira/skiv_son_affiliated.jpg" alt="Behind the scenes on an RBK video shoot — a child on the camera, face redacted" class="w-full h-auto block" style="object-fit:contain" loading="lazy" />
                        <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25 px-3 py-2 border-t border-paper/[0.06] leading-relaxed">Behind the scenes on an RBK shoot — a child working the camera. Face redacted to protect the minor.</div>
                    </div>
                    <div class="border border-paper/[0.07]" style="background:#0c0804">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/west_kira/donjay_school.jpg" alt="Skivz's content featuring his child — name and face redacted" class="w-full h-auto block" style="object-fit:contain" loading="lazy" />
                        <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25 px-3 py-2 border-t border-paper/[0.06] leading-relaxed">Skivz puts his child front-and-centre in his own content — the same child whose presence around RBK's videos he waved off with "what's it got to do with me." Name and face redacted to protect the minor.</div>
                    </div>
                </div>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">On the law, and on affiliation: filming for someone, or promoting them, does not by itself make you a party to their conduct — <strong class="text-paper/65">association is not liability</strong>. But it is not nothing, either. Endorsement carries weight — it is the entire reason a brand pays for it — and where a promotion helps push a misleading arrangement, consumer-protection law can reach the promoter, not only the principal. That is the legal edge of it, and it is worth knowing.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-6">The simpler point needs no lawyer. A label built on <em class="text-paper/70">"Discipline, Mindset, Lead By Example,"</em> fronted by a man who brands himself on <em class="text-paper/70">"Dad Life,"</em> is either a set of values or a marketing costume. Told that a child was being drawn into the orbit of someone accused of a scam, <strong class="text-paper/65">"what's it got to do with me"</strong> is the answer of the costume — not the example.</p>
            <div class="border border-paper/[0.08] p-5" style="background:rgba(12,8,4,0.4)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-paper/35 mb-3">For the Record — What the Payment Actually Was</div>
                <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">The money Adam Watson paid RBK was <strong class="text-paper/65">payment for a video for Adam's political campaign</strong> — the policy platform set out in <a href="/episode-2" class="text-gold underline">Episode 2 (Adam's policies)</a>. It was a straightforward commercial engagement for legitimate work, not the arrangement RBK and his circle have since tried to paint. The "scammer" line runs in exactly one direction — and it is not the one they are pointing.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/50">Adam Watson is <strong class="text-paper/65">threatening legal action for defamation</strong> over the false characterisations being spread about him.</p>
                <div class="mt-5">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-paper/35 mb-3">The Receipts — Adam Watson &rarr; RBK (Shown to Skivz)</div>
                    <p class="text-[0.68rem] leading-relaxed text-paper/45 mb-3">The two Osko transfers Adam sent RBK for the campaign video &mdash; <strong class="text-paper/60">$1,000</strong> and <strong class="text-paper/60">$195</strong>, <strong class="text-paper/60">$1,195 in total</strong>. These are the receipts Adam put in front of Skivz. The payee's PayID mobile number has been redacted &mdash; a private number is not ours to publish.</p>
                    <div class="grid grid-cols-2 gap-3 max-w-lg">
                        <div class="border border-paper/[0.07]" style="background:#0c0804"><img src="data:image/jpeg;base64,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Dp8S+KF8P3lhEkV0p2ecjRrtKbHHOSM8Cug+F93q9/4ThvdcnlnmnlkeF5kCOYc4QkAADIGfxoA29cldYYYY3ZPPk2MynBCgEnHvgYqHTdO0u8sLe6WwjAmjVwHG5uRnk0/XvlW0lYgIk+HY9FDKy5PtkirOj272mlWdtKVLxQqjFTkZA7Utbl2jyN9bjP7F0z/nxg/74FH9i6Z/z4wf98Cr9FMgyL7SbW3tpbixjFtcRIXR4+OQM4I7irlhfQ3i7UceaqI0id13KCKTVpkg024aQgAxso9yRgAVX0fS1spHumZjNPDEjL2XYoFAGpRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAZ1zoemXWr22r3FnG+oWqlYJzncgOcgfmfzqLxB4a0bxJbpBrdhFdohyhfIZPowwRWtRQBl6B4e0jw7atbaLYxWkTHc4QElz6knk/jWpRRQBnTaHpk+swazNZxtqNuhjiuDncinPA7fxH86h8Q+GNF8SxJFrenxXQj+4zZDJ9GGCPzrXooAyPD3hjRfDcLxaJp8VqJPvsuSz/AFY5J/OteiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAqlq+lWGtWL2Oq2sdzauQWjkHBI5Bq7RQBjS+FdBl0SPRJNLt20yNtyW2PlU5JyO+eTz70XfhTQbzR4NIudLt5NPtyDDbkfKh55HfufzrZooAqQabZW9lDZQW0cdtAoWKJRgIB0Aq0qhVCqMAcAUtFAFe/sLPUbdrfULWG5gbrHNGHU/gaTT9PstMtxb6daQWsAORHBGEXP0FWaKAMy68O6JeXgvLvSLCa6Bz50lujPn6kVpAADA6UtFADZESRGSRQyMMFSMgis/+w7AfdikUeizOAPwBrSooAzf7Esf7s3/AH/f/Gj+xLH+7N/3/f8AxrSooAowaRYwyrKsJZ15VpHZ8fTJNXqKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKK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iigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigCjqzYiRfVqy61NWXMSN6NWXXwmfX+uyv2X5HbQ+AzPEbasulsNASNr1pEUNJjai7huYg9cDPFaYGB6+p9ay9es9Ru1sf7KuxbvDeRyzZYgSxDO5Dj1rUBB5ByD0xXmSt7OKVuvr8/0NOoVR1jSrHVrZYtRtxMkUizIASGVl5BBHIq9VbUrxNP065vZFZ0t4mkKoMlsDOAKmm5Ka5NxvbUh0LV7bXdKg1Ky3iCfO0SDDDBIOR9RV+qGgyLPo1nOlitiJohJ9mUAeXu5xwBzz6VfoqpKpJJWVwWxu2rb7eNj3UVLUVqu22jB/uipa/SsPf2ML72X5HnS3YUUUVsIKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigCG7i86BkHXqPrWH9a6KszULUgmaMcH7wH86+cz7ASqxVemrtb+n/AOihNLRmdJGssbxyDcjqVYeoPWufSFvB2gJBYWuo6tDFKdsSMGkijJJwM9QvQDrzXRUV8nTquPuvWPVHS0ZF54htrO5sLaW0v2lvQrII7YsIwSB85H3cZ5p6Ray3iB5ZLm2TSEi2xwImZJXPVmJ6Y7Y61qZop+0il7senXX7uwWCpLeIzTKg7nn6UwAsQAMk9AK17G28hNzffbr7e1duWYGWLrLT3Vv8A5fMipNRXmWRwMCloor9BOEKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAKVxYJIS0Z2N+lUnsp0/g3D1U1tUV5GJyXC13zW5X5f5Gsa0omELecn/VP+VTR2Ezn5sIPeteiuanw7hou8pNlPES6Fe3tY4OVGW/vGrFFFe5So06MFCmrIxbbd2FFFFaCCiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAzfEepnRdB1DVBF532O3eby923dtGcZ7Vxdh438Z6hYwX1p4E822njEkbjUoxuUjIOCK6T4i/8iHr/AP14Tf8AoJri/B/xQ8MaZ4T0mxuZrv7Rb2cccipaOw3BQDg4waAOw8HeMYPEsl3aS2U+napZEC5srj7yZ6EHuPf/AOtXTV5Z4ZOs6z4n8ReM9L0uSCOayW106G9/dm4YbfnYdh8v64qtrX9u6Lok+rXvxCRdchjMzafuh8hmHJiCdT6ZoA9corze78UalBeeC/EEk7R6Rq8SW95bcbI5ZFyj56jknv0FavjzVdQ/tTQfD2i3L297qNzvmljALR26cueemeg+lAHZ0V5lPdeJtZ+JOu6Bp+svY6bBBBI0qxqzxAoPljz0LE8k5xiqjzeMdJ8YL4OtteN3FqNuLiHULuINLaICd+B0Y8YGeORQB6xRXmxk13wd4x0KzudeudX0zWHeB0u1XfFIBkMpA6c9PrSeKPEtxqHjKbw3b+Ibfw/Y2MKyXd27ossrsAQiFuBwQSaAPSqK8v8ADniK50nxvZ+H28Sw+ItN1KJ2gn8xHlt5FGdrFeoIHf8ApUegv4p8U6/4msBr81hpljqUkaywopmPJxGpIwqgDJPXkUAeqVlafr9lqGualpFt5huNNEf2glcKC4JAB78D9a4/w1ca6niHXvBupa1NctFaLPZ6lsUTRq3HPYkEj8qwPC3h3VLjx34ttYvFWpQTW723m3CRx7rjKEjdkY46DFAHslZX9v2X/CSjw+vmG++ym6b5flVN20c+pP8AKtJlJiKByGK43DqPevHo/Dmqn4ry2H/CVakLkaOJDe+XH5hXzMbMYxjv60AeyUVwXinU9Zi1PQ/B2iX5TULuEyXWpSxhnSJBgsF6bmINUdak174f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v9TSIyXPmJIsa4UgMV6ZPYUAcR+zzIpsNaiB+YTRNj2Kkf0rtviZIsXgLW2c4Btiv4kgD9TXkdrPqXwl8Y3AntXuNNuAUU9BNHnKlT03D0+vrmrHjj4hT+ObeDQfD+m3KrNIpdWwZJSOigDOBnknPagDqv2f42Xw1qMhB2ve4X8EXNcx8Gj9m+I2pQS8SGGdMH1Ei5/ka9X8B+Hv+EZ8MWemuQZ1BknZehkbk/l0/CvK/Hem6l4G8eL4q02AvZTSmXOPlDNw8bemckg+/tQB7lO6xQSSOcKilifYCvDvgCjP4l1aZR8gtcE/VwR/I1P4o+MCavokunaNp1xDdXaeU7yMDsB4IUDkk9O1dd8HfCtx4d0GS41CIxXt8wdo2HMaAfKp9+SSPegDv6KKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDhvGvgq61/wATaHqlo9pHDYyBrhZAd0g3q3Yc8A9a7hVVFCqAoHQAYApaKAIrm2t7pAlzBFMgOQsiBgD+NVv7H0v/AKBtn/34X/Cr1FAFH+x9L/6Btn/34X/CuJ+MGjaxrGjadpWgWDSxefvl8sqqxhRhRyRxyfyr0SigChoOmRaNotlpsGNltCseR3IHJ/E5NXZI0ljaOVFdGGGVhkEe4p1FAGfa6JpNnN59ppdlBL/z0it1VvzArQoooACM9azv7A0b7R9o/smw8/OfM+zJuz65xWjRQAdOlFFFAGfdaHpN5N593pdlPL/z0lt0ZvzIq9HGkSKkSKiKMBVGAB9KdRQBDc2tvdKFureKZVOQJEDAH8adBBFbxiK3iSKMdERQoH4CpKKAIbq1t7yIw3cEU8R6pKgZT+BqGx0rTtOJOn2FralupghVM/kKuUUAFNkjSWNo5UV0YYZWGQR7inUUAZ9romk2c3n2ml2UEv8Az0it1VvzArQoooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAK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1hcafp4S8uJZ53be/mSF9hP8IJ7CtOiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAKerWEep6fLZyuyJJjLL1GCD/AEq4OlFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFACKcqDS1CjbT7VKCD0pJgLRRRTAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigApGOFJoJx1qJ23H2pANoBI6UU4ITSGG9vWje3rS+WfWjyz609QE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oAYST1opzIRTaQD41zya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Yx27811vgqR5fCGiySsWdrGElieT8grQt9Ps7a1ktYLaOO3kLl41XCsWJLZHuSaltbeG0tora2iWKCJQkcaDAVRwAKAJaKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAELAEAkAnpnvQzKuNzAZ4GTWH4wUppaXyD57CdLgfQHDf+Ok1neL4n1e4jtbZj/oto96Cp6vwI//AGagDrSwUZYgD3pa5nUrpdXXQIk5S6kW6kA5+RF3Y/76KipZNfvoFjurvSjBYySrHueb96u44DFMdMkcZzQB0NFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAQ3dul1azW8gykqMjfQjFYPg/T7+2S4n1aLZcFY7dASDmONcA8epJNdJRQByfh7R7+1vrvz08uK2ie3sXJByrOW3fh8o/CsufRr2TTEiGhyPqUTI813LOreYVYE7CT1OPbFegUUAMiYvEjsjIWAJVuq+xp9FFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAhIHUgfWk3r/eX86HRHxvVWx6jNN8iH/nlH/3yKAHb1/vL+dG9f7y/nTfIh/55R/98ijyIf8AnlH/AN8igB29f7y/nRvX+8v503yIf+eUf/fIo8iH/nlH/wB8igB29f7y/nRvX+8v503yIf8AnlH/AN8ijyIf+eUf/fIoAdvX+8v50b1/vL+dN8iH/nlH/wB8ijyIf+eUf/fIoAdvX+8v50b1/vL+dN8iH/nlH/3yKPIh/wCeUf8A3yKAHb1/vL+dG9f7y/nTfIh/55R/98ijyIf+eUf/AHyKAHb1/vL+dG9f7y/nTfIh/wCeUf8A3yKPIh/55R/98igB29f7y/nRvX+8v503yIf+eUf/AHyKPIh/55R/98igB29f7y/nRvX+8v503yIf+eUf/fIo8iH/AJ5R/wDfIoAdvX+8v50b1/vL+dN8iH/nlH/3yKPIh/55R/8AfIoAdvX+8v50b1/vL+dN8iH/AJ5R/wDfIo8iH/nlH/3yKAHb1/vL+dG9f7y/nTfIh/55R/8AfIo8iH/nlH/3yKAHb1/vL+dG9f7y/nTfIh/55R/98ijyIf8AnlH/AN8igB29f7y/nRvX+8v503yIf+eUf/fIo8iH/nlH/wB8igB29f7y/nRvX+8v503yIf8AnlH/AN8ijyIf+eUf/fIoAdvX+8v50b1/vL+dN8iH/nlH/wB8ijyIf+eUf/fIoAdvX+8v50b1/vL+dN8iH/nlH/3yKPIh/wCeUf8A3yKAHb1/vL+dG9f7y/nTfIh/55R/98ijyIf+eUf/AHyKAHb1/vL+dG9f7y/nTfIh/wCeUf8A3yKPIh/55R/98igB29f7y/nRvX+8v503yIf+eUf/AHyKPIh/55R/98igB29f7y/nRvX+8v503yIf+eUf/fIo8iH/AJ5R/wDfIoAdvX+8v50b1/vL+dN8iH/nlH/3yKPIh/55R/8AfIoAdvX+8v50b1/vL+dN8iH/AJ5R/wDfIo8iH/nlH/3yKAHb1/vL+dG9f7y/nTfIh/55R/8AfIo8iH/nlH/3yKAHb1/vL+dG9f7y/nTfIh/55R/98ijyIf8AnlH/AN8igB29f7y/nRvX+8v503yIf+eUf/fIo8iH/nlH/wB8igB29f7y/nRvX+8v503yIf8AnlH/AN8ijyIf+eUf/fIoAdvX+8v50b1/vL+dN8iH/nlH/wB8ijyIf+eUf/fIoAdvX+8v50b1/vL+dN8iH/nlH/3yKPIh/wCeUf8A3yKAHb1/vL+dG9f7y/nTfIh/55R/98ijyIf+eUf/AHyKAHb1/vL+dG9f7y/nTfIh/wCeUf8A3yKPIh/55R/98igB29f7y/nSgg9CD9KZ5EP/ADyj/wC+RTkREzsVVz6DFADqKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiuY+Jc01v4K1GW3mkhkHlgSROVYZkUHBHTg1heK9Kg8MaHcavpOuanFe2+1oY5r9pknbIwhRid2enFAHolFcvdeMUt3uEi0fUrtbNQbyW3jXZC23cV+ZgWIHULmtDT/ABFZX+ppY2/mFpbNL2CUgBJomOMr3yOMjHcUAbFFcP4314XHh/WI9Oa4ik0+8t4HuFO0FzIhZVIOeAcH60ur6eNZ+IZsLm8v4raPSVmCWt08Q3+aRk7SM8UAdvRXETR3vg/WtKEWo3d7o+o3AtJILyXzWgkYEoyOecEjBBrt6ACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiivN/jjq+paPoGnzaVfT2kj3e1nhcqWGxjg/lQB0PxKtpbzwVqNvbwyTySeWBHGpZm/eLnge2asWHgvw1YXMd1aaLaRzxnKPsyVPqM9DXzf8A8Jv4q/6GHUv+/wCaP+E38Vf9DDqX/f8ANAHsmrveXV9rVrq3/CQPdNK6adaWIdLeSIr8hLLgdc7ix4qKSabSvBHhvxDDazLeaIi21xbyxmNnVgI3TB6/NtI+leQf8Jv4q/6GHUv+/wCahu/FniK9jWO71q+mRXWRVkmJAZTkH6g0Ae66zod1ZfDQWQikuNQlmhnuRGhZnlaZXc4Hpz+Aqzq9/wD2N8Qjf3FjqE9tJpKwh7W0eYB/NJwdo44rwf8A4TfxV/0MOpf9/wA0f8Jv4q/6GHUv+/5oA95me+8X61pTJpt3Y6Rp1wLt5ryPy3nkUEIqoecAnJJrtq+UP+E38Vf9DDqX/f8ANH/Cb+Kv+hh1L/v+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KKKKACiiigAooooAKKKKACiiigAooooAKKKKACkPApajkbjAoAjp4k9RTKKkZL5i0eYvvUVFO4iXzF96PMX3qKii4EvmL70eYvvUVFFwJfMX3o8xfeoqKLgS+YvvR5i+9RUUXAl8xfejzF96ioouBL5i+9HmL71FRRcCXzF96PMX3qKii4EvmL70eYvvUVFFwJfMX3o8xfeoqKLgS+YvvR5i+9RUUXAl8xfejzF96ioouBL5i+9HmL71FRRcCXzF96PMX3qKii4EvmL70eYvvUVFFwJfMX3o8xfeoqKLgS+YvvR5i+9RUUXAl8xfejzF96ioouBL5i+9HmL71FRRcCXzF96PMX3qKii4EvmL70eYvvUVFFwJfMX3o8xfeoqKLgS+YvvR5i+9RUUXAl8xfejzF96ioouBL5i+9HmL71FRRcCXzF96PMX3qKii4EvmL70eYvvUVFFwJfMX3o8xfeoqKLgS+YvvR5i+9RUUXAl8xfejzF96ioouBL5i+9HmL71FRRcCXzF96PMX3qKii4EvmL70eYvvUVFFwHtJ6CmUUUhiqpY8VKqgdqEGFp1NIQUUUUwCiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAayg9qiZSp5qemuMrSYDqKKKYBRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFYc/jHw1b3RtZ9c09JwcFDOvB9DVL4nvfR+BdWbTC4nEQyY/vBNw34/4Dms/wAJWXgXUdAtbbT7fSbhWhUOkioZS2Od2fmzn/61AHbRSxzRrJE6ujDKspyCPY0+uU0bSI/AWgarIl1Nd2EJkuobdhgwqASUUk89PaqVv8QpNRs47vQvDep6jBsDTSR7VWNiMlASfnYd8UAdxRWLpHijS9V0F9ahmMVpEG8/zhtaEr94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KKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooACARg8ikAAGAMClooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAopssiRRtJK6oijLMxwAPc1jvBquq2+oW91KdMiMwW0nspQ0xjGMsSQQM+mOBQBtUVmNZX0N7b3EWpTPawwFJLRo0YzsBw2/ghv0PtU2j6gNU02C9FvcW3mjmG4TY6EHBBH1H40AXaKKKACiiigAorJ0/WTeeINV0ryNn2BYW8zdnf5ik9McYxSXmsm28Sado/kbvtkE0vm7sbPL28Yxznd+lAGvRSbhkDIyenvQSAMkgAdzQAtFICD070BgRlSD9KAForP0TV4NZtHubVXWNJ5IfnGCSjFSfpkGr+4ZIyMjqKAFopCwGMkDPAz3ozQAtFIGU9CD9KR22qduC2DtXOMn0oAdRVPS7i6n06GfUrUWVywJkg80OIzn+8ODxVvOelAC0UgYEZBBHtVXVb0afpt5d7Q7W8DzeXnG7apOP0oAt0VU0i8/tHSrK+KeX9pgjm2Zzt3KDjPfrVugAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiuSTxRq2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wxzX3ki3TYDlVx1bJO7/AArr/AkWoW/huGDVJEknikkRSs4mwgY7QXHUgYB+lYeqnStUvTfSaH4nt7pkEck1pBLC0ijorbSMj610nheSzGni007TLvT7a2wqRXMBjznnIz19z6mgDZooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAopkke8D53XH904pn2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdPjj2A/O7Z/vHNAD6KKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooprusaM7kKqjJJ7CgBs00UETSzyLHGoyWY4ArGPie3lYrp1pd3uP4oo/l/M1TtLd/E9yb293DTY2It4Ogkx/E1dPHGkSBI0VEUYCqMAUAc3c+J7y2UvLoV2iD+Jjx+gql/wni/8AQOP/AH+/+tXZ1y/ijwzDdwvd2EYjulGSijAk/D1oAqDx4nfTm/Cb/wCtU0Xjq0YgS2c6D1Vg3+FcJRSuM9Y0zWrDVBi0nBccmNuGH4VoV41DLJDKssLskinKspwQa9L8L6z/AGvY/vcC5iwsgHf0P40CNqiiimAUUUUAcx8StQvNL8F6jeadcNb3MflhJVAJXMig9eOhNVx4W1U9PHOsf98Qf/EU34vbf+Featv+7iLd9PNTNc/aXPwis7qG6tptLjnhcSRuGfKsDkGgDvYNc08395prXW27sYllnEqlPkI++CRgjjkjgVTm8ZaJDpNpqbXEpgvSRaosDmWf/cjA3Ed846c1xXxDhfxZqqxeHLf7TJplr5t9KjlBcQvhha5HUuATjtx61ck1vTE8SeHvFDsItAl0yS1imZMJZzFlO1/7nAK/higDR8U+LornwVqGo+HrySK5tpoYpA8RSWFj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7jNxLvYnYXJbaM9AoIGPategAooooAKKKKACiiigAooooAbI6xozyMFRRlmY4AHqaztL1/SNXlki0zULe5kjGWWN8nHr7j3HFU/HlrcXvhLUbezjeWVkBMSfekUMCyj3Kgj8apRa5oepXkEul2ct3dWltKySQQFTbLt+4ScYZsABeeR0oA6yivI7bU79rbVTZXF2I5NDlnx9pmmZJwRjLOBiQbiCF4re1WGPTrzRoNRv9Uj0mSGSSWdbiUs9ydm0My8gY3ELwM9qAO2sb221C3FxZyiWEsyhwD1UlT19CCKsV5XbtND4P0VpL2W3QT3ZeGdpoBOfMbG6SMZRh1APBJ9q9D8PTvc6FYTyxXMTvApKXRzKOP4jgZPvigDRooooAKKKKACiiigArO1XXdK0do11O/gtmkBKrI2CQOpx6e9aNcZNfWeheMtWutcJhhvLaAWlw8ZZSqhg8YIBwdxzjvmgDoL7xBpGnpA97qNtCtwpaFmkGJFGOR6jkfnVgalZHTzqK3cJshGZDcBwU2jqc9MVwOpT29pqHhy4smfQbQ2d1s8613+WGZCFKds9QKjgN3P4W0/RLSxMrXmoyljIGhW5gSQyPIcg7A5wMY/i44oA9Jt54rm3juLeRZIZVDo6nIZTyCKqnV9OFnLeG8hFtE5jklLjarBtpU++eMVjeBHubeyu9IvoPIm0+4ZUQNuURP8APHhsDIAO3p/DVK70ZH+IEEe6QWE0R1Ga3C/u3uYyqKx/BgcdyoNAHaVQs9a06+kgjtLpZGuI2liAB+ZFbax6diQK4Pwzc6rL4htvtd8yX/2mYXts7zsTHlsDZt8tFA2lWB59TmoNFXUIbTT30+J/tiaHf+QCv/LTzgVH1zQB6lRXB+D7gSa5bJpd5qF1atp5bUDdvIwS4yu37/3XPz5UccdK7ygAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigApMUtFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFU9T0uz1WFIL+Iywq4fyy7BWI6bgD8w9jxVyigAooooAKKKKACiiigAooooAKKKKACjFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAP/Z" alt="Receipt — Adam Watson payment to R B BRIFFA (RBK), $1,000, Osko" class="w-full h-auto block" loading="lazy" /><div class="text-[0.42rem] tracking-[0.12em] uppercase text-paper/25 px-2 py-1.5 border-t border-paper/[0.06]">Payment to R B BRIFFA &middot; &minus;$1,000 &middot; Osko &middot; Rcpt N270861246937</div></div>
                        <div class="border border-paper/[0.07]" style="background:#0c0804"><img src="data:image/jpeg;base64,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Dp8S+KF8P3lhEkV0p2ecjRrtKbHHOSM8Cug+F93q9/4ThvdcnlnmnlkeF5kCOYc4QkAADIGfxoA29cldYYYY3ZPPk2MynBCgEnHvgYqHTdO0u8sLe6WwjAmjVwHG5uRnk0/XvlW0lYgIk+HY9FDKy5PtkirOj272mlWdtKVLxQqjFTkZA7Utbl2jyN9bjP7F0z/nxg/74FH9i6Z/z4wf98Cr9FMgyL7SbW3tpbixjFtcRIXR4+OQM4I7irlhfQ3i7UceaqI0id13KCKTVpkg024aQgAxso9yRgAVX0fS1spHumZjNPDEjL2XYoFAGpRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAZ1zoemXWr22r3FnG+oWqlYJzncgOcgfmfzqLxB4a0bxJbpBrdhFdohyhfIZPowwRWtRQBl6B4e0jw7atbaLYxWkTHc4QElz6knk/jWpRRQBnTaHpk+swazNZxtqNuhjiuDncinPA7fxH86h8Q+GNF8SxJFrenxXQj+4zZDJ9GGCPzrXooAyPD3hjRfDcLxaJp8VqJPvsuSz/AFY5J/OteiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAqlq+lWGtWL2Oq2sdzauQWjkHBI5Bq7RQBjS+FdBl0SPRJNLt20yNtyW2PlU5JyO+eTz70XfhTQbzR4NIudLt5NPtyDDbkfKh55HfufzrZooAqQabZW9lDZQW0cdtAoWKJRgIB0Aq0qhVCqMAcAUtFAFe/sLPUbdrfULWG5gbrHNGHU/gaTT9PstMtxb6daQWsAORHBGEXP0FWaKAMy68O6JeXgvLvSLCa6Bz50lujPn6kVpAADA6UtFADZESRGSRQyMMFSMgis/+w7AfdikUeizOAPwBrSooAzf7Esf7s3/AH/f/Gj+xLH+7N/3/f8AxrSooAowaRYwyrKsJZ15VpHZ8fTJNXqKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiio7ieK2gknnkSOKNSzu5wFA6kmgCSiuW8M69qPiPU5761gSHw6imO3klUiW6fP319E6jnrXU0AFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABVSx1Ow1BplsL23uWgbZKIZAxRvQ46VheJr/TtWjfQbbxNbWF7NKsUixyqZipPzIBnIYjjPWuJ8KaFpui6lquqW+qDR003WHtWeVwY5oML+7bccZz0PrQB69RVTTdSsdUgM+m3kF1EDtLwyBwD6ZFW6ACiiigAoorlfGuq36zWGgaHIItT1RmHn4z9mhUfPJ9ew96ANHWPFWgaJJ5Wqata28v/PNny/8A3yOado3ibQ9cYrpOqW1045KI/wA3/fJ5rAktPDPgK0tx9gku7+7fYhWLz7q6k6k5PPuegFA07w548097u0t5LG/t5DH56R+Tc2ko7HH4ccg0AdtRXMeCNYvb2G90zWdv9raXL5FwyjAlUjKSAf7Qrp6ACiiigAooooAK8/8AH7C48R6Rp2vyyW/hmcZdk4Se4B+WOVv4Vxz7n9PQKq6np1pqthNY6hAk9tMu143HBH+PvQBPFGkUSRxIqRoAqqowAB0AFPrlPCtpreh38miXm++0iOPfZX7MN8a5x5UnqR2PoPy6ugAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA4P4ZabYz6be3k1lbSXS6tdFZ3iUuCJDjDEZrU8OeHnt5NfXV7W3mgvtUe6hRwJAUIXBIPQ8Gsb4da3pOnaVqFvf6nZWs41W6JjnnVGA8w9ic11X/AAlPh7/oO6Z/4Fx/40AYPgiCG18W+MYLaKOGFLm32xxqFVcxdgK7WuJ8DXMF54r8YXNpNHPA9zb7JYmDK2IucEcGu2oAKKKKACuNbA+La+d30Q+Tn1835sfpXZV5rrviTSbD4oCXU7ny10zTvLijRC7ySynJACgk/KB+dAHca9LFYadcaqbIXVxYwSSQgJl87fuqcZGenFZPgPSrqzsbnU9TkVtQ1eUXc6opVYsqNqAHngVDF448O6va3FodXfSbpkZCt0Ps80WRww38Z7jrTL/x1pdpElhokza7qpUJFBakSFmxjc7D5VHcmgBNJw3xT15ofuLp1ss2P+emWI/HbXZVzvgvQrjR7K4uNTlWbVtQlNxeyL03Hoi/7KjgV0VABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAZV14b0O7ne4utHsJpnOXkkt0LMfc4qP8A4RLw5/0AdN/8BU/wrZooArWGn2enQ+Rp9pBbRE7tkMYQZ9cCrNFFABRRRQAVXWws0u3u0tYFuZMb5hGN7Y4GW61YooAp3+ladqIH9oWFrdY6edCr4/MU6x06x09ClhZ29sp6iGJUB/IVaooAKKKKACiiigAooooAKKKKACiqtxexwkqPnb0FUn1Cdvu7VHsK8vE5xhMO+Vyu+y1NI0pSNeisX7bcf89D+QqWLUZFP7xQw9uDXPT4gwk3Z3Xqv8inQmjVoqKC4jnGUPPcHrUtezTqQqRUoO6Zk01owoooqxBRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABWfqF2VJiiOD/Ef6VbuZfJhZ+4HH1rDJJJJ6mvns9zCVCCo03Zy39P+Cb0YKTuxKKKybPW4tS1HUbCyhnD2Q2NcyREReZ/dB7kcE18hGEpJtdNzrvY1qKxrKDxFDpN0t3fWN1qbZNuwhMcScDAYDkjOeamsNQnis7NfEBs7PULhzGsUcuVdhnAUnrkDOKqVFq/K0/T+thXNRGZGDISCOhrZs7kXCc8OOorFqW1lMMyv26H6V35VmEsJWSb917/AOZFWCkvM3aKB0or784QooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigCjqzYiRfVqy61NWXMSN6NWXXwmfX+uyv2X5HbQ+AzPEbasulsNASNr1pEUNJjai7huYg9cDPFaYGB6+p9ay9es9Ru1sf7KuxbvDeRyzZYgSxDO5Dj1rUBB5ByD0xXmSt7OKVuvr8/0NOoVR1jSrHVrZYtRtxMkUizIASGVl5BBHIq9VbUrxNP065vZFZ0t4mkKoMlsDOAKmm5Ka5NxvbUh0LV7bXdKg1Ky3iCfO0SDDDBIOR9RV+qGgyLPo1nOlitiJohJ9mUAeXu5xwBzz6VfoqpKpJJWVwWxu2rb7eNj3UVLUVqu22jB/uipa/SsPf2ML72X5HnS3YUUUVsIKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigCG7i86BkHXqPrWH9a6KszULUgmaMcH7wH86+cz7ASqxVemrtb+n/AOihNLRmdJGssbxyDcjqVYeoPWufSFvB2gJBYWuo6tDFKdsSMGkijJJwM9QvQDrzXRUV8nTquPuvWPVHS0ZF54htrO5sLaW0v2lvQrII7YsIwSB85H3cZ5p6Ray3iB5ZLm2TSEi2xwImZJXPVmJ6Y7Y61qZop+0il7senXX7uwWCpLeIzTKg7nn6UwAsQAMk9AK17G28hNzffbr7e1duWYGWLrLT3Vv8A5fMipNRXmWRwMCloor9BOEKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAKVxYJIS0Z2N+lUnsp0/g3D1U1tUV5GJyXC13zW5X5f5Gsa0omELecn/VP+VTR2Ezn5sIPeteiuanw7hou8pNlPES6Fe3tY4OVGW/vGrFFFe5So06MFCmrIxbbd2FFFFaCCiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAzfEepnRdB1DVBF532O3eby923dtGcZ7Vxdh438Z6hYwX1p4E822njEkbjUoxuUjIOCK6T4i/8iHr/AP14Tf8AoJri/B/xQ8MaZ4T0mxuZrv7Rb2cccipaOw3BQDg4waAOw8HeMYPEsl3aS2U+napZEC5srj7yZ6EHuPf/AOtXTV5Z4ZOs6z4n8ReM9L0uSCOayW106G9/dm4YbfnYdh8v64qtrX9u6Lok+rXvxCRdchjMzafuh8hmHJiCdT6ZoA9corze78UalBeeC/EEk7R6Rq8SW95bcbI5ZFyj56jknv0FavjzVdQ/tTQfD2i3L297qNzvmljALR26cueemeg+lAHZ0V5lPdeJtZ+JOu6Bp+svY6bBBBI0qxqzxAoPljz0LE8k5xiqjzeMdJ8YL4OtteN3FqNuLiHULuINLaICd+B0Y8YGeORQB6xRXmxk13wd4x0KzudeudX0zWHeB0u1XfFIBkMpA6c9PrSeKPEtxqHjKbw3b+Ibfw/Y2MKyXd27ossrsAQiFuBwQSaAPSqK8v8ADniK50nxvZ+H28Sw+ItN1KJ2gn8xHlt5FGdrFeoIHf8ApUegv4p8U6/4msBr81hpljqUkaywopmPJxGpIwqgDJPXkUAeqVlafr9lqGualpFt5huNNEf2glcKC4JAB78D9a4/w1ca6niHXvBupa1NctFaLPZ6lsUTRq3HPYkEj8qwPC3h3VLjx34ttYvFWpQTW723m3CRx7rjKEjdkY46DFAHslZX9v2X/CSjw+vmG++ym6b5flVN20c+pP8AKtJlJiKByGK43DqPevHo/Dmqn4ry2H/CVakLkaOJDe+XH5hXzMbMYxjv60AeyUVwXinU9Zi1PQ/B2iX5TULuEyXWpSxhnSJBgsF6bmINUdak174f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pXrOgRtFoWmxOMMlrErA+oQV4darqPxW8cxXslq0Ol25UP3WOJTnbu6FmP8AP2r38AAAAYA7UALRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBw3jXwVda/wCJtD1S0e0jhsZA1wsgO6Qb1bsOeAetdwqqihVAUDoAMAUtFAEVzbW90gS5gimQHIWRAwB/Gq39j6X/ANA2z/78L/hV6igCj/Y+l/8AQNs/+/C/4VcjjSJFjjRURRhVUYAHoBTqKAKV9pGm6iQ1/p9pckdDNCrn9RUtnZWljH5Vlaw28f8AdhjCD8hViigAqC7s7W9i8q8tobiP+5KgYfkanooAoWWiaTp8nmWOmWds/wDfhgVD+YFX6KKAKsenWMU3nRWdukuSfMWJQ2T15xVqiigDPuNC0e5n+0XGlWMs2c+Y9ujN+ZFXkRUUKihVAwABgAU6igAqlfaRpmoOHv8ATrS5cdGmhVyPxIq7RQBFb28FrEIraGOGJeiRqFUfgKloooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACisXxXLLa2EF9DI6i0uY5JQpI3R5wwPqMHP4Vn+MZ7yWWG302eSOSCCS9fy2xuCY2qfYkn8qAOqorn9WvWvU0WG0kdBfTpKSjYPlKu9un4D8akl8T20fmyra3clnExWS7SMGNSDg98kDuQKANyisy+1qG2mit4IZry4lTzFit1BIT+8SSABVHw7qB1DWtZcGYRoYQsUoIMZ2ncMdjkUAdDRWDrsk13qthpEM8kEcyvNcPE21yi4AUHtkmo7FZNI8Qppq3E81ndW7SxCeQu0bqRkAnnBB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4UtLIq2t/wBqRvAE++kf8RPoM7fyPpU3gzbJ8XfGklr/AMewjgSQjp5uBn8chq5e3+w+H9cvbDwTpeqa74qDNbyalqHzJbHoTnp+PH17V6T8PvCn/CK6M8VxN9p1K7kM97c9fMkPp7D/ABPegDqKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKRlVsblBwcjI6GlooARVVc7VAycnA6mloooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAMXxjLJB4cu5IJXikGzDo2CMuBwaytbtU0fTZb+y1m9FzEAY0luvMWQ5+6VPXNanjOJ5vDd5HHG0jNsG1VyT869qztV0O00e7tNY03To2WBttxBHHuJQ/xqP7ynnjtSA1Z9dSGb7PHZ3VzcJGrzx20YbysjOCSRz7dadJr9iunQXyNJKk7bIo40Jkd/7oX1GDn0xXP3FvFZ61qEt/NqkMN26zQS2Zfa/ygFSFBwwx3qSO0awg0jUYbK8EFvPM80Mh8yVRICN5H646jNAG7aa5bTfaFuI5rOW3j8yWO5XaQn97IJBHFRW/iK3lmgWW1vLeK5bbBNNFtSQnoOuRntkCqmp3DeItK1Kz0+2mCGDCTyoYxI+c7QCAe3XpzWbbQ2d5JZQBdcmnWVGeCd3CQFTnLEjGBjt1oA2E1Sz0+LV7t5buRLe5xMJCG2EheEH93kfrUsXiK3eeFJLa7hhuG2wXEsW2OQnoOuRntkDNYOrxSJoniktGw33ilNwwGH7vp7Vd1S9/tq3ttNtbS5S5M8TTCSFlEAVgSSxGD0wMZzmgCa3126fxJcWjWN75CxR7U8tfkJZgXPP3Tj9OlbWp30WmWE17cBjFCu5tgycVkPOLDxdNLcxyiK6too4pFiZlLBmyCQOOo61Y8YRvL4av440Z3aMYVRknkdqYBD4ht5Lq3ie2u4Y7ltsE8sW1JDjIA5yM9sgZq9Z38V3c3cEQcPay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gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigApGOFJoJx1qJ23H2pANoBI6UU4ITSGG9vWje3rS+WfWjyz609QE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oATe3rRvb1pfLPrR5Z9aAE3t60b29aXyz60eWfWgBN7etG9vWl8s+tHln1oAYST1opzIRTaQD41zyalpAMAClqhBRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABUUi45FS0hGQRQAtFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRR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vfCN3p+raJe6TczNG1v9oKuk2HUkBl4DAc4Nd/4h8R2XhzT7eW6WWaadhFb20C7pJnx0UUAblISBjJ61yFl45ZdUtbDXtDvtHa8bZbSzlXjkbspK9D7Vzev+I9U/4WFojf8ACP6kPs6XIjtfMTNzxjeozjgc884NAHqlFcxqfjGHStKsbi/068j1C+cx2+mKA87sD04OPQ5z3FQ6Z41aXWLfSta0W90i5uwfspnKskpAyQGU8H2oA6MajZHUDp4uoftoTzDb7xv2+uOuKda31peSTx2tzFM9u/lzKjAmNvQ+hrAW50n/AIWG1oNO/wCJt/Z3nG99Y923Z+dZHgK4itNS8cXNw4SGLVpHkc9FULkmgDvqK4U/EV/sf9qjw1qp0T732/Cfc/v7M52+9dpaXMN7aw3VtIJIJkDxuOjKRkGgCaiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAMXxb4hh8MaT/aV1azXFuJFSTysZQNxuOe3+NZV54C8H69Et4mm2485Q6XFmxj3Z7jacfpXVXVtDd28lvdRJLDKpV43GQwPYiuNPwv0NC62l3q1pbucm2t71lj+mKAOe0S5uU8MeO9Ga9lvrHTElitLiVtzbSjZXd3xgV13wultZfAWj/Yyu1INjhe0gJ3Z985P40a1oun6D4A1ix0m2WCBbKY7VySxKHJJPJNYfhnwLpWp+F9JuzNqFlJcWMX2lbO6aJZztHLKOCfegDmNTSW48MfEWfTstYvqSFSn3WCsPNI9uldVaaP4luNBinj8b24017UEH+zYtgi2+uegFdppuj6fpmlrpdlaxx2SqV8rGQwPXOeue+a5o/DPQMtHHLqUdk7bmsI71xAfbb6fjQBy3ibTbbTvhBp9la36ajai9i2XCLhZFaUngZPHOK7/xyijwTraBQFFhKAMcDCGptX8Nabq2jxaTPE0dnC0bRxwNs27D8oHtV7U7GHU9OubC63eTcxNFJtODtYYODQB5jKwjX4YT3Z/0NVCszfdEhiXZn8eldL8X5baP4f6oLormRVWIHqZNwxj34J/Otu48M6VdeHotCurfzrGKNY0V2+ZdowCG6gj1rF/4VtockEsV5NqV6GjMaG7u2k8kHrszwD70AdB4Z/5FvSv+vKH/ANAFcr4hKxfFjw1Jd8W72c8cBbp53p9SMV21lbR2dnBaw58qCNY0ycnCjA/lVHxDoGneIrEWmqQGRFYPG6sVeNh0ZWHINAHI/HGW2TwUY5yvnSXUfkA9dwOSR/wHP51T8eQ3snjzwobbUF07fBLHBdPCJFSXHTaeMkYFbb/DXQp7aWK+l1G9eQBRNdXbSPGoIOEJ+70GeK6DXdB07X9O+w6pbiaEEMpyQyMOjKRyDQBw/iXw1q1xDZReJfG1v5H2yNoVewSMtKD8oUg5z1rS8RHHxU8KZ4zbXQGfXbWhpXgPSNO1CG+klv7+4t/+Pdr+5aUQn1UHgH3q94l8L6d4kS3+3efHNbMXguLaUxyRk9cEUAZXjHV72HXtH0XRobNdSvRI6Xd2m5YEUZO0Dkk1zPiK01iz8X+DxreuxahI9+SkMdqsIjGBk8Ek56c12V94K0vUNKsrC8lvZXsmLQXhuD9oQk5J39f8iqEvw10GaECaTUJbsSCRb97tjcKR0w56D2AoAhT/AJLM/wD2Ax/6NrP8MNYqPiCdVYrYHUZRcMAThCuCeOeldpFoFnFrw1oGU3otBabmfIKA56eue9Jpnh+w02TU3hRn/tOZprlZW3KzEYIA9MdqAOJtbTxN4e8Nrd6DrWn6zoUFuZYoLyEq5hAzgOOvHrXdeGtSi1jQLDUoIfIjuYVkEX9zPaueb4aaCd0Uc2pR2LtuawjvXEB9tvp7Zrrra3htbeK3to1jhiUIiKMBVHAAoAlooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooACARg8ikAAGAMClooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAopssiRRtJK6oijLMxwAPc1jvBquq2+oW91KdMiMwW0nspQ0xjGMsSQQM+mOBQBtUVmNZX0N7b3EWpTPawwFJLRo0YzsBw2/ghv0PtU2j6gNU02C9FvcW3mjmG4TY6EHBBH1H40AXaKKKACiiigAorJ0/WTeeINV0ryNn2BYW8zdnf5ik9McYxSXmsm28Sado/kbvtkE0vm7sbPL28Yxznd+lAGvRSbhkDIyenvQSAMkgAdzQAtFICD070BgRlSD9KAForP0TV4NZtHubVXWNJ5IfnGCSjFSfpkGr+4ZIyMjqKAFopCwGMkDPAz3ozQAtFIGU9CD9KR22qduC2DtXOMn0oAdRVPS7i6n06GfUrUWVywJkg80OIzn+8ODxVvOelAC0UgYEZBBHtVXVb0afpt5d7Q7W8DzeXnG7apOP0oAt0VU0i8/tHSrK+KeX9pgjm2Zzt3KDjPfrVugAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiuSTxRq2qyzP4Z0RLyxhkaP7Xc3QhWZlOD5Y2kkZ4ycCgDraK5L/AITTGnCaXTZYLyPUIrG5tJXwYmdgNwYDDDByCOtdYGBzgg46+1AC0Um4ZAyMnoKCQOSaAFopAQRkHIoDKSQCDjrz0oAWikLAdSBn1paACiiigAooooAKKKKAMXxh9lPh+4jv7Ke9tZWjilggzuKs6jPHOBnJ9ga2VAVQFAAAwAKGG5SASMjqOorEtLi80eLT9P1H7ZqksztGb6K3AVBn5TLg8cHqBjIPSgDcrK0syNq2rt/aaXUPmRqlsuM2jBBuU/XIb8ahl1i6vrK+/sCzaS8t5fJUX0bwRk5wWBI+ZRyeOuK0bCxt7JZTBBHE9xIZpzGMB5CBlv0oAtUUUUAFFFFAHJaJIqfEXxNC5xJJb2kiKf4lCspI/Gk1R1k+JehxIdzw6fdPIB/CrFACfqQa1dd8M6Zrk0NxeRyx3UIKxXNvM0Uqg9RuU9PY0uheGtM0J5pbKORrifHm3E8rSyuB0BZjnHtQB59pXhzT7j4Y3Or3CySajHBczQXJkbfAUZyoTn5QCPxyc1tFF8SeItG07WmaWy/sVb37OWIW4mJCksB97A5x711lvoOn2+hPokUbCxeN42QuSdr5Lc9e5qHUfDOmaha2cEySo1koW2nhlaOWIAAcODnoBn1oA5/WtP0jQ9Du9Pt7m/eC6vIo0sLS4G5XfGIVJ5RWxk5PTOKy9J0xIfGcelT6FDplhfabKZrJbrzVm2umGYDgEZIz3rr18H6KNKm0027tFNKJpJXmYytKOjmTO7cMDBzTLTwbpNrqFvqKG8e+gYkXMt3I8jgjG1iTyvt0oA5Dw9Z22i+A9c1rSrOOPUoGvkjmUZYKsjAD8AB+VVrbRdThs9Lv9O0W3srtZIZDqj6sGa4Ukbt+R824E8e4xXoNh4a0/T766urXz1W6LGW2MzGAs33m8snAJqpaeCdEtLiGWOO5aK3k8yC1kuXeCF+xWMnAx29KAMfStHsPE+s+IbjXYjdTWt+bWCN3YC3iVVKlQDwTknd1rn9Nmkj8FCzivpjb3niRrOe7EnzmFpCCd3bdgDPvW54g0mZ9fu7m78PXd5HMFEU+lXZhMygfcnXeucHv6Vq+GfC0UHhN9J1i0gK3Usk01shykZdtwVSP7owMj0oAz73SrLwx4o8PHQYvsovp3t7m3jY7ZYxGW3EE9VIHPXmo/AGjWkkOoavcBprxNQvEhaRyRCu9gQo6DPOT710ek+FtN0q8+2xG5uLoJ5aTXdw8zRp/dXcTgfSr2maVaaXbS21mjLFLLJKwLE/M5Jbr7mgDzTTLGfUfDHhQJDb6nHDbyvNpM1z5TTgtgSDPDbT2PHNLqN6sPhsaXo1vf2vma1Ha3dhc3IQwBl3eUkgztRsDBBP3jXcSeD9HfT7KzSOeEWAItZoZ2SWIHrhwc4PpUkXhXR00m40x7YzW9y/mTmaRneV+PmLk53cDBzxigDlNK03U9H8QQ3Nlotto9sbWYT20d+JRcELlCEwOQRyR2NU49B0y9+Gs3iC6kc6tPYSXMmoGU7xIVJK5zjb/AA7emK7jSPC+naVd/bIjc3F0E8tZru4eZkT+6pYnA+lU5vAmgzPOGiuBbzFme0W5cQbj1YR5wDzn680AaPhP/kVtG/68IP8A0WtatQ2VrFY2cFpbgiGCNY4wTkhVGBz9BU1ABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAQX8cktjcRwnEjxMqH0JBxXPfDOaGTwRpccWA9vF5Myd0kUkMCOxzn866G9uPslrJcGKaYRjPlwpvdvYDua4PULbRb29lvV0LxRaTzczNZQyw+afVgpwT79aALXxDu7TVNIWzs7sGWHVrSCdoT80LFxxn1AP4UXGj2Ph7xl4dOjwm2F6biG5VXYiYCPcC2TyQRnPWmxnRItLg02HwxrsdrDOlwqpZOCZFbcGY5yxyOc9avXesWV5fWV7PoGvmeyZ2gIsnAUsu05GeeKAOM1+GC70TWtb03SLm5KNNImt3d6EkRkJH7pRyFUjAHGcV0E2nQa945sY9T3ywHQVlkh3EJKxk/iA6jnOKhmsPD88k/m+HvExt53Z3tPJlEBdureXuxnv8AXmr+mXWm6bcQXFvofiRpoLX7Ijy2sjnyt24A5PPPegDFu5pvD2k+NrLSJZLe3tJ4Ps4DE/ZllVd5XPQDJPtU3jTw1o+h6Vplxpam2mbUbWNmWVibkGQE78n5jxuz7VrS3EVz/aq6ZoOorfaqoEh1Gzf7O7Km0B+flUgY49awf+Ebe5+xRx+HNSsxazRzzyXd356xJGQxjt13nJYgAYA4oAfc295r3irX/tWgxaxHZzrbwxzX3ki3TYDlVx1bJO7/AArr/AkWoW/huGDVJEknikkRSs4mwgY7QXHUgYB+lYeqnStUvTfSaH4nt7pkEck1pBLC0ijorbSMj610nheSzGni007TLvT7a2wqRXMBjznnIz19z6mgDZooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAopkke8D53XH904pn2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdH2f/ptN/wB90ATUVD9n/wCm03/fdPjj2A/O7Z/vHNAD6KKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooprusaM7kKqjJJ7CgBs00UETSzyLHGoyWY4ArGPie3lYrp1pd3uP4oo/l/M1TtLd/E9yb293DTY2It4Ogkx/E1dPHGkSBI0VEUYCqMAUAc3c+J7y2UvLoV2iD+Jjx+gql/wni/8AQOP/AH+/+tXZ1y/ijwzDdwvd2EYjulGSijAk/D1oAqDx4nfTm/Cb/wCtU0Xjq0YgS2c6D1Vg3+FcJRSuM9Y0zWrDVBi0nBccmNuGH4VoV41DLJDKssLskinKspwQa9L8L6z/AGvY/vcC5iwsgHf0P40CNqiiimAUUUUAcx8StQvNL8F6jeadcNb3MflhJVAJXMig9eOhNVx4W1U9PHOsf98Qf/EU34vbf+Featv+7iLd9PNTNc/aXPwis7qG6tptLjnhcSRuGfKsDkGgDvYNc08395prXW27sYllnEqlPkI++CRgjjkjgVTm8ZaJDpNpqbXEpgvSRaosDmWf/cjA3Ed846c1xXxDhfxZqqxeHLf7TJplr5t9KjlBcQvhha5HUuATjtx61ck1vTE8SeHvFDsItAl0yS1imZMJZzFlO1/7nAK/higDR8U+LornwVqGo+HrySK5tpoYpA8RSWFjIgIZGGRkE9RXVw6pZzarcaXHITeW8SSyptPCuSFOeh+6a4LxrrGla54M1650eEui3Fqkl6sQCXLCRPut1cL0z+VXrnVrDw98SdRuNbuUs7e902AW803COyM+5QemfmHFAHSt4l0hLbUrmW8WODTJTDdySKVEbgA46c/eHTOc1y+p+N7e/wBX8PWukXNzA8+pKk8NxbPC0sJRzkB1GVyByK5hZW1DS9b1WG2nksrfxZFe3ERiO97dVTJ2dfRsegra8SeItG17xP4PGj3CXrRalue4hBKxAxt8hbsTjOOvy0AdXq/jLRdIvZLO5mnkmhUPOLa2kmECnkFygIX8a2rW7t7yzju7SVZr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FYTyxXMTvApKXRzKOP4jgZPvigDRooooAKKKKACiiigArO1XXdK0do11O/gtmkBKrI2CQOpx6e9aNcZNfWeheMtWutcJhhvLaAWlw8ZZSqhg8YIBwdxzjvmgDoL7xBpGnpA97qNtCtwpaFmkGJFGOR6jkfnVgalZHTzqK3cJshGZDcBwU2jqc9MVwOpT29pqHhy4smfQbQ2d1s8613+WGZCFKds9QKjgN3P4W0/RLSxMrXmoyljIGhW5gSQyPIcg7A5wMY/i44oA9Jt54rm3juLeRZIZVDo6nIZTyCKqnV9OFnLeG8hFtE5jklLjarBtpU++eMVjeBHubeyu9IvoPIm0+4ZUQNuURP8APHhsDIAO3p/DVK70ZH+IEEe6QWE0R1Ga3C/u3uYyqKx/BgcdyoNAHaVQs9a06+kgjtLpZGuI2liAB+ZFbax6diQK4Pwzc6rL4htvtd8yX/2mYXts7zsTHlsDZt8tFA2lWB59TmoNFXUIbTT30+J/tiaHf+QCv/LTzgVH1zQB6lRXB+D7gSa5bJpd5qF1atp5bUDdvIwS4yu37/3XPz5UccdK7ygAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigApMUtFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFU9T0uz1WFIL+Iywq4fyy7BWI6bgD8w9jxVyigAooooAKKKKACiiigAooooAKKKKACjFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAP/Z" alt="Receipt — Adam Watson payment to R B BRIFFA (RBK), $195, Osko" class="w-full h-auto block" loading="lazy" /><div class="text-[0.42rem] tracking-[0.12em] uppercase text-paper/25 px-2 py-1.5 border-t border-paper/[0.06]">Payment to R B BRIFFA &middot; &minus;$195 &middot; Osko &middot; Rcpt N270861226986</div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── SECTION 01: THE PROMISE ── -->
    <div id="the-promise">
        <div class="flex items-center gap-3 mb-4 reveal">
            <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Section 01 — The Consent Order</span>
            <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Case 2025/00005577 · 1 August 2025</span>
        </div>

        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-4 leading-tight reveal">A PROMISE THE<br><span class="text-gold">GOVERNMENT MADE TO A COURT.</span></h2>
        <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-8 reveal">"In August 2025, the NSW Land and Housing Corporation did not lose a case. It agreed to one."</p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-10 reveal">
            <div class="bg-ink px-5 py-5 text-center">
                <div class="stat-number text-4xl text-gold mb-1">1 Aug</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Consent order</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">2025</div>
            </div>
            <div class="bg-ink px-5 py-5 text-center">
                <div class="stat-number text-4xl text-gold mb-1">$77.95</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Rent cap / week</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Until repairs done</div>
            </div>
            <div class="bg-ink px-5 py-5 text-center">
                <div class="stat-number text-4xl text-hot mb-1">1 Nov</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Repair deadline</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">2025 — passed. Not done.</div>
            </div>
            <div class="bg-ink px-5 py-5 text-center">
                <div class="stat-number text-4xl text-gold mb-1">$291</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Compensation</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Ordered at tribunal</div>
            </div>
        </div>

        <div class="story-chapter reveal mt-8">
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">By consent, the NSW Civil and Administrative Tribunal recorded that the agency — the state body that houses some of the most vulnerable people in New South Wales — would, by <strong class="text-paper/70">1 November 2025</strong>, treat and remediate the mould throughout a South Coogee social-housing unit, repaint the internal walls, fix a leaking lounge-room ceiling, and complete a short list of other repairs.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Until that work was done, the Tribunal capped the rent at <strong class="text-gold">$77.95 a week</strong>, and ordered the agency to pay the tenant <strong class="text-paper/70">$291.80</strong> in compensation. The tenant was given leave to come back if the work wasn't finished.</p>
            <div class="border-l-4 border-gold/60 pl-4 py-2 mb-5" style="background:rgba(201,138,16,0.05)">
                <p class="text-[0.72rem] leading-relaxed text-paper/60 italic">That is not an allegation. It is a sealed order of a tribunal, made by consent, and you can read it in the evidence vault below.</p>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">The deadline came and went. The work was not done.</p>
        </div>
    </div>


    <!-- ── SECTION 02: NINE MONTHS ── -->
    <div id="nine-months">
        <div class="flex items-center gap-3 mb-4 reveal">
            <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Section 02 — The Adjournment Sequence</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-4 leading-tight reveal">NINE MONTHS OF<br><span class="text-gold">"WE'LL GET TO IT."</span></h2>

        <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-8 reveal">What the documents show next is a slow, documented drift — the sound of an order with no one to enforce it.</p>

        <!-- Timeline -->
        <div class="border border-paper/[0.07] mb-8 reveal" style="background:rgba(12,8,4,0.5)">
            <div class="px-5 py-3 border-b border-paper/[0.06]">
                <span class="text-[0.48rem] tracking-[0.22em] uppercase text-gold/60">Documented Timeline — Case 2025/00005577 · 2026/00090755</span>
            </div>
            <div class="relative">
                <div class="tl-item">
                    <div class="tl-date">6 Feb 2025</div>
                    <div class="tl-dot tl-gold"></div>
                    <div class="tl-body">
                        <div class="text-[0.62rem] text-paper/65 mb-0.5">Rent reduction put in place</div>
                        <div class="text-[0.55rem] text-paper/35 leading-relaxed">A rent reduction is put in place over the condition of the property.</div>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-date">1 Aug 2025</div>
                    <div class="tl-dot tl-gold"></div>
                    <div class="tl-body">
                        <div class="text-[0.62rem] text-paper/65 mb-0.5">Consent order made</div>
                        <div class="text-[0.55rem] text-paper/35 leading-relaxed">By consent, NCAT orders LAHC to remediate mould and complete repairs by 1 November 2025; rent capped at $77.95/week until done; $291.80 compensation ordered.</div>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-date">1 Nov 2025</div>
                    <div class="tl-dot tl-hot"></div>
                    <div class="tl-body">
                        <div class="text-[0.62rem] text-hot mb-0.5">Repair deadline passes</div>
                        <div class="text-[0.55rem] text-paper/35 leading-relaxed">The deadline passes. The work is not done.</div>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-date">4 Mar 2026</div>
                    <div class="tl-dot tl-gold"></div>
                    <div class="tl-body">
                        <div class="text-[0.62rem] text-paper/65 mb-0.5">Fresh application lodged</div>
                        <div class="text-[0.55rem] text-paper/35 leading-relaxed">Tenant lodges a fresh application to enforce the order (Case 2026/00090755).</div>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-date">15 Apr 2026</div>
                    <div class="tl-dot tl-hot"></div>
                    <div class="tl-body">
                        <div class="text-[0.62rem] text-hot mb-0.5">Landlord fails to appear</div>
                        <div class="text-[0.55rem] text-paper/35 leading-relaxed">The landlord doesn't turn up at all. The Tribunal sets the matter down for conciliation.</div>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-date">1 May 2026</div>
                    <div class="tl-dot tl-hot"></div>
                    <div class="tl-body">
                        <div class="text-[0.62rem] text-hot mb-0.5">"The landlord is inspecting"</div>
                        <div class="text-[0.55rem] text-paper/35 leading-relaxed">Adjourned because the respondent landlord is inspecting. Six months after it promised a court the work would be finished, the agency is still sending someone to look at it.</div>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-date">17 Jun 2026</div>
                    <div class="tl-dot tl-hot"></div>
                    <div class="tl-body">
                        <div class="text-[0.62rem] text-hot mb-0.5">Power fails</div>
                        <div class="text-[0.55rem] text-paper/35 leading-relaxed">The unit loses power. The property is a registered life-support address. Ausgrid had previously flagged a faulty main switchboard and directed it be replaced.</div>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-date">18 Jun 2026</div>
                    <div class="tl-dot tl-gold"></div>
                    <div class="tl-body">
                        <div class="text-[0.62rem] text-paper/65 mb-0.5">Another adjournment</div>
                        <div class="text-[0.55rem] text-paper/35 leading-relaxed">Matter adjourned again, by consent.</div>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-date">26 Jun 2026</div>
                    <div class="tl-dot tl-hot"></div>
                    <div class="tl-body">
                        <div class="text-[0.62rem] text-hot mb-0.5">Rent billed at $520 — urgent application lodged</div>
                        <div class="text-[0.55rem] text-paper/35 leading-relaxed">Rent billed at $520/week and the full amount taken from Centrelink. Urgent NCAT application lodged. Demand letter sent to the Minister.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="story-chapter reveal">
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">In March 2026, the tenant did exactly what the order allowed and lodged a fresh application. In April, at the first listing, <strong class="text-paper/70">the landlord didn't turn up at all</strong>; the Tribunal noted the tenant was entitled to bring his claim for the ongoing defects and set the matter down for conciliation.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">By <strong class="text-paper/70">1 May 2026</strong>, the file records an adjournment for a reason that says everything: <em class="text-gold/70">the respondent landlord is inspecting.</em> Six months after it had promised a court the work would be finished, the agency was still sending someone to look at it. In June, the matter was adjourned yet again.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">Each step is on the record. Each step is another month a family lived with mould the agency had been ordered to remove.</p>
        </div>
    </div>


    <!-- ── SECTION 03: LIGHTS OUT ── -->
    <div id="lights-out">
        <div class="flex items-center gap-3 mb-4 reveal">
            <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Section 03 — Life-Support Address</span>
            <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Ausgrid Ref. 66693 · 17 June 2026</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-4 leading-tight reveal">THEN THE<br><span class="text-hot">LIGHTS WENT OUT.</span></h2>

        <div class="border border-hot/30 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="flex items-center gap-2 mb-4">
                <span class="text-[0.46rem] tracking-[0.2em] uppercase text-hot">Critical — Life Support Address</span>
                <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-hot/40 text-hot/70 px-1.5 py-0.5 blink">POWER FAILURE</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">17 June 2026</div>
                    <p class="text-[0.58rem] text-paper/45 leading-relaxed">Power fails at the premises. Not a billing issue — a physical supply failure at a registered life-support address.</p>
                </div>
                <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">Ausgrid Note — Ref. 66693</div>
                    <p class="text-[0.58rem] text-paper/45 leading-relaxed">Ausgrid previously flagged a faulty main switchboard serving the block, directed the housing electrician to replace it, noting life-support customers in the affected units.</p>
                </div>
                <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">Never Replaced</div>
                    <p class="text-[0.58rem] text-paper/45 leading-relaxed">The responsibility to carry out the permanent repair sat with the landlord's electrician. According to the tenant, it was never done, and the supply failed.</p>
                </div>
            </div>
        </div>

        <div class="story-chapter reveal mb-8">
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">The property is a <strong class="text-paper/70">registered life-support address</strong>. We know this because of a note left by Ausgrid, the electricity distributor, for the housing electrician (Ausgrid reference 66693, reproduced in the evidence vault below). It records that the main switchboard serving the block has a faulty contact, directs that it be <strong class="text-paper/70">replaced</strong>, and notes that the affected units — including this one — were temporarily re-routed <em>"due to life support customers."</em> The responsibility to carry out the permanent repair sat with the landlord's electrician. According to the tenant, it was never done, and the supply failed.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">A household member is diabetic. The mould the agency was ordered to remove a year ago was, the tenant says, simply <strong class="text-paper/70">painted over</strong> rather than treated — and it has bled back through the paint, as the photographs show.</p>
        </div>

        <!-- Mould photo gallery -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 reveal mb-6">
            <div class="border border-paper/[0.08] overflow-hidden cursor-pointer group" onclick="openMV('mould-1')" title="View mould photo 1">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/mould_photo_1.jpg" alt="Mould photo 1" class="w-full object-cover group-hover:opacity-90 transition-opacity" style="height:160px;object-fit:cover" loading="lazy" />
                <div class="px-2.5 py-2" style="background:rgba(12,8,4,0.7)">
                    <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25">Exhibit 1 of 3 · Click to expand</div>
                </div>
            </div>
            <div class="border border-paper/[0.08] overflow-hidden cursor-pointer group" onclick="openMV('mould-2')" title="View mould photo 2">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/mould_photo_2.jpg" alt="Mould photo 2" class="w-full object-cover group-hover:opacity-90 transition-opacity" style="height:160px;object-fit:cover" loading="lazy" />
                <div class="px-2.5 py-2" style="background:rgba(12,8,4,0.7)">
                    <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25">Exhibit 2 of 3 · Click to expand</div>
                </div>
            </div>
            <div class="border border-paper/[0.08] overflow-hidden cursor-pointer group" onclick="openMV('mould-3')" title="View mould photo 3">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/mould_photo_3.jpg" alt="Mould photo 3" class="w-full object-cover group-hover:opacity-90 transition-opacity" style="height:160px;object-fit:cover" loading="lazy" />
                <div class="px-2.5 py-2" style="background:rgba(12,8,4,0.7)">
                    <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25">Exhibit 3 of 3 · Click to expand</div>
                </div>
            </div>
        </div>
        <div class="text-[0.52rem] text-paper/22 tracking-wide reveal mb-2">Mould on painted wall and ceiling surfaces — present despite a consent order requiring remediation by 1 November 2025. The tenant says the mould was painted over rather than treated and has bled back through.</div>
    </div>


    <!-- ── SECTION 04: RENT TO $520 ── -->
    <div id="rent-to-520">
        <div class="flex items-center gap-3 mb-4 reveal">
            <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Section 04 — The Rent</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-4 leading-tight reveal">AND THE RENT<br><span class="text-hot">WENT TO $520.</span></h2>

        <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-8 reveal">"Here is the part that should stop a Minister in her tracks."</p>

        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-4">The Rent Sequence — What Happened</div>
            <div class="space-y-3">
                <div class="flex gap-3 items-start">
                    <span class="text-[0.55rem] text-gold/60 w-28 shrink-0 pt-0.5">Ordered cap</span>
                    <span class="text-[0.65rem] text-paper/45">Tribunal order: rent capped at $77.95/week precisely <em>because</em> the repairs were outstanding.</span>
                </div>
                <div class="flex gap-3 items-start">
                    <span class="text-[0.55rem] text-gold/60 w-28 shrink-0 pt-0.5">Standard rate</span>
                    <span class="text-[0.65rem] text-paper/45">The ordinary subsidised charge for the tenancy: around $137 plus $8 for water — roughly $145/week.</span>
                </div>
                <div class="flex gap-3 items-start">
                    <span class="text-[0.55rem] text-hot/70 w-28 shrink-0 pt-0.5">Billed 26 Jun</span>
                    <span class="text-[0.65rem] text-paper/45">With the repairs still outstanding and the tribunal order still in force, the agency billed the tenant <strong class="text-hot">$520 a week</strong> on a single day's notice.</span>
                </div>
                <div class="flex gap-3 items-start">
                    <span class="text-[0.55rem] text-hot/70 w-28 shrink-0 pt-0.5">Centrelink seized</span>
                    <span class="text-[0.65rem] text-paper/45">The entire $520 amount was taken from his Centrelink payment. The tenant says this left the household with no income at all. Centrelink suspended payments to protect him.</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-8 reveal">
            <div class="bg-ink px-5 py-5 text-center border border-paper/[0.06]">
                <div class="stat-number text-4xl text-gold mb-1">$77.95</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Tribunal cap</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Per week — court ordered</div>
            </div>
            <div class="bg-ink px-5 py-5 text-center border border-paper/[0.06]">
                <div class="stat-number text-4xl text-paper/40 mb-1">~$145</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Standard subsidy</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">$137 + $8 water</div>
            </div>
            <div class="bg-ink px-5 py-5 text-center border border-paper/[0.06]">
                <div class="stat-number text-4xl text-hot mb-1">$520</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Billed on 26 Jun</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">One day's notice. Full Centrelink seized.</div>
            </div>
        </div>

        <div class="story-chapter reveal">
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Whichever figure you use, the contrast is the same: an agency that pleaded poverty of performance to justify a rent cap was, months later, taking nearly everything a tenant had.</p>
            <div class="border-l-4 border-hot/60 pl-4 py-2" style="background:rgba(193,68,14,0.05)">
                <p class="text-[0.72rem] leading-relaxed text-paper/60 italic">An agency that was ordered to cap rent at $77.95 because its repairs were overdue billed $520 — with the repairs still overdue — and took the entire amount from his Centrelink payment on a single day's notice.</p>
            </div>
        </div>

        <div class="border border-hot/25 p-6 mt-8 reveal" style="background:rgba(193,68,14,0.06)">
            <div class="flex items-center gap-2 mb-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot">Update — $1,040 Taken in One Week</span>
                <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/50 text-hot px-1.5 py-0.5 blink">⬤ RETALIATION</span>
            </div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">NOT $145. <span class="text-hot">$1,040 — IN A SINGLE WEEK.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">The tenant is paid weekly. Instead of taking the standard ~$145 for the week, the agency took <strong class="text-hot">$1,040 in one week</strong> — two weeks' worth at once. As at <strong class="text-paper/65">28 June 2026</strong>, that means he loses his payment last week and this week. For <strong class="text-paper/65">two weeks the tenant will have no money at all</strong>.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">There is no benign reading of this. It was done as <strong class="text-paper/65">retaliation</strong>. A <strong class="text-paper/65">Centrelink assistant saw what had happened</strong> and stepped in — attempting to get Housing NSW to back down and reverse the seizure.</p>
            <div class="flex items-center gap-3 border border-paper/[0.07] p-3 mb-4" style="background:#fff">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/centrelink_logo.png" alt="Centrelink" class="max-w-[150px]" style="object-fit:contain" loading="lazy" />
                <span class="text-[0.5rem] tracking-[0.12em] uppercase text-ink/60 leading-relaxed">The $1,040 was taken directly from the tenant's Centrelink payment</span>
            </div>
            <div class="border-l-4 border-hot/60 pl-4 py-2" style="background:rgba(193,68,14,0.05)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-1">The Glaring Issue</div>
                <p class="text-[0.7rem] leading-relaxed text-paper/55 italic">Housing NSW is able to penalise a person by reaching in and taking their <strong class="text-paper/70">full Centrelink payment</strong> — the entire income of someone in social housing — and leaving them with nothing to live on. That a government housing agency can zero out a vulnerable person's only income, and do it as retaliation, is a structural failure. <strong class="text-paper/70">Rose Jackson</strong>, the Minister for Housing, is aware of this.</p>
            </div>
        </div>
    </div>


    <!-- ── SECTION 05: ACCOUNTABILITY ── -->
    <div id="accountability">
        <div class="flex items-center gap-3 mb-4 reveal">
            <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Section 05 — Accountability</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-4 leading-tight reveal">SO WHO IS<br><span class="text-gold">ACCOUNTABLE?</span></h2>

        <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-8 reveal">This is where the consequence economy is supposed to do its job — and doesn't.</p>

        <div class="border border-gold/20 p-6 mb-8 reveal" style="background:rgba(201,138,16,0.04)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-4">The Minister — Rose Jackson</div>
            <div class="flex flex-col sm:flex-row gap-5 items-start mb-4">
                <div class="shrink-0 w-32 border border-paper/[0.07] overflow-hidden" style="aspect-ratio:3/4">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rose_jackson.jpeg" alt="Rose Jackson — NSW Minister for Housing" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="flex-1">
                    <div class="border border-paper/[0.07] p-4 mb-3 flex items-center justify-center" style="background:#fff">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/homes-nsw-logo.png" alt="Homes NSW" class="w-full max-w-[200px]" style="object-fit:contain" loading="lazy" />
                    </div>
                    <div class="border border-paper/[0.07] p-3 mb-3 flex items-center gap-3" style="background:#fff">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/labout_party_logo.svg" alt="Australian Labor Party" class="max-w-[120px]" style="object-fit:contain" loading="lazy" />
                        <span class="text-[0.5rem] tracking-[0.12em] uppercase text-ink/55 leading-snug">Rose Jackson — Australian Labor Party</span>
                    </div>
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold/70">Rose Jackson · Minister for Housing</div>
                    <div class="text-[0.5rem] text-paper/35 mt-0.5 leading-relaxed">Labor Minister. The NSW Land and Housing Corporation now sits within Homes NSW — within her portfolio.</div>
                </div>
            </div>
            <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">The Minister responsible is <strong class="text-paper/70">Rose Jackson</strong>, the Minister for Housing. The NSW Land and Housing Corporation now sits within <strong class="text-paper/70">Homes NSW</strong>, which is within her portfolio. Under the most basic convention of responsible government, the conduct of that agency is the Minister's to answer for.</p>
            <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">She does not personally schedule a plumber — but she is the person the public is entitled to hold to account when the agency she is responsible for ignores a court order and leaves a life-support home in the dark. The tenant has written to her office.</p>
            <div class="border border-gold/15 p-3" style="background:rgba(201,138,16,0.03)">
                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-gold mb-1.5">The Position of This Masthead</div>
                <p class="text-[0.58rem] text-paper/45 leading-relaxed">When a private citizen ignores a court, there are consequences. When a state housing agency ignores a tribunal it <em>agreed</em> to be bound by, the file simply gets another adjournment. There is no one whose job it is to make the order bite. He is owed an answer, and so is the public.</p>
            </div>
            <div class="border-l-4 border-hot/50 pl-4 py-2 mt-4" style="background:rgba(193,68,14,0.05)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-1">The Excuse — Already Blaming the Contractors</div>
                <p class="text-[0.62rem] text-paper/48 leading-relaxed">Rose Jackson is already reaching for the standard defence — blaming the <strong class="text-paper/65">contractors</strong> and <strong class="text-paper/65">scheduling availability</strong>. But this has been going on for <strong class="text-paper/65">two years</strong>. No one is going to take seriously the suggestion that a tradesperson's calendar is the reason a consent order has gone unmet, the power has failed at a life-support address, and the rent has been pushed to $520 — for two years. Contractor availability does not explain two years of inaction. It is the explanation a Minister offers when she has no other.</p>
            </div>
        </div>

        <!-- Why it really takes this long — CFMEU / Mick Gatto -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.04)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">Adam Watson — Why It Really Takes This Long</div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">THE REAL REASON A SMALL JOB<br><span class="text-hot">TAKES TWO YEARS.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Adam Watson says the delay is not really about any one tradesperson's calendar. It is about who is permitted to work on government contracts in the first place. In his account, the <strong class="text-paper/70">CFMEU controls who works on government contracts</strong> — and once a small repair has to pass through that gate, even a minor change drags out for months or years. The contractor "availability" Rose Jackson points to is downstream of who is allowed to hold the contract at all.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Adam Watson goes further: he says <strong class="text-paper/70">Labor allows Mick Gatto to control all the contracts</strong> — the same Mick Gatto documented in <a href="/episode-2" class="text-gold underline decoration-gold/40 hover:decoration-gold transition-colors">Episode 2</a>. On this account, the control of the contracting pipeline is exactly why a consent order to fix a single home can sit unmet for two years.</p>
            <div class="border-l-4 border-hot/60 pl-4 py-2" style="background:rgba(193,68,14,0.05)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-1">Adam Watson's Position</div>
                <p class="text-[0.66rem] text-paper/55 leading-relaxed">Adam Watson states that if the <strong class="text-paper/70">Liberals get into Victoria, Mick Gatto will go to jail for 20 years</strong> — and that right now he is probably moving all of his assets ahead of that. Labor, in Adam Watson's view, is allowing it to go on. The two-year wait on a single social-housing repair is, on his account, what that arrangement looks like from the inside of one affected home.</p>
            </div>
        </div>

        <!-- Illegal access / Robert Huang court documents / false rent-fraud allegation -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="flex items-center gap-2 mb-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot">Update — Illegal Entry &amp; a False Fraud Allegation</span>
                <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/50 text-hot px-1.5 py-0.5 blink">⬤ WILL COLLAPSE IN COURT</span>
            </div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">THEY ENTERED A PROPERTY ILLEGALLY.<br><span class="text-hot">THEN BUILT A FRAUD CLAIM ON WHAT THEY FOUND.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Adam Watson had left some court documents at a friend's house. NSW Housing <strong class="text-paper/65">accessed that property illegally</strong> and, while there, found the court documents — which related to <strong class="text-paper/65">Robert Huang</strong>. On the strength of that, the agency recorded Adam Watson's friend as having committed <strong class="text-paper/65">rent fraud</strong>.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">The allegation is false. The court documents do <strong class="text-paper/65">not belong to the friend</strong> — they are Adam Watson's, relating to the Robert Huang matter, and were simply left there. The friend committed no fraud.</p>
            <div class="border-l-4 border-hot/60 pl-4 py-2" style="background:rgba(193,68,14,0.05)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-1">Why This Backfires</div>
                <p class="text-[0.7rem] leading-relaxed text-paper/55 italic">By putting a rent-fraud allegation on the record, NSW Housing now has to prove it — and they cannot. The documents are not the friend's, and there is no fraud to back up. The allegation will collapse in court, and the agency will have compounded an illegal entry with a false accusation it cannot sustain.</p>
            </div>
        </div>

        <!-- Referrals -->
        <div class="mb-8 reveal">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">WHERE THIS GOES NEXT — <span class="text-gold">THE REFERRALS.</span></h3>
            <div class="space-y-2">
                <div class="border border-paper/[0.07] p-4" style="background:rgba(12,8,4,0.4)">
                    <div class="flex items-start gap-3">
                        <span class="text-gold font-display text-sm shrink-0 mt-0.5">→</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/65 mb-1">The Tribunal itself</div>
                            <p class="text-[0.58rem] text-paper/35 leading-relaxed">A fresh urgent application has been lodged (Case 2026/00090755), seeking emergency orders to restore power, remediate the mould, and freeze and refund the rent.</p>
                        </div>
                    </div>
                </div>
                <div class="border border-paper/[0.07] p-4" style="background:rgba(12,8,4,0.4)">
                    <div class="flex items-start gap-3">
                        <span class="text-gold font-display text-sm shrink-0 mt-0.5">→</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/65 mb-1">The NSW Ombudsman</div>
                            <p class="text-[0.58rem] text-paper/35 leading-relaxed">The proper body for maladministration — an agency failing, over a sustained period, to do what it was ordered to do.</p>
                        </div>
                    </div>
                </div>
                <div class="border border-paper/[0.07] p-4" style="background:rgba(12,8,4,0.4)">
                    <div class="flex items-start gap-3">
                        <span class="text-gold font-display text-sm shrink-0 mt-0.5">→</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/65 mb-1">The Independent Commission Against Corruption</div>
                            <p class="text-[0.58rem] text-paper/35 leading-relaxed">Relevant only to the extent any conduct amounts to corrupt conduct rather than incompetence — a higher and different bar, raised here so the public can judge where the line falls.</p>
                        </div>
                    </div>
                </div>
                <div class="border border-paper/[0.07] p-4" style="background:rgba(12,8,4,0.4)">
                    <div class="flex items-start gap-3">
                        <span class="text-gold font-display text-sm shrink-0 mt-0.5">→</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/65 mb-1">The Housing Appeals Committee</div>
                            <p class="text-[0.58rem] text-paper/35 leading-relaxed">The avenue for challenging a rent-subsidy or rebate decision, which the Tribunal cannot itself review.</p>
                        </div>
                    </div>
                </div>
                <div class="border border-paper/[0.07] p-4" style="background:rgba(12,8,4,0.4)">
                    <div class="flex items-start gap-3">
                        <span class="text-gold font-display text-sm shrink-0 mt-0.5">→</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/65 mb-1">The District Court of NSW</div>
                            <p class="text-[0.58rem] text-paper/35 leading-relaxed">The tenant has foreshadowed a separate claim for damage to his possessions and for the alleged handling of a government-insurer claim — a matter that exceeds the Tribunal's monetary limit.</p>
                        </div>
                    </div>
                </div>
                <div class="border border-paper/[0.07] p-4" style="background:rgba(12,8,4,0.4)">
                    <div class="flex items-start gap-3">
                        <span class="text-gold font-display text-sm shrink-0 mt-0.5">→</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/65 mb-1">The Parliament</div>
                            <p class="text-[0.58rem] text-paper/35 leading-relaxed">The tenant has indicated he will ask members of the crossbench and the Opposition to raise the matter in the House.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kellie Sloane — Opposition Leader -->
        <div class="border border-gold/30 p-6 mb-8 reveal" style="background:rgba(201,138,16,0.05)">
            <div class="flex items-center gap-2 mb-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold">Update — The Opposition Leader Steps In</span>
                <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-gold/50 text-gold px-1.5 py-0.5 blink">⬤ TO BE TABLED IN PARLIAMENT</span>
            </div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">KELLIE SLOANE HAS TAKEN THIS UP.<br><span class="text-gold">AND SHE IS TABLING IT IN PARLIAMENT.</span></h3>
            <div class="flex flex-col sm:flex-row gap-5 items-start mb-4">
                <div class="shrink-0 w-32 border border-paper/[0.07] overflow-hidden" style="aspect-ratio:3/4">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kellie_sloan.jpg" alt="Kellie Sloane — NSW Opposition Leader" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="flex-1">
                    <div class="border border-paper/[0.07] p-4 mb-3 flex items-center justify-center" style="background:#fff">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/liberal_party_logo.svg" alt="Liberal Party of Australia" class="w-full max-w-[180px]" style="object-fit:contain" loading="lazy" />
                    </div>
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold/70">Kellie Sloane · NSW Opposition Leader</div>
                    <div class="text-[0.5rem] text-paper/35 mt-0.5 leading-relaxed">Liberal Party — holding the Labor Government's Housing Minister to account.</div>
                </div>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">The NSW Opposition Leader, <strong class="text-paper/70">Kellie Sloane</strong>, has contacted Adam Watson directly after being informed of the conduct of Homes NSW and its responsible Minister, <strong class="text-paper/70">Rose Jackson</strong>. Adam Watson describes her as <strong class="text-paper/70">a very honourable person</strong>.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">She has told him she is going to <strong class="text-paper/70">table this conduct in Parliament</strong>.</p>
            <div class="border-l-4 border-gold/60 pl-4 py-2 mb-4" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-1">What "Tabling It" Means</div>
                <p class="text-[0.65rem] text-paper/48 leading-relaxed">To <em>table</em> a document is to formally lay it before the Parliament so that it becomes part of the official parliamentary record. Once tabled, the documents and the conduct they describe are on the public record of the House — they can be referred to in debate, reported under parliamentary privilege, and used to question the Minister directly. It moves this matter out of an agency's complaints inbox and into the chamber where Ministers are held to account.</p>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Kellie Sloane is pressing for <strong class="text-paper/70">Rose Jackson to resign</strong>, on the basis that she is an incompetent Minister whose agency has ignored a tribunal order, cut power to a life-support home, and seized a vulnerable tenant's full Centrelink payment.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">Meanwhile, <strong class="text-paper/70">Homes NSW has attempted to contact Adam Watson</strong>. He has declined — stating that he will <strong class="text-paper/70">only speak to Rose Jackson directly</strong>. The accountability he is seeking is ministerial, not administrative.</p>
        </div>

        <!-- After Kellie Sloane — Homes NSW attends; lock box stolen -->
        <div class="border border-sage/25 p-6 mb-8 reveal" style="background:rgba(61,122,74,0.05)">
            <div class="flex items-center gap-2 mb-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-sage">Update — Suddenly, Action</span>
                <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-sage/50 text-sage px-1.5 py-0.5">⬤ POWER RESTORED · LOCKS CHANGED</span>
            </div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">ONCE THE OPPOSITION LEADER WAS INVOLVED,<br><span class="text-sage">THE CONTRACTORS FINALLY CAME.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">After <strong class="text-paper/70">Kellie Sloane</strong> took the matter up, the pace changed. <strong class="text-paper/70">Homes NSW attended the property</strong> to fix the power and change the locks — the very work that had sat undone, through adjournment after adjournment, while a court order went ignored. The timing speaks for itself: nine months of "we're inspecting", then movement within days of the Opposition Leader getting involved.</p>
            <div class="border-l-4 border-gold/60 pl-4 py-2" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-1">The Stolen Lock Box</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">A <strong class="text-paper/65">lock box</strong> had been placed outside the house so contractors could access the property. It was <strong class="text-paper/65">stolen</strong>. Adam Watson suspects it was taken by <strong class="text-paper/65">Raz</strong> — the husband of <strong class="text-paper/65">Samira Khalaj</strong>, whose documented campaign of harassment, gas-pipeline tampering, and false allegations is set out in <a href="/episode-2#samira" class="text-gold underline decoration-gold/40 hover:decoration-gold transition-colors">Episode 2</a>. The theft of the contractors' lock box would, on that suspicion, be one more act of interference from the same quarter — obstructing the very repairs this episode has been demanding.</p>
            </div>
        </div>

        <!-- The call from Rose Jackson -->
        <div class="border border-gold/30 p-6 mb-8 reveal" style="background:rgba(201,138,16,0.05)">
            <div class="flex items-center gap-2 mb-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold">The Call — Rose Jackson to Adam Watson</span>
                <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-gold/50 text-gold px-1.5 py-0.5">⬤ MINISTER ENGAGED</span>
            </div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">"GIVE ME THE PROOF,<br><span class="text-gold">AND SHE'S OUT."</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Rose Jackson called Adam Watson directly. On that call, the Minister said that if Adam Watson provides her with <strong class="text-paper/70">proof that Samira Khalaj owns a property</strong>, Homes NSW will act: they will <strong class="text-paper/70">remove her from public housing, ban her, strip her rent subsidy, and back-date the rent for nine years</strong>. The agency would take her to Court, Centrelink would take her to Court, and they would <strong class="text-paper/70">pursue her assets — the house</strong>.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Adam Watson's position is one of basic fairness: <em class="text-paper/70">if people live in public housing and they work, they should pay like everybody else.</em> Public housing is for people who need it — not for people quietly sitting on assets while a single mother with a child and no money waits on the list.</p>
            <div class="border border-gold/15 p-4 mb-4" style="background:rgba(201,138,16,0.03)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-2">What Is Being Asked For</div>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/48 leading-relaxed"><strong class="text-paper/60">Proof of property ownership.</strong> Samira Khalaj's unit would be worth approximately <strong class="text-paper/65">$1.3 million</strong> — and Adam Watson has it on good authority that it is <strong class="text-paper/65">completely paid off</strong>.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/48 leading-relaxed"><strong class="text-paper/60">What car she owns.</strong> Rose Jackson has also asked Adam Watson what car Samira Khalaj drives — because she would then have to prove how she paid for it. As Adam Watson puts it: <em class="text-paper/70">"Why should you live in public housing if you have a Porsche? You could give it to some woman that has a kid and no money."</em></p></div>
                </div>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-3">On the tenancy itself, Rose Jackson has stated she wants an <strong class="text-paper/70">affidavit from Robert Huang</strong> confirming that the tenant <strong class="text-paper/70">does not work for Robert Huang</strong>, together with <strong class="text-paper/70">tax returns</strong> showing that the money is Adam Watson's, that Adam Watson works for Robert Huang, and that he pays tax.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">Adam Watson holds <strong class="text-paper/70">power of attorney</strong> over the tenant. The tenant had received an inheritance of nearly <strong class="text-paper/70">$900,000</strong> and squandered the entire amount — context for why Adam Watson administers his affairs, and why the money moving through the tenancy traces back to Adam Watson rather than to the tenant himself.</p>
            <div class="border-l-4 border-hot/50 pl-4 py-2 mt-4" style="background:rgba(193,68,14,0.05)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-1">The Jumpers — and a $1.25 Refund</div>
                <p class="text-[0.66rem] text-paper/50 leading-relaxed">Housing is now asking Adam Watson to <strong class="text-paper/65">prove that he was the one who bought the tenant all the nice jumpers</strong> — that is where they are starting, using the clothing as evidence in the money trail. And in a gesture that says everything about the posture on the other side, out of spite they refunded Adam Watson only <strong class="text-paper/65">$1.25</strong> of his rent assistance.</p>
            </div>
        </div>

        <!-- Escalation to Ben Fordham -->
        <div class="border border-gold/30 p-6 mb-8 reveal" style="background:rgba(201,138,16,0.05)">
            <div class="flex items-center gap-2 mb-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold">Escalation — Taking It to the Airwaves</span>
                <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-gold/50 text-gold px-1.5 py-0.5">⬤ 2GB · BEN FORDHAM</span>
            </div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">STRAIGHT TO BEN FORDHAM.<br><span class="text-gold">GET TO THE BOTTOM OF THIS MESS.</span></h3>
            <div class="flex flex-col sm:flex-row gap-5 items-start mb-4">
                <div class="shrink-0 w-full sm:w-64 border border-paper/[0.07]" style="background:#0d0d0d">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/shelf_company/ben_fordham_2gb.jpg" alt="Ben Fordham — 2GB" class="w-full h-auto block" style="object-fit:contain" loading="lazy" />
                </div>
                <div class="flex-1">
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-3">Adam Watson is bringing the entire NCAT tenant matter set out in this episode to the attention of <strong class="text-paper/70">Ben Fordham</strong> at 2GB. Fordham is positioned to contact <strong class="text-paper/70">Rose Jackson</strong>, <strong class="text-paper/70">Kellie Sloane</strong>, and Premier <strong class="text-paper/70">Chris Minns</strong> directly — and to get to the bottom of this mess.</p>
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold/70">Ben Fordham · 2GB</div>
                </div>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">A consent order ignored for two years, a life-support home left without power, rent pushed to $520, a full Centrelink payment seized, and a Minister asking a tenant's advocate to prove who bought the jumpers — it is exactly the kind of story that does not survive contact with daylight. Put to the Premier and both sides of the House on air, the questions answer themselves.</p>
        </div>

        <!-- How the tenant has had to live -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="flex items-center gap-2 mb-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot">How He Has Had to Live</span>
                <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/50 text-hot px-1.5 py-0.5">⬤ UNDER ROSE JACKSON'S WATCH</span>
            </div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">PILLOWS. PANS. CLOTHES.<br><span class="text-hot">ALL THROWN OUT — COVERED IN MOULD.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">This is what two years of an unmet consent order looks like from inside the home. The tenant has had to <strong class="text-paper/65">throw out his pillows, his pans, and his clothes</strong> because mould keeps growing on them. Not once — as an ongoing condition of daily life. This is how he has had to live. And it has all happened <strong class="text-paper/65">under Rose Jackson's watch</strong>.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4"><strong class="text-paper/70">Kellie Sloane</strong> is aware of exactly this — and she has <strong class="text-paper/70">called Premier Chris Minns</strong> about it.</p>
            <div class="border-l-4 border-gold/60 pl-4 py-2" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-1">Adam Watson on the Tribunal</div>
                <p class="text-[0.66rem] text-paper/50 leading-relaxed">Adam Watson has called NCAT a <strong class="text-paper/65">"toothless tiger."</strong> A tribunal can make an order by consent, watch it be ignored for two years, and do nothing to make it bite — while a man throws his mouldy bedding and cookware into the bin. An order that cannot be enforced is not much of an order at all.</p>
            </div>
        </div>

        <!-- iCare / Gallagher Bassett — claim denied -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.04)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">The Insurance Denial — icare · Claim CN701338-01</div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">THE GOVERNMENT'S OWN INSURER<br><span class="text-hot">SAID: PROVE IT.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">On 17 September 2025, Gallagher Bassett — acting as the agent for <strong class="text-paper/70">icare (Insurance for NSW)</strong> — wrote to Adam Watson to confirm that his claim against the <strong class="text-paper/70">NSW Land and Housing Corporation</strong> for damage to personal property was <strong class="text-paper/70">denied</strong>. The stated reason: he had "not served any evidence to support [the] allegation of negligence against LAHC", and "the onus is on you to provide supportive evidence and proof of loss."</p>
            <div class="border border-hot/20 p-4 mb-4" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">The Concern — Read Against the NCAT Win</div>
                <p class="text-[0.65rem] text-paper/48 leading-relaxed mb-2">The demand for "proof of negligence" does not sit easily beside the record. The very same government agency — <strong class="text-paper/65">LAHC — consented at NCAT</strong> to an order to remediate mould and complete repairs, an acknowledgment on the tribunal record that the property required exactly that work. A tenant whose pillows, pans and clothes are being thrown out because of mould the agency was ordered to fix is then told, by that agency's own insurer, that he must prove negligence or receive nothing.</p>
                <p class="text-[0.65rem] text-paper/45 leading-relaxed italic">One arm of the State consents to fix the mould; another arm of the State denies the tenant any compensation for what that mould destroyed — for want of "evidence" the first arm has effectively already put on the record. That is the concern this letter raises.</p>
            </div>
            <div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-[0.46rem] tracking-[0.18em] uppercase text-hot/70">icare / Gallagher Bassett — Letter of Outcome · CN701338-01 · 17 Sep 2025</span>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rose_jackson/icare_letter_redacted.pdf" target="_blank" rel="noopener" class="text-[0.44rem] tracking-[0.14em] uppercase text-hot border border-hot/30 px-2 py-0.5 hover:bg-hot/10 transition-colors">Open PDF ↗</a>
                </div>
                <iframe src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rose_jackson/icare_letter_redacted.pdf" class="w-full border border-paper/[0.07]" style="height:520px;background:#0d0d0d" title="icare / Gallagher Bassett letter — claim CN701338-01 denied"></iframe>
            </div>
        </div>

        <!-- Kellie Sloane — ICAC referral, letters to Homes NSW -->
        <div class="border border-gold/30 p-6 mb-8 reveal" style="background:rgba(201,138,16,0.05)">
            <div class="flex items-center gap-2 mb-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold">Kellie Sloane — Take It to Court · Refer It to ICAC</span>
                <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-gold/50 text-gold px-1.5 py-0.5">⬤ ICAC REFERRAL</span>
            </div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">"THE ONLY WAY TO DEAL WITH THESE PEOPLE<br><span class="text-gold">IS TO TAKE IT TO COURT."</span></h3>
            <div class="flex flex-col sm:flex-row gap-5 items-start mb-4">
                <div class="shrink-0 w-32 border border-paper/[0.07] overflow-hidden" style="aspect-ratio:3/4">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/adam_watson_portrait.jpg" alt="Adam Watson" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="flex-1">
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-3"><strong class="text-paper/70">Kellie Sloane</strong> has been in direct contact with Adam Watson about this situation. She has suggested <strong class="text-paper/70">taking NSW Housing to Court</strong>, and she is interested in the icare letter as part of her <strong class="text-paper/70">referral to ICAC</strong> — the Independent Commission Against Corruption.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-3">Her point on the insurance denial is sharp: it is a <strong class="text-paper/70">criminal offence to tell icare things that are not true</strong>. She finds it appalling that the agency won't deal with the matter, and her conclusion is blunt — the only way to deal with these people is to take it to Court, because <strong class="text-paper/70">then the bureaucrats have to go to Court too</strong>, under oath, where "we're inspecting" is not an answer.</p>
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold/70">Adam Watson · in contact with Kellie Sloane's office</div>
                </div>
                <div class="shrink-0 w-32 border border-paper/[0.07] p-3 flex items-center justify-center" style="background:#fff">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/icac_logo.jpeg" alt="ICAC — Independent Commission Against Corruption" class="w-full" style="object-fit:contain" loading="lazy" />
                </div>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Adam Watson has said that <strong class="text-paper/70">Kellie Sloane is an honourable person</strong>. Her Vaucluse electorate office has written to Homes NSW on the tenant's behalf — the letters are below.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[0.44rem] tracking-[0.16em] uppercase text-gold/70">Kellie Sloane MP Office — Letter</span>
                        <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/REDACTED_kellie_sloane_mp_office_letter.pdf" target="_blank" rel="noopener" class="text-[0.42rem] tracking-[0.12em] uppercase text-gold border border-gold/30 px-2 py-0.5 hover:bg-gold/10 transition-colors">Open ↗</a>
                    </div>
                    <iframe src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/REDACTED_kellie_sloane_mp_office_letter.pdf" class="w-full border border-paper/[0.07]" style="height:420px;background:#0d0d0d" title="Kellie Sloane MP office letter"></iframe>
                </div>
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[0.44rem] tracking-[0.16em] uppercase text-gold/70">Letter to Homes NSW</span>
                        <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/REDACTED_letter_to_homes+(1).pdf" target="_blank" rel="noopener" class="text-[0.42rem] tracking-[0.12em] uppercase text-gold border border-gold/30 px-2 py-0.5 hover:bg-gold/10 transition-colors">Open ↗</a>
                    </div>
                    <iframe src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/REDACTED_letter_to_homes+(1).pdf" class="w-full border border-paper/[0.07]" style="height:420px;background:#0d0d0d" title="Letter to Homes NSW"></iframe>
                </div>
            </div>
        </div>

        <!-- Dr Hilton Shapiro — Diabetes referral -->
        <div class="border border-sage/25 p-6 mb-8 reveal" style="background:rgba(61,122,74,0.05)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-3">The Medical Referral — Dr Hilton Shapiro</div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">A DOCTOR WHO FEELS<br><span class="text-sage">VERY STRONGLY ABOUT THIS.</span></h3>
            <div class="flex flex-col sm:flex-row gap-5 items-start">
                <div class="shrink-0 w-32 border border-paper/[0.07] overflow-hidden" style="aspect-ratio:3/4">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rose_jackson/dr_hilton_shapiro.jpg" alt="Dr Hilton Shapiro" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="flex-1">
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-3"><strong class="text-paper/70">Dr Hilton Shapiro</strong>, from Mascot, has been made aware of what LAHC has done — and he feels very strongly about it. He has <strong class="text-paper/70">referred this matter to Diabetes Australia / the Diabetes Council</strong>.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50">The medical dimension is not incidental. The tenant is diabetic and depends on his <strong class="text-paper/70">weekly payments</strong> to fund his diabetic medication — the same payments Housing NSW seized in full. A government agency that leaves a diabetic in a mould-ridden, powerless home and then strips his weekly income is a health matter, and a doctor has now put it in front of the body that exists to advocate for exactly these patients.</p>
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-sage/70 mt-2">Dr Hilton Shapiro · Mascot, NSW</div>
                </div>
            </div>
        </div>

        <div class="border-l-4 border-gold/60 pl-5 py-3 reveal" style="background:rgba(201,138,16,0.04)">
            <h4 class="font-display text-2xl tracking-wide mb-2 leading-tight">THE QUESTION THE DOCUMENTS LEAVE ON THE TABLE.</h4>
            <p class="text-[0.72rem] leading-relaxed text-paper/55">Strip away every contested claim and one fact remains, sealed and signed: a NSW government agency told a tribunal it would fix this by November. It is now winter again. The work is not done, the power has failed, and the rent has gone up nearly seven-fold. The only open question is who, if anyone, will be held responsible — and whether <em>"we're inspecting"</em> is still an acceptable answer from a government to a court.</p>
        </div>
    </div>


    <!-- ── SECTION 06: EVIDENCE VAULT ── -->
    <div id="evidence-vault">
        <div class="flex items-center gap-3 mb-4 reveal">
            <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Section 06 — Evidence Vault</span>
            <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">8 Documents · NCAT Orders · Ausgrid Note · Mould Photos</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-4 leading-tight reveal">THE DOCUMENTS.<br><span class="text-gold">READ THEM YOURSELF.</span></h2>
        <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-8 reveal">Every factual claim sourced to a tribunal order in this article is verifiable from the sealed documents below. Click any file to open it in the evidence viewer, or download directly.</p>

        <!-- Evidence vault -->
        <div class="evidence-vault reveal">
            <div class="ev-header open" onclick="this.classList.toggle('open');this.nextElementSibling.classList.toggle('open')">
                <div>
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-0.5">NCAT Orders &amp; Applications — Case 2025/00005577 · 2026/00090755</div>
                    <div class="text-[0.48rem] text-paper/25 tracking-wide">7 sealed tribunal documents · Full originals</div>
                </div>
                <span class="ev-toggle">▼</span>
            </div>
            <div class="ev-body open">
                <div class="ev-file ef-gold" onclick="openMV('order-aug-2025')">
                    <div class="ev-icon ev-pdf">PDF</div>
                    <div class="ev-meta">
                        <div class="ev-name">NCAT consent order, 1 August 2025 (Case 2025/00005577)</div>
                        <div class="ev-desc">Keystone document · Consent order + 15 Apr 2026 order · Mould remediation · Rent cap $77.95/wk · $291.80 compensation</div>
                    </div>
                    <span class="ev-cta">Open →</span>
                </div>
                <div class="ev-file ef-gold" onclick="openMV('application-mar-2026')">
                    <div class="ev-icon ev-pdf">PDF</div>
                    <div class="ev-meta">
                        <div class="ev-name">Fresh NCAT application, 4 March 2026 (Case 2026/00090755)</div>
                        <div class="ev-desc">Tenant returns to tribunal — consent-ordered repairs never completed</div>
                    </div>
                    <span class="ev-cta">Open →</span>
                </div>
                <div class="ev-file ef-gold" onclick="openMV('order-apr-2026')">
                    <div class="ev-icon ev-pdf">PDF</div>
                    <div class="ev-meta">
                        <div class="ev-name">NCAT order, 29 April 2026 — Virtual attendance</div>
                        <div class="ev-desc">Tenant granted leave to appear virtually</div>
                    </div>
                    <span class="ev-cta">Open →</span>
                </div>
                <div class="ev-file ef-hot" onclick="openMV('order-may-2026')">
                    <div class="ev-icon ev-pdf">PDF</div>
                    <div class="ev-meta">
                        <div class="ev-name">NCAT order, 1 May 2026 — "The landlord is inspecting"</div>
                        <div class="ev-desc">Adjourned because respondent landlord is inspecting — 6 months after deadline</div>
                    </div>
                    <span class="ev-cta">Open →</span>
                </div>
                <div class="ev-file ef-gold" onclick="openMV('order-jun-2026')">
                    <div class="ev-icon ev-pdf">PDF</div>
                    <div class="ev-meta">
                        <div class="ev-name">NCAT order, 18 June 2026 — Adjourned by consent</div>
                        <div class="ev-desc">Another adjournment — by consent</div>
                    </div>
                    <span class="ev-cta">Open →</span>
                </div>
                <div class="ev-file ef-hot" onclick="openMV('urgent-jun-2026')">
                    <div class="ev-icon ev-pdf">PDF</div>
                    <div class="ev-meta">
                        <div class="ev-name">Request for urgent/expedited hearing, 26 June 2026</div>
                        <div class="ev-desc">Emergency application — power failure + $520 rent + Ausgrid note + mould photos as annexures</div>
                    </div>
                    <span class="ev-cta">Open →</span>
                </div>
                <div class="ev-file ef-sage" onclick="openMV('ausgrid-note')">
                    <div class="ev-icon ev-img">IMG</div>
                    <div class="ev-meta">
                        <div class="ev-name">Ausgrid note to housing electrician (Ref. 66693)</div>
                        <div class="ev-desc">Faulty main switchboard · Life-support customers · Replace directive · Never actioned</div>
                    </div>
                    <span class="ev-cta">Open →</span>
                </div>
            </div>
        </div>

        <div class="evidence-vault mt-4 reveal">
            <div class="ev-header open" onclick="this.classList.toggle('open');this.nextElementSibling.classList.toggle('open')">
                <div>
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-0.5">Photographic Evidence — Mould at the Premises</div>
                    <div class="text-[0.48rem] text-paper/25 tracking-wide">3 photographs · Wall and ceiling surfaces · Present despite Nov 2025 remediation order</div>
                </div>
                <span class="ev-toggle">▼</span>
            </div>
            <div class="ev-body open">
                <div class="ev-file ef-sage" onclick="openMV('mould-1')">
                    <div class="ev-icon ev-img">IMG</div>
                    <div class="ev-meta">
                        <div class="ev-name">Mould at the premises (1 of 3)</div>
                        <div class="ev-desc">Wall and ceiling mould — photographed post-remediation-deadline</div>
                    </div>
                    <span class="ev-cta">Open →</span>
                </div>
                <div class="ev-file ef-sage" onclick="openMV('mould-2')">
                    <div class="ev-icon ev-img">IMG</div>
                    <div class="ev-meta">
                        <div class="ev-name">Mould at the premises (2 of 3)</div>
                        <div class="ev-desc">Wall and ceiling mould — painted over, bled back through</div>
                    </div>
                    <span class="ev-cta">Open →</span>
                </div>
                <div class="ev-file ef-sage" onclick="openMV('mould-3')">
                    <div class="ev-icon ev-img">IMG</div>
                    <div class="ev-meta">
                        <div class="ev-name">Mould at the premises (3 of 3)</div>
                        <div class="ev-desc">Wall and ceiling mould</div>
                    </div>
                    <span class="ev-cta">Open →</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ── SECTION: ADNAN ALIJA / ALIJA CONCRETE ── -->
    <div id="alija" class="mt-16">
        <div class="flex items-center gap-3 mb-4 reveal">
            <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">New Character — Adnan Alija</span>
            <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Alija Concrete · The Slur · The Judgment</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-4 leading-tight reveal">"I'M NOT PAYING YOU<br><span class="text-hot">BECAUSE YOU'RE A FAGGOT."</span></h2>
        <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-8 reveal max-w-3xl">Adnan Alija is the founder of <strong class="text-paper/65">Alija Concrete</strong>. What follows separates two things carefully: the allegations, which are described as allegations, and the court record, which speaks for itself.</p>

        <!-- Founder / logo -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-stretch mb-8 reveal">
            <div class="border border-paper/[0.07]" style="background:#0c0804">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/10_07_26/alija_founder.png" alt="Adnan Alija — founder of Alija Concrete" class="w-full h-auto block" style="max-height:420px;object-fit:contain" loading="lazy" />
                <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25 mt-1.5 px-2 pb-2">Adnan Alija · Founder, Alija Concrete</div>
            </div>
            <div class="border border-paper/[0.07] p-6 flex flex-col items-center justify-center text-center" style="background:#fff">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/10_07_26/alija_concrete_logo.png" alt="Alija Concrete" class="w-full max-w-[240px] mb-4" style="object-fit:contain" loading="lazy" />
                <a href="https://www.instagram.com/alijaconcrete/" target="_blank" rel="noopener" class="text-[0.44rem] tracking-[0.14em] uppercase text-ink/60 border border-ink/20 px-2 py-0.5 hover:bg-ink/5 transition-colors">@alijaconcrete ↗</a>
            </div>
        </div>

        <!-- The allegations -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">The Allegations</div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">It is <strong class="text-paper/65">alleged</strong> that while his girlfriend — who was brought to Australia from overseas — was <strong class="text-paper/65">pregnant</strong>, Adnan Alija entered into a sexual relationship with Adam Watson and a friend of Adam's, both of whom are Muslim. That is an allegation, and it is presented as one.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">What sits alongside it is harder to reconcile. Alija Concrete <strong class="text-paper/65">engaged Adam Watson for work and never paid.</strong> The <strong class="text-paper/65">alleged stated reason</strong> for not paying was as blunt as it was ugly: <em class="text-paper/70">"I'm not paying you because you're a faggot."</em> A private relationship on one hand; a homophobic slur weaponised to avoid a debt on the other. The contradiction is the story.</p>
        </div>

        <!-- The judgment / on the record -->
        <div class="border border-gold/25 p-6 mb-8 reveal" style="background:rgba(201,138,16,0.04)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-3">On the Record — The Judgment</div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Adam Watson took the unpaid debt to court and <strong class="text-paper/65">obtained a judgment</strong> against Adnan Alija. That is not an allegation — it is a matter of record.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">The judgment has since done what judgments do. Adnan Alija was <strong class="text-paper/65">recently knocked back for a bank loan because of it</strong> — a recorded judgment debt is exactly the kind of thing a lender declines on. With the loan blocked, he <strong class="text-paper/65">reached out to Adam</strong>, now asking to pay the debt — in exchange for a <strong class="text-paper/65">Notice of Discontinuance.</strong></p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">It is worth sitting with that reversal. The man who allegedly refused to pay because of who Adam is now needs Adam's signature to move on with his own finances. The slur was free when there was nothing at stake. The moment the judgment stood between him and a bank, the position changed.</p>
            <div class="border border-paper/[0.07] mt-5 p-4 flex items-center gap-4" style="background:rgba(12,8,4,0.5)">
                <div class="shrink-0 w-12 h-14 flex items-center justify-center border border-gold/30 text-[0.5rem] tracking-[0.12em] text-gold" style="background:rgba(201,138,16,0.06)">PDF</div>
                <div class="flex-1">
                    <div class="text-[0.6rem] text-paper/60 mb-0.5">Form 33 — Notice of Discontinuance · Watson v Alija Concrete</div>
                    <div class="text-[0.5rem] text-paper/30">Court document · The instrument Adnan Alija has requested in exchange for paying the judgment debt</div>
                </div>
                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/10_07_26/Form+33+-+Notice+of+Discontinuance+-+Watson+v+Alija+Concrete+(003).pdf" target="_blank" rel="noopener" class="shrink-0 text-[0.5rem] tracking-[0.14em] uppercase text-gold border border-gold/40 px-3 py-1.5 hover:bg-gold/10 transition-colors">View →</a>
            </div>
        </div>
    </div>

    <!-- ── SECTION: SOUTHPORT OFFICEWORKS ── -->
    <div id="officeworks" class="mt-16">
        <div class="flex items-center gap-3 mb-4 reveal">
            <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">New Incident — Southport Officeworks</span>
            <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Two Charges · A $20 Item · $10 Held</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-4 leading-tight reveal">TWO CHARGES<br><span class="text-hot">OVER A $20 PAIR OF HEADPHONES.</span></h2>
        <div class="flex flex-col sm:flex-row gap-5 items-start mb-8 reveal">
            <div class="shrink-0 border border-paper/[0.07] p-5 flex items-center justify-center" style="background:#fff;width:200px;min-height:96px">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/10_07_26/officeworks_logo.png" alt="Officeworks" class="w-full max-w-[150px]" style="object-fit:contain" loading="lazy" />
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 max-w-3xl">Queensland Police brought <strong class="text-paper/65">two charges</strong> against Kosta Kondratenko over an incident at <strong class="text-paper/65">Officeworks Southport</strong>. This is his account of what happened, and why. The matter is <strong class="text-paper/65">listed for mention</strong> — it has not been to trial, and nothing here is a finding of any court. Should police elect to proceed to a full trial, the outcome will be reported at the end.</p>
        </div>

        <!-- The documents -->
        <div class="flex items-center gap-3 mb-3 reveal">
            <div class="shrink-0 border border-paper/[0.1] p-2.5 flex items-center justify-center" style="background:#fff;width:120px;min-height:60px">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/10_07_26/qld_police_logo.png" alt="Queensland Police Service" class="w-full max-w-[96px]" style="object-fit:contain" loading="lazy" />
            </div>
            <div class="text-[0.5rem] tracking-[0.16em] uppercase text-paper/30 leading-relaxed">Queensland Police · Two charges laid<br>Item seized · Field Property Receipt issued</div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8 reveal">
            <div class="border border-paper/[0.07]" style="background:#0c0804">
                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/officeworks/undertaking_to_bail.jpeg" target="_blank" rel="noopener" class="block"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/officeworks/undertaking_to_bail.jpeg" alt="Undertaking to bail — Southport Officeworks charges" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25 px-3 py-2 border-t border-paper/[0.06]">Undertaking to Bail · Two charges</div>
            </div>
            <div class="border border-paper/[0.07]" style="background:#0c0804">
                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/officeworks/20_dollar_headphones.jpeg" target="_blank" rel="noopener" class="block"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/officeworks/20_dollar_headphones.jpeg" alt="Field Property Receipt — $20 headphones seized by QLD Police" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25 px-3 py-2 border-t border-paper/[0.06]">Field Property Receipt · The item seized — a $20 pair of headphones</div>
            </div>
        </div>

        <!-- What actually happened -->
        <div class="story-chapter reveal mb-8">
            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">What Actually Happened</div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">It started at the self-service machines. Adam Watson was trying to print, and the machine <strong class="text-paper/65">wouldn't scan.</strong> Adam complained to Kosta about the scanning issue. Kosta went into Officeworks and told a staff member what had happened. The response was <em class="text-paper/70">"Well, that's all right"</em> — and Kosta explained that, no, it is <strong class="text-paper/65">not all right.</strong></p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Kosta asked to speak to the person who had aggravated Adam. The manager <strong class="text-paper/65">would not allow it</strong> — he said only that he would handle it himself, and refused to let Kosta speak to the person who had caused the problem in the first place.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">At that point, on Kosta's account, <strong class="text-paper/65">all he did was point a finger.</strong> He walked out. Then he came back in and <strong class="text-paper/65">took a pair of headphones.</strong> The logic was one the staff had themselves supplied: the machine had taken Adam's money and not given it back, and a worker had said Adam would get that money back <strong class="text-paper/65">in 14 days.</strong> So Kosta said he would take the <strong class="text-paper/65">$20 headphones for 14 days</strong> — and when the money came back, they could have their headphones back. If the machine can hold a customer's money for 14 days, the reasoning went, the customer can hold a $20 item for the same 14 days.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">The staff called the police. Kosta was <strong class="text-paper/65">arrested within 10 minutes.</strong> The officer did not appear to have the full story. Kosta explained the issue — the held money, the 14-day promise, the refusal to let him speak to anyone — and the officer <strong class="text-paper/65">proceeded with the arrest without any attempt to resolve the underlying issue whatsoever.</strong></p>
        </div>

        <!-- Why the headphones — the $10 held -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">Why It Happened — The $10 Officeworks Kept</div>
            <div class="grid grid-cols-1 sm:grid-cols-[150px_1fr] gap-5 items-start">
                <div class="border border-paper/[0.07]" style="background:#0c0804">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/adam_watson_portrait.jpg" alt="Adam Watson" class="w-full h-auto block" style="object-fit:cover" loading="lazy" />
                    <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25 px-2 py-1.5 border-t border-paper/[0.06]">Adam Watson</div>
                </div>
                <div>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">This did not happen over nothing. Officeworks <strong class="text-paper/65">took $10 from Adam Watson for his printing and did not return it.</strong> The receipt showing Officeworks holding that money is below. The headphones were never about $20 worth of headphones — they were a stand-in for money the store had taken and would not give back.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50">There is also a piece of property that has never been accounted for. Since the police <strong class="text-paper/65">removed the item from Kosta's bag</strong>, his <strong class="text-paper/65">charger has gone missing</strong> — and its value is considerably higher than the $20 headphones that generated the charges. The Field Property Receipt above records what was taken; the charger is not coming back.</p>
                </div>
            </div>
            <div class="border border-paper/[0.07] max-w-md mt-5" style="background:#0c0804">
                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/officeworks/officeworks_holding_money.jpeg" target="_blank" rel="noopener" class="block"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/officeworks/officeworks_holding_money.jpeg" alt="Receipt — Officeworks holding Adam Watson's $10" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25 px-3 py-2 border-t border-paper/[0.06]">Proof · Officeworks holding Adam Watson's $10</div>
            </div>
        </div>

        <!-- The culture -->
        <div class="border border-gold/25 p-6 mb-8 reveal" style="background:rgba(201,138,16,0.04)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-3">The Culture at Southport Officeworks</div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">The incident does not sit in isolation. It goes to the <strong class="text-paper/65">culture of the staff at Officeworks Southport</strong>, who — on Adam Watson's repeated experience — <strong class="text-paper/65">never help him with the self-service printers.</strong> Adam has also complained that the printing is <strong class="text-paper/65">set to colour by default</strong>. He believes this is a <strong class="text-paper/65">deliberate attempt to extract money</strong> from customers — charging colour rates even when the pages are plainly black and white.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">It is not only customers who describe it that way. An Officeworks staff member at <strong class="text-paper/65">Robina</strong> has said she <strong class="text-paper/65">never rosters herself onto shifts at the Southport store</strong> because of the culture and the people there — and that, in her view, the staff seem <strong class="text-paper/65">trained to be unhelpful.</strong></p>
        </div>

        <!-- Wesfarmers / Rob Scott -->
        <div class="border border-paper/[0.08] p-6 mb-8 reveal" style="background:rgba(12,8,4,0.4)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/40 mb-4">Escalated — The Owner of Officeworks</div>
            <div class="grid grid-cols-1 sm:grid-cols-[150px_1fr] gap-5 items-start">
                <div class="border border-paper/[0.07]" style="background:#0c0804">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/officeworks/rob_scott_ceo.jpg" alt="Rob Scott — CEO, Wesfarmers" class="w-full h-auto block" style="object-fit:cover" loading="lazy" />
                    <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25 px-2 py-1.5 border-t border-paper/[0.06]">Rob Scott · CEO, Wesfarmers</div>
                </div>
                <div>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Officeworks is owned by <strong class="text-paper/65">Wesfarmers</strong>. Its CEO, <strong class="text-paper/65">Rob Scott</strong>, has been contacted about the culture of the staff at the Southport store. He has indicated he will <strong class="text-paper/65">look at the complaint numbers</strong> for that location to determine whether this is a valid, recurring concern rather than a one-off.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">That is the right response to a complaint of this kind: check whether the data backs it up. If the volume of complaints against Officeworks Southport is elevated, it tells its own story — and it would corroborate exactly what a Robina staff member has already said out loud about that store.</p>
                    <div class="border border-paper/[0.07] p-5 flex items-center justify-center" style="background:#fff;min-height:96px">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/10_07_26/Wesfarmers-brand.svg.webp" alt="Wesfarmers" class="w-full max-w-[220px]" style="object-fit:contain" loading="lazy" />
                    </div>
                </div>
            </div>
        </div>

        <!-- The bigger issue -->
        <div class="border border-hot/25 p-6 mb-4 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">The Bigger Issue — Procedure and Held Money</div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Strip the personalities out of it and two questions remain. The first is about <strong class="text-paper/65">police procedure.</strong> When someone is standing in a store openly explaining that they have taken a $20 item because the store is holding their associate's money, the proportionate response is to <strong class="text-paper/65">offer to let them simply pay for the item</strong>, or, at the very least, to <strong class="text-paper/65">listen to the underlying issue</strong> before reaching for handcuffs. Neither happened. The officer proceeded to arrest without attempting to resolve anything.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">The second is bigger, and it is the real question this case raises: <strong class="text-paper/65">what right does a store like Officeworks have to take a customer's money and hold it — for 14 days or at all — without giving it back?</strong> A self-service machine that takes payment and fails to deliver the service has not completed a sale; it has taken money. The clean fix is obvious: <strong class="text-paper/65">charge only the amount the customer agrees to pay before printing</strong> — the exact page count, in the correct colour mode — so the machine never holds money it has no service to justify. Get that right and incidents like this one do not begin.</p>
        </div>
    </div>

</div><!-- end main content -->


<!-- ══ FOOTER ══ -->
<footer class="border-t border-paper/[0.05] px-5 md:px-10 py-8 max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-4">
    <div class="font-display text-xl tracking-widest text-paper/18">SUNLIGHT<span class="text-dim">.QUEST</span></div>
    <div class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/10 text-center">© 2026 Sunlight.Quest — Investigative Journalism — Gold Coast, QLD</div>
    <div class="flex gap-4">
        <a href="/" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 1</a>
        <a href="/episode-2" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 2</a>
        <a href="/episode-3" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 3</a>
        <a href="/episode-4" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 4</a>
        <a href="/episode-5" class="text-[0.52rem] tracking-[0.14em] uppercase text-gold/40 hover:text-gold transition-colors">Episode 5</a>
    </div>
</footer>


<!-- ══ TIP MODAL ══ -->
<div id="sq-modal" onclick="sqModalBackdropClick(event)" role="dialog" aria-modal="true" aria-label="Submit a Tip">
    <div class="sq-modal-inner">
        <div class="sq-modal-close-row"><button class="sq-modal-close-btn" onclick="closeTipModal()">✕ CLOSE</button></div>
        <div style="margin-bottom:6px">
            <div class="sq-logo-row"><div class="sq-logo-bar"></div><div><div class="sq-logo-text">Sunlight.Quest</div><div class="sq-logo-sub">Accountability journalism · NSW / Queensland</div></div></div>
            <div class="sq-conf-strip">Encrypted &nbsp;·&nbsp; Source protected &nbsp;·&nbsp; Triangulated for verification</div>
        </div>
        <div class="sq-card" id="sq-form-card">
            <div class="sq-section">
                <div class="sq-section-label">Subject of tip-off <span class="sq-badge sq-badge-req">required</span></div>
                <div class="sq-field">
                    <select class="sq-select" name="sq_subject" id="sq-subject">
                        <option value="">— Select subject / profile —</option>
                        <optgroup label="Episode 5 — Housing"><option>NSW Land and Housing Corporation / Homes NSW</option><option>Rose Jackson (Minister for Housing)</option><option>LAHC property management</option></optgroup>
                        <optgroup label="Episode 1"><option>Marc Barrow (QPS)</option><option>Sandy Tulisi / BeHome</option><option>Felipe Mattos</option><option>RJ — QPS Officer</option><option>Tom Tate (Gold Coast Council)</option></optgroup>
                        <optgroup label="Episode 2"><option>Bodie Chalmers</option><option>West Kira</option><option>Samira / Dave Hodgson</option><option>Alex Vourliotis</option><option>Graham Gordon</option></optgroup>
                        <optgroup label="Episode 3"><option>Bemarine</option><option>Katherine Kidd</option><option>Changfa Agent</option></optgroup>
                        <optgroup label="Episode 4"><option>Hellen Pertekes</option><option>Books R Us</option><option>Kane Singleton</option><option>Z Soielman</option></optgroup>
                        <option>Other (specify below)</option>
                    </select>
                </div>
                <div class="sq-field"><input class="sq-input" type="text" name="sq_subject_other" placeholder="If 'Other' — name or describe the subject" /></div>
                <div class="sq-field"><textarea class="sq-textarea" id="sq-summary" name="sq_summary" placeholder="Summary of what you know — who, what, when, where. Keep it factual." style="min-height:110px;"></textarea><div class="sq-field-hint">Do not include names of uninvolved third parties unless essential to the account.</div></div>
            </div>
            <div class="sq-section">
                <div class="sq-section-label">Evidence / material <span class="sq-badge sq-badge-opt">optional</span></div>
                <div class="sq-field"><select class="sq-select" name="sq_evidence_type"><option value="">— Type of evidence you have —</option><option>Video / footage</option><option>Photos / images</option><option>Audio recording</option><option>Documents / screenshots</option><option>Witness testimony only</option><option>Social media posts / threads</option><option>Multiple types</option></select></div>
                <div class="sq-field"><input class="sq-input" type="url" name="sq_drive_link" placeholder="Google Drive / Dropbox / OneDrive link (set to 'Anyone with link')" /><div class="sq-field-hint">You retain file ownership — we access read-only.</div></div>
                <div class="sq-field"><input class="sq-input" type="url" name="sq_direct_url" placeholder="Direct URL to video, post, or public page" /></div>
                <div class="sq-field"><textarea class="sq-textarea" name="sq_evidence_desc" placeholder="Describe the material — what it shows, when captured, chain of custody if known." style="min-height:72px;"></textarea></div>
            </div>
            <div class="sq-section">
                <div class="sq-section-label">Physical handoff <span class="sq-badge sq-badge-opt">optional</span></div>
                <label class="sq-toggle-row" for="sq-handoff-chk"><input type="checkbox" id="sq-handoff-chk" name="sq_wants_pickup" onchange="sqToggle('sq-handoff-chk','sq-handoff-fields')" /><span>I have physical material (USB, prints, recordings) and want someone to come and collect it</span></label>
                <div class="sq-collapsible" id="sq-handoff-fields">
                    <div class="sq-grid2"><div class="sq-field"><input class="sq-input" type="text" name="sq_pickup_suburb" placeholder="Suburb / area (no full address yet)" /></div><div class="sq-field"><input class="sq-input" type="text" name="sq_pickup_timing" placeholder="Preferred days / times" /></div></div>
                    <div class="sq-field"><textarea class="sq-textarea" name="sq_pickup_notes" placeholder="Special instructions" style="min-height:60px;"></textarea></div>
                </div>
            </div>
            <div class="sq-section">
                <div class="sq-section-label">Triangulation context</div>
                <div class="sq-field"><select class="sq-select" name="sq_relation"><option value="">— Your relationship to the subject —</option><option>Direct witness</option><option>Former associate / colleague</option><option>Family / household member</option><option>Victim or affected party</option><option>Secondary source (told by someone else)</option><option>Public records / online research</option><option>Prefer not to say</option></select></div>
                <div class="sq-checkbox-group sq-field">
                    <label class="sq-checkbox-item"><input type="checkbox" name="sq_has_corroboration" /> I have corroborating witnesses who may also be willing to speak</label>
                    <label class="sq-checkbox-item"><input type="checkbox" name="sq_reported_before" /> I have previously reported this to police or authorities with no result</label>
                    <label class="sq-checkbox-item"><input type="checkbox" name="sq_safety_concern" /> I have safety concerns in relation to this matter</label>
                    <label class="sq-checkbox-item"><input type="checkbox" name="sq_consents_publish" /> I consent to this information being used in published reporting (anonymised)</label>
                </div>
            </div>
            <hr class="sq-divider" />
            <div class="sq-section">
                <div class="sq-section-label">Your details <span class="sq-badge sq-badge-opt">optional</span></div>
                <label class="sq-toggle-row" for="sq-anon-chk"><input type="checkbox" id="sq-anon-chk" name="sq_anonymous" checked onchange="sqToggleAnon()" /><span>Submit anonymously — do not attach contact details to this report</span></label>
                <div class="sq-collapsible" id="sq-contact-fields">
                    <div class="sq-grid2"><div class="sq-field"><input class="sq-input" type="text" name="sq_contact_name" placeholder="Name (or alias)" /></div><div class="sq-field"><input class="sq-input" type="text" name="sq_contact_phone" placeholder="Phone or Signal number" /></div></div>
                    <div class="sq-field"><input class="sq-input" type="email" name="sq_contact_email" placeholder="Email address" /></div>
                    <div class="sq-field"><select class="sq-select" name="sq_contact_pref"><option value="">— Preferred contact method —</option><option>Email only</option><option>Phone call</option><option>SMS / text</option><option>Signal (encrypted)</option><option>In-person only</option></select></div>
                    <div class="sq-field"><textarea class="sq-textarea" name="sq_contact_notes" placeholder="Any specific instructions for how or when to contact you" style="min-height:56px;"></textarea></div>
                </div>
            </div>
        </div>
        <div class="sq-card" id="sq-success-state"><span class="sq-success-word">RECEIVED.</span><p>Your intelligence report has been logged.<br>If you provided contact details, expect a response within 48 hours.</p></div>
        <div class="sq-form-footer" id="sq-form-footer"><p class="sq-footer-note">All submissions are timestamped on receipt. Source identity is never disclosed without explicit consent. Anonymous reports are investigated on merit.</p><button id="sq-submit-btn" onclick="sqSubmit()">SUBMIT TIP →</button></div>
    </div>
</div>


<script>
// ── Reveal on scroll ──
(function(){
    var obs = new IntersectionObserver(function(entries){
        entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('in'); obs.unobserve(e.target); } });
    },{threshold:0.12});
    document.querySelectorAll('.reveal').forEach(function(el){ obs.observe(el); });
})();

// ── Evidence map ──
var EVIDENCE = {
    'order-aug-2025': {
        type: 'pdf',
        title: 'NCAT CONSENT ORDER — 1 AUGUST 2025',
        tag: 'Case 2025/00005577 · Keystone Document · Consent order + 15 Apr 2026 order',
        meta: 'PDF · Sealed NCAT order · Mould remediation · Rent cap $77.95/wk · $291.80 compensation · Repair deadline 1 Nov 2025',
        desc: 'The consent order made on 1 August 2025. By consent, NCAT directed the NSW Land and Housing Corporation to remediate mould and complete repairs by 1 November 2025, capped rent at $77.95/week until the work was done, and ordered $291.80 in compensation. This PDF is served with the 15 April 2026 order.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/2026-04-15_NCAT_order_with_2025-08-01_consent_order_2025-00005577.pdf',
        filename: '2026-04-15_NCAT_order_with_consent_order_2025-00005577.pdf'
    },
    'application-mar-2026': {
        type: 'pdf',
        title: 'FRESH NCAT APPLICATION — 4 MARCH 2026',
        tag: 'Case 2026/00090755 · Filed by tenant · Repairs never completed',
        meta: 'PDF · Fresh NCAT application · Case 2026/00090755',
        desc: 'The fresh application lodged on 4 March 2026 after the consent-ordered repairs were never completed by the 1 November 2025 deadline.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/2026-03-04_NCAT_application_2026-00090755.pdf',
        filename: '2026-03-04_NCAT_application_2026-00090755.pdf'
    },
    'order-apr-2026': {
        type: 'pdf',
        title: 'NCAT ORDER — 29 APRIL 2026',
        tag: 'Virtual attendance · Tenant granted leave to appear virtually',
        meta: 'PDF · NCAT order · 29 April 2026',
        desc: 'Order granting the tenant leave to appear at the hearing virtually.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/2026-04-29_NCAT_order_virtual-attendance.pdf',
        filename: '2026-04-29_NCAT_order_virtual-attendance.pdf'
    },
    'order-may-2026': {
        type: 'pdf',
        title: 'NCAT ORDER — 1 MAY 2026',
        tag: '"The respondent landlord is inspecting" · 6 months after repair deadline',
        meta: 'PDF · NCAT order · 1 May 2026 · Adjourned — landlord inspecting',
        desc: 'The adjournment order of 1 May 2026 — adjourned because the respondent landlord is inspecting. Six months after the repair deadline had already passed.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/2026-05-01_NCAT_order_landlord-inspecting.pdf',
        filename: '2026-05-01_NCAT_order_landlord-inspecting.pdf'
    },
    'order-jun-2026': {
        type: 'pdf',
        title: 'NCAT ORDER — 18 JUNE 2026',
        tag: 'Adjourned by consent · Again',
        meta: 'PDF · NCAT order · 18 June 2026 · Adjourned by consent',
        desc: 'Matter adjourned again, by consent, on 18 June 2026.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/2026-06-18_NCAT_order_adjourned-by-consent+(1).pdf',
        filename: '2026-06-18_NCAT_order_adjourned-by-consent.pdf'
    },
    'urgent-jun-2026': {
        type: 'pdf',
        title: 'URGENT HEARING REQUEST — 26 JUNE 2026',
        tag: 'Emergency application · Power failure + $520 rent · Ausgrid note + mould photos annexed',
        meta: 'PDF · Urgent/expedited hearing request · 26 June 2026 · Case 2026/00090755',
        desc: 'The urgent application lodged on 26 June 2026 after the power failed and rent was raised to $520/week. Contains the Ausgrid note (ref. 66693) and mould photographs as annexures.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/2026-06-26_NCAT_urgent-hearing-request.pdf',
        filename: '2026-06-26_NCAT_urgent-hearing-request.pdf'
    },
    'ausgrid-note': {
        type: 'image',
        title: 'AUSGRID NOTE TO HOUSING ELECTRICIAN — REF. 66693',
        tag: 'Ausgrid · Faulty main switchboard · Life-support customers · Replace directive',
        meta: 'JPG · Ausgrid note · Reference 66693 · Directed to housing electrician',
        desc: 'Ausgrid note to the housing electrician (reference 66693). Records a faulty main switchboard serving the block of units, directs that it be replaced, and notes that the affected units include life-support customers who were temporarily re-routed.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/Ausgrid_note_ref-66693.jpg',
        filename: 'Ausgrid_note_ref-66693.jpg'
    },
    'mould-1': {
        type: 'image',
        title: 'MOULD AT THE PREMISES — PHOTO 1 OF 3',
        tag: 'South Coogee, NSW · Mould on wall and ceiling · Post-remediation-deadline',
        meta: 'JPG · Mould photograph 1 of 3 · Tenant-provided',
        desc: 'Mould on the painted wall and ceiling surfaces. Present despite a consent order requiring remediation by 1 November 2025. The tenant says the mould was painted over rather than treated and has bled back through.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/mould_photo_1.jpg',
        filename: 'mould_photo_1.jpg'
    },
    'mould-2': {
        type: 'image',
        title: 'MOULD AT THE PREMISES — PHOTO 2 OF 3',
        tag: 'South Coogee, NSW · Mould on wall and ceiling',
        meta: 'JPG · Mould photograph 2 of 3 · Tenant-provided',
        desc: 'Mould on the painted wall and ceiling surfaces.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/mould_photo_2.jpg',
        filename: 'mould_photo_2.jpg'
    },
    'mould-3': {
        type: 'image',
        title: 'MOULD AT THE PREMISES — PHOTO 3 OF 3',
        tag: 'South Coogee, NSW · Mould on wall and ceiling',
        meta: 'JPG · Mould photograph 3 of 3 · Tenant-provided',
        desc: 'Mould on the painted wall and ceiling surfaces.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/mould_photo_3.jpg',
        filename: 'mould_photo_3.jpg'
    }
};

var _currentFile = null;

function openMV(key) {
    var ev = EVIDENCE[key];
    if (!ev) return;
    _currentFile = ev;
    document.getElementById('mv-tag').textContent = ev.tag || 'Evidence File';
    document.getElementById('mv-title').textContent = ev.title;
    document.getElementById('mv-meta').textContent = ev.meta || '';
    var body = document.getElementById('mv-body');
    body.innerHTML = '';
    if (ev.type === 'pdf') {
        var wrap = document.createElement('div');
        wrap.style.cssText = 'width:100%;max-width:900px;height:75vh;display:flex;flex-direction:column;gap:1rem';
        var iframe = document.createElement('iframe');
        iframe.src = ev.url;
        iframe.style.cssText = 'width:100%;flex:1;border:1px solid rgba(245,234,212,0.06);background:#fff';
        iframe.title = ev.title;
        var note = document.createElement('p');
        note.style.cssText = 'font-size:0.55rem;color:rgba(245,234,212,0.28);text-align:center;letter-spacing:0.1em';
        note.textContent = ev.desc || '';
        wrap.appendChild(iframe);
        wrap.appendChild(note);
        body.appendChild(wrap);
    } else {
        var wrap = document.createElement('div');
        wrap.style.cssText = 'max-width:900px;width:100%;display:flex;flex-direction:column;gap:1rem;align-items:center';
        var img = document.createElement('img');
        img.src = ev.url;
        img.alt = ev.title;
        img.style.cssText = 'max-width:100%;max-height:75vh;object-fit:contain;border:1px solid rgba(245,234,212,0.06)';
        var note = document.createElement('p');
        note.style.cssText = 'font-size:0.55rem;color:rgba(245,234,212,0.28);text-align:center;letter-spacing:0.1em;max-width:600px';
        note.textContent = ev.desc || '';
        wrap.appendChild(img);
        wrap.appendChild(note);
        body.appendChild(wrap);
    }
    document.getElementById('mv-wrap').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeMV() {
    document.getElementById('mv-wrap').classList.remove('active');
    document.getElementById('mv-body').innerHTML = '';
    document.body.style.overflow = '';
}

function downloadFile() {
    if (!_currentFile) return;
    var a = document.createElement('a');
    a.href = _currentFile.url;
    a.download = _currentFile.filename || 'document';
    a.target = '_blank';
    a.click();
}

document.getElementById('mv-wrap').addEventListener('click', function(e) {
    if (e.target === this) closeMV();
});

// ── Vault toggles ──
function toggleVault(el) { el.classList.toggle('open'); el.nextElementSibling.classList.toggle('open'); }

// ── Tip modal ──
function openTipModal() { document.getElementById('sq-modal').classList.add('open'); document.body.style.overflow='hidden'; }
function closeTipModal() { document.getElementById('sq-modal').classList.remove('open'); document.body.style.overflow=''; }
function sqModalBackdropClick(e) { if(e.target===document.getElementById('sq-modal')) closeTipModal(); }
function sqToggle(chkId, colId) { var open=document.getElementById(chkId).checked; document.getElementById(colId).classList.toggle('open',open); }
function sqToggleAnon() { var anon=document.getElementById('sq-anon-chk').checked; document.getElementById('sq-contact-fields').classList.toggle('open',!anon); }

function sqShowError(msg) {
    var footer = document.getElementById('sq-form-footer');
    var err = document.getElementById('sq-submit-error');
    if (!err) {
        err = document.createElement('p');
        err.id = 'sq-submit-error';
        err.style.cssText = 'width:100%;margin:0 0 4px;color:#c8372d;font-size:0.62rem;letter-spacing:0.04em;line-height:1.5';
        footer.insertBefore(err, footer.firstChild);
    }
    err.textContent = msg;
    err.style.display = 'block';
}
function sqSubmit() {
    var summary = document.getElementById('sq-summary');
    if (!summary.value.trim()) {
        summary.style.borderColor='#c98a10';
        summary.focus();
        return;
    }
    summary.style.borderColor='';

    var card = document.getElementById('sq-form-card');
    var val = function(name) { var el = card.querySelector('[name="' + name + '"]'); return el ? el.value : ''; };
    var chk = function(name) { var el = card.querySelector('[name="' + name + '"]'); return el ? el.checked : false; };

    var payload = {
        subject:             val('sq_subject'),
        subject_other:       val('sq_subject_other'),
        summary:             summary.value.trim(),
        evidence_type:       val('sq_evidence_type'),
        drive_link:          val('sq_drive_link'),
        direct_url:          val('sq_direct_url'),
        evidence_desc:       val('sq_evidence_desc'),
        wants_pickup:        chk('sq_wants_pickup'),
        pickup_suburb:       val('sq_pickup_suburb'),
        pickup_timing:       val('sq_pickup_timing'),
        pickup_notes:        val('sq_pickup_notes'),
        relation_to_subject: val('sq_relation'),
        has_corroboration:   chk('sq_has_corroboration'),
        reported_before:     chk('sq_reported_before'),
        safety_concern:      chk('sq_safety_concern'),
        consents_publish:    chk('sq_consents_publish'),
        is_anonymous:        chk('sq_anonymous'),
        contact_name:        val('sq_contact_name'),
        contact_phone:       val('sq_contact_phone'),
        contact_email:       val('sq_contact_email'),
        contact_pref:        val('sq_contact_pref'),
        contact_notes:       val('sq_contact_notes')
    };

    var btn = document.getElementById('sq-submit-btn');
    var oldLabel = btn.textContent;
    btn.disabled = true;
    btn.textContent = 'SENDING…';

    fetch('/api/tips', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
        body: JSON.stringify(payload)
    })
    .then(function(res) { return res.json().catch(function(){ return {}; }).then(function(data){ return { ok: res.ok, data: data }; }); })
    .then(function(r) {
        if (r.ok && r.data && r.data.success) {
            document.getElementById('sq-form-card').style.display = 'none';
            document.getElementById('sq-form-footer').style.display = 'none';
            document.getElementById('sq-success-state').style.display = 'block';
        } else {
            btn.disabled = false;
            btn.textContent = oldLabel;
            sqShowError((r.data && r.data.message) ? r.data.message : 'Submission failed — please try again.');
        }
    })
    .catch(function() {
        btn.disabled = false;
        btn.textContent = oldLabel;
        sqShowError('Network error — your tip was not sent. Please check your connection and try again.');
    });
}

// ── VIDSTACK PLAYER EP5 INIT ──
(function() {
    var VTT_CONTENT = [
        'WEBVTT',
        '',
        '00:00:00.000 --> 00:05:00.000',
        'NCAT — Dept of Housing',
        '',
        '00:05:00.000 --> 00:09:00.000',
        'Nine Months',
        '',
        '00:09:00.000 --> 00:13:00.000',
        'Lights Out',
        '',
        '00:13:00.000 --> 00:17:00.000',
        '$520 a Week',
        '',
        '00:17:00.000 --> 00:21:00.000',
        'Accountability',
        '',
        '00:21:00.000 --> 00:26:00.000',
        'Evidence',
    ].join('\n');

    function initPlayerEp5() {
        var el = document.getElementById('player-ep5');
        if (!el) return;
        if (typeof el.subscribe !== 'function') {
            setTimeout(initPlayerEp5, 200);
            return;
        }
        window.vidstackPlayerEp5 = el;

        var track = document.getElementById('ep5-chapters-track');
        if (track) {
            var blob = new Blob([VTT_CONTENT], {type: 'text/vtt'});
            track.src = URL.createObjectURL(blob);
        }

        el.subscribe(function(state) {
            var time = state.currentTime;
            var tracks = el.textTracks;
            for (var i = 0; i < tracks.length; i++) {
                if (tracks[i].kind === 'chapters') {
                    var cues = tracks[i].cues;
                    for (var j = 0; j < cues.length; j++) {
                        if (time >= cues[j].startTime && time < cues[j].endTime) {
                            document.querySelectorAll('[data-chap-ep5]').forEach(function(el2) {
                                var match = parseInt(el2.getAttribute('data-chap-ep5'),10) === j;
                                el2.style.background = match ? 'rgba(201,138,16,0.1)' : '';
                                el2.style.borderColor = match ? 'rgba(201,138,16,0.4)' : 'transparent';
                            });
                            break;
                        }
                    }
                    break;
                }
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPlayerEp5);
    } else {
        initPlayerEp5();
    }
})();

function seekToChapterEp5(index) {
    var p = window.vidstackPlayerEp5;
    if (!p) {
        var pl = document.getElementById('player-ep5');
        if (pl) pl.scrollIntoView({behavior:'smooth',block:'center'});
        return;
    }
    var tracks = p.textTracks;
    var ct = null;
    for (var i = 0; i < tracks.length; i++) { if (tracks[i].kind === 'chapters') { ct = tracks[i]; break; } }
    if (ct && ct.cues && ct.cues.length > index) { p.currentTime = ct.cues[index].startTime; }
    else { var d = p.duration || 0; if (d > 0) p.currentTime = (d / 6) * index; }
    p.play().catch(function(){});
    document.getElementById('player-ep5').scrollIntoView({behavior:'smooth',block:'center'});
    document.querySelectorAll('[data-chap-ep5]').forEach(function(el) {
        var match = parseInt(el.getAttribute('data-chap-ep5'),10) === index;
        el.style.background = match ? 'rgba(201,138,16,0.1)' : '';
        el.style.borderColor = match ? 'rgba(201,138,16,0.4)' : 'transparent';
    });
}
</script>

</body>
</html>
