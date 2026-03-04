<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>COVERT GC — Illawarra Strata Management</title>
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
    <style>
        body::after{content:'';position:fixed;inset:0;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");pointer-events:none;z-index:9498}
        ::-webkit-scrollbar{width:3px}::-webkit-scrollbar-track{background:#080808}::-webkit-scrollbar-thumb{background:#d63d2f}
        @keyframes blink{0%,100%{opacity:1}50%{opacity:0.25}}.blink{animation:blink 2s step-end infinite}
        @keyframes fadeUp{from{opacity:0;transform:translateY(18px)}to{opacity:1;transform:translateY(0)}}.fade-up{animation:fadeUp 0.65s ease both}
        .reveal{opacity:0;transform:translateY(24px);transition:opacity 0.55s ease,transform 0.55s ease}.reveal.in{opacity:1;transform:translateY(0)}
        .scanlines{background:repeating-linear-gradient(0deg,transparent,transparent 2px,rgba(0,0,0,0.03) 2px,rgba(0,0,0,0.03) 4px);pointer-events:none}
        .story-chapter{border-left:2px solid rgba(240,236,226,0.08);padding-left:1.5rem;transition:border-color 0.3s ease}.story-chapter:hover{border-left-color:rgba(214,61,47,0.4)}
        .evidence-tag{display:inline-flex;align-items:center;gap:0.4rem;font-size:0.52rem;letter-spacing:0.18em;text-transform:uppercase;border:1px solid currentColor;padding:0.25rem 0.6rem;opacity:0.6;transition:opacity 0.2s}.evidence-tag:hover{opacity:1}
        .timeline-dot{width:8px;height:8px;border-radius:50%;background:#d63d2f;box-shadow:0 0 0 3px rgba(214,61,47,0.2);flex-shrink:0;margin-top:5px}
        @keyframes pulseRed{0%,100%{box-shadow:0 0 0 3px rgba(214,61,47,0.2)}50%{box-shadow:0 0 0 6px rgba(214,61,47,0.1)}}.timeline-dot.active{animation:pulseRed 2s ease infinite}
        .stat-number{font-family:'Bebas Neue',sans-serif;line-height:1}
        @keyframes glitch1{0%,100%{clip-path:inset(0 0 92% 0);transform:translateX(-4px)}25%{clip-path:inset(40% 0 45% 0);transform:translateX(4px)}50%{clip-path:inset(75% 0 8% 0);transform:translateX(-2px)}75%{clip-path:inset(12% 0 78% 0);transform:translateX(3px)}}
        @keyframes glitch2{0%,100%{clip-path:inset(82% 0 4% 0);transform:translateX(4px)}33%{clip-path:inset(18% 0 65% 0);transform:translateX(-4px)}66%{clip-path:inset(52% 0 28% 0);transform:translateX(2px)}}
        .glitch{position:relative}.glitch::before,.glitch::after{content:attr(data-text);position:absolute;top:0;left:0;width:100%;height:100%;font-family:inherit;font-size:inherit;line-height:inherit;letter-spacing:inherit;color:inherit}
        .glitch::before{color:#d63d2f;animation:glitch1 5s 1s infinite linear;opacity:0.6}.glitch::after{color:#e8a020;animation:glitch2 5s 2.2s infinite linear;opacity:0.4}

        /* ── EVIDENCE VAULT ── */
        .evidence-vault{margin-top:1.25rem;border:1px solid rgba(240,236,226,0.08);background:rgba(4,4,4,0.7)}
        .ev-header{display:flex;align-items:center;justify-content:space-between;padding:0.6rem 0.9rem;background:rgba(240,236,226,0.025);cursor:pointer;user-select:none;border-bottom:1px solid rgba(240,236,226,0.05)}
        .ev-header:hover{background:rgba(240,236,226,0.04)}
        .ev-toggle{transition:transform 0.3s;font-size:0.45rem;color:rgba(240,236,226,0.28)}
        .ev-toggle.open{transform:rotate(180deg)}
        .ev-body{overflow:hidden;max-height:0;transition:max-height 0.45s cubic-bezier(0.4,0,0.2,1)}
        .ev-body.open{max-height:3000px}
        .ev-file{display:flex;align-items:center;gap:0.65rem;padding:0.65rem 0.9rem;border-bottom:1px solid rgba(240,236,226,0.04);transition:background 0.2s;position:relative;overflow:hidden}
        .ev-file:last-child{border-bottom:none}
        .ev-file:hover{background:rgba(240,236,226,0.03)}
        .ev-file::before{content:'';position:absolute;left:0;top:0;bottom:0;width:2px;transform:scaleY(0);transform-origin:bottom;transition:transform 0.3s}
        .ev-file:hover::before{transform:scaleY(1)}
        .ef-hot::before{background:#d63d2f}.ef-gold::before{background:#e8a020}.ef-sage::before{background:#2a9d4e}.ef-violet::before{background:#7b5ea7}
        .ev-icon{width:30px;height:30px;display:flex;align-items:center;justify-content:center;border:1px solid rgba(240,236,226,0.07);font-size:0.72rem;flex-shrink:0}
        .ev-pdf{background:rgba(214,61,47,0.08);color:#d63d2f}
        .ev-img{background:rgba(232,160,32,0.08);color:#e8a020}
        .ev-meta{flex:1;min-width:0}
        .ev-name{font-size:0.63rem;color:rgba(240,236,226,0.62);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
        .ev-desc{font-size:0.49rem;letter-spacing:0.12em;text-transform:uppercase;margin-top:0.12rem;color:rgba(240,236,226,0.22)}
        .ev-cta{font-size:0.47rem;letter-spacing:0.18em;text-transform:uppercase;opacity:0.3;transition:opacity 0.2s;white-space:nowrap;flex-shrink:0}
        .ev-file:hover .ev-cta{opacity:1}
        .redact-tag{display:inline-flex;align-items:center;gap:0.25rem;background:rgba(214,61,47,0.1);border:1px solid rgba(214,61,47,0.28);color:#d63d2f;font-size:0.44rem;letter-spacing:0.2em;text-transform:uppercase;padding:0.15rem 0.4rem;flex-shrink:0;margin-left:0.25rem}
        .ev-zip-bar{display:flex;align-items:center;justify-content:space-between;padding:0.6rem 0.9rem;background:rgba(232,160,32,0.04);border-top:1px solid rgba(232,160,32,0.15)}
        .mv-dl-btn{display:inline-flex;align-items:center;gap:0.4rem;border:1px solid rgba(240,236,226,0.12);padding:0.45rem 0.9rem;font-size:0.52rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(240,236,226,0.4);transition:all 0.2s;cursor:pointer;background:none}
        .mv-dl-gold{border-color:rgba(232,160,32,0.35);color:#e8a020}.mv-dl-gold:hover{border-color:#e8a020;background:rgba(232,160,32,0.08)}

        /* ── COST TABLE ── */
        .cost-table{width:100%;border-collapse:collapse;font-size:0.6rem}
        .cost-table th{text-align:left;padding:0.4rem 0.6rem;font-size:0.45rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(240,236,226,0.28);border-bottom:1px solid rgba(240,236,226,0.07);font-weight:400}
        .cost-table td{padding:0.45rem 0.6rem;border-bottom:1px solid rgba(240,236,226,0.04);color:rgba(240,236,226,0.5);vertical-align:top}
        .cost-table tr:hover td{background:rgba(214,61,47,0.03);color:rgba(240,236,226,0.7)}
        .cost-table .td-date{color:rgba(240,236,226,0.3);white-space:nowrap;font-size:0.52rem}
        .cost-table .td-amount{color:#d63d2f;text-align:right;white-space:nowrap;font-variant-numeric:tabular-nums}
        .cost-table .td-total{color:#e8a020;font-family:'Bebas Neue',sans-serif;font-size:0.85rem;text-align:right}
        .cost-table tr.subtotal td{border-top:1px solid rgba(214,61,47,0.2);background:rgba(214,61,47,0.04)}

        /* ── INCIDENT ROWS ── */
        .incident-row{display:grid;grid-template-columns:110px 1fr;gap:1rem;padding:0.9rem;border:1px solid rgba(240,236,226,0.05);border-left:2px solid rgba(214,61,47,0.25);background:rgba(4,4,4,0.5);transition:background 0.2s,border-left-color 0.2s}
        .incident-row:hover{background:rgba(214,61,47,0.03);border-left-color:#d63d2f}
        .incident-row.positive{border-left-color:rgba(42,157,78,0.4);background:rgba(42,157,78,0.025)}
        .incident-row.positive:hover{border-left-color:#2a9d4e;background:rgba(42,157,78,0.05)}
    </style>
</head>
<body class="bg-ink text-paper font-mono overflow-x-hidden">

<!-- ══ NAV ══ -->
<nav class="fixed top-0 left-0 right-0 z-50 flex justify-between items-center px-5 py-3 bg-ink/95 backdrop-blur-md border-b border-paper/[0.06]">
    <div class="flex items-center gap-4">
        <a href="#" class="font-display text-2xl tracking-widest">COVERT<span class="text-hot">GC</span></a>
        <span class="hidden sm:block text-[0.52rem] tracking-[0.2em] uppercase text-paper/20 border-l border-paper/10 pl-4">Investigative Vlog Series</span>
    </div>
    <div class="flex items-center gap-4">
        <a href="#grounds" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">The Grounds</a>
        <a href="#debt" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">Debt Loading</a>
        <a href="#timeline" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">Timeline</a>
        <a href="#evidence-vault" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors">Evidence</a>
        <span class="text-[0.52rem] tracking-[0.18em] uppercase text-hot border border-hot/60 px-3 py-1.5 blink">⬤ LIVE CASE</span>
    </div>
</nav>

<!-- ══ HERO ══ -->
<section class="relative min-h-screen flex flex-col pt-14">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0" style="background:linear-gradient(135deg,rgba(214,61,47,0.06) 0%,transparent 50%,rgba(123,94,167,0.04) 100%)"></div>
        <div class="scanlines absolute inset-0 opacity-40"></div>
        <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(240,236,226,0.018) 1px,transparent 1px),linear-gradient(90deg,rgba(240,236,226,0.018) 1px,transparent 1px);background-size:64px 64px"></div>
        <div style="position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent 0%,#d63d2f 35%,#e8a020 65%,transparent 100%)"></div>
    </div>

    <div class="relative z-10 flex-1 grid grid-cols-1 lg:grid-cols-[1fr_400px]">

        <!-- Left: hero text + stats -->
        <div class="flex flex-col justify-center px-6 md:px-12 py-16 lg:py-20">
            <div class="fade-up mb-6" style="animation-delay:0.05s">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-6 h-px bg-hot"></div>
                    <span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Property Investigation — Wollongong NSW</span>
                    <span class="text-[0.48rem] tracking-[0.12em] uppercase text-paper/22 border border-paper/10 px-2 py-0.5">Filed: 3 March 2026</span>
                </div>
                <h1 class="font-display leading-[0.85] tracking-wide glitch" data-text="ILLAWARRA STRATA" style="font-size:clamp(3.2rem,9vw,7rem)">ILLAWARRA STRATA</h1>
                <h1 class="font-display leading-[0.85] tracking-wide text-hot" style="font-size:clamp(3.2rem,9vw,7rem)">MANAGEMENT</h1>
                <div class="w-24 h-[2px] bg-hot mt-5 mb-5"></div>
                <p class="font-serif italic text-paper/45 leading-relaxed max-w-xl" style="font-size:clamp(1rem,2vw,1.2rem)">How a strata manager turned a paying lot owner into a Federal Court wind-up target — while the building crumbled around them and the books went dark.</p>
            </div>

            <div class="fade-up flex flex-wrap gap-2 mb-10" style="animation-delay:0.2s">
                <span class="evidence-tag" style="color:#d63d2f;border-color:#d63d2f">⚖ NCAT s.237 SSMA 2015</span>
                <span class="evidence-tag" style="color:#e8a020;border-color:#e8a020">📋 Federal Court TAD47/2025</span>
                <span class="evidence-tag" style="color:#7b5ea7;border-color:#7b5ea7">🏢 SP 93922 — Oxford On Crown</span>
            </div>

            <!-- 5-stat strip -->
            <div class="fade-up grid grid-cols-2 sm:grid-cols-5 gap-px bg-paper/[0.04]" style="animation-delay:0.32s">
                <div class="bg-ink px-4 py-5 text-center">
                    <div class="stat-number text-4xl text-hot mb-1">5</div>
                    <div class="text-[0.47rem] tracking-[0.12em] uppercase text-paper/28 leading-tight">Legal<br>Grounds</div>
                </div>
                <div class="bg-ink px-4 py-5 text-center">
                    <div class="stat-number text-4xl text-gold mb-1">$63K</div>
                    <div class="text-[0.47rem] tracking-[0.12em] uppercase text-paper/28 leading-tight">Lot 4<br>Balance</div>
                </div>
                <div class="bg-ink px-4 py-5 text-center">
                    <div class="stat-number text-4xl text-paper/55 mb-1">$8K</div>
                    <div class="text-[0.47rem] tracking-[0.12em] uppercase text-paper/28 leading-tight">Paid<br>Monthly</div>
                </div>
                <div class="bg-ink px-4 py-5 text-center">
                    <div class="stat-number text-4xl text-hot mb-1">2×</div>
                    <div class="text-[0.47rem] tracking-[0.12em] uppercase text-paper/28 leading-tight">Wind-Up<br>Petitions</div>
                </div>
                <div class="bg-ink px-4 py-5 text-center">
                    <div class="stat-number text-4xl text-sage mb-1">14</div>
                    <div class="text-[0.47rem] tracking-[0.12em] uppercase text-paper/28 leading-tight">Defect<br>Photos</div>
                </div>
            </div>
        </div>

        <!-- Right: case reference sidebar -->
        <div class="lg:border-l border-paper/[0.06] flex flex-col" style="background:rgba(8,8,8,0.72)">
            <div class="px-6 py-5 border-b border-paper/[0.06]">
                <div class="text-[0.47rem] tracking-[0.22em] uppercase text-hot mb-1">Active Proceedings</div>
                <div class="font-display text-base tracking-widest text-paper/60 mb-4">CASE REFERENCE</div>
                <div class="space-y-2.5">
                    <div class="border border-paper/[0.06] p-3.5">
                        <div class="text-[0.45rem] tracking-[0.18em] uppercase text-paper/22 mb-1.5">NCAT Application</div>
                        <div class="text-[0.68rem] text-paper/60 leading-relaxed">PSR Crown Investments Pty Ltd<br><span class="text-paper/35">v</span><br>The Owners — SP 93922</div>
                        <div class="text-[0.48rem] text-hot mt-1.5">Filed 3 March 2026</div>
                    </div>
                    <div class="border border-paper/[0.06] p-3.5">
                        <div class="text-[0.45rem] tracking-[0.18em] uppercase text-paper/22 mb-1.5">Federal Court</div>
                        <div class="text-[0.68rem] text-paper/60 leading-relaxed">TAD47/2025<br>First petition dismissed by consent 8 Oct 2025</div>
                        <div class="text-[0.48rem] text-gold mt-1.5">Second petition filed Feb 2026</div>
                    </div>
                </div>
            </div>

            <div class="px-6 py-5 border-b border-paper/[0.06]">
                <div class="text-[0.47rem] tracking-[0.22em] uppercase text-paper/22 mb-3">Key Parties</div>
                <div class="space-y-3">
                    <div class="flex gap-2.5 items-start">
                        <div class="w-1.5 h-1.5 rounded-full bg-sage mt-1.5 shrink-0"></div>
                        <div><div class="text-[0.6rem] text-paper/60">PSR Crown Investments Pty Ltd</div><div class="text-[0.5rem] text-paper/28">Robert Huang, Director — Lots 4 & 8</div></div>
                    </div>
                    <div class="flex gap-2.5 items-start">
                        <div class="w-1.5 h-1.5 rounded-full bg-hot mt-1.5 shrink-0"></div>
                        <div><div class="text-[0.6rem] text-paper/60">Wandah Allen-Taylor</div><div class="text-[0.5rem] text-paper/28">Illawarra Strata Management — Strata Manager</div></div>
                    </div>
                    <div class="flex gap-2.5 items-start">
                        <div class="w-1.5 h-1.5 rounded-full bg-hot mt-1.5 shrink-0"></div>
                        <div><div class="text-[0.6rem] text-paper/60">CCA Legal</div><div class="text-[0.5rem] text-paper/28">Stephen Ecob, Lauren Ikin — Debt Recovery</div></div>
                    </div>
                    <div class="flex gap-2.5 items-start">
                        <div class="w-1.5 h-1.5 rounded-full bg-gold mt-1.5 shrink-0"></div>
                        <div><div class="text-[0.6rem] text-paper/60">Graham Gordon</div><div class="text-[0.5rem] text-paper/28">Strata Committee Chairman — Levy notices redirected to him</div></div>
                    </div>
                </div>
            </div>

            <div class="px-6 py-5 flex-1">
                <div class="text-[0.47rem] tracking-[0.22em] uppercase text-paper/22 mb-3">The Property</div>
                <div class="border border-paper/[0.06] p-4 mb-4">
                    <div class="font-display text-xl tracking-wide text-paper/55">OXFORD ON CROWN</div>
                    <div class="text-[0.58rem] text-paper/35 mt-0.5">30 Burelli Street, Wollongong NSW 2500</div>
                    <div class="text-[0.5rem] text-paper/22 mt-0.5">Strata Plan 93922 · ABN: 64 673 362 665</div>
                </div>
                <p class="text-[0.6rem] text-paper/28 leading-relaxed">Lots 4 (Suite 5) and 8 (Suite 10) purchased 7 March 2022. Combined quarterly levies approximately $14,731. The Applicant has paid $4,000/month per lot consistently since acquisition — never missed a payment.</p>
            </div>

            <div class="px-6 py-4 border-t border-paper/[0.06]">
                <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold blink mb-2">NCAT Determination Pending</div>
                <div class="text-[0.55rem] text-paper/22 leading-relaxed">Urgent interim orders sought to stay Federal Court wind-up proceedings while NCAT determines whether to appoint a compulsory strata manager.</div>
            </div>
        </div>
    </div>
</section>


<!-- ══ INTRODUCTION ══ -->
<section class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(214,61,47,0.04) 0%,transparent 45%)">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_300px] gap-12">
            <div class="reveal">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-4 h-px bg-hot"></div>
                    <span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">The Investigation</span>
                </div>
                <h2 class="font-display leading-none tracking-wide mb-6" style="font-size:clamp(2.2rem,5vw,3.8rem)">PAYING EVERY MONTH.<br><span class="text-hot">FACING WIND-UP.</span></h2>
                <p class="font-serif italic text-paper/55 leading-relaxed mb-5" style="font-size:clamp(1rem,2vw,1.15rem)">"PSR Crown Investments has made $4,000 monthly payments on each lot without fail since March 2022. In return, the Owners Corporation's debt recovery agents have filed two winding-up petitions against them in the Federal Court — and loaded their account with over $63,000 in charges, the bulk of which are legal costs, not unpaid levies."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-4">The application before NCAT sets out five distinct grounds under section 237 of the Strata Schemes Management Act 2015. Together they describe a strata scheme in which common property is crumbling, committee members are occupying common property without authorisation, the strata roll has been manipulated to redirect levy notices to the committee chairman, debt recovery has escalated into two separate Federal Court winding-up petitions against a consistently paying owner, and requests for financial records have gone unanswered.</p>
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
            </div>
        </div>
    </div>
</section>


<!-- ══ GROUNDS ══ -->
<section id="grounds" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Five Grounds — s.237(3) SSMA 2015</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">THE CASE<br><span class="text-hot">AGAINST THEM</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">Five independent grounds, each sufficient alone. Together they describe a scheme whose management has comprehensively failed its lot owners.</p>
            </div>
            <div class="flex flex-wrap gap-2 max-w-sm">
                <span class="evidence-tag" style="color:#d63d2f;border-color:#d63d2f">📄 Statement of Grounds Verified</span>
                <span class="evidence-tag" style="color:#e8a020;border-color:#e8a020">⚖ Active NCAT Application</span>
            </div>
        </div>

        <div class="space-y-16">

            <!-- GROUND 1 -->
            <div class="story-chapter reveal">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-hot border border-hot/40 px-2 py-1">Ground 01 — s.106 SSMA</span>
                    <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Statutory Duty</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">THE BUILDING IS<br><span class="text-hot">FALLING APART.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Section 106 of the SSMA imposes a non-delegable duty on the Owners Corporation to properly maintain and keep in good and serviceable repair the common property of the scheme. Oxford On Crown is not being maintained. The photographic evidence is unambiguous."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">The application is supported by 14 photographs of common property at 30 Burelli Street. They document a building in sustained, ongoing physical deterioration — and a strata committee that has failed to address any of it.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 mb-6">
                    <div class="border border-hot/20 p-4" style="background:rgba(214,61,47,0.03)">
                        <div class="text-[0.47rem] tracking-[0.18em] uppercase text-hot mb-1.5">C-6 — Ceiling Hole</div>
                        <div class="text-[0.63rem] text-paper/50 leading-relaxed">Large hole in common area ceiling. Exposed structural beams visible. Live electrical wiring accessible. Unaddressed safety hazard.</div>
                    </div>
                    <div class="border border-hot/20 p-4" style="background:rgba(214,61,47,0.03)">
                        <div class="text-[0.47rem] tracking-[0.18em] uppercase text-hot mb-1.5">C-7, C-11 — Black Mould</div>
                        <div class="text-[0.63rem] text-paper/50 leading-relaxed">Severe black mould growth at internal wall and ceiling junction near atrium skylight. Active water penetration. Ongoing, unrepaired.</div>
                    </div>
                    <div class="border border-paper/[0.07] p-4">
                        <div class="text-[0.47rem] tracking-[0.18em] uppercase text-paper/28 mb-1.5">C-3 — Exposed Wiring</div>
                        <div class="text-[0.63rem] text-paper/50 leading-relaxed">Services cupboard: unsecured electrical conduits and exposed cabling. Compliance breach. Unremediated.</div>
                    </div>
                    <div class="border border-paper/[0.07] p-4">
                        <div class="text-[0.47rem] tracking-[0.18em] uppercase text-paper/28 mb-1.5">C-5 — Cracked Tiles</div>
                        <div class="text-[0.63rem] text-paper/50 leading-relaxed">Multiple cracked floor tiles across common area. Documented trip hazard. No remediation undertaken.</div>
                    </div>
                    <div class="border border-paper/[0.07] p-4">
                        <div class="text-[0.47rem] tracking-[0.18em] uppercase text-paper/28 mb-1.5">C-9 — Missing Ceiling Tiles</div>
                        <div class="text-[0.63rem] text-paper/50 leading-relaxed">Corridor ceiling: multiple missing tiles, void above exposed. Consistent neglect across multiple corridors.</div>
                    </div>
                    <div class="border border-paper/[0.07] p-4">
                        <div class="text-[0.47rem] tracking-[0.18em] uppercase text-paper/28 mb-1.5">C-1, C-2, C-12–14 — Grounds</div>
                        <div class="text-[0.63rem] text-paper/50 leading-relaxed">External planters stripped bare. Warped decking, deteriorated outdoor furniture, damaged glass doors. Building-wide external neglect.</div>
                    </div>
                </div>

                <div class="evidence-vault">
                    <div class="ev-header" onclick="toggleVault(this)">
                        <div class="flex items-center gap-2">
                            <span class="text-[0.48rem] tracking-[0.22em] uppercase text-hot">📁 Evidence Files</span>
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Annexure C · 14 Photographs of Common Property Disrepair</span>
                        </div>
                        <div class="flex items-center gap-3"><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">14 images</span><span class="ev-toggle">▼</span></div>
                    </div>
                    <div class="ev-body">
                        <div class="ev-file ef-hot"><div class="ev-icon ev-img">📷</div><div class="ev-meta"><div class="ev-name">annexure_C6_ceiling_hole_live_wiring.jpg</div><div class="ev-desc">Image · Common area ceiling — hole with exposed beams and live wiring · Unrepaired</div></div><span class="ev-cta">Lodged with NCAT →</span></div>
                        <div class="ev-file ef-hot"><div class="ev-icon ev-img">📷</div><div class="ev-meta"><div class="ev-name">annexure_C7_C11_black_mould_atrium.jpg</div><div class="ev-desc">Image · Severe black mould at wall/ceiling junction near skylight · Active water penetration</div></div><span class="ev-cta">Lodged with NCAT →</span></div>
                        <div class="ev-file ef-gold"><div class="ev-icon ev-img">📷</div><div class="ev-meta"><div class="ev-name">annexure_C3_exposed_electrical_conduits.jpg</div><div class="ev-desc">Image · Services cupboard — unsecured electrical conduits — compliance breach</div></div><span class="ev-cta">Lodged with NCAT →</span></div>
                        <div class="ev-file ef-gold"><div class="ev-icon ev-img">📷</div><div class="ev-meta"><div class="ev-name">annexure_C5_cracked_tiles_common_area.jpg</div><div class="ev-desc">Image · Multiple cracked floor tiles · Unremediated trip hazard · Common property</div></div><span class="ev-cta">Lodged with NCAT →</span></div>
                        <div class="ev-file ef-sage"><div class="ev-icon ev-img">📷</div><div class="ev-meta"><div class="ev-name">annexure_C9_missing_ceiling_tiles_corridor.jpg</div><div class="ev-desc">Image · Corridor — missing ceiling tiles exposing void above · Systemic neglect</div></div><span class="ev-cta">Lodged with NCAT →</span></div>
                        <div class="ev-file ef-sage"><div class="ev-icon ev-img">📷</div><div class="ev-meta"><div class="ev-name">annexure_C1_C2_C12_C14_external_grounds.jpg</div><div class="ev-desc">Images (×6) · Bare planters · Warped decking · Damaged furniture · External frontage</div></div><span class="ev-cta">Lodged with NCAT →</span></div>
                        <div class="ev-zip-bar">
                            <span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">Full photographic annexure — 14 images — lodged with NCAT 3 March 2026</span>
                            <button class="mv-dl-btn mv-dl-gold text-[0.48rem]" onclick="showToast('Annexure C — 14 photographs lodged with NCAT')">⬇ Annexure C</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- GROUND 2 -->
            <div class="story-chapter reveal" style="transition-delay:0.07s;border-left-color:rgba(232,160,32,0.15)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Ground 02 — Common Property</span>
                    <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Unauthorised Use</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">COMMITTEE MEMBERS.<br><span class="text-gold">USING COMMON PROPERTY. NO BY-LAW.</span></h3>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Common property belongs to all lot owners collectively. Any grant of exclusive use or occupation requires a special by-law passed at a duly convened general meeting of the Owners Corporation — a safeguard designed to prevent the committee from quietly conferring benefits on its own members at the expense of everyone else.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.48rem] tracking-[0.18em] uppercase text-paper/25 mb-2">What Should Have Happened</div>
                        <div class="space-y-1.5"><div class="text-[0.62rem] text-paper/40">→ Special by-law passed at general meeting</div><div class="text-[0.62rem] text-paper/40">→ All lot owners notified and given a vote</div><div class="text-[0.62rem] text-paper/40">→ Transparent resolution on the public record</div></div>
                    </div>
                    <div class="border border-hot/20 p-5" style="background:rgba(214,61,47,0.03)">
                        <div class="text-[0.48rem] tracking-[0.18em] uppercase text-hot mb-2">What Actually Happened</div>
                        <div class="space-y-1.5"><div class="text-[0.62rem] text-paper/40">→ No special by-law</div><div class="text-[0.62rem] text-paper/40">→ No general meeting resolution</div><div class="text-[0.62rem] text-paper/40">→ Benefit conferred on committee members at lot owners' expense</div></div>
                    </div>
                </div>
                <p class="text-[0.65rem] text-paper/32 leading-relaxed border-l-2 border-gold/30 pl-4">Legal authority: <em>Bischoff v Sahade [2015] NSWCATAP 135</em> — unauthorised conferral of benefit on committee members at the expense of lot owners is consistent with the scheme's management not functioning satisfactorily under s.237(3)(a).</p>
            </div>

            <!-- GROUND 3 -->
            <div class="story-chapter reveal" style="transition-delay:0.11s;border-left-color:rgba(123,94,167,0.2)">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7b5ea7;border-color:rgba(123,94,167,0.4)">Ground 03 — Strata Roll</span>
                    <span class="text-[0.5rem] tracking-[0.15em] uppercase text-paper/20">Manipulation</span>
                </div>
                <h3 class="font-display text-3xl tracking-wide mb-4 leading-tight">LEVY NOTICES REDIRECTED<br><span style="color:#7b5ea7">TO THE CHAIRMAN. WITHOUT CONSENT.</span></h3>
                <p class="font-serif italic text-paper/55 text-lg leading-relaxed mb-5">"Without the knowledge or consent of the Applicant, the address recorded for the Applicant's lots on the strata roll was altered. Levy notices and correspondence were directed to Graham Gordon — the chairman of the strata committee — rather than to the lot owner."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-6">The Owners Corporation is required by the SSMA to maintain an accurate strata roll and to issue levy notices to lot owners at their correct address. The purpose is fundamental: lot owners must know what they owe so they can pay. Redirecting that correspondence to a committee chairman — without the lot owner's knowledge — subverts that process entirely. It is exactly the mechanism by which a debt can be allowed to grow, silently, without the owner ever receiving a notice.</p>

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
                        <div class="flex items-center gap-2">
                            <span class="text-[0.48rem] tracking-[0.22em] uppercase" style="color:#7b5ea7">📁 Evidence Files</span>
                            <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Annexure D · Strata Roll Redirection Evidence</span>
                        </div>
                        <div class="flex items-center gap-3"><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">1 file</span><span class="ev-toggle">▼</span></div>
                    </div>
                    <div class="ev-body">
                        <div class="ev-file ef-violet"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_D_strata_roll_address_redirection.pdf</div><div class="ev-desc">PDF · Evidence of strata roll address alteration — levy notices redirected to Graham Gordon without lot owner consent</div></div><span class="ev-cta">Lodged with NCAT →</span></div>
                        <div class="ev-zip-bar"><span class="text-[0.48rem] tracking-[0.15em] uppercase text-paper/25">Evidence of strata roll manipulation — lodged NCAT 3 March 2026</span></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══ DEBT LOADING ══ -->
<section id="debt" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(214,61,47,0.06) 0%,transparent 55%)">
    <div class="max-w-6xl mx-auto">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Ground 04 — The Core Allegation</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">SYSTEMATIC<br><span class="text-hot">DEBT LOADING</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">A lot owner paying $4,000 per month on each lot, every month, for four years — ending up with a $63,000 debt, mostly from legal fees charged by the same lawyers pursuing them.</p>
            </div>
            <div class="flex flex-wrap gap-2 max-w-xs">
                <span class="evidence-tag" style="color:#d63d2f;border-color:#d63d2f">📋 Annexure A — Account Statements</span>
                <span class="evidence-tag" style="color:#e8a020;border-color:#e8a020">⚖ 2× Wind-Up Petitions</span>
            </div>
        </div>

        <!-- Stats strip -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-paper/[0.04] mb-14 reveal">
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-5xl text-hot mb-1">$63K</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Lot 4 balance</div><div class="text-[0.5rem] text-paper/18 mt-1">As at 2 March 2026</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-5xl text-gold mb-1">$6,978</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Wind-up filing fee</div><div class="text-[0.5rem] text-paper/18 mt-1">Charged to lot owner accounts</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-5xl text-paper/55 mb-1">$4K</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Per lot per month</div><div class="text-[0.5rem] text-paper/18 mt-1">Consistent. Never missed.</div></div>
            <div class="bg-ink px-6 py-6 text-center"><div class="stat-number text-5xl text-sage mb-1">0</div><div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Payments missed</div><div class="text-[0.5rem] text-paper/18 mt-1">March 2022 — present</div></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[1fr_340px] gap-12">
            <div>
                <div class="story-chapter reveal mb-10">
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">The account statements for Lot 4 (Annexure A1) tell a specific story. Between July 2023 and February 2026, CCA Legal charged the account with demand letters, processing fees, company searches, caveat searches, title searches, multiple Statements of Claim filed in the Local Court, Local Court judgments, Garnishee orders, NSW Strata S86 Demands, Corporations Act S509 Demands — and ultimately the winding-up petition filing fee itself, split at $3,489 per lot.</p>
                    <p class="text-[0.72rem] leading-relaxed text-paper/45 mb-5">Throughout this entire period, the $4,000 monthly payments kept arriving. The Statement of Grounds records payments as recently as 16 February 2026 — 15 days before the NCAT application was filed. The lot owner was not defaulting. They were being systematically loaded with costs by the very agents the Owners Corporation had engaged to pursue them.</p>
                    <p class="text-[0.65rem] text-paper/32 leading-relaxed border-l-2 border-hot/30 pl-4">Legal authority: <em>Hoare v The Owners – Strata Plan No. 73905 [2018] NSWCATCD 45</em> — initiating winding up proceedings against a lot owner making ongoing payments, whose balance is primarily inflated by legal costs charged by the Owners Corporation's own debt recovery agents, constitutes an improper and disproportionate exercise of the Owners Corporation's functions.</p>
                </div>

                <!-- CCA Cost Table -->
                <div class="reveal">
                    <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">CCA Legal Charges — Lot 4 Account (Selected Entries from Annexure A1)</div>
                    <div style="overflow-x:auto">
                        <table class="cost-table">
                            <thead>
                                <tr>
                                    <th style="width:95px">Date</th>
                                    <th>Description</th>
                                    <th style="text-align:right;width:90px">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td class="td-date">26 Jul 2023</td><td>CCA #426586: Demand Letter — Registered Mail</td><td class="td-amount">$77.00</td></tr>
                                <tr><td class="td-date">26 Jul 2023</td><td>Processing CCA invoice #426586</td><td class="td-amount">$33.00</td></tr>
                                <tr><td class="td-date">18 Nov 2024</td><td>CCA #481303: Demand Letter — Registered Mail</td><td class="td-amount">$77.00</td></tr>
                                <tr><td class="td-date">18 Nov 2024</td><td>Processing CCA invoice #481303</td><td class="td-amount">$33.00</td></tr>
                                <tr><td class="td-date">27 Jun 2025</td><td>CCA #510320: NSW Strata S86 Demand</td><td class="td-amount">$198.00</td></tr>
                                <tr><td class="td-date">11 Aug 2025</td><td>CCA #515451: Statement of Claim — Local Court</td><td class="td-amount">$1,502.00</td></tr>
                                <tr><td class="td-date">11 Aug 2025</td><td>CCA #515447: Title Search / Care Attention / Investigation</td><td class="td-amount">$154.00</td></tr>
                                <tr><td class="td-date">11 Aug 2025</td><td>CCA #515461: NSW Strata S86 Demand</td><td class="td-amount">$209.00</td></tr>
                                <tr><td class="td-date">21 Aug 2025</td><td>CCA #517131: Advice / Correspondence</td><td class="td-amount">$275.00</td></tr>
                                <tr><td class="td-date">10 Sep 2025</td><td>CCA #519893: Title Search / Investigation</td><td class="td-amount">$99.00</td></tr>
                                <tr><td class="td-date">10 Sep 2025</td><td>CCA #519897: Statement of Claim — Local Court</td><td class="td-amount">$997.40</td></tr>
                                <tr><td class="td-date">16 Sep 2025</td><td>CCA #520491: Garnishee Order — Local Court</td><td class="td-amount">$264.00</td></tr>
                                <tr><td class="td-date">16 Sep 2025</td><td>CCA #520489: Judgment — Local Court</td><td class="td-amount">$310.20</td></tr>
                                <tr><td class="td-date">28 Oct 2025</td><td>CCA #525493: Judgment — Local Court</td><td class="td-amount">$248.16</td></tr>
                                <tr><td class="td-date">28 Oct 2025</td><td>CCA #525495: Garnishee Order — Local Court</td><td class="td-amount">$264.00</td></tr>
                                <tr><td class="td-date">12 Nov 2025</td><td>CCA #527096: Company Search</td><td class="td-amount">$55.00</td></tr>
                                <tr><td class="td-date">12 Nov 2025</td><td>CCA #527097: NSW Strata S86 Demand</td><td class="td-amount">$209.00</td></tr>
                                <tr><td class="td-date">12 Nov 2025</td><td>CCA #527098: Caveat Search</td><td class="td-amount">$44.00</td></tr>
                                <tr><td class="td-date">17 Nov 2025</td><td>CCA #527072: S509 Demand — Corporations Act + Affidavit (½ split)</td><td class="td-amount">$313.50</td></tr>
                                <tr><td class="td-date">16 Dec 2025</td><td>Interest on arrears to 16/12/2025</td><td class="td-amount">$1,268.78</td></tr>
                                <tr><td class="td-date">06–09 Feb 2026</td><td>CCA #536264: Wind-Up Petition — Filing Fee + Instructions (½ split)</td><td class="td-amount">$3,489.00</td></tr>
                                <tr class="subtotal">
                                    <td colspan="2" class="text-[0.5rem] tracking-[0.12em] uppercase text-paper/28">Selected CCA Legal charges — Lot 4 (excludes unpaid levy amounts)</td>
                                    <td class="td-total">~$10,100+</td>
                                </tr>
                                <tr class="subtotal">
                                    <td colspan="2" class="text-[0.5rem] tracking-[0.12em] uppercase text-paper/28">Total Lot 4 balance — incl. levies + all fees + interest</td>
                                    <td class="td-total" style="color:#d63d2f">$63,332.85</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-[0.53rem] text-paper/22 mt-2 leading-relaxed">This table reflects charges on the Lot 4 account only. Lot 8 carries a separate balance of $6,388.03 as at 2 March 2026, after the $30,000 lump sum payment on 20 August 2025 and continued monthly payments.</p>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-4 reveal" style="transition-delay:0.1s">
                <div class="sticky top-24 space-y-4">
                    <div class="border border-hot/20 p-5" style="background:rgba(214,61,47,0.04)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-hot mb-3">Lot 4 — Balance Breakdown</div>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center py-1 border-b border-paper/[0.05]">
                                <span class="text-[0.6rem] text-paper/45">Administrative Fund</span>
                                <span class="text-[0.6rem] text-hot">$49,191.69</span>
                            </div>
                            <div class="flex justify-between items-center py-1 border-b border-paper/[0.05]">
                                <span class="text-[0.6rem] text-paper/45">Capital Works Fund</span>
                                <span class="text-[0.6rem] text-paper/45">$9,799.22</span>
                            </div>
                            <div class="flex justify-between items-center py-1 border-b border-paper/[0.05]">
                                <span class="text-[0.6rem] text-paper/45">Interest due</span>
                                <span class="text-[0.6rem] text-paper/45">$4,341.94</span>
                            </div>
                            <div class="flex justify-between items-center pt-2">
                                <span class="text-[0.62rem] text-paper/65 font-display tracking-wide">TOTAL (2 Mar 2026)</span>
                                <span class="font-display text-xl text-hot">$63,332.85</span>
                            </div>
                        </div>
                        <p class="text-[0.5rem] text-paper/22 mt-3 leading-relaxed">A substantial proportion of the Administrative Fund represents accumulated CCA Legal charges, not unpaid levies per se.</p>
                    </div>
                    <div class="border border-gold/20 p-5" style="background:rgba(232,160,32,0.025)">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-gold mb-2">Lot 8 — Balance</div>
                        <div class="flex justify-between items-center">
                            <span class="text-[0.6rem] text-paper/45">Total incl. interest</span>
                            <span class="font-display text-xl text-gold">$6,388.03</span>
                        </div>
                        <p class="text-[0.5rem] text-paper/22 mt-2">After $30,000 lump sum 20 Aug 2025 + continued $4K/month payments.</p>
                    </div>
                    <div class="border border-paper/[0.07] p-5">
                        <div class="text-[0.48rem] tracking-[0.2em] uppercase text-paper/22 mb-2">Ground 05 — Financial Records</div>
                        <p class="text-[0.6rem] text-paper/32 leading-relaxed">Despite paying over $8,000/month across both lots, the Applicant has never received proper receipts or explanations for multiple unexplained reallocations. The Lot 8 statement shows multiple 'allocation of unallocated money' and 'levy cancellation' entries on 21 March 2025 that have never been explained. Requests for clarification have been ignored — a breach of s.182 SSMA 2015.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Account statement vault -->
        <div class="mt-10 reveal">
            <div class="evidence-vault">
                <div class="ev-header" onclick="toggleVault(this)">
                    <div class="flex items-center gap-2">
                        <span class="text-[0.48rem] tracking-[0.22em] uppercase text-gold">📁 Evidence Files</span>
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Annexure A · Owner Account Statements · Lots 4 & 8 · Prepared by Wandah Allen-Taylor</span>
                    </div>
                    <div class="flex items-center gap-3"><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">2 files</span><span class="ev-toggle">▼</span></div>
                </div>
                <div class="ev-body">
                    <div class="ev-file ef-hot"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_A1_lot4_suite5_owner_account_02March2026.pdf</div><div class="ev-desc">PDF · 4 pages · Lot 4 (Suite 5) · SP 93922 · Balance $63,332.85 · Printed 02.03.2026 · Signed Wandah Allen-Taylor · Illawarra Strata Management</div></div><span class="ev-cta">Lodged with NCAT →</span></div>
                    <div class="ev-file ef-gold"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_A2_lot8_suite10_owner_account_02March2026.pdf</div><div class="ev-desc">PDF · 4 pages · Lot 8 (Suite 10) · SP 93922 · Balance $6,388.03 · Printed 02.03.2026 · Signed Wandah Allen-Taylor · Illawarra Strata Management</div></div><span class="ev-cta">Lodged with NCAT →</span></div>
                    <div class="ev-zip-bar">
                        <span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">Both statements prepared by Illawarra Strata Management and signed by Wandah Allen-Taylor — printed 02.03.2026</span>
                        <button class="mv-dl-btn mv-dl-gold text-[0.48rem]" onclick="showToast('Annexure A — Account Statements (Lots 4 & 8)')">⬇ Annexure A</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══ PAYMENT PLAN TIMELINE ══ -->
<section id="timeline" class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(42,157,78,0.03) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-14 pb-5 border-b border-paper/[0.06]">
            <div>
                <div class="flex items-center gap-3 mb-2"><div class="w-4 h-px bg-sage"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-sage">The Payment Plan Betrayal</span></div>
                <h2 class="font-display leading-none tracking-wide" style="font-size:clamp(2.8rem,7vw,5rem)">PAID $30,000.<br><span class="text-hot">SECOND PETITION FILED ANYWAY.</span></h2>
                <p class="font-serif italic text-paper/35 mt-3 max-w-xl leading-relaxed">The Applicant negotiated a payment plan in good faith, paid an immediate $30,000 lump sum, had the first petition dismissed by consent — then watched a second petition arrive five months later.</p>
            </div>
        </div>

        <div class="space-y-px mb-14 reveal">
            <div class="incident-row">
                <div><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">Aug 2025</div><div class="text-[0.44rem] text-paper/22 mt-0.5">First Petition</div></div>
                <div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">FIRST WIND-UP PETITION FILED — FEDERAL COURT TAD47/2025</div><div class="text-[0.57rem] text-paper/35 leading-relaxed">Petition filed against PSR Crown Investments by the Owners Corporation. Wind-up petition fee of $6,784 (Lot 8) charged to the lot account on or about 20 August 2025. Company faces dissolution despite consistent monthly payments.</div></div>
            </div>
            <div class="incident-row positive">
                <div><div class="text-[0.5rem] tracking-[0.15em] uppercase text-sage">20 Aug 2025</div><div class="text-[0.44rem] text-paper/22 mt-0.5">$30K Paid</div></div>
                <div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">$30,000 LUMP SUM PAID · PAYMENT PLAN AGREED</div><div class="text-[0.57rem] text-paper/35 leading-relaxed">Robert Huang pays $30,000 immediately to CCA Legal's Stephen Ecob. Written agreement reached: $8,000/month going forward, first instalment due by 20 September 2025. CCA confirms they will withdraw the winding-up application in exchange for the plan. Evidence at Annexure B.</div></div>
            </div>
            <div class="incident-row positive">
                <div><div class="text-[0.5rem] tracking-[0.15em] uppercase text-sage">Sep–Dec 2025</div><div class="text-[0.44rem] text-paper/22 mt-0.5">Plan Performed</div></div>
                <div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">ONGOING PAYMENTS ON BOTH LOTS — PLAN PERFORMED</div><div class="text-[0.57rem] text-paper/35 leading-relaxed">Payments recorded: 18 Sep, 19 Sep, 20 Oct, 31 Oct 2025, 17 Nov, 16 Dec 2025. Regular $4,000 payments continuing on both lots throughout. Applicant is actively honouring the plan.</div></div>
            </div>
            <div class="incident-row positive">
                <div><div class="text-[0.5rem] tracking-[0.15em] uppercase text-sage">8 Oct 2025</div><div class="text-[0.44rem] text-paper/22 mt-0.5">Dismissed</div></div>
                <div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">FIRST PETITION DISMISSED BY CONSENT — FEDERAL COURT 8:37AM AEDT</div><div class="text-[0.57rem] text-paper/35 leading-relaxed">Stamped Consent Orders received by Federal Court. Originating Process dismissed. PSR Crown pays Owners Corporation costs of $6,971. Both parties sign — Lauren Ikin for CCA Legal, Robert Huang for PSR Crown. Case TAD47/2025 concluded by consent. Evidenced at Annexure F.</div></div>
            </div>
            <div class="incident-row">
                <div><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">9 Feb 2026</div><div class="text-[0.44rem] text-paper/22 mt-0.5">Second Petition</div></div>
                <div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">SECOND WIND-UP PETITION FILED — LOTS 4 AND 8</div><div class="text-[0.57rem] text-paper/35 leading-relaxed">CCA #536264 processed 6–9 February 2026. Filing fee of $3,489 charged to each lot account ($6,978 total). Court proceedings filed on or about 11 March 2026. The Applicant paid $4,000 on Lot 8 on 9 February 2026 and $4,000 on Lot 4 on 16 February 2026 — payments made on the very days the petition fees were being charged to their accounts.</div></div>
            </div>
            <div class="incident-row">
                <div><div class="text-[0.5rem] tracking-[0.15em] uppercase text-hot">3 Mar 2026</div><div class="text-[0.44rem] text-paper/22 mt-0.5">NCAT Filed</div></div>
                <div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">NCAT APPLICATION LODGED — s.237 SSMA 2015</div><div class="text-[0.57rem] text-paper/35 leading-relaxed">PSR Crown Investments lodges application for appointment of compulsory strata managing agent, plus urgent interim orders to stay Federal Court proceedings. Signed by Robert Huang. Filed with supporting bundle of six annexures.</div></div>
            </div>
        </div>

        <!-- Payment plan evidence vault -->
        <div class="reveal">
            <div class="evidence-vault">
                <div class="ev-header" onclick="toggleVault(this)">
                    <div class="flex items-center gap-2">
                        <span class="text-[0.48rem] tracking-[0.22em] uppercase text-sage">📁 Evidence Files</span>
                        <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— Annexures B & F · Payment Plan Email Chain + Federal Court Consent Orders</span>
                    </div>
                    <div class="flex items-center gap-3"><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">3 files</span><span class="ev-toggle">▼</span></div>
                </div>
                <div class="ev-body">
                    <div class="ev-file ef-sage"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_B1_payment_plan_email_chain_20Aug2025.pdf</div><div class="ev-desc">PDF · Email chain 20 Aug 2025 · Robert Huang ↔ Stephen Ecob (CCA Legal) · $30,000 payment + $8K/month plan agreement</div></div><span class="ev-cta">Lodged with NCAT →</span></div>
                    <div class="ev-file ef-sage"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_B2_payment_receipt_30000_20Aug2025.pdf</div><div class="ev-desc">PDF · $30,000 payment receipt · PSR Crown Investments → SP 93922 · 20 August 2025</div></div><span class="ev-cta">Lodged with NCAT →</span></div>
                    <div class="ev-file ef-gold"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_F_consent_orders_TAD47_2025_8Oct2025.pdf</div><div class="ev-desc">PDF · Federal Court of Australia · TAD47/2025 · Consent Orders stamped 8 Oct 2025 08:37 AEDT · Originating Process dismissed · Costs $6,971</div></div><span class="ev-cta">Lodged with NCAT →</span></div>
                    <div class="ev-zip-bar">
                        <span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">First petition dismissed by consent 8 Oct 2025 — second petition filed against the same paying lot owner Feb 2026</span>
                        <button class="mv-dl-btn mv-dl-gold text-[0.48rem]" onclick="showToast('Annexures B & F — Payment Plan + Consent Orders')">⬇ Annexures B & F</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══ GROUNDS 2 + 5 ══ -->
<section class="py-20 px-5 md:px-10 border-t border-paper/[0.05]">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <div class="story-chapter reveal" style="border-left-color:rgba(232,160,32,0.2)">
                <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase text-gold border border-gold/40 px-2 py-1">Ground 02 — Recap</span></div>
                <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">COMMON PROPERTY<br><span class="text-gold">USED WITHOUT AUTHORITY</span></h3>
                <p class="text-[0.68rem] leading-relaxed text-paper/42 mb-4">Committee members have been permitted to occupy or use common property of the Scheme without a special by-law or resolution at a general meeting. This is an improper conferral of benefit on committee members at the expense of all lot owners. Under <em>Bischoff v Sahade [2015] NSWCATAP 135</em>, this is exactly the pattern of decision-making that s.237 is designed to correct.</p>
                <div class="border border-gold/15 p-4" style="background:rgba(232,160,32,0.025)">
                    <div class="text-[0.47rem] tracking-[0.18em] uppercase text-gold mb-1.5">What s.237 Corrects</div>
                    <p class="text-[0.6rem] text-paper/32">When committee members benefit from common property without authorisation, and the Owners Corporation fails to stop it, the management is not functioning satisfactorily within the meaning of s.237(3)(a). NCAT is empowered to remove that management entirely.</p>
                </div>
            </div>
            <div class="story-chapter reveal" style="transition-delay:0.1s;border-left-color:rgba(123,94,167,0.2)">
                <div class="flex items-center gap-3 mb-4"><span class="text-[0.5rem] tracking-[0.2em] uppercase border px-2 py-1" style="color:#7b5ea7;border-color:rgba(123,94,167,0.4)">Ground 05 — Financial Records</span></div>
                <h3 class="font-display text-2xl tracking-wide mb-3 leading-tight">REQUESTS IGNORED.<br><span style="color:#7b5ea7">RECORDS UNEXPLAINED.</span></h3>
                <p class="text-[0.68rem] leading-relaxed text-paper/42 mb-4">Section 182 of the SSMA gives lot owners the right to inspect Owners Corporation records. The Applicant has been paying over $8,000 a month and has never received proper receipts or a clear explanation of how those payments are being allocated. The Lot 8 account shows multiple unexplained 'allocation of unallocated money' and 'levy cancellation' entries on 21 March 2025. Written requests for clarification have been ignored entirely.</p>
                <div class="space-y-2">
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs mt-0.5 shrink-0">✗</span><p class="text-[0.6rem] text-paper/35">No receipts confirming correct allocation of $8,000/month payments</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs mt-0.5 shrink-0">✗</span><p class="text-[0.6rem] text-paper/35">Unexplained account adjustments — 21 Mar 2025, Lot 8 (multiple entries)</p></div>
                    <div class="flex gap-2 items-start"><span class="text-hot text-xs mt-0.5 shrink-0">✗</span><p class="text-[0.6rem] text-paper/35">Written requests for clarification sent and ignored — evidenced in Annexure E</p></div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══ RELIEF SOUGHT ══ -->
<section class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(42,157,78,0.03) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center gap-3 mb-8"><div class="w-8 h-px bg-sage"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-sage">What the Applicant Is Asking For</span><div class="w-8 h-px bg-sage"></div></div>
        <h2 class="font-display leading-none tracking-wide mb-10" style="font-size:clamp(2.5rem,6vw,4.5rem)">RELIEF<br><span class="text-sage">SOUGHT</span></h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-14 reveal">
            <div class="border border-sage/25 p-6" style="background:rgba(42,157,78,0.03)">
                <div class="text-[0.47rem] tracking-[0.2em] uppercase text-sage mb-3">Primary Relief — s.237 SSMA</div>
                <div class="font-display text-2xl tracking-wide text-sage mb-3">COMPULSORY MANAGER</div>
                <p class="text-[0.65rem] text-paper/40 leading-relaxed mb-4">An order appointing a licensed strata managing agent to exercise all functions of the Owners Corporation. The Applicant does not nominate a specific replacement and asks the Tribunal to appoint a suitable licensed agent on terms it considers appropriate as to remuneration and scope of functions.</p>
                <div class="text-[0.5rem] tracking-[0.14em] uppercase text-sage/55 border border-sage/20 px-3 py-1.5 inline-block">Relies on s.237(3)(a) and s.237(3)(c) SSMA</div>
            </div>
            <div class="border border-hot/25 p-6" style="background:rgba(214,61,47,0.03)">
                <div class="text-[0.47rem] tracking-[0.2em] uppercase text-hot mb-3">Urgent Interim Relief</div>
                <div class="font-display text-2xl tracking-wide text-hot mb-3">STAY THE PROCEEDINGS</div>
                <p class="text-[0.65rem] text-paper/40 leading-relaxed mb-3">An order staying or suspending any further steps in the Federal Court wind-up proceedings pending NCAT determination. If a wind-up order is made before NCAT decides, PSR Crown Investments faces dissolution — harm that cannot be undone by any later NCAT order.</p>
                <p class="text-[0.65rem] text-paper/40 leading-relaxed">An order restraining the Owners Corporation and its officers — including Graham Gordon — from taking any further adverse action against the Applicant pending determination.</p>
            </div>
        </div>

        <!-- 5 Grounds Summary -->
        <div class="reveal">
            <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-4">Five Grounds — At a Glance</div>
            <div class="space-y-px">
                <div class="flex gap-4 p-4 border border-paper/[0.05] items-start" style="background:rgba(4,4,4,0.5)">
                    <div class="font-display text-hot text-2xl w-8 shrink-0 leading-none mt-0.5">01</div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Failure to Maintain Common Property — s.106 SSMA</div><div class="text-[0.55rem] text-paper/30">14 photographs. Ceiling holes with live wiring. Severe black mould. Cracked tiles. Exposed electrical conduits. Neglected grounds. Ongoing, unaddressed.</div></div>
                </div>
                <div class="flex gap-4 p-4 border border-paper/[0.05] items-start" style="background:rgba(4,4,4,0.5)">
                    <div class="font-display text-gold text-2xl w-8 shrink-0 leading-none mt-0.5">02</div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Unauthorised Use of Common Property by Committee Members</div><div class="text-[0.55rem] text-paper/30">No special by-law. No general meeting resolution. Improper benefit conferred on committee members at lot owners' expense.</div></div>
                </div>
                <div class="flex gap-4 p-4 border border-paper/[0.05] items-start" style="background:rgba(4,4,4,0.5)">
                    <div class="font-display text-2xl w-8 shrink-0 leading-none mt-0.5" style="color:#7b5ea7">03</div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Manipulation of Strata Roll — Levy Notices Redirected Without Consent</div><div class="text-[0.55rem] text-paper/30">Lot owner's address altered on strata roll. Levy notices sent to committee chairman Graham Gordon. Owner deprived of notice of alleged arrears.</div></div>
                </div>
                <div class="flex gap-4 p-4 border border-paper/[0.05] items-start" style="background:rgba(4,4,4,0.5)">
                    <div class="font-display text-hot text-2xl w-8 shrink-0 leading-none mt-0.5">04</div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Systematic Debt Loading and Wind-Up Proceedings Against an Active Payer</div><div class="text-[0.55rem] text-paper/30">$4,000/month per lot, every month, since 2022. Payment plan agreed, $30,000 paid, first petition dismissed. Second petition filed Feb 2026. Lot 4 balance $63,332.85 — majority CCA Legal fees, not unpaid levies.</div></div>
                </div>
                <div class="flex gap-4 p-4 border border-paper/[0.05] items-start" style="background:rgba(4,4,4,0.5)">
                    <div class="font-display text-2xl w-8 shrink-0 leading-none mt-0.5" style="color:#7b5ea7">05</div>
                    <div><div class="text-[0.6rem] font-display tracking-wide text-paper/65 mb-0.5">Failure to Provide Financial Records and Receipts — s.182 SSMA</div><div class="text-[0.55rem] text-paper/30">No proper receipts. Unexplained account adjustments. Requests for clarification ignored. A paying owner kept entirely in the dark about how their money is being applied.</div></div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══ FULL EVIDENCE VAULT ══ -->
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
                <div class="flex items-center gap-2">
                    <span class="text-[0.48rem] tracking-[0.22em] uppercase text-gold">📁 Complete Lodgement Bundle</span>
                    <span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">— NCAT Application · PSR Crown Investments v The Owners SP 93922 · 3 March 2026</span>
                </div>
                <div class="flex items-center gap-3"><span class="text-[0.46rem] tracking-[0.15em] uppercase text-paper/25">9 documents</span><span class="ev-toggle">▼</span></div>
            </div>
            <div class="ev-body">
                <div class="ev-file ef-hot"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">ncat_application_form_strata_PSR_Crown_3March2026.pdf</div><div class="ev-desc">PDF · NCAT Application Form · s.237 SSMA 2015 · Signed Robert Huang · Filed 3 March 2026</div></div><span class="ev-cta">Application →</span></div>
                <div class="ev-file ef-hot"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">statement_of_grounds_PSR_Crown_SP93922_3March2026.pdf</div><div class="ev-desc">PDF · Statement of Grounds · 5 grounds · Parts A–F · Signed Robert Huang · Filed 3 March 2026</div></div><span class="ev-cta">Core Document →</span></div>
                <div class="ev-file ef-gold"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_A1_lot4_owner_account_statement_02March2026.pdf</div><div class="ev-desc">PDF · Annexure A1 · Lot 4 (Suite 5) Owner Account Statement · Balance $63,332.85 · Signed Wandah Allen-Taylor</div></div><span class="ev-cta">Annexure A1 →</span></div>
                <div class="ev-file ef-gold"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_A2_lot8_owner_account_statement_02March2026.pdf</div><div class="ev-desc">PDF · Annexure A2 · Lot 8 (Suite 10) Owner Account Statement · Balance $6,388.03 · Signed Wandah Allen-Taylor</div></div><span class="ev-cta">Annexure A2 →</span></div>
                <div class="ev-file ef-sage"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_B_payment_plan_email_chain_and_receipt_20Aug2025.pdf</div><div class="ev-desc">PDF · Annexure B · Payment plan email chain (Robert Huang ↔ Stephen Ecob) + $30,000 receipt · 20 August 2025</div></div><span class="ev-cta">Annexure B →</span></div>
                <div class="ev-file ef-hot"><div class="ev-icon ev-img">📷</div><div class="ev-meta"><div class="ev-name">annexure_C_photographs_common_property_disrepair_x14.pdf</div><div class="ev-desc">Images · Annexure C · 14 photographs · Ceiling holes · Black mould · Cracked tiles · Exposed wiring · Neglected grounds</div></div><span class="ev-cta">Annexure C →</span></div>
                <div class="ev-file ef-violet"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_D_strata_roll_address_redirection_evidence.pdf</div><div class="ev-desc">PDF · Annexure D · Evidence of strata roll manipulation — levy notices redirected to Graham Gordon without lot owner consent</div></div><span class="ev-cta">Annexure D →</span></div>
                <div class="ev-file ef-violet"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_E_ignored_correspondence_OC.pdf</div><div class="ev-desc">PDF · Annexure E · Copies of emails and letters to the Owners Corporation that were ignored — financial record requests, clarification requests</div></div><span class="ev-cta">Annexure E →</span></div>
                <div class="ev-file ef-sage"><div class="ev-icon ev-pdf">PDF</div><div class="ev-meta"><div class="ev-name">annexure_F_federal_court_TAD47_2025_consent_orders_and_proceedings.pdf</div><div class="ev-desc">PDF · Annexure F · Federal Court TAD47/2025 · Consent Orders 8 Oct 2025 + Second petition filed c.11 March 2026</div></div><span class="ev-cta">Annexure F →</span></div>
                <div class="ev-zip-bar">
                    <span class="text-[0.48rem] tracking-[0.15em] uppercase text-gold/60">Complete NCAT lodgement bundle — 9 documents — PSR Crown Investments v The Owners SP 93922 — Filed 3 March 2026</span>
                    <button class="mv-dl-btn mv-dl-gold text-[0.48rem]" onclick="showToast('Complete NCAT bundle — 9 documents lodged 3 March 2026')">⬇ Full Bundle</button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══ WHAT THIS MEANS ══ -->
<section class="py-20 px-5 md:px-10 border-t border-paper/[0.05]" style="background:linear-gradient(180deg,rgba(214,61,47,0.04) 0%,transparent 50%)">
    <div class="max-w-6xl mx-auto">
        <div class="max-w-3xl">
            <div class="flex items-center gap-3 mb-8"><div class="w-8 h-px bg-hot"></div><span class="text-[0.55rem] tracking-[0.3em] uppercase text-hot">Why This Matters</span></div>
            <h2 class="font-display leading-none tracking-wide mb-8" style="font-size:clamp(2.5rem,6vw,4rem)">THIS IS NOT<br><span class="text-hot">A DISPUTE ABOUT MONEY.</span></h2>
            <div class="space-y-6 reveal">
                <p class="font-serif italic text-paper/55 leading-relaxed" style="font-size:clamp(1rem,2vw,1.15rem)">"The Applicant has paid consistently for four years. They are not trying to avoid their levy obligations — they are trying to understand why those consistent payments have produced a $63,000 debt, two Federal Court winding-up petitions, a building full of unrepaired defects, and a strata roll that sent their correspondence to the committee chairman without their knowledge or consent."</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">Under section 237 of the SSMA, the question for NCAT is not whether the Applicant owes money. It is whether the Owners Corporation's management has broken down to the point where it should be replaced. The five grounds in this application, taken individually or together, describe precisely that breakdown.</p>
                <p class="text-[0.72rem] leading-relaxed text-paper/45">The three cases cited in the Statement of Grounds — <em>Maple v The Owners – Strata Plan No 8950 [2021]</em>, <em>Kahn v Owners Corporation SP 2010 [2017]</em>, and <em>Hoare v The Owners – Strata Plan No. 73905 [2018]</em> — establish that this pattern of sustained, systematic dysfunction across multiple years is precisely the scenario that compulsory management is designed to address.</p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-8">
                    <div class="border border-hot/20 p-5 text-center" style="background:rgba(214,61,47,0.03)">
                        <div class="font-display text-3xl text-hot mb-1">3+</div>
                        <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Years of dysfunction</div>
                        <div class="text-[0.5rem] text-paper/18 mt-0.5">Not an isolated incident</div>
                    </div>
                    <div class="border border-paper/[0.07] p-5 text-center">
                        <div class="font-display text-3xl text-gold mb-1">3</div>
                        <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Cited authorities</div>
                        <div class="text-[0.5rem] text-paper/18 mt-0.5">All directly on point</div>
                    </div>
                    <div class="border border-paper/[0.07] p-5 text-center">
                        <div class="font-display text-3xl text-sage mb-1">5</div>
                        <div class="text-[0.52rem] tracking-[0.15em] uppercase text-paper/28">Independent grounds</div>
                        <div class="text-[0.5rem] text-paper/18 mt-0.5">Each sufficient alone</div>
                    </div>
                </div>
            </div>
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
            <div class="text-[0.6rem] text-paper/28">PSR Crown Investments Pty Ltd v The Owners — SP 93922</div>
            <div class="text-[0.5rem] text-paper/15 mt-0.5">NCAT Application · s.237 SSMA 2015 · Filed 3 March 2026</div>
        </div>
        <div class="text-right">
            <div class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/18 mb-1">Strata Scheme</div>
            <div class="text-[0.6rem] text-paper/28">Oxford On Crown · 30 Burelli St, Wollongong</div>
            <div class="text-[0.5rem] text-paper/15 mt-0.5">SP 93922 · ABN 64 673 362 665</div>
        </div>
    </div>
</footer>


<!-- ══ SCRIPTS ══ -->
<script>
function toggleVault(header) {
    var body = header.nextElementSibling;
    var toggle = header.querySelector('.ev-toggle');
    var isOpen = body.classList.contains('open');
    body.classList.toggle('open', !isOpen);
    if (toggle) toggle.classList.toggle('open', !isOpen);
}

function showToast(msg) {
    var t = document.createElement('div');
    t.style.cssText = 'position:fixed;bottom:1.5rem;left:50%;transform:translateX(-50%);background:rgba(8,8,8,0.95);border:1px solid rgba(232,160,32,0.35);color:#e8a020;font-family:"DM Mono",monospace;font-size:0.55rem;letter-spacing:0.15em;text-transform:uppercase;padding:0.6rem 1.4rem;z-index:9999;pointer-events:none;transition:opacity 0.3s;white-space:nowrap';
    t.textContent = msg;
    document.body.appendChild(t);
    setTimeout(function () { t.style.opacity = '0'; setTimeout(function () { t.remove(); }, 300); }, 2800);
}

var obs = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) { if (e.isIntersecting) e.target.classList.add('in'); });
}, { threshold: 0.07 });
document.querySelectorAll('.reveal').forEach(function (el) { obs.observe(el); });
</script>
</body>
</html>