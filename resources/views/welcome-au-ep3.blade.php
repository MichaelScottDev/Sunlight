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
