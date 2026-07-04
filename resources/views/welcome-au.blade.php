<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sunlight.Quest — Episode 1: Gold Coast Uncovered</title>
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
        ::-webkit-scrollbar{width:3px}::-webkit-scrollbar-track{background:#0c0804}::-webkit-scrollbar-thumb{background:#c1440e}
        @keyframes blink{0%,100%{opacity:1}50%{opacity:0.25}}.blink{animation:blink 2s step-end infinite}
        @keyframes fadeUp{from{opacity:0;transform:translateY(18px)}to{opacity:1;transform:translateY(0)}}.fade-up{animation:fadeUp 0.65s ease both}
        .reveal{opacity:0;transform:translateY(24px);transition:opacity 0.55s ease,transform 0.55s ease}.reveal.in{opacity:1;transform:translateY(0)}
        #case-panel{transition:transform 0.4s cubic-bezier(0.4,0,0.2,1);transform:translateX(100%)}#case-panel.open{transform:translateX(0)}
        .case-card{transition:transform 0.25s ease,box-shadow 0.25s ease}.case-card:hover{transform:translateY(-3px);box-shadow:0 16px 48px rgba(0,0,0,0.5)}
        .bar-accent{transition:transform 0.35s ease;transform:scaleX(0);transform-origin:left}.case-card:hover .bar-accent{transform:scaleX(1)}
        .bar-accent-y{transition:transform 0.35s ease;transform:scaleY(0);transform-origin:bottom}.panel-item:hover .bar-accent-y{transform:scaleY(1)}
        .scanlines{background:repeating-linear-gradient(0deg,transparent,transparent 2px,rgba(0,0,0,0.03) 2px,rgba(0,0,0,0.03) 4px);pointer-events:none}
        .ep-coming{position:relative;pointer-events:none}.ep-coming::after{content:'COMING SOON';position:absolute;inset:0;display:flex;align-items:center;justify-content:center;font-family:'Bebas Neue',sans-serif;font-size:1.3rem;letter-spacing:0.2em;color:rgba(245,234,212,0.5);background:rgba(12,8,4,0.75);backdrop-filter:blur(2px)}
        .story-chapter{border-left:2px solid rgba(245,234,212,0.08);padding-left:1.5rem;transition:border-color 0.3s ease}.story-chapter:hover{border-left-color:rgba(193,68,14,0.4)}
        .evidence-tag{display:inline-flex;align-items:center;gap:0.4rem;font-size:0.52rem;letter-spacing:0.18em;text-transform:uppercase;border:1px solid currentColor;padding:0.25rem 0.6rem;opacity:0.6;transition:opacity 0.2s}.evidence-tag:hover{opacity:1}
        .timeline-dot{width:8px;height:8px;border-radius:50%;background:#c1440e;box-shadow:0 0 0 3px rgba(193,68,14,0.2);flex-shrink:0;margin-top:5px}
        @keyframes pulseRed{0%,100%{box-shadow:0 0 0 3px rgba(193,68,14,0.2)}50%{box-shadow:0 0 0 6px rgba(193,68,14,0.1)}}.timeline-dot.active{animation:pulseRed 2s ease infinite}
        .stat-number{font-family:'Bebas Neue',sans-serif;line-height:1}
        .doc-reveal{background:rgba(245,234,212,0.02);border:1px solid rgba(245,234,212,0.07);border-left:3px solid #c1440e;transition:background 0.2s}.doc-reveal:hover{background:rgba(193,68,14,0.04)}

        /* ── EVIDENCE VAULT ── */
        .evidence-vault{margin-top:1.25rem;border:1px solid rgba(245,234,212,0.08);background:rgba(4,4,4,0.7)}
        .ev-header{display:flex;align-items:center;justify-content:space-between;padding:0.6rem 0.9rem;background:rgba(245,234,212,0.025);cursor:pointer;user-select:none;border-bottom:1px solid rgba(245,234,212,0.05)}
        .ev-header:hover{background:rgba(245,234,212,0.04)}
        .ev-toggle{transition:transform 0.3s;font-size:0.45rem;color:rgba(245,234,212,0.28)}
        .ev-toggle.open{transform:rotate(180deg)}
        .ev-body{overflow:hidden;max-height:0;transition:max-height 0.45s cubic-bezier(0.4,0,0.2,1)}
        .ev-body.open{max-height:3000px}
        .ev-file{display:flex;align-items:center;gap:0.65rem;padding:0.65rem 0.9rem;border-bottom:1px solid rgba(245,234,212,0.04);transition:background 0.2s;cursor:pointer;position:relative;overflow:hidden}
        .ev-file:last-child{border-bottom:none}
        .ev-file:hover{background:rgba(245,234,212,0.03)}
        .ev-file::before{content:'';position:absolute;left:0;top:0;bottom:0;width:2px;transform:scaleY(0);transform-origin:bottom;transition:transform 0.3s}
        .ev-file:hover::before{transform:scaleY(1)}
        .ef-hot::before{background:#c1440e}.ef-gold::before{background:#c98a10}.ef-sage::before{background:#3d7a4a}.ef-violet::before{background:#7c6aaa}
        .ev-icon{width:30px;height:30px;display:flex;align-items:center;justify-content:center;border:1px solid rgba(245,234,212,0.07);font-size:0.72rem;flex-shrink:0}
        .ev-pdf{background:rgba(193,68,14,0.08);color:#c1440e}
        .ev-audio{background:rgba(61,122,74,0.1);color:#3d7a4a}
        .ev-video{background:rgba(124,106,170,0.1);color:#7c6aaa}
        .ev-img{background:rgba(201,138,16,0.08);color:#c98a10}
        .ev-meta{flex:1;min-width:0}
        .ev-name{font-size:0.63rem;color:rgba(245,234,212,0.62);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
        .ev-desc{font-size:0.49rem;letter-spacing:0.12em;text-transform:uppercase;margin-top:0.12rem;color:rgba(245,234,212,0.22)}
        .ev-cta{font-size:0.47rem;letter-spacing:0.18em;text-transform:uppercase;opacity:0.3;transition:opacity 0.2s;white-space:nowrap;flex-shrink:0}
        .ev-file:hover .ev-cta{opacity:1}
        .redact-tag{display:inline-flex;align-items:center;gap:0.25rem;background:rgba(193,68,14,0.1);border:1px solid rgba(193,68,14,0.28);color:#c1440e;font-size:0.44rem;letter-spacing:0.2em;text-transform:uppercase;padding:0.15rem 0.4rem;flex-shrink:0;margin-left:0.25rem}
        .audio-bars{display:flex;align-items:center;gap:1.5px;height:14px}
        .audio-bars b{display:block;width:2px;background:currentColor;border-radius:1px;animation:abars 1.3s ease infinite}
        .audio-bars b:nth-child(1){height:3px;animation-delay:0s}.audio-bars b:nth-child(2){height:9px;animation-delay:0.15s}.audio-bars b:nth-child(3){height:14px;animation-delay:0.3s}.audio-bars b:nth-child(4){height:7px;animation-delay:0.45s}.audio-bars b:nth-child(5){height:11px;animation-delay:0.2s}
        @keyframes abars{0%,100%{transform:scaleY(0.25)}50%{transform:scaleY(1)}}
        .ev-zip-bar{display:flex;align-items:center;justify-content:space-between;padding:0.6rem 0.9rem;background:rgba(201,138,16,0.04);border-top:1px solid rgba(201,138,16,0.15)}
        /* ── TIMELINE ROWS ── */
        .tl-row{background:rgba(245,234,212,0.05);border:1px solid rgba(245,234,212,0.13);transition:background 0.2s,border-color 0.2s}
        .tl-row:hover{background:rgba(245,234,212,0.085);border-color:rgba(245,234,212,0.22)}
        .tl-step{font-size:0.5rem;letter-spacing:0.15em;text-transform:uppercase;font-weight:600}
        .tl-sublabel{font-size:0.45rem;color:rgba(245,234,212,0.35);margin-top:0.2rem}
        .tl-title{font-size:0.62rem;font-weight:600;letter-spacing:0.04em;color:rgba(245,234,212,0.72);margin-bottom:0.25rem}
        .tl-body{font-size:0.56rem;color:rgba(245,234,212,0.48);line-height:1.65}
        /* ── TIMELINE READABILITY BOOST ── */
        .tl-row>div:last-child>div:first-child{font-size:0.73rem!important;color:rgba(245,234,212,0.84)!important;line-height:1.35}
        .tl-row>div:last-child>div:last-child,.tl-row>div:last-child>div:nth-child(2){font-size:0.62rem!important;color:rgba(245,234,212,0.58)!important;line-height:1.7}
        .tl-row>div:first-child>div:first-child{font-size:0.72rem!important;font-weight:700;letter-spacing:0.1em}
        .tl-row>div:first-child>div:last-child{font-size:0.5rem!important;color:rgba(245,234,212,0.45)!important;margin-top:0.25rem}

        /* ── MEDIA VIEWER ── */
        #mv-wrap{display:none;position:fixed;inset:0;z-index:9500;background:rgba(4,4,4,0.97);backdrop-filter:blur(16px);flex-direction:column}
        #mv-wrap.active{display:flex}
        .mv-head{display:flex;align-items:center;justify-content:space-between;padding:0.9rem 1.5rem;border-bottom:1px solid rgba(245,234,212,0.06);flex-shrink:0}
        .mv-body{flex:1;display:flex;align-items:center;justify-content:center;padding:1.5rem;overflow:auto}
        .mv-foot{padding:0.65rem 1.5rem;border-top:1px solid rgba(245,234,212,0.06);display:flex;align-items:center;gap:0.75rem;flex-shrink:0;flex-wrap:wrap}
        .mv-close-btn{background:rgba(245,234,212,0.04);border:1px solid rgba(245,234,212,0.1);color:rgba(245,234,212,0.4);font-family:'DM Mono',monospace;font-size:0.6rem;letter-spacing:0.15em;text-transform:uppercase;padding:0.45rem 0.75rem;cursor:pointer;transition:all 0.2s}
        .mv-close-btn:hover{border-color:rgba(245,234,212,0.3);color:rgba(245,234,212,0.9)}
        .mv-dl-btn{display:inline-flex;align-items:center;gap:0.4rem;border:1px solid rgba(245,234,212,0.12);padding:0.45rem 0.9rem;font-size:0.52rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(245,234,212,0.4);transition:all 0.2s;cursor:pointer;background:none}
        .mv-dl-btn:hover{border-color:rgba(245,234,212,0.35);color:rgba(245,234,212,0.85)}
        .mv-dl-hot{border-color:rgba(193,68,14,0.35);color:#c1440e}.mv-dl-hot:hover{border-color:#c1440e;background:rgba(193,68,14,0.08)}
        .mv-dl-gold{border-color:rgba(201,138,16,0.35);color:#c98a10}.mv-dl-gold:hover{border-color:#c98a10;background:rgba(201,138,16,0.08)}
        .mv-dl-sage{border-color:rgba(61,122,74,0.35);color:#3d7a4a}.mv-dl-sage:hover{border-color:#3d7a4a;background:rgba(61,122,74,0.08)}

        /* custom audio player */
        .cap-wrap{background:rgba(245,234,212,0.025);border:1px solid rgba(245,234,212,0.07);padding:1.5rem;width:100%;max-width:560px}
        .cap-waveform{height:52px;display:flex;align-items:center;gap:1.5px;margin:1rem 0;cursor:pointer;overflow:hidden;position:relative}
        .cap-bar{flex:1;background:rgba(61,122,74,0.18);border-radius:1px;min-height:2px;transition:background 0.1s}
        .cap-bar.played{background:#3d7a4a}.cap-bar:hover{background:rgba(61,122,74,0.5)}
        .cap-controls{display:flex;align-items:center;gap:1rem}
        .cap-play{width:36px;height:36px;border:1px solid rgba(61,122,74,0.4);background:rgba(61,122,74,0.08);color:#3d7a4a;cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:0.75rem;transition:all 0.2s;flex-shrink:0}
        .cap-play:hover{background:rgba(61,122,74,0.2);border-color:#3d7a4a}
        .cap-time{font-size:0.55rem;letter-spacing:0.1em;color:rgba(245,234,212,0.3);font-family:'DM Mono',monospace}

        /* image viewer */
        .mv-img-frame{position:relative;max-width:760px;width:100%}
        .mv-img-frame img{width:100%;display:block;border:1px solid rgba(245,234,212,0.06)}
        .face-redact{position:absolute;background:rgba(4,4,4,0.93);border:1px solid rgba(193,68,14,0.35);display:flex;align-items:center;justify-content:center;flex-direction:column;gap:0.2rem}

        /* pdf placeholder */
        .pdf-ph{background:rgba(245,234,212,0.02);border:1px solid rgba(245,234,212,0.06);max-width:640px;width:100%;padding:2.5rem 2rem;text-align:center}
        .pdf-ph-pages{display:flex;gap:0.5rem;justify-content:center;margin-bottom:1.5rem}
        .pdf-ph-page{width:64px;height:82px;border:1px solid rgba(245,234,212,0.08);background:rgba(245,234,212,0.02);display:flex;flex-direction:column;gap:4px;padding:6px;border-top:3px solid rgba(193,68,14,0.4)}
        .pdf-ph-line{height:2px;background:rgba(245,234,212,0.06);border-radius:1px}
        .pdf-ph-line:first-child{background:rgba(245,234,212,0.12)}

        /* video placeholder */
        .vid-ph{background:#060606;border:1px solid rgba(245,234,212,0.07);aspect-ratio:16/9;max-width:760px;width:100%;position:relative;display:flex;align-items:center;justify-content:center;cursor:pointer;overflow:hidden}
        .vid-ph .scanlines{position:absolute;inset:0;opacity:0.5}
        .vid-ph-play{width:60px;height:60px;border:2px solid rgba(245,234,212,0.3);border-radius:50%;display:flex;align-items:center;justify-content:center;transition:all 0.3s;position:relative;z-index:2}
        .vid-ph:hover .vid-ph-play{border-color:#c1440e;background:rgba(193,68,14,0.12)}
        .vid-ph-label{position:absolute;bottom:1rem;left:0;right:0;text-align:center;font-size:0.5rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(245,234,212,0.25);z-index:2}

        /* nav */
        .nav-dropdown{position:relative}
        .nav-dropdown-menu{display:none;position:absolute;top:calc(100% + 8px);right:0;background:rgba(12,8,4,0.97);backdrop-filter:blur(12px);border:1px solid rgba(245,234,212,0.08);min-width:220px;z-index:100;box-shadow:0 24px 48px rgba(0,0,0,0.7)}
        .nav-dropdown:hover .nav-dropdown-menu,.nav-dropdown-menu:hover{display:block}
        .nav-dropdown-menu a{display:block;padding:0.55rem 1rem;font-size:0.55rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(245,234,212,0.4);transition:color 0.2s,background 0.2s;border-bottom:1px solid rgba(245,234,212,0.04)}
        .nav-dropdown-menu a:last-child{border-bottom:none}
        .nav-dropdown-menu a:hover{color:rgba(245,234,212,0.9);background:rgba(245,234,212,0.03)}
        .nav-dropdown-menu .nav-group-label{display:block;padding:0.6rem 1rem 0.3rem;font-size:0.45rem;letter-spacing:0.25em;text-transform:uppercase;color:rgba(245,234,212,0.18);border-bottom:1px solid rgba(245,234,212,0.06);pointer-events:none}
        .nav-dropdown-menu a.nav-accent-hot:hover{color:#c1440e}
        .nav-dropdown-menu a.nav-accent-gold:hover{color:#c98a10}
        .nav-dropdown-menu a.nav-accent-violet:hover{color:#7c6aaa}
        .nav-dropdown-menu a.nav-accent-sage:hover{color:#3d7a4a}
        /* ── TIP MODAL OVERLAY ─────────────────────────────── */
        #sq-modal{display:none;position:fixed;inset:0;z-index:200;background:rgba(0,0,0,0.9);backdrop-filter:blur(5px);overflow-y:auto;padding:24px 16px 56px}
        #sq-modal.open{display:block}
        .sq-modal-inner{max-width:680px;margin:0 auto;position:relative}
        .sq-modal-close-row{display:flex;justify-content:flex-end;margin-bottom:12px}
        .sq-modal-close-btn{background:#111;border:1px solid #2a2a2a;color:rgba(245,234,212,0.4);font-family:'DM Mono',monospace;font-size:11px;letter-spacing:1px;padding:7px 16px;cursor:pointer;transition:color 0.13s,border-color 0.13s}
        .sq-modal-close-btn:hover{color:rgba(245,234,212,0.85);border-color:#555}
        /* form elements */
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
        .sq-badge-opt{background:#1e1e1e;color:#4a4035}
        .sq-badge-req{background:#c8372d;color:#f5f0e8}
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
        .sq-collapsible{display:none;margin-top:10px}
        .sq-collapsible.open{display:block}
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
<body class="bg-ink text-paper font-mono overflow-x-hidden" style="background-color:#0c0804;background-image:linear-gradient(160deg,rgba(139,60,14,0.07) 0%,transparent 40%,rgba(61,122,74,0.04) 100%)">

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
        <a href="#" class="font-display text-2xl tracking-widest">SUNLIGHT<span class="text-hot">.QUEST</span></a>
        <span class="hidden sm:block text-[0.52rem] tracking-[0.2em] uppercase text-paper/20 border-l border-paper/10 pl-4">Investigative Vlog Series</span>
    </div>
    <div class="flex items-center gap-3">
        <button onclick="openTipModal()" class="hidden md:flex items-center gap-1.5 text-[0.55rem] tracking-[0.2em] uppercase border border-hot/50 hover:border-hot hover:bg-hot/10 px-3 py-1.5 text-hot transition-all">⊕ Submit a Tip</button>
        <a href="/episode-2" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors border border-paper/15 hover:border-violet/50 px-3 py-1.5 transition-all" style="hover-color:#7c6aaa">Episode 2 →</a>
        <a href="/episode-2" title="Go to Episode 2" aria-label="Go to Episode 2" class="flex md:hidden items-center gap-1 px-2.5 h-8 border font-display text-[0.6rem] tracking-widest" style="border-color:rgba(124,106,170,0.5);color:#7c6aaa">EP2 ›</a>
        <span class="text-[0.52rem] tracking-[0.18em] uppercase text-gold border border-gold/60 px-3 py-1.5 blink">⬤ EP.01</span>
    </div>
</nav>

<!-- ══ AU STRIPE ══ -->
<div style="position:fixed;top:56px;left:0;right:0;z-index:49;height:2px;background:linear-gradient(90deg,#c1440e 0%,#c98a10 35%,#3d7a4a 65%,#c1440e 100%);opacity:0.55;pointer-events:none"></div>

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
        <button onclick="document.getElementById('samir').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-gold/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-gold"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-1">Ch.1A — Samir Dhakal</div><div class="font-display text-base tracking-wide group-hover:text-gold transition-colors leading-tight">Keystroke Camera · Deported</div><div class="text-[0.62rem] text-paper/30 mt-1">Camera · Assault · Tony Burke deportation</div></div>
        </button>
        <button onclick="document.getElementById('smithinson').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Ch.1B — Jonathan Smithinson</div><div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">Psychiatrist · Bondi Smear · Silverwater</div><div class="text-[0.62rem] text-paper/30 mt-1">Disbarred · Shoplifting · Murder charge</div></div>
        </button>
        <button onclick="document.getElementById('privacy').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-violet/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-violet"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-violet mb-1">Ch.2 — Privacy Breach</div><div class="font-display text-base tracking-wide group-hover:text-violet transition-colors leading-tight">Aquatic Centre Leak</div><div class="text-[0.62rem] text-paper/30 mt-1">Photographed · Annotated · Leaked · Council block</div></div>
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
                <media-player
                    id="player-ep1"
                    title="Gold Coast Uncovered — Episode 1"
                    src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/r+j/rj_confront.mp4"
                    style="--media-brand:#c1440e;--media-focus-ring-color:rgba(193,68,14,0.45);--media-time-chapters-bg:rgba(193,68,14,0.5);width:100%;border:1px solid rgba(193,68,14,0.2);box-shadow:0 0 80px rgba(193,68,14,0.09),0 0 0 1px rgba(245,234,212,0.025)"
                >
                    <media-provider>
                        <track id="ep1-chapters-track" kind="chapters" default />
                    </media-provider>
                    <media-video-layout></media-video-layout>
                </media-player>
            </div>
            <!-- Chapter nav below video -->
            <div class="fade-up mt-5 border border-paper/[0.07]" style="animation-delay:0.35s;background:rgba(12,8,4,0.7)">
                <div class="px-4 py-2 border-b border-paper/[0.06]"><span class="text-[0.46rem] tracking-[0.22em] uppercase text-paper/22">Episode 1 — Chapters</span></div>
                <div class="flex flex-wrap gap-0">
                    <a href="#story" class="flex items-center gap-2 px-4 py-3 hover:bg-hot/8 border-r border-paper/[0.06] transition-all group">
                        <span class="font-display text-hot text-[0.62rem]">01</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Sandy Tulisi</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Rooming house fraud</div></div>
                    </a>
                    <a href="#samir" class="flex items-center gap-2 px-4 py-3 hover:bg-gold/8 border-r border-paper/[0.06] transition-all group">
                        <span class="font-display text-gold text-[0.62rem]">02</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Samir Dhakal</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Deported</div></div>
                    </a>
                    <a href="#smithinson" class="flex items-center gap-2 px-4 py-3 hover:bg-hot/8 border-r border-paper/[0.06] transition-all group">
                        <span class="font-display text-hot text-[0.62rem]">03</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Psychiatrist</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Silverwater</div></div>
                    </a>
                    <a href="#coles" class="flex items-center gap-2 px-4 py-3 hover:bg-hot/8 border-r border-paper/[0.06] transition-all group">
                        <span class="font-display text-hot text-[0.62rem]">04</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Coles Incident</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Police body cam</div></div>
                    </a>
                    <a href="#assault" class="flex items-center gap-2 px-4 py-3 hover:bg-hot/8 border-r border-paper/[0.06] transition-all group">
                        <span class="font-display text-hot text-[0.62rem]">05</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Oracle East</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Stalked & assaulted</div></div>
                    </a>
                    <a href="#media" class="flex items-center gap-2 px-4 py-3 hover:bg-gold/8 border-r border-paper/[0.06] transition-all group">
                        <span class="font-display text-gold text-[0.62rem]">06</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Sky News</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Story didn't run</div></div>
                    </a>
                    <a href="#viral" class="flex items-center gap-2 px-4 py-3 hover:bg-hot/8 border-r border-paper/[0.06] transition-all group">
                        <span class="font-display text-hot text-[0.62rem]">07</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Viral Video</div><div class="text-[0.47rem] text-paper/22 tracking-wider">RJ confrontation</div></div>
                    </a>
                    <a href="#homelessness" class="flex items-center gap-2 px-4 py-3 hover:bg-sage/8 transition-all group">
                        <span class="font-display text-sage text-[0.62rem]">08</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Homelessness</div><div class="text-[0.47rem] text-paper/22 tracking-wider">GC action plan</div></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="lg:border-l border-paper/[0.06] flex flex-col" style="background:rgba(12,8,4,0.6)">
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
     POLITICAL DEVELOPMENTS
══════════════════════════════════════ -->
<section id="politics" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(61,122,74,0.06) 0%,transparent 60%)">
    <div class="max-w-5xl mx-auto">

        <div class="flex items-center gap-3 mb-3 reveal">
            <div class="w-4 h-px bg-sage"></div>
            <span class="text-[0.55rem] tracking-[0.3em] uppercase text-sage">Political Developments</span>
        </div>
        <h2 class="font-display leading-none tracking-wide mb-3 reveal" style="font-size:clamp(2.4rem,6vw,4rem)">ALBANESE.<br><span class="text-sage">THE GOVERNMENT RESPONDS.</span></h2>
        <p class="font-serif italic text-paper/45 text-lg leading-relaxed mb-12 reveal max-w-2xl">Prime Minister Anthony Albanese has confirmed a series of positions in connection with Adam Watson and the issues documented on this site. What follows is on the record.</p>

        <div class="space-y-6 reveal">

            <!-- Item 1: Vyleen White / deportation -->
            <div class="story-chapter" style="border-left-color:rgba(61,122,74,0.4)">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-[0.48rem] tracking-[0.22em] uppercase text-sage border border-sage/40 px-2 py-1">Confirmed</span>
                    <span class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/20">Vyleen White · Deportation Call</span>
                </div>
                <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">ALBANESE TO STAND WITH ADAM WATSON.<br><span class="text-sage">CALL FOR DEPORTATION OF VYLEEN WHITE KILLER.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Prime Minister Anthony Albanese has confirmed he will back Adam Watson and cooperate with Attorney General Deb Frecklington to stand publicly and call for the deportation of the killer of Vyleen White. The commitment represents a direct alignment between the Federal Government and the position Adam Watson has publicly advocated.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">Albanese has further confirmed that Steven Miles — while not making a public statement — privately told associates that he assisted the mother of the Vyleen White killer to appeal the sentence handed down for the murder. Albanese has stated he agrees with Adam Watson's position on this and considers it disqualifying conduct for a Premier.</p>
            </div>

            <!-- Item 2: Sovereign fuel policy -->
            <div class="story-chapter" style="border-left-color:rgba(201,138,16,0.4)">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-[0.48rem] tracking-[0.22em] uppercase text-gold border border-gold/40 px-2 py-1">Confirmed</span>
                    <span class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/20">Energy Policy</span>
                </div>
                <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">SOVEREIGN FUEL POLICY.<br><span class="text-gold">ALBANESE ADOPTS ADAM WATSON'S POSITION.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">Anthony Albanese has confirmed he is adopting Adam Watson's sovereign fuel policy. The policy, which Adam Watson has publicly advanced, has now been taken up at the Federal level.</p>
            </div>

            <!-- Item 3: Steven Miles / Adult Time Adult Crime -->
            <div class="story-chapter" style="border-left-color:rgba(193,68,14,0.4)">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot border border-hot/40 px-2 py-1">Reported</span>
                    <span class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/20">Queensland — Youth Justice</span>
                </div>
                <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">STEVEN MILES.<br><span class="text-hot">ADULT TIME, ADULT CRIME — GONE WITHIN 30 DAYS.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Anthony Albanese has confirmed that Steven Miles — while not making a public statement — has told associates that if he is re-elected, he will drop the Adult Time, Adult Crime sentencing framework within 30 days. The policy, introduced to address youth crime on the Gold Coast and statewide, would be dismantled in the first month of a Miles government.</p>
                <div class="border-l-4 border-hot/40 pl-5 py-1" style="background:rgba(193,68,14,0.04);padding:0.85rem 1rem 0.85rem 1.25rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-1">Not Publicly Confirmed</div>
                    <p class="text-[0.62rem] text-paper/40 leading-relaxed">Miles has not stated this publicly. This is a private communication confirmed by Albanese.</p>
                </div>
            </div>

            <!-- Item 4: Refugee Convention -->
            <div class="story-chapter" style="border-left-color:rgba(61,122,74,0.4)">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-[0.48rem] tracking-[0.22em] uppercase text-sage border border-sage/40 px-2 py-1">Confirmed</span>
                    <span class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/20">Immigration · Refugee Convention</span>
                </div>
                <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">REFUGEE CONVENTION.<br><span class="text-sage">ALBANESE AGREES: AUSTRALIA SHOULD PULL OUT.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">Anthony Albanese has confirmed he agrees with Adam Watson's immigration position — that Australia needs to withdraw from the 1951 Refugee Convention. The confirmation represents a significant alignment between the Prime Minister and the position Adam Watson has advanced publicly.</p>
            </div>

            <!-- Item: Mehreen Faruqi / underworld figures / recording -->
            <div class="story-chapter" style="border-left-color:rgba(193,68,14,0.4)">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot border border-hot/40 px-2 py-1">Recording Provided</span>
                    <span class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/20">Mehreen Faruqi · Immigration Policy</span>
                </div>
                <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">FARUQI ORGANISED TWO UNDERWORLD FIGURES.<br><span class="text-hot">TO FIND ADAM WATSON AND BREAK HIS LEGS.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Upon discovering Adam Watson's immigration policy — set out in full in Episode 2, <a href="/episode-2" class="text-sage underline decoration-sage/40 hover:decoration-sage transition-colors">available here</a> — Mehreen Faruqi is alleged to have organised two underworld figures to find Adam Watson and break his legs, telling them that he hates brown people and is racist.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The two figures did not carry out the request. Instead, they <strong class="text-paper/65">recorded Faruqi</strong> making it — and provided the tape directly to Adam Watson. Sunlight.Quest appreciates their decision to do so.</p>
                <div class="border-l-4 border-hot/50 pl-5 py-1" style="background:rgba(193,68,14,0.05);padding:0.85rem 1rem 0.85rem 1.25rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-1">The Recording</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed">The two figures recorded the solicitation and handed the tape to Adam Watson. Soliciting violence against a person over their published political views — and casting it in racial terms — is a matter of grave public interest. It is on this record now.</p>
                </div>
            </div>

            <!-- Item 5: Mike Burgess / AFP / Pauline Hanson security -->
            <div class="story-chapter" style="border-left-color:rgba(193,68,14,0.4)">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot border border-hot/40 px-2 py-1">Confirmed — Mike Burgess</span>
                    <span class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/20">AFP · Pauline Hanson · Security Pulled</span>
                </div>
                <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">ALBANESE CALLED THE AFP.<br><span class="text-hot">PAULINE HANSON'S SECURITY PULLED ON PRIME MINISTERIAL ORDER.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Mike Burgess — the Director-General of the Australian Security Intelligence Organisation — has confirmed to Adam Watson that Prime Minister Anthony Albanese placed a direct call into the Australian Federal Police instructing them to pull security from Pauline Hanson. This is not a rumour or speculation. It is a confirmation from the head of Australia's domestic intelligence agency.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">A Prime Minister using a direct call to the AFP to remove security from a sitting Senator and Opposition leader is not a normal exercise of executive authority. AFP protection is allocated on threat assessments, not political preference. A Prime Ministerial instruction to withdraw that protection — from a political opponent — is an abuse of executive power and a matter of grave public interest.</p>
                <div class="border border-hot/20 p-4 mb-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">What Has Been Confirmed</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Mike Burgess, Director-General of ASIO, confirmed this directly to Adam Watson</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Albanese placed a call into the AFP — the federal law enforcement agency responsible for protective security</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">The instruction: pull security from Pauline Hanson</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">AFP protective security is threat-assessed — not a political instrument of a sitting Prime Minister</p></div>
                    </div>
                </div>
                <div class="border-l-4 border-hot/50 pl-5 py-1" style="background:rgba(193,68,14,0.05);padding:0.85rem 1rem 0.85rem 1.25rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-1">Why This Matters</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed">Using the AFP as an instrument of political pressure against an Opposition senator — withdrawing her security detail on direct Prime Ministerial instruction — is the conduct of a government that treats law enforcement as a personal resource. If confirmed publicly and on the record, it would be among the most serious abuses of executive power in recent Australian political history. It is on this record now.</p>
                </div>
            </div>

            <!-- Item 6: National Press Club / Pauline Hanson / David Sharaz -->
            <div class="story-chapter" style="border-left-color:rgba(193,68,14,0.4)">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot border border-hot/40 px-2 py-1">Civil Damages</span>
                    <span class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/20">National Press Club · David Sharaz</span>
                </div>
                <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">PAULINE HANSON'S SPEECH DISRUPTED.<br><span class="text-hot">NATIONAL PRESS CLUB PURSUING $40,000 IN DAMAGES.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The National Press Club — the venue that hosted Pauline Hanson's speech, which was interrupted by a GetUp board member — is now pursuing $40,000 in civil damages against <strong class="text-paper/65">David Sharaz</strong> for damage caused to the walls of the premises during the incident. The disruption, which attracted national media attention, has resulted in the Press Club seeking financial redress through civil proceedings for the physical damage to the venue.</p>
                <div class="border border-hot/15 p-4" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">The Record</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Pauline Hanson was mid-speech at the National Press Club when a GetUp board member disrupted proceedings</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">The disruption caused physical damage to the walls of the Press Club venue</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">The National Press Club is now pursuing David Sharaz for <strong class="text-hot">$40,000</strong> in civil damages</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Civil proceedings — not a criminal matter — the Press Club seeking compensation for the physical cost of the disruption</p></div>
                    </div>
                </div>
            </div>

            <!-- Item 7: James Ashby / Faruqi / Mosque recording -->
            <div class="story-chapter" style="border-left-color:rgba(193,68,14,0.4)">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot border border-hot/40 px-2 py-1">Recording Exists — James Ashby</span>
                    <span class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/20">Faruqi · Mosque · Cleric · Sharia</span>
                </div>
                <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">RECORDED IN A MOSQUE.<br><span class="text-hot">BEHEADINGS. BONDI. SHARIA. ALBANESE LOOKS AWAY.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">James Ashby has a recording made inside a mosque — capturing a cleric speaking in the presence of Senator Mehreen Faruqi. On that recording, the cleric states that white people should be beheaded and that the Jews <em>deserved everything they got</em> at the Bondi Beach massacre. Faruqi is recorded stating: <span class="font-display text-paper/65">"Sharia law will rule this country and all white people should be seen and not heard."</span></p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The recording is currently held by James Ashby. Anthony Albanese has been made aware of it — and has turned a blind eye. The conduct documented in the recording — a sitting senator, in a mosque, with a cleric endorsing sectarian violence and celebrating the murder of Jewish Australians — has not prompted any public response from the Prime Minister.</p>

                <div class="border border-hot/20 p-4 mb-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">What Is on the Recording</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Cleric states that white people should be beheaded</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Cleric states that Jews deserved everything they got at the Bondi Beach massacre</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Senator Faruqi recorded stating: "Sharia law will rule this country and all white people should be seen and not heard"</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Recording held by James Ashby — not yet released publicly</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Albanese informed — no action taken, no public statement made</p></div>
                    </div>
                </div>

                <div class="border border-paper/[0.08] p-4 mb-4" style="background:rgba(0,0,0,0.2)">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-paper/28 mb-2">Albanese's Pattern — Selective Blindness</div>
                    <p class="text-[0.62rem] text-paper/40 leading-relaxed">Anthony Albanese's non-response to material of this gravity is consistent with a documented pattern of turning a blind eye to conduct within Australia's Muslim communities when political calculation makes intervention inconvenient. A Prime Minister who was made aware that a sitting senator was present at a mosque where the beheading of white Australians and the celebration of Jewish deaths was recorded — and said nothing publicly — has made a political choice. That choice is on the record.</p>
                </div>

                <!-- Ashby secret meetings with Albanese -->
                <div class="border-l-4 border-gold/50 pl-5 py-1" style="background:rgba(201,138,16,0.06);padding:0.85rem 1rem 0.85rem 1.25rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-1">James Ashby — Secret Meetings with Albanese</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed">James Ashby — who holds the recording — has been conducting secret meetings with Anthony Albanese behind Pauline Hanson's back. Ashby is Hanson's chief of staff. The existence of back-channel contact between the Prime Minister's office and Hanson's most senior adviser — undisclosed to Hanson herself — is a significant political development in its own right. The recording, the meetings, and the Prime Minister's silence are all part of the same picture.</p>
                </div>
            </div>

            <!-- Item 8: King Charles III / Starmer resignation -->
            <div class="story-chapter" style="border-left-color:rgba(124,106,170,0.4)">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-[0.48rem] tracking-[0.22em] uppercase px-2 py-1" style="color:#7c6aaa;border:1px solid rgba(124,106,170,0.4)">United Kingdom</span>
                    <span class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/20">King Charles III · Keir Starmer · Henry Nowak</span>
                </div>
                <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">THE KING WALKED IN.<br><span style="color:#7c6aaa">STARMER RESIGNED — OR HE WOULD BE FIRED.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Prime Minister <strong class="text-paper/65">Keir Starmer</strong> has resigned. He did so after <strong class="text-paper/65">King Charles III</strong> walked in and told him to resign — or he would be fired. The King's intervention was direct and personal: stand down, or be removed.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The King acted after viewing the bodycam footage of <strong class="text-paper/65">UK police handcuffing a stabbed man, Henry Nowak</strong>. Having seen officers restrain a stabbing victim rather than aid him, the King regards the conduct as a <strong class="text-paper/65">national disgrace</strong>.</p>
                <div class="border-l-4 pl-5 py-1" style="border-color:rgba(124,106,170,0.5);background:rgba(124,106,170,0.06);padding:0.85rem 1rem 0.85rem 1.25rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-1" style="color:#7c6aaa">The King's Position</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed">A stabbed man handcuffed by the police sworn to protect him — captured on the officers' own bodycams — was, in the King's view, a national disgrace. The Sovereign's response was to require the resignation of the Prime Minister. It is on this record now.</p>
                </div>
            </div>

        </div>

        <!-- Stat strip -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mt-12 mb-2 reveal">
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-sage mb-1">PM</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Albanese</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">5 positions confirmed</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-gold mb-1">⚡</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Sovereign fuel</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Adam Watson's policy</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-hot mb-1">30</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Days — Miles plan</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Drop Adult Time Adult Crime</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-sage mb-1">↗</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Refugee Convention</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">PM backs withdrawal</div>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     QLD POLICE RECORD
══════════════════════════════════════ -->
<section id="record" class="py-16 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(201,138,16,0.04) 0%,transparent 60%)">
    <div class="max-w-4xl mx-auto reveal">
        <div class="flex items-center gap-3 mb-6"><div class="w-4 h-px bg-gold"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-gold">Full Record — Nothing to Hide</span></div>
        <h2 class="font-display leading-none tracking-wide mb-6" style="font-size:clamp(2rem,5vw,3.5rem)">MY FULL QLD POLICE RECORD.<br><span class="text-gold">PUBLISHED. EVERY CHARGE DROPPED OR DEFEATED.</span></h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
            <div>
                <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">In my viral video, I listed my Queensland Police Statement on camera — openly, without qualification. Most people accused of anything move to suppress their history. I published mine. I have nothing to hide. Every single charge in my QLD Police record has been either dropped by the prosecution or defeated at hearing. Not one has resulted in a conviction.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/50">I am actively fighting to have all documents about me released — police files, internal notes, everything. This record is the starting point. Read it. Judge the charges. Then look at what happened to them.</p>
            </div>
            <div class="space-y-3">
                <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">On the Record</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Disclosed voluntarily — in the viral video, on camera</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Every charge: dropped or defeated. Zero convictions.</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Fighting for full release of all documents held about me</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Transparency is the point — this is what accountability looks like</p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-l-4 border-gold/50 pl-5 mb-8" style="background:rgba(201,138,16,0.04);padding:1rem 1rem 1rem 1.25rem">
            <p class="font-serif italic text-paper/60 text-base leading-relaxed">"Most people fight to keep their police record hidden. I put mine on camera. The difference between me and the people documented on this site is simple: I have nothing to fear from transparency. They do."</p>
        </div>

        <!-- Embedded police record -->
        <div class="border border-gold/20 mb-6 overflow-hidden" style="background:rgba(201,138,16,0.02)">
            <div class="flex items-center justify-between px-5 py-3 border-b border-gold/10" style="background:rgba(201,138,16,0.04)">
                <div class="flex items-center gap-2">
                    <span class="text-[0.48rem] tracking-[0.22em] uppercase text-gold">Queensland Person History · Full Police Record</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/30">All charges dropped or defeated · Zero convictions</span>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/qld_person_history+copy.pdf" target="_blank" rel="noopener" class="text-[0.44rem] tracking-[0.14em] uppercase text-gold border border-gold/30 px-2 py-0.5 hover:bg-gold/10 transition-colors">Open PDF ↗</a>
                </div>
            </div>
            <iframe
                src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/qld_person_history+copy.pdf"
                width="100%"
                height="860"
                style="display:block;border:none;background:#fff"
                title="Queensland Person History — Adam Watson Full Police Record"
                loading="lazy"
            ></iframe>
        </div>

        <div class="evidence-vault">
            <div class="ev-header" onclick="toggleVault(this)">
                <div class="flex items-center gap-2">
                    <span class="text-[0.48rem] tracking-[0.22em] uppercase text-gold">📁 Evidence Files</span>
                    <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Queensland Person History · Full Police Record</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span>
                    <span class="ev-toggle">▼</span>
                </div>
            </div>
            <div class="ev-body">
                <div class="ev-file ef-gold" onclick="openMV('pdf-qld-person-history')">
                    <div class="ev-icon ev-pdf">PDF</div>
                    <div class="ev-meta">
                        <div class="ev-name">qld_person_history.pdf</div>
                        <div class="ev-desc">PDF · Queensland Person History · Full QLD Police Record · All charges dropped or defeated · Zero convictions</div>
                    </div>
                    <span class="ev-cta">View →</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     SANDY TULISI / MY STORY SECTION
══════════════════════════════════════ -->
<section id="story" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.03) 0%,transparent 40%)">
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
                    <span class="evidence-tag text-hot" style="color:#c1440e">📄 Documents Verified</span>
                    <span class="evidence-tag text-gold" style="color:#c98a10">⚖ Charges Dropped</span>
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

        <!-- Sandy Tulisi profile -->
        <div class="grid grid-cols-1 md:grid-cols-[200px_1fr] gap-8 mb-10 reveal">
            <div>
                <div class="w-full border border-paper/[0.07] overflow-hidden" style="aspect-ratio:2/3">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/sandy_photo.jpg" alt="Sandy Tulisi" class="w-full h-full object-cover object-top" />
                </div>
                <div class="text-[0.45rem] text-paper/20 mt-2 leading-relaxed">Sandy Tulisi / Sandy Park · BeHome · Surfers Paradise</div>
            </div>
            <div>
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Subject — Episode 1</div>
                <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">SANDY TULISI.<br><span class="text-hot">AKA SANDY PARK.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Sandy Tulisi — also known as Sandy Park — operated BeHome rooming accommodation in Surfers Paradise under the company Appel Street Pty Ltd. She also operated SOLAC HOUSE. The properties ran at high density, reportedly housing up to 100 tenants.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">After signing a Form R18 rooming accommodation agreement, she issued six false rent-overdue notices (all rent was paid on time), held the bond for 68 days past the legal limit of 10, and invoiced a $20 fee for a cup. She obtained a police banning notice to enforce a civil tenancy dispute. All charges she initiated were subsequently dropped in full. Not a single one was upheld.</p>
            </div>
        </div>

        <!-- Story chapters — single column -->
        <div class="space-y-16">

                <!-- Chapter 1: The Room -->
                <div id="s-ch1" class="story-chapter reveal">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter 01</span><span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Rental Crisis</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE GOLD COAST DREAM<br><span class="text-hot">AND THE REALITY</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">"The Gold Coast looks like a dream. That's the whole point of it. What nobody tells you is that behind that strip — literally around the corner — there are people sleeping rough, rooming houses packed with 100 tenants, and landlords who've figured out the rules don't really apply to them if they're clever about it."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">In August 2023 I was looking for a room in Surfers Paradise. Rent: $290 a week. A rooming accommodation agreement — Form R18 — was signed and I moved in on <strong class="text-paper/70">18 August 2023</strong>. The landlord was Sandy Tulisi, operating under the name BeHome.</p>

                    <!-- Rooming agreement callout -->
                    <div class="border border-gold/20 p-5 mb-6" style="background:rgba(201,138,16,0.03)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">What the Rooming Agreement Proves</div>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The signed rooming agreement — now uploaded — confirms the start date of <strong class="text-paper/65">18/8/23</strong> and contains a clause stating that after two months the tenancy becomes <strong class="text-paper/65">periodic</strong>. Two months from 18 August is 18 October 2023.</p>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">That is the same window — September and October 2023 — in which Sandy Tulisi issued six false rent-overdue notices and ultimately pursued eviction. By the time the Police Banning Notice was applied, the tenancy had already transitioned to a periodic agreement, carrying different protections under the <em>Residential Tenancies and Rooming Accommodation Act 2008</em> (Qld). A periodic tenant cannot be evicted on the same grounds as a fixed-term tenant. She was attempting to apply fixed-term eviction mechanics to a tenancy that had already become periodic.</p>
                        <div class="grid grid-cols-3 gap-3 mt-4">
                            <div class="border border-gold/20 p-3 text-center" style="background:rgba(201,138,16,0.02)"><div class="text-[0.45rem] tracking-[0.12em] uppercase text-gold/60 mb-1">Agreement Start</div><div class="font-display text-base text-gold">18/8/23</div></div>
                            <div class="border border-gold/20 p-3 text-center" style="background:rgba(201,138,16,0.02)"><div class="text-[0.45rem] tracking-[0.12em] uppercase text-gold/60 mb-1">Becomes Periodic</div><div class="font-display text-base text-gold">18/10/23</div></div>
                            <div class="border border-hot/20 p-3 text-center" style="background:rgba(193,68,14,0.02)"><div class="text-[0.45rem] tracking-[0.12em] uppercase text-hot/60 mb-1">Eviction Attempted</div><div class="font-display text-base text-hot">Oct 2023</div></div>
                        </div>
                    </div>

                    <!-- Notice to Leave — inline portrait display -->
                    <div class="reveal mb-8">
                        <div class="border border-hot/25" style="background:rgba(193,68,14,0.03)">
                            <div class="px-5 py-3 border-b border-hot/15">
                                <span class="text-[0.45rem] tracking-[0.2em] uppercase text-hot">Primary Source · Queensland RTA · Official Document · Issued Oct 2023 · Appel Street Pty Ltd</span>
                            </div>
                            <!-- Portrait PDF -->
                            <div class="p-4">
                                <div class="mx-auto border border-hot/20 overflow-hidden" style="max-width:340px">
                                    <iframe src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/notice_to_leave.pdf" class="w-full" style="height:480px;border:none;display:block" title="Notice to Leave — RTA"></iframe>
                                    <div class="px-3 py-2 border-t border-hot/15 text-center" style="background:rgba(193,68,14,0.08)">
                                        <div class="text-[0.43rem] tracking-[0.12em] uppercase text-hot/70">Notice to Leave · "Serious Breach" · No Breach on Record</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Callout -->
                            <div class="px-6 pb-6">
                                <h4 class="font-display text-xl tracking-wide mb-4 leading-tight">NOTICE TO LEAVE.<br><span class="text-hot">ISSUED UNDER "SERIOUS BREACH" — WITH NO BREACH ON RECORD.</span></h4>
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-4">
                                    <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.03)">
                                        <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot/60 mb-1.5">Issuing Entity</div>
                                        <div class="text-[0.6rem] text-paper/55 leading-relaxed">Signed by <strong class="text-paper/75">Appel Street Pty Ltd</strong> — not BeHome, not Sandy Tulisi. A fourth entity name appearing on the most consequential document in the dispute, designed to make the operation as difficult to trace as possible.</div>
                                    </div>
                                    <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.03)">
                                        <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot/60 mb-1.5">The "Serious Breach"</div>
                                        <div class="text-[0.6rem] text-paper/55 leading-relaxed">Not documented anywhere. No supporting email. No complaint from any housemate. The notice is built entirely on six false rent-overdue notices — rent that was paid on time, every time, as confirmed by bank records.</div>
                                    </div>
                                    <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.03)">
                                        <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot/60 mb-1.5">The Impossible Charge</div>
                                        <div class="text-[0.6rem] text-paper/55 leading-relaxed">Notice expired <strong class="text-paper/75">5pm 24 Oct</strong>. The Contravene Banning Notice charge was issued <strong class="text-paper/75">23 Oct</strong> — one full day before the notice expired. You cannot contravene a notice that has not yet expired.</div>
                                    </div>
                                </div>
                                <div class="border border-hot/30 px-5 py-4" style="background:rgba(193,68,14,0.06)">
                                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">How This Document Was Used Against Me</div>
                                    <p class="text-[0.68rem] text-paper/50 leading-relaxed">This Notice to Leave — built on fabricated overdue notices, citing an undocumented breach, issued by an entity name designed to obscure accountability — was presented to police to justify issuing <strong class="text-paper/70">Police Banning Notice No. 385003</strong> in what was a civil tenancy dispute. Not a criminal matter. The resulting charge was logically impossible: the accused was charged with contravening a notice before the notice had expired. <strong class="text-paper/70">All charges were subsequently dropped in full.</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- EVIDENCE VAULT: Sandy Tulisi -->
                    <div class="evidence-vault">
                        <div class="ev-header" onclick="toggleVault(this)">
                            <div class="flex items-center gap-2">
                                <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Sandy Tulisi · Rooming House</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">2 files</span>
                                <span class="ev-toggle">▼</span>
                            </div>
                        </div>
                        <div class="ev-body">
                            <!-- File 1: Rooming Agreement PDF -->
                            <div class="ev-file ef-gold" onclick="openMV('pdf','ROOMING ACCOMMODATION AGREEMENT — FORM R18','Signed rooming agreement — start date 18/8/23 — periodic clause after 2 months','PDF Document · Form R18 · Signed August 2023','rooming_agreement.pdf','Signed rooming accommodation agreement (Form R18) for the BeHome property in Surfers Paradise. Start date: 18 August 2023. Rent: $290/week. Contains the clause stating the tenancy becomes periodic after two months — i.e. from 18 October 2023. The eviction campaign began in September/October 2023, by which point the tenancy had transitioned to periodic status under the RTRA Act 2008 (Qld), carrying additional protections Sandy Tulisi did not account for in her eviction strategy.','pdf-rooming-agreement')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">rooming_agreement.pdf</div>
                                    <div class="ev-desc">PDF · Form R18 · Start 18/8/23 · Periodic after 2 months · Signed</div>
                                </div>
                                <span class="redact-tag" style="background:rgba(201,138,16,0.12);border-color:rgba(201,138,16,0.3);color:#c98a10">📋 Signed Agreement</span>
                                <span class="ev-cta ml-2">View →</span>
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
                            <!-- ZIP Download -->
                            <div class="ev-zip-bar">
                                <span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">Download files</span>
                                <button class="mv-dl-btn mv-dl-gold text-[0.48rem]" onclick="downloadZip('sandy_tulisi_evidence.zip')">⬇ ZIP Bundle</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chapter 2-5 condensed but with evidence vaults -->
                <div id="s-ch2" class="story-chapter reveal" style="transition-delay:0.1s">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Chapter 02</span><span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Regulatory Failure</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">SANDY TULISI.<br><span class="text-gold">OR SANDY PARK. DEPENDS WHO'S ASKING.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">"Google the address. You get BeHome. Serve a subpoena, the eviction notice says Appel Street Pty Ltd. Marc Barrow writes SOLAC HOUSE in his QP-9 charge sheet. Every official document uses a different name. Same property. Same landlord. Maximum legal ambiguity."</p>
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

                    <!-- Appel Street / entity obfuscation -->
                    <div class="border-l-4 pl-5 mt-6" style="border-color:rgba(201,138,16,0.5);background:rgba(201,138,16,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">Four Entity Names. One Property. Maximum Ambiguity.</div>
                        <h4 class="font-display text-lg tracking-wide text-gold mb-3">THE NOTICE TO LEAVE IS ISSUED BY "APPEL STREET PTY LTD".<br><span class="text-paper/55">THE RTA'S OWN EMAIL CALLS IT "BEHOME".</span></h4>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The Notice to Leave — the formal legal document used to evict me — lists the issuing entity as <strong class="text-paper/70">Appel Street Pty Ltd</strong>. Not BeHome. Not SOLAC HOUSE. Not Sandy Tulisi or Sandy Park. A fourth entity name, appearing on the most consequential document in the entire dispute, making it as difficult as possible to trace what is happening to whom.</p>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">The RTA's own email — reproduced in the police correspondence — refers to the entity as BeHome. So the regulator uses one name, the eviction notice uses another, and the arresting officer wrote a third in his charge sheet. Each official document in this chain references a different legal identity. Any attempt to link the conduct to a single responsible party requires navigating between Sandy Tulisi, Sandy Park, BeHome, Appel Street Pty Ltd, and SOLAC HOUSE — all of which point back to the same property, the same operation, and the same person.</p>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                            <div class="border border-paper/[0.07] p-3 text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-gold/60 mb-1">Person</div><div class="text-[0.6rem] text-paper/50">Sandy Tulisi<br><span class="text-paper/30">/ Sandy Park</span></div></div>
                            <div class="border border-paper/[0.07] p-3 text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-gold/60 mb-1">Trading Name</div><div class="text-[0.6rem] text-paper/50">BeHome</div></div>
                            <div class="border border-paper/[0.07] p-3 text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-gold/60 mb-1">Eviction Notice</div><div class="text-[0.6rem] text-paper/50">Appel Street<br>Pty Ltd</div></div>
                            <div class="border border-paper/[0.07] p-3 text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-gold/60 mb-1">QP-9 Charge Sheet</div><div class="text-[0.6rem] text-paper/50">SOLAC HOUSE<br><span class="text-paper/30">(Barrow)</span></div></div>
                        </div>
                    </div>
                </div>

                <div id="s-ch3" class="story-chapter reveal" style="transition-delay:0.15s">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter 03</span><span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Tenant Harassment</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">FINES FOR LEAVING BOWLS.<br><span class="text-hot">SIX FALSE RENT NOTICES.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">"The fine wasn't for not washing a bowl. It was for leaving one. The photo they emailed was literally named 'Kosta Bowl left'. A bowl that was left somewhere. Tax invoiced. Twice."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Between September and October 2023 I received six emails falsely claiming rent was overdue. Bank records confirm every payment was made on time. An SMS from Sandy's personal mobile (0411 752 285) then threatened eviction based on a fabricated 13-day arrear.</p>
                    <div class="border border-paper/[0.07] p-5 mb-4">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-4">Harassment Timeline — Sep/Oct 2023</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">18 Sep</span><span class="text-[0.65rem] text-paper/45">Email: rent claimed overdue. Rent was paid.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">23 Sep</span><span class="text-[0.65rem] text-paper/45">Email: rent claimed overdue again. Rent was paid.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">7 Oct</span><span class="text-[0.65rem] text-paper/45">Email: overdue notice. Rent was paid.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">14 Oct</span><span class="text-[0.65rem] text-paper/45">Email: overdue notice. Rent was paid.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">22 Oct</span><span class="text-[0.65rem] text-paper/45">Tax invoice issued — bowl left. Photo named "Kosta Bowl left". Issued by Appel Street Pty Ltd.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-16 shrink-0 pt-0.5">23 Oct</span><span class="text-[0.65rem] text-paper/45">SMS: 13-day arrear claimed. Eviction threatened. Rent was paid.</span></div>
                        </div>
                    </div>

                    <!-- Bowl fines callout -->
                    <div class="border-l-4 border-hot/40 pl-5 mb-5" style="background:rgba(193,68,14,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">The Invoice. For a Bowl. That Was Left Somewhere.</div>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">The fine was not for failing to wash a bowl. It was not for damaging anything. The photo used to justify the invoice was emailed with the filename <strong class="text-paper/70">"Kosta Bowl left"</strong> — meaning the entire basis for the fine was that a bowl had been placed somewhere and not immediately moved. A tax invoice was issued for this. Then a second invoice was issued. Both are published below.</p>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed">Neither fine appeared in the formal bond deduction statement subsequently submitted to the RTA — the document that legally sets out what money is being withheld from a tenant's bond. If these fines were legitimate deductions, they would have been in that statement. They were not. That omission is the landlord acknowledging, in their own paperwork, that these charges were indefensible.</p>
                    </div>

                    <!-- Bowl evidence vault -->
                    <div class="evidence-vault">
                        <div class="ev-header" onclick="toggleVault(this)">
                            <div class="flex items-center gap-2">
                                <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Bowl Fines · Appel Street Pty Ltd · Invoices &amp; Photos</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">4 files</span>
                                <span class="ev-toggle">▼</span>
                            </div>
                        </div>
                        <div class="ev-body">
                            <div class="ev-file ef-gold" onclick="openMV('image-bowl-left')">
                                <div class="ev-icon ev-img">📷</div>
                                <div class="ev-meta">
                                    <div class="ev-name">Kosta Bowl left.jpg — Photo sent by landlord</div>
                                    <div class="ev-desc">Image · Filename: "Kosta Bowl left" · The entire basis for Invoice #1202 — a bowl placed somewhere</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <div class="ev-file ef-gold" onclick="openMV('image-bowl-yellow')">
                                <div class="ev-icon ev-img">📷</div>
                                <div class="ev-meta">
                                    <div class="ev-name">Kosta Yellow bowl.jpg — Second bowl photo</div>
                                    <div class="ev-desc">Image · Second bowl photo used to justify Invoice #1241 — a yellow bowl left somewhere</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <div class="ev-file ef-hot" onclick="openMV('pdf-invoice-1202')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">Invoice # 1202.pdf — Appel Street Pty Ltd</div>
                                    <div class="ev-desc">PDF · Tax invoice · Fine for leaving a bowl · Appel Street Pty Ltd · Not included in RTA bond deduction statement</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <div class="ev-file ef-hot" onclick="openMV('pdf-invoice-1241')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">Invoice # 1241.pdf — Appel Street Pty Ltd</div>
                                    <div class="ev-desc">PDF · Tax invoice · Second bowl fine · Appel Street Pty Ltd · Not included in RTA bond deduction statement</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="s-ch4" class="story-chapter reveal" style="transition-delay:0.2s">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter 04</span><span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Unlawful Eviction</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">POLICE AT THE DOOR.<br><span class="text-hot">NOWHERE TO SLEEP.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">"They called the police. And they showed them an eviction notice. An invalid one. Built on the fake breach notices. A Police Banning Notice — No. 385003 — was applied. The kind designed for alcohol and drug incidents at licensed venues."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">I was arrested. Charged with Contravening a Banning Notice. My belongings were removed. I was evicted without due process. I was homeless that night.</p>

                    <!-- Timeline contradiction -->
                    <div class="border border-hot/30 p-5 mb-5" style="background:rgba(193,68,14,0.05)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-4">The Timeline That Should Not Be Possible</div>
                        <div class="space-y-3 mb-5">
                            <div class="flex gap-4 items-start border-b border-paper/[0.06] pb-3">
                                <span class="text-[0.62rem] text-hot/70 w-20 shrink-0 font-display tracking-wide pt-0.5">23/10/23</span>
                                <div>
                                    <div class="text-[0.62rem] text-paper/65 mb-0.5">Contravene Banning Notice charge issued — Queensland Person History, page 9</div>
                                    <div class="text-[0.55rem] text-paper/35 leading-relaxed">Marc Barrow applied Police Banning Notice No. 385003 and issued the charge on this date. The charge is recorded in the Queensland Person History, confirmed in the police correspondence at page 9.</div>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <span class="text-[0.62rem] text-gold/70 w-20 shrink-0 font-display tracking-wide pt-0.5">24/10/23</span>
                                <div>
                                    <div class="text-[0.62rem] text-paper/65 mb-0.5">Notice to Leave — resident must vacate by 5:00pm</div>
                                    <div class="text-[0.55rem] text-paper/35 leading-relaxed">The formal Notice to Leave, issued under the RTA, states the resident must vacate the property by 5pm on this date — the day after the charge was already laid.</div>
                                </div>
                            </div>
                        </div>
                        <div class="border-l-2 border-hot pl-4">
                            <p class="text-[0.62rem] text-paper/55 leading-relaxed">The charge of <em>contravening</em> the Notice to Leave was issued on 23 October. The Notice to Leave itself did not expire until 5pm on 24 October. You cannot contravene a notice that has not yet required you to leave. The charge was applied before any breach was legally possible.</p>
                        </div>
                    </div>

                    <!-- Serious Breach with no evidence -->
                    <div class="border-l-4 pl-5 mb-2" style="border-color:rgba(124,106,170,0.5);background:rgba(124,106,170,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">Serious Breach — No Email. No Complaints. No Explanation.</div>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">The Notice to Leave was issued under the category of <strong class="text-paper/70">Serious Breach</strong>. There is no email documenting what the serious breach was. There are no complaints from any housemates. The Public Nuisance incident — itself disputed — occurred after the Notice to Leave was already issued, meaning it could not have been the basis for it. The "serious breach" cited to justify removing a person from their home has no paper trail because no breach occurred.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mt-3">
                            <div class="border border-paper/[0.07] p-3 text-center">
                                <div class="font-display text-xl mb-1" style="color:#7c6aaa">0</div>
                                <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/30">Emails about breach</div>
                            </div>
                            <div class="border border-paper/[0.07] p-3 text-center">
                                <div class="font-display text-xl mb-1" style="color:#7c6aaa">0</div>
                                <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/30">Housemate complaints</div>
                            </div>
                            <div class="border border-paper/[0.07] p-3 text-center">
                                <div class="font-display text-xl text-hot mb-1">1</div>
                                <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/30">Charge before deadline</div>
                            </div>
                        </div>
                    </div>
                    <!-- SOLAC HOUSE obfuscation -->
                    <div class="border-l-4 pl-5 mt-5" style="border-color:rgba(124,106,170,0.5);background:rgba(124,106,170,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">Barrow's Statement — "SOLAC HOUSE" · Deliberate Obfuscation</div>
                        <h4 class="font-display text-lg tracking-wide mb-3 leading-tight" style="color:#7c6aaa">HE WROTE "SOLAC HOUSE".<br><span class="text-paper/55">THE SIGN ON THE BUILDING SAYS "BEHOME".</span></h4>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">In his official statement, Marc Barrow refers to the property he evicted me from as <strong class="text-paper/70">"SOLAC HOUSE"</strong> — not BeHome. BeHome is the trading name. It is on the building. It is how the property is marketed and found. SOLAC HOUSE is the entity registered with the RTA — a name that the average person would not associate with the premises, and which the police officer documenting the eviction would have seen labelled as something entirely different when he arrived.</p>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">The choice to write "SOLAC HOUSE" in an official police statement is not a clerical error. It is the use of the obscured legal entity rather than the visible trading name — precisely the split identity that Sandy Tulisi maintained to create legal ambiguity. By using "SOLAC HOUSE" in his statement, Barrow insulates himself from any direct association with BeHome: he can claim he simply documented what he was told, without needing to acknowledge the BeHome signage on the building in front of him.</p>
                        <div class="border border-paper/[0.08] p-3 mt-3" style="background:rgba(12,8,4,0.35)">
                            <div class="flex gap-4 items-start">
                                <div class="text-center shrink-0">
                                    <div class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/25 mb-1">Written in statement</div>
                                    <div class="font-display text-base" style="color:#7c6aaa">"SOLAC HOUSE"</div>
                                </div>
                                <div class="text-paper/20 text-xl self-center">≠</div>
                                <div class="text-center shrink-0">
                                    <div class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/25 mb-1">Sign on the building</div>
                                    <div class="font-display text-base text-gold">"BEHOME"</div>
                                </div>
                                <div class="flex-1 border-l border-paper/[0.07] pl-4">
                                    <div class="text-[0.52rem] text-paper/35 leading-relaxed">One is the obscured RTA legal entity. One is what you see when you walk up to the front door. A sworn police officer on the premises chose to record the former.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Chapter 05</span><span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Legal Outcome</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE LAWYER.<br><span class="text-gold">CHARGES DROPPED.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">"He's a lawyer. Not a community legal centre lawyer. He took my case pro bono. The Contravene Banning Notice charge was subsequently dropped in full."</p>
                    <div class="border border-sage/30 bg-sage/[0.04] p-6 mb-5">
                        <div class="flex items-start gap-4"><div class="font-display text-6xl text-sage/30 leading-none">✓</div><div><div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-2">Legal Outcome</div><div class="font-display text-2xl tracking-wide text-sage mb-2">ALL CHARGES DROPPED</div><p class="text-[0.68rem] text-paper/40 leading-relaxed">Contravene Banning Notice charge — fully resolved. No conviction. No penalty.</p></div></div>
                    </div>

                    <!-- Marc Barrow portrait -->
                    <div class="reveal mb-5">
                        <div class="mx-auto border border-paper/[0.07] overflow-hidden" style="max-width:340px">
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/marc_barrow.jpg" alt="Marc Barrow — Queensland Police Service" class="w-full object-cover object-center" loading="lazy" />
                            <div class="px-4 py-2 border-t border-paper/[0.06]" style="background:rgba(0,0,0,0.25)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-paper/35">Marc Barrow · Queensland Police Service · Police Banning Notice No. 385003</div>
                            </div>
                        </div>
                    </div>

                    <!-- Marc Barrow retaliation -->
                    <div class="border-l-4 border-hot/40 pl-5 mb-4" style="background:rgba(193,68,14,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Retaliation — Marc Barrow · CCC Report Filed</div>
                        <h4 class="font-display text-lg tracking-wide text-hot mb-3">THE OFFICER WHO FILED THE CHARGE RETALIATED WHEN A CCC REPORT WAS MADE AGAINST HIM.</h4>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The officer who placed the Contravene Banning Notice charge — Marc Barrow — was the subject of a Crime and Corruption Commission report filed by Kosta Kondratenko. In response, Barrow contacted Adam Watson directly to inform him that he would be opposing the liquor licence application on Adam's planned purchase of the Platinum and Empire nightclubs in Surfers Paradise — two venues owned by the same person. The message was clear: associating with Kosta Kondratenko carries a penalty.</p>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Corey Cook, the prosecutor, was contacted about the phone call. Cook agreed it was overreach by Barrow — once again — and contacted Marc Barrow's supervisor to ask him to stop targeting Adam Watson. There was no anti-social behaviour on Adam's part that could justify the opposition. There was nothing to oppose on the merits. It was an officer using his position to punish an innocent third party because of who that person associated with.</p>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed">This incident illustrates two systemic failures simultaneously: members of Queensland Police are permitted to pick on the homeless and on those connected to critics of the force — and face no repercussions. And the Crime and Corruption Commission, to whom the original report was made, provides no meaningful deterrent to that behaviour.</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-2">
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">The Retaliation</div>
                            <div class="space-y-1.5">
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">CCC report filed on Marc Barrow by Kosta Kondratenko</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Barrow contacts Adam Watson — threatens to oppose Platinum &amp; Empire nightclub liquor licence</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">No anti-social behaviour by Adam — no legitimate basis for opposition</p></div>
                            </div>
                        </div>
                        <div class="border border-sage/20 p-4" style="background:rgba(61,122,74,0.03)">
                            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-2">The Intervention</div>
                            <div class="space-y-1.5">
                                <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Prosecutor Corey Cook contacted about the call</p></div>
                                <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Cook agrees: overreach by Barrow</p></div>
                                <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Cook contacts Barrow's supervisor — asks him to stop targeting Adam Watson</p></div>
                            </div>
                        </div>
                    </div>
                    <!-- Barrow blind eye threat -->
                    <div class="border-l-4 border-hot/50 pl-5 mt-4" style="background:rgba(193,68,14,0.06);padding:1rem 1rem 1rem 1.25rem">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Further Retaliation — Threat Against Kosta's Life</div>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed">Marc Barrow made a comment to Adam Watson that if RJ stabs Kosta to death, he will turn a blind eye. Adam Watson relayed this to Kosta. A sworn officer of Queensland Police stated to a third party that he would ignore the murder of a named individual by a named associate. This is not a figure of speech. It is a threat communicated via an intermediary, and it has been documented accordingly.</p>
                    </div>

                    <!-- Internal QPS complaint — female officer -->
                    <div class="border border-hot/40 p-5 mt-4" style="background:rgba(193,68,14,0.07)">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">Internal Complaint — Female QPS Officer · Against Marc Barrow</span>
                            <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-hot/40 text-hot/70 px-1.5 py-0.5">ON THE RECORD</span>
                        </div>
                        <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">A COMPLAINT HAS BEEN MADE AGAINST MARC BARROW<br><span class="text-hot">BY A FEMALE MEMBER OF THE QUEENSLAND POLICE SERVICE.</span></h4>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed">Marc Barrow is the subject of a formal complaint made against him by a female member of the Queensland Police Service. This is not a complaint from a member of the public — it originates from within the QPS itself, from a colleague. The nature of that complaint is known to this publication and is consistent with the broader pattern of conduct documented across this section.</p>
                    </div>

                    <!-- CCC Response -->
                    <div class="border-l-4 pl-5 mt-5 mb-2" style="border-color:rgba(61,122,74,0.4);background:rgba(61,122,74,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-2">Crime and Corruption Commission — Response to Marc Barrow Report</div>
                        <h4 class="font-display text-lg tracking-wide text-sage mb-3">"WE ONLY DEAL WITH THE MOST SERIOUS AND SYSTEMIC CASES."<br><span class="text-paper/55">REFERRED BACK TO QUEENSLAND POLICE SERVICE.</span></h4>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The Crime and Corruption Commission was notified of Marc Barrow's conduct. Their response: they only deal with the most serious and systemic cases of corruption, and the matter was referred back to the Queensland Police Service — the same body the report was made about.</p>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The CCC had access to all of the following at the time of the referral: a charge issued the day before the notice expired; a property deliberately misclassified as a hostel in official documents; items removed from the premises without a warrant of possession; retaliation against a third party (Adam Watson) over the CCC report itself; a sworn officer communicating through an intermediary that he would ignore the murder of a named person by a named associate. They referred it back to QPS.</p>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed">The purpose of the Crime and Corruption Commission is to act when Queensland Police cannot or will not hold themselves accountable. When the oversight body receives a complaint, reviews the material, and sends it back to the institution being complained about — the institution has not been scrutinised. It has been protected. This is not a failure of process. It is the process working exactly as those who benefit from it intend.</p>
                    </div>

                    <!-- ESC Outcome -->
                    <div class="border-l-4 pl-5 mt-4 mb-4" style="border-color:rgba(193,68,14,0.45);background:rgba(193,68,14,0.05);padding:1.1rem 1rem 1.1rem 1.25rem">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">QPS Ethical Standards Command — ESC Outcome · COM-24-00427</div>
                        <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">THEY REVIEWED THE BWC FOOTAGE.<br><span class="text-hot">THEY WON'T RELEASE IT.</span></h4>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">When the CCC referred the complaint, it was forwarded to the QPS Ethical Standards Command. The ESC reviewed the Body Worn Camera footage from the eviction and, on 18 June 2024, Inspector C A Sanderson issued a formal outcome letter under reference COM-24-00427. The finding: force was not excessive, officers' actions were lawful and reasonable, no misconduct was found.</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">Following the outcome letter, a request was made to the ESC for the BWC footage to be provided — particularly after the Public Nuisance charge was dropped by the Magistrate. The ESC declined to provide the footage. The request was redirected to the QPS Right to Information Unit. The footage has not been released.</p>
                        <div class="border border-hot/20 p-4 mb-3" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">The Disputed Finding — Entry Without Warrant of Possession</div>
                            <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">The ESC outcome letter explicitly references the allegation that Marc Barrow entered the BeHome property without a Warrant of Possession. The ESC found this to be lawful. This publication disputes that finding. The position here is straightforward: Barrow viewed the Notice to Leave — a notice to a tenant, not a court order authorising physical removal. A Notice to Leave and a Warrant of Possession are not the same instrument. Only a Warrant of Possession authorises the removal of a tenant from licensed rooming accommodation under Queensland law. Barrow had one. He did not have the other.</p>
                            <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">What the BWC footage will show — if it is ever released — is the following: Marc Barrow entering the BeHome property without a Warrant of Possession; removing Kosta Kondratenko's belongings from the premises; and then coming to the paddy wagon to ask whether the laptop was his. That is what occurred during the Public Nuisance charge. These events are not in dispute. They happened. The BWC exists. The ESC has reviewed it. It has not been released.</p>
                            <div class="border border-paper/[0.06] p-3" style="background:rgba(245,234,212,0.02)">
                                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/35 mb-2">To Queensland Police Service</div>
                                <p class="text-[0.62rem] text-paper/45 leading-relaxed italic">If the QPS wish to dispute the account of what occurred at the BeHome property on the night of the eviction — release the Body Worn Camera footage. It will show what happened. This publication will publish it in full.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Marc Barrow Evidence Vault -->
                    <div class="evidence-vault mt-6">
                        <div class="ev-header" onclick="toggleVault(this)">
                            <div class="flex items-center gap-2">
                                <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Marc Barrow · CCC · Charge Sheet · Unlawful Eviction</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">5 files</span>
                                <span class="ev-toggle">▼</span>
                            </div>
                        </div>
                        <div class="ev-body">
                            <!-- Contravene Banning Notice charge sheet -->
                            <div class="ev-file ef-hot" onclick="openMV('pdf-qp-charge-sheet')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">qp_contravene_move_on_direction.pdf — QP Charge Sheet · Marc Barrow</div>
                                    <div class="ev-desc">PDF · Contravene Banning Notice charge sheet · Barrow writes "SOLAC HOUSE" not "BeHome" · Deliberate use of obscured RTA entity to create plausible deniability</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <!-- CCC response email -->
                            <div class="ev-file ef-sage" onclick="openMV('pdf-ccc-marc-barrow')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">crime_commission_marc_barrow.pdf — CCC Response</div>
                                    <div class="ev-desc">PDF · Crime and Corruption Commission · "Most serious and systemic cases only" · Matter referred back to QPS · Institutional failure documented</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <!-- Public Nuisance charge -->
                            <div class="ev-file ef-hot" onclick="openMV('pdf-public-nuisance-charge')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">public_nuisance_charge.pdf — QP Charge Sheet · Marc Barrow</div>
                                    <div class="ev-desc">PDF · Public Nuisance charge · Property misclassified as hostel · Invalid trespass threat · Items removed without warrant · Charge escalated through post · Dropped by Judge</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <!-- ESC Outcome email thread -->
                            <div class="ev-file ef-hot" onclick="openMV('pdf-esc-outcome-letter')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">OUTCOME-LETTER.pdf — ESC Email Thread · BWC Request Redirected</div>
                                    <div class="ev-desc">PDF · QPS Ethical Standards Command · Email thread 18 Jun – 4 Jul 2024 · BWC footage request redirected to Right to Information Unit</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <!-- ESC formal outcome letter -->
                            <div class="ev-file ef-hot" onclick="openMV('pdf-esc-complaint-letter')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">COM-24-00427 CP KONDRATENKO.pdf — Formal ESC Outcome Letter</div>
                                    <div class="ev-desc">PDF · COM-24-00427 · Inspector C A Sanderson · 18 June 2024 · BWC reviewed · No misconduct found · Entry without WoP disputed by this publication</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chapter 06 -->
                <div id="s-ch6" class="story-chapter reveal" style="transition-delay:0.3s;border-left-color:rgba(193,68,14,0.3)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter 06</span><span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">The Confrontation</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">PERSONAL SECURITY.<br><span class="text-hot">IN UNIFORM. ON THE PUBLIC PAYROLL.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">"I told his second-in-command that nobody in that building is paying bonds. He looked me in the eye and said: 'You don't know what you're talking about.' The RTA confirmed 68 days later that bond number 714284215 had just been lodged. He knew. He just chose not to."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">During the confrontation with Marc Barrow and his second-in-command, the bond non-compliance at BeHome was raised directly. The officer's response — <strong class="text-paper/70">"You don't know what you're talking about"</strong> — was not a factual denial. It was a dismissal designed to end the conversation. The RTA subsequently confirmed the bond had been sitting outside the scheme for 68 days. The officer was not uninformed. He was unwilling.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">What the video documents is not simply a heated exchange. It is a pattern of behaviour: officers attending a licensed rooming accommodation in a professional capacity, not to protect tenants or enforce the law, but to act as the operational extension of the landlord's authority. Tenants — most of whom have no knowledge of their rights under the Residential Tenancies and Rooming Accommodation Act — were being evicted on police direction without warrants of possession. That is not a police function. That is a private enforcement service, delivered in uniform, funded by the public.</p>

                    <!-- Gaslighting callout -->
                    <div class="border-l-4 border-hot/50 pl-5 mb-5" style="background:rgba(193,68,14,0.06);padding:1.1rem 1rem 1.1rem 1.25rem">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Gaslighting On Record</div>
                        <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">"YOU DON'T KNOW WHAT YOU'RE TALKING ABOUT."<br><span class="text-hot/70 text-lg">— MARC BARROW'S SECOND-IN-COMMAND</span></h4>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">The comment was made in direct response to the claim that no tenants at BeHome were having their bonds lodged within the legal 10-day requirement. It is the classic gaslighting structure: the person with information is told by the authority figure that their information is wrong — not with evidence, but with confidence. The authority's certainty is meant to replace the facts.</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed">The RTA documentation, published in this section, establishes that bond 714284215 was lodged 68 days after move-in. The legal maximum is 10. The officer had no factual basis for his dismissal. He had presence of mind to dismiss it anyway. This is the conversation captured on video.</p>
                    </div>

                    <!-- Personal security / kickback allegation -->
                    <div class="border-l-4 border-gold/40 pl-5 mb-5" style="background:rgba(201,138,16,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">Alleged — Inside Information · Not Yet Formally Evidenced</div>
                        <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">THE ALLEGATION:<br><span class="text-gold">SANDY IS PAYING. TOM TATE IS RECEIVING. POLICE ARE DEPLOYED ACCORDINGLY.</span></h4>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Inside information received by this publication alleges that Sandy Tulisi / Sandy Park has been providing financial kickbacks to Gold Coast Mayor Tom Tate — and that, in return, officers within Marc Barrow's network have been directed to turn a blind eye to her operation and to act as her personal enforcement mechanism when tenants need to be moved on.</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">This would explain what is otherwise difficult to explain: why a licensed rooming accommodation with documented bond fraud, a multi-entity obfuscation structure, and a pattern of tenants removed without warrants of possession, continues to operate without council or police intervention — while the same officers attend the property to enforce the landlord's wishes directly.</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed">Sunlight.Quest has not yet been able to formally evidence the financial relationship. The allegation is published here because it is directly relevant to the conduct documented in this section, and because the public interest in knowing the alleged mechanism of that conduct — if true — is significant. This publication will update this section when further material is available.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mt-4">
                            <div class="border border-gold/20 p-3 text-center" style="background:rgba(201,138,16,0.03)">
                                <div class="font-display text-2xl text-gold mb-1">?</div>
                                <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/30">Alleged kickback</div>
                                <div class="text-[0.45rem] text-paper/20 mt-0.5">Sandy Tulisi → Tom Tate</div>
                            </div>
                            <div class="border border-hot/20 p-3 text-center" style="background:rgba(193,68,14,0.03)">
                                <div class="font-display text-2xl text-hot mb-1">∞</div>
                                <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/30">Blind eye</div>
                                <div class="text-[0.45rem] text-paper/20 mt-0.5">No investigation. No intervention.</div>
                            </div>
                            <div class="border border-hot/20 p-3 text-center" style="background:rgba(193,68,14,0.03)">
                                <div class="font-display text-2xl text-hot mb-1">~100</div>
                                <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/30">Tenants affected</div>
                                <div class="text-[0.45rem] text-paper/20 mt-0.5">Many without knowledge of legal rights</div>
                            </div>
                        </div>
                    </div>

                    <!-- Illegal evictions -->
                    <div class="border border-paper/[0.07] p-5 mb-5" style="background:rgba(12,8,4,0.2)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">The Pattern — Illegal Evictions</div>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Multiple tenants at BeHome and associated properties operated by Sandy Tulisi / Sandy Park have been removed from the premises through police attendance — without a warrant of possession, without following the formal eviction process under the Residential Tenancies and Rooming Accommodation Act 2008, and without the tenant being informed of their legal right to remain pending a tribunal order.</p>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">A warrant of possession is the legal instrument required to physically remove a tenant. Without it, any removal is unlawful — regardless of whether a Notice to Leave has been issued. Many of the tenants at these properties are in vulnerable circumstances, are unfamiliar with the RTA framework, and have no access to legal advice. The presence of uniformed police officers creates the impression of legal authority where none exists for the removal itself.</p>
                        <div class="space-y-1.5 mt-3">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/38 leading-relaxed">A warrant of possession is required before a tenant can be physically removed — Queensland law, no exceptions</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/38 leading-relaxed">Police attendance at a civil tenancy eviction, without a warrant of possession, does not make the removal legal</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/38 leading-relaxed">Tenants who don't know this have no way to object — which is precisely why it keeps happening</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/38 leading-relaxed">If you have been removed from a BeHome property by police without a warrant of possession, you may have been unlawfully evicted — contact the RTA or a community legal centre</p></div>
                        </div>
                    </div>

                    <!-- Evidence vault -->
                    <div class="evidence-vault">
                        <div class="ev-header" onclick="toggleVault(this)">
                            <div class="flex items-center gap-2">
                                <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Police Confrontation · Marc Barrow</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span>
                                <span class="ev-toggle">▼</span>
                            </div>
                        </div>
                        <div class="ev-body">
                            <div class="ev-file ef-hot" onclick="openMV('video-marc-barrow-dodgy')">
                                <div class="ev-icon ev-video">▶</div>
                                <div class="ev-meta">
                                    <div class="ev-name">marc_barrow_dodgy.mp4</div>
                                    <div class="ev-desc">Video · Confrontation with Marc Barrow and second-in-command · Bond gaslighting documented · "You don't know what you're talking about"</div>
                                </div>
                                <span class="ev-cta">Watch →</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chapter 07 -->
                <div id="s-ch7" class="story-chapter reveal" style="transition-delay:0.3s;border-left-color:rgba(193,68,14,0.3)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter 07</span><span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Systemic Injustice</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE REGISTRAR'S MISTAKE.<br><span class="text-hot">INJUSTICE GOES FREE.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-6">"I sent a detailed legal email to Southport Court Registry explaining why Form 21 was the correct subpoena form. Their response was to stamp Form 10 anyway. A judge later said they should never have done that. By then it was too late. The landlords walked free."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">To call witnesses — particularly Sandy Tulisi and Chris Park — I needed subpoenas issued by the court. The Justices Act 1886, Section 78 states that only a justice can issue a summons (Form 10) if a witness will provide material evidence. I am not a justice. The Criminal Practice Rules 1999, Rule 29 explicitly permits parties like myself to issue subpoenas using Form 21. I sent this legal analysis to the Southport Court Registry in writing.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The Registry's response was to suggest I use Form 10 anyway. Adam complied, got it stamped, and had it served on Sandy Tulisi. At trial, the Judge explicitly stated that the Registrar should never have stamped that form — it was procedurally improper.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Result: No bench warrant was issued when Sandy didn't appear. Chris Park never took the stand. The two key witnesses against the landlords were absent from the courtroom. I won the case — the charges were dropped — but the landlords faced no accountability because the court's own official failed to follow proper procedure.</p>

                    <!-- INSIDE THE COURTROOM -->
                    <div class="mt-6 border-l-4 pl-6" style="border-color:rgba(124,106,170,0.5);background:rgba(124,106,170,0.04);padding:1.5rem">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-violet mb-3">Inside the Courtroom — Contravene Banning Notice Proceedings</div>
                        <h4 class="font-display text-xl tracking-wide mb-4 leading-tight">"DO YOU THINK YOU CAN MISLEAD THE COURT<br><span style="color:#7c6aaa">BECAUSE YOU'RE A POLICE OFFICER?"</span></h4>
                        <p class="text-[0.68rem] leading-relaxed text-paper/45 mb-4">The full transcript of the Contravene Banning Notice proceedings is published below. What it documents is not just a procedural failure — it is a courtroom in which the system actively worked against the person it was supposed to protect.</p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                            <div class="border p-4" style="border-color:rgba(124,106,170,0.25);background:rgba(124,106,170,0.03)">
                                <div class="text-[0.46rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">Page 26 — Cross-Examination of Marc Barrow</div>
                                <p class="text-[0.62rem] text-paper/45 leading-relaxed mb-2">On cross-examination, I asked Marc Barrow directly: <em class="text-paper/65">"Do you think you can mislead the Court because you're a police officer?"</em></p>
                                <p class="text-[0.62rem] text-paper/45 leading-relaxed">The Judge intervened — prompted by Adam Watson's guidance — to ask whether Barrow could answer the question as put. He could not answer it plainly. A police officer on oath, asked whether he thought his uniform entitled him to mislead a court, could not give a straight answer.</p>
                            </div>
                            <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">The Missing File — The Judge Had No Subpoena Record</div>
                                <p class="text-[0.62rem] text-paper/45 leading-relaxed mb-2">The Judge did not have the subpoena file in front of her. The document proving formal service on Sandy Tulisi — the very basis for why she should have been in that courtroom — was not before the court. The Judge stated she had no proof the people named in the subpoena had actually been served.</p>
                                <p class="text-[0.62rem] text-paper/45 leading-relaxed">The service had been filmed in full. The video had been provided to the Court. The Judge made her comments without it. This is not a hypothetical risk of a paper-based court system — it is an actual outcome that occurred in this case.</p>
                            </div>
                        </div>

                        <div class="border border-paper/[0.07] p-4 mb-4" style="background:rgba(12,8,4,0.4)">
                            <div class="text-[0.46rem] tracking-[0.2em] uppercase text-paper/30 mb-3">The Language Used in That Courtroom</div>
                            <div class="space-y-2.5">
                                <div class="flex gap-3 items-start">
                                    <span class="text-hot text-xs shrink-0 mt-0.5">×</span>
                                    <div>
                                        <div class="text-[0.6rem] text-paper/60 mb-0.5">The Prosecution referred to the property as a <span class="text-hot">"hostel"</span> throughout proceedings.</div>
                                        <div class="text-[0.55rem] text-paper/35 leading-relaxed">It was a licensed rooming accommodation under Queensland law. Marc Barrow used the same language in the charge sheet. The word "hostel" carries connotations of transience and disorder — it is not a legal classification, and it is not what the RTA register says. The entire prosecution was built on a word designed to make the property — and by extension the tenant — seem less legitimate.</div>
                                    </div>
                                </div>
                                <div class="flex gap-3 items-start">
                                    <span class="text-hot text-xs shrink-0 mt-0.5">×</span>
                                    <div>
                                        <div class="text-[0.6rem] text-paper/60 mb-0.5">The Judge referred to the property as a <span class="text-hot">"hostel"</span>.</div>
                                        <div class="text-[0.55rem] text-paper/35 leading-relaxed">Not a rooming house. Not a rooming accommodation. A hostel. The same misclassification used by the officer who issued the charge, repeated unchallenged from the bench. Language that frames the victim as a transient — not a tenant with legal rights — does not belong in a court of law. It belongs in a narrative designed to justify what was done.</div>
                                    </div>
                                </div>
                                <div class="flex gap-3 items-start">
                                    <span class="text-gold text-xs shrink-0 mt-0.5">→</span>
                                    <div>
                                        <div class="text-[0.6rem] text-paper/60 mb-0.5">The Registry stamped the wrong form. The consequence fell on me.</div>
                                        <div class="text-[0.55rem] text-paper/35 leading-relaxed">A court official gave incorrect advice and stamped an improper subpoena. The Judge acknowledged this at trial. But the practical result — Sandy Tulisi absent, no bench warrant, no accountability for the landlord — was absorbed entirely by the person the system was supposed to help. The Registry made the error. I lost the witnesses. That is not a technicality. That is the system protecting itself at the expense of justice.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Prosecution had the bond confirmation -->
                        <div class="border p-4 mb-4" style="border-color:rgba(193,68,14,0.4);background:rgba(193,68,14,0.06)">
                            <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">They Had the Proof. They Proceeded Anyway.</div>
                            <p class="text-[0.62rem] text-paper/55 leading-relaxed mb-2">Page 27 of the police correspondence establishes something that cannot be explained away as an error: <strong class="text-paper/75">the prosecution had a copy of the RTA bond confirmation</strong>. That document shows the property registered as a rooming accommodation — not a hostel. They had it. They knew what Sandy Tulisi was operating. They knew about the split identity between BeHome and SOLAC HOUSE.</p>
                            <p class="text-[0.62rem] text-paper/55 leading-relaxed">And yet they stood in court and called it a hostel. And the Judge went along with it. This was not a mistake made from ignorance. This was a choice — made with the documentation in hand — to misrepresent the nature of the property in a proceeding against the person who had been evicted from it.</p>
                        </div>

                        <div class="border-l-2 pl-4 py-1" style="border-color:rgba(124,106,170,0.4)">
                            <p class="text-[0.62rem] text-paper/40 leading-relaxed italic">"The Judge didn't even have the video of Adam Watson serving the subpoena and made comments that she had no evidence it was served. I filmed it. I gave it to the Court. The Court didn't have it in front of them. This is how the system works against you — not through malice, but through a paper-based process that loses documents, loses videos, loses accountability — and when it does, the wrongdoer walks free and you carry the consequences."</p>
                        </div>
                    </div>

                    <!-- Post-trial: Registrar deflects again -->
                    <div class="mt-6 border-l-4 border-hot/50 pl-5" style="background:rgba(193,68,14,0.05);padding:1.2rem 1rem 1.2rem 1.25rem">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">After the Win — The Registry Still Won't Answer</div>
                        <h4 class="font-display text-xl tracking-wide mb-4 leading-tight">I WON THE CASE.<br><span class="text-hot">THEN I SENT THE TRANSCRIPT BACK TO THE REGISTRAR AND ASKED AGAIN.</span></h4>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">After the charges were dropped and the Judge had explicitly stated on the record that the Registrar should never have stamped Form 10, I emailed the Southport Court Registry. I attached the transcript. I explained what the Judge had said. And I asked, as a matter of feedback — and so I would know for any future proceedings — what the correct form was.</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">The Registrar did not answer the question. The response did not identify the correct form. It did not address the Judge's comments. It did not acknowledge the procedural failure that caused Sandy Tulisi to walk free. Instead, the Registrar's response directed me to seek Legal Aid.</p>
                        <div class="border border-hot/20 p-4 mb-4" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">What Was Asked. What Was Given.</div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <div class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/30 mb-2">The Question</div>
                                    <p class="text-[0.6rem] text-paper/50 leading-relaxed italic">"The Judge said the Registrar should never have stamped Form 10 in my situation. I've attached the transcript. Can you confirm what the correct form is for a party to issue a subpoena — so I know for future proceedings?"</p>
                                </div>
                                <div>
                                    <div class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/30 mb-2">The Response</div>
                                    <p class="text-[0.6rem] text-paper/50 leading-relaxed">Deflection. Seek Legal Aid. No form identified. No acknowledgement of the Judge's ruling. No answer to the question asked.</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-5">This is not an isolated failure of one Registrar on one day. This is a system that does not give self-represented parties accurate procedural information — not before, not during, and not after the case. When the Judge says on the record that the wrong form was stamped, and the Registry's response to that transcript is to tell you to find a lawyer, the message is unambiguous: the system expects you to fail without one. And it will not correct itself even when corrected from the bench.</p>

                        <!-- Claude contrast -->
                        <div class="border border-paper/[0.07] p-5" style="background:rgba(12,8,4,0.35)">
                            <div class="text-[0.46rem] tracking-[0.2em] uppercase text-paper/25 mb-3">The Contrast — 2026</div>
                            <h5 class="font-display text-base tracking-wide mb-3 leading-tight">THE SAME QUESTION. ASKED TO AN AI. ANSWERED IN SECONDS.</h5>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed mb-3">The question the Southport Court Registry refused to answer — what form should a self-represented party use to issue a subpoena in Queensland — was posed to Claude. The answer was immediate, accurate, and referenced the correct legislation: Criminal Practice Rules 1999, Rule 29. Form 21. The same answer that was sent to the Registry in the original email before the trial. The answer the Registry ignored.</p>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed mb-4">A public institution whose function is to assist parties navigate court procedure sent a self-represented person to get a lawyer rather than answer a basic procedural question. A publicly accessible AI answered it correctly, with citations, for free. The implication is not that AI is better than the courts. It is that the courts are choosing not to help — and that choice has consequences for justice.</p>
                            <a href="https://claude.ai/share/5a05ca36-2ed7-49d3-be74-7a601f7f27a3" target="_blank" rel="noopener" class="inline-flex items-center gap-2 border border-paper/15 hover:border-gold/40 px-4 py-2 text-[0.5rem] tracking-[0.18em] uppercase text-paper/40 hover:text-gold transition-all">View the Claude conversation → Form 21 vs Form 10 explained</a>
                        </div>
                    </div>

                    <!-- EVIDENCE VAULT: Systemic Injustice -->
                    <div class="evidence-vault mt-6">
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
                            <!-- Police Correspondence -->
                            <div class="ev-file ef-hot" onclick="openMV('pdf-police-correspondence')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">police_corrrespondence.pdf — Police Correspondence · Page 27</div>
                                    <div class="ev-desc">PDF · Page 9: Queensland Person History — charge issued 23/10/23, before notice expired 24/10/23 · Page 27: prosecution had RTA bond confirmation, knew it was a rooming accommodation, called it a hostel in court</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <!-- Full court transcript -->
                            <div class="ev-file ef-violet" onclick="openMV('pdf-contravene-banning-notice')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">contravene_banning_notice.pdf — Full Court Transcript</div>
                                    <div class="ev-desc">PDF · Full proceedings · Contravene Banning Notice · Marc Barrow cross-examined · Hostel misclassification · Missing subpoena file · Charges dropped</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <!-- Subpoena service attempt video -->
                            <div class="ev-file ef-gold" onclick="openMV('video-sandy-service')">
                                <div class="ev-icon ev-video">▶</div>
                                <div class="ev-meta">
                                    <div class="ev-name">VID_20240115_165018.mp4 — Subpoena Service Attempt · BeHome</div>
                                    <div class="ev-desc">Video · Adam Watson serving Form 10 · BeHome property · 15 Jan 2024 · Counter-recording by unidentified male who refused to give his name</div>
                                </div>
                                <span class="redact-tag" style="color:#c98a10;border-color:rgba(201,138,16,0.4)">📹 Court Record</span>
                                <span class="ev-cta ml-2">Watch →</span>
                            </div>
                            <!-- Registrar clarification email + transcript -->
                            <div class="ev-file ef-hot" onclick="openMV('pdf-registrar-clarification')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">clarification_request_subpeonas.pdf</div>
                                    <div class="ev-desc">PDF · Post-trial email to Southport Registry · Transcript attached · Registrar deflects to Legal Aid without answering</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <div class="ev-zip-bar">
                                <span class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/25">Download all files — Evidence of systemic procedural failure</span>
                                <button class="mv-dl-btn mv-dl-hot text-[0.48rem]" onclick="downloadZip('systemic_injustice_subpoena_failure.zip')">⬇ ZIP Bundle</button>
                            </div>
                        </div>
                    </div>

                    <!-- Service attempt at BeHome -->
                    <div class="border-l-4 border-gold/50 pl-5 mt-6 mb-2" style="background:rgba(201,138,16,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">On Camera — The Service Attempt at BeHome</div>
                        <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">AN UNIDENTIFIED MAN.<br><span class="text-gold">RECORDING THE PERSON SERVING THE SUBPOENA.</span></h4>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Adam Watson attended the BeHome property to serve the Form 10 subpoena on Sandy Tulisi and Chris Park. The entire service attempt was recorded — not to document harassment, but to provide a court record of proper service in the event it was later disputed.</p>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">On arrival, a shirtless man with earrings — not Sandy Tulisi, not Chris Park — appeared and began recording Adam Watson on his phone. The property already had CCTV cameras covering the premises. A person choosing to additionally film someone who is there to serve legal documents, in a property already under camera surveillance, serves one purpose: intimidation. When asked directly on camera to provide his name, the man refused. He remains unidentified. His deliberate refusal to identify himself is consistent with the wider pattern of obfuscation surrounding this operation — and raises the question of what the police knew about who was present at this property and why.</p>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Sandy Tulisi eventually answered the door. She stated that Chris Park was sick. She accepted service of the documents. The service was complete and recorded on video.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-4">
                            <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.03)">
                                <div class="text-[0.46rem] tracking-[0.18em] uppercase text-gold mb-2">What the Video Shows</div>
                                <div class="space-y-1.5">
                                    <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Unidentified shirtless male recording Adam Watson on phone</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">CCTV already present — additional filming unnecessary</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Man refuses to identify himself when asked directly on camera</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Sandy Tulisi answers door, accepts service</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Sandy states Chris Park is sick</p></div>
                                </div>
                            </div>
                            <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.46rem] tracking-[0.18em] uppercase text-hot mb-2">Why This Matters</div>
                                <div class="space-y-1.5">
                                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Service was required for court — this video is the proof it occurred</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Counter-filming by an unidentified associate of the subject — deliberate refusal to ID adds to pattern of obfuscation</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Despite being served, Sandy Tulisi did not appear in court</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">No bench warrant — because the form was wrong, as documented above</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- THE SYSTEMIC PROBLEM -->
                    <div class="mt-8 border-l-4 pl-6" style="border-color:rgba(193,68,14,0.4);background:rgba(193,68,14,0.04);padding:1.5rem">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">The Systemic Issue</div>
                        <h4 class="font-display text-xl tracking-wide text-hot mb-4">When Court Officials Make Mistakes, Who Pays the Price?</h4>
                        <p class="text-[0.68rem] leading-relaxed text-paper/40 mb-4">A court registrar — a government official — gave incorrect legal advice and stamped an improper form. This wasn't disputed. The Judge confirmed it was wrong. But the consequence fell entirely on the victims of the original wrong (me, the person evicted; potentially Sandy and Chris who might have testified). The landlord — the party who created this entire chain of events through illegal conduct — walked away without facing the witnesses who could hold them accountable.</p>
                        <p class="text-[0.68rem] leading-relaxed text-paper/40 mb-4">This is systemic injustice. Not through malice, but through procedural indifference. The court system protected its own mistake by allowing the substantive outcome to be determined by a technicality that protected the wrongdoer.</p>
                        <p class="text-[0.68rem] leading-relaxed text-paper/40">I am now publishing this evidence formally to establish a record: When court officials make procedural errors that prevent victims from presenting evidence, those errors should not result in the wrongdoer going free. Accountability requires that official mistakes don't become escape routes for the actual criminals.</p>
                    </div>

                    <!-- Frecklington $400M digital courts reform -->
                    <div class="mt-8 border-l-4 pl-6" style="border-color:rgba(61,122,74,0.4);background:rgba(61,122,74,0.04);padding:1.5rem">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-3">Reform — Attorney General Deb Frecklington</div>
                        <h4 class="font-display text-xl tracking-wide text-sage mb-4">$400 MILLION. DIGITAL COURTS. THE REFORM THAT WOULD HAVE STOPPED THIS.</h4>
                        <p class="text-[0.68rem] leading-relaxed text-paper/40 mb-4">Attorney General Deb Frecklington has conveyed to Adam Watson a $400 million commitment to digitising the Queensland court system. The reform would move court processes — including the filing, stamping, and serving of documents — onto a private portal. The practical consequence: the type of registrar error that occurred in this case, where incorrect verbal advice and an improperly stamped form allowed a wrongdoer to escape accountability, would be substantially harder to make. Procedure would be enforced by the system, not by the individual official standing at the counter.</p>
                        <p class="text-[0.68rem] leading-relaxed text-paper/40 mb-4">The cost of the current system is not measured in dollars alone. It is measured in weeks spent preparing documents, navigating counter staff who give contradictory advice, travelling to courthouses, waiting for stamps, arranging service — only for a procedural error by a court official to undo the entire effort at the moment it matters most. Sandy Tulisi's landlord walked free not because the evidence was insufficient, but because the system stamped the wrong form and a judge could not look past it. That is not justice. That is administration defeating accountability.</p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                            <div class="border border-sage/20 p-4" style="background:rgba(61,122,74,0.03)">
                                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-2">What Digitisation Fixes</div>
                                <div class="space-y-1.5">
                                    <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Forms validated by system before stamping — wrong form cannot be accepted</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Private portal creates audit trail — verbal advice that contradicts procedure is eliminated</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Filing, serving, and tracking in one place — no more manual counter stamps that can be challenged</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Self-represented litigants guided through correct procedure — reducing reliance on counter staff who may err</p></div>
                                </div>
                            </div>
                            <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">What the Current System Costs</div>
                                <div class="space-y-1.5">
                                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Weeks of preparation undone by one counter error</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">No compensating mechanism when the court's own mistake produces the unjust outcome</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Wrongdoers who can afford lawyers benefit from self-represented litigants being misdirected by staff</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Procedural complexity disproportionately burdens those who cannot pay for representation</p></div>
                                </div>
                            </div>
                        </div>

                        <h4 class="font-display text-lg tracking-wide mb-3" style="color:#3d7a4a">WHY AI MATTERS FOR ACCESS TO JUSTICE</h4>
                        <p class="text-[0.68rem] leading-relaxed text-paper/40 mb-3">The Sandy Tulisi matter illustrates something that is true across thousands of cases every year in Australia: the person in the right loses not because the evidence is wrong but because they do not know which form to use, which registry to file at, or which procedural rule their opponent's lawyer is about to exploit. The gap between knowing the law and being able to use it is where most injustice lives — and it is a gap that disproportionately punishes the poor, the homeless, and the self-represented.</p>
                        <p class="text-[0.68rem] leading-relaxed text-paper/40 mb-3">Artificial intelligence — applied to legal procedure — can close that gap in a way that no previous technology has been able to. An AI that knows the correct subpoena form, knows the relevant rule, checks against the court's procedural requirements before the document is filed, and flags errors before they become irreversible is not a luxury. It is what equal access to justice looks like in practice.</p>
                        <p class="text-[0.68rem] leading-relaxed text-paper/40">Frecklington's $400 million commitment to digitising the court system is a structural step in the right direction. The next step is making those digital systems intelligent — capable of guiding ordinary people through procedure in the same way that an experienced lawyer does, without the $500-an-hour price tag that currently determines whose procedural errors get caught and whose do not.</p>
                    </div>
                </div>

                <!-- BeHome new location -->
                <div class="mt-10 story-chapter reveal" style="border-left-color:rgba(201,138,16,0.4)">
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">SHE OPENED A NEW ONE.<br><span class="text-gold">BEHOME. SURFERS PARADISE. AGAIN.</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">While the evidence on this page documents what happened at her first operation — the bond held 68 days over the legal limit, the false rent notices, the improper eviction — Sandy Tulisi has opened a new BeHome location in Surfers Paradise.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The same name. The same suburb. Funded, at least in part, by whatever financial advantage was extracted from tenants through the conduct documented here. No conviction recorded. No barrier to operating again.</p>
                    <div class="border-l-4 border-gold/50 pl-5 py-1" style="background:rgba(201,138,16,0.04);padding:1rem 1rem 1rem 1.25rem">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">Still Operating</div>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed">The system that failed to hold her accountable the first time has given her the space to do it again. BeHome is open. The evidence is here.</p>
                    </div>

                    <!-- QFES fire safety -->
                    <div class="border-l-4 border-hot/50 pl-5 mt-6" style="background:rgba(193,68,14,0.05);padding:1.1rem 1rem 1.1rem 1.25rem">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Queensland Fire &amp; Emergency Services — Referral · Awaiting Response</div>
                        <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">THE QFES CAN TURN OFF THE POWER.<br><span class="text-hot">SANDY'S PROPERTY IS NOT FIRE-SAFE.</span></h4>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The Queensland Fire and Emergency Services has a power that no other regulator in this chain has used: if a property is found to be non-compliant with fire safety standards, the QFES can direct that power be cut to the building. A rooming house operating with up to 100 tenants and no compliant fire safety infrastructure is not a technicality — it is a life-safety risk.</p>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Sandy Tulisi's operation has a documented pattern of issuing one-day eviction notices to tenants caught vaping inside the property. A single-day notice for vaping — in a building where up to 100 people sleep — suggests the property's approach to fire safety is about rule enforcement against tenants, not structural compliance. The rules exist, but only when they are useful as an eviction lever. The question of whether the building itself meets Queensland's fire safety standards for rooming accommodation at that density is a separate and more serious matter.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 my-4">
                            <div class="border border-hot/20 p-3 text-center" style="background:rgba(193,68,14,0.03)">
                                <div class="font-display text-2xl text-hot mb-1">1 Day</div>
                                <div class="text-[0.48rem] tracking-[0.14em] uppercase text-hot/60">Eviction notice</div>
                                <div class="text-[0.47rem] text-paper/25 mt-1">For vaping inside</div>
                            </div>
                            <div class="border border-paper/[0.07] p-3 text-center">
                                <div class="font-display text-2xl text-paper/60 mb-1">~100</div>
                                <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/28">Tenants on site</div>
                                <div class="text-[0.47rem] text-paper/25 mt-1">Rooming accommodation density</div>
                            </div>
                            <div class="border border-gold/20 p-3 text-center" style="background:rgba(201,138,16,0.03)">
                                <div class="font-display text-2xl text-gold mb-1">0</div>
                                <div class="text-[0.48rem] tracking-[0.14em] uppercase text-gold/60">QFES response</div>
                                <div class="text-[0.47rem] text-paper/25 mt-1">Referral lodged — awaiting</div>
                            </div>
                        </div>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">A formal referral was made to the Queensland Fire and Emergency Services documenting the property's fire safety concerns. As of the date of this publication, no response has been received. The referral stands. The property continues to operate.</p>

                        <div class="evidence-vault mt-2">
                            <div class="ev-header" onclick="toggleVault(this)">
                                <div class="flex items-center gap-2">
                                    <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                                    <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— QFES Correspondence · Fire Safety Referral</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span>
                                    <span class="ev-toggle">▼</span>
                                </div>
                            </div>
                            <div class="ev-body">
                                <div class="ev-file ef-hot" onclick="openMV('pdf-qfes-email')">
                                    <div class="ev-icon ev-pdf">PDF</div>
                                    <div class="ev-meta">
                                        <div class="ev-name">qld_fire_email_redacted.pdf</div>
                                        <div class="ev-desc">PDF · QFES correspondence · Fire safety referral · Redacted · BeHome Surfers Paradise</div>
                                    </div>
                                    <span class="redact-tag">⬛ Redacted</span>
                                    <span class="ev-cta ml-2">View →</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Aquatic Centre Privacy Breach -->
            <div id="privacy" class="story-chapter reveal" style="border-left-color:rgba(124,106,170,0.4)">
                <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Privacy Breach</span><span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Southport Aquatic Centre · Gold Coast Council</span></div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">PHOTOGRAPHED. ANNOTATED. LEAKED.<br><span style="color:#7c6aaa">THE COUNCIL DROPPED IT ANYWAY.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"My photograph was taken from the CCTV inside the Southport Aquatic Centre. It was printed, pinned to a staff noticeboard, and annotated. Then it was photographed by a staff member and sent to members of the public. The Council opened an investigation. Then closed it. I used the upstairs shower — the one outside the gym — because it had better water pressure. That is the full extent of my misconduct."</p>

                <div class="reveal mb-6">
                    <img src="/img/aquatic-centre-surveillance-board.jpg" alt="Leaked Aquatic Centre surveillance board — CCTV photo of Kosta annotated and distributed by staff" class="w-full border border-paper/[0.07]" loading="lazy" />
                    <div class="flex items-center justify-between px-3 py-2 border border-t-0 border-paper/[0.07]" style="background:rgba(124,106,170,0.06)">
                        <span class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30">Leaked surveillance board · Southport Aquatic Centre · Staff noticeboard · Privacy breach</span>
                        <span class="text-[0.44rem] tracking-[0.14em] uppercase" style="color:rgba(124,106,170,0.7)">Gold Coast Council — investigation discontinued</span>
                    </div>
                </div>

                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The leaked surveillance board from the Southport Aquatic Centre — a real photograph, a real annotations, a real distribution — constitutes a privacy breach under the Information Privacy Act 2009. My photograph was extracted from internal CCTV and placed on a staff noticeboard with handwritten annotations including terms designed to deny me entry and flag me to staff for surveillance. That board was then photographed and circulated. A formal privacy complaint was filed. The Gold Coast Council acknowledged it. Their own investigation ran for less than the legislated 45-business-day window before being discontinued — citing failure to receive further information from the complainant.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The information needed to investigate — the photograph, the annotations, the identity of the staff member who circulated it — was entirely within the Council's own systems. The Council did not need me to provide it. They had it. The discontinuance was not a procedural outcome. It was a choice.</p>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-8">
                    <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-violet mb-1">0</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Charges upheld</div></div>
                    <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-hot mb-1">45</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Day deadline</div><div class="text-[0.5rem] text-paper/18 mt-1">Council missed · then dropped it</div></div>
                    <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-gold mb-1">1</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Show Cause notice</div><div class="text-[0.5rem] text-paper/18 mt-1">From Premier Crisafulli</div></div>
                    <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-4xl text-sage mb-1">✓</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Staff terminated</div></div>
                </div>

                <!-- Felipe Mattos -->
                <div class="border-l-4 pl-5 mb-5" style="border-color:rgba(124,106,170,0.5);background:rgba(124,106,170,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-4" style="color:#7c6aaa">Identified — The Leaker</div>

                    <!-- Enlarged portrait -->
                    <div class="reveal mb-5">
                        <div class="mx-auto border overflow-hidden" style="max-width:340px;border-color:rgba(124,106,170,0.3)">
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/privacy_leak/felipe_mattos.jpg" alt="Felipe Mattos" class="w-full object-cover object-center" loading="lazy" />
                            <div class="px-3 py-2 border-t" style="background:rgba(0,0,0,0.35);border-color:rgba(124,106,170,0.2)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase" style="color:rgba(124,106,170,0.7)">Felipe Mattos · Southport Aquatic Centre · Privacy Breach Leaker</div>
                            </div>
                        </div>
                    </div>

                    <!-- ID card text -->
                    <div class="border p-4 mb-5" style="border-color:rgba(124,106,170,0.2);background:rgba(12,8,4,0.2)">
                        <div class="text-[0.45rem] tracking-[0.22em] uppercase mb-2" style="color:#7c6aaa">Identified · Aquatic Centre Staff · Leaker</div>
                        <div class="font-display text-2xl tracking-wide text-paper/85 leading-tight mb-2">FELIPE MATTOS</div>
                        <div class="text-[0.55rem] text-paper/45 leading-relaxed mb-2">820 Partner Visa holder. Freelance photographer. Former Southport Aquatic Centre staff member. Fired following the David Crisafulli administration's response to the privacy breach — after the Gold Coast Council initially refused to act.</div>
                        <div class="text-[0.52rem] text-paper/28 leading-relaxed">Now a fitness instructor at UNSW. Previously: swim teacher and DJ.</div>
                    </div>

                    <!-- Gold Coast Bulletin callout -->
                    <div class="border mb-5 p-5" style="border-color:rgba(124,106,170,0.25);background:rgba(124,106,170,0.05)">
                        <div class="text-[0.46rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">Gold Coast Bulletin · Publicly Documented · On Record</div>
                        <h4 class="font-display text-xl tracking-wide mb-3 leading-tight" style="color:#7c6aaa">HIS TATTOO SAYS "PEACE."<br><span class="text-paper/60">HE WENT TO THE BULLETIN TO PLAY THE VICTIM. THEN TRIED TO RORT THE 820 VISA.</span></h4>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Felipe Mattos was <a href="https://www.goldcoastbulletin.com.au/subscribe/news/1/?sourceCode=GCWEB_WRE170_a_GGL&dest=https%3A%2F%2Fwww.goldcoastbulletin.com.au%2Fnews%2Fgold-coast%2Fgold-coast-swim-teacher-and-dj-felipe-mattos-banned-from-clubs-over-neck-tattoo%2Fnews-story%2F9f4f1f147797a834c3568b4cc5d547c6&memtype=anonymous&mode=premium" target="_blank" rel="noopener" class="underline underline-offset-2" style="color:rgba(124,106,170,0.8)">featured in the Gold Coast Bulletin complaining that he was being denied entry to nightclubs because of his neck tattoo</a>. He told the reporter he was not a bikie. He said he comes in peace. His neck tattoo says peace.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-3">
                            <div class="border p-4" style="border-color:rgba(124,106,170,0.2);background:rgba(124,106,170,0.04)">
                                <div class="text-[0.44rem] tracking-[0.15em] uppercase mb-2" style="color:#7c6aaa">The Public Narrative</div>
                                <div class="space-y-1.5">
                                    <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Goes to the press: unfairly targeted, victim of prejudice</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Tattoo says <strong class="text-paper/65">peace</strong> — he comes in peace</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Swim teacher, DJ, innocent professional</p></div>
                                </div>
                            </div>
                            <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-2">The Private Reality</div>
                                <div class="space-y-1.5">
                                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Photographs and distributes a surveillance board containing images of members of the public — a privacy breach</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Tells Adam Watson directly he is using the 820 relationship visa as a pathway to citizenship — not a genuine relationship</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Attempts to purchase prescription Ozempic from Adam Watson to resell illegally</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="border border-hot/25 px-5 py-4" style="background:rgba(193,68,14,0.05)">
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">The Irony</div>
                            <p class="text-[0.68rem] text-paper/50 leading-relaxed">He went to the mainstream press to claim he was being judged unfairly because of a tattoo that says <em>peace</em>. The same person was simultaneously using a relationship that he has described as not genuine to rort the 820 Partner Visa pathway to Australian citizenship — a visa program designed to protect genuine relationships, not provide cover for those who admit privately that the arrangement is instrumental. Clubs reading his tattoo and turning him away may have been the least of anyone's concerns.</p>
                        </div>
                    </div>

                    <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">THE PERSON WHO CIRCULATED IT<br><span style="color:#7c6aaa">IS A FREELANCE PHOTOGRAPHER WHO HAD BEEN APPROACHED FOR WORK.</span></h4>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Felipe Mattos is the person responsible for photographing and distributing the surveillance board. He is a freelance photographer who contracts his work out independently — he had been approached by this publication for photography work. He is not a permanent employee of the Aquatic Centre. The Gold Coast Council, in correspondence, stated that the name of the staff member involved had not been provided to this publication. That email is in the evidence vault below.</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">Regardless of whether the Council chose to provide the name: my photograph was taken from their CCTV, placed on a board by their staff, and distributed by someone working in their building. The Council's obligation to investigate did not depend on me identifying the person. They had the CCTV logs. They had the staff records. They had the building. They dropped the investigation anyway. When the Crisafulli administration took over and applied pressure, Felipe Mattos and his entire team were fired. The Council had been covering for them.</p>

                    <div class="border border-paper/[0.07] p-4 mb-4 flex flex-col sm:flex-row items-center gap-4" style="background:rgba(12,8,4,0.3)">
                        <div class="shrink-0 border border-paper/[0.07] p-3 flex items-center justify-center" style="background:#0c0804">
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/aquatic/farr_real_estate_logo.png" alt="Farr Real Estate" class="w-full max-w-[180px]" style="object-fit:contain" loading="lazy" />
                        </div>
                        <div class="flex-1">
                            <div class="text-[0.46rem] tracking-[0.2em] uppercase mb-1" style="color:#7c6aaa">Where He Is Now</div>
                            <p class="text-[0.62rem] text-paper/45 leading-relaxed mb-2">Felipe Mattos now works at <strong class="text-paper/60">Farr Real Estate</strong>.</p>
                            <a href="https://www.platinumre.com.au/agent-profile?agent_id=38860" target="_blank" rel="noopener" class="inline-block text-[0.44rem] tracking-[0.14em] uppercase px-2 py-0.5 transition-colors" style="color:#7c6aaa;border:1px solid rgba(124,106,170,0.3)">View Agent Profile ↗</a>
                        </div>
                    </div>

                    <div class="border p-4" style="border-color:rgba(124,106,170,0.2);background:rgba(12,8,4,0.25)">
                        <div class="text-[0.46rem] tracking-[0.2em] uppercase mb-3" style="color:#7c6aaa">Additional Allegations — On the Record</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed"><strong class="text-paper/55">820 Visa / Relationship fraud:</strong> Felipe Mattos is on an 820 Partner Visa and is in a relationship with an Australian woman aged approximately 40. He has told Adam Watson directly that he is using the relationship to obtain citizenship — not because it is genuine. He is currently attending therapy about his relationship issues, with the apparent intention of being able to subpoena the therapist after obtaining citizenship to establish the relationship was not working — supporting any future visa challenge.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed"><strong class="text-paper/55">Ozempic supply:</strong> Felipe Mattos attempted to purchase Adam Watson's Ozempic medication so that he could sell it on the street for weight loss. Adam Watson has the text messages. Ozempic (semaglutide) is a prescription medication. Its onward sale without a licence constitutes illegal supply under Queensland law.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed"><strong class="text-paper/55">Unwanted sexual advance — "I masturbated over you":</strong> Felipe Mattos made an unsolicited sexual advance toward Adam Watson, telling him directly: <em class="text-paper/55">"I masturbated over you."</em> The statement was made without invitation. It is inconsistent with a person presenting himself publicly as the victim of discrimination and playing the peace symbol on his neck. It is entirely consistent with someone whose conduct toward others does not match the persona he projects.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed"><strong class="text-paper/55">"I didn't like you at first because you could see right through me":</strong> Felipe Mattos told Adam Watson that he initially disliked him — not because of anything Adam had said or done, but because Adam Watson could see through him. The admission is notable: it is a person acknowledging that his dislike of someone was rooted in that person's ability to perceive what he was actually doing. It is an inadvertent confession that there was something to see through.</p></div>
                        </div>
                        <p class="text-[0.52rem] text-paper/22 mt-3 leading-relaxed">These matters are published on the basis of direct communications held by Adam Watson. This publication will update this section as further material becomes available.</p>
                    </div>
                </div>

                <!-- Security confrontation -->
                <div class="border-l-4 border-hot/50 pl-5 mb-5" style="background:rgba(193,68,14,0.05);padding:1.1rem 1rem 1.1rem 1.25rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">The Security Confrontation — Outside the Aquatic Centre · At Night</div>
                    <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">A SECURITY GUARD TOLD ME I HAD THREATENED THE AQUATIC CENTRE.<br><span class="text-hot">I DENY THIS. POLICE NEVER CONTACTED ME.</span></h4>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Following the privacy breach becoming known, Aquatic Centre employees made comments to Adam Watson that by showing this publication the leaked surveillance board, he had created a situation that could potentially put those employees in danger. This is the inversion of accountability: the person who circulated a photograph of a member of the public without consent was not identified as the risk. The person who made the breach known was.</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">I was subsequently approached by security outside the Aquatic Centre at night. A security staff member made a direct comment: that I had threatened the Aquatic Centre. I deny this accusation in full. No specific threat was ever made. No person was ever put at risk by anything I said or did.</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Critically: Queensland Police Service never contacted me regarding any alleged threat. I was not interviewed. I was not served with any notice or direction. I was not the subject of any formal complaint communicated to me by police. This means one of two things: either the allegation was never reported to police — in which case it is not credible enough to be put on record — or it was placed into internal police files without my knowledge. The latter possibility raises a more serious concern.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-4">
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">The Allegation (Security Staff)</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">That Kosta Kondratenko threatened the Aquatic Centre following the privacy breach becoming public.</p>
                        </div>
                        <div class="border border-sage/20 p-4" style="background:rgba(61,122,74,0.03)">
                            <div class="text-[0.46rem] tracking-[0.2em] uppercase text-sage mb-2">The Record</div>
                            <div class="space-y-1">
                                <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.58rem] text-paper/40">QPS never contacted Kosta</p></div>
                                <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.58rem] text-paper/40">No interview conducted</p></div>
                                <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.58rem] text-paper/40">No formal complaint served</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40">Likely placed in internal files only</p></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kerry Stokes / defense fund -->
                <div class="border-l-4 border-gold/40 pl-5 mb-5" style="background:rgba(201,138,16,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">Kerry Stokes · Discovery Network — Defense Fund Offered</div>
                    <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">THE NOTES IN THE SYSTEM.<br><span class="text-gold">KERRY STOKES HAS BEEN MADE AWARE.</span></h4>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Kerry Stokes has been made aware of the Aquatic Centre privacy breach and the subsequent conduct — including the security confrontation and the unverified allegation about internal police files. Stokes has offered to put up a defense fund, under which Discovery Network would recover any notes placed into police or council systems and cross-reference them with Queensland Police Service, who can be subpoenaed to give sworn testimony as to why they were never contacted about the supposed threat made against the Aquatic Centre.</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed">If there are entries in internal police files characterising Kosta Kondratenko as a threat based on an allegation made by Aquatic Centre security staff — entries made without a formal complaint, without interview, and without any contact with the person allegedly named — those entries can be recovered, examined, and tested against the sworn testimony of the officers responsible for creating them.</p>
                </div>

                <!-- The shower — context -->
                <div class="border border-paper/[0.07] p-5 mb-5" style="background:rgba(12,8,4,0.15)">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-paper/25 mb-3">For the Record — What I Was Actually Doing</div>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The annotations on the surveillance board suggest I was flagged as a concern at the Aquatic Centre. The full extent of my conduct there was this: I went upstairs to use the shower outside the gym because it had better water pressure than the downstairs change rooms. A security guard asked me to leave. The exchange was pleasant. I complied immediately. That is the entirety of the incident. No aggression. No disturbance. No resistance. I left when asked.</p>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed">My photograph was taken from CCTV and placed on a surveillance board because someone decided, without any formal complaint or incident, that I should be monitored. That is the origin of this entire matter. The breach was not triggered by my conduct. It was triggered by someone's decision to photograph and circulate images of a member of the public without their consent or any lawful basis.</p>
                </div>

                <!-- Council dropped it + email -->
                <div class="border-l-4 border-hot/50 pl-5 mb-5" style="background:rgba(193,68,14,0.05);padding:1rem 1rem 1rem 1.25rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Council Dropped It — Despite Having Everything They Needed</div>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">The Gold Coast Council acknowledged my complaint in December 2024 and confirmed it was being investigated by the Chief Risk and Audit Office under the 45-business-day window set by the Information Privacy Act 2009. They subsequently discontinued the investigation — citing failure to receive further information from the complainant. An email was sent to the Council asking for the name of the staff member responsible. That email was not answered.</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed">The Council did not need my response to continue its own investigation. The photograph was from their CCTV. The noticeboard was in their building. The staff member was their employee. The decision to discontinue despite having access to all material evidence — and despite failing to respond to a direct inquiry — reflects a Council that is not interested in holding its own employees accountable for privacy violations against members of the public. The fact that the Council's website was then used to block access to this publication adds context to that disinterest.</p>
                </div>

                <!-- Formal demand + accountability comparison -->
                <div class="border border-hot/20 p-6 mb-5" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">Formal Demand — Retraction</div>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed">Sunlight.Quest formally demands that Mayor Tom Tate retract his characterisation of Kosta Kondratenko as a "public nuisance." All charges against Mr Kondratenko have been dropped. A written retraction is requested. Deadline: 30 days from publication.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-8">
                    <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">City of Gold Coast</div>
                        <div class="space-y-1.5"><div class="text-[0.6rem] text-paper/35">✗ Investigation discontinued</div><div class="text-[0.6rem] text-paper/35">✗ Mayor called complainant a nuisance</div><div class="text-[0.6rem] text-paper/35">✗ No accountability</div></div>
                    </div>
                    <div class="border border-sage/20 p-5" style="background:rgba(61,122,74,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-2">Premier Crisafulli</div>
                        <div class="space-y-1.5"><div class="text-[0.6rem] text-paper/35">✓ Show Cause notice issued</div><div class="text-[0.6rem] text-paper/35">✓ Staff involved terminated</div><div class="text-[0.6rem] text-paper/35">✓ Accountability via escalation</div></div>
                    </div>
                </div>

                <!-- CCC complaint — Tom Tate -->
                <div class="border-l-4 border-hot/40 pl-5 mb-5" style="background:rgba(193,68,14,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">CCC Complaint — Tom Tate Corruption Report</div>
                    <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">THE CCC RECEIVED A CORRUPTION REPORT ON TOM TATE.<br><span class="text-hot">AND DIDN'T EVEN REPLY.</span></h4>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">A corruption report concerning Tom Tate was emailed to the Crime and Corruption Commission. The report did not include photographs. The CCC did not email back to request that photographs be added. They did not follow up in any form.</p>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The minimum expectation when a corruption report is lodged with a government watchdog is that the watchdog reads it — and if the submission is incomplete, asks for what is missing. The CCC did neither. The silence is not merely a procedural shortcoming. It is evidence of an institution that is not taking the reports handed to it seriously.</p>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed">A body that exists to investigate corruption but does not respond to corruption reports is not a watchdog. It is a filing cabinet.</p>
                </div>

                <!-- Evidence vault -->
                <div class="evidence-vault mt-6">
                    <div class="ev-header" onclick="toggleVault(this)">
                        <div class="flex items-center gap-2">
                            <span class="text-[0.48rem] tracking-[0.22em] uppercase" style="color:#7c6aaa">📁 Evidence Files</span>
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Aquatic Centre Privacy Breach · Gold Coast Council</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">4 files</span>
                            <span class="ev-toggle">▼</span>
                        </div>
                    </div>
                    <div class="ev-body">
                        <div class="ev-file ef-gold" onclick="openMV('image-aquatic')">
                            <div class="ev-icon ev-img">📷</div>
                            <div class="ev-meta">
                                <div class="ev-name">aquatic_centre_surveillance_board.jpg</div>
                                <div class="ev-desc">Image · Leaked surveillance board · Council staff photos annotated &amp; distributed · Privacy breach confirmed</div>
                            </div>
                            <span class="redact-tag" style="color:#c98a10;border-color:rgba(201,138,16,0.4)">📋 Leaked Board</span>
                            <span class="ev-cta ml-2">View →</span>
                        </div>
                        <div class="ev-file ef-violet" onclick="openMV('pdf-aquatic-acknowledgement')">
                            <div class="ev-icon ev-pdf">PDF</div>
                            <div class="ev-meta">
                                <div class="ev-name">PRIVACY COMPLAINT — Kosta Kondratenko — ACKNOWLEDGEMENT LETTER.pdf</div>
                                <div class="ev-desc">PDF · Gold Coast Council · Complaint receipt confirmed · Chief Risk &amp; Audit Office · 45-day investigation window</div>
                            </div>
                            <span class="ev-cta">View →</span>
                        </div>
                        <div class="ev-file ef-hot" onclick="openMV('pdf-aquatic-discontinuance')">
                            <div class="ev-icon ev-pdf">PDF</div>
                            <div class="ev-meta">
                                <div class="ev-name">PRIVACY COMPLAINT — Kondratenko — DECISION LETTER TO COMPLAINANT.pdf</div>
                                <div class="ev-desc">PDF · Gold Coast Council · Investigation discontinued · Cited: no further information from complainant · Evidence was entirely within Council systems</div>
                            </div>
                            <span class="ev-cta">View →</span>
                        </div>
                        <div class="ev-file ef-violet" onclick="openMV('pdf-aquatic-employee-name')">
                            <div class="ev-icon ev-pdf">PDF</div>
                            <div class="ev-meta">
                                <div class="ev-name">employee_name.pdf</div>
                                <div class="ev-desc">PDF · Gold Coast Council email · States name of staff member not received — email was sent, never answered</div>
                            </div>
                            <span class="ev-cta">View →</span>
                        </div>
                        <div class="ev-zip-bar">
                            <span class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/25">Download — Aquatic Centre privacy breach bundle</span>
                            <button class="mv-dl-btn mv-dl-hot text-[0.48rem]" onclick="downloadZip('aquatic_centre_privacy_breach.zip')">⬇ ZIP Bundle</button>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /space-y-16 -->
    </div><!-- /max-w-6xl -->
</section>


<!-- ══════════════════════════════════════
     SAMIR DHAKAL
══════════════════════════════════════ -->
<section id="samir" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(201,138,16,0.05) 0%,transparent 60%)">
    <div class="max-w-4xl mx-auto">

        <div class="flex items-center gap-3 mb-3 reveal">
            <span class="text-[0.48rem] tracking-[0.22em] uppercase border border-gold/40 text-gold px-2 py-1">Profile — Samir Dhakal</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-3 leading-tight reveal">SAMIR DHAKAL.<br><span class="text-gold">TAKEN IN. THEN TURNED ON.</span></h2>
        <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-10 reveal max-w-2xl">"Adam took him in after his own mates kicked him out. He repaid that by installing a camera above Adam's laptop to steal his banking credentials and rupturing Adam's testicles. He was eventually deported."</p>

        <!-- Photo + intro -->
        <div class="grid grid-cols-1 md:grid-cols-[200px_1fr] gap-8 mb-10 reveal">
            <div>
                <div class="w-full border border-paper/[0.07] overflow-hidden" style="aspect-ratio:2/3">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/samir_dhakal_another_scammer.jpg" alt="Samir Dhakal" class="w-full h-full object-cover object-top" />
                </div>
                <div class="text-[0.45rem] text-paper/20 mt-2 leading-relaxed">Samir Dhakal · Deported · Charged by Sally Downing</div>
            </div>
            <div>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Samir Dhakal is a Nepalese national who was taken in by Adam Watson after being kicked out by his own Nepalese housemates. Adam gave him a place to stay. Samir used that access to surveil Adam's digital activity, attempt to steal from his bank account, and physically injure him.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">A significant part of the early work Kosta Kondratenko did alongside Adam Watson was building the deportation case for then-Immigration Minister Tony Burke — compiling documentation of debts, criminal conduct, and offences against women. After sustained effort, Samir Dhakal was deported.</p>
            </div>
        </div>

        <!-- Timeline -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.3)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-5">Timeline — Samir Dhakal</div>
            <div class="space-y-px">
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-gold">01</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Taken In</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Kicked out by his Nepalese housemates — Adam Watson takes him in</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Samir Dhakal had been removed from his Nepalese share house. Adam Watson, as was consistent with his character, took him in and gave him somewhere to live.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">02</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Surveillance</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Camera installed above Adam's laptop to capture keystrokes</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">While living with Adam, Samir installed a camera positioned to record Adam's keystrokes on his laptop — an attempt to capture banking credentials and access his accounts.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">03</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Physical Assault</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Ruptured Adam Watson's testicles</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Samir Dhakal physically assaulted Adam Watson, causing rupture of his testicles.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">04</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Rinehart Taunts</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">"The bigger they are the harder they fall!" — calls to Gina Rinehart</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Samir would contact Gina Rinehart directly, taunting her with the phrase "The bigger they are the harder they fall!"</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-gold">05</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Adam Leaves</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Adam Watson goes to the Gold Coast to escape Samir Dhakal</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">The relationship left Adam Watson suicidal. He would make comments about walking into the Surfers Paradise beach and letting the water take him. He relocated to the Gold Coast to get distance from Samir.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-gold">06</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Sally Downing</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Charged by Sally Downing for offences against women</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Sally Downing charged Samir Dhakal with a raft of offences against women. These charges formed a key part of the deportation case assembled for Tony Burke.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-gold">07</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Deportation Case</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Kosta and Adam build the documentation file for Tony Burke</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Much of the early work Kosta Kondratenko did with Adam Watson when they first met was directed at building the deportation file — debts, offences against women, criminal conduct — for then-Immigration Minister Tony Burke to approve Samir's removal from Australia.</div></div>
                </div>
                <div class="grid grid-cols-[90px_1fr] gap-4 border border-sage/30 p-4" style="background:rgba(61,122,74,0.04)">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-sage">08</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Deported</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Samir Dhakal deported — Minister Tony Burke approves removal</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">After sustained effort by Kosta and Adam Watson, Tony Burke approved the deportation. Samir Dhakal was removed from Australia.</div></div>
                </div>
            </div>
        </div>

            <!-- Judgement Order -->
            <div class="border border-gold/20 p-5 mb-4 reveal" style="background:rgba(201,138,16,0.03)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-3">Local Court — Judgement Order · Stamped</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">A Local Court Judgement Order — stamped — was entered against Samir Dhakal for <strong class="text-paper/70">$92,505</strong>. The debt was not repaid. The judgement documents obtaining benefit by deception: extracting financial value from a person who extended him trust, and leaving without repayment. This document was submitted to Minister Tony Burke as part of the court documentation supporting Samir Dhakal's deportation on character grounds — non-payment of debt as evidence of character unfitness for continued residency in Australia.</p>
                <div class="grid grid-cols-3 gap-3 mb-4">
                    <div class="bg-ink px-4 py-4 text-center">
                        <div class="font-display text-2xl text-hot mb-1">$92,505</div>
                        <div class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/28">Judgement Order</div>
                        <div class="text-[0.42rem] text-paper/18 mt-1">Local Court · Stamped</div>
                    </div>
                    <div class="bg-ink px-4 py-4 text-center">
                        <div class="font-display text-xl text-hot mb-1">UNPAID</div>
                        <div class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/28">Debt Not Repaid</div>
                        <div class="text-[0.42rem] text-paper/18 mt-1">Obtaining benefit by deception</div>
                    </div>
                    <div class="bg-ink px-4 py-4 text-center">
                        <div class="font-display text-xl text-sage mb-1">DEPORTED</div>
                        <div class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/28">Character Grounds</div>
                        <div class="text-[0.42rem] text-paper/18 mt-1">Tony Burke · Immigration</div>
                    </div>
                </div>
                <div class="evidence-vault">
                    <div class="ev-header" onclick="toggleVault(this)">
                        <div class="flex items-center gap-2">
                            <span class="text-[0.48rem] tracking-[0.22em] uppercase text-gold">📁 Evidence Files</span>
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Local Court · Judgement Order · Samir Dhakal</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span>
                            <span class="ev-toggle">▼</span>
                        </div>
                    </div>
                    <div class="ev-body">
                        <div class="ev-file ef-hot" onclick="openMV('pdf-judgement-samir')">
                            <div class="ev-icon ev-pdf">PDF</div>
                            <div class="ev-meta">
                                <div class="ev-name">judgement_order_samir_dhakal.pdf</div>
                                <div class="ev-desc">PDF · Local Court Judgement Order · Stamped · $92,505 · Obtaining benefit by deception · Character evidence for deportation</div>
                            </div>
                            <span class="ev-cta">View →</span>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Stat strip -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-2 reveal">
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-gold mb-1">📷</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Keystroke camera</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Installed above Adam's laptop</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-hot mb-1">↑</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Charges — women</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Sally Downing prosecution</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-sage mb-1">✓</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Deported</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Tony Burke · Immigration</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-gold mb-1">"↓"</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Rinehart taunts</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">"Bigger they are..."</div>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     JONATHAN SMITHINSON
══════════════════════════════════════ -->
<section id="smithinson" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.05) 0%,transparent 60%)">
    <div class="max-w-4xl mx-auto">

        <div class="flex items-center gap-3 mb-3 reveal">
            <span class="text-[0.48rem] tracking-[0.22em] uppercase border border-hot/40 text-hot px-2 py-1">Profile — Jonathan Smithinson</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-3 leading-tight reveal">JONATHAN SMITHINSON.<br><span class="text-hot">BONDI JUNCTION. OXYCONTIN. SILVERWATER.</span></h2>
        <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-10 reveal max-w-2xl">"I innocently asked Adam to ask his psychologist friend why I pace. Jonathan heard that and tried to convince Gina Rinehart I was the next Bondi Junction stabber. He is now in Silverwater charged with murder. Adam gave him mouth to mouth and saved his life."</p>

        <!-- Photo + intro -->
        <div class="grid grid-cols-1 md:grid-cols-[200px_1fr] gap-8 mb-10 reveal">
            <div>
                <img src="https://static.ffx.io/images/$zoom_1.895%2C$multiply_1.9683%2C$ratio_1.5%2C$width_756%2C$x_0%2C$y_36/t_crop_custom/q_62%2Cf_auto/6471906e057360cdf2a0d0f6ef9e324c296d183e" alt="Jonathan Smithinson" class="w-full border border-paper/[0.07]" style="filter:grayscale(30%)" onerror="this.style.display='none'">
                <div class="text-[0.45rem] text-paper/20 mt-2 leading-relaxed">Source: Sydney Morning Herald · Former heroin-addicted psychiatrist · Failed drug tests</div>
                <a href="https://www.smh.com.au/national/nsw/former-heroin-addicted-psychiatrist-fails-drug-tests-20200920-p55xe6.html" target="_blank" rel="noopener noreferrer" class="text-[0.48rem] tracking-[0.12em] uppercase text-gold border-b border-gold/30 hover:border-gold/70 transition-colors mt-2 inline-block">SMH Article →</a>
            </div>
            <div>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Jonathan Smithinson is a former psychiatrist with a documented heroin addiction who failed mandatory drug tests — as reported by the <em>Sydney Morning Herald</em> in September 2020. Reddit communities had publicly questioned how someone with his history had been permitted to retain a medical licence for as long as he did.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">He was part of a WhatsApp group that included Gina Rinehart. That group is where Kosta Kondratenko became his subject — based entirely on the fact that Kosta walks around a lot and has high energy.</p>
            </div>
        </div>

        <!-- Timeline -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.3)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-5">Timeline — Jonathan Smithinson</div>
            <div class="space-y-px">
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase" style="color:#7c6aaa">01</div><div class="text-[0.45rem] text-paper/20 mt-0.5">The Question</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Kosta innocently asks Adam to consult his psychologist friend about pacing</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Kosta, who has high energy, paces frequently. He asked Adam Watson to ask his psychologist friend whether there was something he could do about it. An innocent question about a benign habit.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">02</div><div class="text-[0.45rem] text-paper/20 mt-0.5">The Smear</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Jonathan uses "walks around too much" to attempt to brand Kosta the next Bondi Junction stabber</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Jonathan Smithinson — in the WhatsApp group that included Gina Rinehart — used the information that Kosta paces to attempt to implant the idea that Kosta was dangerous. The comparison invoked was the Bondi Junction shopping centre stabbing. The basis was that Kosta walks around.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-gold">03</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Rinehart Acts</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Gina Rinehart contacts the medical board — she could hear him gritting his teeth</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">During a conversation with Jonathan, Gina Rinehart noticed he was audibly gritting his teeth. She contacted the medical board. A drug test was ordered. Jonathan failed. He was disbarred.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">04</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Disbarred</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Fails drug test — medical licence removed</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Drug testing confirmed active substance use. Jonathan's medical registration was cancelled. Reddit communities, which had long questioned how he retained his licence given his documented history, noted the outcome.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">05</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Shoplifting</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Charged with shoplifting following disbarment</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">After losing his medical registration, Jonathan was charged with shoplifting.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">06</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Adam Saves Him</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Adam Watson saves Jonathan's life — mouth to mouth resuscitation</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">At some point prior to Jonathan's final arrest, Adam Watson saved Jonathan from suicide by performing mouth to mouth resuscitation. Jonathan survived.</div></div>
                </div>
                <div class="grid grid-cols-[90px_1fr] gap-4 border border-hot/30 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">07</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Silverwater</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Charged with murder — supplying OxyContin to enable a killing — remanded at Silverwater</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Jonathan Smithinson is currently remanded at Silverwater Correctional Centre following a murder charge. The allegation is that he supplied OxyContin to an accomplice with the knowledge that it would be used to fatally overdose a third party — targeted for their inheritance money.</div></div>
                </div>
            </div>
        </div>

        <!-- The pacing smear -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.3)">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE BASIS FOR "BONDI JUNCTION STABBER."<br><span class="text-gold">HE WALKS AROUND TOO MUCH.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The entirety of Jonathan Smithinson's attempt to brand Kosta Kondratenko as a violent threat rested on a single piece of information relayed through Adam Watson: that Kosta paces. He walks around. He has energy. That is the clinical profile from which a former heroin-addicted psychiatrist, in a WhatsApp group with one of Australia's wealthiest people, attempted to seed the idea that Kosta was the next Bondi Junction attacker.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">This is not diagnostic reasoning. It is the use of clinical language and institutional authority — the title "psychiatrist," the appearance of professional assessment — to manufacture panic from nothing. The attempt failed. Jonathan was disbarred before it could gain traction. Gina Rinehart, to her credit, was the one who triggered the investigation that removed his licence.</p>
            <div class="border-l-4 border-gold/50 pl-5" style="background:rgba(201,138,16,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">The Irony</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">The man who attempted to characterise Kosta as a dangerous unstable person based on the fact that he walks around is now in Silverwater on a murder charge. The man he tried to smear is publishing this. Adam Watson saved Jonathan's life. That life has since been used to facilitate a murder. The people around Adam have since noted: once a junkie, always a junkie. Whether the effort to save him was worth it is a question only Adam can answer.</p>
            </div>
        </div>

        <!-- Stat strip -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-2 reveal">
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-hot mb-1">1</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Basis for threat claim</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Kosta paces</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-gold mb-1">✗</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Medical licence</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Failed drug test — disbarred</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-paper/50 mb-1">CPR</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Adam saved him</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Mouth to mouth — suicide attempt</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-hot mb-1">MUR</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Charged — Silverwater</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">OxyContin · inheritance kill</div>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     COLES / PACIFIC FAIR — MOVE ON DIRECTION
══════════════════════════════════════ -->
<section id="coles" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.04) 0%,transparent 55%)">
    <div class="max-w-4xl mx-auto">

        <div class="flex items-center gap-3 mb-3 reveal">
            <div class="w-4 h-px bg-hot"></div>
            <span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Pacific Fair · Coles · Body Worn Camera</span>
        </div>
        <h2 class="font-display leading-none tracking-wide mb-3 reveal" style="font-size:clamp(2.4rem,6vw,4rem)">A YAKULT BOTTLE.<br><span class="text-hot">$550,000 TO THE TAXPAYER.</span></h2>
        <p class="font-serif italic text-paper/45 text-lg leading-relaxed mb-10 reveal max-w-2xl">"I never stole anything from Coles. There has never been a call to police claiming I stole — not once in my life. A Coles employee made a false allegation. The police took it without asking for CCTV, without asking for proof, without asking why it hadn't been lodged. This is what followed."</p>

        <!-- How it started -->
        <div class="story-chapter reveal mb-8" style="border-left-color:rgba(193,68,14,0.3)">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">HOW IT STARTED.<br><span class="text-hot">THE YAKULT. THE PSLO TEAM. THE PRIOR HISTORY.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The original disturbance was over a Yakult bottle — admittedly drunk by Kosta. It was already outside the 5-pack it came from and would have been discarded. The CCTV captured the incident. Kosta was approached. That is where the disturbance began. He was never asked to pay for the Yakult.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The arresting officer had a prior history with Kosta. On Nerang Street, the PSLO team — the same team that had been stealing Kosta's tent from his campsite in the forest when he wasn't there — was witnessed giving a bottle of water to a group of homeless people. Kosta called them out for performative philanthropy. Police were called. During that interaction, a Coles employee made a false allegation that Kosta had stolen. The police accepted the allegation without requesting CCTV footage, without asking for any supporting proof, and without asking why the matter had not been lodged as a formal police report.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">For the record: Kosta Kondratenko has never stolen from Coles or any retailer. There has never been a police call or report filed in his life claiming theft. The allegation was false. It was accepted without scrutiny.</p>
            <div class="border border-paper/[0.07] p-5 mb-2" style="background:rgba(0,0,0,0.1)">
                <div class="text-[0.48rem] tracking-[0.22em] uppercase text-paper/22 mb-3">For the Record — Theft Allegation</div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot mb-1.5">What Was Alleged</div>
                        <p class="text-[0.6rem] text-paper/35 leading-relaxed">A Coles employee alleged Kosta Kondratenko had stolen from the store. The allegation was made verbally to police at the scene.</p>
                    </div>
                    <div>
                        <div class="text-[0.5rem] tracking-[0.15em] uppercase text-sage mb-1.5">What Police Did Not Do</div>
                        <div class="space-y-1">
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.58rem] text-paper/35">Did not request CCTV footage</p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.58rem] text-paper/35">Did not ask for proof of the allegation</p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.58rem] text-paper/35">Did not ask why no formal report had been lodged</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BWC muting -->
        <div class="story-chapter reveal mb-8" style="border-left-color:rgba(201,138,16,0.3)">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE BODY WORN CAMERA.<br><span class="text-gold">MUTED. THE COMMENTS TO SECURITY — GONE.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Body Worn Camera footage obtained by Kosta revealed that the comments made by the arresting officer to Pacific Fair security had been selectively muted. The conversation between the officer and security — the conversation that would have established the officer's state of mind and the basis for the charge — was removed from the footage provided.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Selective muting of BWC footage is not an accident. Audio does not remove itself from one part of a recording while remaining intact in others. The muting of the specific exchange with security — the exchange most relevant to the charge — is evidence of maliciousness in the original arrest.</p>
            <div class="space-y-2 mt-2">
                <div class="ev-file ef-gold" onclick="openMV('video-bwc-coles')">
                    <div class="ev-icon ev-video">▶</div>
                    <div class="ev-meta">
                        <div class="ev-name">Axon_Body_3_2024-02-27_0950_X60500377.mp4</div>
                        <div class="ev-desc">BWC · Officer X60500377 · 27 Feb 2024 · Selectively muted</div>
                    </div>
                    <span class="ev-cta">Watch →</span>
                </div>
                <div class="ev-file ef-gold" onclick="openMV('video-bwc-coles-2')">
                    <div class="ev-icon ev-video">▶</div>
                    <div class="ev-meta">
                        <div class="ev-name">Axon_Body_3_2024-02-27_0950_X60J05359.mp4</div>
                        <div class="ev-desc">BWC · Officer X60J05359 · 27 Feb 2024 · Second camera</div>
                    </div>
                    <span class="ev-cta">Watch →</span>
                </div>
            </div>
        </div>

        <!-- DPP pursuit / District Court -->
        <div class="story-chapter reveal mb-8" style="border-left-color:rgba(193,68,14,0.3)">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE DPP PURSUED IT ANYWAY.<br><span class="text-hot">DISTRICT COURT. MAGISTRATE'S COURT. AGAIN.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The Director of Public Prosecutions — having seen the selectively muted BWC footage — did not drop the charge. Kosta appealed the decision to the District Court. The District Court Judge made direct comments to the prosecution: this matter was probably not worth pursuing, given the significant cost to the taxpayer and the minor penalty that would result from a guilty verdict even if they succeeded.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The matter was sent back to the Magistrate's Court. When it was re-listed, neither the prosecution nor the presiding Magistrate had the information that it had been returned from the District Court. It was treated as a new case — starting fresh — as though the District Court's comments and the return had never occurred.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">It was only through Adam Watson — who was representing Kosta — raising the matter directly and noting that the file had already been through the District Court that the correct procedural history was restored. The prosecution had also attempted to bring up the Yakult bottle in the Magistrate's Court, using it to attack Kosta's character. The item in question had a retail value of approximately $1. The prosecution raised it in proceedings that have, by this point, cost the taxpayer an estimated $550,000.</p>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">The Yakult</div>
                    <div class="font-display text-2xl text-hot mb-1">~$1</div>
                    <p class="text-[0.58rem] text-paper/35 leading-relaxed">Approximate retail value of item. Already outside the 5-pack. Would have been discarded.</p>
                </div>
                <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-2">Prosecution used it to</div>
                    <div class="font-display text-xl text-gold mb-1">Assassinate Character</div>
                    <p class="text-[0.58rem] text-paper/35 leading-relaxed">Raised in Magistrate's Court proceedings to attack Kosta's credibility. A $1 item.</p>
                </div>
                <div class="border border-paper/[0.07] p-5" style="background:rgba(0,0,0,0.1)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-2">Cost to Taxpayer</div>
                    <div class="font-display text-2xl text-paper/55 mb-1">$550,000</div>
                    <p class="text-[0.58rem] text-paper/35 leading-relaxed">Estimated cost of running this prosecution through Magistrate's Court, appeal to District Court, and back.</p>
                </div>
            </div>

            <div class="border-l-4 border-hot/50 pl-5 mb-5" style="background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">The District Court Judge's Comment — His Honour Judge Rowan Jackson KC</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">His Honour Judge Rowan Jackson KC told the prosecution directly that this was probably not worth pursuing — the cost to the state was significant and even a successful prosecution would result in a minor penalty. He noted that it may not be in the DPP's best interest, or the interest of the public purse, to continue. The prosecution returned it to the Magistrate's Court regardless. A sincere thank you to Adam Watson for driving down from NSW to appear in person at multiple hearings and by AVL link — and an apology for not appearing on the July date.</p>
            </div>

            <!-- Court document evidence vault -->
            <div class="evidence-vault mt-4">
                <div class="ev-header" onclick="toggleVault(this)">
                    <div class="flex items-center gap-2">
                        <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Court Documents</span>
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Contravene Move On Direction · Appeal · Order</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">2 files</span>
                        <span class="ev-toggle">▼</span>
                    </div>
                </div>
                <div class="ev-body">
                    <div class="ev-file ef-sage" onclick="openMV('pdf-appeal-granted')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">20250901155203045.pdf — Crown Appeal Granted</div>
                            <div class="ev-desc">PDF · DPP grants appeal · Ex parte sentence ruled miscarriage of justice · March, April, June appearances</div>
                        </div>
                        <span class="redact-tag" style="color:#3d7a4a;border-color:rgba(61,122,74,0.4)">✓ Appeal Granted</span>
                        <span class="ev-cta ml-2">View →</span>
                    </div>
                    <div class="ev-file ef-violet" onclick="openMV('pdf-rowan-jackson-order')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">KONDRATENKO_Order.pdf — Judge Rowan Jackson KC</div>
                            <div class="ev-desc">PDF · His Honour Judge Rowan Jackson KC · Sentence set aside · Remitted to Magistrate's Court</div>
                        </div>
                        <span class="redact-tag" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">⚖ District Court Order</span>
                        <span class="ev-cta ml-2">View →</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Certificate of Readiness -->
        <div class="story-chapter reveal mb-8" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Procedural Weaponisation</span><span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">D236/24 · District Court of Queensland</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE CERTIFICATE OF READINESS.<br><span class="text-hot">ALTERED. REFILED. USED TO PREDETERMINE THE SCOPE OF AN APPEAL.</span></h3>
            <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"The Director of Public Prosecutions doesn't run the Court — the Court runs it. I will only take directions directly from the Judge."</p>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The appeal of the Contravene Move-On Direction conviction — matter D236/24, District Court of Queensland, Southport — exposed a mechanism by which an administrative form was used to predetermine the scope of a judicial appeal before any judge had reviewed it. The instrument was the Certificate of Readiness: a filing required before a hearing date is set.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">On 14 October 2025, the DPP enquired about a hearing date. The registry disclosed that a Certificate of Readiness was outstanding — Kosta had never been notified one was required. That same evening, Kosta submitted his own version: full substantive appeal, new evidence sought (BWC footage, Coles CCTV, the Coles employee subpoenaed for cross-examination), estimated half a day. The following day, the DPP sent their version for countersignature. It described a fundamentally different proceeding.</p>

            <!-- Two versions comparison -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">DPP's Version</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Scope: procedural fairness only</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">No new evidence sought</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">No witnesses — cross-examination not preserved</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Estimated time: 30 minutes</p></div>
                    </div>
                </div>
                <div class="border border-sage/20 p-5" style="background:rgba(61,122,74,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-3">Kosta's Version</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Scope: substantive conviction + evidence + fairness</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">BWC footage, Coles CCTV, Coles employee testimony sought</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Coles employee subpoenaed and called for cross-examination</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Estimated time: 4 hours (half day)</p></div>
                    </div>
                </div>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Signing the DPP's version would have converted a substantive appeal — challenging the conviction itself, seeking new evidence, and preserving cross-examination rights — into a brief 30-minute procedural review. The two documents described fundamentally different proceedings. Countersigning the DPP's version would have forfeited rights that had not yet been adjudicated by any judge.</p>

            <!-- The Alteration -->
            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">The Alteration — 16 October 2025</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Kosta's signed Certificate of Readiness was returned by the DPP with handwritten alterations. The substantive sections — the appeal scope, the new evidence, the cross-examination request — were crossed out with a notation: <strong class="text-paper/65">"Replacement to be Lodged."</strong> The registry declined to file the altered document. Kosta's own signed version was now unfiliable. The DPP had altered a self-represented party's signed document and prevented its filing without creating any formal dispute mechanism.</p>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">17 Oct: Attended in person — told digital signatures unacceptable, wet signature required. Issued formal notice requesting judicial intervention.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">21 Oct: DPP resent their version. Signed and returned by email. Registry declined again — physical hard copy required.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">22 Oct: Wrote directly to the District Court Registrar requesting urgent judicial directions.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">23 Oct: Judge requested electronic copies — bypassed hard-copy requirement. 24 Oct: matter listed for 30 October, Courtroom 17, Webex permitted.</p></div>
                </div>
            </div>

            <!-- Information gap -->
            <div class="border border-gold/20 p-5 mb-5" style="background:rgba(201,138,16,0.03)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-3">The Information Gap — When It Was Remitted</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">At the 30 October mention, the Judge reviewed the full paper trail — including the DPP's alterations and both competing versions. Addressing prosecutor Karyn Land directly, the Judge remarked that given the likely penalty and the cost to the state, the matter may not be worth pursuing. The matter was remitted back to the Magistrates Court.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">When the matter was re-listed in the Magistrates Court, no mention was made of the District Court proceedings, the remittal order, or the Judge's bench comment about proportionality. The Magistrate proceeded as if the matter was fresh. It was Adam Watson — attending with Kosta — who raised the District Court Judge's comment. Once that judicial record was introduced, the prosecution dropped the charge. The conviction was not reimposed. A District Court Judge's direction had to be carried into the lower court by the defendant himself.</p>
            </div>

            <div class="border-l-4 border-hot/50 pl-5 mb-5" style="background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Structural Issues — Sunlight.Quest Raises</div>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed"><strong class="text-paper/55">Certificate design:</strong> The DPP used an administrative form to predetermine appeal scope before any judicial review.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed"><strong class="text-paper/55">Document alteration:</strong> A prosecutor crossed out sections of a self-represented party's signed document and marked it for replacement — preventing filing without a formal dispute mechanism.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed"><strong class="text-paper/55">Filing loop:</strong> Technical filing requirements exploited over three weeks to exhaust the appellant.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed"><strong class="text-paper/55">Information transfer failure:</strong> The District Court Judge's bench comment did not travel with the remitted matter. The charge nearly proceeded to reimposition without the appellate history.</p></div>
                </div>
            </div>

            <!-- Evidence vault: Certificate of Readiness -->
            <div class="evidence-vault mt-4">
                <div class="ev-header" onclick="toggleVault(this)">
                    <div class="flex items-center gap-2">
                        <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Certificate of Readiness · D236/24 · Procedural Weaponisation</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">4 files</span>
                        <span class="ev-toggle">▼</span>
                    </div>
                </div>
                <div class="ev-body">
                    <div class="ev-file ef-hot" onclick="openMV('pdf-cor-alteration')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">certificate_of_readiness_alteration.pdf</div>
                            <div class="ev-desc">PDF · Kosta's signed certificate returned by DPP with handwritten alterations · Substantive sections crossed out · "Replacement to be Lodged"</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                    <div class="ev-file ef-hot" onclick="openMV('pdf-cor-dpp')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">certificate_of_readiness_dpp_version.pdf</div>
                            <div class="ev-desc">PDF · DPP's version · Narrowed to procedural fairness only · 30 minutes · No witnesses · No new evidence</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                    <div class="ev-file ef-sage" onclick="openMV('pdf-cor-kosta')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">certificate_of_readiness.pdf</div>
                            <div class="ev-desc">PDF · Kosta's version · Full substantive appeal · BWC + CCTV + Coles employee cross-examination · Half day estimated</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                    <div class="ev-file ef-violet" onclick="openMV('pdf-cor-filed')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">Certificate of readiness.pdf</div>
                            <div class="ev-desc">PDF · Court-filed Certificate of Readiness · D236/24 · District Court of Queensland Southport</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coles / offer to pay -->
        <div class="story-chapter reveal mb-8" style="border-left-color:rgba(61,122,74,0.3)">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THEY WERE OFFERED PAYMENT.<br><span class="text-sage">COLES REFUSED.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Kosta was banned from the store. An associate — acting on Kosta's behalf — attended the Coles store to ask whether Coles wanted payment for the Yakult bottle. The store refused.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The Area Manager of Coles was also contacted directly to determine whether payment for the Yakult would resolve the matter. The Coles Area Manager did not accept it.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Coles declined to accept approximately $1 in payment and has instead been party to a prosecution that has cost the taxpayer $550,000. Civil action against Coles arising from this matter is under consideration.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="border border-sage/20 p-5" style="background:rgba(61,122,74,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-2">Offer Made</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Associate attended Coles Pacific Fair to offer payment for the Yakult</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Coles Area Manager contacted directly — same offer made</p></div>
                    </div>
                </div>
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">Coles Response</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Store refused payment</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Area Manager declined to accept ~$1</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Civil action under consideration</p></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stat strip -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-2 reveal">
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-hot mb-1">$550K</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Taxpayer cost</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">To prosecute a $1 item</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-gold mb-1">BWC</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Selectively muted</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Officer comments to security removed</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-paper/50 mb-1">0</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Prior theft reports</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Never — not once in Kosta's life</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-sage mb-1">~$1</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Yakult retail value</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Offered to Coles — refused</div>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     POLICE CORRUPTION / ORACLE EAST + AQUATIC CENTRE
══════════════════════════════════════ -->
<section id="assault" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.05) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Police Accountability — Episode 1</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">ORACLE EAST.<br><span class="text-hot">STALKED & ASSAULTED.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">Six assailants. A police corruption recording. A comment that triggered an investigation. An aquatic centre that photographed and monitored me. All connected.</p>
            </div>
            <div class="max-w-xs">
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag text-hot" style="color:#c1440e">🎙 Audio Evidence</span>
                    <span class="evidence-tag text-gold" style="color:#c98a10">📷 Photo Evidence</span>
                    <span class="evidence-tag" style="color:rgba(245,234,212,0.4)">🎬 Video Evidence</span>
                </div>
            </div>
        </div>

        <div class="max-w-3xl mb-14 reveal">
            <p class="font-serif italic text-paper/60 leading-relaxed mb-5" style="font-size:clamp(1rem,2.2vw,1.2rem)">"I was stalked from Broadbeach North tram stop. Six people. One of them was someone I had never spoken to, connected to RJ, attacking me specifically because of the video I'd made. What I didn't know at the time was that during the police interview afterwards, an officer told my attacker that a content creator should expect to get bashed."</p>
        </div>

        <div class="space-y-14">

            <!-- Police Corruption Recording -->
            <div class="story-chapter reveal" style="border-left-color:rgba(193,68,14,0.3)">
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
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span>
                            <span class="ev-toggle">▼</span>
                        </div>
                    </div>
                    <div class="ev-body">
                        <!-- Aquatic Centre Leaked Board Photo -->
                        <div class="ev-file ef-gold" onclick="openMV('image-aquatic')">
                            <div class="ev-icon ev-img">📷</div>
                            <div class="ev-meta">
                                <div class="ev-name">aquatic_centre_surveillance_board.jpg</div>
                                <div class="ev-desc">Image · Leaked surveillance board · Council staff photos annotated & distributed · Privacy breach confirmed</div>
                            </div>
                            <span class="redact-tag" style="color:#c98a10;border-color:rgba(201,138,16,0.4)">📋 Leaked Board</span>
                            <span class="ev-cta ml-2">View →</span>
                        </div>
                        <div class="ev-zip-bar">
                            <span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">Download evidence file</span>
                            <button class="mv-dl-btn mv-dl-gold text-[0.48rem]" onclick="downloadZip('police_accountability_files.zip')">⬇ Download</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Ministerial escalation / Daniel Purdie / Robina Hospital -->
    <div class="max-w-4xl mx-auto mt-10">
        <div class="story-chapter reveal" style="border-left-color:rgba(193,68,14,0.35)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Ministerial Escalation</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">ESCALATED TO THE MINISTER FOR POLICE.<br><span class="text-hot">SERGEANT ROBERT WILKINSON SENT IN RESPONSE.</span></h3>
            <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"I wrote to Daniel Purdie — Minister for Police — requesting a formal review of the assault. His office responded in writing to confirm Sergeant Robert Wilkinson had been sent to me in connection with my enquiry. The assault was documented at Robina Hospital. All three documents are on the record."</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Following the Oracle East assault, a formal written request for review was submitted directly to Daniel Purdie — Minister for Police. The email documented the assault, the failure to properly investigate, and the conduct of the officers involved. Robina Hospital medical records were obtained to substantiate the physical injuries sustained in the attack, providing clinical corroboration of a 6-on-1 assault.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The Minister for Police's office responded in writing, confirming that Sergeant Robert Wilkinson had been sent to Kosta Kondratenko in connection with the enquiry. That written confirmation is significant: it establishes a formal record that the escalation was received, logged, and actioned at ministerial level. The conduct documented throughout this section — directing an assault victim to the Child Protection Unit, failing to subpoena the assault location's strata, raising attacker-supplied justifications — occurred against the backdrop of a ministerial-level referral that produced a sergeant's visit and nothing further.</p>

            <div class="evidence-vault mt-4">
                <div class="ev-header" onclick="toggleVault(this)">
                    <div class="flex items-center gap-2">
                        <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Oracle East Assault · Ministerial Escalation · Medical Evidence</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">3 files</span>
                        <span class="ev-toggle">▼</span>
                    </div>
                </div>
                <div class="ev-body">
                    <div class="ev-file ef-hot" onclick="openMV('pdf-oracle-purdie-email')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">request_for_review_of_assault.pdf</div>
                            <div class="ev-desc">PDF · Original email to Daniel Purdie (Minister for Police) · Formal request for review of Oracle East assault</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                    <div class="ev-file ef-hot" onclick="openMV('pdf-oracle-robina-medical')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">robina_hospital_medical_records.pdf</div>
                            <div class="ev-desc">PDF · Robina Hospital Medical Certificate · Clinical record of injuries sustained in 6-on-1 assault</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                    <div class="ev-file ef-gold" onclick="openMV('pdf-oracle-minister-response')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">letter_from_minister_of_police.pdf</div>
                            <div class="ev-desc">PDF · Letter from Daniel Purdie's office · Confirms Sergeant Robert Wilkinson visited in response to enquiry</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Child Protection Unit text / SMS investigation / Task Force Latro -->
    <div class="max-w-4xl mx-auto mt-16">
        <div class="story-chapter reveal" style="border-left-color:rgba(193,68,14,0.4)">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">CHILD PROTECTION UNIT.<br><span class="text-hot">AFTER A 6-ON-1 ASSAULT. BY PEOPLE I DIDN'T KNOW.</span></h3>
            <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-5">"I received a text message from police directing me to report to the Child Protection Unit. I had just been assaulted by six people I had never met. That word — in that context — tells you everything about which side police were on."</p>

            <!-- SMS screenshot -->
            <div class="reveal mb-6">
                <div class="border border-paper/[0.07] overflow-hidden" style="background:rgba(0,0,0,0.18)">
                    <div class="px-4 py-2 border-b border-paper/[0.06]" style="background:rgba(0,0,0,0.25)">
                        <span class="text-[0.45rem] tracking-[0.2em] uppercase text-hot">Primary Source &nbsp;·&nbsp; Police SMS &nbsp;·&nbsp; Queensland Police Service</span>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-0">
                        <div class="sm:w-64 shrink-0 flex items-center justify-center p-4" style="background:rgba(0,0,0,0.15)">
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/r+j/gc_child_protection_unit.jpg" alt="Police SMS directing assault victim to Child Protection Unit" class="w-full max-w-[220px] sm:max-w-full border border-paper/[0.08]" style="cursor:pointer" onclick="this.closest('.story-chapter').querySelector('.cpu-sms-expand') && this.closest('.story-chapter').querySelector('.cpu-sms-expand').click()" loading="lazy" />
                        </div>
                        <div class="flex-1 p-5 flex flex-col justify-center">
                            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">What You Are Looking At</div>
                            <p class="text-[0.65rem] text-paper/50 leading-relaxed mb-3">This is the SMS received from Queensland Police following the Oracle East assault — a 6-on-1 attack by people Kosta Kondratenko had never met. The message directs him to the <strong class="text-paper/70">Child Protection Unit</strong>.</p>
                            <p class="text-[0.65rem] text-paper/45 leading-relaxed mb-4">A person who has just been assaulted by a group of strangers is not a child protection matter. The routing of this victim to that unit is not an administrative coincidence. It reflects the framing applied to this case from the start — that the victim was the problem to be managed.</p>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="border border-hot/20 px-3 py-2" style="background:rgba(193,68,14,0.04)">
                                    <div class="text-[0.42rem] tracking-[0.18em] uppercase text-hot mb-1">Sender</div>
                                    <div class="text-[0.6rem] text-paper/55">Queensland Police Service</div>
                                </div>
                                <div class="border border-hot/20 px-3 py-2" style="background:rgba(193,68,14,0.04)">
                                    <div class="text-[0.42rem] tracking-[0.18em] uppercase text-hot mb-1">Unit Referenced</div>
                                    <div class="text-[0.6rem] text-paper/55">Child Protection Unit</div>
                                </div>
                                <div class="border border-gold/20 px-3 py-2" style="background:rgba(201,138,16,0.04)">
                                    <div class="text-[0.42rem] tracking-[0.18em] uppercase text-gold mb-1">Context</div>
                                    <div class="text-[0.6rem] text-paper/55">Assault by 6 strangers</div>
                                </div>
                                <div class="border border-gold/20 px-3 py-2" style="background:rgba(201,138,16,0.04)">
                                    <div class="text-[0.42rem] tracking-[0.18em] uppercase text-gold mb-1">Why It Matters</div>
                                    <div class="text-[0.6rem] text-paper/55">Signals whose side police chose</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Following the Oracle East assault, Kosta Kondratenko received a police text message directing him to report to the Child Protection Unit. The assault involved six people Kosta did not know. The invocation of child protection in that context is not procedural. It is a signal.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">When the investigating officer called Kosta, she raised the claim made by the attackers: that Kosta had sent a text message to one of their girls, and that this was their justification for the assault. The fact that the investigating officer raised this at all — volunteering the attackers' stated rationale as though it were a mitigating factor — demonstrates that she was not approaching this as an investigation of an assault. She was approaching it as an inquiry into whether the victim deserved it.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">No subpoena was placed on the Oracle East strata. Kosta made enquiries with Jill, the strata manager, who confirmed no subpoena had been received. If police were genuinely investigating a 6-on-1 assault at that address, obtaining strata records would be elementary. They did not seek them. They were not in his corner.</p>

            <div class="border border-paper/[0.07] p-5 mb-6" style="background:rgba(0,0,0,0.1)">
                <div class="text-[0.48rem] tracking-[0.22em] uppercase text-paper/22 mb-3">The SMS Service — On the Record</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The old version of this website had an SMS sign-up service. It has been preserved on Facebook. Anyone could register for it. Messages sent through it were mass-sends — broadcast to all subscribers simultaneously. Kosta did not send any personal text message to any girl. The SMS service was a public subscription tool, not a personal messaging channel.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">Even if a message had been sent — and none was sent personally — the idea that a text message constitutes grounds for six people to physically assault one person is not a legal defence in any jurisdiction. The investigating officer raising it as context is the investigating officer signalling that she considered it relevant mitigation. That is bias. It is documented here.</p>
            </div>

            <div class="border-l-4 border-hot/50 pl-5 mb-5" style="background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Why David Crisafulli Won &nbsp;·&nbsp; Why Task Force Latro North Was Disbanded</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-2">Task Force Latro North was disbanded as part of David Crisafulli's election win. The conduct documented on this page — directing an assault victim to the Child Protection Unit, failing to subpoena the assault location's strata, raising attacker-supplied justifications as relevant context, routing a private SMS investigation through Marc Barrow — is a representative sample of why the community voted the way it did.</p>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-2">The screenshot above is not an abstraction. It is the SMS. It shows what Queensland Police sent to a man who had just been attacked by six people he had never met. That message — pointing him to the Child Protection Unit — is the institutional failure that cost Steven Miles the Queensland election. Community safety was the ballot issue. This is what community safety looked like under his government.</p>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">A man assaulted by six strangers, stalked across the city, directed to the Child Protection Unit, and then investigated for whether he deserved the assault. Crisafulli won because enough people recognised that pattern — whether it happened to them, or someone they knew, or someone they read about. The screenshot above is evidence of exactly that pattern.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04]">
                <div class="bg-ink px-5 py-5 text-center">
                    <div class="stat-number text-3xl text-hot mb-1">CPU</div>
                    <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/28">Text received</div>
                    <div class="text-[0.45rem] text-paper/18 mt-1">After 6-on-1 assault</div>
                </div>
                <div class="bg-ink px-5 py-5 text-center">
                    <div class="stat-number text-3xl text-hot mb-1">0</div>
                    <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/28">Strata subpoena</div>
                    <div class="text-[0.45rem] text-paper/18 mt-1">Jill confirmed — none issued</div>
                </div>
                <div class="bg-ink px-5 py-5 text-center">
                    <div class="stat-number text-3xl text-gold mb-1">MASS</div>
                    <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/28">SMS service</div>
                    <div class="text-[0.45rem] text-paper/18 mt-1">Public signup · Not personal</div>
                </div>
                <div class="bg-ink px-5 py-5 text-center">
                    <div class="stat-number text-3xl text-sage mb-1">↓</div>
                    <div class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/28">Task Force Latro N</div>
                    <div class="text-[0.45rem] text-paper/18 mt-1">Disbanded — Crisafulli win</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     SKY NEWS SECTION
══════════════════════════════════════ -->
<section id="media" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(201,138,16,0.03) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-gold"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-gold">Media Accountability — Episode 1</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">THE STORY<br><span class="text-gold">THAT DIDN'T RUN.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">A Sky News journalist arranged an interview about homelessness on the Gold Coast. Then she pulled my criminal history. Then a charge sheet that could only have come from police appeared to be in circulation.</p>
            </div>
            <div class="max-w-xs">
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag text-gold" style="color:#c98a10">📺 Sky News</span>
                    <span class="evidence-tag text-hot" style="color:#c1440e">⚠ QP-9 Disclosure</span>
                </div>
            </div>
        </div>

        <div class="max-w-3xl mb-14 reveal">
            <p class="font-serif italic text-paper/60 leading-relaxed mb-5" style="font-size:clamp(1rem,2.2vw,1.2rem)">"I gave a Sky News journalist a brief on what I'd found — the homelessness services gap on the Gold Coast, the 7 Care Connect posters in the bathroom at Nerang Street. She interviewed me. And then instead of covering the story, she pulled my file."</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[1fr_300px] gap-12">
            <div class="space-y-10">

                <div class="story-chapter reveal" style="border-left-color:rgba(201,138,16,0.3)">
                    <div class="flex items-center gap-3 mb-6"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">The Leak</span></div>

                    <!-- Lauren Forbes identification -->
                    <div class="flex gap-6 items-start mb-8 border border-gold/20 p-5" style="background:rgba(201,138,16,0.03)">
                        <div class="shrink-0 border border-gold/30 overflow-hidden" style="width:140px;aspect-ratio:3/4">
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/lauren_forbes.jpg" alt="Lauren Forbes" class="w-full h-full object-cover object-top" />
                        </div>
                        <div class="pt-1">
                            <div class="text-[0.45rem] tracking-[0.22em] uppercase text-gold mb-2">Identified — Sky News Journalist</div>
                            <div class="font-display text-2xl tracking-wide text-paper/85 leading-tight mb-3">LAUREN FORBES</div>
                            <div class="text-[0.62rem] text-paper/45 leading-relaxed mb-3">Arranged an interview with Kosta Kondratenko about the homelessness services gap on the Gold Coast. Instead of running the story, she pulled his criminal history and forwarded his QP-9 charge sheet — and tram fine prosecution documents — to representatives at Hancock Prospecting.</div>
                            <div class="text-[0.55rem] text-paper/28 leading-relaxed">The QP-9 — a non-public Queensland Police charge document — was never a basis for public reporting. Its onward transmission to a third party is a potential breach of the <em>Information Privacy Act 2009</em> (Qld). The tram prosecution documents were equally non-public at the time of transmission. Both referred to the CCC.</div>
                        </div>
                    </div>

                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE EMAIL TO HANCOCK PROSPECTING.<br><span class="text-gold">MY CHARGE SHEET. AND MY TRAM FINES.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"A QP-9 is a Queensland Police charge sheet. It is not a public document. If a journalist has one, someone in Queensland Police gave it to them. That is an unauthorised disclosure of personal information. Sunlight.Quest has referred this to the CCC."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The email thread from the Sky News reporter — sent to Hancock Prospecting with my QP-9 attached — documents both the illegal disclosure of a police charge document and the framing of a homeless journalism source as unreliable based on a dropped charge. The Kangaroo Point McDonald's Public Nuisance charge was dropped by the DPP at first mention. A dropped charge is not a conviction.</p>

                    <!-- Care Connect story + email thread -->
                    <div class="border-t border-gold/10 pt-6 mb-6">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-4">The Story She Was Supposed to Cover</div>
                        <h3 class="font-display text-xl tracking-wide mb-4 leading-tight">7 CARE CONNECT POSTERS IN THE BATHROOM.<br><span class="text-gold">LIBRARY CARDS AT SOUTHPORT. WEBSITE DOWN FOR OVER 1.5 YEARS.</span></h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-4">
                            <div>
                                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/council_forbes/homeless-service-showers-small.jpg" alt="7 Care Connect posters in the bathroom at Nerang Street" class="w-full border border-paper/[0.08]" loading="lazy" />
                                <div class="text-[0.45rem] text-paper/25 mt-1.5 leading-relaxed">7 Care Connect posters · Nerang Street bathrooms · Gold Coast homelessness services gap</div>
                            </div>
                            <div>
                                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">I walked into the bathroom at Nerang Street and counted seven Care Connect crisis service posters on the walls. That is where you put homelessness outreach when you know where people in crisis are: in the bathrooms they are using to clean themselves. That was the story Lauren Forbes was supposed to run.</p>
                                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">The Care Connect website has been down for over 1.5 years — independently verified on the Wayback Machine, with the outage beginning around the time I became homeless and started documenting the services gap. A crisis referral service whose website does not exist is not a safety net. It is theatre.</p>
                                <div class="border border-gold/20 p-3" style="background:rgba(201,138,16,0.04)">
                                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-gold/60 mb-2">Lauren Forbes — What She Said When She Called</div>
                                    <p class="font-serif italic text-paper/60 text-sm leading-relaxed mb-1">"I hope you're dry!"</p>
                                    <p class="text-[0.52rem] text-paper/30 leading-relaxed">She would call and say that. Not: when can we schedule the interview. Not: I'm still working on the story. "I hope you're dry." The story never ran. My charge sheet went to Hancock Prospecting instead.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Library cards at Southport library -->
                        <div class="mb-4">
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/library-cards.jpg" alt="7 Care Connect library cards at Southport Library" class="w-full border border-paper/[0.08]" loading="lazy" />
                            <div class="text-[0.45rem] text-paper/25 mt-1.5 leading-relaxed">7 Care Connect library referral cards · Southport Library · Gold Coast Council homelessness outreach</div>
                        </div>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-5">The same 7 Care Connect branding appeared as library referral cards distributed at Southport Library — a second point of presence for a service whose website had already been expired for over a year. The Gold Coast Council was actively distributing referral material pointing homeless people to a website that did not exist. The library cards send someone to an address that returns an error. That is the Council's homelessness safety net in practice.</p>

                        <!-- Hostpapa hosting expired screenshot -->
                        <div class="border border-hot/20 p-4 mb-5" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">7careconnect.com.au — Hosting Expired · Verified</div>
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/7careconnecthostingexpired.png" alt="7 Care Connect website down — Hostpapa hosting expired" class="w-full border border-paper/[0.06] mb-3" loading="lazy" />
                            <div class="text-[0.45rem] text-paper/25 leading-relaxed">Screenshot · 7careconnect.com.au · Hostpapa hosting expired · Site offline · Referral service unreachable</div>
                            <p class="text-[0.65rem] text-paper/42 leading-relaxed mt-3">The 7 Care Connect website did not simply go down — the Hostpapa hosting plan expired and was not renewed. This is not a technical failure. This is an administrative decision: someone decided not to pay the hosting bill. The result is that every Care Connect poster in every bathroom and every library card distributed at Southport Library points a homeless person to a domain that returns a hosting-expired error. The Gold Coast Council continued distributing the referral material after the hosting lapsed.</p>
                        </div>

                        <!-- QLD homeless budget vs hosting cost gap -->
                        <div class="border border-gold/20 p-5 mb-5" style="background:rgba(201,138,16,0.03)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-3">The Gap — Queensland Homelessness Budget vs. A Hosting Bill</div>
                            <h4 class="font-display text-xl tracking-wide mb-4 leading-tight">HUNDREDS OF MILLIONS SPENT ON HOMELESSNESS.<br><span class="text-gold">COULDN'T PAY THE HOSTPAPA BILL.</span></h4>
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/qld_homeless_budget.png" alt="Queensland homelessness budget" class="w-full border border-paper/[0.06] mb-4" loading="lazy" />
                            <div class="text-[0.45rem] text-paper/25 mb-4 leading-relaxed">Screenshot · Queensland Government homelessness funding allocation · Published budget figures</div>
                            <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Queensland spends hundreds of millions of dollars per year on homelessness funding. The 7 Care Connect website — a Gold Coast Council referral service actively distributed via posters and library cards to homeless people — was taken offline because the hosting plan was not renewed. A standard Hostpapa shared hosting plan costs approximately $5–$15 per month. The Council's primary digital homelessness referral service was unreachable for over 1.5 years at a cost of approximately $60–$180 in missed hosting payments.</p>
                            <p class="text-[0.68rem] text-paper/45 leading-relaxed">This is the gap: not a gap between government ambition and achievability, but between a statewide funding commitment measured in hundreds of millions and an administrative oversight measured in dollars. Homeless people were being handed cards pointing them to a website that hadn't existed for over a year. No one at the Gold Coast Council noticed, or noticed and did not act. The posters stayed on the walls. The library cards kept circulating. The website stayed down.</p>
                        </div>

                        <div class="evidence-vault">
                            <div class="ev-header" onclick="toggleVault(this)">
                                <div class="flex items-center gap-2">
                                    <span class="text-[0.48rem] tracking-[0.22em] uppercase text-gold">📁 Evidence Files</span>
                                    <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Lauren Forbes · Email Thread · Care Connect Story</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span>
                                    <span class="ev-toggle">▼</span>
                                </div>
                            </div>
                            <div class="ev-body">
                                <div class="ev-file ef-gold" onclick="openMV('pdf-lauren-forbes-email')">
                                    <div class="ev-icon ev-pdf">PDF</div>
                                    <div class="ev-meta">
                                        <div class="ev-name">lauren_forbes_email_thread.pdf</div>
                                        <div class="ev-desc">PDF · Email thread with Lauren Forbes · Sky News journalist · Care Connect story · Calls saying "I hope you're dry!"</div>
                                    </div>
                                    <span class="ev-cta">View →</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tram fines sub-section -->
                    <div class="mt-6 border-t border-gold/10 pt-6">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-4">She Also Leaked — Tram Fine Prosecution Documents</div>
                        <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">$2.84 FARE.<br><span class="text-gold">$19,096 MAXIMUM PENALTY. FORWARDED TO HANCOCK PROSPECTING.</span></h3>
                        <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Lauren Forbes did not stop at the QP-9. She also obtained and forwarded prosecution documents relating to tram fine charges filed against Kosta Kondratenko — charges arising from two incidents on the Gold Coast G-Link tram line in June and July 2024, when Kosta was homeless and without the fare.</p>
                        <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Three charges were laid. Two under s218C(1) of the Transport Operations (Passenger Transport) Regulation — fare evasion on 27 June and 13 July 2024. The disputed fare value: $2.84. The maximum combined penalty for those two charges: $12,644. The third charge is where the prosecution reveals its character: Kosta was charged under s127(5) of the Transport Operations (Passenger Transport) Act for failure to state his name — because when Officer Trevor Clinton demanded it, Kosta responded: <span class="font-display text-paper/70">"I request my right to privacy."</span> That statement is Charge 3. Maximum penalty: $6,452.</p>
                        <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Combined maximum exposure: <strong class="text-paper/70">$19,096</strong> — against a $2.84 disputed fare. A ratio of 6,723:1. The prosecution brief, filed by James Kelvin Goldsworthy Tribe, Principal Legal Officer of TMR Prosecution Services, recorded homelessness as the reason Kosta was without a ticket — and concluded it did not constitute reasonable excuse. Case 465/26793 proceeded to Southport Magistrates Court, first mention hearing 9 September 2025.</p>
                        <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">These prosecution documents were not obtained through any public proceeding at the time Lauren Forbes had them. Their transmission to Hancock Prospecting — a private corporation with a documented interest in discrediting Kosta Kondratenko — is a second, distinct disclosure of non-public legal proceedings for the purpose of character suppression.</p>

                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-5">
                            <div class="bg-ink px-4 py-4 text-center">
                                <div class="font-display text-2xl text-gold mb-1">$2.84</div>
                                <div class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/28">Disputed Fare</div>
                            </div>
                            <div class="bg-ink px-4 py-4 text-center">
                                <div class="font-display text-2xl text-hot mb-1">$19,096</div>
                                <div class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/28">Maximum Penalty</div>
                            </div>
                            <div class="bg-ink px-4 py-4 text-center">
                                <div class="font-display text-2xl text-hot mb-1">6,723:1</div>
                                <div class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/28">Penalty / Fare Ratio</div>
                            </div>
                            <div class="bg-ink px-4 py-4 text-center">
                                <div class="font-display text-2xl text-gold mb-1">3</div>
                                <div class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/28">Charges Filed</div>
                            </div>
                        </div>

                        <div class="border-l-4 border-gold/40 pl-5 mb-5" style="background:rgba(201,138,16,0.04);padding:1rem 1rem 1rem 1.25rem">
                            <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold/70 mb-2">Charge 3 — Verbatim Basis · Officer Trevor Clinton · 13 July 2024</div>
                            <p class="font-serif italic text-paper/60 text-base leading-relaxed">"I request my right to privacy."</p>
                            <p class="text-[0.55rem] text-paper/35 mt-2">Six words said to an inspector who demanded Kosta's name. This statement became the basis for a charge carrying a $6,452 maximum penalty under s127(5) Transport Operations (Passenger Transport) Act.</p>
                        </div>

                        <div class="evidence-vault">
                            <div class="ev-header" onclick="toggleVault(this)">
                                <div class="flex items-center gap-2">
                                    <span class="text-[0.48rem] tracking-[0.22em] uppercase text-gold">📁 Evidence Files</span>
                                    <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Tram Prosecution Docs · Case 465/26793</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">2 files</span>
                                    <span class="ev-toggle">▼</span>
                                </div>
                            </div>
                            <div class="ev-body">
                                <div class="ev-file ef-hot" onclick="openMV('pdf-tram-court-docs')">
                                    <div class="ev-icon ev-pdf">PDF</div>
                                    <div class="ev-meta">
                                        <div class="ev-name">tram_fine_court_docs.pdf</div>
                                        <div class="ev-desc">PDF · Court Documents · Case 465/26793 · Southport Magistrates Court · 3 charges, max $19,096</div>
                                    </div>
                                    <span class="ev-cta">View →</span>
                                </div>
                                <div class="ev-file ef-gold" onclick="openMV('pdf-tram-email')">
                                    <div class="ev-icon ev-pdf">PDF</div>
                                    <div class="ev-meta">
                                        <div class="ev-name">tram_fine_court_doc_email.pdf</div>
                                        <div class="ev-desc">PDF · Email · Court documents transmitted by Lauren Forbes to Hancock Prospecting</div>
                                    </div>
                                    <span class="ev-cta">View →</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Gold Coast Homeless Outreach Team SMS -->
                <div class="story-chapter reveal mt-8" style="border-left-color:rgba(193,68,14,0.45)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Gold Coast Homeless Outreach Team · SMS · March 2026</span></div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">"WERE YOU ABLE TO GET TO AN ACCESS POINT?"<br><span class="text-hot">NOBODY TOLD ME WHERE IT IS.</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">The housing team in pink shirts ambushed me at the library. I gave them my mobile number and my email address and asked them to send through any form I needed to sign. What I received instead was a series of SMS messages from the Gold Coast Homeless Outreach Team — messages that reframed my homelessness as a procedural failure on my part, attributed a statement I never made, and offered solutions to a problem I don't have.</p>

                    <!-- Message screenshots grid -->
                    <div class="space-y-3 mb-6">
                        <!-- Message 1 -->
                        <div class="border border-paper/[0.08] p-4" style="background:rgba(0,0,0,0.18)">
                            <div class="text-[0.44rem] tracking-[0.16em] uppercase text-paper/25 mb-2">Incoming · Gold Coast Homelessness Outreach Team · Rihanna</div>
                            <p class="text-[0.7rem] text-paper/60 leading-relaxed italic">"Hello Kosta, this is the Gold Coast homelessness outreach team. Just checking in to see if you were able to get to an access point to complete intake so we can support you with your housing goals?"</p>
                            <div class="mt-3 border-l-2 border-hot/40 pl-3">
                                <p class="text-[0.58rem] text-paper/38 leading-relaxed">An "access point" was referenced without any prior communication about what an access point is, where it is, or that attending one was a requirement. I had already provided my contact details to the housing team at the library and asked them to send forms. The SMS treats my failure to attend an undisclosed location as the reason I remain unhoused.</p>
                            </div>
                        </div>

                        <!-- Message 2 — NSW / Link 2 Home allegation -->
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.05)">
                            <div class="text-[0.44rem] tracking-[0.16em] uppercase text-hot mb-2">Incoming · Allegation — Statement I Never Made</div>
                            <p class="text-[0.7rem] text-paper/60 leading-relaxed italic mb-3">"Rihanna from the housing team (pink tshirts) said you were contemplating calling link to home as they would be able to access funding for 28 days accommodation however you would need to be in NSW to access this."</p>
                            <p class="text-[0.65rem] text-paper/55 leading-relaxed italic">"...alternatively help you return to NSW if this is something you would like to do."</p>
                            <div class="mt-3 border-l-2 border-hot/60 pl-3">
                                <p class="text-[0.58rem] text-paper/38 leading-relaxed">I never made any comment about Link 2 Home. I never said I wanted to return to NSW. This is a statement being attributed to me by the same housing team that ambushed me at the library — and it is being used as the basis for an offer to help me leave Queensland.</p>
                            </div>
                        </div>

                        <!-- Message 3 — QLD ID -->
                        <div class="border border-gold/15 p-4" style="background:rgba(201,138,16,0.04)">
                            <div class="text-[0.44rem] tracking-[0.16em] uppercase text-gold mb-2">Incoming · QLD ID Offer</div>
                            <p class="text-[0.7rem] text-paper/60 leading-relaxed italic">"...our team can support with changing your NSW to Queensland ID so you can apply for Queensland social housing..."</p>
                            <p class="text-[0.65rem] text-paper/55 leading-relaxed italic mt-2">"Thank you for clarifying that you don't want to return to NSW in that case we can support you to get QLD ID if you are wanting to stay in Queensland."</p>
                            <div class="mt-3 border-l-2 border-gold/40 pl-3">
                                <p class="text-[0.58rem] text-paper/38 leading-relaxed">I have a NSW driver's licence. I have been in Queensland for years. My Woolworths transaction history — every grocery purchase, in QLD — documents this. The suggestion that my housing situation is solvable by converting my licence implies that the system's failure to house me is a paperwork problem I created. It is not.</p>
                            </div>
                        </div>

                        <!-- Message 4 — Which form -->
                        <div class="border border-paper/[0.08] p-4" style="background:rgba(0,0,0,0.18)">
                            <div class="text-[0.44rem] tracking-[0.16em] uppercase text-paper/25 mb-2">Incoming · "Which form are you chasing?"</div>
                            <p class="text-[0.7rem] text-paper/60 leading-relaxed italic">"Which form are you chasing and I will call them to follow it up for you."</p>
                            <div class="mt-3 border-l-2 border-paper/20 pl-3">
                                <p class="text-[0.58rem] text-paper/38 leading-relaxed">The outreach team does not know which form is needed to apply for social housing. That is their entire job. They stopped me at the library, took my details, told me nothing, sent me a message asking if I'd been to an intake point they hadn't named — and then asked me to tell them which form I was chasing so they could look it up.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Kosta's reply -->
                    <div class="border-l-4 border-hot/60 pl-5 py-1 mb-5">
                        <div class="text-[0.46rem] tracking-[0.18em] uppercase text-hot mb-2">Outgoing Reply · Kosta · Tuesday 17 March · 10:21 am</div>
                        <p class="font-serif italic text-paper/70 text-base leading-relaxed">"I never made any comments to anybody about home link that person is lying - you should be reported to the local government minister for what youve done and said."</p>
                    </div>

                    <!-- What this establishes -->
                    <div class="border border-paper/[0.08] p-5" style="background:rgba(0,0,0,0.14)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">What These Messages Establish</div>
                        <div class="space-y-2">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">The system's answer to homelessness is an "access point" that was never communicated — my failure to attend it is treated as the cause of my situation.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">A statement I never made — about wanting to return to NSW — was attributed to me by the housing team and used as the basis for an offer to help me leave Queensland.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">I have been in Queensland for years. My bank records document this. The QLD licence offer treats multi-year residency as a bureaucratic problem I failed to resolve.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">The outreach team does not know which housing form is required. They asked me to tell them. This is the Gold Coast Council's homelessness support system in operation.</p></div>
                        </div>
                    </div>

                    <!-- Screenshot grid — inline -->
                    <div class="mt-5">
                        <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot/60 mb-3">📱 SMS Screenshots · Gold Coast Homeless Outreach Team · Rihanna · March 2026</div>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                            <div class="border border-hot/20 overflow-hidden">
                                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/messages/Screenshot_20260501_123442_Messages.jpg" alt="SMS — Access point intake message" class="w-full" loading="lazy" />
                                <div class="px-2 py-1.5 border-t border-hot/15" style="background:rgba(193,68,14,0.06)">
                                    <div class="text-[0.4rem] tracking-[0.1em] uppercase text-hot/60">"Were you able to get to an access point"</div>
                                </div>
                            </div>
                            <div class="border border-hot/20 overflow-hidden">
                                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/messages/Screenshot_20260501_123514_Messages.jpg" alt="SMS — Which form are you chasing" class="w-full" loading="lazy" />
                                <div class="px-2 py-1.5 border-t border-hot/15" style="background:rgba(193,68,14,0.06)">
                                    <div class="text-[0.4rem] tracking-[0.1em] uppercase text-hot/60">"Which form are you chasing"</div>
                                </div>
                            </div>
                            <div class="border border-hot/20 overflow-hidden">
                                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/messages/Screenshot_20260501_123523_Messages.jpg" alt="SMS — NSW ID / return to NSW" class="w-full" loading="lazy" />
                                <div class="px-2 py-1.5 border-t border-hot/15" style="background:rgba(193,68,14,0.06)">
                                    <div class="text-[0.4rem] tracking-[0.1em] uppercase text-hot/60">NSW ID · return to NSW offer</div>
                                </div>
                            </div>
                            <div class="border border-hot/20 overflow-hidden">
                                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/messages/Screenshot_20260501_123530_Messages.jpg" alt="SMS — Link 2 Home allegation" class="w-full" loading="lazy" />
                                <div class="px-2 py-1.5 border-t border-hot/15" style="background:rgba(193,68,14,0.06)">
                                    <div class="text-[0.4rem] tracking-[0.1em] uppercase text-hot/60">Link 2 Home · statement never made</div>
                                </div>
                            </div>
                            <div class="border border-gold/20 overflow-hidden">
                                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/messages/Screenshot_20260501_123537_Messages.jpg" alt="SMS — QLD ID if staying in Queensland" class="w-full" loading="lazy" />
                                <div class="px-2 py-1.5 border-t border-gold/15" style="background:rgba(201,138,16,0.06)">
                                    <div class="text-[0.4rem] tracking-[0.1em] uppercase text-gold/60">QLD ID if staying in Queensland</div>
                                </div>
                            </div>
                            <div class="border border-sage/20 overflow-hidden">
                                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/messages/Screenshot_20260501_123544_Messages.jpg" alt="SMS — Kosta's reply" class="w-full" loading="lazy" />
                                <div class="px-2 py-1.5 border-t border-sage/15" style="background:rgba(61,122,74,0.06)">
                                    <div class="text-[0.4rem] tracking-[0.1em] uppercase text-sage/60">Kosta's reply · "that person is lying"</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="story-chapter reveal" style="transition-delay:0.1s;border-left-color:rgba(124,106,170,0.3)">
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">"HE'S THE HOMELESS GUY<br><span style="color:#7c6aaa">WITH MENTAL HEALTH ISSUES."</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The comment reduces a person to their housing status and their diagnosis simultaneously — using both as grounds for disqualification. Not as a factual challenge to anything documented, but as a category dismissal. The 7 Care Connect posters on the bathroom walls at Nerang Street did not disappear because the person who found them has a mental health history.</p>
                    <div class="border p-6" style="border-color:rgba(124,106,170,0.2);background:rgba(124,106,170,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase mb-3" style="color:#7c6aaa">Why Independent Media Exists</div>
                        <p class="text-[0.68rem] text-paper/40 leading-relaxed">When mainstream outlets decide sources with complicated personal histories aren't worth covering, they leave those stories untold. Sunlight.Quest exists precisely because some stories only get told when the person who found them tells it themselves.</p>
                    </div>
                </div>

            </div>
            <div class="space-y-4">
                <div class="sticky top-24 space-y-4">
                    <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.03)">
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

        <!-- Thank You — James Packer & Alan Jones -->
        <div class="story-chapter reveal mt-12" style="border-left-color:rgba(61,122,74,0.5)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-sage border border-sage/40 px-2 py-1">A Personal Thank You</span>
                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/20">James Packer · Alan Jones · Sky News</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-5 leading-tight">JAMES PACKER. ALAN JONES.<br><span class="text-sage">THANK YOU FOR MAKING THE CALL.</span></h3>

            <div class="flex gap-6 items-start mb-6">
                <div class="shrink-0 border border-paper/[0.08] overflow-hidden" style="width:220px">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/james_packer_alan_jones.jpeg" alt="James Packer and Alan Jones" class="w-full object-cover object-top">
                    <div class="border-t border-paper/[0.06] px-3 py-2" style="background:rgba(61,122,74,0.04)">
                        <div class="text-[0.46rem] tracking-[0.15em] uppercase text-sage/60">James Packer · Alan Jones</div>
                    </div>
                </div>
                <div>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">James Packer and Alan Jones made a call to Sky News management to inform them of what Lauren Forbes did — specifically, the weaponisation of a Public Nuisance charge that was dropped at first mention, and the leaking of that charge sheet to Hancock Prospecting.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">The Public Nuisance charge arose from an incident at the Kangaroo Point McDonald's. After investigators made first mention of the matter, Kosta requested CCTV footage of the incident. The charge was dropped. A dropped charge is not a conviction. It is not a finding of fact. It is a matter that was not pursued. Lauren Forbes obtained that charge sheet — a QP-9 — and transmitted it to Hancock Prospecting as a tool to discredit a journalism source.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/50">That Packer and Jones chose to make that call — to hold Sky News to account for what one of their journalists did — is on the record here and is acknowledged with genuine gratitude.</p>
                </div>
            </div>

            <div class="border border-sage/20 p-4 mb-5" style="background:rgba(61,122,74,0.03)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-sage mb-2">What Was Done On Our Behalf</div>
                <div class="space-y-1.5">
                    <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Called Sky News management directly to report Lauren Forbes's conduct</p></div>
                    <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Drew attention to the weaponisation of a dropped charge — specifically the Kangaroo Point McDonald's Public Nuisance matter, dropped at first mention after CCTV was requested</p></div>
                    <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Highlighted the leak of a non-public QP-9 charge sheet to Hancock Prospecting — a corporation with a documented interest in discrediting Kosta Kondratenko</p></div>
                </div>
            </div>

            <!-- Lauren Forbes — Fair Work reinstatement -->
            <div class="border border-hot/15 p-4" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">Update — Lauren Forbes · Fair Work Commission</div>
                <p class="text-[0.63rem] text-paper/42 leading-relaxed mb-2">Since the intervention by Packer and Jones, Lauren Forbes has gone to the <strong class="text-paper/60">Fair Work Commission</strong> and was able to have her employment reinstated. She has since been seen on television — she is back at work.</p>
                <p class="text-[0.63rem] text-paper/42 leading-relaxed">The Fair Work Commission determines reinstatement on procedural grounds — whether the dismissal was harsh, unjust, or unreasonable. It does not exonerate the conduct that preceded the dismissal. What Lauren Forbes did with a dropped charge sheet and who she sent it to remains on the record here, regardless of her employment status.</p>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     VIRAL VIDEO SECTION
══════════════════════════════════════ -->
<section id="viral" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.04) 0%,transparent 50%)">
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
                        <div class="ev-file ef-hot" onclick="openMV('video-viral')">
                            <div class="ev-icon ev-video">▶</div>
                            <div class="ev-meta">
                                <div class="ev-name">rj_confront.mp4</div>
                                <div class="ev-desc">Video · RJ confrontation · Gold Coast · Triggered retaliation campaign</div>
                            </div>
                            <span class="ev-cta">Watch →</span>
                        </div>
                        <div class="ev-zip-bar">
                            <span class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/25">Original viral video — RJ direct confrontation</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border border-hot/15 p-6" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">What Happened After</div>
                <div class="space-y-3">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/40">Submitted to Hancock Prospecting. Immediately blocked.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/40">Associates began daily harassment of Adam Watson at a local shopping centre.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/40">Oracle East assault followed — 6 assailants, targeted in retaliation.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/40">Police interview produced the "expect to get bashed" corruption recording.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/40">Rinehart commenced civil proceedings against Adam Watson — privacy violation. Proceedings subsequently dropped.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/40"><strong class="text-paper/55">Sunlight.Quest blocked from Surf Network WiFi</strong> — the Gold Coast Council-maintained public WiFi network. Site remains inaccessible on that network.</p></div>
                </div>
            </div>

            <!-- Fortinet / Surf Network censorship -->
            <div class="border border-hot/25 mt-6 reveal" style="background:rgba(193,68,14,0.03)">
                <div class="px-5 py-3 border-b border-hot/15" style="background:rgba(193,68,14,0.06)">
                    <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">Primary Source &nbsp;·&nbsp; Government Censorship &nbsp;·&nbsp; Gold Coast Surf Network &nbsp;·&nbsp; Fortinet</span>
                </div>
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/fortinet_1.jpg" alt="Fortinet block page — sunlight.quest blocked on Gold Coast Surf Network" class="w-full border-b border-hot/10" loading="lazy" />
                <div class="p-6">
                    <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">THE SURF NETWORK BLOCKED MY WEBSITE.<br><span class="text-hot">AFTER THE VIRAL VIDEO DROPPED.</span></h4>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">The Gold Coast Surf Network is public Wi-Fi infrastructure maintained by the Gold Coast City Council. It runs on Fortinet — a commercial content filtering system. When this screenshot was taken, attempting to access <strong class="text-paper/70">sunlight.quest</strong> on the Surf Network returned a Fortinet block page: the site had been categorised and blocked at the network level.</p>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">The timing is not ambiguous. The block appeared after the viral video was published. Before the video, the site was accessible. After it — on government infrastructure, using a government-administered content filter — it was not. This is not an automated algorithmic mistake. Fortinet's category filters are applied and reviewed by administrators. Someone made a decision.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-4">
                        <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-1.5">The Infrastructure</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">Gold Coast Surf Network — public Wi-Fi deployed across beachside Gold Coast. Administered by Gold Coast City Council. Runs Fortinet content filtering.</p>
                        </div>
                        <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-1.5">The Block</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">sunlight.quest classified and blocked at the network level. The block page above is what Gold Coast Council is showing to every person who tries to access this publication on public Wi-Fi.</p>
                        </div>
                        <div class="border border-gold/20 p-3" style="background:rgba(201,138,16,0.04)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold mb-1.5">The Timing</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">Block appeared following the viral video — the same video that named Gold Coast figures, identified the Oracle East assault network, and was submitted to Hancock Prospecting.</p>
                        </div>
                        <div class="border border-gold/20 p-3" style="background:rgba(201,138,16,0.04)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold mb-1.5">The Decision</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">Fortinet category assignments on government networks are administrator-reviewed. This is not a passive filter. A human being — or a directive given to one — caused this block to appear.</p>
                        </div>
                    </div>
                    <div class="border-l-4 border-hot/40 pl-4 py-1" style="background:rgba(193,68,14,0.03)">
                        <p class="text-[0.62rem] text-paper/45 leading-relaxed">This is government infrastructure being used to suppress a publication. The Gold Coast City Council — which is supposed to operate in the public interest — is actively blocking public access to journalism about the conduct of Gold Coast institutions, on Wi-Fi it administers, using a content filter it controls. This is censorship. It is documented here, with the block page as primary evidence, because this is exactly the kind of thing that is supposed to be documented.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tram guy — unidentified man punched -->
        <div class="story-chapter reveal mt-12" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Unidentified Male · Tram Incident · Queen Street Stop</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">HE MOCKED THE CAMERA. CALLED ME A POLICE INFORMANT.<br><span class="text-hot">THEN GOT PUNCHED IN THE FACE.</span></h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tram_incident/tram_guy.jpg" alt="Unidentified male — tram incident" class="w-full object-cover border border-paper/[0.08]" style="max-height:380px;object-position:center top" loading="lazy" />
                    <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/20 mt-1.5">Unidentified male · Tram incident · Gold Coast</div>
                </div>
                <div class="space-y-4">
                    <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.46rem] tracking-[0.18em] uppercase text-hot mb-2">During the Viral Video — On the Tram</div>
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed">While I was chasing RJ on the tram, this man approached me, began mocking my camera, and threatened to call the police. When a random passer-by came through, I called him a police informant. He got punched in the face.</p>
                    </div>
                    <div class="border border-paper/[0.08] p-4" style="background:rgba(0,0,0,0.14)">
                        <div class="text-[0.46rem] tracking-[0.18em] uppercase text-paper/30 mb-2">Status</div>
                        <p class="text-[0.65rem] text-paper/45 leading-relaxed">This man remains <strong class="text-paper/65">unidentified</strong>. I have no current issues with him. What is documented here is his prior conduct and the context the video doesn't show.</p>
                    </div>
                </div>
            </div>

            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">The Prior Incident — Queen Street Tram Stop</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">This was not our first encounter. At Queen Street tram stop, he had previously approached me on the tram and started making comments about me talking in the library at Southport. I told him I didn't want to talk about it. He followed me outside. He swung first — and missed. We fought. I connected every punch to his head.</p>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">That prior fight is why — in the viral video — he says <span class="font-display text-paper/70">"You got a few good hits in."</span> He wasn't complimenting me out of nowhere. He was referencing what had already happened between us. The viral video captured the tail end of a pattern.</p>
            </div>

            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.05)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">After the Fight — He Reached Into His Backpack</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">After the fight at Queen Street, he reached into his backpack and ran after me. This is documented on video below. The Queen Street tram stop PA system kept announcing that police were on their way. Police never arrived. I submitted the footage to Southport Police Station. There was no follow-up.</p>
                <video controls preload="metadata" class="w-full border border-paper/[0.08]" style="max-height:400px;display:block">
                    <source src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tram_incident/VID_20240223_231415.mp4" type="video/mp4">
                </video>
                <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/20 mt-2">VID_20240223_231415 · Queen Street tram stop · 23 Feb 2024 · Submitted to Southport Police · No follow-up</div>
            </div>

            <div class="border border-paper/[0.08] p-5" style="background:rgba(0,0,0,0.14)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">Aaron Barker — "Deserved to Get Bashed" — CBI Task Force Latro North</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed">When Aaron Barker said that I deserved to get bashed, he was fired from the CBI Task Force Latro North. The footage I submitted — the video of this man reaching into his backpack and chasing me after a fight I did not start, at a tram stop where the police were repeatedly announced as incoming and never appeared — is part of the documented record of why that statement cost Barker his position.</p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mt-4">
                    <div class="border border-paper/[0.06] p-3" style="background:rgba(0,0,0,0.12)">
                        <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/28 mb-1">Police Response</div>
                        <p class="text-[0.58rem] text-paper/40 leading-relaxed">PA at Queen Street announced police coming. Police never arrived.</p>
                    </div>
                    <div class="border border-paper/[0.06] p-3" style="background:rgba(0,0,0,0.12)">
                        <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/28 mb-1">Footage Submitted</div>
                        <p class="text-[0.58rem] text-paper/40 leading-relaxed">Submitted to Southport Police Station. No follow-up received.</p>
                    </div>
                    <div class="border border-paper/[0.06] p-3" style="background:rgba(0,0,0,0.12)">
                        <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/28 mb-1">Aaron Barker</div>
                        <p class="text-[0.58rem] text-paper/40 leading-relaxed">Said I deserved to get bashed. Fired from CBI Task Force Latro North.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ASIO — RJ phone subpoena / Aaron Barker -->
        <div class="story-chapter reveal mt-12" style="border-left-color:rgba(61,122,74,0.5)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.45rem] tracking-[0.2em] uppercase px-2 py-1 border border-sage/30 text-sage" style="background:rgba(61,122,74,0.07)">Australian Security Intelligence Organisation &nbsp;·&nbsp; National Security</span>
            </div>

            <div class="flex gap-5 mb-6 items-start">
                <div class="shrink-0 border border-paper/[0.08] p-3 flex items-center justify-center" style="background:#ffffff;min-width:80px">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/asio_logo.png" alt="ASIO — Australian Security Intelligence Organisation" class="h-10 w-auto" loading="lazy" />
                </div>
                <div>
                    <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">THANK YOU, ASIO.<br><span class="text-sage">THE PHONE SUBPOENA THAT BROUGHT DOWN A COP.</span></h3>
                    <p class="font-serif italic text-paper/50 text-lg leading-relaxed">"ASIO subpoenaed RJ's phone. On it was a recording of Aaron Barker — a serving Queensland Police officer — making comments about me. He was demoted. Then stood down. For turning a blind eye to a 6-on-1 assault."</p>
                </div>
            </div>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The Australian Security Intelligence Organisation subpoenaed the phone of RJ. That subpoena produced a recording — a recording in which Aaron Barker, then a serving Queensland Police officer assigned to the CBI Task Force Latro North, made comments about Kosta Kondratenko. The content of that recording was not consistent with the conduct expected of an officer responsible for investigating the people who had orchestrated a 6-on-1 assault.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">Barker was first demoted. Then stood down entirely. The grounds were not obscure — a serving police officer, whose unit was nominally investigating the network that arranged an assault on a civilian, had made comments captured on that network's own phone that demonstrated he was not investigating them at all. He was on their side. The ASIO subpoena made that visible.</p>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
                <div class="border border-sage/20 p-4" style="background:rgba(61,122,74,0.04)">
                    <div class="text-[0.45rem] tracking-[0.2em] uppercase text-sage mb-2">The Subpoena</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed">ASIO subpoenaed RJ's phone as part of a national security inquiry. The device held recordings that were not meant to leave the network.</p>
                </div>
                <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.04)">
                    <div class="text-[0.45rem] tracking-[0.2em] uppercase text-gold mb-2">The Recording</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed">Aaron Barker — CBI Task Force Latro North — captured on audio. Comments about Kosta Kondratenko inconsistent with impartial policing. Blind eye to a 6-on-1 assault.</p>
                </div>
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.45rem] tracking-[0.2em] uppercase text-hot mb-2">The Consequence</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed">Barker demoted. Then stood down. His position — protecting the investigation — had been documented on the phone of the person he was supposed to be investigating.</p>
                </div>
            </div>

            <div class="border border-sage/20 p-5" style="background:rgba(61,122,74,0.03)">
                <div class="text-[0.45rem] tracking-[0.2em] uppercase text-sage mb-3">Why This Matters</div>
                <p class="text-[0.62rem] text-paper/45 leading-relaxed mb-3">The 6-on-1 assault at Oracle East went nowhere — no strata subpoena, no serious investigation, a Child Protection Unit text sent to the victim. Aaron Barker was inside the unit nominally responsible for it. The ASIO subpoena of RJ's phone is what finally produced the evidence that Barker's inaction was not incompetence. It was alignment. He knew who these people were. He was on the recording of the person he was supposed to be investigating.</p>
                <p class="text-[0.62rem] text-paper/40 leading-relaxed">That is what accountability looks like when the system that is supposed to provide it has been captured. It does not come from within. It comes from outside — from a different agency, with a different mandate, operating on a different frequency. In this case: ASIO.</p>
            </div>
        </div>

        <!-- Mental health tent visit -->
        <div class="story-chapter reveal mt-12" style="border-left-color:rgba(193,68,14,0.3)">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THEY CAME TO THE TENT.<br><span class="text-hot">A "MENTAL HEALTH CHECK." WITH HANCOCK PROSPECTING'S QUESTIONS IN IT.</span></h3>
            <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-5">"Police visited my tent after the viral video under the guise of a mental health check. Among the enquiries: had I ever sent emails and videos to people stating I would kill them — including Premier Steven Miles and Mayor Tom Tate. I had not. I reject any attempt to put me through a mental health lens to dismiss my political speech."</p>

            <!-- Prior visit context -->
            <div class="border border-hot/20 p-4 mb-5" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">Context — 2 Days Earlier</div>
                <p class="text-[0.65rem] text-paper/45 leading-relaxed">Two days before the welfare check, police had already attended Kosta Kondratenko's tent on a theft allegation tip. During that visit, Kosta was handcuffed. The welfare check was not an isolated or spontaneous event — it was the second police attendance at the same location within 48 hours.</p>
            </div>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Following the viral video, police attended Kosta Kondratenko's tent location framed as a mental health welfare check. The visit was conducted under the banner of the <strong class="text-paper/65">Homeless Health Outreach Team (HHOT)</strong> — the formal name used to justify the intervention. Present during the visit was a mental health nurse named <strong class="text-paper/65">Tracy</strong>.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The allegations raised during the visit extended well beyond the Miles coffin email. Officers put to Kosta that he had sent emails and videos to people <strong class="text-paper/65">"stating you will kill them"</strong> — including alleged threats against Premier Steven Miles and Mayor Tom Tate. These are serious allegations. They were put to Kosta without a formal caution. No legal representation was present. No formal charge or investigation had been initiated. The allegations were communicated as the basis for a welfare check — not the formal investigative process they would require if taken seriously.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Critically, when questioned about the basis for these claims, officers acknowledged the information was <strong class="text-paper/65">second and third hand</strong>. They did not have the emails. They had not seen the videos. The intelligence had passed through multiple intermediaries before reaching the officers who were now presenting it to Kosta as fact. This is not how credible threat intelligence works. This is hearsay routed through a welfare framework to avoid the procedural requirements of a formal investigation.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Kosta denies sending any such email, attachment, or video. The viral video stated clearly and on camera that Gina Rinehart has dirt on Steven Miles and Tom Tate — <span class="font-display text-paper/65">"to bury you."</span> That is a colloquial expression. It refers to political leverage and reputational exposure. It is political speech. Anyone who watched the video understands that. The suggestion that this constitutes a threat or indicates disturbed mental state is a deliberate mischaracterisation.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Officers also raised a mental health diagnosis — more than 20 years old, from New South Wales — as justification for the current visit. A two-decade-old psychiatric record from another state is not a clinical basis for a 2024 welfare intervention. It is a file. It was used to frame Kosta's journalism as a symptom and to lend institutional weight to what was, in substance, a character inquiry conducted on behalf of a private corporation.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The same welfare visit also included enquiries from Hancock Prospecting regarding Kosta's mental health. A police welfare check is not a vehicle for a private corporation to conduct character research on a journalist. The co-presence of Hancock Prospecting's questions within a police mental health visit is not a coincidence. It is coordination.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">What Was Alleged / Insinuated</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Email sent with attachment of Steven Miles in a coffin</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">"Sent emails and videos to people stating you will kill them" — including Premier Miles and Mayor Tate</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Questions about Kosta's mental state — sourced via Hancock Prospecting</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">20+ year old NSW mental health diagnosis raised as current clinical context</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Implicit framing: viral video = instability, not journalism</p></div>
                    </div>
                </div>
                <div class="border border-sage/20 p-5" style="background:rgba(61,122,74,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-3">What Is Actually True</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">No such email, attachment, or video was sent — denied</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">"Bury you" in the viral video = political dirt / leverage. Colloquial. Unambiguous in context.</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Officers admitted the intelligence was second and third hand — they did not have the emails</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">A 20-year-old interstate diagnosis is not a clinical basis for a current welfare intervention</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">This was a welfare visit used as an intelligence-gathering exercise for a private corporation</p></div>
                    </div>
                </div>
            </div>

            <!-- Procedural irregularity -->
            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">Procedural Irregularity</div>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Serious allegations — including death threats against a Premier and a Mayor — were put to Kosta without a formal caution</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">No legal representation was present or offered during questioning on those allegations</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">If these allegations were credible, standard procedure requires a formal investigation with evidence — not a casual welfare check on second-hand hearsay</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">The choice to frame this as a welfare check — not an investigation — suggests the purpose was not to pursue a crime but to generate a mental health record</p></div>
                </div>
            </div>

            <!-- Educational visit verbatim quote -->
            <div class="border-l-4 border-hot/40 pl-5 mb-5" style="background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot/70 mb-2">Verbatim — Officer to Kosta, on camera</div>
                <p class="font-serif italic text-paper/60 text-base leading-relaxed">"Take this as an educational visit as well... be mindful of how you do that and be mindful of how it could be interpreted in respects to crossing the line of it being an offense..."</p>
                <p class="text-[0.55rem] text-paper/35 mt-2">A warning — not an investigation. Delivered to someone who had just been subjected to serious unsubstantiated allegations without caution or legal representation.</p>
            </div>

            <!-- Kosta "setup" quote -->
            <div class="border-l-4 border-gold/50 pl-5 mb-5" style="background:rgba(215,175,71,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold/70 mb-2">On Camera — Kosta Kondratenko</div>
                <p class="font-serif italic text-paper/60 text-base leading-relaxed">"The setup is in so when you watch this in four months time if there's some kind of bullshit criminal charge... this is why you need a camera."</p>
                <p class="text-[0.55rem] text-paper/35 mt-2">Said on the day, on record. The camera was running. If the setup materialises, it is documented.</p>
            </div>

            <div class="border-l-4 border-hot/50 pl-5 mb-5" style="background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">On the Record</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">Kosta Kondratenko refuses to be mischaracterised. He refuses to have his political speech reframed as a mental health event. He refuses to have his credibility attacked by routing corporate interests through a police welfare visit. The viral video was political speech. "Bury you" was political language. The visit to the tent was intimidation dressed as welfare. The record reflects all of it.</p>
            </div>

            <!-- Evidence vault: mental health check -->
            <div class="evidence-vault mt-6">
                <div class="ev-header" onclick="toggleVault(this)">
                    <div class="flex items-center gap-2">
                        <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Mental Health Welfare Check · Post-Viral Video</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">2 files</span>
                        <span class="ev-toggle">▼</span>
                    </div>
                </div>
                <div class="ev-body">
                    <div class="ev-file ef-hot" onclick="openMV('video-mental-health-check')">
                        <div class="ev-icon ev-video">▶</div>
                        <div class="ev-meta">
                            <div class="ev-name">mental_health_check.mp4</div>
                            <div class="ev-desc">Video · Police tent visit following viral video · Hancock Prospecting questions embedded</div>
                        </div>
                        <span class="ev-cta">Watch →</span>
                    </div>
                    <div class="ev-file ef-hot" onclick="openMV('pdf-mental-health-transcript')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">mental-health-check-transcript.pdf</div>
                            <div class="ev-desc">PDF · Full transcript of police mental health welfare check visit · Verbatim record of questions put to Kosta Kondratenko</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                </div>
            </div>

            <!-- Transcript — embedded PDF -->
            <div class="mt-5 border border-hot/20 overflow-hidden">
                <div class="flex items-center justify-between px-4 py-2.5" style="background:rgba(193,68,14,0.07)">
                    <div class="flex items-center gap-2">
                        <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📄 Transcript</span>
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/30">— Mental Health Welfare Check · Full Verbatim Record</span>
                    </div>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/mental-health-check-transcript.pdf" target="_blank" rel="noopener" class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/70 hover:text-hot transition-colors">Open PDF ↗</a>
                </div>
                <iframe
                    src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/mental-health-check-transcript.pdf"
                    class="w-full"
                    style="height:780px;border:none;display:block;background:#fff"
                    title="Mental Health Welfare Check — Full Transcript · Kosta Kondratenko"
                    loading="lazy"
                ></iframe>
                <div class="px-4 py-2 border-t border-hot/15 text-center" style="background:rgba(0,0,0,0.25)">
                    <span class="text-[0.43rem] tracking-[0.12em] uppercase text-paper/30">Mental Health Welfare Check · Verbatim Transcript · Post-Viral Video · Hancock Prospecting Questions Embedded</span>
                </div>
            </div>
        </div>

        <!-- Surf Network WiFi block / government censorship -->
        <div class="story-chapter reveal mt-12" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Government Censorship — Public Infrastructure</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">SUNLIGHT.QUEST BLOCKED ON SURF NETWORK.<br><span class="text-hot">GOLD COAST COUNCIL'S OWN WIFI. AFTER THE VIRAL VIDEO.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Following the publication of the viral video and the content on this site documenting Tom Tate and the Gold Coast Council, <strong class="text-paper/70">Sunlight.Quest was blocked on the Surf Network</strong> — the public WiFi network maintained and controlled by Gold Coast City Council. The site became inaccessible to anyone using council-controlled public internet infrastructure.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">This is a government body using its control over public internet infrastructure to make a publication that is critical of that government body inaccessible. It is censorship. It is being done through the most passive mechanism available — a network-level block, with no notice, no stated reason, and no appeal process — to a person who, as documented elsewhere in this section, cannot easily access private internet infrastructure because they are homeless.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Why This Is Government Censorship</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Surf Network is public infrastructure maintained by Gold Coast City Council — a government body</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">The site blocked contains political speech directly critical of the Mayor, Tom Tate</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">The block followed the viral video — the sequence is not coincidental</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">No notice was given. No reason was stated. No appeal mechanism exists.</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">The person affected is homeless — council-controlled WiFi is their primary internet access</p></div>
                    </div>
                </div>
                <div class="border border-paper/[0.08] p-5" style="background:rgba(0,0,0,0.12)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">The Legal &amp; Constitutional Context</div>
                    <p class="text-[0.6rem] text-paper/42 leading-relaxed mb-3">Australian law does not provide a freestanding right to freedom of expression equivalent to the First Amendment. However, the High Court has recognised an implied constitutional freedom of political communication — and blocking a publication that is engaged in political speech, on government-controlled infrastructure, in direct response to content about a government official, raises serious questions under that implied freedom.</p>
                    <p class="text-[0.6rem] text-paper/42 leading-relaxed">It also raises questions under the principles that govern what councils can and cannot do with public infrastructure they hold in trust for all residents — including the ones their Mayor wants to silence.</p>
                </div>
            </div>

            <div class="border-l-4 border-hot/50 pl-5" style="background:rgba(193,68,14,0.05);padding:1rem 1rem 1rem 1.25rem">
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">The Gold Coast Council's public WiFi network blocks this site. The Mayor of the Gold Coast is using the city's digital infrastructure as a tool of political suppression. That is the record.</p>
            </div>
        </div>

        <!-- Hancock Prospecting block + street consequences -->
        <div class="story-chapter reveal mt-12" style="border-left-color:rgba(201,138,16,0.4)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Hancock Prospecting — The Full Account</span></div>

            <div class="flex gap-5 mb-5 items-start">
                <div class="shrink-0 border border-paper/[0.08] p-3 flex items-center justify-center" style="background:#ffffff;min-width:80px">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/hancock_prospecting_logo.jpg" alt="Hancock Prospecting" class="h-10 w-auto" loading="lazy" />
                </div>
                <div>
                    <h3 class="font-display text-2xl tracking-wide mb-2 leading-tight">HANCOCK PROSPECTING.<br><span class="text-gold">WHAT ACTUALLY HAPPENED. THE FULL ACCOUNT.</span></h3>
                    <p class="font-serif italic text-paper/50 text-base leading-relaxed">"I have never spoken to Mrs. Rinehart directly. I have never said anything negative about her. She cried over a photo of me — and I have been told she has never cried over something in that way before."</p>
                </div>
            </div>

            <!-- Phone block / unblocked -->
            <div class="border border-gold/20 p-5 mb-5" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">The Block — and the Unblock</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">After the viral video was sent to Hancock Prospecting, Kosta Kondratenko's phone was blocked. That block has since been lifted. It has been unblocked. The block was the confirmation that the content had landed — a corporation does not block a person unless the message is credible and the sender is real. The unblock is also significant: it reflects a process of understanding what actually happened, rather than what was assumed.</p>
            </div>

            <!-- Forensic audio / RJ theory disproved -->
            <div class="border border-paper/[0.07] p-5 mb-5" style="background:rgba(0,0,0,0.14)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">The Forensic Audio Investigation — Theory Disproved</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Gina Rinehart had formed a belief — based in part on the fact that Adam Watson was on the phone with Kosta at the time of the RJ confrontation — that Adam Watson had directed, or encouraged, Kosta to pursue RJ. To investigate this, Mrs. Rinehart sent the video to a <strong class="text-paper/65">forensic audio specialist</strong>, who extracted the audio from the phone call that was running during the incident and analysed it.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The theory proved to be incorrect. The audio extraction showed what actually occurred: Kosta had seen RJ and, not knowing how to respond, called Adam Watson. Adam Watson — who is a lawyer — suggested that Kosta record any suspicious behaviour. Kosta had already started walking toward RJ at that point. Adam Watson at no stage asked Kosta to intimidate RJ, confront him, or cause any disturbance. This is not a narrative entertained in any courtroom, because it is not supported by the evidence. The forensic audio confirmed it.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-3">
                    <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-1.5">The Theory (Incorrect)</div>
                        <p class="text-[0.6rem] text-paper/40 leading-relaxed">Adam Watson directed Kosta to pursue / intimidate RJ during the phone call that was running during the confrontation.</p>
                    </div>
                    <div class="border border-sage/20 p-3" style="background:rgba(61,122,74,0.04)">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-sage mb-1.5">What the Audio Showed</div>
                        <p class="text-[0.6rem] text-paper/40 leading-relaxed">Kosta called Adam after seeing RJ. Adam suggested recording suspicious behaviour. No direction to intimidate. No instruction that would amount to instigation. Confirmed by forensic audio specialist.</p>
                    </div>
                </div>
            </div>

            <!-- Website / testimonials / David -->
            <div class="border border-paper/[0.07] p-5 mb-5" style="background:rgba(0,0,0,0.14)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">The Website, the Testimonials, and "David"</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">During this period, Kosta was building a website for Adam Watson that included testimonials — testimonials that were publicly available on the internet. Those same testimonials appeared in the viral video. Mrs. Rinehart engaged a person known to Kosta only as <strong class="text-paper/65">David</strong> — an IT specialist she paid — to take down the website Kosta had built for Adam Watson.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">David called Adam Watson during this process. He was yelling: <span class="font-display text-paper/70">"Get away from Kosta!!"</span> Adam Watson has issues with this behaviour. The instruction to stay away from Kosta — delivered by shouting down a phone at a person being paid by someone else to do it — is not a reasonable engagement. It is an attempt to isolate. Adam's objection to it is on the record.</p>
            </div>

            <!-- Mrs. Rinehart — character commendation -->
            <div class="border border-gold/25 p-5 mb-5" style="background:rgba(201,138,16,0.05)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">A Note on Mrs. Rinehart's Character</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Kosta Kondratenko has never spoken to Gina Rinehart directly. He has never said anything negative about her. This publication has been critical of certain conduct associated with her network, but not of her personally — and the distinction matters.</p>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Mrs. Rinehart saw a photograph of Kosta that was leaked from the Gold Coast Aquatic Centre — the privacy breach documented elsewhere in this publication. She cried over it. Kosta has been informed that she has never cried over something in that way before. That response is not the response of someone who considers this person an adversary. It is the response of someone who understands what she was looking at.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">Mrs. Rinehart has also vouched for Adam Watson in connection with a construction project he is currently working on. Kosta wants to commend her character. Whatever complications have existed in the overlap between these networks, Gina Rinehart's personal conduct toward both Kosta and Adam Watson has been characterised by genuine human response — not the calculated indifference of someone operating purely through legal and corporate mechanisms.</p>
            </div>

            <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">The Broader Reality — Australian Accountability Journalism</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">What followed the video demonstrated something broader about Australia: the consequences of starting trouble with the powerful are not abstract or institutional. They are physical. They arrive in car parks, outside tyre shops, at 2am when no one is filming. The retaliation — the Oracle East assault, the harassment campaigns, the Bridgestone ambush — is what accountability costs when the people you are holding accountable have street connections, corrupted police, and the patience to wait.</p>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed">Every institution that was supposed to prevent it — Queensland Police, Gold Coast Council, Department of Housing — has either actively participated in the retaliation, stood aside while it happened, or been captured by the networks doing it. Sunlight.Quest is proceeding anyway. That is the point of it.</p>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     GOLD COAST HOMELESSNESS — INSTITUTIONAL FAILURE
══════════════════════════════════════ -->
<section id="homelessness" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(61,122,74,0.05) 0%,rgba(193,68,14,0.03) 60%,transparent 100%)">
    <div class="max-w-4xl mx-auto">

        <div class="flex items-center gap-3 mb-3 reveal">
            <span class="text-[0.48rem] tracking-[0.22em] uppercase border px-2 py-1 text-sage border-sage/40">Gold Coast — Homeless Action Plan · Institutional Failure</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-3 leading-tight reveal">FOUR SLICES OF PIZZA.<br><span class="text-hot">AND A FORM THEY NEVER GAVE ME.</span></h2>
        <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-10 reveal">"The Gold Coast Homeless Action Plan hands you a piece of paper with food services on it, confiscates your tent while you're away, puts a sticker on it saying it's abandoned, and when the Department of Housing finally shows up — they ask for a QLD Driver's Licence and tell you they heard you were thinking of moving to NSW. I'm not. And I've been here two years."</p>

        <!-- Undercover police drug offer allegation -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.45)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Allegation — Undercover Police</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THREE PEOPLE IN CLEAN JUMPERS.<br><span class="text-hot">OFFERING DRUGS. ON THE WAY TO MY TENT.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">On the way to his tent, Kosta Kondratenko was approached by three people wearing jumpers that were notably too clean. They offered him drugs. The offer was refused. Kosta's assessment of what he observed: the individuals were dressed like him — a deliberate choice — but the condition of their clothing, their manner, and the circumstances of the approach were inconsistent with the street environment they were presenting as belonging to.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">It is Kosta's allegation that these three individuals were <strong class="text-paper/70">undercover police officers</strong> — and that the drug offer was not casual but deliberate: a structured attempt to induce a psychotic or schizophrenic episode that would generate a documented mental health event. That event, if it had occurred, would have served to validate the notes that Marc Barrow had placed into the police system characterising Kosta as having a past history of mental health problems.</p>
            <div class="border border-hot/20 p-5 mb-2" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Why This Matters — The Marc Barrow Connection</div>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Marc Barrow placed notes in the police system asserting Kosta had a past history of mental health issues</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">A documented mental health episode — induced by a drug reaction — would corroborate those notes</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Once corroborated, those notes become the institutional basis for dismissing Kosta's testimony, journalism, and complaints in any formal context</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">The individuals did not fit the environment they were presenting as belonging to — the jumpers were too clean, the approach too deliberate</p></div>
                </div>
                <p class="text-[0.62rem] text-paper/35 leading-relaxed mt-3 italic">This is an allegation. It is made on the basis of direct observation, pattern of conduct, and the documented existence of Marc Barrow's mental health notes. Kosta did not take the drugs. The episode they may have been attempting to create did not occur.</p>
            </div>
        </div>

        <!-- PSLO tent confiscations -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.4)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Gold Coast Homeless Action Plan — PSLO Team · Tom Tate</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">ABANDONED PROPERTY STICKERS.<br><span class="text-gold">ON A TENT THAT WAS NEVER ABANDONED.</span></h3>
            <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-5">"My tent was out of sight. It wasn't near a road. It wasn't in anyone's way. The PSLO team found it anyway — and when I wasn't there, they stole it. When I was there, they handed me a piece of paper and called it support."</p>

            <!-- 3 sticker photos -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6 reveal">
                <div class="border border-paper/[0.07] overflow-hidden" style="background:rgba(0,0,0,0.18)">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/pslo/19_12_23_pslo_small.jpg" alt="PSLO Abandoned Property sticker — 19 December 2023" class="w-full object-cover" loading="lazy" />
                    <div class="px-3 py-2 border-t border-paper/[0.06]">
                        <div class="text-[0.43rem] tracking-[0.16em] uppercase text-gold mb-0.5">19 Dec 2023</div>
                        <div class="text-[0.55rem] text-paper/40">Abandoned Property sticker — PSLO team</div>
                    </div>
                </div>
                <div class="border border-paper/[0.07] overflow-hidden" style="background:rgba(0,0,0,0.18)">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/pslo/9_1_24_pslo_small.jpg" alt="PSLO Abandoned Property sticker — 9 January 2024" class="w-full object-cover" loading="lazy" />
                    <div class="px-3 py-2 border-t border-paper/[0.06]">
                        <div class="text-[0.43rem] tracking-[0.16em] uppercase text-gold mb-0.5">9 Jan 2024</div>
                        <div class="text-[0.55rem] text-paper/40">Abandoned Property sticker — PSLO team</div>
                    </div>
                </div>
                <div class="border border-paper/[0.07] overflow-hidden" style="background:rgba(0,0,0,0.18)">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/pslo/16_1_24_pslo_small.jpg" alt="PSLO Abandoned Property sticker — 16 January 2024" class="w-full object-cover" loading="lazy" />
                    <div class="px-3 py-2 border-t border-paper/[0.06]">
                        <div class="text-[0.43rem] tracking-[0.16em] uppercase text-gold mb-0.5">16 Jan 2024</div>
                        <div class="text-[0.55rem] text-paper/40">Abandoned Property sticker — PSLO team</div>
                    </div>
                </div>
            </div>

            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">These are three of the "Abandoned Property" stickers placed on Kosta Kondratenko's tent by the PSLO team between December 2023 and January 2024. The tent was not in view of any public road. It was not in anyone's way. It was set up in a location that required active searching to find — not a visible spot that a patrol happened across. This was not reactive enforcement. It was proactive agitation: a systematic effort to find the tent and create grounds to confiscate it.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">When the PSLO team arrived and Kosta was not present, they would take the tent. The "Abandoned Property" label was the mechanism. When he was present, they would hand him an A4 sheet of paper listing services — a document designed to make it appear that support existed — and leave. The paper was theatre. The services on it were virtually non-existent: closed facilities, expired websites, and referral pathways that led nowhere. The tent confiscation was the real purpose of the visit.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.04)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">Present: A4 Paper and a Wave Goodbye</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Handed a list of services as though a support network existed</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Services on the list were virtually non-existent — closed centres, broken websites, phone numbers that went nowhere</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">No actual referral made. No follow-up. No housing pathway offered.</p></div>
                    </div>
                </div>
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Not Present: Tent Stolen</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Tent confiscated — labelled "abandoned" even though it was actively in use</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Tent was out of sight — the PSLO team had to search to find it</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Conduct continued after Rob McDonald confirmed in writing they had done it</p></div>
                    </div>
                </div>
            </div>

            <!-- Japanese tourist / bike incident -->
            <div class="border border-paper/[0.07] p-5 mb-5" style="background:rgba(0,0,0,0.14)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">The Japanese Tourist — "I'm Going to Call and See If That Bike Was Stolen"</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">On one occasion, a PSLO officer noticed a bicycle near the campsite. The bike belonged to a Japanese tourist who had become homeless as a result of a landlord scam — the same type of predatory rental conduct documented elsewhere in this publication. The officer's response was not to ask who owned it, or to engage with the person it belonged to. His comment was: <strong class="text-paper/65">"I'm going to make a call and see if that bike was stolen."</strong></p>
                <p class="text-[0.68rem] text-paper/40 leading-relaxed">This is the pattern. A person — a foreign national made homeless by a landlord scam — has a bicycle near a campsite. The first instinct of the Gold Coast Council's homeless liaison officer is not support. It is suspicion. It is looking for a reason to call police. The bike was not stolen. The man was a tourist. He was homeless because someone scammed him. And the representative of the Gold Coast Homeless Action Plan was trying to have him questioned about a theft that didn't happen.</p>
            </div>

            <!-- Tom Tate / Council pattern -->
            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Tom Tate's Gold Coast — Moving on the Homeless</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The PSLO team operates under a Gold Coast Council that has consistently prioritised the appearance of a clean city over the welfare of its homeless residents. Under Mayor Tom Tate, the Council's approach to rough sleeping has been characterised by removal operations, enforcement-first responses, and the use of administrative mechanisms — "abandoned property" designations, ranger patrols — to achieve displacement that would be harder to justify as direct eviction.</p>
                <p class="text-[0.68rem] text-paper/40 leading-relaxed">Placing "Abandoned Property" stickers on a tent that is clearly occupied, in a location that required active searching to locate, is not a compliance operation. It is harassment. It fits within a consistent institutional pattern: a Council that spends over a billion dollars annually directing its homelessness response not at housing people, but at moving them on.</p>
            </div>

            <!-- Rob McDonald email -->
            <div class="evidence-vault">
                <div class="ev-header" onclick="toggleVault(this)">
                    <div class="flex items-center gap-2">
                        <span class="text-[0.48rem] tracking-[0.22em] uppercase text-gold">📁 Evidence Files</span>
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— PSLO Team · Rob McDonald · Gold Coast Council</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span>
                        <span class="ev-toggle">▼</span>
                    </div>
                </div>
                <div class="ev-body">
                    <div class="ev-file ef-gold" onclick="openMV('pdf-rob-mcdonald')">
                        <div class="ev-icon ev-pdf">PDF</div>
                        <div class="ev-meta">
                            <div class="ev-name">rob_mcdonald_email.pdf</div>
                            <div class="ev-desc">PDF · 72MB · Email correspondence — Rob McDonald, Gold Coast Council · PSLO team oversight · Abandoned Property sticker acknowledgment</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                    <div class="ev-zip-bar">
                        <span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/50">⚠ Large file — 72MB · Rob McDonald was overseeing the rangers who placed the stickers · Notified of these issues in writing</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- St John's Crisis Centre / Pizza photos -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.3)">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">ST JOHN'S CRISIS CENTRE.<br><span class="text-hot">CLOSED. OR DOMINO'S. THAT'S THE OFFER.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">St John's Crisis Centre is not part of the Catholic Church. On the question of food supply: the centre is frequently closed, or when open, the food on offer is Domino's Pizza — four slices. The people relying on these services do not stop being homeless or hungry when the centre is closed or when the budget runs to takeaway. If the food supply situation at services like St John's needs to be fixed, this is something that can be taken up directly with Mrs. Rinehart.</p>

            <!-- Photo grid: closed poster + pizza -->
            <div class="grid grid-cols-2 gap-4 mb-6">
                <div>
                    <img src="/img/stjohns-crisis-centre-closed-easter.jpg" alt="St John's Crisis Centre closed over Easter — Good Friday 3 April and Easter Monday 6 April" class="w-full mb-2" style="object-fit:cover;border:1px solid rgba(245,234,212,0.07)" loading="lazy" />
                    <p class="text-[0.5rem] text-paper/28 leading-relaxed italic">St John's Crisis Centre — closed over Easter. The sign is real. The irony is real.</p>
                </div>
                <div>
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/aquatic/pizza_slices.jpg" alt="Domino's pizza slices — food referral at St John's Crisis Centre" class="w-full mb-2" style="object-fit:cover;border:1px solid rgba(245,234,212,0.07)" loading="lazy" />
                    <p class="text-[0.5rem] text-paper/28 leading-relaxed italic">The food referral: Domino's. Four slices. Still hungry after. This is what the system offers.</p>
                </div>
            </div>

            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">The Catholic Church — Assets and Accountability</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">During the Royal Commission into Institutional Responses to Child Sexual Abuse, the Catholic Church did not fully disclose the size of its asset base. The Commission's findings noted significant difficulty in obtaining complete financial disclosure from Catholic entities — creating a situation where an institution that had caused documented, systemic harm to children across decades was permitted to control the narrative of its own financial capacity to compensate victims.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">We are now in a cost of living crisis. Interest rates have been elevated for years. Homelessness in Australia has increased. And the Catholic Church continues to hold assets — land, property, investment portfolios — whose full scale has never been publicly disclosed, while running crisis services that close over Easter and food services that give people four slices of pizza.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">The cost of living crisis is the correct moment to ask again: <strong class="text-paper/65">what does the Catholic Church actually own? And what would genuine accountability for its financial capacity look like — particularly given that accountability was avoided in the Royal Commission?</strong></p>
            </div>
        </div>

        <!-- Department of Housing / Link 2 Home -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(61,122,74,0.35)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-sage border border-sage/40 px-2 py-1">Department of Housing — QLD</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">RIHANNA SAYS I'M GOING TO NSW.<br><span class="text-sage">I'M NOT. AND THEY ALREADY HAVE MY EMAIL.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Department of Housing representatives approached Kosta Kondratenko and indicated he was being considered for referral to <strong class="text-paper/65">Link 2 Home</strong> — a homeless support service in New South Wales. Kosta is not going to NSW. He has not indicated he is going to NSW. He was not consulted about this referral. He was not given forms to complete. He was not shown any documentation.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">He was then placed on the contact list of the <strong class="text-paper/65">Gold Coast Homeless Health Outreach Team</strong> — a service that is structured as <em>Homeless Health Outreach</em>, meaning mental health is primary and homelessness is secondary. A person experiencing homelessness is referred to a service that will assess their mental health before it addresses their housing. The framing matters: it determines the lens through which the service will engage with you, and it determines the documentation it will generate about you.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Kosta provided the Department of Housing with his email address. The ranger who placed a crime sticker around his tent also has his email. No referral forms were completed. No housing applications were initiated. No pathway was opened. An email was provided, absorbed, and nothing happened.</p>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-5">
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">What They Said</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Rihanna from the Housing Team said Kosta was considering going to Link 2 Home (NSW)</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Being placed on Gold Coast Homeless Health Outreach Team (mental health first)</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">QLD Driver's Licence required to access Department of Housing</p></div>
                    </div>
                </div>
                <div class="border border-sage/20 p-4" style="background:rgba(61,122,74,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-2">The Reality</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Kosta is not going to NSW. He did not indicate this. He was not consulted.</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">No forms were provided. No applications were initiated.</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">He has been on the Gold Coast for 2 years — a QLD licence requirement is a structural barrier, not an honest one</p></div>
                    </div>
                </div>
                <div class="border border-paper/[0.08] p-4" style="background:rgba(0,0,0,0.12)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-2">The Pattern</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-paper/40 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Route person to mental health lens first</p></div>
                        <div class="flex gap-2 items-start"><span class="text-paper/40 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Generate mental health documentation</p></div>
                        <div class="flex gap-2 items-start"><span class="text-paper/40 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Use that documentation to dismiss the person in any formal context</p></div>
                        <div class="flex gap-2 items-start"><span class="text-paper/40 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Push them toward NSW — make them someone else's problem</p></div>
                    </div>
                </div>
            </div>

            <div class="border-l-4 border-hot/50 pl-5" style="background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">What Is Actually Happening</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed">The Gold Coast only wants the rich here. The Homeless Action Plan is a compliance exercise — an A4 piece of paper, a food referral, four slices of pizza — designed to make it look like something is being done while moving the problem on. Confiscate the tent. Place an "abandoned" sticker on it. Hand over a service list. Refer to mental health. Ask for a driver's licence. Suggest NSW. At no point does the person in front of you get housed.</p>
            </div>
        </div>

        <!-- Steven Miles response + Tom Tate connection -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.4)">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">"YOUR MATE IS NOT ON THE LIST."<br><span class="text-hot">STEVEN MILES. A DRAWER. AND A COST OF LIVING CRISIS.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">When the homelessness situation was raised with Steven Miles, his response was to go back to a drawer and inform Kosta: <span class="font-display text-paper/70">"Well I checked — and your mate is not on the Department of Housing list."</span></p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Being on the list accomplishes nothing anyway. A list is not housing. In a cost of living crisis — where rents have increased 30–40% in some Gold Coast suburbs since 2020, where mortgage stress is at multi-decade highs, and where the working population is increasingly priced out of the city it services — the government's response is to check a list and report the result. The list is not the service. The list is the bureaucratic alibi for not providing the service.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">What Accountability Looks Like</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">The government's responsibility in a cost of living crisis is to ensure referral pathways actually function</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">There should be short-term accommodation options — not necessarily in the middle of the Gold Coast, but accessible and available</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">A list that does nothing is not a policy. It is a document that allows a politician to say they checked.</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">"Not on the list" is not an answer to homelessness — it is a dismissal dressed as due diligence</p></div>
                    </div>
                </div>
                <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.04)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">The Tom Tate Connection</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed mb-3">Tom Tate — the Gold Coast Mayor — allowed the Sandy Tulisi rooming house operation to stand. He let a predatory landlord's substandard, unsafe housing remain without council intervention. Sandy Tulisi has now opened a new BeHome location in Surfers Paradise with the proceeds.</p>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed">The Gold Coast moved on the homeless person's tent with stickers and confiscations. It did not move on the predatory landlord's rooming house. That asymmetry is a policy choice. It tells you whose Gold Coast this is.</p>
                </div>
            </div>
        </div>

        <!-- Camera access / who gets to speak -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(124,106,170,0.4)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Speech &amp; Access — Cost of Living Crisis</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">MY VOICE SHOULD BE THE LOUDEST.<br><span style="color:#7c6aaa">I CAN'T EVEN GET A CAMERA.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">Gold Coast Council spends over <strong class="text-paper/70">$1 billion per year</strong>. That budget covers media teams, communications staff, event documentation, council-branded content. The infrastructure to document public life on the Gold Coast is extensive and publicly funded. And yet Kosta Kondratenko — a person at the centre of the most documented sequence of Gold Coast corruption, police misconduct, and criminal conduct in recent years — cannot get access to camera equipment to document his own story.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">The Queensland State Library has cameras and visual production equipment available to the public. In practice, they are not available in any meaningful way to a person who is homeless and navigating the same institutions that are simultaneously trying to label them as mentally unwell. The equipment exists. The access does not.</p>

            <div class="border border-paper/[0.08] p-5 mb-5" style="background:rgba(124,106,170,0.04)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-3" style="color:#7c6aaa">The Speech Problem — Who Gets to Speak</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">This is a question about speech — about who gets to produce it, and in what quality, and with what reach. A Gold Coast Council media team can produce professional broadcast-standard content about the city. A major corporation can deploy PR firms to shape the narrative about the people documented on this site. Gina Rinehart can fund legal action to suppress a video. And the person who witnessed all of it, who is documenting it, who has the clearest interest in getting it on record — is doing it from a tent, without a camera, without equipment, without the institutional support that every other party in this story has access to.</p>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">That is the cost of living crisis in its fullest expression. It is not just that you cannot afford rent. It is that you cannot afford to speak. You cannot afford the equipment to document what you are experiencing. You cannot afford the legal representation to defend what you document. You cannot even turn up to a library and access equipment that is theoretically public because the conditions that put you outside have also made every public institution less accessible to you.</p>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed italic">The people who most need their voices heard are the people with the fewest tools to make themselves heard. And the people who want those voices suppressed — the councils, the corporations, the predatory landlords, the corrupt police — have every tool available.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">$1 Billion/Year — GCC Budget</div>
                    <p class="text-[0.6rem] text-paper/42 leading-relaxed">Gold Coast Council's annual budget exceeds $1 billion. Its communications and media function is funded from public money. The public — including its homeless residents — cannot access equivalent tools to document public interest matters from their own perspective.</p>
                </div>
                <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.1)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-2">QLD Library — Equipment In Name Only</div>
                    <p class="text-[0.6rem] text-paper/42 leading-relaxed">The Queensland State Library lists cameras and visual equipment as available resources. For someone without a fixed address, navigating referral systems and mental health labels, "available in theory" and "accessible in practice" are not the same thing. Where is the money going?</p>
                </div>
            </div>
        </div>

        <!-- YouTube takedown / youth crime / media responsibility -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.4)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Big Tech · Youth Crime · Media Accountability</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE VIRAL VIDEO GOT AN AUTOMATED TAKEDOWN.<br><span class="text-hot">AND YOUTH CRIME GETS UNDER-REPORTED BECAUSE OF IT.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">The viral video — footage that was viewed by millions and directly triggered civil proceedings from Gina Rinehart — received an automated takedown from YouTube. Kosta's assessment: the trigger for the automated removal was content involving RJ. <strong class="text-paper/65">It is suspected that the takedown was at least partly influenced by RJ being Black, or younger</strong> — that YouTube's content moderation systems, which are well-documented to carry racial and age-related biases in their automated enforcement, flagged footage involving a young Black person in a confrontational context and removed it.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">If that suspicion is accurate, the consequence is perverse: the content moderation system designed to protect marginalised communities functioned to protect the person in this footage — a documented repeat offender who organised car theft rings, directed mob violence, and ran a premeditated ambush — from public accountability. The tool that was supposed to help actually shielded the perpetrator from exposure.</p>

            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Youth Crime and Big Tech — The Suppression Pattern</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Youth crime in Australia — and particularly on the Gold Coast — is systematically under-reported. The reasons are structural: police statistics are aggregated in ways that obscure repeat offenders; courts impose non-publication orders on juvenile proceedings; and now, increasingly, the footage that documents these incidents is being removed by automated content moderation systems before it can be seen, shared, and acted on.</p>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Big tech platforms are not neutral arbiters. Their automated systems make decisions about what the public can see — and those decisions have disproportionate effects on who gets held accountable. When footage of a crime is removed because an algorithm flagged the race or age of the person in it, the result is not protection. It is suppression. It removes the record. It prevents accountability. And it leaves the community that was harmed with no documentation of what happened to them.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-4">
                    <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.12)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-2">What Big Tech Does</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Automated systems remove footage before human review</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Racial and age signals in content moderation are documented and disputed</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Takedowns suppress public record — the footage cannot be shared or cited once removed</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Appeal processes are slow, opaque, and designed for institutional accounts, not individuals</p></div>
                        </div>
                    </div>
                    <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.12)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-2">What This Costs</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Communities affected by youth crime lose their documentation</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Perpetrators benefit from algorithmic protection that was never intended for them</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">The political and legal record is incomplete — evidence disappears before it can be preserved</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.57rem] text-paper/42 leading-relaxed">Journalists and independent reporters bear the cost alone</p></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tent Advice Note / Human Rights Notice -->
            <div class="story-chapter reveal mb-8" style="border-left-color:rgba(61,122,74,0.5)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-sage border border-sage/40 px-2 py-1">The Note on the Tent · Reference 1718464</span>
                    <span class="text-[0.44rem] tracking-[0.15em] uppercase border border-paper/15 text-paper/30 px-2 py-0.5 blink">⬤ NO RESPONSE FROM COUNCIL</span>
                </div>
                <h3 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">THEY LEFT A NOTICE ON MY HOME.<br><span class="text-sage">SO I PUT THE COUNCIL ON NOTICE BACK.</span></h3>
                <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"On 24 June 2026 a City of Gold Coast officer left an Advice Note against my tent at Albert Waterways Park — 48 hours to remove my home or have it 'seized, confiscated, removed or impounded'. The tent is the only shelter I have."</p>

                <!-- Photos -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
                    <div>
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tent_notice/tent_1+(1).jpg" alt="The tent at Albert Waterways Park with the Council Advice Note placed against it" class="w-full border border-paper/[0.07]" style="height:260px;object-fit:cover" loading="lazy" />
                        <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/30 mt-1.5">The tent · Advice Note left against it · Albert Waterways Park, Mermaid Waters</div>
                    </div>
                    <div>
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tent_notice/gc_letter+(1).jpg" alt="City of Gold Coast Advice Note, Reference 1718464, dated 24 June 2026" class="w-full border border-paper/[0.07]" style="height:260px;object-fit:cover;object-position:top" loading="lazy" />
                        <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/30 mt-1.5">The Advice Note · Reference 1718464 · Issued 24 June 2026 by officer "Darren"</div>
                    </div>
                </div>

                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The Advice Note — "Storage of goods in a public place", Reference 1718464 — listed my <strong class="text-paper/65">tent and bedding</strong> as goods that "may be deemed unclaimed and/or abandoned and seized, confiscated, removed or impounded" within 48 hours. It is the same process that begins every clearing of a rough sleeper from public land.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">On <strong class="text-paper/65">25 June 2026</strong> I responded with a formal letter to the City of Gold Coast's CEO, Mr Tim Baker — copied to the General Counsel, City Laws Compliance, the local Councillor, and the Queensland Human Rights Commission — to be treated as an internal human rights complaint under the <em>Human Rights Act 2019</em> (Qld). It puts the Council on notice and demands undertakings.</p>

                <!-- Points the notice raises -->
                <div class="border border-sage/20 p-5 mb-6" style="background:rgba(61,122,74,0.04)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-3">The Points the Notice Raises</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">The tent and bedding are not abandoned goods — they are my <strong class="text-paper/60">home and only shelter</strong>. I am a disadvantaged person sheltering under a tree on public land, harming no one.</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">The Council is a <strong class="text-paper/60">public entity under the Human Rights Act 2019 (Qld)</strong>. Section 58(1) makes it unlawful to act incompatibly with human rights, and requires proper consideration of them.</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">Seizing my home would engage the right to protection from <strong class="text-paper/60">cruel, inhuman or degrading treatment (s 17)</strong>, the <strong class="text-paper/60">right to property (s 24)</strong>, and the right not to have my <strong class="text-paper/60">home arbitrarily interfered with (s 25(a))</strong>.</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">This is settled: in <em class="text-paper/60">Bobeldyk v Moreton Bay City Council</em> [2026] QSC 27 (6 March 2026), the Supreme Court found a council that seized rough sleepers' tents — without proper human rights consideration, reasonable time, or alternative accommodation — acted <strong class="text-paper/60">unlawfully</strong>. The tents were the occupants' homes. The earlier <em class="text-paper/60">Tipler</em> [2025] QSC 194 injunction restrained that council entirely. <strong class="text-paper/60">Moreton Bay ran this very process. Moreton Bay lost.</strong></p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">If the Council acts, I will apply to the <strong class="text-paper/60">Supreme Court for an urgent injunction</strong> and pursue damages — and I am not the only person being targeted, so I reserve the right to pursue that relief collectively.</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">I demanded written <strong class="text-paper/60">undertakings by 5:00pm Friday 27 June 2026</strong>: no seizure without proper s 58 consideration and a genuine referral to accommodation; disclosure of what human rights consideration was given; and preservation/return of anything already taken.</p></div>
                    </div>
                </div>

                <!-- Embedded notice -->
                <div class="mb-3">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[0.46rem] tracking-[0.2em] uppercase text-sage/70">Human Rights Notice — Full Letter</span>
                        <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tent_notice/Kondratenko_HumanRights_Notice_GCCC+(1)+(1).pdf" target="_blank" rel="noopener" class="text-[0.44rem] tracking-[0.14em] uppercase text-sage border border-sage/30 px-2 py-0.5 hover:bg-sage/10 transition-colors">Open PDF ↗</a>
                    </div>
                    <iframe src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tent_notice/Kondratenko_HumanRights_Notice_GCCC+(1)+(1).pdf" class="w-full border border-paper/[0.07]" style="height:520px;background:#0d0d0d" title="Human Rights Notice to City of Gold Coast — Reference 1718464"></iframe>
                </div>

                <!-- Document list -->
                <div class="flex flex-wrap gap-2 mb-6">
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tent_notice/email_confirmation.pdf" target="_blank" rel="noopener" class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/45 border border-paper/15 px-2.5 py-1 hover:border-sage/50 hover:text-sage transition-colors">📧 Email Confirmation ↗</a>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tent_notice/Kondratenko_HumanRights_Notice_GCCC+(1)+(1).pdf" target="_blank" rel="noopener" class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/45 border border-paper/15 px-2.5 py-1 hover:border-sage/50 hover:text-sage transition-colors">📄 Human Rights Notice ↗</a>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tent_notice/gc_letter+(1).jpg" target="_blank" rel="noopener" class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/45 border border-paper/15 px-2.5 py-1 hover:border-sage/50 hover:text-sage transition-colors">🖼 Advice Note ↗</a>
                    <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tent_notice/tent_1+(1).jpg" target="_blank" rel="noopener" class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/45 border border-paper/15 px-2.5 py-1 hover:border-sage/50 hover:text-sage transition-colors">🖼 Tent Photo ↗</a>
                </div>

                <!-- Status -->
                <div class="border-l-4 border-sage/60 pl-5 py-3" style="background:rgba(61,122,74,0.05)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-1">Status — As at 28 June 2026, 8:45pm</div>
                    <p class="text-[0.7rem] leading-relaxed text-paper/55">The undertakings were demanded by 5:00pm on Friday 27 June. That deadline has passed. As at <strong class="text-paper/70">28 June 2026, 8:45pm</strong>, there has been <strong class="text-paper/70">no response from the Council</strong> — and the tent <strong class="text-paper/70">has not been touched</strong>. The 48-hour seizure window in the Advice Note has come and gone without the Council acting on it. The letter, and the law it sets out, are on the record.</p>
                </div>
            </div>

            <div class="border border-paper/[0.08] p-5" style="background:rgba(0,0,0,0.14)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">The Responsibility of Media</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Legacy media has retreated from the street. Newsroom budgets have been cut. Local reporters no longer cover the full spectrum of what happens in communities — what happens at 2am outside a service station, what happens in the car parks, what happens when a group of young men decide to wait for someone at a tyre shop. Those stories don't fit neatly into the production cycle. They don't generate ad revenue. And when footage exists, a platform takedown can remove it before a journalist even sees it.</p>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed">The responsibility of media — and of platforms that function as media infrastructure — is to cover what is actually happening in the streets and how people actually live. Not just the curated version. Not just the events that fit the format. The version that involves a man defending himself at a tyre shop, a tent with a sticker saying it's abandoned, and a person who cannot get a camera to document his own story because the Gold Coast only wants the rich here.</p>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     AUSTRALIA FAIR — HANCOCK PROSPECTING (CONFIRMED)
══════════════════════════════════════ -->
<section id="australia-fair" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(201,138,16,0.05) 0%,transparent 60%)">
    <div class="max-w-4xl mx-auto">

        <div class="flex items-center gap-3 mb-3 reveal">
            <span class="text-[0.48rem] tracking-[0.22em] uppercase border px-2 py-1 text-sage border-sage/40">Southport — Australia Fair · Now Confirmed</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-3 leading-tight reveal">THE RUMOUR AT AUSTRALIA FAIR.<br><span class="text-gold">NOW CONFIRMED.</span></h2>
        <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-8 reveal">"What was going around Southport has been confirmed: Hancock Prospecting has bought Australia Fair from a Chinese billionaire — they're evicting the trouble tenants, amping up security, and Mrs Rinehart is now looking to bring JD Sports and an Apple Store back."</p>

        <!-- Australia Fair photo -->
        <div class="reveal mb-6">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/australia_fair.jpeg"
                 alt="Australia Fair shopping centre — Southport"
                 class="w-full border border-paper/[0.07]"
                 style="max-height:520px;object-fit:contain;background:#0d0d0d"
                 loading="lazy" />
            <div class="flex items-center justify-between px-3 py-2 border border-t-0 border-paper/[0.07]" style="background:rgba(201,138,16,0.06)">
                <span class="text-[0.45rem] tracking-[0.18em] uppercase text-gold">Australia Fair · Southport, Gold Coast</span>
                <span class="text-[0.45rem] tracking-[0.14em] uppercase text-paper/25">New owner · Confirmed</span>
            </div>
        </div>

        <!-- Now confirmed -->
        <div class="border border-sage/30 p-4 mb-6 reveal" style="background:rgba(61,122,74,0.05)">
            <div class="flex gap-2 items-start">
                <span class="text-sage text-xs shrink-0 mt-0.5">✓</span>
                <p class="text-[0.62rem] text-paper/45 leading-relaxed italic">Update: what was first reported here as a rumour — relayed by an Optus employee — has now been <strong class="text-paper/65">confirmed</strong>. Hancock Prospecting's purchase of Australia Fair, the eviction of the trouble tenants, and the security upgrade are confirmed, along with the new owner's plans to bring anchor retailers back to the centre.</p>
            </div>
        </div>

        <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4 reveal">It is now confirmed: <strong class="text-paper/70">Hancock Prospecting</strong> — Gina Rinehart's company — has purchased <strong class="text-paper/70">Australia Fair</strong> in Southport from the <strong class="text-paper/70">Chinese billionaire</strong> who previously owned the centre. The new ownership is moving to evict what were described as "trouble tenants" and is <strong class="text-paper/70">amping up security</strong> across the centre, the stated purpose being to make sure shoppers are safe. The eviction of trouble tenants and the increase in security are two halves of the same clean-up — a deliberate reset of who uses the centre and how it feels to walk through it.</p>
        <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-6 reveal">Beyond the clean-up, <strong class="text-paper/70">Mrs Rinehart is looking to bring the retail back</strong> — including <strong class="text-paper/70">JD Sports</strong> and an <strong class="text-paper/70">Apple Store</strong>. The context matters: <strong class="text-paper/70">Rebel Sport moved out shortly after Adam Watson's confrontation with Harlen</strong>, leaving a hole in the centre's retail mix. The new ownership's plan is to fill it — restoring anchor retailers to a centre that had been losing them.</p>

        <!-- Hancock Prospecting logo -->
        <div class="border border-paper/[0.08] p-6 mb-6 reveal flex flex-col items-center text-center" style="background:rgba(0,0,0,0.18)">
            <div class="text-[0.46rem] tracking-[0.2em] uppercase text-paper/30 mb-4">Confirmed New Owner</div>
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/hancock_prospecting_logo_full.jpg"
                 alt="Hancock Prospecting"
                 class="w-full max-w-[320px] mb-4"
                 style="object-fit:contain;background:#fff"
                 loading="lazy" />
            <div class="text-[0.5rem] tracking-[0.22em] uppercase text-paper/25">Gina Rinehart · Resources &amp; Property</div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-2 reveal">
            <div class="border border-sage/20 p-5" style="background:rgba(61,122,74,0.03)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-1">The Sale — Confirmed</div>
                <p class="text-[0.6rem] text-paper/40 leading-relaxed">Hancock Prospecting has purchased Australia Fair from the Chinese billionaire who previously owned it.</p>
            </div>
            <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.03)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-1">The Tenants</div>
                <p class="text-[0.6rem] text-paper/40 leading-relaxed">New ownership is evicting the "trouble tenants" as part of a clean-up of the centre.</p>
            </div>
            <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.03)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-1">The Security</div>
                <p class="text-[0.6rem] text-paper/40 leading-relaxed">Security is being increased across the centre — the stated aim being to keep shoppers safe.</p>
            </div>
            <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.03)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-1">The Retail</div>
                <p class="text-[0.6rem] text-paper/40 leading-relaxed">Mrs Rinehart is looking to bring retail back — including JD Sports and an Apple Store. Rebel Sport moved out shortly after Adam Watson's confrontation with Harlen.</p>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     EPISODE 2 LINK
══════════════════════════════════════ -->
<section class="py-24 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(124,106,170,0.06) 0%,rgba(12,8,4,0) 100%)">
    <div class="max-w-3xl mx-auto text-center">
        <div class="flex items-center justify-center gap-3 mb-6"><div class="w-12 h-px" style="background:#7c6aaa"></div><span class="text-[0.5rem] tracking-[0.3em] uppercase" style="color:#7c6aaa">End of Episode 1</span><div class="w-12 h-px" style="background:#7c6aaa"></div></div>
        <h2 class="font-display leading-none tracking-wide mb-5" style="font-size:clamp(2.8rem,7vw,5rem)">THE NETWORK.<br><span style="color:#7c6aaa">EPISODE 2.</span></h2>
        <p class="font-serif italic text-paper/40 text-lg leading-relaxed mb-10 max-w-xl mx-auto">Adam Watson. Bodie Chalmers. RJ. Samira Khalaj. Kira Kira. Tasmania. The strata litigation. The criminal network and the investigative record that documents it.</p>
        <a href="/episode-2" class="inline-block font-display tracking-widest text-xl px-12 py-5 transition-all hover:bg-violet/10" style="color:#7c6aaa;border:1px solid rgba(124,106,170,0.5)">CONTINUE TO EPISODE 2 →</a>
        <p class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/18 mt-8">Episode 2 covers: Adam Watson &amp; Bodie Chalmers · RJ — 10 Incidents · Samira Khalaj · Kira Kira · Brazen Crime · Tasmania · Strata Litigation</p>
    </div>
</section>

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
        '<div style="font-size:0.48rem;letter-spacing:0.22em;text-transform:uppercase;color:rgba(193,68,14,0.6);margin-bottom:1rem">PDF Document — Lodged with NCAT 3 March 2026</div>' +
        '<div class="pdf-ph-pages">' + pagesHtml + '</div>' +
        '<div style="font-family:\'Bebas Neue\',sans-serif;font-size:1.4rem;letter-spacing:0.06em;color:rgba(245,234,212,0.5);margin-bottom:0.75rem">' + (title || 'DOCUMENT') + '</div>' +
        '<div style="font-size:0.62rem;line-height:1.7;color:rgba(245,234,212,0.35);max-width:480px;margin:0 auto">' + (desc || '') + '</div>' +
        '<div style="margin-top:1.5rem;font-size:0.5rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(245,234,212,0.2);border:1px solid rgba(245,234,212,0.07);display:inline-block;padding:0.35rem 0.75rem">' + pages + ' pages · Lodged with NCAT</div>' +
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
    t.style.cssText = 'position:fixed;bottom:1.5rem;left:50%;transform:translateX(-50%);background:rgba(12,8,4,0.95);border:1px solid rgba(201,138,16,0.35);color:#c98a10;font-family:"DM Mono",monospace;font-size:0.55rem;letter-spacing:0.15em;text-transform:uppercase;padding:0.6rem 1.4rem;z-index:9999;pointer-events:none;transition:opacity 0.3s;white-space:nowrap';
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
     SMS SIGNUP
══════════════════════════════════════ -->
<section id="sms" class="py-24 px-5 md:px-10 relative overflow-hidden border-t border-paper/[0.05]">
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 70% 50% at 50% 50%,rgba(193,68,14,0.055) 0%,transparent 70%)"></div>
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


<!-- ══════════════════════════════════════
     ADAM WATSON — THE MAN
══════════════════════════════════════ -->
<section id="adam-watson" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(201,138,16,0.06) 0%,transparent 70%)">
    <div class="max-w-4xl mx-auto">

        <div class="flex items-center gap-3 mb-3 reveal">
            <span class="text-[0.48rem] tracking-[0.22em] uppercase border px-2 py-1 text-gold border-gold/40">Profile — Adam Watson</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-6 leading-tight reveal">ADAM WATSON.<br><span class="text-gold">THE MAN BEHIND THE STORY.</span></h2>

        <div class="flex flex-col md:flex-row gap-8 items-start mb-10 reveal">
            <p class="font-serif italic text-paper/50 text-lg leading-relaxed flex-1">"Adam Watson has lived more of Australia's real history than most journalists will ever document. He was there for the mining boom's foundations — and he is now determined to shape what comes next."</p>
            <div class="w-full md:w-64 shrink-0">
                <div class="border border-paper/[0.08] overflow-hidden">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/adam_watson_portrait.jpg" alt="Adam Watson" class="w-full object-cover object-top" style="height:280px;filter:grayscale(10%) contrast(1.05)" loading="lazy" />
                    <div class="border-t border-paper/[0.06] px-3 py-2 bg-paper/[0.02]">
                        <div class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/30">Adam Watson</div>
                        <div class="text-[0.48rem] text-paper/18 mt-0.5">Candidate — Seat of Kingsford Smith</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lang Hancock -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.35)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-4">Personal History</div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">GOOD FRIENDS WITH LANG HANCOCK.<br><span class="text-gold">THE FOUNDER OF HANCOCK PROSPECTING.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Adam Watson was personally acquainted with <strong class="text-paper/70">Lang Hancock</strong> — the mining magnate who founded Hancock Prospecting, built the iron ore empire of the Pilbara, and whose legacy was inherited by his daughter Gina Rinehart, now Australia's wealthiest person. Lang Hancock did not build his fortune through institutions. He built it through raw persistence, an eye for resource country, and a willingness to operate outside the established order. Adam Watson, who knew him personally, recognises that template.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">That friendship affords Adam — and this publication — a window into Australian economic history that no university course provides. The internal politics of Hancock Prospecting, the relationships that shaped Queensland and Western Australian resource law, the backroom arrangements that turned dirt tracks into billion-dollar corridors: Adam Watson was adjacent to all of it. The inside account of Gina Rinehart and the Hancock dynasty, as understood by someone who knew its founder, will be published through Sunlight.Quest.</p>
            <div class="border border-gold/20 p-5 mb-5" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">What This Means for the Record</div>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">First-hand account of the Hancock Prospecting founding era — not filtered through authorised biography</p></div>
                    <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Inside understanding of the Rinehart family's internal dynamics, power structure, and long-standing disputes</p></div>
                    <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Broader context for Gina Rinehart's conduct documented elsewhere in this publication</p></div>
                </div>
            </div>
        </div>

        <!-- Political run -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(61,122,74,0.35)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-4">Political Developments</div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">MAKING A RUN FOR POLITICS.<br><span class="text-sage">AND WE'RE GOING IN WITH HIM.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Adam Watson is preparing to enter politics. This publication — Sunlight.Quest — is actively supporting that effort. We are not a neutral observer. We are a participant. The investigative work documented here is inseparable from Adam's political platform: accountability for corruption, reform of the criminal justice system, protection of investigative journalism, and an end to the institutional protection of predatory conduct.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Sunlight.Quest will be providing inside intelligence on the political landscape — including, where appropriate and in the public interest, inside information on <strong class="text-paper/70">Gina Rinehart</strong>, Australian resource politics, and the networks that have operated without scrutiny for decades. That information will be published here, on our terms, on our timeline.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                <div class="border border-sage/25 p-5" style="background:rgba(61,122,74,0.04)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-2">The Platform</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Corruption accountability — CCC, police, and corporate networks</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Criminal justice reform — mental health diversions, DPP conduct</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Protection of journalism — public interest privilege, media freedom</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Housing and strata reform — based on lived experience of system failure</p></div>
                    </div>
                </div>
                <div class="border border-gold/25 p-5" style="background:rgba(201,138,16,0.04)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">What's Coming</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Inside account of the Hancock Prospecting dynasty and its political dealings</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Detailed reporting on Gina Rinehart's conduct — from primary sources</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Australian political history through the lens of someone who was in the room</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Endorsements, political strategy, and campaign developments — live</p></div>
                    </div>
                </div>
            </div>
            <div class="border-l-4 border-gold/50 pl-5" style="background:rgba(201,138,16,0.05);padding:1rem 1rem 1rem 1.25rem">
                <p class="text-[0.72rem] text-paper/55 leading-relaxed italic font-serif">We are about to become a powerbroker. The inside goss on Gina Rinehart and Australian history will be published through this platform — and the people who have tried to silence this journalism are going to wish they hadn't.</p>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     TIP-OFF POPUP MODAL
══════════════════════════════════════ -->
<div id="sq-modal" onclick="sqModalBackdropClick(event)" role="dialog" aria-modal="true" aria-label="Submit a Tip">
    <div class="sq-modal-inner">

        <!-- Close button -->
        <div class="sq-modal-close-row">
            <button class="sq-modal-close-btn" onclick="closeTipModal()">✕ CLOSE</button>
        </div>

        <!-- Header -->
        <div style="margin-bottom:6px">
            <div class="sq-logo-row">
                <div class="sq-logo-bar"></div>
                <div>
                    <div class="sq-logo-text">Sunlight.Quest</div>
                    <div class="sq-logo-sub">Accountability journalism · Gold Coast / Queensland</div>
                </div>
            </div>
            <div class="sq-conf-strip">Encrypted &nbsp;·&nbsp; Source protected &nbsp;·&nbsp; Triangulated for verification</div>
        </div>

        <!-- Form card -->
        <div class="sq-card" id="sq-form-card">

            <!-- 1. SUBJECT -->
            <div class="sq-section">
                <div class="sq-section-label">Subject of tip-off <span class="sq-badge sq-badge-req">required</span></div>
                <div class="sq-field">
                    <select class="sq-select" name="sq_subject" id="sq-subject">
                        <option value="">— Select subject / profile —</option>
                        <optgroup label="Episode 1">
                            <option>Marc Barrow (QPS)</option>
                            <option>Sandy Tulisi / BeHome</option>
                            <option>Felipe Mattos</option>
                            <option>Aaron Barker (QPS)</option>
                            <option>RJ — QPS Officer</option>
                            <option>Tom Tate (Gold Coast Council)</option>
                            <option>Trent Long</option>
                        </optgroup>
                        <optgroup label="Episode 2">
                            <option>Bodie Chalmers</option>
                            <option>West Kirra</option>
                            <option>Samira</option>
                            <option>Alex Vourliotis</option>
                            <option>Graham Gordon</option>
                        </optgroup>
                        <optgroup label="Episode 3">
                            <option>Bemarine</option>
                            <option>Katherine Kidd</option>
                            <option>Changfa Agent</option>
                        </optgroup>
                        <option>Other (specify below)</option>
                    </select>
                </div>
                <div class="sq-field">
                    <input class="sq-input" type="text" name="sq_subject_other" placeholder="If 'Other' — name or describe the subject" />
                </div>
                <div class="sq-field">
                    <textarea class="sq-textarea" id="sq-summary" name="sq_summary" placeholder="Summary of what you know — who, what, when, where. Keep it factual." style="min-height:110px;"></textarea>
                    <div class="sq-field-hint">Do not include names of uninvolved third parties unless essential to the account.</div>
                </div>
            </div>

            <!-- 2. EVIDENCE -->
            <div class="sq-section">
                <div class="sq-section-label">Evidence / material <span class="sq-badge sq-badge-opt">optional</span></div>
                <div class="sq-field">
                    <select class="sq-select" name="sq_evidence_type">
                        <option value="">— Type of evidence you have —</option>
                        <option>Video / footage</option>
                        <option>Photos / images</option>
                        <option>Audio recording</option>
                        <option>Documents / screenshots</option>
                        <option>Witness testimony only</option>
                        <option>Social media posts / threads</option>
                        <option>Multiple types</option>
                    </select>
                </div>
                <div class="sq-field">
                    <input class="sq-input" type="url" name="sq_drive_link" placeholder="Google Drive / Dropbox / OneDrive link (set to 'Anyone with link')" />
                    <div class="sq-field-hint">You retain file ownership — we access read-only.</div>
                </div>
                <div class="sq-field">
                    <input class="sq-input" type="url" name="sq_direct_url" placeholder="Direct URL to video, post, or public page" />
                </div>
                <div class="sq-field">
                    <textarea class="sq-textarea" name="sq_evidence_desc" placeholder="Describe the material — what it shows, when captured, chain of custody if known." style="min-height:72px;"></textarea>
                </div>
            </div>

            <!-- 3. PHYSICAL HANDOFF -->
            <div class="sq-section">
                <div class="sq-section-label">Physical handoff <span class="sq-badge sq-badge-opt">optional</span></div>
                <label class="sq-toggle-row" for="sq-handoff-chk">
                    <input type="checkbox" id="sq-handoff-chk" name="sq_wants_pickup" onchange="sqToggle('sq-handoff-chk','sq-handoff-fields')" />
                    <span>I have physical material (USB, prints, recordings) and want someone to come and collect it</span>
                </label>
                <div class="sq-collapsible" id="sq-handoff-fields">
                    <div class="sq-grid2">
                        <div class="sq-field">
                            <input class="sq-input" type="text" name="sq_pickup_suburb" placeholder="Suburb / area (no full address yet)" />
                        </div>
                        <div class="sq-field">
                            <input class="sq-input" type="text" name="sq_pickup_timing" placeholder="Preferred days / times" />
                        </div>
                    </div>
                    <div class="sq-field">
                        <textarea class="sq-textarea" name="sq_pickup_notes" placeholder="Special instructions — e.g. 'call ahead', 'after 6pm only', 'come alone'" style="min-height:60px;"></textarea>
                    </div>
                </div>
            </div>

            <!-- 4. TRIANGULATION -->
            <div class="sq-section">
                <div class="sq-section-label">Triangulation context</div>
                <div class="sq-field">
                    <select class="sq-select" name="sq_relation">
                        <option value="">— Your relationship to the subject —</option>
                        <option>Direct witness</option>
                        <option>Former associate / colleague</option>
                        <option>Family / household member</option>
                        <option>Victim or affected party</option>
                        <option>Secondary source (told by someone else)</option>
                        <option>Public records / online research</option>
                        <option>Prefer not to say</option>
                    </select>
                    <div class="sq-field-hint">Helps us weight and verify the information — not to identify you.</div>
                </div>
                <div class="sq-checkbox-group sq-field">
                    <label class="sq-checkbox-item"><input type="checkbox" name="sq_has_corroboration" /> I have corroborating witnesses who may also be willing to speak</label>
                    <label class="sq-checkbox-item"><input type="checkbox" name="sq_reported_before" /> I have previously reported this to police or authorities with no result</label>
                    <label class="sq-checkbox-item"><input type="checkbox" name="sq_safety_concern" /> I have safety concerns in relation to this matter</label>
                    <label class="sq-checkbox-item"><input type="checkbox" name="sq_consents_publish" /> I consent to this information being used in published reporting (anonymised)</label>
                </div>
            </div>

            <hr class="sq-divider" />

            <!-- 5. CONTACT -->
            <div class="sq-section">
                <div class="sq-section-label">Your details <span class="sq-badge sq-badge-opt">optional</span></div>
                <label class="sq-toggle-row" for="sq-anon-chk">
                    <input type="checkbox" id="sq-anon-chk" name="sq_anonymous" checked onchange="sqToggleAnon()" />
                    <span>Submit anonymously — do not attach contact details to this report</span>
                </label>
                <div class="sq-collapsible" id="sq-contact-fields">
                    <div class="sq-grid2">
                        <div class="sq-field">
                            <input class="sq-input" type="text" name="sq_contact_name" placeholder="Name (or alias)" />
                        </div>
                        <div class="sq-field">
                            <input class="sq-input" type="text" name="sq_contact_phone" placeholder="Phone or Signal number" />
                        </div>
                    </div>
                    <div class="sq-field">
                        <input class="sq-input" type="email" name="sq_contact_email" placeholder="Email address" />
                    </div>
                    <div class="sq-field">
                        <select class="sq-select" name="sq_contact_pref">
                            <option value="">— Preferred contact method —</option>
                            <option>Email only</option>
                            <option>Phone call</option>
                            <option>SMS / text</option>
                            <option>Signal (encrypted)</option>
                            <option>In-person only</option>
                        </select>
                    </div>
                    <div class="sq-field">
                        <textarea class="sq-textarea" name="sq_contact_notes" placeholder="Any specific instructions for how or when to contact you" style="min-height:56px;"></textarea>
                    </div>
                </div>
            </div>

        </div><!-- /sq-card -->

        <!-- Success state -->
        <div class="sq-card" id="sq-success-state">
            <span class="sq-success-word">RECEIVED.</span>
            <p>Your intelligence report has been logged.<br>If you provided contact details, expect a response within 48 hours.</p>
        </div>

        <!-- Footer / submit -->
        <div class="sq-form-footer" id="sq-form-footer">
            <p class="sq-footer-note">All submissions are timestamped on receipt. Source identity is never disclosed without explicit consent. Anonymous reports are investigated on merit.</p>
            <button id="sq-submit-btn" onclick="sqSubmit()">SUBMIT TIP →</button>
        </div>

    </div>
</div>


<!-- ══ FOOTER ══ -->
<footer class="border-t border-paper/[0.05] px-5 md:px-10 py-8 max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-4">
    <div class="font-display text-xl tracking-widest text-paper/18">SUNLIGHT<span class="text-dim">.QUEST</span></div>
    <div class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/10 text-center">© 2025 Sunlight.Quest — Investigative Journalism — Gold Coast, QLD</div>
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
    'pdf-qld-person-history': {
        type:'pdf',
        title:'QUEENSLAND PERSON HISTORY — FULL POLICE RECORD',
        tag:'QLD Police Record · All Charges Dropped or Defeated · Zero Convictions',
        meta:'PDF · Queensland Person History · Voluntarily disclosed',
        desc:'The full Queensland Police person history for Kosta Kondratenko — disclosed voluntarily, on camera, in the viral video. Every charge listed in this document has been either dropped by the prosecution or defeated at hearing. Not a single charge has resulted in a conviction. Published here as a direct statement: transparency is not a vulnerability. It is a position. The people documented elsewhere on this site have not taken the same position.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/qld_person_history+copy.pdf',
        filename:'qld_person_history copy.pdf'
    },
    'pdf-oracle-purdie-email': {
        type:'pdf',
        title:'REQUEST FOR REVIEW — ORACLE EAST ASSAULT · DANIEL PURDIE',
        tag:'Minister for Police · Formal Review Request · Oracle East · 6-on-1 Assault',
        meta:'PDF · Email correspondence · Sent to Daniel Purdie, Minister for Police',
        desc:'Original email sent to Daniel Purdie — Minister for Police — formally requesting a review of the Oracle East assault. The email documents the assault, the failure of the investigating officers to properly investigate, and the conduct that has since been the subject of escalation. This email initiated the ministerial-level review that resulted in Sergeant Robert Wilkinson being dispatched in response.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/oracle_assault/request_for_review_of_assault.pdf',
        filename:'request_for_review_of_assault.pdf'
    },
    'pdf-oracle-robina-medical': {
        type:'pdf',
        title:'ROBINA HOSPITAL MEDICAL CERTIFICATE — ORACLE EAST ASSAULT',
        tag:'Medical Evidence · Robina Hospital · Injuries · 6-on-1 Assault',
        meta:'PDF · Medical Certificate · Robina Hospital · Clinical record of assault injuries',
        desc:'Robina Hospital medical certificate documenting the injuries sustained during the Oracle East assault — a 6-on-1 attack by individuals connected to RJ\'s network, following the circulation of the viral video. Clinical medical evidence corroborating the account of a sustained physical assault. Obtained following the assault and submitted as supporting documentation in the escalation to the Minister for Police.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/oracle_assault/robina_hospital_medical_records.pdf',
        filename:'robina_hospital_medical_records.pdf'
    },
    'pdf-oracle-minister-response': {
        type:'pdf',
        title:'LETTER FROM MINISTER FOR POLICE — SGT ROBERT WILKINSON DISPATCHED',
        tag:'Daniel Purdie · Minister for Police · Sergeant Robert Wilkinson · Ministerial Confirmation',
        meta:'PDF · Letter from Daniel Purdie\'s office · Ministerial level response',
        desc:'Letter from the office of Daniel Purdie, Minister for Police, confirming that Sergeant Robert Wilkinson was sent to Kosta Kondratenko in connection with the enquiry into the Oracle East assault. This written confirmation from a ministerial office establishes a formal record: the escalation was received, logged, and actioned. Sergeant Wilkinson\'s visit is the documented response to the assault review request. The conduct of the original investigating officers — directing the victim to the Child Protection Unit, failing to subpoena the assault location, volunteering attacker-supplied justifications — occurred against the backdrop of this ministerial referral.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/oracle_assault/letter_from_minister_of_police.pdf',
        filename:'letter_from_minister_of_police.pdf'
    },
    'pdf-judgement-samir': {
        type:'pdf',
        title:'JUDGEMENT ORDER — SAMIR DHAKAL · LOCAL COURT',
        tag:'$92,505 · Obtaining Benefit by Deception · Deportation Character Evidence',
        meta:'PDF · Local Court Judgement Order · Stamped · Unpaid',
        desc:'Local Court Judgement Order entered against Samir Dhakal for $92,505. The debt was not repaid. Samir Dhakal obtained benefit by deception — extracting financial value from Adam Watson and others who trusted him, then failing to repay. This stamped court document was submitted as part of the character evidence package provided to then-Immigration Minister Tony Burke in support of Samir Dhakal\'s deportation from Australia. Non-payment of a court-ordered debt was relied upon as evidence of character unfitness for continued residency.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/judgement_order_samir_dhakal.pdf',
        filename:'judgement_order_samir_dhakal.pdf'
    },
    'pdf-cor-alteration': {
        type:'pdf',
        title:'CERTIFICATE OF READINESS — DPP ALTERATIONS',
        tag:'D236/24 · DPP Handwritten Alterations · "Replacement to be Lodged"',
        meta:'PDF · Kosta\'s signed certificate returned with DPP alterations · 16 October 2025',
        desc:'Kosta Kondratenko\'s signed Certificate of Readiness, returned by the DPP with handwritten alterations crossing out the substantive sections of the appeal — scope, new evidence sought, cross-examination — with a notation "Replacement to be Lodged." The registry declined to file the altered document, making Kosta\'s own signed version unfileable. No formal dispute mechanism was created.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/contravene_move_on/certificate_of_readiness_alteration.pdf',
        filename:'certificate_of_readiness_alteration.pdf'
    },
    'pdf-cor-dpp': {
        type:'pdf',
        title:'CERTIFICATE OF READINESS — DPP VERSION',
        tag:'D236/24 · DPP Version · Procedural Fairness Only · 30 Minutes · No Witnesses',
        meta:'PDF · DPP\'s Certificate of Readiness · Sent for countersignature 15 October 2025',
        desc:'The DPP\'s version of the Certificate of Readiness for D236/24, sent to Kosta Kondratenko for countersignature on 15 October 2025. This version narrowed the appeal scope to procedural fairness only, estimated 30 minutes, sought no new evidence, called no witnesses, and did not preserve cross-examination rights — describing a fundamentally different proceeding from Kosta\'s version. Signing it would have converted a substantive appeal into a brief procedural review.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/contravene_move_on/certificate_of_readiness_dpp_version.pdf',
        filename:'certificate_of_readiness_dpp_version.pdf'
    },
    'pdf-cor-kosta': {
        type:'pdf',
        title:'CERTIFICATE OF READINESS — APPELLANT\'S VERSION',
        tag:'D236/24 · Kosta\'s Version · Full Substantive Appeal · BWC + CCTV + Cross-examination',
        meta:'PDF · Kosta\'s Certificate of Readiness · Submitted 14 October 2025',
        desc:'Kosta Kondratenko\'s version of the Certificate of Readiness submitted on 14 October 2025 — the same evening he was first notified one was outstanding. Full substantive appeal: conviction challenged, BWC footage sought, Coles CCTV sought, Coles employee subpoenaed for cross-examination. Estimated half day. This version was subsequently returned with DPP handwritten alterations crossing out the substantive sections.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/contravene_move_on/certificate_of_readiness.pdf',
        filename:'certificate_of_readiness.pdf'
    },
    'pdf-cor-filed': {
        type:'pdf',
        title:'CERTIFICATE OF READINESS — COURT FILED',
        tag:'D236/24 · District Court Queensland Southport · Court-filed version',
        meta:'PDF · Certificate of Readiness · D236/24 · District Court of Queensland Southport',
        desc:'The Certificate of Readiness as filed with the District Court of Queensland, Southport for matter D236/24 — Kondratenko v Commissioner of Police. After a three-week procedural loop involving rejected digital signatures, DPP alterations, and a direct approach to the District Court Registrar, a Judge intervened and bypassed the hard-copy requirement, permitting electronic copies. The matter was listed for mention on 30 October 2025, Courtroom 17, Webex permitted.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/contravene_move_on/Certificate+of+readiness.pdf',
        filename:'Certificate of readiness.pdf'
    },
    'video-marc-barrow-dodgy': {
        type:'video',
        title:'CONFRONTATION — MARC BARROW & SECOND-IN-COMMAND',
        tag:'Police Gaslighting · Bond Non-Compliance · BeHome · Sandy Tulisi',
        meta:'Video · Recorded at BeHome property · Marc Barrow and second-in-command',
        desc:'Confrontation with Marc Barrow and his second-in-command at the BeHome property. When informed that tenants\' bonds were not being lodged within the legal 10-day requirement, the second-in-command responded: "You don\'t know what you\'re talking about." The RTA subsequently confirmed bond 714284215 had been outstanding for 68 days — more than six times the legal limit. This video documents the dismissal of documented evidence by officers attending the property not to investigate the landlord, but to protect her operation.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/marc_barrow_dodgy.mp4',
        filename:'marc_barrow_dodgy.mp4'
    },
    'video-sandy-service': {
        type:'video',
        title:'SUBPOENA SERVICE ATTEMPT — BEHOME PROPERTY',
        tag:'Sandy Tulisi · Chris Park · Form 10 Service · 15 January 2024',
        meta:'Video · Recorded for court purposes · Adam Watson serving documents · BeHome property',
        desc:'Adam Watson attending the BeHome property to serve the Form 10 subpoena on Sandy Tulisi and Chris Park. An unidentified shirtless male with earrings — not Sandy Tulisi, not Chris Park — began filming Adam Watson on his phone despite CCTV cameras already covering the premises. When asked directly on camera to provide his name, the man refused. He remains unidentified. His deliberate refusal is consistent with the pattern of obfuscation surrounding this operation. Sandy Tulisi eventually answered the door, stated that Chris Park was sick, and accepted service of the documents. This recording was made to provide a court record of proper service in the event it was later disputed.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/VID_20240115_165018.mp4',
        filename:'VID_20240115_165018.mp4'
    },
    'pdf-registrar-clarification': {
        type:'pdf',
        title:'REGISTRAR CLARIFICATION REQUEST — POST-TRIAL',
        tag:'Southport Court Registry · Form 10 vs Form 21 · Deflection · Seek Legal Aid',
        meta:'PDF · Email correspondence · Transcript attached · Post-trial follow-up',
        desc:'After winning the Contravene Banning Notice case and the Judge explicitly stating on the record that the Registrar should never have stamped Form 10, this email was sent to the Southport Court Registry with the transcript attached. The question was simple: what is the correct form for a self-represented party to issue a subpoena? The Registry\'s response did not identify the correct form, did not acknowledge the Judge\'s ruling, and did not address the procedural failure that allowed Sandy Tulisi to walk free. The Registry directed the sender to seek Legal Aid. The same question, posed to Claude AI, was answered correctly and immediately: Criminal Practice Rules 1999, Rule 29 — Form 21.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/clarification_request_subpeonas.pdf',
        filename:'clarification_request_subpeonas.pdf'
    },
    'pdf-police-correspondence': {
        type:'pdf',
        title:'POLICE CORRESPONDENCE — PROSECUTION HAD THE BOND CONFIRMATION',
        tag:'Sandy Tulisi · RTA Bond · Split Identity · Prosecution Conduct',
        meta:'PDF · Police Correspondence · Page 9: Queensland Person History · Page 27: Rooming Accommodation confirmation',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/police_corrrespondence.pdf',
        filename:'police_corrrespondence.pdf',
        desc:'Two key pages. Page 9 — the Queensland Person History — records the Contravene Banning Notice charge as issued on 23/10/23. The Notice to Leave states the resident must vacate by 5pm on 24/10/23. The charge was issued the day before the notice expired, meaning no contravention was legally possible at the time of the charge. Page 27 confirms the prosecution received a copy of the RTA bond confirmation — proof the property was a registered rooming accommodation, not a hostel. The prosecution knew Sandy Tulisi was operating under a split identity (BeHome / SOLAC HOUSE). They had the paperwork. They chose to call it a hostel in court anyway. The Judge accepted that framing. This is not oversight — it is deliberate misrepresentation in proceedings against the tenant, while the operator faced no consequences.'
    },
    'pdf-contravene-banning-notice': {
        type:'pdf',
        title:'CONTRAVENE BANNING NOTICE — FULL COURT TRANSCRIPT',
        tag:'Marc Barrow · Southport Magistrates Court · Charges Dropped',
        meta:'PDF · Full Proceedings Transcript · Contravene Banning Notice No. 385003',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/contravene_banning_notice.pdf',
        filename:'contravene_banning_notice.pdf',
        desc:'Full transcript of the Contravene Banning Notice proceedings. At page 26, I cross-examined Marc Barrow directly: "Do you think you can mislead the Court because you\'re a police officer?" The Judge — prompted by Adam Watson — asked whether Barrow could answer the question as put. He could not give a straight answer. Throughout proceedings, the Prosecution referred to the property as a "hostel" — not a rooming accommodation as registered. The Judge used the same language. The Judge also did not have the subpoena file before her and stated she had no proof Sandy Tulisi had been served — despite the service being filmed in full and provided to the Court. The Registry stamped the wrong form. The Judge made findings without the video. The consequence of both failures fell on me. The charge was dropped. Sandy Tulisi faced no accountability.'
    },
    'pdf-qp-charge-sheet': {
        type:'pdf',
        title:'QP CHARGE SHEET — CONTRAVENE BANNING NOTICE · MARC BARROW',
        tag:'Marc Barrow · SOLAC HOUSE · BeHome · Deliberate Obfuscation',
        meta:'PDF · Queensland Police Charge Sheet · Contravene Banning Notice No. 385003',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/qp_contravene_move_on_direction.pdf',
        filename:'qp_contravene_move_on_direction.pdf',
        desc:'The Queensland Police charge sheet for Contravene Banning Notice No. 385003, issued by Marc Barrow. In his statement, Barrow refers to the property as "SOLAC HOUSE" — the obscured RTA legal entity — rather than "BeHome", the trading name displayed on the building itself. This is not a clerical error. By using the RTA registration name rather than the name visible to anyone approaching the premises, Barrow creates plausible deniability: he can claim he documented what he was told without needing to acknowledge the BeHome branding right in front of him. The same split-identity tactic used by Sandy Tulisi to create legal ambiguity has been reproduced in an official police document.'
    },
    'pdf-ccc-marc-barrow': {
        type:'pdf',
        title:'CRIME AND CORRUPTION COMMISSION — RESPONSE TO MARC BARROW REPORT',
        tag:'CCC · Marc Barrow · Referred Back to QPS · Institutional Failure',
        meta:'PDF · CCC Email Response · "Most serious and systemic cases only"',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/crime_commission_marc_barrow.pdf',
        filename:'crime_commission_marc_barrow.pdf',
        desc:'The Crime and Corruption Commission\'s response to the report filed about Marc Barrow\'s conduct. The CCC states they deal only with the most serious and systemic cases of corruption, and refers the matter back to the Queensland Police Service. This response was given despite the CCC having access to: a charge issued before the notice deadline expired; a property deliberately misclassified as a hostel in official documents; property removed without a warrant of possession; documented retaliation against a third party; and a sworn officer communicating that he would ignore the murder of a named person. The oversight body responsible for holding police accountable reviewed this material and sent it back to the institution it concerned. That is not oversight. That is institutional protection.'
    },
    'pdf-public-nuisance-charge': {
        type:'pdf',
        title:'PUBLIC NUISANCE — QP CHARGE SHEET',
        tag:'Marc Barrow · Queensland Police · BeHome Property Eviction',
        meta:'PDF · QP Charge Sheet · Escalated through post · Dropped by Judge',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/public_nuisance_charge.pdf',
        filename:'public_nuisance_charge.pdf',
        desc:'The Public Nuisance charge sheet issued during the eviction from the BeHome property. The document refers to the property as a "hostel" — it was a licensed rooming house. The charge sheet stated I would be arrested for trespass; this was invalid as the Notice to Leave was for the following day and had been shown to Officer Marc Barrow directly — he had no lawful basis to arrest for trespass. Barrow also removed items from the property without a warrant of possession, which is unlawful. During the van incident, abusive comments were made — but only after being pushed against the police van without provocation, as BWC footage from the incident (currently being sought) will confirm. I had also notified Barrow of property breaches — his duty as a police officer was to uphold the law, not facilitate an unlawful eviction. The initial public nuisance ticket was escalated to a formal Public Nuisance charge through the post. The charge was subsequently dropped by the Judge.'
    },
    'pdf-esc-outcome-letter': {
        type:'pdf',
        title:'ESC OUTCOME — EMAIL THREAD · BWC FOOTAGE REQUEST REDIRECTED',
        tag:'QPS Ethical Standards Command · ESC · BWC Footage · Right to Information Unit',
        meta:'PDF · Email thread · 3 messages · 18 June – 4 July 2024',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/OUTCOME-LETTER.pdf',
        filename:'OUTCOME-LETTER.pdf',
        desc:'Email thread between Kosta Kondratenko and the QPS Ethical Standards Command. Three messages spanning 18 June to 4 July 2024. The ESC sends the formal outcome letter on 18 June. On 3 July, Kosta responds noting the Public Nuisance charge has been dropped by the Magistrate and requests the BWC footage. On 4 July, the ESC redirects the BWC footage request to the QPS Right to Information Unit — a separate department and a separate process. The footage has not been released.'
    },
    'pdf-esc-complaint-letter': {
        type:'pdf',
        title:'COM-24-00427 — FORMAL ESC OUTCOME LETTER — INSPECTOR SANDERSON',
        tag:'QPS Ethical Standards Command · COM-24-00427 · Marc Barrow · BWC Footage · Warrant of Possession',
        meta:'PDF · Formal outcome letter · 18 June 2024 · Inspector C A Sanderson',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/COM-24-00427+CP+KONDRATENKO.pdf',
        filename:'COM-24-00427_CP_KONDRATENKO.pdf',
        desc:'Formal outcome letter from the QPS Ethical Standards Command, reference COM-24-00427 (CS), signed by Inspector C A Sanderson on 18 June 2024. The ESC reviewed the Body Worn Camera footage and concluded that force was not excessive and that officers\' actions were lawful and reasonable — no misconduct found. The letter notes the Contravene Banning Notice charge was dismissed by the Magistrate (who found police had no authority to issue it). The letter explicitly references the allegation that the officer entered the BeHome property without a Warrant of Possession — the ESC found this to be lawful. This publication disputes that finding: Barrow viewed the Notice to Leave, not a Warrant of Possession. Those are not the same instrument. Only a Warrant of Possession authorises the physical removal of a tenant under Queensland law.'
    },
    'image-bowl-left': {
        type:'image',
        title:'KOSTA BOWL LEFT — PHOTO SENT BY LANDLORD',
        tag:'Appel Street Pty Ltd · Invoice #1202 · Oct 2023',
        meta:'Image · Filename: "Kosta Bowl left" · Emailed as basis for fine',
        src:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/Kosta+Bowl+left.jpg',
        filename:'Kosta Bowl left.jpg',
        desc:'The photo emailed by the landlord to justify Invoice #1202. The filename — "Kosta Bowl left" — is the entire description of the alleged offence: a bowl was left somewhere. Not broken. Not dirty. Left. This photo, with this filename, was used to issue a formal tax invoice through Appel Street Pty Ltd. The fine did not appear in the RTA bond deduction statement, suggesting even the landlord knew it was indefensible.'
    },
    'image-bowl-yellow': {
        type:'image',
        title:'KOSTA YELLOW BOWL — SECOND BOWL PHOTO',
        tag:'Appel Street Pty Ltd · Invoice #1241 · Oct 2023',
        meta:'Image · Yellow bowl · Basis for second fine',
        src:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/Kosta+Yellow+bowl.jpg',
        filename:'Kosta Yellow bowl.jpg',
        desc:'Second bowl photo used to justify Invoice #1241. A yellow bowl, left somewhere. Two separate tax invoices were issued by Appel Street Pty Ltd for bowls being left. Neither fine appeared in the formal RTA bond deduction statement.'
    },
    'pdf-invoice-1202': {
        type:'pdf',
        title:'INVOICE #1202 — APPEL STREET PTY LTD',
        tag:'Bowl left · Oct 2023 · Not in RTA bond deduction statement',
        meta:'PDF · Tax Invoice #1202 · Appel Street Pty Ltd',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/Invoice+%23+1202.pdf',
        filename:'Invoice # 1202.pdf',
        desc:'Tax invoice #1202 issued by Appel Street Pty Ltd for leaving a bowl. The photo sent with this invoice was named "Kosta Bowl left" by the sender — confirming the fine was purely for the bowl being left somewhere, not for any hygiene breach or damage. This invoice was not included in the formal bond deduction statement subsequently submitted to the RTA. Its omission from that statement indicates the landlord acknowledged it had no legal basis.'
    },
    'pdf-invoice-1241': {
        type:'pdf',
        title:'INVOICE #1241 — APPEL STREET PTY LTD',
        tag:'Yellow bowl left · Oct 2023 · Not in RTA bond deduction statement',
        meta:'PDF · Tax Invoice #1241 · Appel Street Pty Ltd',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/Invoice+%23+1241.pdf',
        filename:'Invoice # 1241.pdf',
        desc:'Tax invoice #1241 issued by Appel Street Pty Ltd — a second fine for a second bowl being left. Two separate invoices for two bowls placed somewhere. Neither appeared in the RTA bond deduction statement. A landlord issuing tax invoices for items left in a kitchen, through a separate company entity, then omitting those invoices from the official bond claim, is a landlord who knows those charges cannot withstand legal scrutiny.'
    },
    'pdf-rooming-agreement': {
        type:'pdf',
        title:'ROOMING ACCOMMODATION AGREEMENT — FORM R18',
        tag:'Sandy Tulisi · BeHome · Surfers Paradise · Signed Aug 2023',
        meta:'PDF · Form R18 · Signed · Start date 18/8/23',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/rooming_agreement.pdf',
        filename:'rooming_agreement.pdf',
        desc:'Signed rooming accommodation agreement (Form R18) for the BeHome property in Surfers Paradise. Start date: 18 August 2023. Rent: $290 per week. The agreement includes a clause stating the tenancy transitions to periodic after two months — meaning from 18 October 2023, the tenancy became periodic under the Residential Tenancies and Rooming Accommodation Act 2008 (Qld). Sandy Tulisi\'s eviction campaign — six false rent notices, an invalid Notice to Leave, and a Police Banning Notice — was conducted in September and October 2023, precisely the window in which the tenancy was transitioning to periodic status. Periodic tenants carry additional protections she did not account for. All charges were dropped.'
    },
    'pdf-ntl': {
        type:'pdf',
        title:'NOTICE TO LEAVE — RTA',
        tag:'Queensland RTA · Oct 2023 · Serious Breach — No Evidence of Breach',
        meta:'PDF Document · Official RTA Form · Issued on false premises',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/notice_to_leave.pdf',
        filename:'notice_to_leave.pdf',
        desc:'The Notice to Leave issued under the RTA, citing a Serious Breach. The document states the resident must vacate by 5pm on 24/10/23. However, the Contravene Banning Notice charge — confirmed in the Queensland Person History at page 9 of the police correspondence — was issued on 23/10/23, the day before the vacate deadline. You cannot contravene a notice that has not yet expired. There is no email documenting what the "Serious Breach" was. There are no complaints from any housemates. The Public Nuisance incident occurred after the Notice to Leave was issued and could not have been its basis. The Notice to Leave was built on the six false rent notices and was used to apply Police Banning Notice No. 385003 in a civil tenancy dispute. All charges were subsequently dropped in full.'
    },
    'pdf-aquatic-acknowledgement': {
        type:'pdf',
        title:'PRIVACY COMPLAINT — ACKNOWLEDGEMENT LETTER',
        tag:'Gold Coast Council · Chief Risk & Audit Office · Dec 2024',
        meta:'PDF · Official Council Correspondence · Complaint confirmed received',
        desc:'The City of Gold Coast formally acknowledges receipt of the privacy complaint regarding the Southport Aquatic Centre surveillance board leak. The letter confirms the matter is being investigated by the Chief Risk and Audit Office under the 45-business-day window established by the Information Privacy Act 2009.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/aquatic/PRIVACY+COMPLAINT+-+Kosta+Kondratenko+-+ACKNOWLEDGEMENT+LETTER.pdf',
        filename:'PRIVACY_COMPLAINT_Kosta_Kondratenko_ACKNOWLEDGEMENT_LETTER.pdf'
    },
    'pdf-aquatic-discontinuance': {
        type:'pdf',
        title:'PRIVACY COMPLAINT — DECISION LETTER — INVESTIGATION DISCONTINUED',
        tag:'Gold Coast Council · Investigation Dropped · No Further Information',
        meta:'PDF · Official Council Correspondence · Investigation discontinued',
        desc:'The City of Gold Coast discontinues its investigation into the Aquatic Centre privacy breach, citing failure to receive further information from the complainant. The evidence required to investigate — the CCTV photograph, the annotated surveillance board, and the identity of the staff member responsible — was entirely within the Council\'s own systems and did not require any information from the complainant to obtain.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/aquatic/PRIVACY+COMPLAINT+-+Kondratenko+-+DECISION+LETTER+TO+COMPLAINANT.pdf',
        filename:'PRIVACY_COMPLAINT_Kondratenko_DECISION_LETTER_TO_COMPLAINANT.pdf'
    },
    'pdf-aquatic-employee-name': {
        type:'pdf',
        title:'GOLD COAST COUNCIL — STAFF MEMBER NAME NOT PROVIDED',
        tag:'Gold Coast Council · Staff Identity · Email Not Answered',
        meta:'PDF · Council email · Name of staff member stated as not received',
        desc:'Email from the Gold Coast Council stating that the name of the staff member responsible for photographing and distributing the surveillance board had not been provided to this publication. An email was sent to the Council requesting the staff member\'s name. That email was not answered. The Council\'s failure to respond to the identification inquiry, combined with its subsequent discontinuance of the investigation, reflects a deliberate decision not to pursue accountability for the breach.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/aquatic/employee_name.pdf',
        filename:'employee_name.pdf'
    },
    'image-aquatic': {
        type:'image',
        title:'AQUATIC CENTRE — LEAKED SURVEILLANCE BOARD',
        tag:'Privacy Breach · Southport Aquatic Centre · Leaked Staff Board · Dec 2024',
        meta:'Image · Leaked from aquatic centre staff area · Board of surveillance photos with handwritten annotations',
        desc:'This is the leaked surveillance board from inside the Gold Coast Aquatic Centre — photographs of patrons printed and pinned to a staff noticeboard with handwritten annotations including "MONITOR THIS ONE. Comes in for showers. Been asked not to use gym.", "DO NOT LET IN", "Please be aware. Trying to scam in D gym." and "ADAM COWLEY BARRED FROM CENTRE — Please deny entry and call 000 if he gets abusive and/or aggressive." This board was photographed by a staff member and sent to a member of the public. A formal privacy complaint was filed. Premier Crisafulli issued a Show Cause notice. Staff were terminated.',
        src:'/img/aquatic-centre-surveillance-board.jpg',
        filename:'aquatic-centre-surveillance-board.jpg'
    },
    'pdf-appeal-granted': {
        type:'pdf',
        title:'CROWN APPEAL GRANTED — EX PARTE SENTENCE SET ASIDE',
        tag:'Contravene Move On Direction · DPP Grants Appeal · Miscarriage of Justice',
        meta:'PDF · District Court Appeal · Ex parte sentence · Multiple appearances by Adam Watson',
        desc:'The DPP granted the appeal against the ex parte sentence handed down in the Contravene Move On Direction matter. The DPP confirmed that the sentence imposed in Kosta\'s absence was a miscarriage of justice. A sincere thank you to Adam Watson who travelled down from NSW to appear in person and by AVL link at multiple hearings — including appearances in March, April, and June. I apologise for not appearing on the July date.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/contravene_move_on/20250901155203045.pdf',
        filename:'20250901155203045.pdf'
    },
    'pdf-rowan-jackson-order': {
        type:'pdf',
        title:'ORDER — HIS HONOUR JUDGE ROWAN JACKSON KC — SENTENCE SET ASIDE',
        tag:'Contravene Move On Direction · District Court · Judge Rowan Jackson KC · Remitted',
        meta:'PDF · District Court Order · Sentence set aside · Remitted to Magistrate\'s Court · Costs to public purse noted',
        desc:'Order from His Honour Judge Rowan Jackson KC setting aside the sentence and remitting the matter back to the Magistrate\'s Court. His Honour made direct comment to the prosecution that, given the cost to the state of pursuing this charge and the low penalty if convicted, it may be in the DPP\'s best interest to reconsider whether it serves the public purse to continue. The matter was subsequently re-listed in the Magistrate\'s Court. When it came before the Magistrate, neither the prosecution nor the presiding Magistrate were aware of His Honour\'s comments — the matter was treated as a new case. The Magistrate stated that a fine would be imposed, at which point Adam Watson interjected to inform the court of the District Court\'s remarks recommending dismissal. The Magistrate then dismissed the case. This procedural failure — where a matter returns from a higher court without its history being known to the parties below — illustrates how justice can miscarry for those who do not have someone in their corner who understands the system.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/contravene_move_on/KONDRATENKO_Order.pdf',
        filename:'KONDRATENKO_Order.pdf'
    },
    'video-viral': {
        type:'video',
        title:'THE VIRAL VIDEO — RJ CONFRONTATION',
        tag:'Gold Coast · The Video That Started It All',
        meta:'Video · Original recording · RJ direct confrontation',
        desc:'The direct confrontation video of RJ that circulated widely across the Gold Coast. Submitted to Hancock Prospecting — I was immediately blocked, confirming Adam Watson\'s connection to that network. RJ\'s associates began a sustained harassment campaign against Adam Watson in direct response to this video\'s circulation. The Oracle East assault followed.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/r+j/rj_confront.mp4',
        filename:'rj_confront.mp4'
    },
    'img-outreach-1': { type:'image', title:'SMS — ACCESS POINT INTAKE MESSAGE', tag:'Gold Coast Homeless Outreach Team · Rihanna · March 2026', meta:'Screenshot · Samsung Messages · 1 May 2026', desc:'"Hello Kosta, this is the Gold Coast homelessness outreach team. Just checking in to see if you were able to get to an access point to complete intake so we can support you with your housing goals?" — An access point was referenced with no prior communication about what it is or where it is.', url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/messages/Screenshot_20260501_123442_Messages.jpg', filename:'Screenshot_20260501_123442_Messages.jpg' },
    'img-outreach-2': { type:'image', title:'SMS — "WHICH FORM ARE YOU CHASING"', tag:'Gold Coast Homeless Outreach Team · QLD ID Offer · Form Unknown', meta:'Screenshot · Samsung Messages · 1 May 2026', desc:'Rihanna from the outreach team offers to help change NSW ID to QLD ID for social housing eligibility — and asks which housing form is required. The team responsible for housing intake does not know which form is needed.', url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/messages/Screenshot_20260501_123514_Messages.jpg', filename:'Screenshot_20260501_123514_Messages.jpg' },
    'img-outreach-3': { type:'image', title:'SMS — NSW ID / RETURN TO NSW OFFER', tag:'Gold Coast Homeless Outreach Team · NSW ID · Pink Shirts · Rihanna', meta:'Screenshot · Samsung Messages · 1 May 2026', desc:'"our team can support with changing your NSW to Queensland ID so you can apply for Queensland social housing or alternatively help you return to NSW." The message attributes a NSW return intention and frames multi-year QLD residency as a bureaucratic problem.', url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/messages/Screenshot_20260501_123523_Messages.jpg', filename:'Screenshot_20260501_123523_Messages.jpg' },
    'img-outreach-4': { type:'image', title:'SMS — LINK 2 HOME ALLEGATION', tag:'False Attribution · Link 2 Home · Statement Never Made', meta:'Screenshot · Samsung Messages · 1 May 2026', desc:'"Rihanna from the housing team (pink tshirts) said you were contemplating calling link to home as they would be able to access funding for 28 days accommodation however you would need to be in NSW to access this." — No such statement was ever made.', url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/messages/Screenshot_20260501_123530_Messages.jpg', filename:'Screenshot_20260501_123530_Messages.jpg' },
    'img-outreach-5': { type:'image', title:'SMS — QLD ID IF STAYING IN QUEENSLAND', tag:'Gold Coast Homeless Outreach Team · QLD ID Offer', meta:'Screenshot · Samsung Messages · 1 May 2026', desc:'"Thank you for clarifying that you don\'t want to return to NSW in that case we can support you to get QLD ID if you are wanting to stay in Queensland." — The system\'s housing solution is a driver\'s licence transfer for someone who has been in QLD for years.', url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/messages/Screenshot_20260501_123537_Messages.jpg', filename:'Screenshot_20260501_123537_Messages.jpg' },
    'img-outreach-6': { type:'image', title:'SMS — KOSTA\'S REPLY', tag:'Outgoing Reply · Tuesday 17 March · 10:21 am', meta:'Screenshot · Samsung Messages · Outgoing · 17 March 2026', desc:'"I never made any comments to anybody about home link that person is lying - you should be reported to the local government minister for what youve done and said." — Sent 17 March 2026 at 10:21 am.', url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/gc_council/messages/Screenshot_20260501_123544_Messages.jpg', filename:'Screenshot_20260501_123544_Messages.jpg' },
    'pdf-rob-mcdonald': {
        type:'pdf',
        title:'EMAIL — ROB McDONALD · GOLD COAST COUNCIL · PSLO OVERSIGHT',
        tag:'Rob McDonald · Gold Coast Council · PSLO Team · Abandoned Property Stickers · Rangers',
        meta:'PDF · 72MB · Email correspondence · Rob McDonald overseeing rangers · Gold Coast Council',
        desc:'Email correspondence with Rob McDonald, who was overseeing the PSLO rangers responsible for placing "Abandoned Property" stickers on Kosta Kondratenko\'s tent between December 2023 and January 2024. The tent was located out of sight, away from any public road, and was not abandoned — it was in active use. Rob McDonald was notified of these issues in writing. This file is 72MB due to the volume of correspondence and attachments.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/pslo/rob_mcdonald_email.pdf',
        filename:'rob_mcdonald_email.pdf'
    },
    'pdf-lauren-forbes-email': {
        type:'pdf',
        title:'EMAIL THREAD — LAUREN FORBES · SKY NEWS',
        tag:'Lauren Forbes · Sky News · Care Connect · Homelessness Story · "I hope you\'re dry!"',
        meta:'PDF · Email correspondence · Kosta Kondratenko & Lauren Forbes · Sky News journalist',
        desc:'Email thread between Kosta Kondratenko and Lauren Forbes, Sky News journalist. Forbes had arranged to cover the homelessness services gap on the Gold Coast — specifically the 7 Care Connect crisis referral posters found in the Nerang Street bathrooms, and the fact that the Care Connect website has been down for over 1.5 years as verified on the Wayback Machine. Instead of running the story, Forbes pulled Kosta\'s criminal history and forwarded non-public documents to Hancock Prospecting. During the period of supposed reporting, she would call to say "I hope you\'re dry!" The story never ran.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/council_forbes/lauren_forbes_email_thread.pdf',
        filename:'lauren_forbes_email_thread.pdf'
    },
    'pdf-tram-court-docs': {
        type:'pdf',
        title:'TRAM FINE PROSECUTION — COURT DOCUMENTS',
        tag:'Case 465/26793 · Southport Magistrates Court · 3 Charges · $19,096 Max Penalty',
        meta:'PDF · Court Documents · TMR Prosecution Services · James K. Tribe',
        desc:'Prosecution brief for three charges arising from tram incidents on the Gold Coast G-Link in June–July 2024. Charge 1: Fare evasion s218C(1) TOPTR — 27 June 2024, max $6,192. Charge 2: Fare evasion s218C(1) TOPTR — 13 July 2024, max $6,452. Charge 3: Failure to state name s127(5) TOPTA — 13 July 2024, max $6,452, arising from the statement "I request my right to privacy." Combined maximum penalty: $19,096 against a $2.84 disputed fare — a ratio of 6,723:1. The prosecution brief recorded homelessness as the reason Kosta was without a ticket and concluded it did not constitute reasonable excuse. Complainant: James Kelvin Goldsworthy Tribe, Principal Legal Officer, TMR Prosecution Services. These documents were transmitted by Lauren Forbes to representatives at Hancock Prospecting.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tram/tram_fine_court_docs.pdf',
        filename:'tram_fine_court_docs.pdf'
    },
    'pdf-tram-email': {
        type:'pdf',
        title:'TRAM FINE DOCS — EMAIL TRANSMISSION',
        tag:'Lauren Forbes · Sky News · Hancock Prospecting · Non-Public Documents',
        meta:'PDF · Email Correspondence · Documents forwarded to Hancock Prospecting',
        desc:'Email correspondence documenting the transmission of tram fine prosecution documents by Lauren Forbes to representatives at Hancock Prospecting. The documents were non-public at the time of transmission. The email establishes the chain of disclosure: prosecution documents obtained by a Sky News journalist and forwarded to a private corporation with a documented interest in discrediting Kosta Kondratenko.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tram/tram_fine_court_doc_email.pdf',
        filename:'tram_fine_court_doc_email.pdf'
    },
    'video-mental-health-check': {
        type:'video',
        title:'MENTAL HEALTH CHECK — POLICE TENT VISIT',
        tag:'Welfare Visit · Post-Viral Video · Hancock Prospecting Questions Embedded',
        meta:'Video · Recorded at tent · Following viral video publication',
        desc:'Police attended Kosta Kondratenko\'s tent location framed as a mental health welfare check following the viral video. During the visit, enquiries were made about an alleged email depicting Steven Miles in a coffin — denied. Hancock Prospecting\'s questions were embedded in the welfare check. This video is the record of that visit. A police welfare check is not a vehicle for a private corporation to conduct character research on a journalist.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/mental_health_check.mp4',
        filename:'mental_health_check.mp4'
    },
    'pdf-mental-health-transcript': {
        type:'pdf',
        title:'MENTAL HEALTH CHECK — FULL TRANSCRIPT',
        tag:'Verbatim Transcript · Police Welfare Visit · Post-Viral Video',
        meta:'PDF · Verbatim transcript · Mental health welfare check · HHOT visit',
        desc:'Full verbatim transcript of the police mental health welfare check conducted at Kosta Kondratenko\'s tent following the viral video. Documents the questions put to Kosta — including allegations regarding emails and videos sent to Premier Steven Miles and Mayor Tom Tate — as well as the Hancock Prospecting enquiries embedded within the welfare visit. This transcript is the written record of what was said and asked during that interaction.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/mental-health-check-transcript.pdf',
        filename:'mental-health-check-transcript.pdf'
    },
    'pdf-qfes-email': {
        type:'pdf',
        title:'QFES CORRESPONDENCE — FIRE SAFETY REFERRAL',
        tag:'Queensland Fire & Emergency Services · BeHome · Fire Safety Non-Compliance',
        meta:'PDF · Email correspondence · Redacted · Sandy Tulisi / BeHome Surfers Paradise',
        desc:'Redacted email correspondence with the Queensland Fire and Emergency Services reporting fire safety concerns at Sandy Tulisi\'s BeHome rooming accommodation. The QFES has the power to direct that power be cut to a building found non-compliant with fire safety standards. The property operates at up to 100-tenant density with documented unsafe conditions. Sandy issued 1-day eviction notices for tenants caught vaping inside the property — yet maintained no compliant fire safety infrastructure. Referral lodged with QFES. No response received as of publication.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/sandy/qld_fire_email_redacted.pdf',
        filename:'qld_fire_email_redacted.pdf'
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
        desc:'Letter from Optus issued following the TIO referral initiated by Adam Watson\'s complaint to the Prime Minister\'s office. Confirms restoration of service and acknowledges the security failure at the retail store level. Despite this acknowledgment, Adam continues to receive a $2,500 billing claim in connection with the unauthorised deactivation — a charge Sunlight.Quest considers unconscionable.',
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
    },
    'video-bwc-coles': {
        type:'video',
        title:'BWC — OFFICER X60500377 — PACIFIC FAIR COLES',
        tag:'Contravene Move On Direction · Pacific Fair · BWC Disclosure',
        meta:'Video · Axon Body 3 · 27 Feb 2024 09:50 · Officer X60500377',
        desc:'Body Worn Camera footage (Axon Body 3, 27 February 2024, 09:50) — Officer X60500377 — obtained by Kosta Kondratenko following the Contravene Move On Direction charge at Coles Pacific Fair. The footage reveals that the comments made by the arresting officer to Pacific Fair security have been selectively muted — the exchange most directly relevant to the basis for the charge is absent from the provided footage. The original disturbance arose from a Yakult bottle already removed from its packaging. The selective muting is the basis for arguing maliciousness in the arrest.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/Axon_Body_3_Video_2024-02-27_0950_X60500377.mp4',
        filename:'Axon_Body_3_Video_2024-02-27_0950_X60500377.mp4'
    },
    'video-bwc-coles-2': {
        type:'video',
        title:'BWC — OFFICER X60J05359 — PACIFIC FAIR COLES',
        tag:'Contravene Move On Direction · Pacific Fair · BWC Disclosure',
        meta:'Video · Axon Body 3 · 27 Feb 2024 09:50 · Officer X60J05359',
        desc:'Body Worn Camera footage (Axon Body 3, 27 February 2024, 09:50) — Officer X60J05359 — second body camera present at the Coles Pacific Fair Contravene Move On Direction incident. Compare with footage from Officer X60500377. The selective muting of the exchange between the arresting officer and Pacific Fair security is the basis for the maliciousness argument. The District Court Judge observed the matter was probably not worth pursuing at this cost to the taxpayer. The DPP pursued it regardless.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/Axon_Body_3_Video_2024-02-27_0950_X60J05359.mp4',
        filename:'Axon_Body_3_Video_2024-02-27_0950_X60J05359.mp4'
    },
    'pdf-consent-order': {
        type:'pdf',
        title:'CONSENT ORDER FOR DISMISSAL — TAD 6 OF 2026',
        tag:'Federal Court of Australia · Tasmania District Registry · 1 April 2026',
        meta:'PDF · Federal Court Order · Signed before Judicial Registrar Segal · Public document — no suppression order',
        desc:'Consent Order for Dismissal in the matter of The Owners – Strata Plan No 93922 v PSR Crown Investment Pty Ltd (TAD 6 of 2026). By consent of all parties including third parties Graham Gordon and Collection Corporation Australia Pty Ltd. Orders: (1) Proceedings dismissed; (2) Owners Corporation pays $395,000 to PSR Crown; (3) Graham Gordon pays $365,000 to PSR Crown; (4) Collection Corporation Australia pays $385,000 to PSR Crown; (5) Each of the three parties pays $49,667 legal costs directly to Adam Watson. All payments due 15 April 2026. No suppression order exists — this is a public Federal Court document.',
        isPlaceholder:true,
        placeholderLabel:'DOCUMENT PENDING UPLOAD',
        filename:'TAD_6_of_2026_consent_order_dismissal.pdf',
        pages: 3
    },
    'photo-adam-bleeding': {
        type:'photo',
        title:'ADAM WATSON — AFTER POLICE ASSAULT',
        tag:'Coogee · NSW Police · Six Officers · Antisemitic Slurs',
        meta:'Photo · Video still · Sent to Kosta Kondratenko following assault',
        desc:'Adam Watson filmed himself after being assaulted by six NSW Police officers who attended following his call about Raz (Samira Khalaj\'s husband) threatening him with a knife. Officers called Adam a "Jewish Faggot," denied his AVO existed, told him he was making trouble for "going against Muslims," bashed him, and refused to provide his diabetic medication when asked. This still was sent directly to Kosta.',
        isPlaceholder:true,
        placeholderLabel:'FOOTAGE PENDING UPLOAD',
        filename:'adam_watson_after_police_assault.jpg'
    },
    'pdf-lecc-complaint': {
        type:'pdf',
        title:'LECC COMPLAINT — SIX OFFICERS · COOGEE ASSAULT',
        tag:'Law Enforcement Conduct Commission · NSW · Active Complaint',
        meta:'PDF · LECC Complaint · Seeking officer names and badge numbers',
        desc:'Formal complaint lodged with the Law Enforcement Conduct Commission (LECC) regarding the conduct of six NSW Police officers who attended a call made by Adam Watson after Raz Khalaj threatened him with a knife. Officers made antisemitic slurs ("Jewish Faggot"), denied the existence of the AVO, assaulted Adam Watson, and refused to provide his diabetic medication on request. The complaint seeks the names and badge numbers of all six attending officers.',
        isPlaceholder:true,
        placeholderLabel:'DOCUMENT PENDING UPLOAD',
        filename:'lecc_complaint_six_officers.pdf',
        pages: 4
    },
    'video-samira-car': {
        type:'video',
        title:'SAMIRA KHALAJ — ENTERS ADAM\'S VEHICLE WITHOUT PERMISSION',
        tag:'Samira Khalaj · Coogee · Unauthorised Entry',
        meta:'Video · Recorded footage · Samira Khalaj and husband confront Adam at his car',
        desc:'Footage capturing the confrontation in which Samira Khalaj and her husband cornered Adam Watson at his vehicle. Samira\'s husband can be seen entering the vehicle without Adam\'s permission. This incident preceded Samira\'s sworn police statement alleging Adam punched her in the jaw — a statement her own doctor\'s findings do not support.',
        isPlaceholder:true,
        placeholderLabel:'FOOTAGE PENDING UPLOAD',
        filename:'samira_khalaj_car_entry.mp4'
    }
};

function openMV(type, title, tag, meta, filename, desc, key) {
    if(EVIDENCE[type]) { renderMV(EVIDENCE[type]); return; }
    if(key && EVIDENCE[key]) { renderMV(EVIDENCE[key]); return; }
    renderMV({type:type,title:title,tag:tag,meta:meta,filename:filename,desc:desc});
}

function renderMV(e) {
    currentFile = e;
    document.getElementById('mv-tag').textContent = e.tag || 'Evidence File';
    document.getElementById('mv-title').textContent = e.title || 'DOCUMENT';
    document.getElementById('mv-meta').textContent = e.meta || '';

    var dl = document.getElementById('mv-dl-btn');
    dl.textContent = '⬇ Download ' + (e.filename || 'file');
    if(e.url) { dl.onclick = function(){ window.open(e.url,'_blank'); }; }
    else { dl.onclick = downloadFile; }

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
        pagesHtml += '<div class="pdf-ph-page"><div class="pdf-ph-line" style="height:3px;background:rgba(193,68,14,0.3)"></div>' +
            Array(8).fill('<div class="pdf-ph-line"></div>').join('') + '</div>';
    }
    return '<div class="pdf-ph">' +
        '<div style="font-size:0.48rem;letter-spacing:0.22em;text-transform:uppercase;color:rgba(193,68,14,0.6);margin-bottom:1rem">PDF Document — Placeholder Preview</div>' +
        '<div class="pdf-ph-pages">' + pagesHtml + '</div>' +
        '<div style="font-family:\'Bebas Neue\',sans-serif;font-size:1.4rem;letter-spacing:0.06em;color:rgba(245,234,212,0.5);margin-bottom:0.75rem">' + (e.title||'DOCUMENT') + '</div>' +
        '<div style="font-size:0.62rem;line-height:1.7;color:rgba(245,234,212,0.35);max-width:480px;margin:0 auto">' + (e.desc||'') + '</div>' +
        (e.url ? '<div style="margin-top:1.5rem"><a href="' + e.url + '" target="_blank" style="display:inline-block;font-size:0.5rem;letter-spacing:0.18em;text-transform:uppercase;color:#c1440e;border:1px solid rgba(193,68,14,0.4);padding:0.45rem 1.1rem;text-decoration:none">▶ OPEN PDF IN NEW TAB</a></div>' : '') +
        '<div style="margin-top:1rem;font-size:0.5rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(245,234,212,0.2);border:1px solid rgba(245,234,212,0.07);display:inline-block;padding:0.35rem 0.75rem">' + (e.filename||'document.pdf') + '</div>' +
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
        '<div style="font-size:0.48rem;letter-spacing:0.22em;text-transform:uppercase;color:rgba(61,122,74,0.7);margin-bottom:0.5rem">Audio Evidence · Redacted</div>' +
        '<div style="font-family:\'Bebas Neue\',sans-serif;font-size:1.2rem;letter-spacing:0.05em;color:rgba(245,234,212,0.65);margin-bottom:0.25rem">' + (e.title||'AUDIO') + '</div>' +
        '<div style="font-size:0.58rem;color:rgba(245,234,212,0.3);margin-bottom:0.5rem">' + (e.desc||'') + '</div>' +
        '<div class="cap-waveform" id="cap-wave" onclick="scrubAudio(event)">' + bars + '</div>' +
        '<div class="cap-controls">' +
            '<button class="cap-play" id="cap-playbtn" onclick="toggleAudio()">▶</button>' +
            '<div style="flex:1">' +
                '<div style="font-size:0.5rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(245,234,212,0.3);margin-bottom:0.15rem">' + (e.filename||'audio.wav') + '</div>' +
                '<div style="font-size:0.5rem;color:rgba(245,234,212,0.2)">Duration: ' + (e.duration||'~2:30') + ' (redacted version) · Original with investigators</div>' +
            '</div>' +
            '<div class="cap-time" id="cap-time">0:00 / ' + (e.duration||'2:30') + '</div>' +
        '</div>' +
        '<div style="margin-top:0.75rem;font-size:0.48rem;letter-spacing:0.15em;text-transform:uppercase;background:rgba(193,68,14,0.08);border:1px solid rgba(193,68,14,0.2);color:#c1440e;padding:0.35rem 0.6rem;display:inline-block">⬛ Identifying details filtered — placeholder audio</div>' +
        '</div>';
}

function buildImageViewer(e) {
    var redactHtml = '';
    if(e.redact) {
        redactHtml = '<div class="face-redact" style="top:10%;left:25%;width:25%;height:30%">' +
            '<div style="font-size:0.46rem;letter-spacing:0.18em;text-transform:uppercase;color:#c1440e;text-align:center">⬛</div>' +
            '<div style="font-size:0.42rem;letter-spacing:0.12em;text-transform:uppercase;color:rgba(193,68,14,0.7);text-align:center;margin-top:0.2rem">' + (e.redactLabel||'REDACTED') + '</div>' +
            '</div>';
    }
    var src = e.src || e.url || 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&q=65';
    return '<div class="mv-img-frame">' +
        '<img src="' + src + '" alt="' + (e.title||'Evidence') + '" style="filter:contrast(1.05) saturate(0.8)"/>' +
        redactHtml +
        '<div style="position:absolute;bottom:0;left:0;right:0;padding:1rem;background:linear-gradient(transparent,rgba(4,4,4,0.9))">' +
            '<div style="font-size:0.48rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(245,234,212,0.4)">' + (e.meta||'') + '</div>' +
        '</div>' +
        '</div>' +
        (e.desc ? '<div style="max-width:760px;width:100%;padding:1rem 0 0;font-size:0.62rem;line-height:1.7;color:rgba(245,234,212,0.4)">' + e.desc + '</div>' : '');
}

function buildVideoViewer(e) {
    if(e.isPlaceholder) {
        return '<div style="width:100%;max-width:760px">' +
            '<div class="vid-ph">' +
                '<div class="scanlines"></div>' +
                '<div style="text-align:center;z-index:2;position:relative">' +
                    '<div class="vid-ph-play"><span style="color:rgba(245,234,212,0.4);font-size:1.2rem;margin-left:3px">▶</span></div>' +
                    '<div style="margin-top:0.75rem;font-size:0.48rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(245,234,212,0.25)">' + (e.placeholderLabel||'VIDEO PENDING UPLOAD') + '</div>' +
                '</div>' +
                '<div style="position:absolute;bottom:0.75rem;left:0;right:0;text-align:center">' +
                    '<div style="font-size:0.44rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(245,234,212,0.2)">' + (e.filename||'video.mp4') + '</div>' +
                '</div>' +
            '</div>' +
            '<div style="padding:0.75rem 0 0;font-size:0.62rem;line-height:1.7;color:rgba(245,234,212,0.38)">' + (e.desc||'') + '</div>' +
        '</div>';
    }
    var src = e.url || e.src || '';
    if(!src) {
        return '<div style="width:100%;max-width:760px;text-align:center;padding:3rem 1rem">' +
            '<div style="font-size:0.52rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(245,234,212,0.3)">No video URL available</div>' +
        '</div>';
    }
    return '<div style="width:100%;max-width:760px">' +
        '<div style="background:rgba(0,0,0,0.4);border:1px solid rgba(245,234,212,0.08);padding:2.5rem 1.5rem;text-align:center;margin-bottom:1rem">' +
            '<div style="font-size:0.48rem;letter-spacing:0.2em;text-transform:uppercase;color:rgba(245,234,212,0.3);margin-bottom:1.25rem">Video Evidence · S3 Hosted · Axon Body Camera</div>' +
            '<a href="' + src + '" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:0.6rem;background:#c1440e;color:#f5ead4;font-family:\'Bebas Neue\',sans-serif;font-size:1.05rem;letter-spacing:0.12em;padding:0.75rem 2rem;text-decoration:none;transition:opacity 0.2s" onmouseover="this.style.opacity=\'0.85\'" onmouseout="this.style.opacity=\'1\'">&#9654; WATCH IN NEW TAB</a>' +
            '<div style="margin-top:1rem;font-size:0.44rem;letter-spacing:0.14em;text-transform:uppercase;color:rgba(245,234,212,0.2);word-break:break-all;max-width:480px;margin-left:auto;margin-right:auto">' + (e.filename||src) + '</div>' +
        '</div>' +
        '<div style="padding:0.5rem 0 0;font-size:0.62rem;line-height:1.7;color:rgba(245,234,212,0.38)">' + (e.desc||'') + '</div>' +
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
    if(currentFile.url) { window.open(currentFile.url, '_blank'); return; }
    showToast('No download available for this file');
}

function downloadZip(name) {
    showToast('ZIP download started: ' + name);
}

function showToast(msg) {
    var t = document.createElement('div');
    t.style.cssText = 'position:fixed;bottom:1.5rem;left:50%;transform:translateX(-50%);background:rgba(12,8,4,0.95);border:1px solid rgba(201,138,16,0.3);color:#c98a10;font-family:DM Mono,monospace;font-size:0.55rem;letter-spacing:0.15em;text-transform:uppercase;padding:0.6rem 1.2rem;z-index:9999;pointer-events:none;transition:opacity 0.3s';
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

// ── VIDSTACK PLAYER EP1 INIT ──
(function() {
    var VTT_CONTENT_EP1 = [
        'WEBVTT',
        '',
        '00:00:00.000 --> 00:01:40.000',
        'Sandy Tulisi',
        '',
        '00:01:40.000 --> 00:03:20.000',
        'Privacy Breach',
        '',
        '00:03:20.000 --> 00:05:00.000',
        'Sky News',
        '',
        '00:05:00.000 --> 00:06:40.000',
        'Oracle East',
        '',
        '00:06:40.000 --> 00:08:20.000',
        'RJ — 7 Incidents',
        '',
        '00:08:20.000 --> 00:10:00.000',
        "Adam's Story"
    ].join('\n');

    function initPlayerEp1() {
        var el = document.getElementById('player-ep1');
        if (!el) return;
        if (typeof el.subscribe !== 'function') {
            setTimeout(initPlayerEp1, 200);
            return;
        }
        window.vidstackPlayer = el;
        var track = document.getElementById('ep1-chapters-track');
        if (track) {
            var blob = new Blob([VTT_CONTENT_EP1], {type: 'text/vtt'});
            track.src = URL.createObjectURL(blob);
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPlayerEp1);
    } else {
        initPlayerEp1();
    }
})();

// ── VIDEO PLAYER ──
function seekToChapter(index) {
    var p = window.vidstackPlayer;
    if(!p){document.getElementById('player-ep1').scrollIntoView({behavior:'smooth',block:'center'});return;}
    var tracks = p.textTracks;
    var ct = null;
    for(var i=0;i<tracks.length;i++){if(tracks[i].kind==='chapters'){ct=tracks[i];break;}}
    if(ct&&ct.cues&&ct.cues.length>index){p.currentTime=ct.cues[index].startTime;}
    else{var d=p.duration||0;if(d>0)p.currentTime=(d/6)*index;}
    p.play().catch(function(){});
    document.getElementById('player-ep1').scrollIntoView({behavior:'smooth',block:'center'});
}

// ── SMS ──
function handleSMS(e) {
    e.preventDefault();
    var v = document.getElementById('sms-input').value.trim().replace(/\s/g,'');
    var msg = document.getElementById('sms-msg');
    if(!v||v.length<10){msg.style.color='#c1440e';msg.textContent='✗ Please enter a valid Australian mobile number.';return;}
    msg.style.color='#3d7a4a';msg.textContent='✓ You\'re in. First intel drop incoming.';
    document.getElementById('sms-input').value='';
}

// ── TIP-OFF FORM ──
function openTipModal() {
    document.getElementById('sq-modal').classList.add('open');
    document.body.style.overflow = 'hidden';
}
function closeTipModal() {
    document.getElementById('sq-modal').classList.remove('open');
    document.body.style.overflow = '';
}
function sqModalBackdropClick(e) {
    if (e.target === document.getElementById('sq-modal')) closeTipModal();
}
function sqToggle(checkboxId, fieldsId) {
    document.getElementById(fieldsId).classList.toggle('open', document.getElementById(checkboxId).checked);
}
function sqToggleAnon() {
    document.getElementById('sq-contact-fields').classList.toggle('open', !document.getElementById('sq-anon-chk').checked);
}
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
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeTipModal();
});

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
            <div class="font-display text-xl tracking-widest text-paper/18 mb-1">SUNLIGHT<span class="text-dim">.QUEST</span></div>
            <div class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/12">© 2026 Sunlight.Quest — Investigative Journalism</div>
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