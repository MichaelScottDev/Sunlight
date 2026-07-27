<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sunlight.Quest — Episode 6: RBK</title>
    <!-- Social share preview — RBK (Rhys Briffa) as the thumbnail -->
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="Sunlight.Quest"/>
    <meta property="og:title" content="Sunlight.Quest — Episode 6: RBK"/>
    <meta property="og:description" content="The rapper RBK — real name Rhys Briffa. Strange messages, a girlfriend demanding money, and threats to call the police. It started to feel like extortion."/>
    <meta property="og:url" content="https://sunlight.quest/episode-6"/>
    <meta property="og:image" content="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/rhys_briffa.png"/>
    <meta property="og:image:alt" content="RBK — Rhys Briffa"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Sunlight.Quest — Episode 6: RBK"/>
    <meta name="twitter:description" content="The rapper RBK — real name Rhys Briffa. Strange messages, a girlfriend demanding money, and threats to call the police. It started to feel like extortion."/>
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
        <a href="/episode-5" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors border border-paper/15 hover:border-gold/50 px-3 py-1.5 transition-all">← Episode 5</a>
        <button onclick="openTipModal()" class="hidden md:flex items-center gap-1.5 text-[0.55rem] tracking-[0.2em] uppercase border border-gold/50 hover:border-gold hover:bg-gold/10 px-3 py-1.5 text-gold transition-all">⊕ Submit a Tip</button>
        <a href="/episode-5" title="Go to Episode 5" aria-label="Go to Episode 5" class="flex md:hidden items-center gap-1 px-2.5 h-8 border font-display text-[0.6rem] tracking-widest" style="border-color:rgba(201,138,16,0.5);color:#c98a10">‹ EP5</a>
        <span class="text-[0.52rem] tracking-[0.18em] uppercase border px-3 py-1.5 blink" style="border-color:rgba(201,138,16,0.6);color:#c98a10">⬤ EP.06</span>
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
     EPISODE 6 HERO
══════════════════════════════════════ -->
<section class="relative min-h-screen flex flex-col pt-14">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-b from-ink/60 via-ink/80 to-ink"></div>
        <div class="scanlines absolute inset-0"></div>
    </div>
    <div class="relative z-10 flex items-center justify-between px-5 md:px-10 py-3 border-b border-paper/[0.05]">
        <div class="flex items-center gap-4">
            <span class="font-display text-[0.62rem] tracking-[0.14em] text-gold">EP.06</span>
            <div class="w-px h-4 bg-paper/10"></div>
            <span class="text-[0.55rem] tracking-[0.22em] uppercase text-paper/30">Season 1 — Street Image, Speed Dial</span>
        </div>
        <div class="hidden sm:flex items-center gap-3 text-[0.52rem] tracking-[0.18em] uppercase text-paper/22">
            <span>Published</span><div class="w-px h-3 bg-paper/10"></div><span class="text-gold">26 Jul 2026</span>
        </div>
    </div>
    <div class="relative z-10 flex-1 flex flex-col">
        <div class="flex flex-col justify-start px-5 md:px-10 py-8 lg:py-10">
            <div class="fade-up mb-5" style="animation-delay:0.1s">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-5 h-px bg-hot"></div>
                    <span class="text-[0.55rem] tracking-[0.28em] uppercase text-hot">ISAAC J RAMSDEN · Gold Coast</span>
                    <span class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/22 border border-paper/10 px-2 py-0.5">JAIL BAITER</span>
                </div>
                <h1 class="font-display leading-[0.88] tracking-wide" style="font-size:clamp(2.8rem,7vw,5.5rem)">Kill Cars, Fake Licenses, Machetes Followed by Extortion.<br><span class="text-hot">The 16 Year Old Boy Dilemma</span></h1>
                <p class="font-serif italic text-paper/40 mt-3 leading-relaxed max-w-lg" style="font-size:clamp(0.9rem,2vw,1.15rem)">Who does Sam Ibrahim (the brother of John Ibrahim the King of the Cross - book here) - get when he needs a few kill cars. Oh and that license is FAKE (QLD Transport is not going to be happy knowing you're playing with their business model).</p>
            </div>
            <!-- RBK photo (video coming soon) -->
            <div class="fade-up mb-5" style="animation-delay:0.2s">
                <div class="relative border overflow-hidden" style="border-color:rgba(193,68,14,0.25)">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/isaac_16_dillema.jpeg" alt="RBK — Rhys Briffa" class="w-full object-contain block" style="height:460px;background:#0c0804" loading="eager" />
                    <div class="absolute bottom-0 left-0 right-0 px-4 py-3" style="background:linear-gradient(transparent,rgba(12,8,4,0.92))">
                        <div class="text-[0.48rem] tracking-[0.18em] uppercase text-hot/80">ISAAC J RAMSDEN</div>
                        <div class="text-[0.55rem] text-paper/40 mt-0.5">In the flesh</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

    <!-- ══════════════════════════════════════
     FAKE LICENSE SECTION — THE SMOKING GUN
══════════════════════════════════════ -->
<section class="max-w-4xl mx-auto px-5 md:px-10 py-16 space-y-8 reveal">
    <!-- Headline -->
    <h2 class="font-display text-4xl md:text-5xl tracking-wide leading-tight text-hot">
        The Fake License
    </h2>

    <!-- Subheadline -->
    <p class="font-serif italic text-paper/50 text-lg leading-relaxed">
        The Smoking Gun That Looped in the Attorney General of QLD
    </p>

    <!-- Description -->
    <div class="border-l-4 border-hot/60 pl-4 py-3 space-y-3" style="background:rgba(193,68,14,0.05)">
        <p class="text-[0.72rem] leading-relaxed text-paper/55">
            Isaac knew Adam liked him – and he tried to set him up by sending him a driver's license showing he was 19 when he was really 16 – a fact confirmed by a sworn member at Broadbeach police station when I shared the details of the scam with him and the fake driver's license.
        </p>
        <p class="text-[0.72rem] leading-relaxed text-paper/55">
            Things like this lead to entrapment – Adam Watson has political aspirations and if a rendezvous was to happen Isaac could turn around and say he was forced and traumatized – and Adam could go to jail for life.
        </p>
        <p class="text-[0.72rem] leading-relaxed text-paper/55">
            This is exactly what happened with <a href="/episode-2" class="text-gold underline hover:text-hot transition-colors">Bodie Chalmers</a> – someone he mentions in the machete threat video below that is profiled extensively in <a href="/episode-2" class="text-gold underline hover:text-hot transition-colors">Episode 2</a> of this publication – who was able to weaponize a police officer to lay sexual assault charges on Adam Watson that were subsequently dropped on first mention – unsurprisingly it made Adam Watson suicidal.
        </p>
        <p class="text-[0.72rem] leading-relaxed text-paper/55">
            This is the smoking gun of the investigation – and it was brought to the attention of the Attorney General <strong class="text-paper/70">Deb Frecklington</strong> who confirmed that a full investigation will be launched with QLD Transport – the government doesn't like their apps fiddled with so you've just gained yourself a powerful enemy Isaac.
        </p>
    </div>

    <!-- Image Grid — 2 images -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/fake_license_msg.jpeg" alt="Fake driver's license message from Isaac Ramsden" class="w-full h-auto block" loading="lazy" />
            <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25 px-3 py-2 border-t border-paper/[0.06] text-center">
                Fake license message · Isaac Ramsden
            </div>
        </div>
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/isaac_ramsden.jpeg" alt="Isaac Ramsden" class="w-full h-auto block" loading="lazy" />
            <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25 px-3 py-2 border-t border-paper/[0.06] text-center">
                Isaac Ramsden
            </div>
        </div>
    </div>
</section>

    <!-- ══════════════════════════════════════
     RECEIPTS SECTION — EXTORTION EVIDENCE
══════════════════════════════════════ -->
<section class="max-w-4xl mx-auto px-5 md:px-10 py-16 space-y-8 reveal">
    <!-- Headline -->
    <h2 class="font-display text-4xl md:text-5xl tracking-wide leading-tight text-hot">
        Receipts of the Extortion
    </h2>

    <!-- Subheadline -->
    <p class="font-serif italic text-paper/50 text-lg leading-relaxed">
        Adam Watson Paid Not To Have His Life Ruined
    </p>

    <!-- Image Grid for Receipts -->
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
        <!-- Replace src with actual receipt image URLs -->
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/isaac_ramsden_1.jpeg" alt="Receipt 1" class="w-full h-auto block" loading="lazy" />
        </div>
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/isaac_ramsden_2.jpeg" alt="Receipt 2" class="w-full h-auto block" loading="lazy" />
        </div>
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/i_ramsden_commbank.jpeg" alt="Receipt 3" class="w-full h-auto block" loading="lazy" />
        </div>
        <!-- Add more as needed – the grid adapts to 2 columns on mobile, 3 on desktop -->
        <!-- Example extra:
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="receipt-4.jpg" alt="Receipt 4" class="w-full h-auto block" loading="lazy" />
        </div>
        -->
    </div>

    <!-- Description -->
    <div class="border-l-4 border-hot/60 pl-4 py-3" style="background:rgba(193,68,14,0.05)">
        <p class="text-[0.72rem] leading-relaxed text-paper/55">
            Take a look at the receipts above – keep paying or I'll tell everyone you raped me.
            The police wouldn't know about his real age and he could play the sympathetic victim.
            Nice try – and these dirty tricks are exactly what this publication aims to expose.
        </p>
    </div>
</section>


<!-- ══════════════════════════════════════
     RAMSDEN LAWYERS SECTION — THE DAD, THE BIG FIRM
══════════════════════════════════════ -->
<section class="max-w-4xl mx-auto px-5 md:px-10 py-16 space-y-8 reveal">
    <!-- Headline -->
    <h2 class="font-display text-4xl md:text-5xl tracking-wide leading-tight text-paper">
        The Dad, the Big Legal Firm
    </h2>

    <!-- Subheadline -->
    <p class="font-serif italic text-paper/50 text-lg leading-relaxed">
        Keep Your License Secure When you Have Your Consultation at Ramsden Lawyers
    </p>

    <!-- Image: John Ramsden -->
    <div class="border border-paper/[0.07] bg-ink/50 max-w-2xl">
        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/john_ramsden_lawyer_identify.png" alt="John Ramsden — Ramsden Lawyers" class="w-full h-auto block" loading="lazy" />
        <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25 px-3 py-2 border-t border-paper/[0.06]">
            John Ramsden · Ramsden Lawyers · Gold Coast
        </div>
    </div>

    <!-- Description / Commentary -->
    <div class="border-l-4 border-hot/60 pl-4 py-3 space-y-4" style="background:rgba(193,68,14,0.05)">
        <p class="text-[0.72rem] leading-relaxed text-paper/55">
            Isaac's dad is a big lawyer in the Gold Coast (all though I haven't heard of him until now). Here's where it gets more interesting – the PayID that Adam was paying into is linked to Isaac's mother. So how deep does this little conspiracy go?
        </p>
        <p class="text-[0.72rem] leading-relaxed text-paper/55">
            In fact... let's go even one step further... how closely are the partners and senior counsels involved in this?
        </p>
        <p class="text-[0.72rem] leading-relaxed text-paper/55">
            By the way is it just me or does Isaac's dad have that glazed over blue steele lack of soul look... he's not even looking at the camera in his photo on the website. Anyway as they say the rot starts from the top.
        </p>
        <p class="text-[0.72rem] leading-relaxed text-paper/55">
            Every real estate agent that uses these people in the Gold Coast, and every client needs to check their credit rating and driving record – to see that no fines and no loans have been taken out under your name – because this kid has been trained very well – he's in with very dangerous people – and he knows the law very well.
        </p>
        <p class="text-[0.72rem] leading-relaxed text-paper/55">
            There's a lot of partners and counsel and I don't want to name them all – you can check them out on the website:
            <a href="https://ramsdenlaw.com.au/our-team/" target="_blank" rel="noopener" class="text-hot underline hover:text-gold transition-colors">
                https://ramsdenlaw.com.au/our-team/
            </a>
        </p>
    </div>
</section>

<!-- ══════════════════════════════════════
     MACHETE THREATS SECTION — ISAAC RAMSDEN
══════════════════════════════════════ -->
<section class="max-w-4xl mx-auto px-5 md:px-10 py-16 space-y-8 reveal">
    <!-- Headline -->
    <h2 class="font-display text-4xl md:text-5xl tracking-wide leading-tight text-hot">
        Machete threats.. over the phone. Genius of the Year Award.
    </h2>

    <!-- Subheadline -->
    <p class="font-serif italic text-paper/50 text-lg leading-relaxed">
        Isaac loves to incriminate himself. You'd think his lawyer dad would have taught him better than that.
    </p>

    <!-- Description -->
    <p class="text-[0.72rem] leading-relaxed text-paper/55 border-l-4 border-hot/60 pl-4 py-3" style="background:rgba(193,68,14,0.05)">
        The video speaks for itself – I wanted to thank Isaac for absolving Adam Watson of doing anything bad to Bodie Chalmers who he had a relationship with – which you can see in <a href="/episode-2" class="text-gold underline hover:text-hot transition-colors">Episode 2</a> of this publication.
    </p>

    <!-- Video Embed -->
    <div class="border border-hot/20" style="background:rgba(0,0,0,0.3)">
        <video controls preload="metadata" class="w-full" style="max-height:520px;display:block">
            <source src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/machete_threat_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="px-4 py-3 border-t border-hot/15">
            <div class="text-[0.48rem] tracking-[0.18em] uppercase text-hot/60 mb-1">Recording · Machete threat over the phone</div>
            <p class="text-[0.55rem] text-paper/30 leading-relaxed">Isaac Ramsden incriminates himself on a recorded call.</p>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════
     KILL CAR AFFILIATION — ISAAC RAMSDEN
══════════════════════════════════════ -->
<section class="max-w-4xl mx-auto px-5 md:px-10 py-16 space-y-8 reveal">
    <!-- Headline -->
    <h2 class="font-display text-4xl md:text-5xl tracking-wide leading-tight text-hot">
        The Kill Car Affiliation – Fadi &amp; Sam Ibrahim's Boy (and Z Soeilman's/Bodie Chalmer's Friend)
    </h2>

    <!-- Subheadline -->
    <p class="font-serif italic text-paper/50 text-lg leading-relaxed">
        On the Payroll. Confirmed.
    </p>

    <!-- Description -->
    <div class="border-l-4 border-hot/60 pl-4 py-3 space-y-3" style="background:rgba(193,68,14,0.05)">
        <p class="text-[0.72rem] leading-relaxed text-paper/55">
            You know what kill cars are right? They're cars used to kill. Isaac organizes these for local gangs and some well known underworld identities – now Sam and Fadi are well known in the press. But here's another identity that Sunlight.Quest made famous – <a href="/episode-4" class="text-gold underline hover:text-hot transition-colors">Z Soeilman who this publication made famous in Episode 4</a> (just scroll to the bottom).
        </p>
        <p class="text-[0.72rem] leading-relaxed text-paper/55">
            And of course <a href="/episode-2" class="text-gold underline hover:text-hot transition-colors">Bodie Chalmers – the key highlight of our section on Episode 2</a> of Sunlight.Quest.
        </p>
    </div>

    <!-- Special Friends — Image Grid -->
    <div>
        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-4 border-b border-paper/[0.06] pb-2">
            Special Friends
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
            <div class="border border-paper/[0.07] bg-ink/50">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/fadi_ibrahim.png" alt="Fadi Ibrahim" class="w-full h-auto block" loading="lazy" />
                <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25 px-2 py-1.5 border-t border-paper/[0.06] text-center">Fadi Ibrahim</div>
            </div>
            <div class="border border-paper/[0.07] bg-ink/50">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/sam_ibrahim.jpg" alt="Sam Ibrahim" class="w-full h-auto block" loading="lazy" />
                <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25 px-2 py-1.5 border-t border-paper/[0.06] text-center">Sam Ibrahim</div>
            </div>
            <div class="border border-paper/[0.07] bg-ink/50">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/bodie_chalmers.png" alt="Bodie Chalmers" class="w-full h-auto block" loading="lazy" />
                <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25 px-2 py-1.5 border-t border-paper/[0.06] text-center">Bodie Chalmers</div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════
     SHOWER PHOTOS SECTION — ISAAC RAMSDEN
══════════════════════════════════════ -->
<section class="max-w-4xl mx-auto px-5 md:px-10 py-16 space-y-8 reveal">
    <!-- Headline -->
    <h2 class="font-display text-4xl md:text-5xl tracking-wide leading-tight text-hot">
        Sending Photos From the Shower
    </h2>

    <!-- Subheadline -->
    <p class="font-serif italic text-paper/50 text-lg leading-relaxed">
        "But I'm Not Gay, You're Weird!"
    </p>

    <!-- Description -->
    <div class="border-l-4 border-hot/60 pl-4 py-3 space-y-3" style="background:rgba(193,68,14,0.05)">
        <p class="text-[0.72rem] leading-relaxed text-paper/55">
            It's always the same game – once you get the money turn around and say that you were never gay in the first place and then dare the person that paid you to call the cops – and threaten to make stories.
        </p>
        <p class="text-[0.72rem] leading-relaxed text-paper/55">
            By the way with all the kill car money he's making why does he even need to go down the gay angle in the first place? Something tells me it's a line of work chosen by people for a certain reason – plenty of ways to make a buck on the street.
        </p>
    </div>

    <!-- Screenshot Grid — 10 images -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/message_dump/WhatsApp+Image+2026-07-26+at+7.46.26+PM2.jpeg" alt="WhatsApp message screenshot" class="w-full h-auto block" loading="lazy" />
        </div>
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/message_dump/WhatsApp+Image+2026-07-26+at+7.46.26+PM3.jpeg" alt="WhatsApp message screenshot" class="w-full h-auto block" loading="lazy" />
        </div>
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/message_dump/WhatsApp+Image+2026-07-26+at+7.47.28+PM_8.jpeg" alt="WhatsApp message screenshot" class="w-full h-auto block" loading="lazy" />
        </div>
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/message_dump/WhatsApp+Image+2026-07-26+at+7.38.05+PM.jpeg" alt="WhatsApp message screenshot" class="w-full h-auto block" loading="lazy" />
        </div>
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/message_dump/WhatsApp+Image+2026-07-26+at+7.40.08+PM.jpeg" alt="WhatsApp message screenshot" class="w-full h-auto block" loading="lazy" />
        </div>
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/message_dump/WhatsApp+Image+2026-07-26+at+7.42.12+PM.jpeg" alt="WhatsApp message screenshot" class="w-full h-auto block" loading="lazy" />
        </div>
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/message_dump/WhatsApp+Image+2026-07-26+at+7.45.46+PM.jpeg" alt="WhatsApp message screenshot" class="w-full h-auto block" loading="lazy" />
        </div>
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/message_dump/WhatsApp+Image+2026-07-26+at+7.46.26+PM.jpeg" alt="WhatsApp message screenshot" class="w-full h-auto block" loading="lazy" />
        </div>
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/message_dump/WhatsApp+Image+2026-07-26+at+7.46.26+PM_4.jpeg" alt="WhatsApp message screenshot" class="w-full h-auto block" loading="lazy" />
        </div>
        <div class="border border-paper/[0.07] bg-ink/50">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/message_dump/WhatsApp+Image+2026-07-26+at+7.46.26+PM_6.jpeg" alt="WhatsApp message screenshot" class="w-full h-auto block" loading="lazy" />
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════════
     SPLIT COPY / IMAGE BLOCK  (text left · image right)
     ══════════════════════════════════════════════════════════════ -->
<section class="overflow-hidden bg-ink sm:grid sm:grid-cols-2">
 
  <div class="p-8 md:p-12 lg:px-16 lg:py-24">
    <div class="mx-auto max-w-xl">
 
      <h2 class="font-display h-display text-5xl uppercase text-paper md:text-6xl">
        The ASIO Connection
      </h2>
 
      <p class="mt-3 font-quote text-2xl italic text-gold md:text-3xl">
        Facial Paternity Recognition Test
      </p>
 
      <p class="mt-6 font-serif text-base leading-relaxed text-paper/85 md:text-lg">
        A team inside ASIO has matched Isaac&rsquo;s face to his father&rsquo;s. Along with
        facial recognition technology &mdash; which everyone knows about &mdash; ASIO and other
        leading intelligence agencies also have paternity facial recognition technology.
      </p>
 
      <p class="mt-4 font-serif text-base leading-relaxed text-muted md:text-lg">
        So if you have a long lost son ASIO might be able to find him (or a long lost dad).
      </p>
 
    </div>
  </div>
 
  <img
    alt="ASIO facial paternity recognition conversion"
    src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/adult_male_asio_conversion.png"
    class="h-56 w-full object-cover sm:h-full"
  />
 
</section>

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
        <a href="/episode-5" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 5</a>
        <a href="/episode-6" class="text-[0.52rem] tracking-[0.14em] uppercase text-gold/40 hover:text-gold transition-colors">Episode 6</a>
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
