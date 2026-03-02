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
                    <div onclick="seekToChapter(0)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-hot/5 border border-transparent hover:border-hot/20 cursor-pointer transition-all group"><span class="font-display text-hot text-sm w-5 shrink-0">01</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">The Bikie Franchise Model</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Organised Crime</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-hot transition-colors shrink-0">▶</span></div>
                    <div onclick="seekToChapter(1)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-gold/5 border border-transparent hover:border-gold/20 cursor-pointer transition-all group"><span class="font-display text-gold text-sm w-5 shrink-0">02</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Invisible on the Glitter Strip</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Homelessness</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-gold transition-colors shrink-0">▶</span></div>
                    <div onclick="seekToChapter(2)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-sage/5 border border-transparent hover:border-sage/20 cursor-pointer transition-all group"><span class="font-display text-sage text-sm w-5 shrink-0">03</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Developer Money & Council Votes</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Political Corruption</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-sage transition-colors shrink-0">▶</span></div>
                    <div onclick="seekToChapter(3)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-violet/5 border border-transparent hover:border-violet/20 cursor-pointer transition-all group"><span class="font-display text-violet text-sm w-5 shrink-0">04</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Meth, Money & the M1</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Drug Trade</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-violet transition-colors shrink-0">▶</span></div>
                    <div onclick="seekToChapter(4)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-gold/5 border border-transparent hover:border-gold/20 cursor-pointer transition-all group"><span class="font-display text-gold text-sm w-5 shrink-0">05</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">How Homelessness Feeds Crime</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Intersection</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-gold transition-colors shrink-0">▶</span></div>
                    <div onclick="seekToChapter(5)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-hot/5 border border-transparent hover:border-hot/20 cursor-pointer transition-all group"><span class="font-display text-hot text-sm w-5 shrink-0">06</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Who's Actually Watching?</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Accountability</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-hot transition-colors shrink-0">▶</span></div>
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
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span>
                            <span class="ev-toggle">▼</span>
                        </div>
                    </div>
                    <div class="ev-body">
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
     EPISODES GRID
══════════════════════════════════════ -->
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
</body>
</html>