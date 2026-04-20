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
    </style>
</head>
<body class="bg-ink text-paper font-mono overflow-x-hidden" style="background-color:#0c0804;background-image:linear-gradient(160deg,rgba(201,138,16,0.07) 0%,transparent 40%,rgba(61,122,74,0.03) 100%)">

<!-- ══ NAV ══ -->
<nav class="fixed top-0 left-0 right-0 z-50 flex justify-between items-center px-5 py-3 bg-ink/95 backdrop-blur-md border-b border-paper/[0.06]">
    <div class="flex items-center gap-4">
        <a href="/" class="font-display text-2xl tracking-widest">SUNLIGHT<span class="text-hot">.QUEST</span></a>
        <span class="hidden sm:block text-[0.52rem] tracking-[0.2em] uppercase text-paper/20 border-l border-paper/10 pl-4">Investigative Vlog Series</span>
    </div>
    <div class="flex items-center gap-3">
        <div class="nav-dropdown hidden md:block">
            <button class="text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors border border-paper/15 hover:border-paper/30 px-3 py-1.5">Episodes ▾</button>
            <div class="nav-dropdown-menu">
                <span class="nav-group-label">All Episodes</span>
                <a href="/" class="nav-accent-hot">← Episode 1 — The Beginning</a>
                <a href="/episode-2" class="nav-accent-violet">← Episode 2 — The Network</a>
                <a href="/episode-3" class="nav-accent-gold" style="color:#c98a10">⬤ Episode 3 — The Compliance Machine</a>
            </div>
        </div>
        <span class="text-[0.52rem] tracking-[0.18em] uppercase border px-3 py-1.5" style="border-color:rgba(201,138,16,0.6);color:#c98a10">⬤ EP.03</span>
    </div>
</nav>

<!-- ══ AU STRIPE ══ -->
<div style="position:fixed;top:56px;left:0;right:0;z-index:49;height:2px;background:linear-gradient(90deg,#c1440e 0%,#c98a10 35%,#3d7a4a 65%,#c1440e 100%);opacity:0.55;pointer-events:none"></div>


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
                    <span class="text-[0.55rem] tracking-[0.28em] uppercase" style="color:#c98a10">Workforce Australia Investigation</span>
                    <span class="text-[0.5rem] tracking-[0.14em] uppercase text-paper/22 border border-paper/10 px-2 py-0.5">Murwillumbah NSW</span>
                </div>
                <h1 class="font-display leading-[0.88] tracking-wide" style="font-size:clamp(2.8rem,7vw,5.5rem)">THE COMPLIANCE<br><span style="color:#c98a10">MACHINE.</span></h1>
                <p class="font-serif italic text-paper/40 mt-3 leading-relaxed max-w-lg" style="font-size:clamp(0.9rem,2vw,1.15rem)">Private employment providers, compliance mechanisms, and the cost of asking questions.</p>
            </div>
            <div class="fade-up" style="animation-delay:0.25s">
                <div class="flex items-center gap-3 mb-2">
                    <span class="text-[0.52rem] tracking-[0.2em] uppercase" style="color:rgba(201,138,16,0.6)">▶ Video — Coming Soon</span>
                </div>
                <div class="w-full aspect-video border" style="border-color:rgba(201,138,16,0.2);background:#060606;position:relative;display:flex;align-items:center;justify-content:center;overflow:hidden">
                    <div class="scanlines" style="position:absolute;inset:0;opacity:0.5"></div>
                    <div style="text-align:center;position:relative;z-index:2">
                        <div style="width:60px;height:60px;border:2px solid rgba(201,138,16,0.4);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto">
                            <span style="color:rgba(201,138,16,0.5);font-size:1.2rem;margin-left:3px">▶</span>
                        </div>
                        <div style="margin-top:0.75rem;font-size:0.48rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(245,234,212,0.2);font-family:'DM Mono',monospace">Episode 3 — Video Pending Upload</div>
                    </div>
                    <div style="position:absolute;bottom:0.75rem;left:0;right:0;text-align:center">
                        <div style="font-size:0.44rem;letter-spacing:0.15em;text-transform:uppercase;color:rgba(201,138,16,0.25);font-family:'DM Mono',monospace">sunlight.quest · season 1 · ep.03</div>
                    </div>
                </div>
            </div>
            <!-- Chapter nav below video — add <a> entries here as sections are built -->
            <div class="fade-up mt-5 border border-paper/[0.07]" style="animation-delay:0.35s;background:rgba(12,8,4,0.7)">
                <div class="px-4 py-2 border-b border-paper/[0.06]">
                    <span class="text-[0.46rem] tracking-[0.22em] uppercase text-paper/22">Episode 3 — Chapters</span>
                </div>
                <div class="flex flex-wrap gap-0">
                    <!-- SECTION PLACEHOLDER — replace with real chapter links -->
                    <div class="flex items-center gap-2 px-4 py-3 opacity-30">
                        <span class="font-display text-[0.62rem]" style="color:#c98a10">01</span>
                        <div>
                            <div class="text-[0.6rem] text-paper/55 leading-none mb-0.5">Chapters coming soon</div>
                            <div class="text-[0.47rem] text-paper/22 tracking-wider">In production</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:border-l border-paper/[0.06] flex flex-col" style="background:rgba(12,8,4,0.6)">
            <div class="px-6 py-6 border-b border-paper/[0.06]">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">This Episode</div>
                <p class="text-[0.72rem] leading-relaxed text-paper/50 mb-5">Documenting my experience with Tursa Employment & Training in Murwillumbah — a private Workforce Australia provider. In-person application requirements, payment suspension anomalies, and the Managed Service Plan that followed a camera.</p>
                <div class="grid grid-cols-3 gap-2 text-center">
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl" style="color:#c98a10">TCF</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Framework</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-hot">MSP</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Restriction</div></div>
                    <div class="border border-paper/[0.07] py-2 px-1"><div class="font-display text-2xl text-sage">NSW</div><div class="text-[0.48rem] tracking-[0.14em] uppercase text-paper/22">Region</div></div>
                </div>
            </div>
            <div class="px-5 py-4 border-b border-paper/[0.06] flex-1">
                <div class="text-[0.5rem] tracking-[0.2em] uppercase text-paper/22 mb-3">Episode Chapters</div>
                <!-- CHAPTER LIST PLACEHOLDER — add entries here as sections are built -->
                <div class="border border-paper/[0.06] p-4" style="background:rgba(201,138,16,0.03)">
                    <div class="text-[0.48rem] tracking-[0.2em] uppercase blink mb-1" style="color:#c98a10">⬤ In Production</div>
                    <div class="text-[0.58rem] text-paper/28 leading-relaxed">Chapters being prepared. Evidence being compiled.</div>
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
</script>
</body>
</html>
