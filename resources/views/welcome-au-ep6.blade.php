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
                    <span class="text-[0.55rem] tracking-[0.28em] uppercase text-hot">RBK · Rhys Briffa · Wollongong</span>
                    <span class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/22 border border-paper/10 px-2 py-0.5">Feels Like Extortion</span>
                </div>
                <h1 class="font-display leading-[0.88] tracking-wide" style="font-size:clamp(2.8rem,7vw,5.5rem)">Kill Cars, Fake Licenses, Machetes Followed by Extortion.<br><span class="text-hot">The 16 Year Old Boy Dilemma</span></h1>
                <p class="font-serif italic text-paper/40 mt-3 leading-relaxed max-w-lg" style="font-size:clamp(0.9rem,2vw,1.15rem)">Who does Sam Ibrahim (the brother of John Ibrahim the King of the Cross - book here) - get when he needs a few kill cars. Oh and that license is FAKE (QLD Transport is not going to be happy knowing you're playing with their business model).</p>
            </div>
            <!-- RBK photo (video coming soon) -->
            <div class="fade-up mb-5" style="animation-delay:0.2s">
                <div class="relative border overflow-hidden" style="border-color:rgba(193,68,14,0.25)">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/isaac_ramsden.jpeg" alt="RBK — Rhys Briffa" class="w-full object-contain block" style="height:460px;background:#0c0804" loading="eager" />
                    <div class="absolute bottom-0 left-0 right-0 px-4 py-3" style="background:linear-gradient(transparent,rgba(12,8,4,0.92))">
                        <div class="text-[0.48rem] tracking-[0.18em] uppercase text-hot/80">RBK · Rhys Briffa</div>
                        <div class="text-[0.55rem] text-paper/40 mt-0.5">Video coming soon</div>
                    </div>
                </div>
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
     EPISODE 6 CONTENT
══════════════════════════════════════ -->
<div class="max-w-4xl mx-auto px-5 md:px-10 py-16 space-y-16">

    <!-- ── SECTION: RBK / RHYS BRIFFA ── -->
    <div id="rbk">
        <div class="flex items-center gap-3 mb-4 reveal">
            <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">New Character — RBK</span>
            <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Rhys Briffa · Wollongong · Romance Scam · Extortion</span>
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

        <!-- What this is — romance scam framing -->
        <div class="border-l-4 border-hot/60 pl-4 py-3 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">What This Is — A Romance Scam</div>
            <p class="text-[0.7rem] leading-relaxed text-paper/55">Read as a whole, the pattern has the hallmarks of a <strong class="text-paper/70">romance scam</strong>: feigned attraction and talk of leaving a partner, used to manufacture closeness — followed by money changing hands, then denial, threats, and the police. The romance is the lure; the money is the point. That is the thread running through everything below.</p>
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

        <!-- How it ends — police and court threats -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="flex items-center gap-2 mb-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot">How It Ends — Police &amp; Court</span>
                <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/50 text-hot px-1.5 py-0.5">"Now I Have To Leave Wollongong"</span>
            </div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">THE SAME MOVE, EVERY TIME:<br><span class="text-hot">STRAIGHT TO THE POLICE.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Once the record went up, Rhys's response was the one it has always been. He declared that Adam had <em class="text-paper/70">"fucked his life"</em> and that <strong class="text-paper/65">"now I have to leave Wollongong,"</strong> then reached straight for the two levers he pulls whenever a situation stops going his way: <strong class="text-paper/65">the police and the courts</strong>. <em class="text-paper/70">"I'm going to the police."</em> <em class="text-paper/70">"Have fun in court."</em> <em class="text-paper/70">"See what the cops have to say."</em></p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">The tell is in the same breath. He threatens the police while <strong class="text-paper/65">conceding he took the money</strong> — his own excuse for not returning it is that Adam <em class="text-paper/70">"didn't have a pay id."</em> Adam's reply cuts to it: <em class="text-paper/70">"Tell him how you took $560 from me for the stuff that you didn't do."</em> Someone genuinely wronged does not have to rehearse which half of the story to show the police. Rhys does.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-6">It is the same pattern set out at the top of this section — a hard image broadcast online, and triple-zero on speed dial the instant there is friction. Adam Watson's position has not moved: go to the police, go to court. The record is the record, and it stays up.</p>
            <div class="grid grid-cols-2 gap-3 max-w-lg">
                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/step_kids_at_risk_rbk_1.jpeg" target="_blank" rel="noopener" class="block border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/step_kids_at_risk_rbk_1.jpeg" alt="RBK message — 'Now I have to leave Wollongong', threatening police and court" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
                <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/police_threat_deflection.jpeg" target="_blank" rel="noopener" class="block border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/police_threat_deflection.jpeg" alt="RBK message — threatening to involve police while conceding he took the money" class="w-full h-auto block" style="object-fit:contain" loading="lazy" /></a>
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

        <!-- The smear, taken to Adam's client -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">The Smear, Taken to Adam's Client</div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">MYAGI WENT TO 373 CROWN STREET<br><span class="text-hot">TO POISON A BUSINESS RELATIONSHIP.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">The smear did not stay online. <strong class="text-paper/65">Myagi went to 373 Crown Street</strong> — the property at the centre of Adam Watson's work — to speak to <strong class="text-paper/65">Robert Huang</strong>, Adam's client, and tell him that Adam is a <strong class="text-paper/65">pedophile who paid RBK for sexual favours</strong>. Both halves of that are false, and both are engineered to do maximum damage: attach the ugliest possible label, and reframe legitimate campaign work as something sordid.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">He did not stop at the smear. In the same conversation, Myagi is reported to have told Robert Huang that he was going to <strong class="text-paper/65">throw Adam Watson out of the building</strong>, and made further <strong class="text-paper/65">threats</strong> — moving from character assassination to open intimidation, and aiming it squarely at the one commercial relationship most central to Adam's work.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">This is where a smear stops being talk and becomes a <strong class="text-paper/65">deliberate attempt to destroy a livelihood</strong>. Walking into a person's business relationship to brand him a pedophile — over a disputed payment for a video — is not a grievance aired. It is a targeted effort to make a client cut ties, using the worst word available as the lever.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">For the record, again: the payment to RBK was for a <strong class="text-paper/65">political campaign video</strong> — the receipts and the policy platform are documented above and in <a href="/episode-2" class="text-gold underline">Episode 2</a>. There were no "sexual favours." The pedophile claim is a fabrication. Carrying a fabrication like that to a person's client is exactly the conduct <strong class="text-paper/65">defamation law exists to answer</strong> — and Adam Watson is pursuing it.</p>
        </div>

        <!-- The card — unauthorised use -->
        <div class="border border-hot/25 p-6 mb-8 reveal" style="background:rgba(193,68,14,0.05)">
            <div class="flex items-center gap-2 mb-3">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot">The Card</span>
                <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/50 text-hot px-1.5 py-0.5">"You Have To Accept The Verification"</span>
            </div>
            <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">HIS CARD, ON THEIR PHONE.<br><span class="text-hot">AND A MACBOOK ON THE WAY OUT.</span></h3>
            <div class="grid grid-cols-1 sm:grid-cols-[1fr_300px] gap-5 items-start">
                <div>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">While the smears were flying, something quieter was happening with the money. RBK is said to have taken <strong class="text-paper/65">Adam Watson's card details from his phone without permission</strong> and loaded the card onto a device. What follows is a study in how this kind of scam actually runs.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4"><strong class="text-paper/65">RBK's girlfriend</strong> messaged Adam to get the card working: <em class="text-paper/70">"Rhys said to message him so he can do the card thing for you,"</em> <em class="text-paper/70">"you have to accept the verification,"</em> <em class="text-paper/70">"he just put it back on phone needs the code."</em> Then, when Adam did not play along: <em class="text-paper/70">"That's completely fine adam, can I give you a call? ... I would feel more comfortable then you sending a photo"</em> — followed by <em class="text-paper/70">"I'll drive to jbhifi now."</em> A JB Hi-Fi order for a <strong class="text-paper/65">MacBook</strong> was placed.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50">Look at the shape of it. The constant <strong class="text-paper/65">seeking of "verification" and reassurance</strong> — <em class="text-paper/70">is this one ok?</em>, <em class="text-paper/70">you have to accept it</em> — while the person whose card it actually is stays silent, is the signature of a scam that needs the victim's own hand to complete it. A genuine transaction does not require this much coaxing. The chasing <em class="text-paper/70">is</em> the tell.</p>
                </div>
                <div class="border border-paper/[0.07]" style="background:#0c0804">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/credit_card_verification_cover_up.jpeg" alt="Messages coordinating verification of a card loaded onto a device" class="w-full h-auto block" style="object-fit:contain" loading="lazy" />
                    <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25 px-2 py-1.5 border-t border-paper/[0.06]">Coordinating the card "verification" · Adam's card, last 4 digits only</div>
                </div>
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
                <div class="mt-4 border border-hot/20" style="background:rgba(0,0,0,0.3)">
                    <video controls preload="metadata" class="w-full" style="max-height:520px;display:block">
                        <source src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/skivz_video.mp4" type="video/mp4">
                    </video>
                    <div class="px-4 py-3 border-t border-hot/15">
                        <div class="text-[0.48rem] tracking-[0.18em] uppercase text-hot/60 mb-1">Recording · Adam Watson &amp; Skivz</div>
                        <p class="text-[0.55rem] text-paper/30 leading-relaxed">The recorded call in which Skivz — asked about the child being placed around RBK's videos — answers "what's it got to do with me?"</p>
                    </div>
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
                        <div class="border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/west_kira/r_biffa_video_receipt_1_blurred.jpg" alt="Receipt — Adam Watson payment to R B BRIFFA (RBK), $1,000, Osko" class="w-full h-auto block" loading="lazy" /><div class="text-[0.42rem] tracking-[0.12em] uppercase text-paper/25 px-2 py-1.5 border-t border-paper/[0.06]">Payment to R B BRIFFA &middot; &minus;$1,000 &middot; Osko &middot; Rcpt N270861246937</div></div>
                        <div class="border border-paper/[0.07]" style="background:#0c0804"><img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/west_kira/r_biffa_video_receipt_2_blurred.jpg" alt="Receipt — Adam Watson payment to R B BRIFFA (RBK), $195, Osko" class="w-full h-auto block" loading="lazy" /><div class="text-[0.42rem] tracking-[0.12em] uppercase text-paper/25 px-2 py-1.5 border-t border-paper/[0.06]">Payment to R B BRIFFA &middot; &minus;$195 &middot; Osko &middot; Rcpt N270861226986</div></div>
                    </div>
                </div>
            </div>

            <!-- Reported to eSafety Commissioner -->
            <div class="border border-hot/25 p-6 mt-8" style="background:rgba(193,68,14,0.05)">
                <div class="flex items-center gap-2 mb-3">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot">Reported — eSafety Commissioner</span>
                    <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/50 text-hot px-1.5 py-0.5">Ref CYR-2026-C7G5R0</span>
                </div>
                <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">A CHILD, USED AS PROMOTION<br><span class="text-hot">FOR A ROMANCE SCAM. NOW REPORTED.</span></h3>
                <div class="grid grid-cols-1 sm:grid-cols-[1fr_360px] gap-5 items-start">
                    <div>
                        <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">A formal complaint has been lodged with Australia's <strong class="text-paper/65">eSafety Commissioner</strong> about these Instagram accounts — <a href="https://www.instagram.com/rbkofficialfromda26/" target="_blank" rel="noopener" class="text-hot underline">@rbkofficialfromda26</a>, <a href="https://www.instagram.com/skivz/" target="_blank" rel="noopener" class="text-hot underline">@skivz</a> and <a href="https://www.instagram.com/donz_active/" target="_blank" rel="noopener" class="text-hot underline">@donz_active</a> — and about the conduct set out across this section.</p>
                        <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">The heart of the complaint is a child. <strong class="text-paper/65">Skivz promotes his young son through his platform</strong> while placing him in and around content tied to <strong class="text-paper/65">RBK</strong> — conduct that, taken as a whole, has the hallmarks of a <strong class="text-paper/65">romance scam</strong> run against Adam Watson. A child is not a prop for that. Whatever the adults are doing to one another, drawing a minor into it is its own harm — and it is exactly the kind of thing that belongs in front of a regulator.</p>
                        <p class="text-[0.72rem] leading-relaxed text-paper/50">The report has been acknowledged under reference <strong class="text-paper/65">CYR-2026-C7G5R0</strong>. The confirmation is shown alongside.</p>
                    </div>
                    <div class="border border-paper/[0.07]" style="background:#0c0804">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/rbk/esafety_confirmation.png" alt="eSafety Commissioner report confirmation — reference CYR-2026-C7G5R0" class="w-full h-auto block" loading="lazy" />
                        <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25 px-3 py-2 border-t border-paper/[0.06]">eSafety Commissioner · Report confirmation · Ref CYR-2026-C7G5R0</div>
                    </div>
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
