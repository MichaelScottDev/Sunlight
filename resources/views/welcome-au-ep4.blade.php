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
    <link rel="stylesheet" href="https://cdn.vidstack.io/player/theme.css">
    <link rel="stylesheet" href="https://cdn.vidstack.io/player/video.css">
    <script src="https://cdn.vidstack.io/player" type="module"></script>
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
        /* ── TIP MODAL ── */
        #sq-modal{display:none;position:fixed;inset:0;z-index:9600;background:rgba(0,0,0,0.9);backdrop-filter:blur(5px);overflow-y:auto;padding:24px 16px 56px}
        #sq-modal.open{display:block}
        .sq-modal-inner{max-width:680px;margin:0 auto;position:relative}
        .sq-modal-close-row{display:flex;justify-content:flex-end;margin-bottom:12px}
        .sq-modal-close-btn{background:#111;border:1px solid #2a2a2a;color:rgba(245,234,212,0.4);font-family:'DM Mono',monospace;font-size:11px;letter-spacing:1px;padding:7px 16px;cursor:pointer;transition:color 0.13s,border-color 0.13s}
        .sq-modal-close-btn:hover{color:rgba(245,234,212,0.85);border-color:#555}
        .sq-logo-row{display:flex;align-items:center;gap:14px;margin-bottom:6px}
        .sq-logo-bar{width:4px;height:40px;background:#c8372d;flex-shrink:0}
        .sq-logo-text{font-family:'Bebas Neue',sans-serif;font-size:30px;color:#f5f0e8;letter-spacing:3px;line-height:1}
        .sq-logo-sub{font-family:'Instrument Serif',serif;font-size:12px;color:#5a5045;font-style:italic}
        .sq-conf-strip{background:#c8372d;color:#f5f0e8;font-size:8px;letter-spacing:2px;text-transform:uppercase;padding:5px 12px;margin:12px 0 18px;display:inline-block}
        .sq-card{background:#111;border:1px solid #222;padding:22px;margin-bottom:2px}
        .sq-section{margin-bottom:22px}
        .sq-section-label{font-family:'Bebas Neue',sans-serif;font-size:12px;letter-spacing:2.5px;color:#f5f0e8;margin-bottom:12px;display:flex;align-items:center;gap:10px}
        .sq-section-label::after{content:'';flex:1;height:1px;background:#222}
        .sq-badge{font-family:'DM Mono',monospace;font-size:8px;letter-spacing:1px;padding:2px 6px;text-transform:uppercase}
        .sq-badge-opt{background:#1e1e1e;color:#4a4035}.sq-badge-req{background:#c8372d;color:#f5f0e8}
        .sq-field{margin-bottom:10px}
        .sq-field-hint{font-size:10px;color:#3a3530;margin-top:4px;letter-spacing:0.3px;line-height:1.5}
        .sq-grid2{display:grid;grid-template-columns:1fr 1fr;gap:10px}
        .sq-input,.sq-textarea,.sq-select{width:100%;background:#161616;border:1px solid #2a2a2a;color:#e8e2d4;font-family:'DM Mono',monospace;font-size:12px;padding:10px 12px;outline:none;border-radius:0;-webkit-appearance:none;appearance:none;transition:border-color 0.13s,background 0.13s}
        .sq-input:focus,.sq-textarea:focus,.sq-select:focus{border-color:#c8372d;background:#1a1510}
        .sq-input::placeholder,.sq-textarea::placeholder{color:#2e2a26;font-style:italic}
        .sq-textarea{resize:vertical;min-height:90px;line-height:1.65}
        .sq-select{background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M0 0l5 6 5-6z' fill='%23e8e2d4'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 12px center;background-color:#161616;padding-right:34px;cursor:pointer}
        .sq-select option{background:#161616;color:#e8e2d4}
        .sq-input.sq-error{border-color:#c8372d}
        .sq-toggle-row{display:flex;align-items:flex-start;gap:11px;background:#161616;border:1px solid #2a2a2a;padding:11px 12px;margin-bottom:10px;cursor:pointer;font-family:'DM Mono',monospace;font-size:11px;color:#7a7060;line-height:1.55;user-select:none;transition:border-color 0.13s}
        .sq-toggle-row:hover{border-color:#3a3a3a}
        .sq-toggle-row input[type=checkbox]{accent-color:#c8372d;width:14px;height:14px;margin-top:2px;flex-shrink:0;cursor:pointer}
        .sq-checkbox-group{display:flex;flex-direction:column;gap:8px}
        .sq-checkbox-item{display:flex;align-items:flex-start;gap:10px;font-family:'DM Mono',monospace;font-size:11px;cursor:pointer;color:#6a6055;line-height:1.55;padding:2px 0}
        .sq-checkbox-item input[type=checkbox]{accent-color:#c8372d;width:14px;height:14px;margin-top:1px;flex-shrink:0;cursor:pointer}
        .sq-collapsible{display:none;margin-top:10px}.sq-collapsible.open{display:block}
        .sq-divider{border:none;border-top:1px solid #1e1e1e;margin:20px 0}
        .sq-form-footer{background:#0d0d0d;border:1px solid #222;border-top:3px solid #c8372d;padding:16px 22px;display:flex;align-items:center;justify-content:space-between;gap:16px}
        .sq-footer-note{font-size:10px;color:#3a3530;max-width:380px;line-height:1.7}
        #sq-submit-btn{font-family:'Bebas Neue',sans-serif;font-size:17px;letter-spacing:2.5px;background:#c8372d;color:#f5f0e8;border:none;padding:12px 30px;cursor:pointer;transition:background 0.13s,transform 0.1s;white-space:nowrap}
        #sq-submit-btn:hover{background:#a82e26}
        #sq-submit-btn:active{transform:scale(0.97)}
        #sq-success-state{display:none;text-align:center;padding:56px 24px}
        .sq-success-word{font-family:'Bebas Neue',sans-serif;font-size:60px;color:#c8372d;letter-spacing:5px;display:block;margin-bottom:12px}
        #sq-success-state p{font-family:'Instrument Serif',serif;font-size:17px;color:#5a5045;font-style:italic;line-height:1.75}
        @media(max-width:520px){.sq-grid2{grid-template-columns:1fr}.sq-form-footer{flex-direction:column;align-items:stretch}#sq-submit-btn{width:100%;text-align:center}}
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
        <a href="/episode-3" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors border border-paper/15 hover:border-gold/50 px-3 py-1.5 transition-all">← Episode 3</a>
        <button onclick="openTipModal()" class="hidden md:flex items-center gap-1.5 text-[0.55rem] tracking-[0.2em] uppercase border border-hot/50 hover:border-hot hover:bg-hot/10 px-3 py-1.5 text-hot transition-all">⊕ Submit a Tip</button>
        <a href="/episode-5" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase border px-3 py-1.5 transition-all" style="border-color:rgba(201,138,16,0.45);color:#c98a10" onmouseover="this.style.borderColor='#c98a10';this.style.background='rgba(201,138,16,0.08)'" onmouseout="this.style.borderColor='rgba(201,138,16,0.45)';this.style.background=''">Episode 5 →</a>
        <a href="/episode-3" title="Go to Episode 3" aria-label="Go to Episode 3" class="flex md:hidden items-center gap-1 px-2.5 h-8 border font-display text-[0.6rem] tracking-widest" style="border-color:rgba(201,138,16,0.5);color:#c98a10">‹ EP3</a>
        <span class="text-[0.52rem] tracking-[0.18em] uppercase border px-3 py-1.5 blink" style="border-color:rgba(61,122,74,0.6);color:#3d7a4a">⬤ EP.04</span>
        <a href="/episode-5" title="Go to Episode 5" aria-label="Go to Episode 5" class="flex md:hidden items-center gap-1 px-2.5 h-8 border font-display text-[0.6rem] tracking-widest" style="border-color:rgba(201,138,16,0.5);color:#c98a10">EP5 ›</a>
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
        <div class="flex flex-col justify-start px-5 md:px-10 py-8 lg:py-10">
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
                <div class="flex items-center gap-3 mb-2"><span class="text-[0.52rem] tracking-[0.2em] uppercase text-sage/60">▶ Now Playing — Navigate via chapters below</span></div>
                <media-player
                    id="player-ep4"
                    title="The Accountant — Episode 4"
                    src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/r+j/rj_confront.mp4"
                    poster="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/hellen_pertekes.jpeg"
                    style="--media-brand:#3d7a4a;--media-focus-ring-color:rgba(61,122,74,0.45);--media-time-chapters-bg:rgba(61,122,74,0.5);width:100%;border:1px solid rgba(61,122,74,0.2);box-shadow:0 0 80px rgba(61,122,74,0.09),0 0 0 1px rgba(245,234,212,0.025);aspect-ratio:16/9"
                >
                    <media-provider>
                        <track id="ep4-chapters-track" kind="chapters" default />
                    </media-provider>
                    <media-video-layout></media-video-layout>
                </media-player>
            </div>
            <!-- Chapter nav -->
            <div class="fade-up mt-5 border border-paper/[0.07]" style="animation-delay:0.35s;background:rgba(12,8,4,0.7)">
                <div class="px-4 py-2 border-b border-paper/[0.06]">
                    <span class="text-[0.46rem] tracking-[0.22em] uppercase text-paper/22">Episode 4 — Chapters</span>
                </div>
                <div class="flex flex-wrap gap-0">
                    <a href="#hellen-pertekes" data-chap-ep4="0" onclick="seekToChapterEp4(0)" class="flex items-center gap-2 px-4 py-3 hover:bg-sage/8 border-r border-paper/[0.06] transition-all group" style="border:1px solid transparent">
                        <span class="font-display text-[0.62rem] text-sage">01</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Hellen Pertekes</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Books R Us · ATO · NSD2438/2025</div></div>
                    </a>
                    <a href="#kennards" data-chap-ep4="1" onclick="seekToChapterEp4(1)" class="flex items-center gap-2 px-4 py-3 hover:bg-hot/8 border-r border-paper/[0.06] transition-all group" style="border:1px solid transparent">
                        <span class="font-display text-[0.62rem] text-hot">02</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Kennards</div><div class="text-[0.47rem] text-paper/22 tracking-wider">$25 dispute · Federal Court</div></div>
                    </a>
                    <a href="#pioneer-lakes" data-chap-ep4="2" onclick="seekToChapterEp4(2)" class="flex items-center gap-2 px-4 py-3 hover:bg-sage/8 border-r border-paper/[0.06] transition-all group" style="border:1px solid transparent">
                        <span class="font-display text-[0.62rem] text-sage">03</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Pioneer Lakes</div><div class="text-[0.47rem] text-paper/22 tracking-wider">New deal · Mackay</div></div>
                    </a>
                    <a href="#kira-steinhaus" data-chap-ep4="3" onclick="seekToChapterEp4(3)" class="flex items-center gap-2 px-4 py-3 hover:bg-hot/8 border-r border-paper/[0.06] transition-all group" style="border:1px solid transparent">
                        <span class="font-display text-[0.62rem] text-hot">04</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Kira Steinhaus</div><div class="text-[0.47rem] text-paper/22 tracking-wider">$3.5M demand · uninvited</div></div>
                    </a>
                    <a href="#kane-singleton" data-chap-ep4="4" onclick="seekToChapterEp4(4)" class="flex items-center gap-2 px-4 py-3 hover:bg-hot/8 border-r border-paper/[0.06] transition-all group" style="border:1px solid transparent">
                        <span class="font-display text-[0.62rem] text-hot">05</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Kane Singleton</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Muay Thai · Charges laid</div></div>
                    </a>
                    <a href="#z-soielman" data-chap-ep4="5" onclick="seekToChapterEp4(5)" class="flex items-center gap-2 px-4 py-3 hover:bg-hot/8 transition-all group" style="border:1px solid transparent">
                        <span class="font-display text-[0.62rem] text-hot">06</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Z Soielman</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Home invasion · Remand</div></div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Right sidebar — episode summary + seekable chapters -->
        <div class="hidden lg:flex flex-col border-l border-paper/[0.06]" style="background:rgba(12,8,4,0.6)">
            <div class="px-6 py-6 border-b border-paper/[0.06] fade-up" style="animation-delay:0.15s">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">This Episode</div>
                <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">The accountant who had access to Adam Watson's finances and used his trust deliberately — now running an NDIS business. Plus a $25 billing dispute that escalated to the Federal Court, a $3.5M uninvited commission demand at Pioneer Lakes, and two violent associates now before the courts.</p>
                <div class="grid grid-cols-3 gap-2 text-center">
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-sage">ATO</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Tax Fraud</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-hot">FCA</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Federal Court</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl" style="color:#c98a10">NDIS</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Business</div></div>
                </div>
            </div>
            <div class="px-5 py-4 border-b border-paper/[0.06]">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">Episode Chapters</div>
                <div class="space-y-0.5">
                    <button data-chap-ep4="0" onclick="seekToChapterEp4(0)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(61,122,74,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem] text-sage">01</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">Hellen Pertekes</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Books R Us · ATO · NSD2438/2025</div>
                        </div>
                    </button>
                    <button data-chap-ep4="1" onclick="seekToChapterEp4(1)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(193,68,14,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem] text-hot">02</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">Kennards</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">$25 dispute · Federal Court</div>
                        </div>
                    </button>
                    <button data-chap-ep4="2" onclick="seekToChapterEp4(2)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(61,122,74,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem] text-sage">03</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">Pioneer Lakes</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">New deal · Mackay</div>
                        </div>
                    </button>
                    <button data-chap-ep4="3" onclick="seekToChapterEp4(3)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(193,68,14,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem] text-hot">04</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">Kira Steinhaus</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">$3.5M demand · uninvited</div>
                        </div>
                    </button>
                    <button data-chap-ep4="4" onclick="seekToChapterEp4(4)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(193,68,14,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem] text-hot">05</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">Kane Singleton</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Muay Thai · Charges laid</div>
                        </div>
                    </button>
                    <button data-chap-ep4="5" onclick="seekToChapterEp4(5)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(193,68,14,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem] text-hot">06</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">Z Soielman</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Home invasion · Remand</div>
                        </div>
                    </button>
                </div>
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
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">BOOKS R US ACCOUNTING.<br><span class="text-sage">THE FIRM ADAM WATSON TRUSTED WITH HIS TAXES.</span></h3>
                <!-- Books R Us logo -->
                <div class="flex items-center gap-4 mb-5">
                    <a href="https://books-r-us.com.au/" target="_blank" rel="noopener noreferrer">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/Boos-r-us-accounting-logo-retina.jpg" alt="Books R Us Accounting" style="max-height:60px;width:auto;object-fit:contain;" />
                    </a>
                    <a href="https://books-r-us.com.au/" target="_blank" rel="noopener noreferrer" class="text-[0.6rem] text-sage/70 hover:text-sage underline underline-offset-2 tracking-wide">books-r-us.com.au</a>
                </div>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Adam Watson contracted Hellen Pertekes — Principal at Books R Us Accounting — to handle his tax affairs. What followed led to Federal Court proceedings."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Adam Watson contracted <strong class="text-paper/65">Hellen Pertekes</strong>, Principal at <strong class="text-paper/65">Books R Us Accounting</strong>, to manage his tax affairs. He paid for the service. Returns were not lodged. The ATO, in the course of pursuing Adam Watson as the taxpayer of record, became the mechanism through which the failure to lodge was first surfaced as a formal matter.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                    <div class="border border-sage/20 p-4" style="background:rgba(61,122,74,0.03)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-2">The Business</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Name:</strong> Books R Us Accounting</p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Website:</strong> <a href="https://books-r-us.com.au/" target="_blank" class="text-sage/70 hover:text-sage underline underline-offset-2">books-r-us.com.au</a></p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Principal:</strong> Hellen Pertekes</p></div>
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

                <div class="border border-hot/25 p-5 mb-5" style="background:rgba(193,68,14,0.05)">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-3">Update — She Deleted Everything · The Director ID</div>
                    <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">SHE WIPED HIM FROM HER RECORDS.<br><span class="text-hot">INCLUDING HIS DIRECTOR ID.</span></h4>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Hellen Pertekes has now <strong class="text-paper/65">confirmed that she deleted everything relating to Adam Watson</strong> — including his <strong class="text-paper/65">Director Identification Number (Director ID)</strong>.</p>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed">The consequence is concrete and current: without that record, Adam Watson has been <strong class="text-paper/65">unable to obtain his Director ID</strong> — which has stopped him from <strong class="text-paper/65">verifying his identity on a share transfer document</strong>. An accountant deleting a client's core corporate identifiers is not housekeeping; it is the removal of the very records a director needs to act, and it is actively blocking a live transaction.</p>
                </div>
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

            <!-- Chapter 3B: The Contradiction — ATT Mediation vs District Court Record -->
            <div class="story-chapter reveal" style="border-left-color:rgba(201,138,16,0.5)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">The Contradiction</span>
                    <span class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/25 border border-paper/10 px-2 py-0.5">Federal Court · District Court · ATT</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">SHE SAID SHE WAS TOLD TO WALK AWAY.<br><span class="text-gold">THE COURT RECORD SAYS SOMETHING DIFFERENT.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"In the Federal Court, Hellen Pertekes stated she was instructed to email the Administrative Appeals Tribunal to discontinue Adam Watson's action. Adam found District Court paperwork that contradicts her account directly — ATO lawyers on the record calling him a liar and a cheat."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">In the Federal Court proceedings, Hellen Pertekes stated that she was <strong class="text-paper/65">instructed to email the Administrative Appeals Tribunal</strong> to discontinue the action — an action that Adam Watson had initiated against the Australian Taxation Office following a mediation he pursued. Her account frames the discontinuation as an instruction she was following: she was told to pull the matter, and she did.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Adam Watson has since located <strong class="text-paper/65">District Court documentation</strong> that directly contradicts this account. In that paperwork, the ATO's own lawyers — on the record — referred to Adam Watson as <strong class="text-hot">"a liar and a cheat."</strong> This is not an informal characterisation. It is a statement made by legal representatives of the Commonwealth in a formal court filing. If the ATO's position was that Adam Watson was dishonest, then the question of why his accountant was separately instructed to withdraw his administrative appeal — the one mechanism through which he could have challenged that characterisation — becomes critical to the record.</p>

                <!-- The Contradiction Box -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                    <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.03)">
                        <div class="text-[0.44rem] tracking-[0.2em] uppercase text-gold mb-3">What Pertekes Said in Federal Court</div>
                        <div class="space-y-2">
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">She was instructed to email the ATT to discontinue the action</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Adam Watson had initiated the mediation with the ATO</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Her account frames it as following an instruction</p></div>
                        </div>
                    </div>
                    <div class="border border-hot/25 p-5" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-3">What the District Court Record Shows</div>
                        <div class="space-y-2">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">ATO lawyers called Adam Watson <strong class="text-paper/65">"a liar and a cheat"</strong> on the record</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">This directly contradicts Pertekes's Federal Court account</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Paperwork located by Adam Watson — not disclosed by any party</p></div>
                        </div>
                    </div>
                </div>

                <!-- Smoking gun -->
                <div class="border border-gold/30 px-5 py-4 mb-5" style="background:rgba(201,138,16,0.06)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-gold mb-2">The Smoking Gun</div>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed">The District Court documentation is not a peripheral document. It is the paper record that places the ATO's own legal position — characterising Adam Watson as dishonest — alongside a proceeding in which the mechanism for challenging that position was simultaneously being removed. If Pertekes was instructed to discontinue Adam Watson's ATT action, and the ATO's lawyers were simultaneously calling him a liar in a different court, the question of who gave that instruction, and why, is the core question of this entire matter. This documentation will form the evidentiary foundation of Adam Watson's case against the ATO.</p>
                </div>

                <!-- ATO abuse of authority -->
                <div class="border border-hot/30 px-5 py-4" style="background:rgba(193,68,14,0.05)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">The ATO and the Misuse of Institutional Authority</div>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">The Australian Taxation Office occupies a position of structural authority that few Commonwealth agencies match. It holds the power to freeze assets, initiate proceedings, compel disclosure, and attach debt to a person's name with consequences that flow through every aspect of their financial life. That authority is granted on the assumption that it will be used to enforce legitimate tax obligations — not to pursue a taxpayer whose accountant deliberately withheld their returns, then withdrew the administrative appeal that could have corrected the record.</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">When the ATO's own lawyers call a taxpayer "a liar and a cheat" in a formal court document, while that taxpayer's accountant is simultaneously — on their own account — being instructed to kill his administrative appeal, the question of institutional conduct is no longer abstract. It is a concrete question about whether the ATO's enforcement apparatus was used in a manner consistent with its legislative purpose, or whether it was deployed as a blunt instrument against a person who had been set up to fail.</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed">The Inspector-General of Taxation exists precisely for situations like this. The Federal Court proceedings — NSD2438/2025 — are the vehicle. The District Court documentation is the contradiction that makes the whole account unstable. Adam Watson is not the person who needs to explain himself. The ATO does.</p>
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

                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"While Federal Court proceedings are active, Hellen Pertekes has opened an NDIS business. She is the Director. The clients are now disabled Australians accessing government-funded care — not taxpayers."</p>
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
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Previous business:</strong> Books R Us Accounting</p></div>
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

                <!-- "I want to see you fail" -->
                <div class="border border-hot/40 p-5 mt-5 mb-2" style="background:rgba(193,68,14,0.07)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-3">Direct Statement — Hellen Pertekes to Adam Watson</div>
                    <p class="font-display text-xl tracking-wide text-paper/80 leading-tight mb-4">"I WANT TO SEE YOU FAIL.<br>AND I WANT TO SEE YOU EATING OUT OF A BIN."</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Hellen Pertekes called Adam Watson and told him directly: <em class="text-paper/70">"I want to see you fail. And I want to see you eating out of a bin."</em> This is the person who was entrusted with his tax affairs. The person who held access to his financial records. The person whose deliberate failure to lodge his returns — admitted to a staff member as intentional — is now the subject of Federal Court proceedings.</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed">The statement removes any ambiguity about motivation. A person who had not acted deliberately would have no reason to make that call. A person who had simply made errors would not ring their former client to tell them they hoped to watch them eating out of a bin. The call is an admission of intent delivered in the language of contempt.</p>
                </div>

                <div class="border border-hot/30 px-5 py-4" style="background:rgba(193,68,14,0.06)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">The Pattern</div>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed">A person who was simultaneously failing to lodge a client's tax returns — and has since admitted to a staff member that this was intentional — also obtained $20,000 from that same client under a fabricated medical emergency. The two acts of dishonesty were concurrent. They were directed at the same person. And the professional relationship that made both possible was one built on trust: she was his accountant, she had access to his financial information, and he had no reason at the time to question her.</p>
                </div>

                <!-- ATO aware she lied; now claiming sickness to avoid Court -->
                <div class="border border-sage/25 p-5 mt-5 mb-2" style="background:rgba(61,122,74,0.05)">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-[0.46rem] tracking-[0.2em] uppercase text-sage">Update — The ATO Now Knows She Lied</span>
                        <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-sage/50 text-sage px-1.5 py-0.5">⬤ SAME PATTERN</span>
                    </div>
                    <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">"TOO SICK FOR COURT."<br><span class="text-sage">THE SAME MOVE SHE PULLED FOR $20,000.</span></h4>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">The Australian Taxation Office has made comments indicating it is now aware that <strong class="text-paper/65">Hellen Pertekes lied</strong>. With that recognition on the record, Pertekes is now trying to get out of going to Court by claiming she is <strong class="text-paper/65">sick</strong>.</p>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed">It is the same pattern she used on Adam Watson. A fabricated illness was the mechanism of the <strong class="text-paper/65">$20,000 medical scam</strong> documented above — a claimed sickness that her own doctor confirmed did not exist. Now, facing a court that needs her testimony, the illness reappears. The tactic that once extracted money is now being deployed to avoid accountability — and a person whose credibility is already in question does not repair it by producing the very same excuse a second time.</p>
                </div>

                <!-- "I want to see you fail" -->
                <div class="border border-hot/40 p-5 mt-5 mb-2" style="background:rgba(193,68,14,0.07)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-3">Direct Statement — Hellen Pertekes to Adam Watson</div>
                    <p class="font-display text-xl tracking-wide text-paper/80 leading-tight mb-4">"I WANT TO SEE YOU FAIL.<br>AND I WANT TO SEE YOU EATING OUT OF A BIN."</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Hellen Pertekes called Adam Watson and told him directly: <em class="text-paper/70">"I want to see you fail. And I want to see you eating out of a bin."</em> This is the person who was entrusted with his tax affairs. The person who held access to his financial records. The person whose deliberate failure to lodge his returns — admitted to a staff member as intentional — is now the subject of Federal Court proceedings.</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed">The statement removes any ambiguity about motivation. A person who had not acted deliberately would have no reason to make that call. A person who had simply made errors would not ring their former client to tell them they hoped to watch them eating out of a bin. The call is an admission of intent delivered in the language of contempt.</p>
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


<!-- ══════════════════════════════════════
     KENNARDS SELF STORAGE
══════════════════════════════════════ -->
<section id="kennards" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.05) 0%,transparent 60%)">
    <div class="max-w-4xl mx-auto">

        <div class="flex items-center gap-3 mb-3 reveal">
            <div class="w-4 h-px bg-hot"></div>
            <span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Corporate Conduct · Federal Court · QUD18/2024</span>
        </div>
        <h2 class="font-display leading-none tracking-wide mb-3 reveal" style="font-size:clamp(2.4rem,6vw,4rem)">THE $25 QUESTION.<br><span class="text-hot">KENNARDS SELF STORAGE.</span></h2>
        <p class="font-serif italic text-paper/45 text-lg leading-relaxed mb-8 reveal max-w-2xl">How Kennards Self Storage responded to a billing error with police threats, access blockages, a mock eviction, and a Piper Alderman legal team — and what a Federal Court judgment reveals about the gap between corporate conduct and legal accountability.</p>

        <!-- Key case facts -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px mb-10 reveal" style="background:rgba(245,234,212,0.04)">
            <div class="py-5 px-4 text-center" style="background:#0c0804">
                <div class="font-display text-3xl md:text-4xl text-hot mb-1">$25</div>
                <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/30">Original disputed charge</div>
            </div>
            <div class="py-5 px-4 text-center" style="background:#0c0804">
                <div class="font-display text-3xl md:text-4xl text-hot mb-1">7</div>
                <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/30">Weeks of escalation</div>
            </div>
            <div class="py-5 px-4 text-center" style="background:#0c0804">
                <div class="font-display text-3xl md:text-4xl text-paper/55 mb-1">80+</div>
                <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/30">Kennards facilities nationally</div>
            </div>
            <div class="py-5 px-4 text-center" style="background:#0c0804">
                <div class="font-display text-3xl md:text-4xl text-paper/55 mb-1">1</div>
                <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/30">Self-represented homeless man</div>
            </div>
        </div>

        <!-- Chapter A: The Error -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter A — The Error · 27 November 2023</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">A $25 FEE ALREADY PAID.<br><span class="text-hot">THE AUTOMATED SYSTEM DIDN'T RECORD IT.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">On the morning of 27 November 2023, Kennards' automated billing system generated an incomplete account statement for a customer at its Southport facility. The statement listed a $25 lock-cutting fee as an outstanding charge. The fee had already been paid ten days earlier by EFTPOS. The customer — a homeless man who had been living in a tent and relying on the storage unit for his possessions — emailed the centre the same day to flag the discrepancy, politely, with a receipt attached.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">What followed over the next seven weeks was not an apology. It was a corporate siege.</p>
            <div class="border border-hot/25 p-5 mb-4" style="background:rgba(193,68,14,0.05)">
                <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">Sworn Evidence — Kellie Robley Affidavit, Para. 8 · Federal Court QUD18/2024</div>
                <p class="text-[0.68rem] text-paper/60 leading-relaxed italic">"The Incomplete Statement, which was <strong class="text-paper/80 not-italic">automatically generated by Kennards' computer system</strong>, was incomplete because it included only seven entries, the final entry being a charge for $25.00 on 17 November 2023."</p>
                <div class="text-[0.42rem] tracking-[0.12em] uppercase text-paper/25 mt-2">Kellie Robley · Operations Manager · Sworn Affidavit · 12 April 2024</div>
            </div>
            <p class="text-[0.68rem] text-paper/45 leading-relaxed">The customer's email of 27 November, raising the double charge with a receipt attached, was not responded to. This fact was subsequently admitted by Kennards' own lawyers in their Defence filed in the Federal Court.</p>
        </div>

        <!-- ═══ SMOKING GUN ═══ -->
        <div class="reveal mb-12">
            <div class="mb-6 px-5 py-4 flex items-center gap-3" style="background:rgba(193,68,14,0.14);border:1px solid rgba(193,68,14,0.5)">
                <span class="font-display text-xs tracking-[0.25em] uppercase text-hot">The Smoking Gun</span>
                <span class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/35 border border-paper/15 px-2 py-0.5">Three Documents · Read Together · Agreement 500002187 · Unit J041</span>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/55 mb-8">Three documents. Read together, they prove the billing error was real, that Kennards was already aware of the payment, and that the amount being demanded in writing did not match the statement attached to that same demand. This is what a $25 dispute looked like in writing — before Kennards escalated it to police threats, access blockage, and a Federal Court proceeding.</p>

            <!-- DOCUMENT 1 — Statement -->
            <div class="reveal mb-8" style="border:2px solid rgba(193,68,14,0.6);box-shadow:0 0 40px rgba(193,68,14,0.12)">
                <div class="px-4 py-3 flex items-center justify-between" style="background:rgba(193,68,14,0.2);border-bottom:1px solid rgba(193,68,14,0.35)">
                    <div class="flex items-center gap-3">
                        <span class="font-display text-sm tracking-[0.2em] uppercase text-hot">Document 1 — The Statement</span>
                        <span class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/45">Agreement 500002187 · Unit J041 · Generated 27 Nov 2023 8:32AM</span>
                    </div>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kennards/smoking-gun-1-incorrect-statement.pdf" target="_blank" rel="noopener" class="text-[0.48rem] tracking-[0.15em] uppercase text-hot/60 hover:text-hot border border-hot/30 hover:border-hot/60 px-2.5 py-1 transition-colors">↗ Open</a>
                </div>

                <!-- Issues callout -->
                <div class="px-5 py-5" style="background:rgba(193,68,14,0.07);border-bottom:1px solid rgba(193,68,14,0.2)">
                    <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-4">Issues Identified — Statement 500002187</div>
                    <div class="space-y-3">
                        <div class="flex gap-3 items-start border border-hot/20 p-3" style="background:rgba(193,68,14,0.06)">
                            <span class="font-display text-base text-hot shrink-0 w-6 leading-none mt-0.5">1</span>
                            <div>
                                <div class="text-[0.53rem] tracking-[0.1em] uppercase text-hot/75 mb-1">Statement Period: 00/00/00 to 00/00/00</div>
                                <p class="text-[0.6rem] text-paper/55 leading-relaxed">The billing period is completely blank — "From 00/00/00 to 00/00/00." This is not a valid billing statement. A statement with no dates cannot establish when charges accrued, cannot be verified against a billing cycle, and cannot legally support a demand for payment. This is the document Kennards used to demand $235.40.</p>
                            </div>
                        </div>
                        <div class="flex gap-3 items-start border border-hot/20 p-3" style="background:rgba(193,68,14,0.06)">
                            <span class="font-display text-base text-hot shrink-0 w-6 leading-none mt-0.5">2</span>
                            <div>
                                <div class="text-[0.53rem] tracking-[0.1em] uppercase text-hot/75 mb-1">LockCut + NewLock — $25.00 Listed as Unpaid · 17/11/2023</div>
                                <p class="text-[0.6rem] text-paper/55 leading-relaxed">The statement charges $25.00 for "LockCut + NewLock" dated 17 November 2023 with no corresponding payment entry. The Westpac receipt (Document 2) proves this exact $25.00 was paid by EFTPOS to Kennards Southport on that same date — 17 November 2023. Kennards' own sworn affidavit describes this as an "Incomplete Statement" produced by an automated system that failed to record the payment.</p>
                            </div>
                        </div>
                        <div class="flex gap-3 items-start border border-hot/20 p-3" style="background:rgba(193,68,14,0.06)">
                            <span class="font-display text-base text-hot shrink-0 w-6 leading-none mt-0.5">3</span>
                            <div>
                                <div class="text-[0.53rem] tracking-[0.1em] uppercase text-hot/75 mb-1">Security Call Out: $85 — Customer Was Quoted $65</div>
                                <p class="text-[0.6rem] text-paper/55 leading-relaxed">The Security Call Out charge on 4 November 2023 is $85.00. The customer was verbally informed the security callout fee was $65. The $20 discrepancy was raised in writing on 27 November and again on 5 December. It was not addressed or explained by Kennards at any point.</p>
                            </div>
                        </div>
                        <div class="flex gap-3 items-start border border-hot/20 p-3" style="background:rgba(193,68,14,0.06)">
                            <span class="font-display text-base text-hot shrink-0 w-6 leading-none mt-0.5">4</span>
                            <div>
                                <div class="text-[0.53rem] tracking-[0.1em] uppercase text-hot/75 mb-1">Statement Balance ($128.90) Does Not Match Email Demand ($235.40)</div>
                                <p class="text-[0.6rem] text-paper/55 leading-relaxed">The statement's line items produce a closing balance of <strong class="text-paper/80">$128.90</strong>. The automated email sent at 08:31:58 — with this same statement attached — demands payment of <strong class="text-hot">$235.40</strong>. A $106.50 discrepancy between the amount demanded in writing and the balance shown on the attached document. The customer is being asked to pay $235.40 on the basis of a statement that shows $128.90 owing.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <iframe src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kennards/smoking-gun-1-incorrect-statement.pdf"
                        class="w-full" style="min-height:540px;height:540px;border:none;filter:brightness(0.92)" loading="lazy"
                        title="Kennards Incorrect Statement — Agreement 500002187"></iframe>
                <div class="px-4 py-2 flex flex-wrap gap-4" style="background:rgba(193,68,14,0.1);border-top:1px solid rgba(193,68,14,0.25)">
                    <span class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/65">Agreement 500002187 · Unit J041</span>
                    <span class="text-paper/15">·</span>
                    <span class="text-[0.43rem] tracking-[0.14em] uppercase text-paper/30">Period: 00/00/00 to 00/00/00</span>
                    <span class="text-paper/15">·</span>
                    <span class="text-[0.43rem] tracking-[0.14em] uppercase text-paper/30">Generated 27/11/2023 · 8:32:00 AM</span>
                    <span class="text-paper/15">·</span>
                    <span class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/65">$25 LockCut shown unpaid — already paid</span>
                </div>
            </div>

            <!-- DOCUMENT 2 — Westpac Receipt -->
            <div class="reveal mb-8" style="border:2px solid rgba(61,122,74,0.55);box-shadow:0 0 30px rgba(61,122,74,0.1)">
                <div class="px-4 py-3 flex items-center justify-between" style="background:rgba(61,122,74,0.15);border-bottom:1px solid rgba(61,122,74,0.3)">
                    <div class="flex items-center gap-3">
                        <span class="font-display text-sm tracking-[0.2em] uppercase" style="color:#3d7a4a">Document 2 — The Westpac Receipt</span>
                        <span class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/45">$25.00 EFTPOS · Kennards Southport · 17 November 2023</span>
                    </div>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kennards/smoking-gun-2-westpac-receipt.pdf" target="_blank" rel="noopener" class="text-[0.48rem] tracking-[0.15em] uppercase hover:opacity-100 border px-2.5 py-1 transition-colors" style="color:rgba(61,122,74,0.7);border-color:rgba(61,122,74,0.35)">↗ Open</a>
                </div>

                <!-- What it proves -->
                <div class="px-5 py-5" style="background:rgba(61,122,74,0.06);border-bottom:1px solid rgba(61,122,74,0.18)">
                    <div class="text-[0.46rem] tracking-[0.22em] uppercase mb-4" style="color:#3d7a4a">What This Receipt Proves</div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-4">
                        <div class="border p-3" style="border-color:rgba(61,122,74,0.2);background:rgba(61,122,74,0.04)">
                            <div class="text-[0.43rem] tracking-[0.14em] uppercase mb-1" style="color:rgba(61,122,74,0.7)">Transaction Date</div>
                            <div class="font-display text-base text-paper/75">17 Nov 2023</div>
                            <p class="text-[0.55rem] text-paper/40 leading-relaxed mt-1">Same date as the LockCut + NewLock charge on the statement. Payment and charge: same day.</p>
                        </div>
                        <div class="border p-3" style="border-color:rgba(61,122,74,0.2);background:rgba(61,122,74,0.04)">
                            <div class="text-[0.43rem] tracking-[0.14em] uppercase mb-1" style="color:rgba(61,122,74,0.7)">Amount</div>
                            <div class="font-display text-base text-paper/75">$25.00</div>
                            <p class="text-[0.55rem] text-paper/40 leading-relaxed mt-1">Exact match. The statement charges $25.00 for LockCut. This receipt confirms $25.00 paid to Kennards Southport.</p>
                        </div>
                        <div class="border p-3" style="border-color:rgba(61,122,74,0.2);background:rgba(61,122,74,0.04)">
                            <div class="text-[0.43rem] tracking-[0.14em] uppercase mb-1" style="color:rgba(61,122,74,0.7)">Merchant</div>
                            <div class="font-display text-sm text-paper/75">Kennards Southport</div>
                            <p class="text-[0.55rem] text-paper/40 leading-relaxed mt-1">1 Olympic Cct, Southport QLD 4215 — the same facility. Transaction ID: 98b3a030.</p>
                        </div>
                    </div>
                    <div class="border-l-4 pl-4 py-2" style="border-color:rgba(61,122,74,0.5);background:rgba(61,122,74,0.04)">
                        <p class="text-[0.6rem] text-paper/55 leading-relaxed">The receipt was attached to the customer's email to Kennards on 27 November 2023 — the same morning the statement arrived. Kennards did not respond to that email. Their Defence in the Federal Court subsequently admitted they had received it.</p>
                    </div>
                </div>

                <iframe src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kennards/smoking-gun-2-westpac-receipt.pdf"
                        class="w-full" style="min-height:460px;height:460px;border:none;filter:brightness(0.92)" loading="lazy"
                        title="Westpac Receipt — $25 EFTPOS Kennards Southport 17 Nov 2023"></iframe>
                <div class="px-4 py-2 flex flex-wrap gap-4" style="background:rgba(61,122,74,0.1);border-top:1px solid rgba(61,122,74,0.2)">
                    <span class="text-[0.43rem] tracking-[0.14em] uppercase" style="color:rgba(61,122,74,0.7)">EFTPOS · $25.00 · 17/11/2023</span>
                    <span class="text-paper/15">·</span>
                    <span class="text-[0.43rem] tracking-[0.14em] uppercase text-paper/30">Kennards Self Storage Southport · 1 Olympic Cct QLD 4215</span>
                    <span class="text-paper/15">·</span>
                    <span class="text-[0.43rem] tracking-[0.14em] uppercase text-paper/30">Tx ID: 98b3a030-6485-ee11-b857-00505698d631</span>
                </div>
            </div>

            <!-- DOCUMENT 3 — Email with incorrect amount -->
            <div class="reveal mb-6" style="border:2px solid rgba(201,138,16,0.55);box-shadow:0 0 30px rgba(201,138,16,0.1)">
                <div class="px-4 py-3 flex items-center justify-between" style="background:rgba(201,138,16,0.15);border-bottom:1px solid rgba(201,138,16,0.3)">
                    <div class="flex items-center gap-3">
                        <span class="font-display text-sm tracking-[0.2em] uppercase text-gold">Document 3 — The Email Demand</span>
                        <span class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/45">AgreeNo: 500002187 · 27 Nov 2023 08:31:58 · Demands $235.40 · Statement shows $128.90</span>
                    </div>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kennards/smoking-gun-3-email-incorrect-amount.pdf" target="_blank" rel="noopener" class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60 hover:text-gold border border-gold/30 hover:border-gold/60 px-2.5 py-1 transition-colors">↗ Open</a>
                </div>

                <!-- Issues callout -->
                <div class="px-5 py-5" style="background:rgba(201,138,16,0.06);border-bottom:1px solid rgba(201,138,16,0.18)">
                    <div class="text-[0.46rem] tracking-[0.22em] uppercase text-gold mb-4">Issues Identified — The Email</div>
                    <div class="space-y-3">
                        <div class="flex gap-3 items-start border border-gold/20 p-3" style="background:rgba(201,138,16,0.05)">
                            <span class="font-display text-base text-gold shrink-0 w-6 leading-none mt-0.5">1</span>
                            <div>
                                <div class="text-[0.53rem] tracking-[0.1em] uppercase text-gold/75 mb-1">Agreement Number Matches — 500002187</div>
                                <p class="text-[0.6rem] text-paper/55 leading-relaxed">The email subject line reads: <em>"RE: Automated Credit Card Payment (Declined) | AgreeNo: 500002187 | Unit(s): J041"</em>. The attachment is named <em>StatementKESOU500002187.pdf</em>. This is the same statement — Agreement 500002187 — as Document 1. The two documents are directly linked. The email generated the statement; the statement was attached to the email.</p>
                            </div>
                        </div>
                        <div class="flex gap-3 items-start border border-gold/20 p-3" style="background:rgba(201,138,16,0.05)">
                            <span class="font-display text-base text-gold shrink-0 w-6 leading-none mt-0.5">2</span>
                            <div>
                                <div class="text-[0.53rem] tracking-[0.1em] uppercase text-gold/75 mb-1">Email Demands $235.40 — Statement Shows $128.90</div>
                                <p class="text-[0.6rem] text-paper/55 leading-relaxed">The email body states: <em>"Your current account balance is $235.40."</em> The attached statement — the one Kennards produced to support that demand — shows a closing balance of <strong class="text-paper/80">$128.90</strong> on its face. A <strong class="text-gold">$106.50 discrepancy</strong> between what the automated system demanded and what the document it attached actually showed. The customer is being chased for $235.40 on the basis of paperwork that only justifies $128.90.</p>
                            </div>
                        </div>
                        <div class="flex gap-3 items-start border border-gold/20 p-3" style="background:rgba(201,138,16,0.05)">
                            <span class="font-display text-base text-gold shrink-0 w-6 leading-none mt-0.5">3</span>
                            <div>
                                <div class="text-[0.53rem] tracking-[0.1em] uppercase text-gold/75 mb-1">Email Sent 08:31:58 · Statement Generated 08:32:00 — Two Seconds Apart</div>
                                <p class="text-[0.6rem] text-paper/55 leading-relaxed">The email timestamp is 08:31:58 on 27 November 2023. The statement footer reads "Generated on 27/11/2023 at 8:32:00 AM." The demand and the supporting document were produced in the same automated instant — two seconds apart. Neither was reviewed before being sent. The $25 fee already paid on 17 November was included in both without any human check.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <iframe src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kennards/smoking-gun-3-email-incorrect-amount.pdf"
                        class="w-full" style="min-height:560px;height:560px;border:none;filter:brightness(0.92)" loading="lazy"
                        title="Kennards Email — Incorrect Amount · Agreement 500002187"></iframe>
                <div class="px-4 py-2 flex flex-wrap gap-4" style="background:rgba(201,138,16,0.1);border-top:1px solid rgba(201,138,16,0.22)">
                    <span class="text-[0.43rem] tracking-[0.14em] uppercase text-gold/70">AgreeNo: 500002187 · Sent 08:31:58 · 27/11/2023</span>
                    <span class="text-paper/15">·</span>
                    <span class="text-[0.43rem] tracking-[0.14em] uppercase text-paper/30">Email demands $235.40</span>
                    <span class="text-paper/15">·</span>
                    <span class="text-[0.43rem] tracking-[0.14em] uppercase text-gold/70">Attached statement shows $128.90 — $106.50 gap</span>
                </div>
            </div>

            <!-- Three-document summary -->
            <div class="border border-hot/25 p-5" style="background:rgba(193,68,14,0.05)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-4">What the Three Documents Establish Together</div>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/50 leading-relaxed">The $25 LockCut fee was <strong class="text-paper/70">paid on 17 November 2023</strong> — proven by Westpac bank record, transaction ID 98b3a030, merchant Kennards Southport.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/50 leading-relaxed">Kennards' statement shows that same $25 charge dated 17 November as <strong class="text-paper/70">outstanding and unpaid</strong> — with no corresponding payment recorded.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/50 leading-relaxed">The statement has <strong class="text-paper/70">no valid billing period</strong> — the dates read 00/00/00 to 00/00/00. It is, on its face, an incomplete administrative document.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/50 leading-relaxed">The email demanding payment cites <strong class="text-paper/70">$235.40</strong> — but attaches a statement (same Agreement No.) showing a closing balance of <strong class="text-paper/70">$128.90</strong>. The documents are internally inconsistent.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/50 leading-relaxed">Kennards <strong class="text-paper/70">did not respond</strong> to the customer's email raising these issues — admitted in their own Federal Court Defence. Instead, they blocked access, threatened police, and engaged Piper Alderman.</p></div>
                </div>
            </div>
        </div>

        <!-- Chapter B: The Response -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.55)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter B — The Response · 5 December 2023</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">40 MINUTES. POLICE THREATENED.<br><span class="text-hot">ACCESS BLOCKED. MOCK EVICTION ISSUED.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">When the customer attended the Southport facility in person on 5 December to resolve the issue, the response was a 40-minute confrontation. Centre Manager Lisa denied the email had been received — despite it being admitted in subsequent legal proceedings. Staff maintained the statement was not "incorrect" but merely "incomplete." The distinction does not withstand scrutiny: a statement that omits a payment already made and presents a balance higher than actually owed is, by any ordinary understanding, incorrect.</p>
            <!-- Contradiction grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-2">What Staff Told the Customer</div>
                    <p class="text-[0.62rem] text-paper/50 leading-relaxed italic">"The account was NOT incorrect just INCOMPLETE."</p>
                    <div class="text-[0.4rem] tracking-[0.1em] uppercase text-paper/25 mt-1.5">Lisa · Centre Manager · Email 5 Dec 2023</div>
                </div>
                <div class="border border-sage/20 p-4" style="background:rgba(61,122,74,0.04)">
                    <div class="text-[0.44rem] tracking-[0.15em] uppercase text-sage mb-2">What Sworn Affidavit Confirms</div>
                    <p class="text-[0.62rem] text-paper/50 leading-relaxed">The statement <em>"erroneously"</em> omitted the $25 EFTPOS payment entry.</p>
                    <div class="text-[0.4rem] tracking-[0.1em] uppercase text-paper/25 mt-1.5">Kellie Robley · Sworn Affidavit · Para. 10 · April 2024</div>
                </div>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The confrontation escalated to a threat to call the police. The customer had made no threat, had not raised his voice, and was present for the lawful purpose of resolving a billing dispute. Staff knew he was homeless. The police threat, in that context, was not a neutral procedural step. It was leverage.</p>
            <div class="border-l-4 border-hot/50 pl-5 mb-5" style="background:rgba(193,68,14,0.05);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">Applicant's Affidavit — as accepted by Justice Meagher, Para. 7</div>
                <p class="text-[0.68rem] text-paper/55 leading-relaxed italic">"After 40 minutes of me explaining that the statement was INCORRECT — Lisa and the other staff member realised I would not back down or be intimidated — they resorted to keeping me locked out of my storage space and then THREATENING TO CALL THE POLICE."</p>
            </div>
            <!-- Escalation timeline -->
            <div class="border border-paper/[0.07] mb-2" style="background:rgba(0,0,0,0.18)">
                <div class="px-4 py-3 border-b border-paper/[0.06]"><div class="text-[0.46rem] tracking-[0.2em] uppercase text-paper/30">Escalation Sequence — Nov 2023 to Aug 2024</div></div>
                <div class="divide-y divide-paper/[0.05]">
                    <div class="grid grid-cols-[90px_1fr] gap-4 p-4"><div class="text-[0.48rem] tracking-[0.12em] uppercase text-hot">17 Nov 2023</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">$25 EFTPOS payment made</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Lock-cutting fee paid at Southport facility. Receipt issued.</div></div></div>
                    <div class="grid grid-cols-[90px_1fr] gap-4 p-4"><div class="text-[0.48rem] tracking-[0.12em] uppercase text-hot">27 Nov 2023</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Erroneous statement issued — email sent same day</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Automated system omits $25 payment. Customer emails with receipt attached. Email goes unanswered.</div></div></div>
                    <div class="grid grid-cols-[90px_1fr] gap-4 p-4" style="background:rgba(193,68,14,0.05)"><div class="text-[0.48rem] tracking-[0.12em] uppercase text-hot">5 Dec 2023</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">40-minute confrontation · Police threatened · Access blocked</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Staff deny receiving email. Access PIN disabled before the 42-day contractual default period. "De facto eviction" email issued by Centre Manager Lisa.</div></div></div>
                    <div class="grid grid-cols-[90px_1fr] gap-4 p-4"><div class="text-[0.48rem] tracking-[0.12em] uppercase text-hot">6–7 Dec 2023</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Contradictory emails from Operations Manager</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Lisa: "our storage facility is incompatible with your needs." Next day, Kellie Robley (as "Brad"): "Your storage space has not been terminated." Direct internal contradiction.</div></div></div>
                    <div class="grid grid-cols-[90px_1fr] gap-4 p-4"><div class="text-[0.48rem] tracking-[0.12em] uppercase text-hot">12 Dec 2023</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">CEO Sam Kennard emails — endorses staff conduct</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">"It's unfortunate that we continue to have a misunderstanding." Does not address the billing error. Endorses all staff actions.</div></div></div>
                    <div class="grid grid-cols-[90px_1fr] gap-4 p-4" style="background:rgba(193,68,14,0.04)"><div class="text-[0.48rem] tracking-[0.12em] uppercase text-hot">21 Dec 2023</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Formal termination — all fees written off</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Customer required to vacate by 4 Jan 2024. Outstanding fees waived — after weeks of denial that any error existed.</div></div></div>
                    <div class="grid grid-cols-[90px_1fr] gap-4 p-4"><div class="text-[0.48rem] tracking-[0.12em] uppercase text-sage">9 Jan 2024</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Federal Court originating application filed</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Case QUD18/2024. Self-represented. Seeks interlocutory injunction and $2M in emotional damages.</div></div></div>
                    <div class="grid grid-cols-[90px_1fr] gap-4 p-4" style="background:rgba(193,68,14,0.05)"><div class="text-[0.48rem] tracking-[0.12em] uppercase text-hot">12 Apr 2024</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Kennards / Piper Alderman — summary judgment application</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Affidavits sworn by Kellie Robley and senior partner Karyn Reardon (admitted 1994). Summary dismissal sought on grounds of frivolity, vexatiousness, and abuse of process.</div></div></div>
                    <div class="grid grid-cols-[90px_1fr] gap-4 p-4" style="background:rgba(193,68,14,0.07)"><div class="text-[0.48rem] tracking-[0.12em] uppercase text-hot">15 Aug 2024</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Justice Meagher grants summary judgment — case dismissed</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Kondratenko v Kennards Storage Management [2024] FCA 913. Costs awarded against applicant. Kennards ordered to facilitate return of remaining goods.</div></div></div>
                </div>
            </div>
        </div>

        <!-- Chapter C: The Access Blockage -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.55)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter C — The Access Blockage · Admitted in Sworn Affidavit</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THEY BLOCKED ACCESS BEFORE THEY WERE LEGALLY ENTITLED TO.<br><span class="text-hot">THEIR OWN AFFIDAVIT ADMITS IT.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Clause 3.6 of Kennards' own storage agreement states that if a payment is not made, the operator must provide written notice and "an opportunity of at least 14 days to rectify that default before taking any default action." Clause 9.1 permits termination without notice only after 42 days of arrears. Kellie Robley's affidavit, in paragraph 16, admits that the customer's PIN access was disabled within days of the disputed statement being issued — when nothing close to 14 days, let alone 42, had elapsed.</p>
            <div class="border border-hot/30 p-5 mb-4" style="background:rgba(193,68,14,0.06)">
                <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">Admitted in Sworn Affidavit — Kellie Robley, Para. 16</div>
                <p class="text-[0.68rem] text-paper/60 leading-relaxed italic">"For sometime during this period, Mr Kondratenko's pin access to Kennards Southport was <strong class="text-paper/80 not-italic">disabled by Kennards</strong> with the effect that Mr Kondratenko was unable to access Kennards Southport outside of business hours."</p>
            </div>
            <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The customer, who was homeless, was not in a position to attend only during business hours. The practical effect was a lockout of a man from his own possessions — before the contractual default period had arisen. Justice Meagher's judgment does not squarely address whether this constituted a breach of contract. The case was dismissed before that question could be examined at trial. It remains an unresolved finding of fact: Kennards admit they disabled access before their contractual right to do so had arisen.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-2">Kennards' Own Contract</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Clause 3.6: minimum 14 days' written notice before any default action</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Clause 9.1: termination without notice only after 42 days of arrears</p></div>
                    </div>
                </div>
                <div class="border border-hot/30 p-4" style="background:rgba(193,68,14,0.05)">
                    <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-2">What Kennards Did</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">PIN access disabled within days of disputed statement — confirmed in sworn affidavit</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Neither the 14-day nor 42-day threshold had elapsed</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">A homeless man was locked out of his possessions. The question of whether this breached contract was never examined at trial.</p></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chapter D: The Court's Reasoning -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(245,234,212,0.15)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/40 border border-paper/20 px-2 py-1">Chapter D — The Judgment · [2024] FCA 913</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">JUSTICE MEAGHER ACCEPTED HIS EVIDENCE AS TRUE.<br><span class="text-paper/55">AND STILL DISMISSED THE CASE.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The dismissal under section 31A of the Federal Court of Australia Act 1976 is important to understand accurately. It is not a finding that Kennards did nothing wrong. Justice Meagher expressly states she took the applicant's evidence at its highest — meaning she accepted as true that the confrontation happened as described, that the police were threatened, that access was blocked, and that staff maintained a false narrative about the billing error.</p>
            <div class="border border-paper/[0.08] p-5 mb-5" style="background:rgba(0,0,0,0.18)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-paper/30 mb-3">Why the Case Was Dismissed — Three Technical Grounds</div>
                <div class="space-y-3">
                    <div class="flex gap-3 items-start"><span class="font-display text-paper/40 text-lg w-6 shrink-0">01</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">The financial wrongs had been remedied — the $20 credit applied, fees written off — leaving no quantifiable financial loss remaining at the time of the application.</p></div>
                    <div class="flex gap-3 items-start"><span class="font-display text-paper/40 text-lg w-6 shrink-0">02</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">The $2 million emotional damages claim required proper pleading under Queensland's Personal Injuries Proceedings Act 2002, including psychiatric evidence, which was not provided.</p></div>
                    <div class="flex gap-3 items-start"><span class="font-display text-paper/40 text-lg w-6 shrink-0">03</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">The ACL misleading conduct claims were not particularised in a way that disclosed an actionable cause of action under Federal Court pleading requirements.</p></div>
                </div>
            </div>
            <div class="border-l-4 border-paper/20 pl-5" style="background:rgba(0,0,0,0.12);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-paper/30 mb-2">Editorial Assessment</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-2">These are technical legal deficiencies, not moral exonerations. A self-represented homeless man, without legal aid, navigating Federal Court pleading rules against a Piper Alderman team billing by the hour, is not operating on level ground. The system that dismissed his claim is the same system that makes such claims largely inaccessible to the people most likely to need them.</p>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed italic">The Federal Court found no actionable legal claim as pleaded. It did not find no wrongdoing. The difference matters.</p>
            </div>
        </div>

        <!-- Chapter E: Sam Kennard -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.4)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Chapter E — Sam Kennard · CEO · Political Record</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">CHAMPION OF INDIVIDUAL FREEDOM.<br><span class="text-gold">DEPLOYED A PIPER ALDERMAN TEAM AGAINST A HOMELESS MAN.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Sam Kennard is the CEO of one of Australia's largest privately held self-storage companies — over 80 facilities across Australia and New Zealand — and a publicly active political voice. In 2015 he ran as the Liberal Democrats candidate in the North Sydney federal by-election, a party committed to abolishing regulatory agencies and minimising government intervention in business.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">When the Workplace Gender Equality Agency named Kennards Self Storage as non-compliant with federal gender reporting requirements in 2023, Sam Kennard did not quietly comply. He publicly declared the WGEA should be abolished and told media: <em class="text-paper/65">"I can confirm that we do discriminate against time-wasting bureaucracies."</em></p>
            <div class="border border-gold/25 p-5" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-3">The Irony</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">A CEO who positions himself as a champion of individual freedom against regulatory overreach presided over an organisation that used every tool of institutional power — staff intimidation, PIN access blockage before contractual rights arose, a mock eviction, CEO endorsement of the conduct, and senior commercial legal counsel at Piper Alderman — against a single homeless man seeking acknowledgment of a $25 billing error his own company's automated system generated.</p>
            </div>
        </div>

        <!-- Chapter F: Affidavit of Service -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter F — Service of Process · Affidavit of Service</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">SERVED AT HIS HOME ADDRESS.<br><span class="text-hot">ACCEPTED BY HIS WIFE. SHERIFF DELANI SIBANDA.</span></h3>
            <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"The Originating Application was not served on a registered office or a legal team. It was served at Sam Kennard's personal address — and accepted by his wife."</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">On 25 January 2024, Sheriff's Officer <strong class="text-paper/65">Delani Sibanda</strong> personally served the Originating Application — Federal Court proceedings QUD18/2024, Kondratenko v Kennards Storage Management — at Sam Kennard's home address. Service was accepted by his wife. The Affidavit of Service below is the formal court record of that act.</p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">Served By</div>
                    <div class="font-display text-base text-paper/75 mb-1">Sheriff Delani Sibanda</div>
                    <p class="text-[0.55rem] text-paper/40 leading-relaxed">Sheriff's Officer · Personal service · 25 January 2024</p>
                </div>
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">Served On</div>
                    <div class="font-display text-base text-paper/75 mb-1">Sam Kennard's Home Address</div>
                    <p class="text-[0.55rem] text-paper/40 leading-relaxed">Accepted by his wife · Personal residence</p>
                </div>
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">Document Served</div>
                    <div class="font-display text-base text-paper/75 mb-1">Originating Application</div>
                    <p class="text-[0.55rem] text-paper/40 leading-relaxed">QUD18/2024 · Federal Court of Australia · Queensland Registry</p>
                </div>
            </div>
            <!-- Affidavit of Service — embedded inline -->
            <div class="mb-2 flex items-center justify-between">
                <div>
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-1">Affidavit of Service — Sheriff Delani Sibanda · 25 January 2024</div>
                    <div class="text-[0.42rem] tracking-[0.12em] uppercase text-paper/25">QUD18/2024 · Kondratenko v Kennards Storage Management · Federal Court of Australia</div>
                </div>
                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kennards/HOSPPLX18_2024_01_25_15_28_59_978+(1).pdf" target="_blank" rel="noopener" class="text-[0.48rem] tracking-[0.15em] uppercase text-hot/60 hover:text-hot border border-hot/30 hover:border-hot/60 px-2.5 py-1 transition-colors">↗ Open</a>
            </div>
            <iframe src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kennards/HOSPPLX18_2024_01_25_15_28_59_978+(1).pdf"
                    style="width:100%;height:520px;border:2px solid rgba(193,68,14,0.5);box-shadow:0 0 40px rgba(193,68,14,0.12);display:block;background:#0d0d0d;"
                    title="Affidavit of Service — Sheriff Delani Sibanda · QUD18/2024"></iframe>
        </div>

        <!-- Evidence Vault -->
        <div class="story-chapter reveal mb-6">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Federal Court Evidence Vault — QUD18/2024</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE DOCUMENTS.<br><span class="text-hot">KONDRATENKO v KENNARDS — [2024] FCA 913</span></h3>
            <div class="evidence-vault mt-2">
                <div class="ev-header" onclick="toggleVault(this)">
                    <div class="flex items-center gap-2">
                        <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Court Documents</span>
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Kondratenko v Kennards Storage Management · [2024] FCA 913</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">6 files</span>
                        <span class="ev-toggle">▼</span>
                    </div>
                </div>
                <div class="ev-body">
                    <div class="ev-file ef-hot" onclick="openMV('kennards-judgment')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">Kondratenko v Kennards Storage Management [2024] FCA 913</div>
                            <div class="ev-desc">PDF · Justice Meagher · 15 August 2024 · Summary judgment granted · Evidence accepted at its highest</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                    <div class="ev-file ef-hot" onclick="openMV('kennards-originating')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">Originating Application — QUD18/2024</div>
                            <div class="ev-desc">PDF · Filed 9 January 2024 · Self-represented · Federal Court of Australia · Queensland Registry</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                    <div class="ev-file ef-hot" onclick="openMV('kennards-genuine-steps')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">Genuine Steps Statement</div>
                            <div class="ev-desc">PDF · Filed with Originating Application · Documents pre-filing attempts to resolve the dispute</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                    <div class="ev-file ef-gold" onclick="openMV('kennards-karyn-reardon')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">Karyn Reardon Affidavit — Piper Alderman</div>
                            <div class="ev-desc">PDF · Sworn by Karyn Reardon · Senior Partner · Piper Alderman · Filed in support of summary judgment application</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                    <div class="ev-file ef-hot" onclick="openMV('kennards-affidavit-service')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">Affidavit of Service — Sheriff Delani Sibanda</div>
                            <div class="ev-desc">PDF · 25 January 2024 · Personal service at Sam Kennard's home address · Accepted by his wife · QUD18/2024</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                    <div class="ev-file ef-gold" onclick="openMV('kennards-kellie-robley')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">Kellie Robley Affidavit — Operations Manager</div>
                            <div class="ev-desc">PDF · Sworn by Kellie Robley · Operations Manager · Kennards · Admits automated billing error and PIN access disablement</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                    <div class="ev-zip-bar">
                        <span class="text-[0.48rem] tracking-[0.15em] uppercase text-hot/50">All documents filed Federal Court of Australia — QUD18/2024 — Kondratenko v Kennards Storage Management Pty Ltd</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     PIONEER LAKES — NEW DEAL
══════════════════════════════════════ -->
<section id="pioneer-lakes" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(61,122,74,0.07) 0%,transparent 70%)">
    <div class="max-w-4xl mx-auto">

        <!-- Section Label -->
        <div class="flex items-center gap-4 mb-10 reveal">
            <div class="w-8 h-px bg-sage/50"></div>
            <span class="text-[0.52rem] tracking-[0.25em] uppercase text-sage/70">New Development · Mackay, Queensland · 9 May 2026</span>
        </div>

        <!-- Headline Chapter -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(61,122,74,0.6)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#3d7a4a;border-color:rgba(61,122,74,0.45)">Pioneer Lakes Acquisition · Mackay · Press Release</span>
            </div>
            <h3 class="font-display text-3xl md:text-4xl tracking-wide mb-4 leading-tight">849 HOUSES. ONE DEVELOPER.<br><span style="color:#3d7a4a">A CITY THAT NEEDS 7,300.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Adam Watson is acquiring Pioneer Lakes — a 649-lot master-planned estate in Mackay — for $16,518,010, and making a series of commitments on social, community, and essential worker housing that Queensland's government will need to respond to.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-6">The deal, structured as a full share acquisition, encompasses 649 undeveloped lots, five active development approvals, and a suite of existing contracts across Stage 6A/3 of the project. Mackay is understood to be short approximately 7,300 dwellings. Pioneer Lakes represents one of the most substantial private-sector responses to that deficit currently in motion.</p>

            <!-- Key Stats -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-6 reveal">
                <div class="border p-4 text-center" style="border-color:rgba(61,122,74,0.25);background:rgba(61,122,74,0.05)">
                    <div class="font-display text-2xl mb-1" style="color:#3d7a4a">849</div>
                    <div class="text-[0.47rem] tracking-[0.16em] uppercase text-paper/35">Homes Planned · 12 Months</div>
                </div>
                <div class="border p-4 text-center" style="border-color:rgba(61,122,74,0.25);background:rgba(61,122,74,0.05)">
                    <div class="font-display text-2xl mb-1" style="color:#3d7a4a">7,300</div>
                    <div class="text-[0.47rem] tracking-[0.16em] uppercase text-paper/35">Mackay's Housing Shortfall</div>
                </div>
                <div class="border p-4 text-center" style="border-color:rgba(61,122,74,0.25);background:rgba(61,122,74,0.05)">
                    <div class="font-display text-2xl mb-1" style="color:#3d7a4a">$16.5M</div>
                    <div class="text-[0.47rem] tracking-[0.16em] uppercase text-paper/35">Pioneer Lakes Acquisition</div>
                </div>
                <div class="border p-4 text-center" style="border-color:rgba(61,122,74,0.25);background:rgba(61,122,74,0.05)">
                    <div class="font-display text-2xl mb-1" style="color:#3d7a4a">$400M</div>
                    <div class="text-[0.47rem] tracking-[0.16em] uppercase text-paper/35">Helensvale Project Pipeline</div>
                </div>
            </div>

            <!-- Build Model -->
            <div class="border-l-4 pl-5 mb-6" style="border-color:rgba(61,122,74,0.55);background:rgba(61,122,74,0.05);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase mb-2" style="color:#3d7a4a">The Model — Breaking Industry Convention</div>
                <p class="text-[0.65rem] text-paper/55 leading-relaxed mb-2">Rather than selling land packages and waiting for buyers to commission builders — the standard approach that has defined Queensland's greenfield market for decades — Watson intends to construct homes before sale. Twenty concrete slabs per week, double-brick construction only, five standardised designs. Homes ready to occupy.</p>
                <p class="text-[0.65rem] text-paper/60 leading-relaxed italic">"We won't be selling house and land packages where people have to wait for a house to be built. We'll be building them and selling them. The house is there. You move in."</p>
                <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/30 mt-2">— Adam Watson, Developer, Pioneer Lakes</div>
            </div>
        </div>

        <!-- Press Release Embed -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(61,122,74,0.5)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#3d7a4a;border-color:rgba(61,122,74,0.4)">Editorial — Sunlight.Quest · 9 May 2026</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">FULL PRESS RELEASE.<br><span style="color:#3d7a4a">PIONEER LAKES ACQUISITION — EDITORIAL.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">The full editorial published by Sunlight.Quest on 9 May 2026, covering the acquisition structure, social housing commitments, infrastructure charges concessions from the Deputy Premier, the Helensvale pipeline, and the open questions Sunlight.Quest will continue tracking as the deal progresses.</p>
            <div class="reveal mb-2" style="border:1px solid rgba(61,122,74,0.2)">
                <iframe src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/pioneer-lakes-press-release.html"
                        class="w-full"
                        style="min-height:680px;height:680px;border:none;filter:brightness(0.94)"
                        loading="lazy"
                        title="Pioneer Lakes Press Release — Sunlight.Quest Editorial"></iframe>
            </div>
            <div class="text-[0.44rem] tracking-[0.12em] uppercase text-paper/18 mt-1.5">Pioneer Lakes Acquisition · Press Release · 9 May 2026 · Sunlight.Quest</div>
        </div>

        <!-- Social Housing Commitments -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(61,122,74,0.5)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#3d7a4a;border-color:rgba(61,122,74,0.4)">Community Housing · State Government Commitment</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">SIX COMMUNITY HOUSING COMMITMENTS.<br><span style="color:#3d7a4a">THE STATE GOVERNMENT WILL NEED TO RESPOND.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-6">Watson has written to Queensland's Deputy Premier, Attorney General, Housing Minister, and the Local Member for Mackay with specific community housing commitments — and an invitation for the State Government to attend the project's next stage announcement. These commitments are stated, not yet contracted.</p>
            <div class="space-y-2">
                @foreach([
                    ['01', 'Social Housing', 'Construction of social housing dwellings to be leased back to the Queensland State Government on long-term terms, or sold at a negotiated price.'],
                    ['02', 'Domestic Violence Housing', 'Up to 10 purpose-built safe houses for domestic violence survivors included within the development programme.'],
                    ['03', 'NDIS Housing', 'NDIS-compliant dwellings for residents with disability included within the build schedule.'],
                    ['04', 'Youth & Homelessness Housing', 'Designated housing stream for young people experiencing homelessness or disadvantage in the Mackay region.'],
                    ['05', 'Essential Worker Housing', 'Targeted housing for police, paramedics, doctors, and nurses to support workforce attraction and retention in regional Queensland.'],
                    ['06', 'Juvenile Housing', 'Purpose-built accommodation for young people referred by Queensland Police Service who have no fixed address. QPS officers able to directly place at-risk youth into designated dwellings.'],
                ] as [$num, $label, $desc])
                <div class="flex gap-4 border p-4" style="border-color:rgba(61,122,74,0.18);background:rgba(61,122,74,0.04)">
                    <div class="font-display text-xl shrink-0 w-8 text-right" style="color:rgba(61,122,74,0.5)">{{$num}}</div>
                    <div>
                        <div class="text-[0.55rem] tracking-[0.12em] uppercase mb-1" style="color:#3d7a4a">{{$label}}</div>
                        <p class="text-[0.62rem] text-paper/45 leading-relaxed">{{$desc}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Infrastructure Charges Concessions -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.5)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Infrastructure Charges · Deputy Premier Intervention · Queensland</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE DEPUTY PREMIER INTERVENED.<br><span class="text-gold">$36,000 REDUCED. HELENSVALE: FULL WAIVER PROPOSED.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Infrastructure charges — levied under Queensland's Planning Act 2016 — require developers to contribute to the cost of trunk infrastructure (roads, water, sewerage, stormwater) before construction begins. On the Gold Coast, these charges can reach $36,000 per lot or more. Across a 3,000-lot development, that represents over $100 million payable before a single slab is poured — one of the single biggest structural barriers to housing supply in Queensland.</p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-5">
                <div class="border p-4" style="border-color:rgba(245,234,212,0.12);background:rgba(0,0,0,0.15)">
                    <div class="text-[0.44rem] tracking-[0.15em] uppercase text-paper/30 mb-1">Standard Rate — QLD</div>
                    <div class="font-display text-2xl text-paper/60 mb-1">$36,000</div>
                    <p class="text-[0.58rem] text-paper/35 leading-relaxed">Per lot — payable before construction begins.</p>
                </div>
                <div class="border p-4" style="border-color:rgba(61,122,74,0.3);background:rgba(61,122,74,0.06)">
                    <div class="text-[0.44rem] tracking-[0.15em] uppercase mb-1" style="color:#3d7a4a">Pioneer Lakes — Mackay</div>
                    <div class="font-display text-2xl mb-1" style="color:#3d7a4a">$12,000</div>
                    <p class="text-[0.58rem] text-paper/40 leading-relaxed">Per lot — deferred to completion. Significant cash-flow relief for a privately funded development.</p>
                </div>
                <div class="border p-4" style="border-color:rgba(201,138,16,0.3);background:rgba(201,138,16,0.05)">
                    <div class="text-[0.44rem] tracking-[0.15em] uppercase text-gold/70 mb-1">Helensvale — Gold Coast</div>
                    <div class="font-display text-2xl text-gold mb-1">$0</div>
                    <p class="text-[0.58rem] text-paper/40 leading-relaxed">Full waiver proposed — Deputy Premier undertaking. Not yet confirmed in writing.</p>
                </div>
            </div>
            <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/22 border border-paper/[0.07] px-4 py-2" style="background:rgba(0,0,0,0.12)">Concessions stated but not yet confirmed in writing — Sunlight.Quest tracking.</div>
        </div>

        <!-- HOA Section — What Is a Heads of Agreement -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(61,122,74,0.55)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#3d7a4a;border-color:rgba(61,122,74,0.4)">Legal Document · Heads of Agreement · Pioneer Lakes Share Sale</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">HEADS OF AGREEMENT.<br><span style="color:#3d7a4a">GENERATED ENTIRELY THROUGH CLAUDE. NO SOLICITOR REQUIRED.</span></h3>

            <!-- What is a HOA definition box -->
            <div class="border mb-6 reveal" style="border-color:rgba(61,122,74,0.3);background:rgba(61,122,74,0.05)">
                <div class="px-5 py-3 border-b" style="border-color:rgba(61,122,74,0.2)">
                    <div class="text-[0.47rem] tracking-[0.22em] uppercase" style="color:#3d7a4a">Definition — What Is a Heads of Agreement?</div>
                </div>
                <div class="px-5 py-4">
                    <p class="text-[0.68rem] text-paper/60 leading-relaxed mb-3">A <strong class="text-paper/80">Heads of Agreement (HOA)</strong> is a preliminary document that records the principal commercial terms agreed between parties before a formal, legally binding contract is executed. It is commonly used in property acquisitions, mergers, and major commercial transactions to establish a shared understanding of the deal — the price, structure, conditions, and timeline — while the formal agreement is being drafted.</p>
                    <p class="text-[0.68rem] text-paper/55 leading-relaxed mb-3">In most HOAs, the commercial terms are not yet legally binding — they record intent, not obligation. However, specific clauses are typically carved out as immediately binding upon execution: exclusivity obligations (preventing the vendor from negotiating with other buyers), confidentiality, and governing law provisions. This gives the buyer protection during the due diligence and formal drafting period.</p>
                    <p class="text-[0.68rem] text-paper/55 leading-relaxed">An HOA is not a substitute for a formal contract — the parties are not legally committed to complete until the Share Sale Agreement (or equivalent) is executed. It is, however, a serious signal of commercial intent, and the binding clauses carry real legal weight.</p>
                </div>
            </div>

            <!-- Claude callout -->
            <div class="border mb-6 reveal" style="border-color:rgba(201,138,16,0.35);background:rgba(201,138,16,0.05)">
                <div class="px-5 py-3 border-b" style="border-color:rgba(201,138,16,0.2)">
                    <div class="text-[0.47rem] tracking-[0.22em] uppercase text-gold">Note — How This Document Was Produced</div>
                </div>
                <div class="px-5 py-4">
                    <p class="text-[0.68rem] text-paper/60 leading-relaxed mb-3">The Heads of Agreement for the Pioneer Lakes share acquisition — a $16.5 million transaction — was generated <strong class="text-paper/80">entirely through Claude</strong>, Anthropic's AI system, with no outside solicitor engaged for its drafting. The document covers share acquisition structure, purchase price mechanics, lot schedule, development approval conditions, exclusivity, confidentiality, conditions precedent, and execution formalities.</p>
                    <p class="text-[0.68rem] text-paper/55 leading-relaxed">This is not a template. It is a bespoke legal document structured around the specific commercial terms of this transaction — the Pioneer Lakes lot schedule, the two urgently lapsing development approvals (DA0243 and DA-2010-185), the Gemini Homes on-hold lots, and the split buyer structure across three entities. A conventional solicitor engagement for a document of this complexity would typically involve several thousand dollars in legal fees and days of drafting time.</p>
                </div>
            </div>

            <!-- HOA PDF -->
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">The document below is the executed Heads of Agreement, with vendor and third-party identifying details redacted for publication. The commercial terms, deal structure, lot schedule, development approval schedule, and all binding clauses are unredacted.</p>

            <div class="evidence-vault mt-2 mb-6">
                <div class="ev-header" onclick="toggleVault(this)">
                    <div class="flex items-center gap-2">
                        <span class="text-[0.48rem] tracking-[0.22em] uppercase" style="color:#3d7a4a">📁 Legal Document — Pioneer Lakes Acquisition</span>
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— HOA · Share Sale · $16,518,010 · Mackay QLD</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span>
                        <span class="ev-toggle">▼</span>
                    </div>
                </div>
                <div class="ev-body">
                    <div class="ev-file ef-sage" onclick="openMV('pioneer-lakes-hoa')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">HOA_REDACTED.pdf — Heads of Agreement · Pioneer Lakes Share Sale</div>
                            <div class="ev-desc">Share acquisition · $16,518,010 · Pioneer Lakes Pty Ltd (ACN 108 681 563) · 7 May 2026 · Generated via Claude</div>
                        </div>
                        <div class="ev-cta">View →</div>
                    </div>
                </div>
            </div>

            <!-- Deal Structure Summary -->
            <div class="border p-5 reveal" style="border-color:rgba(61,122,74,0.2);background:rgba(61,122,74,0.04)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase mb-4" style="color:#3d7a4a">Deal Structure — At a Glance</div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <div class="flex justify-between items-baseline border-b border-paper/[0.06] pb-1.5">
                            <span class="text-[0.55rem] text-paper/40">Share Purchase Price</span>
                            <span class="font-display text-base text-paper/70">$12,500,000</span>
                        </div>
                        <div class="flex justify-between items-baseline border-b border-paper/[0.06] pb-1.5">
                            <span class="text-[0.55rem] text-paper/40">Lot Settlement Amount</span>
                            <span class="font-display text-base text-paper/70">$4,018,010</span>
                        </div>
                        <div class="flex justify-between items-baseline border-b border-paper/[0.06] pb-1.5">
                            <span class="text-[0.55rem] text-paper/40">Total Consideration</span>
                            <span class="font-display text-lg" style="color:#3d7a4a">$16,518,010</span>
                        </div>
                        <div class="flex justify-between items-baseline border-b border-paper/[0.06] pb-1.5">
                            <span class="text-[0.55rem] text-paper/40">Deposit (within 2 weeks of SSA)</span>
                            <span class="font-display text-base text-paper/70">$2,000,000</span>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <span class="text-[0.55rem] text-paper/40">Balance at Completion</span>
                            <span class="font-display text-base text-paper/70">$14,518,010</span>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between items-baseline border-b border-paper/[0.06] pb-1.5">
                            <span class="text-[0.55rem] text-paper/40">Vendor (70%)</span>
                            <span class="text-[0.6rem] text-paper/55">Jomist Developments Pty Ltd</span>
                        </div>
                        <div class="flex justify-between items-baseline border-b border-paper/[0.06] pb-1.5">
                            <span class="text-[0.55rem] text-paper/40">Vendor (30%)</span>
                            <span class="text-[0.6rem] text-paper/55">Grassland Properties Pty Ltd</span>
                        </div>
                        <div class="flex justify-between items-baseline border-b border-paper/[0.06] pb-1.5">
                            <span class="text-[0.55rem] text-paper/40">Buyer — Adam Watson</span>
                            <span class="text-[0.6rem] text-paper/55">30%</span>
                        </div>
                        <div class="flex justify-between items-baseline border-b border-paper/[0.06] pb-1.5">
                            <span class="text-[0.55rem] text-paper/40">Buyer — GC Resources Pty Ltd</span>
                            <span class="text-[0.6rem] text-paper/55">40%</span>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <span class="text-[0.55rem] text-paper/40">Buyer — Watson Corporate Pty Ltd</span>
                            <span class="text-[0.6rem] text-paper/55">30%</span>
                        </div>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-paper/[0.06]">
                    <div class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25 mb-1">Critical Date — Development Approvals</div>
                    <p class="text-[0.58rem] text-paper/40 leading-relaxed">DA0243 (Stages 5–8) and DA-2010-185 (Industry) lapse <strong class="text-hot/70">5 August 2026</strong>. Extension applications being prepared by JFP Urban Consultants. Extension must be obtained prior to Completion. Time is of the essence.</p>
                </div>
            </div>
        </div>

        <!-- Deal Terms — Nothing Up Front -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(61,122,74,0.6)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#3d7a4a;border-color:rgba(61,122,74,0.45)">Deal Structure · Vendor Finance · Lot-by-Lot Settlement</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">NOTHING UP FRONT.<br><span style="color:#3d7a4a">PAID AS EACH LOT SELLS.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">One of the most significant features of the Pioneer Lakes deal is the payment structure Adam Watson was able to negotiate directly with the Directors. Rather than requiring the standard deposit and balance-on-completion model — which would demand tens of millions of dollars before a single home is sold — the vendors agreed to a structure where the purchase price is paid progressively: <strong class="text-paper/70">nothing is owed up front, and the Directors are paid off as each of the 649 lots is sold.</strong></p>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
                <div class="border p-4 text-center" style="border-color:rgba(61,122,74,0.25);background:rgba(61,122,74,0.06)">
                    <div class="font-display text-3xl mb-1" style="color:#3d7a4a">649</div>
                    <div class="text-[0.47rem] tracking-[0.16em] uppercase text-paper/35">Lots · Pioneer Lakes</div>
                </div>
                <div class="border p-4 text-center" style="border-color:rgba(61,122,74,0.25);background:rgba(61,122,74,0.06)">
                    <div class="font-display text-3xl mb-1" style="color:#3d7a4a">$0</div>
                    <div class="text-[0.47rem] tracking-[0.16em] uppercase text-paper/35">Required Up Front</div>
                </div>
                <div class="border p-4 text-center" style="border-color:rgba(61,122,74,0.25);background:rgba(61,122,74,0.06)">
                    <div class="font-display text-3xl mb-1" style="color:#3d7a4a">Per Lot</div>
                    <div class="text-[0.47rem] tracking-[0.16em] uppercase text-paper/35">Payment Released at Each Sale</div>
                </div>
            </div>

            <div class="border-l-4 pl-5" style="border-color:rgba(61,122,74,0.55);background:rgba(61,122,74,0.05);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase mb-2" style="color:#3d7a4a">Why This Matters</div>
                <p class="text-[0.65rem] text-paper/55 leading-relaxed">In a conventional land acquisition of this scale, a developer would be required to find the full purchase price — or a substantial deposit against it — before taking control of the asset. This structure eliminates that barrier entirely. The Directors are paid from the proceeds of the project they are selling. Adam Watson retains the capital required to construct homes, rather than spending it acquiring the land. It is vendor finance at scale — and it required the Directors’ confidence in the buyer and the project to agree to it.</p>
            </div>
        </div>

        <!-- Kira Steinhaus Interference -->
        <div id="kira-steinhaus" class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.55)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Deal Interference · Kira Steinhaus · $3.5M Demand · Legal Challenge Pending</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">UNINVITED. UNCONTRACTED.<br><span class="text-hot">NOW DEMANDING $3.5 MILLION.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-6">A routine meeting arranged by the builder’s agent became a case study in the kind of conduct that has given real estate agents their reputation. The developer, having watched it all unfold, summed it up plainly — and, as many in the industry would note, not without justification: <strong class="text-paper/65">real estate agents are very dishonest.</strong></p>

            <!-- Photo + sequence grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                <div>
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kira_steinhaus.png" alt="Kira Steinhaus" class="w-full border border-paper/[0.07]" style="object-fit:contain;background:#0d0d0d;max-height:380px" loading="lazy" />
                    <div class="text-[0.43rem] tracking-[0.14em] uppercase text-paper/20 mt-1.5">Kira Steinhaus · Now Threatening Legal Action · $3.5M Commission Demand</div>
                </div>
                <div class="space-y-3">
                    <div class="text-[0.47rem] tracking-[0.18em] uppercase text-paper/30 mb-2">Sequence of Events</div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-xs shrink-0 mt-0.5 w-5 text-right text-hot/60">01</span>
                        <p class="text-[0.6rem] text-paper/45 leading-relaxed">Brett — the builder’s agent — organised a meeting with Adam Watson and asked whether he could attend. Adam Watson said yes.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-xs shrink-0 mt-0.5 w-5 text-right text-hot/60">02</span>
                        <p class="text-[0.6rem] text-paper/45 leading-relaxed">Brett refused to allow Adam Watson to attend the meeting, citing no stated reason.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-xs shrink-0 mt-0.5 w-5 text-right text-hot/60">03</span>
                        <p class="text-[0.6rem] text-paper/45 leading-relaxed">Brett showed up to the meeting — where Gina Rinehart was present — accompanied by Kira Steinhaus. Nobody had invited her. Nobody knew she was coming.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-xs shrink-0 mt-0.5 w-5 text-right text-hot/60">04</span>
                        <p class="text-[0.6rem] text-paper/45 leading-relaxed">During the meeting, Kira Steinhaus walked out. She returned shortly after and announced that they had found a buyer offering a higher price.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-xs shrink-0 mt-0.5 w-5 text-right text-gold/60">05</span>
                        <p class="text-[0.6rem] text-paper/45 leading-relaxed">Gina Rinehart called the builder directly and blasted him — for employing Brett, and for running a transparent cheap trick: walking out and coming back with a &ldquo;higher offer&rdquo; to pressure the room.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-xs shrink-0 mt-0.5 w-5 text-right" style="color:rgba(61,122,74,0.6)">06</span>
                        <p class="text-[0.6rem] text-paper/45 leading-relaxed">Brett has since been fired by the builder.</p>
                    </div>
                </div>
            </div>

            <!-- The cheap trick callout -->
            <div class="border-l-4 pl-5 mb-6" style="border-color:rgba(193,68,14,0.5);background:rgba(193,68,14,0.05);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">The Tactic — A Classic Cheap Trick</div>
                <p class="text-[0.65rem] text-paper/55 leading-relaxed">Walking out of a negotiation and returning with a claim of a higher competing offer is one of the oldest pressure tactics in commercial real estate. The idea is to manufacture urgency and weaken the buyer’s position. It requires a willing participant to play the role of phantom buyer — or simply the audacity to claim one exists. Gina Rinehart, who has sat across many negotiating tables, was not impressed.</p>
            </div>

            <!-- $3.5M demand section -->
            <div class="border mb-6" style="border-color:rgba(193,68,14,0.25);background:rgba(193,68,14,0.04)">
                <div class="px-5 py-3 border-b" style="border-color:rgba(193,68,14,0.15)">
                    <div class="text-[0.47rem] tracking-[0.22em] uppercase text-hot">Kira Steinhaus — Commission Demand · $3,500,000</div>
                </div>
                <div class="px-5 py-5">
                    <p class="text-[0.68rem] text-paper/55 leading-relaxed mb-4">Kira Steinhaus is now claiming that Adam Watson owes her a spotter’s fee — essentially a commission for introducing him to the developer. She has communicated a demand of <strong class="text-paper/75">$3.5 million</strong>, and has taken that claim to the developer directly. The developer has passed the communication to Adam Watson.</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">There are two fundamental problems with this claim. First, any fee arrangement of this kind would need to be negotiated with and agreed to by the builder’s agent — Brett — not unilaterally declared after the fact by someone who was never engaged, never contracted, and never invited to the meeting in the first place. Second, Kira Steinhaus was not introduced as a participant in the deal. She arrived uninvited alongside Brett, whose own conduct in the meeting was the subject of Gina Rinehart’s rebuke, and who has since been terminated by the builder.</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed">There is a suspicion — not yet established as fact — that Kira Steinhaus and Brett had a personal relationship that extended beyond a professional one; a friends-with-benefits dynamic that may explain why she was brought to a meeting where her presence was neither requested nor appropriate. <strong class="text-paper/65">Adam Watson is ready for the civil challenge.</strong></p>
                </div>
            </div>

            <!-- 3-col status grid -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                <div class="border p-4" style="border-color:rgba(193,68,14,0.2);background:rgba(193,68,14,0.04)">
                    <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot/60 mb-2">Kira’s Demand</div>
                    <div class="font-display text-2xl text-hot mb-2">$3.5M</div>
                    <p class="text-[0.58rem] text-paper/40 leading-relaxed">Commission claimed for an introduction she was never engaged to make, to a meeting she was never invited to attend.</p>
                </div>
                <div class="border p-4" style="border-color:rgba(201,138,16,0.2);background:rgba(201,138,16,0.04)">
                    <div class="text-[0.44rem] tracking-[0.15em] uppercase text-gold/60 mb-2">Brett — Status</div>
                    <div class="font-display text-xl text-gold mb-2">FIRED</div>
                    <p class="text-[0.58rem] text-paper/40 leading-relaxed">The builder’s agent who orchestrated the meeting interference has been terminated by the builder following Gina Rinehart’s intervention.</p>
                </div>
                <div class="border p-4" style="border-color:rgba(61,122,74,0.2);background:rgba(61,122,74,0.04)">
                    <div class="text-[0.44rem] tracking-[0.15em] uppercase mb-2" style="color:rgba(61,122,74,0.7)">Adam Watson — Position</div>
                    <div class="font-display text-xl mb-2" style="color:#3d7a4a">READY</div>
                    <p class="text-[0.58rem] text-paper/40 leading-relaxed">Adam Watson is prepared for the civil challenge. The claim has no contractual basis and no legal foundation.</p>
                </div>
            </div>
        </div>

        <!-- Brett — Background Enquiries -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.5)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Brett · Background Enquiries · New Zealand · Bikies · Money Laundering · Personal Conduct</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">AFTER HE WAS FIRED,<br><span class="text-gold">ENQUIRIES WERE MADE.</span></h3>

            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-6">Once Brett's role in the meeting interference became clear, enquiries were made about him. What came back was not a clean picture. Brett had approached Adam Watson personally — seeking help resolving problems he had with bikies he was associated with in New Zealand. That conversation opened a window into a more complicated background than his role as builder's agent had suggested.</p>

            <!-- NZ money laundering -->
            <div class="border border-gold/20 p-5 mb-5" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.47rem] tracking-[0.2em] uppercase text-gold mb-3">New Zealand · Social Housing · Money Laundering · Labour Party</div>
                <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">LAUNDERED THROUGH SOCIAL HOUSING.<br><span class="text-gold">NEVER TURNED A PROFIT. LABOUR LOOKED AWAY.</span></h4>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">Brett was involved in a social housing project in New Zealand through which money was laundered. The project — connected to bikies he was associated with — was structured around social housing construction. It never turned a profit. The scheme used the social housing framework as a vehicle: legitimate-looking activity, government-adjacent, difficult to scrutinise from the outside.</p>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">The Labour Party in New Zealand turned a blind eye to what was happening. Whether that was a failure of oversight or something more deliberate is a question for investigators. What is documented is that the projects ran, they lost money on paper, and no one in a position to ask questions chose to ask them.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
                <div class="border border-gold/15 p-4" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.43rem] tracking-[0.16em] uppercase text-gold/60 mb-2">The Vehicle</div>
                    <p class="text-[0.6rem] text-paper/45 leading-relaxed">Social housing construction projects in New Zealand — government-adjacent, structured to appear legitimate, never delivering a return.</p>
                </div>
                <div class="border border-gold/15 p-4" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.43rem] tracking-[0.16em] uppercase text-gold/60 mb-2">The Associates</div>
                    <p class="text-[0.6rem] text-paper/45 leading-relaxed">Bikies connected to New Zealand — the same associates Brett later approached Adam Watson seeking help to manage disputes with.</p>
                </div>
                <div class="border border-hot/15 p-4" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.43rem] tracking-[0.16em] uppercase text-hot/60 mb-2">The Oversight</div>
                    <p class="text-[0.6rem] text-paper/45 leading-relaxed">The Labour Party in New Zealand turned a blind eye. The projects never turned a profit. Nobody asked why.</p>
                </div>
            </div>

            <!-- Personal conduct — pressuring partner to sell home -->
            <div class="border border-paper/[0.08] p-5 mb-5" style="background:rgba(0,0,0,0.15)">
                <div class="text-[0.47rem] tracking-[0.2em] uppercase text-paper/30 mb-3">Personal Conduct · Brett's Relationship · Her Home · His Insecurity</div>
                <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">"IT REMINDS ME OF THE OTHER MEN<br><span class="text-hot">SHE'S HAD IN THE HOUSE."</span></h4>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">Brett is currently pressuring a woman he is in a relationship with to sell her home. The reason he is giving her: the house reminds him of the other men she has had there, and he doesn't want their smell around.</p>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">The house is not his. It belongs to her. Brett has no legal standing over the property — no ownership, no lease, no claim. His argument for its sale is not financial, not practical, and not legal. It is purely territorial — a demand that another person dispose of their own asset to satisfy his insecurity about her past.</p>
                <div class="border-l-4 pl-4" style="border-color:rgba(193,68,14,0.45);background:rgba(193,68,14,0.04);padding:0.85rem 1rem 0.85rem 1.25rem">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">The Irony</div>
                    <p class="text-[0.65rem] text-paper/55 leading-relaxed italic">Brett is demanding the sale of a home he does not own, citing discomfort about another person's history in a property that is entirely hers. For a man who arrived uninvited — to a meeting he was not supposed to attend, with a woman nobody had engaged — the pattern of inserting himself where he has no standing is consistent.</p>
                </div>
            </div>

            <!-- Summary -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="border border-gold/15 p-4" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.44rem] tracking-[0.16em] uppercase text-gold/60 mb-2">Brett Approached Adam</div>
                    <p class="text-[0.6rem] text-paper/45 leading-relaxed">Seeking help with bikie-related disputes stemming from New Zealand associations — the same network connected to the social housing laundering operation.</p>
                </div>
                <div class="border border-hot/15 p-4" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.44rem] tracking-[0.16em] uppercase text-hot/60 mb-2">Pressuring His Partner</div>
                    <p class="text-[0.6rem] text-paper/45 leading-relaxed">Demanding she sell her own home — which he does not own — because he objects to the memory of her past. Coercive conduct dressed as a preference.</p>
                </div>
            </div>
        </div>

        <!-- Kane Singleton -->
        <div id="kane-singleton" class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Bodie's Network · Harassment Campaign · Charges Laid · Muay Thai Fighter</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">KANE SINGLETON.<br><span class="text-hot">CHARGED. SPONSORS GONE. STILL FIGHTING.</span></h3>

            <!-- Photo + intro -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-7">
                <div>
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kane_singleton.jpg"
                         alt="Kane Singleton — Muay Thai Fighter"
                         class="w-full border border-paper/[0.07] object-cover"
                         style="max-height:420px;object-position:top"
                         loading="lazy" />
                    <div class="flex items-center justify-between mt-1.5">
                        <span class="text-[0.43rem] tracking-[0.14em] uppercase text-paper/20">Kane Singleton · Muay Thai Fighter · Gold Coast</span>
                        <a href="https://www.instagram.com/kanes1ngleton/" target="_blank" rel="noopener"
                           class="text-[0.44rem] tracking-[0.12em] uppercase border border-paper/15 text-paper/30 px-2 py-0.5 hover:border-hot/40 hover:text-hot transition-colors">
                            @kanes1ngleton ↗
                        </a>
                    </div>
                </div>
                <div>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Kane Singleton is a Gold Coast Muay Thai fighter and a member of Bodie Chalmers's network. He was involved in the harassment campaign against Adam Watson during the period when Bodie Chalmers was actively running his false accusation narrative and manufacturing social stigma around Adam.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">The harassment was not passive. Kane Singleton has been charged with four separate offences in connection with his conduct toward Adam Watson.</p>

                    <!-- Charges -->
                    <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-3">Charges — Kane Singleton</div>
                        <div class="space-y-2">
                            <div class="flex gap-2 items-start">
                                <span class="text-hot text-xs shrink-0 mt-0.5">→</span>
                                <p class="text-[0.6rem] text-paper/50 leading-relaxed">Stalking and intimidation of Adam Watson</p>
                            </div>
                            <div class="flex gap-2 items-start">
                                <span class="text-hot text-xs shrink-0 mt-0.5">→</span>
                                <p class="text-[0.6rem] text-paper/50 leading-relaxed">Causing fear in a person — Adam Watson</p>
                            </div>
                            <div class="flex gap-2 items-start">
                                <span class="text-hot text-xs shrink-0 mt-0.5">→</span>
                                <p class="text-[0.6rem] text-paper/50 leading-relaxed">Threatening to kill Adam Watson</p>
                            </div>
                            <div class="flex gap-2 items-start">
                                <span class="text-hot text-xs shrink-0 mt-0.5">→</span>
                                <p class="text-[0.6rem] text-paper/50 leading-relaxed">Using a carriage service to send threatening messages and make threatening phone calls to Adam Watson</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sponsors gone -->
            <div class="border border-paper/[0.08] p-5 mb-6" style="background:rgba(0,0,0,0.18)">
                <div class="text-[0.47rem] tracking-[0.2em] uppercase text-paper/30 mb-3">Sponsors · Rinehart · The Economics of Muay Thai</div>
                <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">RINEHART CALLED HIS SPONSORS.<br><span class="text-hot">THEY ALL PULLED.</span></h4>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">Gina Rinehart made calls to Kane Singleton's sponsors. Every one of them withdrew their support. For a professional fighter in Australia, that is not a minor inconvenience — it is a structural problem.</p>

                <div class="border border-paper/[0.07] p-4 mb-4" style="background:rgba(0,0,0,0.15)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/25 mb-3">The Reality of Muay Thai in Australia — <a href="https://claude.ai/share/0f0d4d4a-667c-4840-9a5e-2afe6e37580b" target="_blank" rel="noopener" class="text-gold/60 hover:text-gold transition-colors underline underline-offset-2">Full Analysis ↗</a></div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed mb-3">Muay Thai in Australia is not a large industry. A domestic fight might pay $200–$800 at a regional event, $1,000–$3,000 for a headline spot at a major card. Even fighters at the top of the domestic scene rarely make enough to live on from fighting alone — nearly all of them coach, work security, or have day jobs alongside competing.</p>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed mb-3">The sport lacks mainstream TV deals, broadcast revenue, and meaningful corporate sponsorship because the audience numbers aren't there. Gate sales and ticket revenue are essentially the entire economics at most events. The ceiling is low for structural reasons that have nothing to do with the quality of the athletes.</p>
                    <div class="border-l-4 pl-4 mt-3" style="border-color:rgba(193,68,14,0.5);background:rgba(193,68,14,0.04);padding:0.75rem 1rem 0.75rem 1.25rem">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-1.5">Without Sponsors — He's Gone</div>
                        <p class="text-[0.62rem] text-paper/50 leading-relaxed">In a sport where gate revenue barely covers costs and fight purses at the domestic level don't sustain a career, sponsorship isn't supplementary income — it's the difference between being a professional and not being one. Kane Singleton lost all of his. That is the practical consequence of what happened.</p>
                    </div>
                </div>
            </div>

            <!-- Fight embed -->
            <div class="border border-paper/[0.07] overflow-hidden mb-6" style="background:rgba(0,0,0,0.2)">
                <div class="px-4 py-2.5 border-b border-paper/[0.06]" style="background:rgba(0,0,0,0.3)">
                    <span class="text-[0.44rem] tracking-[0.2em] uppercase text-hot">Kane Singleton vs Ryan McDonald · Muay Thai · Watch the Fight</span>
                </div>
                <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden">
                    <iframe
                        src="https://www.youtube.com/embed/GJ3AqMxHf7I"
                        style="position:absolute;top:0;left:0;width:100%;height:100%;border:none"
                        title="Kane Singleton vs Ryan McDonald — Muay Thai"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        loading="lazy">
                    </iframe>
                </div>
                <div class="px-4 py-3 border-t border-paper/[0.05]" style="background:rgba(0,0,0,0.2)">
                    <span class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/22">Kane Singleton · Muay Thai · vs Ryan McDonald · Watch and congratulate him on his win</span>
                </div>
            </div>

            <!-- Sunlight.Quest position -->
            <div class="border border-sage/25 p-5" style="background:rgba(61,122,74,0.04)">
                <div class="text-[0.47rem] tracking-[0.2em] uppercase text-sage mb-3">Sunlight.Quest — Position on Kane Singleton</div>
                <p class="text-[0.68rem] text-paper/55 leading-relaxed mb-3">Kane Singleton was charged for his conduct. That is documented here because it is the record. But Sunlight.Quest is not in the business of piling on. He is a fighter. He trained hard enough to win. He has to navigate the consequences of choices made outside the ring — but the work inside it is his.</p>
                <p class="text-[0.68rem] text-paper/55 leading-relaxed mb-4">His sponsors are gone. The industry is thin. That is a difficult position for anyone who has built their career around a sport that doesn't pay well without outside support. Sunlight.Quest encourages everyone to watch his fight, and to congratulate him on his win against Ryan McDonald.</p>
                <div class="flex flex-wrap gap-3">
                    <a href="https://www.youtube.com/watch?v=GJ3AqMxHf7I" target="_blank" rel="noopener"
                       class="text-[0.52rem] tracking-[0.16em] uppercase border border-sage/35 text-sage/70 px-3 py-1.5 hover:border-sage hover:text-sage transition-colors">
                        Watch the Fight ↗
                    </a>
                    <a href="https://www.instagram.com/kanes1ngleton/" target="_blank" rel="noopener"
                       class="text-[0.52rem] tracking-[0.16em] uppercase border border-paper/15 text-paper/35 px-3 py-1.5 hover:border-paper/40 hover:text-paper/60 transition-colors">
                        @kanes1ngleton on Instagram ↗
                    </a>
                    <a href="https://claude.ai/share/0f0d4d4a-667c-4840-9a5e-2afe6e37580b" target="_blank" rel="noopener"
                       class="text-[0.52rem] tracking-[0.16em] uppercase border border-paper/15 text-paper/35 px-3 py-1.5 hover:border-paper/40 hover:text-paper/60 transition-colors">
                        Muay Thai Economics — Full Analysis ↗
                    </a>
                </div>
            </div>
        </div>

        <!-- Z Soielman -->
        <div id="z-soielman" class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.6)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Z Soielman · Home Invasion · Fake ID · Armed Burglary Links · Remand · No Bail</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">SENT TO A FAKE ADDRESS.<br><span class="text-hot">KICKED THE DOOR IN ANYWAY.</span></h3>

            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-6">Adam Watson gave Z Soielman a fake address. Soielman drove to it regardless — and when he arrived at a property that a real estate agent was actively trying to sell, he proceeded to harass and kick the door in. The real estate agent called police. They arrived without sirens. Soielman was charged with home invasion. He is now on remand. Bail has been refused.</p>

            <!-- The "itchbay" video -->
            <div class="border border-paper/[0.07] overflow-hidden mb-6" style="background:rgba(0,0,0,0.2)">
                <div class="px-4 py-2.5 border-b border-paper/[0.06]" style="background:rgba(0,0,0,0.3)">
                    <span class="text-[0.44rem] tracking-[0.2em] uppercase text-hot">"ITCHBAY" — Z Soielman · Pre-Home Invasion · Too Scared to Say It in Public</span>
                </div>
                <video controls class="w-full block" style="max-height:480px;background:#000" preload="metadata">
                    <source src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/itchbay.mp4" type="video/mp4" />
                </video>
                <div class="px-4 py-3 border-t border-paper/[0.05]" style="background:rgba(0,0,0,0.2)">
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed">In this video, Z Soielman is about to go and do a home invasion — but he's using the word <strong class="text-paper/65">"itchbay"</strong> because he's too scared to say "bitch" in public. A man about to commit a home invasion who won't say a word out loud. The cognitive dissonance is remarkable.</p>
                </div>
            </div>

            <!-- What happened -->
            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.47rem] tracking-[0.2em] uppercase text-hot mb-4">Sequence of Events</div>
                <div class="space-y-2.5">
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-xs shrink-0 mt-0.5 w-5 text-right text-hot/60">01</span>
                        <p class="text-[0.62rem] text-paper/50 leading-relaxed">Adam Watson gives Z Soielman a fake address.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-xs shrink-0 mt-0.5 w-5 text-right text-hot/60">02</span>
                        <p class="text-[0.62rem] text-paper/50 leading-relaxed">Soielman drives to the address — which is a property currently being listed for sale by a real estate agent.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-xs shrink-0 mt-0.5 w-5 text-right text-hot/60">03</span>
                        <p class="text-[0.62rem] text-paper/50 leading-relaxed">He harasses at the property and kicks the door in.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-xs shrink-0 mt-0.5 w-5 text-right text-gold/60">04</span>
                        <p class="text-[0.62rem] text-paper/50 leading-relaxed">The real estate agent calls police. They arrive without sirens.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-xs shrink-0 mt-0.5 w-5 text-right text-hot/60">05</span>
                        <p class="text-[0.62rem] text-paper/50 leading-relaxed">Soielman is charged with home invasion. He is found to be carrying fake identification documents.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-xs shrink-0 mt-0.5 w-5 text-right text-hot/60">06</span>
                        <p class="text-[0.62rem] text-paper/50 leading-relaxed">Fingerprints are taken. Police begin linking him to a series of armed burglaries. His prints are being run through the DNA database.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-xs shrink-0 mt-0.5 w-5 text-right text-hot/60">07</span>
                        <p class="text-[0.62rem] text-paper/50 leading-relaxed">Soielman is placed on remand. Bail is refused. The database check is expected to return additional charges.</p>
                    </div>
                </div>
            </div>

            <!-- Status grid -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-px mb-6" style="background:rgba(245,234,212,0.06)">
                <div class="p-4" style="background:#0c0804">
                    <div class="text-[0.42rem] tracking-[0.18em] uppercase text-hot mb-1.5">Current Status</div>
                    <div class="font-display text-lg leading-tight text-hot">Remand</div>
                    <div class="text-[0.56rem] text-paper/35 mt-1">Bail refused</div>
                </div>
                <div class="p-4" style="background:#0c0804">
                    <div class="text-[0.42rem] tracking-[0.18em] uppercase text-hot mb-1.5">Charge</div>
                    <div class="font-display text-lg leading-tight text-paper/70">Home Invasion</div>
                    <div class="text-[0.56rem] text-paper/35 mt-1">Property listed for sale</div>
                </div>
                <div class="p-4" style="background:#0c0804">
                    <div class="text-[0.42rem] tracking-[0.18em] uppercase text-gold mb-1.5">Found On Him</div>
                    <div class="font-display text-lg leading-tight text-gold">Fake IDs</div>
                    <div class="text-[0.56rem] text-paper/35 mt-1">Multiple false documents</div>
                </div>
                <div class="p-4" style="background:#0c0804">
                    <div class="text-[0.42rem] tracking-[0.18em] uppercase text-hot mb-1.5">Pending</div>
                    <div class="font-display text-lg leading-tight text-paper/70">DNA + Prints</div>
                    <div class="text-[0.56rem] text-paper/35 mt-1">Armed burglary links</div>
                </div>
            </div>

            <!-- What's coming -->
            <div class="border-l-4 pl-5" style="border-color:rgba(193,68,14,0.5);background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">What's Coming</div>
                <p class="text-[0.65rem] text-paper/50 leading-relaxed">His fingerprints are being matched against unsolved armed burglaries. His DNA is being run through the database. He was caught with fake identification — which raises the question of how many other names he has operated under and what those names are attached to. The home invasion charge got him into custody. The database work is going to keep him there. The fake address was the trap. He walked into it.</p>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     EPISODE 5 LINK
══════════════════════════════════════ -->
<section class="py-24 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(201,138,16,0.06) 0%,rgba(12,8,4,0) 100%)">
    <div class="max-w-3xl mx-auto text-center">
        <div class="flex items-center justify-center gap-3 mb-6"><div class="w-12 h-px" style="background:#c98a10"></div><span class="text-[0.5rem] tracking-[0.3em] uppercase" style="color:#c98a10">End of Episode 4</span><div class="w-12 h-px" style="background:#c98a10"></div></div>
        <h2 class="font-display leading-none tracking-wide mb-5" style="font-size:clamp(2.8rem,7vw,5rem)">THE ORDER THEY AGREED TO.<br><span style="color:#c98a10">EPISODE 5.</span></h2>
        <p class="font-serif italic text-paper/40 text-lg leading-relaxed mb-10 max-w-xl mx-auto">A NSW government agency consented to a tribunal order to make a social-housing home habitable — then left the repairs undone, the power off, and the rent pushed to $520 a week.</p>
        <a href="/episode-5" class="inline-block font-display tracking-widest text-xl px-12 py-5 transition-all hover:bg-gold/10" style="color:#c98a10;border:1px solid rgba(201,138,16,0.5)">CONTINUE TO EPISODE 5 →</a>
    </div>
</section>


<!-- ══ FOOTER ══ -->
<footer class="border-t border-paper/[0.05] px-5 md:px-10 py-8 max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-4">
    <div class="font-display text-xl tracking-widest text-paper/18">SUNLIGHT<span class="text-dim">.QUEST</span></div>
    <div class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/10 text-center">© 2026 Sunlight.Quest — Investigative Journalism — Gold Coast, QLD</div>
    <div class="flex gap-4">
        <a href="/" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 1</a>
        <a href="/episode-2" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 2</a>
        <a href="/episode-3" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 3</a>
        <a href="/episode-4" class="text-[0.52rem] tracking-[0.14em] uppercase text-sage/40 hover:text-sage transition-colors">Episode 4</a>
        <a href="/episode-5" class="text-[0.52rem] tracking-[0.14em] uppercase text-gold/35 hover:text-gold transition-colors">Episode 5</a>
    </div>
</footer>


<script>
function toggleVault(el) { el.classList.toggle('open'); el.nextElementSibling.classList.toggle('open'); }

var EVIDENCE = {
    'pioneer-lakes-hoa': {
        type: 'pdf',
        title: 'HEADS OF AGREEMENT — PIONEER LAKES SHARE SALE',
        tag: 'Pioneer Lakes Pty Ltd · ACN 108 681 563 · 7 May 2026',
        meta: 'PDF · Share acquisition · Total Consideration $16,518,010 · Generated via Claude · Vendor details redacted',
        desc: 'Heads of Agreement for the acquisition of all issued shares in Pioneer Lakes Pty Ltd — a 649-lot master-planned residential estate adjoining Mirani Township, Mackay. Total consideration $16,518,010 comprising a $12,500,000 Share Purchase Price and $4,018,010 Lot Settlement Amount. Covers transaction structure, conditions precedent, lot schedule, development approvals (including two urgently lapsing DAs on 5 August 2026), exclusivity, and confidentiality. Generated entirely through Claude — no outside solicitor engaged.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/HOA_REDACTED.pdf',
        filename: 'HOA_REDACTED.pdf'
    },
    'kennards-judgment': { type:'pdf', title:'Kondratenko v Kennards Storage Management [2024] FCA 913', tag:'Federal Court · Justice Meagher · 15 August 2024', meta:'PDF · Summary judgment · QUD18/2024 · Queensland Registry', desc:'Justice Meagher accepted the applicant\'s evidence at its highest and granted summary judgment in favour of Kennards. The dismissal is procedural — not a factual finding that Kennards acted well.', url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kennards/Kondratenko+v+Kennards+Storage+Management+%5B2024%5D+FCA+913.pdf', filename:'Kondratenko_v_Kennards_FCA_913.pdf' },
    'kennards-originating': { type:'pdf', title:'Originating Application — QUD18/2024', tag:'Federal Court · Filed 9 January 2024 · Self-represented', meta:'PDF · Originating Application · Queensland Registry · Kosta Kondratenko', desc:'The originating application filed in the Federal Court of Australia, Queensland Registry on 9 January 2024. Filed by Kosta Kondratenko, self-represented.', url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kennards/originating_application.pdf', filename:'originating_application.pdf' },
    'kennards-genuine-steps': { type:'pdf', title:'Genuine Steps Statement', tag:'Federal Court · Filed with Originating Application', meta:'PDF · Genuine Steps Statement · QUD18/2024', desc:'The Genuine Steps Statement filed with the Originating Application, documenting pre-filing attempts to resolve the billing dispute with Kennards Self Storage before commencing Federal Court proceedings.', url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kennards/genuine_steps.pdf', filename:'genuine_steps.pdf' },
    'kennards-karyn-reardon': { type:'pdf', title:'Karyn Reardon Affidavit — Piper Alderman', tag:'Piper Alderman · Senior Partner · Filed 12 April 2024', meta:'PDF · Sworn by Karyn Reardon · Filed in support of summary judgment application', desc:'Affidavit sworn by Karyn Reardon, senior partner at Piper Alderman (admitted 1994, partner since 2007), filed in support of Kennards\' application for summary judgment against the self-represented applicant.', url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kennards/karyn_reardon_affidavit.pdf', filename:'karyn_reardon_affidavit.pdf' },
    'kennards-kellie-robley': { type:'pdf', title:'Kellie Robley Affidavit — Operations Manager', tag:'Kennards Operations Manager · Filed 12 April 2024', meta:'PDF · Sworn by Kellie Robley · Admits automated billing error and PIN access disablement', desc:'Affidavit sworn by Kellie Robley, Operations Manager at Kennards. Paragraph 8 confirms the statement was automatically generated and erroneously omitted the $25 payment. Paragraph 16 admits the customer\'s PIN access was disabled by Kennards before the 42-day contractual default period had elapsed.', url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kennards/kellie_robley_affidavit.pdf', filename:'kellie_robley_affidavit.pdf' },
    'kennards-affidavit-service': { type:'pdf', title:'Affidavit of Service — Sheriff Delani Sibanda', tag:'Sheriff\'s Officer · 25 January 2024 · QUD18/2024', meta:'PDF · Personal service at Sam Kennard\'s home address · Accepted by his wife', desc:'Affidavit of Service sworn by Sheriff\'s Officer Delani Sibanda confirming personal service of the Originating Application (QUD18/2024) at Sam Kennard\'s home address on 25 January 2024. Service was accepted by his wife.', url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kennards/HOSPPLX18_2024_01_25_15_28_59_978+(1).pdf', filename:'affidavit_of_service_sibanda.pdf' }
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
    if (e.key === 'Escape') { closeMV(); closeTipModal(); }
});

// Scroll reveal
var obs = new IntersectionObserver(function(entries){
    entries.forEach(function(e){if(e.isIntersecting)e.target.classList.add('in');});
},{threshold:0.08});
document.querySelectorAll('.reveal').forEach(function(el){obs.observe(el);});

function openTipModal() { document.getElementById('sq-modal').classList.add('open'); document.body.style.overflow='hidden'; }
function closeTipModal() { document.getElementById('sq-modal').classList.remove('open'); document.body.style.overflow=''; }
function sqModalBackdropClick(e) { if(e.target===document.getElementById('sq-modal'))closeTipModal(); }
function sqToggle(checkboxId,fieldsId){document.getElementById(fieldsId).classList.toggle('open',document.getElementById(checkboxId).checked);}
function sqToggleAnon(){document.getElementById('sq-contact-fields').classList.toggle('open',!document.getElementById('sq-anon-chk').checked);}
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
        summary.classList.add('sq-error');
        summary.focus();
        return;
    }
    summary.classList.remove('sq-error');

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

// ── VIDSTACK PLAYER EP4 INIT ──
(function() {
    var VTT_CONTENT = [
        'WEBVTT',
        '',
        '00:00:00.000 --> 00:04:00.000',
        'Hellen Pertekes',
        '',
        '00:04:00.000 --> 00:09:00.000',
        'Kennards',
        '',
        '00:09:00.000 --> 00:13:00.000',
        'Pioneer Lakes',
        '',
        '00:13:00.000 --> 00:17:00.000',
        'Kira Steinhaus',
        '',
        '00:17:00.000 --> 00:21:00.000',
        'Kane Singleton',
        '',
        '00:21:00.000 --> 00:26:00.000',
        'Z Soielman',
    ].join('\n');

    function initPlayerEp4() {
        var el = document.getElementById('player-ep4');
        if (!el) return;
        if (typeof el.subscribe !== 'function') {
            setTimeout(initPlayerEp4, 200);
            return;
        }
        window.vidstackPlayerEp4 = el;

        var track = document.getElementById('ep4-chapters-track');
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
                            document.querySelectorAll('[data-chap-ep4]').forEach(function(el2) {
                                var match = parseInt(el2.getAttribute('data-chap-ep4'),10) === j;
                                el2.style.background = match ? 'rgba(61,122,74,0.1)' : '';
                                el2.style.borderColor = match ? 'rgba(61,122,74,0.4)' : 'transparent';
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
        document.addEventListener('DOMContentLoaded', initPlayerEp4);
    } else {
        initPlayerEp4();
    }
})();

function seekToChapterEp4(index) {
    var p = window.vidstackPlayerEp4;
    if (!p) {
        var pl = document.getElementById('player-ep4');
        if (pl) pl.scrollIntoView({behavior:'smooth',block:'center'});
        return;
    }
    var tracks = p.textTracks;
    var ct = null;
    for (var i = 0; i < tracks.length; i++) { if (tracks[i].kind === 'chapters') { ct = tracks[i]; break; } }
    if (ct && ct.cues && ct.cues.length > index) { p.currentTime = ct.cues[index].startTime; }
    else { var d = p.duration || 0; if (d > 0) p.currentTime = (d / 6) * index; }
    p.play().catch(function(){});
    document.getElementById('player-ep4').scrollIntoView({behavior:'smooth',block:'center'});
    document.querySelectorAll('[data-chap-ep4]').forEach(function(el) {
        var match = parseInt(el.getAttribute('data-chap-ep4'),10) === index;
        el.style.background = match ? 'rgba(61,122,74,0.1)' : '';
        el.style.borderColor = match ? 'rgba(61,122,74,0.4)' : 'transparent';
    });
}
</script>

<!-- ══════════════════════════════════════
     TIP-OFF POPUP MODAL
══════════════════════════════════════ -->
<div id="sq-modal" onclick="sqModalBackdropClick(event)" role="dialog" aria-modal="true" aria-label="Submit a Tip">
    <div class="sq-modal-inner">
        <div class="sq-modal-close-row"><button class="sq-modal-close-btn" onclick="closeTipModal()">✕ CLOSE</button></div>
        <div style="margin-bottom:6px">
            <div class="sq-logo-row"><div class="sq-logo-bar"></div><div><div class="sq-logo-text">Sunlight.Quest</div><div class="sq-logo-sub">Accountability journalism · Gold Coast / Queensland</div></div></div>
            <div class="sq-conf-strip">Encrypted &nbsp;·&nbsp; Source protected &nbsp;·&nbsp; Triangulated for verification</div>
        </div>
        <div class="sq-card" id="sq-form-card">
            <div class="sq-section">
                <div class="sq-section-label">Subject of tip-off <span class="sq-badge sq-badge-req">required</span></div>
                <div class="sq-field">
                    <select class="sq-select" name="sq_subject" id="sq-subject">
                        <option value="">— Select subject / profile —</option>
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

</body>
</html>
