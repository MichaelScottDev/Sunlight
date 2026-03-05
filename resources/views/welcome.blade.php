<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>COVERT GC — Episode 1: Gold Coast Uncovered</title>
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
                        ink:    '#080808',
                        paper:  '#f0ece2',
                        hot:    '#d63d2f',
                        dim:    '#8c2820',
                        gold:   '#e8a020',
                        sage:   '#2a9d4e',
                        violet: '#7b5ea7',
                    },
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Mono:ital,wght@0,300;0,400;0,500;1,400&family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.vidstack.io/player/theme.css"/>
    <link rel="stylesheet" href="https://cdn.vidstack.io/player/video.css"/>
    <script src="https://cdn.vidstack.io/player" type="module"></script>
    <script type="module">
        import { VidstackPlayer, VidstackPlayerLayout } from 'https://cdn.vidstack.io/player';
        window.vidstackPlayer = await VidstackPlayer.create({
            target: '#player',
            title: 'Episode 1 — Gold Coast Uncovered',
            src: 'https://files.vidstack.io/sprite-fight/720p.mp4',
            poster: 'https://files.vidstack.io/sprite-fight/poster.webp',
            thumbnails: 'https://files.vidstack.io/sprite-fight/thumbnails.vtt',
            tracks: [{src:'https://files.vidstack.io/sprite-fight/chapters.vtt',kind:'chapters',language:'en-US',default:true}],
            layout: new VidstackPlayerLayout({thumbnails:'https://files.vidstack.io/sprite-fight/thumbnails.vtt'}),
        });
    </script>
    <style>
        body::after{content:'';position:fixed;inset:0;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");pointer-events:none;z-index:9498}
        ::-webkit-scrollbar{width:3px}::-webkit-scrollbar-track{background:#080808}::-webkit-scrollbar-thumb{background:#d63d2f}
        @keyframes blink{0%,100%{opacity:1}50%{opacity:0.25}}.blink{animation:blink 2s step-end infinite}
        @keyframes fadeUp{from{opacity:0;transform:translateY(18px)}to{opacity:1;transform:translateY(0)}}.fade-up{animation:fadeUp 0.65s ease both}
        .reveal{opacity:0;transform:translateY(24px);transition:opacity 0.55s ease,transform 0.55s ease}.reveal.in{opacity:1;transform:translateY(0)}
        #case-panel{transition:transform 0.4s cubic-bezier(0.4,0,0.2,1);transform:translateX(100%)}#case-panel.open{transform:translateX(0)}
        .case-card{transition:transform 0.25s ease,box-shadow 0.25s ease}.case-card:hover{transform:translateY(-3px);box-shadow:0 16px 48px rgba(0,0,0,0.5)}
        .bar-accent{transition:transform 0.35s ease;transform:scaleX(0);transform-origin:left}.case-card:hover .bar-accent{transform:scaleX(1)}
        .bar-accent-y{transition:transform 0.35s ease;transform:scaleY(0);transform-origin:bottom}.panel-item:hover .bar-accent-y{transform:scaleY(1)}
        .scanlines{background:repeating-linear-gradient(0deg,transparent,transparent 2px,rgba(0,0,0,0.03) 2px,rgba(0,0,0,0.03) 4px);pointer-events:none}
        .ep-coming{position:relative;pointer-events:none}.ep-coming::after{content:'COMING SOON';position:absolute;inset:0;display:flex;align-items:center;justify-content:center;font-family:'Bebas Neue',sans-serif;font-size:1.3rem;letter-spacing:0.2em;color:rgba(240,236,226,0.5);background:rgba(8,8,8,0.75);backdrop-filter:blur(2px)}
        .story-chapter{border-left:2px solid rgba(240,236,226,0.08);padding-left:1.5rem;transition:border-color 0.3s ease}.story-chapter:hover{border-left-color:rgba(214,61,47,0.4)}
        .evidence-tag{display:inline-flex;align-items:center;gap:0.4rem;font-size:0.52rem;letter-spacing:0.18em;text-transform:uppercase;border:1px solid currentColor;padding:0.25rem 0.6rem;opacity:0.6;transition:opacity 0.2s}.evidence-tag:hover{opacity:1}
        .timeline-dot{width:8px;height:8px;border-radius:50%;background:#d63d2f;box-shadow:0 0 0 3px rgba(214,61,47,0.2);flex-shrink:0;margin-top:5px}
        @keyframes pulseRed{0%,100%{box-shadow:0 0 0 3px rgba(214,61,47,0.2)}50%{box-shadow:0 0 0 6px rgba(214,61,47,0.1)}}.timeline-dot.active{animation:pulseRed 2s ease infinite}
        .stat-number{font-family:'Bebas Neue',sans-serif;line-height:1}
        .doc-reveal{background:rgba(240,236,226,0.02);border:1px solid rgba(240,236,226,0.07);border-left:3px solid #d63d2f;transition:background 0.2s}.doc-reveal:hover{background:rgba(214,61,47,0.04)}

        /* ── EVIDENCE VAULT ── */
        .evidence-vault{margin-top:1.25rem;border:1px solid rgba(240,236,226,0.08);background:rgba(4,4,4,0.7)}
        .ev-header{display:flex;align-items:center;justify-content:space-between;padding:0.6rem 0.9rem;background:rgba(240,236,226,0.025);cursor:pointer;user-select:none;border-bottom:1px solid rgba(240,236,226,0.05)}
        .ev-header:hover{background:rgba(240,236,226,0.04)}
        .ev-toggle{transition:transform 0.3s;font-size:0.45rem;color:rgba(240,236,226,0.28)}
        .ev-toggle.open{transform:rotate(180deg)}
        .ev-body{overflow:hidden;max-height:0;transition:max-height 0.45s cubic-bezier(0.4,0,0.2,1)}
        .ev-body.open{max-height:3000px}
        .ev-file{display:flex;align-items:center;gap:0.65rem;padding:0.65rem 0.9rem;border-bottom:1px solid rgba(240,236,226,0.04);transition:background 0.2s;cursor:pointer;position:relative;overflow:hidden}
        .ev-file:last-child{border-bottom:none}
        .ev-file:hover{background:rgba(240,236,226,0.03)}
        .ev-file::before{content:'';position:absolute;left:0;top:0;bottom:0;width:2px;transform:scaleY(0);transform-origin:bottom;transition:transform 0.3s}
        .ev-file:hover::before{transform:scaleY(1)}
        .ef-hot::before{background:#d63d2f}.ef-gold::before{background:#e8a020}.ef-sage::before{background:#2a9d4e}.ef-violet::before{background:#7b5ea7}
        .ev-icon{width:30px;height:30px;display:flex;align-items:center;justify-content:center;border:1px solid rgba(240,236,226,0.07);font-size:0.72rem;flex-shrink:0}
        .ev-pdf{background:rgba(214,61,47,0.08);color:#d63d2f}
        .ev-audio{background:rgba(42,157,78,0.1);color:#2a9d4e}
        .ev-video{background:rgba(123,94,167,0.1);color:#7b5ea7}
        .ev-img{background:rgba(232,160,32,0.08);color:#e8a020}
        .ev-meta{flex:1;min-width:0}
        .ev-name{font-size:0.63rem;color:rgba(240,236,226,0.62);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
        .ev-desc{font-size:0.49rem;letter-spacing:0.12em;text-transform:uppercase;margin-top:0.12rem;color:rgba(240,236,226,0.22)}
        .ev-cta{font-size:0.47rem;letter-spacing:0.18em;text-transform:uppercase;opacity:0.3;transition:opacity 0.2s;white-space:nowrap;flex-shrink:0}
        .ev-file:hover .ev-cta{opacity:1}
        .redact-tag{display:inline-flex;align-items:center;gap:0.25rem;background:rgba(214,61,47,0.1);border:1px solid rgba(214,61,47,0.28);color:#d63d2f;font-size:0.44rem;letter-spacing:0.2em;text-transform:uppercase;padding:0.15rem 0.4rem;flex-shrink:0;margin-left:0.25rem}
        .audio-bars{display:flex;align-items:center;gap:1.5px;height:14px}
        .audio-bars b{display:block;width:2px;background:currentColor;border-radius:1px;animation:abars 1.3s ease infinite}
        .audio-bars b:nth-child(1){height:3px;animation-delay:0s}.audio-bars b:nth-child(2){height:9px;animation-delay:0.15s}.audio-bars b:nth-child(3){height:14px;animation-delay:0.3s}.audio-bars b:nth-child(4){height:7px;animation-delay:0.45s}.audio-bars b:nth-child(5){height:11px;animation-delay:0.2s}
        @keyframes abars{0%,100%{transform:scaleY(0.25)}50%{transform:scaleY(1)}}
        .ev-zip-bar{display:flex;align-items:center;justify-content:space-between;padding:0.6rem 0.9rem;background:rgba(232,160,32,0.04);border-top:1px solid rgba(232,160,32,0.15)}

        /* ── MEDIA VIEWER ── */
        #mv-wrap{display:none;position:fixed;inset:0;z-index:9500;background:rgba(4,4,4,0.97);backdrop-filter:blur(16px);flex-direction:column}
        #mv-wrap.active{display:flex}
        .mv-head{display:flex;align-items:center;justify-content:space-between;padding:0.9rem 1.5rem;border-bottom:1px solid rgba(240,236,226,0.06);flex-shrink:0}
        .mv-body{flex:1;display:flex;align-items:center;justify-content:center;padding:1.5rem;overflow:auto}
        .mv-foot{padding:0.65rem 1.5rem;border-top:1px solid rgba(240,236,226,0.06);display:flex;align-items:center;gap:0.75rem;flex-shrink:0;flex-wrap:wrap}
        .mv-close-btn{background:rgba(240,236,226,0.04);border:1px solid rgba(240,236,226,0.1);color:rgba(240,236,226,0.4);font-family:'DM Mono',monospace;font-size:0.6rem;letter-spacing:0.15em;text-transform:uppercase;padding:0.45rem 0.75rem;cursor:pointer;transition:all 0.2s}
        .mv-close-btn:hover{border-color:rgba(240,236,226,0.3);color:rgba(240,236,226,0.9)}
        .mv-dl-btn{display:inline-flex;align-items:center;gap:0.4rem;border:1px solid rgba(240,236,226,0.12);padding:0.45rem 0.9rem;font-size:0.52rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(240,236,226,0.4);transition:all 0.2s;cursor:pointer;background:none}
        .mv-dl-btn:hover{border-color:rgba(240,236,226,0.35);color:rgba(240,236,226,0.85)}
        .mv-dl-hot{border-color:rgba(214,61,47,0.35);color:#d63d2f}.mv-dl-hot:hover{border-color:#d63d2f;background:rgba(214,61,47,0.08)}
        .mv-dl-gold{border-color:rgba(232,160,32,0.35);color:#e8a020}.mv-dl-gold:hover{border-color:#e8a020;background:rgba(232,160,32,0.08)}
        .mv-dl-sage{border-color:rgba(42,157,78,0.35);color:#2a9d4e}.mv-dl-sage:hover{border-color:#2a9d4e;background:rgba(42,157,78,0.08)}

        /* custom audio player */
        .cap-wrap{background:rgba(240,236,226,0.025);border:1px solid rgba(240,236,226,0.07);padding:1.5rem;width:100%;max-width:560px}
        .cap-waveform{height:52px;display:flex;align-items:center;gap:1.5px;margin:1rem 0;cursor:pointer;overflow:hidden;position:relative}
        .cap-bar{flex:1;background:rgba(42,157,78,0.18);border-radius:1px;min-height:2px;transition:background 0.1s}
        .cap-bar.played{background:#2a9d4e}.cap-bar:hover{background:rgba(42,157,78,0.5)}
        .cap-controls{display:flex;align-items:center;gap:1rem}
        .cap-play{width:36px;height:36px;border:1px solid rgba(42,157,78,0.4);background:rgba(42,157,78,0.08);color:#2a9d4e;cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:0.75rem;transition:all 0.2s;flex-shrink:0}
        .cap-play:hover{background:rgba(42,157,78,0.2);border-color:#2a9d4e}
        .cap-time{font-size:0.55rem;letter-spacing:0.1em;color:rgba(240,236,226,0.3);font-family:'DM Mono',monospace}

        /* image viewer */
        .mv-img-frame{position:relative;max-width:760px;width:100%}
        .mv-img-frame img{width:100%;display:block;border:1px solid rgba(240,236,226,0.06)}
        .face-redact{position:absolute;background:rgba(4,4,4,0.93);border:1px solid rgba(214,61,47,0.35);display:flex;align-items:center;justify-content:center;flex-direction:column;gap:0.2rem}

        /* pdf placeholder */
        .pdf-ph{background:rgba(240,236,226,0.02);border:1px solid rgba(240,236,226,0.06);max-width:640px;width:100%;padding:2.5rem 2rem;text-align:center}
        .pdf-ph-pages{display:flex;gap:0.5rem;justify-content:center;margin-bottom:1.5rem}
        .pdf-ph-page{width:64px;height:82px;border:1px solid rgba(240,236,226,0.08);background:rgba(240,236,226,0.02);display:flex;flex-direction:column;gap:4px;padding:6px;border-top:3px solid rgba(214,61,47,0.4)}
        .pdf-ph-line{height:2px;background:rgba(240,236,226,0.06);border-radius:1px}
        .pdf-ph-line:first-child{background:rgba(240,236,226,0.12)}

        /* video placeholder */
        .vid-ph{background:#060606;border:1px solid rgba(240,236,226,0.07);aspect-ratio:16/9;max-width:760px;width:100%;position:relative;display:flex;align-items:center;justify-content:center;cursor:pointer;overflow:hidden}
        .vid-ph .scanlines{position:absolute;inset:0;opacity:0.5}
        .vid-ph-play{width:60px;height:60px;border:2px solid rgba(240,236,226,0.3);border-radius:50%;display:flex;align-items:center;justify-content:center;transition:all 0.3s;position:relative;z-index:2}
        .vid-ph:hover .vid-ph-play{border-color:#d63d2f;background:rgba(214,61,47,0.12)}
        .vid-ph-label{position:absolute;bottom:1rem;left:0;right:0;text-align:center;font-size:0.5rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(240,236,226,0.25);z-index:2}

        /* nav */
        .nav-dropdown{position:relative}
        .nav-dropdown-menu{display:none;position:absolute;top:calc(100% + 8px);right:0;background:rgba(8,8,8,0.97);backdrop-filter:blur(12px);border:1px solid rgba(240,236,226,0.08);min-width:220px;z-index:100;box-shadow:0 24px 48px rgba(0,0,0,0.7)}
        .nav-dropdown:hover .nav-dropdown-menu,.nav-dropdown-menu:hover{display:block}
        .nav-dropdown-menu a{display:block;padding:0.55rem 1rem;font-size:0.55rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(240,236,226,0.4);transition:color 0.2s,background 0.2s;border-bottom:1px solid rgba(240,236,226,0.04)}
        .nav-dropdown-menu a:last-child{border-bottom:none}
        .nav-dropdown-menu a:hover{color:rgba(240,236,226,0.9);background:rgba(240,236,226,0.03)}
        .nav-dropdown-menu .nav-group-label{display:block;padding:0.6rem 1rem 0.3rem;font-size:0.45rem;letter-spacing:0.25em;text-transform:uppercase;color:rgba(240,236,226,0.18);border-bottom:1px solid rgba(240,236,226,0.06);pointer-events:none}
        .nav-dropdown-menu a.nav-accent-hot:hover{color:#d63d2f}
        .nav-dropdown-menu a.nav-accent-gold:hover{color:#e8a020}
        .nav-dropdown-menu a.nav-accent-violet:hover{color:#7b5ea7}
        .nav-dropdown-menu a.nav-accent-sage:hover{color:#2a9d4e}
    </style>
</head>
<body class="bg-ink text-paper font-mono overflow-x-hidden">

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
    <div class="mv-foot" id="mv-foot">
        <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20" id="mv-meta"></span>
        <div class="flex-1"></div>
        <button class="mv-dl-btn mv-dl-gold" id="mv-dl-btn" onclick="downloadFile()">⬇ Download File</button>
        <button class="mv-close-btn" onclick="closeMV()">✕ Close</button>
    </div>
</div>

<!-- ══ NAV ══ -->
<nav class="fixed top-0 left-0 right-0 z-50 flex justify-between items-center px-5 py-3 bg-ink/95 backdrop-blur-md border-b border-paper/[0.06]">
    <div class="flex items-center gap-4">
        <a href="#" class="font-display text-2xl tracking-widest">COVERT<span class="text-hot">GC</span></a>
        <span class="hidden sm:block text-[0.52rem] tracking-[0.2em] uppercase text-paper/20 border-l border-paper/10 pl-4">Investigative Vlog Series</span>
    </div>
    <div class="flex items-center gap-3">
        <div class="nav-dropdown hidden md:block">
            <button class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors flex items-center gap-1">My Story <span class="text-[0.4rem] opacity-50">▾</span></button>
            <div class="nav-dropdown-menu">
                <span class="nav-group-label">Personal Story</span>
                <a href="#story" class="nav-accent-hot">Sandy Tulisi — Rooming House</a>
                <a href="#privacy" class="nav-accent-violet">Aquatic Centre Privacy Breach</a>
                <a href="#media" class="nav-accent-gold">Sky News — Story That Didn't Run</a>
                <a href="#assault" class="nav-accent-hot">Oracle East — Stalked & Assaulted</a>
            </div>
        </div>
        <div class="nav-dropdown hidden md:block">
            <button class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors flex items-center gap-1">Adam's Story <span class="text-[0.4rem] opacity-50">▾</span></button>
            <div class="nav-dropdown-menu">
                <span class="nav-group-label">Adam Watson</span>
                <a href="#adam" class="nav-accent-violet">Coercive Control & Surveillance</a>
                <a href="#adam" class="nav-accent-hot">Malicious Prosecution — DPP Ruling</a>
                <a href="#adam" class="nav-accent-gold">Optus Security Breach — $2,500 Bill</a>
                <span class="nav-group-label">Criminal Network</span>
                <a href="#rj" class="nav-accent-hot">RJ — 7 Incidents, Pattern of Crime</a>
                <a href="#brazen" class="nav-accent-hot">Brazen Crime — Vehicle Attack & Arson</a>
            </div>
        </div>
        <div class="nav-dropdown hidden md:block">
            <button class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors flex items-center gap-1">Public Interest <span class="text-[0.4rem] opacity-50">▾</span></button>
            <div class="nav-dropdown-menu">
                <span class="nav-group-label">Systemic Issues</span>
                <a href="#redress" class="nav-accent-sage">Redress Scheme Integrity</a>
                <a href="#redress" class="nav-accent-hot">Criminal Injuries Compensation Reform</a>
                <span class="nav-group-label">Press Freedom</span>
                <a href="#brazen" class="nav-accent-hot">Friendlyjordies & Gina Rinehart</a>
                <a href="#brazen" class="nav-accent-gold">Journalism as Provocation — The Claim</a>
            </div>
        </div>
        <div class="nav-dropdown hidden md:block">
            <button class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors flex items-center gap-1">Accountability <span class="text-[0.4rem] opacity-50">▾</span></button>
            <div class="nav-dropdown-menu">
                <span class="nav-group-label">Police Corruption</span>
                <a href="#assault" class="nav-accent-hot">"Expect to Get Bashed" Recording</a>
                <a href="#assault" class="nav-accent-hot">Task Force Latro — Active Investigation</a>
                <span class="nav-group-label">Council Accountability</span>
                <a href="#privacy" class="nav-accent-violet">Gold Coast Council — Privacy Breach</a>
                <a href="#privacy" class="nav-accent-hot">Tom Tate — Retraction Demanded</a>
                <span class="nav-group-label">Media Accountability</span>
                <a href="#media" class="nav-accent-gold">QP-9 Leak — CCC Referral</a>
            </div>
        </div>
        <a href="#episodes" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">Episodes</a>
        <a href="#sms" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">Subscribe</a>
        <button onclick="togglePanel()" class="flex items-center gap-2 border border-hot/50 hover:border-hot hover:bg-hot/10 px-3 py-2 transition-all text-[0.55rem] tracking-[0.15em] uppercase text-hot">☰ All Files</button>
        <span class="text-[0.52rem] tracking-[0.18em] uppercase text-gold border border-gold/60 px-3 py-1.5 blink">⬤ EP.01</span>
    </div>
</nav>

<!-- ══ SIDE PANEL ══ -->
<div id="case-panel" class="fixed top-0 right-0 bottom-0 z-[300] w-full sm:w-96 bg-[#0d0d0d] border-l border-paper/[0.08] overflow-y-auto flex flex-col">
    <div class="sticky top-0 bg-[#0d0d0d] border-b border-paper/[0.07] px-5 py-4 flex justify-between items-center z-10">
        <div>
            <div class="text-[0.52rem] tracking-[0.25em] uppercase text-hot mb-0.5">Episode 1 — Intelligence Dossier</div>
            <div class="font-display text-xl tracking-widest">CASE FILES</div>
        </div>
        <button onclick="togglePanel()" class="text-paper/30 hover:text-paper text-xs tracking-widest border border-paper/10 hover:border-paper/30 px-3 py-2 transition-all">✕</button>
    </div>
    <div class="flex-1 p-4 space-y-2">
        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/18 px-1 pt-3 pb-0.5">My Story — Chapters</div>
        <button onclick="document.getElementById('story').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Ch.1 — Sandy Tulisi</div><div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">Rooming House Fraud</div><div class="text-[0.62rem] text-paper/30 mt-1">68 days · 6 false notices · All charges dropped</div></div>
        </button>
        <button onclick="document.getElementById('privacy').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-violet/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-violet"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-violet mb-1">Ch.2 — Privacy Breach</div><div class="font-display text-base tracking-wide group-hover:text-violet transition-colors leading-tight">Aquatic Centre Leak</div><div class="text-[0.62rem] text-paper/30 mt-1">Photographed · Annotated · Leaked · Tate retraction</div></div>
        </button>
        <button onclick="document.getElementById('media').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-gold/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-gold"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-1">Ch.3 — Sky News</div><div class="font-display text-base tracking-wide group-hover:text-gold transition-colors leading-tight">Story That Didn't Run</div><div class="text-[0.62rem] text-paper/30 mt-1">QP-9 leak · File pull · Mental health stigma</div></div>
        </button>
        <button onclick="document.getElementById('assault').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Ch.4 — Oracle East</div><div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">Stalked & Assaulted</div><div class="text-[0.62rem] text-paper/30 mt-1">6 assailants · Police corruption recording</div></div>
        </button>
        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/18 px-1 pt-3 pb-0.5">Adam's Story</div>
        <button onclick="document.getElementById('rj').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Ch.5 — RJ</div><div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">Criminal Pattern — 7 Incidents</div></div>
        </button>
        <button onclick="document.getElementById('adam').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-violet/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-violet"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-violet mb-1">Ch.6 — Coercive Control</div><div class="font-display text-base tracking-wide group-hover:text-violet transition-colors leading-tight">When Love Becomes a Weapon</div></div>
        </button>
        <button onclick="document.getElementById('brazen').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Ch.7 — Brazen Crime</div><div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">Vehicle Attack & Arson</div></div>
        </button>
        <button onclick="document.getElementById('redress').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-sage/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-sage"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-1">Ch.8 — Public Interest</div><div class="font-display text-base tracking-wide group-hover:text-sage transition-colors leading-tight">Redress Scheme Integrity</div></div>
        </button>
        <button onclick="document.getElementById('west-kira').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Ch.A2 — West Kira</div><div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">Bodie's Accomplice</div></div>
        </button>
        <button onclick="document.getElementById('kira-kira').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Ch.S2 — Kira & Kira</div><div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">Furniture Out. Cocaine In.</div></div>
        </button>
    </div>
    <div class="p-4 border-t border-paper/[0.06]">
        <a href="#sms" onclick="togglePanel()" class="block w-full text-center bg-hot hover:bg-dim font-display tracking-widest text-paper py-3 text-sm transition-colors">GET ALERTS FOR EP.02</a>
    </div>
</div>
<div id="panel-bd" onclick="togglePanel()" style="display:none;position:fixed;inset:0;z-index:299;background:rgba(0,0,0,0.55)"></div>

<!-- ══ HERO ══ -->
<section class="relative min-h-screen flex flex-col pt-14">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1800&q=65" alt="" class="w-full h-full object-cover opacity-10"/>
        <div class="absolute inset-0 bg-gradient-to-b from-ink/50 via-ink/75 to-ink"></div>
        <div class="scanlines absolute inset-0"></div>
    </div>
    <div class="relative z-10 flex items-center justify-between px-5 md:px-10 py-3 border-b border-paper/[0.05]">
        <div class="flex items-center gap-4">
            <span class="font-display text-hot text-lg tracking-widest">EP.01</span>
            <div class="w-px h-4 bg-paper/10"></div>
            <span class="text-[0.55rem] tracking-[0.22em] uppercase text-paper/30">Season 1 — Gold Coast Uncovered</span>
        </div>
        <div class="hidden sm:flex items-center gap-3 text-[0.52rem] tracking-[0.18em] uppercase text-paper/22">
            <span>10:29</span><div class="w-px h-3 bg-paper/10"></div><span>6 Chapters</span><div class="w-px h-3 bg-paper/10"></div><span class="text-gold">Feb 2025</span>
        </div>
    </div>
    <div class="relative z-10 flex-1 grid grid-cols-1 lg:grid-cols-[1fr_360px]">
        <div class="flex flex-col justify-center px-5 md:px-10 py-8 lg:py-10">
            <div class="fade-up mb-5" style="animation-delay:0.1s">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-5 h-px bg-hot"></div>
                    <span class="text-[0.55rem] tracking-[0.28em] uppercase text-hot">Classified Briefing</span>
                    <span class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/22 border border-paper/10 px-2 py-0.5">Gold Coast Division</span>
                </div>
                <h1 class="font-display leading-[0.88] tracking-wide" style="font-size:clamp(2.8rem,7vw,5.5rem)">GOLD COAST<br><span class="text-hot">UNCOVERED</span></h1>
                <p class="font-serif italic text-paper/40 mt-3 leading-relaxed max-w-lg" style="font-size:clamp(0.9rem,2vw,1.15rem)">Organised crime, homelessness, and political corruption — who's really running the Gold Coast?</p>
            </div>
            <div class="fade-up" style="animation-delay:0.25s">
                <div class="flex items-center gap-3 mb-2"><span class="text-[0.52rem] tracking-[0.2em] uppercase text-hot/60">▶ Now Playing — Navigate via chapters below</span></div>
                <div id="player" class="w-full aspect-video border border-hot/20" style="box-shadow:0 0 80px rgba(214,61,47,0.09),0 0 0 1px rgba(240,236,226,0.025)"></div>
            </div>
        </div>
        <div class="lg:border-l border-paper/[0.06] flex flex-col" style="background:rgba(8,8,8,0.6)">
            <div class="px-6 py-6 border-b border-paper/[0.06]">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">This Episode</div>
                <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">We map intersecting worlds of bikie crime, homelessness policy failures, developer-funded councillors, and the M1 drug corridor — and ask who's holding anyone accountable.</p>
                <div class="grid grid-cols-3 gap-2 text-center">
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-hot">6</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Cases</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-gold">10</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Minutes</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-sage">GC</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Region</div></div>
                </div>
            </div>
            <div class="px-5 py-4 border-b border-paper/[0.06] flex-1 overflow-y-auto">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">Episode Chapters</div>
                <div class="space-y-0.5">
                    <div onclick="seekToChapter(0)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-hot/5 border border-transparent hover:border-hot/20 cursor-pointer transition-all group"><span class="font-display text-hot text-sm w-5 shrink-0">01</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Sandy Tulisi</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Rooming house fraud</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-hot transition-colors shrink-0">▶</span></div>
                    <div onclick="seekToChapter(1)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-violet/5 border border-transparent hover:border-violet/20 cursor-pointer transition-all group"><span class="font-display text-violet text-sm w-5 shrink-0">02</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Privacy Breach</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Aquatic centre leak</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-violet transition-colors shrink-0">▶</span></div>
                    <div onclick="seekToChapter(2)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-gold/5 border border-transparent hover:border-gold/20 cursor-pointer transition-all group"><span class="font-display text-gold text-sm w-5 shrink-0">03</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Sky News</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Story that didn't run</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-gold transition-colors shrink-0">▶</span></div>
                    <div onclick="seekToChapter(3)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-hot/5 border border-transparent hover:border-hot/20 cursor-pointer transition-all group"><span class="font-display text-hot text-sm w-5 shrink-0">04</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Oracle East</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Stalked & assaulted</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-hot transition-colors shrink-0">▶</span></div>
                    <div onclick="seekToChapter(4)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-hot/5 border border-transparent hover:border-hot/20 cursor-pointer transition-all group"><span class="font-display text-hot text-sm w-5 shrink-0">05</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">RJ — 7 Incidents</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Sex & Crime Squad</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-hot transition-colors shrink-0">▶</span></div>
                    <div onclick="seekToChapter(5)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-violet/5 border border-transparent hover:border-violet/20 cursor-pointer transition-all group"><span class="font-display text-violet text-sm w-5 shrink-0">06</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Adam's Story</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Coercive control & DPP</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-violet transition-colors shrink-0">▶</span></div>
                </div>
            </div>
            <div class="px-5 py-5">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold blink mb-2">Episode 2 Dropping Soon</div>
                <a href="#sms" class="block w-full text-center bg-hot hover:bg-dim font-display tracking-widest text-paper py-3 text-sm transition-colors">GET NOTIFIED</a>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     SANDY TULISI / MY STORY SECTION
══════════════════════════════════════ -->
<section id="story" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(214,61,47,0.03) 0%,transparent 40%)">
    <div class="max-w-6xl mx-auto">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">The Origin Story — Episode 1</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">HOW I BECAME<br><span class="text-hot">HOMELESS</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-lg leading-relaxed">on the Gold Coast, and what happened when I fought back.</p>
            </div>
            <div class="max-w-xs">
                <p class="text-[0.65rem] leading-relaxed text-paper/30 mb-3">This is not a fictional case study. This happened to me. The documents are real. The charges were real. The outcome was real.</p>
                <div class="flex gap-2 flex-wrap">
                    <span class="evidence-tag text-hot" style="color:#d63d2f">📄 Documents Verified</span>
                    <span class="evidence-tag text-gold" style="color:#e8a020">⚖ Charges Dropped</span>
                </div>
            </div>
        </div>

        <!-- Stats bar -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-14 reveal">
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-5xl text-hot mb-1">68</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Days bond held</div><div class="text-[0.5rem] text-paper/18 mt-1">Legal limit: 10</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-5xl text-gold mb-1">6</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">False rent notices</div><div class="text-[0.5rem] text-paper/18 mt-1">All payments on time</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-5xl text-paper/60 mb-1">$20</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Fine for a cup</div><div class="text-[0.5rem] text-paper/18 mt-1">Tax invoiced. Seriously.</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-5xl text-sage mb-1">0</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Charges upheld</div><div class="text-[0.5rem] text-paper/18 mt-1">All dropped</div></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[280px_1fr] gap-8 lg:gap-16">

            <!-- Left nav -->
            <div class="hidden lg:block">
                <div class="sticky top-24 space-y-1">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/20 mb-4">Episode 1 — Chapters</div>
                    <a href="#story" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot active"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Sandy Tulisi</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Rooming house fraud</div></div></a>
                    <a href="#privacy" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot" style="background:#7b5ea7;box-shadow:0 0 0 3px rgba(123,94,167,0.2)"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Privacy Breach</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Aquatic centre leak</div></div></a>
                    <a href="#media" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot" style="background:#e8a020;box-shadow:0 0 0 3px rgba(232,160,32,0.2)"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Sky News</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Story that didn't run</div></div></a>
                    <a href="#assault" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Oracle East</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Stalked & assaulted</div></div></a>
                    <a href="#rj" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">RJ — 7 Incidents</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Sex & Crime Squad</div></div></a>
                    <a href="#adam" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot" style="background:#7b5ea7;box-shadow:0 0 0 3px rgba(123,94,167,0.2)"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Adam's Story</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Coercive control & DPP</div></div></a>
                    <a href="#brazen" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Brazen Crime</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Vehicle attack & arson</div></div></a>
                    <a href="#redress" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot" style="background:#2a9d4e;box-shadow:0 0 0 3px rgba(42,157,78,0.2)"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Redress Scheme</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Verification gap & fraud</div></div></a>
                </div>
            </div>

            <!-- Story chapters -->
            <div class="space-y-16">

                <!-- Chapter 1: The Room -->
                <div id="s-ch1" class="story-chapter reveal">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter 01</span><span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Rental Crisis</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE GOLD COAST DREAM<br><span class="text-hot">AND THE REALITY</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">"The Gold Coast looks like a dream. That's the whole point of it. What nobody tells you is that behind that strip — literally around the corner — there are people sleeping rough, rooming houses packed with 100 tenants, and landlords who've figured out the rules don't really apply to them if they're clever about it."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">In August 2023 I was looking for a room in Surfers Paradise. Rent: $290 a week. Fixed term. A rooming accommodation agreement, Form R18 — signed and moved in August 18th. The landlord was Sandy Tulisi, operating under the name BeHome — also registered with the RTA as SOLAC HOUSE.</p>

                    <!-- EVIDENCE VAULT: Sandy Tulisi -->
                    <div class="evidence-vault">
                        <div class="ev-header" onclick="toggleVault(this)">
                            <div class="flex items-center gap-2">
                                <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Sandy Tulisi · Rooming House</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">3 files</span>
                                <span class="ev-toggle">▼</span>
                            </div>
                        </div>
                        <div class="ev-body">
                            <!-- File 1: Photo -->
                            <div class="ev-file ef-gold" onclick="openMV('image','THE CUP PHOTO','Photograph taken at Sandy Tulisi\'s rooming house — allegedly a breach of house rules','Photo captured contemporaneously · Original file · Identifiers retained','sandy_cup_photo.jpg','I did not fail to wash the cup. This photo — taken without my knowledge — was used to justify a $20 tax invoice. It was later omitted from the formal bond deduction statement, suggesting even Sandy Tulisi knew it was indefensible.','image-cup')">
                                <div class="ev-icon ev-img">📷</div>
                                <div class="ev-meta">
                                    <div class="ev-name">sandy_cup_photo.jpg</div>
                                    <div class="ev-desc">Image · The cup that triggered a $20 tax invoice</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <!-- File 2: Notice to Leave PDF -->
                            <div class="ev-file ef-hot" onclick="openMV('pdf','NOTICE TO LEAVE — RTA','Queensland RTA notice citing serious breach, issued on false premises','PDF Document · Official RTA Form · Issued Oct 2023','rta_notice_to_leave.pdf','This Notice to Leave was built on the false breach notices — six emails claiming rent was overdue when it was not. It was presented to police to justify applying a Police Banning Notice (No. 385003) in a civil tenancy dispute. All charges arising from it were dropped.','pdf-ntl')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">rta_notice_to_leave.pdf</div>
                                    <div class="ev-desc">PDF · Notice to Leave — issued on false breach notices</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <!-- File 3: Court transcript -->
                            <div class="ev-file ef-sage" onclick="openMV('pdf','COURT TRANSCRIPT','Transcript from proceedings — charge: Contravene Banning Notice No. 385003','PDF Document · Court Transcript · Redacted for privacy','court_transcript.pdf','The charge was taken on pro bono by a senior Australian lawyer. At court it was confirmed the Notice to Leave was issued on false grounds. All charges were subsequently dropped in full. No conviction. No penalty.','pdf-court')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">court_transcript.pdf</div>
                                    <div class="ev-desc">PDF · Court proceedings · Contravene Banning Notice · Charges dropped</div>
                                </div>
                                <span class="redact-tag">⬛ Names redacted</span>
                                <span class="ev-cta ml-2">View →</span>
                            </div>
                            <!-- ZIP Download -->
                            <div class="ev-zip-bar">
                                <span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">Download all 3 files as a bundle</span>
                                <button class="mv-dl-btn mv-dl-gold text-[0.48rem]" onclick="downloadZip('sandy_tulisi_evidence.zip')">⬇ ZIP Bundle</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chapter 2-5 condensed but with evidence vaults -->
                <div id="s-ch2" class="story-chapter reveal" style="transition-delay:0.1s">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Chapter 02</span><span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Regulatory Failure</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">SANDY TULISI.<br><span class="text-gold">OR SANDY PARK. DEPENDS WHO'S ASKING.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">"To the RTA, the property is registered as SOLAC HOUSE under Sandy Tulisi. But if you Google it, you find BeHome. Same address. Different name. The dual identity created deliberate legal ambiguity."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Bond number 714284215 was confirmed by the RTA on October 25, 2023 — 68 days after move-in. Legal requirement: 10 days. At a property with capacity for up to 100 tenants, if this delay was systematic, hundreds of bonds may have been held without proper protection.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div class="doc-reveal p-4 cursor-pointer" onclick="openMV('pdf','RTA BOND CONFIRMATION','Official RTA bond lodgement confirmation — 68 days after move-in','RTA Document · Ref: Bond 714284215','rta_notice_to_leave.pdf','Legal requirement: 10 business days. Actual: 68 days. Filed following tenant inquiry about legal violations — suggesting reactive, not routine compliance.','pdf-bond')">
                            <div class="text-[0.5rem] tracking-[0.18em] uppercase text-gold mb-1">Bond Confirmation — 68-day delay</div>
                            <div class="text-[0.68rem] text-paper/60">RTA confirmation dated Oct 25, 2023. Bond: $580. Legal limit: 10 days.</div>
                            <div class="text-[0.52rem] text-gold/40 mt-2">View Document →</div>
                        </div>
                        <div class="border border-paper/[0.07] p-4">
                            <div class="text-[0.5rem] tracking-[0.18em] uppercase text-gold mb-2">Scale of Non-Compliance</div>
                            <div class="text-[0.68rem] text-paper/60 leading-relaxed">Property capacity: <span class="text-gold">up to 100 tenants</span>. If the bond delay was systematic, hundreds of bonds may have sat unprotected outside the RTA scheme.</div>
                        </div>
                    </div>
                </div>

                <div id="s-ch3" class="story-chapter reveal" style="transition-delay:0.15s">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter 03</span><span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Tenant Harassment</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">A FINE FOR A CUP.<br><span class="text-hot">SIX FALSE RENT NOTICES.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">"I get a fine. For a cup. Not trashing the room. A cup that I washed but didn't put away immediately. Twenty dollars. From Appel Street Pty Ltd. Tax invoice and everything."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Between September and October 2023 I received six emails falsely claiming rent was overdue. Bank records confirm every payment was made on time. An SMS from Sandy's personal mobile (0411 752 285) then threatened eviction based on a fabricated 13-day arrear.</p>
                    <div class="border border-paper/[0.07] p-5 mb-4">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-4">Harassment Timeline — Sep/Oct 2023</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">18 Sep</span><span class="text-[0.65rem] text-paper/45">Email: rent claimed overdue. Rent was paid.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">23 Sep</span><span class="text-[0.65rem] text-paper/45">Email: rent claimed overdue again. Rent was paid.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">7 Oct</span><span class="text-[0.65rem] text-paper/45">Email: overdue notice. Rent was paid.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">14 Oct</span><span class="text-[0.65rem] text-paper/45">Email: overdue notice. Rent was paid.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">22 Oct</span><span class="text-[0.65rem] text-paper/45">Tax invoice issued: $20 fine — "Cup left." Issued by Appel Street Pty Ltd.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">23 Oct</span><span class="text-[0.65rem] text-paper/45">SMS: 13-day arrear claimed. Eviction threatened. Rent was paid.</span></div>
                        </div>
                    </div>
                </div>

                <div id="s-ch4" class="story-chapter reveal" style="transition-delay:0.2s">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter 04</span><span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Unlawful Eviction</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">POLICE AT THE DOOR.<br><span class="text-hot">NOWHERE TO SLEEP.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">"They called the police. And they showed them an eviction notice. An invalid one. Built on the fake breach notices. A Police Banning Notice — No. 385003 — was applied. The kind designed for alcohol and drug incidents at licensed venues."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">I was arrested. Charged with Contravening a Banning Notice. My belongings were removed. I was evicted without due process. I was homeless that night.</p>
                </div>

                <div id="s-ch5" class="story-chapter reveal" style="transition-delay:0.25s;border-left-color:rgba(232,160,32,0.3)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Chapter 05</span><span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Legal Outcome</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE LAWYER.<br><span class="text-gold">CHARGES DROPPED.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">"He's a lawyer. Not a community legal centre lawyer. He took my case pro bono. The Contravene Banning Notice charge was subsequently dropped in full."</p>
                    <div class="border border-sage/30 bg-sage/[0.04] p-6 mb-5">
                        <div class="flex items-start gap-4"><div class="font-display text-6xl text-sage/30 leading-none">✓</div><div><div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-2">Legal Outcome</div><div class="font-display text-2xl tracking-wide text-sage mb-2">ALL CHARGES DROPPED</div><p class="text-[0.68rem] text-paper/40 leading-relaxed">Contravene Banning Notice charge — fully resolved. No conviction. No penalty.</p></div></div>
                    </div>
                </div>

                <div id="s-ch6" class="story-chapter reveal" style="transition-delay:0.3s;border-left-color:rgba(214,61,47,0.3)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter 06</span><span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Systemic Injustice</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE REGISTRAR'S MISTAKE.<br><span class="text-hot">INJUSTICE GOES FREE.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">"I sent a detailed legal email to Southport Court Registry explaining why Form 21 was the correct subpoena form. Their response was to stamp Form 10 anyway. A judge later said they should never have done that. By then it was too late. The landlords walked free."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">To call witnesses — particularly Sandy Tulisi and Chris Park — I needed subpoenas issued by the court. The Justices Act 1886, Section 78 states that only a justice can issue a summons (Form 10) if a witness will provide material evidence. I am not a justice. The Criminal Practice Rules 1999, Rule 29 explicitly permits parties like myself to issue subpoenas using Form 21. I sent this legal analysis to the Southport Court Registry in writing.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The Registry's response was to suggest I use Form 10 anyway. Adam complied, got it stamped, and had it served on Sandy Tulisi. At trial, the Judge explicitly stated that the Registrar should never have stamped that form — it was procedurally improper.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Result: No bench warrant was issued when Sandy didn't appear. Chris Park never took the stand. The two key witnesses against the landlords were absent from the courtroom. I won the case — the charges were dropped — but the landlords faced no accountability because the court's own official failed to follow proper procedure.</p>

                    <!-- EVIDENCE VAULT: Systemic Injustice -->
                    <div class="evidence-vault">
                        <div class="ev-header" onclick="toggleVault(this)">
                            <div class="flex items-center gap-2">
                                <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Subpoena Procedural Failure · Systemic Injustice</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">4 files</span>
                                <span class="ev-toggle">▼</span>
                            </div>
                        </div>
                        <div class="ev-body">
                            <!-- Email to Registry -->
                            <div class="ev-file ef-hot" onclick="openMV('pdf','EMAIL TO SOUTHPORT COURT REGISTRY','Legal analysis of Forms 10 vs 21 — Justices Act 1886 s.78 vs Criminal Practice Rules 1999 r.29','PDF · Correspondence · Legal references included','email_registry_form_analysis.pdf','This email to the Southport Court Registry provides detailed legal analysis explaining that Form 10 (Summons by Justice) was not applicable to my situation as I am not a justice, and that Form 21 (Party-issued Subpoena) was the correct form under Criminal Practice Rules 1999, Rule 29. The email includes direct references to the relevant legislation. The Registry ignored this advice and recommended Form 10 anyway.','pdf-email-registry')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">email_southport_registry_form_analysis.pdf</div>
                                    <div class="ev-desc">PDF · Email to Court Registry · Form 10 vs Form 21 legal analysis</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <!-- Form 10 Summons -->
                            <div class="ev-file ef-hot" onclick="openMV('pdf','FORM 10 — SUMMONS STAMPED & SERVED','Stamped by Southport Court Registry — served on Sandy Tulisi — improper form per Judge','PDF · Stamped official form · Served October 2023','form10_summons_stamped_served.pdf','This is Form 10 (Summons of a Witness) that was stamped by the Southport Court Registry despite my prior legal correspondence explaining it was the wrong form. It was served on Sandy Tulisi. At trial, the Judge explicitly stated the Registrar should never have stamped this form. The procedural impropriety meant no bench warrant could be issued when Sandy failed to appear.','pdf-form10')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">form10_summons_stamped_served.pdf</div>
                                    <div class="ev-desc">PDF · Form 10 — Stamped & served · Procedurally improper per Judge</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <!-- Form 21 Subpoena -->
                            <div class="ev-file ef-sage" onclick="openMV('pdf','FORM 21 — CORRECT SUBPOENA FORM','The correct form under Criminal Practice Rules 1999, Rule 29 — demonstrates proper procedure','PDF · Reference form · CPR 1999 r.29','form21_correct_subpoena_form.pdf','This is Form 21 (Subpoena / Subpoena to Produce) — the form that should have been used. Criminal Practice Rules 1999, Rule 29 explicitly permits parties (including the accused or respondent) to issue subpoenas in this form, and authorizes the court registrar to issue them. The Southport Court Registry rejected this proper form in favour of the improper Form 10.','pdf-form21')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">form21_correct_subpoena_form.pdf</div>
                                    <div class="ev-desc">PDF · Form 21 — Correct form per CPR 1999 r.29 — Party-issued subpoena</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <!-- Court Transcript -->
                            <div class="ev-file ef-hot" onclick="openMV('pdf','COURT TRANSCRIPT — JUDGE\'S RULING','Transcript excerpt — Judge states Registrar should never have stamped Form 10','PDF · Court proceedings · Redacted for privacy','court_transcript_subpoena_ruling.pdf','This transcript extract from the hearing documents the Judge\'s explicit statement that the Southport Court Registrar should never have stamped Form 10. The improper procedure meant that when Sandy Tulisi failed to appear, no bench warrant could be issued, and the key witness was absent from proceedings. This procedural failure ensured the landlords faced no accountability despite my case succeeding.','pdf-transcript-subpoena')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">court_transcript_judge_subpoena_ruling.pdf</div>
                                    <div class="ev-desc">PDF · Court transcript — Judge rules on improper Form 10</div>
                                </div>
                                <span class="redact-tag">⬛ Redacted</span>
                                <span class="ev-cta ml-2">View →</span>
                            </div>
                            <div class="ev-zip-bar">
                                <span class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/25">Download all files — Evidence of systemic procedural failure</span>
                                <button class="mv-dl-btn mv-dl-hot text-[0.48rem]" onclick="downloadZip('systemic_injustice_subpoena_failure.zip')">⬇ ZIP Bundle</button>
                            </div>
                        </div>
                    </div>

                    <!-- THE SYSTEMIC PROBLEM -->
                    <div class="mt-8 border-l-4 pl-6" style="border-color:rgba(214,61,47,0.4);background:rgba(214,61,47,0.04);padding:1.5rem">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">The Systemic Issue</div>
                        <h4 class="font-display text-xl tracking-wide text-hot mb-4">When Court Officials Make Mistakes, Who Pays the Price?</h4>
                        <p class="text-[0.68rem] leading-relaxed text-paper/40 mb-4">A court registrar — a government official — gave incorrect legal advice and stamped an improper form. This wasn't disputed. The Judge confirmed it was wrong. But the consequence fell entirely on the victims of the original wrong (me, the person evicted; potentially Sandy and Chris who might have testified). The landlord — the party who created this entire chain of events through illegal conduct — walked away without facing the witnesses who could hold them accountable.</p>
                        <p class="text-[0.68rem] leading-relaxed text-paper/40 mb-4">This is systemic injustice. Not through malice, but through procedural indifference. The court system protected its own mistake by allowing the substantive outcome to be determined by a technicality that protected the wrongdoer.</p>
                        <p class="text-[0.68rem] leading-relaxed text-paper/40">I am now publishing this evidence formally to establish a record: When court officials make procedural errors that prevent victims from presenting evidence, those errors should not result in the wrongdoer going free. Accountability requires that official mistakes don't become escape routes for the actual criminals.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     POLICE CORRUPTION / ORACLE EAST + AQUATIC CENTRE
══════════════════════════════════════ -->
<section id="assault" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(214,61,47,0.05) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Police Accountability — Episode 1</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">ORACLE EAST.<br><span class="text-hot">STALKED & ASSAULTED.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">Six assailants. A police corruption recording. A comment that triggered an investigation. An aquatic centre that photographed and monitored me. All connected.</p>
            </div>
            <div class="max-w-xs">
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag text-hot" style="color:#d63d2f">🎙 Audio Evidence</span>
                    <span class="evidence-tag text-gold" style="color:#e8a020">📷 Photo Evidence</span>
                    <span class="evidence-tag" style="color:rgba(240,236,226,0.4)">🎬 Video Evidence</span>
                </div>
            </div>
        </div>

        <div class="max-w-3xl mb-14 reveal">
            <p class="font-serif italic text-paper/60 leading-relaxed mb-5" style="font-size:clamp(1rem,2.2vw,1.2rem)">"I was stalked from Broadbeach North tram stop. Six people. One of them was someone I had never spoken to, connected to RJ, attacking me specifically because of the video I'd made. What I didn't know at the time was that during the police interview afterwards, an officer told my attacker that a content creator should expect to get bashed."</p>
        </div>

        <div class="space-y-14">

            <!-- Police Corruption Recording -->
            <div class="story-chapter reveal" style="border-left-color:rgba(214,61,47,0.3)">
                <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Police Corruption</span></div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">"EXPECT TO GET BASHED"<br><span class="text-hot">— RECORDED. CONFIRMED.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"A police officer, during the interview of one of my attackers, told him on record that a content creator who makes videos about people should expect to be physically attacked. That comment was captured. It has been referred to the Premier of Queensland and the Attorney General Deb Frecklington."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The recording came from within RJ's circle — a confirmation that this network has grown so confident in its impunity that basic operational security has stopped mattering to them. The comment is now the centrepiece of an active police corruption investigation (Task Force Latro).</p>

                <!-- EVIDENCE VAULT: Police Corruption -->
                <div class="evidence-vault">
                    <div class="ev-header" onclick="toggleVault(this)">
                        <div class="flex items-center gap-2">
                            <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Police Corruption · Oracle East</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">4 files</span>
                            <span class="ev-toggle">▼</span>
                        </div>
                    </div>
                    <div class="ev-body">
                        <!-- Audio: Police recording -->
                        <div class="ev-file ef-sage" onclick="openMV('audio','POLICE INTERVIEW RECORDING','Officer stating content creator should expect to be bashed — REDACTED','Audio · Queensland Police Interview · Identifying details filtered','police_corruption_audio_REDACTED.wav','This recording was captured during the police interview of one of my attackers following the Oracle East assault. The officer\'s comment has been provided to the Premier\'s office and Attorney General Deb Frecklington. It is central to the active Task Force Latro corruption investigation. Names and identifying details have been filtered from this release.','audio-police')">
                            <div class="ev-icon ev-audio"><div class="audio-bars"><b></b><b></b><b></b><b></b><b></b></div></div>
                            <div class="ev-meta">
                                <div class="ev-name">police_corruption_recording_REDACTED.wav</div>
                                <div class="ev-desc">Audio · Police interview · "Expect to get bashed" comment</div>
                            </div>
                            <span class="redact-tag">⬛ REDACTED</span>
                            <span class="ev-cta ml-2">Listen →</span>
                        </div>
                        <!-- Council Letter 1 -->
                        <div class="ev-file ef-violet" onclick="openMV('pdf','COUNCIL LETTER 1 — COMPLAINT ACKNOWLEDGED','City of Gold Coast Chief Risk and Audit Office — Ref: Lawmaster 1192 — Dec 16, 2024','PDF · Official Council Correspondence · Signed: Julie Schyf','council_letter_1_complaint_acknowledged.pdf','The council formally acknowledged receipt of the privacy complaint on 16 December 2024 and confirmed it was being investigated by the Chief Risk and Audit Office. The 45-business-day window under the Information Privacy Act 2009 begins from this date.','pdf-cl1')">
                            <div class="ev-icon ev-pdf">PDF</div>
                            <div class="ev-meta">
                                <div class="ev-name">council_letter_1_complaint_acknowledged.pdf</div>
                                <div class="ev-desc">PDF · Council acknowledges privacy complaint · Ref: Lawmaster 1192 · 16 Dec 2024</div>
                            </div>
                            <span class="ev-cta">View →</span>
                        </div>
                        <!-- Council Letter 2 -->
                        <div class="ev-file ef-hot" onclick="openMV('pdf','COUNCIL LETTER 2 — INVESTIGATION DISCONTINUED','City of Gold Coast drops its own investigation — onus placed on complainant','PDF · Official Council Correspondence · For the CEO','council_letter_2_investigation_discontinued.pdf','The council discontinued its own investigation, citing failure to receive further information from the complainant. The evidence needed to investigate — the photograph, the annotation, the staff member\'s identity — was entirely within the council\'s own systems. This discontinuation required Premier Crisafulli\'s intervention to reverse. Staff were subsequently terminated.','pdf-cl2')">
                            <div class="ev-icon ev-pdf">PDF</div>
                            <div class="ev-meta">
                                <div class="ev-name">council_letter_2_investigation_discontinued.pdf</div>
                                <div class="ev-desc">PDF · Council drops investigation · Onus placed on victim</div>
                            </div>
                            <span class="ev-cta">View →</span>
                        </div>
                        <!-- Aquatic Centre Photo (placeholder) -->
                        <div class="ev-file ef-gold" onclick="openMV('image','AQUATIC CENTRE SURVEILLANCE PHOTO','Photo taken of Kosta Kondratenko by council staff — annotated with monitoring note — distributed with derogatory comment','Image · Southport Aquatic Centre · Dec 2024 · Original retained by investigators','aquatic_centre_photo_placeholder.jpg','This photograph was taken by a Gold Coast Aquatic Centre staff member without my consent. It was annotated with the note: &quot;Monitor This One. Comes in for shower. Been asked not to use gym.&quot; It was then sent to a member of the public — a photographer I had employed — with the comment &quot;Look at these shit cunts.&quot; A formal privacy complaint was filed. The Premier issued a Show Cause notice. Staff were terminated.','image-aquatic')">
                            <div class="ev-icon ev-img">📷</div>
                            <div class="ev-meta">
                                <div class="ev-name">aquatic_centre_surveillance_photo.jpg</div>
                                <div class="ev-desc">Image · Council staff surveillance photo — annotated & distributed · Privacy breach</div>
                            </div>
                            <span class="redact-tag">⬛ PLACEHOLDER</span>
                            <span class="ev-cta ml-2">View →</span>
                        </div>
                        <!-- Oracle East video (placeholder) -->
                        <div class="ev-file ef-violet" onclick="openMV('video','ORACLE EAST — ASSAULT FOOTAGE','Video of the Oracle East attack — Kosta Kondratenko stalked from Broadbeach North tram stop — 6 assailants','Video · Pending release · Identifiers to be filtered','oracle_east_assault_PENDING.mp4','This footage documents the assault at Oracle East. The attacker is connected to RJ\'s network. The attack was carried out specifically in retaliation for video content published about this network. The footage is pending formal release pending legal advice. A redacted version will be published here.','video-oracle')">
                            <div class="ev-icon ev-video">▶</div>
                            <div class="ev-meta">
                                <div class="ev-name">oracle_east_assault_footage_PENDING.mp4</div>
                                <div class="ev-desc">Video · Oracle East assault · 6 assailants · Pending redacted release</div>
                            </div>
                            <span class="redact-tag">⬛ PENDING</span>
                            <span class="ev-cta ml-2">Preview →</span>
                        </div>
                        <div class="ev-zip-bar">
                            <span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">Download council letters + audio (redacted)</span>
                            <button class="mv-dl-btn mv-dl-gold text-[0.48rem]" onclick="downloadZip('police_accountability_files.zip')">⬇ ZIP Bundle</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     SKY NEWS SECTION
══════════════════════════════════════ -->
<section id="media" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(232,160,32,0.03) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-gold"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-gold">Media Accountability — Episode 1</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">THE STORY<br><span class="text-gold">THAT DIDN'T RUN.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">A Sky News journalist arranged an interview about homelessness on the Gold Coast. Then she pulled my criminal history. Then a charge sheet that could only have come from police appeared to be in circulation.</p>
            </div>
            <div class="max-w-xs">
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag text-gold" style="color:#e8a020">📺 Sky News</span>
                    <span class="evidence-tag text-hot" style="color:#d63d2f">⚠ QP-9 Disclosure</span>
                </div>
            </div>
        </div>

        <div class="max-w-3xl mb-14 reveal">
            <p class="font-serif italic text-paper/60 leading-relaxed mb-5" style="font-size:clamp(1rem,2.2vw,1.2rem)">"I gave a Sky News journalist a brief on what I'd found — the homelessness services gap on the Gold Coast, the 7 Care Connect posters in the bathroom at Nerang Street. She interviewed me. And then instead of covering the story, she pulled my file."</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[1fr_300px] gap-12">
            <div class="space-y-10">

                <div class="story-chapter reveal" style="border-left-color:rgba(232,160,32,0.3)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">The Leak</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE EMAIL TO HANCOCK PROSPECTING.<br><span class="text-gold">AND MY CHARGE SHEET.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"A QP-9 is a Queensland Police charge sheet. It is not a public document. If a journalist has one, someone in Queensland Police gave it to them. That is an unauthorised disclosure of personal information. CovertGC has referred this to the CCC."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The email thread from the Sky News reporter — sent to Hancock Prospecting with my QP-9 attached — documents both the illegal disclosure of a police charge document and the framing of a homeless journalism source as unreliable based on a dropped charge. The Kangaroo Point McDonald's Public Nuisance charge was dropped by the DPP at first mention. A dropped charge is not a conviction.</p>

                    <!-- EVIDENCE VAULT: Sky News -->
                    <div class="evidence-vault">
                        <div class="ev-header" onclick="toggleVault(this)">
                            <div class="flex items-center gap-2">
                                <span class="text-[0.48rem] tracking-[0.22em] uppercase text-gold">📁 Evidence Files</span>
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Sky News · QP-9 Disclosure</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span>
                                <span class="ev-toggle">▼</span>
                            </div>
                        </div>
                        <div class="ev-body">
                            <div class="ev-file ef-gold" onclick="openMV('pdf','SKY NEWS EMAIL THREAD + QP-9','Email from Sky News journalist to Hancock Prospecting — QP-9 attached — Queensland Police charge document','PDF · Email thread with attachment · Names partially redacted','sky_news_email_thread.pdf','This document shows the Sky News journalist forwarding my Queensland Police charge document (QP-9) — a non-public record — to representatives at Hancock Prospecting. A QP-9 cannot be obtained through public records or standard media liaison. Its disclosure to a third party is a breach of the Information Privacy Act 2009. The matter has been referred to the Crime and Corruption Commission.','pdf-skynews')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">sky_news_email_hancock_QP9.pdf</div>
                                    <div class="ev-desc">PDF · Email thread · QP-9 attachment · Referred to CCC</div>
                                </div>
                                <span class="redact-tag">⬛ Names redacted</span>
                                <span class="ev-cta ml-2">View →</span>
                            </div>
                            <div class="ev-zip-bar">
                                <span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">Download — Sky News accountability file</span>
                                <button class="mv-dl-btn mv-dl-gold text-[0.48rem]" onclick="downloadZip('sky_news_accountability.zip')">⬇ Download</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="story-chapter reveal" style="transition-delay:0.1s;border-left-color:rgba(123,94,167,0.3)">
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">"HE'S THE HOMELESS GUY<br><span style="color:#7b5ea7">WITH MENTAL HEALTH ISSUES."</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The comment reduces a person to their housing status and their diagnosis simultaneously — using both as grounds for disqualification. Not as a factual challenge to anything documented, but as a category dismissal. The 7 Care Connect posters on the bathroom walls at Nerang Street did not disappear because the person who found them has a mental health history.</p>
                    <div class="border p-6" style="border-color:rgba(123,94,167,0.2);background:rgba(123,94,167,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase mb-3" style="color:#7b5ea7">Why Independent Media Exists</div>
                        <p class="text-[0.68rem] text-paper/40 leading-relaxed">When mainstream outlets decide sources with complicated personal histories aren't worth covering, they leave those stories untold. CovertGC exists precisely because some stories only get told when the person who found them tells it themselves.</p>
                    </div>
                </div>

            </div>
            <div class="space-y-4">
                <div class="sticky top-24 space-y-4">
                    <div class="border border-gold/20 p-5" style="background:rgba(232,160,32,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-3">The Story Was About</div>
                        <div class="space-y-2">
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs mt-0.5 shrink-0">→</span><p class="text-[0.6rem] text-paper/40">7 Care Connect posters in bathrooms near Nerang Street — crisis outreach visible only where people in crisis are.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs mt-0.5 shrink-0">→</span><p class="text-[0.6rem] text-paper/40">The Sandy Tulisi case as a specific example of how the housing system fails its most vulnerable.</p></div>
                        </div>
                    </div>
                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-2">The Legal Question</div>
                        <p class="text-[0.62rem] text-paper/35 leading-relaxed mb-2">A QP-9 is not a public document. Its disclosure by a QPS officer may breach the Information Privacy Act 2009 and potentially the Crime and Corruption Act 2001.</p>
                        <p class="text-[0.6rem] text-paper/25">Referred to: Crime and Corruption Commission Queensland</p>
                    </div>
                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-2">7 Care Connect</div>
                        <p class="text-[0.62rem] text-paper/35 leading-relaxed">Crisis referral & homelessness support.<br><span class="text-gold">1800 071 004</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     VIRAL VIDEO SECTION
══════════════════════════════════════ -->
<section id="viral" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(214,61,47,0.04) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">The Video That Started It All</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">THE VIRAL<br><span class="text-hot">VIDEO.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">I made a video of RJ that circulated widely on the Gold Coast. A direct confrontation. Submitted to Hancock Prospecting. The response was immediate — and violent.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_360px] gap-12 reveal">
            <div>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">The video was submitted to Hancock Prospecting, after which I was blocked — which is when I understood that Adam Watson's connection to Gina Rinehart was genuine. Associates connected to RJ began a sustained harassment campaign against Adam Watson at a local shopping centre — approaching him regularly, making threats, explicitly connecting the harassment to the viral video.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-8">This is the same logic that produced the Oracle East assault. Visibility — making a video, naming someone, publishing conduct — is treated by this network as an act that justifies physical and social retaliation. It does not.</p>

                <!-- EVIDENCE VAULT: Viral Video -->
                <div class="evidence-vault">
                    <div class="ev-header" onclick="toggleVault(this)">
                        <div class="flex items-center gap-2">
                            <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— The Viral Video</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span>
                            <span class="ev-toggle">▼</span>
                        </div>
                    </div>
                    <div class="ev-body">
                        <div class="ev-file ef-hot" onclick="openMV('video','THE VIRAL VIDEO — RJ CONFRONTATION','Direct confrontation video of RJ — circulated widely across the Gold Coast — submitted to Hancock Prospecting','Video · Original recording · PLACEHOLDER — full video pending legal review','viral_video_rj_PLACEHOLDER.mp4','This is the video that triggered the retaliation campaign. The direct confrontation documented RJ\'s behaviour and connections. When submitted to Hancock Prospecting, I was immediately blocked — confirming Adam Watson\'s connection to that network. RJ\'s associates began a sustained harassment campaign against Adam Watson in direct response to this video\'s circulation.','video-viral')">
                            <div class="ev-icon ev-video">▶</div>
                            <div class="ev-meta">
                                <div class="ev-name">viral_video_RJ_confrontation.mp4</div>
                                <div class="ev-desc">Video · RJ confrontation · Gold Coast · Triggered retaliation campaign</div>
                            </div>
                            <span class="redact-tag">⬛ PLACEHOLDER</span>
                            <span class="ev-cta ml-2">Watch →</span>
                        </div>
                        <div class="ev-zip-bar">
                            <span class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/25">Full video pending legal clearance — placeholder visible now</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border border-hot/15 p-6" style="background:rgba(214,61,47,0.03)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">What Happened After</div>
                <div class="space-y-3">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/40">Submitted to Hancock Prospecting. Immediately blocked.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/40">Associates began daily harassment of Adam Watson at a local shopping centre.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/40">Oracle East assault followed — 6 assailants, targeted in retaliation.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/40">Police interview produced the "expect to get bashed" corruption recording.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     ADAM'S STORY — COERCIVE CONTROL
══════════════════════════════════════ -->
<section id="adam" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(123,94,167,0.04) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-violet"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-violet">A Witness Account — Episode 1</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">WHEN LOVE<br><span class="text-violet">BECOMES A WEAPON</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">Coercive control, false allegations, and the system gaps that let it happen. Adam Watson's story.</p>
            </div>
            <div class="max-w-xs">
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag" style="color:#7b5ea7">⚖ DPP: Malicious Prosecution</span>
                    <span class="evidence-tag" style="color:#e8a020">📡 Optus Security Breach</span>
                </div>
            </div>
        </div>

        <div class="space-y-16">

            <!-- Chapter A: Coercive Control / Bodie Chalmers -->
            <div class="story-chapter reveal" style="border-left-color:rgba(123,94,167,0.3)">
                <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7b5ea7;border-color:rgba(123,94,167,0.4)">Chapter A — Coercive Control</span></div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE ANATOMY OF<br><span style="color:#7b5ea7">CONTROL</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Coercive control rarely announces itself. It arrives as attention, then affection, then dependence — and by the time the walls close in, leaving feels impossible."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Adam Watson entered a relationship with Bodie Chalmers that escalated into a pattern of coercive and controlling behaviour. Access was obtained to Apple's location sharing on Adam's iPhone without his knowledge. A tracking device was placed on his fuel cap. A private eye-biometric lie detection test was commissioned — scored 1 out of 100, rated "Deceptive" — by a certified EyeDetect® examiner at 50 Cavill Avenue, Surfers Paradise.</p>

                <!-- EVIDENCE VAULT: Bodie Chalmers -->
                <div class="evidence-vault">
                    <div class="ev-header" onclick="toggleVault(this)">
                        <div class="flex items-center gap-2">
                            <span class="text-[0.48rem] tracking-[0.22em] uppercase text-violet" style="color:#7b5ea7">📁 Evidence Files</span>
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Bodie Chalmers · Coercive Control</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">2 files</span>
                            <span class="ev-toggle">▼</span>
                        </div>
                    </div>
                    <div class="ev-body">
                        <div class="ev-file ef-violet" onclick="openMV('pdf','BODIE CHALMERS — LIE DETECTOR TEST','Private EyeDetect® biometric examination — certified examiner — scored 1/100 &quot;Deceptive&quot;','PDF Document · Surveillance evidence · Certified examination','bodie_chalmers_lie_detector_test.pdf','Certified EyeDetect® lie detector examination conducted by a qualified examiner at 50 Cavill Avenue, Surfers Paradise. The test scored 1 out of 100 and rated as &quot;Deceptive&quot; — indicating the subject was being deceptive throughout the examination. This evidence documents the forensic basis for concerns about Bodie Chalmers\'s truthfulness in his account of events related to Adam Watson.','pdf-bodie-lie')">
                            <div class="ev-icon ev-pdf">PDF</div>
                            <div class="ev-meta">
                                <div class="ev-name">bodie_chalmers_lie_detector_test.pdf</div>
                                <div class="ev-desc">PDF · Forensic examination · EyeDetect® certified</div>
                            </div>
                            <span class="redact-tag">🔬 Forensic Evidence</span>
                            <span class="ev-cta ml-2">View →</span>
                        </div>
                        <div class="ev-file ef-violet" onclick="openMV('pdf','BODIE CHALMERS — CRIMINAL HISTORY','Prior criminal history document — Bodie Chalmers — context for coercive control pattern','PDF Document · Criminal history · Partially redacted','bodie_chalmers_criminal_history.pdf','This document outlines the prior criminal history of Bodie Chalmers, the subject of the coercive control allegations. This history is relevant to understanding the pattern of behaviour documented across multiple incidents in this investigation. Names of co-accused and third parties have been redacted.','pdf-bodie')">
                            <div class="ev-icon ev-pdf">PDF</div>
                            <div class="ev-meta">
                                <div class="ev-name">bodie_chalmers_criminal_history.pdf</div>
                                <div class="ev-desc">PDF · Criminal history · Coercive control context</div>
                            </div>
                            <span class="redact-tag">⬛ Third parties redacted</span>
                            <span class="ev-cta ml-2">View →</span>
                        </div>
                        <div class="ev-zip-bar">
                            <span class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/25">More documents will be added as the investigation progresses</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chapter B: Malicious Prosecution -->
            <div class="story-chapter reveal" style="transition-delay:0.1s;border-left-color:rgba(214,61,47,0.3)">
                <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter B — False Allegations</span></div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">DPP RULING.<br><span class="text-hot">OFFICER FIRED.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"A criminal charge does not require truth. It requires a complainant, a police officer who believes them, and a system that moves faster than the facts."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Adam Watson was charged with sexual assault based on allegations made to Queensland Police. At the first court mention, the Director of Public Prosecutions ruled it a malicious prosecution. The charge was dismissed. The police officer who accepted and actioned the complaint was subsequently fired.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                    <div class="border p-5" style="border-color:rgba(214,61,47,0.3);background:rgba(214,61,47,0.03)"><div class="font-display text-xl text-hot mb-1">DPP RULING</div><div class="text-[0.6rem] tracking-[0.15em] uppercase text-hot/60 mb-3">Malicious Prosecution</div><p class="text-[0.65rem] text-paper/40 leading-relaxed">The DPP assessed the charge at first mention and ruled the prosecution malicious. Charge dismissed.</p></div>
                    <div class="border p-5" style="border-color:rgba(214,61,47,0.3);background:rgba(214,61,47,0.03)"><div class="font-display text-xl text-hot mb-1">OFFICER FIRED</div><div class="text-[0.6rem] tracking-[0.15em] uppercase text-hot/60 mb-3">Confirmed Outcome</div><p class="text-[0.65rem] text-paper/40 leading-relaxed">The QPS officer who charged Adam based on the false complaint was subsequently dismissed from the service.</p></div>
                </div>
            </div>

            <!-- Chapter C: Optus -->
            <div class="story-chapter reveal" style="transition-delay:0.15s;border-left-color:rgba(232,160,32,0.3)">
                <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Chapter C — Optus Breach</span></div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE $2,500 BILL<br><span class="text-gold">FOR OPTUS'S OWN FAILURE.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Someone walked into an Optus store and had Adam's phone number turned off. No authorisation. No verification. Just social pressure on an employee. And it worked."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Adam's Optus service was deactivated by a third party who threatened to expose an employee's sexuality unless they complied. The employee complied. Adam's phone was turned off. The matter was raised with the Prime Minister's office, referred to the Telecommunications Industry Ombudsman, and the Optus CEO was notified. Adam is now being billed $2,500 for the disconnection — despite the breach being caused entirely by Optus's own failure.</p>

                <!-- EVIDENCE VAULT: Optus -->
                <div class="evidence-vault">
                    <div class="ev-header" onclick="toggleVault(this)">
                        <div class="flex items-center gap-2">
                            <span class="text-[0.48rem] tracking-[0.22em] uppercase text-gold">📁 Evidence Files</span>
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Optus · TIO Resolution</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span>
                            <span class="ev-toggle">▼</span>
                        </div>
                    </div>
                    <div class="ev-body">
                        <div class="ev-file ef-gold" onclick="openMV('pdf','OPTUS APOLOGY LETTER — TIO OUTCOME','Letter from Optus following Telecommunications Industry Ombudsman referral — service restored — acknowledgment of breach','PDF · Optus correspondence · Post-TIO referral','optus_apology_letter.pdf','This letter from Optus, issued following the TIO referral initiated by Adam Watson\'s complaint to the Prime Minister\'s office, confirms the restoration of service and acknowledges the security failure at the retail store level. Optus has since issued an internal directive addressing verification procedures. Despite this, Adam is still being billed $2,500 — a charge CovertGC considers unconscionable.','pdf-optus')">
                            <div class="ev-icon ev-pdf">PDF</div>
                            <div class="ev-meta">
                                <div class="ev-name">optus_apology_TIO_outcome.pdf</div>
                                <div class="ev-desc">PDF · Optus apology · Service restored · TIO referral outcome</div>
                            </div>
                            <span class="ev-cta">View →</span>
                        </div>
                        <div class="ev-zip-bar">
                            <span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">CovertGC is calling on Optus to waive the $2,500 charge</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
 

<!-- ══════════════════════════════════════
     RJ CRIMINAL PATTERN
══════════════════════════════════════ -->
<section id="rj" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(214,61,47,0.04) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Criminal Pattern — Episode 1</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">A PATTERN,<br><span class="text-hot">NOT AN INCIDENT.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">Car theft rings. Aggravated burglary. Mob violence. False allegations against a doctor. A laptop handed to Southport Police. A recording that triggered a corruption investigation.</p>
            </div>
            <div class="max-w-xs">
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag text-hot" style="color:#d63d2f">⚖ Multiple Charges</span>
                    <span class="evidence-tag text-gold" style="color:#e8a020">🔍 Sex & Crime Squad</span>
                    <span class="evidence-tag text-sage" style="color:#2a9d4e">💻 Laptop — Southport Police</span>
                </div>
            </div>
        </div>

        <!-- RJ Incident Timeline -->
        <div class="mb-12 reveal">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-5">Incident Timeline — RJ</div>
            <div class="space-y-px">
                <div class="grid grid-cols-[80px_1fr] gap-4 bg-paper/[0.02] border border-paper/[0.05] p-4"><div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">01</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Car Ring</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Car theft ring — vehicles burnt</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Member of organised car theft ring. Vehicles destroyed by fire.</div></div></div>
                <div class="grid grid-cols-[80px_1fr] gap-4 bg-paper/[0.02] border border-paper/[0.05] p-4"><div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">02</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Phone Theft</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Helensvale — three sent to rob Adam Watson</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Three filmed, arrested, gave evidence identifying RJ. Charged. Suspended sentence. QPS appealing.</div></div></div>
                <div class="grid grid-cols-[80px_1fr] gap-4 bg-paper/[0.02] border border-paper/[0.05] p-4"><div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">03</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Pacific Fair</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Five associates at Pacific Fair fruit shop</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Adam defended himself. One associate: broken jaw. All five gave statements identifying RJ. Charged. Released.</div></div></div>
                <div class="grid grid-cols-[80px_1fr] gap-4 bg-paper/[0.02] border border-paper/[0.05] p-4"><div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">04</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Burglary</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Aggravated burglary — Pacific Fair precinct</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Charged with aggravated burglary — phone theft outside Pacific Fair. Charged. Released.</div></div></div>
                <div class="grid grid-cols-[80px_1fr] gap-4 bg-paper/[0.02] border border-paper/[0.05] p-4"><div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">05</div><div class="text-[0.45rem] text-paper/20 mt-0.5">False Allegation</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">False sexual assault allegation — local doctor</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Doctor's office raided. Doctor cleared of all criminal allegations. Civil lawsuit ongoing against insurance.</div></div></div>
                <div class="grid grid-cols-[80px_1fr] gap-4 bg-paper/[0.02] border border-paper/[0.05] p-4"><div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">06</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Shopping Centre</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Daily harassment of Adam Watson</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Associates harassing Adam at local shopping centre specifically because of CovertGC and the viral video.</div></div></div>
                <div class="grid grid-cols-[80px_1fr] gap-4 bg-sage/[0.04] border border-sage/20 p-4"><div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-sage">07</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Laptop</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Laptop with incriminating evidence → Southport Police</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">RJ gave Adam Watson a laptop. Adam brought it to Southport Police Station, Sex & Crime Squad. Active investigation.</div></div></div>
            </div>
        </div>

        <!-- RJ Evidence Vault -->
        <div class="story-chapter reveal mb-12">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Video Evidence</span></div>
            <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE FOOTAGE.<br><span class="text-hot">THEY DIDN'T KNOW WAS RUNNING.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Three separate pieces of footage document RJ's criminal activities. Names and identifying details of uninvolved parties have been filtered. All footage has been provided to Queensland Police.</p>

            <div class="evidence-vault">
                <div class="ev-header" onclick="toggleVault(this)">
                    <div class="flex items-center gap-2">
                        <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— RJ Criminal Activity · Video Evidence</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">3 files</span>
                        <span class="ev-toggle">▼</span>
                    </div>
                </div>
                <div class="ev-body">
                    <!-- Pacific Fair bashing video -->
                    <div class="ev-file ef-hot" onclick="openMV('video','PACIFIC FAIR — ASSAULT FOOTAGE','RJ\'s associates attacking Adam Watson near the fruit shop — Pacific Fair precinct','Video · Redacted · Names and faces of uninvolved parties filtered','rj_pacific_fair_assault_REDACTED.mp4','This footage shows the attack on Adam Watson by RJ\'s associates near the Pacific Fair fruit shop. All five associates present subsequently gave statements to police identifying RJ as the organiser. RJ was charged and released. Queensland Police are appealing the suspended sentence. All identifying details of uninvolved parties have been filtered.','video-pf')">
                        <div class="ev-icon ev-video">▶</div>
                        <div class="ev-meta">
                            <div class="ev-name">rj_associates_assault_pacific_fair_REDACTED.mp4</div>
                            <div class="ev-desc">Video · Pacific Fair assault · RJ's associates · Identifying details filtered</div>
                        </div>
                        <span class="redact-tag">⬛ REDACTED</span>
                        <span class="ev-cta ml-2">Watch →</span>
                    </div>
                    <!-- Aggravated burglary video -->
                    <div class="ev-file ef-hot" onclick="openMV('video','ARMED BURGLARY FOOTAGE — RJ','RJ committing armed burglary near Pacific Fair shopping centre','Video · Heavily redacted · Original with QPS','rj_armed_burglary_REDACTED.mp4','This footage documents the aggravated burglary near Pacific Fair for which RJ was charged. The footage is heavily redacted — faces of uninvolved parties and identifying location details have been obscured. The unredacted original has been provided to Queensland Police.','video-burg')">
                        <div class="ev-icon ev-video">▶</div>
                        <div class="ev-meta">
                            <div class="ev-name">rj_armed_burglary_pacific_fair_REDACTED.mp4</div>
                            <div class="ev-desc">Video · RJ — aggravated burglary · Pacific Fair · Heavily redacted</div>
                        </div>
                        <span class="redact-tag">⬛ HEAVILY REDACTED</span>
                        <span class="ev-cta ml-2">Watch →</span>
                    </div>
                    <!-- Sex & Crime Squad tape -->
                    <div class="ev-file ef-sage" onclick="openMV('video','SEX & CRIME SQUAD — INVESTIGATION TAPE','Active Sex and Crime Squad investigation tape — heavily censored for public release','Video · Heavily censored · Active investigation · QPS oversight','rj_sex_crime_squad_CENSORED.mp4','This material is from the active Sex and Crime Squad investigation in which RJ is a subject. It was made possible by the laptop RJ gave Adam Watson — which Adam surrendered to Southport Police Station. The footage is heavily censored for public release. Full material is with QPS investigators.','video-scs')">
                        <div class="ev-icon ev-video">▶</div>
                        <div class="ev-meta">
                            <div class="ev-name">rj_sex_crime_squad_investigation_CENSORED.mp4</div>
                            <div class="ev-desc">Video · Sex & Crime Squad investigation · Heavily censored · Active case</div>
                        </div>
                        <span class="redact-tag">⬛ CENSORED</span>
                        <span class="ev-cta ml-2">Watch →</span>
                    </div>
                    <div class="ev-zip-bar">
                        <span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">All footage provided to QPS — redacted versions available here</span>
                        <button class="mv-dl-btn mv-dl-gold text-[0.48rem]" onclick="downloadZip('rj_evidence_bundle.zip')">⬇ ZIP Bundle</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     BRAZEN CRIME / OFFICEWORKS WHEELCHAIR ATTACK
══════════════════════════════════════ -->
<section id="brazen" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(8,8,8,0) 0%,rgba(214,61,47,0.06) 50%,rgba(8,8,8,0) 100%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Crime Without Shame — Episode 1</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">THEY DON'T EVEN<br><span class="text-hot">HIDE ANYMORE</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">Attempted murder. Arson. Intimidation of public figures. The Gold Coast's criminal culture has stopped pretending it operates in the shadows.</p>
            </div>
        </div>

        <div class="space-y-14">

            <!-- Officeworks wheelchair attack -->
            <div class="story-chapter reveal">
                <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Incident One — Attempted Murder</span></div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">FIFTEEN THOUSAND DOLLARS.<br><span class="text-hot">A WHEELCHAIR. A CAR PARK.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Someone paid to have a man driven into near an Officeworks. The alleged price was $15,000. The alleged goal was a wheelchair."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The target photographed the driver at the scene. That photograph, combined with CCTV footage from the nearby Officeworks, was provided to law enforcement. The driver was identified, located, and arrested. He has been denied bail. Messages extracted from the driver's phone link him to a third party and indicate a payment of $15,000 for the attack.</p>

                <!-- EVIDENCE VAULT: Officeworks Attack -->
                <div class="evidence-vault">
                    <div class="ev-header" onclick="toggleVault(this)">
                        <div class="flex items-center gap-2">
                            <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Officeworks Wheelchair Attack</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span>
                            <span class="ev-toggle">▼</span>
                        </div>
                    </div>
                    <div class="ev-body">
                        <div class="ev-file ef-hot" onclick="openMV('image','DRIVER IDENTIFIED AT SCENE','Photograph of the driver in his vehicle — taken by the target immediately after the attack — face redacted','Image · Taken at scene · Driver arrested · Denied bail','officeworks_attacker_photo_REDACTED.jpg','This photograph was taken by the target of the vehicle attack at the Officeworks car park, immediately after the attack. Combined with CCTV footage from the nearby Officeworks, it enabled the identification, location, and arrest of the driver. He was denied bail. Phone messages extracted from his device link the attack to a $15,000 contract. The face of the driver has been redacted pending completion of court proceedings.','image-driver')">
                            <div class="ev-icon ev-img">📷</div>
                            <div class="ev-meta">
                                <div class="ev-name">officeworks_attack_driver_photo_REDACTED.jpg</div>
                                <div class="ev-desc">Image · Driver photographed at scene · Face redacted · Arrested · Bail denied</div>
                            </div>
                            <span class="redact-tag">⬛ Face redacted</span>
                            <span class="ev-cta ml-2">View →</span>
                        </div>
                        <div class="ev-zip-bar">
                            <span class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/25">Full unredacted photo held by QPS — redacted version published here</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Firebombing / Friendlyjordies -->
            <div class="story-chapter reveal" style="transition-delay:0.1s">
                <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Incident Two — Arson</span></div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">"GINA RINEHART IS NEXT"<br><span class="text-hot">WRITTEN ON A FENCE.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">A Gold Coast home connected to the personal circle of Gina Rinehart was firebombed. Perpetrators left graffiti: "Gina Rinehart is next." They also left a section of a previous version of this publication containing identifying imagery — an attempt to establish that investigative journalism is the provocation for violence. CovertGC does not accept that logic.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-2">Jordan Shanks — Friendlyjordies</div>
                        <div class="text-[0.62rem] text-paper/40 leading-relaxed space-y-1"><div>Method: Firebombing — Bondi Beach, Nov 2022</div><div>Outcome: Home destroyed. Perpetrator jailed 5 years.</div><div>Trigger: Video naming crime family</div></div>
                    </div>
                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-2">Gina Rinehart's Circle — Gold Coast</div>
                        <div class="text-[0.62rem] text-paper/40 leading-relaxed space-y-1"><div>Method: Firebombing — Gold Coast residence</div><div>Message left: "Rinehart is next" + CovertGC pages</div><div>Status: Active investigation. Perpetrator left Australia.</div></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     PRIVACY BREACH SECTION
══════════════════════════════════════ -->
<section id="privacy" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(123,94,167,0.04) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-violet"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-violet">Privacy Breach — Episode 1</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">PHOTOGRAPHED.<br><span class="text-violet">LABELLED. LEAKED.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">A council aquatic centre photographed me, annotated the image with a surveillance note, and a staff member leaked it. The Council dropped its own investigation. The Mayor called me a public nuisance. The Premier disagreed.</p>
            </div>
            <div class="max-w-xs">
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag" style="color:#7b5ea7">📄 Council Letters — Verified</span>
                    <span class="evidence-tag text-sage" style="color:#2a9d4e">✓ Staff Terminated</span>
                    <span class="evidence-tag text-gold" style="color:#e8a020">⚠ Show Cause Issued</span>
                </div>
                <p class="text-[0.65rem] leading-relaxed text-paper/30 mt-3">Evidence files for this section appear in the Police Corruption / Oracle East vault above — including both council letters and the surveillance photo.</p>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-16 reveal">
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-violet mb-1">0</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Charges upheld</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-hot mb-1">45</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Day deadline</div><div class="text-[0.5rem] text-paper/18 mt-1">Council missed · then dropped it</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-gold mb-1">1</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Show Cause notice</div><div class="text-[0.5rem] text-paper/18 mt-1">From Premier Crisafulli</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-sage mb-1">✓</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Staff terminated</div></div>
        </div>

        <div class="max-w-3xl">
            <div class="story-chapter reveal" style="border-left-color:rgba(123,94,167,0.3)">
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE COUNCIL DROPPED<br><span class="text-violet">ITS OWN INVESTIGATION.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">I lodged a formal privacy complaint with the City of Gold Coast on 15 December 2024. The Council acknowledged it via Ref: Lawmaster 1192. Then discontinued it — asking me to supply the information their own systems already held. Premier Crisafulli issued a Show Cause notice. Staff were terminated. The complaint letters are available in the Police Accountability section above.</p>
                <div class="border border-hot/20 p-6 mb-5" style="background:rgba(214,61,47,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">Formal Demand — Retraction</div>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed">CovertGC formally demands that Mayor Tom Tate retract his characterisation of Kosta Kondratenko as a "public nuisance." All charges against Mr Kondratenko have been dropped. A written retraction is requested. Deadline: 30 days from publication.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div class="border border-hot/20 p-5" style="background:rgba(214,61,47,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">City of Gold Coast</div>
                        <div class="space-y-1.5"><div class="text-[0.6rem] text-paper/35">✗ Investigation discontinued</div><div class="text-[0.6rem] text-paper/35">✗ Mayor called complainant a nuisance</div><div class="text-[0.6rem] text-paper/35">✗ No accountability</div></div>
                    </div>
                    <div class="border border-sage/20 p-5" style="background:rgba(42,157,78,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-2">Premier Crisafulli</div>
                        <div class="space-y-1.5"><div class="text-[0.6rem] text-paper/35">✓ Show Cause notice issued</div><div class="text-[0.6rem] text-paper/35">✓ Staff involved terminated</div><div class="text-[0.6rem] text-paper/35">✓ Accountability via escalation</div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     REDRESS SCHEME
══════════════════════════════════════ -->
<section id="redress" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(42,157,78,0.03) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-sage"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-sage">Public Interest — Episode 1</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">WHO'S CHECKING<br><span class="text-sage">THE REDRESS SCHEME?</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">Australia's National Redress Scheme has paid out over $1 billion. The question nobody is asking loudly enough: was anyone verifying the claims?</p>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-16 reveal">
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-sage mb-1">$1B+</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Total paid out</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-gold mb-1">40K+</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Applications received</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-hot mb-1">0</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Attendance checks</div><div class="text-[0.5rem] text-paper/18 mt-1">Required at application</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-paper/50 mb-1">?</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Fraudulent claims</div><div class="text-[0.5rem] text-paper/18 mt-1">No public figure exists</div></div>
        </div>

        <div class="max-w-3xl">
            <div class="story-chapter reveal" style="border-left-color:rgba(214,61,47,0.3)">
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE ATTENDANCE RECORD GAP</h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Most Australian schools, churches, and government institutions maintain attendance records going back decades. Cross-referencing an applicant's name against them is not a complex investigative task. The question of why it does not appear to be standard practice is one the scheme needs to answer publicly.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">CovertGC has been made aware of at least one Gold Coast case in which a Redress Scheme payout was subsequently subject to recovery action — including the seizure of an asset — following questions about whether the applicant attended the institution named in their claim. FOI requests are on file. This section will be updated when responses are received.</p>
                <div class="border border-sage/20 p-5" style="background:rgba(42,157,78,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-2">FOI Requests Filed</div>
                    <div class="space-y-1.5"><div class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-gold"></div><span class="text-[0.6rem] text-paper/35">National Redress Scheme — verification methodology</span></div><div class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-gold"></div><span class="text-[0.6rem] text-paper/35">National Redress Scheme — fraud referral statistics</span></div><div class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-paper/20"></div><span class="text-[0.6rem] text-paper/25">QLD AG — Criminal Injuries Compensation reform</span></div></div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     WEST KIRA & KIRA · FURNITURE & COCAINE
══════════════════════════════════════ -->

<!-- SECTION LABEL -->
<div class="px-5 md:px-10 pt-10 pb-4 border-b border-paper/[0.05]" style="background:rgba(214,61,47,0.03)">
    <div class="max-w-6xl mx-auto flex items-center gap-4">
        <div class="w-1 h-8 bg-hot"></div>
        <div>
            <div class="text-[0.5rem] tracking-[0.22em] uppercase text-hot mb-0.5">New Section — Adam's Story</div>
            <div class="font-display text-xl tracking-wide text-paper/50">Chapter A2 + Standalone Section · West Kira &amp; Kira and Kira</div>
        </div>
    </div>
</div>

<!-- Chapter A2: West Kira (inner chapter) -->
<div class="px-5 md:px-10 py-16 border-b border-paper/[0.05]">
    <div class="max-w-6xl mx-auto">
        <div class="mb-6 pb-4 border-b border-paper/[0.06]">
            <div class="text-[0.5rem] tracking-[0.22em] uppercase text-paper/20 mb-1">Placement: Inside #adam section · After Chapter A (Bodie Chalmers)</div>
        </div>

        <div id="west-kira" class="story-chapter reveal" style="border-left-color:rgba(214,61,47,0.3)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter A2 — The Accomplice</span>
                <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">West Kira</span>
            </div>
            <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">BODIE'S ACCOMPLICE.<br><span class="text-hot">THE KID WHO BROKE THE GLASSES.</span></h3>
            <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Adam gave him a ride. He repaid that by destroying Adam's glasses. It was recorded. That's the kind of person we're dealing with — and that's before we get to his father."</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">West Kira is a known associate of Bodie Chalmers. During a ride provided by Adam Watson — an act of basic human decency — West Kira deliberately broke Adam's glasses. The incident was captured on recording. It is a small act, but it is characteristic: a pattern of casual entitlement, destruction without consequence, and the assumption that proximity to power insulates you from accountability.</p>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-px bg-paper/[0.04] mb-8">
                <div class="bg-ink px-5 py-5 text-center">
                    <div class="stat-number text-4xl text-hot mb-1">$10K</div>
                    <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Default judgement</div>
                    <div class="text-[0.5rem] text-paper/18 mt-1">Debt sold — unpaid</div>
                </div>
                <div class="bg-ink px-5 py-5 text-center">
                    <div class="stat-number text-4xl text-gold mb-1">1</div>
                    <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Recorded incident</div>
                    <div class="text-[0.5rem] text-paper/18 mt-1">Glasses destroyed on video</div>
                </div>
                <div class="bg-ink px-5 py-5 text-center">
                    <div class="stat-number text-4xl text-paper/40 mb-1">0</div>
                    <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Bills paid</div>
                    <div class="text-[0.5rem] text-paper/18 mt-1">Pattern of non-payment</div>
                </div>
            </div>

            <div class="border border-paper/[0.07] p-5 mb-8" style="background:rgba(214,61,47,0.03)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">Financial Record</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">West Kira has a default judgement entered against him — $10,000. The debt has since been sold to a third-party collector. A default judgement is not a disputed debt. It is what happens when someone does not show up, does not pay, and does not respond. It is a matter of public record.</p>
            </div>

            <div class="evidence-vault">
                <div class="ev-header" onclick="toggleVault(this)">
                    <div class="flex items-center gap-2">
                        <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— West Kira · Recorded Incident</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span>
                        <span class="ev-toggle">▼</span>
                    </div>
                </div>
                <div class="ev-body">
                    <div class="ev-file ef-hot" onclick="openMV('video-wk-glasses')">
                        <div class="ev-icon ev-video">▶</div>
                        <div class="ev-meta">
                            <div class="ev-name">west_kira_glasses_incident.mp4</div>
                            <div class="ev-desc">Video · In-vehicle recording · West Kira destroys Adam's glasses</div>
                        </div>
                        <span class="ev-cta">Watch →</span>
                    </div>
                    <div class="ev-zip-bar">
                        <span class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/25">Footage under legal review — full version pending clearance</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Kira & Kira Standalone Section -->
<section id="kira-kira" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(214,61,47,0.06) 0%,rgba(8,8,8,0) 60%)">
    <div class="max-w-6xl mx-auto">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-4 h-px bg-hot"></div>
                    <span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Organised Crime — Episode 1</span>
                </div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">KIRA &amp; KIRA.<br><span class="text-hot">FURNITURE OUT. COCAINE IN.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">A Gold Coast furniture shop. A wealthy owner with Mick Gatto connections. Yakuza involvement. And a campaign of intimidation against Adam Watson that reached a Priceline chemist, a Centre Manager, and a disability centre near Broadbeach library.</p>
            </div>
            <div class="max-w-xs">
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag text-hot" style="color:#d63d2f">⚠ Drug Trafficking — Alleged</span>
                    <span class="evidence-tag text-gold" style="color:#e8a020">🎙 Psychologist Recording</span>
                    <span class="evidence-tag" style="color:rgba(240,236,226,0.4)">⚖ Officers Stood Down</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-14 reveal">
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-hot mb-1">2</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Officers stood down</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">AG Deb Frecklington</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-gold mb-1">0</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Addresses obtained</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Threat had no legal basis</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-paper/50 mb-1">GC</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Kira &amp; Kira</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Alleged front — Gold Coast</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-sage mb-1">✓</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Mgmt co. terminated</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Entire company — Pacific Fair</div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[1fr_300px] gap-12">
            <div class="space-y-14">

                <!-- The Front -->
                <div class="story-chapter reveal" style="border-left-color:rgba(214,61,47,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">The Front</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE FURNITURE SHOP<br><span class="text-hot">THAT MOVES MORE THAN SOFAS.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Kira and Kira is a Gold Coast furniture shop. On paper it is a legitimate retail business. In practice, it is alleged to be a front through which cocaine is moved — funnelled through the furniture, and distributed with Yakuza involvement."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">West Kira's father is the proprietor. He is wealthy. He is an associate of Mick Gatto. He allegedly arranged for associates to have a friend bashed — a friend who is connected to the supply chain running through Kira and Kira. The Yakuza are alleged to have been the instrument of that bashing.</p>
                    <div class="border border-paper/[0.07] p-5 mb-5" style="background:rgba(214,61,47,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">What Is Alleged</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-3 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><span class="text-[0.65rem] text-paper/45">Kira &amp; Kira operates as a front for cocaine distribution through its Gold Coast premises.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><span class="text-[0.65rem] text-paper/45">Narcotics are alleged to be funnelled through furniture inventory and shipments.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><span class="text-[0.65rem] text-paper/45">Yakuza connections are alleged to have been engaged to bash a person linked to the distribution chain.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><span class="text-[0.65rem] text-paper/45">West Kira's father subsequently directed a three-stage campaign of intimidation against Adam Watson.</span></div>
                        </div>
                    </div>
                </div>

                <!-- The Chemist -->
                <div class="story-chapter reveal" style="transition-delay:0.1s;border-left-color:rgba(232,160,32,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">The Priceline Incident</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THREATEN THE CHEMIST.<br><span class="text-gold">GET THE ADDRESS.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"West Kira's father wanted Adam Watson's home address. He went to the Priceline pharmacy that holds Adam's prescription records. He had enough money and enough connections to have the Centre Manager stand down the security guards and threaten the chemist's lease."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The Centre Manager — employed by the company contracted to manage Pacific Fair — was directed to stand the guards down and then issue a threat to the pharmacy operator: provide Adam Watson's home address, or face lease termination. It did not work. The chemist's lease runs directly through Wesfarmers, Priceline's parent company. The Centre Manager had no standing to terminate it. The address was not handed over.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The consequences were swift and total. The head of Wesfarmers contacted the owner of Pacific Fair directly. The owner was appalled. He personally called Jason — the Priceline pharmacist — and apologised for what had been done to him. He then stood down the entire company that had been managing Pacific Fair. Not just the Centre Manager. The whole management company — terminated.</p>

                    <div class="border border-paper/[0.07] p-5 mb-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-4">Intimidation Sequence — The Priceline Attempt</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Step 01</span><span class="text-[0.65rem] text-paper/45">West Kira's father approaches the Priceline chemist holding Adam Watson's prescription records.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Step 02</span><span class="text-[0.65rem] text-paper/45">Centre Manager is directed to stand down security guards — clearing access to the pharmacy.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Step 03</span><span class="text-[0.65rem] text-paper/45">Centre Manager threatens the chemist: provide Adam's home address or the lease will be terminated.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-gold/70 w-28 shrink-0 pt-0.5">Why it failed</span><span class="text-[0.65rem] text-paper/45">The chemist's lease runs to <span class="text-gold">Wesfarmers</span> — not to the building. The Centre Manager had no authority to terminate it. The threat could not be enforced.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-sage/70 w-28 shrink-0 pt-0.5">Outcome</span><span class="text-[0.65rem] text-paper/45">Address not obtained. Gina Rinehart contacted the Wesfarmers head, who called the Pacific Fair owner directly. The owner personally apologised to Jason the pharmacist — then terminated the entire management company. Not just the Centre Manager. The whole company.</span></div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div class="border border-hot/20 p-5" style="background:rgba(214,61,47,0.03)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">Management Company</div>
                            <div class="space-y-1.5">
                                <div class="text-[0.6rem] text-paper/35">✗ Centre Manager ordered security to stand down</div>
                                <div class="text-[0.6rem] text-paper/35">✗ Threatened Jason the pharmacist's lease</div>
                                <div class="text-[0.6rem] text-paper/35">✗ Entire company terminated — Pacific Fair</div>
                            </div>
                        </div>
                        <div class="border border-sage/20 p-5" style="background:rgba(42,157,78,0.03)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-2">Result</div>
                            <div class="space-y-1.5">
                                <div class="text-[0.6rem] text-paper/35">✓ No address obtained</div>
                                <div class="text-[0.6rem] text-paper/35">✓ Wesfarmers head notified — Gina Rinehart</div>
                                <div class="text-[0.6rem] text-paper/35">✓ Pacific Fair owner apologised to Jason personally</div>
                                <div class="text-[0.6rem] text-paper/35">✓ Entire management company stood down</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- The Confrontation -->
                <div class="story-chapter reveal" style="transition-delay:0.15s;border-left-color:rgba(123,94,167,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7b5ea7;border-color:rgba(123,94,167,0.4)">The Confrontation</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">TWO CORRUPT COPS.<br><span style="color:#7b5ea7">A PSYCHOLOGIST. A PHONE CALL.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"When the chemist gambit failed, West Kira's father went directly to the disability centre near Broadbeach library where Adam was. He came with two police officers on his payroll — and Peter Demchenko, the father of Aaliyah, Bodie Chalmers's girlfriend. West Kira's dad dropped Mick Gatto's name — as a threat. Adam called Mick Gatto right in front of them."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">A psychologist was present throughout the confrontation and recorded the entire interaction. West Kira's father arrived with two Queensland Police officers who attempted to intimidate Adam Watson, alongside Peter Demchenko — the father of Aaliyah, Bodie Chalmers's girlfriend, establishing the direct connection between the Chalmers network and this intimidation campaign. The invocation of Mick Gatto's name by West Kira's father was intended to establish a threat by association. Adam Watson's response — calling Mick Gatto directly, in front of everyone present — removed any ambiguity. Mick Gatto warned them clearly: do not mess with Adam Watson.</p>

                    <div class="border border-paper/[0.07] p-5 mb-6">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-4">Confrontation — Broadbeach Disability Centre</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Arrival</span><span class="text-[0.65rem] text-paper/45">West Kira's father and Peter Demchenko — father of Aaliyah, Bodie Chalmers's girlfriend — attend the disability centre near Broadbeach library where Adam Watson is present, accompanied by two QPS officers on payroll.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">The Threat</span><span class="text-[0.65rem] text-paper/45">West Kira's father drops Mick Gatto's name — invoking it as a warning against Adam Watson.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-gold/70 w-28 shrink-0 pt-0.5">The Call</span><span class="text-[0.65rem] text-paper/45">Adam Watson calls Mick Gatto directly — in front of all parties present. Gatto warns them: do not interfere with Adam Watson.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] w-28 shrink-0 pt-0.5" style="color:rgba(123,94,167,0.7)">The Recording</span><span class="text-[0.65rem] text-paper/45">A psychologist present records the entire confrontation — the officers, the threat, the phone call, and Mick Gatto's warning.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-sage/70 w-28 shrink-0 pt-0.5">Outcome</span><span class="text-[0.65rem] text-paper/45">Attorney General Deb Frecklington stands down both officers immediately upon receiving the psychologist's recording.</span></div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
                        <div class="border border-hot/20 p-5" style="background:rgba(214,61,47,0.03)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">The Officers</div>
                            <div class="font-display text-xl text-hot mb-2">STOOD DOWN</div>
                            <p class="text-[0.62rem] text-paper/40 leading-relaxed">Both QPS officers present at the confrontation were stood down immediately by Attorney General Deb Frecklington following receipt of the psychologist's recording.</p>
                        </div>
                        <div class="border border-sage/20 p-5" style="background:rgba(42,157,78,0.03)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-2">Recorded In Full</div>
                            <div class="font-display text-xl text-sage mb-2">PSYCHOLOGIST PRESENT</div>
                            <p class="text-[0.62rem] text-paper/40 leading-relaxed">A psychologist recorded the confrontation in its entirety — the intimidation attempt, the Mick Gatto phone call, and Gatto's warning. That recording drove the AG's immediate action.</p>
                        </div>
                    </div>

                    <!-- Evidence Vault -->
                    <div class="evidence-vault">
                        <div class="ev-header" onclick="toggleVault(this)">
                            <div class="flex items-center gap-2">
                                <span class="text-[0.48rem] tracking-[0.22em] uppercase" style="color:#7b5ea7">📁 Evidence Files</span>
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Kira Sr · Disability Centre Confrontation</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">2 files</span>
                                <span class="ev-toggle">▼</span>
                            </div>
                        </div>
                        <div class="ev-body">
                            <div class="ev-file ef-sage" onclick="openMV('audio-disability')">
                                <div class="ev-icon ev-audio"><div class="audio-bars"><b></b><b></b><b></b><b></b><b></b></div></div>
                                <div class="ev-meta">
                                    <div class="ev-name">disability_centre_confrontation_RECORDING.wav</div>
                                    <div class="ev-desc">Audio · Psychologist recording · Confrontation + Mick Gatto call · Broadbeach</div>
                                </div>
                                <span class="redact-tag">⬛ Under Review</span>
                                <span class="ev-cta ml-2">Listen →</span>
                            </div>
                            <div class="ev-file ef-hot" onclick="openMV('video-wk-glasses')">
                                <div class="ev-icon ev-video">▶</div>
                                <div class="ev-meta">
                                    <div class="ev-name">west_kira_glasses_incident.mp4</div>
                                    <div class="ev-desc">Video · In-vehicle · West Kira destroys Adam's glasses · Bodie Chalmers associate</div>
                                </div>
                                <span class="ev-cta">Watch →</span>
                            </div>
                            <div class="ev-zip-bar">
                                <span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">Download — Kira confrontation evidence bundle</span>
                                <button class="mv-dl-btn mv-dl-gold text-[0.48rem]" onclick="downloadZip('kira_confrontation_evidence.zip')">⬇ ZIP Bundle</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- SIDEBAR -->
            <div class="space-y-4">
                <div class="sticky top-24 space-y-4">
                    <div class="border border-hot/20 p-5" style="background:rgba(214,61,47,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">Who Is West Kira Sr.</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40">Owner of Kira &amp; Kira — Gold Coast furniture retail.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40">Associate of Mick Gatto — invoked his name as a threat at the Broadbeach confrontation.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40">Alleged front operation — cocaine distribution through furniture.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40">Alleged Yakuza connection — engaged to bash an individual linked to the supply chain.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40">Directed three-stage intimidation campaign against Adam Watson.</p></div>
                        </div>
                    </div>
                    <div class="border border-paper/[0.07] p-5" style="background:rgba(123,94,167,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase mb-2" style="color:#7b5ea7">Peter Demchenko</div>
                        <p class="text-[0.62rem] text-paper/35 leading-relaxed">Father of Aaliyah — Bodie Chalmers's girlfriend. Present at the Broadbeach disability centre confrontation alongside West Kira's father and the two corrupt QPS officers. His presence establishes the direct connection between the Chalmers network and the intimidation campaign against Adam Watson.</p>
                    </div>
                    <div class="border border-gold/20 p-5" style="background:rgba(232,160,32,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-2">The Wesfarmers Connection</div>
                        <p class="text-[0.62rem] text-paper/40 leading-relaxed mb-3">The Centre Manager's threat to terminate the Priceline lease was legally void — the lease runs to Wesfarmers, not the building. The intimidation had no legal basis.</p>
                        <p class="text-[0.62rem] text-paper/40 leading-relaxed">Gina Rinehart contacted the Wesfarmers head, who called the Pacific Fair owner. The owner was appalled — he personally apologised to Jason the pharmacist, then terminated the entire company managing Pacific Fair.</p>
                    </div>
                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-2">Attorney General</div>
                        <p class="text-[0.62rem] text-paper/35 leading-relaxed">Both QPS officers stood down by <span class="text-paper/55">Deb Frecklington</span>, Attorney General of Queensland, immediately following receipt of the psychologist's recording of the disability centre confrontation.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════
     ILLAWARRA STRATA MANAGEMENT
══════════════════════════ -->
<section class="relative min-h-screen flex flex-col pt-14">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0" style="background:linear-gradient(135deg,rgba(214,61,47,0.07) 0%,transparent 55%,rgba(123,94,167,0.04) 100%)"></div>
        <div class="scanlines absolute inset-0 opacity-40"></div>
        <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(240,236,226,0.018) 1px,transparent 1px),linear-gradient(90deg,rgba(240,236,226,0.018) 1px,transparent 1px);background-size:64px 64px"></div>
        <div style="position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,#d63d2f 35%,#e8a020 65%,transparent)"></div>
    </div>

    <!-- top bar -->
    <div class="relative z-10 flex items-center justify-between px-5 md:px-10 py-3 border-b border-paper/[0.05]">
        <div class="flex items-center gap-4">
            <span class="font-display text-hot text-lg tracking-widest">WOLLONGONG NSW</span>
            <div class="w-px h-4 bg-paper/10"></div>
            <span class="text-[0.55rem] tracking-[0.22em] uppercase text-paper/30">Property Investigation — SP 93922</span>
        </div>
        <div class="hidden sm:flex items-center gap-3 text-[0.52rem] tracking-[0.18em] uppercase text-paper/22">
            <span>5 Grounds</span><div class="w-px h-3 bg-paper/10"></div><span>9 Documents</span><div class="w-px h-3 bg-paper/10"></div><span class="text-gold">Filed 3 Mar 2026</span>
        </div>
    </div>

    <div class="relative z-10 flex-1 grid grid-cols-1 lg:grid-cols-[1fr_400px]">
        <!-- Left -->
        <div class="flex flex-col justify-center px-6 md:px-12 py-14 lg:py-20">
            <div class="fade-up mb-6" style="animation-delay:0.05s">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-6 h-px bg-hot"></div>
                    <span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Strata Investigation</span>
                    <span class="text-[0.48rem] tracking-[0.12em] uppercase text-paper/22 border border-paper/10 px-2 py-0.5">NCAT Active Case</span>
                </div>
                <h1 class="font-display leading-[0.85] tracking-wide glitch" data-text="ILLAWARRA" style="font-size:clamp(3.5rem,10vw,8rem)">ILLAWARRA</h1>
                <h1 class="font-display leading-[0.85] tracking-wide text-hot" style="font-size:clamp(3.5rem,10vw,8rem)">STRATA</h1>
                <h1 class="font-display leading-[0.85] tracking-wide text-paper/30" style="font-size:clamp(2rem,5.5vw,4.5rem)">MANAGEMENT</h1>
                <div class="w-24 h-[2px] bg-hot mt-5 mb-5"></div>
                <p class="font-serif italic text-paper/45 leading-relaxed max-w-xl" style="font-size:clamp(1rem,2vw,1.2rem)">How a Wollongong strata manager turned a consistently paying lot owner into a Federal Court wind-up target — while the building crumbled and the books stayed dark.</p>
            </div>

            <div class="fade-up flex flex-wrap gap-2 mb-10" style="animation-delay:0.22s">
                <span class="evidence-tag" style="color:#d63d2f;border-color:#d63d2f">⚖ NCAT s.237 SSMA 2015</span>
                <span class="evidence-tag" style="color:#e8a020;border-color:#e8a020">📋 Federal Court TAD47/2025</span>
                <span class="evidence-tag" style="color:#7b5ea7;border-color:#7b5ea7">🏢 Oxford On Crown · 30 Burelli St</span>
            </div>

            <!-- 5-stat strip -->
            <div class="fade-up grid grid-cols-5 gap-px bg-paper/[0.04]" style="animation-delay:0.36s">
                <div class="bg-ink px-3 py-5 text-center"><div class="stat-number text-4xl text-hot mb-1">5</div><div class="text-[0.44rem] tracking-[0.1em] uppercase text-paper/28 leading-tight">Legal<br>Grounds</div></div>
                <div class="bg-ink px-3 py-5 text-center"><div class="stat-number text-4xl text-gold mb-1">$63K</div><div class="text-[0.44rem] tracking-[0.1em] uppercase text-paper/28 leading-tight">Lot 4<br>Balance</div></div>
                <div class="bg-ink px-3 py-5 text-center"><div class="stat-number text-4xl text-paper/55 mb-1">$8K</div><div class="text-[0.44rem] tracking-[0.1em] uppercase text-paper/28 leading-tight">Paid<br>Monthly</div></div>
                <div class="bg-ink px-3 py-5 text-center"><div class="stat-number text-4xl text-hot mb-1">2×</div><div class="text-[0.44rem] tracking-[0.1em] uppercase text-paper/28 leading-tight">Wind-Up<br>Petitions</div></div>
                <div class="bg-ink px-3 py-5 text-center"><div class="stat-number text-4xl text-sage mb-1">14</div><div class="text-[0.44rem] tracking-[0.1em] uppercase text-paper/28 leading-tight">Defect<br>Photos</div></div>
            </div>
        </div>

        <!-- Right sidebar -->
        <div class="lg:border-l border-paper/[0.06] flex flex-col" style="background:rgba(8,8,8,0.72)">
            <div class="px-6 py-5 border-b border-paper/[0.06]">
                <div class="text-[0.47rem] tracking-[0.22em] uppercase text-hot mb-1">Active Proceedings</div>
                <div class="font-display text-base tracking-widest text-paper/50 mb-4">CASE REFERENCE</div>
                <div class="space-y-2.5">
                    <div class="border border-paper/[0.06] p-3.5">
                        <div class="text-[0.45rem] tracking-[0.18em] uppercase text-paper/22 mb-1.5">NCAT Application</div>
                        <div class="text-[0.68rem] text-paper/55 leading-relaxed">PSR Crown Investments Pty Ltd<br><span class="text-paper/30">v</span><br>The Owners — SP 93922</div>
                        <div class="text-[0.48rem] text-hot mt-1.5">Filed 3 March 2026</div>
                    </div>
                    <div class="border border-paper/[0.06] p-3.5">
                        <div class="text-[0.45rem] tracking-[0.18em] uppercase text-paper/22 mb-1.5">Federal Court</div>
                        <div class="text-[0.68rem] text-paper/55 leading-relaxed">TAD47/2025<br>Petition 1 dismissed by consent 8 Oct 2025</div>
                        <div class="text-[0.48rem] text-gold mt-1.5">Petition 2 filed Feb 2026 — active</div>
                    </div>
                </div>
            </div>

            <div class="px-6 py-5 border-b border-paper/[0.06]">
                <div class="text-[0.47rem] tracking-[0.22em] uppercase text-paper/22 mb-3">The Property</div>
                <div class="border border-paper/[0.06] p-4 mb-3">
                    <div class="font-display text-xl tracking-wide text-paper/50">OXFORD ON CROWN</div>
                    <div class="text-[0.58rem] text-paper/30 mt-0.5">30 Burelli Street, Wollongong NSW 2500</div>
                    <div class="text-[0.5rem] text-paper/20 mt-0.5">Strata Plan 93922 · ABN: 64 673 362 665</div>
                </div>
                <div class="text-[0.47rem] tracking-[0.22em] uppercase text-paper/22 mb-3">The Applicant</div>
                <div class="text-[0.62rem] text-paper/40 leading-relaxed">PSR Crown Investments Pty Ltd (ACN: 162 526 712) — owns Lots 4 (Suite 5) and 8 (Suite 10), acquired 7 March 2022. Robert Huang, director.</div>
            </div>

            <div class="px-6 py-5 border-b border-paper/[0.06] flex-1">
                <div class="text-[0.47rem] tracking-[0.22em] uppercase text-paper/22 mb-3">Key Parties</div>
                <div class="space-y-3">
                    <div class="flex gap-2.5 items-start"><div class="w-1.5 h-1.5 rounded-full bg-sage mt-1.5 shrink-0"></div><div><div class="text-[0.6rem] text-paper/55">PSR Crown Investments Pty Ltd</div><div class="text-[0.5rem] text-paper/28">Robert Huang, Director · Lots 4 & 8 · SP 93922</div></div></div>
                    <div class="flex gap-2.5 items-start"><div class="w-1.5 h-1.5 rounded-full bg-hot mt-1.5 shrink-0"></div><div><div class="text-[0.6rem] text-paper/55">Wandah Allen-Taylor</div><div class="text-[0.5rem] text-paper/28">Illawarra Strata Management — Strata Manager</div></div></div>
                    <div class="flex gap-2.5 items-start"><div class="w-1.5 h-1.5 rounded-full bg-hot mt-1.5 shrink-0"></div><div><div class="text-[0.6rem] text-paper/55">CCA Legal</div><div class="text-[0.5rem] text-paper/28">Stephen Ecob, Lauren Ikin — Debt Recovery</div></div></div>
                    <div class="flex gap-2.5 items-start"><div class="w-1.5 h-1.5 rounded-full bg-gold mt-1.5 shrink-0"></div><div><div class="text-[0.6rem] text-paper/55">Graham Gordon</div><div class="text-[0.5rem] text-paper/28">Strata Committee Chairman — Levy notices redirected to him</div></div></div>
                </div>
            </div>

            <div class="px-6 py-4">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold blink mb-2">NCAT Determination Pending</div>
                <div class="text-[0.55rem] text-paper/22 leading-relaxed">Urgent interim orders sought to stay Federal Court wind-up proceedings while NCAT determines whether to appoint a compulsory strata managing agent.</div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════
     INTRO
══════════════════════════ -->
<section class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(214,61,47,0.04) 0%,transparent 45%)">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_300px] gap-12">
            <div class="reveal">
                <div class="flex items-center gap-3 mb-5"><div class="w-4 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">The Investigation</span></div>
                <h2 class="font-display leading-none tracking-wide mb-6" style="font-size:clamp(2.2rem,5vw,3.8rem)">PAYING EVERY MONTH.<br><span class="text-hot">FACING WIND-UP.</span></h2>
                <p class="font-serif italic text-paper/55 leading-relaxed mb-5" style="font-size:clamp(1rem,2vw,1.15rem)">"PSR Crown Investments has paid $4,000 per month on each lot without fail since March 2022. In return, their strata manager's chosen debt recovery firm filed two separate wind-up petitions against them in the Federal Court — and loaded their account with over $63,000 in charges, the bulk of which are legal fees, not unpaid levies."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The NCAT application sets out five distinct grounds under section 237 of the Strata Schemes Management Act 2015. Together they describe a strata scheme where common property is deteriorating, committee members are using shared areas without authorisation, the strata roll has been manipulated to intercept levy notices, a consistently paying owner has been subjected to two winding-up petitions, and financial records have been withheld.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">The applicant is not seeking money. They are asking NCAT to appoint a compulsory strata managing agent — and to stay the Federal Court proceedings in the meantime.</p>
            </div>
            <div class="reveal space-y-3" style="transition-delay:0.1s">
                <div class="border border-hot/25 p-5" style="background:rgba(214,61,47,0.03)">
                    <div class="text-[0.47rem] tracking-[0.2em] uppercase text-hot mb-2">What s.237 SSMA Does</div>
                    <p class="text-[0.62rem] text-paper/40 leading-relaxed">Allows NCAT to appoint a compulsory strata managing agent when the Owners Corporation has failed its statutory duties or the scheme is not functioning satisfactorily. The appointed agent takes over all OC functions.</p>
                </div>
                <div class="border border-paper/[0.07] p-5">
                    <div class="text-[0.47rem] tracking-[0.2em] uppercase text-paper/22 mb-2">No Mediation Required</div>
                    <p class="text-[0.62rem] text-paper/35 leading-relaxed">The application relies on the exemption under s.227(4)(a) SSMA — compulsory manager applications are exempt from the mediation requirement.</p>
                </div>
                <div class="border border-gold/25 p-5" style="background:rgba(232,160,32,0.025)">
                    <div class="text-[0.47rem] tracking-[0.2em] uppercase text-gold mb-2">Interim Orders Sought</div>
                    <p class="text-[0.62rem] text-paper/35 leading-relaxed">Stay of Federal Court wind-up proceedings and restraint on Graham Gordon and the OC from taking further adverse action pending NCAT determination.</p>
                </div>
                <div class="border border-paper/[0.07] p-5">
                    <div class="text-[0.47rem] tracking-[0.2em] uppercase text-paper/22 mb-2">Three Cited Authorities</div>
                    <div class="space-y-1.5">
                        <div class="text-[0.57rem] text-paper/32 italic">Maple v The Owners SP 8950 [2021]</div>
                        <div class="text-[0.57rem] text-paper/32 italic">Kahn v Owners Corp SP 2010 [2017]</div>
                        <div class="text-[0.57rem] text-paper/32 italic">Hoare v The Owners SP 73905 [2018]</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════
     GROUNDS
══════════════════════════ -->
<section class="py-20 px-5 md:px-10 border-t border-paper/[0.05]">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Five Grounds — s.237(3) SSMA 2015</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">THE CASE<br><span class="text-hot">AGAINST THEM</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">Five independent grounds, each sufficient alone. Together they describe a scheme whose management has comprehensively failed its lot owners over three years.</p>
            </div>
            <div class="flex flex-wrap gap-2 max-w-xs">
                <span class="evidence-tag" style="color:#d63d2f;border-color:#d63d2f">📄 Statement of Grounds verified</span>
                <span class="evidence-tag" style="color:#e8a020;border-color:#e8a020">⚖ Active NCAT Application</span>
            </div>
        </div>

        <!-- left nav + chapters grid -->
        <div class="grid grid-cols-1 lg:grid-cols-[240px_1fr] gap-10 lg:gap-16">

            <!-- sticky nav -->
            <div class="hidden lg:block">
                <div class="sticky top-24 space-y-1">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/20 mb-4">Five Grounds</div>
                    <a href="#ground1" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot active"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Ground 01</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Common property neglect</div></div></a>
                    <a href="#ground2" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot" style="background:#e8a020;box-shadow:0 0 0 3px rgba(232,160,32,0.2)"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Ground 02</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Unauthorised committee use</div></div></a>
                    <a href="#ground3" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot" style="background:#7b5ea7;box-shadow:0 0 0 3px rgba(123,94,167,0.2)"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Ground 03</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Strata roll manipulation</div></div></a>
                    <a href="#ground4" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Ground 04</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Systematic debt loading</div></div></a>
                    <a href="#ground5" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot" style="background:#7b5ea7;box-shadow:0 0 0 3px rgba(123,94,167,0.2)"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Ground 05</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Financial records withheld</div></div></a>
                    <a href="#timeline" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot" style="background:#2a9d4e;box-shadow:0 0 0 3px rgba(42,157,78,0.2)"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Timeline</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Payment plan betrayal</div></div></a>
                    <a href="#tasmania" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot" style="background:#d63d2f;box-shadow:0 0 0 3px rgba(214,61,47,0.25)"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-hot transition-colors">Tasmania</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Jurisdictional bullying</div></div></a>
                </div>
            </div>

            <div class="space-y-20">

                <!-- ── GROUND 1 ── -->
                <div id="ground1" class="story-chapter reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Ground 01 — s.106 SSMA</span>
                        <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Statutory Duty to Maintain</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE BUILDING IS<br><span class="text-hot">FALLING APART.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Section 106 of the SSMA imposes a non-delegable duty on the Owners Corporation to properly maintain and keep in good and serviceable repair the common property. Oxford On Crown is not being maintained. The photographic evidence is unambiguous."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">The application is supported by 14 photographs of common property at 30 Burelli Street documenting a building in sustained, ongoing physical deterioration — and a strata committee that has failed to address any of it.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 mb-6">
                        <div class="border border-hot/20 p-4" style="background:rgba(214,61,47,0.03)"><div class="text-[0.47rem] tracking-[0.18em] uppercase text-hot mb-1.5">C-6 — Ceiling Hole</div><div class="text-[0.63rem] text-paper/50 leading-relaxed">Large hole in common area ceiling. Exposed structural beams. Live electrical wiring accessible. Unaddressed safety hazard.</div></div>
                        <div class="border border-hot/20 p-4" style="background:rgba(214,61,47,0.03)"><div class="text-[0.47rem] tracking-[0.18em] uppercase text-hot mb-1.5">C-7, C-11 — Black Mould</div><div class="text-[0.63rem] text-paper/50 leading-relaxed">Severe black mould growth at internal wall and ceiling junction near atrium skylight. Active water penetration. Ongoing.</div></div>
                        <div class="border border-paper/[0.07] p-4"><div class="text-[0.47rem] tracking-[0.18em] uppercase text-paper/28 mb-1.5">C-3 — Exposed Wiring</div><div class="text-[0.63rem] text-paper/50 leading-relaxed">Services cupboard: unsecured electrical conduits and exposed cabling. Compliance breach. Unremediated.</div></div>
                        <div class="border border-paper/[0.07] p-4"><div class="text-[0.47rem] tracking-[0.18em] uppercase text-paper/28 mb-1.5">C-5 — Cracked Tiles</div><div class="text-[0.63rem] text-paper/50 leading-relaxed">Multiple cracked floor tiles across common area. Documented trip hazard. No remediation.</div></div>
                        <div class="border border-paper/[0.07] p-4"><div class="text-[0.47rem] tracking-[0.18em] uppercase text-paper/28 mb-1.5">C-9 — Missing Ceiling Tiles</div><div class="text-[0.63rem] text-paper/50 leading-relaxed">Corridor ceiling: multiple missing tiles, void exposed. Systemic neglect across multiple corridors.</div></div>
                        <div class="border border-paper/[0.07] p-4"><div class="text-[0.47rem] tracking-[0.18em] uppercase text-paper/28 mb-1.5">C-1, C-2, C-12–14 — Grounds</div><div class="text-[0.63rem] text-paper/50 leading-relaxed">Bare planters. Warped decking. Deteriorated furniture. Damaged glass doors. Building-wide external neglect.</div></div>
                    </div>

                    <div class="evidence-vault">
                        <div class="ev-header" onclick="toggleVault(this)">
                            <div class="flex items-center gap-2"><span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Annexure C · 14 Photographs of Common Property</span></div>
                            <div class="flex items-center gap-3"><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">14 images</span><span class="ev-toggle">▼</span></div>
                        </div>
                        <div class="ev-body">
                            <div class="ev-file ef-hot" onclick="openDoc('pdf-c6','C-6 — Ceiling Hole With Live Wiring','Annexure C · Ground 01','Image · Large hole in common area ceiling — exposed beams — live wiring accessible — unrepaired',4)"><div class="ev-icon ev-img">📷</div><div class="ev-meta"><div class="ev-name">annexure_C6_ceiling_hole_live_wiring.jpg</div><div class="ev-desc">Image · Common area ceiling hole with exposed beams and live wiring · Unrepaired</div></div><span class="ev-cta">View →</span></div>
                            <div class="ev-file ef-hot" onclick="openDoc('pdf-c7','C-7, C-11 — Severe Black Mould','Annexure C · Ground 01','Image · Black mould at wall/ceiling junction near atrium skylight · Active water penetration · Ongoing',4)"><div class="ev-icon ev-img">📷</div><div class="ev-meta"><div class="ev-name">annexure_C7_C11_black_mould_atrium.jpg</div><div class="ev-desc">Image · Severe black mould near skylight · Active water penetration · Unrepaired</div></div><span class="ev-cta">View →</span></div>
                            <div class="ev-file ef-gold" onclick="openDoc('pdf-c3','C-3 — Exposed Electrical Conduits','Annexure C · Ground 01','Image · Services cupboard — unsecured electrical conduits — compliance breach',4)"><div class="ev-icon ev-img">📷</div><div class="ev-meta"><div class="ev-name">annexure_C3_exposed_electrical_conduits.jpg</div><div class="ev-desc">Image · Services cupboard — unsecured conduits — compliance breach</div></div><span class="ev-cta">View →</span></div>
                            <div class="ev-file ef-gold" onclick="openDoc('pdf-c5','C-5 — Cracked Floor Tiles','Annexure C · Ground 01','Image · Multiple cracked floor tiles across common area · Trip hazard · Unremediated',4)"><div class="ev-icon ev-img">📷</div><div class="ev-meta"><div class="ev-name">annexure_C5_cracked_tiles_common_area.jpg</div><div class="ev-desc">Image · Multiple cracked floor tiles · Unremediated trip hazard</div></div><span class="ev-cta">View →</span></div>
                            <div class="ev-file ef-sage" onclick="openDoc('pdf-c9','C-9 — Missing Ceiling Tiles','Annexure C · Ground 01','Image · Corridor ceiling with multiple missing tiles — void exposed above — systemic neglect',4)"><div class="ev-icon ev-img">📷</div><div class="ev-meta"><div class="ev-name">annexure_C9_missing_ceiling_tiles_corridor.jpg</div><div class="ev-desc">Image · Corridor — missing ceiling tiles — void above exposed — systemic neglect</div></div><span class="ev-cta">View →</span></div>
                            <div class="ev-file ef-sage" onclick="openDoc('pdf-cext','C-1, C-2, C-12–C-14 — External Grounds Neglect','Annexure C · Ground 01','Images (6) · Bare planters · Warped decking · Damaged furniture · External frontage',4)"><div class="ev-icon ev-img">📷</div><div class="ev-meta"><div class="ev-name">annexure_C1_C2_C12-14_external_grounds.jpg</div><div class="ev-desc">Images ×6 · Bare planters · Warped decking · Damaged external furniture</div></div><span class="ev-cta">View →</span></div>
                            <div class="ev-zip-bar"><span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">Full photographic annexure — 14 images — lodged with NCAT 3 March 2026</span><button class="mv-dl-btn mv-dl-gold text-[0.48rem]" onclick="showToast('Annexure C — 14 photographs lodged with NCAT 3 March 2026')">⬇ Annexure C</button></div>
                        </div>
                    </div>
                </div>

                <!-- ── GROUND 2 ── -->
                <div id="ground2" class="story-chapter reveal" style="transition-delay:0.06s;border-left-color:rgba(232,160,32,0.15)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Ground 02 — Common Property</span>
                        <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Unauthorised Use</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">COMMITTEE MEMBERS<br><span class="text-gold">USING COMMON PROPERTY. NO BY-LAW.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Common property belongs to all lot owners collectively. Any grant of exclusive use requires a special by-law passed at a duly convened general meeting — a safeguard designed to prevent the committee from quietly conferring benefits on its own members at the expense of everyone else."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Committee members of the Owners Corporation have been permitted to occupy or use common property of the Scheme without proper authorisation — no special by-law, no general meeting resolution. This is an improper conferral of benefit on committee members at the expense of all lot owners.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                        <div class="border border-paper/[0.07] p-5">
                            <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/25 mb-2">What Should Have Happened</div>
                            <div class="space-y-1.5">
                                <div class="text-[0.62rem] text-paper/40">→ Special by-law passed at general meeting</div>
                                <div class="text-[0.62rem] text-paper/40">→ All lot owners notified and given a vote</div>
                                <div class="text-[0.62rem] text-paper/40">→ Transparent resolution on the public record</div>
                            </div>
                        </div>
                        <div class="border border-hot/20 p-5" style="background:rgba(214,61,47,0.03)">
                            <div class="text-[0.48rem] tracking-[0.18em] uppercase text-hot mb-2">What Actually Happened</div>
                            <div class="space-y-1.5">
                                <div class="text-[0.62rem] text-paper/40">→ No special by-law</div>
                                <div class="text-[0.62rem] text-paper/40">→ No general meeting resolution</div>
                                <div class="text-[0.62rem] text-paper/40">→ Benefit conferred on committee at lot owners' expense</div>
                            </div>
                        </div>
                    </div>
                    <p class="text-[0.65rem] text-paper/32 leading-relaxed border-l-2 border-gold/30 pl-4 italic">Legal authority: <em>Bischoff v Sahade [2015] NSWCATAP 135</em> — unauthorised conferral of benefit on committee members at the expense of lot owners is consistent with the scheme's management not functioning satisfactorily under s.237(3)(a).</p>
                </div>

                <!-- ── GROUND 3 ── -->
                <div id="ground3" class="story-chapter reveal" style="transition-delay:0.1s;border-left-color:rgba(123,94,167,0.2)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7b5ea7;border-color:rgba(123,94,167,0.4)">Ground 03 — Strata Roll</span>
                        <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Manipulation</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">LEVY NOTICES REDIRECTED<br><span style="color:#7b5ea7">TO THE CHAIRMAN. WITHOUT CONSENT.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Without the knowledge or consent of the Applicant, the address recorded for the Applicant's lots on the strata roll was altered. Levy notices and correspondence were directed to Graham Gordon — the chairman of the strata committee — rather than to the lot owner."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">The OC is required to maintain an accurate strata roll and issue levy notices to lot owners at their correct address. Redirecting that correspondence to a committee chairman — without the lot owner's knowledge — is exactly the mechanism by which a debt can be allowed to grow silently, without the owner ever receiving a notice.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                        <div class="border p-5" style="border-color:rgba(123,94,167,0.2);background:rgba(123,94,167,0.03)">
                            <div class="text-[0.48rem] tracking-[0.18em] uppercase mb-2" style="color:#7b5ea7">Strata Roll Should Show</div>
                            <div class="text-[0.65rem] text-paper/45 leading-relaxed">PSR Crown Investments Pty Ltd<br>Robert Huang, Director<br>Lots 4 & 8 — SP 93922<br><span class="text-paper/25 text-[0.52rem]">Registered lot owner address</span></div>
                        </div>
                        <div class="border border-hot/20 p-5" style="background:rgba(214,61,47,0.03)">
                            <div class="text-[0.48rem] tracking-[0.18em] uppercase text-hot mb-2">What Was Recorded Instead</div>
                            <div class="text-[0.65rem] text-paper/45 leading-relaxed">Address altered — notices redirected to:<br><span class="text-hot">Graham Gordon</span><br>Strata Committee Chairman<br><span class="text-paper/25 text-[0.52rem]">Without consent of the lot owner</span></div>
                        </div>
                    </div>

                    <div class="evidence-vault">
                        <div class="ev-header" onclick="toggleVault(this)">
                            <div class="flex items-center gap-2"><span class="text-[0.48rem] tracking-[0.22em] uppercase" style="color:#7b5ea7">📁 Evidence Files</span><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Annexure D · Strata Roll Address Redirection Evidence</span></div>
                            <div class="flex items-center gap-3"><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span><span class="ev-toggle">▼</span></div>
                        </div>
                        <div class="ev-body">
                            <div class="ev-file ef-violet" onclick="openDoc('pdf-d','Annexure D — Strata Roll Address Redirection','Ground 03 · Strata Roll Manipulation','Evidence of strata roll address alteration — levy notices redirected to Graham Gordon without lot owner consent',2)"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_D_strata_roll_address_redirection.pdf</div><div class="ev-desc">PDF · Evidence of address alteration — levy notices redirected to committee chairman</div></div><span class="ev-cta">View →</span></div>
                            <div class="ev-zip-bar"><span class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/25">Strata roll manipulation evidence — lodged with NCAT 3 March 2026</span></div>
                        </div>
                    </div>
                </div>

            </div><!-- end space-y-20 -->
        </div><!-- end grid -->
    </div>
</section>


<!-- ══════════════════════════
     GROUND 4 — DEBT LOADING
══════════════════════════ -->
<section id="ground4" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(214,61,47,0.06) 0%,transparent 55%)">
    <div class="max-w-6xl mx-auto">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Ground 04 — The Core Allegation</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">SYSTEMATIC<br><span class="text-hot">DEBT LOADING</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">A lot owner paying $4,000 per month on each lot, every month, for four years — ending up with a $63,000 debt, mostly from legal fees charged by the same lawyers pursuing them in Federal Court.</p>
            </div>
            <div class="flex flex-wrap gap-2 max-w-xs">
                <span class="evidence-tag" style="color:#d63d2f;border-color:#d63d2f">📋 Annexure A — Account Statements</span>
                <span class="evidence-tag" style="color:#e8a020;border-color:#e8a020">⚖ 2× Wind-Up Petitions</span>
            </div>
        </div>

        <!-- Stats strip -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-14 reveal">
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-5xl text-hot mb-1">$63K</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Lot 4 balance</div><div class="text-[0.5rem] text-paper/18 mt-1">As at 2 March 2026</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-5xl text-gold mb-1">$6,978</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Wind-up filing fees</div><div class="text-[0.5rem] text-paper/18 mt-1">Split across both lots</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-5xl text-paper/55 mb-1">$4K</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Per lot per month</div><div class="text-[0.5rem] text-paper/18 mt-1">Consistent. Never missed.</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-5xl text-sage mb-1">0</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Payments missed</div><div class="text-[0.5rem] text-paper/18 mt-1">March 2022 — present</div></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[1fr_320px] gap-12">
            <div>
                <div class="story-chapter reveal mb-10">
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The account statements for Lot 4 tell a specific story. Between July 2023 and February 2026, CCA Legal charged the account with demand letters, processing fees, company searches, caveat searches, title searches, multiple Statements of Claim, Local Court judgments, Garnishee orders, NSW Strata S86 Demands, Corporations Act S509 Demands — and ultimately the winding-up petition filing fee, split at $3,489 per lot.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Throughout this entire period, the $4,000 monthly payments kept arriving. The Statement of Grounds records payments as recently as 16 February 2026 — 15 days before the NCAT application was filed. The lot owner was not defaulting. They were being systematically loaded with costs by the very agents the Owners Corporation had engaged to pursue them.</p>
                    <p class="text-[0.65rem] text-paper/32 leading-relaxed border-l-2 border-hot/30 pl-4 italic">Legal authority: <em>Hoare v The Owners – Strata Plan No. 73905 [2018] NSWCATCD 45</em> — initiating winding up proceedings against a lot owner making ongoing payments, whose balance is primarily inflated by legal costs charged by the Owners Corporation's own debt recovery agents, constitutes an improper and disproportionate exercise of the Owners Corporation's functions.</p>
                </div>

                <!-- CCA Cost Table -->
                <div class="reveal">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">CCA Legal Charges — Lot 4 Account (Selected entries from Annexure A1)</div>
                    <div style="overflow-x:auto">
                        <table class="cost-table">
                            <thead><tr><th style="width:90px">Date</th><th>Description</th><th style="text-align:right;width:90px">Amount</th></tr></thead>
                            <tbody>
                                <tr><td class="td-date">26 Jul 2023</td><td>CCA #426586: Demand Letter — Registered Mail</td><td class="td-amt">$77.00</td></tr>
                                <tr><td class="td-date">26 Jul 2023</td><td>Processing CCA invoice #426586</td><td class="td-amt">$33.00</td></tr>
                                <tr><td class="td-date">18 Nov 2024</td><td>CCA #481303: Demand Letter — Registered Mail</td><td class="td-amt">$77.00</td></tr>
                                <tr><td class="td-date">18 Nov 2024</td><td>Processing CCA invoice #481303</td><td class="td-amt">$33.00</td></tr>
                                <tr><td class="td-date">27 Jun 2025</td><td>CCA #510320: NSW Strata S86 Demand</td><td class="td-amt">$198.00</td></tr>
                                <tr><td class="td-date">11 Aug 2025</td><td>CCA #515451: Statement of Claim — Local Court</td><td class="td-amt">$1,502.00</td></tr>
                                <tr><td class="td-date">11 Aug 2025</td><td>CCA #515447: Title Search / Care & Attention</td><td class="td-amt">$154.00</td></tr>
                                <tr><td class="td-date">11 Aug 2025</td><td>CCA #515461: NSW Strata S86 Demand</td><td class="td-amt">$209.00</td></tr>
                                <tr><td class="td-date">21 Aug 2025</td><td>CCA #517131: Advice / Correspondence</td><td class="td-amt">$275.00</td></tr>
                                <tr><td class="td-date">10 Sep 2025</td><td>CCA #519893: Title Search / Investigation</td><td class="td-amt">$99.00</td></tr>
                                <tr><td class="td-date">10 Sep 2025</td><td>CCA #519897: Statement of Claim — Local Court</td><td class="td-amt">$997.40</td></tr>
                                <tr><td class="td-date">16 Sep 2025</td><td>CCA #520491: Garnishee Order — Local Court</td><td class="td-amt">$264.00</td></tr>
                                <tr><td class="td-date">16 Sep 2025</td><td>CCA #520489: Judgment — Local Court</td><td class="td-amt">$310.20</td></tr>
                                <tr><td class="td-date">28 Oct 2025</td><td>CCA #525493: Judgment — Local Court</td><td class="td-amt">$248.16</td></tr>
                                <tr><td class="td-date">28 Oct 2025</td><td>CCA #525495: Garnishee Order — Local Court</td><td class="td-amt">$264.00</td></tr>
                                <tr><td class="td-date">12 Nov 2025</td><td>CCA #527096: Company Search</td><td class="td-amt">$55.00</td></tr>
                                <tr><td class="td-date">12 Nov 2025</td><td>CCA #527097: NSW Strata S86 Demand</td><td class="td-amt">$209.00</td></tr>
                                <tr><td class="td-date">12 Nov 2025</td><td>CCA #527098: Caveat Search</td><td class="td-amt">$44.00</td></tr>
                                <tr><td class="td-date">17 Nov 2025</td><td>CCA #527072: S509 Demand — Corporations Act + Affidavit (½ split)</td><td class="td-amt">$313.50</td></tr>
                                <tr><td class="td-date">16 Dec 2025</td><td>Interest on arrears to 16/12/2025</td><td class="td-amt">$1,268.78</td></tr>
                                <tr><td class="td-date">6–9 Feb 2026</td><td>CCA #536264: Wind-Up Petition — Filing Fee + Instructions (½ split)</td><td class="td-amt">$3,489.00</td></tr>
                                <tr class="subtotal"><td colspan="2" class="text-[0.5rem] tracking-[0.12em] uppercase text-paper/28">Selected CCA Legal charges — Lot 4 (excludes underlying levy amounts)</td><td class="td-total">~$10,100+</td></tr>
                                <tr class="subtotal"><td colspan="2" class="text-[0.5rem] tracking-[0.12em] uppercase text-paper/28">Total Lot 4 balance — incl. all fees + interest — 2 March 2026</td><td class="td-total" style="color:#d63d2f">$63,332.85</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-[0.53rem] text-paper/22 mt-2 leading-relaxed">Lot 8 carries a separate balance of $6,388.03 as at 2 March 2026, after the $30,000 lump sum on 20 August 2025 and continued monthly payments.</p>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="reveal space-y-4" style="transition-delay:0.1s">
                <div class="sticky top-24 space-y-4">
                    <div class="border border-hot/25 p-5" style="background:rgba(214,61,47,0.04)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Lot 4 — Balance Breakdown</div>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center py-1 border-b border-paper/[0.05]"><span class="text-[0.6rem] text-paper/45">Administrative Fund</span><span class="text-[0.6rem] text-hot">$49,191.69</span></div>
                            <div class="flex justify-between items-center py-1 border-b border-paper/[0.05]"><span class="text-[0.6rem] text-paper/45">Capital Works Fund</span><span class="text-[0.6rem] text-paper/45">$9,799.22</span></div>
                            <div class="flex justify-between items-center py-1 border-b border-paper/[0.05]"><span class="text-[0.6rem] text-paper/45">Interest due</span><span class="text-[0.6rem] text-paper/45">$4,341.94</span></div>
                            <div class="flex justify-between items-center pt-2"><span class="text-[0.62rem] text-paper/65 font-display tracking-wide">TOTAL (2 Mar 2026)</span><span class="font-display text-xl text-hot">$63,332.85</span></div>
                        </div>
                        <p class="text-[0.5rem] text-paper/22 mt-3 leading-relaxed">A substantial proportion of the Administrative Fund represents accumulated CCA Legal charges, not unpaid levies per se.</p>
                    </div>
                    <div class="border border-gold/20 p-5" style="background:rgba(232,160,32,0.025)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">Lot 8 — Balance</div>
                        <div class="flex justify-between items-center"><span class="text-[0.6rem] text-paper/45">Total incl. interest</span><span class="font-display text-xl text-gold">$6,388.03</span></div>
                        <p class="text-[0.5rem] text-paper/22 mt-2">After $30,000 lump sum 20 Aug 2025 + continued monthly payments.</p>
                    </div>
                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.47rem] tracking-[0.2em] uppercase text-paper/22 mb-3">Payment Record on Lot 4 & 8</div>
                        <div class="space-y-1.5 text-[0.57rem] text-paper/35">
                            <div>→ 19 Sep 2025 · $4,000</div>
                            <div>→ 20 Oct 2025 · $4,000</div>
                            <div>→ 31 Oct 2025 · $4,000</div>
                            <div>→ 17 Nov 2025 · $4,000</div>
                            <div>→ 16 Dec 2025 · $4,000</div>
                            <div>→ 12 Jan 2026 · $4,000</div>
                            <div>→ 9 Feb 2026 · $4,000</div>
                            <div>→ <span class="text-hot">16 Feb 2026 · $4,000 ← Lot 4</span></div>
                        </div>
                        <p class="text-[0.5rem] text-paper/18 mt-2 italic">Payments made while wind-up petition fees were being added to their accounts.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Account statement vault -->
        <div class="mt-10 reveal">
            <div class="evidence-vault">
                <div class="ev-header" onclick="toggleVault(this)">
                    <div class="flex items-center gap-2"><span class="text-[0.48rem] tracking-[0.22em] uppercase text-gold">📁 Evidence Files</span><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Annexure A · Owner Account Statements · Lots 4 & 8 · Signed Wandah Allen-Taylor</span></div>
                    <div class="flex items-center gap-3"><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">2 files</span><span class="ev-toggle">▼</span></div>
                </div>
                <div class="ev-body">
                    <div class="ev-file ef-hot" onclick="openDoc('pdf-a1','Annexure A1 — Lot 4 Owner Account Statement','Ground 04 · Illawarra Strata Management','PDF · 4 pages · Lot 4 (Suite 5) · SP 93922 · Balance $63,332.85 · Printed 02.03.2026 · Signed Wandah Allen-Taylor · Illawarra Strata Management',4)"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_A1_lot4_suite5_owner_account_02March2026.pdf</div><div class="ev-desc">PDF · 4 pages · Lot 4 (Suite 5) · Balance $63,332.85 · Signed Wandah Allen-Taylor · 02.03.2026</div></div><span class="ev-cta">View →</span></div>
                    <div class="ev-file ef-gold" onclick="openDoc('pdf-a2','Annexure A2 — Lot 8 Owner Account Statement','Ground 04 · Illawarra Strata Management','PDF · 4 pages · Lot 8 (Suite 10) · SP 93922 · Balance $6,388.03 · Printed 02.03.2026 · Signed Wandah Allen-Taylor · Illawarra Strata Management',4)"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_A2_lot8_suite10_owner_account_02March2026.pdf</div><div class="ev-desc">PDF · 4 pages · Lot 8 (Suite 10) · Balance $6,388.03 · Signed Wandah Allen-Taylor · 02.03.2026</div></div><span class="ev-cta">View →</span></div>
                    <div class="ev-zip-bar"><span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">Both statements prepared by Illawarra Strata Management — signed Wandah Allen-Taylor — printed 02.03.2026</span><button class="mv-dl-btn mv-dl-gold text-[0.48rem]" onclick="showToast('Annexure A — Account Statements lodged with NCAT 3 March 2026')">⬇ Annexure A</button></div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════
     PAYMENT PLAN TIMELINE
══════════════════════════ -->
<section id="timeline" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(42,157,78,0.03) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-sage"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-sage">The Payment Plan Betrayal</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">PAID $30,000.<br><span class="text-hot">SECOND PETITION FILED ANYWAY.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">The Applicant negotiated in good faith, paid an immediate $30,000 lump sum, had the first petition dismissed by consent — then watched a second petition arrive five months later.</p>
            </div>
        </div>

        <div class="space-y-px mb-14 reveal">
            <div class="inc-row"><div><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">Aug 2025</div><div class="text-[0.44rem] text-paper/22 mt-0.5">Petition Filed</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">FIRST WIND-UP PETITION — FEDERAL COURT TAD47/2025</div><div class="text-[0.57rem] text-paper/35 leading-relaxed">Petition filed against PSR Crown Investments by the Owners Corporation. Wind-up petition filing fee ($6,784) charged to the Lot 8 account on or about 20 August 2025. Company faces dissolution despite consistent monthly payments since 2022.</div></div></div>
            <div class="inc-row pos"><div><div class="text-[0.5rem] tracking-[0.15em] uppercase text-sage">20 Aug 2025</div><div class="text-[0.44rem] text-paper/22 mt-0.5">$30K Paid</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">$30,000 LUMP SUM PAID · PAYMENT PLAN AGREED</div><div class="text-[0.57rem] text-paper/35 leading-relaxed">Robert Huang pays $30,000 immediately to CCA Legal's Stephen Ecob. Written agreement reached: $8,000 per month going forward, first instalment by 20 September 2025. CCA confirms they will withdraw the winding-up application. Evidence at Annexure B.</div></div></div>
            <div class="inc-row pos"><div><div class="text-[0.5rem] tracking-[0.15em] uppercase text-sage">Sep–Dec 2025</div><div class="text-[0.44rem] text-paper/22 mt-0.5">Plan Performed</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">PAYMENTS CONTINUING — PLAN BEING HONOURED</div><div class="text-[0.57rem] text-paper/35 leading-relaxed">Payments recorded: 18 Sep, 19 Sep, 20 Oct, 31 Oct, 17 Nov, 16 Dec 2025. Regular $4,000 payments continuing on both lots. Applicant is actively honouring the agreement.</div></div></div>
            <div class="inc-row pos"><div><div class="text-[0.5rem] tracking-[0.15em] uppercase text-sage">8 Oct 2025</div><div class="text-[0.44rem] text-paper/22 mt-0.5">Dismissed</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">FIRST PETITION DISMISSED BY CONSENT — FEDERAL COURT 8:37AM AEDT</div><div class="text-[0.57rem] text-paper/35 leading-relaxed">Stamped Consent Orders received by Federal Court. Originating Process dismissed. PSR Crown pays Owners Corporation costs of $6,971. Both parties sign — Lauren Ikin for CCA Legal, Robert Huang for PSR Crown. Case TAD47/2025 concluded. See Annexure F.</div></div></div>
            <div class="inc-row"><div><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">9 Feb 2026</div><div class="text-[0.44rem] text-paper/22 mt-0.5">Second Petition</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">SECOND WIND-UP PETITION — BOTH LOTS 4 AND 8</div><div class="text-[0.57rem] text-paper/35 leading-relaxed">CCA #536264 processed 6–9 February 2026. Filing fee of $3,489 charged to each lot account ($6,978 total). Court proceedings filed on or about 11 March 2026. PSR Crown paid $4,000 on Lot 8 on 9 February 2026 and $4,000 on Lot 4 on 16 February 2026 — payments made on the very days the petition fees were being charged to their accounts.</div></div></div>
            <div class="inc-row"><div><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">3 Mar 2026</div><div class="text-[0.44rem] text-paper/22 mt-0.5">NCAT Filed</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">NCAT APPLICATION LODGED — s.237 SSMA 2015</div><div class="text-[0.57rem] text-paper/35 leading-relaxed">PSR Crown Investments lodges application for appointment of compulsory strata managing agent, plus urgent interim orders to stay Federal Court proceedings. Signed by Robert Huang. Nine supporting annexures lodged.</div></div></div>
        </div>

        <!-- Payment plan vault -->
        <div class="reveal">
            <div class="evidence-vault">
                <div class="ev-header" onclick="toggleVault(this)">
                    <div class="flex items-center gap-2"><span class="text-[0.48rem] tracking-[0.22em] uppercase text-sage">📁 Evidence Files</span><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Annexures B & F · Payment Plan Email Chain + Federal Court Consent Orders</span></div>
                    <div class="flex items-center gap-3"><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">3 files</span><span class="ev-toggle">▼</span></div>
                </div>
                <div class="ev-body">
                    <div class="ev-file ef-sage" onclick="openDoc('pdf-b1','Annexure B — Payment Plan Email Chain','Payment Plan Betrayal · 20 Aug 2025','Email chain 20 Aug 2025 · Robert Huang ↔ Stephen Ecob (CCA Legal) · $30,000 payment + $8K/month plan agreement',3)"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_B1_payment_plan_email_chain_20Aug2025.pdf</div><div class="ev-desc">PDF · Email chain · Robert Huang ↔ Stephen Ecob · $30,000 lump sum + $8K/month plan</div></div><span class="ev-cta">View →</span></div>
                    <div class="ev-file ef-sage" onclick="openDoc('pdf-b2','Annexure B — $30,000 Payment Receipt','Payment Plan Betrayal · 20 Aug 2025','PDF · $30,000 payment receipt · PSR Crown Investments → SP 93922 · 20 August 2025',1)"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_B2_payment_receipt_30000_20Aug2025.pdf</div><div class="ev-desc">PDF · $30,000 receipt · PSR Crown → SP 93922 · 20 August 2025</div></div><span class="ev-cta">View →</span></div>
                    <div class="ev-file ef-gold" onclick="openDoc('pdf-f','Annexure F — Federal Court Consent Orders TAD47/2025','Payment Plan Betrayal · 8 Oct 2025','PDF · Federal Court of Australia · TAD47/2025 · Consent Orders stamped 8 Oct 2025 08:37 AEDT · Originating Process dismissed · Costs $6,971',3)"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_F_consent_orders_TAD47_2025_8Oct2025.pdf</div><div class="ev-desc">PDF · Federal Court · TAD47/2025 · Consent Orders 8 Oct 2025 · Dismissed · Costs $6,971</div></div><span class="ev-cta">View →</span></div>
                    <div class="ev-zip-bar"><span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">First petition dismissed by consent — second petition filed against same paying lot owner Feb 2026</span><button class="mv-dl-btn mv-dl-gold text-[0.48rem]" onclick="showToast('Annexures B & F — lodged with NCAT 3 March 2026')">⬇ Annexures B & F</button></div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════
     GROUND 5 + WHY IT MATTERS
══════════════════════════ -->
<section id="ground5" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-16">
            <div id="ground5-inner" class="story-chapter reveal" style="border-left-color:rgba(123,94,167,0.2)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7b5ea7;border-color:rgba(123,94,167,0.4)">Ground 05 — s.182 SSMA</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">RECORDS REQUESTED.<br><span style="color:#7b5ea7">REQUESTS IGNORED.</span></h3>
                <p class="text-[0.68rem] leading-relaxed text-paper/42 mb-4">Section 182 of the SSMA gives lot owners the right to inspect Owners Corporation records. The Applicant has been paying over $8,000 per month and has never received proper receipts or a clear explanation of how those payments are being allocated.</p>
                <p class="text-[0.68rem] leading-relaxed text-paper/42 mb-4">The Lot 8 account shows multiple unexplained 'allocation of unallocated money' and 'levy cancellation' entries on 21 March 2025 that have never been explained. Written requests for clarification have been ignored entirely.</p>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs mt-0.5 shrink-0">✗</span><p class="text-[0.6rem] text-paper/35">No receipts confirming correct allocation of $8,000/month payments</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs mt-0.5 shrink-0">✗</span><p class="text-[0.6rem] text-paper/35">Unexplained 'allocation of unallocated money' entries — 21 Mar 2025, Lot 8</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs mt-0.5 shrink-0">✗</span><p class="text-[0.6rem] text-paper/35">Written requests for clarification — ignored — evidenced Annexure E</p></div>
                </div>
                <div class="evidence-vault mt-5">
                    <div class="ev-header" onclick="toggleVault(this)">
                        <div class="flex items-center gap-2"><span class="text-[0.48rem] tracking-[0.22em] uppercase" style="color:#7b5ea7">📁 Evidence Files</span><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Annexure E · Ignored Correspondence</span></div>
                        <div class="flex items-center gap-3"><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span><span class="ev-toggle">▼</span></div>
                    </div>
                    <div class="ev-body">
                        <div class="ev-file ef-violet" onclick="openDoc('pdf-e','Annexure E — Ignored Correspondence','Ground 05 · Financial Records Withheld','PDF · Copies of emails and letters to the Owners Corporation that were ignored — financial record requests and clarification requests',3)"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_E_ignored_correspondence_OC.pdf</div><div class="ev-desc">PDF · Emails and letters to OC — ignored — financial record requests</div></div><span class="ev-cta">View →</span></div>
                        <div class="ev-zip-bar"><span class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/25">Correspondence ignored by Illawarra Strata Management — lodged NCAT 3 March 2026</span></div>
                    </div>
                </div>
            </div>
            <div class="reveal space-y-4" style="transition-delay:0.1s">
                <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">THIS IS NOT<br><span class="text-hot">A DISPUTE ABOUT MONEY.</span></h3>
                <p class="font-serif italic text-paper/55 leading-relaxed text-lg">"The Applicant has paid consistently for four years. They are not trying to avoid their levy obligations — they are trying to understand why those consistent payments have produced a $63,000 debt, two Federal Court winding-up petitions, a building full of unrepaired defects, and a strata roll that sent their correspondence to the person who now benefits from the wind-up."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">Under section 237 of the SSMA, the question for NCAT is not whether the Applicant owes money. It is whether the Owners Corporation's management has broken down to the point where it should be replaced.</p>
                <div class="border border-hot/20 p-5" style="background:rgba(214,61,47,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Why a Compulsory Manager Is Appropriate</div>
                    <p class="text-[0.62rem] text-paper/40 leading-relaxed">This is a pattern of serious and sustained dysfunction spanning over three years — not an isolated incident. Cited authorities: <em>Maple v The Owners SP 8950 [2021]</em> and <em>Kahn v Owners Corp SP 2010 [2017]</em> establish that exactly this pattern justifies a compulsory management order.</p>
                </div>
                <div class="grid grid-cols-3 gap-3">
                    <div class="border border-hot/20 p-4 text-center" style="background:rgba(214,61,47,0.03)"><div class="font-display text-3xl text-hot mb-1">3+</div><div class="text-[0.5rem] tracking-[0.12em] uppercase text-paper/28">Years of dysfunction</div></div>
                    <div class="border border-paper/[0.07] p-4 text-center"><div class="font-display text-3xl text-gold mb-1">3</div><div class="text-[0.5rem] tracking-[0.12em] uppercase text-paper/28">Cited authorities</div></div>
                    <div class="border border-paper/[0.07] p-4 text-center"><div class="font-display text-3xl text-sage mb-1">5</div><div class="text-[0.5rem] tracking-[0.12em] uppercase text-paper/28">Independent grounds</div></div>
                </div>
            </div>
        </div>

        <!-- Relief Sought -->
        <div class="reveal">
            <div class="flex items-center gap-3 mb-8"><div class="w-8 h-px bg-sage"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-sage">What the Applicant Is Asking For</span><div class="w-8 h-px bg-sage"></div></div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                <div class="border border-sage/25 p-6" style="background:rgba(42,157,78,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-3">Primary Relief — s.237 SSMA</div>
                    <div class="font-display text-2xl tracking-wide text-sage mb-3">COMPULSORY MANAGER</div>
                    <p class="text-[0.65rem] text-paper/40 leading-relaxed mb-4">An order appointing a licensed strata managing agent to exercise all functions of the Owners Corporation. The Applicant does not nominate a specific replacement and asks the Tribunal to appoint a suitable licensed agent on appropriate terms.</p>
                    <div class="text-[0.5rem] tracking-[0.14em] uppercase text-sage/55 border border-sage/20 px-3 py-1.5 inline-block">Relies on s.237(3)(a) and s.237(3)(c) SSMA</div>
                </div>
                <div class="border border-hot/25 p-6" style="background:rgba(214,61,47,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">Urgent Interim Relief</div>
                    <div class="font-display text-2xl tracking-wide text-hot mb-3">STAY THE PROCEEDINGS</div>
                    <p class="text-[0.65rem] text-paper/40 leading-relaxed mb-3">An order staying or suspending any further steps in the Federal Court wind-up proceedings pending NCAT determination. If a wind-up order is made before NCAT decides, PSR Crown faces dissolution — harm that cannot be undone by any later NCAT order.</p>
                    <p class="text-[0.65rem] text-paper/40 leading-relaxed">An order restraining the Owners Corporation and its officers — including Graham Gordon — from taking any further adverse action against the Applicant pending determination.</p>
                </div>
            </div>
        </div>

        <!-- 5 Grounds At a Glance -->
        <div class="reveal">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-4">Five Grounds — At a Glance</div>
            <div class="space-y-px">
                <div class="flex gap-4 p-4 border border-paper/[0.05] items-start" style="background:rgba(4,4,4,0.5)"><div class="font-display text-hot text-2xl w-8 shrink-0 leading-none mt-0.5">01</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Failure to Maintain Common Property — s.106 SSMA</div><div class="text-[0.55rem] text-paper/30">14 photographs. Ceiling holes with live wiring. Severe black mould. Cracked tiles. Exposed electrical conduits. Neglected grounds. Ongoing, unaddressed.</div></div></div>
                <div class="flex gap-4 p-4 border border-paper/[0.05] items-start" style="background:rgba(4,4,4,0.5)"><div class="font-display text-gold text-2xl w-8 shrink-0 leading-none mt-0.5">02</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Unauthorised Use of Common Property by Committee Members</div><div class="text-[0.55rem] text-paper/30">No special by-law. No general meeting resolution. Improper benefit conferred on committee members at lot owners' expense.</div></div></div>
                <div class="flex gap-4 p-4 border border-paper/[0.05] items-start" style="background:rgba(4,4,4,0.5)"><div class="font-display text-2xl w-8 shrink-0 leading-none mt-0.5" style="color:#7b5ea7">03</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Manipulation of Strata Roll — Levy Notices Redirected Without Consent</div><div class="text-[0.55rem] text-paper/30">Lot owner's address altered. Levy notices sent to committee chairman Graham Gordon. Owner deprived of notice of alleged arrears.</div></div></div>
                <div class="flex gap-4 p-4 border border-paper/[0.05] items-start" style="background:rgba(4,4,4,0.5)"><div class="font-display text-hot text-2xl w-8 shrink-0 leading-none mt-0.5">04</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Systematic Debt Loading and Wind-Up Proceedings Against an Active Payer</div><div class="text-[0.55rem] text-paper/30">$4,000/month per lot since 2022. Payment plan agreed. $30,000 paid. First petition dismissed. Second petition filed Feb 2026. Lot 4 balance $63,332.85 — majority CCA Legal fees, not unpaid levies.</div></div></div>
                <div class="flex gap-4 p-4 border border-paper/[0.05] items-start" style="background:rgba(4,4,4,0.5)"><div class="font-display text-2xl w-8 shrink-0 leading-none mt-0.5" style="color:#7b5ea7">05</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Failure to Provide Financial Records and Receipts — s.182 SSMA</div><div class="text-[0.55rem] text-paper/30">No proper receipts. Unexplained account adjustments. Requests for clarification ignored. A paying owner kept entirely in the dark about how their money is being applied.</div></div></div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════
     FULL EVIDENCE VAULT
══════════════════════════ -->
<section id="evidence-vault" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-gold"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-gold">Full Lodgement Bundle</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.5rem,6vw,4rem)">NCAT<br><span class="text-gold">EVIDENCE VAULT</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-lg">Complete document bundle lodged with NCAT on 3 March 2026. Nine documents. Five grounds.</p>
            </div>
        </div>

        <div class="evidence-vault reveal">
            <div class="ev-header" onclick="toggleVault(this)">
                <div class="flex items-center gap-2"><span class="text-[0.48rem] tracking-[0.22em] uppercase text-gold">📁 Complete Lodgement Bundle</span><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— NCAT · PSR Crown Investments v The Owners SP 93922 · 3 March 2026</span></div>
                <div class="flex items-center gap-3"><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">9 documents</span><span class="ev-toggle">▼</span></div>
            </div>
            <div class="ev-body">
                <div class="ev-file ef-hot" onclick="openDoc('pdf-app','NCAT Application Form','s.237 SSMA 2015 · Filed 3 March 2026','PDF · NCAT Application Form · s.237 SSMA 2015 · Signed Robert Huang · Filed 3 March 2026',4)"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">ncat_application_form_PSR_Crown_3March2026.pdf</div><div class="ev-desc">PDF · NCAT Application Form · s.237 SSMA 2015 · Signed Robert Huang · Filed 3 March 2026</div></div><span class="ev-cta">Application →</span></div>
                <div class="ev-file ef-hot" onclick="openDoc('pdf-sog','Statement of Grounds','PSR Crown Investments v The Owners SP 93922','PDF · Statement of Grounds · 5 grounds · Parts A–F · Signed Robert Huang · Filed 3 March 2026',8)"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">statement_of_grounds_PSR_Crown_SP93922_3March2026.pdf</div><div class="ev-desc">PDF · Statement of Grounds · 5 grounds · Parts A–F · Signed Robert Huang · 3 March 2026</div></div><span class="ev-cta">Core Document →</span></div>
                <div class="ev-file ef-gold" onclick="openDoc('pdf-a1','Annexure A1 — Lot 4 Owner Account Statement','Signed Wandah Allen-Taylor · Illawarra Strata Management','PDF · Lot 4 (Suite 5) · Balance $63,332.85 · Printed 02.03.2026 · Signed Wandah Allen-Taylor',4)"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_A1_lot4_owner_account_02March2026.pdf</div><div class="ev-desc">PDF · Annexure A1 · Lot 4 · Balance $63,332.85 · Signed Wandah Allen-Taylor · Illawarra Strata Management</div></div><span class="ev-cta">Annexure A1 →</span></div>
                <div class="ev-file ef-gold" onclick="openDoc('pdf-a2','Annexure A2 — Lot 8 Owner Account Statement','Signed Wandah Allen-Taylor · Illawarra Strata Management','PDF · Lot 8 (Suite 10) · Balance $6,388.03 · Printed 02.03.2026 · Signed Wandah Allen-Taylor',4)"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_A2_lot8_owner_account_02March2026.pdf</div><div class="ev-desc">PDF · Annexure A2 · Lot 8 · Balance $6,388.03 · Signed Wandah Allen-Taylor · Illawarra Strata Management</div></div><span class="ev-cta">Annexure A2 →</span></div>
                <div class="ev-file ef-sage" onclick="openDoc('pdf-b1','Annexure B — Payment Plan Email Chain + $30,000 Receipt','Payment Plan Betrayal · 20 Aug 2025','PDF · Email chain Robert Huang ↔ Stephen Ecob + $30,000 receipt · 20 August 2025',4)"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_B_payment_plan_email_and_receipt_20Aug2025.pdf</div><div class="ev-desc">PDF · Annexure B · Payment plan email chain + $30,000 receipt · 20 August 2025</div></div><span class="ev-cta">Annexure B →</span></div>
                <div class="ev-file ef-hot" onclick="openDoc('pdf-c6','Annexure C — 14 Photographs of Common Property Disrepair','Ground 01 · s.106 SSMA','Images · 14 photographs · Ceiling holes · Black mould · Cracked tiles · Exposed wiring · Neglected grounds',4)"><div class="ev-icon ev-img">📷</div><div class="ev-meta"><div class="ev-name">annexure_C_photographs_common_property_x14.pdf</div><div class="ev-desc">Images · Annexure C · 14 photographs · Ceiling holes · Mould · Tiles · Exposed wiring · Grounds</div></div><span class="ev-cta">Annexure C →</span></div>
                <div class="ev-file ef-violet" onclick="openDoc('pdf-d','Annexure D — Strata Roll Address Redirection Evidence','Ground 03 · Strata Roll Manipulation','PDF · Evidence of strata roll address alteration — levy notices redirected to Graham Gordon without lot owner consent',2)"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_D_strata_roll_address_redirection.pdf</div><div class="ev-desc">PDF · Annexure D · Strata roll manipulation — levy notices → Graham Gordon without consent</div></div><span class="ev-cta">Annexure D →</span></div>
                <div class="ev-file ef-violet" onclick="openDoc('pdf-e','Annexure E — Ignored Correspondence','Ground 05 · Financial Records Withheld','PDF · Emails and letters to OC requesting financial records and clarification — ignored',3)"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_E_ignored_correspondence_OC.pdf</div><div class="ev-desc">PDF · Annexure E · Correspondence to OC ignored — financial record requests</div></div><span class="ev-cta">Annexure E →</span></div>
                <div class="ev-file ef-sage" onclick="openDoc('pdf-f','Annexure F — Federal Court TAD47/2025 Documents','Payment Plan Betrayal · Consent Orders 8 Oct 2025','PDF · Federal Court TAD47/2025 · Consent Orders 8 Oct 2025 + second petition filed c.11 March 2026',5)"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_F_federal_court_TAD47_2025_consent_orders.pdf</div><div class="ev-desc">PDF · Annexure F · Federal Court TAD47/2025 · Consent Orders 8 Oct 2025 + second petition</div></div><span class="ev-cta">Annexure F →</span></div>
                <div class="ev-zip-bar">
                    <span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">Complete NCAT lodgement bundle — 9 documents — PSR Crown Investments v The Owners SP 93922 — Filed 3 March 2026</span>
                    <button class="mv-dl-btn mv-dl-gold text-[0.48rem]" onclick="showToast('Complete bundle — 9 documents — lodged with NCAT 3 March 2026')">⬇ Full Bundle</button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════
     TASMANIA — JURISDICTIONAL BULLYING
══════════════════════════ -->
<section id="tasmania" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(214,61,47,0.07) 0%,rgba(123,94,167,0.04) 60%,transparent 100%)">
    <div class="max-w-6xl mx-auto">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">The Predatory Strategy — Revealed</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">FILED IN<br><span class="text-hot">TASMANIA.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">The winding-up petition against PSR Crown Investments was not filed in NSW, where the property is. It was filed in Tasmania — a jurisdiction Robert Huang has no connection to, where the Federal Court does not permit AVL appearances, and where Graham Gordon has filed before.</p>
            </div>
            <div class="flex flex-wrap gap-2 max-w-sm">
                <span class="evidence-tag" style="color:#d63d2f;border-color:#d63d2f">⚠ No AVL — Must Appear In Person</span>
                <span class="evidence-tag" style="color:#e8a020;border-color:#e8a020">✈ Hobart to Defend</span>
                <span class="evidence-tag" style="color:#7b5ea7;border-color:#7b5ea7">🔁 Pattern — Prior Filings</span>
            </div>
        </div>

        <!-- Anatomy of the strategy -->
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_340px] gap-12 mb-16">
            <div>
                <div class="story-chapter reveal" style="border-left-color:rgba(214,61,47,0.35)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">The Setup</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE LETTERS NEVER ARRIVE.<br><span class="text-hot">THE COURT IS IN HOBART.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"First, you redirect the lot owner's levy notices to yourself so the debt quietly compounds without their knowledge. Then, when the debt is large enough, you file a wind-up petition in a jurisdiction they have no connection to — one that won't let them appear by video link. They either fly to Hobart to fight it or they don't. If they don't, the company winds up. You buy the lots at a fire sale price. That's the play."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The Federal Court's Tasmanian registry was used to file the winding-up proceedings against PSR Crown Investments Pty Ltd. Robert Huang is based in NSW. The property — the entire subject of the dispute — is in Wollongong, NSW. There is no organic connection between PSR Crown Investments and Tasmania. The choice of jurisdiction is not procedural convenience. It is strategic obstruction.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">The Federal Court of Australia's Tasmania registry does not permit appearances by Audio Visual Link (AVL) for winding-up proceedings. A respondent who cannot afford to fly to Hobart, engage Tasmanian counsel, and appear in person is functionally unable to defend. The default position — undefended — is a winding-up order. The company dissolves. The lots go to a court-appointed liquidator. They sell quickly, at a discount. The buyer with resources and foreknowledge is positioned to acquire.</p>

                    <!-- The three-step strategy diagram -->
                    <div class="border border-hot/15 mb-6" style="background:rgba(8,8,8,0.7)">
                        <div class="text-[0.47rem] tracking-[0.22em] uppercase text-hot px-5 py-3 border-b border-hot/10">The Three-Step Predatory Acquisition Strategy — As Alleged</div>
                        <div class="grid grid-cols-1 sm:grid-cols-3 divide-y sm:divide-y-0 sm:divide-x divide-paper/[0.06]">
                            <div class="px-5 py-5">
                                <div class="font-display text-4xl text-hot/30 mb-2">01</div>
                                <div class="text-[0.5rem] tracking-[0.18em] uppercase text-hot mb-2">Intercept</div>
                                <p class="text-[0.62rem] text-paper/40 leading-relaxed">Redirect levy notices on the strata roll to the committee chairman. The lot owner never receives notice of alleged arrears. Debt compounds silently. Owner is unaware.</p>
                            </div>
                            <div class="px-5 py-5">
                                <div class="font-display text-4xl text-gold/30 mb-2">02</div>
                                <div class="text-[0.5rem] tracking-[0.18em] uppercase text-gold mb-2">Load</div>
                                <p class="text-[0.62rem] text-paper/40 leading-relaxed">Engage debt recovery agents to compound legal fees onto the account. File Local Court proceedings, judgments, garnishee orders. The balance inflates far beyond actual unpaid levies.</p>
                            </div>
                            <div class="px-5 py-5">
                                <div class="font-display text-4xl text-paper/20 mb-2">03</div>
                                <div class="text-[0.5rem] tracking-[0.18em] uppercase text-paper/35 mb-2">Crush</div>
                                <p class="text-[0.62rem] text-paper/40 leading-relaxed">File wind-up petition in Tasmania — a jurisdiction with no AVL, no connection to the respondent, and no practical ability for an interstate director to defend without significant legal spend. Default = wind-up order = fire sale.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border border-paper/[0.07] p-5 mb-5">
                        <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/22 mb-3">Why Tasmania Specifically</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-3 items-start"><div class="w-1.5 h-1.5 rounded-full bg-hot mt-1.5 shrink-0"></div><p class="text-[0.62rem] text-paper/42 leading-relaxed">Federal Court Tasmania <span class="text-hot">does not permit AVL</span> appearances for winding-up proceedings. Interstate respondents must attend in person.</p></div>
                            <div class="flex gap-3 items-start"><div class="w-1.5 h-1.5 rounded-full bg-hot mt-1.5 shrink-0"></div><p class="text-[0.62rem] text-paper/42 leading-relaxed">PSR Crown Investments has <span class="text-hot">no connection to Tasmania</span> — no offices, no registered address, no business operations. The property is in Wollongong, NSW.</p></div>
                            <div class="flex gap-3 items-start"><div class="w-1.5 h-1.5 rounded-full bg-hot mt-1.5 shrink-0"></div><p class="text-[0.62rem] text-paper/42 leading-relaxed">Engaging Tasmanian counsel adds <span class="text-hot">cost and delay</span> that a well-resourced opposing party can absorb and an individual director cannot.</p></div>
                            <div class="flex gap-3 items-start"><div class="w-1.5 h-1.5 rounded-full bg-gold mt-1.5 shrink-0"></div><p class="text-[0.62rem] text-paper/42 leading-relaxed">The same lawyer who filed this petition has <span class="text-gold">filed prior winding-up applications in Tasmania for entities connected to Graham Gordon</span> — establishing a pattern, not a one-off choice.</p></div>
                        </div>
                    </div>
                </div>

                <!-- The lawyer pattern -->
                <div class="story-chapter reveal mt-10" style="transition-delay:0.08s;border-left-color:rgba(232,160,32,0.25)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">The Lawyer's Pattern</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">NOT A ONE-OFF.<br><span class="text-gold">THIS IS THE HUSTLE.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"The lawyer engaged to file this petition has done this before — for Graham Gordon's companies, in Tasmania, using the same jurisdictional strategy. This is not a lawyer who happened to be instructed to file in an inconvenient registry. This is a lawyer who has built a practice around filing in Tasmania precisely because it forecloses the other side's ability to respond."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The combination of the same lawyer, the same registry, the same petitioner's corporate network, and the same outcome — jurisdictional inaccessibility for the respondent — constitutes a pattern. It is not possible to explain the choice of Tasmania by reference to legitimate legal strategy when the property, the lot owner, the OC, the strata scheme, and the debt recovery history are all entirely within NSW.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="border border-gold/20 p-5" style="background:rgba(232,160,32,0.03)">
                            <div class="text-[0.48rem] tracking-[0.18em] uppercase text-gold mb-3">This Filing — PSR Crown</div>
                            <div class="space-y-1.5">
                                <div class="text-[0.62rem] text-paper/45">Respondent: PSR Crown Investments Pty Ltd</div>
                                <div class="text-[0.62rem] text-paper/45">Director: Robert Huang — NSW-based</div>
                                <div class="text-[0.62rem] text-paper/45">Property: Wollongong, NSW</div>
                                <div class="text-[0.62rem] text-paper/45">Registry used: <span class="text-hot">Federal Court Tasmania</span></div>
                                <div class="text-[0.62rem] text-paper/45">AVL available: <span class="text-hot">No</span></div>
                                <div class="text-[0.62rem] text-paper/45">Nexus to Tasmania: <span class="text-hot">None</span></div>
                            </div>
                        </div>
                        <div class="border border-paper/[0.07] p-5" style="background:rgba(123,94,167,0.03)">
                            <div class="text-[0.48rem] tracking-[0.18em] uppercase mb-3" style="color:#7b5ea7">Prior Filings — Gordon-Connected Entities</div>
                            <div class="space-y-1.5">
                                <div class="text-[0.62rem] text-paper/45">Same lawyer — confirmed</div>
                                <div class="text-[0.62rem] text-paper/45">Same registry: Federal Court Tasmania</div>
                                <div class="text-[0.62rem] text-paper/45">Same pattern: respondent has no TAS nexus</div>
                                <div class="text-[0.62rem] text-paper/45">Same outcome sought: undefended wind-up</div>
                                <div class="text-[0.62rem] text-paper/20 italic mt-2">Specific prior matters — further details to be added as investigation progresses</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right sidebar -->
            <div class="reveal space-y-4" style="transition-delay:0.1s">
                <div class="sticky top-24 space-y-4">
                    <div class="border border-hot/25 p-5" style="background:rgba(214,61,47,0.05)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">What "Jurisdictional Bullying" Means</div>
                        <p class="text-[0.62rem] text-paper/40 leading-relaxed mb-3">Filing legal proceedings in a registry the opposing party has no connection to — specifically chosen because it imposes maximum cost and inconvenience on them and minimum cost on you — is not a legitimate use of court process. It is an attempt to win by exhaustion rather than on the merits.</p>
                        <p class="text-[0.62rem] text-paper/40 leading-relaxed">When the choice of jurisdiction is combined with a prior pattern of the same tactic by the same lawyer for the same network, it ceases to be coincidence and becomes conduct amenable to scrutiny.</p>
                    </div>

                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/22 mb-3">The Full Sequence — Alleged</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-2.5 items-start"><div class="text-[0.52rem] text-hot w-4 shrink-0 mt-0.5">→</div><p class="text-[0.6rem] text-paper/35 leading-relaxed">Strata roll altered: levy notices redirected to Gordon. Owner never sees the debt building.</p></div>
                            <div class="flex gap-2.5 items-start"><div class="text-[0.52rem] text-hot w-4 shrink-0 mt-0.5">→</div><p class="text-[0.6rem] text-paper/35 leading-relaxed">CCA Legal loads account with fees far exceeding unpaid levies. Balance hits $63K.</p></div>
                            <div class="flex gap-2.5 items-start"><div class="text-[0.52rem] text-hot w-4 shrink-0 mt-0.5">→</div><p class="text-[0.6rem] text-paper/35 leading-relaxed">First wind-up petition. Owner pays $30K lump sum, agrees $8K/month plan. Petition dismissed.</p></div>
                            <div class="flex gap-2.5 items-start"><div class="text-[0.52rem] text-hot w-4 shrink-0 mt-0.5">→</div><p class="text-[0.6rem] text-paper/35 leading-relaxed">Second wind-up petition — filed in <span class="text-hot">Tasmania</span>. No AVL. Must fly to Hobart to defend.</p></div>
                            <div class="flex gap-2.5 items-start"><div class="text-[0.52rem] text-gold w-4 shrink-0 mt-0.5">→</div><p class="text-[0.6rem] text-paper/35 leading-relaxed">If undefended: wind-up order → liquidator → lots sold at discount → acquisition opportunity.</p></div>
                        </div>
                    </div>

                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/22 mb-2">The NCAT Interim Order Becomes Critical</div>
                        <p class="text-[0.62rem] text-paper/35 leading-relaxed">The NCAT application seeks an urgent stay of the Federal Court proceedings. Without that stay, PSR Crown Investments faces wind-up proceedings in a jurisdiction it cannot practically defend — on a debt primarily composed of legal fees charged by the same side pursuing it, on a lot whose correspondence was secretly redirected to the person who now benefits from the wind-up.</p>
                    </div>

                    <div class="border border-hot/15 p-5" style="background:rgba(214,61,47,0.03)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Questions This Raises</div>
                        <div class="space-y-1.5">
                            <div class="text-[0.6rem] text-paper/35">→ Who benefits if PSR Crown winds up?</div>
                            <div class="text-[0.6rem] text-paper/35">→ Does Graham Gordon or connected entities hold a financial interest in acquiring Lots 4 or 8?</div>
                            <div class="text-[0.6rem] text-paper/35">→ How many other respondents has this lawyer placed in Tasmanian proceedings with no TAS nexus?</div>
                            <div class="text-[0.6rem] text-paper/35">→ Is the choice of Tasmania a pattern across Gordon-connected matters specifically?</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stat strip -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] reveal">
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-hot mb-1">0</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">AVL appearances</div><div class="text-[0.5rem] text-paper/18 mt-1">Permitted in Fed Court TAS wind-ups</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-gold mb-1">0</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">TAS connection</div><div class="text-[0.5rem] text-paper/18 mt-1">PSR Crown has none</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-paper/55 mb-1">2+</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Prior TAS filings</div><div class="text-[0.5rem] text-paper/18 mt-1">Same lawyer · Gordon-connected</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-hot mb-1">✈</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Fly to Hobart</div><div class="text-[0.5rem] text-paper/18 mt-1">Or your company winds up</div></div>
        </div>
    </div>
</section>

<!-- ══ FOOTER ══ -->
<footer class="border-t border-paper/[0.05] px-5 md:px-10 py-10 max-w-6xl mx-auto">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
        <div>
            <div class="font-display text-xl tracking-widest text-paper/18 mb-1">COVERT<span class="text-dim">GC</span></div>
            <div class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/12">© 2026 CovertGC — Investigative Journalism</div>
        </div>
        <div class="text-center">
            <div class="text-[0.5rem] tracking-[0.18em] uppercase text-paper/18 mb-1">Case Reference</div>
            <div class="text-[0.6rem] text-paper/28">PSR Crown Investments Pty Ltd v The Owners — Strata Plan No. 93922</div>
            <div class="text-[0.5rem] text-paper/15 mt-0.5">NCAT Application · s.237 SSMA 2015 · Filed 3 March 2026</div>
        </div>
        <div class="text-right">
            <div class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/18 mb-1">Strata Scheme</div>
            <div class="text-[0.6rem] text-paper/28">Oxford On Crown · 30 Burelli St, Wollongong NSW 2500</div>
            <div class="text-[0.5rem] text-paper/15 mt-0.5">SP 93922 · ABN 64 673 362 665</div>
        </div>
    </div>
</footer>


<!-- ══ SCRIPTS ══ -->
<script>
// ── VAULT TOGGLE ──
function toggleVault(header) {
    var body = header.nextElementSibling;
    var toggle = header.querySelector('.ev-toggle');
    var isOpen = body.classList.contains('open');
    body.classList.toggle('open', !isOpen);
    if (toggle) toggle.classList.toggle('open', !isOpen);
}

// ── PANEL ──
function togglePanel() {
    var panel = document.getElementById('case-panel');
    var bd = document.getElementById('panel-bd');
    var open = panel.classList.contains('open');
    panel.classList.toggle('open', !open);
    bd.style.display = open ? 'none' : 'block';
    document.body.style.overflow = open ? '' : 'hidden';
}

// ── SCROLL NAV ──
function scrollTo(selector) {
    var el = document.querySelector(selector);
    if (el) el.scrollIntoView({ behavior: 'smooth' });
    togglePanel();
}

// ── DOCUMENT VIEWER ──
var currentDoc = null;

function openDoc(id, title, tag, desc, pages) {
    currentDoc = { id: id, title: title, tag: tag, desc: desc, pages: pages || 2 };
    document.getElementById('mv-tag').textContent = tag || 'Evidence File';
    document.getElementById('mv-title').textContent = title || 'DOCUMENT';
    document.getElementById('mv-meta').textContent = 'Lodged with NCAT · 3 March 2026 · PSR Crown Investments v The Owners SP 93922';

    var body = document.getElementById('mv-body');
    body.innerHTML = buildPDFViewer(title, desc, pages || 2);

    document.getElementById('mv-wrap').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function buildPDFViewer(title, desc, pages) {
    var pagesHtml = '';
    for (var i = 0; i < Math.min(pages, 5); i++) {
        var lines = '';
        for (var j = 0; j < 9; j++) {
            lines += '<div class="pdf-ph-line' + (j === 0 ? ' h' : '') + '"></div>';
        }
        pagesHtml += '<div class="pdf-ph-page">' + lines + '</div>';
    }
    return '<div class="pdf-ph">' +
        '<div style="font-size:0.48rem;letter-spacing:0.22em;text-transform:uppercase;color:rgba(214,61,47,0.6);margin-bottom:1rem">PDF Document — Lodged with NCAT 3 March 2026</div>' +
        '<div class="pdf-ph-pages">' + pagesHtml + '</div>' +
        '<div style="font-family:\'Bebas Neue\',sans-serif;font-size:1.4rem;letter-spacing:0.06em;color:rgba(240,236,226,0.5);margin-bottom:0.75rem">' + (title || 'DOCUMENT') + '</div>' +
        '<div style="font-size:0.62rem;line-height:1.7;color:rgba(240,236,226,0.35);max-width:480px;margin:0 auto">' + (desc || '') + '</div>' +
        '<div style="margin-top:1.5rem;font-size:0.5rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(240,236,226,0.2);border:1px solid rgba(240,236,226,0.07);display:inline-block;padding:0.35rem 0.75rem">' + pages + ' pages · Lodged with NCAT</div>' +
        '</div>';
}

function closeMV() {
    document.getElementById('mv-wrap').classList.remove('active');
    document.body.style.overflow = '';
}

document.getElementById('mv-wrap').addEventListener('click', function (e) {
    if (e.target === this || e.target === document.getElementById('mv-body')) closeMV();
});
document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeMV(); });

// ── TOAST ──
function showToast(msg) {
    var t = document.createElement('div');
    t.style.cssText = 'position:fixed;bottom:1.5rem;left:50%;transform:translateX(-50%);background:rgba(8,8,8,0.95);border:1px solid rgba(232,160,32,0.35);color:#e8a020;font-family:"DM Mono",monospace;font-size:0.55rem;letter-spacing:0.15em;text-transform:uppercase;padding:0.6rem 1.4rem;z-index:9999;pointer-events:none;transition:opacity 0.3s;white-space:nowrap';
    t.textContent = msg;
    document.body.appendChild(t);
    setTimeout(function () { t.style.opacity = '0'; setTimeout(function () { t.remove(); }, 300); }, 2800);
}

// ── SCROLL REVEAL ──
var obs = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) { if (e.isIntersecting) e.target.classList.add('in'); });
}, { threshold: 0.07 });
document.querySelectorAll('.reveal').forEach(function (el) { obs.observe(el); });
</script>
<section id="episodes" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]">
    <div class="max-w-6xl mx-auto">
        <div class="flex items-end justify-between mb-12 gap-4 flex-wrap">
            <div><div class="text-[0.55rem] tracking-[0.3em] uppercase text-hot mb-2">The Series</div><h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.5rem,6vw,4.5rem)">ALL EPISODES</h2></div>
            <div class="text-[0.62rem] text-paper/28 max-w-xs leading-relaxed">New episodes drop when the investigation is ready — not on a schedule.</div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal group relative border border-hot/40 bg-paper/[0.02] overflow-hidden">
                <div class="absolute top-0 left-0 right-0 h-[2px] bg-hot"></div>
                <div class="relative h-36 overflow-hidden"><img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=500&q=65" alt="" class="w-full h-full object-cover opacity-45 group-hover:scale-105 transition-transform duration-700"/><div class="absolute inset-0 bg-gradient-to-t from-ink/90 to-transparent"></div><div class="absolute top-3 left-3 bg-hot text-paper font-display text-xs tracking-widest px-2 py-1">LIVE NOW</div></div>
                <div class="p-4"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Episode 01</div><div class="font-display text-base tracking-wide leading-tight mb-1">Gold Coast Uncovered</div><div class="text-[0.6rem] text-paper/30">9 chapters · Feb 2026</div></div>
            </div>
            <div class="reveal ep-coming relative border border-paper/[0.07] bg-paper/[0.02] overflow-hidden" style="transition-delay:0.08s;opacity:0.5"><div class="relative h-36 overflow-hidden"><img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=500&q=65" alt="" class="w-full h-full object-cover opacity-25"/><div class="absolute inset-0 bg-gradient-to-t from-ink/90 to-transparent"></div></div><div class="p-4"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/28 mb-1">Episode 02</div><div class="font-display text-base tracking-wide text-paper/35 leading-tight mb-1">Inside the Courtroom</div><div class="text-[0.6rem] text-paper/18">How charges disappear before trial</div></div></div>
            <div class="reveal ep-coming relative border border-paper/[0.07] bg-paper/[0.02] overflow-hidden" style="transition-delay:0.16s;opacity:0.5"><div class="relative h-36 overflow-hidden"><img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=500&q=65" alt="" class="w-full h-full object-cover opacity-25"/><div class="absolute inset-0 bg-gradient-to-t from-ink/90 to-transparent"></div></div><div class="p-4"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/28 mb-1">Episode 03</div><div class="font-display text-base tracking-wide text-paper/35 leading-tight mb-1">The Network</div><div class="text-[0.6rem] text-paper/18">Criminal connections across the Gold Coast</div></div></div>
            <div class="reveal ep-coming relative border border-paper/[0.07] bg-paper/[0.02] overflow-hidden" style="transition-delay:0.24s;opacity:0.5"><div class="relative h-36 overflow-hidden"><img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=500&q=65" alt="" class="w-full h-full object-cover opacity-25"/><div class="absolute inset-0 bg-gradient-to-t from-ink/90 to-transparent"></div></div><div class="p-4"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/28 mb-1">Episode 04</div><div class="font-display text-base tracking-wide text-paper/35 leading-tight mb-1">Who's Accountable?</div><div class="text-[0.6rem] text-paper/18">Institutions that failed</div></div></div>
        </div>
        <div class="mt-6 text-center"><a href="#sms" class="inline-flex items-center gap-3 border border-paper/12 hover:border-gold/40 px-6 py-3 text-[0.58rem] tracking-[0.22em] uppercase text-paper/35 hover:text-gold transition-all">Get notified when the next episode drops</a></div>
    </div>
</section>


<!-- ══════════════════════════════════════
     THANK YOU — ADAM WATSON
══════════════════════════════════════ -->
<section id="thankyou" class="py-24 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(42,157,78,0.04) 0%,rgba(8,8,8,0) 60%)">
    <div class="max-w-4xl mx-auto">
        <div class="flex items-center gap-3 mb-8"><div class="w-8 h-px bg-sage"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-sage">A Personal Note — Episode 1</span><div class="w-8 h-px bg-sage"></div></div>
        <h2 class="font-display leading-none tracking-wide mb-8" style="font-size:clamp(2.5rem,6vw,4.5rem)">THANK YOU,<br><span class="text-sage">ADAM WATSON.</span></h2>
        <div class="float-right ml-8 mb-6 w-48 md:w-64 shrink-0">
            <div class="border border-paper/[0.08] overflow-hidden"><img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80" alt="Adam Watson" class="w-full object-cover" style="height:280px;object-position:center top;filter:grayscale(20%) contrast(1.05)"><div class="border-t border-paper/[0.06] px-3 py-2 bg-paper/[0.02]"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/30">Adam Watson</div><div class="text-[0.48rem] text-paper/18 mt-0.5">Candidate — Seat of Kingsford Smith</div></div></div>
        </div>
        <div class="space-y-5">
            <p class="font-serif italic text-paper/65 leading-relaxed" style="font-size:clamp(1rem,2vw,1.15rem)">"Adam Watson walked into my life at a moment when I had very little — and proceeded to show me more about how Australia actually works than a decade of conventional observation ever could."</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45">Thank you for representing me at court — for standing in a room with me and knowing exactly what to say, when to say it, and how to say it in a way that the system understood. You taught me how to navigate the courts and how to win — not through aggression, but through precision, preparation, and an understanding of process that most people never acquire.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45">Taking down a criminal syndicate with you — navigating the connections between organised crime, institutional failure, and the justice system — has been the most enlightening thing I have ever done. I look forward to our next adventure.</p>
            <div class="flex items-center gap-3 mt-2"><div class="w-6 h-px bg-sage/40"></div><span class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/25">Kosta Kondratenko — CovertGC</span></div>
        </div>
        <div class="clear-both mt-12 pt-8 border-t border-paper/[0.06]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="border border-sage/20 p-6" style="background:rgba(42,157,78,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-4">Adam Watson — Follow His Work</div>
                    <div class="space-y-3">
                        <a href="https://instagram.com" target="_blank" rel="noopener" class="flex items-center gap-3 group"><div class="w-7 h-7 border border-paper/10 flex items-center justify-center text-xs group-hover:border-sage/40 transition-colors">▶</div><div><div class="text-[0.6rem] text-paper/50 group-hover:text-sage transition-colors">Instagram</div><div class="text-[0.52rem] text-paper/25">@adamwatson — follow for updates</div></div></a>
                        <a href="https://youtube.com" target="_blank" rel="noopener" class="flex items-center gap-3 group"><div class="w-7 h-7 border border-paper/10 flex items-center justify-center text-xs group-hover:border-sage/40 transition-colors">▶</div><div><div class="text-[0.6rem] text-paper/50 group-hover:text-sage transition-colors">YouTube</div><div class="text-[0.52rem] text-paper/25">Adam Watson — commentary & investigation</div></div></a>
                    </div>
                </div>
                <div class="border border-gold/20 p-6" style="background:rgba(232,160,32,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-3">Candidate — Federal Election</div>
                    <div class="font-display text-2xl tracking-wide text-gold mb-1">SEAT OF KINGSFORD SMITH</div>
                    <div class="text-[0.6rem] text-paper/40 leading-relaxed">Adam Watson is running for the federal seat of Kingsford Smith against incumbent Matt Thistlethwaite MP. He was introduced to the race by Angus Taylor.</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     SMS SIGNUP
══════════════════════════════════════ -->
<section id="sms" class="py-24 px-5 md:px-10 relative overflow-hidden border-t border-paper/[0.05]">
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 70% 50% at 50% 50%,rgba(214,61,47,0.055) 0%,transparent 70%)"></div>
    <div class="max-w-lg mx-auto text-center relative">
        <div class="flex items-center justify-center gap-3 mb-4"><div class="w-8 h-px bg-gold"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-gold">Intelligence Updates</span><div class="w-8 h-px bg-gold"></div></div>
        <h2 class="font-display leading-[0.9] tracking-wide mb-4" style="font-size:clamp(2.8rem,9vw,5.5rem)">GET THE<br>REAL STORY<br>FIRST</h2>
        <p class="font-serif italic text-paper/38 text-lg leading-relaxed mb-10">New episodes, document drops, and case file updates — direct to your phone. No algorithm. No filter.</p>
        <form id="sms-form" onsubmit="handleSMS(event)" class="flex border border-paper/10 focus-within:border-hot/40 transition-all mb-4">
            <input id="sms-input" type="tel" placeholder="+61 4XX XXX XXX" class="flex-1 bg-transparent outline-none border-none text-paper font-mono text-sm tracking-wider px-5 py-4 placeholder:text-paper/18 placeholder:text-xs"/>
            <button type="submit" class="bg-hot hover:bg-dim font-display tracking-widest text-paper px-7 py-4 transition-colors text-sm whitespace-nowrap">SUBSCRIBE</button>
        </form>
        <p id="sms-msg" class="text-xs tracking-wider min-h-[1.2rem] mb-4"></p>
        <p class="text-[0.54rem] tracking-wide text-paper/18 leading-relaxed">Reply STOP to unsubscribe anytime. Standard rates may apply. We never sell your number.</p>
    </div>
</section>


<!-- ══ FOOTER ══ -->
<footer class="border-t border-paper/[0.05] px-5 md:px-10 py-8 max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-4">
    <div class="font-display text-xl tracking-widest text-paper/18">COVERT<span class="text-dim">GC</span></div>
    <div class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/10 text-center">© 2025 CovertGC — Investigative Journalism — Gold Coast, QLD</div>
    <div class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/10">Season 1 — Ongoing</div>
</footer>


<!-- ══════════════════════════════════════
     SCRIPTS
══════════════════════════════════════ -->
<script>
// ── VAULT TOGGLE ──
function toggleVault(header) {
    var body = header.nextElementSibling;
    var toggle = header.querySelector('.ev-toggle');
    var isOpen = body.classList.contains('open');
    body.classList.toggle('open', !isOpen);
    if(toggle) toggle.classList.toggle('open', !isOpen);
}

// ── MEDIA VIEWER ──
var currentFile = null;

var EVIDENCE = {
    'image-cup': {
        type:'image',
        title:'THE CUP PHOTO',
        tag:'Sandy Tulisi — Rooming House Evidence',
        meta:'Original photograph · Surfers Paradise · Aug–Oct 2023',
        desc:'This photograph, taken without my knowledge, was used to justify a $20 tax invoice from Appel Street Pty Ltd. The "cup left" fine was later omitted from the formal bond deduction statement submitted to the RTA — suggesting even Sandy Tulisi knew it was legally indefensible.',
        src:'https://images.unsplash.com/photo-1514228742587-6b1558fcca3d?w=800&q=80',
        redact:false,
        filename:'sandy_cup_photo.jpg'
    },
    'pdf-ntl': {
        type:'pdf',
        title:'NOTICE TO LEAVE — RTA',
        tag:'Queensland RTA · Oct 2023',
        meta:'PDF Document · Official RTA Form · Issued on false premises',
        desc:'This Notice to Leave was constructed on the false breach notices — six emails claiming rent was overdue when it was not. It was presented to police to justify applying Police Banning Notice No. 385003 in what was fundamentally a civil tenancy dispute. All charges arising from it were dropped in full.',
        filename:'rta_notice_to_leave.pdf',
        pages: 2
    },
    'pdf-court': {
        type:'pdf',
        title:'COURT TRANSCRIPT',
        tag:'Contravene Banning Notice · Charges Dropped',
        meta:'PDF · Court Proceedings · Redacted · All charges dropped',
        desc:'Transcript from the proceedings regarding Contravene Banning Notice No. 385003. The charge was taken on pro bono by a senior Australian lawyer. The case confirmed the Notice to Leave was issued on false grounds. All charges were subsequently dropped in full. No conviction. No penalty.',
        filename:'court_transcript.pdf',
        pages: 8
    },
    'audio-police': {
        type:'audio',
        title:'POLICE INTERVIEW RECORDING — REDACTED',
        tag:'Police Corruption · Task Force Latro',
        meta:'Audio · Redacted · Provided to Premier\'s office and AG Frecklington',
        desc:'Recording captured during the police interview of one of my attackers following the Oracle East assault. The officer makes a comment suggesting a content creator who makes videos about people should expect to be physically attacked. This recording has been provided to the Premier of Queensland and Attorney General Deb Frecklington. Names and identifying details have been filtered.',
        duration: '2:34',
        filename:'police_corruption_audio_REDACTED.wav'
    },
    'pdf-cl1': {
        type:'pdf',
        title:'COUNCIL LETTER 1 — COMPLAINT ACKNOWLEDGED',
        tag:'City of Gold Coast · Ref: Lawmaster 1192 · Dec 16, 2024',
        meta:'PDF · Official Council Correspondence · Signed: Julie Schyf',
        desc:'The City of Gold Coast formally acknowledges receipt of the privacy complaint and confirms it is being investigated by the Chief Risk and Audit Office. The letter references the 45-business-day window under the Information Privacy Act 2009 — a window the Council would subsequently allow to pass before discontinuing its own investigation.',
        filename:'council_letter_1_complaint_acknowledged.pdf',
        pages: 1
    },
    'pdf-cl2': {
        type:'pdf',
        title:'COUNCIL LETTER 2 — INVESTIGATION DISCONTINUED',
        tag:'City of Gold Coast · For the CEO · Investigation Dropped',
        meta:'PDF · Official Council Correspondence · Investigation closed',
        desc:'The Council discontinues its own investigation, citing failure to receive further information from the complainant. The evidence needed to investigate — the photograph, the annotation, the staff member\'s identity — was entirely within the Council\'s own systems. This outcome required escalation to Premier Crisafulli to reverse.',
        filename:'council_letter_2_investigation_discontinued.pdf',
        pages: 1
    },
    'image-aquatic': {
        type:'image',
        title:'AQUATIC CENTRE SURVEILLANCE PHOTO',
        tag:'Privacy Breach · Southport Aquatic Centre · Dec 2024',
        meta:'Placeholder image — original retained by investigators',
        desc:'Photograph taken of Kosta Kondratenko by a Gold Coast Aquatic Centre staff member without consent. Annotated: "Monitor This One. Comes in for shower. Been asked not to use gym." Sent to a private individual with the comment "Look at these shit cunts." A formal privacy complaint was filed. Premier Crisafulli issued a Show Cause notice. Staff were terminated.',
        src:'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=800&q=80',
        redact:true,
        redactLabel:'SUBJECT IDENTITY WITHHELD',
        filename:'aquatic_centre_photo_PLACEHOLDER.jpg'
    },
    'video-oracle': {
        type:'video',
        title:'ORACLE EAST — ASSAULT FOOTAGE',
        tag:'Pending Release · Redacted Version Coming',
        meta:'Video · Pending legal clearance · Identifiers to be filtered',
        desc:'This footage documents the assault at Oracle East — Kosta Kondratenko stalked from Broadbeach North tram stop and attacked by 6 assailants connected to RJ\'s network. The attack was carried out in retaliation for video content published about this network. The footage is pending formal release pending legal advice.',
        isPlaceholder:true,
        placeholderLabel:'FOOTAGE PENDING LEGAL CLEARANCE',
        filename:'oracle_east_assault_PENDING.mp4'
    },
    'pdf-skynews': {
        type:'pdf',
        title:'SKY NEWS EMAIL + QP-9 ATTACHMENT',
        tag:'Media Accountability · QP-9 Disclosure · Referred to CCC',
        meta:'PDF · Email thread with attachment · Names partially redacted',
        desc:'Email from Sky News journalist forwarding Queensland Police charge document (QP-9) to representatives at Hancock Prospecting. A QP-9 is a non-public police record. Its disclosure to a third party is a breach of the Information Privacy Act 2009. Whether the disclosure was motivated by the pattern of hostility toward content creators evident in the Oracle East investigation is a question for the CCC. This matter has been referred.',
        filename:'sky_news_email_QP9_attachment.pdf',
        pages: 3
    },
    'video-viral': {
        type:'video',
        title:'THE VIRAL VIDEO — RJ CONFRONTATION',
        tag:'Gold Coast · The Video That Started It All',
        meta:'Placeholder — full video pending legal review',
        desc:'The direct confrontation video of RJ that circulated widely across the Gold Coast. Submitted to Hancock Prospecting — I was immediately blocked, confirming Adam Watson\'s connection to that network. RJ\'s associates began a sustained harassment campaign against Adam Watson in direct response to this video\'s circulation. The Oracle East assault followed.',
        isPlaceholder:true,
        placeholderLabel:'FULL VIDEO PENDING LEGAL REVIEW',
        filename:'viral_video_RJ_PLACEHOLDER.mp4'
    },
    'pdf-bodie-lie': {
        type:'pdf',
        title:'BODIE CHALMERS — LIE DETECTOR TEST',
        tag:'Forensic Evidence · EyeDetect® Certified · Scored 1/100',
        meta:'PDF · Forensic examination · Certified examiner',
        desc:'Certified EyeDetect® biometric lie detection examination conducted at 50 Cavill Avenue, Surfers Paradise. The subject (Bodie Chalmers) scored 1 out of 100 and was rated as "Deceptive" throughout the entire examination. The examiner is a qualified and certified EyeDetect® professional. This forensic evidence strengthens concerns about Bodie Chalmers\'s credibility and supports the pattern of deceptive behaviour documented throughout Adam Watson\'s account of the coercive control incidents.',
        filename:'bodie_chalmers_lie_detector_test.pdf',
        pages: 1
    },
    'pdf-bodie': {
        type:'pdf',
        title:'BODIE CHALMERS — CRIMINAL HISTORY',
        tag:'Coercive Control Context · Prior Criminal History',
        meta:'PDF · Criminal history · Third parties redacted',
        desc:'Prior criminal history of Bodie Chalmers, the subject of the coercive control allegations detailed in Adam Watson\'s story. This history provides context for understanding the pattern of behaviour documented across multiple incidents — including the DPP malicious prosecution ruling, the Optus social engineering attack, and the Officeworks vehicle attack.',
        filename:'bodie_chalmers_criminal_history.pdf',
        pages: 4
    },
    'pdf-optus': {
        type:'pdf',
        title:'OPTUS APOLOGY LETTER — TIO OUTCOME',
        tag:'Telecommunications Ombudsman · Service Restored',
        meta:'PDF · Optus correspondence · Post-TIO referral',
        desc:'Letter from Optus issued following the TIO referral initiated by Adam Watson\'s complaint to the Prime Minister\'s office. Confirms restoration of service and acknowledges the security failure at the retail store level. Despite this acknowledgment, Adam continues to receive a $2,500 billing claim in connection with the unauthorised deactivation — a charge CovertGC considers unconscionable.',
        filename:'optus_apology_TIO_letter.pdf',
        pages: 2
    },
    'image-driver': {
        type:'image',
        title:'OFFICEWORKS ATTACK — DRIVER PHOTOGRAPHED',
        tag:'Attempted Murder · Officeworks Car Park · Active Proceedings',
        meta:'Placeholder image — face redacted — original with QPS',
        desc:'Photograph taken by the target of the vehicle attack immediately after the Officeworks car park incident. Combined with CCTV footage, it enabled identification and arrest of the driver, who was denied bail. Phone messages link the attack to a $15,000 contract. The face of the driver has been redacted pending completion of court proceedings.',
        src:'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=800&q=80',
        redact:true,
        redactLabel:'FACE REDACTED — PROCEEDINGS ONGOING',
        filename:'officeworks_driver_REDACTED.jpg'
    },
    'video-pf': {
        type:'video',
        title:'PACIFIC FAIR ASSAULT — RJ ASSOCIATES',
        tag:'RJ Criminal Pattern · Incident 03 · Redacted',
        meta:'Video · Identifying details filtered · Original with QPS',
        desc:'Footage of the attack on Adam Watson by RJ\'s associates near the Pacific Fair fruit shop. All five associates present subsequently gave statements identifying RJ as the organiser. RJ was charged and released. QPS is appealing the suspended sentence. All identifying details of uninvolved parties have been filtered.',
        isPlaceholder:true,
        placeholderLabel:'REDACTED VERSION — PENDING UPLOAD',
        filename:'rj_pacific_fair_assault_REDACTED.mp4'
    },
    'video-burg': {
        type:'video',
        title:'ARMED BURGLARY — RJ · PACIFIC FAIR',
        tag:'RJ Criminal Pattern · Incident 04 · Heavily Redacted',
        meta:'Video · Heavily redacted · Original with QPS',
        desc:'Footage documenting the aggravated burglary near Pacific Fair for which RJ was charged. The footage is heavily redacted — faces of uninvolved parties and identifying location details have been obscured. The unredacted original has been provided to Queensland Police.',
        isPlaceholder:true,
        placeholderLabel:'HEAVILY REDACTED — PENDING UPLOAD',
        filename:'rj_burglary_REDACTED.mp4'
    },
    'video-scs': {
        type:'video',
        title:'SEX & CRIME SQUAD — INVESTIGATION TAPE',
        tag:'Active Investigation · Heavily Censored',
        meta:'Video · Sex & Crime Squad · Heavily censored · Active case',
        desc:'Material from the active Sex and Crime Squad investigation in which RJ is a subject. Made possible by the laptop RJ gave Adam Watson — which was surrendered to Southport Police Station. This footage is heavily censored for public release. Full material is with QPS investigators.',
        isPlaceholder:true,
        placeholderLabel:'CENSORED — ACTIVE INVESTIGATION',
        filename:'rj_sex_crime_squad_CENSORED.mp4'
    },
    'pdf-bond': {
        type:'pdf',
        title:'RTA BOND CONFIRMATION — 68-DAY DELAY',
        tag:'Regulatory Failure · SOLAC HOUSE / BeHome',
        meta:'PDF · RTA Bond 714284215 · 68 days after move-in',
        desc:'RTA bond confirmation showing lodgement 68 days after move-in. Legal requirement: 10 business days. At a property with capacity for 100 tenants, if this delay was systematic, hundreds of bonds may have sat outside RTA protection.',
        filename:'rta_bond_confirmation.pdf',
        pages: 1
    },
    'audio-disability': {
        type:'audio',
        title:'DISABILITY CENTRE CONFRONTATION',
        tag:'Broadbeach · Psychologist Recording · AG Deb Frecklington',
        meta:'Audio · Psychologist recording · Two officers stood down immediately',
        desc:'Recording of the confrontation at the Broadbeach disability centre — West Kira\'s father and Peter Demchenko (father of Aaliyah, Bodie Chalmers\'s girlfriend) arriving with two QPS officers on their payroll, West Kira\'s father invoking Mick Gatto\'s name as a threat, Adam Watson calling Mick Gatto directly in front of all parties, Gatto\'s warning to back off. Provided to AG Deb Frecklington. Both officers were stood down immediately.',
        duration: '~8:00',
        filename:'disability_centre_confrontation_RECORDING.wav'
    },
    'video-wk-glasses': {
        type:'video',
        title:'WEST KIRA — GLASSES INCIDENT',
        tag:'West Kira · Bodie Chalmers Associate · In-Vehicle Recording',
        meta:'Video · In-vehicle recording · Identifiers under review',
        desc:'West Kira was given a ride by Adam Watson — an act of goodwill. During the ride he deliberately destroyed Adam\'s glasses. The incident was captured on recording and establishes West Kira\'s character and his connection to the broader network around Bodie Chalmers.',
        isPlaceholder:true,
        placeholderLabel:'FOOTAGE PENDING LEGAL REVIEW',
        filename:'west_kira_glasses_incident.mp4'
    }
};

function openMV(type, title, tag, meta, filename, desc, key) {
    if(key && EVIDENCE[key]) {
        var e = EVIDENCE[key];
        renderMV(e);
    } else {
        renderMV({type:type,title:title,tag:tag,meta:meta,filename:filename,desc:desc});
    }
}

function renderMV(e) {
    currentFile = e;
    document.getElementById('mv-tag').textContent = e.tag || 'Evidence File';
    document.getElementById('mv-title').textContent = e.title || 'DOCUMENT';
    document.getElementById('mv-meta').textContent = e.meta || '';

    var dl = document.getElementById('mv-dl-btn');
    dl.textContent = '⬇ Download ' + (e.filename || 'file');

    var body = document.getElementById('mv-body');
    body.innerHTML = '';

    if(e.type === 'pdf') {
        body.innerHTML = buildPDFViewer(e);
    } else if(e.type === 'audio') {
        body.innerHTML = buildAudioPlayer(e);
    } else if(e.type === 'image') {
        body.innerHTML = buildImageViewer(e);
    } else if(e.type === 'video') {
        body.innerHTML = buildVideoViewer(e);
    }

    document.getElementById('mv-wrap').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function buildPDFViewer(e) {
    var pages = e.pages || 2;
    var pagesHtml = '';
    for(var i=0;i<Math.min(pages,4);i++){
        pagesHtml += '<div class="pdf-ph-page"><div class="pdf-ph-line" style="height:3px;background:rgba(214,61,47,0.3)"></div>' +
            Array(8).fill('<div class="pdf-ph-line"></div>').join('') + '</div>';
    }
    return '<div class="pdf-ph">' +
        '<div style="font-size:0.48rem;letter-spacing:0.22em;text-transform:uppercase;color:rgba(214,61,47,0.6);margin-bottom:1rem">PDF Document — Placeholder Preview</div>' +
        '<div class="pdf-ph-pages">' + pagesHtml + '</div>' +
        '<div style="font-family:\'Bebas Neue\',sans-serif;font-size:1.4rem;letter-spacing:0.06em;color:rgba(240,236,226,0.5);margin-bottom:0.75rem">' + (e.title||'DOCUMENT') + '</div>' +
        '<div style="font-size:0.62rem;line-height:1.7;color:rgba(240,236,226,0.35);max-width:480px;margin:0 auto">' + (e.desc||'') + '</div>' +
        '<div style="margin-top:1.5rem;font-size:0.5rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(240,236,226,0.2);border:1px solid rgba(240,236,226,0.07);display:inline-block;padding:0.35rem 0.75rem">' + pages + ' pages · ' + (e.filename||'document.pdf') + '</div>' +
        '</div>';
}

function buildAudioPlayer(e) {
    var bars = '';
    var numBars = 80;
    var heights = [];
    for(var i=0;i<numBars;i++){
        var h = 15 + Math.random()*70;
        if(i<numBars*0.3||i>numBars*0.7) h = h*0.5;
        heights.push(h);
        bars += '<div class="cap-bar" style="height:'+Math.max(4,h)+'px" data-idx="'+i+'"></div>';
    }
    return '<div class="cap-wrap">' +
        '<div style="font-size:0.48rem;letter-spacing:0.22em;text-transform:uppercase;color:rgba(42,157,78,0.7);margin-bottom:0.5rem">Audio Evidence · Redacted</div>' +
        '<div style="font-family:\'Bebas Neue\',sans-serif;font-size:1.2rem;letter-spacing:0.05em;color:rgba(240,236,226,0.65);margin-bottom:0.25rem">' + (e.title||'AUDIO') + '</div>' +
        '<div style="font-size:0.58rem;color:rgba(240,236,226,0.3);margin-bottom:0.5rem">' + (e.desc||'') + '</div>' +
        '<div class="cap-waveform" id="cap-wave" onclick="scrubAudio(event)">' + bars + '</div>' +
        '<div class="cap-controls">' +
            '<button class="cap-play" id="cap-playbtn" onclick="toggleAudio()">▶</button>' +
            '<div style="flex:1">' +
                '<div style="font-size:0.5rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(240,236,226,0.3);margin-bottom:0.15rem">' + (e.filename||'audio.wav') + '</div>' +
                '<div style="font-size:0.5rem;color:rgba(240,236,226,0.2)">Duration: ' + (e.duration||'~2:30') + ' (redacted version) · Original with investigators</div>' +
            '</div>' +
            '<div class="cap-time" id="cap-time">0:00 / ' + (e.duration||'2:30') + '</div>' +
        '</div>' +
        '<div style="margin-top:0.75rem;font-size:0.48rem;letter-spacing:0.15em;text-transform:uppercase;background:rgba(214,61,47,0.08);border:1px solid rgba(214,61,47,0.2);color:#d63d2f;padding:0.35rem 0.6rem;display:inline-block">⬛ Identifying details filtered — placeholder audio</div>' +
        '</div>';
}

function buildImageViewer(e) {
    var redactHtml = '';
    if(e.redact) {
        redactHtml = '<div class="face-redact" style="top:10%;left:25%;width:25%;height:30%">' +
            '<div style="font-size:0.46rem;letter-spacing:0.18em;text-transform:uppercase;color:#d63d2f;text-align:center">⬛</div>' +
            '<div style="font-size:0.42rem;letter-spacing:0.12em;text-transform:uppercase;color:rgba(214,61,47,0.7);text-align:center;margin-top:0.2rem">' + (e.redactLabel||'REDACTED') + '</div>' +
            '</div>';
    }
    var src = e.src || 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&q=65';
    return '<div class="mv-img-frame">' +
        '<img src="' + src + '" alt="' + (e.title||'Evidence') + '" style="filter:contrast(1.05) saturate(0.8)"/>' +
        redactHtml +
        '<div style="position:absolute;bottom:0;left:0;right:0;padding:1rem;background:linear-gradient(transparent,rgba(4,4,4,0.9))">' +
            '<div style="font-size:0.48rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(240,236,226,0.4)">' + (e.meta||'') + '</div>' +
        '</div>' +
        '</div>' +
        (e.desc ? '<div style="max-width:760px;width:100%;padding:1rem 0 0;font-size:0.62rem;line-height:1.7;color:rgba(240,236,226,0.4)">' + e.desc + '</div>' : '');
}

function buildVideoViewer(e) {
    if(e.isPlaceholder) {
        return '<div style="width:100%;max-width:760px">' +
            '<div class="vid-ph">' +
                '<div class="scanlines"></div>' +
                '<div style="text-align:center;z-index:2;position:relative">' +
                    '<div class="vid-ph-play"><span style="color:rgba(240,236,226,0.4);font-size:1.2rem;margin-left:3px">▶</span></div>' +
                    '<div style="margin-top:0.75rem;font-size:0.48rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(240,236,226,0.25)">' + (e.placeholderLabel||'VIDEO PENDING UPLOAD') + '</div>' +
                '</div>' +
                '<div style="position:absolute;bottom:0.75rem;left:0;right:0;text-align:center">' +
                    '<div style="font-size:0.44rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(240,236,226,0.2)">' + (e.filename||'video.mp4') + '</div>' +
                '</div>' +
            '</div>' +
            '<div style="padding:0.75rem 0 0;font-size:0.62rem;line-height:1.7;color:rgba(240,236,226,0.38)">' + (e.desc||'') + '</div>' +
        '</div>';
    }
    return '<div style="width:100%;max-width:760px">' +
        '<video controls style="width:100%;border:1px solid rgba(240,236,226,0.06)">' +
            '<source src="#" type="video/mp4"/>' +
        '</video>' +
        '<div style="padding:0.75rem 0 0;font-size:0.62rem;line-height:1.7;color:rgba(240,236,226,0.38)">' + (e.desc||'') + '</div>' +
    '</div>';
}

// Audio playback simulation
var audioPlaying = false;
var audioProgress = 0;
var audioInterval = null;

function toggleAudio() {
    audioPlaying = !audioPlaying;
    var btn = document.getElementById('cap-playbtn');
    if(btn) btn.innerHTML = audioPlaying ? '⏸' : '▶';
    if(audioPlaying) {
        audioInterval = setInterval(function(){
            audioProgress += 0.5;
            var bars = document.querySelectorAll('.cap-bar');
            var played = Math.floor((audioProgress/100)*bars.length);
            bars.forEach(function(b,i){
                b.classList.toggle('played', i < played);
            });
            var duration = 150; // 2:30 in seconds
            var elapsed = Math.floor((audioProgress/100)*duration);
            var m = Math.floor(elapsed/60);
            var s = elapsed%60;
            var ct = document.getElementById('cap-time');
            if(ct) ct.textContent = m+':'+(s<10?'0':'')+s+' / 2:30';
            if(audioProgress >= 100) { clearInterval(audioInterval); audioPlaying=false; if(btn)btn.innerHTML='▶'; }
        }, 200);
    } else {
        clearInterval(audioInterval);
    }
}

function scrubAudio(event) {
    var wave = document.getElementById('cap-wave');
    if(!wave) return;
    var rect = wave.getBoundingClientRect();
    audioProgress = ((event.clientX - rect.left) / rect.width) * 100;
    var bars = document.querySelectorAll('.cap-bar');
    var played = Math.floor((audioProgress/100)*bars.length);
    bars.forEach(function(b,i){ b.classList.toggle('played',i<played); });
}

function closeMV() {
    document.getElementById('mv-wrap').classList.remove('active');
    document.body.style.overflow = '';
    audioPlaying = false;
    clearInterval(audioInterval);
}

function downloadFile() {
    if(!currentFile) return;
    var a = document.createElement('a');
    a.href = '#';
    a.download = currentFile.filename || 'covertgc_document';
    a.click();
    // Toast
    showToast('Download started: ' + (currentFile.filename||'file'));
}

function downloadZip(name) {
    showToast('ZIP download started: ' + name);
}

function showToast(msg) {
    var t = document.createElement('div');
    t.style.cssText = 'position:fixed;bottom:1.5rem;left:50%;transform:translateX(-50%);background:rgba(8,8,8,0.95);border:1px solid rgba(232,160,32,0.3);color:#e8a020;font-family:DM Mono,monospace;font-size:0.55rem;letter-spacing:0.15em;text-transform:uppercase;padding:0.6rem 1.2rem;z-index:9999;pointer-events:none;transition:opacity 0.3s';
    t.textContent = msg;
    document.body.appendChild(t);
    setTimeout(function(){ t.style.opacity='0'; setTimeout(function(){ t.remove(); },300); }, 2500);
}

// ── VAULT TOGGLE ──
function toggleVault(header) {
    var body = header.nextElementSibling;
    var toggle = header.querySelector('.ev-toggle');
    var isOpen = body.classList.contains('open');
    body.classList.toggle('open', !isOpen);
    if (toggle) toggle.classList.toggle('open', !isOpen);
}

// Close MV on backdrop
document.getElementById('mv-wrap').addEventListener('click',function(e){if(e.target===this||e.target===document.getElementById('mv-body'))closeMV();});
document.addEventListener('keydown',function(e){if(e.key==='Escape')closeMV();});

// ── PANEL ──
function togglePanel() {
    var panel = document.getElementById('case-panel');
    var bd = document.getElementById('panel-bd');
    var open = panel.classList.contains('open');
    panel.classList.toggle('open',!open);
    bd.style.display = open?'none':'block';
    document.body.style.overflow = open?'':'hidden';
}

// ── VIDEO PLAYER ──
function seekToChapter(index) {
    var p = window.vidstackPlayer;
    if(!p) return;
    var tracks = p.textTracks;
    var ct = null;
    for(var i=0;i<tracks.length;i++){if(tracks[i].kind==='chapters'){ct=tracks[i];break;}}
    if(ct&&ct.cues&&ct.cues.length>index){p.currentTime=ct.cues[index].startTime;}
    else{var d=p.duration||0;if(d>0)p.currentTime=(d/6)*index;}
    document.getElementById('player').scrollIntoView({behavior:'smooth',block:'center'});
}

// ── SMS ──
function handleSMS(e) {
    e.preventDefault();
    var v = document.getElementById('sms-input').value.trim().replace(/\s/g,'');
    var msg = document.getElementById('sms-msg');
    if(!v||v.length<10){msg.style.color='#d63d2f';msg.textContent='✗ Please enter a valid Australian mobile number.';return;}
    msg.style.color='#2a9d4e';msg.textContent='✓ You\'re in. First intel drop incoming.';
    document.getElementById('sms-input').value='';
}

// ── SCROLL REVEAL ──
var obs = new IntersectionObserver(function(entries){
    entries.forEach(function(e){if(e.isIntersecting)e.target.classList.add('in');});
},{threshold:0.08});
document.querySelectorAll('.reveal').forEach(function(el){obs.observe(el);});
</script>

<!-- ══════════════════════════════════════
     EPISODES GRID
══════════════════════════════════════ -->

<footer class="border-t border-paper/[0.05] px-5 md:px-10 py-10 max-w-6xl mx-auto">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
        <div>
            <div class="font-display text-xl tracking-widest text-paper/18 mb-1">COVERT<span class="text-dim">GC</span></div>
            <div class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/12">© 2026 CovertGC — Investigative Journalism</div>
        </div>
        <div class="text-center">
            <div class="text-[0.5rem] tracking-[0.18em] uppercase text-paper/18 mb-1">Case Reference</div>
            <div class="text-[0.6rem] text-paper/28">PSR Crown Investments Pty Ltd v The Owners — Strata Plan No. 93922</div>
            <div class="text-[0.5rem] text-paper/15 mt-0.5">NCAT Application · s.237 SSMA 2015 · Filed 3 March 2026</div>
        </div>
        <div class="text-right">
            <div class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/18 mb-1">Strata Scheme</div>
            <div class="text-[0.6rem] text-paper/28">Oxford On Crown · 30 Burelli St, Wollongong NSW 2500</div>
            <div class="text-[0.5rem] text-paper/15 mt-0.5">SP 93922 · ABN 64 673 362 665</div>
        </div>
    </div>
</footer>

</body>
</html>