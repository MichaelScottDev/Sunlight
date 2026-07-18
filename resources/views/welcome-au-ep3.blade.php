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

        /* ── TIP MODAL ── */
        #sq-modal{display:none;position:fixed;inset:0;z-index:500;background:rgba(0,0,0,0.92);backdrop-filter:blur(6px);overflow-y:auto;padding:24px 16px 56px}
        #sq-modal.open{display:block}
        .sq-card{background:#0f0f0f;border:1px solid #1e1e1e;padding:22px 24px;margin-bottom:2px;max-width:680px;margin:0 auto}
        .sq-header{display:flex;align-items:flex-start;justify-content:space-between;gap:12px;padding-bottom:16px;border-bottom:1px solid #1e1e1e;margin-bottom:20px}
        .sq-wordmark{font-family:'Bebas Neue',sans-serif;font-size:18px;letter-spacing:3px;color:#f5ead4;line-height:1}
        .sq-tagline{font-size:9px;letter-spacing:2px;text-transform:uppercase;color:rgba(201,138,16,0.7);margin-top:4px}
        .sq-close{background:none;border:1px solid rgba(245,234,212,0.1);color:rgba(245,234,212,0.35);width:28px;height:28px;cursor:pointer;font-size:13px;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:border-color 0.13s,color 0.13s}
        .sq-close:hover{border-color:rgba(245,234,212,0.35);color:rgba(245,234,212,0.8)}
        .sq-section{margin-bottom:20px}
        .sq-section-label{font-size:10px;letter-spacing:2px;text-transform:uppercase;color:rgba(245,234,212,0.3);margin-bottom:10px}
        .sq-label{display:block;font-size:9.5px;letter-spacing:1.2px;text-transform:uppercase;color:rgba(245,234,212,0.4);margin-bottom:6px}
        .sq-input{width:100%;background:rgba(245,234,212,0.03);border:1px solid rgba(245,234,212,0.1);color:#f5ead4;font-family:'DM Mono',monospace;font-size:12px;padding:9px 12px;outline:none;transition:border-color 0.15s;box-sizing:border-box}
        .sq-input:focus{border-color:rgba(201,138,16,0.5)}
        .sq-toggle-row{display:flex;align-items:center;justify-content:space-between;gap:10px}
        .sq-toggle{background:rgba(245,234,212,0.06);border:1px solid rgba(245,234,212,0.12);color:rgba(245,234,212,0.35);font-family:'DM Mono',monospace;font-size:9px;letter-spacing:1.5px;padding:4px 10px;cursor:pointer;border-radius:3px;transition:background 0.13s,color 0.13s,border-color 0.13s;white-space:nowrap;flex-shrink:0}
        .sq-collapsible{display:flex;align-items:center;justify-content:space-between;cursor:pointer;font-size:10px;letter-spacing:1.8px;text-transform:uppercase;color:rgba(245,234,212,0.5);padding:10px 0;border-top:1px solid #1e1e1e;user-select:none}
        .sq-collapsible:hover{color:rgba(245,234,212,0.75)}
        .sq-toggle-icon{font-size:14px;color:rgba(201,138,16,0.7)}
        .sq-pill{display:inline-flex;align-items:center;gap:5px;font-size:10px;color:rgba(245,234,212,0.45);cursor:pointer;padding:4px 9px;border:1px solid rgba(245,234,212,0.1);border-radius:3px;transition:border-color 0.12s,color 0.12s}
        .sq-pill input{accent-color:#c98a10;cursor:pointer}
        .sq-pill:hover{border-color:rgba(201,138,16,0.4);color:rgba(245,234,212,0.7)}
        .sq-footer{border-top:2px solid #c98a10;padding:16px 0 4px;display:flex;align-items:center;justify-content:space-between;gap:16px;margin-top:20px}
        #sq-submit-btn:hover{background:#9a6a08 !important}
        #sq-submit-btn:active{transform:scale(0.97)}
        #sq-submit-btn:disabled{opacity:0.5;cursor:not-allowed}
        @media(max-width:520px){.sq-footer{flex-direction:column;align-items:stretch}}
    </style>
    <link rel="stylesheet" href="https://cdn.vidstack.io/player/theme.css">
    <link rel="stylesheet" href="https://cdn.vidstack.io/player/video.css">
    <script src="https://cdn.vidstack.io/player" type="module"></script>
</head>
<body class="bg-ink text-paper font-mono overflow-x-hidden" style="background-color:#0c0804;background-image:linear-gradient(160deg,rgba(201,138,16,0.07) 0%,transparent 40%,rgba(61,122,74,0.03) 100%)">

<!-- ══ NAV ══ -->
<nav class="fixed top-0 left-0 right-0 z-50 flex justify-between items-center px-5 py-3 bg-ink/95 backdrop-blur-md border-b border-paper/[0.06]">
    <div class="flex items-center gap-4">
        <a href="/" class="font-display text-2xl tracking-widest">SUNLIGHT<span class="text-hot">.QUEST</span></a>
        <span class="hidden sm:block text-[0.52rem] tracking-[0.2em] uppercase text-paper/20 border-l border-paper/10 pl-4">Investigative Vlog Series</span>
    </div>
    <div class="flex items-center gap-3">
        <a href="/episode-2" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors border border-paper/15 hover:border-violet/50 px-3 py-1.5 transition-all">← Episode 2</a>
        <a href="/episode-4" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors border border-paper/15 hover:border-sage/50 px-3 py-1.5 transition-all">Episode 4 →</a>
        <button onclick="openTipModal()" class="hidden md:flex items-center gap-1.5 text-[0.55rem] tracking-[0.2em] uppercase border px-3 py-1.5 transition-all" style="color:#c98a10;border-color:rgba(201,138,16,0.45);background:transparent;cursor:pointer;font-family:'DM Mono',monospace;" onmouseover="this.style.borderColor='rgba(201,138,16,0.85)';this.style.background='rgba(201,138,16,0.08)'" onmouseout="this.style.borderColor='rgba(201,138,16,0.45)';this.style.background='transparent'">⊕ Submit a Tip</button>
        <div class="flex md:hidden items-center gap-1.5">
            <a href="/episode-2" title="Go to Episode 2" aria-label="Go to Episode 2" class="flex items-center gap-1 px-2.5 h-8 border font-display text-[0.6rem] tracking-widest" style="border-color:rgba(124,106,170,0.5);color:#7c6aaa">‹ EP2</a>
            <a href="/episode-4" title="Go to Episode 4" aria-label="Go to Episode 4" class="flex items-center gap-1 px-2.5 h-8 border font-display text-[0.6rem] tracking-widest" style="border-color:rgba(61,122,74,0.5);color:#3d7a4a">EP4 ›</a>
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
                    <span class="text-[0.55rem] tracking-[0.28em] uppercase" style="color:#c98a10">Policing &amp; Public Safety</span>
                    <span class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/22 border border-paper/10 px-2 py-0.5">Pacific Fair · 17 Jul 2026</span>
                </div>
                <h1 class="font-display leading-[0.88] tracking-wide" style="font-size:clamp(2.8rem,7vw,5.5rem)">HAVE YOU CONSIDERED<br><span style="color:#c98a10">TAKING THE VIDEO DOWN?</span></h1>
                <p class="font-serif italic text-paper/40 mt-3 leading-relaxed max-w-lg" style="font-size:clamp(0.9rem,2vw,1.15rem)">A citizen is approached and intimidated at a shopping centre, records it for his own safety — and the responding officer's advice is to take the video down. This is that story, and the policing culture behind it.</p>
            </div>
            <div class="fade-up" style="animation-delay:0.25s">
                <div class="flex items-center gap-3 mb-2"><span class="text-[0.52rem] tracking-[0.2em] uppercase" style="color:rgba(201,138,16,0.6)">▶ Now Playing — Navigate via chapters below</span></div>
                <media-player
                    id="player-ep3"
                    title="Gold Coast Uncovered — Episode 3: The Compliance Machine"
                    src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rj/rj_associate_intimidate.mp4"
                    style="--media-brand:#c98a10;--media-focus-ring-color:rgba(201,138,16,0.45);--media-time-chapters-bg:rgba(201,138,16,0.5);width:100%;border:1px solid rgba(201,138,16,0.2);box-shadow:0 0 80px rgba(201,138,16,0.09)"
                >
                    <media-provider>
                        <track id="ep3-chapters-track" kind="chapters" default />
                    </media-provider>
                    <media-video-layout></media-video-layout>
                </media-player>
            </div>
            <!-- Chapter nav below video — add <a> entries here as sections are built -->
            <div class="fade-up mt-5 border border-paper/[0.07]" style="animation-delay:0.35s;background:rgba(12,8,4,0.7)">
                <div class="px-4 py-2 border-b border-paper/[0.06]">
                    <span class="text-[0.46rem] tracking-[0.22em] uppercase text-paper/22">Episode 3 — Chapters</span>
                </div>
                <div class="flex flex-wrap gap-0">
                    <a href="#tursa" data-chap-ep3="0" onclick="seekToChapterEp3(0)" class="flex items-center gap-2 px-4 py-3 border-r border-paper/[0.06] transition-all group" style="border:1px solid transparent" onmouseover="this.style.background='rgba(201,138,16,0.08)'" onmouseout="if(!this.style.borderColor||this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.62rem]" style="color:#c98a10">01</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Workforce Australia</div>
                            <div class="text-[0.47rem] text-paper/22 tracking-wider">Tursa · MSP</div>
                        </div>
                    </a>
                    <a href="#lecc" data-chap-ep3="2" onclick="seekToChapterEp3(2)" class="flex items-center gap-2 px-4 py-3 border-r border-paper/[0.06] transition-all group" style="border:1px solid transparent" onmouseover="this.style.background='rgba(201,138,16,0.08)'" onmouseout="if(!this.style.borderColor||this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.62rem] text-hot">03</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">LECC Complaint</div>
                            <div class="text-[0.47rem] text-paper/22 tracking-wider">Coogee · SC Agnew</div>
                        </div>
                    </a>
                    <a href="#jadhav" data-chap-ep3="6" onclick="seekToChapterEp3(6)" class="flex items-center gap-2 px-4 py-3 border-r border-paper/[0.06] transition-all group" style="border:1px solid transparent" onmouseover="this.style.background='rgba(201,138,16,0.08)'" onmouseout="if(!this.style.borderColor||this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.62rem]" style="color:#c98a10">04</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Locked Out</div>
                            <div class="text-[0.47rem] text-paper/22 tracking-wider">Jadhav · Q8092-26</div>
                        </div>
                    </a>
                    <a href="#ai-narrative" data-chap-ep3="4" onclick="seekToChapterEp3(4)" class="flex items-center gap-2 px-4 py-3 border-r border-paper/[0.06] transition-all group" style="border:1px solid transparent" onmouseover="this.style.background='rgba(201,138,16,0.08)'" onmouseout="if(!this.style.borderColor||this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.62rem]" style="color:#7c6aaa">02</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">AI Narrative</div>
                            <div class="text-[0.47rem] text-paper/22 tracking-wider">The machine account</div>
                        </div>
                    </a>
                    <a href="#martin" data-chap-ep3="7" onclick="seekToChapterEp3(7)" class="flex items-center gap-2 px-4 py-3 transition-all group" style="border:1px solid transparent" onmouseover="this.style.background='rgba(201,138,16,0.08)'" onmouseout="if(!this.style.borderColor||this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.62rem]" style="color:#7c6aaa">05</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">The Busybody</div>
                            <div class="text-[0.47rem] text-paper/22 tracking-wider">Martin · Broadbeach</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="lg:border-l border-paper/[0.06] flex flex-col" style="background:rgba(12,8,4,0.6)">
            <div class="px-6 py-6 border-b border-paper/[0.06]">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">This Episode</div>
                <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">This episode opens at Pacific Fair — an intimidation incident, a questionable police response, and the safety of shopping-centre staff — then continues the Gold Coast investigations, including Tursa Employment & Training, a private Workforce Australia provider, and the Managed Service Plan that followed a camera.</p>
                <div class="grid grid-cols-3 gap-2 text-center">
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl" style="color:#c98a10">TCF</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Framework</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-hot">MSP</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Restriction</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-sage">NSW</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Region</div></div>
                </div>
            </div>
            <div class="px-5 py-4 border-b border-paper/[0.06] flex-1">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">Episode Chapters</div>
                <div class="space-y-0.5">
                    <button data-chap-ep3="0" onclick="seekToChapterEp3(0)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(201,138,16,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem]" style="color:#c98a10">01</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">Workforce Australia</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Tursa Employment &amp; Training · MSP</div>
                        </div>
                    </button>
                    <button data-chap-ep3="4" onclick="seekToChapterEp3(4)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(201,138,16,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem]" style="color:#7c6aaa">02</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">The AI Narrative</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Machine account · Pattern recognition</div>
                        </div>
                    </button>
                    <button data-chap-ep3="5" onclick="seekToChapterEp3(5)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(201,138,16,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem] text-hot">03</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">LECC Complaint</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Coogee · SC Agnew · EXT2026-0413</div>
                        </div>
                    </button>
                    <button data-chap-ep3="6" onclick="seekToChapterEp3(6)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(201,138,16,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem]" style="color:#c98a10">04</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">Locked Out &amp; Still Paying</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Jadhav · Q8092-26 · Coastal Property</div>
                        </div>
                    </button>
                    <button data-chap-ep3="7" onclick="seekToChapterEp3(7)" class="w-full flex items-center gap-3 p-2 transition-colors text-left" style="background:none;border:1px solid transparent;cursor:pointer" onmouseover="this.style.background='rgba(201,138,16,0.07)'" onmouseout="if(this.style.borderColor==='transparent')this.style.background=''">
                        <span class="font-display text-[0.5rem]" style="color:#7c6aaa">05</span>
                        <div>
                            <div class="text-[0.58rem] text-paper/55">The Busybody</div>
                            <div class="text-[0.44rem] text-paper/25 tracking-wider uppercase">Martin · Broadbeach · Serving Our People</div>
                        </div>
                    </button>
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
     SECTION — id="pacific-fair" (Policing & public safety)
══════════════════════════════════════ -->
<section id="pacific-fair" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.05) 0%,transparent 55%)">
    <div class="max-w-4xl mx-auto">
        <div class="flex items-center gap-3 mb-3 reveal">
            <div class="w-5 h-px bg-hot"></div>
            <span class="text-[0.55rem] tracking-[0.28em] uppercase text-hot">Pacific Fair · 17 July 2026 · Policing &amp; Public Safety</span>
        </div>
        <h2 class="font-display leading-[0.9] tracking-wide mb-4 reveal" style="font-size:clamp(2.4rem,6vw,4.5rem)">APPROACHED. RECORDING.<br><span class="text-hot">AND SOMEHOW THE PROBLEM.</span></h2>
        <p class="font-serif italic text-paper/45 text-lg leading-relaxed mb-8 reveal max-w-2xl">"I was the one approached. I was recording because I felt unsafe. And the advice from the responding officer was that I should take my video down."</p>

        <!-- What happened -->
        <div class="story-chapter reveal mb-8" style="border-left-color:rgba(193,68,14,0.4)">
            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">What Happened</div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">On <strong class="text-paper/65">17 July 2026</strong>, at <strong class="text-paper/65">Pacific Fair</strong>, a man who had seen the Episode 1 video approached Kosta Kondratenko. Kosta did not engage him or speak to him. It was not the first time. In an earlier encounter, the same man had been <strong class="text-paper/65">aggressive toward a Pacific Fair security guard</strong> — the guard had asked the man's friend to stop vaping and leave — squaring up and saying <em class="text-paper/70">"do you want to have a crack?"</em> When Kosta called the behaviour out, the response was <em class="text-paper/70">"why are you getting involved?"</em></p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">This time he grew aggressive again. When Kosta <strong class="text-paper/65">took out a camera to record</strong>, the man escalated — more heated, more threatening — which is its own small tell: the people most comfortable throwing their weight around are the ones who least want a lens on it. A second man joined in, calling Kosta a <em class="text-paper/70">"bitch."</em> Kosta recorded the threats made against him and <strong class="text-paper/65">did not raise a hand.</strong> He was the one who had been approached.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">The footage has been provided to <strong class="text-paper/65">Pacific Fair security and management</strong>, who have been contacted about the incident. Where it belongs is with them and with police — not in a public identification hunt.</p>
            <!-- PLACEHOLDER: two blurred photos of the individuals. When provided, replace each inner box below with: <img src="[BLURRED PHOTO URL]" alt="Individual involved — face blurred" class="w-full h-auto block" style="object-fit:cover" loading="lazy" /> -->
            <div class="grid grid-cols-2 gap-3 max-w-md">
                <div class="border border-paper/[0.1] flex flex-col items-center justify-center text-center" style="background:#0c0804;aspect-ratio:3/4;padding:1rem">
                    <div class="text-[0.55rem] tracking-[0.16em] uppercase text-paper/30">Blurred photo 1</div>
                    <div class="text-[0.48rem] text-paper/18 mt-1 tracking-wider">pending upload</div>
                </div>
                <div class="border border-paper/[0.1] flex flex-col items-center justify-center text-center" style="background:#0c0804;aspect-ratio:3/4;padding:1rem">
                    <div class="text-[0.55rem] tracking-[0.16em] uppercase text-paper/30">Blurred photo 2</div>
                    <div class="text-[0.48rem] text-paper/18 mt-1 tracking-wider">pending upload</div>
                </div>
            </div>
            <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25 mt-2 max-w-md">The two individuals involved · faces blurred</div>
        </div>

        <!-- The police comment -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">The Problem — What the Officer Said</div>
            <div class="flex items-center gap-3 mb-4">
                <div class="shrink-0 border border-paper/[0.1] p-2.5 flex items-center justify-center" style="background:#fff;width:120px;min-height:60px">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/10_07_26/qld_police_logo.png" alt="Queensland Police Service" class="w-full max-w-[96px]" style="object-fit:contain" loading="lazy" />
                </div>
                <div class="text-[0.5rem] tracking-[0.16em] uppercase text-paper/30 leading-relaxed">Queensland Police Service · The responding officer<br>who wanded Kosta and suggested the video come down</div>
            </div>
            <div class="border-l-4 border-hot/60 pl-4 py-3 mb-4" style="background:rgba(193,68,14,0.05)">
                <p class="text-[0.7rem] text-paper/60 leading-relaxed italic">"Well, maybe — have you considered taking the video down? If someone wants to crack me, I'd put it down."</p>
                <p class="text-[0.5rem] text-paper/30 mt-2">— Responding QLD Police officer, Pacific Fair, 17 July 2026</p>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Read that back. A person is approached and intimidated in a public place, calls it out, records it for their own safety — and the officer's instinct is to suggest <strong class="text-paper/65">the victim remove lawful content.</strong> The video that supposedly "set this off" had <strong class="text-paper/65">nothing to do with this man.</strong> He was already in conflict with the centre's own security — over his friend and a vape — long before any camera appeared. The idea that a seven-month-old video is the cause, and that taking it down is the fix, gets the responsibility exactly backwards.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">Policing that leans on <em class="text-paper/70">"just take it down"</em> asks the lawful party to shrink so the aggressive one is not inconvenienced. It is the same instinct, in a softer voice, as telling someone they brought it on themselves. Queensland Police can do better than treating a citizen's camera as the problem in the room.</p>
        </div>

        <!-- Staff safety / banning -->
        <div class="border border-gold/25 p-6 mb-8 reveal" style="background:rgba(201,138,16,0.04)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-3">The Real Issue — Staff Safety and a Broken Threshold</div>
            <div class="flex items-center gap-3 mb-4">
                <div class="shrink-0 border border-paper/[0.1] p-2.5 flex items-center justify-center" style="background:#fff;width:120px;min-height:60px">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/pacific_fair_logo.png" alt="Pacific Fair" class="w-full max-w-[96px]" style="object-fit:contain" loading="lazy" />
                </div>
                <div class="text-[0.5rem] tracking-[0.16em] uppercase text-paper/30 leading-relaxed">Pacific Fair · The centre with the power to ban —<br>told Kosta to leave 30 minutes; the man was still there</div>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Strip the personalities out and a genuine public-safety problem remains. It was a <strong class="text-paper/65">security guard who was threatened first</strong> — doing his job, asking someone to stop vaping. Centre staff are on the front line of this every day, and the tools they have are thin. Kosta was asked by a guard to <strong class="text-paper/65">leave and come back in 30 minutes</strong>; when he returned to the upstairs area, the man was <strong class="text-paper/65">still there.</strong></p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">When Kosta raised the need for a <strong class="text-paper/65">ban</strong> with another guard, the answer laid the problem bare: the threshold is so high that, in effect, <strong class="text-paper/65">someone has to be assaulted first</strong> — the guard's words were that the person would have to do something bad, like throw a punch, before a ban could be actioned. That protects the aggressor and exposes everyone else. Shopping centres need <strong class="text-paper/65">more security, and clearer power to remove people who threaten staff and patrons</strong> — before the punch, not after it.</p>
            <p class="text-[0.62rem] leading-relaxed text-paper/40">In fairness, and for completeness: a separate claim circulated that a guard had made a remark about a young patron. Kosta asked the centre for the footage to check it. No footage existed, and the claim could not be substantiated.</p>
        </div>

        <!-- Episode 1 tie -->
        <div class="story-chapter reveal mb-8" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Why This Matters — The Pattern from Episode 1</div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">This is not the first time a Queensland officer has reached for the same move. In <a href="/" class="text-gold underline">Episode 1</a>, after a <strong class="text-paper/65">6-on-1 assault</strong> connected to Bodie Chalmers, the officer nominally responsible — <strong class="text-paper/65">Aaron Barker</strong>, of the CBI Task Force Latro North — was recorded making comments to the effect that Kosta <em class="text-paper/70">"deserved to get bashed"</em> for making a video. He was stood down. The through-line is unmistakable: when the response to violence is to blame the person who documented it, the culture is protecting the wrong people.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">That culture has to change. The job of police, and of centre security, is to stand with the staff and patrons who are threatened — not to lecture the person holding the camera about what is and is not acceptable to post. A lawful video made seven months ago is not a licence for anyone to start a fight, and it is not the reason one started.</p>
        </div>

        <!-- Closing -->
        <div class="border border-paper/[0.08] p-6 reveal" style="background:rgba(12,8,4,0.4)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/35 mb-3">On the Record</div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Thank you to the <strong class="text-paper/65">Pacific Fair security guards</strong>, who were understanding throughout — it was one of their own who was threatened first — and to the two young men who <strong class="text-paper/65">sat with Kosta</strong> and were unfailingly polite. Decency was not in short supply on the day; it just was not coming from the people who started it.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Expect a narrative to be spun in which Kosta is the aggressor. He was not. He was approached, he recorded threats made against himself, and he did not raise a hand. Do not take the counter-story at face value.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">And if the man — or his father — wishes to <strong class="text-paper/65">apologise for his behaviour</strong>, the door is open. A letter sent in good faith is welcome via the tip line below.</p>
            <div class="mt-5">
                <button onclick="openTipModal()" class="inline-flex items-center gap-2 text-[0.55rem] tracking-[0.2em] uppercase border px-4 py-2 transition-all" style="color:#c98a10;border-color:rgba(201,138,16,0.45);background:transparent;cursor:pointer;font-family:'DM Mono',monospace;" onmouseover="this.style.borderColor='rgba(201,138,16,0.85)';this.style.background='rgba(201,138,16,0.08)'" onmouseout="this.style.borderColor='rgba(201,138,16,0.45)';this.style.background='transparent'">⊕ Submit a Tip / Send a Letter</button>
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

        <!-- Tursa logo -->
        <div class="reveal mb-8 inline-block border border-paper/[0.08] p-4" style="background:#ffffff">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tursa_logo.webp" alt="Tursa Employment &amp; Training logo" class="h-10 w-auto" loading="lazy" />
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

        <!-- ═══ SMOKING GUN — MOF SUSPENSION LETTER ═══ -->
        <div class="reveal mt-12 mb-6 px-5 py-5" style="background:rgba(193,68,14,0.12);border:1px solid rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-3">
                <span class="font-display text-xs tracking-[0.25em] uppercase text-hot">The Smoking Gun</span>
                <span class="text-[0.44rem] tracking-[0.15em] uppercase text-paper/30 border border-paper/15 px-2 py-0.5">MOF Suspension Letter · Services Australia · 2 August 2023</span>
            </div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide leading-tight mb-5">PAYMENT SUSPENDED FOR AN ACTION<br><span class="text-hot">THAT HAD NOT YET OCCURRED.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/70 mb-4">Services Australia issued a letter on 2 August 2023 stating that JobSeeker Payment had been stopped <strong class="text-paper/90">from 25 July 2023</strong> because the recipient "did not take suitable action in relation to a job opportunity on <strong class="text-hot">31 July 2023</strong>."</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/70 mb-5">31 July 2023 is <strong class="text-paper/90">six days after</strong> 25 July 2023. A payment cannot lawfully be suspended for failure to act on a date that had not yet arrived at the time of suspension. The stated reason is chronologically impossible.</p>

            <!-- Date comparison tiles -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                <div class="border-l-4 border-hot pl-4 py-3 pr-4" style="background:rgba(193,68,14,0.07)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-1">Payment Suspended From</div>
                    <div class="font-display text-2xl text-paper/80">25 July 2023</div>
                    <div class="text-[0.55rem] text-paper/45 mt-1">The date payment was stopped — stated in the letter</div>
                </div>
                <div class="border-l-4 border-paper/20 pl-4 py-3 pr-4" style="background:rgba(245,234,212,0.03)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/35 mb-1">Stated Reason — Job Opportunity Not Pursued</div>
                    <div class="font-display text-2xl text-paper/45">31 July 2023</div>
                    <div class="text-[0.55rem] text-paper/28 mt-1 italic">Six days in the future at the time of the suspension</div>
                </div>
            </div>

            <!-- Embedded PDF — stands out -->
            <div class="mb-5 reveal" style="border:2px solid rgba(193,68,14,0.6);box-shadow:0 0 40px rgba(193,68,14,0.15)">
                <div class="flex items-center justify-between px-4 py-2.5" style="background:rgba(193,68,14,0.18);border-bottom:1px solid rgba(193,68,14,0.35)">
                    <div class="flex items-center gap-3">
                        <span class="font-display text-[0.7rem] tracking-[0.2em] uppercase text-hot">The Letter</span>
                        <span class="text-[0.44rem] tracking-[0.15em] uppercase text-paper/45">MOF Suspension · TCF_K269035727 · Services Australia · 2 Aug 2023</span>
                    </div>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tursa/MOF+suspension+letter+TCF_K269035727+(2).pdf"
                       target="_blank" rel="noopener"
                       class="text-[0.48rem] tracking-[0.15em] uppercase text-hot/60 hover:text-hot transition-colors border border-hot/30 hover:border-hot/60 px-2.5 py-1">
                        ↗ Open
                    </a>
                </div>
                <iframe src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tursa/MOF+suspension+letter+TCF_K269035727+(2).pdf"
                        class="w-full"
                        style="min-height:560px;height:560px;border:none;filter:brightness(0.92)"
                        loading="lazy"
                        title="MOF Suspension Letter — Services Australia · TCF_K269035727"></iframe>
                <div class="px-4 py-2 flex items-center gap-3" style="background:rgba(193,68,14,0.08);border-top:1px solid rgba(193,68,14,0.25)">
                    <span class="text-[0.44rem] tracking-[0.15em] uppercase text-hot/55">Ref: 280 870 747X</span>
                    <span class="text-paper/15">·</span>
                    <span class="text-[0.44rem] tracking-[0.15em] uppercase text-paper/30">Payment stopped 25 July 2023</span>
                    <span class="text-paper/15">·</span>
                    <span class="text-[0.44rem] tracking-[0.15em] uppercase text-hot/55">Stated reason: job opportunity 31 July 2023</span>
                </div>
            </div>

            <p class="text-[0.68rem] leading-relaxed text-paper/60">The letter instructs the recipient to call their Employment Services Provider "to discuss the reasons you did not meet this requirement." This framing presupposes a failure that — by the letter's own dates — had not yet occurred at the time the payment was stopped.</p>
        </div>


        <!-- What this means — Mutual Obligations + Coercive Tactic analysis -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Mutual Obligations · Coercive Compliance · Analysis</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-5 leading-tight">WHAT THIS LETTER MEANS.<br><span class="text-hot">A SYSTEM DESIGNED TO GENERATE COMPLIANCE, NOT TRUTH.</span></h3>

            <div class="space-y-5 text-[0.72rem] leading-relaxed text-paper/50 mb-7">
                <p><strong class="text-paper/75">Mutual Obligations</strong> — formally called Activity Test or Participation Requirements under the Social Security Act 1991 — are the conditions Centrelink attaches to JobSeeker Payment as a requirement of receiving it. For most recipients: apply for a specified number of jobs per fortnight, attend appointments, and take "suitable action" when your Employment Services Provider refers you to a specific opportunity. Fail any of these and the payment stops.</p>
                <p>When a provider generates a job referral in the system, the participant is required to apply, attend, or otherwise engage within the required timeframe. Failure to do so triggers a Mutual Obligation failure — which produces an automated payment suspension. The suspension is not a fine, a warning, or a judicial finding. It is a financial withdrawal that continues until the participant calls the provider and satisfies whatever condition the provider decides is appropriate. The gatekeeper of your income and the complainant about your conduct are the same organisation.</p>
                <p>The letter issued to Mr Kondratenko on 2 August 2023 follows this template exactly — with one fatal problem. The job opportunity referenced is dated 31 July 2023. The suspension is backdated to 25 July 2023. The stated reason postdates the stated punishment by six days. The system generated a compliant-looking administrative instrument for a reason that had not yet arisen.</p>
            </div>

            <!-- Coercive mechanism -->
            <div class="border border-paper/[0.08] p-5 mb-6" style="background:rgba(0,0,0,0.18)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-paper/28 mb-4">The Coercive Mechanism — Step by Step</div>
                <div class="space-y-4">
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-lg text-hot shrink-0 w-6 leading-none mt-0.5">1</span>
                        <div>
                            <div class="text-[0.55rem] tracking-[0.1em] uppercase text-hot/65 mb-1">Suspension Creates Immediate Financial Crisis</div>
                            <p class="text-[0.6rem] text-paper/42 leading-relaxed">Payment stops without warning. There is no income. The pressure to resolve this is immediate, personal, and real — regardless of whether the stated reason is accurate.</p>
                        </div>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-lg text-hot shrink-0 w-6 leading-none mt-0.5">2</span>
                        <div>
                            <div class="text-[0.55rem] tracking-[0.1em] uppercase text-hot/65 mb-1">The Only Exit Is Through the Accuser</div>
                            <p class="text-[0.6rem] text-paper/42 leading-relaxed">The letter instructs you to call your Employment Services Provider — the same organisation that generated the suspension — to "discuss the reasons" and "meet the requirement." There is no neutral third party. The complaint and the remedy are controlled by the same entity.</p>
                        </div>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-lg text-hot shrink-0 w-6 leading-none mt-0.5">3</span>
                        <div>
                            <div class="text-[0.55rem] tracking-[0.1em] uppercase text-hot/65 mb-1">The Language Presupposes Guilt</div>
                            <p class="text-[0.6rem] text-paper/42 leading-relaxed">"Discuss the reasons <em>you did not meet</em> this requirement" forecloses on any factual challenge. The participant is not invited to question whether the requirement was valid or whether the stated date is correct. They are invited to explain a failure that — by the letter's own dates — could not have occurred yet.</p>
                        </div>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-lg text-hot shrink-0 w-6 leading-none mt-0.5">4</span>
                        <div>
                            <div class="text-[0.55rem] tracking-[0.1em] uppercase text-hot/65 mb-1">Non-Compliance Means Cancellation and Re-Claim</div>
                            <p class="text-[0.6rem] text-paper/42 leading-relaxed">The letter is explicit: if you do not call and meet the provider's requirement, the payment may be cancelled — requiring a new claim from scratch. New claims take weeks. The financial cost of not complying is deliberately higher than the cost of complying without questioning anything.</p>
                        </div>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="font-display text-lg text-hot shrink-0 w-6 leading-none mt-0.5">5</span>
                        <div>
                            <div class="text-[0.55rem] tracking-[0.1em] uppercase text-hot/65 mb-1">Formal Review Does Not Restart Payment</div>
                            <p class="text-[0.6rem] text-paper/42 leading-relaxed">A formal review exists — the letter notes a 13-week window. But the payment remains suspended during review. Financial distress continues throughout. Compliance offers immediate relief. A challenge offers eventual justice. Under financial pressure, most people choose relief.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-l-4 border-hot/60 pl-5" style="background:rgba(193,68,14,0.06);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">What the Date Contradiction Reveals</div>
                <p class="text-[0.65rem] text-paper/55 leading-relaxed mb-3">A payment suspension issued for a reason that postdates the suspension is not administratively coherent under the Mutual Obligations framework. Either the system generated a document with an erroneous date that was never corrected — or the suspension was applied for a different reason, and the Mutual Obligation failure was attached retrospectively to provide a compliant-looking basis for an already-executed decision.</p>
                <p class="text-[0.65rem] text-paper/55 leading-relaxed">In context: the suspension letter is dated 2 August 2023 and backdates the payment stop to 25 July 2023. The appointment at Tursa's Murwillumbah office — where a camera was held, the duress button was pressed, and police were called — occurred in early August 2023. The MSP letter from David Wiblen followed on 10 August 2023. The chronological sequence does not support the stated reason. It supports a different conclusion.</p>
            </div>
        </div>

        <!-- Tassie — YHA Murwillumbah Collateral Damage -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.5)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Collateral Damage · YHA Murwillumbah · Tassie</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">TASSIE HAD NOTHING TO DO WITH ANY OF IT.<br><span class="text-gold">THEY CAME FOR HIM ANYWAY.</span></h3>

            <!-- Tassie photo -->
            <div class="mb-5 reveal">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tursa/tassie.jpg"
                     alt="Tassie — Manager, YHA Murwillumbah"
                     class="w-full border border-paper/[0.07]"
                     style="object-fit:contain;background:#0d0d0d"
                     loading="lazy" />
                <div class="text-[0.44rem] tracking-[0.12em] uppercase text-paper/18 mt-1.5">Tassie — Manager, YHA Murwillumbah (Riverside Backpackers) · Murwillumbah NSW</div>
            </div>

            <div class="space-y-5 text-[0.72rem] leading-relaxed text-paper/50 mb-6">
                <p>Tassie manages the YHA hostel in Murwillumbah — Riverside Backpackers — where I was staying at the time of the Tursa incidents. He walks with a limp. On weekends he gives out ice cream to hostel guests. He runs dance events for elderly people in the local community. He had no involvement in anything that happened at Tursa. He was not a witness. He was not connected to any of the matters documented here. He was simply the person who had offered me accommodation while I was in the region, and I had been a model tenant — no issues with Tassie, no issues with other guests, throughout my stay.</p>
                <p>After the Tursa manager called police and I was placed on the Managed Service Plan, what happened next reached Tassie directly. Someone appeared at his dancing event — a person who had never been seen there before, who was not part of his regular community. That person got directly in Tassie's face and screamed: <em class="text-paper/70">"Why are you letting homeless cunts stay at the hostel!"</em> The person delivered that message and left. They were never seen again at his events.</p>
                <p>Separately, people made enquiries about Tassie's property — which was and still is listed for sale. The enquiries did not come through the real estate agent, which is the standard procedure for a listed property. Legitimate buyers contact the agent. These people came directly to Tassie. He flagged it as suspicious immediately. The combination of the confrontation at his dance school and the suspicious property enquiries was enough. He asked me to leave — explaining that the dance incident and the property enquiries had alarmed him, and that the enquiries hadn't come through the real estate agent, which wasn't right. I left.</p>
            </div>

            <!-- Incident breakdown -->
            <div class="border border-gold/20 p-5 mb-6" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-4">What Happened — In Sequence</div>
                <div class="space-y-3">
                    <div class="flex gap-3 items-start">
                        <div class="w-1.5 h-1.5 rounded-full bg-hot mt-2 shrink-0"></div>
                        <div>
                            <div class="text-[0.55rem] tracking-[0.1em] uppercase text-hot/70 mb-0.5">Dancing Event — Unknown Person Confronts Tassie</div>
                            <p class="text-[0.62rem] text-paper/45 leading-relaxed">A person not previously seen at the event appeared and screamed directly at Tassie about the hostel accommodation. Targeted and specific. Not a regular. Never seen again at the events.</p>
                        </div>
                    </div>
                    <div class="flex gap-3 items-start">
                        <div class="w-1.5 h-1.5 rounded-full bg-hot mt-2 shrink-0"></div>
                        <div>
                            <div class="text-[0.55rem] tracking-[0.1em] uppercase text-hot/70 mb-0.5">Property Enquiries — Not Through the Agent</div>
                            <p class="text-[0.62rem] text-paper/45 leading-relaxed">Tassie's property is listed for sale. Legitimate enquiries go through the real estate agent — that is standard practice. These came directly to Tassie, bypassing the agent entirely. He identified them as suspicious immediately.</p>
                        </div>
                    </div>
                    <div class="flex gap-3 items-start">
                        <div class="w-1.5 h-1.5 rounded-full bg-gold mt-2 shrink-0"></div>
                        <div>
                            <div class="text-[0.55rem] tracking-[0.1em] uppercase text-gold/70 mb-0.5">Displacement — Kosta Asked to Leave</div>
                            <p class="text-[0.62rem] text-paper/45 leading-relaxed">Tassie asked me to leave. A model tenant, no issues, displaced — not because of anything he or I did, but because of the pressure that came from Tursa's actions radiating outward into his life and his business.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-l-4 border-gold/50 pl-5 mb-8" style="background:rgba(201,138,16,0.05);padding:1rem 1rem 1rem 1.25rem">
                <p class="text-[0.65rem] text-paper/55 leading-relaxed">I had a genuinely good time at the YHA Murwillumbah. Tassie and the other tenants were welcoming throughout. There were no issues of any kind during my stay. Tassie is a good person — the confrontation at his dance school and the suspicious property enquiries were not his fault, and he should not have been pulled into any of this. He made the call that was right for him and his business, and I respect it.</p>
            </div>

            <!-- YHA recommendation -->
            <div class="border border-paper/[0.08] p-6 reveal" style="background:rgba(201,138,16,0.03)">
                <div class="text-[0.47rem] tracking-[0.22em] uppercase text-gold mb-4">If You're Visiting the Murwillumbah / Mt Warning Area</div>

                <!-- Guesthouse photo -->
                <div class="mb-5 reveal">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tursa/guesthouse_image.jpg"
                         alt="YHA Murwillumbah — Riverside Backpackers"
                         class="w-full border border-paper/[0.06]"
                         style="object-fit:contain;background:#0d0d0d"
                         loading="lazy" />
                    <div class="text-[0.44rem] tracking-[0.12em] uppercase text-paper/18 mt-1.5">YHA Murwillumbah — Riverside Backpackers · Tumbulgum Rd, Murwillumbah NSW</div>
                </div>

                <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-5">Riverside Backpackers is a well-run, genuinely welcoming hostel in Murwillumbah — base camp for Mt Warning and the Tweed Valley. Tassie runs it with real care. If you're passing through the Northern Rivers region and need a place to stay, check it out and consider booking.</p>

                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="https://mtwarning.wordpress.com/" target="_blank" rel="noopener"
                       class="flex items-center gap-2 border border-gold/40 px-4 py-2.5 text-[0.55rem] tracking-[0.15em] uppercase text-gold/75 hover:text-gold hover:border-gold/70 transition-all">
                        ⬡ &nbsp;Visit Website — mtwarning.wordpress.com
                    </a>
                    <a href="https://www.tripadvisor.com/Hotel_Review-g529003-d1163611-Reviews-Riverside_Backpackers_Murwillumbah-Murwillumbah_New_South_Wales.html" target="_blank" rel="noopener"
                       class="flex items-center gap-2 border border-paper/20 px-4 py-2.5 text-[0.55rem] tracking-[0.15em] uppercase text-paper/45 hover:text-paper/70 hover:border-paper/35 transition-all">
                        ★ &nbsp;Book on TripAdvisor
                    </a>
                </div>
            </div>
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

        <!-- ═══ VIDEO — ADAM'S FACE AFTER THE ASSAULT ═══ -->
        <div class="reveal mb-10" style="border:2px solid rgba(193,68,14,0.7);box-shadow:0 0 60px rgba(193,68,14,0.2)">
            <div class="px-4 py-3 flex items-center justify-between" style="background:rgba(193,68,14,0.22);border-bottom:1px solid rgba(193,68,14,0.4)">
                <div class="flex items-center gap-3">
                    <span class="font-display text-sm tracking-[0.2em] uppercase text-hot">Primary Evidence</span>
                    <span class="text-[0.44rem] tracking-[0.15em] uppercase text-paper/50">Adam Watson · Immediately After the Assault · 9 January 2026 · Coogee NSW</span>
                </div>
                <span class="text-[0.44rem] tracking-[0.18em] uppercase border border-hot/40 text-hot/70 px-2 py-1">Video</span>
            </div>

            <!-- Context banner -->
            <div class="px-5 py-4" style="background:rgba(193,68,14,0.08);border-bottom:1px solid rgba(193,68,14,0.2)">
                <p class="text-[0.7rem] leading-relaxed text-paper/75">This is Adam Watson's face — immediately after a <strong class="text-hot">6-on-1 police assault</strong> — asking for help. Six NSW Police officers attended his Coogee address after he called triple-zero to report an AVO breach. Officers told him the AVO did not exist. He was assaulted, called a <strong class="text-hot">"Jewish Faggot"</strong>, and had his prescribed diabetic medication ($878 Ozempic) seized without a receipt. He was not charged. This footage was recorded in the immediate aftermath and submitted as primary evidence to the Law Enforcement Conduct Commission.</p>
            </div>

            <!-- Video -->
            <div style="background:#000">
                <video controls
                       class="w-full"
                       style="max-height:520px;display:block"
                       preload="metadata">
                    <source src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lecc/adam-police-assault.mp4" type="video/mp4">
                </video>
            </div>

            <div class="px-4 py-2.5 flex flex-wrap items-center gap-4" style="background:rgba(193,68,14,0.1);border-top:1px solid rgba(193,68,14,0.25)">
                <span class="text-[0.44rem] tracking-[0.15em] uppercase text-hot/70">6 Officers · 1 Man · No Charge Filed</span>
                <span class="text-paper/15">·</span>
                <span class="text-[0.44rem] tracking-[0.15em] uppercase text-paper/35">"Jewish Faggot" — Antisemitic & Homophobic Slur</span>
                <span class="text-paper/15">·</span>
                <span class="text-[0.44rem] tracking-[0.15em] uppercase text-paper/35">$878 Ozempic Seized — No Receipt</span>
                <span class="text-paper/15">·</span>
                <span class="text-[0.44rem] tracking-[0.15em] uppercase text-paper/35">LECC Complaint EXT2026-0413</span>
            </div>
        </div>

        <!-- ═══ LECC COMPLAINT — EMBEDDED PDF + ISSUES CALLOUT ═══ -->
        <div class="reveal mb-10" style="border:2px solid rgba(193,68,14,0.55);box-shadow:0 0 40px rgba(193,68,14,0.12)">
            <div class="px-4 py-3 flex items-center justify-between" style="background:rgba(193,68,14,0.18);border-bottom:1px solid rgba(193,68,14,0.35)">
                <div class="flex items-center gap-3">
                    <span class="font-display text-sm tracking-[0.2em] uppercase text-hot">LECC Formal Complaint</span>
                    <span class="text-[0.44rem] tracking-[0.15em] uppercase text-paper/50">EXT2026-0413 · Filed 19 March 2026 · Adam Watson</span>
                </div>
                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lecc/LECC_Complaint_Adam_Watson_v2.docx.pdf"
                   target="_blank" rel="noopener"
                   class="text-[0.48rem] tracking-[0.15em] uppercase text-hot/60 hover:text-hot border border-hot/30 hover:border-hot/60 px-2.5 py-1 transition-colors">↗ Open</a>
            </div>

            <!-- Key issues callout — above the PDF -->
            <div class="px-5 py-5" style="background:rgba(193,68,14,0.07);border-bottom:1px solid rgba(193,68,14,0.2)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-4">Five Investigative Failures Identified in the Complaint</div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2 mb-5">
                    <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.05)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/65 mb-1">Failure 01</div>
                        <p class="text-[0.58rem] text-paper/55 leading-relaxed">No independent witnesses identified or contacted during the 16-day review.</p>
                    </div>
                    <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.05)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/65 mb-1">Failure 02</div>
                        <p class="text-[0.58rem] text-paper/55 leading-relaxed">No medical records sought or reviewed — despite a documented physical assault.</p>
                    </div>
                    <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.05)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/65 mb-1">Failure 03</div>
                        <p class="text-[0.58rem] text-paper/55 leading-relaxed">No Body Worn Camera footage reviewed — standard for any complaint involving officer conduct.</p>
                    </div>
                    <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.05)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/65 mb-1">Failure 04</div>
                        <p class="text-[0.58rem] text-paper/55 leading-relaxed">No individual officer identified as responsible for the slur, the assault, or the seizure.</p>
                    </div>
                    <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.05)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/65 mb-1">Failure 05</div>
                        <p class="text-[0.58rem] text-paper/55 leading-relaxed">Entire complaint — assault, slur, $878 medication seizure — closed in <strong class="text-hot">16 days</strong> as "no evidence identified."</p>
                    </div>
                    <div class="border border-hot/20 p-3 flex flex-col justify-center text-center" style="background:rgba(193,68,14,0.08)">
                        <div class="font-display text-2xl text-hot mb-1">16</div>
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-paper/40">Days. Closed. Dismissed.</div>
                    </div>
                </div>

                <!-- What the complaint documents -->
                <div class="border-l-4 border-hot/60 pl-4" style="background:rgba(193,68,14,0.05);padding:0.8rem 0.8rem 0.8rem 1rem">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">What the Complaint Documents</div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-1.5">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0">→</span><p class="text-[0.58rem] text-paper/50 leading-relaxed">The assault — 6 officers, 1 man, no charge filed</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0">→</span><p class="text-[0.58rem] text-paper/50 leading-relaxed">"Jewish Faggot" — antisemitic and homophobic slur, repeated, witnessed</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0">→</span><p class="text-[0.58rem] text-paper/50 leading-relaxed">$878 Ozempic seized — no receipt, never returned, no lawful authority cited</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0">→</span><p class="text-[0.58rem] text-paper/50 leading-relaxed">AVO denied to exist — officers did not check the system before making that statement</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0">→</span><p class="text-[0.58rem] text-paper/50 leading-relaxed">SC Agnew / SC Grace internal review — five identified failures in methodology</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0">→</span><p class="text-[0.58rem] text-paper/50 leading-relaxed">Complaint closed without any officer individually identified or held accountable</p></div>
                    </div>
                </div>
            </div>

            <!-- Embedded PDF -->
            <iframe src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lecc/LECC_Complaint_Adam_Watson_v2.docx.pdf"
                    class="w-full"
                    style="min-height:700px;height:700px;border:none;filter:brightness(0.93)"
                    loading="lazy"
                    title="LECC Formal Complaint EXT2026-0413 — Adam Watson"></iframe>

            <div class="px-4 py-2.5 flex flex-wrap items-center gap-4" style="background:rgba(193,68,14,0.1);border-top:1px solid rgba(193,68,14,0.25)">
                <span class="text-[0.44rem] tracking-[0.15em] uppercase text-hot/70">LECC · EXT2026-0413</span>
                <span class="text-paper/15">·</span>
                <span class="text-[0.44rem] tracking-[0.15em] uppercase text-paper/35">Filed 19 March 2026</span>
                <span class="text-paper/15">·</span>
                <span class="text-[0.44rem] tracking-[0.15em] uppercase text-paper/35">No suppression order — public document</span>
            </div>
        </div>

        <!-- Remaining evidence files -->
        <div class="reveal">
            <div class="text-[0.48rem] tracking-[0.24em] uppercase text-paper/20 mb-4">Additional Evidence — LECC Matter</div>
            <div class="border border-paper/[0.07]" style="background:rgba(12,8,4,0.7)">

                <div class="ev-file ef-hot" onclick="openMV('pdf-lecc-agnew')">
                    <div class="ev-icon ev-pdf" style="font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                    <div class="ev-meta">
                        <div class="ev-name">SC Agnew — Investigation Closure Letter</div>
                        <div class="ev-desc">Internal review · Closed 25 Jan 2026 · "No evidence identified to substantiate"</div>
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

        <!-- Key parties -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8 reveal">
            <div class="border border-paper/[0.08]" style="background:rgba(0,0,0,0.18)">
                <div class="relative overflow-hidden" style="max-height:220px">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/bemarine_cover_photo.jpg" alt="Bemarine — LinkedIn cover photo" class="w-full object-cover object-top" style="max-height:220px" loading="lazy" />
                </div>
                <div class="px-4 py-3">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-0.5">Co-Tenant — Respondent 1</div>
                    <div class="font-display text-base tracking-wide text-paper/80">Bemarine</div>
                    <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/35 mt-0.5">LinkedIn profile · Not facing the camera</div>
                </div>
            </div>
            <div class="border border-paper/[0.08]" style="background:rgba(0,0,0,0.18)">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/katherine_kidd.jpg" alt="Katherine Kidd — Property Manager, Coastal Property Agents" class="w-full object-cover object-top" style="max-height:220px" loading="lazy" />
                <div class="px-4 py-3">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-0.5">Property Manager</div>
                    <div class="font-display text-base tracking-wide text-paper/80">Katherine Kidd</div>
                    <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/35 mt-0.5">Coastal Property Agents · Surfers Paradise</div>
                </div>
            </div>
            <div class="border border-paper/[0.08] flex flex-col">
                <div class="flex-1 flex items-center justify-center p-6" style="background:#ffffff">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/coastal_logo.png" alt="Coastal Property Agents logo" class="max-h-20 w-auto" loading="lazy" />
                </div>
                <div class="px-4 py-3" style="background:rgba(0,0,0,0.18)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-0.5">Licensed Agent — Respondent 2</div>
                    <div class="font-display text-base tracking-wide text-paper/80">Coastal Property Agents</div>
                    <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/35 mt-0.5">Beyond Reserve Pty Ltd · ABN 39101817798</div>
                    <a href="https://www.coastal.com.au/" target="_blank" rel="noopener" class="inline-block mt-2 text-[0.46rem] tracking-[0.14em] uppercase text-gold/60 hover:text-gold transition-colors">coastal.com.au ↗</a>
                </div>
            </div>
        </div>

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
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Exit Obstruction · Invoice #021880 · Document Fraud</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">$588.72 FOR WORK DONE BEFORE THEY ARRIVED.<br><span class="text-gold">USED AS THE EXIT CONDITION.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-6">As the Jadhavs attempted to exit the tenancy, Coastal Property Agents issued Tax Invoice #021880, dated 11 March 2026, for $588.72 — described as "Light Replacements." The invoice was addressed to all three tenants. The owner indicated no replacement tenants would be approved until it was settled. The Jadhavs' break lease exit was held hostage to a debt that had nothing to do with them.</p>

            <!-- SMOKING GUN banner -->
            <div class="reveal mb-6 px-5 py-4" style="background:rgba(193,68,14,0.12);border:1px solid rgba(193,68,14,0.45)">
                <div class="flex items-center gap-3 mb-2">
                    <span class="font-display text-xs tracking-[0.25em] uppercase text-hot">The Smoking Gun</span>
                    <div class="flex-1 h-px" style="background:rgba(193,68,14,0.3)"></div>
                </div>
                <p class="text-[0.72rem] leading-relaxed text-paper/70">ESL Electrical Services issued its invoice on <strong class="text-paper/90">11 November 2025</strong> — before the Jadhavs signed their lease. Katherine Kidd, on behalf of Coastal Property Agents, re-presented that same $588.72 charge under a Coastal invoice dated <strong class="text-hot">11 March 2026</strong> — four months later, addressed to all three tenants — and used it as a condition of approving their exit. The underlying work had nothing to do with the Jadhavs. The underlying invoicing was not Coastal's to issue. Katherine Kidd's own email confirms the Jadhavs bore zero liability. She demanded payment anyway.</p>
            </div>

            <!-- Side-by-side invoice comparison -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6 reveal">

                <!-- ESL original -->
                <div class="flex flex-col" style="border:1px solid rgba(245,234,212,0.12)">
                    <div class="px-4 py-3 flex items-start justify-between gap-3" style="background:rgba(0,0,0,0.25)">
                        <div>
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-paper/40 mb-0.5">Source invoice · Third-party contractor</div>
                            <div class="font-display text-sm tracking-wide text-paper/80">ESL Electrical Services</div>
                            <div class="text-[0.44rem] tracking-[0.16em] uppercase text-paper/35 mt-0.5">Date issued: 11 November 2025</div>
                        </div>
                        <div class="shrink-0 text-right">
                            <div class="font-display text-xl text-paper/70">$588.72</div>
                            <div class="text-[0.4rem] tracking-[0.14em] uppercase text-paper/30">Total</div>
                        </div>
                    </div>
                    <div class="flex-1" style="min-height:420px;background:#1a1410">
                        <iframe src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/esl_invoice.pdf" class="w-full h-full" style="min-height:420px;border:none;filter:brightness(0.92)" title="ESL Electrical Services invoice — 11 November 2025 — $588.72"></iframe>
                    </div>
                    <div class="px-4 py-2" style="background:rgba(0,0,0,0.3)">
                        <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/esl_invoice.pdf" target="_blank" rel="noopener" class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/35 hover:text-paper/60 transition-colors">Open full document ↗</a>
                    </div>
                </div>

                <!-- Coastal re-issue -->
                <div class="flex flex-col" style="border:1px solid rgba(193,68,14,0.4)">
                    <div class="px-4 py-3 flex items-start justify-between gap-3" style="background:rgba(193,68,14,0.1)">
                        <div>
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-0.5">Coastal re-issue · Katherine Kidd · Used as exit condition</div>
                            <div class="font-display text-sm tracking-wide text-paper/80">Coastal Property Agents — Invoice #021880</div>
                            <div class="text-[0.44rem] tracking-[0.16em] uppercase text-hot/70 mt-0.5">Date on invoice: 11 March 2026 &nbsp;·&nbsp; 4 months later</div>
                        </div>
                        <div class="shrink-0 text-right">
                            <div class="font-display text-xl text-hot">$588.72</div>
                            <div class="text-[0.4rem] tracking-[0.14em] uppercase text-paper/30">Same total</div>
                        </div>
                    </div>
                    <div class="flex-1" style="min-height:420px;background:#1a1410">
                        <iframe src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/coastal_invoice.pdf" class="w-full h-full" style="min-height:420px;border:none;filter:brightness(0.92)" title="Coastal Property Agents invoice #021880 — 11 March 2026 — $588.72"></iframe>
                    </div>
                    <div class="px-4 py-2" style="background:rgba(193,68,14,0.08)">
                        <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/coastal_invoice.pdf" target="_blank" rel="noopener" class="text-[0.44rem] tracking-[0.14em] uppercase text-hot/50 hover:text-hot/80 transition-colors">Open full document ↗</a>
                    </div>
                </div>
            </div>

            <!-- What the comparison proves -->
            <div class="border border-paper/[0.08] p-5 mb-5 reveal" style="background:rgba(0,0,0,0.18)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">What These Two Documents Prove</div>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">ESL Electrical Services performed and invoiced the work on <span class="text-paper/70">11 November 2025</span> — weeks before the Jadhavs moved in under their December 2025 lease.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Coastal Property Agents re-presented the identical $588.72 amount under its own invoice number, dated <span class="text-hot">11 March 2026</span> — four months after the original work, and squarely in the window when the Jadhavs were seeking to exit.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Katherine Kidd addressed the Coastal invoice to all three tenants — including the Jadhavs — despite confirming in writing that they bore no liability for this work.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">The owner's approval of replacement tenants was withheld until this invoice was settled. The Jadhavs' ability to exit their tenancy was conditioned on paying a charge Katherine Kidd had already absolved them of in the same email.</p></div>
                </div>
            </div>

            <!-- Katherine Kidd's own words -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-4 reveal">
                <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.04)">
                    <div class="text-[0.46rem] tracking-[0.18em] uppercase text-gold mb-2">Katherine Kidd — 15 April 2026 — Her own written words</div>
                    <p class="text-[0.68rem] text-paper/55 leading-relaxed italic">"This happened before you moved in and Bemarine was the one that requested the electrician, so Bemarine and previous tenant should be the ones paying this bill."</p>
                    <div class="text-[0.42rem] tracking-[0.12em] uppercase text-paper/25 mt-3">She knew. She said so. She demanded payment anyway.</div>
                </div>
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.06)">
                    <div class="text-[0.46rem] tracking-[0.18em] uppercase text-hot mb-2">The same email — both positions held simultaneously</div>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed">Katherine Kidd exculpated the Jadhavs and in the same document asked whether they could arrange a payment plan for the same invoice. She then withheld exit approval pending its settlement. No legal basis for attributing this cost to them has ever been provided. This is not an administrative error. It is a documented, written, contradictory act by a licensed property manager.</p>
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

        <!-- Timeline -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.3)">
            <div class="flex items-center gap-3 mb-5"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Timeline — December 2025 to April 2026</span></div>
            <div class="space-y-4">
                <div class="flex gap-4 items-start">
                    <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/30 w-20 shrink-0 pt-0.5">Dec 2025</div>
                    <div class="flex-1 border-l border-gold/20 pl-4">
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed">Jadhavs sign lease. Bond paid privately to outgoing tenant Rochelle ($1,700 + $364 early renting). Bemarine refuses RTA Change of Bond Contributors — agency confirmed in writing.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/30 w-20 shrink-0 pt-0.5">Dec–Feb</div>
                    <div class="flex-1 border-l border-hot/20 pl-4">
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed">Bemarine sends written messages restricting kitchen access to 11am–12pm, calling the Jadhavs "toxic," saying she does not want to look at them. Police called. Jadhavs vacate.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/30 w-20 shrink-0 pt-0.5">Mar 2026</div>
                    <div class="flex-1 border-l border-hot/20 pl-4">
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed">Jadhavs write to agency reporting co-tenant conduct. Agency responds: "private matter." Invoice #021880 for $588.72 issued in all tenants' names for light work carried out before Jadhavs moved in.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/30 w-20 shrink-0 pt-0.5">17 Apr</div>
                    <div class="flex-1 border-l border-gold/20 pl-4">
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed">Jadhavs give notice of intention to vacate. Exit clean completed and photographically documented. All belongings removed.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/30 w-20 shrink-0 pt-0.5">21–22 Apr</div>
                    <div class="flex-1 border-l border-gold/20 pl-4">
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed">Agency sends break lease info — maximum 3 weeks rent (25–50% band). Amruta submits signed Form 13. Bemarine does not sign. Replacement tenant applications submitted.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/30 w-20 shrink-0 pt-0.5">28–29 Apr</div>
                    <div class="flex-1 border-l border-hot/20 pl-4">
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed">Bond pattern confirmed via Rochelle. Agency confirms it will not resubmit bond change. Bemarine proposes informal bond handover — repeating the scheme a third time.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/30 w-20 shrink-0 pt-0.5">30 Apr</div>
                    <div class="flex-1 border-l border-gold/25 pl-4">
                        <p class="text-[0.65rem] text-paper/60 leading-relaxed">QCAT application lodged: Q8092-26. Formal notice sent to Coastal Property Agents. Right-of-reply offered to Katherine Kidd — no response received.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Verdict block -->
        <div class="reveal mb-10 p-6 md:p-8" style="background:rgba(193,68,14,0.08);border:1px solid rgba(193,68,14,0.2)">
            <div class="text-[0.5rem] tracking-[0.22em] uppercase text-hot mb-4">What This Case Is Really About</div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight text-paper/80">THE BOND. THE HARASSMENT. THE INVOICE. THE AGENCY THAT CALLED IT ALL A PRIVATE MATTER.</h3>
            <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">On its surface this is a tenancy dispute. Two tenants harassed out of their home, a bond withheld in another person's name, an invoice they didn't owe used as a ransom for their exit. But the pattern across two consecutive tenancies — bond money collected privately, held informally, disbursed at the controlling tenant's discretion — raises questions that go beyond one dispute between one set of co-tenants.</p>
            <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">A licensed real estate agency was the named agent on this lease. Its obligations under the Residential Tenancies and Rooming Accommodation Act 2008 (Qld) were clear. Coastal Property Agents, by its own written admissions, was aware of the bond registration failure and failed to resolve it. It acknowledged the invoice was not the Jadhavs' responsibility while using it as a condition of their exit. It directed the Jadhavs to a conciliation process that told them it couldn't help.</p>
            <p class="text-[0.68rem] text-paper/48 leading-relaxed">The QCAT system now has this matter. The documents are lodged. The record exists.</p>
            <div class="flex items-center gap-3 mt-5">
                <div class="w-8 h-px bg-hot/40"></div>
                <span class="text-[0.48rem] tracking-[0.18em] uppercase text-hot">QCAT Q8092-26 — Lodged 30 April 2026 — Adam Watson, Legal Consultant</span>
            </div>
        </div>

        <!-- Evidence Vault -->
        <div class="reveal mt-8">
            <div class="flex items-center justify-between mb-4">
                <div class="text-[0.5rem] tracking-[0.22em] uppercase text-gold">Evidence Vault — Q8092-26</div>
                <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/22">11 source documents</div>
            </div>
            <div class="ev-vault border border-paper/[0.08]">
                <div class="ev-header" onclick="toggleVault(this)">
                    <div>
                        <div class="text-[0.5rem] tracking-[0.22em] uppercase text-gold mb-0.5">QCAT Q8092-26 — JADHAV V YAMSUAN &amp; COASTAL PROPERTY AGENTS</div>
                        <div class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/25">11 documents · Lease · Bond · Harassment · Invoice · Break lease · QCAT filing</div>
                    </div>
                    <span class="ev-toggle text-paper/30 text-xs">▼</span>
                </div>
                <div class="ev-body">
                    <div class="ev-file ef-gold" onclick="openMV('pdf-bemarine-lease')">
                        <div class="ev-icon ev-pdf" style="background:rgba(201,138,16,0.08);color:#c98a10;font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">General Tenancy Agreement — Form 18a — Dec 2025</div>
                            <div class="ev-desc">PDF · Signed lease · All three tenants · 505/18 Cypress Ave · $875/week · Bond $3,500 · Fixed term Dec 2025 – Mar 2027</div>
                        </div>
                        <span class="ev-cta" style="color:#c98a10">View ↗</span>
                    </div>
                    <div class="ev-file ef-hot" onclick="openMV('pdf-bemarine-bond-clarification')">
                        <div class="ev-icon ev-pdf" style="background:rgba(193,68,14,0.08);color:#c1440e;font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">Clarification Regarding Bond — Katherine Kidd, 21 Apr 2026</div>
                            <div class="ev-desc">PDF · Agency admits bond not changed into Jadhavs' names · Bemarine refused to sign · Agency stopped pursuing after one attempt</div>
                        </div>
                        <span class="ev-cta" style="color:#c1440e">View ↗</span>
                    </div>
                    <div class="ev-file ef-hot" onclick="openMV('pdf-bemarine-bond-previous')">
                        <div class="ev-icon ev-pdf" style="background:rgba(193,68,14,0.08);color:#c1440e;font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">Bond — Previous Tenant (Rochelle)</div>
                            <div class="ev-desc">PDF · Rochelle also never on the bond · Bemarine held bond informally across at least two consecutive tenancies</div>
                        </div>
                        <span class="ev-cta" style="color:#c1440e">View ↗</span>
                    </div>
                    <div class="ev-file ef-hot" onclick="openMV('pdf-bemarine-katherine')">
                        <div class="ev-icon ev-pdf" style="background:rgba(193,68,14,0.08);color:#c1440e;font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">Bemarine / Katherine Email Trail — Harassment Messages</div>
                            <div class="ev-desc">PDF · "Toxic to have you both" · Kitchen restricted 11am–12pm · "Not comfortable having you around" · Police called</div>
                        </div>
                        <span class="ev-cta" style="color:#c1440e">View ↗</span>
                    </div>
                    <div class="ev-file ef-gold" onclick="openMV('pdf-bemarine-invoice')">
                        <div class="ev-icon ev-pdf" style="background:rgba(201,138,16,0.08);color:#c98a10;font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">Invoice #021880 — Light Replacements $588.72</div>
                            <div class="ev-desc">PDF · Pre-tenancy work · Agency admits not Jadhavs' responsibility · Used as exit condition regardless</div>
                        </div>
                        <span class="ev-cta" style="color:#c98a10">View ↗</span>
                    </div>
                    <div class="ev-file ef-gold" onclick="openMV('pdf-bemarine-breaklease')">
                        <div class="ev-icon ev-pdf" style="background:rgba(201,138,16,0.08);color:#c98a10;font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">Break Lease Application — Amruta Jadhav, 22 Apr 2026</div>
                            <div class="ev-desc">PDF · Signed Form 13 · 25–50% band · 17 Apr operative date · Bemarine did not sign · Agency did not pursue</div>
                        </div>
                        <span class="ev-cta" style="color:#c98a10">View ↗</span>
                    </div>
                    <div class="ev-file ef-gold" onclick="openMV('pdf-bemarine-yahoo-proofs')">
                        <div class="ev-icon ev-pdf" style="background:rgba(201,138,16,0.08);color:#c98a10;font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">More Proofs — Katherine Kidd Emails (Forwarded)</div>
                            <div class="ev-desc">PDF · Agency exculpates and pursues Jadhavs for same invoice in same email · Double standard documented</div>
                        </div>
                        <span class="ev-cta" style="color:#c98a10">View ↗</span>
                    </div>
                    <div class="ev-file ef-sage" onclick="openMV('pdf-bemarine-property-exit')">
                        <div class="ev-icon ev-pdf" style="background:rgba(61,122,74,0.08);color:#3d7a4a;font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">Property Exit Update — Exit Clean Documentation</div>
                            <div class="ev-desc">PDF · Exit clean photographically documented · All belongings removed 17 April 2026</div>
                        </div>
                        <span class="ev-cta" style="color:#3d7a4a">View ↗</span>
                    </div>
                    <div class="ev-file ef-sage" onclick="openMV('pdf-bemarine-more-emails')">
                        <div class="ev-icon ev-pdf" style="background:rgba(61,122,74,0.08);color:#3d7a4a;font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">More Emails — Tenancy Correspondence</div>
                            <div class="ev-desc">PDF · Additional correspondence between parties during the dispute period</div>
                        </div>
                        <span class="ev-cta" style="color:#3d7a4a">View ↗</span>
                    </div>
                    <div class="ev-file ef-violet" onclick="openMV('pdf-bemarine-dispute')">
                        <div class="ev-icon ev-pdf" style="background:rgba(124,106,170,0.08);color:#7c6aaa;font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">Tenancy Dispute Brief — Kaustubh to Adam Watson</div>
                            <div class="ev-desc">PDF · Full brief for legal consultant · Complete account of bond situation, harassment, and financial impact</div>
                        </div>
                        <span class="ev-cta" style="color:#7c6aaa">View ↗</span>
                    </div>
                    <div class="ev-file ef-violet" onclick="openMV('pdf-bemarine-qcat-form')">
                        <div class="ev-icon ev-pdf" style="background:rgba(124,106,170,0.08);color:#7c6aaa;font-size:0.5rem;letter-spacing:0.04em">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">QCAT Form 2 — Application — Q8092-26</div>
                            <div class="ev-desc">PDF · Filed QCAT application · Jadhav v Yamsuan &amp; Coastal Property Agents · Lodged 30 April 2026</div>
                        </div>
                        <span class="ev-cta" style="color:#7c6aaa">View ↗</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     SECTION — id="martin"
══════════════════════════════════════ -->
<section id="martin" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(124,106,170,0.05) 0%,rgba(193,68,14,0.03) 60%,transparent 100%)">
    <div class="max-w-4xl mx-auto">

        <div class="flex items-center gap-3 mb-3 reveal">
            <span class="text-[0.48rem] tracking-[0.22em] uppercase border px-2 py-1 border-paper/20 text-paper/40">Broadbeach · Gold Coast · Character Study</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-3 leading-tight reveal">THE BUSYBODY.<br><span style="color:#7c6aaa">MARTIN.</span></h2>
        <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-8 reveal">A chance encounter at Broadbeach library. A laundry request declined. A coffee shop closed. A tent touched, then denied. A court file requested for someone he had no connection to. Not every intervention is helpful.</p>

        <!-- Martin photo + video -->
        <div class="reveal mb-10">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/martin/martin_photo.jpg" alt="Martin — Broadbeach" class="w-full object-cover border border-paper/[0.07]" style="max-height:520px;object-position:center top" loading="lazy" />
            <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/20 mt-1.5">Martin · Broadbeach · Gold Coast</div>
        </div>

        <div class="reveal mb-10">
            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">Filmed Interaction — The Confrontation</div>
            <div class="border border-paper/[0.08]" style="background:rgba(0,0,0,0.3)">
                <video controls preload="metadata" class="w-full" style="max-height:480px;display:block">
                    <source src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/martin/martin.mp4" type="video/mp4">
                </video>
                <div class="px-4 py-3 border-t border-paper/[0.06]">
                    <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/35 mb-1">Recorded confrontation — Broadbeach</div>
                    <p class="text-[0.55rem] text-paper/30 leading-relaxed">"I don't even know where your tent is!" — said on camera, after making a specific locational complaint to Adam about that same tent. After the recording device was visible, Martin immediately called Adam.</p>
                </div>
            </div>
        </div>

        <!-- Stats strip -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px mb-10 reveal" style="background:rgba(245,234,212,0.06)">
            <div class="py-5 px-4" style="background:rgb(12,8,4)">
                <div class="font-display text-3xl md:text-4xl mb-1 text-hot">1</div>
                <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/30">Coffee shop closed — FWC complaints</div>
            </div>
            <div class="py-5 px-4" style="background:rgb(12,8,4)">
                <div class="font-display text-3xl md:text-4xl mb-1" style="color:#7c6aaa">NZ</div>
                <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/30">Properties owned — lives in vehicle</div>
            </div>
            <div class="py-5 px-4" style="background:rgb(12,8,4)">
                <div class="font-display text-3xl md:text-4xl mb-1 text-hot">0</div>
                <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/30">Standing to request court file</div>
            </div>
            <div class="py-5 px-4" style="background:rgb(12,8,4)">
                <div class="font-display text-3xl md:text-4xl mb-1" style="color:#7c6aaa">∞</div>
                <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/30">Involvement in others' affairs</div>
            </div>
        </div>

        <!-- Chapter 1: The Initial Encounter -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(124,106,170,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Broadbeach Library · First Contact</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">A CHANCE ENCOUNTER.<br><span style="color:#7c6aaa">A LAUNDRY REQUEST. A SHIFT IN BEHAVIOUR.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Martin was previously unknown. The first encounter happened at Broadbeach library — a chance meeting that should have stayed unremarkable. Martin learned about a personal matter regarding a laptop and began asking about it repeatedly during subsequent casual encounters. The curiosity was noted. The persistence was noted more.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Martin subsequently requested to use laundry facilities at Meriton Apartments through Adam — despite having a vehicle and access to laundromats. The request was declined. From that point, his behaviour became noticeably negative. A small declined convenience became the starting point for a pattern of insertion, misrepresentation, and interference that continued for months.</p>
            <div class="border border-paper/[0.08] p-5" style="background:rgba(0,0,0,0.14)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">What Was Established From The Start</div>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Martin had no standing relationship with either Kosta or Adam — the connection was incidental.</p></div>
                    <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">The laundry request — declined — was the first ask for a favour from someone he had just met.</p></div>
                    <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">The negative shift in behaviour following the decline established the dynamic that defined every subsequent interaction.</p></div>
                </div>
            </div>
        </div>

        <!-- Chapter 2: Serving Our People -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.4)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Serving Our People · Fair Work Commission</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">GIVEN A CHANCE.<br><span class="text-hot">ORGANISED COMPLAINTS THAT CLOSED THE SHOP.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Martin worked at <em>Serving Our People</em> — a charity founded by Yas Matbouly that operated ten coffee shops with a mix of volunteer and paid staff. Someone advocated for Martin's inclusion: "Give him a chance." He was given one.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Martin organised fellow workers to file Fair Work Commission complaints demanding improved pay conditions. The legal costs of defending against multiple simultaneous claims proved too much. The coffee shop was forced to close. The broader community — the people the charity existed to serve — lost a resource because Martin decided the arrangement wasn't working for him and recruited others to formalise that grievance through litigation.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.46rem] tracking-[0.18em] uppercase text-hot mb-2">What Was Given</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/45 leading-relaxed">An employment opportunity at a charity operation</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/45 leading-relaxed">A personal advocate who said: "Give him a chance"</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/45 leading-relaxed">Access to an organisation serving the community</p></div>
                    </div>
                </div>
                <div class="border border-paper/[0.08] p-4" style="background:rgba(0,0,0,0.14)">
                    <div class="text-[0.46rem] tracking-[0.18em] uppercase text-paper/30 mb-2">What Followed</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Organised workers to file multiple FWC complaints</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Legal costs of defending multiple claims simultaneously</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Coffee shop forced to close — community lost the resource</p></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chapter 3: The Tent Accusation -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">False Accusation · Filmed Confrontation</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">"I DON'T EVEN KNOW WHERE YOUR TENT IS."<br><span class="text-hot">HE KNEW. HE'D TOUCHED IT.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Martin suggested that Kosta's tent — positioned near a children's playground — indicated inappropriate behaviour. The accusation was made to Adam. When Kosta confronted Martin directly about touching the tent, Martin's response was immediate and specific: "I don't even know where your tent is!" The denial was recorded.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">The problem with that denial is that the accusation about the tent's proximity to the playground — made earlier, to Adam — required Martin to know exactly where the tent was. You cannot complain about the specific location of something you claim not to know the location of. The contradiction was captured on film during the confrontation. After the recording device was visible, Martin immediately called Adam — the implied threat about the footage was noted.</p>
            <div class="border border-hot/20 p-5 mb-4" style="background:rgba(193,68,14,0.05)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">The Contradiction — On Record</div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/28 mb-1.5">What Martin told Adam (before)</div>
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed italic">Complained that the tent was positioned near a children's playground — a specific locational complaint requiring specific locational knowledge.</p>
                    </div>
                    <div>
                        <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/28 mb-1.5">What Martin said on camera (after)</div>
                        <p class="text-[0.65rem] text-paper/55 leading-relaxed italic">"I don't even know where your tent is!"</p>
                    </div>
                </div>
            </div>
            <div class="border border-paper/[0.08] p-4" style="background:rgba(0,0,0,0.14)">
                <div class="text-[0.46rem] tracking-[0.18em] uppercase text-paper/30 mb-2">During the filmed confrontation, Martin also asked:</div>
                <p class="text-[0.72rem] text-paper/55 leading-relaxed italic mb-1">"How long have we known each other?"</p>
                <p class="text-[0.57rem] text-paper/35 leading-relaxed">Noted at the time: they had never spoken by phone. The framing of familiarity in the question was inconsistent with the actual history of contact.</p>
            </div>
        </div>

        <!-- Chapter 4: The Pattern -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(245,234,212,0.15)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/40 border border-paper/20 px-2 py-1">Court Intrusion · Misrepresentation · Continued Presence</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE COURT FILE. THE MISREPRESENTATION.<br><span class="text-paper/50">THE ONGOING PRESENCE.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Martin visited court to request a homeless man's file following a police matter that had nothing to do with him. He had no standing, no connection to the matter, and no invitation. Adam characterised the behaviour plainly: a busybody. The court visit was not an isolated incident — it fit a pattern of inserting himself into situations where he had no role and had not been asked.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">When Kosta contacted police regarding an aggressive individual captured on CCTV — a legitimate safety concern — Martin misrepresented the nature of that contact to Adam. He characterised it as malicious rather than what it was. This is not confusion. Martin had enough understanding of the situation to misrepresent it purposefully. He chose the version that would reflect worse on Kosta.</p>
            <div class="border border-paper/[0.08] p-5 mb-4" style="background:rgba(0,0,0,0.14)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">The Pattern Documented</div>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Visited court to request a file for a homeless man's matter — no connection, no standing, no invitation.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Misrepresented a legitimate police CCTV referral to Adam as a malicious act.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Called Adam immediately after being filmed — implied threat regarding the recording.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Continues to frequent areas where Adam is present — raising the pattern with library security is under consideration.</p></div>
                </div>
            </div>
        </div>

        <!-- The Paradox of Martin -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(124,106,170,0.4)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">The Contradictions</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-5 leading-tight">THE PARADOX OF MARTIN.</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.12)">
                    <div class="text-[0.46rem] tracking-[0.18em] uppercase text-paper/28 mb-2">No licence. Lives in a vehicle.</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed">Martin lacks a driver's licence yet lives in his vehicle. The vehicle he requested access to Adam's laundry facilities from. The vehicle that gives him access to laundromats he chose not to use.</p>
                </div>
                <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.12)">
                    <div class="text-[0.46rem] tracking-[0.18em] uppercase text-paper/28 mb-2">Owns NZ properties. Pursuing tenants for personal assets.</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed">Martin owns at least one commercial property in New Zealand — vacant for four years. He has a personal guarantee over the former tenant whose business failed, and is now pursuing that person's personal assets. Meanwhile he presents as someone with no stable housing.</p>
                </div>
                <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.12)">
                    <div class="text-[0.46rem] tracking-[0.18em] uppercase text-paper/28 mb-2">Given a chance. Closed the operation.</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed">Someone advocated for him with the words "give him a chance." He was given one. He used it to organise Fair Work complaints that cost the charity its coffee shop.</p>
                </div>
                <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.12)">
                    <div class="text-[0.46rem] tracking-[0.18em] uppercase text-paper/28 mb-2">Busybody. No invitation required.</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed">Requested a court file for a stranger's matter. Misrepresented a police safety referral. Complained about a tent location he claimed not to know. Continued frequenting spaces uninvited.</p>
                </div>
            </div>
        </div>

        <!-- The Enforcer Call -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">New Incident — Private Number · Third-Party Escalation</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">"WHY ARE YOU PICKING ON AN OLD MAN FOR?"<br><span class="text-hot">MARTIN SENT AN ENFORCER.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Martin has now escalated to a third party. An individual — apparently acting on Martin's behalf — called Adam Watson from a private number. The question put to Adam was: <em class="text-paper/70">"Why are you picking on an old man for?"</em> Martin had positioned himself as the victim — the frail elderly man being persecuted — to someone willing to make that call on his behalf.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">This is the same person who owns commercial real estate in New Zealand, who has been pursuing a former tenant's personal assets through a personal guarantee, who organised Fair Work Commission complaints that closed a charity's coffee shop, and who visited a court to request the file of a stranger he had no connection to. The old man framing was chosen because it was useful.</p>
            <div class="border border-hot/25 p-5 mb-5" style="background:rgba(193,68,14,0.05)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-3">The Call</div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/60 mb-1">Source</div>
                        <p class="text-[0.62rem] text-paper/50 leading-relaxed">Private number. Third party calling on Martin's behalf. Not Martin himself.</p>
                    </div>
                    <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/60 mb-1">The Line</div>
                        <p class="text-[0.62rem] text-paper/55 leading-relaxed italic">"Why are you picking on an old man for?"</p>
                    </div>
                </div>
            </div>
            <!-- Tip callout -->
            <div class="border-l-4 border-gold/50 pl-5" style="background:rgba(201,138,16,0.05);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-2">A Note — If You're Calling to Threaten</div>
                <p class="text-[0.65rem] text-paper/50 leading-relaxed mb-2">Private numbers are not untraceable. Telecommunications carriers retain call records — including the originating number behind a private display — and these records are accessible to police and courts via subpoena. A call made from a private number is not a call made anonymously.</p>
                <p class="text-[0.65rem] text-paper/50 leading-relaxed">If the intention is to make a threatening or intimidating call, a payphone provides no greater protection. Magistrates are entirely familiar with this tactic. Calls made to intimidate, threaten, or harass — whether from a private number or a payphone — are treated seriously. Courts are not naive about why someone dials private before making that particular call.</p>
            </div>
        </div>

        <!-- NZ commercial property callout -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(124,106,170,0.4)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">New Zealand · Commercial Property · Personal Guarantee</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">FOUR YEARS VACANT.<br><span style="color:#7c6aaa">PURSUING A FORMER TENANT'S PERSONAL ASSETS.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Martin owns a commercial property in New Zealand. It has been vacant for four years. Rather than find a new tenant and put the property to productive use, it has sat empty — while Martin continues to present himself in Australia as a person without stable housing, living out of a vehicle.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">The last tenant's business failed. Martin held a personal guarantee over that individual. He is now pursuing the former tenant for their personal assets. The commercial property sits empty. The legal pursuit of a person whose business collapsed continues. He asked Adam Watson — who was homeless — to help him access laundry facilities.</p>
            <div class="border border-paper/[0.08] p-5 mb-4" style="background:rgba(0,0,0,0.14)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">What the NZ Property Situation Suggests</div>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">A property owner with assets sufficient to hold commercial real estate in New Zealand for four years without rental income is not someone in genuine financial hardship.</p></div>
                    <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">The personal guarantee pursuit — against someone whose business failed — suggests a willingness to use legal instruments to extract personal assets from an individual in difficulty.</p></div>
                    <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">That the same person simultaneously presents as without stable housing — living in a vehicle, requesting laundry access from a homeless man — is a presentation, not a reality.</p></div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                <div class="border p-4" style="border-color:rgba(124,106,170,0.2);background:rgba(124,106,170,0.04)">
                    <div class="text-[0.45rem] tracking-[0.15em] uppercase mb-1" style="color:#7c6aaa">The Property</div>
                    <div class="font-display text-base mb-1" style="color:#7c6aaa">VACANT · 4 YEARS</div>
                    <p class="text-[0.6rem] text-paper/38 leading-relaxed">Commercial property in New Zealand. No tenant for four years. No apparent urgency to fill it.</p>
                </div>
                <div class="border p-4" style="border-color:rgba(124,106,170,0.2);background:rgba(124,106,170,0.04)">
                    <div class="text-[0.45rem] tracking-[0.15em] uppercase mb-1" style="color:#7c6aaa">The Guarantee</div>
                    <div class="font-display text-base mb-1" style="color:#7c6aaa">PERSONAL LIABILITY</div>
                    <p class="text-[0.6rem] text-paper/38 leading-relaxed">Former tenant's business didn't work out. Personal guarantee held. Martin is now pursuing that person's private assets.</p>
                </div>
                <div class="border p-4" style="border-color:rgba(124,106,170,0.2);background:rgba(124,106,170,0.04)">
                    <div class="text-[0.45rem] tracking-[0.15em] uppercase mb-1" style="color:#7c6aaa">The Presentation</div>
                    <div class="font-display text-base mb-1" style="color:#7c6aaa">LIVES IN A VEHICLE</div>
                    <p class="text-[0.6rem] text-paper/38 leading-relaxed">A man with commercial real estate and an active legal pursuit asked a homeless man if he could use his laundry. The homelessness is suspicious.</p>
                </div>
            </div>
        </div>

        <!-- Irish Whiskey Peace Offering -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1 text-gold border-gold/40">New Incident — Peace Offering · Tent · Broadbeach</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">A CAN OF IRISH WHISKEY OUTSIDE THE TENT.<br><span class="text-gold">ADAM WARNED IT MAY BE POISONED.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">After the documented incidents involving the tent — the false denial on camera, the complaint about its location to Adam while claiming not to know where it was — Martin left a can of Irish Whiskey outside the tent. A peace offering, apparently. The can was consumed.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Adam Watson's response was direct: the drink may have been poisoned. That warning was noted. Whether Martin intended goodwill or something else is something only Martin knows. What is documented is the sequence: the confrontation, the denial caught on film, and then — a drink left outside the tent of the person he had just been caught lying to.</p>

            <!-- Photo -->
            <div class="mb-5 reveal" onclick="openMV('image-martin-whiskey')" style="cursor:pointer">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/pslo/irish_whiskey.jpg"
                     alt="Irish Whiskey can — left outside tent by Martin"
                     class="w-full object-cover border border-paper/[0.07]"
                     style="max-height:400px;object-fit:contain;background:#0d0d0d"
                     loading="lazy" />
                <div class="text-[0.44rem] tracking-[0.12em] uppercase text-paper/20 mt-1.5 flex items-center gap-2">
                    <span>Irish Whiskey · Left outside tent · Martin's peace offering</span>
                    <span class="text-paper/15">· tap to enlarge</span>
                </div>
            </div>

            <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-3">Context</div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <div class="border border-gold/15 p-3" style="background:rgba(201,138,16,0.03)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-gold/55 mb-1">Before</div>
                        <p class="text-[0.6rem] text-paper/45 leading-relaxed">Confrontation filmed. Martin denied knowing where the tent was — while having previously complained about its exact location.</p>
                    </div>
                    <div class="border border-gold/15 p-3" style="background:rgba(201,138,16,0.03)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-gold/55 mb-1">The Offering</div>
                        <p class="text-[0.6rem] text-paper/45 leading-relaxed">A can of Irish Whiskey left outside the tent. No note. No explanation. Consumed.</p>
                    </div>
                    <div class="border border-gold/15 p-3" style="background:rgba(201,138,16,0.03)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-gold/55 mb-1">Adam's Warning</div>
                        <p class="text-[0.6rem] text-paper/45 leading-relaxed">Adam Watson warned that the drink may have been poisoned. The warning was taken seriously.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stalking — Car at Disability Centre -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Escalation — Broadbeach Library · Disability Centre · Stalker Behaviour</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">KNOCKING ON ADAM'S CAR WINDOW WHILE HE SLEPT.<br><span class="text-hot">THREATENING TO REPORT HIM TO THE DISABILITY CENTRE.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Adam Watson was sleeping in his car outside the disability centre at Broadbeach library. Martin located the car, approached, and knocked on Adam's window. His message: he was going to tell the disability centre that Adam was sleeping in his car outside.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">There is a word for locating someone's vehicle, approaching it while they sleep, and presenting a threat. That word is stalking. Martin found out where Adam's car was parked. He went there. He knocked on the window of a sleeping person. He delivered a warning. This is no longer someone who misrepresents situations or inserts himself uninvited into conversations. This is someone who tracks a person's location and shows up there to issue threats.</p>

            <div class="border border-hot/25 p-5 mb-5" style="background:rgba(193,68,14,0.05)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-3">The Incident — Documented</div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/60 mb-1">Location</div>
                        <p class="text-[0.6rem] text-paper/50 leading-relaxed">Broadbeach Library disability centre — Adam Watson sleeping in his car outside.</p>
                    </div>
                    <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/60 mb-1">Martin's Action</div>
                        <p class="text-[0.6rem] text-paper/50 leading-relaxed">Located the vehicle. Approached. Knocked on the window while Adam was asleep. Delivered a threat.</p>
                    </div>
                    <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/60 mb-1">The Threat</div>
                        <p class="text-[0.6rem] text-paper/55 leading-relaxed italic">"I'm going to tell the disability centre that you're sleeping in your car outside."</p>
                    </div>
                    <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/60 mb-1">What This Is</div>
                        <p class="text-[0.6rem] text-paper/50 leading-relaxed">Not a coincidence. Not a chance encounter. Martin knew where Adam's car was, went there, and used that knowledge as leverage.</p>
                    </div>
                </div>
            </div>

            <!-- Pattern escalation callout -->
            <div class="border-l-4 border-hot/60 pl-5" style="background:rgba(193,68,14,0.06);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">This Is Now Stalker Behaviour</div>
                <p class="text-[0.65rem] text-paper/50 leading-relaxed mb-2">The pattern has moved past insertion and misrepresentation. Attending someone's sleeping vehicle — having tracked their location — to issue a threat is the behaviour of a stalker. The disability centre angle was chosen because it might cause harm. The target was chosen because he was asleep and alone.</p>
                <p class="text-[0.65rem] text-paper/50 leading-relaxed">This is escalation. Each step has been documented: the laundry request denied, the tent accusation and filmed denial, the third-party phone call, the whiskey left outside, and now this. The trajectory is not ambiguous.</p>
            </div>
        </div>

        <!-- $2,000 Fine — Martin dobbed in Adam to the Council Ranger -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.6)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Consequence · Council Ranger · $2,000 Fine</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">MARTIN DOBBED HIM IN TO THE COUNCIL RANGER.<br><span class="text-hot">CAUGHT ON CCTV. ADAM GOT A $2,000 FINE.</span></h3>
            <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"He didn't just threaten to report Adam. He went and did it. The disability centre caught him on video talking to the Council Ranger — and told Adam."</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">After knocking on Adam Watson's car window and threatening to report him, Martin followed through. Adam subsequently received a <strong class="text-paper/70">$2,000 fine</strong> from a Council Ranger for sleeping in his car. Staff at the disability centre then came to Adam with information: they had caught Martin on CCTV talking to the Council Ranger — effectively dobbing Adam in.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">The fine did not arrive by chance. Martin identified the location. Martin made contact with the Ranger. The disability centre employees witnessed the exchange and reported it back to Adam. This is not a pattern of concern or misguided helpfulness. This is deliberate, targeted reporting — intended to result in a financial penalty against a homeless man sleeping in a car.</p>

            <!-- Three-column breakdown -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">The Fine</div>
                    <div class="font-display text-2xl text-hot mb-1">$2,000</div>
                    <p class="text-[0.55rem] text-paper/40 leading-relaxed">Issued by Council Ranger for sleeping in a vehicle — following Martin's report. Issued against a homeless man with no alternative accommodation.</p>
                </div>
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">Caught on CCTV</div>
                    <div class="font-display text-sm text-paper/70 mb-1">Disability Centre Footage</div>
                    <p class="text-[0.55rem] text-paper/40 leading-relaxed">Disability centre staff saw Martin on their CCTV talking directly to the Council Ranger. They told Adam. Martin had no business being involved in this interaction.</p>
                </div>
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">The Irony</div>
                    <div class="font-display text-sm text-paper/70 mb-1">Martin Also Sleeps in His Car</div>
                    <p class="text-[0.55rem] text-paper/40 leading-relaxed">Martin himself lives in his vehicle — he approached Adam for laundry access from that same vehicle. He reported another person for doing exactly what he does.</p>
                </div>
            </div>

            <!-- Irony callout -->
            <div class="border border-hot/30 p-5 mb-5" style="background:rgba(193,68,14,0.06)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-3">The Irony Cannot Be Overstated</div>
                <p class="text-[0.68rem] text-paper/55 leading-relaxed mb-3">Martin does not have a driver's licence. Martin lives in his vehicle. Martin approached Adam Watson — who was homeless — to ask for access to laundry facilities, from that same vehicle. Martin then reported Adam Watson to a Council Ranger for sleeping in a car.</p>
                <p class="text-[0.68rem] text-paper/55 leading-relaxed">The person who reported Adam for sleeping in a vehicle is themselves sleeping in a vehicle. The person who sought help from Adam now sought to have Adam fined $2,000 for his accommodation situation. The disability centre staff who witnessed Martin speaking to the Ranger understood what they were seeing. They told Adam.</p>
            </div>

            <!-- Sequence -->
            <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-3">The Sequence</div>
                <div class="space-y-2">
                    <div class="grid grid-cols-[80px_1fr] gap-3 items-start">
                        <div class="text-[0.44rem] tracking-[0.12em] uppercase text-hot/60">Step 1</div>
                        <p class="text-[0.6rem] text-paper/50 leading-relaxed">Martin locates Adam's car at the disability centre and knocks on the window while he sleeps. Threatens to report him.</p>
                    </div>
                    <div class="grid grid-cols-[80px_1fr] gap-3 items-start">
                        <div class="text-[0.44rem] tracking-[0.12em] uppercase text-hot/60">Step 2</div>
                        <p class="text-[0.6rem] text-paper/50 leading-relaxed">Martin approaches the Council Ranger and reports Adam Watson for sleeping in his vehicle. Disability centre CCTV captures the exchange.</p>
                    </div>
                    <div class="grid grid-cols-[80px_1fr] gap-3 items-start">
                        <div class="text-[0.44rem] tracking-[0.12em] uppercase text-hot/60">Step 3</div>
                        <p class="text-[0.6rem] text-paper/50 leading-relaxed">Adam Watson receives a $2,000 fine from the Council Ranger.</p>
                    </div>
                    <div class="grid grid-cols-[80px_1fr] gap-3 items-start">
                        <div class="text-[0.44rem] tracking-[0.12em] uppercase text-hot/60">Step 4</div>
                        <p class="text-[0.6rem] text-paper/50 leading-relaxed">Disability centre staff inform Adam that they caught Martin on CCTV talking to the Ranger. Martin's role is confirmed.</p>
                    </div>
                    <div class="grid grid-cols-[80px_1fr] gap-3 items-start">
                        <div class="text-[0.44rem] tracking-[0.12em] uppercase text-hot/60">The Irony</div>
                        <p class="text-[0.6rem] text-paper/50 leading-relaxed">Martin himself sleeps in his car. He reported a homeless man for doing what he does himself.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kosta Confronts Martin — Caution — Library Exclusion -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.6)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Kosta Kondratenko · The Confrontation · Mermaid Beach Police Station</span>
                <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-hot/30 text-hot/70 px-1.5 py-0.5">SELF-REPORTED</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">"STOP CONTACTING ADAM."<br><span class="text-hot">MARTIN RAN TO THE POLICE. KOSTA RECEIVED A CAUTION.</span></h3>
            <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"After months of Martin making Adam feel unsafe at the library, I confronted him directly. I put my finger in his face. I told him to stop. Martin then ran to the police station and alleged I had spat on him — which I deny and which is not true. I am self-leaking this caution because this is exactly what targeted harassment followed by a police run looks like — and people need to understand how these narratives get constructed."</p>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Martin's continued harassment of Adam Watson — including the phone calls from different numbers, the targeted interference, and the pattern of making Adam feel unsafe to visit Kosta at the library — reached a point that Kosta Kondratenko decided required a direct response. Kosta approached Martin at the library, put his finger in Martin's face and told him plainly: <strong class="text-paper/70">"Stop contacting Adam."</strong></p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Library security staff asked Kosta to leave for 24 hours — a standard response to a confrontation on library premises, which Kosta accepts. Martin's response was to leave for the police station, where he made an allegation that Kosta had spat on him. <strong class="text-hot">This allegation is false. Kosta denies it entirely.</strong> Kosta is prepared to upload the CCTV footage of the physical confrontation to this website if it becomes available — the footage will show what happened.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Police subsequently approached Kosta and took him to Mermaid Beach Police Station. Despite Kosta presenting to police the full history of Martin's conduct — the harassment of Adam, the pattern of interference, the stalking — police proceeded to issue a caution. A caution of this nature does not appear on Kosta's criminal record. He continues to pass Working with Children Checks. But this is being self-disclosed — in full, with context — because the targeted harassment of Kosta Kondratenko means the record must be set straight. This is precisely how people's lives can be damaged when they stand up for their friends: one confrontation, selectively presented, becomes the entire story.</p>

            <!-- Caution photo -->
            <div class="mb-6 reveal">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/martin/adult_caution_martin.jpg"
                     alt="Adult Caution — Kosta Kondratenko · Mermaid Beach Police Station"
                     class="w-full object-cover border border-hot/20"
                     style="max-height:600px;object-fit:contain;background:#0d0d0d"
                     loading="lazy" />
                <div class="px-4 py-2.5 border border-t-0 border-hot/15" style="background:rgba(193,68,14,0.06)">
                    <div class="text-[0.44rem] tracking-[0.14em] uppercase text-hot/70">Adult Caution · Mermaid Beach Police Station · Self-Disclosed by Kosta Kondratenko</div>
                    <p class="text-[0.55rem] text-paper/35 leading-relaxed mt-1">This caution does not appear on Kosta's criminal record. He continues to pass Working with Children Checks. It is published here with the full story — because the narrative without this context would be worse.</p>
                </div>
            </div>

            <!-- After the caution — Martin kept going -->
            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-3">After the Caution — Martin Did Not Stop</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Despite the caution being issued, Martin continued his targeted phone harassment of Adam Watson — messaging him from different numbers. When Kosta attended Mermaid Beach Police Station with the caution paperwork to report that Martin was still harassing his friend, the response was that Adam Watson would need to attend the station himself and that the matter was considered finalised. The additional comment made was: <em class="text-paper/65">"Maybe don't assault people."</em></p>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed">This is why getting the full record straight matters. The police interaction closed on that framing — a comment that presupposes the allegation Martin made was true. Martin had made a false allegation, run to police, received an outcome, and then continued the same conduct that prompted the confrontation in the first place. The caution is not the story. The caution is one moment inside a much longer story — and this site is the rest of it.</p>
            </div>

            <!-- Martin's false allegation / attempted to drag Adam in -->
            <div class="border border-paper/[0.08] p-5 mb-5" style="background:rgba(0,0,0,0.18)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-paper/30 mb-3">Martin Also Tried to Involve Adam Watson</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-2">Martin threatened to state that it was Adam Watson who had directed Kosta to take the video of him. Adam Watson expressed genuine concern that he would be charged as a result of this allegation. The attempt to draw a third party into the police complaint — to extend the legal consequences outward from Kosta to Adam — is consistent with the wider pattern: use systems and institutions to cause maximum disruption to the people around him.</p>
            </div>

            <!-- How it works — pattern analysis -->
            <div class="border-l-4 pl-5" style="border-color:rgba(193,68,14,0.6);background:rgba(193,68,14,0.05);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-3">How People Like Martin Operate — The Playbook</div>
                <p class="text-[0.65rem] text-paper/50 leading-relaxed mb-3">People like Martin don't announce themselves as threats. They arrive as ordinary community figures — concerned neighbours, helpful intermediaries, people who seem to care about others. They insert themselves into situations. They gather information. They use the vocabulary of concern while pursuing entirely personal agendas. And when anyone pushes back, they don't fight — they run. They run to police. They run to management. They run to any institution that will hear a complaint.</p>
                <p class="text-[0.65rem] text-paper/50 leading-relaxed mb-3">The target is then forced to respond to the institution — which does not know the history, which sees only the complaint in front of it, and which applies standard procedure. A caution is issued. A fine is levied. A ban is put in place. The target looks worse in every record than they actually are. Martin walks away as the victim. The damage is done.</p>
                <p class="text-[0.65rem] text-paper/50 leading-relaxed">Communities are destroyed this way. The charity coffee shop closed. Adam Watson was fined $2,000. Kosta Kondratenko received a caution and a 12-month library exclusion. Three outcomes, all from the same person. Each outcome individually defensible by the institution that applied it. Together: a campaign. The records don't capture that. This site does.</p>
            </div>
        </div>

        <!-- 12-Month Gold Coast Library Exclusion -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.5)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Gold Coast Libraries · 12-Month Exclusion · All Branches</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">BANNED FROM EVERY GOLD COAST LIBRARY.<br><span class="text-gold">12 MONTHS. ONE CONFRONTATION MARTIN PROVOKED.</span></h3>
            <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"I went to Southport library — away from Martin, specifically to avoid the situation. A library security guard approached me and handed me a 12-month exclusion from every Gold Coast Council library. One confrontation with the person who had been making my friend's life unsafe became grounds for banning me from every library in the city."</p>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">After the confrontation at Broadbeach library, Kosta attended Southport library — specifically going to a different branch to remove himself from the situation with Martin. A library security guard approached him there and served him with a 12-month exclusion notice covering all Gold Coast Council libraries. A single confrontation, which Kosta accepts responsibility for, resulted in a citywide ban affecting his ability to work, access resources, and use public infrastructure.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The framing applied by the library was that Kosta presented a risk to other patrons. That framing does not acknowledge the months of provocation, the pattern of targeted harassment, or the fact that Martin — who was making Adam feel unsafe at the library — continued to attend without restriction. One person's conduct was treated as an institutional threat. The other person's conduct was not.</p>

            <!-- Exclusion notice image -->
            <div class="mb-6 reveal">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/martin/gold_coast_library_exclusion.jpg"
                     alt="Gold Coast Libraries — 12-Month Exclusion Notice · Kosta Kondratenko"
                     class="w-full object-cover border border-gold/20"
                     style="max-height:700px;object-fit:contain;background:#0d0d0d"
                     loading="lazy" />
                <div class="px-4 py-2.5 border border-t-0 border-gold/15" style="background:rgba(201,138,16,0.05)">
                    <div class="text-[0.44rem] tracking-[0.14em] uppercase text-gold/70">12-Month Exclusion · All Gold Coast Council Libraries · Served at Southport Library</div>
                </div>
            </div>

            <!-- Pacific Fair intelligence — Martin weaponising personal information -->
            <div class="border border-gold/20 p-5 mb-5" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-gold mb-3">Pacific Fair — Martin Weaponising Personal Information</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Martin had also spoken to security staff at Pacific Fair shopping centre about Kosta. Through those conversations, information was leaked back to Martin — specifically that Kosta sometimes eats food left on tables at Pacific Fair. Martin then weaponised that piece of personal information by sending a message about it to Adam Watson.</p>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed">This is the intelligence-gathering and deployment pattern that runs throughout Martin's conduct. He builds relationships with security staff at venues, extracts personal information about targets, and uses that information to damage them — through messages to mutual contacts, through institutions, through whatever mechanism is available. The Pacific Fair incident is another data point in a documented pattern.</p>
            </div>

            <div class="border border-paper/[0.08] p-5" style="background:rgba(0,0,0,0.18)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-paper/30 mb-3">Why the Targeted Harassment of Kosta Kondratenko Requires This Record</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Kosta Kondratenko is moving into a public and political space. The pattern of targeted harassment — from Martin and from others — means that isolated moments, stripped of context, can be used to construct a narrative that bears no relationship to reality. A caution. A library ban. A piece of personal behaviour at a shopping centre that was gathered and weaponised.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">Each of these things, presented alone, could damage a person. Presented with the full story — the months of provocation, the false allegation, the continuation of harassment even after the caution — they tell a completely different story. This is why the full record is being set straight here. Not to complain. To document.</p>
            </div>
        </div>

        <!-- Martin Threatens to Sue — Confirms He Left the Drink -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.7)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Breaking · Martin Contacts Adam · Threatens Legal Action · Inadvertent Admission</span>
                <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-gold/40 text-gold px-1.5 py-0.5">NEW</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">MARTIN READ THE SITE.<br><span class="text-hot">THREATENED TO SUE. CONFIRMED HE LEFT THE DRINK.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Martin has read Sunlight.Quest. Having done so, he messaged Adam Watson threatening legal action — specifically over the suggestion that the drink he left outside the tent may have been poisoned.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-6">There is a problem with that threat. It is the threat itself.</p>

            <!-- The admission callout -->
            <div class="border-l-4 pl-5 mb-6" style="border-color:rgba(193,68,14,0.7);background:rgba(193,68,14,0.07);padding:1.1rem 1rem 1.1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">The Logical Trap — He Has Confirmed It Was Him</div>
                <p class="text-[0.65rem] text-paper/60 leading-relaxed mb-3">To threaten defamation proceedings over the suggestion that <em>the drink he left outside the tent</em> may have been poisoned, Martin must first accept the premise that he left the drink. A person who did not leave the drink has no standing to claim defamation over what was said about it. You cannot be defamed by a suggestion about an act you say you did not commit — because the suggestion does not refer to you.</p>
                <p class="text-[0.65rem] text-paper/60 leading-relaxed">By identifying himself as the person who left the drink — the very identity that would be required for the defamation claim to attach to him — Martin has confirmed what was published. The SMS does not deny leaving the drink. It objects to the characterisation of it.</p>
            </div>

            <!-- Two-col: what he'd need to claim vs what he confirmed -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                <div class="border p-4" style="border-color:rgba(245,234,212,0.1);background:rgba(0,0,0,0.15)">
                    <div class="text-[0.44rem] tracking-[0.15em] uppercase text-paper/30 mb-2">What a Defamation Claim Would Require Him to Assert</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start">
                            <span class="text-hot text-xs shrink-0 mt-0.5">→</span>
                            <p class="text-[0.58rem] text-paper/45 leading-relaxed">That the published statement referred to him</p>
                        </div>
                        <div class="flex gap-2 items-start">
                            <span class="text-hot text-xs shrink-0 mt-0.5">→</span>
                            <p class="text-[0.58rem] text-paper/45 leading-relaxed">That he was the person who left the drink</p>
                        </div>
                        <div class="flex gap-2 items-start">
                            <span class="text-hot text-xs shrink-0 mt-0.5">→</span>
                            <p class="text-[0.58rem] text-paper/45 leading-relaxed">That the suggestion it may have been poisoned is false and damaging to his reputation</p>
                        </div>
                    </div>
                </div>
                <div class="border p-4" style="border-color:rgba(193,68,14,0.25);background:rgba(193,68,14,0.05)">
                    <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot/70 mb-2">What His Threat Has Already Confirmed</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start">
                            <span class="text-gold text-xs shrink-0 mt-0.5">✓</span>
                            <p class="text-[0.58rem] text-paper/50 leading-relaxed">That he read the site and recognised himself as the person described</p>
                        </div>
                        <div class="flex gap-2 items-start">
                            <span class="text-gold text-xs shrink-0 mt-0.5">✓</span>
                            <p class="text-[0.58rem] text-paper/50 leading-relaxed">That he accepts he is the one who left the drink outside the tent</p>
                        </div>
                        <div class="flex gap-2 items-start">
                            <span class="text-gold text-xs shrink-0 mt-0.5">✓</span>
                            <p class="text-[0.58rem] text-paper/50 leading-relaxed">That his objection is to being suspected of poisoning it — not to having left it</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- The Streisand effect note -->
            <div class="border border-gold/25 p-5 mb-5" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-2">The Streisand Effect — In Real Time</div>
                <p class="text-[0.65rem] text-paper/50 leading-relaxed">The original reporting noted that a drink had been left outside Adam's tent and that the suggestion was raised that it may have been poisoned. The identity of who left it was already documented in context. Martin's decision to contact Adam Watson and threaten legal action over that reporting has done one thing: confirmed, via SMS, that he is the person in question, that he left the drink, and that he is sufficiently troubled by the suggestion to contact the subject of the story and threaten litigation. The message does not exonerate him. It anchors him to the act.</p>
            </div>

            <!-- Status block -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                <div class="border p-4" style="border-color:rgba(193,68,14,0.2);background:rgba(193,68,14,0.04)">
                    <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot/60 mb-2">Martin's Action</div>
                    <div class="font-display text-base text-hot mb-1">Threatened to Sue</div>
                    <p class="text-[0.55rem] text-paper/40 leading-relaxed">Via SMS to Adam Watson after reading Sunlight.Quest. Objects to the suggestion the drink may have been poisoned.</p>
                </div>
                <div class="border p-4" style="border-color:rgba(201,138,16,0.2);background:rgba(201,138,16,0.04)">
                    <div class="text-[0.44rem] tracking-[0.15em] uppercase text-gold/60 mb-2">What the SMS Confirms</div>
                    <div class="font-display text-base text-gold mb-1">He Left the Drink</div>
                    <p class="text-[0.55rem] text-paper/40 leading-relaxed">The threat only attaches if he is the person who left the drink. By making the threat he has confirmed the fact he apparently wishes to dispute.</p>
                </div>
                <div class="border p-4" style="border-color:rgba(61,122,74,0.2);background:rgba(61,122,74,0.04)">
                    <div class="text-[0.44rem] tracking-[0.15em] uppercase mb-2" style="color:rgba(61,122,74,0.7)">Adam Watson</div>
                    <div class="font-display text-base mb-1" style="color:#3d7a4a">Documented</div>
                    <p class="text-[0.55rem] text-paper/40 leading-relaxed">The SMS has been noted. The site remains published. The reporting stands.</p>
                </div>
            </div>
        </div>

        <!-- Martin Complains to Library Staff -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(124,106,170,0.6)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">New Incident · Broadbeach Library · Staff Complaint</span>
                <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-gold/40 text-gold px-1.5 py-0.5">NEW</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">MARTIN COMPLAINED TO LIBRARY STAFF.<br><span style="color:#7c6aaa">SAID ADAM IS USING THE COMPUTERS TO CREATE MISCHIEF AND RUIN PEOPLE'S LIVES.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Martin has now taken his complaints to the staff of Broadbeach Library — the same library where Adam Watson uses the computers. His complaint, relayed back to Adam: that Adam is using the library computers to <strong class="text-paper/65">create mischief and ruin people's lives.</strong></p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-6">This is the same library. This is the same Martin who located Adam's sleeping vehicle, knocked on the window, reported him to the Council Ranger, and has now threatened to sue over the published account of his own conduct. The complaint to library staff follows the same pattern: insert yourself, make a report to an authority, attempt to have someone else's access or standing reduced.</p>

            <!-- What Martin told library staff -->
            <div class="border-l-4 pl-5 mb-6" style="border-color:rgba(124,106,170,0.5);background:rgba(124,106,170,0.05);padding:1.1rem 1rem 1.1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">Martin's Complaint to Library Staff</div>
                <p class="text-[0.7rem] text-paper/65 leading-relaxed italic mb-1">"He is using the computers to create mischief and ruin people's lives."</p>
                <div class="text-[0.43rem] tracking-[0.12em] uppercase text-paper/25 mt-2">Martin · Complaint made to Broadbeach Library staff · Relayed to Adam Watson</div>
            </div>

            <!-- What Adam is actually doing -->
            <div class="border mb-6" style="border-color:rgba(124,106,170,0.2);background:rgba(124,106,170,0.03)">
                <div class="px-5 py-3 border-b" style="border-color:rgba(124,106,170,0.12)">
                    <div class="text-[0.47rem] tracking-[0.2em] uppercase" style="color:#7c6aaa">What Adam Watson Is Actually Doing at Those Computers</div>
                </div>
                <div class="px-5 py-4">
                    <p class="text-[0.65rem] text-paper/50 leading-relaxed mb-3">Adam Watson is using the library computers to publish and maintain Sunlight.Quest — an investigative journalism site documenting documented misconduct, court-entered judgments, sealed legal instruments, CCTV-confirmed council ranger tip-offs, and the conduct of people who have committed fraud, made false sexual assault allegations, and manipulated legal processes.</p>
                    <p class="text-[0.65rem] text-paper/50 leading-relaxed">That Martin characterises this as "creating mischief and ruining people's lives" is telling. The accounts published are documented. The court orders are real and publicly sealed. The irony is that Martin's own conduct — the ranger tip-off, the drink outside the tent, the legal threats — has earned him a chapter on the site he is now complaining about. The mischief, in Martin's framing, is being held accountable in writing.</p>
                </div>
            </div>

            <!-- Pattern grid -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                <div class="border p-3 text-center" style="border-color:rgba(124,106,170,0.18);background:rgba(124,106,170,0.04)">
                    <div class="text-[0.43rem] tracking-[0.12em] uppercase mb-1.5" style="color:rgba(124,106,170,0.6)">Authority 1</div>
                    <div class="text-[0.62rem] text-paper/55 leading-tight">Council Ranger<br><span class="text-paper/30 text-[0.5rem]">Reported Adam for sleeping in his car</span></div>
                </div>
                <div class="border p-3 text-center" style="border-color:rgba(124,106,170,0.18);background:rgba(124,106,170,0.04)">
                    <div class="text-[0.43rem] tracking-[0.12em] uppercase mb-1.5" style="color:rgba(124,106,170,0.6)">Authority 2</div>
                    <div class="text-[0.62rem] text-paper/55 leading-tight">Legal Threat<br><span class="text-paper/30 text-[0.5rem]">Threatened to sue over the site</span></div>
                </div>
                <div class="border p-3 text-center" style="border-color:rgba(193,68,14,0.25);background:rgba(193,68,14,0.04)">
                    <div class="text-[0.43rem] tracking-[0.12em] uppercase mb-1.5 text-hot/60">Authority 3</div>
                    <div class="text-[0.62rem] text-paper/55 leading-tight">Library Staff<br><span class="text-paper/30 text-[0.5rem]">Complained Adam is ruining lives with a computer</span></div>
                </div>
                <div class="border p-3 text-center" style="border-color:rgba(193,68,14,0.3);background:rgba(193,68,14,0.05)">
                    <div class="text-[0.43rem] tracking-[0.12em] uppercase mb-1.5 text-hot/60">Authority 4</div>
                    <div class="text-[0.62rem] text-paper/55 leading-tight">Civil Court<br><span class="text-paper/30 text-[0.5rem]">Filed suit against Adam Watson · Process served</span></div>
                </div>
            </div>
        </div>

        <!-- Martin Files Civil Suit Against Adam Watson -->
        <div id="martin-civil-suit" class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.8)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Breaking · Civil Proceedings · Process Server</span>
                <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-hot/40 text-hot px-1.5 py-0.5">FILED</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">MARTIN HAS FILED A CIVIL SUIT.<br><span class="text-hot">ADAM WATSON SERVED. THREE GROUNDS. ALL DISPUTED.</span></h3>
            <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"Martin doesn't have a case against Kosta — Kosta doesn't have anything. So he's suing Adam Watson instead. The process server has contacted Adam. The affidavit has three grounds. Adam intends to fight every one of them."</p>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Martin has filed a civil suit against Adam Watson. A process server has made contact with Adam to deliver the grounds. The strategic logic of the suit is transparent from the affidavit: Martin has assessed that Kosta Kondratenko does not have sufficient assets to make a judgment worthwhile, so the civil action is directed at Adam Watson instead — on the basis that Adam allegedly directed Kosta's conduct.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">Adam Watson is awaiting the civil proceedings. He intends to fight. The three grounds filed are addressed below.</p>

            <!-- Three grounds -->
            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-4">The Three Grounds — Martin's Affidavit</div>
                <div class="space-y-4">
                    <div class="border-l-2 border-hot/40 pl-4">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot/70 mb-1">Ground 1 — Directed Assault</div>
                        <p class="text-[0.65rem] text-paper/55 leading-relaxed mb-2">Martin alleges that Adam Watson directed Kosta Kondratenko to physically confront and assault him. Adam Watson denies this. Kosta Kondratenko denies this. The confrontation arose from Kosta's personal decision to confront someone who had been making his friend feel unsafe at the library for months — not from any instruction by Adam Watson. People act to protect their friends. That is not conspiracy. That is loyalty.</p>
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-sage/60 mt-1">DENIED — Adam Watson</div>
                    </div>
                    <div class="border-l-2 border-hot/40 pl-4">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot/70 mb-1">Ground 2 — Directed Filming</div>
                        <p class="text-[0.65rem] text-paper/55 leading-relaxed mb-2">Martin alleges that Adam Watson directed Kosta to make and publish the video of Martin that appears on Sunlight.Quest. This is denied. The filming decision was Kosta's own — documentation was undertaken as a personal act of record-keeping in response to Martin's conduct. Adam Watson did not instruct, commission, or direct the filming.</p>
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-sage/60 mt-1">DENIED — Adam Watson</div>
                    </div>
                    <div class="border-l-2 border-hot/40 pl-4">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot/70 mb-1">Ground 3 — Privacy Breach (The Drink)</div>
                        <p class="text-[0.65rem] text-paper/55 leading-relaxed mb-2">Martin alleges that Adam Watson breached his privacy by publishing the comment that the drink Martin left outside Kosta's tent may have been poisoned. As documented in the preceding section, Martin's own threat to sue over this comment inadvertently confirmed via SMS that he is the person who left the drink. The comment was Adam's direct response — a genuine warning to Kosta about a drink left by a person who had previously shown hostile intent. It is not a privacy breach to comment on an act committed against your friend.</p>
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-sage/60 mt-1">DENIED — Adam Watson</div>
                    </div>
                </div>
            </div>

            <!-- The police record -->
            <div class="border border-gold/20 p-5 mb-5" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-gold mb-3">The Police Record Martin Has Obtained</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Martin has included in his affidavit a police record obtained after attending the police station — the same station he ran to after the confrontation with Kosta, where he made the false spitting allegation. He has used the outcome of that police visit as documentary support for his civil claim.</p>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed">This is the same police visit documented on this site — where police issued Kosta a caution despite being presented with Martin's full history of conduct. The caution was self-disclosed by Kosta with full context. It does not establish that Adam Watson directed Kosta's actions. It establishes that Kosta confronted someone who had been harassing his friend. Martin obtaining that record and deploying it in civil proceedings is consistent with the broader pattern: use every institutional interaction as a weapon, regardless of the context in which it occurred.</p>
            </div>

            <!-- Adam's counter position -->
            <div class="border border-hot/30 p-5 mb-5" style="background:rgba(193,68,14,0.06)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-3">Adam Watson's Position — Stored Messages, Documented Pattern</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Adam Watson has stored every harassing and obsessive text message Martin has sent him over the course of this conduct. Multiple numbers. Repeated contact. Messages after the caution was issued — the same conduct that prompted Kosta to attend Mermaid Beach Police Station and was met with the comment "maybe don't assault people." Those messages are now part of Adam Watson's case.</p>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed">A civil suit brought by a person who has been sending harassing messages to the defendant — documented, stored, timestamped — does not present cleanly to a Court. The messages will be tendered. The full history of Martin's conduct will be placed before the Court. This is not a case about a confrontation. It is a case about a pattern that will be evidenced in full.</p>
            </div>

            <!-- Update — new legal manoeuvre: sue the company, $850k, serve by email -->
            <div class="border border-hot/30 p-5 mb-5" style="background:rgba(193,68,14,0.06)">
                <div class="flex items-center gap-2 mb-3">
                    <span class="text-[0.46rem] tracking-[0.22em] uppercase text-hot">Update — The Latest Manoeuvre</span>
                    <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-hot/50 text-hot px-1.5 py-0.5">⬤ $850,000 CLAIM</span>
                </div>
                <h4 class="font-display text-2xl tracking-wide mb-3 leading-tight">SUE THE COMPANY.<br><span class="text-hot">SERVE BY EMAIL. ASK FOR $850,000.</span></h4>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Martin's lawyers have now gone to Court seeking approval to <strong class="text-paper/65">sue Adam Watson's company</strong>, and for permission to <strong class="text-paper/65">serve the court documents on him by email</strong>. The amount claimed: <strong class="text-paper/65">$850,000</strong>.</p>
                <div class="border-l-4 border-hot/60 pl-4 py-2 mb-3" style="background:rgba(193,68,14,0.05)">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-1">The Strategy — Why Sue the Company</div>
                    <p class="text-[0.64rem] text-paper/48 leading-relaxed">Suing the company rather than Adam Watson personally is a deliberate tactic. A company cannot represent itself in Court the way an individual can — it must be represented by a lawyer. By naming the company, Martin's side forces Adam to <strong class="text-paper/60">engage and pay lawyers</strong> instead of appearing for himself, driving up his costs regardless of the merits. The pressure is financial: make the defence expensive enough that fighting it hurts.</p>
                </div>
                <p class="text-[0.66rem] text-paper/48 leading-relaxed mb-3"><strong class="text-paper/60">For the record:</strong> I — Kosta Kondratenko — deny that Adam Watson sent me to assault Martin. What happened came from my own decision to stand up for a friend who had been made to feel unsafe for months. Friends stick up for each other. That is not a conspiracy directed by anyone; it is loyalty, and I will say so plainly wherever it needs to be said.</p>
                <p class="text-[0.64rem] text-paper/45 leading-relaxed">It is also worth noting, given the reliance on the Australian courts to apply this pressure, that <strong class="text-paper/60">Martin is not an Australian citizen</strong>.</p>
            </div>

            <!-- The psychology of this — obsessed stalker pattern -->
            <div class="border border-paper/[0.08] p-6 mb-5" style="background:rgba(0,0,0,0.18)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-paper/30 mb-3">The Psychological Profile — What This Pattern Looks Like</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The civil suit is the latest instrument in a pattern that has been documented across this entire section. It is worth naming what the pattern looks like when viewed in full, because the individual incidents — each one plausible in isolation — only reveal their character when read together.</p>
                <div class="space-y-2 mb-4">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Intrusion</strong> — inserts himself into situations where he has no standing or invitation</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Intelligence gathering</strong> — cultivates relationships with security staff, extracts private information about targets, weaponises it (Pacific Fair; disability centre; library)</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Institutional deployment</strong> — every piece of gathered intelligence is routed through an authority: police, council rangers, library staff, the Courts</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Obsessive contact</strong> — continued messaging from multiple numbers after all police and civil intervention; the contact does not stop when pushed back</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Victim positioning</strong> — at every escalation, Martin presents as the harmed party: the old man being picked on, the man whose drink was mischaracterised, the person suing for justice</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Escalating litigation</strong> — when informal pressure fails, the legal system becomes the next instrument: threats, then a filed suit, then process servers</p></div>
                </div>
                <p class="text-[0.65rem] text-paper/40 leading-relaxed mb-3">This is a well-documented pattern in obsessive harassment cases. The harasser does not see themselves as a harasser — they genuinely believe they are acting in the right, responding to grievances, pursuing justice. That self-narrative makes them persistent, because they are not cynically weaponising systems — they are sincerely using them. The sincerity is what makes it dangerous. Courts see one complaint. Librarians see one complaint. Rangers see one report. None of them see the full chronology. This site is the full chronology.</p>
                <p class="text-[0.65rem] text-paper/40 leading-relaxed">The stored messages Adam Watson holds are the most direct evidence of what this looks like outside the formal complaint process: repeated, unsolicited, multi-number contact from someone the recipient has made clear they do not want to hear from. That is not how a grievance looks. That is how an obsession looks.</p>
            </div>

            <!-- Civil proceedings status -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">Status</div>
                    <div class="font-display text-base text-hot mb-1">Proceedings Pending</div>
                    <p class="text-[0.55rem] text-paper/40 leading-relaxed">Adam Watson has been served. Civil proceedings are pending. He intends to contest all three grounds.</p>
                </div>
                <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.04)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold mb-2">Adam's Evidence</div>
                    <div class="font-display text-base text-gold mb-1">Stored Messages</div>
                    <p class="text-[0.55rem] text-paper/40 leading-relaxed">Every harassing text from Martin — multiple numbers, continued after the caution — has been retained. The messages will be tendered to the Court.</p>
                </div>
                <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.14)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-2">This Site</div>
                    <div class="font-display text-base text-paper/60 mb-1">Remains Published</div>
                    <p class="text-[0.55rem] text-paper/40 leading-relaxed">The full documented record of Martin's conduct remains on this site. The civil suit does not change the facts. It adds to them.</p>
                </div>
            </div>
        </div>

        <!-- Conclusion -->
        <div class="reveal mb-6 p-6 md:p-8" style="background:rgba(124,106,170,0.07);border:1px solid rgba(124,106,170,0.2)">
            <div class="text-[0.5rem] tracking-[0.22em] uppercase mb-4" style="color:#7c6aaa">Conclusion</div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight text-paper/80">NOT EVERY INTERACTION REQUIRES YOUR INVOLVEMENT.</h3>
            <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Martin's actions across every documented incident demonstrate the same pattern: insertion without invitation, intervention without standing, and misrepresentation when confronted. The harm caused by each individual action — a coffee shop closure, a false implication, a court file requested with no right to it, a $2,000 fine engineered by reporting a homeless man for sleeping in a car while doing the same himself — might appear isolated. The pattern makes it something else.</p>
            <p class="text-[0.68rem] text-paper/48 leading-relaxed">Sometimes the most harmful actions come from those who believe they are helping. Martin has not been asked to help. He has not been given permission to insert himself into matters that do not involve him. He continues anyway. That is the record.</p>
            <div class="flex items-center gap-3 mt-5">
                <div class="w-8 h-px" style="background:rgba(124,106,170,0.4)"></div>
                <span class="text-[0.48rem] tracking-[0.18em] uppercase" style="color:#7c6aaa">Broadbeach · Gold Coast · Documented by Sunlight.Quest</span>
            </div>
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
// ── SCROLL REVEAL ──
var obs = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) { if (e.isIntersecting) e.target.classList.add('in'); });
}, { threshold: 0.08 });
document.querySelectorAll('.reveal').forEach(function(el) { obs.observe(el); });

// ── MEDIA VIEWER ──
var EVIDENCE = {
    'pdf-mof-suspension': {
        type: 'pdf',
        title: 'MOF SUSPENSION LETTER — SERVICES AUSTRALIA',
        tag: 'Mutual Obligation Failure · TCF_K269035727 · 2 August 2023',
        meta: 'PDF · Services Australia · Ref: 280 870 747X · Addressee: Konstantin Kondratenko · 1 Tumbulgum Rd, Murwillumbah NSW 2484',
        desc: 'Services Australia letter dated 2 August 2023 suspending JobSeeker Payment from 25 July 2023. Stated reason: "you did not take suitable action in relation to a job opportunity on 31 July 2023." The suspension date (25 July) predates the stated failure date (31 July) by six days — a chronological impossibility. The letter instructs the recipient to call Tursa Employment & Training on (02) 6672 6712 to discuss "the reasons you did not meet this requirement" and to have payment restarted.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tursa/MOF+suspension+letter+TCF_K269035727+(2).pdf',
        filename: 'MOF_suspension_letter_TCF_K269035727.pdf'
    },
    'image-martin-whiskey': {
        type: 'image',
        title: 'IRISH WHISKEY — LEFT OUTSIDE TENT',
        tag: 'Martin · Peace Offering · Broadbeach',
        meta: 'Photo · Broadbeach Gold Coast · After filmed confrontation',
        desc: 'A can of Irish Whiskey left outside the tent by Martin — following the filmed confrontation in which he denied knowing the tent\'s location while having previously complained about it specifically to Adam Watson. Adam warned the drink may have been poisoned.',
        src: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/pslo/irish_whiskey.jpg'
    },
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
    },
    'pdf-bemarine-lease': {
        type: 'pdf',
        title: 'GENERAL TENANCY AGREEMENT — FORM 18A — DEC 2025',
        tag: 'QCAT Q8092-26 · 505/18 Cypress Ave Surfers Paradise · All Three Tenants',
        meta: 'PDF · Form 18a · Signed December 2025 · Coastal Property Agents',
        desc: 'The Form 18a General Tenancy Agreement executed through Coastal Property Agents (Beyond Reserve Pty Ltd) for 505/18 Cypress Avenue, Surfers Paradise. Three tenants: Bemarine Yamsuan, Amruta Jadhav, and Kaustubh Rajendra Jadhav. Rent: $875/week. Bond: $3,500. Fixed term: 17 December 2025 to 1 March 2027. Lessors: Roslyn Nugan & Mark Palmer. Bemarine signed three days before the Jadhavs — she was already in position when they arrived.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/Please_Docusign_Lease_agreement_-_50518_Cyp+(1).pdf',
        filename: 'Please_Docusign_Lease_agreement_-_50518_Cyp+(1).pdf',
        pages: 4
    },
    'pdf-bemarine-bond-clarification': {
        type: 'pdf',
        title: 'CLARIFICATION REGARDING BOND — KATHERINE KIDD, 21 APRIL 2026',
        tag: 'Bond #722530939 · RTA Non-Compliance · Agency Written Admission',
        meta: 'PDF · Email from Katherine Kidd · Coastal Property Agents · 21 April 2026',
        desc: 'Written confirmation from Katherine Kidd that bond #722530939 remains in Bemarine\'s name only because Bemarine refused to sign the Change of Bond Contributors form. The email states: "The reason it is not currently in the other tenants\'s names is because Bemarine did not accept the changes submitted to the RTA at the time. But the changes were made by me and Bemarine should have signed when it was submitted." The agency stopped pursuing after one refusal. The Jadhavs\' $1,700 bond remained outside the RTA system entirely.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/clarification_regarding_bond.pdf',
        filename: 'clarification_regarding_bond.pdf',
        pages: 2
    },
    'pdf-bemarine-bond-previous': {
        type: 'pdf',
        title: 'BOND — PREVIOUS TENANT (ROCHELLE)',
        tag: 'Pattern Across Two Tenancies · Informal Bond Scheme · Rochelle',
        meta: 'PDF · Email from Kaustubh Jadhav to Adam Watson · 28 April 2026',
        desc: 'Email confirming that Rochelle — the previous tenant at 505/18 Cypress Avenue — was also never listed on the bond. Bemarine held the bond in her own name when Rochelle was the tenant, just as she did with the Jadhavs. Establishes the bond misappropriation as a deliberate pattern across at least two consecutive tenancies.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/bond_previous_tenant.pdf',
        filename: 'bond_previous_tenant.pdf',
        pages: 2
    },
    'pdf-bemarine-katherine': {
        type: 'pdf',
        title: 'BEMARINE / KATHERINE EMAIL TRAIL — HARASSMENT MESSAGES',
        tag: '"Toxic to Have You Both" · Kitchen Restrictions · Police Called',
        meta: 'PDF · WhatsApp messages and emails · Bemarine Yamsuan to Amruta Jadhav',
        desc: 'Written harassment from Bemarine Yamsuan to the Jadhavs. Includes WhatsApp: "If you can\'t manage to keep the apartment clean, it would be much better if you could find another. Its toxic to have you both." Also includes email under subject "DO NOT USE MY PERSONAL ITEMS" stating she is "not comfortable having you and seeing you both around." Kitchen access restricted to 11am–12pm. Police subsequently called — officers advised Kaustubh he could not remain if a co-tenant did not want him there.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/bemarine_katherine.pdf',
        filename: 'bemarine_katherine.pdf',
        pages: 3
    },
    'pdf-bemarine-invoice': {
        type: 'pdf',
        title: 'INVOICE #021880 — LIGHT REPLACEMENTS $588.72',
        tag: '$588.72 · Pre-Tenancy Work · Used as Exit Condition · Coastal Property Agents',
        meta: 'PDF · Tax Invoice #021880 · Dated 11 March 2026 · Due 8 April 2026',
        desc: 'Tax Invoice #021880 for $588.72 described as "Light Replacements." Issued to all three tenants. Owner withheld approval of replacement tenants until settled. Katherine Kidd confirmed in writing on 15 April 2026: "This happened before you moved in and Bemarine was the one that requested the electrician, so Bemarine and previous tenant should be the ones paying this bill." The same email asked whether the Jadhavs could arrange a payment plan.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/Invoice+%23+21880+(2).pdf',
        filename: 'Invoice # 21880 (2).pdf',
        pages: 1
    },
    'pdf-bemarine-breaklease': {
        type: 'pdf',
        title: 'BREAK LEASE APPLICATION — AMRUTA JADHAV, 22 APRIL 2026',
        tag: 'Form 13 · 25–50% Band · 3 Weeks Maximum · Bemarine Refused to Sign',
        meta: 'PDF · Amruta Jadhav to Katherine Kidd · Signed Form 13 · 22 April 2026',
        desc: 'Break lease application submitted by Amruta Jadhav on 22 April 2026. Signed Form 13 attached. Confirmed 25–50% band (maximum three weeks rent), requested 17 April as operative vacate date, raised financial stress of forced exclusion. Bemarine did not sign Form 13. The agency did not pursue Bemarine to sign.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/Breaklease+Application.pdf',
        filename: 'Breaklease Application.pdf',
        pages: 3
    },
    'pdf-bemarine-yahoo-proofs': {
        type: 'pdf',
        title: 'MORE PROOFS — KATHERINE KIDD EMAILS (FORWARDED)',
        tag: 'Agency Admission · Invoice Exculpation + Demand · Double Standard',
        meta: 'PDF · Yahoo Mail forward · Katherine Kidd email thread · April 2026',
        desc: 'Forwarded email thread in which Katherine Kidd acknowledges Invoice #021880 is not the Jadhavs\' responsibility — and in the same communication asks whether they can arrange a payment plan for it. The agency simultaneously exculpated and pursued the Jadhavs for the same pre-tenancy debt.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/Yahoo+Mail+-+Fwd_+More+proofs.pdf',
        filename: 'Yahoo Mail - Fwd More proofs.pdf',
        pages: 3
    },
    'pdf-bemarine-property-exit': {
        type: 'pdf',
        title: 'PROPERTY EXIT UPDATE — EXIT CLEAN DOCUMENTATION',
        tag: 'Exit Clean · 17 April 2026 · Photographic Record',
        meta: 'PDF · Property exit documentation · 17 April 2026',
        desc: 'Property exit documentation from 17 April 2026. Exit clean completed with photographic documentation — all belongings removed, apartment cleaned and recorded. Establishes that the Jadhavs performed their exit obligations in full.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/property_exit.pdf',
        filename: 'property_exit.pdf',
        pages: 3
    },
    'pdf-bemarine-more-emails': {
        type: 'pdf',
        title: 'MORE EMAILS — TENANCY CORRESPONDENCE',
        tag: 'Supporting Correspondence · Tenancy Dispute Period · April 2026',
        meta: 'PDF · Additional email correspondence · All parties · Dispute period',
        desc: 'Additional correspondence between the parties during the tenancy dispute period. Supporting documentation for QCAT application Q8092-26.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/more_emails.pdf',
        filename: 'more_emails.pdf',
        pages: 2
    },
    'pdf-bemarine-dispute': {
        type: 'pdf',
        title: 'TENANCY DISPUTE BRIEF — KAUSTUBH TO ADAM WATSON',
        tag: 'Full Brief · Legal Consultant Adam Watson · QCAT Q8092-26 Preparation',
        meta: 'PDF · Dispute brief · Kaustubh Jadhav to Adam Watson · April 2026',
        desc: 'Full tenancy dispute brief prepared by Kaustubh Jadhav for legal consultant Adam Watson in preparation for QCAT Q8092-26. Complete account of the bond situation, harassment, police call, invoice, break lease obstruction, and financial impact of being excluded from the property for approximately 17 weeks while continuing to pay rent.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/tenancy_dispute.pdf',
        filename: 'tenancy_dispute.pdf',
        pages: 4
    },
    'pdf-bemarine-qcat-form': {
        type: 'pdf',
        title: 'QCAT FORM 2 — APPLICATION — Q8092-26',
        tag: 'QCAT Q8092-26 · Lodged 30 April 2026 · Jadhav v Yamsuan & Coastal Property Agents',
        meta: 'PDF · Filed QCAT Form 2 · Queensland Civil and Administrative Tribunal · 30 April 2026',
        desc: 'The filed QCAT Form 2 application for Q8092-26. Applicants: Kaustubh Rajendra Jadhav and Amruta Jadhav. Respondent 1: Bemarine Yamsuan. Respondent 2: Beyond Reserve Pty Ltd T/As Coastal Property Agents. Property: 505/18 Cypress Avenue, Surfers Paradise QLD 4217. Agent: Katherine Kidd. Lessors: Roslyn Nugan & Mark Palmer. Legal consultant: Adam Watson. Claims include compensation for rent paid while locked out (~$9,000), bond return ($1,700), and costs. Lodged 30 April 2026.',
        url: 'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bemarine/print_form_qcat_form_2_complete.pdf',
        filename: 'print_form_qcat_form_2_complete.pdf',
        pages: 4
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
    if (e.key === 'Escape') { closeMV(); closeTipModal(); }
});

// ── VIDSTACK PLAYER EP3 INIT ──
(function() {
    var VTT_CONTENT = [
        'WEBVTT',
        '',
        '00:00:00.000 --> 00:03:00.000',
        'Workforce Australia',
        '',
        '00:03:00.000 --> 00:06:00.000',
        'The Question That Could Never Be Answered',
        '',
        '00:06:00.000 --> 00:09:00.000',
        'The 30-Minute Appointment',
        '',
        '00:09:00.000 --> 00:12:00.000',
        'The MSP',
        '',
        '00:12:00.000 --> 00:15:00.000',
        'AI Narrative',
        '',
        '00:15:00.000 --> 00:18:00.000',
        'LECC Complaint',
        '',
        '00:18:00.000 --> 00:22:00.000',
        'Locked Out — Jadhav',
        '',
        '00:22:00.000 --> 00:26:00.000',
        'The Busybody — Martin',
    ].join('\n');

    function initPlayerEp3() {
        var el = document.getElementById('player-ep3');
        if (!el) return;
        if (typeof el.subscribe !== 'function') {
            setTimeout(initPlayerEp3, 200);
            return;
        }
        window.vidstackPlayerEp3 = el;

        var track = document.getElementById('ep3-chapters-track');
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
                            document.querySelectorAll('[data-chap-ep3]').forEach(function(el2) {
                                var match = parseInt(el2.getAttribute('data-chap-ep3'),10) === j;
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
        document.addEventListener('DOMContentLoaded', initPlayerEp3);
    } else {
        initPlayerEp3();
    }
})();

function seekToChapterEp3(index) {
    var p = window.vidstackPlayerEp3;
    if (!p) {
        document.getElementById('player-ep3').scrollIntoView({behavior:'smooth',block:'center'});
        return;
    }
    var tracks = p.textTracks;
    var ct = null;
    for (var i = 0; i < tracks.length; i++) { if (tracks[i].kind === 'chapters') { ct = tracks[i]; break; } }
    if (ct && ct.cues && ct.cues.length > index) { p.currentTime = ct.cues[index].startTime; }
    else { var d = p.duration || 0; if (d > 0) p.currentTime = (d / 8) * index; }
    p.play().catch(function(){});
    document.getElementById('player-ep3').scrollIntoView({behavior:'smooth',block:'center'});
    document.querySelectorAll('[data-chap-ep3]').forEach(function(el) {
        var match = parseInt(el.getAttribute('data-chap-ep3'),10) === index;
        el.style.background = match ? 'rgba(201,138,16,0.1)' : '';
        el.style.borderColor = match ? 'rgba(201,138,16,0.4)' : 'transparent';
    });
}
</script>

<!-- ══════════════════════════════════════
     SUBMIT A TIP MODAL
══════════════════════════════════════ -->
<div id="sq-modal" class="sq-modal" onclick="sqModalBackdropClick(event)">
    <div class="sq-card" role="dialog" aria-modal="true" aria-labelledby="sq-modal-title">

        <!-- Header -->
        <div class="sq-header">
            <div>
                <div class="sq-wordmark">SUNLIGHT<span style="color:#c98a10">.QUEST</span></div>
                <div id="sq-modal-title" class="sq-tagline">Submit a Tip — Episode 03</div>
            </div>
            <button class="sq-close" onclick="closeTipModal()" aria-label="Close">✕</button>
        </div>

        <!-- Success state -->
        <div id="sq-success-state" style="display:none; padding:2.5rem 2rem; text-align:center;">
            <div style="font-size:2rem; margin-bottom:1rem; color:#c98a10;">✓</div>
            <div style="font-family:'Space Grotesk',sans-serif; font-size:1.1rem; color:#f5ead4; margin-bottom:0.5rem;">Tip Received</div>
            <div style="font-size:0.75rem; color:#f5ead4; opacity:0.55; line-height:1.6;">Thank you. Your submission has been logged securely. If you provided contact details, we may follow up.</div>
            <button onclick="closeTipModal()" style="margin-top:1.5rem; background:#c98a10; color:#fff; border:none; border-radius:6px; padding:0.6rem 1.6rem; font-size:0.78rem; letter-spacing:0.1em; cursor:pointer; text-transform:uppercase;">Close</button>
        </div>

        <!-- Form -->
        <div id="sq-form-body">

            <!-- Section 1: Subject -->
            <div class="sq-section">
                <div class="sq-section-label">01 — Subject</div>
                <div style="margin-bottom:0.75rem;">
                    <label class="sq-label" for="sq-subject">Who is this tip about?</label>
                    <select id="sq-subject" class="sq-input">
                        <option value="">— Select a subject —</option>
                        <option value="Tursa Employment & Training">Tursa Employment &amp; Training</option>
                        <option value="Luke Krauss">Luke Krauss</option>
                        <option value="Bemarine Yamsuan">Bemarine Yamsuan</option>
                        <option value="Tassie">Tassie (YHA Murwillumbah)</option>
                        <option value="Martin">Martin (Broadbeach)</option>
                        <option value="Raz">Raz</option>
                        <option value="Rochelle">Rochelle</option>
                        <option value="NSW Police">NSW Police</option>
                        <option value="other">Other / Multiple</option>
                    </select>
                </div>
                <div id="sq-subject-other-wrap" style="display:none; margin-bottom:0.75rem;">
                    <label class="sq-label" for="sq-subject-other">Please specify</label>
                    <input id="sq-subject-other" class="sq-input" type="text" placeholder="Name or description">
                </div>
                <div>
                    <label class="sq-label" for="sq-summary">Summary of what you know <span style="color:#c1440e">*</span></label>
                    <textarea id="sq-summary" class="sq-input" rows="4" placeholder="Describe what you witnessed, know, or have heard. Be as specific as possible — dates, locations, amounts, names."></textarea>
                </div>
            </div>

            <!-- Section 2: Evidence -->
            <div class="sq-section">
                <div class="sq-collapsible" onclick="sqToggle('sq-evidence-body', this)">
                    <span>02 — Evidence <span style="font-size:0.62rem; opacity:0.4; font-weight:400;">(optional)</span></span>
                    <span class="sq-toggle-icon">＋</span>
                </div>
                <div id="sq-evidence-body" style="display:none; padding-top:0.75rem;">
                    <div style="margin-bottom:0.75rem;">
                        <label class="sq-label">Evidence type</label>
                        <div style="display:flex; flex-wrap:wrap; gap:0.5rem;">
                            <label class="sq-pill"><input type="radio" name="sq-evidence-type" value="documents"> Documents</label>
                            <label class="sq-pill"><input type="radio" name="sq-evidence-type" value="photos"> Photos / Video</label>
                            <label class="sq-pill"><input type="radio" name="sq-evidence-type" value="recordings"> Recordings</label>
                            <label class="sq-pill"><input type="radio" name="sq-evidence-type" value="financial"> Financial records</label>
                            <label class="sq-pill"><input type="radio" name="sq-evidence-type" value="correspondence"> Correspondence</label>
                            <label class="sq-pill"><input type="radio" name="sq-evidence-type" value="other"> Other</label>
                        </div>
                    </div>
                    <div style="margin-bottom:0.75rem;">
                        <label class="sq-label" for="sq-drive-link">Shared drive link (Google Drive, Dropbox, etc.)</label>
                        <input id="sq-drive-link" class="sq-input" type="url" placeholder="https://drive.google.com/...">
                    </div>
                    <div style="margin-bottom:0.75rem;">
                        <label class="sq-label" for="sq-direct-url">Direct URL to file or page</label>
                        <input id="sq-direct-url" class="sq-input" type="url" placeholder="https://...">
                    </div>
                    <div>
                        <label class="sq-label" for="sq-evidence-desc">Describe the evidence</label>
                        <textarea id="sq-evidence-desc" class="sq-input" rows="3" placeholder="What does the evidence show? How did you obtain it?"></textarea>
                    </div>
                </div>
            </div>

            <!-- Section 3: Physical pickup -->
            <div class="sq-section">
                <div class="sq-collapsible" onclick="sqToggle('sq-pickup-body', this)">
                    <span>03 — Physical Pickup <span style="font-size:0.62rem; opacity:0.4; font-weight:400;">(optional)</span></span>
                    <span class="sq-toggle-icon">＋</span>
                </div>
                <div id="sq-pickup-body" style="display:none; padding-top:0.75rem;">
                    <div class="sq-toggle-row" style="margin-bottom:0.75rem;">
                        <span class="sq-label" style="margin-bottom:0;">I have physical documents that need to be collected</span>
                        <button id="sq-pickup-toggle" class="sq-toggle" onclick="sqTogglePickup()" aria-pressed="false">OFF</button>
                    </div>
                    <div id="sq-pickup-details" style="display:none;">
                        <div style="margin-bottom:0.75rem;">
                            <label class="sq-label" for="sq-pickup-suburb">Your suburb / area</label>
                            <input id="sq-pickup-suburb" class="sq-input" type="text" placeholder="e.g. Murwillumbah, Gold Coast">
                        </div>
                        <div style="margin-bottom:0.75rem;">
                            <label class="sq-label" for="sq-pickup-timing">Best time for pickup</label>
                            <input id="sq-pickup-timing" class="sq-input" type="text" placeholder="e.g. weekday mornings, any time">
                        </div>
                        <div>
                            <label class="sq-label" for="sq-pickup-notes">Additional notes</label>
                            <textarea id="sq-pickup-notes" class="sq-input" rows="2" placeholder="Any special instructions or access requirements"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4: Background -->
            <div class="sq-section">
                <div class="sq-collapsible" onclick="sqToggle('sq-background-body', this)">
                    <span>04 — Your Background <span style="font-size:0.62rem; opacity:0.4; font-weight:400;">(optional)</span></span>
                    <span class="sq-toggle-icon">＋</span>
                </div>
                <div id="sq-background-body" style="display:none; padding-top:0.75rem;">
                    <div style="margin-bottom:0.75rem;">
                        <label class="sq-label">Your relation to the subject</label>
                        <select id="sq-relation" class="sq-input">
                            <option value="">— Prefer not to say —</option>
                            <option value="former_associate">Former associate / colleague</option>
                            <option value="neighbour">Neighbour</option>
                            <option value="family">Family member</option>
                            <option value="victim">Direct victim</option>
                            <option value="witness">Witness</option>
                            <option value="professional">Professional (legal, financial, medical)</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="sq-toggle-row" style="margin-bottom:0.75rem;">
                        <span class="sq-label" style="margin-bottom:0;">Others can corroborate what I know</span>
                        <button id="sq-corroboration-toggle" class="sq-toggle" onclick="sqToggle2('sq-corroboration-toggle')" aria-pressed="false">NO</button>
                    </div>
                    <div class="sq-toggle-row" style="margin-bottom:0.75rem;">
                        <span class="sq-label" style="margin-bottom:0;">I have reported this to police or another authority</span>
                        <button id="sq-reported-toggle" class="sq-toggle" onclick="sqToggle2('sq-reported-toggle')" aria-pressed="false">NO</button>
                    </div>
                    <div class="sq-toggle-row" style="margin-bottom:0;">
                        <span class="sq-label" style="margin-bottom:0;">I have safety concerns about submitting this</span>
                        <button id="sq-safety-toggle" class="sq-toggle" onclick="sqToggle2('sq-safety-toggle')" aria-pressed="false">NO</button>
                    </div>
                </div>
            </div>

            <!-- Section 5: Contact -->
            <div class="sq-section" style="border-bottom:none; margin-bottom:0; padding-bottom:0;">
                <div class="sq-toggle-row" style="margin-bottom:1rem;">
                    <div>
                        <div class="sq-section-label" style="margin-bottom:0.15rem;">05 — Contact Details</div>
                        <div style="font-size:0.65rem; color:#f5ead4; opacity:0.4;">Leave blank to submit anonymously</div>
                    </div>
                    <button id="sq-anon-toggle" class="sq-toggle" onclick="sqToggleAnon()" aria-pressed="true" style="background:#c98a10; color:#fff; border-color:#c98a10;">ANON</button>
                </div>
                <div id="sq-contact-fields" style="display:none;">
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.65rem; margin-bottom:0.65rem;">
                        <div>
                            <label class="sq-label" for="sq-contact-name">Name</label>
                            <input id="sq-contact-name" class="sq-input" type="text" placeholder="Your name">
                        </div>
                        <div>
                            <label class="sq-label" for="sq-contact-phone">Phone</label>
                            <input id="sq-contact-phone" class="sq-input" type="tel" placeholder="0400 000 000">
                        </div>
                    </div>
                    <div style="margin-bottom:0.65rem;">
                        <label class="sq-label" for="sq-contact-email">Email</label>
                        <input id="sq-contact-email" class="sq-input" type="email" placeholder="your@email.com">
                    </div>
                    <div style="margin-bottom:0.65rem;">
                        <label class="sq-label">Preferred contact method</label>
                        <div style="display:flex; flex-wrap:wrap; gap:0.5rem;">
                            <label class="sq-pill"><input type="radio" name="sq-contact-pref" value="email"> Email</label>
                            <label class="sq-pill"><input type="radio" name="sq-contact-pref" value="phone"> Phone</label>
                            <label class="sq-pill"><input type="radio" name="sq-contact-pref" value="signal"> Signal</label>
                            <label class="sq-pill"><input type="radio" name="sq-contact-pref" value="no_followup"> No follow-up</label>
                        </div>
                    </div>
                    <div>
                        <label class="sq-label" for="sq-contact-notes">Notes on how to reach you safely</label>
                        <textarea id="sq-contact-notes" class="sq-input" rows="2" placeholder="e.g. Only call before 9am, use Signal not SMS"></textarea>
                    </div>
                </div>
            </div>

        </div><!-- /#sq-form-body -->

        <!-- Footer / Submit -->
        <div class="sq-footer" id="sq-form-footer">
            <div style="font-size:0.6rem; color:#f5ead4; opacity:0.35; line-height:1.5; max-width:340px;">All submissions are encrypted and handled confidentially. Anonymous tips are accepted. We do not share sources.</div>
            <button id="sq-submit-btn" onclick="sqSubmitEp3()" style="background:#c98a10; color:#fff; border:none; border-radius:6px; padding:0.65rem 1.8rem; font-size:0.75rem; letter-spacing:0.12em; text-transform:uppercase; cursor:pointer; font-family:'Space Grotesk',sans-serif; font-weight:600; white-space:nowrap;">SUBMIT TIP</button>
        </div>
        <div id="sq-error-msg" style="display:none; background:rgba(193,68,14,0.12); border:1px solid rgba(193,68,14,0.3); border-radius:6px; padding:0.6rem 0.85rem; margin-top:0.75rem; font-size:0.7rem; color:#c1440e;"></div>

    </div><!-- /.sq-card -->
</div><!-- /#sq-modal -->

<script>
function openTipModal(){
    document.getElementById('sq-modal').classList.add('open');
    document.body.style.overflow='hidden';
}
function closeTipModal(){
    document.getElementById('sq-modal').classList.remove('open');
    document.body.style.overflow='';
}
function sqModalBackdropClick(e){
    if(e.target===document.getElementById('sq-modal')) closeTipModal();
}
function sqToggle(id, btn){
    var el=document.getElementById(id);
    var icon=btn?btn.querySelector('.sq-toggle-icon'):null;
    if(el.style.display==='none'){
        el.style.display='block';
        if(icon) icon.textContent='－';
    } else {
        el.style.display='none';
        if(icon) icon.textContent='＋';
    }
}
function sqToggle2(btnId){
    var btn=document.getElementById(btnId);
    var active=btn.getAttribute('aria-pressed')==='true';
    btn.setAttribute('aria-pressed',String(!active));
    btn.textContent=active?'NO':'YES';
    btn.style.background=active?'':'#c98a10';
    btn.style.color=active?'':'#fff';
    btn.style.borderColor=active?'':'#c98a10';
}
function sqTogglePickup(){
    var btn=document.getElementById('sq-pickup-toggle');
    var active=btn.getAttribute('aria-pressed')==='true';
    btn.setAttribute('aria-pressed',String(!active));
    btn.textContent=active?'OFF':'ON';
    btn.style.background=active?'':'#c98a10';
    btn.style.color=active?'':'#fff';
    btn.style.borderColor=active?'':'#c98a10';
    document.getElementById('sq-pickup-details').style.display=active?'none':'block';
}
function sqToggleAnon(){
    var btn=document.getElementById('sq-anon-toggle');
    var active=btn.getAttribute('aria-pressed')==='true';
    btn.setAttribute('aria-pressed',String(!active));
    btn.textContent=active?'NAMED':'ANON';
    if(!active){btn.style.background='#c98a10';btn.style.color='#fff';btn.style.borderColor='#c98a10';}
    else{btn.style.background='rgba(245,234,212,0.06)';btn.style.color='rgba(245,234,212,0.35)';btn.style.borderColor='rgba(245,234,212,0.12)';}
    document.getElementById('sq-contact-fields').style.display=active?'block':'none';
}
document.getElementById('sq-subject').addEventListener('change',function(){
    document.getElementById('sq-subject-other-wrap').style.display=this.value==='other'?'block':'none';
});
async function sqSubmitEp3(){
    var summary=(document.getElementById('sq-summary').value||'').trim();
    if(!summary){
        var em=document.getElementById('sq-error-msg');
        em.textContent='Please provide a summary of what you know.';
        em.style.display='block';
        return;
    }
    document.getElementById('sq-error-msg').style.display='none';
    var btn=document.getElementById('sq-submit-btn');
    btn.disabled=true;
    btn.textContent='SENDING...';
    var isAnon=document.getElementById('sq-anon-toggle').getAttribute('aria-pressed')==='true';
    var evType='';
    var evRadio=document.querySelector('input[name="sq-evidence-type"]:checked');
    if(evRadio) evType=evRadio.value;
    var contactPref='';
    var cpRadio=document.querySelector('input[name="sq-contact-pref"]:checked');
    if(cpRadio) contactPref=cpRadio.value;
    var payload={
        subject: document.getElementById('sq-subject').value||'',
        subject_other: document.getElementById('sq-subject-other').value||'',
        summary: summary,
        evidence_type: evType,
        drive_link: document.getElementById('sq-drive-link').value||'',
        direct_url: document.getElementById('sq-direct-url').value||'',
        evidence_desc: document.getElementById('sq-evidence-desc').value||'',
        wants_pickup: document.getElementById('sq-pickup-toggle').getAttribute('aria-pressed')==='true',
        pickup_suburb: document.getElementById('sq-pickup-suburb').value||'',
        pickup_timing: document.getElementById('sq-pickup-timing').value||'',
        pickup_notes: document.getElementById('sq-pickup-notes').value||'',
        relation_to_subject: document.getElementById('sq-relation').value||'',
        has_corroboration: document.getElementById('sq-corroboration-toggle').getAttribute('aria-pressed')==='true',
        reported_before: document.getElementById('sq-reported-toggle').getAttribute('aria-pressed')==='true',
        safety_concern: document.getElementById('sq-safety-toggle').getAttribute('aria-pressed')==='true',
        consents_publish: true,
        is_anonymous: isAnon,
        contact_name: isAnon?'':(document.getElementById('sq-contact-name').value||''),
        contact_phone: isAnon?'':(document.getElementById('sq-contact-phone').value||''),
        contact_email: isAnon?'':(document.getElementById('sq-contact-email').value||''),
        contact_pref: isAnon?'':contactPref,
        contact_notes: isAnon?'':(document.getElementById('sq-contact-notes').value||''),
    };
    try {
        var res=await fetch('/api/tips',{
            method:'POST',
            headers:{'Content-Type':'application/json','Accept':'application/json'},
            body:JSON.stringify(payload)
        });
        var data=await res.json();
        if(res.ok && data.success){
            document.getElementById('sq-form-body').style.display='none';
            document.getElementById('sq-form-footer').style.display='none';
            document.getElementById('sq-success-state').style.display='block';
        } else {
            var msg=(data&&data.message)?data.message:'Submission failed. Please try again.';
            var em=document.getElementById('sq-error-msg');
            em.textContent=msg;
            em.style.display='block';
            btn.disabled=false;
            btn.textContent='SUBMIT TIP';
        }
    } catch(err) {
        var em=document.getElementById('sq-error-msg');
        em.textContent='Network error. Please check your connection and try again.';
        em.style.display='block';
        btn.disabled=false;
        btn.textContent='SUBMIT TIP';
    }
}
</script>
</body>
</html>
