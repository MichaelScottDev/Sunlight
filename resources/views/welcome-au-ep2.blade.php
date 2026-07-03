<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sunlight.Quest — Episode 2: The Network</title>
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
        .mv-body{flex:1;display:flex;flex-direction:column;align-items:center;padding:1.5rem;overflow-y:auto;overflow-x:hidden}
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
        .mv-img-frame img{width:100%;height:auto;display:block;border:1px solid rgba(245,234,212,0.06)}
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
        <a href="/" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors border border-paper/15 hover:border-hot/50 px-3 py-1.5 transition-all">← Episode 1</a>
        <a href="/episode-3" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors border border-paper/15 hover:border-gold/50 px-3 py-1.5 transition-all">Episode 3 →</a>
        <button onclick="openTipModal()" class="hidden md:flex items-center gap-1.5 text-[0.55rem] tracking-[0.2em] uppercase border border-hot/50 hover:border-hot hover:bg-hot/10 px-3 py-1.5 text-hot transition-all">⊕ Submit a Tip</button>
        <div class="flex md:hidden items-center gap-1.5">
            <a href="/" title="Go to Episode 1" aria-label="Go to Episode 1" class="flex items-center gap-1 px-2.5 h-8 border font-display text-[0.6rem] tracking-widest" style="border-color:rgba(193,68,14,0.5);color:#c1440e">‹ EP1</a>
            <a href="/episode-3" title="Go to Episode 3" aria-label="Go to Episode 3" class="flex items-center gap-1 px-2.5 h-8 border font-display text-[0.6rem] tracking-widest" style="border-color:rgba(201,138,16,0.5);color:#c98a10">EP3 ›</a>
        </div>
        <span class="text-[0.52rem] tracking-[0.18em] uppercase border px-3 py-1.5" style="border-color:rgba(124,106,170,0.6);color:#7c6aaa">⬤ EP.02</span>
    </div>
</nav>

<!-- ══ AU STRIPE ══ -->
<div style="position:fixed;top:56px;left:0;right:0;z-index:49;height:2px;background:linear-gradient(90deg,#c1440e 0%,#c98a10 35%,#3d7a4a 65%,#c1440e 100%);opacity:0.55;pointer-events:none"></div>

<!-- ══ SIDE PANEL ══ -->
<div id="case-panel" class="fixed top-0 right-0 bottom-0 z-[300] w-full sm:w-96 bg-[#0d0d0d] border-l border-paper/[0.08] overflow-y-auto flex flex-col">
    <div class="sticky top-0 bg-[#0d0d0d] border-b border-paper/[0.07] px-5 py-4 flex justify-between items-center z-10">
        <div>
            <div class="text-[0.52rem] tracking-[0.25em] uppercase text-hot mb-0.5">Episode 2 — The Network</div>
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
        <button onclick="document.getElementById('media').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-gold/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-gold"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-1">Ch.3 — Sky News</div><div class="font-display text-base tracking-wide group-hover:text-gold transition-colors leading-tight">Story That Didn't Run</div><div class="text-[0.62rem] text-paper/30 mt-1">QP-9 leak · File pull · Mental health stigma</div></div>
        </button>
        <button onclick="document.getElementById('assault').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Ch.4 — Oracle East</div><div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">Stalked & Assaulted</div><div class="text-[0.62rem] text-paper/30 mt-1">6 assailants · Police corruption recording</div></div>
        </button>
        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/18 px-1 pt-3 pb-0.5">Adam's Story</div>
        <button onclick="document.getElementById('changfa').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Ch.F — Changfa</div><div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">Home Invasion · $2B Agent</div><div class="text-[0.62rem] text-paper/30 mt-1">Power cut · Garage entry · Bodie bribed</div></div>
        </button>
        <button onclick="document.getElementById('rj').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Ch.5 — RJ</div><div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">Criminal Pattern — 15 Incidents</div></div>
        </button>
        <button onclick="document.getElementById('adam').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-violet/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-violet"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-violet mb-1">Ch.6 — Coercive Control</div><div class="font-display text-base tracking-wide group-hover:text-violet transition-colors leading-tight">When Love Becomes a Weapon</div></div>
        </button>
        <button onclick="document.getElementById('services-nsw').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-gold/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-gold"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-1">Ch.6B — Services NSW</div><div class="font-display text-base tracking-wide group-hover:text-gold transition-colors leading-tight">12 Fines · $6,558 · Licence Fraud</div><div class="text-[0.62rem] text-paper/30 mt-1">Tweed Heads · WA licence · Court to find who</div></div>
        </button>
        <button onclick="document.getElementById('hope-rinehart').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-hot/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px] bg-hot"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Ch.6C — Hope Rinehart</div><div class="font-display text-base tracking-wide group-hover:text-hot transition-colors leading-tight">False Allegation · AVO Threat · Police</div><div class="text-[0.62rem] text-paper/30 mt-1">Bodie contacts Hope · Lawyer's letter</div></div>
        </button>
        <button onclick="document.getElementById('bodie-reinvention').scrollIntoView({behavior:'smooth'});togglePanel()" class="panel-item w-full text-left group relative overflow-hidden border border-paper/[0.06] hover:border-violet/35 transition-all p-4 bg-paper/[0.02]">
            <div class="bar-accent-y absolute top-0 left-0 bottom-0 w-[2px]" style="background:#7c6aaa"></div>
            <div class="pl-3"><div class="text-[0.5rem] tracking-[0.2em] uppercase mb-1" style="color:#7c6aaa">Ch.6D — Reinvention</div><div class="font-display text-base tracking-wide transition-colors leading-tight" style="color:rgba(245,234,212,0.55)">Custody · Tattoo Removal · New Identity</div><div class="text-[0.62rem] text-paper/30 mt-1">Rehabilitation vs. record</div></div>
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


<!-- ══════════════════════════════════════
     EPISODE 2 HERO
══════════════════════════════════════ -->
<section class="relative min-h-screen flex flex-col pt-14">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1800&q=65" alt="" class="w-full h-full object-cover opacity-8"/>
        <div class="absolute inset-0 bg-gradient-to-b from-ink/60 via-ink/80 to-ink"></div>
        <div class="scanlines absolute inset-0"></div>
    </div>
    <div class="relative z-10 flex items-center justify-between px-5 md:px-10 py-3 border-b border-paper/[0.05]">
        <div class="flex items-center gap-4">
            <span class="font-display text-[0.62rem] tracking-[0.14em]" style="color:#7c6aaa">EP.02</span>
            <div class="w-px h-4 bg-paper/10"></div>
            <span class="text-[0.55rem] tracking-[0.22em] uppercase text-paper/30">Season 1 — The Network</span>
        </div>
        <div class="hidden sm:flex items-center gap-3 text-[0.52rem] tracking-[0.18em] uppercase text-paper/22">
            <span>8 Chapters</span><div class="w-px h-3 bg-paper/10"></div><span style="color:#7c6aaa">2025</span>
        </div>
    </div>
    <div class="relative z-10 flex-1 grid grid-cols-1 lg:grid-cols-[1fr_360px]">
        <div class="flex flex-col justify-center px-5 md:px-10 py-8 lg:py-10">
            <div class="fade-up mb-5" style="animation-delay:0.1s">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-5 h-px" style="background:#7c6aaa"></div>
                    <span class="text-[0.55rem] tracking-[0.28em] uppercase" style="color:#7c6aaa">Classified Briefing</span>
                    <span class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/22 border border-paper/10 px-2 py-0.5">Gold Coast Division</span>
                </div>
                <h1 class="font-display leading-[0.88] tracking-wide" style="font-size:clamp(2.8rem,7vw,5.5rem)">THE NETWORK.<br><span style="color:#7c6aaa">THE INVESTIGATION.</span></h1>
                <p class="font-serif italic text-paper/40 mt-3 leading-relaxed max-w-lg" style="font-size:clamp(0.9rem,2vw,1.15rem)">Coercive control, criminal networks, and the system gaps that protect them.</p>
            </div>
            <div class="fade-up" style="animation-delay:0.25s">
                <div class="flex items-center gap-3 mb-2"><span class="text-[0.52rem] tracking-[0.2em] uppercase" style="color:rgba(124,106,170,0.6)">▶ Now Playing — Navigate via chapters below</span></div>
                <media-player
                    id="player-ep2"
                    title="Gold Coast Uncovered — Episode 2: The Network"
                    src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/r+j/rj_confront.mp4"
                    style="--media-brand:#7c6aaa;--media-focus-ring-color:rgba(124,106,170,0.45);--media-time-chapters-bg:rgba(124,106,170,0.5);width:100%;border:1px solid rgba(124,106,170,0.2);box-shadow:0 0 80px rgba(124,106,170,0.09),0 0 0 1px rgba(245,234,212,0.025)"
                >
                    <media-provider>
                        <track id="ep2-chapters-track" kind="chapters" default />
                    </media-provider>
                    <media-video-layout></media-video-layout>
                </media-player>
            </div>
            <!-- Chapter nav below video -->
            <div class="fade-up mt-5 border border-paper/[0.07]" style="animation-delay:0.35s;background:rgba(12,8,4,0.7)">
                <div class="px-4 py-2 border-b border-paper/[0.06]"><span class="text-[0.46rem] tracking-[0.22em] uppercase text-paper/22">Episode 2 — Chapters</span></div>
                <div class="flex flex-wrap gap-0">
                    <a href="#adam" class="flex items-center gap-2 px-4 py-3 border-r border-paper/[0.06] transition-all group" style="--tw-bg-opacity:1" onmouseover="this.style.background='rgba(124,106,170,0.08)'" onmouseout="this.style.background=''">
                        <span class="font-display text-[0.62rem]" style="color:#7c6aaa">01</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Adam's Story</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Coercive control</div></div>
                    </a>
                    <a href="#samira" class="flex items-center gap-2 px-4 py-3 border-r border-paper/[0.06] transition-all group" onmouseover="this.style.background='rgba(124,106,170,0.08)'" onmouseout="this.style.background=''">
                        <span class="font-display text-[0.62rem]" style="color:#7c6aaa">02</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Samira</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Registrar recording</div></div>
                    </a>
                    <a href="#rj" class="flex items-center gap-2 px-4 py-3 hover:bg-hot/8 border-r border-paper/[0.06] transition-all group">
                        <span class="font-display text-hot text-[0.62rem]">03</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">RJ — 15 Incidents</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Sex & Crime Squad</div></div>
                    </a>
                    <a href="#brazen" class="flex items-center gap-2 px-4 py-3 hover:bg-hot/8 border-r border-paper/[0.06] transition-all group">
                        <span class="font-display text-hot text-[0.62rem]">04</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Brazen Crime</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Vehicle & arson</div></div>
                    </a>
                    <a href="#redress" class="flex items-center gap-2 px-4 py-3 hover:bg-sage/8 border-r border-paper/[0.06] transition-all group">
                        <span class="font-display text-sage text-[0.62rem]">06</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Redress Scheme</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Fraud & gaps</div></div>
                    </a>
                    <a href="#kira-kira" class="flex items-center gap-2 px-4 py-3 hover:bg-gold/8 border-r border-paper/[0.06] transition-all group">
                        <span class="font-display text-gold text-[0.62rem]">07</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Kira & Kira</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Cocaine in, furniture out</div></div>
                    </a>
                    <a href="#tasmania" class="flex items-center gap-2 px-4 py-3 hover:bg-hot/8 transition-all group">
                        <span class="font-display text-hot text-[0.62rem]">08</span>
                        <div><div class="text-[0.6rem] text-paper/55 group-hover:text-paper transition-colors leading-none mb-0.5">Tasmania</div><div class="text-[0.47rem] text-paper/22 tracking-wider">Strata litigation</div></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="lg:border-l border-paper/[0.06] flex flex-col" style="background:rgba(12,8,4,0.6)">
            <div class="px-6 py-6 border-b border-paper/[0.06]">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">This Episode</div>
                <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Coercive control, criminal networks, and the systemic failures that protect them. Adam Watson, Bodie Chalmers, RJ — 15 incidents. Samira Khalaj. Kira Kira. Tasmania. The strata litigation.</p>
                <div class="grid grid-cols-3 gap-2 text-center">
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl" style="color:#7c6aaa">8</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Cases</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-hot">15</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">RJ Incidents</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-sage">GC</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Region</div></div>
                </div>
            </div>
            <div class="px-5 py-4 border-b border-paper/[0.06] flex-1 overflow-y-auto">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">Episode Chapters</div>
                <div class="space-y-0.5">
                    <div onclick="seekToChapterEp2(0)" class="flex items-center gap-3 py-2.5 px-3 border border-transparent cursor-pointer transition-all group" onmouseover="this.style.background='rgba(124,106,170,0.05)';this.style.borderColor='rgba(124,106,170,0.2)'" onmouseout="this.style.background='';this.style.borderColor='transparent'"><span class="font-display text-sm w-5 shrink-0" style="color:#7c6aaa">01</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Adam's Story</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Coercive control & DPP</div></div><span class="text-[0.52rem] text-paper/18 shrink-0" style="color:rgba(124,106,170,0.4)">▶</span></div>
                    <div onclick="seekToChapterEp2(1)" class="flex items-center gap-3 py-2.5 px-3 border border-transparent cursor-pointer transition-all group" onmouseover="this.style.background='rgba(124,106,170,0.05)';this.style.borderColor='rgba(124,106,170,0.2)'" onmouseout="this.style.background='';this.style.borderColor='transparent'"><span class="font-display text-sm w-5 shrink-0" style="color:#7c6aaa">02</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Samira</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Registrar recording</div></div><span class="text-[0.52rem] text-paper/18 shrink-0" style="color:rgba(124,106,170,0.4)">▶</span></div>
                    <div onclick="seekToChapterEp2(2)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-hot/5 border border-transparent hover:border-hot/20 cursor-pointer transition-all group"><span class="font-display text-hot text-sm w-5 shrink-0">03</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">RJ — 15 Incidents</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Sex & Crime Squad</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-hot transition-colors shrink-0">▶</span></div>
                    <div onclick="seekToChapterEp2(3)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-hot/5 border border-transparent hover:border-hot/20 cursor-pointer transition-all group"><span class="font-display text-hot text-sm w-5 shrink-0">04</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Brazen Crime</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Vehicle attack & arson</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-hot transition-colors shrink-0">▶</span></div>
                    <div onclick="seekToChapterEp2(5)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-sage/5 border border-transparent hover:border-sage/20 cursor-pointer transition-all group"><span class="font-display text-sage text-sm w-5 shrink-0">06</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Redress Scheme</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Verification gap & fraud</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-sage transition-colors shrink-0">▶</span></div>
                    <div onclick="seekToChapterEp2(6)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-gold/5 border border-transparent hover:border-gold/20 cursor-pointer transition-all group"><span class="font-display text-gold text-sm w-5 shrink-0">07</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Kira & Kira</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Cocaine in, furniture out</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-gold transition-colors shrink-0">▶</span></div>
                    <div onclick="seekToChapterEp2(7)" class="flex items-center gap-3 py-2.5 px-3 hover:bg-hot/5 border border-transparent hover:border-hot/20 cursor-pointer transition-all group"><span class="font-display text-hot text-sm w-5 shrink-0">08</span><div class="flex-1 min-w-0"><div class="text-[0.65rem] text-paper/65 group-hover:text-paper transition-colors truncate">Tasmania</div><div class="text-[0.52rem] text-paper/22 tracking-wider">Strata litigation</div></div><span class="text-[0.52rem] text-paper/18 group-hover:text-hot transition-colors shrink-0">▶</span></div>
                </div>
            </div>
            <div class="px-5 py-5">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 blink mb-2">← Episode 1 also available</div>
                <a href="/" class="block w-full text-center border border-paper/20 hover:border-hot/50 hover:bg-hot/5 font-display tracking-widest text-paper/60 hover:text-paper py-3 text-sm transition-all">WATCH EPISODE 1</a>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     ADAM'S STORY — COERCIVE CONTROL
══════════════════════════════════════ -->
<section id="adam" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(124,106,170,0.04) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-violet"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-violet">A Witness Account — Episode 1</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">WHEN LOVE<br><span class="text-violet">BECOMES A WEAPON</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">Coercive control, false allegations, and the system gaps that let it happen. Adam Watson's story.</p>
            </div>
            <div class="max-w-xs">
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag" style="color:#7c6aaa">⚖ DPP: Malicious Prosecution</span>
                    <span class="evidence-tag" style="color:#c98a10">📡 Optus Security Breach</span>
                </div>
            </div>
        </div>

        <div class="space-y-16">

            <!-- Chapter A: Coercive Control / Bodie Chalmers -->
            <div class="story-chapter reveal" style="border-left-color:rgba(124,106,170,0.3)">
                <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Chapter A — Coercive Control</span></div>
                <div class="flex gap-5 mb-5 items-start">
                    <div class="shrink-0 w-24 border border-paper/[0.07] overflow-hidden" style="aspect-ratio:2/3">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bodie-chalmers-photo.jpg" alt="Bodie Chalmers" class="w-full h-full object-cover object-top" />
                    </div>
                    <div>
                        <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE ANATOMY OF<br><span style="color:#7c6aaa">CONTROL</span></h3>
                        <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Coercive control rarely announces itself. It arrives as attention, then affection, then dependence — and by the time the walls close in, leaving feels impossible."</p>
                    </div>
                </div>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5 mt-4">Adam Watson entered a relationship with Bodie Chalmers that escalated into a pattern of coercive and controlling behaviour. Access was obtained to Apple's location sharing on Adam's iPhone without his knowledge. A tracking device was placed on his fuel cap. A private eye-biometric lie detection test was commissioned — scored 1 out of 100, rated "Deceptive" — by a certified EyeDetect® examiner at 50 Cavill Avenue, Surfers Paradise.</p>

                <!-- Reputation in the city -->
                <div class="story-chapter reveal mt-6 mb-6" style="border-left-color:rgba(124,106,170,0.6)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Reputation · What People Say</span></div>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">After Adam Watson showed this website to someone in the city who knows of Bodie Chalmers, the response was immediate recognition. The person said Bodie is <strong class="text-paper/65">known for coming to parties and stealing other people's girls</strong> — a pattern of behaviour that, by this account, precedes anything documented here and is well understood by those who have crossed paths with him socially.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45">The same person recounted that Bodie Chalmers was once <strong class="text-paper/65">bashed by a footballer whose girlfriend he had stolen</strong> — an account consistent with the conduct described throughout this chapter, and with his pattern of provoking the very confrontations he later sought to weaponise.</p>
                </div>

                <!-- Bodie's reaction to the website -->
                <div class="story-chapter reveal mt-6 mb-6" style="border-left-color:rgba(124,106,170,0.6)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Update · His Reaction to the Website</span></div>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Since this website went up, Bodie Chalmers has said that he is going to <strong class="text-paper/65">kill himself</strong> because everyone is making fun of him over what is documented here. At the same time, he is <strong class="text-paper/65">desperately trying to have children with a woman</strong> — in his own framing, to prove to everyone that he is not gay.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45">The two statements sit side by side: a man who was, by his own conduct, in a relationship with Adam Watson, now seeking to publicly disprove that fact by fathering a child — while threatening self-harm over the reaction to a record of things he did.</p>
                </div>

                <!-- EVIDENCE VAULT: Bodie Chalmers -->
                <div class="evidence-vault">
                    <div class="ev-header" onclick="toggleVault(this)">
                        <div class="flex items-center gap-2">
                            <span class="text-[0.48rem] tracking-[0.22em] uppercase text-violet" style="color:#7c6aaa">📁 Evidence Files</span>
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

                <!-- Tracker chapter -->
                <div class="story-chapter reveal mt-6 mb-6" style="border-left-color:rgba(124,106,170,0.6)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Surveillance · Coercive Control</span></div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE PHONE. THE CAR.<br><span style="color:#7c6aaa">THE OPEN FUEL CAP.</span></h3>
                    <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"Coercive control does not require violence in every incident. It requires surveillance — the knowledge, or the suspicion, that you are always being watched. That is the mechanism. That is the point."</p>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Two tracking methods were deployed by Bodie Chalmers against Adam Watson. One was digital. One was physical. Both are textbook instruments of coercive control.</p>

                    <!-- iPhone tracker -->
                    <div class="border-l-4 pl-5 mb-6" style="border-color:rgba(124,106,170,0.5);background:rgba(124,106,170,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                        <div class="text-[0.46rem] tracking-[0.22em] uppercase mb-2" style="color:#7c6aaa">Track 01 — iPhone Location Sharing</div>
                        <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">APPLE SHARE MY LOCATION.<br><span style="color:#7c6aaa">WITHOUT ASKING.</span></h4>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">Bodie Chalmers obtained access to Adam Watson's iPhone location via Apple's Share My Location feature — without Adam's knowledge or consent. This was not a setting Adam configured. It was access that was enabled without him knowing it was there.</p>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">Adam only discovered it when he checked the Share My Location section of his iPhone and found Bodie's account listed as someone with access to his live location. When Adam pulled up the screen to show someone else — handing them the phone and opening the share location list — that person could see Bodie's account sitting there, and could see how frequently it had been checked. It was not occasional. The access had been regular and recent. Someone had been monitoring Adam's real-time location without his knowledge — and the phone records showed it.</p>
                        <div class="border border-paper/[0.07] p-4 mt-3" style="background:rgba(0,0,0,0.3)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-2">What the Share My Location Screen Reveals</div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Every account that has been granted access to your location — including access you did not knowingly authorise</p></div>
                                <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">When that account last checked your location — visible on the screen to anyone you hand the phone to</p></div>
                                <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">A pattern of access — whether checks were sporadic or systematic, conducted at night, during movements</p></div>
                                <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Confirmation the access was active and ongoing — not an old, forgotten permission, but something being used</p></div>
                            </div>
                        </div>
                    </div>

                    <!-- Physical tracker -->
                    <div class="border-l-4 pl-5 mb-6" style="border-color:rgba(193,68,14,0.5);background:rgba(193,68,14,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                        <div class="text-[0.46rem] tracking-[0.22em] uppercase mb-2 text-hot">Track 02 — Physical Tracker · Fuel Cap</div>
                        <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">A TRACKER UNDER THE FUEL CAP.<br><span class="text-hot">EXCEPT HE LEFT THE CAP OPEN.</span></h4>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">A physical tracking device was placed on Adam Watson's car, concealed under the fuel cap. The intention was that it would go unnoticed — a passive surveillance tool that would broadcast Adam's location without his knowledge, attached in a spot not checked in routine use.</p>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Bodie left the fuel cap open.</p>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed">The act of planting the device — conducted covertly, designed to be invisible — was immediately undone by leaving the fuel cap sitting open. An open fuel cap on a parked car is not a normal condition. It draws attention. It invites investigation. The tracker that was supposed to be invisible was instead flagged by the very act of placing it. The surveillance was discovered. The fuel cap was sitting open where Bodie had been.</p>
                    </div>

                    <!-- Coercive control framing -->
                    <div class="border border-paper/[0.08] p-5" style="background:rgba(124,106,170,0.03)">
                        <div class="text-[0.46rem] tracking-[0.22em] uppercase mb-3" style="color:#7c6aaa">Coercive Control — The Infrastructure of Power</div>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Digital location surveillance and physical tracking devices are recognised instruments of coercive and controlling behaviour under Australian law. They are not incidental — they are the infrastructure. The purpose is not information. The purpose is power: the ability to know where someone is at all times, to appear when they do not expect it, to make them aware — or to keep them unaware — that their movements are being recorded.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mt-4">
                            <div class="border border-paper/[0.07] p-3" style="background:rgba(0,0,0,0.25)">
                                <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-1">Mechanism</div>
                                <div class="text-[0.6rem] text-paper/45 leading-relaxed">Continuous location surveillance removes the victim's ability to move freely without that movement being monitored and potentially used against them — whether they know it is happening or not</div>
                            </div>
                            <div class="border border-paper/[0.07] p-3" style="background:rgba(0,0,0,0.25)">
                                <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-1">Chilling Effect</div>
                                <div class="text-[0.6rem] text-paper/45 leading-relaxed">Once a person discovers surveillance, the harm is already done. The awareness that you were being tracked retroactively colours every movement made while it was active — every trip, every person you visited, every night you did not come home</div>
                            </div>
                            <div class="border border-paper/[0.07] p-3" style="background:rgba(0,0,0,0.25)">
                                <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-1">NSW / QLD Law</div>
                                <div class="text-[0.6rem] text-paper/45 leading-relaxed">Coercive control is a standalone criminal offence in NSW (2024) and Queensland (2023). Tracking a partner's location without consent is a specified example of coercive control behaviour under both frameworks</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- The Baby German Shepherd -->
                <div class="story-chapter reveal mt-6" style="border-left-color:rgba(124,106,170,0.4)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">The Dog · What Adam Wanted · What Bodie Did</span></div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">HE BOUGHT A BABY GERMAN SHEPHERD.<br><span style="color:#7c6aaa">HE WANTED A HOME. BODIE CAME AND PUNCHED HIM.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Adam bought the dog as a companion. He wanted a relationship, a home, a life — with Bodie and the German Shepherd. Bodie came over and punched him in the same spot he'd hit him before. Then threatened to steal a car and blame it on Adam."</p>

                    <!-- Dog photo -->
                    <div class="reveal mb-6">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/german_shepherd.jpg"
                             alt="Baby German Shepherd — Adam Watson's dog"
                             class="w-full border border-paper/[0.07]"
                             style="max-height:520px;object-fit:contain;background:#0d0d0d"
                             loading="lazy" />
                        <div class="flex items-center justify-between px-3 py-2 border border-t-0 border-paper/[0.07]" style="background:rgba(124,106,170,0.06)">
                            <span class="text-[0.45rem] tracking-[0.18em] uppercase" style="color:#7c6aaa">Baby German Shepherd · Adam Watson's companion</span>
                            <span class="text-[0.45rem] tracking-[0.14em] uppercase text-paper/25">Eventually had to be given away</span>
                        </div>
                    </div>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Adam Watson bought the baby German Shepherd as a companion. He wanted more than that: a relationship with Bodie Chalmers, a home they shared, a life that included the dog. That was what he was trying to build.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Bodie came to his home. He punched Adam Watson in the same spot he had punched him previously — a deliberate act, not a reaction. Then he made his threat: <em class="text-paper/70">"I'm going to steal a car and tell the cops it was because of you."</em> Bodie Chalmers, in the middle of an assault, was already framing how he would weaponise the police against the person he was hitting.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                        <div class="border p-4" style="border-color:rgba(124,106,170,0.25);background:rgba(124,106,170,0.04)">
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">What Adam Wanted</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">A relationship. A home. A companion dog to share that life with Bodie Chalmers. He bought the German Shepherd with that in mind.</p>
                        </div>
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">What Bodie Did</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">Came to Adam's home. Punched him in the same location as a previous assault. Threatened to steal a car and blame it on Adam to bring police involvement.</p>
                        </div>
                    </div>

                    <!-- Bodie's threat verbatim -->
                    <div class="border-l-4 border-hot/50 pl-5 mb-5" style="background:rgba(193,68,14,0.06);padding:1rem 1rem 1rem 1.25rem">
                        <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">Bodie Chalmers — Direct Threat</div>
                        <p class="text-[0.68rem] text-paper/60 leading-relaxed italic mb-2">"I'm going to steal a car and tell the cops it was because of you!"</p>
                        <p class="text-[0.62rem] text-paper/40 leading-relaxed">Said during the assault. Planning to fabricate a criminal act and attribute it to Adam Watson — using the police as the instrument — while in the middle of punching him. This is the same pattern as the false sexual assault allegation: violence paired with a pre-planned false report.</p>
                    </div>

                    <!-- Outcome -->
                    <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.12)">
                        <div class="text-[0.44rem] tracking-[0.2em] uppercase text-paper/28 mb-2">Outcome</div>
                        <p class="text-[0.62rem] text-paper/42 leading-relaxed">Adam Watson eventually had to give the German Shepherd away. The home he had wanted to build — with Bodie, with the dog — did not come to be. What he was left with was an assault, a threat, and the absence of the companion he had bought in the hope of something better.</p>
                    </div>
                </div>

                <!-- Context: Adam was helping Bodie with armed burglary charges -->
                <div class="border-l-4 pl-5 mt-6 mb-2" style="border-color:rgba(124,106,170,0.4);background:rgba(124,106,170,0.03);padding:1rem 1rem 1rem 1.25rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">Context</div>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">Adam Watson was actively helping Bodie Chalmers navigate his court cases for armed burglary charges at the time all of this was occurring. Bodie repaid that assistance with the coercive control behaviour, the false sexual assault allegation, and the pattern documented across this chapter.</p>
                    <div class="reveal">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bodie_chalmers/IMG-20250610-WA0002.jpg" alt="Adam Watson holding Bodie Chalmers's aggravated burglary brief" class="w-full border border-paper/[0.07]" loading="lazy" />
                        <div class="px-3 py-2 border border-t-0 border-paper/[0.06]" style="background:rgba(0,0,0,0.3)">
                            <span class="text-[0.43rem] tracking-[0.14em] uppercase text-paper/30">Adam Watson · Holding Bodie Chalmers's aggravated burglary brief · The man he was helping with his court cases</span>
                        </div>
                    </div>
                </div>

                <!-- Coogee Incident -->
                <div class="story-chapter reveal mt-6" style="border-left-color:rgba(124,106,170,0.5)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Bodie Chalmers — Coogee · NSW</span>
                        <span class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/20 border border-paper/10 px-2 py-0.5">Filmed by Socrates</span>
                    </div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">ADAM PAID THE $40 TAXI.<br><span style="color:#7c6aaa">BODIE SMASHED THE PRINTER.</span></h3>
                    <p class="font-serif italic text-paper/50 text-base leading-relaxed mb-5">"Bodie arrived from NSW after a fight with his girlfriend. He couldn't cover the taxi fare. Adam paid the $40. Then Bodie's girlfriend called — Adam answered and told her he was Bodie's boyfriend. Bodie smashed the printer. Socrates filmed all of it."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Bodie Chalmers travelled to New South Wales following a fight with his girlfriend. When he arrived, he could not cover the taxi fare. Adam Watson paid the $40. Shortly after, Bodie's girlfriend called. Adam answered. He told her he was Bodie's boyfriend.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Bodie's response was to smash Adam Watson's printer — causing $1,900 in damage — and attempt to fight him. In the course of the altercation, Bodie Chalmers sustained a broken arm. The entire incident was captured on film by Socrates, who was present throughout.</p>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-px mb-5" style="background:rgba(245,234,212,0.05)">
                        <div class="p-4 text-center" style="background:#0c0804">
                            <div class="font-display text-2xl mb-1" style="color:#7c6aaa">$40</div>
                            <div class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/28">Taxi paid by Adam</div>
                        </div>
                        <div class="p-4 text-center" style="background:#0c0804">
                            <div class="font-display text-2xl text-hot mb-1">$1,900</div>
                            <div class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/28">Printer damage</div>
                        </div>
                        <div class="p-4 text-center" style="background:#0c0804">
                            <div class="font-display text-2xl text-hot mb-1">✓</div>
                            <div class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/28">Arm broken</div>
                            <div class="text-[0.42rem] text-paper/18 mt-0.5">Bodie — during altercation</div>
                        </div>
                        <div class="p-4 text-center" style="background:#0c0804">
                            <div class="font-display text-2xl text-sage mb-1">🎥</div>
                            <div class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/28">Filmed</div>
                            <div class="text-[0.42rem] text-paper/18 mt-0.5">By Socrates — full incident</div>
                        </div>
                    </div>
                    <div class="border-l-4 pl-5" style="border-color:rgba(124,106,170,0.4);background:rgba(124,106,170,0.03);padding:0.9rem 1rem 0.9rem 1.25rem">
                        <div class="text-[0.46rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">Sequence of Events</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Bodie arrives in NSW after fight with girlfriend — taxi fare unpaid</p></div>
                            <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Adam pays the $40 fare — an act of goodwill</p></div>
                            <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Bodie's girlfriend calls — Adam answers, tells her he is Bodie's boyfriend</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Bodie smashes Adam's printer — $1,900 damage</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Bodie attempts to fight — sustains broken arm in the altercation</p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Socrates present throughout — filmed the entire incident</p></div>
                        </div>
                    </div>
                </div>

                <!-- Jai — Bodie obtained money by impersonating Adam's approval -->
                <div class="story-chapter reveal mt-8 mb-6" style="border-left-color:rgba(124,106,170,0.6)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Bodie Chalmers — Money by Deception · Jai</span></div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">"ADAM SAID HE'LL PAY YOU BACK."<br><span style="color:#7c6aaa">A PROMISE BODIE NEVER HAD THE RIGHT TO MAKE.</span></h3>
                    <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"Bodie contacted Jai asking him for money. He promised that if Jai paid him, Adam would pay Jai back — making it look like he had Adam's approval. He didn't. Jai paid him anyway."</p>

                    <!-- Jai photo -->
                    <div class="reveal mb-5">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/jai_photo.jpeg" alt="Jai — pictured on the right" class="w-full border border-paper/[0.07]" style="max-height:480px;object-fit:contain;background:#0d0d0d" loading="lazy" />
                        <div class="flex items-center justify-between px-3 py-2 border border-t-0 border-paper/[0.07]" style="background:rgba(124,106,170,0.06)">
                            <span class="text-[0.45rem] tracking-[0.18em] uppercase" style="color:#7c6aaa">Jai · the man on the right</span>
                            <span class="text-[0.45rem] tracking-[0.14em] uppercase text-paper/25">Approached by Bodie Chalmers for money</span>
                        </div>
                    </div>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Bodie Chalmers contacted Jai and asked him to pay him money. To secure it, Bodie promised Jai that if he paid, <strong class="text-paper/65">Adam Watson would pay him back</strong> — presenting the arrangement as though it had Adam's approval. It did not. Adam had given no such approval. The promise was a fabrication used to extract the money.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Jai paid. The receipt below documents one of the transfers. There were further receipts for <strong class="text-paper/65">$660</strong>, <strong class="text-paper/65">$360</strong>, and <strong class="text-paper/65">$80</strong>.</p>

                    <!-- Receipt -->
                    <div class="reveal mb-5">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/jai_b_chalmers_1.jpeg" alt="Receipt — Jai's payment to B Chalmers" class="w-full border border-paper/[0.07]" style="max-height:560px;object-fit:contain;background:#0d0d0d" loading="lazy" />
                        <div class="flex items-center justify-between px-3 py-2 border border-t-0 border-paper/[0.07]" style="background:rgba(124,106,170,0.06)">
                            <span class="text-[0.45rem] tracking-[0.18em] uppercase" style="color:#7c6aaa">Receipt · Jai → B Chalmers</span>
                            <span class="text-[0.45rem] tracking-[0.14em] uppercase text-paper/25">Further receipts: $660 · $360 · $80</span>
                        </div>
                    </div>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Bodie Chalmers obtained Jai's phone number from <strong class="text-paper/65">Socrates Zidane Abdul Rahmahn</strong> — the same Socrates referenced elsewhere in this episode.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45">The consequence fell on Jai. He needed the money to buy things for his mother and to pay the power bill, and after paying Bodie he had nothing left. Adam Watson had to send Jai the money to cover what Bodie had taken — which left Adam, in turn, with nothing.</p>
                </div>

                <!-- Zach — knife intimidation over a TikTok like -->
                <div class="story-chapter reveal mt-8 mb-6" style="border-left-color:rgba(124,106,170,0.6)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Bodie Chalmers — Network · Zach</span><span class="text-[0.44rem] tracking-[0.15em] uppercase border border-paper/15 text-paper/30 px-2 py-0.5 blink">⬤ VIDEO PENDING</span></div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">A KNIFE TO THE THROAT.<br><span style="color:#7c6aaa">OVER A LIKE ON TIKTOK.</span></h3>
                    <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"Zach and his friend Max forced Adam to delete his TikTok account after they found he had liked a photo of a guy with his shirt off. Zach held a knife to Adam's throat. Bodie Chalmers recorded the whole thing."</p>

                    <!-- Zach photo -->
                    <div class="reveal mb-5">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/zach_muslim.jpeg" alt="Zach" class="w-full border border-paper/[0.07]" style="max-height:480px;object-fit:contain;background:#0d0d0d" loading="lazy" />
                        <div class="flex items-center justify-between px-3 py-2 border border-t-0 border-paper/[0.07]" style="background:rgba(124,106,170,0.06)">
                            <span class="text-[0.45rem] tracking-[0.18em] uppercase" style="color:#7c6aaa">Zach · in Bodie Chalmers's network</span>
                            <span class="text-[0.45rem] tracking-[0.14em] uppercase text-paper/25">Pictured gambling</span>
                        </div>
                    </div>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Zach, a member of Bodie Chalmers's network, and his friend Max forced Adam Watson to delete his TikTok account. The trigger: they discovered Adam had <strong class="text-paper/65">liked a photo on TikTok of a man with his shirt off</strong>. In the course of that intimidation, Zach <strong class="text-paper/65">held a knife to Adam Watson's throat</strong>.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The entire intimidation was <strong class="text-paper/65">recorded by Bodie Chalmers</strong>. Sunlight.Quest is waiting on that video, and it will be uploaded here once it becomes available.</p>

                    <div class="border border-gold/20 p-4 mb-2" style="background:rgba(201,138,16,0.04)">
                        <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-2">The Hypocrisy</div>
                        <p class="text-[0.65rem] text-paper/48 leading-relaxed mb-2">The contradictions here are not subtle. <strong class="text-paper/65">Bodie Chalmers</strong> filmed an act of homophobic intimidation against Adam Watson — the same Bodie Chalmers who was, at the time, in a relationship with Adam himself.</p>
                        <p class="text-[0.65rem] text-paper/48 leading-relaxed">And <strong class="text-paper/65">Zach</strong> presented his conduct as acting on conservative Muslim beliefs — punishing a man over a single "like" — while, in the very photo above, he is clearly seen <strong class="text-paper/65">gambling</strong>. A man enforcing his religious values at knifepoint, pictured breaching them in the same frame.</p>
                    </div>
                </div>

                <!-- Optus $2,500 bill — Bodie Chalmers -->
                <div class="story-chapter reveal" style="border-left-color:rgba(201,138,16,0.3)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Bodie Chalmers — Optus Security Breach</span></div>
                    <div class="border border-paper/[0.07] p-4 mb-5 inline-flex items-center justify-center" style="background:#fff">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/optus_logo.png" alt="Optus" class="w-full max-w-[160px]" style="object-fit:contain" loading="lazy" />
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE $2,500 BILL<br><span class="text-gold">FOR OPTUS'S OWN FAILURE.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Bodie Chalmers walked into an Optus store and had Adam's phone number turned off. No authorisation. No verification. Just social pressure on an employee. And it worked."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Bodie Chalmers deactivated Adam's Optus service by threatening to expose an employee's sexuality unless they complied. The employee complied. Adam's phone was turned off. The matter was raised with the Prime Minister's office, referred to the Telecommunications Industry Ombudsman, and the Optus CEO was notified. Adam is now being billed $2,500 for the disconnection — despite the breach being caused entirely by Bodie Chalmers exploiting Optus's own failure.</p>

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
                            <div class="ev-file ef-gold" onclick="openMV('pdf','OPTUS APOLOGY LETTER — TIO OUTCOME','Letter from Optus following Telecommunications Industry Ombudsman referral — service restored — acknowledgment of breach','PDF · Optus correspondence · Post-TIO referral','optus_apology_letter.pdf','This letter from Optus, issued following the TIO referral initiated by Adam Watson\'s complaint to the Prime Minister\'s office, confirms the restoration of service and acknowledges the security failure at the retail store level. Optus has since issued an internal directive addressing verification procedures. Despite this, Adam is still being billed $2,500 — a charge Sunlight.Quest considers unconscionable.','pdf-optus')">
                                <div class="ev-icon ev-pdf">PDF</div>
                                <div class="ev-meta">
                                    <div class="ev-name">optus_apology_TIO_outcome.pdf</div>
                                    <div class="ev-desc">PDF · Optus apology · Service restored · TIO referral outcome</div>
                                </div>
                                <span class="ev-cta">View →</span>
                            </div>
                            <div class="ev-zip-bar">
                                <span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">Sunlight.Quest is calling on Optus to waive the $2,500 charge</span>
                            </div>
                        </div>
                    </div>

                    <!-- Lebara switch -->
                    <div class="border border-paper/[0.07] mt-6 overflow-hidden" style="background:rgba(0,0,0,0.12)">
                        <div class="flex items-center gap-4 px-5 py-4 border-b border-paper/[0.06]" style="background:rgba(0,0,0,0.18)">
                            <div class="shrink-0 border border-paper/[0.08] px-3 py-2" style="background:#ffffff">
                                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bodie_chalmers/lebara-logo.png" alt="Lebara Mobile" class="h-6 w-auto" loading="lazy" />
                            </div>
                            <div>
                                <div class="text-[0.45rem] tracking-[0.2em] uppercase text-gold mb-0.5">Adam Watson — Network Switch</div>
                                <div class="font-display text-base tracking-wide text-paper/80 leading-tight">SWITCHED TO LEBARA.<br><span class="text-gold">SO IT CAN NEVER HAPPEN AGAIN.</span></div>
                            </div>
                        </div>
                        <div class="p-5">
                            <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">Following the Optus incident, Adam Watson has switched to Lebara to ensure his phone number can never be disconnected in the same way again. The move was a direct response to what Bodie Chalmers was able to do — walk into a physical retail store and have a number deactivated without a verification message being sent to the account holder, without a call to the account holder, and without the knowledge of management.</p>
                            <div class="border border-hot/20 p-4 mb-4" style="background:rgba(193,68,14,0.04)">
                                <div class="text-[0.45rem] tracking-[0.2em] uppercase text-hot mb-2">What People Need to Know</div>
                                <p class="text-[0.62rem] text-paper/45 leading-relaxed mb-3">Staff working in Optus and Telstra physical retail outlets have the ability to disconnect any mobile number they choose — without sending a verification message to the account holder, and without the authorisation or knowledge of their manager. A person can walk in, apply social pressure to the right employee, and have any number turned off. The account holder gets no warning. No SMS. No email. The number simply stops working.</p>
                                <p class="text-[0.62rem] text-paper/40 leading-relaxed">This is not a hypothetical. It is what Bodie Chalmers did to Adam Watson's Optus service. The TIO referral confirmed the breach. The apology letter is in the evidence vault above. The structural vulnerability — walk-in, no verification, no notification — remains in place at major carriers' physical outlets.</p>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.03)">
                                    <div class="text-[0.43rem] tracking-[0.16em] uppercase text-hot mb-1.5">The Optus Vulnerability</div>
                                    <p class="text-[0.58rem] text-paper/40 leading-relaxed">In-store staff can deactivate numbers. No verification to account holder. No manager sign-off required. Social engineering by a determined person is sufficient.</p>
                                </div>
                                <div class="border border-gold/20 p-3" style="background:rgba(201,138,16,0.03)">
                                    <div class="text-[0.43rem] tracking-[0.16em] uppercase text-gold mb-1.5">The Switch to Lebara</div>
                                    <p class="text-[0.58rem] text-paper/40 leading-relaxed">Adam Watson moved to Lebara specifically to remove this attack surface. His number cannot be targeted the same way again.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NAB direct debit fraud -->
                <div class="story-chapter reveal" style="border-left-color:rgba(193,68,14,0.5)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Bodie Chalmers — Banking Fraud</span>
                        <span class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/20 border border-paper/10 px-2 py-0.5">NAB · Commonwealth Bank · AFP · Major Fraud Squad</span>
                    </div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">HE SET UP A DIRECT DEBIT FROM ADAM'S ACCOUNT TO PAY HIS OWN RENT.<br><span class="text-hot">THE AFP IS NOW INVOLVED. THE MAJOR FRAUD SQUAD IS COMING.</span></h3>
                    <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"Bodie Chalmers set up a direct debit from Adam Watson's NAB account to pay his landlord. Adam went into the branch to confront staff. NAB Group Security took it from there — referred to the AFP. Commonwealth Federal Prosecutions. Jail sentences. The landlord was a drug dealer in Bodie's network. All accounts closed. Major Fraud Squad is now investigating the source of the funds — everything will be seized."</p>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">While in the relationship with Adam Watson, Bodie Chalmers set up a direct debit from Adam's <strong class="text-paper/65">NAB bank account</strong> — without his knowledge or consent — to pay rent to his own landlord. Adam discovered the transaction, went directly into a NAB branch, and confronted staff about why an unauthorised direct debit was leaving his account. The branch escalated the matter internally.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">NAB Group Security subsequently contacted Adam directly. The matter was treated with a seriousness that went well beyond the cancellation of a direct debit: it has been <strong class="text-paper/65">referred to the Australian Federal Police</strong>. NAB Group Security advised Adam that cases of this nature — the fraudulent setup of direct debits from victim accounts — are now being referred to <strong class="text-paper/65">Commonwealth Federal Prosecutions</strong>, and those prosecutions are resulting in <strong class="text-paper/65">tough custodial sentences</strong>. This is not a civil recovery matter. It is a criminal one.</p>

                    <!-- The landlord connection -->
                    <div class="border border-hot/25 p-5 mb-5" style="background:rgba(193,68,14,0.05)">
                        <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-3">The Landlord — Inside Bodie's Network</div>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">The landlord to whom Bodie Chalmers was directing Adam's money was not a neutral third party. He was inside Bodie Chalmers's criminal network. He is a <strong class="text-paper/65">drug dealer</strong>. The direct debit was not merely an unauthorised redirection of rent — it was a payment flowing from a victim's account into a drug dealer's accounts through an intermediary who had obtained access to those accounts by deception.</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed">When the matter was raised with NAB Group Security and the AFP, the landlord's multiple accounts were investigated. Those accounts have now been closed. The closure extended beyond the direct recipient: the financial institutions identified and acted on the network connections.</p>
                    </div>

                    <!-- How the banks responded -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-5">
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">What Bodie Did</div>
                            <div class="space-y-1.5">
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Set up direct debit from Adam Watson's NAB account</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Directed to his own landlord — a drug dealer in his network</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">No authorisation sought or given</p></div>
                            </div>
                        </div>
                        <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.03)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold mb-2">The Banking Response</div>
                            <div class="space-y-1.5">
                                <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Adam confronted NAB branch staff directly</p></div>
                                <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">NAB Group Security escalated — referred to AFP</p></div>
                                <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">NAB confirmed: contacted CBA Group Security — Bodie's accounts closed</p></div>
                            </div>
                        </div>
                        <div class="border border-sage/20 p-4" style="background:rgba(61,122,74,0.03)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-sage mb-2">Where It Is Now</div>
                            <div class="space-y-1.5">
                                <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Referred to AFP — Commonwealth Federal Prosecutions</p></div>
                                <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Landlord's accounts closed — drug dealing network flagged</p></div>
                                <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Major Fraud Squad: investigating source of funds — seizure pending</p></div>
                            </div>
                        </div>
                    </div>

                    <!-- Big Three banks / Major Fraud Squad -->
                    <div class="border border-gold/20 p-5 mb-5" style="background:rgba(201,138,16,0.03)">
                        <div class="text-[0.46rem] tracking-[0.22em] uppercase text-gold mb-3">How the Big Three Banks Operate — Criminal Network Closure</div>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Australia's major banks — NAB, Commonwealth Bank, and Westpac — operate Group Security functions that communicate directly with each other when criminal conduct is identified. This is not a public-facing process. When one major bank's Group Security identifies a fraud or criminal network pattern, they contact their counterparts at the other institutions. The result is the coordinated closure of accounts across the network — not just the account that was immediately identified.</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed">In this case, NAB Group Security confirmed to Adam Watson that they had contacted <strong class="text-paper/65">Commonwealth Bank Group Security</strong>. Bodie Chalmers's Commonwealth Bank accounts have been closed. He cannot access his money. The same process extended to the landlord's accounts — multiple accounts, across more than one institution, connected to a drug-dealing network, have been closed as a consequence of a single reported direct debit fraud.</p>
                    </div>

                    <div class="border border-hot/30 px-5 py-4" style="background:rgba(193,68,14,0.06)">
                        <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">Major Fraud Squad — Source of Funds Investigation</div>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">The Major Fraud Squad has been brought in to investigate the source of the funds moving through Bodie Chalmers's accounts and those of his landlord. This is not a routine financial crimes review. The Fraud Squad's involvement at this level — looking at the provenance of the money, not just the mechanics of the direct debit — signals that the investigation has expanded well beyond the initial unauthorised transaction.</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed">The outcome anticipated is seizure: all funds whose source cannot be legitimately accounted for will be confiscated. For a person whose landlord is a drug dealer, and whose own criminal history includes aggravated burglary and participation in an organised car theft ring, the question of where the money in those accounts came from is not an abstract one. The Fraud Squad will answer it. And when they do, the assets follow.</p>
                    </div>
                </div>

                <!-- Services NSW speeding fines — identity / licence fraud -->
                <div id="services-nsw" class="story-chapter reveal" style="border-left-color:rgba(201,138,16,0.4)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Bodie Chalmers Network — Identity Fraud</span>
                        <span class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/20 border border-paper/10 px-2 py-0.5">Services NSW · Tweed Heads · WA Driver's Licence</span>
                    </div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">12 SPEEDING FINES. $6,558.<br><span class="text-gold">SOMEONE IS NOMINATING ADAM'S LICENCE — AND HIDING BEHIND A COURT DATE.</span></h3>
                    <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"Adam received a call from Services NSW. His Western Australian Driver's Licence was being nominated for twelve speeding fines totalling $6,558 — all in Tweed Heads. This is not a police matter. It is a prosecution by the <strong>Services NSW Prosecution Team</strong>. Services NSW could not tell him who was doing it. To find out, he will have to go to Court."</p>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Adam Watson received a call from Services NSW advising him that his Western Australian Driver's Licence had been nominated against twelve (12) separate speeding infringements. The fines were issued in Tweed Heads, New South Wales. The total amount being pursued by the <strong class="text-gold">Services NSW Prosecution Team</strong> is <strong class="text-gold">$6,558</strong> — Fine No. <strong class="text-gold">474089725</strong>. This is not a police matter. The prosecution is civil in nature and administered by Services NSW directly under the relevant road transport legislation — not referred through the NSW Police Force.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The Services NSW representative confirmed the location of the infringements — Tweed Heads — but refused to disclose the identity of the person nominating Adam's licence. Under the current process, that information is withheld until the matter proceeds before a Court. Adam Watson holds a Western Australian Driver's Licence and has no legitimate connection to twelve speeding incidents in Tweed Heads, NSW.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">This is a known method of targeted harassment within criminal networks: obtaining someone's licence details and nominating them against infringements creates a legal and financial burden that the target must then spend time and money to contest in Court — precisely the outcome sought. It is consistent with the pattern of identity exploitation documented across Bodie Chalmers's conduct: the Optus social engineering, the unauthorised NAB direct debit, and now the weaponisation of a licence nomination system.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-5">
                        <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.04)">
                            <div class="text-[0.43rem] tracking-[0.18em] uppercase text-gold mb-2">Fine Reference</div>
                            <div class="font-display text-xl text-gold mb-1">474089725</div>
                            <p class="text-[0.58rem] text-paper/40 leading-relaxed">Services NSW infringement reference. 12 separate speeding fines issued in Tweed Heads, NSW.</p>
                        </div>
                        <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.04)">
                            <div class="text-[0.43rem] tracking-[0.18em] uppercase text-gold mb-2">Total Amount</div>
                            <div class="font-display text-xl text-gold mb-1">$6,558</div>
                            <p class="text-[0.58rem] text-paper/40 leading-relaxed">Services NSW is pursuing this total across 12 infringements against Adam Watson's WA Driver's Licence.</p>
                        </div>
                        <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.04)">
                            <div class="text-[0.43rem] tracking-[0.18em] uppercase text-gold mb-2">Where</div>
                            <div class="font-display text-xl text-gold mb-1">Tweed Heads</div>
                            <p class="text-[0.58rem] text-paper/40 leading-relaxed">All 12 fines located in Tweed Heads, NSW. Adam holds a WA licence and has no connection to this location.</p>
                        </div>
                    </div>

                    <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-3">Why Services NSW Won't Say Who — And Why It Matters</div>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Under the licence nomination process, a third party can nominate another person's licence against a speeding infringement — shifting legal liability onto the nominated party. The Services NSW Prosecution Team administers this process, not the NSW Police. They will not disclose the nominator's identity until the matter is before a Court. This creates a built-in shield: the harasser remains anonymous until the target is forced to appear before a magistrate.</p>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Adam Watson will be attending Court to compel the disclosure. The identity of the person nominating his Western Australian licence against twelve Tweed Heads speeding fines will then be on the public record — and will become part of this documented case.</p>
                        <div class="border-t border-hot/15 pt-4 mt-3">
                            <div class="text-[0.43rem] tracking-[0.18em] uppercase text-hot/70 mb-2">Precedent: Marcus Einfeld — Former Federal Court Judge — 3 Years Jail</div>
                            <p class="text-[0.63rem] text-paper/42 leading-relaxed mb-2">The severity of this process was made plain in one of Australia's most high-profile legal scandals. Former Federal Court judge Marcus Einfeld received a <strong class="text-paper/60">three-year jail sentence</strong> — with a two-year non-parole period — for lying to avoid a single $77 speeding fine. He was convicted of perjury and perverting the course of justice after nominating a deceased woman as the driver of his car when it was caught speeding at 60km/h in a 50km/h zone in Mosman, NSW in January 2006.</p>
                            <p class="text-[0.63rem] text-paper/42 leading-relaxed mb-2">The NSW Supreme Court described his conduct as "planned criminal activity" and "deliberate, premeditated perjury." The Fraud Squad Commander who investigated noted: <em class="text-paper/55">"For the sake of a small monetary penalty, people's lives can be absolutely ruined."</em></p>
                            <p class="text-[0.63rem] text-paper/42 leading-relaxed">The message is unambiguous: the nomination system is taken with complete seriousness by the Courts. Whoever is nominating Adam Watson's licence is committing a serious criminal act. When the Court compels disclosure, that person will face exactly this framework — and they would do well to remember what happened to a Federal Court judge who tried to use it dishonestly.</p>
                        </div>
                    </div>

                    <!-- Bodie selling details / mother's identity fraud history -->
                    <div class="border border-paper/[0.08] p-5 mb-5" style="background:rgba(124,106,170,0.04)">
                        <div class="text-[0.46rem] tracking-[0.22em] uppercase mb-3" style="color:#7c6aaa">Adam's Assessment — Where the Details Came From</div>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Adam believes Bodie Chalmers is selling his personal details — including his Western Australian Driver's Licence information — to third parties within his network. This is not a new pattern in the Chalmers family. Bodie's mother is known to have used driver's licence and identity documents that Bodie procured during home invasions he committed as a juvenile to conduct identity fraud.</p>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">When confronted about this conduct, Bodie's mother's consistent response was to immediately run to police — a deflection tactic designed to reframe the victim as the aggressor and insulate herself from accountability. The same dynamic is evident across Bodie's own conduct: exploit the system, then shelter behind it when challenged.</p>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed">That Bodie Chalmers would have access to Adam Watson's licence details — through his documented pattern of accessing personal information during the coercive control period — and would monetise those details by selling them into a network capable of generating twelve speeding infringements in Tweed Heads is entirely consistent with this established family pattern.</p>
                    </div>

                    <div class="border border-paper/[0.08] p-5" style="background:rgba(0,0,0,0.18)">
                        <div class="text-[0.44rem] tracking-[0.2em] uppercase text-paper/30 mb-3">The Coercive Control Pattern</div>
                        <div class="space-y-2">
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Optus social engineering</strong> — walked into a store and had Adam's number deactivated with no authorisation</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">NAB direct debit fraud</strong> — set up an unauthorised debit from Adam's account to pay his own rent</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">Services NSW licence nomination</strong> — 12 fines, $6,558, Tweed Heads — Adam forced to attend Court to find out who</p></div>
                        </div>
                        <p class="text-[0.62rem] text-paper/35 leading-relaxed mt-3">Each incident exploits a system — telecommunications, banking, traffic enforcement — in a way that forces Adam Watson to spend time, money, and legal resources to undo. The individual acts are designed to look like administrative matters. Together they form a campaign.</p>
                    </div>
                </div>

                <!-- Officeworks wheelchair attack -->
                <div class="story-chapter reveal" style="transition-delay:0.05s">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">They Don't Even Hide — Incident One — Attempted Murder</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">FIFTEEN THOUSAND DOLLARS.<br><span class="text-hot">A WHEELCHAIR. A CAR PARK.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Someone paid to have a man driven into near an Officeworks. The alleged price was $15,000. The alleged goal was a wheelchair."</p>

                    <!-- Photo of the driver -->
                    <div class="reveal mb-6">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bodie_chalmers/IMG-20251223-WA0006.jpg" alt="The man Bodie Chalmers paid to run Adam Watson over — now in custody, bail denied" class="w-full object-cover object-top border border-paper/[0.07]" style="max-height:500px" loading="lazy" />
                        <div class="flex items-center justify-between px-3 py-2 border border-t-0 border-paper/[0.07]" style="background:rgba(193,68,14,0.06)">
                            <span class="text-[0.45rem] tracking-[0.18em] uppercase text-hot">In Custody &nbsp;·&nbsp; Bail Denied &nbsp;·&nbsp; SMS Evidence Discovered</span>
                            <span class="text-[0.45rem] tracking-[0.14em] uppercase text-paper/25">The man Bodie Chalmers paid to put Adam Watson in a wheelchair</span>
                        </div>
                    </div>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The man pictured above is the person Bodie Chalmers paid to run Adam Watson over — to put him in a wheelchair. He is now in custody. He has been denied bail. SMS messages extracted from his device establish the connection to Bodie Chalmers directly: the messages document the arrangement, the payment, and the target. The attempt on Adam Watson's life is no longer an allegation. It is a documented contract, preserved in the messages of the man who carried it out.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Adam Watson was on the phone with Kosta Kondratenko at the moment the car attacked him. The call was live. What Adam experienced in real time — the vehicle, the impact, the immediate aftermath — was heard as it happened. That call is part of the documented record of this attack.</p>

                    <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">How the Driver Was Identified — The Officeworks CCTV</div>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Immediately after the attack, Adam Watson photographed the driver in his vehicle at the scene. He then pursued CCTV footage from the Officeworks adjacent to the car park — coverage that captured the vehicle, the attack, and the driver. That footage was obtained and handed to Queensland Police. Combined with the scene photograph, it gave investigators everything needed to identify and locate him.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mt-3">
                            <div class="border border-paper/[0.07] p-3" style="background:rgba(0,0,0,0.14)">
                                <div class="text-[0.43rem] tracking-[0.16em] uppercase text-hot mb-1.5">Scene Photo</div>
                                <p class="text-[0.58rem] text-paper/40 leading-relaxed">Adam photographed the driver in his car immediately after the attack. Taken under his own initiative at the scene.</p>
                            </div>
                            <div class="border border-paper/[0.07] p-3" style="background:rgba(0,0,0,0.14)">
                                <div class="text-[0.43rem] tracking-[0.16em] uppercase text-hot mb-1.5">Officeworks CCTV</div>
                                <p class="text-[0.58rem] text-paper/40 leading-relaxed">Adam pursued the Officeworks CCTV footage directly. The footage was obtained and handed to police — capturing the vehicle and attack on camera.</p>
                            </div>
                            <div class="border border-paper/[0.07] p-3" style="background:rgba(0,0,0,0.14)">
                                <div class="text-[0.43rem] tracking-[0.16em] uppercase text-hot mb-1.5">SMS Evidence</div>
                                <p class="text-[0.58rem] text-paper/40 leading-relaxed">Messages between the driver and Bodie Chalmers extracted from his device. Link the attack to a $15,000 contract. Bail denied.</p>
                            </div>
                        </div>
                    </div>

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

                <!-- Gina Rinehart arson -->
                <div class="story-chapter reveal" style="transition-delay:0.1s">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">They Don't Even Hide — Incident Two — Arson</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">"GINA RINEHART IS NEXT"<br><span class="text-hot">WRITTEN ON A FENCE.</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">A Gold Coast home connected to the personal circle of Gina Rinehart was firebombed. Perpetrators left graffiti: "Gina Rinehart is next." They also left a section of a previous version of this publication containing identifying imagery — an attempt to establish that investigative journalism is the provocation for violence. Sunlight.Quest does not accept that logic.</p>

                    <!-- Artist's rendition -->
                    <div class="reveal mb-5">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bodie_chalmers/gina_rinehart_next_small.jpg" alt="Artist's rendition — Gina Rinehart firebombing" class="w-full border border-paper/[0.07]" loading="lazy" />
                        <div class="flex items-center justify-between px-3 py-2 border border-t-0 border-paper/[0.07]" style="background:rgba(193,68,14,0.04)">
                            <span class="text-[0.43rem] tracking-[0.14em] uppercase text-paper/30">Artist's rendition · AI-generated image · ChatGPT · Not a photograph — for illustrative purposes only</span>
                            <span class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/50">"Gina Rinehart Is Next" · Gold Coast · Arson</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div class="border border-paper/[0.07] p-5">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-2">Jordan Shanks — Friendlyjordies</div>
                            <div class="text-[0.62rem] text-paper/40 leading-relaxed space-y-1"><div>Method: Firebombing — Bondi Beach, Nov 2022</div><div>Outcome: Home destroyed. Perpetrator jailed 5 years.</div><div>Trigger: Video naming crime family</div></div>
                        </div>
                        <div class="border border-paper/[0.07] p-5">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-2">Gina Rinehart's Circle — Gold Coast</div>
                            <div class="text-[0.62rem] text-paper/40 leading-relaxed space-y-1"><div>Method: Firebombing — Gold Coast residence</div><div>Message left: "Rinehart is next" + Sunlight.Quest pages</div><div>Status: Active investigation. Perpetrator left Australia.</div></div>
                        </div>
                    </div>
                </div>

                <!-- CGU Insurance -->
                <div class="border-l-4 border-hot/40 pl-5 mt-6 mb-2" style="background:rgba(193,68,14,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                    <div class="flex items-center gap-4 mb-3">
                        <div class="shrink-0 border border-paper/[0.08] px-3 py-2" style="background:#ffffff">
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bodie_chalmers/cgu-logo-horizontal-navy-green.png" alt="CGU Insurance" class="h-7 w-auto" loading="lazy" />
                        </div>
                        <div>
                            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-1">CGU Insurance — Firebombing Aftermath</div>
                            <h4 class="font-display text-lg tracking-wide leading-tight">CGU REP CALLS THE SITE "INCITING HATE."<br><span class="text-hot">AT A FIREBOMBED HOUSE. THEIR NAME IS BEING OBTAINED.</span></h4>
                        </div>
                    </div>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">A representative from CGU Insurance was present at the firebombed property — the house connected to Gina Rinehart's personal circle — in the aftermath of the arson attack. Gina Rinehart was also present. While surveying the burnt-out scene, the CGU representative viewed an older version of this website on a device and made comments asserting that the section describing Bodie Chalmers as an "incest baby" constituted <em>inciting hate</em>.</p>
                    <div class="border border-paper/[0.08] p-4 mb-4" style="background:rgba(0,0,0,0.2)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">The Irony — On the Record</div>
                        <p class="text-[0.65rem] text-paper/45 leading-relaxed">A property was set on fire. Graffiti reading <span class="font-display text-paper/65">"Gina Rinehart is Next"</span> was left on the fence. Pages of this publication were deliberately placed at the scene in an apparent attempt to implicate investigative journalism as the cause of violence. And the person from CGU Insurance — standing in the charred aftermath of an actual arson attack — chose to direct their concern at the words on a website. Not at the fire. Not at the graffiti. Not at the perpetrators. At the journalism. The irony is not lost on us.</p>
                    </div>
                    <div class="border border-hot/20 p-4 mb-4" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Why This Comment Is Wrong</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.58rem] text-paper/40 leading-relaxed"><strong class="text-paper/55">Factual accuracy is not hate speech.</strong> Describing a person's circumstances of birth based on documented facts is reportage. It is not directed at any group. It is not incitement.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.58rem] text-paper/40 leading-relaxed"><strong class="text-paper/55">The legal definition of incitement requires more than discomfort.</strong> Inciting hatred under the Racial Discrimination Act or Criminal Code requires material that encourages hatred against a group on protected grounds. A biographical description of an individual does not meet that threshold.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.58rem] text-paper/40 leading-relaxed"><strong class="text-paper/55">Conflating criticism with hate normalises suppression.</strong> Using "inciting hate" language to characterise journalism that documents criminal conduct is a rhetorical strategy — not a legal or ethical argument. It is exactly the kind of pressure investigative journalism exists to resist.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.58rem] text-paper/40 leading-relaxed"><strong class="text-paper/55">An insurance representative is not a regulator.</strong> CGU Insurance has no standing to adjudicate what constitutes hate speech. Making that comment at a crime scene — to parties connected to this publication — carries the character of an attempt to influence or intimidate.</p></div>
                        </div>
                    </div>
                    <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.04)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">Status — Action Being Taken</div>
                        <p class="text-[0.65rem] text-paper/45 leading-relaxed">The identity of this CGU representative is currently being obtained. Once confirmed, the matter will be referred to CGU management so that appropriate action can be taken. A serving insurance professional making comments characterising documented journalism as "inciting hate" — at a crime scene, in front of witnesses — is a conduct matter for their employer. Their name, role, and the full context of the comments will be published here upon confirmation.</p>
                    </div>
                </div>

                <!-- Hope Rinehart — Bodie's unsolicited contact -->
                <div id="hope-rinehart" class="story-chapter reveal mt-8" style="border-left-color:rgba(193,68,14,0.6)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Bodie Chalmers — Hope Rinehart</span>
                        <span class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/20 border border-paper/10 px-2 py-0.5">Lawyer's Letter · AVO Threat · Police Referral</span>
                    </div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">HE TOLD HOPE RINEHART<br><span class="text-hot">THAT ADAM WATSON WAS A PAEDOPHILE. THEN ASKED HER TO HOOK UP WITH HIM.</span></h3>
                    <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"Bodie Chalmers contacted Hope Rinehart — one of Australia's most high-profile women — to tell her Adam Watson was a paedophile and to ask her to hook up with him so Adam would get jealous. Hope got her lawyer to write a letter. Then she called the police."</p>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Bodie Chalmers contacted Hope Rinehart — daughter of Gina Rinehart — with two objectives. The first: to tell Hope that Adam Watson is a paedophile. The false allegation was made without evidence, without basis, and in contact with a person who had no connection to the matter. The second: to suggest that Hope should hook up with Bodie Chalmers personally, ostensibly so that Adam Watson would become jealous.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The false paedophile allegation is consistent with Bodie's documented pattern of making serious, unsubstantiated allegations against Adam Watson to third parties — the same pattern that resulted in the DPP ruling a prior sexual assault allegation as a malicious prosecution on its first court mention. The contact with Hope Rinehart was unsolicited, uninvited, and grotesque.</p>

                    <div class="border border-hot/25 p-5 mb-5" style="background:rgba(193,68,14,0.05)">
                        <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-3">Hope Rinehart's Response</div>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <div class="border border-hot/15 p-4" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">Step 1</div>
                                <div class="font-display text-sm text-paper/70 mb-2">Lawyer's Letter</div>
                                <p class="text-[0.6rem] text-paper/45 leading-relaxed">Hope Rinehart immediately retained legal counsel. Her lawyer wrote to Bodie Chalmers threatening to apply for an Apprehended Violence Order (AVO).</p>
                            </div>
                            <div class="border border-hot/15 p-4" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">Step 2</div>
                                <div class="font-display text-sm text-paper/70 mb-2">Police Contacted</div>
                                <p class="text-[0.6rem] text-paper/45 leading-relaxed">Hope Rinehart contacted police directly. This was not a passive response. This was an immediate escalation to law enforcement.</p>
                            </div>
                            <div class="border border-hot/15 p-4" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">Step 3</div>
                                <div class="font-display text-sm text-paper/70 mb-2">Police Spoke to Bodie</div>
                                <p class="text-[0.6rem] text-paper/45 leading-relaxed">When police reached out to Bodie Chalmers regarding his contact with Hope Rinehart, his response was: <em class="text-paper/65">"She just wants my big cock."</em></p>
                            </div>
                        </div>
                    </div>

                    <!-- The response quote callout -->
                    <div class="border-l-4 border-hot/60 pl-5 mb-5" style="background:rgba(193,68,14,0.07);padding:1.1rem 1rem 1.1rem 1.25rem">
                        <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">Bodie Chalmers — To Police · On Hope Rinehart's Complaint</div>
                        <p class="font-display text-xl text-paper/80 leading-tight mb-3">"She just wants my big cock."</p>
                        <p class="text-[0.63rem] text-paper/40 leading-relaxed">This is the response Bodie Chalmers gave to police when they contacted him in connection with Hope Rinehart's complaint. A lawyer's letter had been sent. Police had been called. His response to law enforcement regarding the matter was the above. It is on the record.</p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                        <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.14)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-2">What Bodie Told Hope</div>
                            <div class="space-y-1.5">
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">That Adam Watson is a paedophile — a false allegation with no basis</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">That Hope should get Gina Rinehart to "get rid of" Adam Watson</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">That Hope should hook up with Bodie so Adam Watson would get jealous</p></div>
                            </div>
                        </div>
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">The Pattern — Third-Party Allegations</div>
                            <div class="space-y-1.5">
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">DPP: sexual assault allegation to police against Adam — ruled malicious prosecution</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Services NSW: licence nominated for 12 speeding fines — Adam targeted</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Hope Rinehart: paedophile allegation made directly to a prominent third party</p></div>
                            </div>
                        </div>
                    </div>

                    <div class="border border-paper/[0.08] p-5" style="background:rgba(0,0,0,0.18)">
                        <div class="text-[0.44rem] tracking-[0.2em] uppercase text-paper/30 mb-2">Note on the Paedophile Allegation</div>
                        <p class="text-[0.63rem] text-paper/40 leading-relaxed">The allegation that Adam Watson is a paedophile is false. It is made by a person whose prior allegation against Adam Watson — a sexual assault claim — was dismissed as a malicious prosecution by the DPP on its first court mention, and whose arresting officer was subsequently fired. Making the same category of serious false allegation to a third party — one of Australia's most high-profile private individuals — is a continuation of the same pattern. It is defamatory. It is on the record.</p>
                    </div>
                </div>

                <!-- The original website — full PDF embed -->
                <div class="story-chapter reveal mt-8 mb-8" style="border-left-color:rgba(193,68,14,0.5)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#c1440e;border-color:rgba(193,68,14,0.4)">The Original Publication · "R J! Let There Be Light" · Full Screenshot Capture · August 2025</span>
                    </div>
                    <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">THE WEBSITE THAT TRIGGERED BODIE CHALMERS.<br><span class="text-hot">LEFT AT ADAM'S MOTHER'S FIREBOMBED HOUSE.</span></h3>

                    <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-4">This is the original publication — a predecessor to Sunlight.Quest — that circulated online before going offline. After its contents became widely known in Bodie Chalmers's social circle, his associates began teasing him about the section titled <strong class="text-paper/65">"Bodie Chalmers — The Loverboy That Claims He Was Touched."</strong> Bodie became so enraged by the ridicule that he organised the firebombing of Adam Watson's mother's house. Pages from this website were left at the crime scene by the perpetrators — a deliberate act designed to establish a link between this journalism and the violence.</p>

                    <!-- What the site actually contained -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
                        <div class="border border-paper/[0.08] p-4" style="background:rgba(0,0,0,0.15)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">The Trigger</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">The section titled <em>"The Loverboy That Claims He Was Touched"</em> documented Bodie Chalmers's pattern of false touching allegations. His associates teased him relentlessly about it. The ridicule drove the retaliation.</p>
                        </div>
                        <div class="border border-paper/[0.08] p-4" style="background:rgba(0,0,0,0.15)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold mb-2">The Irony</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">Bodie Chalmers's response to being documented was to commit arson. The perpetrators then left the very pages that upset him at the crime scene — compounding the evidence trail rather than erasing it.</p>
                        </div>
                        <div class="border border-paper/[0.08] p-4" style="background:rgba(0,0,0,0.15)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase" style="color:#7c6aaa">The Publication</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">The site covered RJ (police informant), Aaron Barker (QPS), Marc Barrow (QPS), Bodie Chalmers, Lauren Forbes (Sky News), and structural failures in QLD Police and the Gold Coast Council homeless response.</p>
                        </div>
                    </div>

                    <!-- Callout: specific Bodie section -->
                    <div class="border-l-4 pl-5 mb-6" style="border-color:#c1440e;background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                        <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-2">The Section That Set Him Off</div>
                        <p class="font-display text-xl tracking-wide leading-tight mb-2">BODIE CHALMERS — THE LOVERBOY THAT CLAIMS HE WAS TOUCHED</p>
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed">Published under the subheading <em>"Scheming, Inbred Closeted Plastic Gangster of the Gold Coast."</em> The section documented: armed burglary charges, DV assaults on Adam Watson, the failed lie detector test (1/100 — "Deceptive"), card fraud ($27,000 scammed from Adam), the false sexual assault allegation, the birth certificate setup trap, the knife plan intercepted by police, ASIC fraud (added himself as 50% shareholder via forged signature), and "That Toilet Video" sent to Hancock Prospecting. All documented. All now confirmed.</p>
                    </div>

                    <!-- Full PDF embed -->
                    <div class="border border-paper/[0.07] overflow-hidden mb-5" style="background:rgba(0,0,0,0.2)">
                        <div class="flex items-center justify-between px-4 py-2.5 border-b border-paper/[0.06]" style="background:rgba(0,0,0,0.3)">
                            <span class="text-[0.44rem] tracking-[0.2em] uppercase text-hot">Original Publication · Full Screenshot · "R J! Let There Be Light — Episode #1" · August 2025</span>
                            <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/screencapture-sunlight-quest-test-2025-08-09-13_00_06-compressed.pdf"
                               target="_blank" rel="noopener"
                               class="text-[0.44rem] tracking-[0.12em] uppercase border border-paper/20 text-paper/35 px-2 py-1 hover:border-hot/50 hover:text-hot transition-colors">
                                Open PDF ↗
                            </a>
                        </div>
                        <div style="height:780px">
                            <iframe
                                src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/screencapture-sunlight-quest-test-2025-08-09-13_00_06-compressed.pdf"
                                style="width:100%;height:100%;border:none;display:block"
                                title="Original publication — R J! Let There Be Light Episode 1 — Kosta Kondratenko"
                                loading="lazy">
                            </iframe>
                        </div>
                        <div class="px-4 py-3 border-t border-paper/[0.05]" style="background:rgba(0,0,0,0.2)">
                            <span class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/22">PDF · Screenshot capture · Original publication · August 2025 · 28 pages · This is the document left at the firebombing crime scene at Adam Watson's mother's home</span>
                        </div>
                    </div>

                    <!-- Evidence vault entry -->
                    <div class="evidence-vault border border-paper/[0.07] p-5" style="background:rgba(0,0,0,0.15)">
                        <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-4">Evidence — Original Publication</div>
                        <div class="ev-file ef-hot" onclick="openMV('pdf','ORIGINAL PUBLICATION — R J! LET THERE BE LIGHT (EPISODE 1)','Full screenshot capture of the original Kosta Kondratenko website — predecessor to Sunlight.Quest — as it existed in August 2025','PDF · 28 pages · Screenshot capture · Left at the firebombing crime scene at Adam Watson\'s mother\'s house','screencapture-sunlight-quest-test-2025-08-09-13_00_06-compressed.pdf','The original publication that preceded Sunlight.Quest — titled \"R J! Let There Be Light — Episode 1.\" Sections covered: RJ (police informant, paedophile ring allegations), Aaron Barker (QPS), Marc Barrow (QPS), Bodie Chalmers (\"The Loverboy That Claims He Was Touched\"), Lauren Forbes (Sky News), Gold Coast Council homeless policy. This is the document that Bodie Chalmers\'s associates teased him about — triggering the firebombing of Adam Watson\'s mother\'s home. Pages were deliberately left at the crime scene.','pdf-original-publication')">
                            <div class="ev-icon">📄</div>
                            <div class="ev-body">
                                <div class="ev-header">R J! Let There Be Light — Episode 1 · Original Publication · August 2025</div>
                                <div class="ev-name">screencapture-sunlight-quest-test-2025-08-09-13_00_06-compressed.pdf</div>
                                <div class="ev-desc">PDF · 28 pages · Full screenshot capture · Left at firebombing crime scene · Includes "Bodie Chalmers — The Loverboy That Claims He Was Touched" section</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bodie in jail — reinvention, tattoo removal -->
                <div id="bodie-reinvention" class="story-chapter reveal mt-8" style="border-left-color:rgba(124,106,170,0.4)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Bodie Chalmers — Custody · Reinvention</span>
                        <span class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/20 border border-paper/10 px-2 py-0.5">Tattoo Removal · Identity Reset · Reintegration</span>
                    </div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">ACTIVITIES IN JAIL.<br><span style="color:#7c6aaa">TATTOO REMOVAL. A NEW IDENTITY. A NEW BEGINNING.</span></h3>
                    <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"Bodie Chalmers is now in custody. He is participating in jail activities and, by all accounts, working toward a reinvention. He wants his tattoos removed — a physical erasure of the markers that come with a certain kind of life. He wants to come back different. That impulse is understandable. What it means for the people he harmed is a separate question."</p>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Bodie Chalmers is currently in custody. While there, he has been participating in in-custody programs and activities — the standard rehabilitative framework offered to people serving time. He is also seeking to have his tattoos removed. The motivation, as understood, is reinvention: to emerge from custody without the visible markers that identify him with the life he has led, and to re-enter the community as someone unrecognisable from who he was.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Tattoo removal as identity reset is not new. It is common among people exiting criminal networks — gang affiliations, insignia, names associated with criminal histories — where the markings on the body tell a story the person no longer wants told. The desire to shed that visible history is, at its core, human. The question is never whether someone should be allowed to change. The question is what that change looks like in practice, and whether the people left behind by the old version have any role in the new one.</p>

                    <div class="border p-5 mb-5" style="border-color:rgba(124,106,170,0.2);background:rgba(124,106,170,0.04)">
                        <div class="text-[0.46rem] tracking-[0.22em] uppercase mb-3" style="color:#7c6aaa">On Criminals Reinventing Themselves — A Genuine Tension</div>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Australia's criminal justice system is built — nominally, at least — on the premise of rehabilitation. The idea is that people can and should be reintegrated: that the community benefits more from someone functioning within it than from someone permanently excluded. Jail programs, education, trade training, tattoo removal subsidies in some states — all of it is designed around the belief that the person who comes out can be different from the person who went in.</p>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">That belief is worth holding. But reintegration is not automatic, and it is not the same as absolution. The person who returns to the community as a "new version" of themselves is still returning to a community where people remember the old version — and in some cases, are still living with its consequences. Adam Watson is still living with the consequences of Bodie Chalmers's conduct. The vehicles attack. The NAB direct debit fraud. The false sexual assault allegation — ruled a malicious prosecution — and the officer who accepted it, now fired. The Optus social engineering. The licence nominations. The contact with Hope Rinehart.</p>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed">Bodie removing his tattoos is not the same as those things being undone. The community that is being asked to welcome him back is the same community in which those things happened. Acceptance is earned incrementally, through conduct — not cosmetically, through ink removal. The activities in jail are a beginning. They are not, by themselves, a resolution.</p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                        <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.14)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-2">What Reinvention Looks Like</div>
                            <div class="space-y-1.5">
                                <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Participation in in-custody programs and activities</p></div>
                                <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Tattoo removal — erasing visible markers of the previous life</p></div>
                                <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">An intent to re-enter the community as a different person</p></div>
                            </div>
                        </div>
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">What Reinvention Does Not Erase</div>
                            <div class="space-y-1.5">
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">The people still living with the consequences of the old conduct</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">The court records, the DPP ruling, the Major Fraud Squad investigation</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">The obligation to make things right — which tattoo removal does not fulfil</p></div>
                            </div>
                        </div>
                    </div>

                    <div class="border-l-4 pl-5" style="border-color:rgba(124,106,170,0.5);background:rgba(124,106,170,0.04);padding:1rem 1rem 1rem 1.25rem">
                        <div class="text-[0.46rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">The Position of This Publication</div>
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed mb-2">Sunlight.Quest does not oppose rehabilitation. It supports it. What it opposes is the idea that the process of personal reinvention — however genuine — extinguishes the public record of what came before. The record here is not a punishment. It is documentation. The tattoos can come off. The court filings do not. The accounts that were closed at NAB and CBA stay closed. The DPP ruling stays on record. And the people Bodie Chalmers harmed continue to tell their story — because documentation is how accountability works when institutions close cases.</p>
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed">If the reinvention is real, it will show. That is the only measure that matters. And the community that receives him back will watch — because communities always watch, even when they say nothing.</p>
                    </div>
                </div>

                <div class="flex items-center gap-3 mt-10 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter B — False Allegations</span></div>

                <!-- Old website version photo -->
                <div class="reveal mb-8">
                    <div class="border border-paper/[0.07] overflow-hidden" style="background:rgba(0,0,0,0.18)">
                        <div class="px-4 py-2.5 border-b border-paper/[0.06]" style="background:rgba(0,0,0,0.25)">
                            <span class="text-[0.45rem] tracking-[0.2em] uppercase text-hot">The Old Version &nbsp;·&nbsp; Hope Island Property &nbsp;·&nbsp; Left at the Firebombing Crime Scene</span>
                        </div>
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bodie_chalmers/old_website_version.jpg" alt="Old version of the Sunlight.Quest website — left at the firebombing crime scene" class="w-full border-b border-paper/[0.06]" loading="lazy" />
                        <div class="p-5">
                            <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">THE HOPE ISLAND PROPERTY.<br><span class="text-hot">WHERE BODIE AND EBONY CAME. WHERE THE FALSE CHARGE WAS BORN.</span></h4>
                            <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">This is the Hope Island property where Adam Watson was staying — and where Bodie Chalmers and Ebony attended. It was in connection with this visit that Bodie Chalmers and Ebony made their statement to police alleging that Adam Watson had sexually assaulted Ebony. Adam Watson is gay. The allegation was false. It was ruled a malicious prosecution by the DPP on its first court mention. The officer who accepted and actioned the complaint was fired.</p>
                            <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">The laptop screen visible in this photograph shows an older version of this website — the version that was circulating before it went offline. This is also the version that pages of were deliberately left at the scene of the firebombing of the property connected to Gina Rinehart's personal circle, apparently to link this journalism to the arson.</p>
                            <div class="border border-gold/20 p-4 mb-4" style="background:rgba(201,138,16,0.04)">
                                <div class="text-[0.45rem] tracking-[0.2em] uppercase text-gold mb-2">Emma Jennings — Total Property Group &nbsp;·&nbsp; Jewel Apartments &nbsp;·&nbsp; On the Laptop Screen</div>
                                <p class="text-[0.62rem] text-paper/45 leading-relaxed">The old website version visible on the laptop screen in this photograph includes content referencing <strong class="text-paper/65">Emma Jennings</strong> of <strong class="text-paper/65">Total Property Group</strong> — the real estate agency that handles sales of the <strong class="text-paper/65">Jewel Apartments</strong>. Hancock Prospecting sent a cease and desist letter to Emma Jennings after her persistent pestering in connection with those apartments. Emma Jennings was also involved with Bodie Chalmers in a scam against Adam Watson — a connection that was documented in the old version of this publication and is part of the broader pattern of conduct recorded here.</p>
                            </div>
                            <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.14)">
                                <div class="text-[0.45rem] tracking-[0.2em] uppercase text-paper/30 mb-2">The Old Version — Status &amp; Recovery</div>
                                <p class="text-[0.62rem] text-paper/40 leading-relaxed">The old version of this website went offline and no backup was retained. Pages from that version were left at the firebombing crime scene. A formal request is being made for the full version of that website as it existed at the crime scene — the copy held as part of the arson investigation. Once obtained, it will be uploaded and published here in full.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">DPP RULING.<br><span class="text-hot">OFFICER FIRED.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"A criminal charge does not require truth. It requires a complainant, a police officer who believes them, and a system that moves faster than the facts."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Bodie Chalmers, together with his accomplice Ebony, gave a police statement alleging sexual assault against Adam Watson. A corrupt officer accepted and actioned the complaint. At the first court mention, the Director of Public Prosecutions ruled it a malicious prosecution. The charge was dismissed. The officer was subsequently fired.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-8">
                    <div class="border p-5" style="border-color:rgba(193,68,14,0.3);background:rgba(193,68,14,0.03)"><div class="font-display text-xl text-hot mb-1">DPP RULING</div><div class="text-[0.6rem] tracking-[0.15em] uppercase text-hot/60 mb-3">Malicious Prosecution</div><p class="text-[0.65rem] text-paper/40 leading-relaxed">The DPP assessed the charge at first mention and ruled the prosecution malicious. Charge dismissed. Bodie Chalmers and Ebony's statement was the basis for the charge.</p></div>
                    <div class="border p-5" style="border-color:rgba(193,68,14,0.3);background:rgba(193,68,14,0.03)"><div class="font-display text-xl text-hot mb-1">OFFICER FIRED</div><div class="text-[0.6rem] tracking-[0.15em] uppercase text-hot/60 mb-3">Confirmed Outcome</div><p class="text-[0.65rem] text-paper/40 leading-relaxed">The QPS officer who accepted and actioned the false complaint from Bodie Chalmers and Ebony was subsequently dismissed from the service.</p></div>
                </div>

                <!-- Prosecutor Integrity — "Malicious Prosecution" on the record -->
                <div class="border border-sage/30 p-5 mb-8" style="background:rgba(61,122,74,0.05)">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-[0.48rem] tracking-[0.2em] uppercase text-sage">QLD Police Prosecutor — Integrity on the Record</span>
                        <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-sage/40 text-sage/70 px-1.5 py-0.5">STATED IN COURT</span>
                    </div>
                    <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">"YOUR HONOUR, I AM WILLING TO STATE THAT THIS IS MALICIOUS PROSECUTION."<br><span class="text-sage">A QLD POLICE PROSECUTOR. ON THE RECORD. THEN BULLIED OUT OF THE JOB.</span></h4>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">A Queensland Police prosecutor — standing at the bar table — stated on the court record: <em class="text-paper/70">"Your Honour, I'm willing to state that this is malicious prosecution."</em> This is an extraordinary act. A member of the Queensland Police Service, in open court, voluntarily characterising a fellow officer's conduct as malicious prosecution. Prosecutors do not say this lightly. It is not a routine submission. It is the kind of statement that defines a career — and in this case, it did.</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">For standing up for what was right, she was ruthlessly bullied by members of the Queensland Police Service. The institutional response to her integrity was not commendation. It was sustained internal pressure. She subsequently left Queensland Police and entered private practice.</p>
                    <div class="border-l-4 border-sage/50 pl-4 mb-4" style="background:rgba(61,122,74,0.06);padding:0.85rem 1rem 0.85rem 1.25rem">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-sage mb-2">Sunlight.Quest — On Record</div>
                        <p class="text-[0.65rem] text-paper/55 leading-relaxed">Sunlight.Quest commends her for standing up for what was right. Her statement — made in open court, in the face of institutional pressure — is the kind of conduct that a justice system depends on and rarely rewards. We are in the process of identifying who she is and intend to feature her properly. She deserves to be on the record for what she did.</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <div class="border border-sage/15 p-3" style="background:rgba(61,122,74,0.03)">
                            <div class="text-[0.43rem] tracking-[0.15em] uppercase text-sage mb-1.5">What She Said</div>
                            <p class="text-[0.58rem] text-paper/45 leading-relaxed italic">"Your Honour, I'm willing to state that this is malicious prosecution."</p>
                        </div>
                        <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">What Happened to Her</div>
                            <p class="text-[0.58rem] text-paper/45 leading-relaxed">Bullied by QLD Police members for speaking the truth. Left the service. Now in private practice.</p>
                        </div>
                        <div class="border border-sage/15 p-3" style="background:rgba(61,122,74,0.03)">
                            <div class="text-[0.43rem] tracking-[0.15em] uppercase text-sage mb-1.5">Sunlight.Quest</div>
                            <p class="text-[0.58rem] text-paper/45 leading-relaxed">Commends her integrity. Identification in progress. Will be featured in full when confirmed.</p>
                        </div>
                    </div>
                </div>

                <!-- Criminal Injuries Compensation Loophole -->
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE CHARGE WAS FAKE.<br><span class="text-hot">THE $165,000 WAS REAL.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"The DPP called it malicious prosecution. The officer was fired. And Bodie Chalmers walked out of the courthouse, saw Adam Watson, and laughed at him. Then he claimed $165,000 in Criminal Injuries Compensation — for a crime that never happened."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Queensland's Criminal Injuries Compensation scheme contains a systemic loophole: a person can claim compensation for an alleged crime even where no conviction has been recorded — and even where the prosecution was ruled malicious. There is no requirement that the accused be found guilty, or that the charge survive its first court appearance. The scheme takes the complainant's word for it. Bodie Chalmers exploited this gap to claim $165,000 in compensation for an assault the DPP said never happened in the way alleged.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">When Bodie Chalmers saw Adam Watson outside the courthouse following the dismissal of the charge, he mocked him. The compensation claim was either already in progress or filed shortly after. The system that was supposed to protect victims of crime was used as a weapon against the person it falsely accused.</p>

                <div class="border border-hot/20 p-6 mb-6" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">The Loophole — How It Works</div>
                    <div class="space-y-2.5 mb-4">
                        <div class="flex gap-3 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><span class="text-[0.65rem] text-paper/45">A person makes a complaint of a serious offence to Queensland Police.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><span class="text-[0.65rem] text-paper/45">A charge is laid. The accused is taken to court.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><span class="text-[0.65rem] text-paper/45">The DPP dismisses the charge — even ruling it a malicious prosecution.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><span class="text-[0.65rem] text-paper/45">The complainant applies for Criminal Injuries Compensation. No conviction is required. No finding against the accused is required. The scheme pays out.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><span class="text-[0.65rem] text-paper/45">Bodie Chalmers received <span class="text-hot font-display tracking-wide">$165,000</span>.</span></div>
                    </div>
                    <p class="text-[0.62rem] text-paper/32 leading-relaxed italic border-l-2 border-hot/25 pl-3">This is not a legal technicality. It is a structural failure that allows false complainants to profit from the criminal justice system at the expense of the people they falsely accused.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-8">
                    <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Compensation Paid</div>
                        <div class="font-display text-3xl text-hot mb-2">$165,000</div>
                        <p class="text-[0.62rem] text-paper/40 leading-relaxed">Claimed by Bodie Chalmers under Queensland's Criminal Injuries Compensation scheme — for a charge the DPP ruled malicious prosecution at first mention.</p>
                    </div>
                    <div class="border border-sage/20 p-5" style="background:rgba(61,122,74,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-1">Reform Underway</div>
                        <div class="font-display text-xl text-sage mb-2">AG DEB FRECKLINGTON</div>
                        <p class="text-[0.62rem] text-paper/40 leading-relaxed">Attorney General Deb Frecklington is actively working to close the loophole that allows Criminal Injuries Compensation claims where no conviction has been recorded against the accused.</p>
                    </div>
                </div>

                <div class="border border-sage/20 p-6 mb-10" style="background:rgba(61,122,74,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-3">The Reform — What Frecklington Is Fixing</div>
                    <p class="text-[0.68rem] text-paper/42 leading-relaxed mb-3">Attorney General Deb Frecklington has identified the systemic gap in the Criminal Injuries Compensation Act that allows claimants to receive compensation in circumstances where no conviction has been recorded — including cases where the DPP has declined to proceed or ruled the prosecution malicious. The reform would require that compensation claims be assessed against the actual outcome of court proceedings, not merely the allegation.</p>
                    <p class="text-[0.68rem] text-paper/42 leading-relaxed mb-3">Adam Watson's case is a concrete example of why this reform is needed. A person who was the subject of a false complaint — ruled malicious by the DPP, with the officer who filed it subsequently dismissed — watched his accuser receive $165,000 from the public purse. The reform, if passed, would prevent this outcome from being repeated.</p>
                    <p class="text-[0.68rem] text-paper/42 leading-relaxed">Despite Frecklington's reform efforts, Adam Watson is still being actively pursued by the DPP in relation to the Criminal Injuries Compensation claim — meaning the very case that exposed the loophole is the one the state continues to press forward on. The reform has not been applied retrospectively. Adam remains subject to proceedings arising from a charge the DPP itself ruled as malicious prosecution.</p>
                </div>
                <div class="border-l-4 border-hot/50 pl-5 mb-10" style="background:rgba(193,68,14,0.04);padding:1.25rem 1.25rem 1.25rem 1.5rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Still Ongoing</div>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed">The Attorney General is reforming the law that made this possible. The DPP is simultaneously using that same law to pursue the victim of it. Both things are true at the same time.</p>
                </div>

                <!-- Unsolicited image / DPP comment / Grooming allegation rebuttal -->
                <div class="border-l-4 pl-5 mb-10" style="border-color:rgba(124,106,170,0.5);background:rgba(124,106,170,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">Unsolicited Image — Shown to DPP Prior to First Mention</div>
                    <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">BODIE CHALMERS SENT AN UNSOLICITED EXPLICIT IMAGE TO ADAM WATSON.<br><span style="color:#7c6aaa">"THAT SAYS IT ALL. THIS IS UNWINNABLE." — DPP</span></h4>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">Prior to the first court mention of his case, Bodie Chalmers sent Adam Watson an <strong class="text-paper/60">unsolicited explicit image</strong> — an unsolicited photograph of his genitals. Adam Watson presented this to the Director of Public Prosecutions. The DPP's response was immediate and unambiguous: <span class="font-display text-paper/70">"That says it all. This is unwinnable."</span> It is one of the factors that informed the DPP's assessment that the prosecution was malicious.</p>

                    <!-- Grooming allegation — rebuttal -->
                    <div class="border border-hot/20 p-4 mb-0" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">False Allegation — "Adam Groomed Bodie at Age 17"</div>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Bodie Chalmers's mother has stated that Adam Watson knew Bodie when he was 17 years old and groomed him. <strong class="text-paper/60">This narrative is false.</strong></p>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Call records will establish that Adam Watson was not in the Gold Coast and had no phone interactions with Bodie Chalmers during the period when Bodie was 17. Metadata will prove this conclusively should the allegation ever progress to that point.</p>
                        <div class="border border-paper/[0.07] p-3" style="background:rgba(0,0,0,0.12)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/25 mb-2">Current Status</div>
                            <p class="text-[0.62rem] text-paper/38 leading-relaxed">There are <strong class="text-paper/52">no open investigations against Adam Watson</strong> in relation to this allegation. The claim originates from Bodie Chalmers's mother and is consistent with the broader pattern of false allegations — including the one already ruled a malicious prosecution — being deployed to attach criminal character to Adam Watson where none exists.</p>
                        </div>
                    </div>

                    <!-- Centrelink DV Payment — Bodie + Amanda Chalmers -->
                    <div class="border border-hot/35 p-5" style="background:rgba(193,68,14,0.06)">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">Centrelink — Domestic Violence Payment · Bodie Chalmers &amp; Amanda Chalmers</span>
                            <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-hot/40 text-hot/70 px-1.5 py-0.5">AFP REFERRAL</span>
                        </div>
                        <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">BODIE CHALMERS AND HIS MOTHER WENT TO CENTRELINK.<br><span class="text-hot">DOMESTIC VIOLENCE PAYMENT. FALSE STATEMENTS. REFERRED TO THE AFP.</span></h4>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">Bodie Chalmers and his mother <strong class="text-paper/70">Amanda Chalmers</strong> attended Centrelink and made statements against Adam Watson for the purpose of obtaining a domestic violence payment. The statements they made are the basis for those claims. This matter has been referred to the <strong class="text-paper/70">Australian Federal Police</strong>. Adam Watson is prepared for this court case and is ready to contest it.</p>

                        <!-- AFP Subpoenas — transcript + phone records -->
                        <div class="border border-hot/30 p-5 mb-5" style="background:rgba(193,68,14,0.06)">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-[0.46rem] tracking-[0.2em] uppercase text-hot">AFP Action — Subpoenas Issued</span>
                                <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-hot/40 text-hot/70 px-1.5 py-0.5">EXECUTED</span>
                            </div>
                            <h5 class="font-display text-lg tracking-wide mb-3 leading-tight">THE AFP HAS SUBPOENAED THE TRANSCRIPT.<br><span class="text-hot">AND THE PHONE RECORDS. BECAUSE BODIE CLAIMED THEY WERE IN A RELATIONSHIP FOR A YEAR.</span></h5>
                            <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">The Australian Federal Police have already subpoenaed the transcript of the sexual assault court mention — the hearing at which Queensland Police's own prosecutor dropped the charge on first mention, describing it as a clear malicious prosecution. The AFP has also subpoenaed the phone records of both Bodie Chalmers and Adam Watson.</p>
                            <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">The reason: in the Centrelink papers, Bodie Chalmers made the claim that he had been in a relationship with Adam Watson for a full year. The phone records will prove they were not even talking during that period. There was no relationship. The phone records will establish the complete absence of contact — directly contradicting the claim Bodie Chalmers made to Centrelink to obtain a domestic violence payment.</p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                    <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">Subpoena #1 — Court Transcript</div>
                                    <p class="text-[0.58rem] text-paper/45 leading-relaxed">The AFP has subpoenaed the transcript of the sexual assault court mention — the hearing at which QLD Police's own prosecutor dropped the charge, stating it was very clearly malicious prosecution.</p>
                                </div>
                                <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                    <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">Subpoena #2 — Phone Records</div>
                                    <p class="text-[0.58rem] text-paper/45 leading-relaxed">Phone records for both parties have been subpoenaed. Bodie Chalmers claimed a year-long relationship in his Centrelink application. The records will show they had no contact during that period.</p>
                                </div>
                            </div>
                            <div class="border-l-2 border-hot/40 pl-3 py-1.5 mt-4" style="background:rgba(193,68,14,0.04)">
                                <p class="text-[0.6rem] text-paper/42 leading-relaxed italic">A false claim made to a government agency to obtain a financial payment — supported by a fabricated relationship timeline — is fraud. The phone records will speak for themselves.</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">Who Attended</div>
                                <p class="text-[0.58rem] text-paper/45 leading-relaxed">Bodie Chalmers and his mother Amanda Chalmers. Statements made against Adam Watson for the purposes of a domestic violence payment.</p>
                            </div>
                            <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">AFP Referral</div>
                                <p class="text-[0.58rem] text-paper/45 leading-relaxed">This matter has been referred to the Australian Federal Police. It is an active matter with federal jurisdiction.</p>
                            </div>
                            <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">Adam Watson's Position</div>
                                <p class="text-[0.58rem] text-paper/45 leading-relaxed">Adam Watson is ready for this court case and is prepared to contest every element of the claims made against him.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- EMF Robina / QP-9 Gym Attack -->
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE QP-9 GOES TO THE GYM.<br><span class="text-hot">EMF PERFORMANCE CENTRE — ROBINA TOWN CENTRE. THE CHANGEROOM ATTACK.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Bodie Chalmers got hold of the QP-9 — the police charge sheet for the sexual assault that the malicious officer had placed on Adam Watson. Queensland Police did not want to confirm how he obtained it. He walked into EMF Performance Centre at Robina Town Centre, the gym Adam trains at, handed the charge sheet to the front counter, and told staff he had been raped. The gym banned Adam Watson on the spot."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">A QP-9 is not a public document. It is an internal Queensland Police charge sheet. That Bodie Chalmers was in possession of one — specifically the charge sheet relating to Adam Watson — raises the same question as the Sky News QP-9 disclosure: who in Queensland Police gave it to him, and why. Queensland Police declined to confirm the source when the matter was raised.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">EMF Performance Centre at Robina Town Centre banned Adam Watson based on the charge sheet. The ban stood. Adam was still being charged membership fees despite being barred from entering the premises. He kept making the payments — traumatised, excluded, paying for a facility he could not access because Bodie Chalmers had weaponised a police document to have him removed.</p>

                <div class="border border-hot/20 p-5 mb-6" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-4">The Changeroom Attack — Sequence of Events</div>
                    <div class="space-y-2.5">
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Step 01</span><span class="text-[0.65rem] text-paper/45">Bodie Chalmers circulates the rumour — through his network — that Adam Watson raped him. The charge sheet is used as the basis for the claim.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Step 02</span><span class="text-[0.65rem] text-paper/45">Five associates of Bodie Chalmers — who had heard the rumour — confront Adam Watson in the change rooms at EMF Performance Centre, Robina Town Centre.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Step 03</span><span class="text-[0.65rem] text-paper/45">They assault Adam — holding him down and punching him.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-gold/70 w-28 shrink-0 pt-0.5">Intervenes</span><span class="text-[0.65rem] text-paper/45">An elderly man enters the change rooms, sees what is happening, and physically pulls the attackers off Adam Watson.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Step 04</span><span class="text-[0.65rem] text-paper/45">Police are called. Two of the five attackers are charged. The elderly man who intervened to stop the assault is also charged.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">The Comment</span><span class="text-[0.65rem] text-paper/45">The attending officer makes a comment that Adam Watson — by helping Kosta Kondratenko with the Crime and Corruption Commission report — had "ruined" the officer's colleague's life, and that they would therefore be charging the old man.</span></div>
                    </div>
                </div>

                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">The police officer's comment at the scene directly connects the charging of the elderly man who intervened — the person who stopped the attack — to retribution for the CCC report filed against a corrupt officer. An old man who did the right thing in a change room was charged because Adam Watson had helped expose police corruption. That is the logic of a system that has ceased to operate as a justice system.</p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
                    <div class="bg-ink px-5 py-5 text-center border border-paper/[0.06]">
                        <div class="stat-number text-4xl text-hot mb-1">5</div>
                        <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Attackers</div>
                        <div class="text-[0.5rem] text-paper/18 mt-1">Change rooms — EMF Robina Town Centre</div>
                    </div>
                    <div class="bg-ink px-5 py-5 text-center border border-paper/[0.06]">
                        <div class="stat-number text-4xl text-gold mb-1">2</div>
                        <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Attackers charged</div>
                        <div class="text-[0.5rem] text-paper/18 mt-1">Of the five who assaulted Adam</div>
                    </div>
                    <div class="bg-ink px-5 py-5 text-center border border-paper/[0.06]">
                        <div class="stat-number text-4xl text-hot mb-1">1</div>
                        <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Old man charged</div>
                        <div class="text-[0.5rem] text-paper/18 mt-1">For stopping the attack</div>
                    </div>
                </div>

                <!-- Robina Town Centre manager disclosure -->
                <div class="border border-gold/25 p-5 mb-6" style="background:rgba(201,138,16,0.04)">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="text-[0.46rem] tracking-[0.2em] uppercase text-gold">Disclosed by the EMF Manager · Robina Town Centre</span>
                    </div>
                    <h4 class="font-display text-xl tracking-wide mb-4 leading-tight">THE SHOPPING CENTRE CALLED THE GYM.<br><span class="text-gold">"PURSUE ACTION AGAINST THOSE BOYS AND YOUR LEASE IS TERMINATED."</span></h4>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">After the assault on Adam Watson in the EMF Performance Centre change rooms, the centre manager of Robina Town Centre contacted the manager of EMF Performance Centre directly. The message was unambiguous: if EMF pursued any action against the young men who carried out the assault on Adam Watson inside their facility, the lease for EMF Performance Centre at Robina Town Centre would be terminated.</p>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">The EMF manager informed Adam Watson of this conversation. Adam thanks him for doing so. What the centre manager of Robina Town Centre communicated — an explicit threat to the commercial tenancy of a gym in exchange for inaction over a violent assault on a member of the public on their premises — is not a private matter. It is the shopping centre intervening to protect the attackers from consequences.</p>
                    <div class="border-l-2 border-gold/40 pl-3 py-1.5" style="background:rgba(201,138,16,0.04)">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold mb-1">What This Means</div>
                        <p class="text-[0.6rem] text-paper/42 leading-relaxed">A shopping centre used its leverage over a commercial tenant to suppress accountability for a violent assault that occurred inside that tenant's premises. The gym manager, to his credit, chose to disclose the call rather than comply in silence. That disclosure is now part of the documented record of this event.</p>
                    </div>
                </div>

                <!-- Civil action and counter-claim -->
                <div class="border border-paper/[0.07] p-6 mb-6">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-4">Civil Action — What Adam Watson Is Pursuing</div>
                    <div class="space-y-4">
                        <div class="flex gap-3 items-start">
                            <span class="text-hot text-xs shrink-0 mt-0.5">→</span>
                            <div>
                                <div class="text-[0.62rem] text-paper/55 mb-0.5">EMF Performance Centre Robina — Counter-Claim $450,000</div>
                                <p class="text-[0.6rem] text-paper/35 leading-relaxed">EMF Performance Centre at Robina Town Centre accepted a non-public police charge sheet provided by Bodie Chalmers — a charge that was subsequently ruled a malicious prosecution and dismissed — and used it to ban Adam Watson from a facility he was actively paying for. Adam was excluded from the premises for the entire duration of the ban while membership fees continued to be charged to his account. He kept making the payments. He was traumatised by the assault that occurred on EMF's premises and has been experiencing nightmares as a direct result of what happened inside that change room. Adam Watson is pursuing a counter-claim of <strong class="text-paper/60">$450,000</strong> against EMF Performance Centre for trauma, recurring nightmares, and the ongoing charging of fees during a period of enforced exclusion caused by a document the gym should never have acted upon. This is the reason public liability insurance exists.</p>
                            </div>
                        </div>
                        <div class="flex gap-3 items-start">
                            <span class="text-hot text-xs shrink-0 mt-0.5">→</span>
                            <div>
                                <div class="text-[0.62rem] text-paper/55 mb-0.5">Father of One Attacker — Ford Dealership</div>
                                <p class="text-[0.6rem] text-paper/35 leading-relaxed">One of the two attackers who was charged is the son of the owner of a Ford dealership. Adam Watson is pursuing civil action against the father in connection with the attack carried out by his son — an attack that was predicated on a false rumour spread by Bodie Chalmers using a genuine police charge document he should never have had — a charge that Queensland Police's own prosecutor later dropped on first mention as a clear malicious prosecution.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- eCollect debt notice — the irony -->
                <div class="border border-hot/30 p-5 mb-6" style="background:rgba(193,68,14,0.04)">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="text-[0.46rem] tracking-[0.2em] uppercase text-hot">eCollect · Ref EMFIT2649 · 25 June 2026</span>
                        <span class="text-[0.42rem] tracking-[0.12em] uppercase border border-hot/30 text-hot px-2 py-0.5">Debt Collection Notice</span>
                    </div>
                    <h4 class="font-display text-xl tracking-wide mb-4 leading-tight">EMF SENT A DEBT COLLECTOR.<br><span class="text-hot">FOR $1,892.50. WHILE FACING A $450,000 COUNTER-CLAIM.</span></h4>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">On 25 June 2026, Adam Watson received a Balance Statement from eCollect — a debt collection agency acting on behalf of EMF Fitness — claiming <strong class="text-paper/65">$1,892.50</strong> in unpaid membership fees. Reference EMFIT2649. The email states the matter must be finalised immediately and threatens referral to lawyers EC Legal, with additional court filing fees, process serving charges, and solicitor's costs.</p>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-5">This is the gym that: accepted a non-public police charge sheet — a charge later dropped by Queensland Police's own prosecutor on first mention as a clear malicious prosecution — as grounds to ban their own paying member, allowed a violent group assault to occur on their premises, was telephoned by the Robina Town Centre manager with instructions not to pursue the attackers under threat of lease termination — and is now pursuing <strong class="text-paper/65">$1,892.50</strong> through a debt collection agency against the man they excluded. Adam Watson's counter-claim is <strong class="text-hot">$450,000</strong>.</p>

                    <!-- Image embed -->
                    <div class="border border-paper/[0.08]">
                        <div class="border-b border-paper/[0.07] px-4 py-2.5 flex items-center justify-between" style="background:rgba(0,0,0,0.25)">
                            <div class="flex items-center gap-3">
                                <span class="text-[0.44rem] text-hot">IMG</span>
                                <span class="text-[0.46rem] tracking-[0.18em] uppercase text-paper/55">eCollect Balance Statement · EMF Fitness · $1,892.50 · Ref EMFIT2649</span>
                            </div>
                            <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bodie_chalmers/balance_emf.jpg" target="_blank" class="text-[0.44rem] tracking-[0.12em] uppercase text-sage/60 hover:text-sage border border-sage/20 hover:border-sage/40 px-2 py-0.5 transition-colors">Open ↗</a>
                        </div>
                        <img
                            src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bodie_chalmers/balance_emf.jpg"
                            alt="eCollect balance statement — EMF Fitness claiming $1,892.50 from Adam Watson — ref EMFIT2649 — 25 June 2026"
                            class="w-full"
                            loading="lazy"
                        />
                    </div>
                </div>

                <div class="border-l-4 pl-6 py-1" style="border-color:rgba(193,68,14,0.4)">
                    <p class="text-[0.68rem] text-paper/40 leading-relaxed">The QP-9 charge sheet is a non-public police document. Its disclosure to Bodie Chalmers — who used it to have a man banned from a gym, spread a rape rumour through a network that resulted in a violent attack on EMF's own premises, and collect $165,000 in compensation — is the most concrete example in this investigation of what happens when internal police documents reach the wrong hands. The question of who disclosed it has not been answered.</p>
                </div>

                <!-- Robina KFC -->
                <div class="border-l-4 border-hot/40 pl-5 mt-6 mb-2" style="background:rgba(193,68,14,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Social Stigmatisation — Robina KFC</div>
                    <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">REFUSED SERVICE AT THE DRIVE-THROUGH.<br><span class="text-hot">BODIE CHALMERS'S RUMOURS REACH ROBINA KFC.</span></h4>

                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">A staff member working at the Robina KFC refused service to Adam Watson when he went through the drive-through in an Uber — the result of the malicious rumours Bodie Chalmers had been spreading. The Uber driver suggested they go inside to get food. An incident ensued.</p>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Adam Watson is currently working to identify the owner of the Robina KFC franchise with the intention of having the employee who refused him service terminated. The employee's decision to deny service based on unverified rumours from a known associate of the subject of a malicious prosecution finding is not a defensible position for a staff member to take.</p>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed">This is what social stigmatisation looks like in practice. A person who was the subject of a charge the DPP ruled malicious, who was never convicted, who has no finding against him — denied service at a fast food outlet because of rumours spread by the person whose false complaint produced the charge — the one the DPP ruled a malicious prosecution. This is what Bodie Chalmers and his accomplice Ebony's conduct costs people in daily life.</p>
                </div>

                <!-- Aaliyah — Broadbeach Library Carpark / Southport Police / Farshad Sarabi -->
                <div class="story-chapter reveal mt-6 mb-6" style="border-left-color:rgba(193,68,14,0.5)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Aaliyah · Bodie's Girlfriend · Southport Police · False Harassment Claim</span></div>
                    <h4 class="font-display text-xl tracking-wide mb-4 leading-tight">SHE YELLED "RUSSIAN!" AT KOSTA IN THE CARPARK.<br><span class="text-hot">AFTER BODIE WENT TO JAIL, SHE WENT TO THE POLICE.</span></h4>
                    <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"Aaliyah was there in the Broadbeach library carpark — and she yelled 'Russian!' at me, because I'm Russian. She also told Adam the police wouldn't believe me because I live in a tent, and that they were planning to frame me by leaving a knife at my tent. After Bodie went to jail, she walked into Southport Police Station and claimed she was being harassed. A female officer called Adam to say she was charging him with stalking and intimidation — and threatened to hold him in custody until trial. Then she called Bodie in Corrective Services."</p>

                    <!-- Aaliyah identification -->
                    <div class="flex gap-4 items-start mb-5 border border-paper/[0.07] p-3" style="background:rgba(0,0,0,0.18)">
                        <div class="shrink-0 border border-paper/10 overflow-hidden" style="width:110px;aspect-ratio:3/4">
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/IMG-20260623-WA0004.jpg" alt="Aaliyah — with Bodie Chalmers" class="w-full h-full object-cover object-top">
                        </div>
                        <div class="pt-1">
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-paper/30 mb-1">Identified — Bodie Chalmers's Girlfriend</div>
                            <div class="font-display text-xl tracking-wide text-paper/80 leading-tight mb-2">AALIYAH</div>
                            <p class="text-[0.6rem] text-paper/40 leading-relaxed">Bodie Chalmers's Russian girlfriend. Her father is Peter Demchenko, who attended the Broadbeach disability centre confrontation alongside Grason Andrew Kira and two QPS officers on their payroll. $38,000 was stolen from Aaliyah's bank account during Bodie's operation. Photographed here with Bodie Chalmers.</p>
                        </div>
                    </div>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Aaliyah — Bodie Chalmers's girlfriend — was present at the Broadbeach library carpark, where she yelled <em class="text-paper/65">"Russian!"</em> at <strong class="text-paper/65">Kosta Kondratenko</strong>, Sunlight.Quest's founder, who is Russian. After Bodie Chalmers was remanded into custody, Aaliyah attended <strong class="text-paper/65">Southport Police Station</strong> and made a complaint claiming she was being harassed by Adam Watson.</p>

                    <!-- The tent / knife frame comment -->
                    <div class="border border-hot/30 p-5 mb-5" style="background:rgba(193,68,14,0.05)">
                        <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-3">What Aaliyah Told Adam Watson</div>
                        <h5 class="font-display text-lg tracking-wide mb-3 leading-tight">"THE POLICE WON'T BELIEVE HIM — HE LIVES IN A TENT."<br><span class="text-hot">"WE'LL LEAVE A KNIFE AT HIS TENT."</span></h5>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Aaliyah told Adam Watson directly that the police would not believe Kosta Kondratenko because he lives in a tent — and that there was a plan to frame him by leaving a knife at his tent. The statement is two things at once: an admission that his homelessness was being treated as a tool to discredit him, and disclosure of an intention to plant evidence to manufacture a criminal allegation against him.</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed">A person's housing status is not a measure of their credibility. The plan to exploit it — and to go further by planting a weapon at the place he sleeps — is the same instrument documented throughout this investigation: where the truth will not produce a charge, fabricate the circumstances that will. That Aaliyah disclosed this to Adam Watson means it is now part of the record.</p>
                    </div>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">A female police officer called Adam Watson directly and informed him that Aaliyah was making a harassment complaint, that she was charging him with <strong class="text-paper/65">stalking and intimidation</strong>, and — in the same call — threatened that she would have him held in custody until his trial. That same female officer then called <strong class="text-paper/65">Bodie Chalmers in Corrective Services</strong> — who used the opportunity to make further allegations that he had been raped by Adam Watson.</p>

                    <!-- Custody threat callout -->
                    <div class="border border-hot/40 p-5 mb-5" style="background:rgba(193,68,14,0.07)">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">The Threat — Remand Until Trial</span>
                            <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-hot/40 text-hot/70 px-1.5 py-0.5">UNLAWFUL PRESSURE</span>
                        </div>
                        <h5 class="font-display text-lg tracking-wide mb-3 leading-tight">"I WILL HAVE YOU HELD IN CUSTODY UNTIL YOUR TRIAL."<br><span class="text-hot">SAID ON THE PHONE. BEFORE ANY CHARGE WAS LAID.</span></h5>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">The threat to hold Adam Watson in custody until trial — made during a phone call, before any charge had been formally laid — is not a statement of procedure. It is a threat. Remand in custody pending trial is a decision made by a court, not a promise a police officer makes on the phone to a person they are about to charge. The purpose of the statement was to cause fear and to pressure Adam Watson through the prospect of incarceration.</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">The charges: stalking and intimidation. The same officer who would make that determination had just been contacted by Aaliyah — whose partner is the man Bodie Chalmers, currently in Corrective Services, who the same officer called and who then made rape allegations from custody. The threat to remand Adam until trial is inseparable from this context: it is pressure applied by someone whose conduct in this matter is itself now the subject of legal proceedings.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">What the Threat Was</div>
                                <p class="text-[0.58rem] text-paper/45 leading-relaxed">Stalking and intimidation charges — and a direct statement that Adam Watson would be held in custody until trial. Made on a phone call. Before any charge was laid.</p>
                            </div>
                            <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">Why This Is Significant</div>
                                <p class="text-[0.58rem] text-paper/45 leading-relaxed">Remand is a judicial decision — not a police officer's to promise. The threat was made to cause fear and compliance. It is now part of the conduct that Farshad Sarabi is pursuing against QLD Police.</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-5">
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">Broadbeach Library Carpark</div>
                            <p class="text-[0.58rem] text-paper/45 leading-relaxed">Aaliyah yelled "Russian!" at Kosta Kondratenko — Sunlight.Quest's founder, who is Russian — in the carpark.</p>
                        </div>
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">Southport Police Station</div>
                            <p class="text-[0.58rem] text-paper/45 leading-relaxed">After Bodie went to jail, Aaliyah attended Southport Police Station claiming harassment. A female officer called Adam Watson to advise he would be charged.</p>
                        </div>
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">Call to Corrective Services</div>
                            <p class="text-[0.58rem] text-paper/45 leading-relaxed">The same female officer then called Bodie Chalmers in custody. He used the call to allege he had been raped by Adam Watson — allegations made from behind bars.</p>
                        </div>
                    </div>

                    <!-- Conduct callout -->
                    <div class="border-l-4 border-hot/60 pl-5 mb-5" style="background:rgba(193,68,14,0.06);padding:1rem 1rem 1rem 1.25rem">
                        <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">The Officer's Conduct</div>
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed mb-2">A police officer receiving a complaint is not ordinarily expected to threaten the subject of that complaint with remand until trial — before any charge is laid — and then contact the incarcerated partner of the complainant, providing information he used to make fresh allegations from custody. The sequence — Aaliyah's complaint, the officer's threat of remand, the stalking and intimidation charge warning, the call to Bodie in Corrective Services, and Bodie's fresh rape allegations — is a chain that a police officer's conduct drove at every step.</p>
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed">Adam Watson is engaging <strong class="text-paper/70">Farshad Sarabi</strong> as his lawyer to pursue a charge against police in relation to the conduct arising from Aaliyah's allegations, the remand threat, and the officer's subsequent actions.</p>
                    </div>

                    <!-- Farshad Sarabi -->
                    <div class="border border-gold/25 p-4" style="background:rgba(201,138,16,0.04)">
                        <div class="text-[0.44rem] tracking-[0.2em] uppercase text-gold mb-2">Legal Representation — Farshad Sarabi</div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div>
                                <div class="font-display text-base text-paper/70 mb-1">Farshad Sarabi</div>
                                <p class="text-[0.58rem] text-paper/40 leading-relaxed">Engaged by Adam Watson to pursue a charge against Queensland Police arising from the officer's conduct: the stalking and intimidation charge threat, the unlawful remand threat made before any charge was laid, and the subsequent call to Bodie Chalmers in Corrective Services.</p>
                            </div>
                            <div class="border border-gold/15 p-3" style="background:rgba(201,138,16,0.03)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-gold mb-1.5">Current Status</div>
                                <p class="text-[0.58rem] text-paper/40 leading-relaxed">Active. Adam Watson is pursuing this matter through legal channels with Farshad Sarabi as counsel.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NSW Police / Mental Health Act — the consequence of the Southport officer's call -->
                <div class="story-chapter reveal mt-6 mb-6" style="border-left-color:rgba(193,68,14,0.6)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Escalation · NSW Police · Mental Health Act · Prince of Wales Hospital</span></div>
                    <h4 class="font-display text-xl tracking-wide mb-4 leading-tight">THE SOUTHPORT OFFICER CALLED NSW POLICE.<br><span class="text-hot">ADAM WATSON WAS TAKEN TO PRINCE OF WALES HOSPITAL UNDER THE MENTAL HEALTH ACT.</span></h4>
                    <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"The QLD officer — unhappy with Adam's tone — called NSW Police. NSW Police visited him at home and took him under the Mental Health Act to Prince of Wales Hospital. No exit date was announced. He was still trying to send messages to Bodie Chalmers while in the ward. The officer told Aaliyah: 'Don't worry, he's locked up now.' RJ heard it from Aaliyah — and called Hancock Prospecting."</p>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Following the call in which the Southport QLD police officer threatened Adam Watson with stalking and intimidation charges and remand until trial, the officer — unhappy with Adam Watson's tone during that conversation — made a call to <strong class="text-paper/65">NSW Police</strong>. NSW Police attended Adam Watson's home address.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">He was taken under the <strong class="text-paper/65">Mental Health Act</strong> and transported to <strong class="text-paper/65">Prince of Wales Hospital</strong>, where he was placed in the Psychiatric Ward. No exit date was announced at the time of his admission. While incarcerated in the ward, Adam Watson was still attempting to send messages to Bodie Chalmers.</p>

                    <!-- Sequence -->
                    <div class="border border-hot/25 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-3">The Sequence — One Phone Call to the Next</div>
                        <div class="space-y-2">
                            <div class="grid grid-cols-[90px_1fr] gap-3 items-start">
                                <div class="text-[0.44rem] tracking-[0.12em] uppercase text-hot/60">Step 1</div>
                                <p class="text-[0.6rem] text-paper/50 leading-relaxed">Aaliyah attends Southport Police Station. Claims harassment. QLD female officer takes the complaint.</p>
                            </div>
                            <div class="grid grid-cols-[90px_1fr] gap-3 items-start">
                                <div class="text-[0.44rem] tracking-[0.12em] uppercase text-hot/60">Step 2</div>
                                <p class="text-[0.6rem] text-paper/50 leading-relaxed">Officer calls Adam Watson. Threatens stalking and intimidation charges. Threatens to hold him in custody until trial.</p>
                            </div>
                            <div class="grid grid-cols-[90px_1fr] gap-3 items-start">
                                <div class="text-[0.44rem] tracking-[0.12em] uppercase text-hot/60">Step 3</div>
                                <p class="text-[0.6rem] text-paper/50 leading-relaxed">Officer — unhappy with Adam Watson's tone — calls NSW Police. Refers the matter across state lines.</p>
                            </div>
                            <div class="grid grid-cols-[90px_1fr] gap-3 items-start">
                                <div class="text-[0.44rem] tracking-[0.12em] uppercase text-hot/60">Step 4</div>
                                <p class="text-[0.6rem] text-paper/50 leading-relaxed">NSW Police attend Adam Watson's home. He is taken under the Mental Health Act and transported to hospital.</p>
                            </div>
                            <div class="grid grid-cols-[90px_1fr] gap-3 items-start border-t border-hot/10 pt-2">
                                <div class="text-[0.44rem] tracking-[0.12em] uppercase text-hot/60">Outcome</div>
                                <p class="text-[0.6rem] text-paper/50 leading-relaxed">Placed in the Psychiatric Ward at Prince of Wales Hospital. No exit date announced. The officer tells Aaliyah: <em>"Don't worry, he's locked up now."</em> While detained, Adam Watson was still attempting to contact Bodie Chalmers.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Two callouts -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                        <div class="border border-hot/25 p-4" style="background:rgba(193,68,14,0.05)">
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">The Mental Health Act as a Tool</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">A QLD police officer disagreeing with a person's tone on a phone call and using that as the basis for a cross-state referral that results in involuntary psychiatric detention is not a welfare intervention. It is the use of a welfare mechanism as a punitive instrument — removing a person from their home and placing them in a locked ward with no announced exit date.</p>
                        </div>
                        <div class="border border-hot/25 p-4" style="background:rgba(193,68,14,0.05)">
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">Still Contacting Bodie from the Ward</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">While held in the Psychiatric Ward under the Mental Health Act, Adam Watson was still attempting to send messages to Bodie Chalmers — the man in Corrective Services whose allegations against Adam had contributed to the chain of events that led to this admission.</p>
                        </div>
                    </div>

                    <!-- "Don't worry he's locked up now" -->
                    <div class="border border-hot/40 p-5 mb-5" style="background:rgba(193,68,14,0.07)">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">The Officer's Words to Aaliyah</span>
                            <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-hot/40 text-hot/70 px-1.5 py-0.5">INFORMATION LEAK</span>
                        </div>
                        <p class="font-display text-xl text-hot mb-3 leading-tight">"DON'T WORRY. HE'S LOCKED UP NOW."</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">After Adam Watson was admitted to Prince of Wales Hospital, the police officer called Aaliyah and told her: <em class="text-paper/70">"Don't worry, he's locked up now."</em> This is not a welfare notification. It is a reassurance directed at the complainant — confirming that the person she complained about has been removed from the community and placed in a locked facility. It treats the psychiatric admission as a favourable outcome for Aaliyah, not as a medical intervention for Adam.</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed">Aaliyah then told RJ. RJ — who has a documented pattern of using information to cause institutional harm to Adam Watson — received confirmation from a police officer, via Aaliyah, that Adam Watson was locked in a psychiatric ward. He used that information immediately.</p>
                    </div>

                    <!-- RJ calls Hancock Prospecting -->
                    <div class="border border-hot/30 p-5 mb-5" style="background:rgba(193,68,14,0.05)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">RJ Calls Hancock Prospecting</div>
                        <h5 class="font-display text-lg tracking-wide mb-3 leading-tight">RJ HEARD IT FROM AALIYAH.<br><span class="text-hot">AND CALLED HANCOCK PROSPECTING TO TELL THEM ADAM IS IN THE PSYCH WARD.</span></h5>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">RJ — having been told by Aaliyah that Adam Watson was in the Psychiatric Ward at Prince of Wales Hospital — called <strong class="text-paper/65">Hancock Prospecting</strong> to inform them. The purpose was reputational damage: to use the fact of an involuntary psychiatric admission — initiated by a police officer's cross-state referral over a tone of voice — as a means of undermining Adam Watson's standing with Mrs. Rinehart's organisation.</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed">The chain is complete: police officer → Aaliyah → RJ → Hancock Prospecting. A psychiatric admission triggered by a tone-of-voice complaint was converted — within the same network — into a reputational weapon deployed against Adam Watson with one of the most significant corporate relationships in his life.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mt-4">
                            <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">Source of Information</div>
                                <p class="text-[0.58rem] text-paper/40 leading-relaxed">Police officer → Aaliyah ("Don't worry, he's locked up now") → RJ</p>
                            </div>
                            <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">Where RJ Deployed It</div>
                                <p class="text-[0.58rem] text-paper/40 leading-relaxed">Called Hancock Prospecting directly to disclose that Adam Watson was in a psychiatric ward.</p>
                            </div>
                            <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">The Intent</div>
                                <p class="text-[0.58rem] text-paper/40 leading-relaxed">Reputational destruction. Use a forced psychiatric admission as evidence of instability to an organisation with which Adam has a significant relationship.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Punitive psychiatry analysis -->
                    <div class="border border-paper/15 p-5 mb-5" style="background:rgba(0,0,0,0.18)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/35 mb-3">Punitive Psychiatry — How Police Play This</div>
                        <h5 class="font-display text-lg tracking-wide mb-3 leading-tight text-paper/70">THE MENTAL HEALTH ACT WAS DESIGNED TO PROTECT PEOPLE.<br><span class="text-paper/45">IT IS ALSO A MECHANISM FOR REMOVAL WITHOUT CHARGE.</span></h5>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Punitive psychiatry — the use of mental health legislation as a tool of social control rather than clinical intervention — has a documented history. In its most overt form it was used by Soviet authorities to silence dissidents. In its everyday form in Australia, it operates through the gap between police discretion and clinical review: an officer can initiate an involuntary psychiatric hold, the person is removed from their home, and the hospital then makes its own determination. The hold happens before any clinical assessment. Removal is the first step, not the last.</p>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">What happened here follows that pattern precisely. A QLD police officer — who had no mental health training, no clinical basis, and whose motivating factor was displeasure at a person's tone — made a cross-state referral that resulted in Adam Watson being removed from his home, transported to Prince of Wales Hospital, placed in a locked Psychiatric Ward, and held with no announced exit date. No charge. No finding. No clinical crisis. A phone call with the wrong tone.</p>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">The officer then told the complainant he was "locked up now" — treating the outcome as a resolution of Aaliyah's complaint rather than as a medical event. The information then moved through the network: Aaliyah to RJ, RJ to Hancock Prospecting. By the time Adam Watson was in a hospital bed, the fact of his admission was already being weaponised against him externally.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div class="border border-paper/10 p-3" style="background:rgba(245,234,212,0.02)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-paper/30 mb-1.5">What the MHA Is For</div>
                                <p class="text-[0.58rem] text-paper/38 leading-relaxed">Involuntary assessment when a person presents a risk to themselves or others — a clinical determination, made by qualified practitioners, based on observed behaviour and mental state.</p>
                            </div>
                            <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">What It Was Used For Here</div>
                                <p class="text-[0.58rem] text-paper/38 leading-relaxed">To remove a person from his home, at the request of a QLD police officer displeased with his tone, after a call in which that officer had threatened him with false charges and unlawful remand. The MHA was the mechanism. Removal was the goal.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Doctor's finding — clears Adam -->
                    <div class="border border-sage/30 p-5 mb-5" style="background:rgba(61,122,74,0.05)">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[0.48rem] tracking-[0.2em] uppercase text-sage">Doctor's Assessment — Prince of Wales Hospital</span>
                            <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-sage/40 text-sage/70 px-1.5 py-0.5">CLINICALLY CLEARED</span>
                        </div>
                        <h5 class="font-display text-lg tracking-wide mb-3 leading-tight">"THERE'S NOTHING WRONG WITH YOU."<br><span class="text-sage">THE DOCTOR CHECKED ADAM WATSON AND FOUND NO CLINICAL BASIS FOR HIS DETENTION.</span></h5>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">The doctor who assessed Adam Watson at Prince of Wales Hospital examined him and stated plainly: <em class="text-paper/70">"There's nothing wrong with you."</em> The clinical assessment — the one that actually matters, conducted by a qualified practitioner at the receiving hospital — found no basis for the involuntary admission. No mental health crisis. No risk to self or others. Nothing that would justify a hold under the Mental Health Act.</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed">That finding is the clearest possible evidence that what occurred was not a welfare intervention. It was a removal. A QLD police officer made a cross-state referral, Adam Watson was taken from his home and placed in a locked ward, and the hospital's own doctor found nothing wrong with him. Adam Watson's position is direct: <strong class="text-paper/65">this is a stitch-up. And the people behind it are in Southport Police.</strong></p>
                    </div>

                    <!-- Attempted call to Southport — no answer -->
                    <div class="border border-hot/25 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Attempt to Identify the Officer — Southport Police Station Did Not Answer</div>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Adam Watson attempted to call <strong class="text-paper/65">Southport Police Station</strong> to obtain the rank and serial number of the officer who accepted Aaliyah's complaint and made the cross-state referral under the Mental Health Act. <strong class="text-paper/65">No one answered.</strong></p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed">A person who has just been involuntarily admitted to a psychiatric ward — on the basis of a police officer's cross-state referral — attempting to identify that officer through the official channel, and receiving no answer, is not an administrative failure. It is a closed door. The rank and serial number of a police officer who uses the Mental Health Act as a removal mechanism should be obtainable. It was not.</p>
                    </div>

                    <!-- "Yes Bodie scammed you but Aaliyah wasn't involved" -->
                    <div class="border border-hot/35 p-5 mb-5" style="background:rgba(193,68,14,0.06)">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">The Officer's Comment — Exculpating Aaliyah</span>
                        </div>
                        <p class="font-display text-lg text-hot mb-3 leading-tight">"YES, BODIE SCAMMED YOU — BUT AALIYAH WASN'T INVOLVED."</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">During the call, the officer made a telling comment: she acknowledged that Bodie Chalmers had scammed Adam Watson, but drew a line at Aaliyah — asserting that Aaliyah was not involved. This is a position that does not survive scrutiny.</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">The assumption that a criminal's partner is uninvolved is a persistent and often incorrect framing. In practice, partners are frequently present, aware, and participating — sometimes directly, sometimes as an infrastructure of logistics and knowledge that makes the conduct possible. The officer accepted a binary that the evidence does not support.</p>
                        <div class="border-l-4 border-hot/50 pl-4 mb-4" style="background:rgba(193,68,14,0.05);padding:0.85rem 1rem 0.85rem 1.25rem">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">Aaliyah Was in the Car at Broadbeach</div>
                            <p class="text-[0.65rem] text-paper/55 leading-relaxed">Aaliyah was present in the car when Bodie Chalmers drove to Broadbeach to stalk and intimidate Adam Watson — and in the library carpark it was Aaliyah herself who yelled <em>"Russian!"</em> at Kosta Kondratenko, Sunlight.Quest's founder, who is Russian. She was not a bystander who happened to be there. She was in the vehicle, and she directed a slur at a person present. A partner who actively participates in a targeted intimidation campaign is not uninvolved — she is a participant in the conduct itself.</p>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">The Officer's Assumption</div>
                                <p class="text-[0.58rem] text-paper/45 leading-relaxed">Bodie was the criminal. Aaliyah, as his partner, is treated as a separate and uninvolved party whose complaint is taken at face value.</p>
                            </div>
                            <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">What the Evidence Shows</div>
                                <p class="text-[0.58rem] text-paper/45 leading-relaxed">Aaliyah was in the car during the Broadbeach stalking and intimidation incident. Her subsequent complaint — made after Bodie went to jail — fits a coordinated pattern, not an independent victim coming forward.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-l-4 border-hot/50 pl-5" style="background:rgba(193,68,14,0.06);padding:1rem 1rem 1rem 1.25rem">
                        <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">Part of the Conduct Farshad Sarabi Is Pursuing</div>
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed">The chain from Aaliyah's complaint — through the QLD officer's threats, the cross-state referral, the involuntary psychiatric admission at Prince of Wales Hospital, the doctor's finding of nothing clinically wrong, the unanswered call to identify the officer, the disclosure to Aaliyah that he was "locked up," and the subsequent leak to RJ weaponised at Hancock Prospecting — is part of the conduct that Adam Watson's lawyer Farshad Sarabi is pursuing against Queensland Police. A police officer's decision to refer a person interstate under the Mental Health Act because she did not like his tone, exculpate a criminal's partner who was present during a stalking incident, and then make the person's admission known to that partner's network — is not a discretion that exists without scrutiny.</p>
                    </div>
                </div>

                <!-- Tweed Heads pub incident -->
                <div class="border-l-4 border-hot/40 pl-5 mt-6 mb-2" style="background:rgba(193,68,14,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Tweed Heads — Pub Incident</div>
                    <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">BODIE FOLLOWS THE RUMOUR TO TWEED HEADS.<br><span class="text-hot">"YOU'RE FRIENDS WITH ADAM THE PAEDOPHILE."</span></h4>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Adam had friends in Coogee whose family had since moved to Tweed Heads. While at a pub in Tweed Heads, Bodie Chalmers recognised these individuals as associates of Adam Watson. He opened with: <span class="font-display text-paper/65">"You're friends with Adam the paedophile."</span> An altercation followed. The rumours Bodie had been spreading caused that altercation — the false label he was circulating is what triggered the confrontation.</p>
                    <!-- James McDonald -->
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4 mt-3">James McDonald — an associate of Bodie Chalmers — had his teeth knocked out during the altercation. Following the incident, both Bodie Chalmers and James McDonald went to police and provided statements against the person they had the altercation with. They snitched. Bodie Chalmers — who had instigated the incident by spreading false rumours — walked into a police station to give a statement against the person who responded to those rumours.</p>

                    <!-- James McDonald profile -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                        <div class="space-y-3">
                            <!-- Phone screenshot -->
                            <div class="border border-paper/[0.07] overflow-hidden" style="background:rgba(0,0,0,0.2)">
                                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/james_mcdonald.jpeg" alt="Screenshot from James McDonald's phone showing Bodie Chalmers as a contact" class="w-full object-cover" loading="lazy" />
                                <div class="px-3 py-2" style="border-top:1px solid rgba(245,234,212,0.06)">
                                    <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25">Screenshot · James McDonald's phone · Bodie Chalmers listed as "Bodieeeee" · Jun 13</div>
                                </div>
                            </div>
                            <!-- Drugs photo -->
                            <div class="border border-paper/[0.07] overflow-hidden" style="background:rgba(0,0,0,0.2)">
                                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/james_drugs.jpg" alt="James McDonald with narcotics" class="w-full object-cover" loading="lazy" />
                                <div class="px-3 py-2" style="border-top:1px solid rgba(245,234,212,0.06)">
                                    <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25">James McDonald · Narcotics · Documented</div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <!-- Housing commission / non-disclosure -->
                            <div class="border border-gold/25 p-4" style="background:rgba(201,138,16,0.04)">
                                <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold mb-2">Housing Commission — Non-Declaration</div>
                                <p class="text-[0.6rem] text-paper/45 leading-relaxed">James McDonald is living with his mother in housing commission and is not declaring it. Social housing is allocated and means-tested on the basis of declared income and circumstances. Failing to disclose who lives at a housing commission address — and the income of all occupants — is a breach of the conditions under which that housing is provided.</p>
                            </div>
                            <!-- Insurance fraud -->
                            <div class="border border-hot/25 p-4" style="background:rgba(193,68,14,0.04)">
                                <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">Insurance Fraud — $40,000</div>
                                <p class="text-[0.6rem] text-paper/45 leading-relaxed">McDonald defrauded an insurance company of <strong class="text-paper/60">$40,000</strong> by claiming he injured his hand. The claim was accepted and paid out. This is the same person now pursuing fraud against the courts by forging Adam Watson's signature on a legal document.</p>
                            </div>
                            <!-- Skateboard / traffic fraud -->
                            <div class="border border-hot/25 p-4" style="background:rgba(193,68,14,0.04)">
                                <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">Skateboard Scam — Driver Blamed</div>
                                <p class="text-[0.6rem] text-paper/45 leading-relaxed">McDonald was riding a skateboard and caused an accident. He claimed the driver was at fault. The insurer or court believed his account over the driver's. A person who defrauds insurers for hand injuries does not stop at one claim.</p>
                            </div>
                            <!-- Drug dealing -->
                            <div class="border border-hot/35 p-4" style="background:rgba(193,68,14,0.06)">
                                <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">Narcotics — Drug Dealing</div>
                                <p class="text-[0.6rem] text-paper/45 leading-relaxed">James McDonald sells narcotics. The photograph above documents this. He is collecting insurance payouts, living undeclared in housing commission, and dealing drugs — while using the courts and police to pursue a man whose teeth he helped knock out through a false rumour campaign.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border border-gold/20 p-4 mb-4" style="background:rgba(201,138,16,0.04)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">The Warrant Miss — Bodie Gets Away</div>
                        <p class="text-[0.62rem] text-paper/45 leading-relaxed">When Bodie Chalmers attended the police station and the arresting officer processed the incident, <strong class="text-paper/60">the officer did not check Bodie's outstanding warrants</strong>. Bodie had multiple warrants active at the time — meaning police were already looking for him in connection with other matters. A routine warrant check at the station would have seen him taken into custody on the spot. It did not happen. Bodie walked out. He was there voluntarily — snitching on the person who responded to his own false rumour campaign — and left without being detained for offences he was already wanted for.</p>
                    </div>

                    <!-- James McDonald — signature forgery / DPP referral -->
                    <div class="border border-hot/40 p-5 mb-4" style="background:rgba(193,68,14,0.07)">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">James McDonald — Document Fraud</span>
                            <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-hot/50 text-hot px-1.5 py-0.5 blink">⬤ DPP REFERRAL</span>
                        </div>
                        <h5 class="font-display text-lg tracking-wide mb-3 leading-tight">FORGED ADAM WATSON'S SIGNATURE ON A NOTICE OF DISCONTINUANCE.<br><span class="text-hot">REFERRED TO THE DIRECTOR OF PUBLIC PROSECUTIONS — UTTERING A DOCUMENT.</span></h5>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">After Adam Watson obtained a judgment against James McDonald in the Local Court, McDonald attempted to forge Adam Watson's signature on a <strong class="text-paper/65">Notice of Discontinuance</strong> — a legal document that, if accepted, would have extinguished Adam's judgment against him. He was attempting to use a fraudulent document to wipe a court debt that had been properly established against him.</p>
                        <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-4">This has been referred to the <strong class="text-paper/65">Director of Public Prosecutions</strong> for <strong class="text-paper/65">uttering a document</strong> — a serious criminal offence under Queensland law. Uttering a forged document is not a technical paperwork error. It is the deliberate use of a fraudulent document as genuine, with the intent to defraud. In the context of court proceedings, it is an attempt to pervert the course of justice.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-4">
                            <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">The Forgery</div>
                                <p class="text-[0.58rem] text-paper/42 leading-relaxed">Adam Watson's signature forged on a Notice of Discontinuance — a document that would have withdrawn his court judgment against James McDonald.</p>
                            </div>
                            <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">The Offence</div>
                                <p class="text-[0.58rem] text-paper/42 leading-relaxed">Uttering a forged document — presenting a fraudulent document as genuine to a court or legal proceeding. A criminal offence with a maximum sentence of <strong class="text-paper/58">7 years' imprisonment</strong> in Queensland.</p>
                            </div>
                            <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">Current Status</div>
                                <p class="text-[0.58rem] text-paper/42 leading-relaxed">Referred to the Director of Public Prosecutions. The matter is now with the DPP for determination of charges.</p>
                            </div>
                        </div>
                        <div class="border-l-2 border-hot/50 pl-3 py-1" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-1">Why This Is Serious</div>
                            <p class="text-[0.6rem] text-paper/45 leading-relaxed">Forging a signature on a court document — a Notice of Discontinuance — is not civil misconduct. It is a criminal act directed at the administration of justice. A person who goes to a police station to snitch after losing teeth in an altercation he helped cause, and then attempts to forge his way out of the resulting court debt, is following an entirely consistent pattern: using legal instruments as weapons when it suits, and fraudulently subverting them when it doesn't.</p>
                        </div>
                    </div>

                    <!-- Judgement Order — James McDonald -->
                    <div class="border border-paper/[0.07] overflow-hidden mb-4" style="background:rgba(0,0,0,0.2)">
                        <div class="flex items-center justify-between px-4 py-2.5 border-b border-paper/[0.06]" style="background:rgba(0,0,0,0.3)">
                            <span class="text-[0.44rem] tracking-[0.2em] uppercase text-hot">Judgement Order · Local Court · Debt Owed — James McDonald</span>
                            <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/james_mcdonald/judgement_order_james_mcdonald.jpeg" target="_blank" rel="noopener" class="text-[0.44rem] tracking-[0.12em] uppercase border border-paper/20 text-paper/35 px-2 py-1 hover:border-hot/50 hover:text-hot transition-colors">Open ↗</a>
                        </div>
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/james_mcdonald/judgement_order_james_mcdonald.jpeg" alt="Judgement Order — James McDonald — debt owed to Adam Watson — Local Court" class="w-full" loading="lazy" />
                        <div class="px-4 py-3 border-t border-paper/[0.05]" style="background:rgba(0,0,0,0.2)">
                            <span class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/22">Judgement Order · Local Court · James McDonald — debt owed to Adam Watson · Court-stamped</span>
                        </div>
                    </div>

                    <!-- $50K trust / process server / suicide threat -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-4">
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">Known Assets</div>
                            <div class="font-display text-3xl text-hot mb-1">$50K</div>
                            <p class="text-[0.58rem] text-paper/40 leading-relaxed">James McDonald has $50,000 held in a trust. Adam Watson is pursuing this as part of enforcement of the judgement.</p>
                        </div>
                        <div class="border border-paper/[0.08] p-4" style="background:rgba(12,8,4,0.4)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-2">Service of Documents</div>
                            <div class="font-display text-base text-paper/70 mb-1">PROCESS SERVER · $205</div>
                            <p class="text-[0.58rem] text-paper/38 leading-relaxed">McDonald told Adam that if he tries to serve documents at his house he'll hit him with a brick. Adam will engage a process server at $205 — a small price to avoid the issue entirely.</p>
                        </div>
                        <div class="border border-paper/[0.08] p-4" style="background:rgba(12,8,4,0.4)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-2">Suicide Threat</div>
                            <div class="font-display text-base text-paper/70 mb-1">NOT A DETERRENT</div>
                            <p class="text-[0.58rem] text-paper/38 leading-relaxed">James McDonald has threatened suicide. This has not deterred Adam Watson from pursuing enforcement of the judgement through the proper legal channels.</p>
                        </div>
                    </div>

                    <div class="border-l-2 border-hot/40 pl-3 py-1.5 mb-4" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-1">The Position</div>
                        <p class="text-[0.62rem] text-paper/42 leading-relaxed">A Judgement Order is not a request. Threatening to hit someone with a brick for serving legal documents is not a legal defence. Threatening self-harm does not extinguish a court-issued debt. The judgement stands, the $50,000 in trust is a known asset, and the enforcement proceeds — through a process server if necessary — regardless.</p>
                    </div>

                    <p class="text-[0.68rem] text-paper/45 leading-relaxed">Adam Watson is now assisting that person with legal representation arising from the charges that followed. The pattern is consistent: Bodie Chalmers instigates a situation using the false "paedophile" label he has been spreading, an altercation occurs, and he then uses the police to pursue the person who responded — while somehow avoiding the warrants that were outstanding in his own name. James McDonald goes further: he loses teeth, goes to police, then tries to forge his way out of the debt that followed.</p>
                </div>

                <!-- Joy ride / chest pain incident -->
                <div class="border-l-4 pl-5 mt-6 mb-2" style="border-color:rgba(124,106,170,0.5);background:rgba(124,106,170,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">Infidelity · Medical Emergency · Adam's Car</div>
                    <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">TOOK ADAM'S CAR FOR A JOY RIDE WITH GIRLS.<br><span style="color:#7c6aaa">ADAM COLLAPSED. AMBULANCE CALLED.</span></h4>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">Bodie Chalmers took Adam Watson's car without authorisation and used it to take a group of girls for a joy ride. He had no right to take the car. He had no right to bring other people into it. When Kosta was called to meet Adam Watson to follow this up, Adam began grabbing his chest and collapsed. An ambulance had to be called. First responders attended and treated Adam at the scene. He received medical attention and was soon fine — but what followed was the result of a confrontation that never should have happened, over conduct that had no justification.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <div>
                            <div class="border border-paper/[0.07] overflow-hidden" style="background:rgba(0,0,0,0.2)">
                                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/pslo/adam_chest_pain.jpg" alt="Adam Watson receiving medical treatment after collapsing — first responders attending with Mediquip equipment" class="w-full object-cover" loading="lazy" />
                                <div class="px-3 py-2" style="border-top:1px solid rgba(245,234,212,0.06)">
                                    <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/25">First responders attending Adam Watson after he collapsed · Mediquip emergency equipment on scene</div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.18)">
                                <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-2">What Bodie Did</div>
                                <div class="space-y-1.5">
                                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Took Adam Watson's car without permission</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Used the car to take girls for a joy ride — in Adam's vehicle, without Adam's knowledge or consent</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">No right to take the car. No right to bring passengers. No shame.</p></div>
                                </div>
                            </div>
                            <div class="border p-4" style="border-color:rgba(124,106,170,0.25);background:rgba(124,106,170,0.04)">
                                <div class="text-[0.44rem] tracking-[0.18em] uppercase mb-2" style="color:#7c6aaa">What Followed</div>
                                <div class="space-y-1.5">
                                    <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Kosta called to meet Adam to follow up on what had happened</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Adam began grabbing his chest and collapsed at the scene</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Ambulance called — first responders attended with emergency equipment</p></div>
                                    <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Adam received medical treatment and was soon fine</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-l-2 pl-3 py-1" style="border-color:rgba(124,106,170,0.4);background:rgba(124,106,170,0.03)">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase mb-1" style="color:#7c6aaa">The Pattern</div>
                        <p class="text-[0.62rem] text-paper/42 leading-relaxed">This incident is not isolated. It is consistent with a pattern of Bodie Chalmers cheating in an extremely blatant way — with absolutely no shame, and no consideration for the person he was in a relationship with. Taking a partner's car to ferry other girls around while they are unaware is not an oversight. It is the conduct of someone who does not recognise boundaries as applying to them. It is the same disposition that drove the coercive control, the tracking device, the lie detector, the false sexual assault allegation — the complete absence of accountability to anyone.</p>
                    </div>
                </div>

                <!-- Yakuza van / custody update -->
                <div class="border-l-4 border-hot/50 pl-5 mt-6 mb-2" style="background:rgba(193,68,14,0.05);padding:1.1rem 1rem 1.1rem 1.25rem">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">Current Status</span>
                        <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/50 text-hot px-1.5 py-0.5 blink">⬤ IN CUSTODY</span>
                    </div>
                    <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">96 CHARGES.<br><span class="text-hot">IN CUSTODY. INCLUDING FALSE ACCUSATIONS AGAINST ADAM WATSON.</span></h4>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Bodie Chalmers is currently in custody. He has been charged with 96 offences. Among those charges are the false accusations made against Adam Watson — the same pattern documented across this chapter, now formally before the courts. <strong class="text-paper/60">He is looking at 3 years in jail specifically for defrauding Adam Watson.</strong></p>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The last time Bodie made contact with Adam, he was begging for rent money while the drug money had dissipated. He had received a van from the Yakuza containing drugs with a street value in excess of <strong class="text-paper/65">$35 million</strong>, with instructions to move the product to the Albanian organised crime network. Instead, Bodie double-crossed the Yakuza — told them the van was stolen. He then called Adam Watson asking him to negotiate with the Yakuza on his behalf.</p>
                    <div class="border border-gold/20 p-4 mb-3" style="background:rgba(201,138,16,0.04)">
                        <div class="text-[0.44rem] tracking-[0.2em] uppercase text-gold mb-2">What Would Adam Actually Say to the Yakuza?</div>
                        <p class="text-[0.65rem] text-paper/48 leading-relaxed mb-2">Bodie Chalmers — having stolen $35 million worth of product from an organised crime network — called Adam Watson and asked him to be his intermediary. To negotiate on his behalf. With the Yakuza. Who had just been defrauded. Adam declined.</p>
                        <p class="text-[0.65rem] text-paper/45 leading-relaxed italic">"What exactly would Adam say? 'Hi, yes, the van wasn't actually stolen — my boyfriend took your $35 million in drugs and tried to resell them to the Albanian network. He's sorry. He'd like to keep the Louis Vuitton. Can you let this one slide?'" The call was declined.</p>
                    </div>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">When arrested, police found <strong class="text-paper/65">$30,000 worth of Louis Vuitton</strong> in the house. The rent had not been paid. Multiple outstanding warrants were active across jurisdictions while he was living in a $10,000-a-week house surrounded by designer goods.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-4 mb-1">
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Where the Money Went</div>
                            <div class="space-y-1.5">
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">$10,000/week house — paid one full year upfront. Rent later unpaid.</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">$30,000 Louis Vuitton found in the house on arrest</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Exotic cars — all seized</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">$38,000 stolen from Aaliyah's bank account</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">$45 million owed to drug dealers</p></div>
                            </div>
                        </div>
                        <div class="border border-hot/30 p-4" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Current Position — In Custody</div>
                            <div class="space-y-1.5">
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed"><strong class="text-paper/55">96 charges</strong> — including false accusations against Adam Watson</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">In custody — attempted to scam a woman into putting her house up as bail bond</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Bail refused given drug debt exposure and charge volume</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">ASIO warrants — new identity and early release not available</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed"><strong class="text-paper/55">New charge:</strong> using a telecommunications device in a corrective facility — phone confiscated</p></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Phone inside jail -->
                <div class="border border-hot/30 mt-6 mb-2 p-5" style="background:rgba(193,68,14,0.05)">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">Update — Corrective Services</span>
                        <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/50 text-hot px-1.5 py-0.5 blink">⬤ NEW CHARGE</span>
                    </div>
                    <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">CALLING FROM INSIDE.<br><span class="text-hot">PHONE CONFISCATED. NEW CHARGE LAID.</span></h4>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">While in custody, Bodie Chalmers obtained a mobile phone inside the corrective facility and used it to contact Adam Watson. The phone has since been confiscated by corrections officers. Bodie is now facing a charge of using a telecommunications device inside a corrective services facility — an offence under Queensland's corrective services legislation.</p>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">The contact was unsolicited. Adam Watson did not invite it. That a person facing 96 charges, in custody, with bail refused, chose to use a contraband phone to reach out to the person documenting his conduct against them — rather than to address any of the serious matters before the courts — speaks to the pattern of harassment that has characterised this entire chapter.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-1">The Device</div>
                            <div class="font-display text-base text-hot mb-1">CONTRABAND PHONE</div>
                            <p class="text-[0.6rem] text-paper/38 leading-relaxed">Mobile phone obtained inside the correctional facility. Now confiscated by corrections officers.</p>
                        </div>
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-1">The Contact</div>
                            <div class="font-display text-base text-hot mb-1">ADAM WATSON</div>
                            <p class="text-[0.6rem] text-paper/38 leading-relaxed">Unsolicited contact made to Adam Watson from inside custody. Not invited. Not responded to.</p>
                        </div>
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-1">The Charge</div>
                            <div class="font-display text-base text-hot mb-1">TELCO DEVICE — JAIL</div>
                            <p class="text-[0.6rem] text-paper/38 leading-relaxed">Charged with using a telecommunications device in a corrective services facility. Adds to 96 existing charges.</p>
                        </div>
                    </div>
                </div>

                <!-- Yakuza informant deal / EyeDetect credibility problem -->
                <div class="border border-gold/35 mt-6 mb-2 p-5" style="background:rgba(201,138,16,0.05)">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-[0.48rem] tracking-[0.2em] uppercase text-gold">Update — Proposed Cooperation Deal</span>
                        <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-gold/50 text-gold px-1.5 py-0.5 blink">⬤ CREDIBILITY PROBLEM</span>
                    </div>
                    <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">NOW HE WANTS TO TURN INFORMANT.<br><span class="text-gold">BUT HE SCORED 1 OUT OF 100 ON A CERTIFIED LIE DETECTOR.</span></h4>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">The latest development: Bodie Chalmers is now looking to cut a deal with police — to turn informant and give evidence against the Yakuza in exchange for leniency on his own 96 charges. Having double-crossed the organised crime network that fronted him the product, he is now seeking to trade his cooperation against them for his own benefit.</p>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">There is a fundamental problem with that plan, and it is one Bodie Chalmers created himself. On <strong class="text-paper/65">20 May 2025</strong>, Bodie Chalmers sat a certified <strong class="text-paper/65">EyeDetect®</strong> biometric lie detection examination and scored <strong class="text-gold">1 out of 100</strong> — rated "Deceptive" throughout the entire test by a qualified, certified examiner. That result is a documented, forensic record of his credibility as a witness.</p>
                    <div class="border border-gold/20 p-4 mb-4" style="background:rgba(201,138,16,0.04)">
                        <div class="text-[0.44rem] tracking-[0.2em] uppercase text-gold mb-2">Why This Unravels Any Prosecution Built On His Word</div>
                        <p class="text-[0.65rem] text-paper/48 leading-relaxed mb-2">A witness whose credibility is the prosecution's case must withstand cross-examination. A certified, scored deception result rated 1/100 is exactly the kind of material defence counsel exists to find. Once it is on the table, every conviction that rests on Bodie Chalmers's testimony becomes vulnerable to challenge.</p>
                        <p class="text-[0.65rem] text-paper/45 leading-relaxed italic">The man who built his life on lies cannot now be the witness who puts others away on his word. Anyone convicted on the strength of his testimony will have a clear avenue to have that conviction reopened — because the witness against them is a documented, certified 1-out-of-100.</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.03)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-gold mb-1">The Offer</div>
                            <div class="font-display text-base text-gold mb-1">TURN INFORMANT</div>
                            <p class="text-[0.6rem] text-paper/38 leading-relaxed">Looking to cut a deal with police — give evidence against the Yakuza in exchange for leniency on 96 charges.</p>
                        </div>
                        <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.03)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-gold mb-1">The Problem</div>
                            <div class="font-display text-base text-gold mb-1">SCORED 1/100</div>
                            <p class="text-[0.6rem] text-paper/38 leading-relaxed">Certified EyeDetect® examination, 20 May 2025 — rated "Deceptive" throughout. A forensic record of his unreliability as a witness.</p>
                        </div>
                        <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.03)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-gold mb-1">The Consequence</div>
                            <div class="font-display text-base text-gold mb-1">CONVICTIONS AT RISK</div>
                            <p class="text-[0.6rem] text-paper/38 leading-relaxed">Anyone convicted on his testimony gains a clear avenue to challenge that conviction — the witness is a documented 1/100.</p>
                        </div>
                    </div>
                    <div class="border-l-4 border-gold/60 pl-5 py-3 mt-5 mb-1" style="background:rgba(201,138,16,0.05)">
                        <div class="text-[0.44rem] tracking-[0.2em] uppercase text-gold mb-2">Why the Deal Is Dead on Arrival</div>
                        <p class="text-[0.66rem] text-paper/50 leading-relaxed mb-3">This is the part Bodie Chalmers cannot get around. He will <strong class="text-paper/70">want</strong> to snitch on the Yakuza — turning informant is his only realistic route to leniency on 96 charges. But the 1/100 result makes him useless as a witness. Any prosecution of the Yakuza built on his evidence would collapse under cross-examination, and every conviction obtained on his word would be <strong class="text-paper/70">worthless</strong> — open to challenge the moment the certified "Deceptive" result is produced in court.</p>
                        <p class="text-[0.66rem] text-paper/50 leading-relaxed mb-3">For that reason, <strong class="text-paper/70">Queensland Police and the Attorney-General, Deb Frecklington, could never accept such a deal.</strong> There is no point trading leniency for testimony that cannot stand up. A cooperating witness is only worth something if his word can secure a conviction — and Bodie Chalmers has, by his own examination, destroyed his own word. To the QPS he is now useless: he has nothing left to offer them.</p>
                        <p class="text-[0.66rem] text-paper/45 leading-relaxed italic">Observers have remarked that Adam Watson was <strong class="text-paper/65">very smart</strong> to get Bodie Chalmers to sit that test. In doing so, Adam locked in — on a certified, forensic record — the single fact that forecloses any future informant deal: a witness rated 1 out of 100 can never be the witness who puts the Yakuza away.</p>
                    </div>
                    <button onclick="openMV('pdf-bodie-lie')" class="mt-4 inline-flex items-center gap-2 text-[0.52rem] tracking-[0.18em] uppercase border border-gold/40 hover:border-gold hover:bg-gold/10 px-3 py-2 text-gold transition-all">⊕ View the EyeDetect® Examination — Scored 1/100</button>
                </div>

                <!-- Westpac complaint outcome — threat/penalty scam — Bodie named as recipient -->
                <div class="story-chapter reveal mt-8 border-l-4 border-hot/60 pl-5" style="background:rgba(193,68,14,0.05);padding:1.3rem 1rem 1.3rem 1.25rem">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Westpac Bank · Complaint CS144260094 · 24 June 2026</span>
                        <span class="text-[0.44rem] tracking-[0.15em] uppercase border border-paper/15 text-paper/30 px-2 py-0.5 blink">⬤ BANK CONFIRMED</span>
                    </div>
                    <h4 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">THREAT SCAM — FROM INSIDE CUSTODY.<br><span class="text-hot">WESTPAC CONFIRMED THE PAYMENTS WENT TO BODIE CHALMERS.</span></h4>
                    <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"On 1 April 2026 — while Bodie Chalmers was in custody — Adam Watson was threatened: pay money or information would be leaked about him. He became so distressed from the scam he was hospitalised and sedated. He paid. Westpac has now formally confirmed the payments went to B Chalmers and Bodie Chalmers."</p>

                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">On 1 April 2026, Adam Watson received a threat: pay money or information about him would be leaked. The threat was untrue. It was a threat/penalty scam — and it worked. Adam was so distressed by the experience that he was hospitalised and sedated for the trauma. He transferred the money. He closed his Westpac accounts out of fear that the extortion would continue. Closing those accounts cut off his Centrelink payments — preventing him from accessing funds for diabetic medication.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">Westpac investigated. Their finding, in the bank's own words: <strong class="text-paper/65">"We acknowledge that you are a victim in this matter."</strong> They cross-referenced the names, dates, times, and amounts Adam provided against their own records — and found the transactions. Every payment matched. Every payment went to the same recipient: <strong class="text-hot">B Chalmers. Bodie Chalmers.</strong></p>

                    <!-- Key findings grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
                        <div class="border border-hot/25 p-4" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">Total Confirmed by Westpac</div>
                            <div class="font-display text-4xl text-hot mb-1">$820</div>
                            <p class="text-[0.58rem] text-paper/38 leading-relaxed">6 separate transactions confirmed — all to B Chalmers / Bodie Chalmers</p>
                        </div>
                        <div class="border border-hot/25 p-4" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">Adam's Condition</div>
                            <div class="font-display text-base text-paper/75 mb-1">HOSPITALISED · SEDATED</div>
                            <p class="text-[0.58rem] text-paper/38 leading-relaxed">Adam became so distressed from the scam he was hospitalised and sedated for the trauma experienced</p>
                        </div>
                        <div class="border border-hot/25 p-4" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">Centrelink Cut Off</div>
                            <div class="font-display text-base text-paper/75 mb-1">DIABETIC MEDICATION</div>
                            <p class="text-[0.58rem] text-paper/38 leading-relaxed">Closed accounts through fear extortion would continue — blocked from receiving Centrelink payments for medication</p>
                        </div>
                    </div>

                    <!-- Transaction log -->
                    <div class="border border-paper/[0.08] mb-6" style="background:rgba(0,0,0,0.3)">
                        <div class="border-b border-paper/[0.07] px-4 py-2.5 flex items-center gap-3">
                            <span class="text-[0.46rem] tracking-[0.2em] uppercase text-hot">Westpac Transaction Log — Payments to Bodie Chalmers</span>
                            <span class="text-[0.4rem] tracking-[0.12em] uppercase text-paper/25">Account ending 104 · Now closed</span>
                        </div>
                        <div class="divide-y divide-paper/[0.05]">
                            <div class="grid grid-cols-3 px-4 py-2">
                                <span class="text-[0.5rem] tracking-[0.12em] uppercase text-paper/25">Date &amp; Time</span>
                                <span class="text-[0.5rem] tracking-[0.12em] uppercase text-paper/25">Recipient</span>
                                <span class="text-[0.5rem] tracking-[0.12em] uppercase text-paper/25 text-right">Amount</span>
                            </div>
                            @foreach([
                                ['10 Apr 2026 · 10:01', 'B Chalmers', '$360.00'],
                                ['10 Apr 2026 · 14:51', 'B Chalmers', '$25.00'],
                                ['19 Apr 2026 · 20:55', 'Bodie Chalmers', '$5.00'],
                                ['24 Apr 2026 · 13:45', 'Bodie Chalmers', '$330.00'],
                                ['24 Apr 2026 · 13:52', 'Bodie Chalmers', '$50.00'],
                                ['15 May 2026 · 16:12', 'Bodie Chalmers', '$50.00'],
                            ] as $row)
                            <div class="grid grid-cols-3 px-4 py-2.5">
                                <span class="text-[0.55rem] text-paper/50 font-mono">{{ $row[0] }}</span>
                                <span class="text-[0.55rem] text-hot font-mono">{{ $row[1] }}</span>
                                <span class="text-[0.55rem] text-paper/70 font-mono text-right">{{ $row[2] }}</span>
                            </div>
                            @endforeach
                            <div class="grid grid-cols-3 px-4 py-2.5 border-t border-paper/[0.1]" style="background:rgba(193,68,14,0.06)">
                                <span class="text-[0.5rem] tracking-[0.12em] uppercase text-hot col-span-2">Total confirmed by Westpac</span>
                                <span class="text-[0.65rem] text-hot font-display text-right">$820.00</span>
                            </div>
                        </div>
                    </div>

                    <!-- Westpac findings callout -->
                    <div class="border-l-2 border-hot/40 pl-4 py-2 mb-6" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">Westpac's Finding — Verbatim</div>
                        <p class="text-[0.65rem] text-paper/60 leading-relaxed italic mb-2">"We acknowledge that you are a victim in this matter, and we are deeply conscious of both the seriousness of the matter and of the loss you have incurred."</p>
                        <p class="text-[0.65rem] text-paper/60 leading-relaxed italic mb-2">"We note the below transactions which match the information held on your profile, sent to B Chalmers and Bodie Chalmers. Which you shared were the recipient of your payments."</p>
                        <p class="text-[0.65rem] text-paper/60 leading-relaxed italic">"The loss has been suffered at the hands of a third party to whom you had voluntarily transferred funds to."</p>
                        <p class="text-[0.5rem] text-paper/28 mt-2">— Nicole Garmon, Complaint Manager · Westpac Banking Corporation · Complaint CS144260094 · 24 June 2026</p>
                    </div>

                    <!-- Compassionate offer -->
                    <div class="border border-paper/[0.08] p-4 mb-6" style="background:rgba(12,8,4,0.5)">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-sage mb-2">Westpac Outcome — Compassionate Offer</div>
                        <p class="text-[0.65rem] text-paper/55 leading-relaxed">Westpac offered to return <strong class="text-paper/70">$820.00</strong> to Adam Watson on compassionate grounds — acknowledging his long standing tenure and his status as a victim. The bank confirmed it cannot recover the funds as significant time has passed since the transactions, but has opened a formal scam investigation case (ref. CS144260094) to pursue recovery through other financial institutions involved. The scam investigation may take up to 6 weeks. Adam has signed the acceptance of this outcome.</p>
                    </div>

                    <!-- PDF embed -->
                    <div class="border border-paper/[0.08] mb-4">
                        <div class="border-b border-paper/[0.07] px-4 py-2.5 flex items-center justify-between" style="background:rgba(0,0,0,0.25)">
                            <div class="flex items-center gap-3">
                                <span class="text-[0.44rem] text-hot">PDF</span>
                                <span class="text-[0.46rem] tracking-[0.18em] uppercase text-paper/55">Westpac · Complaint Outcome Letter · CS144260094</span>
                            </div>
                            <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bodie_chalmers/complaint_outcome.pdf" target="_blank" class="text-[0.44rem] tracking-[0.12em] uppercase text-sage/60 hover:text-sage border border-sage/20 hover:border-sage/40 px-2 py-0.5 transition-colors">Open ↗</a>
                        </div>
                        <iframe
                            src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/bodie_chalmers/complaint_outcome.pdf"
                            class="w-full"
                            style="height:520px;border:none;background:#1a1612"
                            title="Westpac complaint outcome — CS144260094 — payments to Bodie Chalmers confirmed"
                        ></iframe>
                    </div>

                    <div class="border-l-2 border-hot/50 pl-3 py-1.5" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-1">Why This Is Significant</div>
                        <p class="text-[0.62rem] text-paper/45 leading-relaxed">This is not an allegation. This is a bank's formal finding — issued in writing, under Westpac's complaint resolution framework. Westpac confirmed that Adam Watson was a victim of a threat/penalty scam. Westpac confirmed the payments went to Bodie Chalmers. The bank is now pursuing the matter through formal scam investigation channels. This document places Bodie Chalmers's name — in writing, by a major financial institution — as the confirmed recipient of funds extorted from Adam Watson through threats.</p>
                    </div>

                    <!-- Delivered to Southport Police Station -->
                    <div class="border border-paper/[0.08] mt-6 p-5" style="background:rgba(12,8,4,0.6)">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-[0.46rem] tracking-[0.2em] uppercase text-paper/40">Action Taken · 24 June 2026</span>
                            <span class="text-[0.42rem] tracking-[0.12em] uppercase border border-paper/15 text-paper/25 px-2 py-0.5">Southport Police Station</span>
                        </div>
                        <h5 class="font-display text-xl tracking-wide mb-4 leading-tight">ADAM WATSON DROPPED THIS OFF AT SOUTHPORT POLICE STATION.<br><span class="text-paper/45">HANDED TO THE SERGEANT. FOR THE FEMALE OFFICER.</span></h5>
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">Adam Watson took the Westpac complaint outcome letter — with Bodie Chalmers named in it as the confirmed recipient of scam payments — and delivered it personally to the Sergeant at Southport Police Station. The instruction was clear: it is to be passed to the female officer who believed Aaliyah's story, who put Adam Watson in Prince of Wales Hospital under the Mental Health Act, and who told him, in her own words: <em class="text-paper/65">"People don't always tell the full truth."</em></p>

                        <div class="border border-paper/[0.07] p-4 mb-5" style="background:rgba(193,68,14,0.05)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">Adam Watson's Message</div>
                            <p class="font-serif italic text-paper/65 text-base leading-relaxed mb-1">"This is a fight you don't want."</p>
                            <p class="text-[0.6rem] text-paper/40 leading-relaxed mt-3">The Westpac letter will be handed to the female officer who accepted Aaliyah's complaint, threatened Adam Watson with remand until trial, called Bodie Chalmers in Corrective Services, and set in motion the cross-state referral that resulted in Adam's involuntary admission to Prince of Wales Hospital under the Mental Health Act. You were told people don't always tell the full truth. Here is the bank's formal finding on who told the truth.</p>
                        </div>

                        <div class="border border-paper/[0.07] p-4 mb-4" style="background:rgba(61,122,74,0.04)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-sage mb-2">Attorney General — Notified</div>
                            <p class="text-[0.62rem] text-paper/48 leading-relaxed">The Attorney General of Queensland has been notified of the female officer's actions — the threat of remand before any charge was laid, the cross-state referral under the Mental Health Act, and the call made to Bodie Chalmers in Corrective Services. The Westpac complaint outcome is now part of that record.</p>
                        </div>

                        <div class="border-l-2 border-paper/20 pl-3 py-1.5">
                            <p class="text-[0.6rem] text-paper/40 leading-relaxed italic">You cannot allow people to ruin someone's life, reputation, and credibility — based on a story from a partner of the person you called in Corrective Services — and face no consequences for it. A formal bank finding naming the scammer, delivered in person to a police station, addressed to the officer who made the call, is how you begin to make that clear.</p>
                        </div>
                    </div>
                </div>

                <!-- Westpac returned the scam money to Bodie's CommBank account -->
                <div class="story-chapter reveal mt-5 mb-5" style="border-left-color:rgba(193,68,14,0.6)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Westpac · Update — The Money Went Back to the Scammer</span>
                        <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/50 text-hot px-1.5 py-0.5 blink">⬤ TRADING HALT SOUGHT</span>
                    </div>
                    <h4 class="font-display text-2xl md:text-3xl tracking-wide mb-4 leading-tight">WESTPAC PAID THE SCAMMER BACK.<br><span class="text-hot">THE VICTIM'S MONEY RETURNED TO BODIE CHALMERS.</span></h4>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">In a development that compounds everything documented above, Westpac has <strong class="text-paper/65">mistakenly returned Bodie Chalmers's money to his Commonwealth Bank account</strong> — the very funds extorted from Adam Watson. That Commonwealth Bank account is <strong class="text-paper/65">blocked</strong> — frozen as part of the Group Security action described in this episode — yet the money was pushed back into it regardless.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Read plainly: a major bank that had formally acknowledged, in writing, that Adam Watson was the victim of a scam and that the payments went to Bodie Chalmers has now <strong class="text-paper/65">paid the perpetrator</strong>. The institution returned the proceeds of an extortion to the person it confirmed received them — not to the victim it confirmed was harmed.</p>
                    <div class="border border-hot/20 p-4 mb-2" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">Why This Is So Serious</div>
                        <p class="text-[0.65rem] text-paper/48 leading-relaxed mb-2">A bank reimbursing the <strong class="text-paper/65">perpetrator</strong> of a confirmed scam — instead of the victim — is not a harmless clerical slip. It puts money back into the hands of a person the bank itself identified as the recipient of extorted funds, and it does so into an account that had been blocked precisely because of criminal-conduct concerns. Paying the scammer back is the exact opposite of what a bank's fraud, scam-recovery, and anti-money-laundering obligations require — and it actively undoes the cross-institutional account freezes that were the one piece of accountability the victim had secured.</p>
                        <p class="text-[0.65rem] text-paper/45 leading-relaxed italic">Adam Watson has stated that he intends to work to have <strong class="text-paper/60">Westpac placed into a trading halt</strong> for enabling scammers — a formal suspension of trading in the bank's shares on the ASX while the conduct is examined. For a bank to be paying the perpetrator back, into a frozen account, is in his view conduct that warrants exactly that level of scrutiny.</p>
                    </div>
                </div>

                <!-- Westpac returns $9,800 from the landlord — another network member falls -->
                <div class="story-chapter reveal mt-5 mb-5" style="border-left-color:rgba(61,122,74,0.55)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-sage border border-sage/40 px-2 py-1">Westpac · Update — $9,800 Recovered</span>
                        <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-sage/50 text-sage px-1.5 py-0.5">⬤ ANOTHER ONE FALLS</span>
                    </div>
                    <h4 class="font-display text-2xl tracking-wide mb-4 leading-tight">$9,800 BACK — FROM THE LANDLORD.<br><span class="text-sage">"HE WON'T BE TOO HAPPY, WILL HE."</span></h4>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Westpac has now informed Adam Watson that it is returning <strong class="text-paper/65">$9,800</strong> to him — recovered from <strong class="text-paper/65">Bodie Chalmers's landlord</strong>, the drug dealer in his network to whom Adam's funds had been directed. On being told, Adam Watson's response was characteristically dry: <em class="text-paper/70">"He won't be too happy, will he."</em></p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45">It is one more thread pulled out of the same cloth. The landlord's accounts were frozen; now money is being clawed back out of them and returned to the victim. With each recovery, <strong class="text-paper/65">another member of Bodie Chalmers's network falls</strong> — the people who facilitated, banked, or benefited from the conduct find that the institutions they relied on are now working against them.</p>
                </div>

                <!-- Nobody deals with you when you are like this -->
                <div class="border-l-4 border-gold/50 pl-5 mb-5" style="background:rgba(201,138,16,0.05);padding:1.1rem 1rem 1.1rem 1.25rem">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-2">The Quiet Consequence — Nobody Will Deal With You</div>
                    <p class="text-[0.66rem] text-paper/50 leading-relaxed mb-3">There is a consequence that arrives before any court does, and it is the most lasting one. When you conduct yourself the way Bodie Chalmers has — scamming the people closest to you, intercepting their money, lying to banks, using a partner's accounts as your own — word travels, and people simply <strong class="text-paper/65">stop dealing with you</strong>.</p>
                    <p class="text-[0.66rem] text-paper/50 leading-relaxed">Employers don't hire you. Businesses won't take you on. Banks close your accounts and decline to open new ones. Landlords won't rent to you. Even the people in your own network distance themselves once they realise that being near you is how they end up frozen, investigated, or charged. A reputation for this kind of conduct is not a temporary setback — it is a door that quietly closes, everywhere, all at once, and does not reopen.</p>
                </div>

                <!-- The one door that stays open — CFMEU -->
                <div class="border-l-4 border-hot/50 pl-5 mb-5" style="background:rgba(193,68,14,0.05);padding:1.1rem 1rem 1.1rem 1.25rem">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">The One Door That Stays Open</div>
                    <p class="text-[0.66rem] text-paper/50 leading-relaxed mb-3">There is, Adam Watson says, one exception — one place where conduct like Bodie Chalmers's is not a disqualifier but a qualification. Adam Watson says someone like Bodie Chalmers will <strong class="text-paper/65">become a powerful CFMEU member</strong>.</p>
                    <p class="text-[0.66rem] text-paper/50 leading-relaxed">It is the same point made in <a href="/episode-5" class="text-gold underline decoration-gold/40 hover:decoration-gold transition-colors">Episode 5</a>: where the CFMEU controls who works on government contracts, the very traits that close every other door — the intimidation, the willingness to scam, the indifference to consequence — become the traits that open this one.</p>
                </div>

                <!-- Bodie Chalmers — psych ward performance -->
                <div class="border-l-4 border-gold/50 pl-5 mb-5 mt-5" style="background:rgba(201,138,16,0.05);padding:1.2rem 1rem 1.2rem 1.25rem">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold">Bodie Chalmers — Prison Psych Ward</div>
                        <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25 border border-paper/10 px-2 py-0.5">Mental Health Shield — Will Not Be Effective</div>
                    </div>
                    <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">"ADAM WATSON SAVE ME!<br><span class="text-gold">THE TV IS TALKING TO ME AND IT'S OUT TO GET ME!"</span></h4>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">Bodie Chalmers is currently in custody in the prison psychiatric ward, where he has been screaming: <em class="text-paper/70">"Adam Watson save me! The TV is talking to me and it's out to get me!"</em> This is being recognised for what it is: a calculated attempt to construct a mental health record that could later be used as a shield in his criminal proceedings.</p>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">The strategy follows a documented pattern — the same pattern that Socrates Zidane Abdul Rahmahn used to avoid criminal conviction twice by invoking Section 14 of the Mental Health (Forensic Provisions) Act. Bodie Chalmers, watching the system closely, appears to be attempting to manufacture the same outcome. The calculation is transparent: if a genuine psychiatric episode can be argued, the threshold for criminal responsibility shifts.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.03)">
                            <div class="text-[0.44rem] tracking-[0.15em] uppercase text-gold mb-2">The Performance</div>
                            <div class="space-y-1.5">
                                <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Screaming Adam Watson's name in the psych ward</p></div>
                                <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Claiming the TV is "talking to him" and "out to get him"</p></div>
                                <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Consistent with an attempt to manufacture a psychiatric record</p></div>
                            </div>
                        </div>
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-2">Why It Won't Work</div>
                            <div class="space-y-1.5">
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">The conduct is documented, evidenced, and witnessed across multiple incidents</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Mental health as a shield has limits — it does not erase forensic evidence</p></div>
                                <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Courts are not required to accept a manufactured psychiatric episode as determinative</p></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Yakuza member — firebombing contractor -->
                <div class="border border-hot/30 mt-6 mb-2 p-5" style="background:rgba(193,68,14,0.04)">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">Organised Crime — Subcontracted Violence</span>
                        <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/40 text-hot/70 px-1.5 py-0.5">FLED AUSTRALIA</span>
                    </div>
                    <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">$150,000 TO FIREBOMB ADAM WATSON'S MOTHER'S HOUSE.<br><span class="text-hot">HIS HOPE ISLAND HOME WAS RAIDED. HE FLED OVERSEAS.</span></h4>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Bodie Chalmers paid a Yakuza-connected associate <strong class="text-paper/65">$150,000</strong> to firebomb Adam Watson's mother's house. That associate, rather than carry out the job personally, subcontracted it to an individual in Western Australia. The Hope Island home of the Yakuza associate was subsequently raided by police.</p>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">He fled overseas — to the Philippines, or Cambodia, or another country without an extradition treaty with Australia. The calculation being that no treaty means no return, no prosecution, no consequences. That calculation has a flaw.</p>
                    <div class="border border-hot/25 p-4 mb-3" style="background:rgba(193,68,14,0.06)">
                        <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-3">ASIO Does Not Require an Extradition Treaty</div>
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed mb-2">An extradition treaty is a legal instrument between governments. ASIO is not a court. Once the Australian Security Intelligence Organisation has an interest in a person, geography is not a defence. They do not need a bilateral agreement to locate, monitor, or arrange the return of a target — the absence of a formal treaty is a procedural inconvenience, not protection.</p>
                        <p class="text-[0.65rem] text-paper/50 leading-relaxed italic">"Once you start messing with ASIO, you are not safe anywhere you go in the world."</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-1">The Contract</div>
                            <div class="font-display text-base text-hot mb-1">$150,000</div>
                            <p class="text-[0.6rem] text-paper/38 leading-relaxed">Paid by Bodie Chalmers to a Yakuza associate to firebomb Adam Watson's mother's house. Job subcontracted to a contact in Western Australia.</p>
                        </div>
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-1">The Raid</div>
                            <div class="font-display text-base text-hot mb-1">HOPE ISLAND</div>
                            <p class="text-[0.6rem] text-paper/38 leading-relaxed">The Yakuza associate's Hope Island home was raided by police. He fled the country before charges could be laid — destination: Philippines or Cambodia.</p>
                        </div>
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-1">The Problem</div>
                            <div class="font-display text-base text-hot mb-1">NO EXTRADITION — NO MATTER</div>
                            <p class="text-[0.6rem] text-paper/38 leading-relaxed">Philippines and Cambodia have no extradition treaty with Australia. ASIO does not need one. The absence of a treaty is not cover.</p>
                        </div>
                    </div>
                </div>

                <!-- Bodie Chalmers — Meriton inside person -->
                <div class="border border-hot/30 mt-6 mb-2 p-5" style="background:rgba(193,68,14,0.04)">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">New Incident — Corporate Infiltration · Meriton</span>
                        <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/40 text-hot/70 px-1.5 py-0.5">EMPLOYEE FIRED · BLACKLISTED</span>
                    </div>
                    <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">"I KNOW WHICH ROOM YOU'RE IN.<br><span class="text-hot">I CAN GET TO YOU AND HURT YOU."</span></h4>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Bodie Chalmers placed an inside person at Meriton — someone on staff who was able to access the guest room details system and look up which room Adam Watson was staying in. Armed with that information, Bodie called Adam directly to menace and harass him: <em class="text-paper/65">"I know which room number you're staying at — so I can get to you and hurt you."</em></p>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">Meriton was informed of what had occurred. The system logs every employee number when a staff member accesses guest room details. The staff member who had made the enquiry was identified. She was subsequently fired and blacklisted — another person whose career Bodie Chalmers has destroyed in the course of his campaign against Adam Watson.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-1">The Method</div>
                            <div class="font-display text-base text-hot mb-1">INSIDE ACCESS</div>
                            <p class="text-[0.6rem] text-paper/38 leading-relaxed">Bodie placed a contact inside Meriton who accessed the guest management system to identify Adam Watson's room number without authorisation.</p>
                        </div>
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-1">The Call</div>
                            <div class="font-display text-base text-hot mb-1">MENACE &amp; THREAT</div>
                            <p class="text-[0.6rem] text-paper/38 leading-relaxed">Bodie called Adam to tell him he knew his room number and could get to him and hurt him. The disclosure of the room number was the threat.</p>
                        </div>
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-1">The Consequence</div>
                            <div class="font-display text-base text-hot mb-1">FIRED · BLACKLISTED</div>
                            <p class="text-[0.6rem] text-paper/38 leading-relaxed">Employee number logging identified the staff member. Meriton fired and blacklisted her. Another victim of Bodie Chalmers — her career gone because of him.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chapter D: Alex Vourliotis -->
            <div class="story-chapter reveal" style="transition-delay:0.2s;border-left-color:rgba(193,68,14,0.3)">
                <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter D — Car Theft & Fraud</span></div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE MAN IN THE VAN.<br><span class="text-hot">ALEX VOURLIOTIS.</span></h3>

                <div class="grid grid-cols-1 lg:grid-cols-[160px_1fr] gap-6 mb-6">
                    <div class="shrink-0">
                        <div class="border border-paper/[0.08] overflow-hidden">
                            <img src="https://d26oc3sg82pgk3.cloudfront.net/files/media/uploads/casting_call/8bdf3330-eb64-44e5-9ab1-777e4b28c21e-bWFpbi1uLW4tMC0wLTAtMC0w.jpg" alt="Alex Vourliotis" style="width:100%;display:block;filter:grayscale(15%) contrast(1.05);object-fit:cover;aspect-ratio:1/1"/>
                            <div class="border-t border-paper/[0.06] px-2 py-1.5" style="background:rgba(12,8,4,0.7)">
                                <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/30">Alex Vourliotis</div>
                                <div class="text-[0.44rem] text-hot/60 mt-0.5">Jailed · Car fraud</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-4">"I met him outside Setfree — he was in a van, picking up free food. He started talking about court issues with his partner and it sounded like gibberish. First sign of a scammer. Then he mentioned something about Orange Sky laundry and a text message he'd seen about St. John's Crisis Centre."</p>
                        <p class="text-[0.72rem] leading-relaxed text-paper/45">Kosta Kondratenko encountered Alex Vourliotis outside Setfree, a community service providing free food on the Gold Coast. Vourliotis was operating out of a van and immediately began relaying incoherent complaints about court proceedings involving his partner — a pattern recognisable in retrospect as the opening of a social engineering approach. He had seen a text message Kosta had sent regarding financial irregularities at St. John's Crisis Centre. He then called Kosta directly and raised a separate complaint about Orange Sky Laundry failing to return his belongings.</p>
                    </div>
                </div>

                <div class="border border-paper/[0.07] p-5 mb-6">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-4">How It Unfolded — The Vourliotis Timeline</div>
                    <div class="space-y-2.5">
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">First Contact</span><span class="text-[0.65rem] text-paper/45">Kosta meets Vourliotis outside Setfree. He is in a van collecting free food. He raises incoherent complaints about partner court proceedings — in retrospect, the hallmark opening of a scammer establishing rapport.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">The Intercept</span><span class="text-[0.65rem] text-paper/45">Vourliotis had seen a text message Kosta sent about financial irregularities at St. John's Crisis Centre — a message he should not have had access to. He uses it as a pretext to call Kosta and raise the Orange Sky laundry issue.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Introduction</span><span class="text-[0.65rem] text-paper/45">Kosta introduces Vourliotis to Adam Watson at the pub. During this meeting, Vourliotis admits he arrived wearing a secret recording device.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">The Lift</span><span class="text-[0.65rem] text-paper/45">Adam Watson gives Vourliotis a lift. A relationship develops. Adam falls asleep. Vourliotis opens the glove compartment and takes the vehicle registration papers.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Interstate</span><span class="text-[0.65rem] text-paper/45">Vourliotis travels interstate and uses the registration papers to transfer the car into his own name. He then obtains financing against the vehicle through Cash Converters.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-gold/70 w-28 shrink-0 pt-0.5">Arrested</span><span class="text-[0.65rem] text-paper/45">Police arrest Vourliotis. During the record of interview he makes the comment: <span class="text-paper/70 italic">"But he has everything"</span> — understood to be a reference to Adam Watson's boat.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Jailed</span><span class="text-[0.65rem] text-paper/45">Vourliotis is convicted and jailed for the fraud.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] w-28 shrink-0 pt-0.5" style="color:rgba(124,106,170,0.7)">In Custody</span><span class="text-[0.65rem] text-paper/45">While jailed, Vourliotis feeds information about Adam Watson to his psychologist. Adam Watson speculated this was a deliberate strategy — building a record of claimed trauma to later subpoena the psychologist as a witness against him.</span></div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
                    <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Secret Recording</div>
                        <div class="font-display text-xl text-hot mb-1">ADMITTED</div>
                        <p class="text-[0.62rem] text-paper/40 leading-relaxed">Vourliotis admitted at the pub meeting that he arrived wearing a concealed recording device. He recorded the introduction to Adam Watson.</p>
                    </div>
                    <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">The Comment</div>
                        <div class="font-display text-xl text-hot mb-1">"HE HAS EVERYTHING"</div>
                        <p class="text-[0.62rem] text-paper/40 leading-relaxed">Made during police record of interview. Understood to refer to Adam Watson's boat — suggesting the car was not the only asset Vourliotis had in mind.</p>
                    </div>
                    <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Psychologist Play</div>
                        <div class="font-display text-xl text-hot mb-1">ALLEGED STRATEGY</div>
                        <p class="text-[0.62rem] text-paper/40 leading-relaxed">Feeding a psychologist a narrative of trauma while in custody — potentially to create a witness who could be called to court. Adam Watson identified this as a deliberate litigation strategy.</p>
                    </div>
                </div>

                <div class="border-l-4 pl-6 py-1 mb-8" style="border-color:rgba(193,68,14,0.4)">
                    <p class="text-[0.68rem] text-paper/40 leading-relaxed">The Orange Sky laundry complaint and the St. John's Crisis Centre text message gave Vourliotis two entry points into Kosta's investigative work — one as a grievance, one as a demonstration that he had access to private communications. He arrived at the first meeting already recording. The car was gone before Adam Watson woke up. The comment about "everything" suggests the vehicle was a starting point, not the plan.</p>
                </div>

                <!-- Background: Gym, Metallurgy, Debts -->
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE GYM. THE FURNACE.<br><span class="text-hot">THE DEBTS THAT FOLLOWED HIM.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Vourliotis had previously operated a gym and owned a metallurgy business. Neither ended cleanly. The property adjoining his gym was burnt down — understood to be a direct message from people to whom he owed money. A separate group was actively looking for him in connection with unpaid debts from the metallurgy business. By the time he was operating out of a van collecting free food outside Setfree, he was not simply down on his luck — he was a person with significant outstanding obligations and a documented history of not meeting them.</p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-8">
                    <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">The Gym</div>
                        <div class="font-display text-lg text-hot mb-1">FORMER OWNER</div>
                        <p class="text-[0.62rem] text-paper/40 leading-relaxed">Property adjacent to the gym was deliberately burnt down as a warning — connected to unpaid debts owed by Vourliotis.</p>
                    </div>
                    <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Metallurgy Business</div>
                        <div class="font-display text-lg text-hot mb-1">UNPAID DEBTS</div>
                        <p class="text-[0.62rem] text-paper/40 leading-relaxed">People were actively looking for Vourliotis in connection with debts left unpaid from his metallurgy operation.</p>
                    </div>
                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-1">By the Time of the Van</div>
                        <div class="font-display text-lg text-paper/40 mb-1">PATTERN ESTABLISHED</div>
                        <p class="text-[0.62rem] text-paper/35 leading-relaxed">Operating out of a van, collecting free food, with no fixed address — and a trail of creditors behind him.</p>
                    </div>
                </div>

                <!-- Housing Commission Eviction -->
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE COUCH. THE FRIDGE.<br><span class="text-hot">"IT ALL MAKES SENSE NOW."</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"He had weaseled his way into Jason's housing commission flat and refused to leave. There was a large sweat mark on the couch where he'd been sleeping. I put the fridge against the door, left his things outside, and had Jason send him a text message. He tried to force his way back in. Then he saw me — and said: 'It all makes sense now.' He knew who I was. He knew about Adam. And this was while he was in the middle of scamming him."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Vourliotis had, without authorisation, established himself in the housing commission flat of Jason — a resident Kosta had been helping. He had made himself at home, leaving a visible sweat imprint on the couch, and refused to vacate when asked. Kosta intervened: he moved the fridge against the door to block re-entry, placed Vourliotis's belongings outside, and had Jason send a formal eviction text message. When Vourliotis returned and attempted to force his way back into the flat, he found the door blocked — and found Kosta waiting.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">His response — <span class="text-paper/70 italic">"It all makes sense now"</span> — was an acknowledgment that he recognised Kosta's connection to Adam Watson. He was being evicted by the same person whose introduction to Adam Watson he had exploited to steal a car. The comment confirmed he had known the relationship all along — that his approach to Kosta at Setfree was not coincidental. He was actively scamming Adam Watson at the time.</p>

                <div class="border border-paper/[0.07] p-5 mb-6">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-4">The Eviction — Sequence</div>
                    <div class="space-y-2.5">
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">The Setup</span><span class="text-[0.65rem] text-paper/45">Vourliotis had manoeuvred himself into Jason's housing commission flat without authorisation. He refused to leave when asked. A large sweat mark on the couch had become a fixture.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">The Eviction</span><span class="text-[0.65rem] text-paper/45">Kosta moved the fridge against the door, placed Vourliotis's belongings outside, and had Jason send a text message formally requesting he not return.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">The Attempt</span><span class="text-[0.65rem] text-paper/45">Vourliotis returned and attempted to force entry into the flat.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-gold/70 w-28 shrink-0 pt-0.5">The Comment</span><span class="text-[0.65rem] text-paper/45">He saw Kosta. He said: <span class="text-paper/70 italic">"It all makes sense now."</span> — confirming he knew exactly who Kosta was, and what his connection to Adam Watson meant.</span></div>
                        <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">The Timing</span><span class="text-[0.65rem] text-paper/45">This was happening while Vourliotis was actively in the process of defrauding Adam Watson. He had already taken the registration papers. The car transfer was in progress.</span></div>
                    </div>
                </div>

                <div class="border-l-4 pl-6 py-1 mb-8" style="border-color:rgba(193,68,14,0.4)">
                    <p class="text-[0.68rem] text-paper/40 leading-relaxed">The comment "It all makes sense now" is the clearest evidence that Vourliotis's approach at Setfree was deliberate. He did not stumble into a relationship with Kosta by chance and then opportunistically meet Adam Watson. He identified Kosta, cultivated the introduction, arrived at the pub already recording, and took the car. When the eviction happened he recognised it immediately — not as a coincidence, but as the closing of a loop. He had known who Kosta was the entire time.</p>
                </div>

                <!-- Sandy Tulisi recordings / Hancock / Channel 7 -->
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">HE WENT TO SANDY TULISI.<br><span class="text-hot">TO BUILD A FILE ON ME.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"While he was scamming Adam and had already been evicted from Jason's flat — Alex Vourliotis went to Sandy Tulisi's house. He recorded her. He asked her questions about me. He then sent those recordings to the offices of Hancock Prospecting and Channel 7 in an attempt to assassinate my character. The irony is that Sandy Tulisi is herself breaking the law — which is documented on this very site."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Vourliotis sought out Sandy Tulisi — the same landlord whose bond fraud, false rent notices, and unlawful eviction of Kosta Kondratenko are documented in Episode 1 of this investigation — and covertly recorded her making statements about Kosta. He then transmitted those recordings to Hancock Prospecting and to Channel 7, framing them as character evidence against the person who had exposed him during the housing commission eviction.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Sandy Tulisi was not a neutral witness. She is a subject of this investigation — a landlord who held a bond for 68 days beyond the legal limit, issued six false rent notices, had her tenant evicted using an improperly obtained Police Banning Notice, and whose charges were dropped after the court registrar's procedural failure prevented her from being subpoenaed. A recording sourced from Sandy Tulisi about Kosta Kondratenko is a recording sourced from a person with documented legal exposure to him.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
                    <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">What Vourliotis Did</div>
                        <div class="space-y-2">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Attended Sandy Tulisi's home with a recording device.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Recorded Sandy Tulisi making statements about Kosta Kondratenko.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Sent recordings to Hancock Prospecting and Channel 7 as character-assassination material.</p></div>
                        </div>
                    </div>
                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">The Source He Chose</div>
                        <div class="space-y-2">
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/35 leading-relaxed">Sandy Tulisi: bond held 68 days over legal limit. Six false rent notices. Charges dropped.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/35 leading-relaxed">Her conduct is documented in full in the Sandy Tulisi chapter of this investigation.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/35 leading-relaxed">Using a person under documented legal scrutiny as a character witness does not strengthen the case against the subject — it reveals the desperation of the attempt.</p></div>
                        </div>
                    </div>
                </div>

                <div class="border-l-4 pl-6 py-1" style="border-color:rgba(193,68,14,0.4)">
                    <p class="text-[0.68rem] text-paper/40 leading-relaxed">Vourliotis went to the one person in this investigation whose own conduct is documented in court records and on this site — and asked her to speak against the person who had exposed her. He sent what she said to two of the most prominent institutions in the Hancock Prospecting orbit. The recording was intended to close a door on Kosta's credibility. Instead it is one more data point in the file on Vourliotis — a man who arrived with a recording device, took a car, attempted to force entry into a housing commission flat, and chose a fraudulent landlord as his character witness.</p>
                </div>

                <!-- The "nutjob" message / social stigmatisation strategy -->
                <div class="border border-hot/30 p-5 mt-6" style="background:rgba(193,68,14,0.04)">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="text-[0.46rem] tracking-[0.2em] uppercase text-hot">The Message to Hancock Prospecting</span>
                        <span class="text-[0.42rem] tracking-[0.12em] uppercase border border-hot/30 text-hot px-2 py-0.5">Social Stigmatisation Strategy</span>
                    </div>
                    <h4 class="font-display text-xl md:text-2xl tracking-wide mb-4 leading-tight">"WHY IS ADAM WATSON<br><span class="text-hot">HANGING OUT WITH THIS NUTJOB?"</span></h4>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">When Vourliotis transmitted the Sandy Tulisi recording to Hancock Prospecting, he attached words to the effect of: <em class="text-paper/70">"Why is Adam Watson hanging out with this nutjob?"</em> The recording was not the point. The framing was. The objective was to plant a question in the mind of one of Adam Watson's most significant corporate relationships — to make Adam's association with Kosta Kondratenko appear to be evidence of poor judgement, and to make Kosta appear unstable.</p>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-5">This is a textbook social-stigmatisation play: you do not attack the substance of what a person has documented — you attack the person's credibility by association. "Nutjob" is not a rebuttal to the bond fraud, the false rent notices, or the unlawful eviction documented on this site. It is an attempt to make those findings unhearable by attaching a label to the person who surfaced them. It is the same instrument deployed against Adam Watson throughout this investigation — the rape rumour at the gym, the "Russian" slur in the carpark, the psychiatric admission weaponised to Hancock Prospecting — recycled here through a different sender.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.46rem] tracking-[0.18em] uppercase text-hot mb-2">The Strategy</div>
                            <p class="text-[0.6rem] text-paper/40 leading-relaxed">Discredit the messenger to neutralise the message. Frame association with Kosta as a liability. Deliver it to a corporate relationship that matters to Adam. Label, don't rebut.</p>
                        </div>
                        <div class="border border-gold/25 p-4" style="background:rgba(201,138,16,0.04)">
                            <div class="text-[0.46rem] tracking-[0.18em] uppercase text-gold mb-2">The Irony</div>
                            <p class="text-[0.6rem] text-paper/40 leading-relaxed">The person calling someone a "nutjob" to a major corporation was — at that very moment — defrauding Adam Watson. He was subsequently convicted and jailed for that fraud. The man building a credibility file on others was the one with a criminal conviction.</p>
                        </div>
                    </div>

                    <div class="border-l-2 border-gold/40 pl-3 py-1.5" style="background:rgba(201,138,16,0.04)">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold mb-1">Where It Lands</div>
                        <p class="text-[0.62rem] text-paper/42 leading-relaxed">There is a profound irony in the choice of word. The man asking why Adam Watson would associate with a "nutjob" had attached himself to Adam by waiting in a van outside a crisis centre, arrived at their first meeting wearing a concealed recording device, stole a car from a man who had fallen asleep beside him, attempted to force entry into a housing commission flat, and was — by the time he sent the message — already a person under active criminal investigation. He was convicted and jailed. The label he tried to attach to Kosta Kondratenko describes nobody in this story except the sender. A character file assembled by a convicted fraudster is not character evidence. It is a confession of method.</p>
                    </div>
                </div>

                <!-- StarNow chapter -->
                <div class="story-chapter reveal mt-6" style="border-left-color:rgba(193,68,14,0.4)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border border-hot/40 px-2 py-1 text-hot">Platform Accountability — StarNow</span></div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">HE'S STILL ON STARNOW.<br><span class="text-hot">CONVICTED. JAILED. LISTED.</span></h3>
                    <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"I had a StarNow profile when I was running Head Studios — a video production business. I was banned from the platform after I sent a mass SMS to a group of models inviting them to a nightclub. Alex Vourliotis was convicted and jailed for fraud. He is still on the platform."</p>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                        <div>
                            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Alex Vourliotis maintains an active profile on StarNow — an actor and talent casting platform — at the following address:</p>
                            <div class="border border-hot/20 p-4 mb-4" style="background:rgba(193,68,14,0.03)">
                                <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-1">StarNow Profile</div>
                                <a href="https://www.starnow.com/u/alexvourliotis/" target="_blank" rel="noopener noreferrer" class="font-mono text-[0.68rem] text-hot hover:text-paper/80 transition-colors break-all">starnow.com/u/alexvourliotis/</a>
                                <div class="text-[0.5rem] text-paper/28 mt-1.5">Profile active as of publication · Vourliotis convicted and jailed</div>
                            </div>
                            <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">Kosta Kondratenko — founder of Sunlight.Quest — operated a StarNow profile when running Head Studios, a video production business. He was subsequently banned from the platform after sending a mass SMS to a group of models inviting them to a nightclub — an administrative breach that led to his account being removed.</p>
                            <p class="text-[0.68rem] text-paper/45 leading-relaxed">Alex Vourliotis has been convicted and jailed for fraud. His victim was a person he befriended, took a car from while that person slept, transferred the vehicle into his own name interstate, and financed against at Cash Converters. He remains active on a platform that connects actors with production companies and casting directors.</p>
                        </div>
                        <div class="border border-paper/[0.08] p-5" style="background:rgba(193,68,14,0.02)">
                            <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-3">The Asymmetry</div>
                            <div class="space-y-3">
                                <div class="flex gap-3 items-start"><div class="w-1.5 h-1.5 rounded-full bg-hot mt-1.5 shrink-0"></div><div><div class="text-[0.58rem] text-paper/55 mb-0.5">Kosta Kondratenko — banned</div><div class="text-[0.52rem] text-paper/35 leading-relaxed">Removed for sending a mass SMS to models. Administrative. No victims. No criminal proceeding.</div></div></div>
                                <div class="flex gap-3 items-start"><div class="w-1.5 h-1.5 rounded-full bg-hot mt-1.5 shrink-0"></div><div><div class="text-[0.58rem] text-paper/55 mb-0.5">Alex Vourliotis — still listed</div><div class="text-[0.52rem] text-paper/35 leading-relaxed">Convicted and jailed for fraud against a person connected to the platform's ecosystem. Active profile. No removal.</div></div></div>
                                <div class="flex gap-3 items-start"><div class="w-1.5 h-1.5 rounded-full bg-gold mt-1.5 shrink-0"></div><div><div class="text-[0.58rem] text-paper/55 mb-0.5">Terms of service applied selectively</div><div class="text-[0.52rem] text-paper/35 leading-relaxed">Enforced against an SMS breach. Not enforced against a conviction and custodial sentence.</div></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gold/20 p-5 mb-5" style="background:rgba(201,138,16,0.03)">
                        <div class="text-[0.46rem] tracking-[0.22em] uppercase text-gold mb-3">Statement Requested — StarNow</div>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Kosta Kondratenko is seeking a formal statement from StarNow regarding their policy on actors and talent who are charged with, or convicted of, criminal offences — and specifically whether a conviction and custodial sentence results in removal from the platform.</p>
                        <p class="text-[0.68rem] text-paper/45 leading-relaxed">Does StarNow's policy require or permit removal of a user who has been convicted and jailed? Were they aware of the conviction? If aware — what is the stated reason for the profile remaining active?</p>
                    </div>
                    <div class="border border-paper/[0.08] p-5" style="background:rgba(245,234,212,0.015)">
                        <div class="text-[0.46rem] tracking-[0.22em] uppercase text-paper/35 mb-3">Terms of Service &amp; Corporate Responsibility</div>
                        <p class="text-[0.68rem] text-paper/40 leading-relaxed mb-3">Casting and talent platforms are marketplaces of trust. A platform that expelled a member for sending a mass SMS but retains a member convicted and jailed for fraud against someone in that same social ecosystem is not applying its trust infrastructure consistently.</p>
                        <p class="text-[0.68rem] text-paper/40 leading-relaxed">A platform that enables a convicted fraudster to continue presenting himself as a professional actor is making an active choice, not a passive omission. That choice is on this record.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════
     SAMIRA KHALAJ
══════════════════════════════════════ -->
<section id="samira" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(124,106,170,0.05) 0%,transparent 60%)">
    <div class="max-w-4xl mx-auto">

        <div class="flex items-center gap-3 mb-3 reveal">
            <span class="text-[0.48rem] tracking-[0.22em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Chapter E — False Allegations · Coogee</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-3 leading-tight reveal">SAMIRA KHALAJ.<br><span style="color:#7c6aaa">HELPED. THEN ACCUSED.</span></h2>
        <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-10 reveal">"Adam helped Samira get an AVO. She then accused him of scamming her. Her husband cornered him at his car. Her associate fractured her skull with an axe — and police are now trying to get him to say Adam ordered it. In a Registrar hearing she told Adam to 'Gas all you Jews.' It was recorded."</p>

        <!-- Timeline -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(124,106,170,0.3)">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase mb-5" style="color:rgba(124,106,170,0.7)">Timeline — Samira Khalaj</div>
            <div class="space-y-px">
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase" style="color:#7c6aaa">01</div><div class="text-[0.45rem] text-paper/20 mt-0.5">AVO Help</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Adam assists Samira with an AVO application</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Adam Watson assisted Samira Khalaj in obtaining an Apprehended Violence Order against another party. She received the AVO.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">02</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Scam Claim</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Samira turns around and accuses Adam of scamming her</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Having received Adam's help, Samira Khalaj subsequently lodged a complaint claiming Adam Watson had scammed her.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">03</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Car Ambush</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Samira and Raz corner Adam at his vehicle — Samira enters car without permission, Raz attacks</div><div class="text-[0.55rem] text-paper/30 leading-relaxed mb-2">Samira Khalaj and Raz harassed Adam Watson at his car. Samira entered his vehicle without permission. When Adam attempted to regain autonomy of his vehicle, Raz attacked him. Both incidents recorded.</div>
                    <div class="ev-file ef-hot mt-2" onclick="openMV('video-samira-car')" style="max-width:380px">
                        <div class="ev-icon ev-video">▶</div>
                        <div class="ev-meta">
                            <div class="ev-name">samiravideo1.mp4</div>
                            <div class="ev-desc">Video · Samira and Raz harass Adam · Samira enters car without permission</div>
                        </div>
                        <span class="ev-cta">Watch →</span>
                    </div>
                    <div class="ev-file ef-hot mt-1" onclick="openMV('video-samira-raz-attack')" style="max-width:380px">
                        <div class="ev-icon ev-video">▶</div>
                        <div class="ev-meta">
                            <div class="ev-name">samira-video-2.mp4</div>
                            <div class="ev-desc">Video · Raz attacks Adam as he attempts to regain his vehicle</div>
                        </div>
                        <span class="ev-cta">Watch →</span>
                    </div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">04</div><div class="text-[0.45rem] text-paper/20 mt-0.5">False Statement</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Samira lodges police statement claiming Adam punched her in the jaw</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Samira lodged a sworn police statement alleging Adam Watson punched her in the jaw. She attended a doctor who recorded her jaw as "sore."</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-gold">05</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Mercedes</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Samira's husband tampers with Adam's Mercedes at Coogee</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">After seeing Adam pull up to the Coogee property in his Mercedes, Samira's husband tampered with the vehicle. A local drug dealer witnessed it and reported it to Adam — offering to deal with the husband, which Adam declined. The Mercedes subsequently broke down and had to be abandoned on the side of the road.</div></div>
                </div>
                <div class="grid grid-cols-[90px_1fr] gap-4 p-4" style="background:rgba(193,68,14,0.05);border:1px solid rgba(193,68,14,0.2);border-left:3px solid #c1440e">
                    <div class="text-center"><div class="text-[0.62rem] tracking-[0.1em] uppercase font-bold text-hot">06</div><div class="text-[0.45rem] text-paper/45 mt-0.5">GAS</div></div>
                    <div><div class="text-[0.65rem] font-display tracking-wide text-paper/75 mb-1">Samira and Raz tamper with gas pipelines — multiple neighbours affected including Socrates</div><div class="text-[0.55rem] text-paper/45 leading-relaxed">Samira Khalaj has cut off gas supply and interfered with gas pipelines serving multiple neighbours at the property, including Socrates — who is very upset about this. Her husband Raz has done the same. Tampering with a gas supply is not a civil dispute — it is interference with government-regulated critical infrastructure. The penalties are severe. This is a documented pattern of behaviour by both Samira and Raz.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">07</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Axe Attack</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Socrates Zidane Abdul Rahmahn attacks Samira with an axe — faces 25 years</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Adam had been assisting Socrates Zidane Abdul Rahmahn with legal matters. Socrates had been charged on multiple occasions for sexual intercourse with a 15-year-old minor, using Section 14 of the Mental Health Act to avoid conviction. When Socrates learned what Samira was doing to Adam, he attended her home armed with an axe and struck her in the head. Charged. Combined with his existing charges he faces a maximum of 25 years.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">08</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Fabrication</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Police and Samira pressure Socrates for an affidavit implicating Adam</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Police and Samira Khalaj are now attempting to get Socrates to swear an affidavit claiming he was acting on Adam Watson's instructions when he attacked Samira. Socrates has not done so.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">09</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Antisemitic Threat</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Registrar hearing — "Gas all you Jews!" — recorded</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Appearing in the Registrar, Samira Khalaj told Adam Watson: "Gas all you Jews!" The Registrar captured the outburst on the official court recording. Samira was subsequently charged and remanded in custody. She has since been released.</div></div>
                </div>
                <div class="tl-row grid grid-cols-[90px_1fr] gap-4 p-4">
                    <div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-gold">10</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Ongoing</div></div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Harassment continues — Coogee property listed for sale</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Samira's husband has been smearing substances on Adam's windows. Samira has been smearing feces on his door handle, then immediately reporting fictitious complaints to police. Adam no longer feels safe at the Coogee property. The property has been listed for sale and has received multiple offers.</div></div>
                </div>
                <div class="grid grid-cols-[90px_1fr] gap-4 p-4" style="background:rgba(124,106,170,0.08);border:1px solid rgba(124,106,170,0.3);border-left:3px solid #7c6aaa">
                    <div class="text-center"><div class="text-[0.72rem] tracking-[0.1em] uppercase font-bold" style="color:#7c6aaa">11</div><div class="text-[0.5rem] text-paper/45 mt-0.5">EVICTED</div></div>
                    <div><div class="text-[0.73rem] font-display tracking-wide mb-0.5" style="color:rgba(245,234,212,0.84)">Department of Housing eviction proceedings — Samira Khalaj being removed from her property</div><div class="text-[0.62rem] leading-relaxed" style="color:rgba(245,234,212,0.58)">Samira Khalaj is now being evicted from her Department of Housing property. The conduct that led to that outcome — the criminal charges, the Registrar outburst, the pattern of behaviour documented across this section — has reached the point where NSW Department of Housing is moving to remove her. A taxpayer-funded tenancy used as a base for a sustained campaign of harassment, false allegations, and racial vilification is being terminated.</div></div>
                </div>
            </div>
        </div>

        <!-- Gas pipeline tampering -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Gas Infrastructure — Samira Khalaj &amp; Raz</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">CUTTING THE GAS.<br><span class="text-hot">MESSING WITH THE GOVERNMENT.</span></h3>
            <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-5">"Samira has cut the gas off to various neighbours — including Socrates, who is very upset. Raz has done the same. When you interfere with a gas supply to a house, you are not interfering with a neighbour. You are interfering with government-regulated infrastructure. The penalties are severe."</p>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Samira Khalaj has cut off gas supply and tampered with gas pipelines serving multiple properties in the building, affecting several neighbours — including Socrates, who is extremely upset about the situation. Her husband Raz has engaged in the same conduct. This is not a neighbour dispute. Gas supply in residential properties is government-regulated critical infrastructure. The moment a person interferes with a gas pipeline — cutting supply, tampering with connections, manipulating meters — they are committing an offence that is treated with the same seriousness as any interference with government infrastructure.</p>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-px mb-6" style="background:rgba(245,234,212,0.06)">
                <div class="p-5" style="background:#0c0804">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">The Conduct</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Samira cut gas supply to multiple neighbours</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Raz (her husband) did the same</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Socrates among those affected — very upset</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Pattern of behaviour — both individuals</p></div>
                    </div>
                </div>
                <div class="p-5" style="background:#0c0804">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Why This Is Serious</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Gas supply is government-regulated infrastructure</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Tampering with gas = interfering with government</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Creates safety risk for all occupants of the building</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Cannot be framed as a neighbourly grievance</p></div>
                    </div>
                </div>
                <div class="p-5" style="background:#0c0804">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">The Penalties</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Severe criminal penalties for infrastructure tampering</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Applies to both Samira and Raz individually</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Pattern of behaviour increases exposure at sentencing</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Raz previously arrested for gas meter tampering (Timeline 06)</p></div>
                    </div>
                </div>
            </div>

            <div class="border border-paper/[0.07] p-5" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Context</div>
                <p class="text-[0.65rem] leading-relaxed text-paper/40">This is not an isolated act of property damage. It is part of a documented pattern of targeted conduct against the people who share this building with Samira Khalaj and Raz — the same pattern that includes smearing substances on windows, smearing faeces on door handles, making false reports to police, and the "Gas all you Jews!" outburst in the Registrar. The gas tampering sits in that context. It is one act in a campaign.</p>
            </div>
        </div>

        <!-- Raz brake cutting chapter -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.45rem] tracking-[0.2em] uppercase px-2 py-1 border border-hot/30 text-hot" style="background:rgba(193,68,14,0.07)">Vehicle Sabotage &nbsp;·&nbsp; Dashcam Evidence &nbsp;·&nbsp; Raz</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">RAZ CUT THE BRAKES.<br><span class="text-hot">CAUGHT ON DASHCAM. ADAM DROVE BEFORE HE KNEW.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The gas tampering was not the only time Raz put a person's life at risk. On a separate occasion, Raz tampered with the brakes on Adam Watson's car. What makes this incident different — and more difficult to dismiss — is that it was captured on dashcam footage.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Adam drove the car before he understood anything was wrong. The vehicle's handling told him something was different. The brakes were not responding the way they should. He pulled over and got the car to a mechanic. Only after the mechanic examined the vehicle did Adam learn what Raz had done. The dashcam had recorded Raz at the car. The footage and the mechanic's findings together closed the gap between suspicion and evidence.</p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.45rem] tracking-[0.2em] uppercase text-hot mb-2">The Act</div>
                    <p class="text-[0.6rem] text-paper/40 leading-relaxed">Raz tampered with the brake system on Adam Watson's car. Captured on dashcam at the vehicle prior to Adam driving.</p>
                </div>
                <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.04)">
                    <div class="text-[0.45rem] tracking-[0.2em] uppercase text-gold mb-2">The Safety Consequence</div>
                    <p class="text-[0.6rem] text-paper/40 leading-relaxed">Adam drove the car unaware of the tampering. He noticed the handling was wrong while in motion — a brake failure at speed could have been fatal.</p>
                </div>
                <div class="border border-sage/20 p-4" style="background:rgba(61,122,74,0.04)">
                    <div class="text-[0.45rem] tracking-[0.2em] uppercase text-sage mb-2">The Discovery</div>
                    <p class="text-[0.6rem] text-paper/40 leading-relaxed">Adam took the car to a mechanic who identified the sabotage. Combined with dashcam footage, the evidence established who was responsible.</p>
                </div>
            </div>
            <div class="border border-paper/[0.07] p-5 mb-5" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.45rem] tracking-[0.2em] uppercase text-hot mb-3">Pattern Context</div>
                <p class="text-[0.6rem] text-paper/40 leading-relaxed mb-3">Cutting a person's brakes is not a dispute. It is an attempt on a person's life dressed up as a mechanical fault. When viewed against the full pattern — gas meter tampering, smeared substances, faeces on door handles, false police reports, the antisemitic outburst in the Registrar — the brake-cutting incident confirms that this conduct was coordinated, escalating, and deliberately dangerous.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mt-3">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Dashcam places Raz at the vehicle before the drive</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Mechanic's findings confirm deliberate interference with brake system</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Adam did not know about the tampering until after he had already driven</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Second documented act of vehicle-related sabotage by Raz (cf. Mercedes breakdown, Timeline 2024)</p></div>
                </div>
            </div>
        </div>

        <!-- Raz — suspected theft of contractors' lock box (Episode 5) -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.5)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.45rem] tracking-[0.2em] uppercase px-2 py-1 border border-gold/30 text-gold" style="background:rgba(201,138,16,0.07)">Suspected · Raz &nbsp;·&nbsp; Cross-Reference: Episode 5</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE CONTRACTORS' LOCK BOX.<br><span class="text-gold">STOLEN — AND ADAM SUSPECTS RAZ.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">At the social-housing property at the centre of <a href="/episode-5" class="text-gold underline decoration-gold/40 hover:decoration-gold transition-colors">Episode 5</a>, a lock box was placed outside the house so contractors could access the property to carry out the long-overdue repairs. The lock box was stolen. Adam Watson suspects it was taken by <strong class="text-paper/65">Raz</strong> — Samira Khalaj's husband.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45">If that suspicion is right, the theft fits the pattern documented throughout this section: gas-pipeline tampering, brake-cutting, smeared substances, and false reports — conduct designed to obstruct, endanger, and harass. Stealing the contractors' lock box would obstruct the very repairs a tribunal had already ordered, dragging the same campaign of interference into the Episode 5 matter.</p>
        </div>

        <!-- Medical evidence callout -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.3)">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE JAW THAT WAS JUST "SORE."<br><span class="text-hot">A DOCTOR'S NOTE DOESN'T MAKE IT TRUE.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Samira Khalaj swore to police that Adam Watson — a man of significant physical size — punched her in the jaw. She attended a doctor. The doctor's finding: her jaw was "sore."</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">A punch to the jaw from a person of Adam's build does not produce a jaw that is merely "sore." It produces fractures. It produces wiring. It produces documented emergency presentations. A jaw that is "sore" is a jaw that has not been punched — it is a jaw belonging to someone who visited a doctor seeking a document and received the most conservative finding available.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">The Allegation</div>
                    <p class="text-[0.62rem] text-paper/40 leading-relaxed">Sworn police statement. Claimed Adam Watson punched her in the jaw. Medical examination obtained to support claim.</p>
                </div>
                <div class="border border-sage/20 p-5" style="background:rgba(61,122,74,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-2">The Medical Finding</div>
                    <p class="text-[0.62rem] text-paper/40 leading-relaxed">Doctor's report: jaw "sore." No fracture. No imaging. No emergency presentation. No findings consistent with a blow from a person of Adam's size.</p>
                </div>
            </div>
        </div>

        <!-- Socrates / fabricated order callout -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.3)">

            <!-- Socrates header with photo -->
            <div class="flex gap-5 mb-5 items-start">
                <div class="shrink-0 w-24 border border-paper/[0.07] overflow-hidden" style="aspect-ratio:2/3">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/socrates.jpg" alt="Socrates Zidane Abdul Rahmahn Burazer" class="w-full h-full object-cover object-top" />
                </div>
                <div>
                    <h3 class="font-display text-2xl tracking-wide mb-2 leading-tight">SOCRATES ZIDANE ABDUL RAHMAHN BURAZER.<br><span class="text-gold">TWICE CHARGED. MENTAL HEALTH ACT USED AS SHIELD.</span></h3>
                    <p class="text-[0.6rem] text-paper/35 italic leading-relaxed">One of 7 children by a Muslim migrant father who has fathered each child by a different wife — a pattern the father actively coaches his sons to replicate.</p>
                </div>
            </div>

            <!-- Sex with minor / s.14 block -->
            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Charges — Sexual Offences / Minor</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Socrates Zidane Abdul Rahmahn has been charged on <strong class="text-paper/60">at least two separate occasions</strong> for sexual intercourse with a person under the age of consent. The victim was 15 years old. On both occasions, Socrates escaped criminal conviction by invoking <strong class="text-paper/60">Section 14 of the Mental Health (Forensic Provisions) Act</strong> — a provision designed to divert genuinely mentally unwell accused away from the criminal justice system and into treatment.</p>
                <div class="border-l-4 border-hot/40 pl-4" style="background:rgba(193,68,14,0.04);padding:0.9rem 0.9rem 0.9rem 1.1rem">
                    <div class="text-[0.47rem] tracking-[0.18em] uppercase text-hot mb-2">The Systemic Problem</div>
                    <p class="text-[0.62rem] text-paper/38 leading-relaxed">Section 14 was not designed to provide repeat offenders with a reusable escape mechanism. Its repeated deployment to avoid accountability for child sexual offences raises serious questions about how the Act is being administered — and whether it is now functioning as an instrument of predation rather than protection.</p>
                </div>
            </div>

            <!-- Weave Youth psychologist block -->
            <div class="border border-violet/20 p-5 mb-5" style="background:rgba(124,106,170,0.03)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-3" style="color:#7c6aaa">Weave Youth &amp; Community Services — Psychologist Recording</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">A psychologist employed by <strong class="text-paper/60">Weave Youth &amp; Community Services</strong> — a service ostensibly providing mental health support to young people — was <strong class="text-paper/60">recorded by Socrates</strong> coaching him on how to manufacture evidence and fabricate circumstances to get Adam Watson into trouble with police.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">This conduct violates every foundational obligation in mental health ethics:</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-3">
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5" style="color:#7c6aaa">✗</span><p class="text-[0.58rem] text-paper/38 leading-relaxed"><strong class="text-paper/50">Non-maleficence (Do No Harm)</strong> — the psychologist actively facilitated harm against a third party</p></div>
                        <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5" style="color:#7c6aaa">✗</span><p class="text-[0.58rem] text-paper/38 leading-relaxed"><strong class="text-paper/50">APS Code of Ethics B.1</strong> — psychologists must not engage in conduct that exploits or harms others</p></div>
                        <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5" style="color:#7c6aaa">✗</span><p class="text-[0.58rem] text-paper/38 leading-relaxed"><strong class="text-paper/50">Duty of Integrity</strong> — coaching a client to fabricate police complaints is a fundamental breach of professional honesty obligations</p></div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5" style="color:#7c6aaa">✗</span><p class="text-[0.58rem] text-paper/38 leading-relaxed"><strong class="text-paper/50">National Law (Health Practitioner)</strong> — behaviour that could constitute unprofessional conduct or misconduct reportable to AHPRA</p></div>
                        <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5" style="color:#7c6aaa">✗</span><p class="text-[0.58rem] text-paper/38 leading-relaxed"><strong class="text-paper/50">Beneficence</strong> — using a therapeutic relationship to coach the client toward criminal conduct is the inverse of therapeutic benefit</p></div>
                        <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5" style="color:#7c6aaa">✗</span><p class="text-[0.58rem] text-paper/38 leading-relaxed"><strong class="text-paper/50">Confidentiality obligations</strong> — the recording itself and what it captures raise questions about whether this conduct is reportable under mandatory obligations</p></div>
                    </div>
                </div>
                <p class="text-[0.62rem] text-paper/35 leading-relaxed italic">The recording exists. It is in evidence. Weave Youth &amp; Community Services has been put on notice.</p>
            </div>

            <!-- Family background -->
            <div class="border border-paper/[0.06] p-5 mb-5" style="background:rgba(0,0,0,0.1)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-3">Background — Family Structure</div>
                <p class="text-[0.68rem] text-paper/40 leading-relaxed mb-2">Socrates is one of <strong class="text-paper/55">seven children</strong> fathered by a Muslim migrant man — each child born to a different woman. The father has openly coached his sons to replicate this pattern. Socrates's father has also accused Adam Watson of being a <strong class="text-paper/55">pedophile</strong> — an allegation that is false, unsubstantiated, and consistent with a broader strategy across multiple individuals in this narrative of deploying child-related allegations to discredit and isolate Adam Watson.</p>
                <p class="text-[0.68rem] text-paper/35 leading-relaxed italic">Adam Watson denies the allegation in the clearest possible terms. No charge, complaint, or finding of any kind has ever been made against him in this regard.</p>
            </div>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">When Socrates learned what Samira was doing to Adam — the false police statement, the pressure campaign, the feces on the door handle — he armed himself with an axe, went to her house, and struck her in the head. He has been charged for this. Combined with his existing charges, he faces a maximum sentence of 25 years.</p>
            <div class="border-l-4 border-gold/50 pl-5 py-1 mb-5" style="background:rgba(201,138,16,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">The Fabrication Attempt</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">Police and Samira Khalaj are now attempting to leverage Socrates's position — facing 25 years — to get him to swear an affidavit claiming the attack on Samira was carried out on Adam Watson's direct orders. There is no evidence of this. Adam did not order it. The attempt to produce such an affidavit under those circumstances is a fabrication.</p>
            </div>
            <div class="border-l-4 border-hot/40 pl-5 mb-5" style="background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Samira's Allegation — Denied by Both</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">Samira Khalaj is now making the allegation that Adam Watson <em>paid</em> Socrates to attack her with the axe. Adam Watson denies this. Socrates denies this. There is no evidence of any payment. The allegation is consistent with the broader pattern of Samira using third parties and legal proceedings to attach criminal liability to Adam Watson for acts he did not commission or carry out.</p>
            </div>

            <!-- Socrates threatens Adam directly -->
            <div class="border border-hot/30 p-5 mb-5" style="background:rgba(193,68,14,0.05)">
                <div class="flex items-center gap-2 mb-3">
                    <span class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">Direct Threat — Socrates to Adam Watson</span>
                    <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/50 text-hot px-1.5 py-0.5">EXTORTION</span>
                </div>
                <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">"I'LL TELL POLICE YOU COACHED ME TO HURT HER."<br><span class="text-hot">SOCRATES THREATENS ADAM WATSON DIRECTLY.</span></h4>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">Socrates Zidane Abdul Rahmahn Burazer — a person Adam Watson had been helping with legal representation — directly threatened Adam Watson that he would go to police and tell them Adam had coached him to hurt Samira Khalaj. The threat was made to Adam personally. It was not a vague implication. It was a direct statement: comply, or I tell police you ordered it.</p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-4">
                    <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-1">The Threat</div>
                        <div class="font-display text-base text-hot mb-1">MADE DIRECTLY</div>
                        <p class="text-[0.6rem] text-paper/38 leading-relaxed">Socrates told Adam Watson he would go to police and claim Adam had coached him to attack Samira Khalaj — a false claim, made as leverage.</p>
                    </div>
                    <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-1">The Context</div>
                        <div class="font-display text-base text-hot mb-1">BITING THE HAND</div>
                        <p class="text-[0.6rem] text-paper/38 leading-relaxed">Adam Watson had been assisting Socrates with his legal situation. The threat was made by a person whose legal expenses and representation Adam was actively supporting.</p>
                    </div>
                    <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-1">The Reality</div>
                        <div class="font-display text-base text-hot mb-1">FALSE. DENIED.</div>
                        <p class="text-[0.6rem] text-paper/38 leading-relaxed">Adam Watson did not coach Socrates to harm anyone. The threat is a fabrication used as personal leverage — consistent with the pattern of false accusations documented throughout this chapter.</p>
                    </div>
                </div>
                <div class="border-l-4 border-hot/40 pl-4 py-1" style="background:rgba(193,68,14,0.03)">
                    <p class="text-[0.65rem] text-paper/40 leading-relaxed">The threat is an attempt to use a false narrative — the same false narrative that police and Samira Khalaj are independently trying to construct — as personal leverage against Adam Watson. Whether Socrates arrived at this independently or was coached to make it is a question the investigation is pursuing. What is clear is that a person who received help from Adam Watson used that position to threaten him with fabricated criminal liability.</p>
                </div>
            </div>

            <!-- False rape allegation — girlfriend's brother -->
            <div class="border-l-4 border-hot/55 pl-5 mb-6 mt-6" style="background:rgba(193,68,14,0.06);padding:1.2rem 1rem 1.2rem 1.25rem">
                <div class="flex items-center gap-3 mb-3">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">False Rape Allegation — Girlfriend's Brother</div>
                    <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25 border border-paper/10 px-2 py-0.5">Recording Proved Consent · Allegation Collapsed</div>
                </div>
                <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">WENT TO THE POLICE STATION WITH HIS FATHER.<br><span class="text-hot">THE RECORDING SHOWED IT WAS CONSENSUAL.</span></h4>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">Socrates Zidane Abdul Rahmahn willingly performed oral sex on his girlfriend's brother. He then attended a police station with his father and alleged he had been forced — a false rape allegation against a man he had approached consensually. The girlfriend's brother had recorded the encounter on his phone. The recording showed Socrates participating willingly. It showed no coercion, no force, no distress — nothing that was consistent with the allegation Socrates had just made at the police station.</p>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-5">When police attended the girlfriend's brother about the allegation, he presented the recording. He made one thing unambiguous: the recording was shown to the police officer to establish that what had occurred was consensual, and it was not to be distributed. The officer was able to view a recording that directly contradicted the sworn complaint Socrates had made. The allegation collapsed on contact with the evidence.</p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-5">
                    <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-2">What Socrates Did</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Willingly performed oral sex on his girlfriend's brother</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Attended police station with his father</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Alleged he had been forced — false rape allegation</p></div>
                        </div>
                    </div>
                    <div class="border border-sage/20 p-4" style="background:rgba(61,122,74,0.04)">
                        <div class="text-[0.44rem] tracking-[0.15em] uppercase text-sage mb-2">The Recording</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Girlfriend's brother had recorded the encounter</p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Showed to the attending police officer to prove consent</p></div>
                            <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Made clear: for evidentiary purposes only — not for distribution</p></div>
                        </div>
                    </div>
                    <div class="border border-paper/[0.08] p-4" style="background:rgba(12,8,4,0.3)">
                        <div class="text-[0.44rem] tracking-[0.15em] uppercase text-paper/35 mb-2">Outcome</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-paper/40 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Recording directly contradicted the sworn allegation</p></div>
                            <div class="flex gap-2 items-start"><span class="text-paper/40 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Allegation collapsed on contact with the evidence</p></div>
                            <div class="flex gap-2 items-start"><span class="text-paper/40 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">No conviction — Socrates's account disproved</p></div>
                        </div>
                    </div>
                </div>

                <!-- The danger callout -->
                <div class="border border-hot/30 p-5" style="background:rgba(193,68,14,0.05)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">The Pattern — Why People Like Socrates Are So Dangerous</div>
                    <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">FALSE RAPE ALLEGATIONS ARE NOT A MISTAKE.<br><span class="text-hot">THEY ARE A WEAPON. AND THEY DO DAMAGE EVEN WHEN THEY FAIL.</span></h4>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Socrates Zidane Abdul Rahmahn has now deployed false sexual allegations on multiple occasions against multiple people, using multiple mechanisms. He invoked Section 14 twice to escape conviction for sexual intercourse with a 15-year-old. He made a false rape allegation against his girlfriend's brother — a man who could only clear himself because he had a recording. He threatened Adam Watson with fabricated criminal liability. He was coached by a psychologist to manufacture evidence against Adam Watson and recorded doing so.</p>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">The girlfriend's brother was protected by the existence of a recording. Most people are not. In the absence of that recording, a sworn police statement alleging rape — made by a person accompanied by his father at a police station, presenting as a victim — would have proceeded. The accused would have faced investigation, potential charge, disclosure to employers, damage to relationships, and the psychological cost of defending a false allegation through a system that presumes the complainant's good faith. The recording was the only thing that stood between a false accusation and a destroyed life.</p>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed">This is what makes people like Socrates systemically dangerous: they understand that the allegation itself is the punishment. Courts require proof. The community does not. An employer does not. A family does not. The allegation circulates before the outcome is known — and in many cases the outcome, however exculpatory, never catches up with the damage the initial allegation caused. Socrates has used this mechanism repeatedly. He will continue to use it for as long as the system allows him to.</p>
                </div>
            </div>

            <!-- Aboriginal Legal Aid — ATSILS — Brief lost / OLSC complaint -->
            <div class="border-l-4 border-gold/40 pl-5 mb-2" style="background:rgba(201,138,16,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                <!-- ATSILS Logo + header -->
                <div class="flex gap-4 items-start mb-4">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/samira_socrates/atsils_logo_home-300x152.png" alt="Aboriginal Legal Aid — ATSILS" class="shrink-0 h-12 w-auto opacity-80" style="max-width:120px" />
                    <div>
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-1">Latest Development — Legal Representation</div>
                        <h4 class="font-display text-lg tracking-wide leading-tight">ABORIGINAL LEGAL AID LOSES THE BRIEF.<br><span class="text-hot">DVR FOOTAGE GONE. 8-WEEK DELAY. $1,500 PER BRIEF.</span></h4>
                    </div>
                </div>

                <!-- Lost Brief of Evidence -->
                <div class="border border-hot/20 p-4 mb-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Critical Failure — Brief of Evidence Lost</div>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-2">Aboriginal Legal Aid — acting as Socrates's representatives for his assault charge relating to Samira — <strong class="text-paper/60">lost the entire Brief of Evidence</strong>, including the DVR footage. Police are now required to order everything again from scratch. This process will take <strong class="text-paper/60">a minimum of 8 weeks</strong>.</p>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed">This delay is entirely through no fault of Socrates. It is a direct consequence of the incompetence of those appointed to represent him.</p>
                </div>

                <!-- $1,500 per brief -->
                <div class="border border-gold/20 p-4 mb-4" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">Cost to Socrates — $1,500 Per Brief</div>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed">Because the original brief was lost, Socrates will be required to <strong class="text-paper/60">pay the police $1,500 for each brief</strong> pertaining to his charges. This financial burden falls on him directly — a young man with no money — as a consequence not of anything he did, but of the <strong class="text-paper/60">utter incompetence of Aboriginal Legal Aid</strong>. The legal system is punishing the client for his representative's failure.</p>
                </div>

                <!-- ALS funding loss -->
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">Aboriginal Legal Aid are at risk of <strong class="text-paper/60">losing their funding</strong> due to systemic incompetence in carrying out their mandate. This incident — losing an entire Brief of Evidence including DVR footage — is precisely the kind of institutional failure that warrants that outcome.</p>

                <!-- AI self-representation note -->
                <div class="border border-sage/20 p-4 mb-4" style="background:rgba(61,122,74,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-2">A Note on Self-Representation &amp; AI</div>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed">Cases like this are a reminder that <strong class="text-paper/60">in many circumstances you are better off being self-represented with the assistance of AI</strong> than relying on a funded legal service that loses your brief, delays your proceedings by months, and passes the bill for their incompetence onto you. Legal aid, when poorly administered, can be worse than no representation at all.</p>
                </div>

                <!-- OLSC Complaint -->
                <div class="border border-violet/20 p-4 mb-4" style="background:rgba(124,106,170,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">OLSC Complaint — Filed Against Aboriginal Legal Aid</div>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">A formal complaint has been lodged with the <strong class="text-paper/60">Office of the Legal Services Commissioner (OLSC)</strong> documenting the failures of Aboriginal Legal Aid in this matter.</p>
                    <!-- Issues noted in the complaint -->
                    <div class="border border-violet/10 p-3 mb-3" style="background:rgba(124,106,170,0.04)">
                        <div class="text-[0.45rem] tracking-[0.18em] uppercase mb-2" style="color:#7c6aaa">Issues Identified in the Complaint</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed"><strong class="text-paper/50">Loss of Brief of Evidence</strong> — the entirety of the brief, including DVR footage, was lost under their custody — a fundamental failure of document management and client care</p></div>
                            <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed"><strong class="text-paper/50">Financial harm to client</strong> — Socrates is personally liable for $1,500 per brief reorder cost as a direct consequence of their failure, not his own conduct</p></div>
                            <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed"><strong class="text-paper/50">Procedural delay</strong> — an 8-week delay imposed on Socrates's matter with real consequences for bail conditions and court timelines — entirely the fault of the representative, not the client</p></div>
                            <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed"><strong class="text-paper/50">Breach of competency obligations</strong> — legal practitioners are required to handle client materials with reasonable care; losing the brief constitutes a failure of basic professional duty under the Legal Profession Uniform Law</p></div>
                            <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed"><strong class="text-paper/50">Client welfare failure</strong> — the cumulative effect of these failures has caused material harm to a vulnerable client already facing compounding criminal charges with no financial means to absorb additional costs</p></div>
                        </div>
                    </div>
                    <div class="ev-file ef-violet" onclick="openMV('pdf-olsc-atsils-complaint')">
                        <div class="ev-icon ev-doc">📄</div>
                        <div class="ev-meta">
                            <div class="ev-name">OLSC_Complaint_Form_burazer_redacted.pdf</div>
                            <div class="ev-desc">PDF · OLSC Complaint · Formal complaint against Aboriginal Legal Aid — Brief of Evidence lost including DVR footage — redacted copy</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                </div>

                <!-- Stephen Alexander takeover -->
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Stephen Alexander — the lawyer now acting in this matter — held a linked call with Socrates, the Aboriginal Legal Services representative, and the psychologist sourced by the Aboriginal Legal Services. On that call, Stephen Alexander informed both the ALS lawyer and the psychologist that Socrates is no longer to be represented by them. Stephen Alexander will source his own psychologist for Socrates going forward.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Socrates's father has made insinuations that Adam Watson and Stephen Alexander are attempting to rort Socrates. This is a curious allegation — Socrates has no money. There is nothing to rort. His father has also stated that Socrates should remain with the Aboriginal Legal Services, and has made comments suggesting Adam Watson's motivation for helping Socrates is that he is a young boy — despite the fact that Socrates is 19 years old.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-4">
                    <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.03)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">What Happened</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Aboriginal Legal Aid lost the entire Brief of Evidence including DVR footage</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Police must reorder — 8-week delay imposed on Socrates through no fault of his own</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Socrates faces $1,500 per brief cost — a consequence of ALS incompetence, not his conduct</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">OLSC complaint lodged documenting the failures</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Stephen Alexander held linked call with ALS lawyer, ALS psychologist, and Socrates</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">ALS and their psychologist stood down — Stephen Alexander to source independent psychologist</p></div>
                        </div>
                    </div>
                    <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Father's Allegations — Addressed</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Alleged Adam &amp; Stephen Alexander are "rorting" Socrates — Socrates has no money</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Suggested Adam's motive is that Socrates is a "young boy" — Socrates is 19</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">✗</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Wants Socrates to remain with ALS — the same service being stood down for incompetence</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Socrates — Housing NSW eviction + Edgecliff Lodge Motel -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(61,122,74,0.3)">
            <h3 class="font-display text-2xl tracking-wide mb-2 leading-tight">SOCRATES — EVICTED FROM HOUSING NSW.<br><span style="color:#3d7a4a">EDGECLIFF LODGE MOTEL. $189 A NIGHT. BED BUGS.</span></h3>
            <p class="text-[0.6rem] text-paper/35 italic leading-relaxed mb-5">Government accommodation sourced at taxpayer expense. A room that gave him something extra.</p>

            <!-- Housing NSW eviction -->
            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Evicted — Housing NSW</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">Socrates has been kicked out of his NSW social housing accommodation. He was removed and required to find alternative housing in the middle of active legal proceedings — another instability layered onto an already precarious situation.</p>
            </div>

            <!-- Edgecliff Lodge Motel -->
            <div class="border border-gold/20 p-5 mb-5" style="background:rgba(201,138,16,0.03)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">Edgecliff Lodge Motel — Government Funded at $189/Night</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">In response to his eviction, Socrates was placed in <strong class="text-paper/60">Edgecliff Lodge Motel</strong> — accommodation sourced and funded by the government at a cost of <strong class="text-paper/60">$189 per night</strong> to the taxpayer. This is where the system chose to house a young man with no income and unresolved charges.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">The outcome: Socrates developed a <strong class="text-paper/60">bed bug infestation</strong> during his stay.</p>
            </div>

            <!-- Bed bugs / compliance callout -->
            <div class="border border-hot/30 p-5 mb-5" style="background:rgba(193,68,14,0.05)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Compliance Failure — Bed Bug Infestation</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">A government-funded property collecting <strong class="text-paper/60">$189 per night</strong> to house vulnerable people has an active bed bug infestation. The operator appears to be receiving public funds without meeting basic hygiene and pest-control obligations. <strong class="text-paper/60">This property requires a compliance inspection.</strong></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.45rem] tracking-[0.15em] uppercase text-hot mb-2">Questions That Need Answers</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">When was the property last inspected for pest compliance?</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Has the operator been notified of the infestation? What remediation has been carried out?</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Are other rooms affected? Are other government-placed tenants at risk?</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Does $189/night carry any minimum standard of accommodation quality the operator is required to meet?</p></div>
                        </div>
                    </div>
                    <div class="border border-paper/[0.07] p-3" style="background:rgba(0,0,0,0.1)">
                        <div class="text-[0.45rem] tracking-[0.15em] uppercase text-paper/22 mb-2">The Broader Pattern</div>
                        <p class="text-[0.58rem] text-paper/38 leading-relaxed">The government is paying a private operator $189 per night to house a vulnerable person. That operator is not spending that money on basic maintenance or pest control. This arrangement warrants scrutiny from NSW Fair Trading, local council environmental health officers, and whoever administers the government contract with this property. The money is going somewhere — it is not going into de-lousing the rooms.</p>
                    </div>
                </div>
            </div>

            <div class="border-l-4 border-sage/40 pl-5" style="background:rgba(61,122,74,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-2">Status</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">Socrates remains at Edgecliff Lodge Motel. The bed bug issue has not been resolved. The government continues to pay $189 per night for accommodation that does not meet basic standards. This property should be checked for compliance — and the operator should not continue receiving public funds while running an infested premises.</p>
            </div>
        </div>

        <!-- Registrar recording -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.3)">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">"GAS ALL YOU JEWS."<br><span class="text-hot">SAID IN A REGISTRAR. RECORDED.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Samira Khalaj appeared in the Registrar. Her lawyer had already abandoned her. In the proceedings, she turned to Adam Watson and said: <span class="font-display text-paper/70">"Gas all you Jews!"</span></p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The Registrar captured the statement on the official court recording. Samira was subsequently charged and remanded in custody. She has since been released and continues to engage in the same behaviour.</p>
            <div class="border border-paper/[0.07] p-5 mb-2" style="background:rgba(0,0,0,0.15)">
                <div class="flex items-center justify-between mb-3">
                    <div>
                        <div class="text-[0.48rem] tracking-[0.22em] uppercase text-hot mb-1">🎙 Court Recording — Registrar</div>
                        <div class="text-[0.6rem] font-display tracking-wide text-paper/50">SAMIRA KHALAJ — "GAS ALL YOU JEWS" — REGISTRAR CAPTURE</div>
                        <div class="text-[0.5rem] text-paper/25 mt-1">Official court recording · Antisemitic outburst · Samira Khalaj charged and remanded</div>
                    </div>
                    <a href="#" onclick="return false;" class="text-[0.52rem] tracking-[0.15em] uppercase text-hot border border-hot/40 px-3 py-1.5 hover:bg-hot/10 transition-colors cursor-pointer">Listen →</a>
                </div>
                <p class="text-[0.55rem] text-paper/25 leading-relaxed">Captured during Registrar proceedings. Samira Khalaj's lawyer had withdrawn prior to this hearing. The statement was directed at Adam Watson and recorded in its entirety by the Registrar's audio system.</p>
            </div>
        </div>

        <!-- Stat strip -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-10 reveal">
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-hot mb-1">0</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Injuries found</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Doctor found jaw "sore"</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-gold mb-1">25</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Yrs max — Socrates</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Combined charges</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-paper/50 mb-1">1</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Arrest — gas meters</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Samira's husband</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-sage mb-1">↑</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Offers received</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Coogee property listed</div>
            </div>
        </div>

        <!-- Raz knife + police assault -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.3)">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">RAZ WITH A KNIFE.<br><span class="text-hot">THEN SIX POLICE WHO CALLED HIM A JEWISH FAGGOT.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Samira's husband is Raz. After Adam obtained an AVO against Samira, Raz confronted Adam with a knife — almost certainly as retaliation for the AVO. Adam called police. Six officers attended.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">What followed was not protection. The officers told Adam he was making trouble on the radio by talking about protecting Jewish people and that he was going against Muslims. They called him a <span class="font-display text-paper/65">"Jewish Faggot."</span> They said he was lying about having an AVO. Adam told them they were uneducated. They then assaulted and bashed him.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">After the assault, Adam — who is diabetic — asked the officers for his diabetic medication. They refused. He subsequently sent a video of himself bleeding.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">What The Officers Said</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Called Adam a "Jewish Faggot"</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Said he was making trouble on the radio for talking about protecting Jewish people</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Claimed he was "going against Muslims"</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Denied the AVO existed — told Adam he was lying about it</p></div>
                    </div>
                </div>
                <div class="border border-paper/[0.07] p-5" style="background:rgba(0,0,0,0.1)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-2">What They Did</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="text-paper/30 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Assaulted and bashed Adam Watson</p></div>
                        <div class="flex gap-2 items-start"><span class="text-paper/30 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Refused to provide his diabetic medication when he asked</p></div>
                        <div class="flex gap-2 items-start"><span class="text-paper/30 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Left him bleeding. Adam subsequently filmed himself and sent the video.</p></div>
                    </div>
                </div>
            </div>

            <!-- Evidence cards -->
            <div class="space-y-2 mb-6">
                <div class="ev-file ef-hot" onclick="openMV('photo-adam-bleeding')">
                    <div class="ev-icon ev-photo">📷</div>
                    <div class="ev-meta">
                        <div class="ev-name">adam_watson_after_police_assault.jpg</div>
                        <div class="ev-desc">Photo · Video still · Adam Watson bleeding following police assault — filmed by Adam, sent to Kosta</div>
                    </div>
                    <span class="ev-cta">View →</span>
                </div>
                <div class="ev-file ef-sage" onclick="openMV('pdf-lecc-complaint')">
                    <div class="ev-icon ev-doc">📄</div>
                    <div class="ev-meta">
                        <div class="ev-name">lecc_complaint_six_officers.pdf</div>
                        <div class="ev-desc">PDF · LECC Complaint · Seeking names of 6 officers · Antisemitic slurs + assault + medication denial</div>
                    </div>
                    <span class="ev-cta">Download →</span>
                </div>
            </div>

            <div class="border border-paper/[0.07] p-5 mb-5" style="background:rgba(0,0,0,0.12)">
                <div class="text-[0.48rem] tracking-[0.22em] uppercase text-paper/22 mb-3">The Samira Filming — NSW Land and Housing Corporation</div>
                <p class="text-[0.65rem] text-paper/40 leading-relaxed mb-2">Samira Khalaj filmed the incident in its entirety and provided the recording to the NSW Land and Housing Corporation. That footage has not been made available to Adam Watson.</p>
                <p class="text-[0.65rem] text-paper/40 leading-relaxed">A subpoena is currently being prepared to compel its production — it is directly relevant to the AVO proceedings. Samira filmed it. She knows what it shows. The subpoena will obtain it regardless.</p>
            </div>

            <div class="border-l-4 border-hot/50 pl-5 py-1" style="background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">LECC Complaint — Active</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">A complaint has been lodged with the Law Enforcement Conduct Commission to obtain the names and badge numbers of all six officers present. This is the mechanism for bringing them to account. The LECC complaint is provided as a download on this page.</p>
            </div>
        </div>

        <!-- Update stat strip to include 6 officers -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-px bg-paper/[0.04] mb-10 reveal">
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-hot mb-1">6</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Officers attended</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Raz knife call — assault followed</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-hot mb-1">0</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Medication provided</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Diabetic — request refused</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-gold mb-1">LECC</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Complaint active</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">6 officers — names sought</div>
            </div>
        </div>

        <!-- Closing note -->
        <div class="border-l-4 pl-6 py-1 reveal" style="border-color:rgba(124,106,170,0.5);background:rgba(124,106,170,0.03);padding:1.25rem 1.25rem 1.25rem 1.5rem">
            <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">Pattern</div>
            <p class="text-[0.68rem] text-paper/45 leading-relaxed">Adam helped Samira get an AVO. She used the knowledge of how that system works to turn it against him. Her husband came back with a knife. Six officers attended and beat Adam instead of arresting the man with the knife — calling him a Jewish Faggot and denying him his medication. Her associate attacked her with an axe — and police want that man to say it was Adam's idea. She made antisemitic statements in open court and was charged for them. She is still free. She is still doing it. The property where this began has been listed for sale.</p>
        </div>

        <!-- Samira escalation — AVO against Adam, coal deal, Abbas Zein, defamation -->
        <div class="story-chapter reveal mt-12" style="border-left-color:rgba(193,68,14,0.8)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Breaking · Women's Refuge · AVO Against Adam · Coal Deal · Abbas Zein</span>
                <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-hot/40 text-hot px-1.5 py-0.5">ESCALATION</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">SHE'S GOT AN AVO AGAINST ADAM.<br><span class="text-hot">FROM A WOMEN'S REFUGE. WITH A LAWYER WHO SHOULDN'T HAVE THOSE FILES.</span></h3>
            <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"Samira is at a women's refuge. She's taken out an interim AVO against Adam Watson — claiming he sent Socrates to get her. Her lawyer has accessed Adam's past cases, including his assault conviction, which he is appealing and pursuing malicious prosecution against QLD police for. The AVO has been leaked to a company involved in a coal deal Adam is buying into. Adam fears being framed. He is fighting every element of this."</p>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Samira Khalaj is currently at a women's refuge. From that position she has obtained an interim AVO against Adam Watson. The central allegation in the AVO is that Adam sent Socrates — a third party known to both — to locate or intimidate her. Adam Watson denies this. The AVO is interim: no hearing has been set, no evidence has been tested, and no findings of fact have been made. An interim AVO is an administrative instrument, not a judicial determination.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Adam Watson fears being framed — potentially for an offence that could carry a 25-year sentence. The escalation from antisemitic outbursts in open court, to a refuge, to a lawyer with access to sealed files, to a leaked AVO, follows a pattern that has been documented across every chapter of this section: each step uses the system against the person the system should be protecting.</p>

            <!-- The lawyer and file access -->
            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-3">The Lawyer — Accessing Files She Shouldn't Have</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Samira has retained a lawyer who has accessed Adam Watson's past court cases — including his assault conviction, which Adam is currently appealing. Adam is also pursuing a malicious prosecution claim against Queensland Police in connection with that conviction. The lawyer's access to those files — described as access she was not authorised to have — is itself the subject of concern.</p>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed">That the assault conviction is under active appeal and subject to a malicious prosecution claim means it cannot be treated as settled fact. Using an actively-appealed conviction as supporting context in an AVO application — through a lawyer who may not have had legitimate access to the file — is a serious procedural concern that will be raised in the proceedings.</p>
            </div>

            <!-- AVO leaked to coal deal — Dave Hodgson / CSEQ Global -->
            <div class="border border-gold/20 p-5 mb-5" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-gold mb-4">The AVO Leaked to a Coal Deal — Dave Hodgson · CSEQ Global · People in Glass Houses</div>

                <!-- Hodgson identity card -->
                <div class="border border-gold/15 mb-5 overflow-hidden" style="background:rgba(0,0,0,0.2)">
                    <div class="flex gap-4 p-4 items-start">
                        <div class="shrink-0">
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/david_hodgson.jpg"
                                 alt="Dave Hodgson — CSEQ Global · Disqualified Director"
                                 class="border border-gold/20 object-cover object-top"
                                 style="width:90px;height:110px;object-fit:cover"
                                 loading="lazy" />
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2 flex-wrap">
                                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/cseq_global.jpg"
                                     alt="CSEQ Global"
                                     class="h-7 w-auto object-contain"
                                     loading="lazy" />
                                <span class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/30">·</span>
                                <a href="https://cseqglobal.com/" target="_blank" rel="noopener" class="text-[0.44rem] tracking-[0.14em] uppercase text-gold/60 hover:text-gold transition-colors">cseqglobal.com ↗</a>
                            </div>
                            <div class="font-display text-lg text-paper/80 leading-tight mb-1">DAVE HODGSON</div>
                            <div class="text-[0.46rem] tracking-[0.16em] uppercase text-hot mb-2">Disqualified from managing corporations · 5 years · ASIC · Federal Court · Sept 2025</div>
                            <p class="text-[0.58rem] text-paper/40 leading-relaxed">Queensland businessman. Sole director of Macrolend and Great Southland. Raised ~$109M from investors without an AFSL. Claimed Kradle Software held $1.02B in intangible assets — balance sheet showed $11,810. Now at CSEQ Global — whose coal transaction Adam Watson is acquiring into. His comment on receiving the interim AVO: <em class="text-paper/55">"This doesn't look good."</em></p>
                        </div>
                    </div>
                </div>

                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">The interim AVO — unheard, with no facts determined — was disclosed to Dave Hodgson in the context of a coal transaction at CSEQ Global that Adam Watson is pursuing. Hodgson's response on receiving it was: <strong class="text-paper/65">"This doesn't look good."</strong> The record of who Dave Hodgson is, and what the Federal Court has found about him, provides the full context for that comment.</p>

                <!-- Federal Court findings -->
                <div class="border border-hot/15 p-4 mb-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-3">What the Federal Court Found About Dave Hodgson — ASIC v Hodgson (2025)</div>
                    <div class="space-y-2 mb-4">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Operated without an Australian Financial Services Licence (AFSL) <strong class="text-paper/60">2015–2023</strong> while raising <strong class="text-paper/60">~$109 million from investors</strong> through Macrolend and Great Southland</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Claimed Kradle Software had intangible assets of <strong class="text-paper/60">$1.02 billion</strong> — actual balance sheet: <strong class="text-hot">$11,810</strong></p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Justice Derrington: the $1 billion figure was <em>"no more than a figure plucked out of the air"</em> — she called it a <strong class="text-paper/60">"magic pudding" approach to valuation</strong> and found it <em>"entirely fanciful"</em></p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Misrepresented how investor funds would be used. Great Southland (Belize-registered) operated unlawfully in Australia while unregistered for over six years</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-hot">Second ASIC action</strong> — previously banned in 2015 for two years for false statements in investment disclosures (Exalt Global Funds)</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Justice Derrington: <em>"I cannot accept that he feels any remorse, beyond the fact that he became subject to ASIC's attention"</em> — called his AFSL compliance approach <em>"laissez-faire"</em></p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-hot">Disqualified from managing corporations for five years. Permanently restrained from financial services without an AFSL.</strong> Ordered to pay ASIC's costs.</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Also reportedly a convicted felon</p></div>
                    </div>
                    <div class="flex flex-wrap gap-3 pt-2 border-t border-hot/10">
                        <a href="https://www.abc.net.au/news/2025-09-23/dave-hodgson-queensland-businessman-asic/105806258" target="_blank" rel="noopener" class="text-[0.43rem] tracking-[0.12em] uppercase text-hot/60 hover:text-hot transition-colors">ABC News: "Magic Pudding" Report ↗</a>
                        <span class="text-paper/15">·</span>
                        <a href="https://www.asic.gov.au/about-asic/news-centre/find-a-media-release/2025-releases/25-212mr-david-paul-hodgson-disqualified-for-unlicensed-financial-services-and-misleading-statements/" target="_blank" rel="noopener" class="text-[0.43rem] tracking-[0.12em] uppercase text-hot/60 hover:text-hot transition-colors">ASIC Media Release 25-212MR ↗</a>
                    </div>
                </div>

                <!-- Shadow director / phoenix activity / continuing pattern -->
                <div class="border border-hot/20 p-4 mb-4" style="background:rgba(193,68,14,0.05)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-3">Continuing the Pattern — Shadow Director · Phoenix Activity · Post-Disqualification Conduct</div>

                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Despite being disqualified from managing corporations for five years, Dave Hodgson is communicating with Adam Watson from a <strong class="text-paper/65">CSEQ Global company email address</strong>. He does not appear in the team section of the CSEQ Global website. His face is not there. His name is not listed. Yet he is corresponding on behalf of the company in relation to a commercial transaction. This is the conduct profile of a <strong class="text-paper/65">shadow director</strong> — a person who exercises the functions of a director while not formally appearing as one, precisely because they are legally prohibited from doing so.</p>

                    <div class="border border-paper/[0.08] p-4 mb-4" style="background:rgba(0,0,0,0.18)">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-2">What Is a Shadow Director?</div>
                        <p class="text-[0.62rem] text-paper/42 leading-relaxed mb-2">Under the Corporations Act 2001 (Cth), a shadow director is a person whose instructions or wishes the directors of a company are accustomed to act upon — regardless of whether they hold a formal director title. Shadow directorship is a legal recognition that disqualified persons sometimes continue to exercise control from behind the scenes, using others as the formal face of the company.</p>
                        <p class="text-[0.62rem] text-paper/42 leading-relaxed">Acting as a shadow director while under a court-ordered disqualification from managing corporations is a criminal offence under the Corporations Act. A person found to be doing so is not protected by the absence of a formal title — the substance of the conduct is what matters, not the label.</p>
                    </div>

                    <div class="border border-hot/15 p-4 mb-4" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">Phoenix Activity — The Related Criminal Charge</div>
                        <p class="text-[0.62rem] text-paper/42 leading-relaxed mb-2">Dave Hodgson also faces a criminal charge in relation to <strong class="text-paper/55">phoenix activity</strong>. Phoenix activity is the practice of deliberately liquidating or winding up a company to avoid its debts and legal obligations — and then resuming the same business through a new company, leaving creditors, employees, and the tax office unpaid while the controllers walk away and start again under a different name.</p>
                        <p class="text-[0.62rem] text-paper/42 leading-relaxed mb-2">It is one of the most damaging forms of corporate misconduct in Australia. The Australian Taxation Office and ASIC both treat it as a serious priority. It costs the Australian economy billions of dollars annually — in unpaid superannuation, outstanding tax debts, employee entitlements stripped away, and the destruction of businesses that dealt in good faith with companies that were already being wound down for reuse.</p>
                        <p class="text-[0.62rem] text-paper/42 leading-relaxed">A person who has been: (1) banned by ASIC in 2015; (2) disqualified for five years by a Federal Court in 2025 for raising $109M without a licence; (3) reportedly convicted of a criminal offence; and (4) charged with phoenix activity — is now, apparently, participating in a commercial transaction from a company email address while absent from that company's public team page. The pattern is consistent across decades. It has not stopped.</p>
                    </div>

                    <div class="border-l-4 border-hot/40 pl-4" style="background:rgba(193,68,14,0.04);padding:0.75rem 0.75rem 0.75rem 1rem">
                        <div class="text-[0.43rem] tracking-[0.16em] uppercase text-hot mb-1.5">Observable Indicators — Shadow Directorship</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Communicating with Adam Watson from a CSEQ Global company email address</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Not listed on the CSEQ Global website team section — no photo, no name, no title</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Making commercial communications and judgements (including on Adam's AVO) on the company's behalf</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Disqualified from managing corporations — the same function he appears to be performing</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Email signature identifying himself as <strong class="text-paper/60">Founder</strong> — a title that signals ongoing operational authority, not passive association</p></div>
                        </div>
                    </div>

                    <!-- Email screenshot — Founder signature vs absent from team page -->
                    <div class="mt-4 border border-hot/20 overflow-hidden">
                        <div class="flex items-center justify-between px-4 py-2.5" style="background:rgba(193,68,14,0.07)">
                            <div class="flex items-center gap-2">
                                <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📧 Evidence — Email From Dave Hodgson</span>
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/30">— Signature: Founder, CSEQ Global · Sent to Adam Watson</span>
                            </div>
                        </div>
                        <div class="p-4" style="background:rgba(0,0,0,0.22)">
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/west_kira/chat_founder_shadow.jpg" alt="Email from Dave Hodgson — Founder signature, CSEQ Global" class="w-full border border-paper/10 mb-3">
                            <p class="text-[0.6rem] text-paper/42 leading-relaxed mb-2">This email, sent by Dave Hodgson to Adam Watson, shows his email signature identifying his position as <strong class="text-paper/60">Founder</strong> at CSEQ Global. A "Founder" is not a passive historical label — it is an active claim of ongoing authority and identity within the organisation. Founders direct strategy, set tone, and are understood internally and externally as the person the company represents.</p>
                            <p class="text-[0.6rem] text-paper/42 leading-relaxed">Compare this with the CSEQ Global team page at <span class="text-paper/55">cseqglobal.com/team</span>: Dave Hodgson's name does not appear. His photograph is absent. He does not exist on the public-facing record of who runs the company. Yet here, in a direct communication to a commercial counterparty, he identifies himself as its Founder. The gap between what is shown publicly and what is communicated privately is precisely the shadow director pattern.</p>
                        </div>
                        <div class="px-4 py-2 border-t border-hot/15 text-center" style="background:rgba(0,0,0,0.25)">
                            <span class="text-[0.43rem] tracking-[0.12em] uppercase text-paper/30">Dave Hodgson · Email Signature "Founder" · CSEQ Global · Absent from Public Team Page</span>
                        </div>
                    </div>
                </div>

                <!-- The business partner — $4M and a director trap -->
                <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-3">The Business Partner — $4 Million and a Director Trap</div>
                    <p class="text-[0.66rem] text-paper/48 leading-relaxed mb-3">There is a human cost to all of this, and it has a face. Dave Hodgson's business partner sank <strong class="text-paper/65">$4 million of his own capital</strong> into these companies — and Hodgson convinced him to become a <strong class="text-paper/65">Director of all of them</strong>. As a director, that partner carried the legal exposure and personal liability while the structures were run the way they were run.</p>
                    <p class="text-[0.66rem] text-paper/48 leading-relaxed">He has been hoodwinked. His capital is gone, the directorships left him holding the risk, and at <strong class="text-paper/65">70 years old</strong> he now has to go back to work. That is what sits underneath the corporate language of disqualification, shadow directorship, and phoenix activity: a man near the end of his working life, $4 million down, starting over because he trusted the wrong person.</p>
                </div>

                <!-- Church as cover — Empower Church Caloundra -->
                <div class="border border-gold/20 p-5 mb-5" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-3">The Church as Cover — Empower Church Caloundra</div>
                    <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">FINED BY ASIC.<br><span class="text-gold">PREACHING FROM THE PULPIT.</span></h4>
                    <p class="text-[0.66rem] text-paper/48 leading-relaxed mb-3">Dave Hodgson's sermons are listed on the website of <strong class="text-paper/65">Empower Church Caloundra</strong>, where he appears as a speaker. The same man a Federal Court disqualified from managing corporations — banned by ASIC in 2015, penalised again in 2025 — presents himself from the pulpit as a devout and good Christian.</p>
                    <p class="text-[0.66rem] text-paper/48 leading-relaxed mb-3">It is a familiar pattern: the church as a cover. A profile of faith and community standing is precisely the kind of reputational armour that makes investors lower their guard. The devout presentation and the conduct ASIC penalised are not two separate stories — read together, the piety is part of how the conduct was made to look respectable.</p>
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-[0.46rem] tracking-[0.18em] uppercase text-gold/70">Dave Hodgson — Sermon · Empower Church Caloundra</span>
                            <a href="https://empowerchurch.org.au/speakers/dave-hodgson" target="_blank" rel="noopener" class="text-[0.44rem] tracking-[0.14em] uppercase text-gold border border-gold/30 px-2 py-0.5 hover:bg-gold/10 transition-colors">Speaker Page ↗</a>
                        </div>
                        <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;border:1px solid rgba(245,234,212,0.07)">
                            <iframe src="https://www.youtube.com/embed/FlOhulfdYjU" style="position:absolute;top:0;left:0;width:100%;height:100%;border:0" title="Dave Hodgson sermon — Empower Church Caloundra" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Character — got a woman pregnant, kicked her out -->
                <div class="border-l-4 border-hot/50 pl-4 py-2 mb-5" style="background:rgba(193,68,14,0.05)">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-1">The Conduct Behind the Piety</div>
                    <p class="text-[0.64rem] text-paper/48 leading-relaxed">It has been communicated by a reputable source that Dave Hodgson <strong class="text-paper/65">got a woman pregnant and then kicked her out onto the street</strong>. It is a private matter, but it speaks to the same gap this section keeps returning to — between the devout, community-minded figure presented from the pulpit and the conduct of the man himself.</p>
                </div>

                <!-- Adam's email — the certification invoice challenge -->
                <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-3">Adam Watson's Email — The Invoice That Would Settle It</div>
                    <p class="text-[0.66rem] text-paper/48 leading-relaxed mb-3">Adam Watson admonished Dave Hodgson directly in an email. The issue is straightforward. Dave Hodgson has claimed he has an <strong class="text-paper/65">invention</strong> — and that all that stands between it and working is <strong class="text-paper/65">certification</strong>. CSEQ Global describes itself as the vehicle for "the unique global decarbonization technology and process known as Cseq", positioned against wind and solar as a route to the Paris Agreement targets.</p>
                    <div class="border-l-4 border-gold/40 pl-4 py-2 mb-3" style="background:rgba(201,138,16,0.04)">
                        <p class="text-[0.62rem] text-paper/45 leading-relaxed italic">"Cseq Global was established to deliver the unique global decarbonization technology and process known as Cseq… in an effort to eliminate carbon emissions, wind and solar have been the focus of investment in alternative energy. However, they depend entirely on ideal weather conditions, they require a stable grid network and they cannot be relied upon for sustainable base load power generation without significant battery storage infrastructure. As a result, the future investment requirement for wind and solar renewable energy is enormous if the world is to reach Paris Agreement Climate Change targets by 2030, 2035 and 2050."</p>
                        <p class="text-[0.5rem] text-paper/30 mt-1">— CSEQ Global, About page</p>
                    </div>
                    <p class="text-[0.66rem] text-paper/48 leading-relaxed mb-3">Adam Watson's position is simple: just provide the <strong class="text-paper/65">invoice from the certification company</strong>. If certification is genuinely the only thing standing between this invention and a working, world-changing technology, then producing the certifier's invoice to settle the matter should be no obstacle at all. Adam Watson is asking for exactly that — the invoice — to settle. After all, if that is what is stopping his incredible carbon invention, he would have no issue providing it.</p>
                    <p class="text-[0.66rem] text-paper/48 leading-relaxed mb-3">But there is a complication. Dave Hodgson wants money <strong class="text-paper/65">not just for certification</strong> — he also wants money to <strong class="text-paper/65">pay off ASIC</strong>, because the Judge awarded costs against him. That is a very different request from "fund the certification of an invention."</p>
                    <p class="text-[0.66rem] text-paper/48 leading-relaxed mb-3">It looks like misleading conduct continuing, despite his insistence that it is not. If this invention is going to be worth <strong class="text-paper/65">billions</strong> once certified, the logical move is obvious: pay the certification company's invoice, prove the concept works, and then <strong class="text-paper/65">float it on the stock exchange or sell it</strong> on the strength of that certification. The reluctance to do the one simple thing that would prove it is itself the tell.</p>
                    <p class="text-[0.66rem] text-paper/48 leading-relaxed">And in either case — even if the invention is entirely real — he is still <strong class="text-paper/65">operating a company as a shadow director while disqualified</strong>, which is a criminal offence under the Corporations Act that can carry a term of imprisonment. The merits of the technology do not cure that.</p>
                    <div class="border border-gold/15 p-3 mt-3" style="background:rgba(201,138,16,0.03)">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold mb-1.5">The Assets Behind It</div>
                        <p class="text-[0.6rem] text-paper/45 leading-relaxed">Beyond the invention question, Dave Hodgson's companies still own <strong class="text-paper/60">real assets</strong> — commodities — which <strong class="text-paper/60">Mrs Rinehart and her investors are pursuing</strong>. Whatever the status of the technology, those underlying commodity assets are real, and they are the subject of active commercial interest.</p>
                    </div>
                </div>

                <!-- People in glass houses -->
                <div class="border-l-4 border-gold/50 pl-5" style="background:rgba(201,138,16,0.06);padding:1rem 1rem 1rem 1.25rem">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-2">People in Glass Houses — Mrs Rinehart's Observation Applied</div>
                    <p class="text-[0.65rem] text-paper/52 leading-relaxed mb-3">Mrs Rinehart's observation is precise here: people in glass houses shouldn't throw stones. A person disqualified from managing corporations by a Federal Court — for raising $109 million from investors without a licence, for claiming a company worth $11,810 had $1.02 billion in intangible assets, for misleading investors about the use of their funds, with a prior 2015 ASIC ban for false statements, and who is also reportedly a convicted felon — is commenting on an unheard interim AVO filed by a woman who said "Gas all you Jews" in open court and was charged for it.</p>
                    <p class="text-[0.65rem] text-paper/52 leading-relaxed mb-3">An interim AVO is not a conviction. It is not a finding of fact. It is a claim — filed, not yet heard, not yet tested. It says nothing about Adam Watson because no court has yet said anything about Adam Watson in connection with it. Dave Hodgson saying <em>"this doesn't look good"</em> about an unheard AVO, from his current position, is a comment that invites scrutiny of who is making it.</p>
                    <p class="text-[0.65rem] text-paper/52 leading-relaxed">The AVO disclosure to commercial parties — before any hearing, before any finding, before any determination — is itself part of the ongoing record of how this matter has been conducted. It will remain on this site.</p>
                </div>
            </div>

            <!-- Abbas Zein -->
            <div class="border border-hot/25 p-5 mb-5" style="background:rgba(193,68,14,0.05)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-3">Abbas Zein — Contacted by Samira Through Her Lawyer</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Samira, through her lawyer, has made contact with Abbas Zein. Abbas Zein owes Adam Watson money. The contact — made possible by a lawyer's access to case files that were not meant to be accessible — is not coincidental. Reaching out to a person with a financial debt to Adam Watson, at a time when Samira is pursuing an AVO and making serious allegations, is a targeted act of commercial and legal pressure.</p>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed">Samira has been explicit in her intent: she wants to destroy Adam Watson's life. This is not an inference from conduct. It is a statement of purpose. The contact with Abbas Zein is consistent with that stated objective — locate the financial vulnerabilities, apply pressure at every point.</p>
            </div>

            <!-- Adam's response — defamation research -->
            <div class="border border-paper/[0.08] p-5 mb-5" style="background:rgba(0,0,0,0.18)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-paper/30 mb-3">Adam's Response — Defamation Proceedings Being Considered</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Adam Watson has been researching the basis for defamation proceedings against Samira Khalaj. In doing so he has engaged with the question of what the interim AVO actually prohibits — and has received advice correcting some initial assumptions about how NSW AVO conditions operate in practice.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The key points from that process: an interim AVO imposes conditions on the <em>defendant</em> (Adam), not on Samira. Standard conditions include no stalking or intimidating the protected person. There is no default "no publishing" condition — publication can sometimes constitute harassment or intimidation, but only if the conditions explicitly provide for it. There is no condition preventing Samira from accessing court records; any restriction on court record access would require a separate suppression order, not an AVO. The AVO does not require Adam to act through a solicitor.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">What matters, practically, is what the specific conditions on the actual order say — and the interim order and any suppression order need to be reviewed by a solicitor together with Adam's criminal and CCA matters. That is the step being taken. The defamation question — whether Samira's conduct and statements give rise to a claim — is a separate matter being evaluated concurrently.</p>
            </div>

            <!-- AVO conditions note -->
            <div class="border-l-4 border-gold/50 pl-5 mb-5" style="background:rgba(201,138,16,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-2">A Note on Interim AVOs — What They Are and Aren't</div>
                <p class="text-[0.63rem] text-paper/45 leading-relaxed mb-2">An interim AVO is issued without a full hearing. It is a protective measure pending a determination, not a finding of fact. It does not mean the allegations within it have been assessed, tested, or proven. The person named as defendant in an interim AVO retains the presumption of innocence and the right to contest the application at a hearing.</p>
                <p class="text-[0.63rem] text-paper/45 leading-relaxed">Using an unheard interim AVO to affect a person's commercial dealings, to reach their creditors, or to construct a public narrative of guilt before any hearing has been set — is a misuse of the instrument. It is being documented here because the pattern of misuse is as important as the instrument itself.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">AVO Status</div>
                    <div class="font-display text-sm text-hot mb-1">Interim · No Hearing Set</div>
                    <p class="text-[0.55rem] text-paper/40 leading-relaxed">Interim AVO obtained by Samira against Adam. No hearing date. No facts determined. Adam contests all allegations.</p>
                </div>
                <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.04)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold mb-2">Assault Conviction</div>
                    <div class="font-display text-sm text-gold mb-1">Under Appeal</div>
                    <p class="text-[0.55rem] text-paper/40 leading-relaxed">Adam is appealing his assault conviction and pursuing malicious prosecution against QLD Police. The conviction is not settled.</p>
                </div>
                <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.14)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-2">Defamation</div>
                    <div class="font-display text-sm text-paper/60 mb-1">Being Researched</div>
                    <p class="text-[0.55rem] text-paper/40 leading-relaxed">Adam Watson is researching defamation proceedings against Samira Khalaj. Solicitor review of all matters is in progress.</p>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     CHANGFA REAL ESTATE — HOME INVASION
══════════════════════════════════════ -->
<section id="changfa" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.06) 0%,transparent 65%)">
    <div class="max-w-6xl mx-auto">

        <!-- Section header -->
        <div class="reveal mb-10 pb-6 border-b border-paper/[0.06]">
            <div class="flex items-start justify-between gap-6 flex-wrap">
                <div>
                    <div class="flex items-center gap-3 mb-3">
                        <span class="text-[0.48rem] tracking-[0.22em] uppercase border border-hot/40 text-hot px-2 py-1">Chapter F — Home Invasion · Changfa Real Estate</span>
                    </div>
                    <h2 class="font-display leading-none tracking-wide mb-4" style="font-size:clamp(2rem,5vw,4rem)">THEY DISCONNECTED<br>THE POWER.<br><span class="text-hot">THEN WALKED IN.</span></h2>
                    <p class="font-serif italic text-paper/50 text-lg leading-relaxed max-w-xl">"The Changfa agent cut the power from the external powerbox, entered through the garage, and left fingerprints. Police confirmed them. QCAT ordered the power back on. Bodie Chalmers saw it happen. They paid him $30,000 to stay quiet. He didn't get the full amount. Now he's talking."</p>
                </div>
                <div class="flex flex-col items-end gap-3 shrink-0">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/changfa/changfa_logo.png" alt="Changfa Real Estate" class="h-10 w-auto opacity-65" />
                    <div class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/22 text-right">$2 billion annual turnover<br>per Changfa website</div>
                </div>
            </div>
        </div>

        <!-- Key facts -->
        <div class="reveal mb-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px" style="background:rgba(193,68,14,0.18)">
                <div class="p-5 text-center" style="background:#0c0804">
                    <div class="font-display text-3xl text-hot mb-1">$2B</div>
                    <div class="text-[0.52rem] tracking-[0.16em] uppercase text-paper/40 leading-snug">Changfa Turnover</div>
                    <div class="text-[0.48rem] text-paper/22 mt-1">Per company website</div>
                </div>
                <div class="p-5 text-center" style="background:#0c0804">
                    <div class="font-display text-3xl text-hot mb-1">$30K</div>
                    <div class="text-[0.52rem] tracking-[0.16em] uppercase text-paper/40 leading-snug">Bribe to Bodie</div>
                    <div class="text-[0.48rem] text-paper/22 mt-1">To stay quiet · Not fully paid</div>
                </div>
                <div class="p-5 text-center" style="background:#0c0804">
                    <div class="font-display text-3xl text-gold mb-1">1</div>
                    <div class="text-[0.52rem] tracking-[0.16em] uppercase text-paper/40 leading-snug">QCAT Order</div>
                    <div class="text-[0.48rem] text-paper/22 mt-1">Q6970-25 · Power restored</div>
                </div>
                <div class="p-5 text-center" style="background:#0c0804">
                    <div class="font-display text-3xl text-sage mb-1">✓</div>
                    <div class="text-[0.52rem] tracking-[0.16em] uppercase text-paper/40 leading-snug">Prints Confirmed</div>
                    <div class="text-[0.48rem] text-paper/22 mt-1">Police forensics · Powerbox</div>
                </div>
            </div>
        </div>

        <!-- Agent photo + intro -->
        <div class="reveal mb-10">
            <div class="mx-auto border border-paper/[0.07] overflow-hidden" style="max-width:340px">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/changfa/changfa-agent.jpg" alt="Changfa Agent — Unnamed" class="w-full object-cover object-top" loading="lazy" />
                <div class="px-4 py-2 border-t border-paper/[0.06]" style="background:rgba(0,0,0,0.25)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot/60">Changfa Agent — Name Withheld Pending Charge</div>
                </div>
            </div>
            <div class="mt-5">
                <h3 class="font-display text-2xl tracking-wide mb-3 text-paper/85 leading-tight">THE AGENT WITHOUT A NAME.<br><span class="text-hot">THE FINGERPRINTS THAT REMAINED.</span></h3>
                <p class="text-[0.68rem] leading-relaxed text-paper/45">A Changfa Real Estate agent — unnamed here pending the laying of formal charges — disconnected power to Adam Watson's property by accessing the external powerbox. This allowed entry through the garage. He did not expect police to dust the powerbox for fingerprints. They did. The prints confirmed his presence. He is being charged with home invasion.</p>
            </div>
        </div>

        <!-- Incident 01 — Power / Garage -->
        <div class="reveal story-chapter mb-8" style="border-left-color:rgba(193,68,14,0.35)">
            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Incident 01 — The Home Invasion</div>
            <h4 class="font-display text-xl tracking-wide mb-4 leading-tight">POWERBOX. GARAGE. FINGERPRINTS.</h4>
            <p class="text-[0.68rem] leading-relaxed text-paper/50 mb-3">The Changfa agent accessed the external electricity powerbox at Adam Watson's property and disconnected the power supply. The loss of power disabled the garage entry system, allowing him to enter the property through the garage without authorisation.</p>
            <p class="text-[0.68rem] leading-relaxed text-paper/50 mb-3">When police attended, they dusted the powerbox for fingerprints. The prints were confirmed as belonging to the Changfa agent. That forensic evidence formed the basis of the home invasion charge now being pursued against him. The fingerprint evidence was also presented at the subsequent QCAT hearing — where QCAT issued formal order Q6970-25, directing Changfa Real Estate to restore electricity to Adam's property immediately.</p>
            <p class="text-[0.68rem] leading-relaxed text-paper/50">Following the QCAT order, a letter was sent to Jenny, the Changfa agent handling the matter, requesting power be restored as quickly as possible in compliance with the order. That correspondence is in the evidence vault below.</p>
        </div>

        <!-- Incident 02 — Milo bottle -->
        <div class="reveal story-chapter mb-8" style="border-left-color:rgba(193,68,14,0.35)">
            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Incident 02 — The Milo Bottle</div>
            <h4 class="font-display text-xl tracking-wide mb-4 leading-tight">AN AVR LINK TO JUSTICE BECKETT.<br><span class="text-hot">A BOTTLE THROWN AT HIS HEAD.</span></h4>
            <p class="text-[0.68rem] leading-relaxed text-paper/50 mb-3">On a separate occasion, the same Changfa agent entered Adam Watson's property without permission. At the time, Adam was connected via AVR link for a matter being heard before Justice Beckett. The agent entered and threw a Milo bottle at Adam's head.</p>
            <p class="text-[0.68rem] leading-relaxed text-paper/50">The incident was witnessed. It occurred while Adam was actively appearing before the court. The act jeopardised the court matter and constituted an assault in circumstances designed to disrupt active legal proceedings before a sitting judge.</p>
        </div>

        <!-- Bodie Chalmers — bribed witness -->
        <div class="reveal mb-10 border-l-4 border-hot pl-5 py-1">
            <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Bodie Chalmers — Witness · Bribed · Now Talking</div>
            <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">$30,000. HE WATCHED IT HAPPEN.<br><span class="text-hot">HE DIDN'T GET THE FULL AMOUNT. NOW HE'S IN CUSTODY.</span></h4>
            <p class="text-[0.68rem] leading-relaxed text-paper/45 mb-3">Bodie Chalmers was present and witnessed the home invasion by the Changfa agent. Shortly after, the Changfa agent paid Bodie Chalmers $30,000 to remain silent about what he had seen. Bodie accepted the arrangement — and stayed quiet.</p>
            <p class="text-[0.68rem] leading-relaxed text-paper/45 mb-4">The payment was not made in full. Bodie Chalmers did not receive the complete agreed amount. He is now in custody, facing his own charges. From custody, he has agreed to talk. He has agreed to sign a formal statement describing what he witnessed — the disconnection of power, the entry through the garage, and the conduct of the Changfa agent inside the property.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">The Arrangement</div>
                    <div class="space-y-1.5">
                        <div class="text-[0.58rem] text-paper/40">$30,000 paid to Bodie Chalmers</div>
                        <div class="text-[0.58rem] text-paper/40">Condition: silence on the home invasion</div>
                        <div class="text-[0.58rem] text-paper/40">Payment was not made in full</div>
                    </div>
                </div>
                <div class="border border-sage/20 p-4" style="background:rgba(61,122,74,0.03)">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-sage mb-2">Now in Custody — Now Talking</div>
                    <div class="space-y-1.5">
                        <div class="text-[0.58rem] text-paper/40">✓ Bodie Chalmers in custody</div>
                        <div class="text-[0.58rem] text-paper/40">✓ Agreed to sign formal statement</div>
                        <div class="text-[0.58rem] text-paper/40">✓ Will describe what he witnessed</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TICA Blacklist -->
        <div class="story-chapter reveal mt-8" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-5">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">TICA — Tenancy Blacklist</span>
                <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Agent with criminal charges. Still on the register.</span>
            </div>

            <!-- TICA logo + headline -->
            <div class="flex flex-col sm:flex-row sm:items-center gap-5 mb-6">
                <div class="shrink-0 border border-paper/[0.07] p-3" style="background:rgba(12,8,4,0.4)">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/tica_logo.png" alt="TICA — Tenancy Information Centre Australasia" class="h-10 w-auto opacity-80" />
                </div>
                <div>
                    <h3 class="font-display text-3xl tracking-wide leading-tight mb-1">BLACKLISTED BY THE AGENT<br><span class="text-hot">WHO BROKE INTO HIS HOME.</span></h3>
                    <p class="text-[0.52rem] tracking-[0.16em] uppercase text-paper/30">Tenancy Information Centre Australasia · National Blacklist Register</p>
                </div>
            </div>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The same Changfa agent who disconnected Adam Watson's power, entered his property without authorisation, and is now facing a home invasion charge — used his position as a real estate agent to lodge Adam Watson's name on the TICA tenancy blacklist. TICA is a national database used by landlords and agents across Australia to screen rental applicants. A listing on TICA effectively blocks a person from accessing private rental accommodation.</p>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Adam Watson attempted to appeal the TICA listing. He was informed that the appeal process must be conducted through the post — physical mail only. The appeal has not been resolved. His name remains on the TICA register. Despite TICA having received a copy of the QCAT order Q6970-25 — a formal tribunal decision issued on the basis of the police fingerprint evidence against the Changfa agent — TICA has not lifted the blacklist. Adam Watson is currently sleeping out of his car as a direct consequence.</p>

            <!-- Impact stat bar -->
            <div class="grid grid-cols-3 gap-px bg-paper/[0.04] mb-6">
                <div class="bg-ink px-4 py-5 text-center">
                    <div class="font-display text-3xl text-hot mb-1">0</div>
                    <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/28">Rentals accessible</div>
                    <div class="text-[0.44rem] text-paper/18 mt-1">TICA listing blocks all applications</div>
                </div>
                <div class="bg-ink px-4 py-5 text-center">
                    <div class="font-display text-3xl text-hot mb-1">📮</div>
                    <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/28">Appeal method</div>
                    <div class="text-[0.44rem] text-paper/18 mt-1">Post only — not online, not in person</div>
                </div>
                <div class="bg-ink px-4 py-5 text-center">
                    <div class="font-display text-3xl text-hot mb-1">🚗</div>
                    <div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/28">Current housing</div>
                    <div class="text-[0.44rem] text-paper/18 mt-1">Sleeping out of his car</div>
                </div>
            </div>

            <!-- QCAT order not actioned callout -->
            <div class="border-l-4 border-hot/50 pl-5 mb-6" style="background:rgba(193,68,14,0.05);padding:1.1rem 1rem 1.1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">QCAT Order Provided — Blacklist Not Lifted</div>
                <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">TICA RECEIVED THE QCAT ORDER.<br><span class="text-hot">ADAM'S NAME IS STILL ON THE REGISTER.</span></h4>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">QCAT Order Q6970-25 was issued on the basis of the police fingerprint evidence confirming the Changfa agent's unauthorised access to Adam Watson's property. That order — a formal tribunal finding — was provided to TICA. The order was constructed from the police investigation reports documenting the agent's conduct.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">TICA has not used this material to remove Adam Watson from the blacklist. A document issued by a Queensland tribunal, based on police forensic evidence, confirming that the agent who listed the tenant was committing a criminal act at the time — has not been treated as sufficient grounds to lift the listing. Adam Watson remains on the register. He remains without housing.</p>
            </div>

            <!-- Ethical issues -->
            <div class="border border-gold/20 p-5 mb-2" style="background:rgba(201,138,16,0.03)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-4">Ethical & Systemic Issues — TICA Blacklisting</div>
                <div class="space-y-3">
                    <div class="flex gap-3 items-start">
                        <span class="text-hot text-xs shrink-0 mt-0.5">→</span>
                        <p class="text-[0.62rem] text-paper/45 leading-relaxed"><strong class="text-paper/65">Agent with criminal charges retains blacklisting power.</strong> The same individual facing home invasion charges has not been stripped of his ability to maintain a national tenancy blacklist entry against his victim. The system contains no automatic mechanism to suspend an agent's blacklisting authority when that agent is under criminal investigation.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="text-hot text-xs shrink-0 mt-0.5">→</span>
                        <p class="text-[0.62rem] text-paper/45 leading-relaxed"><strong class="text-paper/65">The appeal process is inaccessible by design.</strong> Requiring postal appeals in 2025 — when the listing itself was created digitally, is accessed digitally by landlords, and causes real-time harm — is a structural barrier that disproportionately affects people who are already in housing crisis and may not have a fixed address from which to send mail.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="text-hot text-xs shrink-0 mt-0.5">→</span>
                        <p class="text-[0.62rem] text-paper/45 leading-relaxed"><strong class="text-paper/65">Tribunal evidence ignored.</strong> TICA operates as a private register with no statutory obligation to act on formal court or tribunal findings. A QCAT order based on police forensic evidence — the highest standard of evidence available in a civil context — is apparently insufficient to trigger removal from a blacklist that is causing a person to sleep in their car.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="text-gold text-xs shrink-0 mt-0.5">→</span>
                        <p class="text-[0.62rem] text-paper/45 leading-relaxed"><strong class="text-paper/65">The victim pays the cost of the perpetrator's conduct.</strong> Adam Watson — whose home was broken into, whose power was cut, against whom a malicious blacklist entry was made — is sleeping in his car. The agent whose fingerprints were on the powerbox is still in the industry. This is the practical outcome of a system that protects the agent's data rights more vigorously than the tenant's housing rights.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Evidence vault -->
        <div class="reveal">
            <div class="text-[0.48rem] tracking-[0.24em] uppercase text-paper/20 mb-4">Changfa Evidence — 5 Objects</div>
            <div class="border border-paper/[0.07]" style="background:rgba(12,8,4,0.7)">

                <div class="ev-file ef-gold" onclick="openMV('image-electricity-1')">
                    <div class="ev-icon ev-img">📷</div>
                    <div class="ev-meta">
                        <div class="ev-name">electricity_disconnected.jpg</div>
                        <div class="ev-desc">Image · External powerbox · Electricity disconnected · Fingerprints confirmed by police forensics</div>
                    </div>
                    <span class="ev-cta" style="color:#c98a10">View ↗</span>
                </div>

                <div class="ev-file ef-gold" onclick="openMV('image-electricity-2')">
                    <div class="ev-icon ev-img">📷</div>
                    <div class="ev-meta">
                        <div class="ev-name">electricity_disconnected_2.jpg</div>
                        <div class="ev-desc">Image · Powerbox secondary angle · Corroborating forensic photograph</div>
                    </div>
                    <span class="ev-cta" style="color:#c98a10">View ↗</span>
                </div>

                <div class="ev-file ef-hot" onclick="openMV('pdf-qcat-changfa')">
                    <div class="ev-icon ev-pdf">PDF</div>
                    <div class="ev-meta">
                        <div class="ev-name">QCAT_Decision_Q6970-25.pdf</div>
                        <div class="ev-desc">PDF · QCAT Order Q6970-25 · Changfa directed to restore power · Issued on fingerprint evidence</div>
                    </div>
                    <span class="ev-cta text-hot">View ↗</span>
                </div>

                <div class="ev-file ef-gold" onclick="openMV('pdf-jenny-letter')">
                    <div class="ev-icon ev-pdf" style="background:rgba(201,138,16,0.08);color:#c98a10">PDF</div>
                    <div class="ev-meta">
                        <div class="ev-name">letter_to_jenny_redacted.pdf</div>
                        <div class="ev-desc">PDF · Post-QCAT letter to Jenny (Changfa) · Requesting power restored per order Q6970-25 · Redacted</div>
                    </div>
                    <span class="ev-cta" style="color:#c98a10">View ↗</span>
                </div>

                <div class="ev-file ef-hot" onclick="openMV('image-changfa-agent')">
                    <div class="ev-icon ev-img" style="background:rgba(193,68,14,0.1);color:#c1440e">📷</div>
                    <div class="ev-meta">
                        <div class="ev-name">changfa-agent.jpg</div>
                        <div class="ev-desc">Image · Changfa agent — unnamed pending charge · Subject of home invasion investigation</div>
                    </div>
                    <span class="ev-cta text-hot">View ↗</span>
                </div>

            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     RJ CRIMINAL PATTERN
══════════════════════════════════════ -->
<section id="rj" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.04) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Criminal Pattern — Episode 1</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">A PATTERN,<br><span class="text-hot">NOT AN INCIDENT.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">Car theft rings. Aggravated burglary. Mob violence. False allegations against a doctor. A laptop handed to Southport Police. A recording that triggered a corruption investigation.</p>
            </div>
            <div class="max-w-xs">
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag text-hot" style="color:#c1440e">⚖ Multiple Charges</span>
                    <span class="evidence-tag text-gold" style="color:#c98a10">🔍 Sex & Crime Squad</span>
                    <span class="evidence-tag text-sage" style="color:#3d7a4a">💻 Laptop — Southport Police</span>
                </div>
            </div>
        </div>

        <!-- RJ Character Profile -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.4)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Character Profile — RJ</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">RJ.<br><span class="text-hot">CAR THIEF. AMBUSH ORGANISER. RACE WEAPON.</span></h3>

            <!-- RJ photo ID card -->
            <div class="mb-6 border border-hot/20" style="background:rgba(193,68,14,0.03)">
                <div class="mx-auto border-b border-hot/15 overflow-hidden" style="max-width:340px">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/r+j/r_j_1.jpg" alt="RJ" class="w-full object-cover object-top" loading="lazy" />
                </div>
                <div class="p-5">
                    <div class="text-[0.45rem] tracking-[0.22em] uppercase text-hot mb-2">Identified</div>
                    <div class="font-display text-2xl tracking-wide text-paper/85 leading-tight mb-3">RJ</div>
                    <div class="text-[0.62rem] text-paper/45 leading-relaxed mb-2">Car thief. Ambush organiser. 13 documented incidents against Adam Watson. Subject of active investigation — Sex &amp; Crime Squad, Southport Police.</div>
                    <div class="text-[0.55rem] text-paper/28 leading-relaxed">Charged: aggravated burglary, organised mob violence, indecent exposure. QPS appealing suspended sentence. Laptop with incriminating evidence held by Southport Police.</div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-5">
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Documented Criminal Pattern</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Organised car theft ring — vehicles destroyed by fire</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Multiple aggravated burglary charges</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Directed mob violence — Pacific Fair and Helensvale</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">False sexual assault allegation — doctor cleared, civil action ongoing</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Premeditated ambush — Bridgestone Nerang</p></div>
                    </div>
                </div>
                <div class="border border-paper/[0.08] p-4" style="background:rgba(124,106,170,0.04)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-3" style="color:#7c6aaa">Digital Offences</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="mt-0.5 text-xs shrink-0" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Phone hacked while sitting outside Adam's home</p></div>
                        <div class="flex gap-2 items-start"><span class="mt-0.5 text-xs shrink-0" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Full contact list extracted and used for targeted intimidation</p></div>
                        <div class="flex gap-2 items-start"><span class="mt-0.5 text-xs shrink-0" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Alvin Li (Costar Real Estate) targeted with N-word extortion threat</p></div>
                        <div class="flex gap-2 items-start"><span class="mt-0.5 text-xs shrink-0" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Race weaponised as a threat to raise a mob against Adam Watson</p></div>
                    </div>
                </div>
                <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">Tactics &amp; Methods</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Uses younger associates as proxies — "just kids"</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Systematically uses false allegations to weaponise institutions (police, courts)</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Cultivates insider access (Bridgestone employee) to surveil targets</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Responds to police reporting with physical retaliation (ambush after laptop handover)</p></div>
                    </div>
                </div>
            </div>
            <div class="border-l-4 border-hot/50 pl-5" style="background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">RJ is not a person who commits opportunistic crimes. He organises them. He recruits for them. He uses insiders, proxies, and institutional processes as instruments. When those instruments fail — when footage captures his associates, when a laptop lands at Southport Police — his response is physical and premeditated. The pattern documented here is not a series of incidents. It is a methodology.</p>
            </div>
        </div>

        <!-- RJ Incident Timeline -->
        <div class="mb-12 reveal">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-5">Incident Timeline — RJ</div>
            <div class="space-y-px">
                <div class="tl-row grid grid-cols-[80px_1fr] gap-4 p-4"><div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">01</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Car Ring</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Car theft ring — vehicles burnt</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Member of organised car theft ring. Vehicles destroyed by fire.</div></div></div>
                <div class="tl-row grid grid-cols-[80px_1fr] gap-4 p-4"><div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">02</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Phone Theft</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Helensvale — three sent to rob Adam Watson</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Three filmed, arrested, gave evidence identifying RJ. Charged. Suspended sentence. QPS appealing. RJ now had Adam's address.</div></div></div>
                <div class="grid grid-cols-[80px_1fr] gap-4 p-4" style="background:rgba(193,68,14,0.04);border:1px solid rgba(193,68,14,0.15)"><div class="text-center"><div class="text-[0.72rem] tracking-[0.1em] uppercase font-bold text-hot">03</div><div class="text-[0.5rem] text-paper/45 mt-0.5">HACKED</div></div><div><div class="text-[0.73rem] font-display tracking-wide mb-0.5" style="color:rgba(245,234,212,0.84)">RJ sits outside Adam's home — hacks phone — steals contact list</div><div class="text-[0.62rem] leading-relaxed" style="color:rgba(245,234,212,0.58)">Having obtained Adam's address through the Helensvale robbery, RJ positioned himself outside Adam Watson's home and remotely accessed his phone, extracting his full contact list. He then used stolen contacts to intimidate Adam's network — including Alvin Li from Costar Real Estate.</div></div></div>
                <div class="tl-row grid grid-cols-[80px_1fr] gap-4 p-4"><div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">04</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Pacific Fair</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Five associates at Pacific Fair fruit shop</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Adam defended himself. One associate: broken jaw. All five gave statements identifying RJ. Charged. Released.</div></div></div>
                <div class="tl-row grid grid-cols-[80px_1fr] gap-4 p-4"><div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">05</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Burglary</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Aggravated burglary — Pacific Fair precinct</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Charged with aggravated burglary — phone theft outside Pacific Fair. Charged. Released.</div></div></div>
                <div class="tl-row grid grid-cols-[80px_1fr] gap-4 p-4"><div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">06</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Surfer's Para</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Surfer's Paradise — jumped out of car in a threatening manner, then ran</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">RJ spotted Adam and Kosta walking at Surfer's Paradise. Exited the vehicle in a threatening manner, then fled. Adam called Marc Barrow. Vehicle confiscated by police.</div></div></div>
                <div class="tl-row grid grid-cols-[80px_1fr] gap-4 p-4"><div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">07</div><div class="text-[0.45rem] text-paper/20 mt-0.5">False Allegation</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">False sexual assault allegation — local doctor</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Doctor's office raided. Doctor cleared of all criminal allegations. Civil lawsuit ongoing against insurance.</div></div></div>
                <div class="tl-row grid grid-cols-[80px_1fr] gap-4 p-4"><div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">08</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Shopping Centre</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Daily harassment of Adam Watson</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">Associates harassing Adam at local shopping centre specifically because of Sunlight.Quest and the viral video.</div></div></div>
                <div class="grid grid-cols-[80px_1fr] gap-4 bg-sage/[0.04] border border-sage/20 p-4"><div class="text-center"><div class="text-[0.5rem] tracking-[0.15em] uppercase text-sage">09</div><div class="text-[0.45rem] text-paper/20 mt-0.5">Laptop</div></div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Laptop with incriminating evidence → Southport Police</div><div class="text-[0.55rem] text-paper/30 leading-relaxed">RJ gave Adam Watson a laptop. Adam brought it to Southport Police Station, Sex & Crime Squad. Active investigation.</div></div></div>
                <div class="grid grid-cols-[80px_1fr] gap-4 p-4" style="background:rgba(193,68,14,0.07);border:1px solid rgba(193,68,14,0.28);border-left:3px solid #c1440e"><div class="text-center"><div class="text-[0.72rem] tracking-[0.1em] uppercase font-bold text-hot">10</div><div class="text-[0.5rem] text-paper/45 mt-0.5">AMBUSH</div></div><div><div class="text-[0.73rem] font-display tracking-wide text-paper/84 mb-0.5" style="color:rgba(245,234,212,0.84)">Bridgestone Nerang — premeditated ambush — after the laptop</div><div class="text-[0.62rem] leading-relaxed" style="color:rgba(245,234,212,0.58)">After Adam handed the laptop to Southport Police, RJ organised an ambush at Bridgestone Nerang. 3–4 people waited in a car. An orange-haired staff member at Bridgestone tipped them off — he has since been fired and charged. Adam defended himself with an implement, bashed RJ, and destroyed the car. Attackers: "We're just kids." Adam was charged. Police admitted they had to charge him to not look bad. He has never been convicted.</div></div></div>
                <div class="grid grid-cols-[80px_1fr] gap-4 p-4" style="background:rgba(124,106,170,0.07);border:1px solid rgba(124,106,170,0.25);border-left:3px solid #7c6aaa"><div class="text-center"><div class="text-[0.72rem] tracking-[0.1em] uppercase font-bold" style="color:#7c6aaa">11</div><div class="text-[0.5rem] text-paper/45 mt-0.5">CONFRONTED</div></div><div><div class="text-[0.73rem] font-display tracking-wide mb-0.5" style="color:rgba(245,234,212,0.84)">"You won't hit me — you have too much to lose."</div><div class="text-[0.62rem] leading-relaxed" style="color:rgba(245,234,212,0.58)">RJ approached someone who knew Adam and said "You won't hit me because you have too much to lose!" — banking on the person's reputation to act as a shield. The person's friend, a bricklayer, punched RJ in the face twice. A local police officer witnessed it and did nothing.</div></div></div>
                <div class="grid grid-cols-[80px_1fr] gap-4 p-4" style="background:rgba(193,68,14,0.07);border:1px solid rgba(193,68,14,0.28);border-left:3px solid #c1440e"><div class="text-center"><div class="text-[0.72rem] tracking-[0.1em] uppercase font-bold text-hot">12</div><div class="text-[0.5rem] text-paper/45 mt-0.5">G-LINK</div></div><div><div class="text-[0.73rem] font-display tracking-wide text-paper/84 mb-0.5" style="color:rgba(245,234,212,0.84)">G-Link tram — sexual harassment, false allegation against Adam Watson, footage proves lie</div><div class="text-[0.62rem] leading-relaxed" style="color:rgba(245,234,212,0.58)">Adam witnessed RJ and five accomplices on the G-Link tram sexually harassing a woman, demanding "Do you have a white pussy or a pink pussy?" A confrontation erupted. RJ's phone was thrown off the tram. Another male passenger punched one of RJ's associates. Police were called. One of RJ's group then claimed Adam had grabbed his backside — a false allegation. Tram footage reviewed by police disproved the claim entirely. The woman told RJ's group: "If my husband was here, he'd stab you."</div></div></div>
                <div class="grid grid-cols-[80px_1fr] gap-4 p-4" style="background:rgba(193,68,14,0.07);border:1px solid rgba(193,68,14,0.28);border-left:3px solid #c1440e"><div class="text-center"><div class="text-[0.72rem] tracking-[0.1em] uppercase font-bold text-hot">13</div><div class="text-[0.5rem] text-paper/45 mt-0.5">ADVANCES</div></div><div><div class="text-[0.73rem] font-display tracking-wide text-paper/84 mb-0.5" style="color:rgba(245,234,212,0.84)">Priceline chemist — indecent exposure + private number calls to Adam's home</div><div class="text-[0.62rem] leading-relaxed" style="color:rgba(245,234,212,0.58)">RJ spotted Adam at Priceline chemist, turned around and dropped his shorts, exposing himself. Photograph being supplied to police by Jason. Indecent exposure charge pending. RJ also continues to call Adam from private numbers asking if he can sleep at Adam's house — a pattern of continual unwanted advances toward the person he has spent months targeting with violence and intimidation.</div></div></div>
                <div class="grid grid-cols-[80px_1fr] gap-4 p-4" style="background:rgba(193,68,14,0.09);border:1px solid rgba(193,68,14,0.35);border-left:3px solid #c1440e"><div class="text-center"><div class="text-[0.72rem] tracking-[0.1em] uppercase font-bold text-hot">14</div><div class="text-[0.5rem] text-paper/45 mt-0.5">BEACH AMBUSH</div></div><div><div class="text-[0.73rem] font-display tracking-wide text-paper/84 mb-0.5" style="color:rgba(245,234,212,0.84)">Surfers Paradise — 6 people, balaclavas, death threats, chased into the ocean</div><div class="text-[0.62rem] leading-relaxed" style="color:rgba(245,234,212,0.58)">RJ had been calling Adam asking to stay at his house. He then pulled up at Surfers Paradise with 6 people — all in black, wearing balaclavas. Adam was forced to hide in the lifesavers tower. The lifeguard threatened RJ's group with a fire extinguisher. RJ was heard: <em>"I'm going to stab you, you little white cunt. You make videos about me and my sisters and you pull your dick over it."</em> Adam replied: <em>"I don't like girls."</em> RJ chased him. Adam ran into the ocean. Afterward RJ told people: <em>"He ran so fast like a little bitch."</em></div></div></div>
                <div class="grid grid-cols-[80px_1fr] gap-4 p-4" style="background:rgba(193,68,14,0.09);border:1px solid rgba(193,68,14,0.35);border-left:3px solid #c1440e"><div class="text-center"><div class="text-[0.72rem] tracking-[0.1em] uppercase font-bold text-hot">15</div><div class="text-[0.5rem] text-paper/45 mt-0.5">MERITON</div></div><div><div class="text-[0.73rem] font-display tracking-wide text-paper/84 mb-0.5" style="color:rgba(245,234,212,0.84)">Meriton foyer — false rape allegation, pedophile claim, arrested by police</div><div class="text-[0.62rem] leading-relaxed" style="color:rgba(245,234,212,0.58)">Adam went to the Meriton. RJ was in the foyer later that night. Adam asked staff to call police. RJ began shouting false allegations: <em>"You raped me. You put Bodie Chalmers in jail."</em> Then: <em>"He's a pedophile! He raped Keon in the shower!"</em> Adam's assessment: RJ is jealous he couldn't get cock. As police were arresting RJ on the premises, RJ called out: <em>"He wants the Vylen White killer deported! He's racist!"</em> The arresting officers replied: <em>"We should deport you too."</em></div></div></div>
            </div>
        </div>

        <!-- Pump Nightclub Employment -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.6)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Current Employment — Licensed Venue</span>
                <span class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/20 border border-paper/10 px-2 py-0.5">Pump Nightclub · Gold Coast</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">HE CURRENTLY WORKS AT<br><span class="text-hot">PUMP NIGHTCLUB.</span></h3>
            <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-6">"Aggravated burglary. Car theft ring. Mob violence. False sexual assault allegations. Indecent exposure. Racial abuse. And he works at a licensed nightclub on the Gold Coast."</p>

            <div class="grid grid-cols-1 lg:grid-cols-[200px_1fr] gap-8 mb-8 items-start">
                <!-- Logo -->
                <div class="border border-hot/15 p-5 text-center" style="background:rgba(193,68,14,0.03)">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/pump_nightclub_transparent.png" alt="Pump Nightclub" class="w-full max-w-[160px] mx-auto block mb-3" loading="lazy" />
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-1">Current Employer</div>
                    <div class="text-[0.6rem] text-paper/55">Pump Nightclub</div>
                    <div class="text-[0.5rem] text-paper/30 mt-1">Gold Coast · Licensed Venue</div>
                </div>

                <!-- Main text -->
                <div>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">RJ currently works at Pump Nightclub on the Gold Coast. A person with documented charges for aggravated burglary, participation in an organised car theft ring, multiple counts of mob violence, a false sexual assault allegation, indecent exposure, and a pattern of racial harassment spanning 15 documented incidents against a single individual — is employed in a licensed hospitality venue.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Licensed venues in Queensland operate under a framework that is supposed to prevent exactly this. The Liquor Act 1992 (Qld) and the Office of Liquor and Gaming Regulation impose obligations on venue operators — including fitness and propriety requirements for staff working in licensed environments. A nightclub employing a person with this criminal pattern is not a neutral act. It is a decision made with or without knowledge of that record.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45">The question this raises is straightforward: was Pump Nightclub aware of RJ's criminal history when employing him, and if so, on what basis was that employment considered appropriate? If they were not aware — what is the process by which venues are expected to satisfy themselves of the suitability of staff in an environment where the public is served alcohol at night?</p>
                </div>
            </div>

            <!-- Political/systemic implications -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-6">
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-3">The Hospitality Problem</div>
                    <p class="text-[0.65rem] text-paper/45 leading-relaxed mb-3">The Gold Coast hospitality industry operates under sustained political pressure to prevent violence in and around licensed venues. Significant public resources are spent on Safe Night Out precincts, ID scanners, and security licensing frameworks — all predicated on the idea that venues bear responsibility for the safety of their patrons and the broader precinct.</p>
                    <p class="text-[0.65rem] text-paper/45 leading-relaxed">A person documented to have organised mob violence at Pacific Fair, directed a 6-on-1 ambush at Bridgestone Nerang, and been charged with multiple counts of aggravated burglary — working as staff at a nightclub — is a direct failure of that framework. Either the framework does not reach staff employment, or it is not being applied.</p>
                </div>
                <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.46rem] tracking-[0.22em] uppercase text-gold mb-3">The Political Implication</div>
                    <p class="text-[0.65rem] text-paper/45 leading-relaxed mb-3">Queensland's nightclub and entertainment industry has faced significant legislative pressure over the past decade — mandatory ID scanners, one-punch laws, lockout zones in Brisbane, and repeated reviews of the Safe Night Out Strategy. These measures exist in response to exactly the kind of person and behaviour documented across RJ's 15 incidents.</p>
                    <p class="text-[0.65rem] text-paper/45 leading-relaxed">The political implication is uncomfortable: the policy architecture designed to make licensed venues safer is failing to prevent people with extensive criminal records from being employed within those venues. The scanner is at the door. The record is behind the bar.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
                <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.2)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-2">Charges on Record</div>
                    <div class="font-display text-2xl text-hot mb-1">15+</div>
                    <div class="text-[0.55rem] text-paper/35 leading-relaxed">Documented incidents. Multiple charges. QPS appealing suspended sentence. Active investigations.</div>
                </div>
                <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.2)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-2">Venue Type</div>
                    <div class="font-display text-2xl text-gold mb-1">LICENSED</div>
                    <div class="text-[0.55rem] text-paper/35 leading-relaxed">A nightclub. Late-night trading. Alcohol service. Patron vulnerability. Exactly the environment the Safe Night Out Strategy was designed to protect.</div>
                </div>
                <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.2)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-2">Regulatory Question</div>
                    <div class="font-display text-2xl mb-1" style="color:#7c6aaa">OPEN</div>
                    <div class="text-[0.55rem] text-paper/35 leading-relaxed">Were they aware? Is OLGR aware now? Does the fitness framework cover staff, or only licensees? These questions are now on the record.</div>
                </div>
            </div>

            <div class="border border-paper/[0.08] p-5 mb-5" style="background:rgba(193,68,14,0.025)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-3">Statement Sought — Pump Nightclub · OLGR Queensland</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">Sunlight.Quest is seeking a response from Pump Nightclub regarding their employment of RJ and whether they were aware of his criminal history at the time of engagement. We are also noting this matter to the Office of Liquor and Gaming Regulation (OLGR) Queensland as a question of venue compliance with the spirit and intent of the Safe Night Out framework. This is not a private matter. A person with this documented record working in a licensed venue — on the same Gold Coast precinct where he has organised violence — is a matter of public interest.</p>
            </div>

            <!-- Denial, taunt call, and building owner leverage -->
            <div class="story-chapter reveal" style="border-left-color:rgba(124,106,170,0.6)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase mb-3" style="color:#7c6aaa">What Happened Next</div>
                <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">"HE DOESN'T WORK HERE."<br><span style="color:#7c6aaa">THEN RJ CALLED TO TAUNT HIM.</span></h3>

                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">After Adam Watson contacted Pump Nightclub directly — sending them RJ's own words, including his recorded comment calling Adam a <strong class="text-paper/65">"faggot"</strong> — Pump Nightclub's response was a denial: they stated that RJ was not in their employ. Adam had also made clear that he intended to put RJ's comment to the gay community, and that a picket outside Pump Nightclub was a foreseeable consequence of their employing someone who had made those remarks to a member of the public.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Later that same night, RJ called Adam Watson directly. He was not calling to apologise. He was calling to taunt him. RJ told Adam that the staff at Pump Nightclub consider him a joke. It was a display of confidence — the confidence of a man who had just been publicly backed by his employer through a denial of his employment, and who felt untouchable enough to ring the person who had lodged the complaint and rub it in.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                    <div class="border p-4" style="border-color:rgba(124,106,170,0.2);background:rgba(124,106,170,0.03)">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase mb-2" style="color:#7c6aaa">Pump Nightclub's Response to Adam's Message</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Adam sent RJ's recorded "faggot" comment directly to the venue</p></div>
                            <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Adam noted the gay community and picket implications of employing someone who made those remarks</p></div>
                            <div class="flex gap-2 items-start"><span class="text-xs shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Pump Nightclub replied: RJ is not in their employ</p></div>
                        </div>
                    </div>
                    <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">RJ's Call — Same Night</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">RJ called Adam Watson that evening, unprompted</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Told Adam the staff at Pump Nightclub think he is a joke</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">The call was not an apology — it was a taunt delivered from a position of confidence</p></div>
                        </div>
                    </div>
                </div>

                <div class="border border-gold/25 px-5 py-4" style="background:rgba(201,138,16,0.04)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-gold mb-3">The Building Owner — And Marc Barrow's Role</div>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Adam Watson knows the owner of the building from which Pump Nightclub operates. The connection is not abstract: Adam met the building owner during the process of purchasing Platinum and Empire Nightclub — a transaction that did not proceed because of Marc Barrow's direct intervention in that deal. The relationship exists. The conversation can happen.</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Adam intends to raise the matter of RJ's employment — and Pump Nightclub's denial in the face of documented conduct — with the building owner directly. A venue that employs a person with RJ's record, denies that employment when confronted with his own words, and then allows that same person to ring the complainant and taunt them — is not a venue that reflects the obligations of a responsible tenant. The building owner has an interest in who operates under their roof and how they conduct themselves.</p>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed">Marc Barrow's role in preventing the Platinum and Empire Nightclub transaction — which first brought Adam and the building owner together — is itself part of the broader record being assembled. The avenue being considered is raising the Pump Nightclub matter with both the building owner and Marc Barrow, with a view to a potential liquor licence suspension through OLGR. A venue that backs an employee with this criminal record, denies his employment when documented evidence is presented, and allows him to taunt complainants without consequence — is operating in a manner that sits poorly against the regulatory obligations of a Queensland liquor licence.</p>
                </div>
            </div>
        </div>

        <!-- Doctor false allegation — expanded chapter -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.55)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Incident 07 — False Allegation · Indemnity Insurance Fraud</span>
                <span class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/20 border border-paper/10 px-2 py-0.5">Doctor Cleared · "Uttering" Charge Thrown Out by DPP</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE DOCTOR WHO HELPED HIM.<br><span class="text-hot">68 YEARS OLD. UNINSURABLE. WORKING UNDER TWO LICENSED DOCTORS.</span></h3>
            <p class="font-serif italic text-paper/50 text-base leading-relaxed mb-5">"He helped RJ. He's 68 years old. He's Black. He was running his own private practice. After the false allegation and the indemnity insurance fraud, he could no longer get insurance. He now works under two licensed doctors at My Doctors Clinic, Surfers Paradise. RJ then also alleged he uttered a document. That charge was thrown out by the DPP on first appearance."</p>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The doctor helped RJ. That is where this starts. He was a private, independent practitioner operating his own clinic — a Black doctor, 68 years old, who extended care and support to RJ at a time when RJ needed it. RJ responded by making a false sexual assault allegation against him, and compounding it with indemnity insurance fraud — conduct that exploited the very relationship of trust the doctor had extended.</p>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The consequences were immediate and permanent. The allegation — not a conviction, not a finding, just an allegation — triggered the loss of his professional indemnity insurance. Without indemnity cover, a private practitioner cannot practice independently. He could no longer run his own clinic. He is now employed at My Doctors Clinic, Surfers Paradise, working under two licensed doctors who hold the insurance he can no longer obtain. At 68 years old, a man who built a private medical career was forced to give it up — not because of anything he did, but because of a false allegation made by someone he helped.</p>

            <!-- Impact stats -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-px mb-6" style="background:rgba(245,234,212,0.05)">
                <div class="p-4 text-center" style="background:#0c0804">
                    <div class="font-display text-3xl text-hot mb-1">68</div>
                    <div class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/28">Doctor's age</div>
                </div>
                <div class="p-4 text-center" style="background:#0c0804">
                    <div class="font-display text-3xl text-hot mb-1">0</div>
                    <div class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/28">Indemnity insurance</div>
                    <div class="text-[0.42rem] text-paper/18 mt-0.5">Can no longer obtain cover</div>
                </div>
                <div class="p-4 text-center" style="background:#0c0804">
                    <div class="font-display text-3xl text-hot mb-1">2</div>
                    <div class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/28">Licensed doctors above him</div>
                    <div class="text-[0.42rem] text-paper/18 mt-0.5">My Doctors Clinic, Surfers Paradise</div>
                </div>
                <div class="p-4 text-center" style="background:#0c0804">
                    <div class="font-display text-3xl text-sage mb-1">✓</div>
                    <div class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/28">All charges cleared</div>
                    <div class="text-[0.42rem] text-paper/18 mt-0.5">Including "uttering" — DPP, first appearance</div>
                </div>
            </div>

            <!-- Indemnity insurance fraud -->
            <div class="border-l-4 border-hot/50 pl-5 mb-5" style="background:rgba(193,68,14,0.05);padding:1.1rem 1rem 1.1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Indemnity Insurance Fraud — How It Works</div>
                <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">THE ALLEGATION DOESN'T NEED TO SUCCEED.<br><span class="text-hot">IT JUST NEEDS TO BE MADE.</span></h4>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Professional indemnity insurance for medical practitioners is underwritten based on risk. A sexual assault allegation — regardless of outcome — is recorded in underwriting assessments. An allegation that triggers a police investigation, an office raid, and civil proceedings against an insurer is not simply dismissed when charges are dropped or allegations proved false. The insurer's exposure calculus changes. Cover becomes unavailable, or available only at premiums that are commercially prohibitive for a sole practitioner.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">This is the mechanism of indemnity insurance fraud: make an allegation false enough to cause maximum institutional disruption but specific enough to trigger an insurance response. You don't need a conviction. You need a claim. The doctor's office was raided. A civil lawsuit ran against the insurance. The insurance became unrenewable. A private practice — built over decades — ceased to exist. The person who made the allegation has never been convicted of anything in connection with it.</p>
            </div>

            <!-- What actually happened during the examination -->
            <div class="border border-hot/30 p-5 mb-5" style="background:rgba(193,68,14,0.05)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">What Actually Happened — The Medical Examination</div>
                <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">RJ CAME IN FOR A TESTICULAR EXAMINATION.<br><span class="text-hot">THE DOCTOR'S NOTES RECORD EXACTLY WHAT HAPPENED.</span></h4>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">RJ attended the clinic to have his testicles examined. During the course of the examination — a routine clinical inspection — RJ began leaking pre-ejaculatory fluid. The doctor noted this in his clinical records at the time. Those notes became the document that protected him: a contemporaneous clinical record made during the consultation, before any allegation existed, recording what had physically occurred during the examination.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">RJ then ran with a false allegation of unwanted contact. He claimed the examination was not consensual — that he had been subjected to contact he had not agreed to. The doctor's own medical notes — made in the ordinary course of a clinical consultation — established precisely what had taken place and in what order. The notes recorded the physiological response RJ exhibited during the examination. They directly contradicted the framing RJ subsequently advanced.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.43rem] tracking-[0.15em] uppercase text-hot mb-1.5">The Clinical Record</div>
                        <p class="text-[0.58rem] text-paper/45 leading-relaxed">The doctor made contemporaneous notes during the consultation recording what occurred. Those notes — made before any allegation was raised — documented RJ's physiological response during the examination.</p>
                    </div>
                    <div class="border border-sage/15 p-3" style="background:rgba(61,122,74,0.03)">
                        <div class="text-[0.43rem] tracking-[0.15em] uppercase text-sage mb-1.5">Why the Notes Protected Him</div>
                        <p class="text-[0.58rem] text-paper/45 leading-relaxed">Contemporaneous clinical records carry significant evidentiary weight. Notes made at the time of a consultation — before any dispute arose — establish the factual sequence of events as recorded by the treating practitioner.</p>
                    </div>
                </div>
            </div>

            <!-- Uttering charge callout -->
            <div class="border border-sage/25 p-5 mb-2" style="background:rgba(61,122,74,0.04)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-3">Second Allegation — Uttering a Document · Defeated at First Appearance</div>
                <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">RJ ALSO ALLEGED THE DOCTOR UTTERED A DOCUMENT.<br><span class="text-sage">DPP THREW IT OUT ON FIRST APPEARANCE.</span></h4>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">As though the false sexual assault allegation and the insurance fraud were not sufficient, RJ also made a separate allegation: that the doctor had uttered a document — a criminal charge in Queensland that relates to using a fraudulent or forged document as genuine. The charge was laid.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">It did not make it past first appearance. The Director of Public Prosecutions reviewed the matter and declined to proceed — the charge was thrown out on first appearance. There was no conviction, no finding, no evidence capable of sustaining the allegation. The DPP's decision at first appearance is the most efficient possible outcome for a defendant: the prosecution assessed its own case and walked away before it started. The doctor is cleared of all criminal allegations. The professional and financial consequences of the false allegations remain.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-4">
                    <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-1.5">The Allegation</div>
                        <div class="text-[0.6rem] text-paper/50 leading-relaxed">Uttering a document — using a fraudulent or forged document as genuine · Charge laid by RJ</div>
                    </div>
                    <div class="border border-sage/20 p-3" style="background:rgba(61,122,74,0.04)">
                        <div class="text-[0.44rem] tracking-[0.15em] uppercase text-sage mb-1.5">Outcome — DPP</div>
                        <div class="text-[0.6rem] text-paper/50 leading-relaxed">Thrown out on first appearance · DPP declined to proceed · No conviction · Doctor fully cleared</div>
                    </div>
                </div>
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

        <!-- Incident 14: Zach — Pig's Head / Pacific Fair / Complaint Withdrawn -->
        <div class="story-chapter reveal mt-10" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Incident 14 — Zach · Pacific Fair · Pig's Head · Complaint Withdrawn</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">PUNCHED FOR TALKING TO A GIRL.<br><span class="text-hot">RETALIATED. PUNCHED AGAIN. POLICE COULDN'T HELP.</span></h3>
            <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"RJ went to the police to report an assault. Zach admitted it — but told police exactly why. They had the CCTV. RJ withdrew the complaint."</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">RJ made a comment while trying to talk to a girl. Zach — a Muslim man — punched him. Rather than leave it there, RJ organised a retaliatory act: he went with <strong class="text-paper/65">Bodie Chalmers</strong> to Zach's home address and left a <strong class="text-paper/65">pig's head on his door</strong>. A deliberate religious provocation — pig products being forbidden under Islamic law — directed at a man who had punched him.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Zach saw RJ at <strong class="text-paper/65">Pacific Fair</strong> and punched him again. RJ went to the police to make a formal assault complaint. When police spoke to Zach, he admitted the assault without hesitation — but gave his reason: RJ had left a pig's head at his door. Zach also had <strong class="text-paper/65">CCTV footage</strong> of RJ and Bodie Chalmers at his address. Police informed RJ that if they were going to charge Zach for the assault, they would have to charge RJ for the pig's head incident as well. RJ withdrew his complaint.</p>

            <!-- Four-cell breakdown -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">First Punch</div>
                    <p class="text-[0.6rem] text-paper/45 leading-relaxed">RJ made a comment while trying to talk to a girl. Zach punched him in response.</p>
                </div>
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">The Retaliation</div>
                    <p class="text-[0.6rem] text-paper/45 leading-relaxed">RJ and Bodie Chalmers went to Zach's home address and placed a pig's head on his door — a deliberate religious provocation against a Muslim man. Zach had CCTV capturing both of them.</p>
                </div>
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">Second Punch — Pacific Fair</div>
                    <p class="text-[0.6rem] text-paper/45 leading-relaxed">Zach encountered RJ at Pacific Fair and punched him again. RJ went to police and made a formal assault complaint.</p>
                </div>
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">The Police Response</div>
                    <p class="text-[0.6rem] text-paper/45 leading-relaxed">Zach admitted the assault — and explained the pig's head. He had the CCTV. Police told RJ: charging Zach means charging RJ too. RJ withdrew his complaint.</p>
                </div>
            </div>

            <!-- Zach's admission callout -->
            <div class="border-l-4 border-hot/60 pl-5 mb-5" style="background:rgba(193,68,14,0.06);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">Zach's Position to Police</div>
                <p class="text-[0.65rem] text-paper/55 leading-relaxed italic mb-2">"Yes, I punched him — because he left a pig's head at my door."</p>
                <p class="text-[0.65rem] text-paper/45 leading-relaxed">Zach did not deny the assault. He explained it. He had CCTV evidence of RJ and Bodie Chalmers at his property. The pig's head — a religiously targeted act against a Muslim man — was on the record. RJ came to the police as a victim. He left having withdrawn his own complaint.</p>
            </div>

            <!-- Consequence panel -->
            <div class="border border-paper/[0.07] p-5" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Why the Complaint Was Withdrawn</div>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Charging Zach for assault required police to also charge RJ for the pig's head incident — a targeted religious provocation documented on Zach's own CCTV.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">RJ had arrived at the police station as the victim. The pig's head — placed at a Muslim man's home — made that position untenable.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Bodie Chalmers was also present at Zach's property — captured on the same CCTV. His involvement in the retaliation is on the record.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Complaint withdrawn. No charges proceeded. The sequence — provocation, escalation, police weaponisation, retreat — is the same pattern documented across RJ's other incidents.</p></div>
                </div>
            </div>
        </div>

        <!-- Text message denial — "can't afford me" -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.55)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">False Claim — Text Messages · Denied on the Record</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">"YOU CAN'T AFFORD ME."<br><span class="text-hot">KOSTA KONDRATENKO DENIES THIS CONVERSATION EVER HAPPENED.</span></h3>
            <p class="font-serif italic text-paper/50 text-base leading-relaxed mb-5">"I deny having this conversation with RJ. I deny that he told me I couldn't afford him. I never solicited him for sex."<br><span class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/25 not-italic">— Kosta Kondratenko</span></p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">A video has emerged showing text messages between Adam Watson and RJ. In those messages, RJ tells Adam — after sending love hearts — the following:</p>
            <div class="border border-hot/25 p-5 mb-5" style="background:rgba(193,68,14,0.06)">
                <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-3">The Message — RJ to Adam Watson, about Kosta Kondratenko</div>
                <p class="font-display text-lg tracking-wide text-paper/80 leading-relaxed">"Kostas here. Fkn told him fk off you can't afford me n walked away"</p>
                <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25 mt-2">Sent by RJ to Adam Watson · After a string of love heart messages</div>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">The message implies that Kosta Kondratenko approached RJ and solicited him, and that RJ rejected him on the basis that he "couldn't afford" him. Kosta Kondratenko has seen these text messages and denies this account in full. The video below shows the exchange.</p>

            <!-- Video embed -->
            <div class="reveal mb-6">
                <div class="border border-hot/20" style="background:rgba(0,0,0,0.3)">
                    <video controls preload="metadata" class="w-full" style="max-height:520px;display:block">
                        <source src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/r+j/proof_obsession.mp4" type="video/mp4">
                    </video>
                    <div class="px-4 py-3 border-t border-hot/15">
                        <div class="text-[0.48rem] tracking-[0.18em] uppercase text-hot/60 mb-1">Video · Text message exchange — RJ to Adam Watson</div>
                        <p class="text-[0.55rem] text-paper/30 leading-relaxed">Shows the messages including RJ's claim about Kosta Kondratenko — sent to Adam Watson after a string of love hearts.</p>
                    </div>
                </div>
            </div>

            <!-- Denial on the record -->
            <div class="border border-hot/40 p-5" style="background:rgba(193,68,14,0.07)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Kosta Kondratenko — Denial on the Record</div>
                <div class="space-y-3">
                    <div class="flex gap-3 items-start">
                        <span class="text-hot text-xs shrink-0 mt-0.5">✗</span>
                        <p class="text-[0.65rem] text-paper/55 leading-relaxed">Kosta Kondratenko <strong class="text-paper/75">denies having this conversation</strong> with RJ — the exchange described in the message did not occur.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="text-hot text-xs shrink-0 mt-0.5">✗</span>
                        <p class="text-[0.65rem] text-paper/55 leading-relaxed">Kosta Kondratenko <strong class="text-paper/75">denies that RJ told him he "couldn't afford" him</strong> — no such exchange took place.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <span class="text-hot text-xs shrink-0 mt-0.5">✗</span>
                        <p class="text-[0.65rem] text-paper/55 leading-relaxed">Kosta Kondratenko <strong class="text-paper/75">never solicited RJ for sex</strong> — the implied meaning of RJ's message to Adam Watson is false.</p>
                    </div>
                </div>
                <div class="border-t border-hot/20 mt-4 pt-4">
                    <p class="text-[0.6rem] text-paper/38 leading-relaxed italic">RJ was sending Adam Watson love hearts in the same message thread in which he claimed to have rejected Kosta. The 15-incident record documents RJ's pattern of sending unsolicited advances toward Adam Watson while simultaneously constructing false narratives about others. This message fits that pattern.</p>
                </div>
            </div>
        </div>

        <!-- Phone hack / contact theft / Alvin Li -->
        <div class="story-chapter reveal mt-10 mb-10" style="border-left-color:rgba(124,106,170,0.4)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Digital Stalking &amp; Extortion</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">SITTING OUTSIDE ADAM'S HOME.<br><span style="color:#7c6aaa">HACKING HIS PHONE. STEALING HIS CONTACTS.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">With Adam's address obtained through the Helensvale robbery, RJ positioned himself outside Adam Watson's home and remotely accessed his phone, extracting the full contact list. The breach gave RJ direct access to everyone in Adam's personal and professional network — and he used it. What followed demonstrates the deliberate weaponisation of stolen data to intimidate and isolate Adam Watson by threatening the people around him.</p>

            <!-- Alvin Li callout -->
            <div class="border border-paper/[0.1] p-5 mb-5" style="background:rgba(124,106,170,0.04)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase mb-3" style="color:#7c6aaa">Target — Alvin Li · Costar Real Estate</div>
                <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">THE N-WORD THREAT.<br><span style="color:#7c6aaa">WEAPONISING RACE TO RAISE A MOB.</span></h4>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">Using the stolen contact list, RJ called <strong class="text-paper/65">Alvin Li</strong> — a contact of Adam Watson's from <strong class="text-paper/65">Costar Real Estate</strong> — and made a direct threat: he told Alvin Li that he was going to tell everyone that Adam Watson had called him the N-word.</p>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">This was not a complaint. It was extortion by another name — a threat designed to destroy Adam Watson's professional relationships and personal reputation by placing a racially incendiary accusation into the hands of every person in his contact list, unless the implicit demand was met.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-4">
                    <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">The Mechanism</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Phone hacked — contact list stolen</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Contacts called one by one with damaging false allegations</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Alvin Li threatened with N-word claim about Adam Watson</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">Designed to scare Adam's professional network into distancing themselves</p></div>
                        </div>
                    </div>
                    <div class="border border-paper/[0.08] p-4" style="background:rgba(0,0,0,0.15)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-2">What This Reveals</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-paper/40 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">RJ was willing to weaponise his own racial identity as a tool of intimidation</p></div>
                            <div class="flex gap-2 items-start"><span class="text-paper/40 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">The threat of a mob — "I'll tell everyone" — was the explicit mechanism of harm</p></div>
                            <div class="flex gap-2 items-start"><span class="text-paper/40 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">This was not a racial grievance — it was a calculated tactic by someone who had already committed car theft, burglary, fraud, and assault</p></div>
                            <div class="flex gap-2 items-start"><span class="text-paper/40 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/42 leading-relaxed">The fact that Alvin Li was targeted tells us RJ had reviewed the contact list and strategically selected targets for maximum reputational damage</p></div>
                        </div>
                    </div>
                </div>
                <div class="border-l-4 pl-4 py-1" style="border-color:rgba(124,106,170,0.5);background:rgba(124,106,170,0.04);padding:0.9rem 0.9rem 0.9rem 1.1rem">
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed italic">Using a racial slur allegation as a social threat — "I'll tell everyone you called me the N-word" — is the deployment of anti-racism language as a weapon of personal destruction. It exploits the legitimate gravity of racial abuse to silence, isolate, and harm a target with no basis in fact. It also instrumentalises a community's genuine vulnerability for individual criminal purposes.</p>
                </div>
            </div>
        </div>

        <!-- "You won't hit me" — emboldened criminal mentality -->
        <div class="story-chapter reveal mt-10 mb-10" style="border-left-color:rgba(124,106,170,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Incident 11 — Emboldened</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">"YOU WON'T HIT ME.<br><span style="color:#7c6aaa">YOU HAVE TOO MUCH TO LOSE."</span></h3>
            <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-5">"A person with a network, a reputation, and something to lose is not protected by those things. To a certain type of criminal, they are a guarantee of impunity."</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">RJ approached a person he knew was connected to Adam Watson — someone with a professional reputation, community ties, and legitimate standing in their field. Standing in front of that person, RJ said: <span class="font-display text-paper/70">"You won't hit me because you have too much to lose."</span></p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">It is a precise statement of criminal logic. RJ was not testing whether the person was brave. He was identifying that their stake in legitimate society — their job, their name, their relationships — would act as a restraint. The criminal, who has nothing equivalent to lose, uses the other person's investment in the world as a weapon against them. Accountability becomes the liability. Doing nothing becomes the rational choice.</p>

            <div class="border border-paper/[0.08] p-5 mb-5" style="background:rgba(124,106,170,0.05)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase mb-3" style="color:#7c6aaa">The Calculus — Weaponising Reputation</div>
                <div class="space-y-2.5">
                    <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">The target has a job, a community, professional relationships — a stake in the world</p></div>
                    <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">RJ has none of those things — or has already sacrificed them through his criminal pattern</p></div>
                    <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">Any physical response by the target risks their job, reputation, and legal standing</p></div>
                    <div class="flex gap-2 items-start"><span style="color:#7c6aaa" class="text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">RJ faces no equivalent downside — emboldening him to provoke and escalate without consequence</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">This is how organised criminal networks insulate themselves from community pushback — they exploit the community's own values against it</p></div>
                </div>
            </div>

            <!-- The bricklayer -->
            <div class="border-l-4 pl-5 mt-6 mb-5" style="border-color:rgba(61,122,74,0.5);background:rgba(61,122,74,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-2">What Actually Happened</div>
                <h4 class="font-display text-lg tracking-wide mb-3 leading-tight text-sage">THE BRICKLAYER.<br>TWICE IN THE FACE.</h4>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">RJ's calculation was wrong. The person he approached had a friend with him — a bricklayer. The bricklayer punched RJ in the face. Twice.</p>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">A local police officer was present and witnessed the entire incident. The officer chose to do nothing about it.</p>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">For the record: I support the outcome. RJ approached someone with the explicit intent of exploiting their stake in legitimate society as a guarantee of his own impunity. That calculation was corrected. The fact that a police officer witnessed it and exercised their discretion not to act is noted — and in the context of RJ's documented criminal pattern, it is the appropriate exercise of that discretion.</p>
            </div>

            <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">The Pattern — Why This Mentality Matters</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">This is not an isolated exchange. It is a documented mentality — the assumption that a person's community standing is a one-way constraint that only applies to them. It is the same logic that explains why RJ sent three associates to rob Adam Watson: he calculated that Adam would not fight back because of who Adam is and what he has to lose. The calculation was wrong then too.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">The lesson for community safety is this: criminals who target people with networks and reputations are not selecting soft targets. They are selecting targets whose legitimate standing they intend to use as a weapon. Awareness of this pattern — and the willingness to refuse the premise — is part of how communities protect themselves from those who exploit good faith.</p>
            </div>
        </div>

        <!-- G-Link tram — Incident 11 -->
        <div class="story-chapter reveal mt-10 mb-10" style="border-left-color:rgba(193,68,14,0.4)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#c1440e;border-color:rgba(193,68,14,0.4)">Incident 12 — G-Link Tram</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">"DO YOU HAVE A WHITE PUSSY<br><span class="text-hot">OR A PINK PUSSY?"</span></h3>
            <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-5">"Six men. One woman. A moving tram. A false accusation. And footage that proved the lie."</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Adam Watson witnessed RJ and five accomplices on the G-Link tram sexually harassing a woman. The language was explicit and deliberate: <span class="font-display text-paper/70">"Do you have a white pussy or a pink pussy?"</span> Six men. One target. A public space in motion. A confrontation that escalated quickly.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The woman's response to RJ's group: <span class="font-display text-paper/70">"If my husband was here, he'd stab you."</span> The group did not back down. A physical confrontation followed. RJ's phone was thrown off the tram. Another male passenger — not connected to Adam — punched one of RJ's associates.</p>

            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">What Happened — Sequence</div>
                <div class="space-y-2.5">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/48 leading-relaxed">RJ and five accomplices sexually harass a woman on the G-Link tram</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/48 leading-relaxed">A confrontation erupts — RJ's phone is thrown off the tram</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/48 leading-relaxed">An unconnected male passenger punches one of RJ's associates</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/48 leading-relaxed">Police are called to the scene</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/48 leading-relaxed">One of RJ's group alleges that Adam grabbed his backside</p></div>
                    <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.62rem] text-paper/48 leading-relaxed">Tram footage reviewed by police — allegation against Adam disproved entirely</p></div>
                </div>
            </div>

            <!-- False allegation callout -->
            <div class="border-l-4 pl-5 mb-5" style="border-color:rgba(124,106,170,0.5);background:rgba(124,106,170,0.04);padding:1.1rem 1rem 1.1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">The Counter-Allegation</div>
                <h4 class="font-display text-lg tracking-wide mb-3 leading-tight" style="color:#7c6aaa">THE LIE. AND THE FOOTAGE THAT KILLED IT.</h4>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">After the confrontation, one of RJ's group claimed to police that Adam Watson had grabbed his backside — a sexual assault allegation designed to flip the narrative. It is the same playbook applied in other incidents: generate a counter-allegation, create confusion, shift police attention from the perpetrators to the witness.</p>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">The G-Link tram has cameras. Police reviewed the footage. The allegation was false. Adam had done nothing to RJ's associate. The claim was fabricated — on the spot, to police — by a member of a group that had just spent the preceding minutes sexually harassing a stranger on a tram with five friends watching.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                <div class="border border-paper/[0.07] p-4" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">The Pattern — False Allegation as Tactic</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed mb-2">This is not the first time a member of RJ's network made a false counter-allegation to police. It is a documented tactic: when caught in a criminal act, immediately accuse the other party of something — anything — that forces police to investigate both sides simultaneously.</p>
                    <p class="text-[0.62rem] text-paper/40 leading-relaxed">The victim becomes a suspect. The investigation bifurcates. The tram footage was available and was reviewed. Without it, Adam Watson would have been facing a sexual assault allegation manufactured in real-time by a group that had just sexually harassed someone else.</p>
                </div>
                <div class="border border-paper/[0.07] p-4" style="background:rgba(61,122,74,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-3">What the Footage Proved</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed mb-2">The tram's CCTV system recorded the entire incident. Police reviewed it. Adam Watson did not touch RJ's associate. The allegation was false. The footage proved it unambiguously — and in doing so, also captured the original harassment incident that triggered the confrontation.</p>
                    <p class="text-[0.62rem] text-paper/40 leading-relaxed">Six men harassing one woman in public. One of those men lying to police about being assaulted. Footage that shows the truth. This is the documented record.</p>
                </div>
            </div>

            <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">Why This Incident Is in the Record</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Sexual harassment of a stranger in a public space, in a group, with five associates present. A physical confrontation that RJ's group initiated and lost. A false allegation made to police immediately afterward. Footage that disproved the allegation. This is not an isolated incident of poor judgement. It is a pattern of behaviour: harassment, confrontation, false counter-allegation, and reliance on the absence of evidence to escape accountability.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">The tram had cameras. The allegation failed. The question is how many times the same tactic has worked in spaces without cameras.</p>
            </div>
        </div>

        <!-- Bridgestone Nerang ambush -->
        <div class="story-chapter reveal mt-10 mb-10" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Incident — Premeditated Ambush</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">BRIDGESTONE NERANG.<br><span class="text-hot">3–4 MEN. A TIP-OFF. ADAM HAD HIS CAR BACK.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">After Adam Watson surrendered the laptop to Southport Police — triggering an active Sex and Crime Squad investigation — RJ organised a premeditated ambush. When Adam arrived at Bridgestone Nerang to collect his car, a group of 3–4 men were already there, waiting in a vehicle. They had been tipped off in advance by an <strong class="text-paper/70">orange-haired staff member at Bridgestone</strong> who had alerted RJ to Adam's scheduled pickup. That employee has since been fired. He has also been charged.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Adam defended himself with an implement. He bashed RJ. He also destroyed the car the group had used to wait for him. When police arrived, the attackers' response was immediate: <span class="font-display text-paper/70">"We're just kids."</span> The men who had arrived in a vehicle, in a group, pre-tipped to intercept a single person collecting his car, described themselves as children.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">What Happened</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/48 leading-relaxed">Adam goes to Bridgestone Nerang to collect his vehicle</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/48 leading-relaxed">Orange-haired Bridgestone employee tips off RJ — fired, charged</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/48 leading-relaxed">3–4 men arrive in a car and wait for Adam on-site</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/48 leading-relaxed">Adam defends himself — RJ bashed, attackers' car destroyed</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/48 leading-relaxed">Attackers tell police: "We're just kids"</p></div>
                    </div>
                </div>
                <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.04)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">The Charge — and What Police Said</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed mb-3">Adam Watson was charged. Police acknowledged — to those who asked — that they had to charge him to avoid making themselves look bad after he destroyed the car. That is not a legal justification for a charge. That is a political justification for a charge.</p>
                    <p class="text-[0.62rem] text-paper/40 leading-relaxed italic">A man picks up his own car. He is ambushed by a group tipped off by an insider. He defends himself. The insider is fired. The insider is charged. And the man who was ambushed is also charged — because the car was destroyed. The question the charge never answered: what else was he supposed to do?</p>
                </div>
            </div>

            <div class="border-l-4 border-hot/50 pl-5" style="background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Context — Timing</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed">The ambush occurred <strong class="text-paper/65">after</strong> Adam handed the laptop to Southport Police. The sequence is not coincidental. The laptop triggered a Sex and Crime Squad investigation. The ambush was the response. The orange-haired employee at Bridgestone was the link between RJ's network and Adam's movements. The entire operation was pre-planned around a police reporting act.</p>
            </div>
        </div>

        <!-- Street University / police informant / pedophile insinuation -->
        <div class="story-chapter reveal mt-10" style="border-left-color:rgba(193,68,14,0.3)">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">STREET UNIVERSITY. SOUTHPORT.<br><span class="text-hot">"WE'VE GOT YOU HERE FILMING THE KIDS."</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Walking past Street University in Southport, a young woman approached Kosta Kondratenko and asked whether he was a police informant. For the record: Kosta has never taken the stand against anyone. He has never given evidence against any individual in any court proceeding.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">RJ ran out and made the following comment: <span class="font-display text-paper/65">"We've got you here filming the kids."</span> The insinuation — that Kosta was filming children for predatory purposes — is a deliberate and malicious fabrication.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">For the record, and to be absolutely clear: there has never been a complaint against Kosta Kondratenko in any corporate setting. There is no affidavit in any police station. There is not even a text message, from any source, alleging any type of inappropriate behaviour toward a woman or a man. Not once. Not anywhere. The comment RJ made at Street University is a lie — a deliberate attempt to attach a label to a person that has no basis in fact, made by someone who uses the language of child protection as a weapon.</p>

            <!-- Still from confrontation -->
            <div class="reveal mb-6">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/r+j/sex_crimes_squad.jpg" alt="Still from the Street University confrontation — RJ approaching" class="w-full border border-hot/20" loading="lazy" />
                <div class="flex items-center justify-between px-3 py-2 border border-t-0 border-hot/15" style="background:rgba(193,68,14,0.06)">
                    <span class="text-[0.43rem] tracking-[0.14em] uppercase text-paper/30">Still from video · Street University · Southport · RJ approaching</span>
                    <span class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/50">Full video withheld — see below</span>
                </div>
            </div>

            <!-- Why the full video is not being released -->
            <div class="border border-hot/25 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Why the Full Video Cannot Be Released</div>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">The full video of this confrontation exists. It has not been released publicly and will not be at this time. The reason is straightforward: I have been advised that releasing the footage could expose me to a charge of <strong class="text-paper/65">possessing child exploitation material</strong>. Children are visible in the background of the video as RJ moves toward me — and in the current legal environment, a corrupt or motivated officer could use that fact to argue that the act of filming in proximity to children, and then distributing that footage, constitutes possession of material depicting minors.</p>
                <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">This is not a theoretical concern. It is exactly the kind of charge that has been used historically by malicious police to silence journalists, activists, and witnesses who hold footage that is inconvenient for the people in it. The instrument is the law. The weapon is its misapplication. And the target is the person who filmed an officer approaching them in a public space.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div class="border border-hot/15 p-4" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-2">The Risk</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">Children visible in the background as RJ approaches on camera</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">A motivated officer could characterise public distribution as possession of material depicting minors</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/45 leading-relaxed">The charge is severe enough that even an unsuccessful prosecution achieves its purpose: suppression</p></div>
                        </div>
                    </div>
                    <div class="border border-paper/[0.08] p-4" style="background:rgba(0,0,0,0.2)">
                        <div class="text-[0.44rem] tracking-[0.15em] uppercase text-paper/35 mb-2">The Pattern — Malicious Police</div>
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-paper/30 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">Child exploitation charges have been used as suppression instruments against journalists and witnesses in documented cases</p></div>
                            <div class="flex gap-2 items-start"><span class="text-paper/30 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">A person facing 15+ incidents with QPS officers — several of whom are corrupt or have since been disciplined — cannot assume good faith in how footage would be handled</p></div>
                            <div class="flex gap-2 items-start"><span class="text-paper/30 text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/40 leading-relaxed">The still published above is the limit of what can be safely disclosed at this time</p></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-l-4 border-hot/50 pl-5" style="background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">On the Record</div>
                <div class="space-y-2 mb-1">
                    <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">Kosta Kondratenko has never taken the stand against any person</p></div>
                    <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">No complaint in any corporate setting — none</p></div>
                    <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">No affidavit in any police station alleging inappropriate conduct</p></div>
                    <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">✓</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">Not a single text message — from anyone — alleging inappropriate behaviour toward a woman or man</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/45 leading-relaxed">RJ's "filming the kids" comment is a deliberate lie. It tells you what RJ is.</p></div>
                </div>
            </div>
        </div>

        <!-- RJ Trilogy Event 1 — PayID payments / tram denial / police station -->
        <div class="story-chapter reveal mt-10" style="border-left-color:rgba(201,138,16,0.3)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">RJ Trilogy — Event 1 of 3</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE MONEY. THE TRAM. THE POLICE STATION.<br><span class="text-gold">GOOD FAITH PAYMENTS USED TO ALLEGE SEX.</span></h3>
            <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-5">"I'd seen RJ on the G-Link with some associates. I asked him directly: 'Did you get the money?' He said: 'I don't know what you're talking about.' Then turned to his friend and said 'He's weird.' He then took those receipts to the police station."</p>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">At Kosta's instruction, Adam Watson sent money to RJ as a <strong class="text-paper/60">show of good faith</strong>. The payments were made. The receipts exist. When Kosta subsequently encountered RJ on the G-Link tram with some associates and asked directly — <span class="font-display text-paper/65">"Did you get the money?"</span> — RJ denied any knowledge of it, then turned to his associate and said: <span class="font-display text-paper/65">"I don't know what you're talking about. He's weird."</span></p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">RJ then took those same payment receipts to the police station and used them as <strong class="text-paper/60">instruments to build the narrative that the money was payment for sex</strong>. Payments made as a gesture of good faith — at Kosta's instruction, confirmed by receipt — were reframed as evidence of a transaction for sexual services. The receipts below are the payments RJ denied knowing anything about on the tram.</p>

            <!-- Receipt evidence files -->
            <div class="border border-gold/20 p-4 mb-5" style="background:rgba(201,138,16,0.03)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">Payment Receipts — Adam Watson to RJ (at Kosta's Instruction)</div>
                <div class="space-y-2">
                    <div class="ev-file ef-gold" onclick="openMV('image-rj-receipt-1')">
                        <div class="ev-icon ev-img">📷</div>
                        <div class="ev-meta">
                            <div class="ev-name">rj_payment_receipt_1.jpg</div>
                            <div class="ev-desc">Image · WhatsApp receipt · Payment sent by Adam Watson to RJ — Kosta's instruction — later taken to police as alleged sex payment</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                    <div class="ev-file ef-gold" onclick="openMV('image-rj-receipt-2')">
                        <div class="ev-icon ev-img">📷</div>
                        <div class="ev-meta">
                            <div class="ev-name">rj_payment_receipt_2.jpg</div>
                            <div class="ev-desc">Image · WhatsApp receipt · Payment sent by Adam Watson to RJ — Kosta's instruction — later taken to police as alleged sex payment</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                    <div class="ev-file ef-gold" onclick="openMV('image-rj-receipt-3')">
                        <div class="ev-icon ev-img">📷</div>
                        <div class="ev-meta">
                            <div class="ev-name">rj_payment_receipt_3.jpg</div>
                            <div class="ev-desc">Image · WhatsApp receipt · Payment sent by Adam Watson to RJ — Kosta's instruction — later taken to police as alleged sex payment</div>
                        </div>
                        <span class="ev-cta">View →</span>
                    </div>
                </div>
            </div>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Kosta returned to his tent and asked Adam Watson to produce a receipt of the PayID transfer — a screenshot that would take thirty seconds to generate — to confirm the payment and put RJ's tram denial on the record. <strong class="text-paper/60">Adam refused.</strong> That refusal caused a fight.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">During the exchange, Kosta sent a number of text messages — including one in which he called Adam a <strong class="text-paper/60">"white cunt."</strong> Kosta has apologised for that message. The language was wrong and the apology stands. The message was sent privately, in the heat of an argument about basic accountability — after being denied a receipt for a payment made on his behalf, having just watched RJ deny the payment to his face on a tram.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">That private message was subsequently subpoenaed. Police were sent to Adam Watson's house and applied pressure on him to charge Kosta with racial vilification. The charge would not have held — racial vilification requires a public act, not a private SMS between two people. But it did not need to hold. <strong class="text-paper/60">The goal was to spook Adam. It worked.</strong> Adam asked Kosta to collect his things.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-2">What Was Asked For</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">A screenshot confirming the PayID transfer RJ denied on the tram</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">30 seconds to produce. Standard. Reasonable. Refused.</p></div>
                    </div>
                </div>
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">The Chain That Followed</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Fight — heated private messages including "white cunt" (apologised for)</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">SMS subpoenaed — police sent to Adam Watson's house</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Pressure to charge Kosta — Adam spooked — Kosta displaced</p></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SMS subpoena / racial vilification pressure / Adam asks Kosta to leave -->
        <div class="story-chapter reveal mt-10" style="border-left-color:rgba(193,68,14,0.3)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">RJ Trilogy — Event 2 of 3</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE SMS WAS PRIVATE.<br><span class="text-hot">POLICE SUBPOENAED IT. THEN PRESSURED ADAM TO CHARGE KOSTA.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Although the "white cunt" message was sent in a private text conversation — not broadcast, not published, not shared with any third party — police subpoenaed the full SMS exchange between Kosta and Adam Watson. Kosta's assessment is that this was instigated by RJ's false allegation, with the investigation routed to Marc Barrow — the same officer who has demonstrated a documented pattern of targeting Kosta.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Police visited Adam Watson and applied pressure on him to have Kosta charged with racial vilification. That charge would not have held. Racial vilification under Queensland law requires that the conduct be public — a communication made otherwise than in private. A private text message between two people is not a broadcast and does not meet that threshold. The pressure was legally unfounded.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Following the police visit, Adam Watson asked Kosta to collect his things. He had been spooked by the visit. The result: Kosta was displaced. A private argument about a missing PayID receipt — an argument Kosta has acknowledged and apologised for his own language in — was weaponised by police to pressure Adam into removing Kosta, and it worked. This is what police overreach costs in practice: not a conviction, but destabilisation.</p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-5">
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">The Message</div>
                    <p class="text-[0.58rem] text-paper/38 leading-relaxed">Private SMS. Two parties. Never broadcast. Apologised for. Not a public act.</p>
                </div>
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Police Action</div>
                    <p class="text-[0.58rem] text-paper/38 leading-relaxed">Full SMS exchange subpoenaed. Adam Watson visited. Pressure applied to have Kosta charged with racial vilification.</p>
                </div>
                <div class="border border-sage/20 p-4" style="background:rgba(61,122,74,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-2">Why It Would Have Failed</div>
                    <p class="text-[0.58rem] text-paper/38 leading-relaxed">Racial vilification requires a public act. A private text between two people does not meet the legal threshold. The pressure had no legal basis.</p>
                </div>
            </div>
            <div class="border-l-4 border-hot/50 pl-5" style="background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">The Outcome — Displacement</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">Adam asked Kosta to collect his things after police spooked him. The goal was never a conviction — racial vilification in a private SMS would never succeed in court. The goal was displacement. It worked. That is the overreach: using a legally baseless threat to destabilise a person's living situation through a third party.</p>
            </div>
        </div>

        <!-- RJ text message after viral video -->
        <div class="story-chapter reveal mt-10" style="border-left-color:rgba(193,68,14,0.3)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">RJ Trilogy — Event 3 of 3</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">AFTER THE VIDEO WENT VIRAL.<br><span class="text-hot">RJ TEXTS. THREATENS RESTRAINING ORDERS. HIS OWN MOTHER HAS ONE ON HIM.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Following the viral video, RJ sent the following text message. A person with a documented pattern of organising gang assaults is now threatening legal process.</p>

            <!-- Screenshot -->
            <div class="ev-file ef-hot mb-5" onclick="openMV('image-rj-text')">
                <div class="ev-icon ev-img">📷</div>
                <div class="ev-meta">
                    <div class="ev-name">rj_stayaway.jpg</div>
                    <div class="ev-desc">Image · Text message · RJ to Adam Watson — sent after viral video · Threatening restraining orders</div>
                </div>
                <span class="ev-cta">View →</span>
            </div>

            <!-- Restraining order threat / irony -->
            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">The Restraining Order Threat — Context and Irony</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">RJ — a person whose documented pattern includes <strong class="text-paper/60">organising gang assaults</strong>, pre-planned ambushes, a Bridgestone insider tip-off, and criminal activity captured across multiple incidents on video — is threatening to seek a restraining order against Adam Watson. The same person who sent three associates to wait for Adam in a car park is now reaching for the legal system as a shield.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">In the message he references <strong class="text-paper/60">"cunt mums."</strong> The irony is not subtle: <strong class="text-paper/60">RJ's own mother has a restraining order on him.</strong> The person invoking mothers in a threatening message is someone his own mother needed legal protection from.</p>
            </div>

            <!-- "Creep" tactic -->
            <div class="border border-violet/20 p-5 mb-5" style="background:rgba(124,106,170,0.03)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">Tactic — "You're a Creep" as a Destabilisation Tool</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">RJ's use of the word <strong class="text-paper/60">"creep"</strong> is not casual language. It is a deliberate attempt to get Adam Watson off his footing — to introduce a sexual character implication into the framing of the conflict in a context where no such basis exists, and force Adam into a defensive posture.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">This appears to be a tactic modelled on one that has already worked: a false allegation of this kind was deployed against a <strong class="text-paper/60">local doctor</strong> with significant effect. The allegation alone — without any finding, without any conviction — was sufficient to damage standing, trigger institutional responses, and shift the social dynamics of the situation in the accuser's favour.</p>
                <div class="border border-violet/10 p-3" style="background:rgba(124,106,170,0.04)">
                    <div class="text-[0.45rem] tracking-[0.15em] uppercase mb-2" style="color:#7c6aaa">The Playbook</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Attach a sexual implication ("creep") to destabilise the target's footing and shift the framing of the public conflict in the accuser's favour</p></div>
                        <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">The label does not need to be provable — the suggestion alone forces the target to over-explain, self-censor, and appear defensive to observers</p></div>
                        <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">The false allegation against a local doctor followed this exact structure — and it worked. RJ appears to be running the same play.</p></div>
                    </div>
                </div>
            </div>

            <div class="border-l-4 border-hot/50 pl-5" style="background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">Noted</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">RJ organises gang assaults. He is documented doing so across this chapter. He threatens restraining orders while his own mother has one against him. He deploys "creep" language borrowed from a false allegation playbook that worked on a local doctor. The text message is here. The pattern is here. None of this is coincidence.</p>
            </div>
        </div>

        <!-- Surfer's Paradise — car incident -->
        <div class="story-chapter reveal mt-10" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Surfer's Paradise · Street Intimidation</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">SPOTTED ON FOOT.<br><span class="text-hot">JUMPED OUT OF THE CAR. THEN RAN.</span></h3>
            <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-5">"RJ spotted Adam and Kosta walking at Surfer's Paradise. He jumped out of the car in a threatening manner. Then he ran. Adam called Marc Barrow. The car was confiscated."</p>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Following the sustained daily campaign against Adam Watson, RJ spotted Adam and Kosta walking together at Surfer's Paradise. RJ exited the vehicle in a threatening manner — approaching them in a way that made the intent clear — then fled. Adam Watson contacted Marc Barrow. Police attended. The car RJ had jumped out of was confiscated.</p>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-px mb-6" style="background:rgba(245,234,212,0.06)">
                <div class="p-4" style="background:#0c0804">
                    <div class="text-[0.46rem] tracking-[0.18em] uppercase text-hot mb-2">What Happened</div>
                    <p class="text-[0.6rem] text-paper/45 leading-relaxed">RJ spots Adam and Kosta on foot at Surfer's Paradise. Exits the car in a threatening manner. Approaches. Then runs.</p>
                </div>
                <div class="p-4" style="background:#0c0804">
                    <div class="text-[0.46rem] tracking-[0.18em] uppercase" style="color:#c98a10;margin-bottom:0.5rem">Adam's Response</div>
                    <p class="text-[0.6rem] text-paper/45 leading-relaxed">Adam called Marc Barrow. Police were contacted directly. The response was immediate.</p>
                </div>
                <div class="p-4" style="background:#0c0804">
                    <div class="text-[0.46rem] tracking-[0.18em] uppercase text-sage mb-2">Outcome</div>
                    <p class="text-[0.6rem] text-paper/45 leading-relaxed">The vehicle RJ jumped out of was confiscated by police.</p>
                </div>
            </div>

            <!-- Accomplice note -->
            <div class="border border-paper/[0.07] p-5 mb-6" style="background:rgba(124,106,170,0.04)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">On Complicity</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">Whoever was in that car with RJ that day may not have planned an intimidation. They may have had no idea what RJ intended when he told them to stop. But the moment a person provides transport to someone who uses it to exit a vehicle in a threatening manner toward two people walking on a public street — they have become part of the incident. Complicity does not require intent. It requires presence and participation.</p>
                <p class="text-[0.68rem] text-paper/40 leading-relaxed">The car was confiscated. The record exists. Anyone in that vehicle is now connected to a documented intimidation incident. That connection does not disappear because they didn't know what was coming.</p>
            </div>

            <!-- Thank you to Marc Barrow -->
            <div class="border-l-4 pl-5" style="border-color:rgba(61,122,74,0.6);background:rgba(61,122,74,0.04);padding:1.2rem 1rem 1.2rem 1.4rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-sage mb-3">Thank You — Marc Barrow</div>
                <p class="font-serif italic text-paper/55 leading-relaxed mb-3" style="font-size:0.88rem">"When Adam called, you came. That is what it is supposed to look like."</p>
                <p class="text-[0.65rem] text-paper/40 leading-relaxed">Marc Barrow responded when Adam Watson called after the Surfer's Paradise incident. The car was confiscated. The record was made. When the system works — when a call is answered, when an officer takes the situation seriously and acts — it is worth acknowledging. This is that acknowledgement. Whatever the surrounding complexity of this case and the roles various people have played in it, this particular response was the right one. Thank you.</p>
            </div>
        </div>

        <!-- Priceline + private calls — continual unwanted advances -->
        <div class="story-chapter reveal mt-10" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Incident 13 — Continual Unwanted Advances</span></div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">PRICELINE. PRIVATE NUMBERS.<br><span class="text-hot">CAN HE SLEEP AT YOUR HOUSE?</span></h3>
            <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-5">"He dropped his shorts at Priceline chemist. In public. In front of Adam. Then went home and called from a private number to ask if he could sleep there."</p>

            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">The following incidents are documented here not as isolated embarrassments but as a pattern of continual unwanted advances toward a person RJ spent months targeting with violence, intimidation, and institutional weaponisation. The shift in behaviour does not represent a change in the dynamic. It is the same dynamic, expressed differently.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-px mb-6" style="background:rgba(245,234,212,0.06)">

                <div class="p-5" style="background:#0c0804">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-[0.46rem] tracking-[0.18em] uppercase border px-1.5 py-0.5 text-hot" style="border-color:rgba(193,68,14,0.4)">Priceline Chemist</span>
                    </div>
                    <h4 class="font-display text-lg tracking-wide leading-tight mb-3">DROPPED HIS SHORTS.<br><span class="text-hot">INDECENT EXPOSURE. CHARGE PENDING.</span></h4>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">RJ spotted Adam Watson at Priceline chemist. He turned around and dropped his shorts, exposing himself in a public retail environment in full view of Adam. The incident was photographed. Jason is supplying the photograph to police. An indecent exposure charge is pending.</p>
                    <div class="border border-hot/15 p-3 mt-3" style="background:rgba(193,68,14,0.03)">
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Public indecent exposure — Priceline chemist</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Photograph obtained — being supplied to police by Jason</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Indecent exposure charge: pending</p></div>
                        </div>
                    </div>
                </div>

                <div class="p-5" style="background:#0c0804">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-[0.46rem] tracking-[0.18em] uppercase border px-1.5 py-0.5" style="border-color:rgba(124,106,170,0.4);color:#7c6aaa">Private Number Calls</span>
                    </div>
                    <h4 class="font-display text-lg tracking-wide leading-tight mb-3" style="color:#7c6aaa">CALLING FROM PRIVATE.<br><span class="text-paper/55">CAN I SLEEP AT YOUR HOUSE?</span></h4>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">RJ continues to call Adam Watson from withheld private numbers. The content of the calls: asking if he can sleep at Adam's house. A person who organised gang ambushes, had his car confiscated after a street intimidation incident, and is now facing an indecent exposure charge — repeatedly calling the person he has spent months targeting, from a concealed number, to ask for shelter.</p>
                    <div class="border p-3 mt-3" style="background:rgba(124,106,170,0.03);border-color:rgba(124,106,170,0.15)">
                        <div class="space-y-1.5">
                            <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5 text-xs" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Calls made from private / withheld numbers</p></div>
                            <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5 text-xs" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Content: requests to sleep at Adam Watson's home</p></div>
                            <div class="flex gap-2 items-start"><span class="shrink-0 mt-0.5 text-xs" style="color:#7c6aaa">→</span><p class="text-[0.58rem] text-paper/38 leading-relaxed">Ongoing — pattern of continual unwanted contact</p></div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Dr Md Tariqul Islam — false allegation / indemnity insurance scam -->
            <div class="border border-hot/25 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Collateral Damage — Dr Md Tariqul Islam</div>
                <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">A FALSE ALLEGATION.<br><span class="text-hot">AND A DOCTOR WHO CAN NO LONGER PRACTISE ON HIS OWN.</span></h4>
                <div class="flex flex-col sm:flex-row gap-5 items-start mb-4">
                    <div class="shrink-0 w-32 border border-paper/[0.07] overflow-hidden" style="aspect-ratio:3/4">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/dr_islam.jpeg" alt="Dr Md Tariqul Islam" class="w-full h-full object-cover object-top" loading="lazy" />
                    </div>
                    <div class="flex-1">
                        <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">RJ made a <strong class="text-paper/65">false allegation</strong> against Dr Md Tariqul Islam. As a direct consequence of an <strong class="text-paper/65">indemnity insurance scam</strong> that RJ ran, Dr Islam has <strong class="text-paper/65">lost his ability to practise on his own</strong> — the professional indemnity cover a doctor must hold to run an independent practice was compromised, and he can no longer operate solo.</p>
                        <div class="border border-paper/[0.07] p-3 mb-2 flex items-center justify-center" style="background:#fff">
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/help_medical.png" alt="Help Medical" class="w-full max-w-[180px]" style="object-fit:contain" loading="lazy" />
                        </div>
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot/70">Dr Md Tariqul Islam · now practising at Help Medical</div>
                        <a href="https://helpmedical.au/dr-md-tariqul-islam/" target="_blank" rel="noopener" class="inline-block mt-2 text-[0.44rem] tracking-[0.14em] uppercase text-hot border border-hot/30 px-2 py-0.5 hover:bg-hot/10 transition-colors">View Practice Profile ↗</a>
                    </div>
                </div>
                <p class="text-[0.66rem] text-paper/45 leading-relaxed">A doctor's capacity to practise independently rests on his indemnity cover and an unblemished record. RJ's false allegation and the insurance scam attached to it stripped Dr Islam of the first and threatened the second — the same pattern of manufactured harm that runs through every part of this section, this time landing on a medical professional who now works within a practice rather than on his own.</p>
            </div>

            <div class="border border-paper/[0.07] p-5" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">On the Pattern</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">Violence and unwanted intimacy are not opposites in this context. They are expressions of the same dynamic: a refusal to accept that another person is not available to be controlled. The person who organises ambushes is the same person exposing himself in a chemist and calling from private numbers to ask for a bed. The through-line is not affection and it is not hostility. It is a belief that Adam Watson's space — physical, social, domestic — is available to RJ on his terms. It is not. The record is here.</p>
            </div>
        </div>

    </div>
</section>




<!-- ══════════════════════════════════════
     PRINCE OF WALES HOSPITAL — QPS OFFICER UNDER INVESTIGATION
══════════════════════════════════════ -->
<section class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.07) 0%,transparent 50%)">
    <div class="max-w-4xl mx-auto">

        <div class="flex items-center gap-3 mb-3">
            <div class="w-4 h-px bg-hot"></div>
            <span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">QPS Officer — Under Investigation</span>
        </div>
        <h2 class="font-display leading-none tracking-wide mb-3" style="font-size:clamp(2.2rem,5.5vw,4rem)">ADAM WATSON WAS PUT IN THE<br><span class="text-hot">PRINCE OF WALES HOSPITAL.</span></h2>
        <p class="font-serif italic text-paper/45 text-lg leading-relaxed mb-10 max-w-2xl">The Queensland Police Service officer responsible for putting Adam Watson in the Prince of Wales Hospital is now under investigation. The conduct that led to Adam's hospitalisation is being examined by the relevant oversight body.</p>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">

            <div class="story-chapter reveal" style="border-left-color:rgba(193,68,14,0.7)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-2">The Incident</div>
                <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE PRINCE OF WALES HOSPITAL.<br><span class="text-hot">A QPS OFFICER. AN INVESTIGATION.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Adam Watson was admitted to the Prince of Wales Hospital — Randwick, New South Wales — as a direct result of conduct by a Queensland Police Service officer. The circumstances of his hospitalisation are part of the broader pattern of QPS conduct documented across this site: officers whose actions have resulted in formal investigations, dismissals, and referrals to oversight bodies.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">The officer responsible for putting Adam Watson in the Prince of Wales Hospital is now under investigation. The relevant complaint and oversight process is active. This section will be updated as the investigation progresses and outcomes are confirmed.</p>
            </div>

            <div class="story-chapter reveal" style="transition-delay:0.06s;border-left-color:rgba(201,138,16,0.5)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-gold mb-2">The Pattern</div>
                <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">NOT THE FIRST.<br><span class="text-gold">NOT THE LAST TO BE INVESTIGATED.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">This is the documented pattern in Adam Watson's interactions with Queensland Police: the officer who accepted Bodie Chalmers's false sexual assault complaint was fired. The two officers who attended the Broadbeach disability centre confrontation with Grason Andrew Kira were stood down by the Attorney General. The officer who put Adam Watson in the Prince of Wales Hospital is now under investigation.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">In each case, the officer's conduct was not a matter of dispute — it was confirmed by oversight processes, recordings, and formal findings. The investigation of the Prince of Wales Hospital officer follows the same track.</p>
            </div>
        </div>

        <!-- Aaliyah — the setup at Southport Police Station -->
        <div class="story-chapter reveal mb-8" style="border-left-color:rgba(193,68,14,0.6)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">The Setup — Southport Police Station</span>
                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/20">Aaliyah · Bodie Chalmers's Girlfriend</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-5 leading-tight">AALIYAH GOES TO SOUTHPORT POLICE.<br><span class="text-hot">PLAYING VICTIM. PROVIDING INFRASTRUCTURE.</span></h3>

            <div class="flex gap-5 items-start mb-6">
                <div class="shrink-0 border border-paper/[0.08] overflow-hidden" style="width:130px;aspect-ratio:3/4">
                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/IMG-20260623-WA0004.jpg" alt="Aaliyah — with Bodie Chalmers" class="w-full h-full object-cover object-top">
                    <div class="border-t border-paper/[0.06] px-2 py-1.5" style="background:rgba(193,68,14,0.06)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/50">Aaliyah · with Bodie Chalmers</div>
                    </div>
                </div>
                <div>
                    <p class="text-[0.7rem] leading-relaxed text-paper/48 mb-3">Aaliyah — Bodie Chalmers's Russian girlfriend — attended Southport Police Station and made allegations that she was the victim. She claimed she was being harassed by Adam Watson. She walked into a police station, while her boyfriend was in Corrective Services charged with making false allegations against Adam Watson, and presented herself as the innocent party in need of protection.</p>
                    <p class="text-[0.7rem] leading-relaxed text-paper/48 mb-3">This was a setup. Aaliyah had been in the car with Bodie Chalmers near Broadbeach library — the same incident in which Bodie leaned out and yelled <strong class="text-paper/65">"Russian"</strong> at Kosta, as part of a harassment campaign. She was not a bystander. She was present. She was in the car. She then went to police and said she was being harassed.</p>
                    <p class="text-[0.7rem] leading-relaxed text-paper/48">The female QPS officer took a statement from Bodie — who was, at this point, in Corrective Services, charged with making false allegations against Adam Watson. That officer subsequently formed the view that while Bodie had robbed and scammed Adam Watson, <strong class="text-paper/65">Aaliyah was the innocent party and was not involved in the scam</strong>. Adam Watson disputed this position directly. He considered it nonsense.</p>
                </div>
            </div>

            <!-- The QPS decision and cross-state referral -->
            <div class="border border-hot/20 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-3">The QPS Response — Cross-State Referral · Mental Health Act</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">When Adam Watson challenged the officer's characterisation of Aaliyah as innocent and pushed back on the position being taken, the female QPS officer performed a <strong class="text-paper/62">cross-state referral</strong> — a mechanism that resulted in Adam Watson being admitted to the <strong class="text-paper/62">Prince of Wales Hospital in Randwick, New South Wales</strong>, under the Mental Health Act.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">A person who disputes a police officer's characterisation of a criminal's girlfriend as innocent — in the context of a documented harassment campaign, a boyfriend in Corrective Services for false allegations, and an active pattern of QPS misconduct — was sent to a psychiatric hospital for disagreeing. The officer is now under investigation.</p>
            </div>

            <!-- AFP / Psychologist -->
            <div class="border border-gold/20 p-5 mb-5" style="background:rgba(201,138,16,0.03)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-gold mb-3">AFP Takeover · Psychologist's Assessment</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">In matters like this — where a cross-state Mental Health Act referral is used and the circumstances raise questions about the appropriateness of the referral — the <strong class="text-paper/62">Australian Federal Police take over the matter</strong>. The AFP engaged and spoke directly with the psychologist who assessed Adam Watson.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">The psychologist's assessment was clear: <strong class="text-paper/62">Adam Watson is normal</strong>. There was no basis under the Mental Health Act for his hospitalisation beyond the conduct of the QPS officer who initiated the referral. The AFP's involvement is itself a recognition that what occurred was not a standard welfare matter — it was an escalation of the misconduct pattern that runs through this entire file.</p>
            </div>

            <!-- Punitive psychiatry + girlfriend infrastructure -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="border border-paper/[0.08] p-4" style="background:rgba(0,0,0,0.2)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-2">Punitive Psychiatry — The Pattern</div>
                    <p class="text-[0.62rem] text-paper/42 leading-relaxed mb-2">Punitive psychiatry is the use of mental health mechanisms as a tool of control or silencing — not for therapeutic purposes, but to manage dissent, dispute, or inconvenient challenge. When a police officer refers someone to psychiatric assessment for <em>disagreeing</em> with her characterisation of a criminal's girlfriend, the mechanism is not functioning as designed. It is functioning as a weapon.</p>
                    <p class="text-[0.62rem] text-paper/42 leading-relaxed">The psychologist's finding — that Adam Watson is normal — is the record. The referral itself is the conduct under investigation.</p>
                </div>
                <div class="border border-hot/15 p-4" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">The Girlfriend Problem — Infrastructure Providers</div>
                    <p class="text-[0.62rem] text-paper/42 leading-relaxed mb-2">There is a consistent institutional tendency to view a criminal's partner as the innocent party — to treat the girlfriend as a bystander, a victim by proximity, separate from the operation. This assumption ignores the role that partners often play in providing the <strong class="text-paper/55">infrastructure</strong> of criminal conduct: the accounts, the addresses, the alibis, the police visits.</p>
                    <p class="text-[0.62rem] text-paper/42 leading-relaxed">Aaliyah was in the car at Broadbeach library during the harassment. She then walked into Southport Police Station and filed a complaint as a victim. That is not being an innocent bystander. That is operational participation. The QPS officer's failure to recognise that distinction — and her decision to penalise Adam Watson for pointing it out — is what is under investigation.</p>
                </div>
            </div>
        </div>

        <div class="border border-paper/[0.08] p-6" style="background:rgba(193,68,14,0.03)">
            <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-3">Status — Active Investigation</div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="space-y-1.5">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-1">Incident</div>
                    <p class="text-[0.6rem] text-paper/45 leading-relaxed">Adam Watson admitted to Prince of Wales Hospital, Randwick NSW, as a result of QPS officer conduct.</p>
                </div>
                <div class="space-y-1.5">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-1">Officer Status</div>
                    <p class="text-[0.6rem] text-paper/45 leading-relaxed">Under investigation by the relevant oversight body. Matter is active — this page will be updated when the outcome is confirmed.</p>
                </div>
                <div class="space-y-1.5">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-1">Context</div>
                    <p class="text-[0.6rem] text-paper/45 leading-relaxed">Consistent with documented pattern of QPS officer misconduct directed at Adam Watson — multiple officers fired, stood down, or under investigation across this timeline.</p>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     PRIVACY BREACH SECTION
══════════════════════════════════════ -->
<!-- ══════════════════════════════════════
     REDRESS SCHEME
══════════════════════════════════════ -->
<section id="redress" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(61,122,74,0.03) 0%,transparent 50%)">
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
            <div class="story-chapter reveal" style="border-left-color:rgba(193,68,14,0.3)">
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE ATTENDANCE RECORD GAP</h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Most Australian schools, churches, and government institutions maintain attendance records going back decades. Cross-referencing an applicant's name against them is not a complex investigative task. The question of why it does not appear to be standard practice is one the scheme needs to answer publicly.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Sunlight.Quest has been made aware of at least one Gold Coast case in which a Redress Scheme payout was subsequently subject to recovery action — including the seizure of an asset — following questions about whether the applicant attended the institution named in their claim. FOI requests are on file. This section will be updated when responses are received.</p>
                <div class="border border-sage/20 p-5" style="background:rgba(61,122,74,0.03)">
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

<!-- Chapter A2: West Kira (inner chapter) -->
<div class="px-5 md:px-10 py-16 border-b border-paper/[0.05]">
    <div class="max-w-6xl mx-auto">
        <div class="mb-6 pb-4 border-b border-paper/[0.06]">
            <div class="text-[0.5rem] tracking-[0.22em] uppercase text-paper/20 mb-1">Placement: Inside #adam section · After Chapter A (Bodie Chalmers)</div>
        </div>

        <div id="west-kira" class="story-chapter reveal" style="border-left-color:rgba(193,68,14,0.3)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Chapter A2 — The Accomplice</span>
                <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">West Kira</span>
            </div>
            <div class="reveal mb-6">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/west-kira.jpg" alt="West Kira" class="w-full object-cover object-center border border-paper/[0.07]" loading="lazy" />
                <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/20 mt-1.5">West Kira · Chapter A2</div>
            </div>
            <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">BODIE'S ACCOMPLICE.<br><span class="text-hot">THE KID WHO BROKE THE GLASSES.</span></h3>
            <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Adam gave him a ride. He repaid that by destroying Adam's glasses. It was recorded. That's the kind of person we're dealing with — and that's before we get to his father, Grason Andrew Kira."</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6 mt-4">West Kira is a known associate of Bodie Chalmers. During a ride provided by Adam Watson — an act of basic human decency — West Kira deliberately broke Adam's glasses. The incident was captured on recording. It is a small act, but it is characteristic: a pattern of casual entitlement, destruction without consequence, and the assumption that proximity to power insulates you from accountability.</p>

            <!-- Insulin pen — near-fatal -->
            <div class="border border-hot/40 p-6 mb-8" style="background:rgba(193,68,14,0.06)">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Near-Fatal — Insulin Pen Snapped</span>
                    <span class="text-[0.44rem] tracking-[0.14em] uppercase border border-hot/40 text-hot px-2 py-0.5 blink">⬤ COULD HAVE KILLED HIM</span>
                </div>
                <h4 class="font-display text-2xl tracking-wide mb-3 leading-tight">HE SNAPPED ADAM'S INSULIN PEN.<br><span class="text-hot">ADAM WAS DYING. PARAMEDICS GOT THERE JUST IN TIME.</span></h4>
                <p class="text-[0.68rem] leading-relaxed text-paper/48 mb-4">While Adam Watson was staying with Bodie Chalmers and West Kira, he needed his diabetic medication. West Kira <strong class="text-paper/65">deliberately snapped Adam Watson's insulin injection pen</strong> — the device a Type 1 diabetic depends on to stay alive. Without insulin, Adam's condition deteriorated rapidly. He was dying. He called paramedics, who arrived and administered insulin directly into his arm — reaching him just in time.</p>
                <p class="text-[0.68rem] leading-relaxed text-paper/48 mb-4">When the paramedic saw the broken insulin pen, Adam Watson covered for West Kira. He protected the person who had just put his life in danger. That instinct — to shield the very people harming him — runs through this entire investigation. But the fact remains: snapping a diabetic's insulin pen is not a prank. It is conduct capable of causing death.</p>
                <div class="border-l-2 border-hot/50 pl-3 py-1.5" style="background:rgba(193,68,14,0.05)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-1">What It Shows</div>
                    <p class="text-[0.62rem] text-paper/45 leading-relaxed">Breaking the glasses was characteristic. Snapping the insulin pen is the same disposition taken to its logical end — destruction without regard for consequence, even when the consequence is a person's life. Adam survived because the paramedics were fast. He covered for West Kira anyway. It shows you exactly what these people are like.</p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-8">
                <div class="bg-ink px-5 py-5 text-center">
                    <div class="stat-number text-4xl text-hot mb-1">$750K</div>
                    <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Drugs — street value</div>
                    <div class="text-[0.5rem] text-paper/18 mt-1">Charged · Bail denied</div>
                </div>
                <div class="bg-ink px-5 py-5 text-center">
                    <div class="stat-number text-4xl text-gold mb-1">$5M</div>
                    <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Bail bond · Ankle monitor</div>
                    <div class="text-[0.5rem] text-paper/18 mt-1">Definitely going to jail · Bankruptcy Notice issued</div>
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

                <!-- Drug charges / bail -->
                <div class="border border-hot/25 p-6 mb-8" style="background:rgba(193,68,14,0.04)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Update — Drug Charges</span>
                        <span class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/25 border border-paper/10 px-2 py-0.5">Bail Granted · Ankle Monitor · Going to Jail</span>
                    </div>
                    <h4 class="font-display text-2xl tracking-wide mb-3 leading-tight">$750,000 IN DRUGS.<br><span class="text-hot">BAIL GRANTED. ANKLE MONITOR. DEFINITELY GOING TO JAIL.</span></h4>
                    <p class="text-[0.68rem] leading-relaxed text-paper/45 mb-4">West Kira has since been granted bail — but it comes with an ankle monitor and a clear message from the court: he is <strong class="text-hot">definitely going to jail</strong> for the gay hate crime charges. The bail was secured by his mother, Simone Kira, who put up a <strong class="text-paper/65">$5 million bond</strong> in assets — specifically a house that was given to her. The circumstances surrounding that asset are notable: many of the other assets held by Simone and Grason Kira have since been seized by law enforcement.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-5">
                        <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.04)">
                            <div class="text-[0.48rem] tracking-[0.18em] uppercase text-gold mb-1">Bail Granted</div>
                            <p class="text-[0.62rem] text-paper/40 leading-relaxed">Bail approved — with an ankle monitoring device. West Kira is out of custody but under electronic supervision.</p>
                        </div>
                        <div class="border border-hot/15 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.48rem] tracking-[0.18em] uppercase text-hot mb-1">Going to Jail</div>
                            <p class="text-[0.62rem] text-paper/40 leading-relaxed">The court has been clear: West Kira is <strong class="text-hot">definitely going to jail</strong> for the gay hate crime charges. Bail is a temporary condition, not an acquittal.</p>
                        </div>
                        <div class="border border-hot/15 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.48rem] tracking-[0.18em] uppercase text-hot mb-1">$5M Bond — Assets Seized</div>
                            <p class="text-[0.62rem] text-paper/40 leading-relaxed">Mother Simone Kira posted a $5M bond using a house given to her. The majority of other Kira family assets have been seized by law enforcement.</p>
                        </div>
                    </div>

                    <!-- Simone Kira -->
                    <div class="border border-paper/[0.07] p-4" style="background:rgba(0,0,0,0.18)">
                        <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/30 mb-3">Simone Kira — The Mother Who Secured His Bond</div>
                        <div class="flex gap-4 items-start">
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/west_kira/simone_kira_2.jpg" alt="Simone Kira" class="w-28 shrink-0 border border-paper/10 object-cover" style="aspect-ratio:3/4;object-position:top">
                            <div>
                                <p class="text-[0.63rem] text-paper/42 leading-relaxed mb-2">Simone Kira, West Kira's mother, provided the $5 million surety to secure his release. The bond was backed by a house — an asset that was <em>given</em> to her. The origin and ownership history of that property is relevant context: it was not purchased through ordinary means at arm's length.</p>
                                <p class="text-[0.63rem] text-paper/42 leading-relaxed mb-2">Separately, law enforcement has moved on the broader Kira family asset base. Many of the assets previously held by Simone and Grason Kira have since been seized. What remains — including the property used to secure bail — is a fraction of what was once available. The family's financial position has been substantially reduced by enforcement action.</p>
                                <p class="text-[0.63rem] text-paper/42 leading-relaxed">A mother using a gifted house to bail out a son who has been told he is <em>definitely</em> going to jail is the final image in the Kira family's recent chapter. Bail is not freedom. It is a temporary condition pending an outcome that has already been described to the defendant.</p>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="border border-paper/[0.07] p-5 mb-8" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">Financial Record — Statement of Claim & Bankruptcy Notice</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">West Kira has a Statement of Claim stamped by the Local Court for obtaining benefit by deception — a debt that includes the cost of deliberately destroying Adam Watson's glasses during the in-vehicle incident. The debt has since been onsold to a third-party collector. A stamped Statement of Claim is not an allegation. It is a court document. The conduct is on the record.</p>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-3">The debt has now escalated further. A <strong class="text-hot">Bankruptcy Notice</strong> has been issued by the Federal Court of Australia to West Kira. This is not a warning letter — it is a formal Federal Court instrument. Failure to comply with a Bankruptcy Notice within the prescribed timeframe constitutes an act of bankruptcy and can result in a sequestration order being made against the debtor's estate. The debt went unpaid. The Local Court judgement went ignored. Now the Federal Court is involved.</p>
                <div class="evidence-vault mt-3">
                    <div class="ev-header" onclick="toggleVault(this)">
                        <div class="flex items-center gap-2">
                            <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— West Kira · Statement of Claim · Local Court</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span>
                            <span class="ev-toggle">▼</span>
                        </div>
                    </div>
                    <div class="ev-body">
                        <div class="ev-file ef-hot" onclick="openMV('pdf-soc-west-kira')">
                            <div class="ev-icon ev-pdf">PDF</div>
                            <div class="ev-meta">
                                <div class="ev-name">statement_of_claim_west_kira.pdf</div>
                                <div class="ev-desc">PDF · Statement of Claim · Local Court · Stamped · Obtaining benefit by deception · Debt onsold · Includes glasses damage</div>
                            </div>
                            <span class="ev-cta">View →</span>
                        </div>
                    </div>
                </div>

                <!-- Bankruptcy Notice — embedded PDF -->
                <div class="mt-5 border border-hot/20 overflow-hidden">
                    <div class="flex items-center justify-between px-4 py-2.5" style="background:rgba(193,68,14,0.07)">
                        <div class="flex items-center gap-2">
                            <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📄 Federal Court Document</span>
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/30">— Bankruptcy Notice · West Kira</span>
                        </div>
                        <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/west_kira/bankruptcy_notice_west_kira.pdf" target="_blank" rel="noopener" class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/70 hover:text-hot transition-colors">Open PDF ↗</a>
                    </div>
                    <iframe
                        src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/west_kira/bankruptcy_notice_west_kira.pdf"
                        class="w-full"
                        style="height:720px;border:none;display:block;background:#fff"
                        title="Bankruptcy Notice — West Kira · Federal Court of Australia"
                        loading="lazy"
                    ></iframe>
                    <div class="px-4 py-2 border-t border-hot/15 text-center" style="background:rgba(0,0,0,0.25)">
                        <span class="text-[0.43rem] tracking-[0.12em] uppercase text-paper/30">Bankruptcy Notice · Federal Court of Australia · West Kira · Unpaid Default Judgement</span>
                    </div>
                </div>
            </div>

            <!-- Examination Order -->
            <div class="story-chapter reveal mt-8 mb-8" style="border-left-color:rgba(61,122,74,0.5)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#3d7a4a;border-color:rgba(61,122,74,0.4)">Enforcement · Examination Order · Form 54 UCPR 38.3 · Local Court of NSW</span>
                </div>
                <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">SHOW UP. SHOW YOUR ASSETS.<br><span class="text-sage">OR YOU MAY BE ARRESTED.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Adam Watson has obtained an Examination Order from the Local Court of NSW — issued 1 June 2026 — requiring West Kira to attend court and disclose his full financial position so the judgment debt can be enforced. West Kira destroyed a man's glasses during a ride Adam gave him out of basic decency. Adam is determined to collect. Karma, as it turns out, runs on a court timetable.</p>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-px mb-6" style="background:rgba(245,234,212,0.06)">
                    <div class="p-4" style="background:#0c0804"><div class="text-[0.42rem] tracking-[0.18em] uppercase text-sage mb-1.5">Court Date</div><div class="font-display text-lg leading-tight text-paper/80">17 July 2026</div><div class="text-[0.56rem] text-paper/35 mt-1">9:30 AM · Tweed Heads</div></div>
                    <div class="p-4" style="background:#0c0804"><div class="text-[0.42rem] tracking-[0.18em] uppercase text-sage mb-1.5">Court</div><div class="font-display text-lg leading-tight text-paper/80">Local Court NSW</div><div class="text-[0.56rem] text-paper/35 mt-1">General Division · Sydney Registry</div></div>
                    <div class="p-4" style="background:#0c0804"><div class="text-[0.42rem] tracking-[0.18em] uppercase text-sage mb-1.5">Case Number</div><div class="font-display text-lg leading-tight text-paper/80">2025/00341907</div><div class="text-[0.56rem] text-paper/35 mt-1">Watson v West Kira</div></div>
                    <div class="p-4" style="background:#0c0804"><div class="text-[0.42rem] tracking-[0.18em] uppercase text-hot mb-1.5">If He Doesn't Attend</div><div class="font-display text-lg leading-tight text-hot">Arrested.</div><div class="text-[0.56rem] text-paper/35 mt-1">Stated on the face of the Order</div></div>
                </div>
                <div class="border border-sage/20 p-5 mb-5" style="background:rgba(61,122,74,0.04)">
                    <div class="text-[0.46rem] tracking-[0.2em] uppercase text-sage mb-3">What West Kira Must Produce at Court</div>
                    <div class="space-y-1.5">
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/50 leading-relaxed">Full bank statements for all accounts held in his name — last 6 months</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/50 leading-relaxed">Documents showing the current balance of all bank accounts held in his name</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/50 leading-relaxed">Title deeds or other documents showing any real property owned by him</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/50 leading-relaxed">Vehicle registration certificates or documents showing any motor vehicles owned by him</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/50 leading-relaxed">Income documents — payslips, Centrelink statements, or tax returns</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.62rem] text-paper/50 leading-relaxed">Documents identifying the name and branch of every bank or financial institution at which he holds an account</p></div>
                    </div>
                </div>
                <div class="border-l-4 pl-5 mb-5" style="border-color:rgba(61,122,74,0.5);background:rgba(61,122,74,0.04);padding:1rem 1rem 1rem 1.25rem">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-sage mb-2">On Record — Adam Watson</div>
                    <p class="font-serif italic text-paper/55 text-base leading-relaxed">"He got into my car. I gave him a ride. He broke my glasses. He is going to show up to court in Tweed Heads and show me what he owns — or he gets arrested. That's karma. I'm getting my glasses."</p>
                </div>
                <p class="text-[0.65rem] text-paper/40 leading-relaxed mb-5">West Kira is currently in custody on drug charges worth approximately $750,000 and facing charges over the recorded Mick Gatto call. He is also ordered to be in Tweed Heads at 9:30 AM on 17 July 2026 — fully disclosed, assets on the table — to satisfy a judgment obtained for deliberately destroying a passenger's glasses during a free ride.</p>
                <div class="border border-paper/[0.07] overflow-hidden mb-5" style="background:rgba(0,0,0,0.2)">
                    <div class="flex items-center justify-between px-4 py-2.5 border-b border-paper/[0.06]" style="background:rgba(0,0,0,0.3)">
                        <span class="text-[0.44rem] tracking-[0.2em] uppercase text-sage">Examination Order · Form 54 UCPR 38.3 · D0002DOIXL · Issued 1 June 2026 · Watson v West Kira · 2025/00341907</span>
                        <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/west_kira/west_kira_examination_notice.pdf" target="_blank" rel="noopener" class="text-[0.44rem] tracking-[0.12em] uppercase border border-paper/20 text-paper/35 px-2 py-1 hover:border-sage/50 hover:text-sage transition-colors">Open PDF ↗</a>
                    </div>
                    <div style="height:680px">
                        <iframe src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/west_kira/west_kira_examination_notice.pdf" style="width:100%;height:100%;border:none;display:block" title="Examination Order — West Kira — Local Court of NSW — 17 July 2026" loading="lazy"></iframe>
                    </div>
                    <div class="px-4 py-3 border-t border-paper/[0.05]" style="background:rgba(0,0,0,0.2)">
                        <span class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/22">PDF · 2 pages · Form 54 (version 1) UCPR 38.3 · Attendance required 17 July 2026 · Non-attendance: may be arrested</span>
                    </div>
                </div>
            </div>

            <!-- Mick Gatto / Hit Solicitation -->
            <div class="reveal mb-6">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/Screenshot_20260501_184253_Instagram.jpg" alt="Grason Andrew Kira — Kira & Kira Instagram" class="w-full border border-paper/[0.07]" loading="lazy" />
                <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/20 mt-1.5">Grason Andrew Kira &nbsp;·&nbsp; Kira &amp; Kira Instagram</div>
            </div>
            <div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">"ANYTHING MR. WATSON TOUCHES<br><span class="text-hot">TURNS TO STONE."</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"West Kira and Grason Andrew Kira called Mick Gatto and offered him money to put a hit out on Adam Watson. Mick Gatto told them that anything Mr. Watson touches turns to stone. He called them amateurs. Then he handed the recorded inbound call to police."</p>
            </div>
            </div>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The call was made by West Kira and Grason Andrew Kira to Mick Gatto — an approach that combined a solicitation to murder with the offering of a sum of money. Gatto's response was unambiguous. He recorded the inbound call and provided it directly to police. West Kira and Grason Andrew Kira are now facing charges as a result of that recorded call being in police possession.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">This is the same Mick Gatto who, at the Broadbeach disability centre confrontation, warned Grason Andrew Kira directly — in front of two corrupt QPS officers and a psychologist — not to interfere with Adam Watson. Grason Andrew Kira ignored that warning. He then compounded it by making a recorded call soliciting violence against the same person Gatto had already publicly stated was under his protection.</p>

            <!-- Mick Gatto photo -->
            <div class="reveal mb-6">
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/mick_gatto.jpg"
                     alt="Mick Gatto"
                     class="w-full border border-paper/[0.07]"
                     style="max-height:520px;object-fit:contain;background:#0d0d0d"
                     loading="lazy" />
                <div class="flex items-center justify-between px-3 py-2 border border-t-0 border-paper/[0.07]" style="background:rgba(61,122,74,0.06)">
                    <span class="text-[0.45rem] tracking-[0.18em] uppercase text-sage">Mick Gatto · Recorded the inbound call and handed it to police</span>
                    <span class="text-[0.45rem] tracking-[0.14em] uppercase text-paper/25">"Anything Mr. Watson touches turns to stone."</span>
                </div>
            </div>

            <div class="border border-hot/20 p-6 mb-6" style="background:rgba(193,68,14,0.04)">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-4">Sequence of Events — The Call</div>
                <div class="space-y-2.5">
                    <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">The Call</span><span class="text-[0.65rem] text-paper/45">West Kira and Grason Andrew Kira call Mick Gatto and offer him a sum of money to arrange a hit on Adam Watson.</span></div>
                    <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-gold/70 w-28 shrink-0 pt-0.5">Gatto's Response</span><span class="text-[0.65rem] text-paper/45">"Anything Mr. Watson touches turns to stone." Gatto calls them amateurs and refuses.</span></div>
                    <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-gold/70 w-28 shrink-0 pt-0.5">The Recording</span><span class="text-[0.65rem] text-paper/45">Gatto's inbound call was being recorded. He provides the recording to Queensland Police.</span></div>
                    <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Charged</span><span class="text-[0.65rem] text-paper/45">West Kira and Grason Andrew Kira are now facing charges in connection with the recorded solicitation.</span></div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-8">
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">West Kira</div>
                    <div class="font-display text-lg text-hot mb-1">CHARGED</div>
                    <p class="text-[0.6rem] text-paper/40 leading-relaxed">Drug offences ($750K). Bail denied. Supreme Court bail application pending. Now also facing charges over the recorded Gatto call.</p>
                </div>
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">West Kira's Father</div>
                    <div class="font-display text-lg text-hot mb-1">CHARGED</div>
                    <p class="text-[0.6rem] text-paper/40 leading-relaxed">Facing charges over the recorded solicitation call to Mick Gatto — the same man he previously invoked as a threat at the Broadbeach disability centre confrontation.</p>
                </div>
                <div class="border border-sage/20 p-5" style="background:rgba(61,122,74,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-1">Mick Gatto</div>
                    <div class="font-display text-lg text-sage mb-1">COOPERATED</div>
                    <p class="text-[0.6rem] text-paper/40 leading-relaxed">Recorded the inbound call and provided it to police. The recording is the basis for the charges now facing both West Kira and Grason Andrew Kira.</p>
                </div>
            </div>

            <div class="border-l-4 pl-6 py-1 mb-8" style="border-color:rgba(193,68,14,0.4)">
                <p class="text-[0.68rem] text-paper/40 leading-relaxed">Grason Andrew Kira had already been warned by Mick Gatto at the Broadbeach confrontation — in front of witnesses, on a recording that drove two QPS officers to be stood down by the Attorney General. He chose to call Gatto again anyway, this time to offer money for a murder. The charge that came from that call is not a surprise. It is a consequence.</p>
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

            <!-- Gay hate crime — West Kira & Bodie Chalmers -->
            <div class="story-chapter reveal mt-10" style="border-left-color:rgba(193,68,14,0.6)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Gay Hate Crime — Bodie Chalmers &amp; West Kira</span>
                    <span class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/20 border border-paper/10 px-2 py-0.5">Footage Obtained · Both Charged</span>
                </div>
                <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">FILMED IT. SHOWED IT.<br><span class="text-hot">"DON'T YOU LIKE BAD BOYS?"</span></h3>
                <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-5">"Bodie showed Adam the footage and said: 'Don't you like bad boys?' Adam said: 'Not like that.' The footage was of West Kira cutting off a man's testicles on camera because he was gay. That footage has now been obtained. Both are charged."</p>

                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">West Kira filmed himself cutting off a man's testicles because he was gay — a charge carrying 28 years. Bodie Chalmers obtained the footage and showed it to Adam Watson. His comment when he did so: <span class="font-display text-paper/70">"Don't you like bad boys?"</span> Adam's response: <span class="font-display text-paper/70">"Not like that."</span> The footage has since been obtained by police. Both Bodie Chalmers and West Kira are charged. West Kira carries a further separate 3-year charge for stealing from Adam Watson.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-px mb-6" style="background:rgba(245,234,212,0.06)">
                    <div class="p-5" style="background:#0c0804">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">West Kira — The Act</div>
                        <div class="space-y-2">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Filmed himself cutting off a man's testicles because the victim was gay</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Act motivated by victim's sexual orientation — classified as gay hate crime</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Footage obtained by police · Charged</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">28 years</strong> — genital mutilation · gay hate crime</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed"><strong class="text-paper/60">3 years separate</strong> — stealing from Adam Watson</p></div>
                        </div>
                    </div>
                    <div class="p-5" style="background:#0c0804">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Bodie Chalmers — The Distribution</div>
                        <div class="space-y-2">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Obtained the footage and showed it to Adam Watson</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Said: "Don't you like bad boys?" — Adam: "Not like that."</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Charged with gay hate crime · Footage obtained</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Charge carries 28 years — same as West Kira for distribution</p></div>
                        </div>
                    </div>
                </div>

                <!-- Prison phone death threat -->
                <div class="border-l-4 border-hot/60 pl-5 mb-5" style="background:rgba(193,68,14,0.07);padding:1.2rem 1rem 1.2rem 1.25rem">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">Recorded — Prison Phone</div>
                        <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25 border border-paper/10 px-2 py-0.5">Flagged by Prosecutor Correy Cook</div>
                    </div>
                    <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">"I'LL KILL YOU FOR BEING GAY."<br><span class="text-hot">SAID FROM A PRISON PHONE. WHILE UP ON GAY HATE CRIMES.</span></h4>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">While already in custody facing gay hate crime charges, West Kira made a recorded death threat from a prison phone: <em class="text-paper/70">"I'll kill you for being gay."</em> The call was recorded — as all prison calls are. The threat was directed at Adam Watson on the basis of his sexual orientation.</p>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">Prosecutor Correy Cook flagged that the recording is itself potentially chargeable: threatening to kill a person on the basis of their sexual orientation, from a monitored prison line, while already before the court on gay hate crime charges. As Correy Cook noted, it is about as self-incriminating as it gets — a man facing 28 years for a gay hate crime, on a recorded line, making a fresh death threat motivated by the victim's sexual orientation.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-1.5">The Threat</div>
                            <div class="text-[0.6rem] text-paper/50 leading-relaxed">"I'll kill you for being gay" — recorded, prison call, directed at Adam Watson</div>
                        </div>
                        <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-1.5">Context</div>
                            <div class="text-[0.6rem] text-paper/50 leading-relaxed">Made while already in custody facing 28-year gay hate crime charges — on a monitored line</div>
                        </div>
                        <div class="border border-gold/20 p-3" style="background:rgba(201,138,16,0.04)">
                            <div class="text-[0.44rem] tracking-[0.15em] uppercase text-gold mb-1.5">Prosecutor — Correy Cook</div>
                            <div class="text-[0.6rem] text-paper/50 leading-relaxed">Flagged recording as potentially a standalone chargeable offence in its own right</div>
                        </div>
                    </div>

                    <!-- Solitary confinement consequence -->
                    <div class="border border-hot/30 p-4 mt-4" style="background:rgba(193,68,14,0.08)">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot">Consequence — Solitary Confinement</div>
                        </div>
                        <p class="text-[0.62rem] text-paper/52 leading-relaxed">As a direct result of issuing the gay death threat against Adam Watson, West Kira has been placed in <strong class="text-paper/70">solitary confinement</strong>. The prison system treated the recorded threat as a serious disciplinary matter — separate from and in addition to its potential as a standalone charge flagged by prosecutor Correy Cook. West Kira is now isolated, facing 28 years for genital mutilation, a further 3 years for stealing from Adam Watson, and the prospect of a fresh charge arising from the very phone call that landed him in solitary.</p>
                    </div>
                </div>

                <!-- West Kira's younger brother -->
                <div class="border-l-4 border-hot/40 pl-5 mb-5" style="background:rgba(193,68,14,0.05);padding:1.2rem 1rem 1.2rem 1.25rem">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">West Kira's Younger Brother — Damage Control</div>
                        <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25 border border-paper/10 px-2 py-0.5">Same person who linked the original call</div>
                    </div>
                    <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">NOW CALLING ADAM.<br><span class="text-hot">"WE SHOULD MEET AND WORK THIS OUT."</span></h4>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">West Kira's younger brother — the same person who linked up the prison phone call on which West Kira made the recorded gay death threat — is now calling Adam Watson directly. His message: they should meet and work things out. This is the same individual who facilitated the very call that landed West Kira in solitary confinement and may produce an additional charge.</p>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">West Kira's younger brother is also claiming <strong class="text-paper/65">$38,000 in damage</strong> to his car, which he alleges occurred as a result of an altercation. This claim has arrived as part of the same contact in which he is urging Adam Watson to meet and resolve matters — a combination that reads as an attempt to create leverage while simultaneously seeking to de-escalate the legal exposure surrounding his brother.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-1.5">Who He Is</div>
                            <div class="text-[0.6rem] text-paper/50 leading-relaxed">West Kira's younger brother — linked the prison phone call that produced the death threat recording</div>
                        </div>
                        <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-1.5">His Request</div>
                            <div class="text-[0.6rem] text-paper/50 leading-relaxed">"We should meet and work this out" — an approach to Adam Watson while West Kira is in solitary</div>
                        </div>
                        <div class="border border-gold/20 p-3" style="background:rgba(201,138,16,0.04)">
                            <div class="text-[0.44rem] tracking-[0.15em] uppercase text-gold mb-1.5">$38,000 Car Claim</div>
                            <div class="text-[0.6rem] text-paper/50 leading-relaxed">Alleging $38,000 damage to his vehicle from an altercation — raised as part of the same contact</div>
                        </div>
                    </div>
                </div>

                <!-- Caveat on Adam Watson's property -->
                <div class="border-l-4 border-hot/50 pl-5 mb-5 mt-5" style="background:rgba(193,68,14,0.05);padding:1.2rem 1rem 1.2rem 1.25rem">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">New Incident — Property Caveat · $150,000 Damages Claim</div>
                        <div class="text-[0.44rem] tracking-[0.14em] uppercase text-paper/25 border border-paper/10 px-2 py-0.5">Discovered During House Sale</div>
                    </div>
                    <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">A CAVEAT ON ADAM WATSON'S HOUSE.<br><span class="text-hot">LODGED BY WEST KIRA. $150,000 FOR "TRAUMA."</span></h4>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">When Adam Watson was in the process of selling his house, his agent — during the transfer process for the buyer — discovered a caveat on the property. An enquiry was made to the Land and Housing office to determine why the caveat had been lodged and on what grounds. The answer: the caveat was lodged by West Kira, who was claiming <strong class="text-paper/65">$150,000 in damages for trauma</strong>.</p>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">This is the same West Kira who is currently in custody — facing 28 years for a gay hate crime, a further 3-year charge for stealing from Adam Watson, and a solitary confinement consequence from making a recorded death threat on a monitored prison phone. He filed a caveat on the property of the person he has been charged with stealing from, while in jail, claiming trauma damages.</p>
                    <div class="border border-hot/25 p-4 mb-4" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-3">The Position — Lapsing Notice</div>
                        <div class="space-y-2">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Adam Watson is currently pursuing a <strong class="text-paper/60">lapsing notice</strong> with the assistance of his solicitor <strong class="text-paper/60">Stephen Alexander</strong> — the formal mechanism for challenging an improperly lodged caveat and requiring the caveator to commence proceedings or have it removed. Stephen Alexander has quoted <strong class="text-paper/60">$8,000</strong> to carry out the lapsing notice on Adam Watson's behalf.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Once the lapsing notice is served, West Kira will be required to commence Supreme Court proceedings to substantiate the caveat — or it lapses automatically.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">Commencing those proceedings will require approximately <strong class="text-paper/60">$50,000 to appoint a lawyer</strong>. West Kira is in jail. He has no capacity to fund that defence. A man in custody facing a 28-year sentence cannot practically sustain a Supreme Court challenge against a motivated applicant with legal representation.</p></div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-1.5">The Caveat</div>
                            <div class="text-[0.6rem] text-paper/50 leading-relaxed">Lodged by West Kira on Adam Watson's property. $150,000 claimed for trauma damages. Discovered during the house sale transfer process.</div>
                        </div>
                        <div class="border border-hot/20 p-3" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.44rem] tracking-[0.15em] uppercase text-hot mb-1.5">Who Filed It</div>
                            <div class="text-[0.6rem] text-paper/50 leading-relaxed">West Kira — currently in custody. Facing 28-year gay hate crime charge + 3 years for stealing from Adam Watson + solitary confinement for prison death threat.</div>
                        </div>
                        <div class="border border-gold/20 p-3" style="background:rgba(201,138,16,0.04)">
                            <div class="text-[0.44rem] tracking-[0.15em] uppercase text-gold mb-1.5">The Problem for West Kira</div>
                            <div class="text-[0.6rem] text-paper/50 leading-relaxed">Supreme Court defence requires ~$50,000 in legal costs. He is in jail. He cannot fund it. The caveat is unlikely to survive a formal challenge.</div>
                        </div>
                    </div>
                </div>

                <!-- Caveat update — $250,000, false "sexual assault" notation, vindictive harm -->
                <div class="border border-hot/30 p-5 mb-5 mt-5" style="background:rgba(193,68,14,0.06)">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">Update — What It Actually Cost · The False Notation</span>
                        <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-hot/50 text-hot px-1.5 py-0.5 blink">⬤ VINDICTIVE HARM</span>
                    </div>
                    <h4 class="font-display text-2xl tracking-wide mb-3 leading-tight">$250,000 TO CLEAR A CAVEAT.<br><span class="text-hot">AND A LIE ON THE TITLE: "CONVICTED OF SEXUAL ASSAULT."</span></h4>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">Getting the caveat removed has now cost Adam Watson a total of <strong class="text-paper/65">$250,000</strong>. This was not West Kira acting alone — <strong class="text-paper/65">Bodie Chalmers, his mother, and West Kira</strong> are all bound up in the conduct that put it there and kept it there.</p>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-3">The mechanism of the harm is chilling. When the selling agent enquired as to why the property could not be sold, he was told by the <strong class="text-paper/65">Land and Titles Office of NSW</strong> that the caveat stated Adam Watson was <strong class="text-hot">"Convicted of sexual assault."</strong> That is false. Adam Watson has no such conviction. A fabricated criminal notation was attached to his title — the very document a buyer, an agent, and a bank all rely on — and it was blocking the sale of his home.</p>
                    <div class="border-l-4 border-hot/60 pl-4 py-2 mb-3" style="background:rgba(193,68,14,0.05)">
                        <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-1">The Concept — Vindictive Harm</div>
                        <p class="text-[0.64rem] text-paper/48 leading-relaxed">This is what vindictive harm looks like in practice. A false criminal label, placed on a legal instrument, can freeze a person's largest asset, poison a sale, and brand them to every professional who searches the title — all before a single fact is tested. It can ruin a person's life. And undoing it is not free: it took a solicitor, a lapsing notice, and a quarter of a million dollars in cost and consequence to reverse something that was untrue from the outset. The person targeted pays — in money, time, and reputation — for someone else's malice.</p>
                    </div>
                    <p class="text-[0.66rem] text-paper/45 leading-relaxed">The lapsing notice to remove the caveat was carried out by Adam Watson's solicitor, <strong class="text-paper/60">Stephen Alexander</strong>.</p>
                </div>

                <!-- Notice of Orders — Adam Watson v West Kira -->
                <div class="border border-sage/30 mt-5 mb-5 p-5" style="background:rgba(61,122,74,0.04)">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-[0.48rem] tracking-[0.2em] uppercase text-sage">Court Order — Local Courts of New South Wales · 3 February 2026</span>
                        <span class="text-[0.42rem] tracking-[0.14em] uppercase border border-sage/40 text-sage/70 px-1.5 py-0.5">JUDGMENT OBTAINED</span>
                    </div>
                    <h4 class="font-display text-xl tracking-wide mb-3 leading-tight">ADAM WATSON v WEST KIRA.<br><span class="text-sage">CASE NO. 2025/00341907 — $10,958.00 INCLUSIVE OF COSTS.</span></h4>
                    <p class="text-[0.68rem] text-paper/48 leading-relaxed mb-4">On 3 February 2026, the Local Court of New South Wales made orders in the matter of <strong class="text-paper/65">Adam Watson v West Kira</strong> (Case No. 2025/00341907). West Kira, as First Defendant, was ordered to pay Adam Watson, as First Plaintiff, the sum of <strong class="text-paper/65">$10,958.00 inclusive of costs</strong>. This is a judgment on the record from the court — separate from and in addition to the criminal charges West Kira faces.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-sage/60 mb-2">Notice of Orders — 3 February 2026</div>
                            <div class="border border-sage/20 overflow-hidden">
                                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/west_kira/IMG-20260508-WA0007+(1).jpg" alt="Notice of Orders Made — Adam Watson v West Kira — Local Courts NSW" class="w-full" loading="lazy" style="max-width:400px" />
                            </div>
                            <div class="text-[0.4rem] tracking-[0.1em] uppercase text-paper/30 mt-1.5">Local Courts of New South Wales · Case No. 2025/00341907</div>
                        </div>
                        <div class="space-y-3">
                            <div class="border border-sage/20 p-3" style="background:rgba(61,122,74,0.04)">
                                <div class="text-[0.44rem] tracking-[0.15em] uppercase text-sage mb-1.5">Case Title</div>
                                <div class="text-[0.6rem] text-paper/55 leading-relaxed">Adam Watson v West Kira · Local Courts of New South Wales</div>
                            </div>
                            <div class="border border-sage/20 p-3" style="background:rgba(61,122,74,0.04)">
                                <div class="text-[0.44rem] tracking-[0.15em] uppercase text-sage mb-1.5">Case Number</div>
                                <div class="font-mono text-[0.62rem] text-paper/65">2025/00341907</div>
                            </div>
                            <div class="border border-sage/20 p-3" style="background:rgba(61,122,74,0.04)">
                                <div class="text-[0.44rem] tracking-[0.15em] uppercase text-sage mb-1.5">Judgment</div>
                                <div class="text-[0.6rem] text-paper/55 leading-relaxed">West Kira (First Defendant) is to pay Adam Watson (First Plaintiff) the sum of <strong class="text-paper/70">$10,958.00 inclusive of costs</strong></div>
                            </div>
                            <div class="border border-sage/20 p-3" style="background:rgba(61,122,74,0.04)">
                                <div class="text-[0.44rem] tracking-[0.15em] uppercase text-sage mb-1.5">Date of Orders</div>
                                <div class="text-[0.6rem] text-paper/55 leading-relaxed">3 February 2026 · Issued by Registrar</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lottery / email intercept incident -->
                <div class="border-l-4 border-hot/50 pl-5 mt-6 mb-6" style="background:rgba(193,68,14,0.05);padding:1.1rem 1rem 1.1rem 1.25rem">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-[0.48rem] tracking-[0.2em] uppercase text-hot">New Incident</span>
                        <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-gold/40 text-gold px-1.5 py-0.5">⬤ IN RECOVERY</span>
                    </div>
                    <h4 class="font-display text-lg tracking-wide mb-3 leading-tight">$200,000 LOTTERY WIN.<br><span class="text-hot">BODIE INTERCEPTED THE EMAIL. GAVE AWAY THE BANK DETAILS.</span></h4>
                    <p class="text-[0.68rem] text-paper/45 leading-relaxed mb-4">Adam Watson won $200,000 through Adrian Portelli's lottery. A notification email was sent requesting his bank deposit details so the winnings could be transferred. Bodie Chalmers — who had obtained access to Adam Watson's emails — intercepted that email and replied to it himself, providing his own bank deposit details in Adam's name. The $200,000 was directed to Bodie Chalmers's account.</p>
                    <div class="flex gap-4 items-start mb-4">
                        <div class="shrink-0 w-28 border border-paper/[0.07] overflow-hidden" style="aspect-ratio:1/1">
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/adrian_portelli.jpg" alt="Adrian Portelli — LMCT+ lottery founder" class="w-full h-full object-cover object-top" loading="lazy" />
                        </div>
                        <div class="pt-1">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold/70 mb-1">Adrian Portelli</div>
                            <p class="text-[0.58rem] text-paper/40 leading-relaxed">The lottery through which Adam Watson legitimately won the $200,000. Adrian Portelli's competition was the source of the winnings Bodie Chalmers then intercepted and redirected — Portelli himself is not implicated in the fraud.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-4">
                        <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.03)">
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-gold mb-1">The Win</div>
                            <div class="font-display text-2xl text-gold mb-1">$200,000</div>
                            <p class="text-[0.55rem] text-paper/38 leading-relaxed">Adam Watson gambling on Adrian Portelli's lottery. Legitimate win. Notification sent to his email account.</p>
                        </div>
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-1">The Intercept</div>
                            <div class="font-display text-base text-hot mb-1">Email Access</div>
                            <p class="text-[0.55rem] text-paper/38 leading-relaxed">Bodie had gained access to Adam Watson's email account. He saw the lottery notification, replied to it with his own bank deposit details, and redirected the transfer.</p>
                        </div>
                        <div class="border border-paper/[0.08] p-4" style="background:rgba(0,0,0,0.18)">
                            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-paper/30 mb-1">Status</div>
                            <div class="font-display text-base text-paper/60 mb-1">In Recovery</div>
                            <p class="text-[0.55rem] text-paper/38 leading-relaxed">The $200,000 is currently in recovery. The intercept adds to the fraud charges Bodie Chalmers is already facing.</p>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed"><strong class="text-paper/58">The access:</strong> Bodie Chalmers obtained access to Adam Watson's email account. The mechanism by which he did so is consistent with the broader pattern of covert surveillance documented across this chapter — Apple location access obtained without knowledge, tracking device on the fuel cap, and now email account access.</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed"><strong class="text-paper/58">The reply:</strong> Rather than alert Adam Watson to the lottery notification, Bodie replied directly to the sender — impersonating Adam — and submitted his own bank deposit details. The transfer proceeded on the basis of those details.</p></div>
                        <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed"><strong class="text-paper/58">Recovery underway:</strong> The $200,000 is currently being recovered. This incident is part of the broader fraud charges Bodie Chalmers faces — he is already looking at 3 years for defrauding Adam Watson across the pattern of conduct documented in this chapter.</p></div>
                    </div>
                </div>

                <!-- Irony callout -->
                <div class="border border-violet/25 p-5" style="background:rgba(124,106,170,0.04)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">The Irony — On the Record</div>
                    <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">Bodie Chalmers was in a relationship with Adam Watson at the time he was distributing footage of a gay hate crime and asking Adam whether he liked "bad boys." A person in a same-sex relationship, committing and celebrating a violent act against a man because of his sexual orientation, then asking his gay partner whether he finds this attractive. That is not a contradiction. It is a demonstration of who Bodie Chalmers is — someone for whom the sexual orientation of a target is a weapon, regardless of his own relationships.</p>
                    <p class="text-[0.68rem] text-paper/40 leading-relaxed">The footage exists. Both are charged. West Kira faces 28 years for the genital mutilation alone — plus 3 years separately for stealing from Adam Watson, plus the prison phone death threat that Correy Cook has flagged as potentially chargeable in its own right. These are not the only charges before the court.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Kira & Kira Standalone Section -->
<section id="kira-kira" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.06) 0%,rgba(12,8,4,0) 60%)">
    <div class="max-w-6xl mx-auto">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-4 h-px bg-hot"></div>
                    <span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Organised Crime — Episode 1</span>
                </div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">KIRA &amp; KIRA.<br><span class="text-hot">FURNITURE OUT. COCAINE IN.</span></h2>
                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/kira_and_kira.jpg" alt="Kira &amp; Kira logo" class="mt-4 mb-3 h-14 w-auto opacity-80" loading="lazy" />
                <p class="font-serif italic text-paper/35 mt-1 max-w-xl leading-relaxed">A Gold Coast furniture shop. A wealthy owner with Mick Gatto connections. Yakuza involvement. And a campaign of intimidation against Adam Watson that reached a Priceline chemist, a Centre Manager, and a disability centre near Broadbeach library.</p>
            </div>
            <div class="max-w-xs">
                <div class="flex flex-wrap gap-2">
                    <span class="evidence-tag text-hot" style="color:#c1440e">⚠ Drug Trafficking — Alleged</span>
                    <span class="evidence-tag text-gold" style="color:#c98a10">🎙 Psychologist Recording</span>
                    <span class="evidence-tag" style="color:rgba(245,234,212,0.4)">⚖ Officers Stood Down</span>
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
                <div class="story-chapter reveal" style="border-left-color:rgba(193,68,14,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">The Front</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE FURNITURE SHOP<br><span class="text-hot">THAT MOVES MORE THAN SOFAS.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Kira and Kira is a Gold Coast furniture shop. On paper it is a legitimate retail business. In practice, it is alleged to be a front through which cocaine is moved — funnelled through the furniture, and distributed with Yakuza involvement."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Grason Andrew Kira is the proprietor. He is wealthy. He is an associate of Mick Gatto. He allegedly arranged for associates to have a friend bashed — a friend who is connected to the supply chain running through Kira and Kira. The Yakuza are alleged to have been the instrument of that bashing.</p>
                    <div class="border border-paper/[0.07] p-5 mb-5" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">What Is Alleged</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-3 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><span class="text-[0.65rem] text-paper/45">Kira &amp; Kira operates as a front for cocaine distribution through its Gold Coast premises.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><span class="text-[0.65rem] text-paper/45">Narcotics are alleged to be funnelled through furniture inventory and shipments.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><span class="text-[0.65rem] text-paper/45">Yakuza connections are alleged to have been engaged to bash a person linked to the distribution chain.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><span class="text-[0.65rem] text-paper/45">Grason Andrew Kira subsequently directed a three-stage campaign of intimidation against Adam Watson.</span></div>
                        </div>
                    </div>
                </div>

                <!-- The Chemist -->
                <div class="story-chapter reveal" style="transition-delay:0.1s;border-left-color:rgba(201,138,16,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">The Priceline Incident</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THREATEN THE CHEMIST.<br><span class="text-gold">GET THE ADDRESS.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Grason Andrew Kira wanted Adam Watson's home address. He went to the Priceline pharmacy that holds Adam's prescription records. He had enough money and enough connections to have the Centre Manager stand down the security guards and threaten the chemist's lease."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The Centre Manager — employed by the company contracted to manage Pacific Fair — was directed to stand the guards down and then issue a threat to the pharmacy operator: provide Adam Watson's home address, or face lease termination. It did not work. The chemist's lease runs directly through Wesfarmers, Priceline's parent company. The Centre Manager had no standing to terminate it. The address was not handed over.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The consequences were swift and total. The head of Wesfarmers contacted the owner of Pacific Fair directly. The owner was appalled. He personally called Jason — the Priceline pharmacist — and apologised for what had been done to him. He then stood down the entire company that had been managing Pacific Fair. Not just the Centre Manager. The whole management company — terminated.</p>

                    <div class="border border-paper/[0.07] p-5 mb-5">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-4">Intimidation Sequence — The Priceline Attempt</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Step 01</span><span class="text-[0.65rem] text-paper/45">Grason Andrew Kira approaches the Priceline chemist holding Adam Watson's prescription records.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Step 02</span><span class="text-[0.65rem] text-paper/45">Centre Manager is directed to stand down security guards — clearing access to the pharmacy.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Step 03</span><span class="text-[0.65rem] text-paper/45">Centre Manager threatens the chemist: provide Adam's home address or the lease will be terminated.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-gold/70 w-28 shrink-0 pt-0.5">Why it failed</span><span class="text-[0.65rem] text-paper/45">The chemist's lease runs to <span class="text-gold">Wesfarmers</span> — not to the building. The Centre Manager had no authority to terminate it. The threat could not be enforced.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-sage/70 w-28 shrink-0 pt-0.5">Outcome</span><span class="text-[0.65rem] text-paper/45">Address not obtained. Gina Rinehart contacted the Wesfarmers head, who called the Pacific Fair owner directly. The owner personally apologised to Jason the pharmacist — then terminated the entire management company. Not just the Centre Manager. The whole company.</span></div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">Management Company</div>
                            <div class="space-y-1.5">
                                <div class="text-[0.6rem] text-paper/35">✗ Centre Manager ordered security to stand down</div>
                                <div class="text-[0.6rem] text-paper/35">✗ Threatened Jason the pharmacist's lease</div>
                                <div class="text-[0.6rem] text-paper/35">✗ Entire company terminated — Pacific Fair</div>
                            </div>
                        </div>
                        <div class="border border-sage/20 p-5" style="background:rgba(61,122,74,0.03)">
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
                <div class="story-chapter reveal" style="transition-delay:0.15s;border-left-color:rgba(124,106,170,0.3)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">The Confrontation</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">TWO CORRUPT COPS.<br><span style="color:#7c6aaa">A PSYCHOLOGIST. A PHONE CALL.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"When the chemist gambit failed, Grason Andrew Kira went directly to the disability centre near Broadbeach library where Adam was. He came with two police officers on his payroll — and Peter Demchenko, the father of Aaliyah, Bodie Chalmers's girlfriend. Grason Andrew Kira dropped Mick Gatto's name — as a threat. Adam called Mick Gatto right in front of them."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">A psychologist was present throughout the confrontation and recorded the entire interaction. Grason Andrew Kira arrived with two Queensland Police officers who attempted to intimidate Adam Watson, alongside Peter Demchenko — the father of Aaliyah, Bodie Chalmers's girlfriend, establishing the direct connection between the Chalmers network and this intimidation campaign. The invocation of Mick Gatto's name by Grason Andrew Kira was intended to establish a threat by association. Adam Watson's response — calling Mick Gatto directly, in front of everyone present — removed any ambiguity. Mick Gatto warned them clearly: do not mess with Adam Watson.</p>

                    <div class="border border-paper/[0.07] p-5 mb-6">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-4">Confrontation — Broadbeach Disability Centre</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">Arrival</span><span class="text-[0.65rem] text-paper/45">Grason Andrew Kira and Peter Demchenko — father of Aaliyah, Bodie Chalmers's girlfriend — attend the disability centre near Broadbeach library where Adam Watson is present, accompanied by two QPS officers on payroll.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">The Threat</span><span class="text-[0.65rem] text-paper/45">Grason Andrew Kira drops Mick Gatto's name — invoking it as a warning against Adam Watson.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-gold/70 w-28 shrink-0 pt-0.5">The Call</span><span class="text-[0.65rem] text-paper/45">Adam Watson calls Mick Gatto directly — in front of all parties present. Gatto warns them: do not interfere with Adam Watson.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] w-28 shrink-0 pt-0.5" style="color:rgba(124,106,170,0.7)">The Recording</span><span class="text-[0.65rem] text-paper/45">A psychologist present records the entire confrontation — the officers, the threat, the phone call, and Mick Gatto's warning.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-sage/70 w-28 shrink-0 pt-0.5">Outcome</span><span class="text-[0.65rem] text-paper/45">Attorney General Deb Frecklington stands down both officers immediately upon receiving the psychologist's recording.</span></div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
                        <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-2">The Officers</div>
                            <div class="font-display text-xl text-hot mb-2">STOOD DOWN</div>
                            <p class="text-[0.62rem] text-paper/40 leading-relaxed">Both QPS officers present at the confrontation were stood down immediately by Attorney General Deb Frecklington following receipt of the psychologist's recording.</p>
                        </div>
                        <div class="border border-sage/20 p-5" style="background:rgba(61,122,74,0.03)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-2">Recorded In Full</div>
                            <div class="font-display text-xl text-sage mb-2">PSYCHOLOGIST PRESENT</div>
                            <p class="text-[0.62rem] text-paper/40 leading-relaxed">A psychologist recorded the confrontation in its entirety — the intimidation attempt, the Mick Gatto phone call, and Gatto's warning. That recording drove the AG's immediate action.</p>
                        </div>
                    </div>

                    <!-- Evidence Vault -->
                    <div class="evidence-vault">
                        <div class="ev-header" onclick="toggleVault(this)">
                            <div class="flex items-center gap-2">
                                <span class="text-[0.48rem] tracking-[0.22em] uppercase" style="color:#7c6aaa">📁 Evidence Files</span>
                                <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Grason Andrew Kira · Disability Centre Confrontation</span>
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

                <!-- Grason Andrew Kira — Commonwealth Bank incident -->
                <div class="story-chapter reveal mt-10" style="border-left-color:rgba(193,68,14,0.5)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Grason Andrew Kira — Financial Interference · Commonwealth Bank</span>
                        <span class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/20 border border-paper/10 px-2 py-0.5">Associate Fired · Blacklisted</span>
                    </div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">USED AN ASSOCIATE INSIDE COMMONWEALTH BANK<br><span class="text-hot">TO SHUT DOWN ADAM WATSON'S ACCOUNT.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"When the intimidation campaign failed at every other front, Grason Andrew Kira went to his associate inside a Commonwealth Bank branch in Brisbane. He had that person shut down Adam Watson's bank account. The CEO was contacted. The employee was fired. She will be blacklisted from working in any finance position."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Grason Andrew Kira ran to an associate who worked at a Commonwealth Bank branch in Brisbane — and got that person to shut down Adam Watson's Commonwealth Bank account. This is not an external fraud. This is the deliberate exploitation of a personal connection inside a financial institution to interfere with a target's banking access. It is an abuse of the bank's internal systems and a misuse of trust placed in an employee.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The matter was escalated to the Commonwealth Bank CEO. The associate — the person who carried out the account closure — was subsequently fired. She will be blacklisted from working in any financial services position. Another person whose career is gone because of Grason Andrew Kira's network and the choices he asked her to make on his behalf.</p>
                    <div class="border border-hot/25 p-5 mb-5" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-4">Sequence of Events</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">The Contact</span><span class="text-[0.65rem] text-paper/45">Grason Andrew Kira approaches his associate working at a Commonwealth Bank branch in Brisbane — a personal connection inside the institution.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">The Ask</span><span class="text-[0.65rem] text-paper/45">The associate is directed to use her internal access to shut down Adam Watson's Commonwealth Bank account.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">The Act</span><span class="text-[0.65rem] text-paper/45">The account is closed — Adam Watson loses access to his Commonwealth Bank account as a direct result of Grason's intervention through a bank insider.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-gold/70 w-28 shrink-0 pt-0.5">Escalation</span><span class="text-[0.65rem] text-paper/45">The matter is escalated to the CEO of Commonwealth Bank.</span></div>
                            <div class="flex gap-3 items-start"><span class="text-[0.55rem] text-hot/60 w-28 shrink-0 pt-0.5">The Outcome</span><span class="text-[0.65rem] text-paper/45">The associate is fired. She will be blacklisted from any future finance industry position. Another victim of Grason Andrew Kira's network.</span></div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">The Institution</div>
                            <div class="font-display text-xl text-hot mb-2">COMMONWEALTH<br>BANK</div>
                            <p class="text-[0.62rem] text-paper/40 leading-relaxed">Brisbane branch. Associate used internal access to close Adam Watson's account without authorisation.</p>
                        </div>
                        <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">Escalated To</div>
                            <div class="font-display text-xl text-hot mb-2">THE CEO</div>
                            <p class="text-[0.62rem] text-paper/40 leading-relaxed">The Commonwealth Bank CEO was contacted regarding the unauthorised account closure and the internal conduct behind it.</p>
                        </div>
                        <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-1">The Consequence</div>
                            <div class="font-display text-xl text-hot mb-2">FIRED &amp;<br>BLACKLISTED</div>
                            <p class="text-[0.62rem] text-paper/40 leading-relaxed">The associate was fired and will be blacklisted from working in any finance position. Her career — destroyed by choosing to do a favour for Grason Andrew Kira.</p>
                        </div>
                    </div>
                </div>

                <!-- ATO Update -->
                <div class="story-chapter reveal mt-10" style="border-left-color:rgba(201,138,16,0.5)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Update — Australian Taxation Office</span>
                        <span class="text-[0.42rem] tracking-[0.15em] uppercase border border-gold/25 text-gold/60 px-1.5 py-0.5">⬤ Active Investigation</span>
                    </div>
                    <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">KIRA'S DAD HAS BEEN CHARGED.<br><span class="text-gold">THE ATO IS NOW GOING THROUGH THE BOOKS OF KIRA & KIRA.</span></h3>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Following the charging of Kira's father, the Australian Taxation Office has opened an investigation into the records of Kira & Kira. A charge against a principal of a business alleged to be operating as a front for cocaine distribution does not stay contained — it opens the financial records of the entire operation to regulatory scrutiny. The ATO is now going through those books.</p>
                    <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.04)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-3">Why This Matters</div>
                        <div class="space-y-2">
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">A front operation that moves cocaine through furniture transactions will have financial records that do not match a legitimate retail business. Cash flows, invoice patterns, and declared income will be scrutinised against the alleged volume of drug movement.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">The ATO's access to business records is broad — tax obligations, GST, undeclared income, and unexplained cash are all within scope. A charge against a principal provides the trigger for a full examination of the entity's finances.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-gold text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/45 leading-relaxed">This investigation is independent of the criminal charges — it runs on a separate track and can produce its own findings, penalties, and referrals regardless of the outcome of the criminal matter.</p></div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- SIDEBAR -->
            <div class="space-y-4">
                <div class="sticky top-24 space-y-4">
                    <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">Who Is Grason Andrew Kira</div>
                        <div class="space-y-2.5">
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40">Owner of Kira &amp; Kira — Gold Coast furniture retail.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40">Associate of Mick Gatto — invoked his name as a threat at the Broadbeach confrontation.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40">Alleged front operation — cocaine distribution through furniture.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40">Alleged Yakuza connection — engaged to bash an individual linked to the supply chain.</p></div>
                            <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40">Directed three-stage intimidation campaign against Adam Watson.</p></div>
                        </div>
                    </div>
                    <div class="border border-paper/[0.07] p-5" style="background:rgba(124,106,170,0.03)">
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase mb-2" style="color:#7c6aaa">Peter Demchenko</div>
                        <p class="text-[0.62rem] text-paper/35 leading-relaxed mb-3">Father of Aaliyah — Bodie Chalmers's girlfriend. Present at the Broadbeach disability centre confrontation alongside Grason Andrew Kira and the two corrupt QPS officers. His presence establishes the direct connection between the Chalmers network and the intimidation campaign against Adam Watson.</p>
                        <div class="border-l-2 pl-3 py-1" style="border-color:rgba(193,68,14,0.5);background:rgba(193,68,14,0.04)">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-1">Update — Firebombing</div>
                            <p class="text-[0.57rem] text-paper/40 leading-relaxed">Peter Demchenko's house has since been firebombed — by other parties he has had separate ongoing disputes with. His involvement in the intimidation of Adam Watson is one strand of a broader pattern of conflict in which Demchenko is embedded.</p>
                        </div>
                    </div>
                    <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.03)">
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
        <div class="absolute inset-0" style="background:linear-gradient(135deg,rgba(193,68,14,0.07) 0%,transparent 55%,rgba(124,106,170,0.04) 100%)"></div>
        <div class="scanlines absolute inset-0 opacity-40"></div>
        <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(245,234,212,0.018) 1px,transparent 1px),linear-gradient(90deg,rgba(245,234,212,0.018) 1px,transparent 1px);background-size:64px 64px"></div>
        <div style="position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,#c1440e 35%,#c98a10 65%,transparent)"></div>
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
                <span class="evidence-tag" style="color:#c1440e;border-color:#c1440e">⚖ NCAT s.237 SSMA 2015</span>
                <span class="evidence-tag" style="color:#c98a10;border-color:#c98a10">📋 Federal Court TAD47/2025</span>
                <span class="evidence-tag" style="color:#7c6aaa;border-color:#7c6aaa">🏢 Oxford On Crown · 30 Burelli St</span>
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
        <div class="lg:border-l border-paper/[0.06] flex flex-col" style="background:rgba(12,8,4,0.72)">
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
                    <div class="flex gap-2.5 items-start">
                        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/grahamgordon.jpg" alt="Graham Gordon" class="w-8 h-8 object-cover object-top shrink-0 border border-gold/40" />
                        <div><div class="text-[0.6rem] text-paper/55">Graham Gordon</div><div class="text-[0.5rem] text-paper/28">Strata Committee Chairman — Levy notices redirected to him</div></div>
                    </div>
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
<section class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.04) 0%,transparent 45%)">
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
                <div class="border border-hot/25 p-5" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.47rem] tracking-[0.2em] uppercase text-hot mb-2">What s.237 SSMA Does</div>
                    <p class="text-[0.62rem] text-paper/40 leading-relaxed">Allows NCAT to appoint a compulsory strata managing agent when the Owners Corporation has failed its statutory duties or the scheme is not functioning satisfactorily. The appointed agent takes over all OC functions.</p>
                </div>
                <div class="border border-paper/[0.07] p-5">
                    <div class="text-[0.47rem] tracking-[0.2em] uppercase text-paper/22 mb-2">No Mediation Required</div>
                    <p class="text-[0.62rem] text-paper/35 leading-relaxed">The application relies on the exemption under s.227(4)(a) SSMA — compulsory manager applications are exempt from the mediation requirement.</p>
                </div>
                <div class="border border-gold/25 p-5" style="background:rgba(201,138,16,0.025)">
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
                <span class="evidence-tag" style="color:#c1440e;border-color:#c1440e">📄 Statement of Grounds verified</span>
                <span class="evidence-tag" style="color:#c98a10;border-color:#c98a10">⚖ Active NCAT Application</span>
            </div>
        </div>

        <!-- left nav + chapters grid -->
        <div class="grid grid-cols-1 lg:grid-cols-[240px_1fr] gap-10 lg:gap-16">

            <!-- sticky nav -->
            <div class="hidden lg:block">
                <div class="sticky top-24 space-y-1">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/20 mb-4">Five Grounds</div>
                    <a href="#ground1" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot active"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Ground 01</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Common property neglect</div></div></a>
                    <a href="#ground2" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot" style="background:#c98a10;box-shadow:0 0 0 3px rgba(201,138,16,0.2)"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Ground 02</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Unauthorised committee use</div></div></a>
                    <a href="#ground3" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot" style="background:#7c6aaa;box-shadow:0 0 0 3px rgba(124,106,170,0.2)"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Ground 03</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Strata roll manipulation</div></div></a>
                    <a href="#ground4" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Ground 04</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Systematic debt loading</div></div></a>
                    <a href="#ground5" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot" style="background:#7c6aaa;box-shadow:0 0 0 3px rgba(124,106,170,0.2)"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Ground 05</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Financial records withheld</div></div></a>
                    <a href="#timeline" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot" style="background:#3d7a4a;box-shadow:0 0 0 3px rgba(61,122,74,0.2)"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-paper transition-colors">Timeline</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Payment plan betrayal</div></div></a>
                    <a href="#tasmania" class="flex items-center gap-3 py-2.5 group cursor-pointer"><div class="timeline-dot" style="background:#c1440e;box-shadow:0 0 0 3px rgba(193,68,14,0.25)"></div><div><div class="text-[0.62rem] text-paper/45 group-hover:text-hot transition-colors">Tasmania</div><div class="text-[0.5rem] text-paper/20 tracking-wider">Jurisdictional bullying</div></div></a>
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
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)"><div class="text-[0.47rem] tracking-[0.18em] uppercase text-hot mb-1.5">C-6 — Ceiling Hole</div><div class="text-[0.63rem] text-paper/50 leading-relaxed">Large hole in common area ceiling. Exposed structural beams. Live electrical wiring accessible. Unaddressed safety hazard.</div></div>
                        <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.03)"><div class="text-[0.47rem] tracking-[0.18em] uppercase text-hot mb-1.5">C-7, C-11 — Black Mould</div><div class="text-[0.63rem] text-paper/50 leading-relaxed">Severe black mould growth at internal wall and ceiling junction near atrium skylight. Active water penetration. Ongoing.</div></div>
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
                <div id="ground2" class="story-chapter reveal" style="transition-delay:0.06s;border-left-color:rgba(201,138,16,0.15)">
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
                        <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
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
                <div id="ground3" class="story-chapter reveal" style="transition-delay:0.1s;border-left-color:rgba(124,106,170,0.2)">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Ground 03 — Strata Roll</span>
                        <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Manipulation</span>
                    </div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">LEVY NOTICES REDIRECTED<br><span style="color:#7c6aaa">TO THE CHAIRMAN. WITHOUT CONSENT.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Without the knowledge or consent of the Applicant, the address recorded for the Applicant's lots on the strata roll was altered. Levy notices and correspondence were directed to Graham Gordon — the chairman of the strata committee — rather than to the lot owner."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">The OC is required to maintain an accurate strata roll and issue levy notices to lot owners at their correct address. Redirecting that correspondence to a committee chairman — without the lot owner's knowledge — is exactly the mechanism by which a debt can be allowed to grow silently, without the owner ever receiving a notice.</p>

                    <!-- Graham Gordon identification -->
                    <div class="border border-gold/20 p-4 mb-5" style="background:rgba(201,138,16,0.03)">
                        <div class="flex gap-4 items-start mb-4">
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/grahamgordon.jpg" alt="Graham Gordon" class="shrink-0 w-40 h-48 object-cover object-center border border-gold/30" />
                            <div>
                                <div class="text-[0.45rem] tracking-[0.18em] uppercase text-gold mb-1">Identified</div>
                                <div class="font-display text-lg tracking-wide text-paper/80 leading-tight mb-1">GRAHAM GORDON</div>
                                <div class="text-[0.55rem] text-paper/40 leading-relaxed">Strata Committee Chairman — Oxford on Crown, 30 Burelli Street, Wollongong. The lot owner's address on the strata roll was altered without consent so that levy notices were directed to Gordon rather than to PSR Crown Investments.</div>
                            </div>
                        </div>
                        <div class="border-t border-gold/10 pt-3">
                            <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold/60 mb-2">Board positions — Illawarra Strata &amp; Integrity Strata</div>
                            <div class="flex items-center gap-5">
                                <div class="border border-paper/[0.08] px-3 py-2" style="background:#ffffff">
                                    <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/graham_gordon/illawara-strata.png" alt="Illawarra Strata" class="h-7 w-auto" />
                                </div>
                                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/graham_gordon/integrity-strata.png" alt="Integrity Strata" class="h-8 w-auto opacity-70" />
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                        <div class="border p-5" style="border-color:rgba(124,106,170,0.2);background:rgba(124,106,170,0.03)">
                            <div class="text-[0.48rem] tracking-[0.18em] uppercase mb-2" style="color:#7c6aaa">Strata Roll Should Show</div>
                            <div class="text-[0.65rem] text-paper/45 leading-relaxed">PSR Crown Investments Pty Ltd<br>Robert Huang, Director<br>Lots 4 & 8 — SP 93922<br><span class="text-paper/25 text-[0.52rem]">Registered lot owner address</span></div>
                        </div>
                        <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                            <div class="text-[0.48rem] tracking-[0.18em] uppercase text-hot mb-2">What Was Recorded Instead</div>
                            <div class="text-[0.65rem] text-paper/45 leading-relaxed">Address altered — notices redirected to:<br><span class="text-hot">Graham Gordon</span><br>Strata Committee Chairman<br><span class="text-paper/25 text-[0.52rem]">Without consent of the lot owner</span></div>
                        </div>
                    </div>

                    <div class="evidence-vault">
                        <div class="ev-header" onclick="toggleVault(this)">
                            <div class="flex items-center gap-2"><span class="text-[0.48rem] tracking-[0.22em] uppercase" style="color:#7c6aaa">📁 Evidence Files</span><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Annexure D · Strata Roll Address Redirection Evidence</span></div>
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


<!-- ══════════════════════════════════════
     GRAHAM GORDON — STALKING CHARGE
══════════════════════════════════════ -->
<section class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.07) 0%,transparent 50%)">
    <div class="max-w-4xl mx-auto">

        <div class="flex items-center gap-3 mb-3">
            <div class="w-4 h-px bg-hot"></div>
            <span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Graham Gordon — Criminal Proceedings</span>
        </div>
        <h2 class="font-display leading-none tracking-wide mb-3" style="font-size:clamp(2.2rem,5.5vw,4rem)">CHARGED WITH<br><span class="text-hot">STALKING &amp; INTIMIDATION.</span></h2>
        <p class="font-serif italic text-paper/45 text-lg leading-relaxed mb-12 max-w-2xl">As Adam Watson got closer to the scheme in Court — the address manipulation, the debt loading, the redirected levy notices — Gordon arranged for people to follow and pursue him. He has now been charged. The arrest documentation is being produced to the Civil trial.</p>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">

            <!-- Charge -->
            <div class="story-chapter reveal" style="border-left-color:rgba(193,68,14,0.6)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-2">The Charge</div>
                <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">STALKING AND INTIMIDATION<br><span class="text-hot">OF ADAM WATSON.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Graham Gordon — Strata Committee Chairman, Oxford on Crown — has been charged with stalking and intimidation of Adam Watson. The charges arose directly from the period in which Adam Watson was advancing through the Court process and getting closer to exposing the mechanism of the scheme: the address redirection on the strata roll, the debt accumulation through CCA Legal, and the conduct of the committee.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">Gordon arranged for people to pursue and follow Adam Watson during this period. It is a pattern that recurs across the documented cases on this website: when investigative pressure increases, the response is not to address the conduct — it is to escalate against the person applying that pressure.</p>
            </div>

            <!-- Arrest docs to Civil trial -->
            <div class="story-chapter reveal" style="transition-delay:0.06s;border-left-color:rgba(201,138,16,0.5)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-gold mb-2">What This Does to the Civil Case</div>
                <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">THE ARREST DOCUMENTATION<br><span class="text-gold">GOES TO THE CIVIL TRIAL.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Adam Watson is producing the arrest documentation to the Civil trial. This is not a parallel proceeding that can be isolated from the strata dispute — it is directly relevant to the credibility of Graham Gordon as a party and witness. A Strata Committee Chairman who has been charged with stalking and intimidating the person he is pursuing through civil proceedings cannot claim that credibility is a separate question.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">The civil proceedings are Gordon's attempt to use the Court system as a pressure mechanism. The arrest documentation is Adam Watson's answer: evidence that the person running those proceedings has been charged with a criminal offence specifically directed at suppressing his ability to participate in them.</p>
            </div>
        </div>

        <!-- Armed home invasion -->
        <div class="story-chapter reveal mb-6" style="border-left-color:rgba(193,68,14,0.9)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Armed Home Invasion — Adam Watson's Residence</span>
                <span class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/20 border border-paper/10 px-2 py-0.5">Directly Connected to Graham Gordon · All Four Charged</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">TWO RUSSIANS. TWO CANADIANS. A GUN TO HIS HEAD.<br><span class="text-hot">FLASHBANG THROUGH THE WINDOW. GORDON CHARGED.</span></h3>
            <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-6">"Graham Gordon sent four men to Adam Watson's house to tell him to back off. Two Russians and two Canadians. One held a gun to Adam's head. Adam wet himself. The enforcer pushed his face into the urine. Then the flashbang came through the window. All four charged. All four testified against Gordon immediately. The charge sheet goes to Civil Court."</p>

            <!-- Sequence of events -->
            <div class="space-y-px mb-6" style="background:rgba(245,234,212,0.03)">
                <div class="grid grid-cols-[56px_1fr] gap-4 p-4 border-l-2 border-hot/60" style="background:rgba(12,8,4,0.6)">
                    <div class="text-center pt-0.5">
                        <div class="text-[0.65rem] tracking-[0.08em] uppercase font-bold text-hot">01</div>
                        <div class="text-[0.42rem] text-paper/30 mt-0.5">Entry</div>
                    </div>
                    <div>
                        <div class="text-[0.65rem] font-display tracking-wide text-paper/80 mb-1">Four men enter Adam Watson's house</div>
                        <div class="text-[0.58rem] leading-relaxed text-paper/45">Graham Gordon sends two Russians and two Canadians to Adam's address. They enter the house without invitation. Gordon's purpose is explicit: make Adam Watson back off from his investigation into the strata fraud.</div>
                    </div>
                </div>
                <div class="grid grid-cols-[56px_1fr] gap-4 p-4 border-l-2 border-hot/70" style="background:rgba(12,8,4,0.5)">
                    <div class="text-center pt-0.5">
                        <div class="text-[0.65rem] tracking-[0.08em] uppercase font-bold text-hot">02</div>
                        <div class="text-[0.42rem] text-paper/30 mt-0.5">Warning</div>
                    </div>
                    <div>
                        <div class="text-[0.65rem] font-display tracking-wide text-paper/80 mb-1">"Police — call police! Tell them to come with no sirens!"</div>
                        <div class="text-[0.58rem] leading-relaxed text-paper/45">Realising what is happening, Adam Watson calls out — to whoever can hear — to contact police, and critically: <em>to come without sirens.</em> The instruction is deliberate. Sirens announce the arrival. No sirens means the men inside do not hear them coming. A neighbour hears Adam. The call is made. Police respond quickly.</div>
                    </div>
                </div>
                <div class="grid grid-cols-[56px_1fr] gap-4 p-4 border-l-2" style="background:rgba(193,68,14,0.12);border-color:rgba(193,68,14,0.8)">
                    <div class="text-center pt-0.5">
                        <div class="text-[0.65rem] tracking-[0.08em] uppercase font-bold text-hot">03</div>
                        <div class="text-[0.42rem] text-paper/30 mt-0.5">The Gun</div>
                    </div>
                    <div>
                        <div class="text-[0.65rem] font-display tracking-wide mb-1" style="color:rgba(245,234,212,0.9)">One of the men holds a gun to Adam Watson's head</div>
                        <div class="text-[0.58rem] leading-relaxed text-paper/50">One of the four men produces a firearm and places it against Adam Watson's head. Adam Watson is so frightened that he urinates. The enforcer then grabs Adam Watson's head and pushes it into the urine on the floor. The message delivered verbally is the same as the one delivered physically: <strong class="text-paper/65">back off from the investigation into Graham Gordon.</strong></div>
                    </div>
                </div>
                <div class="grid grid-cols-[56px_1fr] gap-4 p-4 border-l-2 border-gold/60" style="background:rgba(12,8,4,0.5)">
                    <div class="text-center pt-0.5">
                        <div class="text-[0.65rem] tracking-[0.08em] uppercase font-bold text-gold">04</div>
                        <div class="text-[0.42rem] text-paper/30 mt-0.5">Entry</div>
                    </div>
                    <div>
                        <div class="text-[0.65rem] font-display tracking-wide text-paper/80 mb-1">Police flashbang through the window</div>
                        <div class="text-[0.58rem] leading-relaxed text-paper/45">Police, who have arrived without sirens at Adam's request, deploy a flashbang through the window. The four men are disoriented immediately. All four are arrested on site. None escape.</div>
                    </div>
                </div>
                <div class="grid grid-cols-[56px_1fr] gap-4 p-4 border-l-2 border-sage/60" style="background:rgba(61,122,74,0.06)">
                    <div class="text-center pt-0.5">
                        <div class="text-[0.65rem] tracking-[0.08em] uppercase font-bold text-sage">05</div>
                        <div class="text-[0.42rem] text-paper/30 mt-0.5">Ratted</div>
                    </div>
                    <div>
                        <div class="text-[0.65rem] font-display tracking-wide text-paper/80 mb-1">All four immediately testify against Graham Gordon</div>
                        <div class="text-[0.58rem] leading-relaxed text-paper/45">Immediately upon arrest, all four men cooperate with police. They identify Graham Gordon as the person who instructed them to attend Adam Watson's address and deliver the warning. Their testimony is the direct evidence linking Gordon to the incident. Gordon is charged.</div>
                    </div>
                </div>
            </div>

            <!-- Civil court consequence -->
            <div class="border border-gold/25 p-5 mb-5" style="background:rgba(201,138,16,0.04)">
                <div class="text-[0.46rem] tracking-[0.22em] uppercase text-gold mb-3">The Charge Sheet Goes to Civil Court</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed mb-3">The criminal charge sheet arising from the home invasion is being produced directly to the Civil Court proceedings. Graham Gordon is a party to civil litigation against Adam Watson. A person who has been criminally charged for sending armed men to the home of the person he is suing — to threaten that person with a firearm and physically assault him — cannot present himself to a Civil Court as a credible party.</p>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">The charge sheet does not merely undermine Gordon's credibility. It exposes the nature of the campaign: the civil proceedings were the legal instrument, and the armed home invasion was the backup plan when the legal instrument moved too slowly. Presenting both to the Civil Court places the full picture on the record — and makes it impossible to argue that the litigation was pursued in good faith.</p>
            </div>

            <div class="border border-paper/[0.08] px-5 py-4" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.44rem] tracking-[0.2em] uppercase text-hot mb-2">The Composition of the Group</div>
                <p class="text-[0.68rem] text-paper/45 leading-relaxed">Two Russians and two Canadians. The group was not assembled from Adam Watson's immediate social circle or neighbourhood — these were not people with a prior grievance. They were sent. The composition of the group, the manner of entry, the specific verbal message delivered alongside the physical assault, and the fact that all four immediately identified Gordon when arrested — all point to a directed, paid, professional intimidation operation. This is not a dispute that got out of hand. It was organised.</p>
            </div>
        </div>

        <!-- CCA Legal lawyer recusal -->
        <div class="story-chapter reveal mb-6" style="border-left-color:rgba(201,138,16,0.6)">
            <div class="flex items-center gap-3 mb-4">
                <div class="border border-gold/30 px-3 py-1.5" style="background:rgba(201,138,16,0.05)">
                    <div class="text-[0.44rem] tracking-[0.2em] uppercase text-gold/70">CCA Legal</div>
                    <div class="text-[0.58rem] text-paper/55 mt-0.5">Debt Recovery — Oxford on Crown</div>
                </div>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">"THIS CASE HAS NO MERIT."<br><span class="text-gold">HER OWN WORDS. IN OPEN COURT.</span></h3>
            <p class="font-serif italic text-paper/55 text-base leading-relaxed mb-5">"A lawyer from CCA Legal stood up in Court and publicly stated that the case had no merit. She said she was clearing out her desk and refused to pursue it. She recused herself from the proceedings — publicly, in Court, on the record."</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">A lawyer from CCA Legal — the firm that has been charging debt recovery costs against Adam Watson's lots at Oxford on Crown — has recused herself from the Court case. This did not happen quietly or behind closed doors. She stated, in open Court, that the case has no merit. She said she was clearing out her desk. She refused to pursue it further and withdrew.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The significance of this cannot be understated. CCA Legal is not a third party commenting on the case from the outside. CCA Legal is the firm whose charge entries make up the majority of the debt that is the subject of the NCAT proceedings. A lawyer from that firm, with access to the full file, has concluded — and stated publicly in Court — that the case cannot be ethically pursued. She has walked away from it.</p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                <div class="border border-hot/20 p-4" style="background:rgba(193,68,14,0.04)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-hot mb-2">What She Said</div>
                    <div class="text-[0.6rem] text-paper/45 leading-relaxed">The case has no merit. Stated publicly, in open Court, on the record — not privately withdrawn, not quietly reassigned.</div>
                </div>
                <div class="border border-gold/20 p-4" style="background:rgba(201,138,16,0.04)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-gold mb-2">What She Did</div>
                    <div class="text-[0.6rem] text-paper/45 leading-relaxed">Cleared out her desk and refused to pursue the case. A recusal — public, in Court, with explicit reasons given from inside the firm running the proceedings.</div>
                </div>
                <div class="border border-paper/[0.1] p-4" style="background:rgba(245,234,212,0.02)">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-paper/35 mb-2">What It Means</div>
                    <div class="text-[0.6rem] text-paper/45 leading-relaxed">In either case — the criminal stalking charge or the CCA Legal withdrawal — Graham Gordon's civil proceedings have lost their credibility from the inside out.</div>
                </div>
            </div>
        </div>

        <!-- Combined effect -->
        <div class="border border-paper/[0.08] p-6" style="background:rgba(193,68,14,0.03)">
            <div class="text-[0.46rem] tracking-[0.22em] uppercase text-hot mb-3">The Combined Effect</div>
            <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-3">Graham Gordon faces a stalking and intimidation charge arising from conduct directed at Adam Watson during the very period Adam was advancing through Court. His own lawyers have publicly withdrawn from the proceedings, stating in open Court that the case has no merit. The arrest documentation is being produced to the Civil trial.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/50">A Civil case prosecuted by a person charged with stalking the defendant, abandoned by their own legal team in open Court, with arrest documentation being tendered against them — does not have a path forward. The civil proceedings that were supposed to be the weapon have become the record of the attempt to use them as one.</p>
        </div>

    </div>
</section>


<!-- ══════════════════════════
     GROUND 4 — DEBT LOADING
══════════════════════════ -->
<section id="ground4" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.06) 0%,transparent 55%)">
    <div class="max-w-6xl mx-auto">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Ground 04 — The Core Allegation</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">SYSTEMATIC<br><span class="text-hot">DEBT LOADING</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">A lot owner paying $4,000 per month on each lot, every month, for four years — ending up with a $63,000 debt, mostly from legal fees charged by the same lawyers pursuing them in Federal Court.</p>
            </div>
            <div class="flex flex-wrap gap-2 max-w-xs">
                <span class="evidence-tag" style="color:#c1440e;border-color:#c1440e">📋 Annexure A — Account Statements</span>
                <span class="evidence-tag" style="color:#c98a10;border-color:#c98a10">⚖ 2× Wind-Up Petitions</span>
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
                                <tr class="subtotal"><td colspan="2" class="text-[0.5rem] tracking-[0.12em] uppercase text-paper/28">Total Lot 4 balance — incl. all fees + interest — 2 March 2026</td><td class="td-total" style="color:#c1440e">$63,332.85</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-[0.53rem] text-paper/22 mt-2 leading-relaxed">Lot 8 carries a separate balance of $6,388.03 as at 2 March 2026, after the $30,000 lump sum on 20 August 2025 and continued monthly payments.</p>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="reveal space-y-4" style="transition-delay:0.1s">
                <div class="sticky top-24 space-y-4">
                    <div class="border border-hot/25 p-5" style="background:rgba(193,68,14,0.04)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Lot 4 — Balance Breakdown</div>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center py-1 border-b border-paper/[0.05]"><span class="text-[0.6rem] text-paper/45">Administrative Fund</span><span class="text-[0.6rem] text-hot">$49,191.69</span></div>
                            <div class="flex justify-between items-center py-1 border-b border-paper/[0.05]"><span class="text-[0.6rem] text-paper/45">Capital Works Fund</span><span class="text-[0.6rem] text-paper/45">$9,799.22</span></div>
                            <div class="flex justify-between items-center py-1 border-b border-paper/[0.05]"><span class="text-[0.6rem] text-paper/45">Interest due</span><span class="text-[0.6rem] text-paper/45">$4,341.94</span></div>
                            <div class="flex justify-between items-center pt-2"><span class="text-[0.62rem] text-paper/65 font-display tracking-wide">TOTAL (2 Mar 2026)</span><span class="font-display text-xl text-hot">$63,332.85</span></div>
                        </div>
                        <p class="text-[0.5rem] text-paper/22 mt-3 leading-relaxed">A substantial proportion of the Administrative Fund represents accumulated CCA Legal charges, not unpaid levies per se.</p>
                    </div>
                    <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.025)">
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
<section id="timeline" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(61,122,74,0.03) 0%,transparent 50%)">
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
            <div id="ground5-inner" class="story-chapter reveal" style="border-left-color:rgba(124,106,170,0.2)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7c6aaa;border-color:rgba(124,106,170,0.4)">Ground 05 — s.182 SSMA</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">RECORDS REQUESTED.<br><span style="color:#7c6aaa">REQUESTS IGNORED.</span></h3>
                <p class="text-[0.68rem] leading-relaxed text-paper/42 mb-4">Section 182 of the SSMA gives lot owners the right to inspect Owners Corporation records. The Applicant has been paying over $8,000 per month and has never received proper receipts or a clear explanation of how those payments are being allocated.</p>
                <p class="text-[0.68rem] leading-relaxed text-paper/42 mb-4">The Lot 8 account shows multiple unexplained 'allocation of unallocated money' and 'levy cancellation' entries on 21 March 2025 that have never been explained. Written requests for clarification have been ignored entirely.</p>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs mt-0.5 shrink-0">✗</span><p class="text-[0.6rem] text-paper/35">No receipts confirming correct allocation of $8,000/month payments</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs mt-0.5 shrink-0">✗</span><p class="text-[0.6rem] text-paper/35">Unexplained 'allocation of unallocated money' entries — 21 Mar 2025, Lot 8</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs mt-0.5 shrink-0">✗</span><p class="text-[0.6rem] text-paper/35">Written requests for clarification — ignored — evidenced Annexure E</p></div>
                </div>
                <div class="evidence-vault mt-5">
                    <div class="ev-header" onclick="toggleVault(this)">
                        <div class="flex items-center gap-2"><span class="text-[0.48rem] tracking-[0.22em] uppercase" style="color:#7c6aaa">📁 Evidence Files</span><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Annexure E · Ignored Correspondence</span></div>
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
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Why a Compulsory Manager Is Appropriate</div>
                    <p class="text-[0.62rem] text-paper/40 leading-relaxed">This is a pattern of serious and sustained dysfunction spanning over three years — not an isolated incident. Cited authorities: <em>Maple v The Owners SP 8950 [2021]</em> and <em>Kahn v Owners Corp SP 2010 [2017]</em> establish that exactly this pattern justifies a compulsory management order.</p>
                </div>
                <div class="grid grid-cols-3 gap-3">
                    <div class="border border-hot/20 p-4 text-center" style="background:rgba(193,68,14,0.03)"><div class="font-display text-3xl text-hot mb-1">3+</div><div class="text-[0.5rem] tracking-[0.12em] uppercase text-paper/28">Years of dysfunction</div></div>
                    <div class="border border-paper/[0.07] p-4 text-center"><div class="font-display text-3xl text-gold mb-1">3</div><div class="text-[0.5rem] tracking-[0.12em] uppercase text-paper/28">Cited authorities</div></div>
                    <div class="border border-paper/[0.07] p-4 text-center"><div class="font-display text-3xl text-sage mb-1">5</div><div class="text-[0.5rem] tracking-[0.12em] uppercase text-paper/28">Independent grounds</div></div>
                </div>
            </div>
        </div>

        <!-- Relief Sought -->
        <div class="reveal">
            <div class="flex items-center gap-3 mb-8"><div class="w-8 h-px bg-sage"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-sage">What the Applicant Is Asking For</span><div class="w-8 h-px bg-sage"></div></div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                <div class="border border-sage/25 p-6" style="background:rgba(61,122,74,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-3">Primary Relief — s.237 SSMA</div>
                    <div class="font-display text-2xl tracking-wide text-sage mb-3">COMPULSORY MANAGER</div>
                    <p class="text-[0.65rem] text-paper/40 leading-relaxed mb-4">An order appointing a licensed strata managing agent to exercise all functions of the Owners Corporation. The Applicant does not nominate a specific replacement and asks the Tribunal to appoint a suitable licensed agent on appropriate terms.</p>
                    <div class="text-[0.5rem] tracking-[0.14em] uppercase text-sage/55 border border-sage/20 px-3 py-1.5 inline-block">Relies on s.237(3)(a) and s.237(3)(c) SSMA</div>
                </div>
                <div class="border border-hot/25 p-6" style="background:rgba(193,68,14,0.03)">
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
                <div class="flex gap-4 p-4 border border-paper/[0.05] items-start" style="background:rgba(4,4,4,0.5)"><div class="font-display text-2xl w-8 shrink-0 leading-none mt-0.5" style="color:#7c6aaa">03</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Manipulation of Strata Roll — Levy Notices Redirected Without Consent</div><div class="text-[0.55rem] text-paper/30">Lot owner's address altered. Levy notices sent to committee chairman Graham Gordon. Owner deprived of notice of alleged arrears.</div></div></div>
                <div class="flex gap-4 p-4 border border-paper/[0.05] items-start" style="background:rgba(4,4,4,0.5)"><div class="font-display text-hot text-2xl w-8 shrink-0 leading-none mt-0.5">04</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Systematic Debt Loading and Wind-Up Proceedings Against an Active Payer</div><div class="text-[0.55rem] text-paper/30">$4,000/month per lot since 2022. Payment plan agreed. $30,000 paid. First petition dismissed. Second petition filed Feb 2026. Lot 4 balance $63,332.85 — majority CCA Legal fees, not unpaid levies.</div></div></div>
                <div class="flex gap-4 p-4 border border-paper/[0.05] items-start" style="background:rgba(4,4,4,0.5)"><div class="font-display text-2xl w-8 shrink-0 leading-none mt-0.5" style="color:#7c6aaa">05</div><div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Failure to Provide Financial Records and Receipts — s.182 SSMA</div><div class="text-[0.55rem] text-paper/30">No proper receipts. Unexplained account adjustments. Requests for clarification ignored. A paying owner kept entirely in the dark about how their money is being applied.</div></div></div>
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
<section id="tasmania" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(193,68,14,0.07) 0%,rgba(124,106,170,0.04) 60%,transparent 100%)">
    <div class="max-w-6xl mx-auto">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">The Predatory Strategy — Revealed</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">FILED IN<br><span class="text-hot">TASMANIA.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">The winding-up petition against PSR Crown Investments was not filed in NSW, where the property is. It was filed in Tasmania — a jurisdiction Robert Huang has no connection to, where the Federal Court does not permit AVL appearances, and where Graham Gordon has filed before.</p>
            </div>
            <div class="flex flex-wrap gap-2 max-w-sm">
                <span class="evidence-tag" style="color:#c1440e;border-color:#c1440e">⚠ No AVL — Must Appear In Person</span>
                <span class="evidence-tag" style="color:#c98a10;border-color:#c98a10">✈ Hobart to Defend</span>
                <span class="evidence-tag" style="color:#7c6aaa;border-color:#7c6aaa">🔁 Pattern — Prior Filings</span>
            </div>
        </div>

        <!-- Anatomy of the strategy -->
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_340px] gap-12 mb-16">
            <div>
                <div class="story-chapter reveal" style="border-left-color:rgba(193,68,14,0.35)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">The Setup</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE LETTERS NEVER ARRIVE.<br><span class="text-hot">THE COURT IS IN HOBART.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"First, you redirect the lot owner's levy notices to yourself so the debt quietly compounds without their knowledge. Then, when the debt is large enough, you file a wind-up petition in a jurisdiction they have no connection to — one that won't let them appear by video link. They either fly to Hobart to fight it or they don't. If they don't, the company winds up. You buy the lots at a fire sale price. That's the play."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The Federal Court's Tasmanian registry was used to file the winding-up proceedings against PSR Crown Investments Pty Ltd. Robert Huang is based in NSW. The property — the entire subject of the dispute — is in Wollongong, NSW. There is no organic connection between PSR Crown Investments and Tasmania. The choice of jurisdiction is not procedural convenience. It is strategic obstruction.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">The Federal Court of Australia's Tasmania registry does not permit appearances by Audio Visual Link (AVL) for winding-up proceedings. A respondent who cannot afford to fly to Hobart, engage Tasmanian counsel, and appear in person is functionally unable to defend. The default position — undefended — is a winding-up order. The company dissolves. The lots go to a court-appointed liquidator. They sell quickly, at a discount. The buyer with resources and foreknowledge is positioned to acquire.</p>

                    <!-- The three-step strategy diagram -->
                    <div class="border border-hot/15 mb-6" style="background:rgba(12,8,4,0.7)">
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
                <div class="story-chapter reveal mt-10" style="transition-delay:0.08s;border-left-color:rgba(201,138,16,0.25)">
                    <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">The Lawyer's Pattern</span></div>
                    <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">NOT A ONE-OFF.<br><span class="text-gold">THIS IS THE HUSTLE.</span></h3>
                    <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"The lawyer engaged to file this petition has done this before — for Graham Gordon's companies, in Tasmania, using the same jurisdictional strategy. This is not a lawyer who happened to be instructed to file in an inconvenient registry. This is a lawyer who has built a practice around filing in Tasmania precisely because it forecloses the other side's ability to respond."</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The combination of the same lawyer, the same registry, the same petitioner's corporate network, and the same outcome — jurisdictional inaccessibility for the respondent — constitutes a pattern. It is not possible to explain the choice of Tasmania by reference to legitimate legal strategy when the property, the lot owner, the OC, the strata scheme, and the debt recovery history are all entirely within NSW.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="border border-gold/20 p-5" style="background:rgba(201,138,16,0.03)">
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
                        <div class="border border-paper/[0.07] p-5" style="background:rgba(124,106,170,0.03)">
                            <div class="text-[0.48rem] tracking-[0.18em] uppercase mb-3" style="color:#7c6aaa">Prior Filings — Gordon-Connected Entities</div>
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
                    <div class="border border-hot/25 p-5" style="background:rgba(193,68,14,0.05)">
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

                    <div class="border border-hot/15 p-5" style="background:rgba(193,68,14,0.03)">
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

<!-- ══════════════════════════════════════
     STRATA OUTCOME — CONSENT ORDER
══════════════════════════════════════ -->
<section id="strata-outcome" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(61,122,74,0.06) 0%,transparent 60%)">
    <div class="max-w-5xl mx-auto">

        <div class="flex items-center gap-3 mb-3 reveal">
            <div class="w-4 h-px bg-sage"></div>
            <span class="text-[0.55rem] tracking-[0.3em] uppercase text-sage">Outcome — TAD 6 of 2026 · Federal Court of Australia</span>
        </div>
        <h2 class="font-display leading-none tracking-wide mb-3 reveal" style="font-size:clamp(2.4rem,6vw,4rem)">THEY PAID.<br><span class="text-sage">$1,294,001 TO MAKE IT GO AWAY.</span></h2>
        <p class="font-serif italic text-paper/45 text-lg leading-relaxed mb-10 reveal max-w-2xl">"NCAT confirmed it would refer the matter to the Director of Public Prosecutions if it went to trial. The lawyer called Adam and said they were willing to settle. The document below is the result. There is no suppression order. It is public."</p>

        <!-- Why they settled -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(61,122,74,0.4)">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">WHY THEY SETTLED.<br><span class="text-sage">THE DPP REFERRAL THEY COULDN'T AFFORD.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">NCAT had confirmed that if the matter proceeded to trial, it would be directing the file to the Director of Public Prosecutions. That referral would have meant criminal exposure for the individuals behind the conduct documented on this site — the strata roll manipulation, the debt loading, the false levy notices redirected to Graham Gordon, the Tasmania forum-shopping strategy.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The lawyer for the Owners Corporation and Graham Gordon called Adam Watson. They were willing to settle — on condition that Adam dropped the Federal Court proceedings, the Local Court proceedings, and the NCAT proceedings in their entirety.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">Adam agreed. The Consent Order for Dismissal was signed before Judicial Registrar Segal on 1 April 2026. The case number is TAD 6 of 2026. The payments are due by 15 April 2026.</p>
            <div class="border-l-4 border-hot/40 pl-5 mb-5" style="background:rgba(193,68,14,0.04);padding:0.9rem 1rem 0.9rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-1.5">Adam Watson — Current Status</div>
                <p class="text-[0.65rem] text-paper/45 leading-relaxed">Adam Watson has suffered a stroke affecting his right arm. He is continuing to pursue Robert Huang for the payments due under the Consent Order.</p>
            </div>
            <div class="border border-sage/25 p-5" style="background:rgba(61,122,74,0.04)">
                <div class="flex items-center gap-3 mb-3">
                    <div class="text-[0.44rem] tracking-[0.18em] uppercase text-sage">Consequence of NCAT Order</div>
                </div>
                <div class="font-display text-lg tracking-wide text-paper/80 leading-tight mb-3">ILLAWARRA STRATA AND INTEGRITY STRATA ARE OUT.<br><span class="text-sage">iSTRATA IS TAKING OVER.</span></div>
                <p class="text-[0.62rem] text-paper/45 leading-relaxed mb-4">As a direct result of the NCAT order, iStrata has been appointed to take over both the <strong class="text-paper/65">residential</strong> and <strong class="text-paper/65">commercial</strong> strata management contracts at 51 Crown Street — replacing Integrity Strata and Illawarra Strata Management in their entirety.</p>
                <div class="flex flex-wrap items-center gap-4 mb-4">
                    <div class="shrink-0">
                        <div class="text-[0.42rem] tracking-[0.14em] uppercase text-paper/30 mb-1.5">Replacing</div>
                        <div class="flex items-center gap-3">
                            <div class="border border-paper/[0.08] px-3 py-2 opacity-50" style="background:#ffffff">
                                <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/graham_gordon/illawara-strata.png" alt="Illawarra Strata" class="h-7 w-auto" />
                            </div>
                            <span class="text-paper/20 text-lg">+</span>
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/graham_gordon/integrity-strata.png" alt="Integrity Strata" class="h-8 w-auto opacity-30" />
                        </div>
                    </div>
                    <div class="text-paper/25 text-2xl font-light">→</div>
                    <div class="shrink-0">
                        <div class="text-[0.42rem] tracking-[0.14em] uppercase text-sage mb-1.5">Appointed</div>
                        <div class="border border-sage/20 px-3 py-2" style="background:#ffffff">
                            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/istrata_logo.jpeg" alt="iStrata" class="h-10 w-auto" />
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div class="border border-sage/20 p-3" style="background:rgba(61,122,74,0.03)">
                        <div class="text-[0.44rem] tracking-[0.15em] uppercase text-sage mb-1.5">Residential Contract</div>
                        <p class="text-[0.58rem] text-paper/38 leading-relaxed">iStrata appointed to manage the residential strata scheme at 51 Crown Street, replacing Illawarra Strata Management. Previously managed under arrangement connected to Graham Gordon's board positions.</p>
                    </div>
                    <div class="border border-sage/20 p-3" style="background:rgba(61,122,74,0.03)">
                        <div class="text-[0.44rem] tracking-[0.15em] uppercase text-sage mb-1.5">Commercial Contract</div>
                        <p class="text-[0.58rem] text-paper/38 leading-relaxed">iStrata also appointed to the commercial strata contract, replacing Integrity Strata. Both contracts transferred as part of the same NCAT order — a full transition of management at the property.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment breakdown -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(201,138,16,0.4)">
            <h3 class="font-display text-2xl tracking-wide mb-5 leading-tight">THE PAYMENTS.<br><span class="text-gold">ORDERED BY CONSENT. DUE 15 APRIL 2026.</span></h3>
            <div class="space-y-px mb-6">
                <div class="tl-row grid grid-cols-[1fr_auto] gap-4 p-4 items-center">
                    <div>
                        <div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">The Owners – Strata Plan No. 93922</div>
                        <div class="text-[0.52rem] text-paper/28">Owners Corporation · Order 2 · To PSR Crown Investment Pty Ltd</div>
                    </div>
                    <div class="text-right">
                        <div class="font-display text-xl text-gold">$395,000</div>
                        <div class="text-[0.48rem] text-paper/25">+ $49,667 costs</div>
                    </div>
                </div>
                <div class="tl-row grid grid-cols-[1fr_auto] gap-4 p-4 items-center">
                    <div>
                        <div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Graham Gordon</div>
                        <div class="text-[0.52rem] text-paper/28">Strata Committee Chairman · Third Party · Order 3 · To PSR Crown Investment Pty Ltd</div>
                    </div>
                    <div class="text-right">
                        <div class="font-display text-xl text-hot">$365,000</div>
                        <div class="text-[0.48rem] text-paper/25">+ $49,667 costs</div>
                    </div>
                </div>
                <div class="tl-row grid grid-cols-[1fr_auto] gap-4 p-4 items-center">
                    <div>
                        <div class="text-[0.6rem] font-display tracking-wide text-paper/60 mb-0.5">Collection Corporation Australia Pty Ltd</div>
                        <div class="text-[0.52rem] text-paper/28">Debt Recovery Firm · Third Party · Order 4 · To PSR Crown Investment Pty Ltd</div>
                    </div>
                    <div class="text-right">
                        <div class="font-display text-xl text-hot">$385,000</div>
                        <div class="text-[0.48rem] text-paper/25">+ $49,667 costs</div>
                    </div>
                </div>
                <div class="grid grid-cols-[1fr_auto] gap-4 border border-sage/30 p-4 items-center" style="background:rgba(61,122,74,0.04)">
                    <div>
                        <div class="text-[0.6rem] font-display tracking-wide text-sage mb-0.5">Legal Costs — Adam Watson (direct payment)</div>
                        <div class="text-[0.52rem] text-paper/28">One-third each of $149,001 total · Order 5 · Paid directly to Adam Watson</div>
                    </div>
                    <div class="text-right">
                        <div class="font-display text-xl text-sage">$149,001</div>
                        <div class="text-[0.48rem] text-paper/25">$49,667 × 3 parties</div>
                    </div>
                </div>
            </div>

            <!-- Total -->
            <div class="border border-gold/30 p-6 mb-6" style="background:rgba(201,138,16,0.05)">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="text-[0.5rem] tracking-[0.2em] uppercase text-gold mb-1">Total — All Payments Combined</div>
                        <div class="text-[0.6rem] text-paper/35">Principal ($1,145,000) + Legal Costs ($149,001) · All due 15 April 2026</div>
                    </div>
                    <div class="font-display text-4xl text-gold">$1,294,001</div>
                </div>
            </div>

            <!-- Evidence Vault -->
            <div class="evidence-vault mt-6">
                <div class="ev-header" onclick="toggleVault(this)">
                    <div class="flex items-center gap-2">
                        <span class="text-[0.48rem] tracking-[0.22em] uppercase text-sage">📁 Evidence Files</span>
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Graham Gordon Matter · TAD 6 of 2026</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">2 files</span>
                        <span class="ev-toggle">▼</span>
                    </div>
                </div>
                <div class="ev-body">

                    <!-- Consent Order -->
                    <div class="ev-file ef-sage" onclick="openMV('pdf-consent-order')">
                        <div class="ev-icon ev-doc">📄</div>
                        <div class="ev-meta">
                            <div class="ev-name">Consent_Order_Dismissal_TAD6_2026.pdf</div>
                            <div class="ev-desc">PDF · Federal Court of Australia · Signed 1 April 2026 · Judicial Registrar Segal · TAD 6 of 2026</div>
                        </div>
                        <span class="ev-cta">View Order →</span>
                    </div>
                    <div class="px-4 py-2 border-b border-paper/[0.05]" style="background:rgba(201,138,16,0.03)">
                        <p class="text-[0.5rem] leading-relaxed" style="color:rgba(201,138,16,0.6)">⚠ Note: This consent order has been signed by Graham Gordon. The other parties have not yet signed.</p>
                    </div>

                    <!-- NCAT Lodgement Bundle -->
                    <div class="ev-file ef-hot" onclick="openMV('pdf-ncat-bundle')">
                        <div class="ev-icon ev-doc">📄</div>
                        <div class="ev-meta">
                            <div class="ev-name">NCAT_Full_Lodgement_Bundle.pdf</div>
                            <div class="ev-desc">PDF · NCAT Full Lodgement Bundle · Case documentation · Applicant: PSR Crown Investment Pty Ltd</div>
                        </div>
                        <span class="ev-cta">View Bundle →</span>
                    </div>
                    <div class="px-4 py-2 border-b border-paper/[0.05]" style="background:rgba(193,68,14,0.03)">
                        <p class="text-[0.5rem] leading-relaxed text-paper/30">Many sections of this lodgement bundle were prepared with assistance from Claude (Anthropic). NCAT confirmed that if this matter is lodged and proceeds to hearing, it will be directed to the Director of Public Prosecutions. This is what Graham Gordon fears.</p>
                    </div>

                    <div class="ev-zip-bar">
                        <span class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/25">Graham Gordon matter — TAD 6 of 2026 · No suppression order — public documents</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- How they escape justice through payment -->
        <div class="story-chapter reveal mb-10" style="border-left-color:rgba(193,68,14,0.4)">
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">MONEY AS AN EXIT.<br><span class="text-hot">HOW THEY ESCAPE JUSTICE THROUGH PAYMENT.</span></h3>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The Consent Order dismisses the proceedings. It does not acquit. It does not exonerate. No finding of innocence has been made. No court has determined that the conduct documented on this site did not occur. The parties have paid — and in paying, they have obtained the dismissal of proceedings that would have placed that conduct before a judge and, if NCAT's direction was followed, before the Director of Public Prosecutions.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">This is a lawful outcome. Settlement is a recognised part of the civil litigation process. But it is important to be clear about what it is: it is the purchase of a dismissal. The strata roll was still manipulated. The levy notices were still redirected. The Tasmania forum-shopping was still deployed. The debt loading still happened. Payment does not undo any of that — it simply closes the court file.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">There is no suppression order in this matter. The Consent Order is a public document of the Federal Court of Australia. The parties, their names, and the amounts they have paid are on the record. This page is that record.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                <div class="border border-hot/20 p-5" style="background:rgba(193,68,14,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-hot mb-3">What the Settlement Does</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Dismisses Federal Court, Local Court and NCAT proceedings</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Removes the immediate DPP referral pathway NCAT had confirmed</p></div>
                        <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Closes the court file — no verdict, no judicial findings</p></div>
                    </div>
                </div>
                <div class="border border-sage/20 p-5" style="background:rgba(61,122,74,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-3">What the Settlement Does Not Do</div>
                    <div class="space-y-2">
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Does not acquit or exonerate any party</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Does not undo the conduct documented on this site</p></div>
                        <div class="flex gap-2 items-start"><span class="text-sage text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/40 leading-relaxed">Does not suppress this document — no suppression order exists</p></div>
                    </div>
                </div>
            </div>
            <div class="border-l-4 border-hot/50 pl-5" style="background:rgba(193,68,14,0.04);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-2">No Suppression Order Exists</div>
                <p class="text-[0.68rem] text-paper/50 leading-relaxed">The parties did not seek and were not granted a suppression order. The Consent Order is a public Federal Court document. The conduct, the names, and the payments are part of the public record. Sunlight.Quest is publishing it here.</p>
            </div>
        </div>

        <!-- Stat strip -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-2 reveal">
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-gold mb-1">$1.29M</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Total paid</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Principal + costs · Due 15 Apr</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-hot mb-1">3</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Paying parties</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">OC · Gordon · Collection Corp</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-sage mb-1">DPP</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Referral avoided</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">NCAT had confirmed direction</div>
            </div>
            <div class="bg-ink px-6 py-6 text-center">
                <div class="stat-number text-4xl text-paper/50 mb-1">0</div>
                <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Suppression orders</div>
                <div class="text-[0.5rem] text-paper/18 mt-1">Public record — no gag</div>
            </div>
        </div>

        <!-- Robert Huang — Consent Order Interference + New Incidents -->
        <div class="story-chapter reveal mb-10 mt-10" style="border-left-color:rgba(193,68,14,0.5)">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Update — Robert Huang · Consent Order · Winding Up · Commonwealth Bank</span>
            </div>
            <h3 class="font-display text-2xl tracking-wide mb-4 leading-tight">ROBERT HUANG WENT BEHIND ADAM WATSON'S BACK.<br><span class="text-hot">THE JUDGE IS FURIOUS. $30M IN PROPERTIES GOING TO A FIRE SALE.</span></h3>

            <div class="space-y-5 text-[0.72rem] leading-relaxed text-paper/50 mb-6">
                <p>Robert Huang — the director of PSR Crown Investments Pty Ltd and technically the victim of the Winding Up application in this matter — called the Court following execution of the Consent Order and attempted to have Adam Watson removed from the parties receiving a payment under it. He also attempted to have Graham Gordon removed. He did this without Adam Watson's knowledge or consent.</p>
                <p>The Registrar took a very dim view of this conduct. The Registrar has notified the Judge. The Judge is furious. As a direct consequence of Huang's actions, Adam Watson's companies are now going to be liquidated. Those companies hold approximately $30 million worth of properties — secured by high mortgages. A court-appointed liquidator will sell them, at a fire sale price. The people who lent Robert Huang money will lose a significant amount of what they are owed.</p>
                <p>Robert Huang could have had something. The Consent Order gave him a real, enforceable outcome. He chose instead to go behind Adam Watson's back, to approach the Court unilaterally, and to attempt to strip payments from parties who had agreed to them. That decision has now produced a much worse result for everyone connected to those assets — including the lenders who had nothing to do with the dispute.</p>
            </div>

            <!-- Robert Huang's daughter — the sign and the rescue -->
            <div class="border-l-4 border-hot/50 pl-5 mb-6" style="background:rgba(193,68,14,0.05);padding:1.1rem 1rem 1.1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-2">The Human Toll — Robert Huang's Daughter</div>
                <p class="text-[0.66rem] text-paper/50 leading-relaxed mb-3">There is a devastating human dimension to Robert Huang's conduct. His own daughter wore a sign reading <em class="text-paper/70">"My dad is a scammer"</em> and went to take her own life from one of his buildings. She was <strong class="text-paper/65">saved by a tenant of the property</strong> — a man who is himself in a civil case against Robert Huang.</p>
                <p class="text-[0.62rem] text-paper/42 leading-relaxed">That the person who stopped her is one of Huang's own litigation opponents is its own kind of indictment: the tenant fighting him in court is the one who acted to save his daughter's life.</p>
            </div>

            <!-- Consequence breakdown -->
            <div class="border border-hot/25 p-5 mb-6" style="background:rgba(193,68,14,0.05)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-4">The Consequence — What Going Behind Adam Watson's Back Has Cost</div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/60 mb-1">The Action</div>
                        <p class="text-[0.6rem] text-paper/50 leading-relaxed">Called the Court. Attempted to remove Adam Watson and Graham Gordon from the Consent Order payment schedule. Done without notice or consent from either party.</p>
                    </div>
                    <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/60 mb-1">The Response</div>
                        <p class="text-[0.6rem] text-paper/50 leading-relaxed">Registrar notified the Judge. Judge furious. Adam Watson's companies now to be liquidated as a direct consequence of Huang's conduct behind his back.</p>
                    </div>
                    <div class="border border-hot/15 p-3" style="background:rgba(193,68,14,0.03)">
                        <div class="text-[0.43rem] tracking-[0.14em] uppercase text-hot/60 mb-1">The Cost</div>
                        <p class="text-[0.6rem] text-paper/50 leading-relaxed">~$30M in properties. High mortgages. Fire sale by court-appointed liquidator. Lenders exposed to significant losses. An outcome that could have been avoided.</p>
                    </div>
                </div>
            </div>

            <!-- Trent Long / Crown Street / CBA -->
            <div class="border-l-4 border-hot/55 pl-5 mb-6" style="background:rgba(193,68,14,0.05);padding:1rem 1rem 1rem 1.25rem">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-hot mb-3">Separate Matter — Trent Long · U1302/51 Crown Street, Wollongong · Commonwealth Bank</div>
                <p class="text-[0.65rem] text-paper/55 leading-relaxed mb-3">Robert Huang has a separate dispute on with Trent Long — one of his tenants at Unit 1302, 51 Crown Street, Wollongong NSW. Robert had a Commonwealth Bank loan secured by mortgage against that property. He then borrowed $1.7 million from an Asian investor — separately, against the same property — without disclosing to the investor that the Commonwealth Bank already held a first mortgage over it, and without obtaining the Commonwealth Bank's approval.</p>
                <p class="text-[0.65rem] text-paper/55 leading-relaxed mb-3">Trent Long notified the Commonwealth Bank. The Commonwealth Bank is now issuing a Notice to Complete the mortgage — a 28-day notice — on the basis that the mortgage contract expressly prohibits the borrower from lending against a property mortgaged to the Commonwealth Bank without the prior written approval of the first mortgagee. That approval was never sought. The $1.7 million was raised without it.</p>
                <p class="text-[0.65rem] text-paper/55 leading-relaxed">The investor who provided the $1.7 million was not told the property was already encumbered by a Commonwealth Bank mortgage. That is a material fact in the context of any secured loan. The 28-day Notice to Complete places the loan into default. What follows — for the mortgage, for the $1.7 million, and for the investor who was not given a full picture — is now in motion.</p>
            </div>

            <div class="border border-paper/[0.07] p-5" style="background:rgba(0,0,0,0.18)">
                <div class="text-[0.46rem] tracking-[0.2em] uppercase text-paper/28 mb-3">Robert Huang — Documented Conduct</div>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Contacted the Court unilaterally after Consent Order execution to remove parties from the payment schedule — without notice to or consent from Adam Watson.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Attempted to have both Adam Watson and Graham Gordon stripped from a Consent Order all parties had signed — a Consent Order that gave Huang a real outcome.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Borrowed $1.7M from an investor against a CBA-mortgaged property without disclosing the first mortgage and without CBA approval — in direct breach of the mortgage contract.</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs shrink-0 mt-0.5">→</span><p class="text-[0.6rem] text-paper/42 leading-relaxed">Result: ~$30M in properties facing fire sale by liquidator. Lenders exposed. An outcome caused entirely by his own actions.</p></div>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════
     ADAM WATSON — POLITICAL CANDIDATE
══════════════════════════════════════ -->
<section id="candidate" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(61,122,74,0.06) 0%,rgba(201,138,16,0.04) 60%,transparent 100%)">
    <div class="max-w-6xl mx-auto">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div class="reveal">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-4 h-px bg-sage"></div>
                    <span class="text-[0.55rem] tracking-[0.3em] uppercase text-sage">Independent Candidate</span>
                </div>
                <h2 class="font-display leading-none tracking-wide mb-3" style="font-size:clamp(2.8rem,7vw,5rem)">ADAM WATSON.<br><span class="text-sage">INDEPENDENT.</span></h2>
                <p class="font-serif italic text-paper/45 max-w-2xl leading-relaxed" style="font-size:clamp(0.9rem,1.8vw,1.1rem)">"The people documented on this site — the officers who didn't act, the institutions that protected themselves instead of the public, the systems that punished accountability — are the reason I'm running."</p>
            </div>
            <div class="reveal shrink-0" style="transition-delay:0.1s">
                <div class="border border-sage/30 px-5 py-4 text-center" style="background:rgba(61,122,74,0.05)">
                    <div class="text-[0.45rem] tracking-[0.22em] uppercase text-sage mb-1">Policy Platform</div>
                    <div class="font-display text-3xl text-sage mb-1">5</div>
                    <div class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/30">Policy Areas</div>
                </div>
            </div>
        </div>

        <div class="reveal mb-10">
            <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4 max-w-3xl">Adam Watson is running as an independent candidate. His platform is built on direct, documented experience with the systems that govern fuel prices, energy costs, employment, national security, and immigration — and a firsthand understanding of what happens when those systems are captured by interests that aren't the public's.</p>
            <p class="text-[0.72rem] leading-relaxed text-paper/45 max-w-3xl">His policies are available in full below. Each is a working document — not a campaign slogan.</p>
        </div>

        <!-- Policy cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 reveal">

            <!-- Fuel Policy -->
            <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/adamwatson/adam-watson-fuel-policy.html" target="_blank" rel="noopener" class="group block border border-paper/[0.08] p-6 transition-all duration-300 hover:border-gold/40" style="background:rgba(201,138,16,0.03);text-decoration:none">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-[0.42rem] tracking-[0.22em] uppercase text-gold">Policy 01</div>
                    <span class="text-[0.5rem] tracking-[0.15em] uppercase text-gold/50 border border-gold/20 px-2 py-0.5 group-hover:border-gold/50 transition-colors">View →</span>
                </div>
                <div class="font-display text-2xl tracking-wide text-paper/80 leading-tight mb-3 group-hover:text-paper transition-colors">FUEL</div>
                <p class="text-[0.58rem] text-paper/35 leading-relaxed">Price transparency, competition policy, and the mechanisms that keep Australians paying more at the pump than they should.</p>
            </a>

            <!-- Defence Policy -->
            <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/adamwatson/adam-watson-defence-policy.html" target="_blank" rel="noopener" class="group block border border-paper/[0.08] p-6 transition-all duration-300 hover:border-hot/40" style="background:rgba(193,68,14,0.03);text-decoration:none">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-[0.42rem] tracking-[0.22em] uppercase text-hot">Policy 02</div>
                    <span class="text-[0.5rem] tracking-[0.15em] uppercase text-hot/50 border border-hot/20 px-2 py-0.5 group-hover:border-hot/50 transition-colors">View →</span>
                </div>
                <div class="font-display text-2xl tracking-wide text-paper/80 leading-tight mb-3 group-hover:text-paper transition-colors">DEFENCE</div>
                <p class="text-[0.58rem] text-paper/35 leading-relaxed">National security, capability investment, and what an independent voice looks like when defence policy isn't written by lobbyists.</p>
            </a>

            <!-- Immigration Policy -->
            <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/adamwatson/adam-watson-immigration-policy.html" target="_blank" rel="noopener" class="group block border border-paper/[0.08] p-6 transition-all duration-300 hover:border-violet/40" style="background:rgba(124,106,170,0.03);text-decoration:none">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-[0.42rem] tracking-[0.22em] uppercase" style="color:#7c6aaa">Policy 03</div>
                    <span class="text-[0.5rem] tracking-[0.15em] uppercase border px-2 py-0.5 transition-colors" style="color:rgba(124,106,170,0.5);border-color:rgba(124,106,170,0.2)">View →</span>
                </div>
                <div class="font-display text-2xl tracking-wide text-paper/80 leading-tight mb-3 group-hover:text-paper transition-colors">IMMIGRATION</div>
                <p class="text-[0.58rem] text-paper/35 leading-relaxed">Integrity, capacity, and a frank account of what the current system costs communities that have no political voice to push back.</p>
            </a>

            <!-- Jobs Policy -->
            <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/adamwatson/adam-watson-jobs-policy.html" target="_blank" rel="noopener" class="group block border border-paper/[0.08] p-6 transition-all duration-300 hover:border-sage/40" style="background:rgba(61,122,74,0.03);text-decoration:none">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-[0.42rem] tracking-[0.22em] uppercase text-sage">Policy 04</div>
                    <span class="text-[0.5rem] tracking-[0.15em] uppercase text-sage/50 border border-sage/20 px-2 py-0.5 group-hover:border-sage/50 transition-colors">View →</span>
                </div>
                <div class="font-display text-2xl tracking-wide text-paper/80 leading-tight mb-3 group-hover:text-paper transition-colors">JOBS</div>
                <p class="text-[0.58rem] text-paper/35 leading-relaxed">Employment, local industry, and economic frameworks that work for people who actually need them — not the ones who already have access.</p>
            </a>

            <!-- Energy Policy -->
            <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/adamwatson/adam-watson-energy-policy.html" target="_blank" rel="noopener" class="group block border border-paper/[0.08] p-6 transition-all duration-300 hover:border-gold/40" style="background:rgba(201,138,16,0.03);text-decoration:none">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-[0.42rem] tracking-[0.22em] uppercase text-gold">Policy 05</div>
                    <span class="text-[0.5rem] tracking-[0.15em] uppercase text-gold/50 border border-gold/20 px-2 py-0.5 group-hover:border-gold/50 transition-colors">View →</span>
                </div>
                <div class="font-display text-2xl tracking-wide text-paper/80 leading-tight mb-3 group-hover:text-paper transition-colors">ENERGY</div>
                <p class="text-[0.58rem] text-paper/35 leading-relaxed">The transition, the grid, household costs, and why energy policy designed in isolation from working people's bills is policy designed to fail.</p>
            </a>

            <!-- Platform summary tile -->
            <div class="border border-sage/25 p-6 flex flex-col justify-between" style="background:rgba(61,122,74,0.06)">
                <div>
                    <div class="text-[0.42rem] tracking-[0.22em] uppercase text-sage mb-4">Full Platform</div>
                    <div class="font-display text-xl tracking-wide text-paper/70 leading-tight mb-3">INDEPENDENT.<br>NO DONOR.<br>NO FACTION.</div>
                    <p class="text-[0.55rem] text-paper/35 leading-relaxed">All five policies are live. Each links directly to the working document. No sign-up. No paywall.</p>
                </div>
                <div class="mt-4 border-t border-sage/20 pt-4">
                    <div class="text-[0.48rem] tracking-[0.15em] uppercase text-sage/60">Sunlight.Quest</div>
                    <div class="text-[0.45rem] text-paper/25 mt-0.5">Episode 2 · The Candidate</div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══ FOOTER ══ -->
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
}, { threshold: 0 });
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
<section id="thankyou" class="py-24 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(61,122,74,0.04) 0%,rgba(12,8,4,0) 60%)">
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
            <div class="flex items-center gap-3 mt-2"><div class="w-6 h-px bg-sage/40"></div><span class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/25">Kosta Kondratenko — Sunlight.Quest</span></div>
        </div>
        <div class="clear-both mt-12 pt-8 border-t border-paper/[0.06]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="border border-sage/20 p-6" style="background:rgba(61,122,74,0.03)">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-sage mb-4">Adam Watson — Follow His Work</div>
                    <div class="space-y-3">
                        <a href="https://instagram.com" target="_blank" rel="noopener" class="flex items-center gap-3 group"><div class="w-7 h-7 border border-paper/10 flex items-center justify-center text-xs group-hover:border-sage/40 transition-colors">▶</div><div><div class="text-[0.6rem] text-paper/50 group-hover:text-sage transition-colors">Instagram</div><div class="text-[0.52rem] text-paper/25">@adamwatson — follow for updates</div></div></a>
                        <a href="https://youtube.com" target="_blank" rel="noopener" class="flex items-center gap-3 group"><div class="w-7 h-7 border border-paper/10 flex items-center justify-center text-xs group-hover:border-sage/40 transition-colors">▶</div><div><div class="text-[0.6rem] text-paper/50 group-hover:text-sage transition-colors">YouTube</div><div class="text-[0.52rem] text-paper/25">Adam Watson — commentary & investigation</div></div></a>
                    </div>
                </div>
                <div class="border border-gold/20 p-6" style="background:rgba(201,138,16,0.03)">
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
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-3 leading-tight reveal">ADAM WATSON.<br><span class="text-gold">THE MAN BEHIND THE STORY.</span></h2>
        <p class="font-serif italic text-paper/50 text-lg leading-relaxed mb-10 reveal">"Adam Watson has lived more of Australia's real history than most journalists will ever document. He was there for the mining boom's foundations — and he is now determined to shape what comes next."</p>

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
     TIPOFF / CONTACT FORM
══════════════════════════════════════ -->
<section id="contact" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:rgba(4,4,4,0.6)">
    <div class="max-w-2xl mx-auto">

        <div class="flex items-center gap-3 mb-3 reveal">
            <span class="text-[0.48rem] tracking-[0.22em] uppercase border px-2 py-1 text-hot border-hot/40">Secure Intelligence</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl tracking-wide mb-3 leading-tight reveal">GOT SOMETHING<br><span class="text-hot">WE SHOULD KNOW?</span></h2>
        <p class="font-serif italic text-paper/45 text-lg leading-relaxed mb-10 reveal">Tip-offs from members of the public, additional information about the individuals documented here, crime and scam intelligence, media enquiries — all welcome. Information submitted will be used to triangulate and verify. Sources will not be published without explicit consent.</p>

        <!-- Form -->
        <form id="tipoff-form" onsubmit="handleTipoff(event)" class="space-y-4 reveal">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-2">Name <span class="text-paper/18">(optional)</span></label>
                    <input type="text" name="name" placeholder="Anonymous if preferred" class="w-full bg-paper/[0.03] border border-paper/[0.1] text-paper text-sm px-4 py-3 outline-none focus:border-hot/40 transition-colors placeholder:text-paper/18 placeholder:text-xs" />
                </div>
                <div>
                    <label class="block text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-2">Contact <span class="text-paper/18">(optional — email or phone)</span></label>
                    <input type="text" name="contact" placeholder="Only if you want a reply" class="w-full bg-paper/[0.03] border border-paper/[0.1] text-paper text-sm px-4 py-3 outline-none focus:border-hot/40 transition-colors placeholder:text-paper/18 placeholder:text-xs" />
                </div>
            </div>

            <div>
                <label class="block text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-2">Category</label>
                <select name="category" class="w-full bg-ink border border-paper/[0.1] text-paper/60 text-sm px-4 py-3 outline-none focus:border-hot/40 transition-colors appearance-none cursor-pointer" style="background-image:url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='rgba(245,234,212,0.3)' stroke-width='1.5' fill='none'/%3E%3C/svg%3E\");background-repeat:no-repeat;background-position:right 1rem center">
                    <option value="" class="bg-ink">Select a category…</option>
                    <option value="crime-tipoff" class="bg-ink">Crime tip-off</option>
                    <option value="scam-tipoff" class="bg-ink">Scam or fraud intelligence</option>
                    <option value="additional-info" class="bg-ink">Additional info on a person documented here</option>
                    <option value="correction" class="bg-ink">Correction or dispute to published information</option>
                    <option value="media" class="bg-ink">Media enquiry</option>
                    <option value="legal" class="bg-ink">Legal notice or correspondence</option>
                    <option value="other" class="bg-ink">Other</option>
                </select>
            </div>

            <div>
                <label class="block text-[0.48rem] tracking-[0.2em] uppercase text-paper/30 mb-2">Your information</label>
                <textarea name="message" rows="7" placeholder="Tell us what you know. Include as much detail as possible — dates, locations, names, amounts. Everything helps with triangulation." class="w-full bg-paper/[0.03] border border-paper/[0.1] text-paper text-sm px-4 py-3 outline-none focus:border-hot/40 transition-colors placeholder:text-paper/18 placeholder:text-[0.6rem] leading-relaxed resize-y font-mono"></textarea>
            </div>

            <div class="flex items-start gap-3 p-4 border border-paper/[0.07]" style="background:rgba(0,0,0,0.2)">
                <input type="checkbox" name="consent" id="consent-check" class="mt-0.5 accent-hot shrink-0" required />
                <label for="consent-check" class="text-[0.55rem] text-paper/35 leading-relaxed cursor-pointer">I understand that information submitted may be used for investigative purposes. I confirm I am not submitting false or malicious information about any individual.</label>
            </div>

            <button type="submit" class="w-full bg-hot hover:bg-dim font-display tracking-widest text-paper py-4 transition-colors text-sm">SUBMIT INTELLIGENCE →</button>
            <p id="tipoff-msg" class="text-[0.55rem] tracking-[0.12em] text-center min-h-[1.2rem] text-paper/35"></p>

        </form>

        <div class="mt-10 grid grid-cols-1 sm:grid-cols-3 gap-4 reveal">
            <div class="border border-paper/[0.07] p-4 text-center" style="background:rgba(193,68,14,0.03)">
                <div class="text-[0.48rem] tracking-[0.18em] uppercase text-hot mb-2">Crime &amp; Scam Tips</div>
                <p class="text-[0.55rem] text-paper/35 leading-relaxed">Information about criminal activity involving any person documented on this site, or related scams targeting members of the public.</p>
            </div>
            <div class="border border-paper/[0.07] p-4 text-center" style="background:rgba(201,138,16,0.03)">
                <div class="text-[0.48rem] tracking-[0.18em] uppercase text-gold mb-2">Media &amp; Press</div>
                <p class="text-[0.55rem] text-paper/35 leading-relaxed">Journalists, producers, and broadcasters seeking comment, interview, or access to underlying documentation are welcome to submit enquiries here.</p>
            </div>
            <div class="border border-paper/[0.07] p-4 text-center" style="background:rgba(61,122,74,0.03)">
                <div class="text-[0.48rem] tracking-[0.18em] uppercase text-sage mb-2">Confidentiality</div>
                <p class="text-[0.55rem] text-paper/35 leading-relaxed">We will not publish identifying information about tip-off sources without explicit written consent. All submissions are treated as confidential by default.</p>
            </div>
        </div>

    </div>
</section>


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
    'image-electricity-1': {
        type:'image',
        title:'POWERBOX — ELECTRICITY DISCONNECTED (1)',
        tag:'Changfa Real Estate · Home Invasion · Forensic Evidence',
        meta:'Image · External powerbox · Power disconnected to enable garage entry',
        desc:'Photograph of the external electricity powerbox at Adam Watson\'s property, documenting the disconnection of power by the Changfa agent. Police forensics confirmed the agent\'s fingerprints on the powerbox. This evidence was presented at the QCAT hearing (Q6970-25) which resulted in an order for immediate power restoration.',
        src:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/changfa/electricity_disconnected.jpg',
        filename:'electricity_disconnected.jpg',
        redact:false
    },
    'image-electricity-2': {
        type:'image',
        title:'POWERBOX — ELECTRICITY DISCONNECTED (2)',
        tag:'Changfa Real Estate · Home Invasion · Forensic Evidence',
        meta:'Image · External powerbox · Secondary angle · Corroborating evidence',
        desc:'Second photograph of the external powerbox documenting the disconnection. Corroborates the primary forensic evidence used in the home invasion charge and the QCAT application.',
        src:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/changfa/electricity_disconnected_2.jpg',
        filename:'electricity_disconnected_2.jpg',
        redact:false
    },
    'pdf-qcat-changfa': {
        type:'pdf',
        title:'QCAT ORDER — Q6970-25',
        tag:'QCAT · Changfa Real Estate · Power Restoration Order',
        meta:'PDF · QCAT Decision Q6970-25 · Changfa directed to restore power immediately',
        desc:'The formal QCAT order issued following the hearing in which fingerprint evidence from the powerbox was presented. QCAT ordered Changfa Real Estate to restore electricity to Adam Watson\'s property immediately. Reference: Q6970-25.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/changfa/QCAT_Decision_Q6970-25.pdf',
        filename:'QCAT_Decision_Q6970-25.pdf',
        pages:3
    },
    'pdf-jenny-letter': {
        type:'pdf',
        title:'LETTER TO JENNY — CHANGFA POWER RESTORATION',
        tag:'Changfa Real Estate · Post-QCAT Correspondence · Redacted',
        meta:'PDF · Letter to Jenny (Changfa agent) · Post-QCAT Order Q6970-25',
        desc:'Email sent to Jenny, the Changfa real estate agent handling the matter, requesting power be restored to Adam Watson\'s property as quickly as possible following QCAT Order Q6970-25. Redacted.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/changfa/letter_to_jenny_redacted.pdf',
        filename:'letter_to_jenny_redacted.pdf',
        pages:2
    },
    'image-changfa-agent': {
        type:'image',
        title:'CHANGFA AGENT — UNNAMED PENDING CHARGE',
        tag:'Changfa Real Estate · Home Invasion · Subject of Investigation',
        meta:'Image · Changfa agent · Name withheld pending formal charge',
        desc:'Photograph of the Changfa Real Estate agent who is the subject of the home invasion investigation. Name withheld pending the formal laying of charges. This agent disconnected electricity to Adam Watson\'s property and entered through the garage, leaving fingerprints confirmed by police forensics. A second incident involved the same agent entering without permission and throwing a Milo bottle at Adam\'s head while he was on an AVR court link before Justice Beckett.',
        src:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/changfa/changfa-agent.jpg',
        filename:'changfa-agent.jpg',
        redact:false
    },
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
        meta:'PDF · Forensic examination · Certified examiner · 20 May 2025',
        desc:'Certified EyeDetect® biometric lie detection examination conducted at 50 Cavill Avenue, Surfers Paradise. The subject (Bodie Chalmers) scored 1 out of 100 and was rated as "Deceptive" throughout the entire examination. The examiner is a qualified and certified EyeDetect® professional. This forensic evidence strengthens concerns about Bodie Chalmers\'s credibility and supports the pattern of deceptive behaviour documented throughout Adam Watson\'s account of the coercive control incidents.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/2025.05.20-lie-detector-test-australia.pdf',
        filename:'2025.05.20-lie-detector-test-australia.pdf',
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
    'pdf-soc-west-kira': {
        type:'pdf',
        title:'STATEMENT OF CLAIM — WEST KIRA · LOCAL COURT',
        tag:'Obtaining Benefit by Deception · Debt Onsold · Glasses Damage',
        meta:'PDF · Statement of Claim · Local Court · Stamped',
        desc:'Statement of Claim stamped by the Local Court against West Kira for obtaining benefit by deception. The debt includes the cost of Adam Watson\'s glasses, deliberately destroyed by West Kira during the in-vehicle incident captured on recording. The debt has since been onsold to a third-party debt collector. A stamped Statement of Claim is a court document, not an allegation — the conduct and the debt are on the record.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/statement_of_claim_west_kira.pdf',
        filename:'statement_of_claim_west_kira.pdf'
    },
    'pdf-bankruptcy-west-kira': {
        type:'pdf',
        title:'BANKRUPTCY NOTICE — WEST KIRA · FEDERAL COURT OF AUSTRALIA',
        tag:'Federal Court · Bankruptcy Notice · Unpaid Default Judgement',
        meta:'PDF · Bankruptcy Notice · Federal Court of Australia',
        desc:'A Bankruptcy Notice issued by the Federal Court of Australia to West Kira. This notice follows the unpaid default judgement documented in the Statement of Claim. Having gone unsatisfied through the Local Court process — including after the debt was onsold to a third-party collector — the matter has now escalated to formal Federal Court bankruptcy proceedings. Failure to comply with a Bankruptcy Notice within the prescribed timeframe constitutes an act of bankruptcy and can result in a sequestration order being made against the debtor\'s estate. West Kira is now the subject of Federal Court action.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/west_kira/bankruptcy_notice_west_kira.pdf',
        filename:'bankruptcy_notice_west_kira.pdf'
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
        desc:'Consent Order for Dismissal in the matter of The Owners – Strata Plan No 93922 v PSR Crown Investment Pty Ltd (TAD 6 of 2026). Orders: (1) Proceedings dismissed; (2) Owners Corporation pays $395,000 to PSR Crown; (3) Graham Gordon pays $365,000 to PSR Crown; (4) Collection Corporation Australia pays $385,000 to PSR Crown; (5) Each of the three parties pays $49,667 legal costs directly to Adam Watson. All payments due 15 April 2026. Note: signed by Graham Gordon — other parties have not yet signed. No suppression order exists.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/graham_gordon/Consent_Order_Dismissal_TAD6_2026.pdf',
        filename:'Consent_Order_Dismissal_TAD6_2026.pdf',
        pages: 3
    },
    'pdf-ncat-bundle': {
        type:'pdf',
        title:'NCAT FULL LODGEMENT BUNDLE',
        tag:'NCAT · PSR Crown Investment Pty Ltd · Graham Gordon Matter',
        meta:'PDF · Full lodgement bundle · Applicant: PSR Crown Investment Pty Ltd · Sections prepared with Claude (Anthropic)',
        desc:'The complete NCAT lodgement bundle for the Graham Gordon matter. Many sections of this bundle were prepared with assistance from Claude (Anthropic). NCAT has confirmed that if this matter is lodged and proceeds to hearing, the file will be directed to the Director of Public Prosecutions. This referral pathway is what Graham Gordon fears — it is the reason the consent order exists.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/graham_gordon/NCAT_Full_Lodgement_Bundle.pdf',
        filename:'NCAT_Full_Lodgement_Bundle.pdf'
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
    'pdf-olsc-atsils-complaint': {
        type:'pdf',
        title:'OLSC COMPLAINT — ABORIGINAL LEGAL AID · BRIEF OF EVIDENCE LOST',
        tag:'Office of the Legal Services Commissioner · NSW · Active Complaint',
        meta:'PDF · OLSC Complaint · Aboriginal Legal Aid incompetence — Brief of Evidence lost including DVR footage',
        desc:'Formal complaint lodged with the Office of the Legal Services Commissioner (OLSC) against Aboriginal Legal Aid. Aboriginal Legal Aid, acting as Socrates\'s representative for his assault charge relating to Samira Khalaj, lost the entire Brief of Evidence including DVR footage. Police are required to reorder everything from scratch — an 8-week delay imposed on Socrates through no fault of his own. Socrates is personally liable for $1,500 per brief reorder cost as a direct consequence of their failure. The complaint documents failures of competency, client welfare, and professional duty under the Legal Profession Uniform Law. Redacted copy.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/samira_socrates/OLSC_Complaint_Form_burazer_redacted.pdf',
        filename:'OLSC_Complaint_Form_burazer_redacted.pdf'
    },
    'video-samira-car': {
        type:'video',
        title:'SAMIRA & RAZ — HARASSING ADAM AT HIS CAR / SAMIRA ENTERS WITHOUT PERMISSION',
        tag:'Samira Khalaj · Raz · Coogee · Unauthorised Entry',
        meta:'Video · S3 Hosted · samiravideo1.mp4',
        desc:'Footage capturing Samira Khalaj and Raz harassing Adam Watson at his vehicle. Samira can be seen entering Adam\'s car without his permission. This incident preceded Samira\'s sworn police statement alleging Adam punched her in the jaw — a statement her own doctor\'s findings do not support.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/samira_socrates/samiravideo1.mp4',
        filename:'samiravideo1.mp4'
    },
    'video-samira-raz-attack': {
        type:'video',
        title:'RAZ ATTACKS ADAM — ATTEMPTS TO REGAIN HIS VEHICLE',
        tag:'Raz · Samira Khalaj · Coogee · Physical Attack · Motor Vehicle',
        meta:'Video · S3 Hosted · samira-video-2.mp4',
        desc:'Footage capturing Raz attacking Adam Watson when Adam attempts to regain autonomy of his own motor vehicle. Raz is the partner of Samira Khalaj and is named as a respondent in the AVO Adam helped Samira obtain — yet here he is physically attacking the person who assisted her.',
        url:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/samira_socrates/samira-video-2.mp4',
        filename:'samira-video-2.mp4'
    },
    'image-rj-receipt-1': {
        type:'image',
        title:'RJ PAYMENT RECEIPT 1 — ADAM WATSON TO RJ',
        tag:'RJ · Payment Receipt · Good Faith Payment · Later Used at Police Station',
        meta:'Image · WhatsApp screenshot · Payment sent by Adam Watson to RJ at Kosta\'s instruction',
        desc:'Payment receipt showing money sent by Adam Watson to RJ at Kosta Kondratenko\'s instruction, as a show of good faith. When Kosta encountered RJ on the G-Link tram and asked "Did you get the money?", RJ denied any knowledge of it. RJ subsequently took these receipts to the police station and used them to build the narrative that the payments were for sexual services.',
        src:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/r+j/WhatsApp+Image+2024-09-19+at+17.34.05_65ed8f78.jpg',
        filename:'rj_payment_receipt_1.jpg'
    },
    'image-rj-receipt-2': {
        type:'image',
        title:'RJ PAYMENT RECEIPT 2 — ADAM WATSON TO RJ',
        tag:'RJ · Payment Receipt · Good Faith Payment · Later Used at Police Station',
        meta:'Image · WhatsApp screenshot · Payment sent by Adam Watson to RJ at Kosta\'s instruction',
        desc:'Payment receipt showing money sent by Adam Watson to RJ at Kosta Kondratenko\'s instruction, as a show of good faith. RJ denied receiving these payments when confronted on the G-Link tram, then took the receipts to police to allege the money was payment for sex.',
        src:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/r+j/WhatsApp+Image+2024-09-19+at+17.45.25_2dde20d6.jpg',
        filename:'rj_payment_receipt_2.jpg'
    },
    'image-rj-receipt-3': {
        type:'image',
        title:'RJ PAYMENT RECEIPT 3 — ADAM WATSON TO RJ',
        tag:'RJ · Payment Receipt · Good Faith Payment · Later Used at Police Station',
        meta:'Image · WhatsApp screenshot · Payment sent by Adam Watson to RJ at Kosta\'s instruction',
        desc:'Payment receipt showing money sent by Adam Watson to RJ at Kosta Kondratenko\'s instruction, as a show of good faith. RJ denied receiving these payments when confronted on the G-Link tram, then took the receipts to police to allege the money was payment for sex.',
        src:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/r+j/WhatsApp+Image+2024-09-19+at+17.33.42_17fbe41e.jpg',
        filename:'rj_payment_receipt_3.jpg'
    },
    'image-rj-text': {
        type:'image',
        title:'RJ — TEXT MESSAGE AFTER VIRAL VIDEO',
        tag:'RJ · Text Message · Post-Viral · Restraining Order Threat',
        meta:'Image · Text message sent by RJ to Adam Watson following the viral video',
        desc:'Text message sent by RJ to Adam Watson after the viral video. RJ threatens restraining orders despite a documented pattern of organising gang assaults and pre-planned ambushes against Adam Watson. The message contains a reference to "cunt mums" — notable given that RJ\'s own mother has a restraining order against him. The message also deploys the word "creep" — a deliberate destabilisation tactic modelled on a false allegation successfully used against a local doctor.',
        src:'https://sunlightquest.s3.ap-southeast-2.amazonaws.com/r+j/rj_stayaway_square.jpg',
        filename:'rj_stayaway_square.jpg'
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
    var src = e.src || 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&q=65';
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

// ── VIDSTACK PLAYER EP2 INIT ──
(function() {
    var VTT_CONTENT_EP2 = [
        'WEBVTT',
        '',
        '00:00:00.000 --> 00:01:15.000',
        "Adam's Story",
        '',
        '00:01:15.000 --> 00:02:30.000',
        'Samira',
        '',
        '00:02:30.000 --> 00:03:45.000',
        'RJ — 15 Incidents',
        '',
        '00:03:45.000 --> 00:05:00.000',
        'Brazen Crime',
        '',
        '00:05:00.000 --> 00:06:15.000',
        'Redress Scheme',
        '',
        '00:06:15.000 --> 00:07:30.000',
        'Kira & Kira',
        '',
        '00:07:30.000 --> 00:10:00.000',
        'Tasmania'
    ].join('\n');

    function initPlayerEp2() {
        var el = document.getElementById('player-ep2');
        if (!el) return;
        if (typeof el.subscribe !== 'function') {
            setTimeout(initPlayerEp2, 200);
            return;
        }
        window.vidstackPlayerEp2 = el;
        window.vidstackPlayer = el;
        var track = document.getElementById('ep2-chapters-track');
        if (track) {
            var blob = new Blob([VTT_CONTENT_EP2], {type: 'text/vtt'});
            track.src = URL.createObjectURL(blob);
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPlayerEp2);
    } else {
        initPlayerEp2();
    }
})();

// ── VIDEO PLAYER ──
function seekToChapter(index) {
    seekToChapterEp2(index);
}
function seekToChapterEp2(index) {
    var p = window.vidstackPlayerEp2;
    if(!p) {
        document.getElementById('player-ep2').scrollIntoView({behavior:'smooth',block:'center'});
        return;
    }
    var tracks = p.textTracks;
    var ct = null;
    for(var i=0;i<tracks.length;i++){if(tracks[i].kind==='chapters'){ct=tracks[i];break;}}
    if(ct&&ct.cues&&ct.cues.length>index){p.currentTime=ct.cues[index].startTime;}
    else{var d=p.duration||0;if(d>0)p.currentTime=(d/8)*index;}
    p.play().catch(function(){});
    document.getElementById('player-ep2').scrollIntoView({behavior:'smooth',block:'center'});
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
function handleTipoff(e) {
    e.preventDefault();
    var msg = document.getElementById('tipoff-msg');
    var form = document.getElementById('tipoff-form');
    var message = form.querySelector('[name="message"]').value.trim();
    if(!message){msg.style.color='#c1440e';msg.textContent='✗ Please enter your information before submitting.';return;}
    msg.style.color='#3d7a4a';
    msg.textContent='✓ Received. Information logged — we\'ll triangulate and follow up if contact details were provided.';
    form.querySelector('[name="message"]').value='';
    form.querySelector('[name="name"]').value='';
    form.querySelector('[name="contact"]').value='';
    form.querySelector('[name="category"]').value='';
}

// ── SCROLL REVEAL ──
var obs = new IntersectionObserver(function(entries){
    entries.forEach(function(e){if(e.isIntersecting)e.target.classList.add('in');});
},{threshold:0});
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
                        <optgroup label="Episode 4"><option>Hellen Pertekes</option><option>Books R Us</option></optgroup>
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
                    <div class="sq-field"><textarea class="sq-textarea" name="sq_pickup_notes" placeholder="Special instructions — e.g. 'call ahead', 'after 6pm only', 'come alone'" style="min-height:60px;"></textarea></div>
                </div>
            </div>
            <div class="sq-section">
                <div class="sq-section-label">Triangulation context</div>
                <div class="sq-field"><select class="sq-select" name="sq_relation"><option value="">— Your relationship to the subject —</option><option>Direct witness</option><option>Former associate / colleague</option><option>Family / household member</option><option>Victim or affected party</option><option>Secondary source (told by someone else)</option><option>Public records / online research</option><option>Prefer not to say</option></select><div class="sq-field-hint">Helps us weight and verify the information — not to identify you.</div></div>
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
document.addEventListener('keydown',function(e){if(e.key==='Escape')closeTipModal();});
</script>

</body>
</html>