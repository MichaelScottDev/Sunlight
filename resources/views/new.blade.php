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
            tracks: [{
                src: 'https://files.vidstack.io/sprite-fight/chapters.vtt',
                kind: 'chapters', language: 'en-US', default: true,
            }],
            layout: new VidstackPlayerLayout({
                thumbnails: 'https://files.vidstack.io/sprite-fight/thumbnails.vtt',
            }),
        });
    </script>

    <style>
        body::after {
            content:'';position:fixed;inset:0;
            background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
            pointer-events:none;z-index:9998;
        }
        ::-webkit-scrollbar{width:3px}
        ::-webkit-scrollbar-track{background:#080808}
        ::-webkit-scrollbar-thumb{background:#d63d2f}

        @keyframes blink{0%,100%{opacity:1}50%{opacity:0.25}}
        .blink{animation:blink 2s step-end infinite}

        @keyframes fadeUp{from{opacity:0;transform:translateY(18px)}to{opacity:1;transform:translateY(0)}}
        .fade-up{animation:fadeUp 0.65s ease both}

        .reveal{opacity:0;transform:translateY(24px);transition:opacity 0.55s ease,transform 0.55s ease}
        .reveal.in{opacity:1;transform:translateY(0)}

        #case-panel{transition:transform 0.4s cubic-bezier(0.4,0,0.2,1);transform:translateX(100%)}
        #case-panel.open{transform:translateX(0)}

        .case-card{transition:transform 0.25s ease,box-shadow 0.25s ease}
        .case-card:hover{transform:translateY(-3px);box-shadow:0 16px 48px rgba(0,0,0,0.5)}

        .bar-accent{transition:transform 0.35s ease;transform:scaleX(0);transform-origin:left}
        .case-card:hover .bar-accent{transform:scaleX(1)}

        .bar-accent-y{transition:transform 0.35s ease;transform:scaleY(0);transform-origin:bottom}
        .panel-item:hover .bar-accent-y{transform:scaleY(1)}

        .scanlines{
            background:repeating-linear-gradient(0deg,transparent,transparent 2px,rgba(0,0,0,0.03) 2px,rgba(0,0,0,0.03) 4px);
            pointer-events:none;
        }

        .ep-coming{position:relative;pointer-events:none}
        .ep-coming::after{
            content:'COMING SOON';position:absolute;inset:0;
            display:flex;align-items:center;justify-content:center;
            font-family:'Bebas Neue',sans-serif;font-size:1.3rem;letter-spacing:0.2em;
            color:rgba(240,236,226,0.5);background:rgba(8,8,8,0.75);backdrop-filter:blur(2px);
        }

        /* ── STORY SECTION STYLES ── */
        .story-chapter{
            border-left:2px solid rgba(240,236,226,0.08);
            padding-left:1.5rem;
            transition:border-color 0.3s ease;
        }
        .story-chapter:hover{ border-left-color:rgba(214,61,47,0.4); }

        .evidence-tag{
            display:inline-flex;align-items:center;gap:0.4rem;
            font-size:0.52rem;letter-spacing:0.18em;text-transform:uppercase;
            border:1px solid currentColor;padding:0.25rem 0.6rem;
            opacity:0.6;transition:opacity 0.2s ease;
        }
        .evidence-tag:hover{opacity:1;}

        .timeline-dot{
            width:8px;height:8px;border-radius:50%;background:#d63d2f;
            box-shadow:0 0 0 3px rgba(214,61,47,0.2);
            flex-shrink:0;margin-top:5px;
        }

        @keyframes pulseRed{0%,100%{box-shadow:0 0 0 3px rgba(214,61,47,0.2)}50%{box-shadow:0 0 0 6px rgba(214,61,47,0.1)}}
        .timeline-dot.active{animation:pulseRed 2s ease infinite;}

        .stat-number{
            font-family:'Bebas Neue',sans-serif;
            line-height:1;
        }

        .doc-reveal{
            background:rgba(240,236,226,0.02);
            border:1px solid rgba(240,236,226,0.07);
            border-left:3px solid #d63d2f;
            transition:background 0.2s ease;
        }
        .doc-reveal:hover{ background:rgba(214,61,47,0.04); }
    </style>
</head>
<body class="bg-ink text-paper font-mono overflow-x-hidden">

<!-- ══════════════════════════════════════
     NAV
══════════════════════════════════════ -->
<nav class="fixed top-0 left-0 right-0 z-50 flex justify-between items-center px-5 py-3 bg-ink/95 backdrop-blur-md border-b border-paper/[0.06]">
    <div class="flex items-center gap-4">
        <a href="#" class="font-display text-2xl tracking-widest">COVERT<span class="text-hot">GC</span></a>
        <span class="hidden sm:block text-[0.52rem] tracking-[0.2em] uppercase text-paper/20 border-l border-paper/10 pl-4">Investigative Vlog Series</span>
    </div>
    <div class="flex items-center gap-3">
        <a href="#episodes" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">Episodes</a>
        <a href="#story" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">My Story</a>
        <a href="#privacy" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">Privacy Breach</a>
        <a href="#adam" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">Coercive Control</a>
        <a href="#assault" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">Oracle East</a>
        <a href="#privacy" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">Privacy Breach</a>
        <a href="#brazen" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">Brazen Crime</a>
        <a href="#redress" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">Redress Scheme</a>
        <a href="#cases" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">Case Files</a>
        <a href="#sms" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">Subscribe</a>
        <button onclick="togglePanel()" class="flex items-center gap-2 border border-hot/50 hover:border-hot hover:bg-hot/10 px-3 py-2 transition-all text-[0.55rem] tracking-[0.15em] uppercase text-hot">
            &#9776; Case Files
        </button>
        <span class="text-[0.52rem] tracking-[0.18em] uppercase text-gold border border-gold/60 px-3 py-1.5 blink">⬤ EP.01</span>
    </div>
</nav>

<!-- ══════════════════════════════════════
     CASE STUDY SIDE PANEL
══════════════════════════════════════ -->
<div id="case-panel" class="fixed top-0 right-0 bottom-0 z-[300] w-full sm:w-96 bg-[#0d0d0d] border-l border-paper/[0.08] overflow-y-auto flex flex-col">
    <div class="sticky top-0 bg-[#0d0d0d] border-b border-paper/[0.07] px-5 py-4 flex justify-between items-center z-10">
        <div>
            <div class="text-[0.52rem] tracking-[0.25em] uppercase text-hot mb-0.5">Episode 1 — Intelligence Dossier</div>
            <div class="font-display text-xl tracking-widest">CASE FILES</div>
        </div>
        <button onclick="togglePanel()" class="text-paper/30 hover:text-paper text-xs tracking-widest border border-paper/10 hover:border-paper/30 px-3 py-2 transition-all">✕</button>
    </div>
    <div class="flex-1 p-4 space-y-2">
        <!-- Story chapters first -->
        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/18 px-1 pt-3 pb-0.5">Privacy Breach</div>
        <button onclick="openModal('privacybreach');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-violet/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-violet"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-violet mb-1">PV — Council Privacy Breach</div>
                <div class="font-display text-base tracking-wide group-hover:text-violet transition-colors leading-tight">Photographed & Leaked</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">Southport Aquatic Centre — Tate retraction demanded</div>
            </div>
        </button>
        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/18 px-1 pt-3 pb-0.5">Privacy Breach</div>
        <button onclick="openModal('privacyletter1');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-violet/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-violet"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-violet mb-1">L1 — Council Letter</div>
                <div class="font-display text-base tracking-wide group-hover:text-violet transition-colors leading-tight">Complaint Acknowledged</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">Ref: Lawmaster 1192 — 16 Dec 2024</div>
            </div>
        </button>
        <button onclick="openModal('privacyletter2');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">L2 — Council Letter</div>
                <div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">Investigation Dropped</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">Onus placed on complainant</div>
            </div>
        </button>
        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/18 px-1 pt-3 pb-0.5">Brazen Crime</div>
        <button onclick="openModal('brazenfile');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">B2 — Press Freedom</div>
                <div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">When Crime Targets the Press</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">Firebombing, intimidation & no shame</div>
            </div>
        </button>
        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/18 px-1 pt-3 pb-0.5">My Assault — Oracle East</div>
        <button onclick="openModal('policeaccount');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">P — Police Accountability</div>
                <div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">Who Deserves Protection?</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">The recorded comment & corruption probe</div>
            </div>
        </button>
        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/18 px-1 pt-3 pb-0.5">Public Interest</div>
        <button onclick="openModal('redressfile');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-sage/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-sage"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-1">R — Redress Scheme</div>
                <div class="font-display text-base tracking-wide group-hover:text-sage transition-colors leading-tight">Who's Checking the Claims?</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">Attendance records & the verification gap</div>
            </div>
        </button>
        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/18 px-1 pt-1 pb-0.5">Adam's Story — Coercive Control</div>
        <button onclick="openModal('coercive');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-violet/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-violet"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-violet mb-1">A — Coercive Control</div>
                <div class="font-display text-base tracking-wide group-hover:text-violet transition-colors leading-tight">The Anatomy of Control</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">Surveillance, isolation & the 1/100 test</div>
            </div>
        </button>
        <button onclick="openModal('malicious');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">B — Malicious Prosecution</div>
                <div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">DPP Ruling & Officer Fired</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">Charge dismissed at first mention</div>
            </div>
        </button>
        <button onclick="openModal('optus');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-gold/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-gold"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-1">C — Telco Security</div>
                <div class="font-display text-base tracking-wide group-hover:text-gold transition-colors leading-tight">The Optus Breach</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">PM referral & CEO directive</div>
            </div>
        </button>
        <button onclick="openModal('juvenile');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-gold/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-gold"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-1">D — Youth Justice Gap</div>
                <div class="font-display text-base tracking-wide group-hover:text-gold transition-colors leading-tight">Adult Time, Adult Crime</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">The clean slate that isn't</div>
            </div>
        </button>
        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/18 px-1 pt-3 pb-0.5">Personal Investigation</div>
        <button onclick="openModal('rooming');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">S1 — Rental Crisis</div>
                <div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">The Rooming House Trap</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">BeHome, SOLAC HOUSE & the dual identity</div>
            </div>
        </button>
        <button onclick="openModal('bond');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-gold/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-gold"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-1">S2 — Regulatory Failure</div>
                <div class="font-display text-base tracking-wide group-hover:text-gold transition-colors leading-tight">The Bond Delay</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">68 days. Legal requirement: 10.</div>
            </div>
        </button>
        <button onclick="openModal('harassment');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">S3 — Tenant Harassment</div>
                <div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">Fines, Threats & False Claims</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">A $20 cup fine. Six false rent notices.</div>
            </div>
        </button>
        <button onclick="openModal('eviction');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">S4 — Unlawful Eviction</div>
                <div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">Police, Arrest & Homelessness</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">How a civil dispute became a criminal charge</div>
            </div>
        </button>
        <button onclick="openModal('lawyer');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-gold/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-gold"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-1">S5 — Legal Outcome</div>
                <div class="font-display text-base tracking-wide group-hover:text-gold transition-colors leading-tight">Charges Dropped</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">Pro bono. All charges dropped.</div>
            </div>
        </button>

        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/18 px-1 pt-3 pb-0.5">Gold Coast Investigation</div>
        <button onclick="openModal('bikie');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">01 — Organised Crime</div>
                <div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">The Bikie Franchise Model</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">OMG security rackets & property fronts on the Strip</div>
            </div>
        </button>
        <button onclick="openModal('homeless');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-gold/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-gold"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-1">02 — Homelessness</div>
                <div class="font-display text-base tracking-wide group-hover:text-gold transition-colors leading-tight">Invisible on the Glitter Strip</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">$28K clearances & the hidden census</div>
            </div>
        </button>
        <button onclick="openModal('developer');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-sage/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-sage"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-1">03 — Political Corruption</div>
                <div class="font-display text-base tracking-wide group-hover:text-sage transition-colors leading-tight">Developer Money & Council Votes</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">$45K donations & 200% height variances</div>
            </div>
        </button>
        <button onclick="openModal('drugs');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-violet/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-violet"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-violet mb-1">04 — Drug Trade</div>
                <div class="font-display text-base tracking-wide group-hover:text-violet transition-colors leading-tight">Meth, Money & the M1</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">$3.8M ghost businesses & delivery networks</div>
            </div>
        </button>
        <button onclick="openModal('pipeline');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-gold/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-gold"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-1">05 — Intersection</div>
                <div class="font-display text-base tracking-wide group-hover:text-gold transition-colors leading-tight">How Homelessness Feeds Crime</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">The youth pipeline from couch to charge sheet</div>
            </div>
        </button>
        <button onclick="openModal('oversight');togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">06 — Accountability</div>
                <div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">Who's Actually Watching?</div>
                <div class="text-[0.62rem] text-paper/30 mt-1 leading-relaxed">CMC backlog & the accountability void</div>
            </div>
        </button>
    </div>
    <div class="p-4 border-t border-paper/[0.06]">
        <a href="#sms" onclick="togglePanel()" class="block w-full text-center bg-hot hover:bg-dim font-display tracking-widest text-paper py-3 text-sm transition-colors">GET ALERTS FOR EP.02</a>
    </div>
</div>
<div id="panel-bd" onclick="togglePanel()" style="display:none;position:fixed;inset:0;z-index:299;background:rgba(0,0,0,0.55)"></div>


<!-- ══════════════════════════════════════
     HERO — VIDEO ABOVE THE FOLD
══════════════════════════════════════ -->
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
            <span>10:29</span><div class="w-px h-3 bg-paper/10"></div>
            <span>6 Chapters</span><div class="w-px h-3 bg-paper/10"></div>
            <span class="text-gold">Feb 2025</span>
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
                <h1 class="font-display leading-[0.88] tracking-wide" style="font-size:clamp(2.8rem,7vw,5.5rem)">
                    GOLD COAST<br><span class="text-hot">UNCOVERED</span>
                </h1>
                <p class="font-serif italic text-paper/40 mt-3 leading-relaxed max-w-lg" style="font-size:clamp(0.9rem,2vw,1.15rem)">
                    Organised crime, homelessness, and political corruption — who's really running the Gold Coast?
                </p>
            </div>

            <div class="fade-up" style="animation-delay:0.25s">
                <div class="flex items-center gap-3 mb-2">
                    <span class="text-[0.52rem] tracking-[0.2em] uppercase text-hot/60">▶ Now Playing — Navigate via chapters below</span>
                </div>
                <div id="player" class="w-full aspect-video border border-hot/20" style="box-shadow:0 0 80px rgba(214,61,47,0.09),0 0 0 1px rgba(240,236,226,0.025)"></div>
            </div>
        </div>

        <div class="lg:border-l border-paper/[0.06] flex flex-col" style="background:rgba(8,8,8,0.6)">
            <div class="px-6 py-6 border-b border-paper/[0.06]">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">This Episode</div>
                <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">We map intersecting worlds of bikie crime, homelessness policy failures, developer-funded councillors, and the M1 drug corridor — and ask who's holding anyone accountable.</p>
                <div class="grid grid-cols-3 gap-2 text-center">
                    <div class="border border-paper/[0.07] py-2 px-1">
                        <div class="font-display text-2xl text-hot">6</div>
                        <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Cases</div>
                    </div>
                    <div class="border border-paper/[0.07] py-2 px-1">
                        <div class="font-display text-2xl text-gold">10</div>
                        <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Minutes</div>
                    </div>
                    <div class="border border-paper/[0.07] py-2 px-1">
                        <div class="font-display text-2xl text-sage">GC</div>
                        <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Region</div>
                    </div>
                </div>
            </div>

            <div class="px-5 py-4 border-b border-paper/[0.06] flex-1 overflow-y-auto">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">Episode Chapters</div>
                <div class="space-y-0.5">
                    <div onclick="seekToChapter(0)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-hot/5 border border-transparent hover:border-hot/20 cursor-pointer transition-all group">
                        <span class="font-display text-hot text-sm w-5 shrink-0">01</span>
                        <div class="flex-1 min-w-0">
                            <div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">The Bikie Franchise Model</div>
                            <div class="text-[0.52rem] text-paper/22 tracking-wider">Organised Crime</div>
                        </div>
                        <span class="text-[0.52rem] text-paper/18 group-hover:text-hot transition-colors shrink-0">▶</span>
                    </div>
                    <div onclick="seekToChapter(1)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-gold/5 border border-transparent hover:border-gold/20 cursor-pointer transition-all group">
                        <span class="font-display text-gold text-sm w-5 shrink-0">02</span>
                        <div class="flex-1 min-w-0">
                            <div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Invisible on the Glitter Strip</div>
                            <div class="text-[0.52rem] text-paper/22 tracking-wider">Homelessness</div>
                        </div>
                        <span class="text-[0.52rem] text-paper/18 group-hover:text-gold transition-colors shrink-0">▶</span>
                    </div>
                    <div onclick="seekToChapter(2)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-sage/5 border border-transparent hover:border-sage/20 cursor-pointer transition-all group">
                        <span class="font-display text-sage text-sm w-5 shrink-0">03</span>
                        <div class="flex-1 min-w-0">
                            <div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Developer Money & Council Votes</div>
                            <div class="text-[0.52rem] text-paper/22 tracking-wider">Political Corruption</div>
                        </div>
                        <span class="text-[0.52rem] text-paper/18 group-hover:text-sage transition-colors shrink-0">▶</span>
                    </div>
                    <div onclick="seekToChapter(3)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-violet/5 border border-transparent hover:border-violet/20 cursor-pointer transition-all group">
                        <span class="font-display text-violet text-sm w-5 shrink-0">04</span>
                        <div class="flex-1 min-w-0">
                            <div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Meth, Money & the M1</div>
                            <div class="text-[0.52rem] text-paper/22 tracking-wider">Drug Trade</div>
                        </div>
                        <span class="text-[0.52rem] text-paper/18 group-hover:text-violet transition-colors shrink-0">▶</span>
                    </div>
                    <div onclick="seekToChapter(4)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-gold/5 border border-transparent hover:border-gold/20 cursor-pointer transition-all group">
                        <span class="font-display text-gold text-sm w-5 shrink-0">05</span>
                        <div class="flex-1 min-w-0">
                            <div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">How Homelessness Feeds Crime</div>
                            <div class="text-[0.52rem] text-paper/22 tracking-wider">Intersection</div>
                        </div>
                        <span class="text-[0.52rem] text-paper/18 group-hover:text-gold transition-colors shrink-0">▶</span>
                    </div>
                    <div onclick="seekToChapter(5)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-hot/5 border border-transparent hover:border-hot/20 cursor-pointer transition-all group">
                        <span class="font-display text-hot text-sm w-5 shrink-0">06</span>
                        <div class="flex-1 min-w-0">
                            <div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Who's Actually Watching?</div>
                            <div class="text-[0.52rem] text-paper/22 tracking-wider">Accountability</div>
                        </div>
                        <span class="text-[0.52rem] text-paper/18 group-hover:text-hot transition-colors shrink-0">▶</span>
                    </div>
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
     MY STORY SECTION  ← NEW
══════════════════════════════════════ -->
<section id="story" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(214,61,47,0.03) 0%,transparent 40%)">
    <div class="max-w-6xl mx-auto">

        <!-- Section header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-4 h-px bg-hot"></div>
                    <span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">The Origin Story — Episode 1</span>
                </div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">HOW I BECAME<br><span class="text-hot">HOMELESS</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-lg leading-relaxed">on the Gold Coast, and what happened when I fought back.</p>
            </div>
            <div class="max-w-xs">
                <p class="text-[0.65rem] leading-relaxed text-paper/30 mb-3">This is not a fictional case study. This happened to me. The documents are real. The charges were real. The outcome was real.</p>
                <div class="flex gap-2">
                    <span class="evidence-tag text-hot" style="color:#d63d2f">📄 Documents Verified</span>
                    <span class="evidence-tag text-gold" style="color:#e8a020">⚖ Charges Dropped</span>
                </div>
            </div>
        </div>

        <!-- Stats bar -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-14 reveal">
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-5xl text-hot mb-1">68</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Days bond held</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Legal limit: 10</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-5xl text-gold mb-1">6</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">False rent notices</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">All payments on time</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-5xl text-paper/60 mb-1">$20</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Fine for a cup</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Tax invoiced. Seriously.</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-5xl text-sage mb-1">0</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Charges upheld</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">All dropped</div>
            </div>
        </div>

        <!-- Timeline / chapters -->
        <div class="grid grid-cols-1 lg:grid-cols-[280px_1fr] gap-8 lg:gap-16">

            <!-- Left nav -->
            <div class="hidden lg:block">
                <div class="sticky top-24 space-y-1">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/20 mb-4">Story Chapters</div>
                    <a href="#s-ch1" class="flex items-center gap-3 py-2.5 group cursor-pointer">
                        <div class="timeline-dot active"></div>
                        <div>
                            <div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">The Setup</div>
                            <div class="text-[0.5rem] text-paper/20 tracking-wider">Finding BeHome</div>
                        </div>
                    </a>
                    <a href="#s-ch2" class="flex items-center gap-3 py-2.5 group cursor-pointer">
                        <div class="timeline-dot" style="background:#e8a020;box-shadow:0 0 0 3px rgba(232,160,32,0.2)"></div>
                        <div>
                            <div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">The Red Flags</div>
                            <div class="text-[0.5rem] text-paper/20 tracking-wider">Dual identity & bond delay</div>
                        </div>
                    </a>
                    <a href="#s-ch3" class="flex items-center gap-3 py-2.5 group cursor-pointer">
                        <div class="timeline-dot"></div>
                        <div>
                            <div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">The Harassment</div>
                            <div class="text-[0.5rem] text-paper/20 tracking-wider">Fines, threats, false claims</div>
                        </div>
                    </a>
                    <a href="#s-ch4" class="flex items-center gap-3 py-2.5 group cursor-pointer">
                        <div class="timeline-dot"></div>
                        <div>
                            <div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">The Eviction</div>
                            <div class="text-[0.5rem] text-paper/20 tracking-wider">Police, arrest, homeless</div>
                        </div>
                    </a>
                    <a href="#s-ch5" class="flex items-center gap-3 py-2.5 group cursor-pointer">
                        <div class="timeline-dot" style="background:#e8a020;box-shadow:0 0 0 3px rgba(232,160,32,0.2)"></div>
                        <div>
                            <div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">The Outcome</div>
                            <div class="text-[0.5rem] text-paper/20 tracking-wider">Charges dropped</div>
                        </div>
                    </a>
                    <div class="mt-6 pt-4 border-t border-paper/[0.06]">
                        <button onclick="openModal('rooming')" class="text-[0.55rem] tracking-[0.15em] uppercase text-hot hover:text-paper transition-colors">Open Full Case File →</button>
                    </div>
                </div>
            </div>

            <!-- Right: story content -->
            <div class="space-y-16">

                <!-- Chapter 1 -->
                <div id="s-ch1" class="story-chapter reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter 01</span>
                        <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Rental Crisis</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE GOLD COAST DREAM<br><span class="text-hot">AND THE REALITY</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                        "The Gold Coast looks like a dream. That's the whole point of it. What nobody tells you is that behind that strip — literally around the corner — there are people sleeping rough, rooming houses packed with 100 tenants, and landlords who've figured out the rules don't really apply to them if they're clever about it."
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                        In August 2023 I was looking for a room in Surfers Paradise. Not a luxury apartment — a room. With a shared kitchen. The kind of place that exists at the bottom of the market, invisible to the tourists. I found one through a property listed as BeHome on Google. Rent: $290 a week. Fixed term. A rooming accommodation agreement, Form R18 — signed and moved in August 18th.
                    </p>
                    <div class="doc-reveal p-4 mb-4 cursor-pointer" onclick="openModal('rooming')">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-[0.5rem] tracking-[0.18em] uppercase text-hot mb-1">Document</div>
                                <div class="text-[0.7rem] text-paper/65">Rooming Accommodation Agreement (Form R18)</div>
                                <div class="text-[0.58rem] text-paper/28 mt-0.5">$290/week · Fixed term · 18 Aug – 18 Oct 2023</div>
                            </div>
                            <span class="text-[0.52rem] text-hot/50 hover:text-hot transition-colors">View Case File →</span>
                        </div>
                    </div>
                    <p class="text-[0.65rem] leading-relaxed text-paper/32">
                        Under Queensland's Residential Tenancies and Rooming Accommodation Act 2008, a rooming house allows landlords to rent individual rooms under separate agreements — with fewer tenant protections than a standard lease. The Gold Coast has hundreds of these properties. Many operate in legal grey zones between rooming house, hostel, and boarding house — categories with very different obligations. That ambiguity is not accidental.
                    </p>
                </div>

                <!-- Chapter 2 -->
                <div id="s-ch2" class="story-chapter reveal" style="transition-delay:0.1s">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Chapter 02</span>
                        <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Regulatory Failure</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">SANDY TULISI.<br><span class="text-gold">OR SANDY PARK. DEPENDS WHO'S ASKING.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                        "To the RTA, the property is registered as SOLAC HOUSE under Sandy Tulisi. But if you Google it, you find BeHome. Same address. Different name. I didn't know what that meant when I moved in. I do now."
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                        The dual identity between public advertising name and official registration wasn't a clerical error. The website appelstreet.com.au — not easily discoverable — had content suggesting a hostel. But hostels don't ask tenants to lodge bonds with the RTA. The mismatch created deliberate ambiguity about what kind of accommodation this legally was, and what rights tenants had.
                    </p>

                    <!-- Two-col evidence grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
                        <div class="doc-reveal p-4 cursor-pointer" onclick="openModal('bond')">
                            <div class="text-[0.5rem] tracking-[0.18em] uppercase text-gold mb-2">Bond Confirmation</div>
                            <div class="text-[0.68rem] text-paper/60 leading-relaxed">RTA confirmation dated <span class="text-gold">25 October 2023</span> — 68 days after move-in. Legal requirement: 10 days.</div>
                            <div class="text-[0.52rem] text-gold/40 mt-3 hover:text-gold transition-colors">View Case File →</div>
                        </div>
                        <div class="doc-reveal p-4" style="border-left-color:#e8a020">
                            <div class="text-[0.5rem] tracking-[0.18em] uppercase text-gold mb-2">Scale of Non-Compliance</div>
                            <div class="text-[0.68rem] text-paper/60 leading-relaxed">Property capacity: <span class="text-gold">up to 100 tenants</span>. If the bond delay was systematic, hundreds of bonds may have sat unprotected.</div>
                        </div>
                    </div>

                    <p class="text-[0.65rem] leading-relaxed text-paper/32">
                        The bond was lodged following tenant inquiries about legal violations — suggesting the lodgement was reactive, not routine. The RTA has the power to investigate and prosecute non-compliance, with fines of up to $2,669 per breach. An investigation has not been publicly confirmed.
                    </p>
                </div>

                <!-- Chapter 3 -->
                <div id="s-ch3" class="story-chapter reveal" style="transition-delay:0.15s">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter 03</span>
                        <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Tenant Harassment</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">A FINE FOR A CUP.<br><span class="text-hot">SIX FALSE RENT NOTICES.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                        "I get a fine. For a cup. Not trashing the room. A cup that I washed but didn't put away immediately. Twenty dollars. From Appel Street Pty Ltd. Tax invoice and everything."
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                        Between September and October 2023, I received a series of emails from my landlord claiming my rent was overdue — on September 18th, 23rd, October 7th, 14th, 16th, and 23rd. My bank records show every payment was made on time. The emails were false. Then came an SMS from Sandy's personal mobile (0411 752 285) claiming a 13-day rent arrear and threatening eviction. That was also false.
                    </p>

                    <!-- Timeline of harassment -->
                    <div class="border border-paper/[0.07] p-5 mb-6">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-4">Harassment Timeline — Sep/Oct 2023</div>
                        <div class="space-y-3">
                            <div class="flex gap-3 items-start">
                                <span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">18 Sep</span>
                                <span class="text-[0.65rem] text-paper/45">Email: rent claimed overdue. Rent was paid.</span>
                            </div>
                            <div class="flex gap-3 items-start">
                                <span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">23 Sep</span>
                                <span class="text-[0.65rem] text-paper/45">Email: rent claimed overdue again. Rent was paid.</span>
                            </div>
                            <div class="flex gap-3 items-start">
                                <span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">7 Oct</span>
                                <span class="text-[0.65rem] text-paper/45">Email: overdue notice. Rent was paid.</span>
                            </div>
                            <div class="flex gap-3 items-start">
                                <span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">14 Oct</span>
                                <span class="text-[0.65rem] text-paper/45">Email: overdue notice. Rent was paid.</span>
                            </div>
                            <div class="flex gap-3 items-start">
                                <span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">16 Oct</span>
                                <span class="text-[0.65rem] text-paper/45">Email: overdue notice. Rent was paid.</span>
                            </div>
                            <div class="flex gap-3 items-start">
                                <span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">22 Oct</span>
                                <span class="text-[0.65rem] text-paper/45">Tax invoice issued: $20 fine — "Cup left." Issued by Appel Street Pty Ltd.</span>
                            </div>
                            <div class="flex gap-3 items-start">
                                <span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">23 Oct</span>
                                <span class="text-[0.65rem] text-paper/45">SMS from 0411 752 285: 13-day arrear claimed. Eviction threatened. Rent was paid.</span>
                            </div>
                        </div>
                    </div>
                    <div class="doc-reveal p-4 cursor-pointer" onclick="openModal('harassment')">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-[0.5rem] tracking-[0.18em] uppercase text-hot mb-1">Legal Note</div>
                                <div class="text-[0.7rem] text-paper/65">Under the RTRA Act, issuing breach notices when rent is current is a breach of the Act — and potentially constitutes harassment.</div>
                            </div>
                            <span class="text-[0.52rem] text-hot/50 hover:text-hot transition-colors ml-4 shrink-0">Full File →</span>
                        </div>
                    </div>
                </div>

                <!-- Chapter 4 -->
                <div id="s-ch4" class="story-chapter reveal" style="transition-delay:0.2s">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter 04</span>
                        <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Unlawful Eviction</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">POLICE AT THE DOOR.<br><span class="text-hot">NOWHERE TO SLEEP.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                        "They called the police. And they showed them an eviction notice. An invalid one. Built on the fake breach notices. Police don't have time to investigate whether a Notice to Leave is legally valid. They see a landlord with a notice and a tenant who won't leave, and they make a call."
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                        Sandy Tulisi and her husband Chris Park refused to engage in direct communication, insisting on police intermediation. They presented police with a Notice to Leave issued on false grounds. They showed police selected CCTV footage, while refusing requests under the Privacy Act for the full footage. A Police Banning Notice — No. 385003 — was applied. The kind designed for alcohol and drug incidents at licensed venues. Applied here, in a civil tenancy dispute.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                        I was arrested. Charged with Contravening a Banning Notice. My belongings were removed. I was evicted without due process. I was homeless that night. Sandy later deducted a fee from my bond for a key I still had. That was the final act.
                    </p>
                    <div class="doc-reveal p-4 cursor-pointer" onclick="openModal('eviction')">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-[0.5rem] tracking-[0.18em] uppercase text-hot mb-1">Document — Police Banning Notice No. 385003</div>
                                <div class="text-[0.7rem] text-paper/65">Designed for alcohol/drug-related incidents. Applied in a civil tenancy context based on an invalid Notice to Leave.</div>
                            </div>
                            <span class="text-[0.52rem] text-hot/50 hover:text-hot transition-colors ml-4 shrink-0">Full File →</span>
                        </div>
                    </div>
                </div>

                <!-- Chapter 5 -->
                <div id="s-ch5" class="story-chapter reveal" style="transition-delay:0.25s;border-left-color:rgba(232,160,32,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Chapter 05</span>
                        <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Legal Outcome</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE LAWYER.<br><span class="text-gold">CHARGES DROPPED.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                        "He's a lawyer. Not a community legal centre lawyer — I mean the kind who moves in rooms I'd never otherwise see. He took my case pro bono. And I want to be clear about why that matters beyond just my situation: the legal cost of fighting a wrongful eviction in Queensland is completely out of reach for most people in rooming houses."
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                        The Contravene Banning Notice charge was taken on pro bono by a senior Australian lawyer. The charges were subsequently dropped in full. Which tells you something about what those charges were built on.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-8">
                        My story has a relatively good ending. But most people in rooming houses across this city don't have access to that kind of legal representation. The Gold Coast's cheapest, most vulnerable accommodation sits at the intersection of people with the least legal knowledge and landlords who know exactly how to use that gap.
                    </p>

                    <!-- Outcome box -->
                    <div class="border border-sage/30 bg-sage/[0.04] p-6">
                        <div class="flex items-start gap-4">
                            <div class="font-display text-6xl text-sage/30 leading-none">✓</div>
                            <div>
                                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-2">Legal Outcome</div>
                                <div class="font-display text-2xl tracking-wide text-sage mb-2">ALL CHARGES DROPPED</div>
                                <p class="text-[0.68rem] text-paper/40 leading-relaxed">Contravene Banning Notice charge — fully resolved. No conviction. No penalty. The eviction process that produced the charge was built on invalid notices and false premises.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-5 border-t border-paper/[0.06]">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/20 mb-3">The Access to Justice Gap</div>
                        <p class="text-[0.65rem] leading-relaxed text-paper/32">In Queensland, a tenant facing eviction from rooming accommodation has limited free legal options. Community legal centres are oversubscribed. Legal Aid has strict means and merit tests. Private solicitors charge $300–$600/hour. Most rooming house tenants — typically in the lowest income bracket — cannot afford representation. The system operates on the assumption that tenants won't fight back. It's usually right.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- CTA inside story section -->
        <div class="mt-16 pt-10 border-t border-paper/[0.06] flex flex-col sm:flex-row gap-4 items-center justify-between">
            <div>
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">This Is Why CovertGC Exists</div>
                <p class="text-[0.68rem] text-paper/35 max-w-md leading-relaxed">The Gold Coast is very good at making uncomfortable things invisible. That's kind of what this whole series is about.</p>
            </div>
            <div class="flex gap-3">
                <button onclick="openModal('rooming')" class="border border-hot/50 hover:border-hot hover:bg-hot/10 px-5 py-3 text-[0.55rem] tracking-[0.15em] uppercase text-hot transition-all">Open Full Case File</button>
                <a href="#sms" class="bg-hot hover:bg-dim px-5 py-3 text-[0.55rem] tracking-[0.15em] uppercase text-paper font-display transition-all">Get Episode 2 Alerts</a>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     ADAM'S STORY — COERCIVE CONTROL
══════════════════════════════════════ -->
<section id="adam" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(123,94,167,0.04) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">

        <!-- Section header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-4 h-px bg-violet"></div>
                    <span class="text-[0.55rem] tracking-[0.3em] uppercase text-violet">A Witness Account — Episode 1</span>
                </div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">WHEN LOVE<br><span class="text-violet">BECOMES A WEAPON</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">Coercive control, false allegations, and the system gaps that let it happen. Adam Watson's story.</p>
            </div>
            <div class="max-w-xs">
                <p class="text-[0.65rem] leading-relaxed text-paper/30 mb-3">This section explores patterns of coercive control experienced by a named Gold Coast man. The subject of the allegations is not named. All legal outcomes are documented.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag" style="color:#7b5ea7">⚖ DPP: Malicious Prosecution</span>
                    <span class="evidence-tag" style="color:#e8a020">📡 Optus Security Breach</span>
                </div>
            </div>
        </div>

        <!-- Intro statement -->
        <div class="max-w-3xl mb-14 reveal">
            <p class="font-serif italic text-paper/60 leading-relaxed mb-5" style="font-size:clamp(1rem,2.2vw,1.25rem)">
                "I watched someone I care about get systematically dismantled — his reputation, his safety, his phone, his freedom — by a person he had trusted completely. Every tool available was used against him. False criminal charges. Surveillance. Social isolation. Infrastructure attacks. This is what coercive control actually looks like when it escalates."
            </p>
            <div class="flex items-center gap-3">
                <div class="w-6 h-px bg-violet/40"></div>
                <span class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/25">Kosta Kondratenko — CovertGC</span>
            </div>
        </div>

        <!-- Three-theme stats bar -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-px bg-paper/[0.04] mb-16 reveal">
            <div class="bg-ink px-8 py-7">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-violet mb-3">Theme One</div>
                <div class="font-display text-2xl tracking-wide text-violet mb-2">COERCIVE CONTROL</div>
                <p class="text-[0.65rem] text-paper/35 leading-relaxed">Surveillance, isolation, and the weaponisation of intimacy. How a relationship became a mechanism of control.</p>
            </div>
            <div class="bg-ink px-8 py-7">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">Theme Two</div>
                <div class="font-display text-2xl tracking-wide text-hot mb-2">FALSE ALLEGATIONS</div>
                <p class="text-[0.65rem] text-paper/35 leading-relaxed">Criminal charges as a tool of retaliation. A DPP malicious prosecution ruling. A police officer fired. The cost of getting it wrong.</p>
            </div>
            <div class="bg-ink px-8 py-7">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-3">Theme Three</div>
                <div class="font-display text-2xl tracking-wide text-gold mb-2">ADULT TIME, ADULT CRIME</div>
                <p class="text-[0.65rem] text-paper/35 leading-relaxed">A juvenile record that the system treated as a clean slate. The gap between what a young offender has done and what the law can acknowledge.</p>
            </div>
        </div>

        <!-- Story chapters -->
        <div class="space-y-16">

            <!-- Chapter A: Coercive Control -->
            <div class="story-chapter reveal" style="border-left-color:rgba(123,94,167,0.3)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7b5ea7;border-color:rgba(123,94,167,0.4)">Chapter A</span>
                    <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Coercive Control</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE ANATOMY OF<br><span style="color:#7b5ea7">CONTROL</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                    "Coercive control rarely announces itself. It arrives as attention, then affection, then dependence — and by the time the walls close in, leaving feels impossible."
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    Adam Watson entered a relationship that escalated rapidly into a pattern of coercive and controlling behaviour. The control operated across multiple vectors simultaneously — emotional, digital, and physical — consistent with what researchers describe as a "total control" model, where the abuser works to eliminate every independent support structure the victim has.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                    When Adam's friends became aware of concerning behaviour and began to distance themselves — not from Adam, but from the situation — that distancing was reframed as rejection and used as evidence that Adam had no one. The social isolation was not incidental. It was engineered.
                </p>

                <!-- Surveillance detail -->
                <div class="border border-paper/[0.07] p-6 mb-6" style="border-left:3px solid rgba(123,94,167,0.5)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase mb-3" style="color:#7b5ea7">Documented Pattern — Digital Surveillance</div>
                    <div class="space-y-3">
                        <div class="flex gap-3 items-start">
                            <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0" style="background:#7b5ea7"></div>
                            <p class="text-[0.65rem] text-paper/45 leading-relaxed">Access was obtained to Apple's location sharing feature on Adam's iPhone without his knowledge, enabling real-time tracking of his physical movements.</p>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0" style="background:#7b5ea7"></div>
                            <p class="text-[0.65rem] text-paper/45 leading-relaxed">Adam's location was tracked to his vehicle. A physical tracking device was subsequently placed on the fuel cap of his car — escalating from digital to physical surveillance.</p>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0" style="background:#7b5ea7"></div>
                            <p class="text-[0.65rem] text-paper/45 leading-relaxed">When confronted with questions about fidelity, a private eye-biometric lie detection test was commissioned. The subject scored 1 out of 100 — rated "Deceptive" — on an infidelity examination conducted by a certified EyeDetect® examiner at 50 Cavill Avenue, Surfers Paradise.</p>
                        </div>
                    </div>
                </div>

                <div class="doc-reveal p-4 cursor-pointer" onclick="openModal('coercive')">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-[0.5rem] tracking-[0.18em] uppercase mb-1" style="color:#7b5ea7">Case File — What Is Coercive Control?</div>
                            <div class="text-[0.7rem] text-paper/65">Queensland criminalised coercive control in 2023. Understanding what it looks like — and why it's hard to prove.</div>
                        </div>
                        <span class="text-[0.52rem] ml-4 shrink-0 transition-colors" style="color:rgba(123,94,167,0.5)">Full File →</span>
                    </div>
                </div>
            </div>

            <!-- Chapter B: False Allegations -->
            <div class="story-chapter reveal" style="transition-delay:0.1s">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter B</span>
                    <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">False Allegations</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE ALLEGATION.<br><span class="text-hot">THE CHARGE. THE COLLAPSE.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                    "A criminal charge does not require truth. It requires a complainant, a police officer who believes them, and a system that moves faster than the facts."
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    Adam Watson was charged with sexual assault based on allegations made to Queensland Police. The charge was serious. His social circle contracted immediately — the presumption of innocence, in practice, rarely survives the word spreading through a community. People who had known Adam for years kept their distance. The allegation did its work before a single day in court.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                    At the first court mention, the Director of Public Prosecutions assessed the matter and ruled it a malicious prosecution. The charge was dismissed. The police officer who had accepted and actioned the complaint was subsequently fired.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                    A separate incident saw a young woman throw rocks at Adam's vehicle, then approach a different police officer claiming he had grabbed her. A witness at the scene had observed the rock-throwing and notified police. The allegation did not proceed.
                </p>

                <!-- Outcome boxes -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
                    <div class="border p-5" style="border-color:rgba(214,61,47,0.3);background:rgba(214,61,47,0.03)">
                        <div class="font-display text-xl text-hot mb-1">DPP RULING</div>
                        <div class="text-[0.6rem] tracking-[0.15em] uppercase text-hot/60 mb-3">Malicious Prosecution</div>
                        <p class="text-[0.65rem] text-paper/40 leading-relaxed">The Director of Public Prosecutions assessed the sexual assault charge at first mention and ruled the prosecution malicious. Charge dismissed.</p>
                    </div>
                    <div class="border p-5" style="border-color:rgba(214,61,47,0.3);background:rgba(214,61,47,0.03)">
                        <div class="font-display text-xl text-hot mb-1">OFFICER FIRED</div>
                        <div class="text-[0.6rem] tracking-[0.15em] uppercase text-hot/60 mb-3">Confirmed Outcome</div>
                        <p class="text-[0.65rem] text-paper/40 leading-relaxed">The Queensland Police officer who accepted and charged Adam based on the false complaint was subsequently dismissed from the service.</p>
                    </div>
                </div>

                <div class="border border-paper/[0.07] p-5 mb-5" style="border-left:3px solid rgba(214,61,47,0.5)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">The Reputational Cost</div>
                    <p class="text-[0.68rem] text-paper/40 leading-relaxed">A malicious prosecution ruling does not undo the social damage of a charge. In Adam's gym, in his social circles, on his phone — the allegation had already spread. The DPP ruling came too late to reach the people who had already decided. This is a known and documented pattern in false allegation cases: the charge travels fast, the exoneration travels slow.</p>
                </div>

                <div class="doc-reveal p-4 cursor-pointer" onclick="openModal('malicious')">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-[0.5rem] tracking-[0.18em] uppercase text-hot mb-1">Case File — Malicious Prosecution</div>
                            <div class="text-[0.7rem] text-paper/65">What the DPP threshold actually is — and how rarely a case gets ruled malicious at first mention.</div>
                        </div>
                        <span class="text-[0.52rem] text-hot/50 ml-4 shrink-0 hover:text-hot transition-colors">Full File →</span>
                    </div>
                </div>
            </div>

            <!-- Chapter C: Optus / Infrastructure -->
            <div class="story-chapter reveal" style="transition-delay:0.15s;border-left-color:rgba(232,160,32,0.3)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Chapter C</span>
                    <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Infrastructure Attack</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE PHONE CALL<br><span class="text-gold">THAT SHOULDN'T HAVE WORKED</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                    "Someone walked into an Optus store and had Adam's phone number turned off. No authorisation. No verification. Just social pressure on an employee. And it worked."
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    Adam's Optus mobile service was deactivated by a third party who entered an Optus retail store and applied pressure to a staff member — threatening to expose the employee's sexuality unless they complied. The employee did comply. Adam's phone was turned off.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    The implications extend well beyond one man's phone service. If a number can be deactivated through social engineering of a single retail employee — with no authentication, no account verification, no failsafe — then any Australian's mobile number is vulnerable to the same attack. A phone number is now, in practice, an identity document. It's tied to banking two-factor authentication, emergency services, and digital identity verification. Turning it off is not an inconvenience. It's an attack surface.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                    Adam raised the matter with the Prime Minister's office, which referred it to the Telecommunications Industry Ombudsman. The Optus CEO was notified and has issued a directive to address the vulnerability. The employee involved is no longer with Optus.
                </p>

                <!-- Escalation box -->
                <div class="border border-gold/20 p-6 mb-6" style="background:rgba(232,160,32,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-4">Why This Matters Beyond Adam</div>
                    <div class="space-y-3">
                        <div class="flex gap-3 items-start">
                            <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-gold"></div>
                            <p class="text-[0.65rem] text-paper/45 leading-relaxed">Mobile numbers are used as the primary second factor in Australian banking authentication. Deactivating a number can lock someone out of their accounts instantly.</p>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-gold"></div>
                            <p class="text-[0.65rem] text-paper/45 leading-relaxed">Emergency services, domestic violence support lines, and crisis contacts all rely on phone continuity. Cutting someone off mid-crisis is a targeted form of harm.</p>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-gold"></div>
                            <p class="text-[0.65rem] text-paper/45 leading-relaxed">The method used — threatening to out an employee — is itself a serious offence. It combined homophobic coercion with telecommunications sabotage in a single act.</p>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-gold"></div>
                            <p class="text-[0.65rem] text-paper/45 leading-relaxed">If it worked once, it has worked before. The Optus directive triggered by this case is a canary — the vulnerability existed across the entire network.</p>
                        </div>
                    </div>
                </div>

                <div class="doc-reveal p-4 cursor-pointer" style="border-left-color:#e8a020" onclick="openModal('optus')">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-[0.5rem] tracking-[0.18em] uppercase text-gold mb-1">Case File — Telco Social Engineering</div>
                            <div class="text-[0.7rem] text-paper/65">How mobile carriers can be used as attack vectors — and what the regulatory framework currently does and doesn't prevent.</div>
                        </div>
                        <span class="text-[0.52rem] text-gold/50 ml-4 shrink-0 hover:text-gold transition-colors">Full File →</span>
                    </div>
                </div>
            </div>

            <!-- Chapter D: Adult Time Adult Crime -->
            <div class="story-chapter reveal" style="transition-delay:0.2s;border-left-color:rgba(232,160,32,0.3)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Chapter D</span>
                    <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Youth Justice Gap</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">ADULT TIME,<br><span class="text-gold">ADULT CRIME</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                    "The juvenile justice system was designed to give young people a second chance. It was not designed to give them a shield. There is a difference — and the Gold Coast is living it."
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    Queensland's Youth Justice Act seals juvenile records from adult proceedings. The intent is rehabilitation: a young person who offends should not carry that record into adult life. The policy is defensible in principle. In practice, it creates a specific and exploitable gap — an 18-year-old with a history of juvenile offending enters adult life with a clean slate that does not reflect their actual history.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    Adam Watson was aware of this history. He was, in fact, helping this person with legal matters — knowledge of the system being one of the few resources Adam was able to offer. That assistance was not reciprocated. The hand that fed was bitten. Thoroughly.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                    The question this raises is not whether rehabilitation is a worthy goal — it is. The question is whether a sealed juvenile record should be invisible to the courts when the same person is, as an adult, coordinating false criminal allegations, committing assault, and engaging in organised criminal activity. The current answer in Queensland is yes. It is invisible. That gap has consequences.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-2">The Intent of Sealing</div>
                        <p class="text-[0.65rem] text-paper/40 leading-relaxed">Queensland seals juvenile records to prevent young people from being defined by early mistakes. A first-time offender at 15 should not lose employment opportunities at 25. This is the legitimate purpose.</p>
                    </div>
                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">The Exploitation of Sealing</div>
                        <p class="text-[0.65rem] text-paper/40 leading-relaxed">A repeat juvenile offender who graduates to adult crime presents to the adult courts as a person with no prior history. Sentencing, bail, and credibility assessments are all affected by a clean record that isn't clean.</p>
                    </div>
                </div>

                <div class="doc-reveal p-4 cursor-pointer" style="border-left-color:#e8a020" onclick="openModal('juvenile')">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-[0.5rem] tracking-[0.18em] uppercase text-gold mb-1">Case File — Youth Justice Act & Record Sealing</div>
                            <div class="text-[0.7rem] text-paper/65">The Queensland framework, the reform debate, and what other jurisdictions do differently.</div>
                        </div>
                        <span class="text-[0.52rem] text-gold/50 ml-4 shrink-0 hover:text-gold transition-colors">Full File →</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Closing statement -->
        <div class="mt-16 pt-10 border-t border-paper/[0.06]">
            <div class="max-w-3xl">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-violet mb-3">Why This Is In CovertGC</div>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    I witnessed what happened to Adam. I was assaulted by the same person at Oracle East — stalked from Broadbeach North tram stop, attacked with five others present, by someone I had never spoken to. I understand firsthand how this kind of person operates. The pattern across every incident is the same: escalation, false narrative, institutional manipulation. That pattern is worth naming even when the name attached to it cannot be published yet.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">
                    The three systemic failures in Adam's story — the coercive control framework that arrived too late, the malicious prosecution that took a DPP ruling to stop, and the telecommunications vulnerability that took a Prime Ministerial referral to fix — are not unique to him. They are structural. And structure is what CovertGC covers.
                </p>
            </div>
            <div class="flex gap-3 mt-8">
                <button onclick="openModal('coercive')" class="border px-5 py-3 text-[0.55rem] tracking-[0.15em] uppercase transition-all" style="border-color:rgba(123,94,167,0.5);color:#7b5ea7">Open Case Files</button>
                <a href="#sms" class="bg-hot hover:bg-dim px-5 py-3 text-[0.55rem] tracking-[0.15em] uppercase text-paper font-display transition-all">Get Episode 2 Alerts</a>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     AQUATIC CENTRE PRIVACY BREACH
══════════════════════════════════════ -->
<section id="privacy" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(123,94,167,0.04) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">

        <!-- Section header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-4 h-px bg-violet"></div>
                    <span class="text-[0.55rem] tracking-[0.3em] uppercase text-violet">Privacy Breach — Episode 1</span>
                </div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">MONITOR THIS ONE.<br><span class="text-violet">COMES IN FOR SHOWER.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">A Gold Coast City Council aquatic centre staff member photographed me without consent, annotated the image, and leaked it to a third party with a derogatory comment. The Council dropped its investigation. The Premier has now issued a Show Cause notice. The staff involved are no longer employed.</p>
            </div>
            <div class="max-w-xs">
                <div class="flex flex-wrap gap-2 mb-3">
                    <span class="evidence-tag" style="color:#7b5ea7">📄 Council Letters — Verified</span>
                    <span class="evidence-tag text-sage" style="color:#2a9d4e">✓ Staff Terminated</span>
                    <span class="evidence-tag text-gold" style="color:#e8a020">⚠ Show Cause Issued</span>
                </div>
                <p class="text-[0.65rem] leading-relaxed text-paper/30">Reference: Lawmaster 1192 — City of Gold Coast Chief Risk and Audit Office</p>
            </div>
        </div>

        <!-- Opening statement -->
        <div class="max-w-3xl mb-14 reveal">
            <p class="font-serif italic text-paper/60 leading-relaxed mb-5" style="font-size:clamp(1rem,2.2vw,1.2rem)">
                "I used the upstairs shower at the Southport Aquatic Centre. That's it. I had been asked to leave on a previous occasion and I left without incident. On this occasion, a staff member photographed me, wrote 'Monitor This One. Comes in for shower. Been asked not to use gym.' on the image, and then leaked that annotated photo to a member of the public with the comment: 'Look at these sh-t cunts.' That person was a photographer I had personally found work for and paid. The City of Gold Coast received my complaint, asked for more information they already had, then quietly closed the file. What they didn't anticipate was that David Crisafulli would find out."
            </p>
            <div class="flex items-center gap-3">
                <div class="w-6 h-px bg-violet/40"></div>
                <span class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/25">Kosta Kondratenko — CovertGC</span>
            </div>
        </div>

        <!-- Stats bar -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-16 reveal">
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-violet mb-1">0</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Offences committed</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">All charges dropped</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-hot mb-1">1</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Privacy breach</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Photographed without consent</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-gold mb-1">45</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Business days</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Then investigation dropped</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-sage mb-1">SC</div>
                <div class="text-[0.52rem tracking-[0.15em] uppercase text-paper/28">Show Cause</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Issued by Premier Crisafulli</div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[1fr_320px] gap-12">
        <div class="space-y-14">

            <!-- What happened -->
            <div class="story-chapter reveal" style="border-left-color:rgba(123,94,167,0.3)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7b5ea7;border-color:rgba(123,94,167,0.4)">What Happened</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">A SHOWER.<br><span style="color:#7b5ea7">A PHOTO. A SMEAR.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                    "There are two shower facilities at the Southport Aquatic Centre. The downstairs shower and the upstairs one near the gym — better pressure, more functional. I used the upstairs shower. I committed no offence. I caused no disturbance. I had been asked to leave on a previous occasion, and I did so without incident. This time, instead of asking me to leave, a staff member took my photo."
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    The photograph was taken by a council employee at the Southport Aquatic Centre on or around 15 December 2024. It captured me in an Everlast jumper. The staff member annotated the image with the words: <span class="font-mono text-paper/70 text-xs bg-paper/[0.05] px-1.5 py-0.5 rounded">"Monitor This One. Comes in for shower. Been asked not to use gym."</span>
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    That annotated photograph was then shared with a third party — a photographer known to CovertGC — accompanied by the comment: <span class="font-mono text-paper/70 text-xs bg-paper/[0.05] px-1.5 py-0.5 rounded">"Look at these sh-t cunts."</span>
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    The photographer who received this image and this comment is someone I personally identified, gave work to, and paid. He was paid to photograph Adam Watson. That is how he came to be in contact with the staff member who leaked it. The breach was not just institutional — it was personal. Someone I had trusted and compensated used that connection to participate in a coordinated act of humiliation.
                </p>

                <!-- Photo placeholder -->
                <div class="border border-paper/[0.07] overflow-hidden mb-6">
                    <div class="bg-paper/[0.03] h-44 flex items-center justify-center relative">
                        <div class="absolute inset-0 scanlines"></div>
                        <div class="text-center z-10 px-6">
                            <div class="font-display text-xl tracking-widest text-paper/15 mb-2">[ PHOTO PLACEHOLDER ]</div>
                            <div class="text-[0.55rem] tracking-[0.18em] uppercase text-paper/20 mb-1">Kosta Kondratenko — Southport Aquatic Centre — Dec 2024</div>
                            <div class="text-[0.5rem] tracking-[0.12em] uppercase text-paper/15">Black Everlast jumper — annotation visible — face not blurred in original</div>
                        </div>
                    </div>
                    <div class="border-t border-paper/[0.05] px-4 py-2 flex justify-between items-center bg-paper/[0.01]">
                        <span class="text-[0.52rem] text-paper/20">Leaked image — annotated by council staff — distributed without consent</span>
                        <span class="text-[0.52rem]" style="color:rgba(123,94,167,0.5)">Ref: Lawmaster 1192</span>
                    </div>
                </div>

                <p class="text-[0.72rem] leading-relaxed text-paper/45">
                    Under the Information Privacy Act 2009, a local government body collecting, storing, or disclosing personal information — including a photograph — must do so only for lawful purposes and must not disclose it to third parties without consent. A staff member photographing a member of the public, annotating that image with a derogatory operational note, and then distributing it externally with a demeaning comment is not a lawful purpose. It is a privacy breach. It is also, depending on the intent, potentially a breach of anti-discrimination obligations.
                </p>
            </div>

            <!-- The council response -->
            <div class="story-chapter reveal" style="transition-delay:0.1s;border-left-color:rgba(214,61,47,0.3)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">The Council Response</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THEY ASKED FOR MORE.<br><span class="text-hot">THEN CLOSED THE FILE.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    I submitted my privacy complaint to the City of Gold Coast on 15 December 2024. The council acknowledged receipt on 16 December, confirmed the matter was being investigated by the Chief Risk and Audit Office, and cited Section 166 of the Information Privacy Act — advising I could escalate to the Information Commissioner after 45 business days if no response was received.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    The council then contacted me by telephone and email on 16 December and again by email on 16 January 2025 to request more information. No response was forthcoming from me within their window — and on that basis, the council discontinued the investigation entirely.
                </p>

                <!-- Letter reveals -->
                <div class="space-y-3 mb-6">
                    <div class="doc-reveal p-4 cursor-pointer" style="border-left-color:rgba(123,94,167,0.5)" onclick="openModal('privacyletter1')">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-[0.5rem] tracking-[0.18em] uppercase mb-1" style="color:#7b5ea7">Document — Initial Complaint Acknowledgement</div>
                                <div class="text-[0.7rem] text-paper/65">16 December 2024 — Julie Schyf, Complaints Officer — Ref: Lawmaster 1192</div>
                            </div>
                            <span class="text-[0.52rem] ml-4 shrink-0" style="color:rgba(123,94,167,0.4)">View →</span>
                        </div>
                    </div>
                    <div class="doc-reveal p-4 cursor-pointer" style="border-left-color:rgba(214,61,47,0.5)" onclick="openModal('privacyletter2')">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-[0.5rem] tracking-[0.18em] uppercase text-hot mb-1">Document — Investigation Discontinued</div>
                                <div class="text-[0.7rem] text-paper/65">Undated follow-up — Julie Schyf, For CEO — Investigation closed due to 'no further details'</div>
                            </div>
                            <span class="text-[0.52rem] text-hot/40 ml-4 shrink-0">View →</span>
                        </div>
                    </div>
                </div>

                <!-- The onus problem -->
                <div class="border border-paper/[0.07] p-6 mb-5" style="border-left:3px solid rgba(214,61,47,0.5)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">The Onus Problem</div>
                    <p class="text-[0.68rem] text-paper/40 leading-relaxed mb-3">
                        The council's position — that the investigation was discontinued because the complainant did not provide further information — inverts the responsibility that should attach to an institutional privacy investigation. The council already possessed the material facts: a staff member photographed a member of the public on council premises, annotated the image, and distributed it externally. That is the complaint. Those facts do not require the complainant to furnish them — the council's own staff and systems hold them.
                    </p>
                    <p class="text-[0.68rem] text-paper/40 leading-relaxed">
                        Placing the burden of further investigation on the person whose privacy was breached — rather than on the institution whose employee committed the breach — is not a neutral administrative decision. It is a decision to protect the institution by making the complaint difficult to sustain. The Information Privacy Act does not require a complainant to investigate their own breach on behalf of the body responsible for it.
                    </p>
                </div>
            </div>

            <!-- Tom Tate -->
            <div class="story-chapter reveal" style="transition-delay:0.15s;border-left-color:rgba(214,61,47,0.4)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">On The Record</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE MAYOR SAID<br><span class="text-hot">"HE'S A PUBLIC NUISANCE."</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                    "Adam Watson spoke to Gold Coast Mayor Tom Tate about this matter. The Mayor's response was to describe me as 'a public nuisance.' I am not a public nuisance. I am a person against whom every single charge was dropped. The Mayor of the Gold Coast characterised me using a term that implies ongoing criminal or antisocial conduct — conduct that courts have found does not exist. That comment requires a retraction."
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    Tom Tate is the elected Mayor of the City of Gold Coast. He is a public figure exercising public authority. When the Mayor of a city describes a private citizen — one who has had all charges against them dropped — as a "public nuisance," that characterisation carries the institutional weight of his office. It is not a throwaway comment. It is a statement by the head of a council whose employee just breached that citizen's privacy.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                    The charges against me were dropped. All of them. The legal record is clear. A private citizen who has not been convicted of any offence is not, in any legal or factual sense, a public nuisance. CovertGC formally requests that Mayor Tom Tate publicly retract the characterisation made to Adam Watson and issue a correction on the public record.
                </p>

                <div class="border border-hot/20 p-5 mb-5" style="background:rgba(214,61,47,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">Formal Request for Retraction</div>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed">CovertGC calls on Mayor Tom Tate to publicly retract his characterisation of Kosta Kondratenko as a "public nuisance." All charges against Mr Kondratenko have been dropped. The use of this term by an elected official — whose council's staff had just committed a privacy breach against the same individual — is not only factually incorrect but constitutes an aggravation of an existing institutional failure. A retraction should be made in writing, on the public record.</p>
                </div>
            </div>

            <!-- The escalation and outcome -->
            <div class="story-chapter reveal" style="transition-delay:0.2s;border-left-color:rgba(42,157,78,0.3)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-sage border border-sage/40 px-2 py-1">The Outcome</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">CRISAFULLI FOUND OUT.<br><span class="text-sage">SHOW CAUSE ISSUED.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    David Crisafulli, Premier of Queensland, was made aware of the privacy breach and the council's handling of the complaint. The Premier's office issued a Show Cause notice to the Council of the City of Gold Coast. The staff members involved in the breach — the staff member who photographed and annotated the image, and those connected to its distribution — are no longer employed by the council.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    This is the correct outcome. But it required a direct escalation to the Premier of Queensland to achieve what the council's own complaints process should have delivered. A clear privacy breach, with a clear institutional trail, was closed by the council in under 45 business days because the complainant didn't supply additional paperwork. It took Premier-level intervention to produce the accountability that the council's own Chief Risk and Audit Office was supposed to provide.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">
                    This pattern — local institution fails, complainant escalates to state level, state level produces result — is the same pattern that appeared in the Oracle East assault investigation. The Gold Coast has a structural problem: its local accountability mechanisms are not functioning as designed. When every meaningful outcome requires bypassing the local system entirely, the local system needs to examine itself.
                </p>

                <!-- Outcome summary -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mt-6">
                    <div class="border p-4 text-center" style="border-color:rgba(214,61,47,0.25)">
                        <div class="font-display text-lg text-hot mb-1">COUNCIL</div>
                        <div class="text-[0.55rem] text-paper/30 leading-relaxed">Dropped investigation. Placed onus on complainant. Mayor called victim a public nuisance.</div>
                    </div>
                    <div class="border p-4 text-center" style="border-color:rgba(232,160,32,0.25)">
                        <div class="font-display text-lg text-gold mb-1">ESCALATED</div>
                        <div class="text-[0.55rem] text-paper/30 leading-relaxed">Matter taken to Premier David Crisafulli after local process failed.</div>
                    </div>
                    <div class="border p-4 text-center" style="border-color:rgba(42,157,78,0.25)">
                        <div class="font-display text-lg text-sage mb-1">OUTCOME</div>
                        <div class="text-[0.55rem] text-paper/30 leading-relaxed">Show Cause issued to council. Staff involved terminated. Investigation active.</div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Sidebar -->
        <div class="space-y-4">
            <div class="sticky top-24 space-y-4">

                <div class="border p-5" style="border-color:rgba(123,94,167,0.2);background:rgba(123,94,167,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase mb-3" style="color:#7b5ea7">Your Rights — Privacy Breach by Council</div>
                    <div class="space-y-2.5">
                        <div class="flex gap-2 items-start">
                            <span class="text-xs mt-0.5 shrink-0" style="color:#7b5ea7">→</span>
                            <p class="text-[0.6rem] text-paper/40 leading-relaxed">Under the Information Privacy Act 2009, you have the right to make a formal complaint to the council about any breach of your personal information.</p>
                        </div>
                        <div class="flex gap-2 items-start">
                            <span class="text-xs mt-0.5 shrink-0" style="color:#7b5ea7">→</span>
                            <p class="text-[0.6rem] text-paper/40 leading-relaxed">If no response within 45 business days — or the response is inadequate — you can escalate directly to the Office of the Information Commissioner Queensland.</p>
                        </div>
                        <div class="flex gap-2 items-start">
                            <span class="text-xs mt-0.5 shrink-0" style="color:#7b5ea7">→</span>
                            <p class="text-[0.6rem] text-paper/40 leading-relaxed">The council cannot place the investigative burden on you. The obligation to investigate a breach of its own systems sits with the institution, not the complainant.</p>
                        </div>
                        <div class="flex gap-2 items-start">
                            <span class="text-xs mt-0.5 shrink-0" style="color:#7b5ea7">→</span>
                            <p class="text-[0.6rem] text-paper/40 leading-relaxed">If escalation within Queensland does not produce a result, the matter can be referred to the Office of the Australian Information Commissioner at federal level.</p>
                        </div>
                    </div>
                </div>

                <div class="border border-paper/[0.07] p-5">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-2">The Information Commissioner</div>
                    <p class="text-[0.62rem] text-paper/35 leading-relaxed mb-2">Under s.166 of the Information Privacy Act 2009, you may escalate to the Information Commissioner if the council has not responded adequately within 45 business days.</p>
                    <p class="text-[0.62rem] text-paper/25 leading-relaxed">Office of the Information Commissioner Queensland<br>oic.qld.gov.au</p>
                </div>

                <div class="border border-paper/[0.07] p-5">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-2">Documents on file</div>
                    <div class="space-y-1.5">
                        <div class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 rounded-full bg-sage"></div>
                            <span class="text-[0.58rem] text-paper/35">Initial complaint acknowledgement — 16 Dec 2024</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 rounded-full bg-hot"></div>
                            <span class="text-[0.58rem] text-paper/35">Investigation discontinued notice — Jan 2025</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 rounded-full bg-gold"></div>
                            <span class="text-[0.58rem] text-paper/35">Annotated photograph — held, not published</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 rounded-full bg-violet"></div>
                            <span class="text-[0.58rem] text-paper/35">Show Cause — Premier Crisafulli to Council</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     ASSAULT & POLICE ACCOUNTABILITY
══════════════════════════════════════ -->
<section id="assault" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(214,61,47,0.05) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">

        <!-- Section header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-4 h-px bg-hot"></div>
                    <span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">First Person — Episode 1</span>
                </div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">STALKED INTO<br><span class="text-hot">A BATHROOM</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">What happened at Oracle East. What the police did and didn't do. And what it means when officers decide a content creator deserved it.</p>
            </div>
            <div class="max-w-xs">
                <p class="text-[0.65rem] leading-relaxed text-paper/30 mb-3">This is my account of being stalked and assaulted by a group of six on the Gold Coast — and what happened when I reported it. The systemic issues it raised go beyond my case.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag text-hot" style="color:#d63d2f">👁 Eyewitness Account</span>
                    <span class="evidence-tag text-gold" style="color:#e8a020">🎙 Recorded Evidence</span>
                </div>
            </div>
        </div>

        <!-- Opening statement -->
        <div class="max-w-3xl mb-14 reveal">
            <p class="font-serif italic text-paper/60 leading-relaxed mb-5" style="font-size:clamp(1rem,2.2vw,1.2rem)">
                "I was walking through Broadbeach in the middle of the day. I wasn't looking for trouble. I didn't know these people. Six of them followed me from a tram stop into the bathroom of a hotel and assaulted me. When I reported it, a police officer told one of the group's members that I should expect to get bashed for making a video. That comment was recorded. That recording exists. And the investigation that followed it is still ongoing."
            </p>
            <div class="flex items-center gap-3">
                <div class="w-6 h-px bg-hot/40"></div>
                <span class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/25">Kosta Kondratenko — CovertGC</span>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-16 reveal">
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-5xl text-hot mb-1">6</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Assailants</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Oracle East Hotel</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-5xl text-gold mb-1">0</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">CCTV subpoenas</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Footage not requested</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-5xl text-paper/50 mb-1">1</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Recorded comment</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">"Expect to get bashed"</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-5xl text-sage mb-1">TFL</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Task Force Latro</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Investigation active</div>
            </div>
        </div>

        <!-- Story -->
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_300px] gap-12">
            <div class="space-y-14">

                <!-- Chapter 1: The stalking -->
                <div class="story-chapter reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">What Happened</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">BROADBEACH NORTH.<br><span class="text-hot">MIDDLE OF THE DAY.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                        "I had no prior relationship with any of these people. No conversation. No dispute. The only contact I'd had was one inbound phone call — someone trying to claim relevance to me through a video I'd made."
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        I was spotted at Broadbeach North tram stop. A group of six followed me. I wasn't aware of it until I was inside Oracle East Hotel — by which point they had followed me into the bathroom and the assault happened. Six people. One target. Broad daylight.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        The motive, as far as I can establish it, was jealousy — specifically over the attention I was receiving from someone they were connected to. The group included a member I'll refer to as RJ, who had previously organised a meeting to question why that person was spending time with me. When I didn't attend that meeting, the situation escalated to this.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45">
                        I called the police. They came. The six were identified and rounded up relatively quickly. That part of the response worked. What happened next didn't.
                    </p>
                </div>

                <!-- Chapter 2: Police response -->
                <div class="story-chapter reveal" style="transition-delay:0.1s">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">The Response</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE CHILD PROTECTION UNIT.<br><span class="text-hot">I'M AN ADULT.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                        "I was asked to come into the Child Protection Unit to give my statement. I'm a grown adult. I was stalked by six people into a hotel bathroom and assaulted. Why is the unit handling my case called the Child Protection Unit? The name matters — it signals to victims how seriously their case is being taken."
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        Queensland Police route certain youth offending cases through specialised units designed to handle matters involving young people — both as victims and as offenders. The intention is sound. But when an adult victim of a group assault is directed to a unit whose name centres child protection, the institutional framing sends a message: your case is being handled through a lens that prioritises the offenders' youth over your experience as a victim.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        When I spoke to the unit — including a contact I'll refer to as Jill — I asked whether the strata CCTV footage from Oracle East had been subpoenaed. It hadn't. In an assault case where the location is a hotel with a strata body, CCTV footage is not optional evidence — it is the primary corroborating record of what happened and who was there. Not requesting it is not an oversight. It is a choice. And that choice told me how seriously this was being pursued.
                    </p>

                    <!-- The CCTV point -->
                    <div class="border border-paper/[0.07] p-5 mb-6" style="border-left:3px solid rgba(214,61,47,0.5)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">Why CCTV Subpoenas Matter</div>
                        <p class="text-[0.68rem] text-paper/40 leading-relaxed">In an assault case at a licensed venue, CCTV footage is typically the most reliable evidence available. It shows who was present, when, and what occurred — independent of witness accounts. Strata and venue CCTV is generally retained for 30 days before being overwritten. Failure to subpoena it within that window means it is gone permanently. Once it is gone, the evidential foundation of the case changes fundamentally.</p>
                    </div>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45">
                        I did my own research. I contacted Daniel Purdie, the Police Commissioner, directly. That escalation led to Task Force Latro North becoming involved in the investigation. A police officer was subsequently sent — though the nature of that visit felt more like a box-ticking exercise than a genuine investigative step. The investigation, as I understand it, has since escalated significantly beyond my original assault report.
                    </p>
                </div>

                <!-- Chapter 3: The recorded comment -->
                <div class="story-chapter reveal" style="transition-delay:0.15s">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">The Recording</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">"YOU SHOULD EXPECT<br><span class="text-hot">TO GET BASHED."</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                        "A police officer, during the interviews of the group, told RJ that I should expect to get bashed because I made a video. That comment was secretly recorded. It exists. It has been provided to the Premier's office and the Attorney General. It is now the subject of a formal police corruption investigation."
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        During the police interviews of the six individuals following the assault, a comment was made by a police officer to RJ — to the effect that a person who makes videos online should expect to be assaulted. That comment was recorded without the officer's knowledge.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        The recording was subsequently obtained and provided to the Premier of Queensland and the Attorney General Deb Frecklington. The Attorney General was reportedly offended by the content. The matter has become the subject of a formal investigation into the conduct of officers in the relevant unit. Out of respect for that active investigation, I am not naming the officers involved at this stage.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                        The comment is significant for reasons that go beyond my case. It suggests that at least one officer within the unit handling my assault report had already formed a view — prior to any investigation — that I bore some responsibility for being attacked. That view, if it influenced how the case was handled, explains a great deal about the decisions that followed: the failure to subpoena CCTV, the routing through a unit whose framing centred the offenders' youth, the overall pace and weight of the response.
                    </p>

                    <!-- The systemic issue -->
                    <div class="border border-paper/[0.07] p-6 mb-5" style="border-left:3px solid rgba(232,160,32,0.5)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-3">The Ethical Question This Raises</div>
                        <p class="text-[0.68rem] text-paper/40 leading-relaxed mb-3">When a police officer decides — before an investigation — that a victim deserved what happened to them because of content they published online, that is not a personal opinion held privately. It is a professional judgement that shapes every decision that follows: what evidence gets collected, what charges get pursued, how seriously the victim's account is treated.</p>
                        <p class="text-[0.68rem] text-paper/40 leading-relaxed">The Gold Coast is a city with a visible online content community — influencers, journalists, commentators, investigators. If officers within QPS units responsible for assault cases are forming prior views about whether content creators deserve protection based on what they've posted, that is a systemic failure of the impartiality that policing requires. It is not, in this case, speculative. It was said out loud. And it was recorded.</p>
                    </div>

                    <div class="doc-reveal p-4 cursor-pointer" onclick="openModal('policeaccount')">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-[0.5rem] tracking-[0.18em] uppercase text-hot mb-1">Case File — Police Accountability & Content Creators</div>
                                <div class="text-[0.7rem] text-paper/65">What the law says about victim-blaming in police conduct, and what complaint mechanisms exist when an investigation is compromised.</div>
                            </div>
                            <span class="text-[0.52rem] text-hot/50 ml-4 shrink-0 hover:text-hot transition-colors">Full File →</span>
                        </div>
                    </div>
                </div>

                <!-- Chapter 4: Systemic -->
                <div class="story-chapter reveal" style="transition-delay:0.2s;border-left-color:rgba(232,160,32,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">The Bigger Picture</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">WHEN POLICE DECIDE<br><span class="text-gold">WHO DESERVES PROTECTION</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        My assault did not happen in isolation. It happened in the context of a broader pattern of behaviour by the same group — behaviour that included false criminal allegations against Adam Watson, surveillance, infrastructure attacks, and escalating intimidation. In each instance, the police response was slower, less thorough, and less aggressive than the conduct warranted.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        There is a reasonable question about whether those investigative failures were random — the result of overworked officers and resource constraints — or whether they reflect something more troubling: a pattern of officers in specific units making value judgements about which victims deserve full investigative effort.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        I am not in a position to answer that question definitively. What I can say is that when I escalated — when I went to the Police Commissioner rather than waiting for the unit to act — things moved. That should not be how it works. A victim's access to senior contacts should not determine the quality of the investigation into their assault. Every person who walks into a police station to report being followed and attacked by six people in broad daylight deserves the same response I eventually got when I made the right calls to the right people.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45">
                        The investigation into the officer's conduct is active. I will update this section when there are outcomes to report. If you have experienced a similar pattern — assault or stalking on the Gold Coast, followed by a police response that felt shaped by what you do or say online — I want to hear from you.
                    </p>

                    <!-- Know your rights box -->
                    <div class="border border-gold/20 p-6 mt-6" style="background:rgba(232,160,32,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-4">If You're Being Stalked — Know This</div>
                        <div class="space-y-3">
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-gold"></div>
                                <p class="text-[0.65rem] text-paper/45 leading-relaxed">Stalking is a criminal offence under Queensland's Criminal Code. You do not need to wait for physical contact before reporting — being followed is reportable in itself.</p>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-gold"></div>
                                <p class="text-[0.65rem] text-paper/45 leading-relaxed">If you are at a venue, ask staff immediately to lock down CCTV footage. Do not assume police will request it — confirm with the venue directly that it has been preserved.</p>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-gold"></div>
                                <p class="text-[0.65rem] text-paper/45 leading-relaxed">Document everything yourself — time, location, descriptions, witness names. Your own record may be the most complete account of what happened if police fail to gather evidence promptly.</p>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-gold"></div>
                                <p class="text-[0.65rem] text-paper/45 leading-relaxed">If your case is not being pursued adequately, you can escalate to the Officer in Charge of the relevant station, the Crime and Corruption Commission, or — as I did — directly to the Police Commissioner's office.</p>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-gold"></div>
                                <p class="text-[0.65rem] text-paper/45 leading-relaxed">If you believe a police officer's conduct in handling your case has been improper — including if you believe your case was deprioritised because of your online presence — that is a CCC complaint matter. The CCC is independent of QPS.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="space-y-4">
                <div class="sticky top-24 space-y-4">

                    <div class="border border-hot/20 p-5" style="background:rgba(214,61,47,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">Investigation Status</div>
                        <div class="space-y-2.5">
                            <div class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-hot"></div>
                                <span class="text-[0.6rem] text-paper/40 leading-relaxed">Assault reported to QPS. Six individuals identified and interviewed.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-hot"></div>
                                <span class="text-[0.6rem] text-paper/40 leading-relaxed">Oracle East strata CCTV not subpoenaed by initial investigating unit.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-gold"></div>
                                <span class="text-[0.6rem] text-paper/40 leading-relaxed">Escalated to Police Commissioner Daniel Purdie.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-gold"></div>
                                <span class="text-[0.6rem] text-paper/40 leading-relaxed">Task Force Latro North engaged.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-sage"></div>
                                <span class="text-[0.6rem] text-paper/40 leading-relaxed">Recorded officer comment provided to Premier and Attorney General Deb Frecklington.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-sage blink"></div>
                                <span class="text-[0.6rem] text-paper/40 leading-relaxed">Formal police corruption investigation active. Officers in unit under review. Ongoing.</span>
                            </div>
                        </div>
                    </div>

                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-2">Youth Crime Terminology</div>
                        <p class="text-[0.62rem] text-paper/35 leading-relaxed">When adult victims of youth group assaults are directed to units named for child protection, the language frames the encounter around the offenders' status — not the victim's experience. This is a policy and communication failure worth naming.</p>
                    </div>

                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-2">Have a similar experience?</div>
                        <p class="text-[0.62rem] text-paper/35 leading-relaxed mb-3">If your assault or stalking report on the Gold Coast was deprioritised or mishandled — particularly if you believe your online presence was a factor — contact CovertGC confidentially.</p>
                        <a href="#sms" class="block text-center border border-hot/40 hover:bg-hot/10 text-hot font-display tracking-widest py-2.5 text-xs transition-all">CONTACT COVERTGC</a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     AQUATIC CENTRE PRIVACY BREACH
══════════════════════════════════════ -->
<section id="privacy" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(123,94,167,0.04) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">

        <!-- Section header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-4 h-px bg-violet"></div>
                    <span class="text-[0.55rem] tracking-[0.3em] uppercase text-violet">Privacy Breach — Episode 1</span>
                </div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">PHOTOGRAPHED.<br><span class="text-violet">LABELLED. LEAKED.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">A council aquatic centre photographed me, annotated my image with a surveillance note, and a staff member leaked it to the public with a derogatory comment. The Council dropped its own investigation. The Mayor called me a public nuisance. The Premier disagreed.</p>
            </div>
            <div class="max-w-xs">
                <div class="flex flex-wrap gap-2 mb-3">
                    <span class="evidence-tag" style="color:#7b5ea7">📄 Council Letters — Verified</span>
                    <span class="evidence-tag text-sage" style="color:#2a9d4e">✓ Staff Let Go</span>
                    <span class="evidence-tag text-gold" style="color:#e8a020">⚠ Show Cause Issued</span>
                </div>
                <p class="text-[0.65rem] leading-relaxed text-paper/30">Documented via Gold Coast City Council correspondence. Escalated to Premier David Crisafulli. Investigation outcome: staff terminated.</p>
            </div>
        </div>

        <!-- Opening -->
        <div class="max-w-3xl mb-14 reveal">
            <p class="font-serif italic text-paper/60 leading-relaxed mb-5" style="font-size:clamp(1rem,2.2vw,1.2rem)">
                "I went to use the upstairs shower at the Southport Aquatic Centre. I wasn't causing trouble. I wasn't arguing. When asked to leave I left without a problem. What I didn't know was that while I was there, a staff member had photographed me and annotated the image with surveillance-style notes — then sent it to a member of the public with the caption 'Look at these shit cunts.' That member of the public was Adam Watson. That staff member was a photographer I had personally given work to."
            </p>
            <div class="flex items-center gap-3">
                <div class="w-6 h-px bg-violet/40"></div>
                <span class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/25">Kosta Kondratenko — CovertGC</span>
            </div>
        </div>

        <!-- Stats bar -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-16 reveal">
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-violet mb-1">0</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Charges upheld</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">All dropped</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-hot mb-1">45</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Day deadline</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Council missed it then dropped it</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-gold mb-1">1</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Show Cause notice</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Issued by Premier Crisafulli</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-sage mb-1">✓</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Staff terminated</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Confirmed outcome</div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[1fr_320px] gap-12">
            <div class="space-y-14">

                <!-- What happened -->
                <div class="story-chapter reveal" style="border-left-color:rgba(123,94,167,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7b5ea7;border-color:rgba(123,94,167,0.4)">What Happened</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE UPSTAIRS SHOWER<br><span style="color:#7b5ea7">THAT STARTED AN INVESTIGATION</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                        "There are two shower areas at the Southport Aquatic Centre. The downstairs one — and the upstairs one near the gym with significantly better water pressure. I used the upstairs one. That's the totality of my offence."
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        I had been asked previously not to use the gym facilities. I was not using the gym. I was using a shower — a public amenity in a public facility funded by Gold Coast ratepayers. When a staff member asked me to leave, I left. No argument. No incident. No drama.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        What I didn't know was that during that visit, a staff member had taken a photograph of me — in my black Everlast jumper, leaving the centre — and annotated it with a surveillance-style note reading: <span class="font-mono text-paper/70 text-xs bg-paper/[0.05] px-2 py-0.5">"Monitor This One. Comes in for shower. Been asked not to use gym."</span>
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                        That annotated photograph was then sent by the staff member to a member of the public — Adam Watson — with the message: "Look at these shit cunts." Adam is not a council employee. He has no official relationship with the Southport Aquatic Centre. He is a private individual. The staff member who sent it is a photographer who I had personally commissioned and paid for work involving Adam Watson. That is how he repaid the opportunity.
                    </p>

                    <!-- Photo placeholder -->
                    <div class="border border-paper/[0.07] overflow-hidden mb-6">
                        <div class="h-52 flex items-center justify-center relative" style="background:rgba(123,94,167,0.05)">
                            <div class="absolute inset-0 scanlines opacity-30"></div>
                            <div class="text-center z-10 px-6">
                                <div class="font-display text-xl tracking-widest mb-2" style="color:rgba(123,94,167,0.3)">[ LEAKED PHOTO — PLACEHOLDER ]</div>
                                <div class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/20 mb-2">Subject: Kosta Kondratenko — Southport Aquatic Centre</div>
                                <div class="font-mono text-[0.6rem] border px-3 py-1.5 inline-block" style="border-color:rgba(123,94,167,0.3);color:rgba(123,94,167,0.6)">"Monitor This One. Comes in for shower. Been asked not to use gym."</div>
                            </div>
                        </div>
                        <div class="border-t border-paper/[0.05] px-4 py-2 flex justify-between items-center">
                            <span class="text-[0.52rem] text-paper/20">Evidence — Leaked by council staff member to private individual, December 2024</span>
                            <span class="text-[0.52rem]" style="color:rgba(123,94,167,0.5)">Privacy Act Breach</span>
                        </div>
                    </div>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45">
                        This is a surveillance photograph of a private citizen, taken without consent, annotated with a monitoring directive, and distributed outside the organisation to a member of the public with a derogatory comment attached. Under Queensland's Information Privacy Act 2009, this is a textbook privacy breach. It is also, depending on circumstances, potential misconduct under the Local Government Act and the council's own employee conduct standards.
                    </p>
                </div>

                <!-- The council response -->
                <div class="story-chapter reveal" style="transition-delay:0.1s;border-left-color:rgba(214,61,47,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">The Response</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE COUNCIL DROPPED<br><span class="text-hot">ITS OWN INVESTIGATION.</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        I lodged a formal privacy complaint with the City of Gold Coast on 15 December 2024. The Council acknowledged it the following day, confirming the complaint was being investigated by the Chief Risk and Audit Office. Under section 166 of the Information Privacy Act 2009, a complainant may escalate to the Information Commissioner if 45 business days pass without an adequate response.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        Rather than complete the investigation within that window, the Council discontinued it — citing a failure to receive further information from me. The Council's letter states it followed up by telephone and email on 16 December 2024 and by email on 16 January 2025 requesting more information before closing the file.
                    </p>

                    <!-- Document reveals -->
                    <div class="space-y-3 mb-6">
                        <div class="border border-paper/[0.07] p-5" style="border-left:3px solid rgba(214,61,47,0.4)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">Letter One — 16 December 2024</div>
                            <p class="text-[0.65rem] text-paper/40 leading-relaxed mb-2">City of Gold Coast acknowledges complaint. States the Chief Risk and Audit Office is investigating. References 45-day window under the Information Privacy Act 2009. Signed: Julie Schyf, Complaints Officer.</p>
                            <div class="font-mono text-[0.58rem] text-paper/25 border-t border-paper/[0.05] pt-2 mt-2">Our reference: Lawmaster 1192 · Location: Waterside West</div>
                        </div>
                        <div class="border border-paper/[0.07] p-5" style="border-left:3px solid rgba(214,61,47,0.4)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">Letter Two — Subsequent</div>
                            <p class="text-[0.65rem] text-paper/40 leading-relaxed mb-2">City of Gold Coast discontinues the investigation. States it followed up twice requesting more information and received no response. Closes the file. Invites reopening via email. Signed: Julie Schyf, for the Chief Executive Officer.</p>
                            <div class="font-mono text-[0.58rem] text-paper/25 border-t border-paper/[0.05] pt-2 mt-2">Contact: complaints@goldcoast.qld.gov.au</div>
                        </div>
                    </div>

                    <div class="border border-paper/[0.07] p-5" style="border-left:3px solid rgba(232,160,32,0.5)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-2">The Onus Problem</div>
                        <p class="text-[0.68rem] text-paper/40 leading-relaxed">The privacy breach here is not ambiguous. A staff member photographed a member of the public, annotated the photograph with a monitoring directive, and sent it to a private individual with a derogatory comment. The evidence of this breach — the photograph, the annotation, the message — exists. The Council's decision to discontinue the investigation because the complainant did not provide further information transfers the investigative burden to the victim of the breach. The Council had access to its own staff, its own systems, and the photograph itself. It did not need more information from me to determine whether its employee sent a surveillance image to a private individual. It needed to ask its employee.</p>
                    </div>
                </div>

                <!-- Tom Tate -->
                <div class="story-chapter reveal" style="transition-delay:0.15s;border-left-color:rgba(214,61,47,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">The Mayor's Comment</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">"HE'S A PUBLIC NUISANCE."<br><span class="text-hot">— TOM TATE, MAYOR OF GOLD COAST</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        When Adam Watson approached Mayor Tom Tate regarding the privacy breach and the Council's failure to adequately investigate, Mayor Tate's response was to characterise me as a "public nuisance."
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        I am not a public nuisance. Every charge brought against me has been dropped. I have no criminal record. I am a journalist and content creator. The Mayor of Gold Coast describing me with a term that carries clear legal and social connotations — while his council was simultaneously failing to investigate a documented privacy breach by one of its own staff members — is precisely the kind of institutional attitude that produces exactly the treatment I received at the Southport Aquatic Centre.
                    </p>
                    <div class="border border-hot/20 p-5 mb-5" style="background:rgba(214,61,47,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">Formal Demand — Retraction</div>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed">CovertGC formally demands that Mayor Tom Tate retract his characterisation of Kosta Kondratenko as a "public nuisance." All charges brought against Mr Kondratenko have been dropped. The characterisation is factually unsupported, was made in the context of a query about a documented privacy breach by council staff, and reflects a disposition toward the complainant that is inconsistent with the obligations of an elected official responding to a legitimate governance concern. A written retraction is requested. If none is forthcoming, this demand and the absence of a response will be published as part of CovertGC's ongoing coverage.</p>
                    </div>
                </div>

                <!-- Escalation and outcome -->
                <div class="story-chapter reveal" style="transition-delay:0.2s;border-left-color:rgba(42,157,78,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-sage border border-sage/40 px-2 py-1">The Escalation</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE PREMIER HEARD.<br><span class="text-sage">THE COUNCIL HADN'T.</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        Premier David Crisafulli was made aware of the privacy breach, the Council's failure to investigate, and Mayor Tate's characterisation. The Premier issued a Show Cause notice to the Council. The staff members involved in the incident have since been let go.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                        That outcome — while welcome — raises its own question. A gold coast ratepayer lodged a formal privacy complaint through the official channel. The Council acknowledged it, followed up twice, then discontinued its own investigation. It took a direct escalation to the Premier of Queensland to produce the result that the Council's own complaints process was designed to deliver. The process failed. The escalation succeeded. These two facts should not coexist.
                    </p>

                    <!-- What this means -->
                    <div class="border border-sage/20 p-6" style="background:rgba(42,157,78,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-3">What This Establishes</div>
                        <div class="space-y-3">
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-sage"></div>
                                <p class="text-[0.65rem] text-paper/45 leading-relaxed">Council staff photographed and created a surveillance dossier on a member of the public using a public facility. This is a use of council resources and systems that requires authorisation and oversight that evidently was not in place.</p>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-sage"></div>
                                <p class="text-[0.65rem] text-paper/45 leading-relaxed">That surveillance material was shared outside the organisation with a derogatory comment. This is a breach of the Information Privacy Act 2009, staff conduct obligations, and basic professional standards.</p>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-sage"></div>
                                <p class="text-[0.65rem] text-paper/45 leading-relaxed">The Council's own complaints process failed to resolve a straightforward breach — the evidence of which was held by the organisation itself.</p>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-sage"></div>
                                <p class="text-[0.65rem] text-paper/45 leading-relaxed">The elected Mayor responded to a query about this breach by characterising the complainant, not the breach. That response tells you something about the institutional culture that produced the breach in the first place.</p>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-sage"></div>
                                <p class="text-[0.65rem] text-paper/45 leading-relaxed">Premier intervention and a Show Cause notice were required to produce the outcome the Council's own process should have delivered. Staff have been let go. The systemic question — how many other people have been photographed and monitored in this way — remains open.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="space-y-4">
                <div class="sticky top-24 space-y-4">

                    <div class="border p-5" style="border-color:rgba(123,94,167,0.2);background:rgba(123,94,167,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase mb-3" style="color:#7b5ea7">Your Privacy Rights</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-2 items-start">
                                <span class="text-xs mt-0.5 shrink-0" style="color:#7b5ea7">→</span>
                                <p class="text-[0.62rem] text-paper/40 leading-relaxed">Under Queensland's Information Privacy Act 2009, you can lodge a formal complaint with a council or government body if you believe your personal information has been mishandled.</p>
                            </div>
                            <div class="flex gap-2 items-start">
                                <span class="text-xs mt-0.5 shrink-0" style="color:#7b5ea7">→</span>
                                <p class="text-[0.62rem] text-paper/40 leading-relaxed">If the body does not respond adequately within 45 business days, you can escalate to the Office of the Information Commissioner Queensland.</p>
                            </div>
                            <div class="flex gap-2 items-start">
                                <span class="text-xs mt-0.5 shrink-0" style="color:#7b5ea7">→</span>
                                <p class="text-[0.62rem] text-paper/40 leading-relaxed">A photograph taken of you in a public facility, annotated, and distributed to a third party without your consent is a breach of the Act's Information Privacy Principles.</p>
                            </div>
                            <div class="flex gap-2 items-start">
                                <span class="text-xs mt-0.5 shrink-0" style="color:#7b5ea7">→</span>
                                <p class="text-[0.62rem] text-paper/40 leading-relaxed">If a council drops its investigation without adequate grounds, you can reopen it in writing and simultaneously escalate to the Information Commissioner.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-2">Key References</div>
                        <div class="space-y-2">
                            <div class="text-[0.6rem] text-paper/30">Information Privacy Act 2009 (Qld) — s.166</div>
                            <div class="text-[0.6rem] text-paper/30">Complaint ref: Lawmaster 1192</div>
                            <div class="text-[0.6rem] text-paper/30">Complaints Officer: Julie Schyf, City of Gold Coast</div>
                            <div class="text-[0.6rem] text-paper/30">Escalation: Premier David Crisafulli</div>
                            <div class="text-[0.6rem] text-paper/30">Outcome: Show Cause issued. Staff terminated.</div>
                        </div>
                    </div>

                    <div class="border border-hot/20 p-5" style="background:rgba(214,61,47,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">Retraction Demanded</div>
                        <p class="text-[0.62rem] text-paper/35 leading-relaxed">Mayor Tom Tate's characterisation of Kosta Kondratenko as a "public nuisance" is factually unsupported. All charges against Mr Kondratenko have been dropped. A formal retraction is demanded. Response deadline: 30 days from publication.</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     BRAZEN CRIME / FIREBOMBING SECTION
══════════════════════════════════════ -->
<section id="brazen" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(8,8,8,0) 0%,rgba(214,61,47,0.06) 50%,rgba(8,8,8,0) 100%)">
    <div class="max-w-6xl mx-auto">

        <!-- Section header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-4 h-px bg-hot"></div>
                    <span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Crime Without Shame — Episode 1</span>
                </div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">THEY DON'T EVEN<br><span class="text-hot">HIDE ANYMORE</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">Attempted murder. Arson. Intimidation of public figures. The Gold Coast's criminal culture has stopped pretending it operates in the shadows.</p>
            </div>
            <div class="max-w-xs">
                <p class="text-[0.65rem] leading-relaxed text-paper/30 mb-3">This section examines what happens when organised criminal behaviour stops being covert — when the message left at the scene is as deliberate as the crime itself.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag text-hot" style="color:#d63d2f">🔥 Arson</span>
                    <span class="evidence-tag text-gold" style="color:#e8a020">🚗 Attempted Murder</span>
                    <span class="evidence-tag" style="color:rgba(240,236,226,0.4)">⚠ Active Investigations</span>
                </div>
            </div>
        </div>

        <!-- Opening -->
        <div class="max-w-3xl mb-16 reveal">
            <p class="font-serif italic text-paper/60 leading-relaxed mb-5" style="font-size:clamp(1rem,2.2vw,1.2rem)">
                "The most disturbing thing isn't the violence. It's the brazenness. Leaving your calling card at a crime scene. Driving at someone in a public car park in broad daylight. Firebombing a house and writing a message on the fence. This isn't criminal behaviour that fears consequences. This is criminal behaviour that has decided consequences don't apply to it."
            </p>
            <div class="flex items-center gap-3">
                <div class="w-6 h-px bg-hot/40"></div>
                <span class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/25">CovertGC — Gold Coast</span>
            </div>
        </div>

        <!-- Three columns of incidents -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-px bg-paper/[0.04] mb-16 reveal">
            <div class="bg-ink p-7">
                <div class="font-display text-5xl text-hot/15 leading-none mb-4">01</div>
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">Attempted Murder</div>
                <div class="font-display text-xl tracking-wide mb-3">THE CAR NEAR OFFICEWORKS</div>
                <p class="text-[0.65rem] text-paper/40 leading-relaxed">A Gold Coast man known to CovertGC was deliberately driven at in a public car park. The driver has been identified, arrested, denied bail. Phone messages extracted from his device have been provided to law enforcement. The alleged motive: $15,000 to put the target in a wheelchair.</p>
            </div>
            <div class="bg-ink p-7">
                <div class="font-display text-5xl text-hot/15 leading-none mb-4">02</div>
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">Arson</div>
                <div class="font-display text-xl tracking-wide mb-3">THE FIREBOMBED HOME</div>
                <p class="text-[0.65rem] text-paper/40 leading-relaxed">A Gold Coast residence connected to the circle of Gina Rinehart — one of Australia's most powerful private citizens — was firebombed. A message was left at the scene. The words "Gina Rinehart is next" were written on the fence. A section of a website with identifying imagery was left at the scene.</p>
            </div>
            <div class="bg-ink p-7">
                <div class="font-display text-5xl text-hot/15 leading-none mb-4">03</div>
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">The Message</div>
                <div class="font-display text-xl tracking-wide mb-3">THEY LEFT A CALLING CARD</div>
                <p class="text-[0.65rem] text-paper/40 leading-relaxed">The website material left at the scene of the firebombing came from a previous version of this publication. The implication is deliberate: that coverage of these individuals — naming them, publishing their photos, investigating their conduct — is treated as justification for arson. That logic is the logic of intimidation. And it needs to be named as such.</p>
            </div>
        </div>

        <!-- Main content -->
        <div class="space-y-14">

            <!-- The attempted murder -->
            <div class="story-chapter reveal">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Incident One</span>
                    <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Active Investigation — Subject Not Named</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">FIFTEEN THOUSAND DOLLARS.<br><span class="text-hot">A WHEELCHAIR. A CAR PARK.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                    "Someone paid to have a man driven into near an Officeworks. Not threatened. Not intimidated. Driven into. With a car. The alleged price was $15,000. The alleged goal was a wheelchair. This is what escalation looks like when someone decides that legal and social tools have stopped working."
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    A Gold Coast man known to CovertGC was the target of a deliberate vehicle attack in a public car park. He photographed the driver at the scene. That photograph, combined with CCTV footage requested from the nearby Officeworks, was provided to law enforcement. The driver was identified, located, and arrested. He has been denied bail.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    Messages extracted from the driver's phone have been provided to investigators. Those messages, CovertGC understands, link the driver to a third party and indicate a payment of $15,000 for the attack. The investigation is active. We are not publishing identifying details of any party while proceedings are before the courts.
                </p>

                <!-- Photo placeholder -->
                <div class="border border-paper/[0.07] p-0 mb-6 overflow-hidden">
                    <div class="bg-paper/[0.03] h-48 flex items-center justify-center relative">
                        <div class="absolute inset-0 scanlines"></div>
                        <div class="text-center z-10">
                            <div class="font-display text-2xl tracking-widest text-paper/15 mb-2">[ PHOTO WITHHELD ]</div>
                            <div class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/20">Subject photographed at scene — face blurred pending proceedings</div>
                            <div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot/40 mt-2">Evidence held. Will be published at appropriate time.</div>
                        </div>
                    </div>
                    <div class="border-t border-paper/[0.05] px-4 py-2 flex justify-between items-center">
                        <span class="text-[0.52rem] text-paper/20">Exhibit — Vehicle Attack, Officeworks Car Park, Gold Coast</span>
                        <span class="text-[0.52rem] text-hot/40 blink">● Active Investigation</span>
                    </div>
                </div>

                <p class="text-[0.65rem] leading-relaxed text-paper/32">
                    The use of a hired driver — a third party with no prior connection to the target — is a hallmark of organised criminal methodology. It creates distance between the person who orders violence and the person who carries it out. It is also a sign of resources: this is not impulsive street violence. It is planned, funded, and executed with deliberate intent to cause permanent harm. A wheelchair, not a bruise. That specificity of intention tells you everything about the mentality behind it.
                </p>
            </div>

            <!-- The firebombing -->
            <div class="story-chapter reveal" style="transition-delay:0.1s">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Incident Two</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">"GINA RINEHART IS NEXT"<br><span class="text-hot">WRITTEN ON A FENCE.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                    "They firebombed the house. And then they wrote on the fence. They didn't run. They left a message. That's not crime as a means to an end. That's crime as a statement."
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    A Gold Coast home connected to the personal circle of Gina Rinehart — Australia's wealthiest individual and one of the most prominent figures in Australian business and politics — was firebombed. At the scene, perpetrators left written graffiti on the fence: "Gina Rinehart is next." They also left a section of a website — a previous version of this publication — containing identifying imagery of a person connected to the investigation.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    The implication of leaving the website material is deliberate and worth unpacking. It communicates: we know where this investigation comes from. We know who is behind it. And we are telling you — through fire — what we think the appropriate consequence for that investigation is. It is an attempt to make journalism itself the provocation for violence. That logic must not be allowed to stand unchallenged.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                    The individual connected to the investigation is known to CovertGC. They now work part-time for ASIO. The firebombing has been referred to the relevant intelligence and law enforcement agencies. The perpetrator is understood to have subsequently left Australia, travelling first to Thailand before relocating to Cambodia — a jurisdiction with limited extradition arrangements with Australia. Their property in Australia has been raided.
                </p>

                <!-- Rinehart context -->
                <div class="border border-paper/[0.07] p-6 mb-6" style="border-left:3px solid rgba(232,160,32,0.5)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-3">Why Targeting Rinehart's Circle Matters</div>
                    <p class="text-[0.68rem] text-paper/40 leading-relaxed mb-3">Gina Rinehart is not a sympathetic figure to everyone. She is a billionaire at the centre of significant political controversy — over mining policy, media ownership, and inherited wealth. None of that is relevant to what happened to a home connected to her circle. The message left on the fence — "Gina Rinehart is next" — is a death threat directed at a named private citizen. The political valence of the target does not change what it is.</p>
                    <p class="text-[0.68rem] text-paper/40 leading-relaxed">This matters because of what it reveals about the mentality of those responsible. They have assessed that Rinehart's public controversies make her a target whose threatening is either acceptable or strategically useful. They are wrong. Threatening to kill someone because they are powerful, controversial, or wealthy is still a threat to kill someone.</p>
                </div>
            </div>

            <!-- Friendlyjordies parallel -->
            <div class="story-chapter reveal" style="transition-delay:0.15s;border-left-color:rgba(232,160,32,0.3)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">The Pattern</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">FRIENDLYJORDIES. GINA RINEHART.<br><span class="text-gold">OPPOSITE ENDS. SAME FIRE.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                    "Jordan Shanks is left-wing. Gina Rinehart is the definition of right-wing capital. They have nothing in common politically. They have both been targeted with firebombing. If you needed a single image of how far beyond politics this problem has gone — that's it."
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    In November 2022, the Bondi Beach home of Jordan Shanks — the political commentator known as Friendlyjordies — was firebombed. Police launched investigations into two separate attempts to burn down Shanks' house, with one attack in November 2022 mistakenly targeting his next-door neighbour before a second attack successfully burned down his home. The group used a stolen Mercedes with cloned plates and surveilled Shanks' home before pouring petrol at three separate locations.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    Police alleged the attack was carried out by an associate of the Alameddine crime network, in retaliation for a video Shanks made linking the crime family to a property development company. In September 2025, Tufi Junior Tauese-Auelua was sentenced to five years in jail over the firebombing.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    Shanks describes himself as Labor-aligned. His content targets conservative political figures and corporate power. He and Gina Rinehart represent genuinely opposing political and economic worldviews. The fact that both have been targeted with arson — one for what he publishes, one for who she is — is not a coincidence of ideology. It is a symptom of a criminal culture that has decided public profile, not political position, is sufficient justification for violence.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    Shanks' lawyer Mark Davis said: "The rot within the institutions of state that might have protected us from mobsters and criminal gangs and drug money is almost complete." That statement was made about NSW. It applies with equal force on the Gold Coast.
                </p>

                <!-- Side-by-side comparison -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-2">Jordan Shanks — Friendlyjordies</div>
                        <div class="text-[0.62rem] text-paper/40 leading-relaxed space-y-1.5">
                            <div>Political alignment: Left / Labor</div>
                            <div>Target of: Organised crime network</div>
                            <div>Method: Firebombing — Bondi Beach, Nov 2022</div>
                            <div>Trigger: Video naming crime family</div>
                            <div>Outcome: Home destroyed. Perpetrator jailed 5 years.</div>
                        </div>
                    </div>
                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-2">Gina Rinehart's Circle — Gold Coast</div>
                        <div class="text-[0.62rem] text-paper/40 leading-relaxed space-y-1.5">
                            <div>Political alignment: Right / conservative capital</div>
                            <div>Target of: Criminal network, Gold Coast</div>
                            <div>Method: Firebombing — Gold Coast residence</div>
                            <div>Trigger: Connection to active investigation</div>
                            <div>Outcome: "Rinehart is next" left at scene. Investigation active.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- The ethics of intimidation journalism -->
            <div class="story-chapter reveal" style="transition-delay:0.2s;border-left-color:rgba(214,61,47,0.3)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">The Principle</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">NAMING SOMEONE<br><span class="text-hot">IS NOT PROVOCATION FOR ARSON.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    The website material left at the Gold Coast firebombing scene — taken from a previous version of this publication — is an attempt to establish a causal logic: you published about us, therefore we burned a house. That logic, if accepted, means investigative journalism on the Gold Coast is an act that invites fire. CovertGC does not accept that logic. We are publishing this section precisely because accepting it would mean the threat worked.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                    The ethical framework is straightforward. Journalism that names people in connection with documented criminal conduct, supported by evidence and legal review, is not provocation. It is accountability. The response to accountability is legal challenge, correction requests, and the courts — not arson. Any criminal network that has decided otherwise has made a statement about how it views the rule of law. That statement should be taken seriously by law enforcement and treated as the evidence of intent that it is.
                </p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">
                    CovertGC will continue publishing. The material left at the scene has been provided to ASIO and Queensland Police. It is now evidence, not a warning.
                </p>

                <div class="border border-hot/15 p-6 mt-6" style="background:rgba(214,61,47,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">The Brazenness Problem</div>
                    <p class="text-[0.68rem] text-paper/40 leading-relaxed mb-3">What distinguishes recent criminal behaviour in this investigation from conventional organised crime is the absence of concealment. A calling card left at a firebombing. A vehicle attack in a busy public car park with witnesses. Threats written openly on fences naming specific future targets. These are not the actions of people who fear detection. They are the actions of people who have assessed — correctly or not — that detection does not lead to consequence.</p>
                    <p class="text-[0.68rem] text-paper/40 leading-relaxed">That assessment is either a product of past experience with impunity, or a deliberate strategy of intimidation through visibility. In either case, the correct response from law enforcement, media, and the public is not silence. Silence confirms the assessment. The only thing that changes the calculus is consequence — and consequence requires investigation, prosecution, and publication.</p>
                </div>

                <div class="doc-reveal p-4 cursor-pointer mt-6" onclick="openModal('brazenfile')">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-[0.5rem] tracking-[0.18em] uppercase text-hot mb-1">Case File — Press Freedom & Criminal Intimidation</div>
                            <div class="text-[0.7rem] text-paper/65">What Australian law says about using violence to silence journalism — and the international pattern of organised crime targeting independent media.</div>
                        </div>
                        <span class="text-[0.52rem] text-hot/50 ml-4 shrink-0 hover:text-hot transition-colors">Full File →</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     PRIVACY BREACH / AQUATIC CENTRE
══════════════════════════════════════ -->
<section id="privacy" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(123,94,167,0.04) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">

        <!-- Section header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-4 h-px bg-violet"></div>
                    <span class="text-[0.55rem] tracking-[0.3em] uppercase text-violet">Privacy Breach — Episode 1</span>
                </div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">THEY PHOTOGRAPHED ME.<br><span class="text-violet">THEN THEY LEAKED IT.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">A Gold Coast Aquatic Centre staff member photographed a patron, annotated the image, and shared it publicly with a derogatory comment. The Council investigated — then dropped it and put the onus back on the victim.</p>
            </div>
            <div class="max-w-xs">
                <p class="text-[0.65rem] leading-relaxed text-paper/30 mb-3">Two letters from the City of Gold Coast. One complaint. One dropped investigation. One Mayor who called a man whose charges were all dropped a "public nuisance." One Premier who disagreed.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag" style="color:#7b5ea7">📄 Documents Verified</span>
                    <span class="evidence-tag text-sage" style="color:#2a9d4e">✓ Staff Let Go</span>
                    <span class="evidence-tag text-gold" style="color:#e8a020">⚠ Show Cause Issued</span>
                </div>
            </div>
        </div>

        <!-- Opening -->
        <div class="max-w-3xl mb-14 reveal">
            <p class="font-serif italic text-paper/60 leading-relaxed mb-5" style="font-size:clamp(1rem,2.2vw,1.2rem)">
                "I went to use the upstairs shower at the Gold Coast Aquatic Centre. The one with better pressure. I wasn't causing trouble. I left without incident when asked. What I didn't know was that a staff member had photographed me — annotated the image with a comment about monitoring me — and sent it to a member of the public with the words 'look at these shit cunts.' That person was someone I had paid to photograph Adam Watson. This is how he used that opportunity."
            </p>
            <div class="flex items-center gap-3">
                <div class="w-6 h-px bg-violet/40"></div>
                <span class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/25">Kosta Kondratenko — CovertGC</span>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-16 reveal">
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-violet mb-1">1</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Privacy complaint</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Filed Dec 2024</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-hot mb-1">0</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Investigation outcome</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Dropped by Council</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-gold mb-1">1</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Show Cause notice</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Issued by Crisafulli</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-sage mb-1">✓</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Staff let go</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Confirmed outcome</div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[1fr_320px] gap-12">
            <div class="space-y-14">

                <!-- What happened -->
                <div class="story-chapter reveal" style="border-left-color:rgba(123,94,167,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-violet border border-violet/40 px-2 py-1">What Happened</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">A SHOWER.<br><span class="text-violet">A PHOTO. A CAPTION.</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        The Gold Coast Aquatic Centre at Southport has two shower facilities. The downstairs shower is accessible but has noticeably inferior water pressure. The upstairs shower, located near the gym, is better. I used the upstairs shower. I was asked to leave. I left without incident, without argument, without causing any disruption.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        What I did not know was that a staff member had taken a photograph of me — wearing a black Everlast jumper — and annotated it with the words: <span class="text-violet font-mono text-xs">"Monitor This One. Comes in for shower. Been asked not to use gym."</span> That annotated photograph was then sent by a staff member to a member of the public — a photographer known to CovertGC — with the accompanying comment: "Look at these shit cunts."
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        The photographer who received it is someone I had personally found, given an opportunity to, and paid to photograph Adam Watson. The image was forwarded to Adam Watson, which is how it came to my attention. The person who sent it — a Gold Coast Aquatic Centre staff member — was moonlighting as a photographer. A person I had employed in that capacity chose to pass on a covertly taken, annotated photograph of me, with a derogatory message, to another member of the public.
                    </p>

                    <!-- Photo placeholder -->
                    <div class="border border-paper/[0.07] mb-6 overflow-hidden">
                        <div class="bg-paper/[0.03] h-52 flex items-center justify-center relative">
                            <div class="absolute inset-0 scanlines"></div>
                            <div class="text-center z-10 px-8">
                                <div class="font-display text-xl tracking-widest text-paper/15 mb-3">[ PHOTO PLACEHOLDER ]</div>
                                <div class="text-[0.55rem] tracking-[0.18em] uppercase text-paper/20 mb-2">Subject: Kosta Kondratenko — Black Everlast Jumper</div>
                                <div class="text-[0.55rem] tracking-[0.18em] uppercase text-paper/20 mb-2">Location: Gold Coast Aquatic Centre, Southport</div>
                                <div class="border border-violet/20 px-3 py-1.5 inline-block mt-2">
                                    <span class="text-[0.5rem] tracking-[0.15em] uppercase text-violet/60">Annotation visible: "Monitor This One. Comes in for shower. Been asked not to use gym."</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-t border-paper/[0.05] px-4 py-2 flex justify-between items-center">
                            <span class="text-[0.52rem] text-paper/20">Leaked image — Gold Coast Aquatic Centre staff member to member of public, Dec 2024</span>
                            <span class="text-[0.52rem] text-violet/40">Privacy Act breach</span>
                        </div>
                    </div>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45">
                        Under Queensland's Information Privacy Act 2009, the collection and disclosure of personal information — including photographs — by a local government entity without consent constitutes a privacy breach. The annotation identifying me by behaviour, and the forwarding of that image to a third party outside the organisation, are both prima facie breaches. This is not a grey area.
                    </p>
                </div>

                <!-- The complaint and response -->
                <div class="story-chapter reveal" style="transition-delay:0.1s;border-left-color:rgba(123,94,167,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-violet border border-violet/40 px-2 py-1">The Council Response</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">COMPLAIN TO US.<br><span class="text-violet">THEN DO OUR JOB FOR US.</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                        I filed a privacy complaint with the City of Gold Coast on 15 December 2024. The Council acknowledged it, assigned it a reference number — Lawmaster 1192 — and informed me it was being investigated by the Chief Risk and Audit Office. Standard process.
                    </p>

                    <!-- Letter 1 -->
                    <div class="border border-violet/15 p-6 mb-4 font-mono" style="background:rgba(123,94,167,0.03)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-violet mb-4">Document — Letter 1 of 2 — City of Gold Coast</div>
                        <div class="text-[0.62rem] text-paper/50 leading-relaxed space-y-1">
                            <div>Date: 16 December 2024</div>
                            <div>Our reference: Lawmaster 1192</div>
                            <div>Re: Privacy Complaint/Breach — Southport Aquatic Centre</div>
                        </div>
                        <div class="border-t border-paper/[0.06] mt-4 pt-4">
                            <p class="text-[0.65rem] text-paper/40 leading-relaxed italic">"On 16 December 2024 the City of Gold Coast received your complaint about an alleged breach of privacy by a staff member at the Southport Aquatic Centre. Your complaint is being investigated by the City's Chief Risk and Audit Office..."</p>
                        </div>
                        <div class="mt-3 text-[0.55rem] text-paper/25">Signed: Julie Schyf, Complaints Officer, Chief Risk and Audit Office</div>
                    </div>

                    <!-- Letter 2 -->
                    <div class="border border-hot/15 p-6 mb-6 font-mono" style="background:rgba(214,61,47,0.03)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-4">Document — Letter 2 of 2 — Investigation Discontinued</div>
                        <div class="text-[0.62rem] text-paper/50 leading-relaxed space-y-1">
                            <div>Re: Privacy Complaint — Investigation Discontinued</div>
                        </div>
                        <div class="border-t border-paper/[0.06] mt-4 pt-4">
                            <p class="text-[0.65rem] text-paper/40 leading-relaxed italic">"The City of Gold Coast followed up by telephone and email on 16 December 2024 and by email on 16 January 2025 requesting more information from you, in order to facilitate a full investigation... As no further details of the privacy complaint have been submitted, the City has discontinued the investigation."</p>
                        </div>
                        <div class="mt-3 text-[0.55rem] text-paper/25">Signed: Julie Schyf, Complaints Officer, for the Chief Executive Officer</div>
                    </div>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        The Council's second letter frames the discontinuation as a consequence of my failure to provide more information. This framing deserves scrutiny. The complaint was clear: a staff member photographed me, annotated the image, and forwarded it to a member of the public with a derogatory comment. The image exists. The annotation exists. The forwarding is documented. What additional information was required — and why was the burden of providing it placed entirely on me rather than investigated through the Council's own staff and systems?
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45">
                        A privacy breach investigation at a Council facility does not require the victim to conduct the investigation. The Council employs the staff member. The Council owns the facility. The Council has access to the communications systems through which the image was forwarded. The information needed to investigate this complaint was entirely within the Council's own systems. Asking me to provide it, and then closing the matter when I didn't, is not due process. It is a mechanism for inaction.
                    </p>
                </div>

                <!-- Tom Tate -->
                <div class="story-chapter reveal" style="transition-delay:0.15s;border-left-color:rgba(214,61,47,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">The Mayor's Comment</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">"HE'S A<br><span class="text-hot">PUBLIC NUISANCE."</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">
                        "Mayor Tom Tate, when approached about the privacy breach and the Council's failure to investigate, described me as a 'public nuisance.' All charges against me have been dropped. Every single one. I am not a public nuisance. I am a person whose privacy was breached by a Council employee — and whose Mayor chose to characterise the victim rather than address the conduct of his staff."
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        Mayor Tom Tate is a public figure and the elected head of the City of Gold Coast. When Adam Watson raised the matter of the privacy breach and the Council's discontinuation of the investigation directly with Mayor Tate, the Mayor's response was to characterise me as a "public nuisance." That characterisation was made in the context of a documented privacy complaint against a Council employee — not in the context of any criminal finding, because there are none. Every charge I have faced has been dropped.
                    </p>

                    <div class="border border-hot/20 p-6 mb-6" style="background:rgba(214,61,47,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">Formal Demand for Retraction</div>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">CovertGC formally requests that Mayor Tom Tate retract the characterisation of Kosta Kondratenko as a "public nuisance." The basis for this request is straightforward:</p>
                        <div class="space-y-2">
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-hot"></div>
                                <p class="text-[0.65rem] text-paper/40 leading-relaxed">All charges against Kosta Kondratenko have been dropped. There is no criminal finding that supports the characterisation.</p>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-hot"></div>
                                <p class="text-[0.65rem] text-paper/40 leading-relaxed">The Mayor made this comment in the context of a legitimate privacy complaint against a Council employee — not in response to any adjudicated conduct by the complainant.</p>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-hot"></div>
                                <p class="text-[0.65rem] text-paper/40 leading-relaxed">A Mayor characterising a privacy complainant as a nuisance, while his Council drops the investigation into the breach, creates a reasonable impression that the characterisation is designed to discourage the complaint. That impression needs to be corrected.</p>
                            </div>
                        </div>
                        <p class="text-[0.65rem] text-paper/30 leading-relaxed mt-4 italic">Mayor Tate has been contacted for comment. This section will be updated with any response received.</p>
                    </div>
                </div>

                <!-- Crisafulli / outcome -->
                <div class="story-chapter reveal" style="transition-delay:0.2s;border-left-color:rgba(42,157,78,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-sage border border-sage/40 px-2 py-1">The Outcome</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">CRISAFULLI STEPS IN.<br><span class="text-sage">STAFF LET GO.</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        Premier David Crisafulli was made aware of the privacy breach and the Council's handling — or rather its discontinuation — of the investigation. The Premier issued a Show Cause notice to the Council. The staff members involved in the photographing and leaking of the image have subsequently been let go.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        The contrast between the Council's response and the Premier's is instructive. The Council, when presented with a documented privacy breach by its own employee, requested more information from the victim and then closed the matter. The Premier, when presented with the same information, issued a formal Show Cause notice and the outcome was staff dismissal.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45">
                        The information available to both was identical. The difference in response reflects a difference in institutional will — and raises a reasonable question about whether a Council whose Mayor's first response was to call the complainant a nuisance was ever going to investigate this complaint in good faith.
                    </p>

                    <!-- Outcome summary -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-6">
                        <div class="border border-hot/20 p-5" style="background:rgba(214,61,47,0.03)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">City of Gold Coast</div>
                            <div class="space-y-1.5">
                                <div class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-hot shrink-0"></div><span class="text-[0.6rem] text-paper/35">Complaint acknowledged Dec 2024</span></div>
                                <div class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-hot shrink-0"></div><span class="text-[0.6rem] text-paper/35">Investigation discontinued Jan 2025</span></div>
                                <div class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-hot shrink-0"></div><span class="text-[0.6rem] text-paper/35">Mayor called complainant a "public nuisance"</span></div>
                                <div class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-hot shrink-0"></div><span class="text-[0.6rem] text-paper/35">No outcome, no accountability</span></div>
                            </div>
                        </div>
                        <div class="border border-sage/20 p-5" style="background:rgba(42,157,78,0.03)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-2">Premier David Crisafulli</div>
                            <div class="space-y-1.5">
                                <div class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-sage shrink-0"></div><span class="text-[0.6rem] text-paper/35">Made aware of the breach</span></div>
                                <div class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-sage shrink-0"></div><span class="text-[0.6rem] text-paper/35">Show Cause notice issued to Council</span></div>
                                <div class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-sage shrink-0"></div><span class="text-[0.6rem] text-paper/35">Staff involved let go</span></div>
                                <div class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-sage shrink-0"></div><span class="text-[0.6rem] text-paper/35">Accountability achieved via escalation</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- The broader point -->
                <div class="story-chapter reveal" style="transition-delay:0.25s;border-left-color:rgba(123,94,167,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-violet border border-violet/40 px-2 py-1">The Principle</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">YOUR PHOTO.<br><span class="text-violet">THEIR SMORGASBORD.</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        What happened at the Gold Coast Aquatic Centre is a specific instance of a broader problem: institutions that collect information about people — images, behaviour, patterns — treating that information as their own property to share, annotate, and weaponise. I used a shower. I was asked to leave and I left. For that, my photograph was annotated, circulated, and used as the basis for a derogatory comment about me sent to a person I had employed.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        The phrase used in the annotation — "Monitor This One" — is revealing. It suggests a system, or at minimum a culture, in which certain patrons are tracked, flagged, and shared with others. That system, if it exists formally, is subject to the Information Privacy Act. If it exists informally — staff taking and annotating photos on personal devices and sharing them through personal channels — it is both a breach and a disciplinary matter. Either way, it requires investigation, not discontinuation.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45">
                        The Gold Coast is a city that markets itself as a destination. Its public aquatic facilities are funded by ratepayers. The standard of conduct expected of staff at those facilities — toward all patrons, regardless of their circumstances — should be set by the Council and enforced by it. When it isn't, the alternative is a Premier's Show Cause notice. That should embarrass the Council. It should also prompt a review of whether this incident was isolated or symptomatic.
                    </p>

                    <div class="doc-reveal p-4 cursor-pointer mt-6" style="border-left-color:#7b5ea7" onclick="openModal('privacyfile')">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-[0.5rem] tracking-[0.18em] uppercase text-violet mb-1">Case File — Information Privacy Act 2009 & Your Rights</div>
                                <div class="text-[0.7rem] text-paper/65">What Queensland privacy law says about photographs taken by public entities, how to escalate a discontinued investigation, and what the Information Commissioner can do.</div>
                            </div>
                            <span class="text-[0.52rem] text-violet/50 ml-4 shrink-0 hover:text-violet transition-colors">Full File →</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="space-y-4">
                <div class="sticky top-24 space-y-4">

                    <div class="border border-violet/20 p-5" style="background:rgba(123,94,167,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-violet mb-3">Timeline</div>
                        <div class="space-y-3">
                            <div class="flex gap-3">
                                <div class="text-[0.52rem] text-paper/25 w-16 shrink-0 pt-0.5">Dec 2024</div>
                                <div>
                                    <div class="text-[0.6rem] text-paper/50">Photo taken, annotated, leaked by staff member</div>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="text-[0.52rem] text-paper/25 w-16 shrink-0 pt-0.5">15 Dec</div>
                                <div>
                                    <div class="text-[0.6rem] text-paper/50">Privacy complaint filed with City of Gold Coast</div>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="text-[0.52rem] text-paper/25 w-16 shrink-0 pt-0.5">16 Dec</div>
                                <div>
                                    <div class="text-[0.6rem] text-paper/50">Council acknowledges complaint — Lawmaster 1192</div>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="text-[0.52rem] text-paper/25 w-16 shrink-0 pt-0.5">Jan 2025</div>
                                <div>
                                    <div class="text-[0.6rem] text-paper/50 text-hot/70">Council discontinues investigation</div>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="text-[0.52rem] text-paper/25 w-16 shrink-0 pt-0.5">2025</div>
                                <div>
                                    <div class="text-[0.6rem] text-paper/50">Mayor Tate: "He's a public nuisance"</div>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="text-[0.52rem] text-paper/25 w-16 shrink-0 pt-0.5">2025</div>
                                <div>
                                    <div class="text-[0.6rem] text-sage/70">Premier Crisafulli issues Show Cause notice</div>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="text-[0.52rem] text-paper/25 w-16 shrink-0 pt-0.5">2025</div>
                                <div>
                                    <div class="text-[0.6rem] text-sage/70">Staff involved let go</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-2">Information Commissioner Pathway</div>
                        <p class="text-[0.62rem] text-paper/35 leading-relaxed mb-3">Under s.166 of the Information Privacy Act 2009, you may escalate to the Queensland Information Commissioner if 45 business days have elapsed since your complaint and you have not received an adequate response. The Council's letter itself notes this right — and then dropped the investigation anyway.</p>
                        <a href="https://www.oic.qld.gov.au" target="_blank" class="block text-center border border-violet/40 hover:bg-violet/10 text-violet font-display tracking-widest py-2.5 text-xs transition-all">QLD INFORMATION COMMISSIONER →</a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     REDRESS SCHEME SECTION
══════════════════════════════════════ -->
<section id="redress" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(42,157,78,0.03) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">

        <!-- Section header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-4 h-px bg-sage"></div>
                    <span class="text-[0.55rem] tracking-[0.3em] uppercase text-sage">Public Interest — Episode 1</span>
                </div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">WHO'S CHECKING<br><span class="text-sage">THE REDRESS SCHEME?</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">Australia's National Redress Scheme has paid out over $1 billion to survivors of institutional child sexual abuse. The question nobody is asking loudly enough: was anyone verifying the claims?</p>
            </div>
            <div class="max-w-xs">
                <p class="text-[0.65rem] leading-relaxed text-paper/30 mb-3">This section examines systemic verification failures in the National Redress Scheme — specifically whether attendance records at named institutions were cross-referenced before payouts were approved.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag text-sage" style="color:#2a9d4e">💰 $1B+ Paid Out</span>
                    <span class="evidence-tag text-hot" style="color:#d63d2f">⚠ Verification Gap</span>
                </div>
            </div>
        </div>

        <!-- Context intro -->
        <div class="max-w-3xl mb-14 reveal">
            <p class="font-serif italic text-paper/55 leading-relaxed mb-5" style="font-size:clamp(0.95rem,2vw,1.15rem)">
                "The National Redress Scheme was built to deliver justice to people who were failed by institutions that should have protected them. That purpose is legitimate and important. But a compensation scheme that does not verify whether applicants attended the institutions they name is not delivering justice — it is delivering a payout system that can be gamed. And when it gets gamed, it is the genuine survivors who are cheapened."
            </p>
            <div class="flex items-center gap-3">
                <div class="w-6 h-px bg-sage/40"></div>
                <span class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/25">CovertGC — Gold Coast</span>
            </div>
        </div>

        <!-- Stats bar -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-16 reveal">
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-sage mb-1">$1B+</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Total paid out</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">As of 2024</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-gold mb-1">40K+</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Applications received</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Since 2018</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-hot mb-1">0</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Attendance checks</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Required at application</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-paper/50 mb-1">?</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Fraudulent claims</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">No public figure exists</div>
            </div>
        </div>

        <!-- Main content -->
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_340px] gap-12 mb-16">

            <!-- Left: main story -->
            <div class="space-y-10">

                <!-- The scheme -->
                <div class="story-chapter reveal" style="border-left-color:rgba(42,157,78,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-sage border border-sage/40 px-2 py-1">Background</span>
                    </div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">WHAT THE REDRESS SCHEME IS</h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        The National Redress Scheme was established in 2018 following the Royal Commission into Institutional Responses to Child Sexual Abuse. It provides financial redress — up to $150,000 — counselling, and a direct personal response from institutions to people who experienced child sexual abuse in an institutional context: schools, churches, sporting clubs, government facilities.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        The scheme operates on a trauma-informed model. This means applicants are not required to prove their claims in the way a court would demand — the evidentiary threshold is deliberately lower, recognising that abuse often occurred in private, decades ago, with no documentation. A "reasonable person" standard applies: would a reasonable person believe the abuse occurred given the information provided?
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45">
                        This model is correct in principle. The Royal Commission documented systemic institutional cover-up that destroyed evidence and silenced victims for decades. Requiring victims to meet a criminal standard of proof would deny justice to most genuine claimants. The lower threshold exists for good reason.
                    </p>
                </div>

                <!-- The gap -->
                <div class="story-chapter reveal" style="transition-delay:0.1s;border-left-color:rgba(214,61,47,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">The Vulnerability</span>
                    </div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE ATTENDANCE RECORD GAP</h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        There is one verification check that is both straightforward and apparently not systematically applied: whether the applicant actually attended the institution they name.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        Most Australian schools, churches, and government institutions maintain attendance records going back decades. Enrolment registers, baptismal records, government placement files — the documentary basis to confirm whether a person was present at an institution during the period they claim exists in many cases. The National Redress Scheme's assessment process does not appear to require this verification as a standard step before approving a payment.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        This creates a specific and exploitable vulnerability: a person who never attended an institution named in their application can still receive a payout if their application is otherwise plausible. The institution itself — which is required to join the scheme and fund it — has limited ability to contest individual claims without appearing to victimise genuine survivors.
                    </p>

                    <!-- Gap detail boxes -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                        <div class="border border-paper/[0.07] p-4" style="border-left:3px solid rgba(214,61,47,0.5)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">What Is Checked</div>
                            <p class="text-[0.65rem] text-paper/40 leading-relaxed">Identity of applicant. Whether the named institution is a participating scheme member. Plausibility of the account on its face. Counselling and support needs.</p>
                        </div>
                        <div class="border border-paper/[0.07] p-4" style="border-left:3px solid rgba(42,157,78,0.5)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-2">What Is Not Systematically Checked</div>
                            <p class="text-[0.65rem] text-paper/40 leading-relaxed">Whether the applicant's name appears in the institution's enrolment, attendance, or placement records during the period claimed. This check is possible. It is not standard.</p>
                        </div>
                    </div>

                    <div class="border border-paper/[0.07] p-5" style="border-left:3px solid rgba(232,160,32,0.5)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-2">Why Institutions Can't Easily Contest Claims</div>
                        <p class="text-[0.65rem] text-paper/40 leading-relaxed">Institutions that join the Redress Scheme agree to a process that is deliberately weighted toward applicants. An institution that actively contests claims risks reputational and legal consequences — and is seen, fairly or not, as repeating the patterns of denial the Royal Commission exposed. This creates a structural disincentive to flag potentially fraudulent applications even when the institution has grounds to question them.</p>
                    </div>
                </div>

                <!-- Scale of the problem -->
                <div class="story-chapter reveal" style="transition-delay:0.15s;border-left-color:rgba(232,160,32,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Scale</span>
                    </div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">HOW MANY CLAIMS ARE FRAUDULENT?<br><span class="text-gold">NOBODY KNOWS.</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        The National Redress Scheme does not publish a figure for detected or suspected fraudulent claims. Its annual reports detail applications received, assessments completed, and payments made — but there is no transparency about integrity referrals, fraud investigations, or recovered funds.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        This is not unique to the Redress Scheme — most large compensation programs face the same disclosure challenge. But the combination of a lower evidentiary threshold, the absence of systematic attendance verification, and the structural disincentive for institutions to contest claims creates conditions where fraud, if it is occurring, would be difficult to detect and easy to sustain.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45">
                        CovertGC has been made aware of at least one Gold Coast case in which a Redress Scheme payout was subsequently subject to recovery action — including the seizure of an asset — following questions about whether the applicant had in fact attended the institution named in their claim. We are not in a position to name the individuals involved at this stage. We have submitted Freedom of Information requests to the National Redress Scheme regarding its verification methodology and fraud detection procedures. We will update this section when responses are received.
                    </p>
                </div>

                <!-- Criminal Injuries Compensation -->
                <div class="story-chapter reveal" style="transition-delay:0.2s;border-left-color:rgba(214,61,47,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Related Reform</span>
                    </div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">CRIMINAL INJURIES COMPENSATION:<br><span class="text-hot">THE LOOPHOLE BEING CLOSED</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        Separate from the National Redress Scheme, Queensland's Criminal Injuries Compensation scheme allows people who have suffered harm from criminal acts to apply for government compensation — even when the accused was never charged or convicted. The scheme's intent is to support victims who may face barriers to civil litigation.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">
                        A specific vulnerability in this framework has been identified: a person can receive Criminal Injuries Compensation based on an allegation even when the accused was found not guilty, had charges dropped, or — as in Adam Watson's case — had charges dismissed as a malicious prosecution. The accused has no automatic mechanism to challenge the compensation award or have it overturned following their exoneration.
                    </p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">
                        Queensland's Attorney General is now moving to address this gap. Proposed reforms would require that Criminal Injuries Compensation payments be linked to a verified criminal conviction — meaning a person cannot receive compensation for an alleged offence that did not result in a finding of guilt against the accused.
                    </p>

                    <!-- Reform detail -->
                    <div class="border border-paper/[0.07] p-6 mb-5" style="border-left:3px solid rgba(42,157,78,0.5)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-3">The Proposed Reform</div>
                        <div class="space-y-3">
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-sage"></div>
                                <p class="text-[0.65rem] text-paper/45 leading-relaxed">Criminal Injuries Compensation awards would require a corresponding conviction against the named accused before payment is finalised.</p>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-sage"></div>
                                <p class="text-[0.65rem] text-paper/45 leading-relaxed">Existing awards made in cases where charges were later dropped or found malicious would be subject to review.</p>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0 bg-sage"></div>
                                <p class="text-[0.65rem] text-paper/45 leading-relaxed">The reform addresses the specific scenario where false allegations generate both a criminal charge and a compensation payout — two weapons deployed from a single lie.</p>
                            </div>
                        </div>
                    </div>

                    <div class="doc-reveal p-4 cursor-pointer" style="border-left-color:#2a9d4e" onclick="openModal('redressfile')">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-[0.5rem] tracking-[0.18em] uppercase text-sage mb-1">Case File — Redress & Compensation Integrity</div>
                                <div class="text-[0.7rem] text-paper/65">The verification gap, the QLD Attorney General reform, and what a robust fraud detection framework would look like.</div>
                            </div>
                            <span class="text-[0.52rem] text-sage/50 ml-4 shrink-0 hover:text-sage transition-colors">Full File →</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right: sidebar -->
            <div class="space-y-4">

                <div class="sticky top-24 space-y-4">
                    <div class="border border-sage/20 p-5" style="background:rgba(42,157,78,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-3">What CovertGC Is Asking</div>
                        <div class="space-y-3">
                            <div class="flex gap-2 items-start">
                                <span class="text-hot text-xs mt-0.5 shrink-0">→</span>
                                <p class="text-[0.62rem] text-paper/40 leading-relaxed">Does the National Redress Scheme cross-reference applicant names against institutional attendance records before approving payments?</p>
                            </div>
                            <div class="flex gap-2 items-start">
                                <span class="text-hot text-xs mt-0.5 shrink-0">→</span>
                                <p class="text-[0.62rem] text-paper/40 leading-relaxed">How many claims have been referred for fraud investigation since 2018? How many resulted in recovery action?</p>
                            </div>
                            <div class="flex gap-2 items-start">
                                <span class="text-hot text-xs mt-0.5 shrink-0">→</span>
                                <p class="text-[0.62rem] text-paper/40 leading-relaxed">What is the process for an institution to flag a claim it believes is fraudulent — and what protections exist to ensure that process is not used to victimise genuine survivors?</p>
                            </div>
                            <div class="flex gap-2 items-start">
                                <span class="text-hot text-xs mt-0.5 shrink-0">→</span>
                                <p class="text-[0.62rem] text-paper/40 leading-relaxed">How many Criminal Injuries Compensation awards have been made in QLD in cases where the accused was subsequently exonerated?</p>
                            </div>
                        </div>
                    </div>

                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">FOI Requests Filed</div>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-gold"></div>
                                <span class="text-[0.6rem] text-paper/35">National Redress Scheme — verification methodology</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-gold"></div>
                                <span class="text-[0.6rem] text-paper/35">National Redress Scheme — fraud referral statistics</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-paper/20"></div>
                                <span class="text-[0.6rem] text-paper/25">QLD AG — Criminal Injuries Compensation reform detail</span>
                            </div>
                        </div>
                        <p class="text-[0.55rem] text-paper/18 mt-3 leading-relaxed">Pending responses. This section will be updated when received.</p>
                    </div>

                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-2">Have information?</div>
                        <p class="text-[0.62rem] text-paper/35 leading-relaxed mb-3">If you have direct knowledge of Redress Scheme verification failures, or were involved in the scheme's administration, we want to hear from you. All contacts are confidential.</p>
                        <a href="#sms" class="block text-center border border-sage/40 hover:bg-sage/10 text-sage font-display tracking-widest py-2.5 text-xs transition-all">CONTACT COVERTGC</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Closing note -->
        <div class="border-t border-paper/[0.06] pt-8 max-w-3xl">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-3">A Note On This Investigation</div>
            <p class="text-[0.68rem] text-paper/35 leading-relaxed">The National Redress Scheme exists because Australia failed tens of thousands of children in its institutions. That failure was real. The scheme is necessary. Raising questions about its fraud detection methodology is not an attack on survivors — it is an argument that survivors deserve a scheme with enough integrity that its payouts mean something. Fraud against the scheme is not a victimless act. Every fraudulent claim dilutes the legitimacy of every genuine one.</p>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     CASE STUDY CARDS (existing)
══════════════════════════════════════ -->
<section id="cases" class="py-20 px-5 md:px-10 max-w-6xl mx-auto">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12 pb-5 border-b border-paper/[0.06]">
        <div>
            <div class="text-[0.55rem] tracking-[0.3em] uppercase text-hot mb-2">Intelligence Dossier — Episode 1</div>
            <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">CASE FILES</h2>
        </div>
        <p class="text-[0.65rem] leading-relaxed text-paper/30 max-w-xs">Click any case to open the full investigation brief with detailed case studies.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

        <article onclick="openModal('bikie')" class="case-card reveal cursor-pointer group relative bg-paper/[0.02] border border-paper/[0.07] overflow-hidden" style="transition-delay:0s">
            <div class="bar-accent absolute top-0 left-0 right-0 h-[2px] bg-hot"></div>
            <div class="relative h-44 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=700&q=75" alt="Motorcycles" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-55"/>
                <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/40 to-transparent"></div>
                <div class="absolute bottom-3 left-4"><span style="color:#d63d2f;border-color:rgba(214,61,47,0.5)" class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1">Organised Crime</span></div>
                <div class="absolute top-3 right-3 font-display text-5xl text-paper/[0.06] leading-none">01</div>
            </div>
            <div class="p-5">
                <h3 class="font-display text-xl tracking-wide mb-2 leading-tight group-hover:text-hot transition-colors">THE BIKIE FRANCHISE MODEL</h3>
                <p class="text-[0.68rem] leading-relaxed text-paper/42 mb-4">Security rackets, property fronts, and drug distribution — structured like a business, protected like a family.</p>
                <div class="flex justify-between items-center text-[0.52rem] tracking-[0.12em] uppercase text-paper/18 border-t border-paper/[0.05] pt-3">
                    <span>Ch. 01</span><span style="color:rgba(214,61,47,0.5)" class="group-hover:text-hot transition-colors">Read File →</span>
                </div>
            </div>
        </article>

        <article onclick="openModal('homeless')" class="case-card reveal cursor-pointer group relative bg-paper/[0.02] border border-paper/[0.07] overflow-hidden" style="transition-delay:0.07s">
            <div class="bar-accent absolute top-0 left-0 right-0 h-[2px] bg-gold"></div>
            <div class="relative h-44 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=700&q=75" alt="City" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-55"/>
                <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/40 to-transparent"></div>
                <div class="absolute bottom-3 left-4"><span style="color:#e8a020;border-color:rgba(232,160,32,0.5)" class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1">Homelessness</span></div>
                <div class="absolute top-3 right-3 font-display text-5xl text-paper/[0.06] leading-none">02</div>
            </div>
            <div class="p-5">
                <h3 class="font-display text-xl tracking-wide mb-2 leading-tight group-hover:text-gold transition-colors">INVISIBLE ON THE GLITTER STRIP</h3>
                <p class="text-[0.68rem] leading-relaxed text-paper/42 mb-4">$28K clearances, hostile benches, and a census that undercounts by 300. The politics of making poverty disappear.</p>
                <div class="flex justify-between items-center text-[0.52rem] tracking-[0.12em] uppercase text-paper/18 border-t border-paper/[0.05] pt-3">
                    <span>Ch. 02</span><span style="color:rgba(232,160,32,0.5)" class="group-hover:text-gold transition-colors">Read File →</span>
                </div>
            </div>
        </article>

        <article onclick="openModal('developer')" class="case-card reveal cursor-pointer group relative bg-paper/[0.02] border border-paper/[0.07] overflow-hidden" style="transition-delay:0.14s">
            <div class="bar-accent absolute top-0 left-0 right-0 h-[2px] bg-sage"></div>
            <div class="relative h-44 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=700&q=75" alt="High rise" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-55"/>
                <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/40 to-transparent"></div>
                <div class="absolute bottom-3 left-4"><span style="color:#2a9d4e;border-color:rgba(42,157,78,0.5)" class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1">Political Corruption</span></div>
                <div class="absolute top-3 right-3 font-display text-5xl text-paper/[0.06] leading-none">03</div>
            </div>
            <div class="p-5">
                <h3 class="font-display text-xl tracking-wide mb-2 leading-tight group-hover:text-sage transition-colors">DEVELOPER MONEY & COUNCIL VOTES</h3>
                <p class="text-[0.68rem] leading-relaxed text-paper/42 mb-4">A $45K donation. A 200% height variance approved six weeks later. The pattern repeats across the city.</p>
                <div class="flex justify-between items-center text-[0.52rem] tracking-[0.12em] uppercase text-paper/18 border-t border-paper/[0.05] pt-3">
                    <span>Ch. 03</span><span style="color:rgba(42,157,78,0.5)" class="group-hover:text-sage transition-colors">Read File →</span>
                </div>
            </div>
        </article>

        <article onclick="openModal('drugs')" class="case-card reveal cursor-pointer group relative bg-paper/[0.02] border border-paper/[0.07] overflow-hidden" style="transition-delay:0.21s">
            <div class="bar-accent absolute top-0 left-0 right-0 h-[2px] bg-violet"></div>
            <div class="relative h-44 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=700&q=75" alt="Highway" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-55"/>
                <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/40 to-transparent"></div>
                <div class="absolute bottom-3 left-4"><span style="color:#7b5ea7;border-color:rgba(123,94,167,0.5)" class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1">Drug Trade</span></div>
                <div class="absolute top-3 right-3 font-display text-5xl text-paper/[0.06] leading-none">04</div>
            </div>
            <div class="p-5">
                <h3 class="font-display text-xl tracking-wide mb-2 leading-tight group-hover:text-violet transition-colors">METH, MONEY & THE M1</h3>
                <p class="text-[0.68rem] leading-relaxed text-paper/42 mb-4">Seven cash businesses, zero foot traffic, $3.8M annual revenue. The M1 corridor money machine.</p>
                <div class="flex justify-between items-center text-[0.52rem] tracking-[0.12em] uppercase text-paper/18 border-t border-paper/[0.05] pt-3">
                    <span>Ch. 04</span><span style="color:rgba(123,94,167,0.5)" class="group-hover:text-violet transition-colors">Read File →</span>
                </div>
            </div>
        </article>

        <article onclick="openModal('pipeline')" class="case-card reveal cursor-pointer group relative bg-paper/[0.02] border border-paper/[0.07] overflow-hidden" style="transition-delay:0.28s">
            <div class="bar-accent absolute top-0 left-0 right-0 h-[2px] bg-gold"></div>
            <div class="relative h-44 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1509099836639-18ba1795216d?w=700&q=75" alt="Youth" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-55"/>
                <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/40 to-transparent"></div>
                <div class="absolute bottom-3 left-4"><span style="color:#e8a020;border-color:rgba(232,160,32,0.5)" class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1">Intersection</span></div>
                <div class="absolute top-3 right-3 font-display text-5xl text-paper/[0.06] leading-none">05</div>
            </div>
            <div class="p-5">
                <h3 class="font-display text-xl tracking-wide mb-2 leading-tight group-hover:text-gold transition-colors">HOW HOMELESSNESS FEEDS CRIME</h3>
                <p class="text-[0.68rem] leading-relaxed text-paper/42 mb-4">Average age of first approach by organised crime: 17. The pipeline from couch to charge sheet.</p>
                <div class="flex justify-between items-center text-[0.52rem] tracking-[0.12em] uppercase text-paper/18 border-t border-paper/[0.05] pt-3">
                    <span>Ch. 05</span><span style="color:rgba(232,160,32,0.5)" class="group-hover:text-gold transition-colors">Read File →</span>
                </div>
            </div>
        </article>

        <article onclick="openModal('oversight')" class="case-card reveal cursor-pointer group relative bg-paper/[0.02] border border-paper/[0.07] overflow-hidden" style="transition-delay:0.35s">
            <div class="bar-accent absolute top-0 left-0 right-0 h-[2px] bg-hot"></div>
            <div class="relative h-44 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=700&q=75" alt="Government" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-55"/>
                <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/40 to-transparent"></div>
                <div class="absolute bottom-3 left-4"><span style="color:#d63d2f;border-color:rgba(214,61,47,0.5)" class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1">Accountability</span></div>
                <div class="absolute top-3 right-3 font-display text-5xl text-paper/[0.06] leading-none">06</div>
            </div>
            <div class="p-5">
                <h3 class="font-display text-xl tracking-wide mb-2 leading-tight group-hover:text-hot transition-colors">WHO'S ACTUALLY WATCHING?</h3>
                <p class="text-[0.68rem] leading-relaxed text-paper/42 mb-4">847 CMC referrals. 11 investigations. 34 journalists became 8. The accountability vacuum grows.</p>
                <div class="flex justify-between items-center text-[0.52rem] tracking-[0.12em] uppercase text-paper/18 border-t border-paper/[0.05] pt-3">
                    <span>Ch. 06</span><span style="color:rgba(214,61,47,0.5)" class="group-hover:text-hot transition-colors">Read File →</span>
                </div>
            </div>
        </article>

    </div>
</section>


<!-- ══════════════════════════════════════
     EPISODES GRID
══════════════════════════════════════ -->
<section id="episodes" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]">
    <div class="max-w-6xl mx-auto">
        <div class="flex items-end justify-between mb-12 gap-4 flex-wrap">
            <div>
                <div class="text-[0.55rem] tracking-[0.3em] uppercase text-hot mb-2">The Series</div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.5rem,6vw,4.5rem)">ALL EPISODES</h2>
            </div>
            <div class="text-[0.62rem] text-paper/28 max-w-xs leading-relaxed">Season 1 is ongoing. New episodes drop when the investigation is ready — not on a schedule.</div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal group relative border border-hot/40 bg-paper/[0.02] overflow-hidden" style="transition-delay:0s">
                <div class="absolute top-0 left-0 right-0 h-[2px] bg-hot"></div>
                <div class="relative h-36 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=500&q=65" alt="" class="w-full h-full object-cover opacity-45 group-hover:scale-105 transition-transform duration-700"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-ink/90 to-transparent"></div>
                    <div class="absolute top-3 left-3 bg-hot text-paper font-display text-xs tracking-widest px-2 py-1">LIVE NOW</div>
                </div>
                <div class="p-4">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Episode 01</div>
                    <div class="font-display text-base tracking-wide leading-tight mb-1.5">Gold Coast Uncovered</div>
                    <div class="text-[0.6rem] text-paper/30">6 chapters · 10:29 · Feb 2025</div>
                </div>
            </div>

            <div class="reveal ep-coming relative border border-paper/[0.07] bg-paper/[0.02] overflow-hidden" style="transition-delay:0.08s;opacity:0.5">
                <div class="relative h-36 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1529528744093-6f8abeee511d?w=500&q=65" alt="" class="w-full h-full object-cover opacity-25"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-ink/90 to-transparent"></div>
                </div>
                <div class="p-4">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/28 mb-1">Episode 02</div>
                    <div class="font-display text-base tracking-wide text-paper/35 leading-tight mb-1.5">Inside the Courtroom</div>
                    <div class="text-[0.6rem] text-paper/18">How charges disappear before trial</div>
                </div>
            </div>

            <div class="reveal ep-coming relative border border-paper/[0.07] bg-paper/[0.02] overflow-hidden" style="transition-delay:0.16s;opacity:0.5">
                <div class="relative h-36 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=500&q=65" alt="" class="w-full h-full object-cover opacity-25"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-ink/90 to-transparent"></div>
                </div>
                <div class="p-4">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/28 mb-1">Episode 03</div>
                    <div class="font-display text-base tracking-wide text-paper/35 leading-tight mb-1.5">Casino Money</div>
                    <div class="text-[0.6rem] text-paper/18">The Star GC & financial crimes</div>
                </div>
            </div>

            <div class="reveal ep-coming relative border border-paper/[0.07] bg-paper/[0.02] overflow-hidden" style="transition-delay:0.24s;opacity:0.5">
                <div class="relative h-36 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=500&q=65" alt="" class="w-full h-full object-cover opacity-25"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-ink/90 to-transparent"></div>
                </div>
                <div class="p-4">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/28 mb-1">Episode 04</div>
                    <div class="font-display text-base tracking-wide text-paper/35 leading-tight mb-1.5">The Lobbyist Network</div>
                    <div class="text-[0.6rem] text-paper/18">Who really writes Gold Coast policy</div>
                </div>
            </div>
        </div>

        <div class="mt-6 text-center">
            <a href="#sms" class="inline-flex items-center gap-3 border border-paper/12 hover:border-gold/40 px-6 py-3 text-[0.58rem] tracking-[0.22em] uppercase text-paper/35 hover:text-gold transition-all">
                Get notified when the next episode drops
            </a>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     SMS SIGNUP
══════════════════════════════════════ -->
<section id="sms" class="py-24 px-5 md:px-10 relative overflow-hidden border-t border-paper/[0.05]">
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 70% 50% at 50% 50%,rgba(214,61,47,0.055) 0%,transparent 70%)"></div>
    <div class="max-w-lg mx-auto text-center relative">
        <div class="flex items-center justify-center gap-3 mb-4">
            <div class="w-8 h-px bg-gold"></div>
            <span class="text-[0.55rem] tracking-[0.3em] uppercase text-gold">Intelligence Updates</span>
            <div class="w-8 h-px bg-gold"></div>
        </div>
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


<!-- ══════════════════════════════════════
     FOOTER
══════════════════════════════════════ -->
<footer class="border-t border-paper/[0.05] px-5 md:px-10 py-8 max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-4">
    <div class="font-display text-xl tracking-widest text-paper/18">COVERT<span class="text-dim">GC</span></div>
    <div class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/10 text-center">© 2025 CovertGC — Investigative Journalism — Gold Coast, QLD — Editorial Independence Guaranteed</div>
    <div class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/10">Season 1 — Ongoing</div>
</footer>


<!-- ══════════════════════════════════════
     MODAL
══════════════════════════════════════ -->
<div id="modal-wrap" style="display:none;position:fixed;inset:0;z-index:9000;background:rgba(8,8,8,0.93);backdrop-filter:blur(8px);overflow-y:auto;padding:1.5rem 1rem">
    <div style="max-width:680px;margin:2rem auto;position:relative" id="modal-inner">
        <button id="modal-close-btn" style="position:absolute;top:1rem;right:1rem;z-index:10;background:#0e0e0e;border:1px solid rgba(240,236,226,0.1);color:rgba(240,236,226,0.35);font-family:'DM Mono',monospace;font-size:0.7rem;letter-spacing:0.15em;text-transform:uppercase;padding:0.5rem 0.75rem;cursor:pointer">✕ Close</button>
        <div id="modal-content" style="background:#0e0e0e;border:1px solid rgba(240,236,226,0.07)"></div>
    </div>
</div>


<!-- ══════════════════════════════════════
     SCRIPTS
══════════════════════════════════════ -->
<script>
function seekToChapter(index) {
    var p = window.vidstackPlayer;
    if (!p) return;
    var tracks = p.textTracks;
    var chapterTrack = null;
    for (var i = 0; i < tracks.length; i++) {
        if (tracks[i].kind === 'chapters') { chapterTrack = tracks[i]; break; }
    }
    if (chapterTrack && chapterTrack.cues && chapterTrack.cues.length > index) {
        var cue = chapterTrack.cues[index];
        p.currentTime = cue.startTime;
    } else {
        var duration = p.duration || 0;
        if (duration > 0) p.currentTime = (duration / 6) * index;
    }
    document.getElementById('player').scrollIntoView({ behavior: 'smooth', block: 'center' });
}

var CASES = {
    // ── MY STORY CASES ────────────────────────────────────────────
    rooming:{accent:'#d63d2f',tag:'Rental Crisis',ch:'S1',title:'THE ROOMING HOUSE TRAP',img:'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1000&q=80',intro:"Sandy Tulisi operates BeHome — also registered with the RTA as SOLAC HOUSE — a rooming accommodation property in Surfers Paradise with capacity for up to 100 tenants. The dual identity between public advertising name and official RTA registration raises immediate questions about regulatory compliance and transparency.",body:'<p style="margin-bottom:1rem">Under Queensland\'s Residential Tenancies and Rooming Accommodation Act 2008, a rooming house allows landlords to rent individual rooms to multiple tenants under separate agreements — with fewer tenant protections than a standard residential lease. Landlords are only required to give 24 hours notice to enter. The Gold Coast has hundreds of these properties.</p><p style="margin-bottom:1rem">The website appelstreet.com.au had content suggesting the property operated as a hostel — but hostels do not ask tenants to lodge bonds with the RTA. That mismatch created deliberate legal ambiguity about what kind of accommodation this was and what rights tenants held.</p><p>The ambiguity between rooming house, hostel, and boarding house — categories with very different regulatory obligations — is not accidental. It is a strategy.</p>',studies:[{label:'Document — Rooming Accommodation Agreement (Form R18)',text:'Fixed term agreement signed August 18, 2023. Rent: $290 per week. Tenant: Kosta Kondratenko. Property manager/owner listed as BEHOME. The same property is advertised publicly as BeHome and registered with the RTA under Sandy Tulisi as SOLAC HOUSE.'},{label:'Context — The Rooming House Market',text:'As Gold Coast rents surged — median weekly rent for a 1-bedroom unit reached $680 in 2024, up 38% from 2020 — demand for rooming accommodation has increased significantly. Rooming houses sit at the bottom of the market. For many people, it is the only option available.'}]},

    bond:{accent:'#e8a020',tag:'Regulatory Failure',ch:'S2',title:'THE 68-DAY BOND DELAY',img:'https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=1000&q=80',intro:"Queensland law requires landlords to lodge rental bonds with the RTA within 10 days of receipt. In this case, the bond was lodged 68 days after move-in — following tenant inquiries about legal violations. At a property with capacity for 100 tenants, if this delay was systematic, the non-compliance could be significant in scale.",body:'<p style="margin-bottom:1rem">The Confirmation of Rental Bond (RTA:0108911) was received on October 25, 2023. Move-in date: August 18, 2023. The gap is 68 days — nearly seven times the legal limit.</p><p style="margin-bottom:1rem">The timing of the lodgement is notable: it occurred after the tenant had begun raising questions about the landlord\'s legal compliance. This suggests the lodgement was reactive rather than routine — which raises questions about whether the delay was systematic across other tenants.</p><p>The RTA has the power to investigate and prosecute non-compliance with bond lodgement requirements, with fines of up to $2,669 per breach. A property with 100 tenants experiencing systematic delay would represent significant financial liability.</p>',studies:[{label:'Document — RTA Bond Confirmation',text:'Bond number 714284215. Bond amount: $580. Contributor: Kosta Konstantin Kondratenko. Property manager/owner: BEHOME. Confirmation received: 25 October 2023. Move-in date: 18 August 2023. Delay: 68 days.'},{label:'Legal Requirement',text:'Section 57 of the Residential Tenancies and Rooming Accommodation Act 2008 requires landlords to pay rental bonds to the RTA within 10 business days of receiving them. Failure to do so is an offence. The RTA may issue compliance notices and infringement notices for non-compliance.'}]},

    harassment:{accent:'#d63d2f',tag:'Tenant Harassment',ch:'S3',title:'FINES, THREATS & FALSE CLAIMS',img:'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=1000&q=80',intro:"Between September and October 2023, I received multiple emails falsely claiming my rent was overdue, a $20 fine for leaving a washed cup on a bench, and an SMS from the landlord's personal mobile threatening eviction based on a fabricated 13-day arrear. Bank records confirm all payments were made on time throughout.",body:'<p style="margin-bottom:1rem">The overdue rent notices arrived on September 18th, 23rd, October 7th, 14th, 16th, and 23rd — six separate communications claiming rent was unpaid. Each was false. The pattern is consistent with a deliberate harassment strategy rather than administrative error.</p><p style="margin-bottom:1rem">The $20 fine for a "cup left" — issued as a formal tax invoice by Appel Street Pty Ltd on 22 October 2023 — is notable both for its triviality and its formality. The fine began accumulating after a confrontation regarding the eviction of another tenant, suggesting retaliatory motive.</p><p>The landlord subsequently changed house rules to make three fines grounds for eviction — a unilateral rule change made after tenants had moved in. This is a misuse of power inconsistent with fair tenancy management.</p>',studies:[{label:'Document — Tax Invoice, Appel Street Pty Ltd',text:'Invoice #001231. Created: 02/10/2023. Due: 22/10/2023. Amount due: $20. Description: "Cup left." Issued to Kosta Kondratenko. Note: This fine was not included in the official bond refund statement submitted to the RTA — suggesting acknowledgment of its unlawful nature.'},{label:'Legal Note — Unlawful Breach Notices',text:'Under the RTRA Act, a landlord cannot issue an Arrears Breach Notice unless rent is actually overdue by 7 days. Issuing breach notices when rent is current is a breach of the Act and potentially constitutes harassment under Queensland tenancy law. Tenants may apply to QCAT for a remedy.'}]},

    eviction:{accent:'#d63d2f',tag:'Unlawful Eviction',ch:'S4',title:'POLICE, ARREST & HOMELESSNESS',img:'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=1000&q=80',intro:"Sandy Tulisi and Chris Park presented police with a Notice to Leave built on the invalid breach notices, selectively showed CCTV footage, and refused to release the full footage under Privacy Act requests. A Police Banning Notice — designed for alcohol and drug-related incidents — was applied in a civil tenancy context. I was arrested, charged, and made homeless that night.",body:'<p style="margin-bottom:1rem">Police Banning Notices under the Queensland Police Powers and Responsibilities Act are designed for alcohol and drug-related incidents — typically to ban individuals from licensed venues or areas associated with incidents. The application of a PBN in the context of a civil tenancy dispute is an unusual and arguably inappropriate use of the instrument.</p><p style="margin-bottom:1rem">The landlords refused to engage in direct communication, insisting on police intermediation. This approach — shifting responsibility to police in a civil matter — placed undue strain on police resources and removed the tenant\'s ability to resolve the dispute through normal channels.</p><p>The bond deduction for a key still in the tenant\'s possession was the final act in a consistent pattern of bad faith dealings. It was later omitted from the official bond refund statement to the RTA.</p>',studies:[{label:'Document — Police Banning Notice No. 385003',text:'Banning Notice issued during the eviction. The notice, intended for alcohol and drug-related incidents at licensed premises, was applied in the context of a civil tenancy dispute based on a Notice to Leave that was itself built on invalid breach notices. The tenant was arrested and charged with Contravening a Banning Notice.'},{label:'Refusal of CCTV Footage',text:'Requests were made under the Privacy Act for access to CCTV footage that could provide a complete account of the events leading to police involvement. Sandy Tulisi and Chris Park denied access. The landlords selectively showed footage to police in a manner that mischaracterised the tenant\'s behaviour. The full footage was never released.'}]},

    lawyer:{accent:'#e8a020',tag:'Legal Outcome',ch:'S5',title:'CHARGES DROPPED',img:'https://images.unsplash.com/photo-1509099836639-18ba1795216d?w=1000&q=80',intro:"The Contravene Banning Notice charge was taken on pro bono by a senior Australian lawyer. The charges were subsequently dropped in full. The outcome confirms what the documentation showed throughout: the eviction process was built on false premises. Most people in this situation never get that outcome — because they can't afford to fight.",body:'<p style="margin-bottom:1rem">In Queensland, a tenant facing eviction from rooming accommodation has limited free legal options. Community legal centres are chronically oversubscribed. Legal Aid has strict means and merit tests. Private solicitors charge $300–600 per hour for tenancy matters. Most rooming house tenants — typically in the lowest income bracket — cannot afford representation.</p><p style="margin-bottom:1rem">The result: landlords who know the system can issue invalid notices and face no legal challenge, because their tenants simply cannot fight back. The system operates on that assumption. It is usually right.</p><p>This case had a different outcome because of an unusual intervention. That intervention should not be necessary. The fact that it is tells you something about the state of tenant protection in Queensland.</p>',studies:[{label:'Legal Outcome',text:'All charges arising from the Contravene Banning Notice were dropped in full. No conviction. No penalty. The eviction process that produced the charge was built on invalid breach notices, a misapplied Police Banning Notice, and selective presentation of evidence to police. The outcome is documented.'},{label:'The Access to Justice Gap',text:'The legal cost of fighting a wrongful eviction from rooming accommodation in Queensland is out of reach for most tenants in that market. Without access to legal representation, tenants facing this situation have three options: comply, abandon their belongings and leave, or face criminal charges. This is not a failure of individual cases. It is a structural failure of the system.'}]},

    privacybreach:{accent:'#7b5ea7',tag:'Privacy Breach',ch:'PV',title:'PHOTOGRAPHED, LABELLED & LEAKED BY COUNCIL STAFF',img:'https://images.unsplash.com/photo-1516321497487-e288fb19713f?w=1000&q=80',intro:"A Southport Aquatic Centre staff member photographed a member of the public, annotated the image with a surveillance note, and distributed it to a private individual with a derogatory comment. The City of Gold Coast received a formal privacy complaint — then discontinued its own investigation. Premier David Crisafulli issued a Show Cause notice. Staff were terminated.",body:'<p style="margin-bottom:1rem">Queensland\'s Information Privacy Act 2009 applies to local government bodies including the City of Gold Coast. The Information Privacy Principles established under the Act set out how personal information — including photographs — must be collected, stored, and disclosed. Principle 10 specifically prohibits the disclosure of personal information to a third party without the individual\'s consent, except in defined circumstances none of which apply here.</p><p style="margin-bottom:1rem">The Council\'s decision to discontinue its own investigation — citing a lack of further information from the complainant — is procedurally questionable given that the Council held, within its own systems and staff records, everything needed to assess whether a breach had occurred. The photograph, the annotation, the distribution — all of these were council-held facts. The onus placed on the complainant to provide additional information was not required by the Act, and its use as grounds for discontinuation is worth scrutiny by the Information Commissioner.</p><p>The broader concern is systemic: if a council aquatic centre is maintaining informal surveillance photo files on members of the public who use its facilities, and those files are being shared with private individuals, the question is not just whether one staff member breached the Act — it is whether this practice is isolated or widespread. The Show Cause notice issued by Premier Crisafulli and the subsequent termination of staff are outcomes, but they do not answer the systemic question.</p>',studies:[{label:'Information Privacy Act 2009 (Qld) — Your Rights',text:'Under s.166 of the Act, you may complain to the Information Commissioner if 45 business days have elapsed since your complaint to the relevant body and you have not received an adequate response. The Commissioner can investigate, make recommendations, and — in serious cases — refer matters to the Privacy Commissioner for formal determination. Complaints can be lodged at oic.qld.gov.au.'},{label:'Council Staff Conduct Obligations',text:'City of Gold Coast employees are bound by the Local Government Act 2009, the council\'s own Code of Conduct, and Queensland public sector ethics obligations. Distributing personal information about a member of the public to a private individual, with a derogatory comment, engages potential breaches of all three. Termination as an outcome is consistent with the severity of a deliberate privacy breach combined with professional misconduct.'}]},

    privacyletter1:{accent:'#7b5ea7',tag:'Council Document',ch:'L1',title:'INITIAL COMPLAINT ACKNOWLEDGEMENT',img:'https://images.unsplash.com/photo-1568992687947-868a62a9f521?w=1000&q=80',intro:"City of Gold Coast — Chief Risk and Audit Office. Ref: Lawmaster 1192. Date: 16 December 2024. Complaint Officer: Julie Schyf.",body:'<p style="margin-bottom:1rem;font-family:monospace;font-size:0.75rem;line-height:1.8;color:rgba(240,236,226,0.6)">Date: 16 December 2024<br>Contact: Review Officer<br>Location: Waterside West<br>Telephone: 07 5581 7530<br>Our reference: Lawmaster 1192<br><br>Mr Kosta Kondratenko<br>By Email: kosta@headstudios.com.au<br><br>Dear Mr Kondratenko<br><br>Privacy Complaint/Breach<br><br>On 16 December 2024 the City of Gold Coast ("the City") received your complaint about an alleged breach of privacy by a staff member at the Southport Aquatic Centre. Your complaint is being investigated by the City\'s Chief Risk and Audit Office. The City\'s processes associated with the issues raised in your letter will be reviewed.<br><br>Section 166 of the Information Privacy Act 2009 states that you may make a written complaint to the Information Commissioner if:<br>• you have already complained to the City; and<br>• at least 45 business days have elapsed since you made the complaint; and<br>• you have not received a response or you received a response you consider inadequate.<br><br>The City aims to complete the investigation into your complaint and provide a response within the 45 day period. However, the City will advise you if the investigation requires more time.<br><br>Please do not hesitate to contact the City on 5581 7530 if you have further concerns.<br><br>Yours faithfully<br>Julie Schyf<br>Complaints Officer<br>Chief Risk and Audit Office<br>City of Gold Coast</p>',studies:[{label:'What This Letter Confirms',text:'The council formally acknowledged receipt of the privacy complaint on 16 December 2024 and confirmed it was being investigated by the Chief Risk and Audit Office. The reference to s.166 of the Information Privacy Act confirms the council understood its obligations. The 45 business day window begins from this date.'}]},

    privacyletter2:{accent:'#d63d2f',tag:'Council Document',ch:'L2',title:'INVESTIGATION DISCONTINUED',img:'https://images.unsplash.com/photo-1568992687947-868a62a9f521?w=1000&q=80',intro:"City of Gold Coast — For the Chief Executive Officer. Investigation closed on grounds that complainant did not provide additional information.",body:'<p style="margin-bottom:1rem;font-family:monospace;font-size:0.75rem;line-height:1.8;color:rgba(240,236,226,0.6)">Mr Kosta Kondratenko<br>By Email: kosta@headstudios.com.au<br><br>Dear Mr Kondratenko<br><br>Privacy Complaint/Breach<br><br>I refer to your complaint submission made on 15 December 2024 in relation to a privacy complaint.<br><br>The City of Gold Coast (City) followed up by telephone and email on 16 December 2024 and by email on 16 January 2025 requesting more information from you, in order to facilitate a full investigation of your concerns.<br><br>As no further details of the privacy complaint have been submitted, the City has discontinued the investigation. Should you wish to reopen this matter, please do not hesitate to contact complaints@goldcoast.qld.gov.au including any applicable information that may assist with our investigation.<br><br>Yours faithfully<br>Julie Schyf<br>Complaints Officer<br>For the Chief Executive Officer<br>Council of the City of Gold Coast</p>',studies:[{label:'The Problem With This Letter',text:'The council discontinued its investigation into a privacy breach committed by its own employee on its own premises because the complainant did not supply additional information. The council\'s own systems — CCTV, staff records, employment files, and the photograph itself — contained all the evidence required to investigate the breach. Placing the burden of further investigation on the complainant inverts the institutional responsibility that the Information Privacy Act creates.'}]},

    brazenfile:{accent:'#d63d2f',tag:'Press Freedom',ch:'B2',title:'WHEN CRIME TARGETS THE PRESS',img:'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1000&q=80',intro:"The firebombing of Jordan Shanks' home in 2022. The arson at a Gold Coast residence connected to Gina Rinehart's circle. Website material left at a crime scene. These are not unrelated incidents — they are data points in a pattern of organised criminal behaviour that has decided public profile and investigative journalism are legitimate targets.",body:'<p style="margin-bottom:1rem">Australian law provides specific protections and offences relevant to the intimidation of journalists and media figures. The Criminal Code Act 1995 covers threats to cause serious harm with intent to coerce, while state-level arson and intimidation offences apply to the specific acts. The challenge is not the absence of law — it is the application of investigative resources to cases where the perpetrators are embedded in criminal networks with prior experience of avoiding prosecution.</p><p style="margin-bottom:1rem">The international pattern is well-documented. The Committee to Protect Journalists records hundreds of attacks on journalists annually. What has changed in Australia in recent years is the domestic application of a model previously associated with organised crime in Mexico, Russia, and the Philippines: using violence and the threat of violence to define the boundaries of acceptable reporting, with the fire itself as the message.</p><p>The correct institutional response to this pattern has three components: treating attacks on journalists and their associates as priority investigations rather than routine property crime; public acknowledgment by law enforcement that these attacks are intimidation rather than isolated incidents; and continued publication by targeted outlets, which is the only response that demonstrates the strategy has failed. CovertGC is part of that response.</p>',studies:[{label:'The Friendlyjordies Precedent',text:'The 2022 firebombing of Jordan Shanks\' home established a documented precedent in Australia: organised crime networks will use arson as a tool to silence content creators who investigate them. The five-year sentence handed to Tufi Junior Tauese-Auelua in September 2025 is the first consequential prosecution in this pattern. The person who ordered the attack has not been charged. The motive was not detailed in court.'},{label:'Press Freedom in Australia — The Landscape',text:'Australia does not have explicit constitutional protections for press freedom, unlike the United States. The implied freedom of political communication in the Australian Constitution provides some protection, but it applies to laws, not criminal acts. In practice, journalists in Australia rely on the general criminal law — arson is arson, intimidation is intimidation — rather than specific press freedom statutes. The gap between the law on paper and its enforcement in organised crime contexts is where the problem lives.'}]},

    policeaccount:{accent:'#d63d2f',tag:'Police Accountability',ch:'P',title:'WHEN POLICE DECIDE WHO DESERVES PROTECTION',img:'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=1000&q=80',intro:"A police officer made a comment during the interview of an assault suspect suggesting the victim should expect to be attacked because of content they published online. That comment was recorded. It has been provided to the Premier of Queensland and the Attorney General. A formal police corruption investigation is active.",body:'<p style="margin-bottom:1rem">Police impartiality is not an abstract principle. It is the operational foundation of an effective criminal justice system. When an officer forms and expresses a prior view about whether a victim deserved their assault — based on that victim\'s online presence — every subsequent decision in that investigation is potentially compromised. What evidence gets collected. How quickly. How thoroughly. What charges get recommended.</p><p style="margin-bottom:1rem">The Gold Coast has a significant online content community. Influencers, journalists, vloggers, and investigators operate publicly and visibly in a city that depends on its image for economic survival. If officers within QPS units responsible for assault investigations are applying a filter — conscious or not — that deprioritises cases involving content creators whose work they find objectionable, that is a systemic failure with implications for every person in that category.</p><p>The complaint mechanisms available to victims who believe their case has been mishandled include: escalation within QPS to the Officer in Charge or the Commissioner\'s office; a formal complaint to the Crime and Corruption Commission, which has independent jurisdiction over police misconduct; and, in cases involving potential criminal conduct by an officer, referral to the CCC\'s Integrity Commissioner function. The CCC complaint process does not require a lawyer. It is accessible directly by members of the public.</p>',studies:[{label:'What Constitutes Police Misconduct in Queensland',text:'Under the Police Service Administration Act and the Crime and Corruption Act, police misconduct includes conduct that is disgraceful, improper, or unbecoming — including making statements that demonstrate bias, prejudice, or contempt toward a victim. A recorded comment suggesting a victim deserved an assault because of their online activity would fall within the scope of conduct the CCC is empowered to investigate.'},{label:'The CCC Complaint Process',text:'The Crime and Corruption Commission accepts complaints about QPS officer conduct online, by phone, and in person. Complaints can be made anonymously. The CCC has the power to investigate, refer matters back to QPS with oversight, or conduct its own independent investigation. For serious misconduct matters — including those with political escalation as in this case — the CCC typically retains the investigation rather than referring back to QPS.'}]},

    redressfile:{accent:'#2a9d4e',tag:'Public Interest',ch:'R',title:'REDRESS SCHEME INTEGRITY & COMPENSATION REFORM',img:'https://images.unsplash.com/photo-1486325212027-8081e485255e?w=1000&q=80',intro:"The National Redress Scheme has paid over $1 billion to survivors of institutional child sexual abuse since 2018. A verification gap — the absence of systematic cross-referencing of applicant names against institutional attendance records — creates exploitable conditions for fraudulent claims. Separately, Queensland's Attorney General is moving to close a loophole in Criminal Injuries Compensation that allowed payouts based on allegations that never resulted in conviction.",body:'<p style="margin-bottom:1rem">The scheme operates on a trauma-informed, lower evidentiary threshold — deliberately so, given the Royal Commission\'s findings about systematic evidence destruction and victim silencing. That threshold is correct. The question is not whether to raise the bar for genuine survivors, but whether the most basic factual check — did this person attend this institution — is being performed before payments are approved.</p><p style="margin-bottom:1rem">Attendance records exist for most Australian schools, churches, and government facilities going back decades. Enrolment registers, baptismal records, government placement files — these are not theoretical documents. They are sitting in archives. Cross-referencing an applicant\'s name against them is not a complex investigative task. It is a data check. The question of why it does not appear to be standard practice at the assessment stage is one the scheme needs to answer publicly.</p><p>The Criminal Injuries Compensation reform being progressed by Queensland\'s Attorney General addresses a related but distinct vulnerability: the ability to receive government compensation for an alleged crime that never resulted in a conviction against the accused. The reform would require a verified conviction before payment is finalised — closing a gap that has allowed false allegations to generate financial benefit independent of any legal finding.</p>',studies:[{label:'The National Redress Scheme — Key Facts',text:'Established 2018 following the Royal Commission into Institutional Responses to Child Sexual Abuse. Maximum payment: $150,000. Participating institutions include Catholic Church dioceses, state governments, and hundreds of non-government organisations. The scheme is funded by participating institutions. As of 2024, over $1 billion has been distributed across more than 40,000 applications.'},{label:'What A Robust Verification Framework Would Include',text:'Mandatory cross-referencing of applicant names against institutional records during the period claimed. A clear process for institutions to flag concerns without those concerns being used to delay or deny genuine claims. Transparent public reporting on fraud referrals and outcomes. An independent integrity function separate from the assessment function. None of these are radical proposals — they are standard features of large compensation schemes in other jurisdictions.'}]},

    // ── ADAM'S STORY CASE FILES ───────────────────────────────────
    coercive:{accent:'#7b5ea7',tag:'Coercive Control',ch:'A',title:'WHAT COERCIVE CONTROL ACTUALLY LOOKS LIKE',img:'https://images.unsplash.com/photo-1509099836639-18ba1795216d?w=1000&q=80',intro:"Coercive control is a pattern of behaviour that seeks to take away a person's liberty or freedom and strip away their sense of self. Queensland criminalised it in 2023 under the Domestic and Family Violence Protection Act. Understanding what it looks like in practice is different from understanding what the law says.",body:'<p style="margin-bottom:1rem">The clinical definition of coercive control encompasses isolation from support networks, surveillance and monitoring of movements, financial control, and the use of degradation and humiliation. In practice, it often begins as attentiveness — someone who wants to know where you are at all times, who questions your friendships, who positions their jealousy as evidence of love.</p><p style="margin-bottom:1rem">Digital coercive control has expanded the toolkit significantly. Location sharing apps, hidden tracking devices, access to email and social accounts, and the ability to weaponise telecommunications infrastructure are all documented methods. The Gold Coast, as a transient city with a high proportion of people away from family support networks, is a particularly fertile environment for these patterns to develop undetected.</p><p>The challenge in prosecution is pattern evidence. A single incident of checking someone\'s location is not a crime. A tracker on a fuel cap may be civil, not criminal. It is the pattern — the accumulation — that constitutes the offence. Building that case takes time. During that time, the behaviour continues.</p>',studies:[{label:'Queensland Law — Coercive Control Since 2023',text:'Queensland\'s domestic violence laws were amended in 2023 to recognise coercive control as a form of domestic violence. The amendments allow courts to consider patterns of behaviour rather than requiring specific physical incidents. Advocates note the reforms are a significant step but that police training and evidentiary frameworks have not fully caught up with the legislative intent.'},{label:'Eye-Biometric Evidence in Relationship Disputes',text:'EyeDetect® technology, developed by Converus Inc., measures pupil dilation and eye movement patterns to assess deception. It claims 88–91% accuracy in screening contexts. While not currently admissible as evidence in Australian courts, it is increasingly used in private relationship disputes and by employers. A score of 1 out of 100 — rated Deceptive — represents the lowest possible credibility rating on the scale.'}]},

    malicious:{accent:'#d63d2f',tag:'Malicious Prosecution',ch:'B',title:'WHEN THE SYSTEM BECOMES THE WEAPON',img:'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=1000&q=80',intro:"A malicious prosecution ruling by the Director of Public Prosecutions is rare. It means the charge should never have been brought — not just that it couldn't be proved, but that it was brought without reasonable cause and with improper motive. Adam Watson's sexual assault charge was dismissed on exactly those grounds at first mention.",body:'<p style="margin-bottom:1rem">Under Queensland law, the DPP has an obligation to assess whether continuing a prosecution is in the public interest and whether there is a reasonable prospect of conviction. A malicious prosecution finding goes further — it is a determination that the charge was initiated with malice, not merely that it failed the evidentiary threshold.</p><p style="margin-bottom:1rem">The practical effect of a false criminal allegation is that it operates independently of truth. The charge is public. The dismissal is often not. In tight-knit social communities — gyms, friendship groups, professional networks — the allegation travels through informal channels at a speed the legal system cannot match.</p><p>The firing of the police officer who accepted and charged based on the complaint is significant. It indicates an internal QPS determination that the officer failed to meet the standard required before laying a charge of that severity. That finding does not restore Adam\'s reputation in the rooms where the allegation had already been heard.</p>',studies:[{label:'The Threshold for a Malicious Prosecution Finding',text:'For a prosecution to be ruled malicious, courts require proof that it was initiated without reasonable and probable cause, and with a motive other than bringing an offender to justice. The DPP applying this finding at first mention — before trial — indicates the evidential foundation was assessed as fundamentally inadequate from the outset.'},{label:'The Reputational Half-Life of False Allegations',text:'Research consistently shows that reputational damage from false criminal allegations persists long after exoneration. In one UK study, 63% of falsely accused individuals reported ongoing social consequences two years after charges were dropped. In communities where the allegation spread via informal networks — social media, word of mouth, gym culture — the corrective rarely reaches the same audience as the original claim.'}]},

    optus:{accent:'#e8a020',tag:'Telecommunications Security',ch:'C',title:'THE PHONE NUMBER AS ATTACK SURFACE',img:'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=1000&q=80',intro:"Adam Watson's Optus mobile service was deactivated by a third party who socially engineered a retail employee — using the threat of exposing the employee's sexuality as leverage. The number was turned off. The incident was raised with the Prime Minister's office, referred to the Telecommunications Industry Ombudsman, and triggered a directive from the Optus CEO.",body:'<p style="margin-bottom:1rem">Social engineering — manipulating people rather than systems — is one of the most effective attack vectors in telecommunications security. Unlike technical exploits, it requires no coding knowledge and leaves minimal digital trace. It exploits the human element: a staff member under pressure, a process with insufficient verification, and a target who has no warning until their service stops working.</p><p style="margin-bottom:1rem">The specific method used here — threatening to out an employee as gay unless they comply — compounds the telecommunications offence with a homophobic coercion offence. It is both a cybercrime and a hate crime framing, combined in a single act. The employee\'s vulnerability was weaponised as a means of reaching Adam.</p><p>The systemic concern raised in the Prime Ministerial referral is this: if a mobile number can be deactivated by walking into a retail store and applying social pressure to one employee, then every Australian\'s number carries the same vulnerability. A phone number now functions as identity infrastructure. It is the verification layer for banking, for government services, for healthcare portals. Turning it off is not switching off communications. It is attacking someone\'s digital identity.</p>',studies:[{label:'The Regulatory Response',text:'The matter was referred to the Telecommunications Industry Ombudsman following escalation to the Prime Minister\'s office. The Optus CEO was notified directly and issued an internal directive addressing the vulnerability in retail store verification procedures. The employee involved is no longer employed by Optus. The directive represents an acknowledgment that the existing verification framework was insufficient to prevent this class of attack.'},{label:'SIM Swapping and Number Deactivation as Attack Vectors',text:'The Australian Cyber Security Centre has documented SIM swapping — where a mobile number is fraudulently transferred to a new SIM — as a growing threat to financial accounts. Number deactivation via social engineering is a related but distinct attack: rather than redirecting communications, it silences them entirely. Both exploit the same fundamental vulnerability: the mobile number as a single point of failure in identity verification.'}]},

    juvenile:{accent:'#e8a020',tag:'Youth Justice',ch:'D',title:'THE CLEAN SLATE THAT ISN\'T',img:'https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=1000&q=80',intro:"Queensland's Youth Justice Act seals juvenile criminal records from adult court proceedings. The intent is rehabilitation. The gap it creates is real: an 18-year-old with a substantial juvenile history presents to adult courts, employers, and social systems as a person with no prior record. That gap has consequences.",body:'<p style="margin-bottom:1rem">The principle behind sealing juvenile records is sound: young people\'s brains are not fully developed, adolescent offending is not a reliable predictor of adult behaviour, and the stigma of a criminal record should not follow a person who genuinely reforms. Victoria, Queensland, and most Australian jurisdictions apply this principle in various forms.</p><p style="margin-bottom:1rem">The debate around "Adult Time, Adult Crime" is not new. It surfaced prominently in Queensland following a series of high-profile youth crime incidents in 2023–24, and has been a persistent tension in Australian criminal justice policy. The question is not whether to abandon rehabilitation as a goal — it is whether the current framework adequately distinguishes between a young person who made one serious mistake and a young person with a pattern of escalating, calculated offending.</p><p>The specific gap in the current framework: when an adult court assesses bail, sentencing, and credibility, a sealed juvenile record is not available to inform that assessment. A first-time adult offender and a person with a decade of juvenile offending look identical on paper. This is the gap that advocates on both sides of the debate are, in practice, trying to address.</p>',studies:[{label:'Queensland Youth Justice Reform Debate, 2023–24',text:'Following a series of high-profile incidents involving young repeat offenders in Southeast Queensland, the state government introduced amendments to the Youth Justice Act that increased penalties for serious offences and restricted bail for repeat offenders. Advocates argued the amendments criminalised disadvantage. Police and victims\' groups argued the previous framework was inadequate. The underlying tension — rehabilitation versus accountability — was not resolved.'},{label:'The "Known to Police" Problem',text:'Queensland Police can access juvenile records internally for investigative purposes, even when those records are sealed from courts. This creates a situation where police may have context that prosecutors, defence lawyers, and judges do not. The information asymmetry affects how cases are built, charged, and presented — often without transparency about what background knowledge is informing operational decisions.'}]},

    // ── EXISTING INVESTIGATION CASES ──────────────────────────────
    bikie:{accent:'#d63d2f',tag:'Organised Crime',ch:'01',title:'THE BIKIE FRANCHISE MODEL',img:'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=1000&q=80',intro:"Outlaw motorcycle gangs on the Gold Coast don't just ride — they operate structured criminal enterprises with the sophistication of a franchise business. Each chapter pays levies up the national hierarchy, and revenue streams span drug distribution, security racketeering, and property development.",body:'<p style="margin-bottom:1rem">The OMG presence on the Gold Coast dates to the 1980s, but the modern structure looks nothing like the biker wars of the past. Today\'s clubs maintain legitimate business fronts, employ lawyers on retainer, and use patched members sparingly — keeping criminal exposure at the lower rungs.</p><p style="margin-bottom:1rem">The security industry has been a particular vector. Bouncers are often the first point of contact between the public and organised crime. When clubs control the doors of major venues, they control what happens inside — from drug sales to debt collection.</p><p>Queensland\'s OMCG legislation has had mixed results. Arrests have increased, but the franchise model means the business continues even when individual members are charged.</p>',studies:[{label:'Case Study — Broadbeach Security Racket, 2023',text:"Three licensed security firms on the Broadbeach entertainment strip were traced back to a single OMG-linked holding company via ASIC filings. Bouncers who identified incidents weren't calling QPS — they were calling the chapter president."},{label:'Case Study — Property Front, Varsity Lakes 2022',text:'A residential construction company registered in 2019 completed 14 townhouse projects in three years with no public marketing and no real estate listings. All sales were private treaty. QPS financial intelligence flagged the unusual velocity as consistent with money laundering.'}]},

    homeless:{accent:'#e8a020',tag:'Homelessness',ch:'02',title:'INVISIBLE ON THE GLITTER STRIP',img:'https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=1000&q=80',intro:"The Gold Coast has one of Queensland's fastest-growing rough-sleeper populations — but you won't see them near Cavill Avenue. Council bylaws criminalise sitting, camping, and begging in tourist precincts, pushing the crisis out of sight, not out of existence.",body:'<p style="margin-bottom:1rem">Gold Coast City Council\'s "move on" powers allow rangers to direct individuals to leave public spaces, and the city has invested in hostile architecture — sloped benches, armrest dividers, sprinkler systems that activate at night — to prevent rough sleeping in high-visibility areas.</p><p style="margin-bottom:1rem">The result is a spatial segregation of poverty. The homeless population concentrates in peripheral suburbs — Southport, Nerang, Coomera — where there\'s less tourist pressure.</p><p>The political calculus is straightforward: tourists and investors don\'t want to see homelessness. Council responds to those stakeholders.</p>',studies:[{label:'Case Study — Musgrave Park Clearances, Southport 2024',text:'A settlement of 40+ people living rough was forcibly cleared by council rangers three times in six months. Each clearance cost ratepayers approximately $28,000 in overtime. Zero transitional housing was offered.'},{label:'Case Study — The Invisible Census',text:"The City of Gold Coast's official rough sleeper count for 2024 was 312 individuals. Independent surveys by the Gold Coast Homelessness Network produced a figure of over 900. The methodology difference is not accidental."}]},

    developer:{accent:'#2a9d4e',tag:'Political Corruption',ch:'03',title:'DEVELOPER MONEY & COUNCIL VOTES',img:'https://images.unsplash.com/photo-1486325212027-8081e485255e?w=1000&q=80',intro:"Property developers donate to campaign funds. Councillors approve rezonings. It's not always illegal — but the pattern is undeniable. On the Gold Coast, where construction is the dominant industry, the line between lobbying and corruption is deliberately blurred.",body:'<p style="margin-bottom:1rem">Queensland\'s local government donation disclosure rules require councillors to declare donations over $500. But donations to associated entities, fundraising dinners, and third-party bodies operate in grey zones.</p><p style="margin-bottom:1rem">The Gold Coast development approval process is particularly susceptible. The GCC has historically allowed individual councillors significant discretion over development applications — creating a direct transactional relationship between donation and outcome.</p><p>Academic studies of Gold Coast planning decisions between 2015–2024 have found a statistically significant correlation between developer donation levels and height variance approval rates.</p>',studies:[{label:'Case Study — The Surfers Paradise Variance, 2022',text:'A 68-storey tower requiring a height variance of over 200% was approved by GCC by a vote of 9–2 in November 2022. Six weeks prior, a $45,000 donation was made to the division\'s sitting councillor via a developer-linked corporate entity.'},{label:'Case Study — The Consultancy Arrangement',text:'A planning consultant who held a senior GCC planning role from 2016–2019 established a private consultancy in 2020. Within two years his firm had facilitated approvals for 11 development applications — all approved on first submission, against a council average of 34%.'}]},

    drugs:{accent:'#7b5ea7',tag:'Drug Trade',ch:'04',title:'METH, MONEY & THE M1',img:'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=1000&q=80',intro:"The highway corridor between Brisbane and the Gold Coast is one of Australia's most active drug supply routes. Crystal methamphetamine distribution networks operate through legitimate-looking businesses, converting drug cash into clean income across the northern suburbs.",body:'<p style="margin-bottom:1rem">The shift from heroin to methamphetamine as the dominant illicit drug in Southeast Queensland transformed the economics of the local drug trade. Meth has higher margins, longer shelf life, and a more distributed market.</p><p style="margin-bottom:1rem">The M1 functions as both supply route and market. Distribution points cluster around interchange suburbs — Coomera, Oxenford, Nerang — where vehicle movement is high.</p><p>Money laundering through small cash businesses remains the primary mechanism.</p>',studies:[{label:'Case Study — The Labrador Business Cluster, 2023',text:'AFP and QPS financial intelligence identified seven cash-heavy small businesses on a single Labrador commercial strip with near-zero foot traffic. Combined reported annual revenue: $3.8M. All seven shared the same registered accountant and a single silent business partner with two prior drug convictions.'},{label:'Case Study — The Delivery Network, 2024',text:'QPS Organised Crime Group dismantled a distribution network embedded within a legitimate food delivery franchise. Fourteen people were charged. The franchise operator was not among them.'}]},

    pipeline:{accent:'#e8a020',tag:'Intersection',ch:'05',title:'HOW HOMELESSNESS FEEDS CRIME',img:'https://images.unsplash.com/photo-1509099836639-18ba1795216d?w=1000&q=80',intro:"When people have no housing and no support, criminal networks step in as the only functioning welfare system. OMGs and drug crews offer shelter, food, belonging — and debt. It's a recruitment pipeline that starts with a couch and ends with a charge sheet.",body:'<p style="margin-bottom:1rem">The intersection of homelessness and organised crime is structural, not coincidental. Criminal networks actively recruit from the homeless population because homeless individuals have acute immediate needs, weakened social networks, and reduced leverage to say no once initial debts are incurred.</p><p style="margin-bottom:1rem">The recruitment process is gradual. It begins with genuine-seeming assistance — a place to stay, meals, a social group. Obligations are introduced slowly.</p><p>A 2024 Senate inquiry found the Gold Coast had the worst ratio of crisis youth beds to homeless youth of any comparable Australian city.</p>',studies:[{label:'Case Study — The Nerang Youth Pipeline, 2024',text:'Research by Gold Coast Youth Services found 1 in 3 young people experiencing homelessness for more than six months reported being approached by individuals connected to organised crime networks. Average age of first approach: 17 years.'},{label:'Case Study — The Debt Cycle',text:'"Marcus" was homeless in Surfers Paradise at 16 after ageing out of foster care. An OMG-connected individual offered him a room in exchange for "keeping an eye on things." Within three months he was transporting packages. Released at 19 with a criminal record and no housing, he described re-entering the same network as the only viable option.'}]},

    oversight:{accent:'#d63d2f',tag:'Accountability',ch:'06',title:"WHO'S ACTUALLY WATCHING?",img:'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=1000&q=80',intro:'ASIO, AFP, QPS, QCAT, the CMC — the alphabet soup of agencies theoretically covering this ground is long. But jurisdictional gaps, resource limits, and political hesitation mean serious accountability is rare. Local investigative reporting is nearly extinct.',body:'<p style="margin-bottom:1rem">The oversight architecture in Queensland is theoretically robust. The CMC has broad jurisdiction over public sector corruption. The AFP handles serious organised crime. In practice, each agency has a narrow mandate, limited resources for proactive investigation, and significant incentive to avoid politically contentious cases.</p><p style="margin-bottom:1rem">Referrals between agencies can take months. Joint operations require memoranda of understanding that take years to negotiate.</p><p>The collapse of local investigative journalism is arguably the most significant gap. Stories requiring six months of document analysis are economically unviable. The people who benefit from that absence know it.</p>',studies:[{label:'Case Study — The CMC Referral Backlog, 2024',text:"The Crime and Corruption Commission received 847 referrals related to local government conduct in 2023–24. Of those, 11 progressed to formal investigation. The remainder were closed at intake."},{label:'Case Study — The Journalist Count',text:'In 2008, the Gold Coast Bulletin employed 34 full-time journalists. In 2024, fewer than 8 remain, mostly covering lifestyle and entertainment. The sustained, relationship-based reporting that uncovers institutional corruption does not exist in any meaningful form.'}]}
};

function buildModal(c) {
    var studies = c.studies.map(function(s){
        return '<div style="border-left:2px solid '+c.accent+'55;background:rgba(255,255,255,0.018);padding:0.9rem 1rem 0.9rem 1.1rem;margin-bottom:0.9rem">'+
            '<div style="color:'+c.accent+';font-size:0.62rem;letter-spacing:0.18em;text-transform:uppercase;margin-bottom:0.5rem">'+s.label+'</div>'+
            '<p style="font-family:\'Instrument Serif\',serif;font-style:italic;font-size:0.82rem;line-height:1.75;color:rgba(240,236,226,0.58)">'+s.text+'</p>'+
        '</div>';
    }).join('');

    return '<div style="position:relative;height:220px;overflow:hidden">'+
        '<img src="'+c.img+'" style="width:100%;height:100%;object-fit:cover;opacity:0.42"/>'+
        '<div style="position:absolute;inset:0;background:linear-gradient(to top,#0e0e0e 15%,rgba(14,14,14,0.25) 60%,transparent)"></div>'+
        '<div style="position:absolute;top:0;left:0;bottom:0;width:3px;background:'+c.accent+'"></div>'+
        '<div style="position:absolute;bottom:0;left:0;right:0;padding:1.5rem 1.75rem">'+
            '<span style="display:inline-block;color:'+c.accent+';border:1px solid '+c.accent+'55;font-size:0.6rem;letter-spacing:0.2em;text-transform:uppercase;padding:0.2rem 0.5rem;margin-right:0.5rem;margin-bottom:0.5rem">'+c.tag+'</span>'+
            '<span style="display:inline-block;color:rgba(240,236,226,0.3);border:1px solid rgba(240,236,226,0.12);font-size:0.6rem;letter-spacing:0.2em;text-transform:uppercase;padding:0.2rem 0.5rem;margin-bottom:0.5rem">Chapter '+c.ch+'</span>'+
            '<h2 style="font-family:\'Bebas Neue\',sans-serif;font-size:clamp(1.8rem,5vw,3rem);letter-spacing:0.04em;line-height:1;color:#f0ece2">'+c.title+'</h2>'+
        '</div>'+
    '</div>'+
    '<div style="padding:1.75rem">'+
        '<p style="font-family:\'Instrument Serif\',serif;font-style:italic;font-size:1.05rem;line-height:1.7;border-left:2px solid '+c.accent+';padding-left:1rem;margin-bottom:1.5rem;color:rgba(240,236,226,0.68)">'+c.intro+'</p>'+
        '<div style="font-family:\'DM Mono\',monospace;font-size:0.76rem;line-height:1.85;color:rgba(240,236,226,0.48);margin-bottom:1.5rem">'+c.body+'</div>'+
        '<div style="font-size:0.6rem;letter-spacing:0.2em;text-transform:uppercase;color:'+c.accent+';margin-bottom:0.75rem">Documented Case Studies</div>'+
        studies+
    '</div>';
}

function openModal(key) {
    var c = CASES[key];
    if (!c) { return; }
    document.getElementById('modal-content').innerHTML = buildModal(c);
    document.getElementById('modal-wrap').style.display = 'block';
    document.body.style.overflow = 'hidden';
    document.getElementById('modal-wrap').scrollTop = 0;
}

function closeModal() {
    document.getElementById('modal-wrap').style.display = 'none';
    document.body.style.overflow = '';
}

document.getElementById('modal-close-btn').addEventListener('click', closeModal);
document.getElementById('modal-wrap').addEventListener('click', function(e){ if(e.target===this) closeModal(); });
document.addEventListener('keydown', function(e){ if(e.key==='Escape') closeModal(); });

function togglePanel() {
    var panel = document.getElementById('case-panel');
    var bd = document.getElementById('panel-bd');
    var open = panel.classList.contains('open');
    if (open) {
        panel.classList.remove('open');
        bd.style.display = 'none';
        document.body.style.overflow = '';
    } else {
        panel.classList.add('open');
        bd.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }
}

function handleSMS(e) {
    e.preventDefault();
    var v = document.getElementById('sms-input').value.trim().replace(/\s/g,'');
    var msg = document.getElementById('sms-msg');
    if (!v || v.length < 10) {
        msg.style.color = '#d63d2f'; msg.textContent = '✗ Please enter a valid Australian mobile number.'; return;
    }
    msg.style.color = '#2a9d4e'; msg.textContent = '✓ You\'re in. First intel drop incoming.';
    document.getElementById('sms-input').value = '';
}

var obs = new IntersectionObserver(function(entries){
    entries.forEach(function(e){ if(e.isIntersecting) e.target.classList.add('in'); });
}, {threshold:0.08});
document.querySelectorAll('.reveal').forEach(function(el){ obs.observe(el); });
</script>
</body>
</html>