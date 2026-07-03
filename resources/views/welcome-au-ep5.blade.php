<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sunlight.Quest — Episode 5: The Order They Agreed To</title>
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
                    <div class="w-5 h-px bg-gold"></div>
                    <span class="text-[0.55rem] tracking-[0.28em] uppercase text-gold">NSW Land &amp; Housing Corporation · Homes NSW · NCAT · Rose Jackson</span>
                    <span class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/22 border border-paper/10 px-2 py-0.5">2025/00005577</span>
                </div>
                <h1 class="font-display leading-[0.88] tracking-wide" style="font-size:clamp(2.8rem,7vw,5.5rem)">THE ORDER<br><span class="text-gold">THEY AGREED TO.</span></h1>
                <p class="font-serif italic text-paper/40 mt-3 leading-relaxed max-w-lg" style="font-size:clamp(0.9rem,2vw,1.15rem)">A NSW government agency consented to a tribunal order to make a social-housing home habitable. Nearly a year later the repairs still aren't done, the property — a registered life-support address — has lost power, and the rent has been pushed to $520 a week.</p>
            </div>
            <!-- Video player with chapters -->
            <div class="fade-up mb-5" style="animation-delay:0.2s">
                <div class="flex items-center gap-3 mb-2"><span class="text-[0.52rem] tracking-[0.2em] uppercase text-gold/60">▶ Now Playing — Navigate via chapters below</span></div>
                <media-player
                    id="player-ep5"
                    title="The Order They Agreed To — Episode 5"
                    src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/r+j/rj_confront.mp4"
                    poster="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lahc/mould_photo_1.jpg"
                    style="--media-brand:#c98a10;--media-focus-ring-color:rgba(201,138,16,0.45);--media-time-chapters-bg:rgba(201,138,16,0.5);width:100%;border:1px solid rgba(201,138,16,0.2);box-shadow:0 0 80px rgba(201,138,16,0.09),0 0 0 1px rgba(245,234,212,0.025);aspect-ratio:16/9"
                >
                    <media-provider>
                        <track id="ep5-chapters-track" kind="chapters" default />
                    </media-provider>
                    <media-video-layout></media-video-layout>
                </media-player>
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
