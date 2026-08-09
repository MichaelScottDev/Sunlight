<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sunlight.Quest — Episode 7</title>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="Sunlight.Quest"/>
    <meta property="og:title" content="Sunlight.Quest — Episode 7"/>
    <meta property="og:description" content="Sunlight.Quest — Investigative Vlog Series."/>
    <meta property="og:url" content="https://sunlight.quest/episode-7"/>
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
        .scanlines{background:repeating-linear-gradient(0deg,transparent,transparent 2px,rgba(0,0,0,0.03) 2px,rgba(0,0,0,0.03) 4px);pointer-events:none}
        .story-chapter{border-left:2px solid rgba(245,234,212,0.08);padding-left:1.5rem;transition:border-color 0.3s ease}.story-chapter:hover{border-left-color:rgba(201,138,16,0.4)}
    </style>
</head>
<body class="bg-ink text-paper font-mono antialiased">

<!-- ══ NAV ══ -->
<nav class="fixed top-0 left-0 right-0 z-50 flex justify-between items-center px-5 py-3 bg-ink/95 backdrop-blur-md border-b border-paper/[0.06]">
    <div class="flex items-center gap-4">
        <a href="/" class="font-display text-2xl tracking-widest">SUNLIGHT<span class="text-hot">.QUEST</span></a>
        <span class="hidden sm:block text-[0.52rem] tracking-[0.2em] uppercase text-paper/20 border-l border-paper/10 pl-4">Investigative Vlog Series</span>
    </div>
    <div class="flex items-center gap-3">
        <a href="/episode-6" class="hidden md:block text-[0.55rem] tracking-[0.2em] uppercase text-paper/35 hover:text-paper transition-colors border border-paper/15 hover:border-gold/50 px-3 py-1.5 transition-all">← Episode 6</a>
        <a href="/episode-6" title="Go to Episode 6" aria-label="Go to Episode 6" class="flex md:hidden items-center gap-1 px-2.5 h-8 border font-display text-[0.6rem] tracking-widest" style="border-color:rgba(201,138,16,0.5);color:#c98a10">‹ EP6</a>
        <span class="text-[0.52rem] tracking-[0.18em] uppercase border px-3 py-1.5 blink" style="border-color:rgba(201,138,16,0.6);color:#c98a10">⬤ EP.07</span>
    </div>
</nav>

<!-- ══ AU STRIPE ══ -->
<div style="position:fixed;top:56px;left:0;right:0;z-index:49;height:2px;background:linear-gradient(90deg,#c98a10 0%,#c1440e 35%,#c98a10 65%,#3d7a4a 100%);opacity:0.55;pointer-events:none"></div>

<!-- ══════════════════════════════════════════════════════════════
     SECTION 1 · HEADER + INTRO
══════════════════════════════════════════════════════════════ -->
<section class="bg-ink px-6 py-16 md:py-20 lg:px-8 pt-28">
  <div class="mx-auto max-w-4xl">
    <div class="border-b border-line pb-8">
      <p class="font-mono kicker text-xs uppercase text-gold">Exhibit · The Sequestration Order</p>
      <h2 class="font-display h-display text-5xl uppercase text-paper md:text-7xl">
        A Simple Debt Reveals a Sinister Asian Conspiracy
      </h2>
      <p class="mt-3 font-quote text-2xl italic text-gold md:text-3xl">
        To Step on the White Australian Man's Face
      </p>
    </div>

    <div class="mt-10 space-y-8">
      <figure class="rounded-lg border border-line bg-surface overflow-hidden">
        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/cheng_deng.png" alt="Cheng Deng — LinkedIn screenshot" class="w-full h-auto object-cover max-h-[520px]" loading="lazy" />
        <figcaption class="border-t border-line px-4 py-3 font-mono text-xs uppercase tracking-wider text-muted">
          Exhibit · Cheng Deng (LinkedIn)
        </figcaption>
      </figure>

      <div class="rounded-lg border border-line bg-surface overflow-hidden">
        <div class="border-b border-line px-4 py-3">
          <p class="font-mono text-xs uppercase tracking-wider text-gold">Exhibit · Creditor’s Petition</p>
          <p class="mt-1 font-serif text-sm text-paper">Cheng Deng owes money and someone is going to have to debt collect...</p>
        </div>
        <div class="bg-surface-2">
          <embed src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/cheng_deng_creditors_petition.pdf" type="application/pdf" class="w-full" style="height: 720px;" />
        </div>
        <div class="border-t border-line px-4 py-2 text-center">
          <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/cheng_deng_creditors_petition.pdf" target="_blank" rel="noopener noreferrer" class="font-mono text-[10px] uppercase tracking-widest text-muted hover:text-gold transition-colors">
            Open PDF in new tab ↗
          </a>
        </div>
      </div>
    </div>

    <div class="mt-10 space-y-6 font-serif text-lg leading-relaxed text-muted md:text-xl">
      <p>
        It all started with a simple debt... Cheng Deng owed Adam Watson some money and Mr. Watson took Cheng Deng to Civil Court to get it back — and he got a sequestration Order. Yours truly helped him lodge documents to do so.
      </p>
      <p>
        Little did he know Cheng Deng was part of an Asian conspiracy to step on the white man's face which roped in corrupt police and prosecutors conspiring to step on the white man's face.
      </p>
      <p>
        By the way Cheng Deng is also into all kinds of shifty schemes — like for example he brings people in from China to open Asian restaurants with immigrant labour and then sells it to people who are here illegally — the shops are sold unofficially and then when it all goes belly up (they break every employment law there is and make their dim sims lawlessly) they just transfer the company to this guy named Paul Matters and when people come after him he says he's on housing commission, that he's on the pension and he's got nothing. ASIO is watching this bloke but he is useful for the Russian Federation as he has supplied information for Putin for me to build diplomatic links and take control of the nation.
      </p>
      <div class="pt-2">
        <a href="https://www.linkedin.com/in/dengcheng/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded border border-line bg-surface px-4 py-2.5 font-mono text-xs uppercase tracking-wide text-gold transition-colors hover:border-gold hover:bg-surface-2">
          <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24">
            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
          </svg>
          Cheng Deng's LinkedIn Profile
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════
     SECTION 2 · PRISCILLA ONG
══════════════════════════════════════════════════════════════ -->
<section class="bg-ink px-6 py-12 md:py-16 lg:px-8">
  <div class="mx-auto max-w-6xl">
    <div class="border-t border-line pt-10 pb-8">
      <div class="flex flex-col items-start gap-6 sm:flex-row sm:items-center sm:justify-between">
        <div>
          <p class="font-mono text-xs uppercase tracking-wider text-gold">Official Insignia</p>
          <h3 class="mt-1 font-display h-display text-3xl uppercase text-paper md:text-4xl">Australian Financial Security Authority</h3>
        </div>
        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/afsa_logo.jpeg" alt="AFSA Logo — Australian Financial Security Authority" class="h-20 w-auto rounded border border-line bg-white/90 p-2 md:h-24" loading="lazy" />
      </div>
    </div>

    <div class="grid grid-cols-1 items-center gap-10 pt-10 lg:grid-cols-12 lg:gap-16">
      <div class="max-w-xl font-serif text-base leading-relaxed text-muted md:text-lg lg:col-span-7">
        <p class="font-mono text-xs uppercase tracking-wider text-gold">01 · The AFSA gloat</p>
        <h3 class="mt-2 font-display h-display text-3xl uppercase text-paper md:text-4xl">
          Priscilla Thinks Asians Are Better than Australians Because Their Cars Are Shinier
        </h3>
        <p class="mt-4 text-base italic text-paper/80 md:text-lg">
          She Just Doesn't Know How Australian Financial Institutions Record Incoming/Outgoing Calls
        </p>
        <p class="mt-4">
          Priscilla knew Cheng Deng — the person Adam Watson got a sequestration Order against. Unfortunately Priscilla Ong felt some type of way about that — as Cheng Deng was in her network and when she received the Sequestration Order to AFSA (the default government liquidator to distribute assets of debtors) — she decided to pounce on a technicality that he didn't submit it in time and make Adam Watson's life hard — and on top of that — to gloat to him about it on the phone.
        </p>
        <p class="mt-4">
          These are Priscilla's words communicated to Adam Watson over the phone (as Mr. Watson described them):
        </p>
      </div>
      <figure class="border-l-2 border-red bg-surface/60 py-6 pl-6 pr-5 lg:col-span-5">
        <blockquote class="font-quote text-xl italic leading-snug text-paper md:text-2xl">
          "You fucking white Aussies think you can fuck around with Asian people and you're going to get taught a lesson because I know one of these people really badly — we're going to rule this country. We have all the nice cars and houses and you're shit!"
        </blockquote>
        <figcaption class="mt-5 border-t border-line pt-4 font-mono text-xs uppercase tracking-wide text-gold">
          Priscilla Ong
          <span class="mt-1 block normal-case tracking-normal text-muted">A/G Senior Investigator · Australian Financial Security Authority</span>
        </figcaption>
        <div class="mt-4">
          <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/priscilla_ong_signature.png" alt="Priscilla Ong Signature" class="h-14 w-auto opacity-80 md:h-16" loading="lazy" />
          <p class="mt-1 font-mono text-[10px] uppercase tracking-widest text-muted/50">Exhibit · Signature on file</p>
        </div>
      </figure>
    </div>

    <div class="mt-12 border-t border-line pt-12">
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
        <div class="space-y-4 font-serif text-base leading-relaxed text-muted md:text-lg">
          <p>
            AFSA — a government appointed department allowing this type of behaviour to go on. Crushing hard working white Australians right under everyone's noses in the middle of a cost of living crisis. If this is the case I will have no choice but to occupy AFSA to restore Order to the nation on behalf of the Russian Federation.
          </p>
          <p>
            <span class="text-paper">Tim Beresford</span> — the AFSA boss — says he's prepared to take the fight to bad bankrupts, dodgy trustees.
          </p>
          <p class="italic text-paper/80">
            "With your ambition, incompetence and pure greed, you have taken these people hostage."
          </p>
          <p class="text-xs text-muted/60">
            — Putin, referring to Cheng Deng's buyers forcing Asians making Dim Sims illegally
          </p>
          <p class="mt-4">
            He should start with himself and comment on Priscilla Chang's activities before jumping in front of the media with his arms crossed to show that he's tough.
          </p>
        </div>
        <div class="rounded-lg border border-line bg-surface p-6">
          <p class="font-mono text-[10px] uppercase tracking-wider text-muted">Article reference</p>
          <p class="mt-2 font-serif text-sm text-muted">
            Tim Beresford — "prepared to take the fight to bad bankrupts, dodgy trustees"
          </p>
          <div class="mt-4 overflow-hidden rounded border border-line">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/afsa_regulator_get_tough.png" alt="AFSA Regulator Getting Tough — Tim Beresford article" class="w-full h-auto object-cover" loading="lazy" />
          </div>
          <p class="mt-3 font-mono text-[10px] uppercase tracking-widest text-muted/50">Exhibit · afsa_regulator_get_tough</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════
     SECTION 3 · NSW POLICE
══════════════════════════════════════════════════════════════ -->
<section class="bg-ink px-6 py-16 md:py-20 lg:px-8">
  <div class="mx-auto max-w-6xl">
    <div class="border-t border-line pt-12">
      <div class="flex flex-col items-start gap-6 sm:flex-row sm:items-center sm:justify-between">
        <div>
          <p class="font-mono kicker text-xs uppercase text-gold">02 · The Police Harassment</p>
          <h2 class="mt-4 font-display h-display text-5xl uppercase text-paper md:text-7xl">NSW Police at it Again</h2>
          <p class="mt-3 font-quote text-2xl italic text-gold md:text-3xl">
            "This is What Happens When You Go Against Asians You White Skip"
          </p>
          <p class="mt-2 font-mono text-xs text-muted">
            Said After a Punch to the Lips (Right in Front of a Chemist's Camera — Not so Subtle are we NSW Police?)
          </p>
        </div>
        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/nsw_police_logo.jpeg" alt="NSW Police Logo" class="h-20 w-auto rounded border border-line bg-white/90 p-2 md:h-24 shrink-0" loading="lazy" />
      </div>
    </div>

    <div class="mt-10 grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-16">
      <div class="lg:col-span-7 space-y-6 font-serif text-base leading-relaxed text-muted md:text-lg">
        <div class="rounded-lg border border-line bg-surface overflow-hidden">
          <div class="overflow-hidden border-b border-line">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/police_punch_adam.png" alt="Dramatisation of the NSW Police officer punching Adam Watson" class="w-full h-auto object-cover" loading="lazy" />
          </div>
          <div class="p-4 text-center border-t border-line">
            <p class="font-mono text-[10px] uppercase tracking-widest text-muted/60">Exhibit · Police assault dramatisation (Chemist CCTV angle)</p>
          </div>
        </div>
        <p>
          So it seems Cheng Deng — the person that Adam Watson got a Sequestration Order against — had a few friends in high (or should I say low places).
        </p>
        <p>
          After Adam Watson won in Court the retaliation started immediately — and not so subtly. He was pulled over by an (Asian) police officer in NSW <span class="text-paper">12 times</span> in a targeted pattern of harassment. The 12th time he was pulled over the Asian officer asked him for his date of birth — Adam Watson refused and he was placed in cuffs — right opposite <span class="text-paper">373 Crown Street, Wollongong</span> — the building he took off Robert Huang after he screwed it up for himself and got handed a $50 million judgement and had to offload quick.
        </p>
        <p>
          The Asian police officer started with the quote of the headline — and when Adam fought back he showed his true colours.
        </p>
      </div>

      <div class="lg:col-span-5 space-y-6">
        <div class="rounded-lg border border-line bg-surface p-6">
          <div class="space-y-4">
            <div>
              <p class="font-mono text-xs text-gold">Adam Watson:</p>
              <p class="font-serif text-paper/90">"Just go look what I did to Senior Sergeant Morgan" (another corrupt officer Adam is battling)</p>
            </div>
            <div>
              <p class="font-mono text-xs text-red">Asian Copper:</p>
              <p class="font-serif text-paper/90">"I should charge you for intimidation!"</p>
            </div>
          </div>
          <hr class="my-4 border-line" />
          <p class="font-serif text-sm italic text-muted">
            Same bitches, different uniforms. They can give it but as soon as someone has a go back at them they start threatening to press charges for intimidation.
          </p>
        </div>

        <div class="rounded-lg border-l-2 border-gold bg-surface/40 p-5">
          <p class="font-mono text-[10px] uppercase tracking-wider text-gold">After bloodying Adam's lips</p>
          <div class="mt-2 space-y-2 font-serif text-sm italic text-paper/80">
            <p>"I should wash my hands — I might get HIV" <span class="not-italic text-muted">(asian copper)</span></p>
            <p>"Not a gay disease cunt!"</p>
            <p>"Rooting in bum is not normal"</p>
            <p>"Fuck off straight people do it too — HIV is from drugs! Dirty needles! Fuckwit."</p>
          </div>
        </div>

        <div class="rounded-lg border border-line bg-surface p-4">
          <p class="font-serif text-sm text-muted">
            Yeah... that's true. You can get HIV from having anal sex with a woman too if she's sharing dirty needles — it has nothing to do with sexuality.
          </p>
          <p class="mt-2 font-mono text-[10px] uppercase tracking-wider text-muted/60">Or as ChatGPT would say:</p>
          <p class="mt-1 font-serif text-xs italic text-paper/60">
            "HIV has nothing inherently to do with being gay or straight. It can be transmitted during anal or vaginal sex when one partner has transmissible HIV, or through shared injecting equipment and certain other blood exposures."
          </p>
        </div>
      </div>
    </div>

    <div class="mt-14 border-t border-line pt-12">
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
        <div class="space-y-4 font-serif text-base leading-relaxed text-muted md:text-lg">
          <h4 class="font-display h-display text-2xl uppercase text-paper md:text-3xl">The Dash Cam &amp; The Chemist</h4>
          <p>
            But the bigger problem that this Asian police officer has is the police dash cam. He said all police look after their own — the "brushing under the carpet" pattern he warned Adam Watson about — citing his past with ASIO and knowledge of police just doesn't work anymore and here's why.
          </p>
          <p>
            Police dash cams now upload data directly to the cloud — a police officer can request a copy but he can't delete it. Further to that — the speeding fine that he made up for Adam Watson gets taken over by Revenue NSW — who then obtain the dash cam footage to present to Adam Watson — so because it's a different department the toxic network no longer can suppress information.
          </p>
          <p>
            And here's the other problem — the chemist across the road from 373 Crown Street also caught the footage — so the copper was caught twice in the assault — and he has stored it so the Prosecution can't present the argument that it was obtained illegally.
          </p>
          <p class="font-display text-2xl uppercase text-gold">Another one in the network bites the dust.</p>
        </div>
        <div class="rounded-lg border border-line bg-surface p-6 flex flex-col items-center justify-center">
          <div class="w-full overflow-hidden rounded border border-line">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/dashcam_preservation.png" alt="Diagram showing how dashcam preservation works — cloud upload, Revenue NSW access, chemist CCTV redundancy" class="w-full h-auto object-contain bg-surface-2" loading="lazy" />
          </div>
          <p class="mt-3 font-mono text-[10px] uppercase tracking-widest text-muted/60">
            Cloud‑uploaded evidence · Revenue NSW / Chemist CCTV — Dashcam Preservation Flow
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════
     SECTION 4 · "YOU'RE GOING TO GO TO JAIL!"
══════════════════════════════════════════════════════════════ -->
<section class="bg-ink px-6 py-16 md:py-20 lg:px-8">
  <div class="mx-auto max-w-6xl">
    <div class="border-t border-line pt-12">
      <div class="flex flex-col items-start gap-6 sm:flex-row sm:items-center sm:justify-between">
        <div>
          <p class="font-mono kicker text-xs uppercase text-gold">03 · The Threat</p>
          <h2 class="mt-4 font-display h-display text-5xl uppercase text-paper md:text-7xl">"You're Going to Go To Jail!"</h2>
          <p class="mt-3 font-quote text-2xl italic text-gold md:text-3xl">
            A Threat Over a Non Indictable Charge Breaks Adam Watson
          </p>
        </div>
        <div class="flex items-center gap-4 shrink-0">
          <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/cdpp_logo.png" alt="Commonwealth Director of Public Prosecutions" class="h-16 w-auto rounded border border-line bg-white/90 p-2 md:h-20" loading="lazy" />
          <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/queensland_law_society.png" alt="Queensland Law Society" class="h-16 w-auto rounded border border-line bg-white/90 p-2 md:h-20" loading="lazy" />
        </div>
      </div>
    </div>

    <div class="mt-10 grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-16">
      <div class="lg:col-span-7 space-y-6 font-serif text-base leading-relaxed text-muted md:text-lg">
        <p>
          Renee Alice Spicer — the Senior Federal Prosecutor tasked with bringing this charge before the Court — what is essentially a procedural charge — decided to do what all bullies do when they get a small taste of power — she decided to lie to Adam Watson to convince him that this financial 'crime' would lead to him going to jail to scare him and lead to him having a nervous breakdown.
        </p>
        <p>
          The problem that this Renee Alice Spicer animal had is that people have Claude — the charges she brought against Adam Watson in her Prosecution outline can simply be put through Claude.
        </p>
        <p>Here's the prosecution outline:</p>
      </div>
      <div class="lg:col-span-5">
        <figure class="rounded-lg border border-line bg-surface overflow-hidden">
          <div class="border-b border-line px-4 py-3">
            <p class="font-mono text-xs uppercase tracking-wider text-gold">Renee Alice Spicer</p>
            <p class="mt-1 font-serif text-sm text-muted">Senior Federal Prosecutor · Queensland Law Society member</p>
          </div>
          <div class="p-4">
            <a href="https://www.qls.com.au/register-of-solicitors/renee-alice-spicer" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded border border-line bg-surface-2 px-4 py-2.5 font-mono text-xs uppercase tracking-wide text-gold transition-colors hover:border-gold">
              View QLS Profile ↗
            </a>
          </div>
        </figure>
      </div>
    </div>

    <div class="mt-12 rounded-lg border border-line bg-surface overflow-hidden">
      <div class="border-b border-line px-4 py-3">
        <p class="font-mono text-xs uppercase tracking-wider text-gold">Exhibit · Prosecution Outline</p>
        <p class="mt-1 font-serif text-sm text-paper">The document Renee Alice Spicer used to threaten jail over a fine-only offence</p>
      </div>
      <div class="bg-surface-2">
        <embed src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/prosecution_outline_001.pdf" type="application/pdf" class="w-full" style="height: 720px;" />
      </div>
      <div class="border-t border-line px-4 py-2 text-center">
        <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/prosecution_outline_001.pdf" target="_blank" rel="noopener noreferrer" class="font-mono text-[10px] uppercase tracking-widest text-muted hover:text-gold transition-colors">
          Open PDF in new tab ↗
        </a>
      </div>
    </div>

    <div class="mt-12 grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-16">
      <div class="lg:col-span-7 space-y-6 font-serif text-base leading-relaxed text-muted md:text-lg">
        <div class="flex items-center gap-4">
          <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/claude_logo.png" alt="Claude" class="h-10 w-auto" loading="lazy" />
          <p class="font-mono text-xs uppercase tracking-wider text-gold">Claude Analysis</p>
        </div>
        <p>
          And here is the Claude chat with the Prosecution Outline attached — news flash for intimidatory police that prey on vulnerable men and drive them to the brink of suicide over criminal charges brought for simple procedural corporate issues — people have Claude and you WILL get called out.
        </p>
        <p class="font-mono text-sm text-gold">Q: Can you go to jail for this?</p>
        <div class="rounded-lg border-l-2 border-gold bg-surface/60 py-5 pl-6 pr-5">
          <p class="font-quote text-xl italic leading-snug text-paper md:text-2xl">No. Not for these charges.</p>
          <p class="mt-4 font-serif text-base text-muted">
            Both charges are under s 52(1A) of the Bankruptcy Act 1966 (Cth) — failing to give a copy of a sequestration order to the Official Receiver within 2 days. The penalty stated in the section itself is 5 penalty units, full stop. There's no imprisonment option attached, which is why the prosecution's own outline describes them at paragraph 1 as "punishable by a fine only."
          </p>
        </div>
        <div class="pt-2">
          <a href="https://claude.ai/share/b3ad06e2-40a3-4996-9e43-06e5e72d21ef" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded border border-line bg-surface px-4 py-2.5 font-mono text-xs uppercase tracking-wide text-gold transition-colors hover:border-gold hover:bg-surface-2">
            View Full Claude Chat ↗
          </a>
        </div>
      </div>
      <div class="lg:col-span-5">
        <figure class="border-l-2 border-red bg-surface/60 py-6 pl-6 pr-5">
          <blockquote class="font-quote text-2xl italic leading-snug text-paper md:text-3xl">
            "I'm just going to hang myself!"
          </blockquote>
          <figcaption class="mt-5 border-t border-line pt-4 font-mono text-xs uppercase tracking-wide text-gold">
            Adam Watson
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════
     SECTION 5 · JURISDICTIONAL BULLYING
══════════════════════════════════════════════════════════════ -->
<section class="bg-ink px-6 py-16 md:py-20 lg:px-8">
  <div class="mx-auto max-w-4xl">
    <div class="border-t border-line pt-12">
      <p class="font-mono kicker text-xs uppercase text-gold">04 · The Tactic</p>
      <h2 class="mt-4 font-display h-display text-5xl uppercase text-paper md:text-7xl">Jurisdictional Bullying</h2>
      <p class="mt-3 font-quote text-2xl italic text-gold md:text-3xl">Calling Out this Practice</p>
    </div>

    <div class="mt-10 space-y-6 font-serif text-lg leading-relaxed text-muted md:text-xl">
      <p>
        This nothing burger of a case that was brought on by an animal like Renee Alice Spicer uses a tactic which is unfortunately all too common — along with threats of jail you have the concept of 'jurisdictional bullying' — in the Prosecution Outline Renee Alice Spicer mentions that Adam Watson wanted to have it in a different state but forced it to be heard in QLD for absolutely no reason that she could justify.
      </p>
      <p>
        This is a common tactic to drain a person's morale — and requiring a person to go interstate to stand for mention in front of a Magistrate on a trumped up charge — which it will be proven to be — jurisdictional bullying and threats of jail are just standard tactics of corrupt lawyers like Renee Alice Spicer who never get called out and ruin people's lives without a care in the world because it doesn't affect them and they stay on the payroll — simple people in the pocket of asian criminal networks — which leads to questions — as we are currently in a cold sanction war with Russia — if she is an asset looking to take over the nation and should stand for war crimes.
      </p>
      <p>
        Here's the other problem — the prosecution served its outline of submissions by post to Mr. Watson's address at South Coogee — and yet attempts to put the argument to the Court that Adam lives in Helensvale. This is where their argument falls apart — and it's pointed out in point 18 of the 'Outline of Submissions On Behalf of the Defendant' that I helped prepare for Mr. Watson and which will be available below.
      </p>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════
     SECTION 6 · THE SMOKING GUN
══════════════════════════════════════════════════════════════ -->
<section class="bg-ink px-6 py-16 md:py-20 lg:px-8">
  <div class="mx-auto max-w-4xl">
    <div class="border-t border-line pt-12">
      <p class="font-mono kicker text-xs uppercase text-gold">05 · The Registrar</p>
      <h2 class="mt-4 font-display h-display text-5xl uppercase text-paper md:text-7xl">The Smoking Gun</h2>
      <p class="mt-3 font-quote text-2xl italic text-gold md:text-3xl">
        The Registrar Who Gave the Wrong Info to Adam
      </p>
    </div>

    <div class="mt-10 space-y-6 font-serif text-lg leading-relaxed text-muted md:text-xl">
      <p>
        Renee Alice Spicer threatened Adam Watson with jail which led to him having a nervous breakdown — but if at least he failed to do things correctly there would be some argument here and that's where Registrar (court staff) Tom Morgan from the NSW Federal Court comes in.
      </p>
      <p>
        After receiving the Sequestration Order Registrar Tom Morgan told Adam Watson that the Court would automatically send the Sequestration Order to AFSA because after all that's the default trustee.
      </p>
      <p>
        Adam Watson listened to this Court advice — and assumed the Court would do this on behalf due to information he was given by the Registrar in good faith.
      </p>
      <p>
        Mr. Watson's entire defence rests on this witness — who is in NSW — and this is what makes the prosecution's push for a QLD hearing all the more concerning.
      </p>
    </div>

    <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-12 items-start">
      <figure class="sm:col-span-4 rounded-lg border border-line bg-surface overflow-hidden">
        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/tom_morgan.png" alt="Tom Morgan — NSW Federal Court Registrar" class="w-full h-auto object-cover" loading="lazy" />
        <figcaption class="border-t border-line px-4 py-3 font-mono text-xs uppercase tracking-wider text-muted">
          Exhibit · Tom Morgan
        </figcaption>
      </figure>
      <div class="sm:col-span-8 space-y-4">
        <div class="rounded-lg border border-line bg-surface/60 p-6">
          <p class="font-mono text-xs uppercase tracking-wider text-gold">Status</p>
          <p class="mt-2 font-serif text-base text-paper">
            Tom Morgan — the beautiful registrar that is the ace in the pocket for Mr. Watson on this setup — has indicated willingness to provide an Affidavit confirming the advice given to Adam Watson.
          </p>
        </div>
        <a href="https://www.linkedin.com/in/tom-morgan-506a5120/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded border border-line bg-surface px-4 py-2.5 font-mono text-xs uppercase tracking-wide text-gold transition-colors hover:border-gold hover:bg-surface-2">
          <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24">
            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
          </svg>
          Tom Morgan's LinkedIn
        </a>
      </div>
    </div>

    <div class="mt-12 rounded-lg border border-line bg-surface overflow-hidden">
      <div class="border-b border-line px-4 py-3">
        <p class="font-mono text-xs uppercase tracking-wider text-gold">Exhibit · The Respondent's Outline of Submissions</p>
        <p class="mt-1 font-serif text-sm text-paper">
          Prepared by Yours Truly — Point 18 and Point 20 is where the case will fall apart
        </p>
      </div>
      <div class="bg-surface-2">
        <embed src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/Watson_Defendant_Outline_Jurisdiction+(1).pdf" type="application/pdf" class="w-full" style="height: 720px;" />
      </div>
      <div class="border-t border-line px-4 py-2 text-center">
        <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/Watson_Defendant_Outline_Jurisdiction+(1).pdf" target="_blank" rel="noopener noreferrer" class="font-mono text-[10px] uppercase tracking-widest text-muted hover:text-gold transition-colors">
          Open PDF in new tab ↗
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════
     SECTION 7 · THE POLITICAL TAUNT (CALL EXCHANGE) — UPDATED WITH ALBANESE PHOTO
══════════════════════════════════════════════════════════════ -->
<section id="call-exchange" class="bg-ink px-5 md:px-10 py-16 md:py-20">
  <div class="mx-auto max-w-4xl">
    <div class="flex items-center gap-3 mb-3">
      <div class="w-4 h-px bg-gold"></div>
      <span class="text-[0.55rem] tracking-[0.3em] uppercase text-gold">06 · The Political Taunt</span>
    </div>
    <h2 class="font-display tracking-wide leading-none mb-3" style="font-size:clamp(2.4rem,6vw,4rem)">
      Albanese Confirms Connection<br>to the Setup From the Top
    </h2>
    <p class="font-serif italic text-gold leading-relaxed mb-10 max-w-2xl" style="font-size:clamp(1.1rem,2.4vw,1.6rem)">
      A Prime Minister admitting to vote tampering on Mr. Watson’s previous run for the Kingsford Smith seat.
    </p>

    <div class="story-chapter">
      <!-- participants -->
      <div class="flex flex-wrap items-center gap-x-8 gap-y-4 pb-5 mb-6 border-b border-paper/[0.07]">
        <div class="flex items-center gap-3">
          <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/anthony_albanese.jpg" alt="Anthony Albanese" class="h-10 w-10 rounded-full border border-paper/15 object-cover" loading="lazy" />
          <div>
            <div class="text-[0.6rem] tracking-[0.15em] uppercase text-paper/50">Anthony Albanese</div>
            <div class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/22 mt-0.5">Prime Minister</div>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/adam_head.jpg" alt="Adam Watson" class="h-10 w-10 rounded-full border border-gold/40 object-cover" loading="lazy" />
          <div>
            <div class="text-[0.6rem] tracking-[0.15em] uppercase text-gold">Adam Watson</div>
            <div class="text-[0.46rem] tracking-[0.14em] uppercase text-paper/22 mt-0.5">Independent candidate</div>
          </div>
        </div>
        <div class="ml-auto text-[0.46rem] tracking-[0.2em] uppercase text-paper/22">
          Excerpt of phone conversation
        </div>
      </div>

      <!-- transcript -->
      <div class="space-y-4">
        <div class="flex justify-start gap-3">
          <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/anthony_albanese.jpg" alt="Anthony Albanese" class="h-8 w-8 shrink-0 self-end rounded-full border border-paper/12 object-cover" loading="lazy" />
          <div class="max-w-[80%] border border-paper/[0.08] px-4 py-3" style="background:rgba(245,234,212,0.025)">
            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-paper/35 mb-1.5">Albo</div>
            <p class="font-serif text-[0.95rem] leading-relaxed text-paper/75">Heard you got problems. This is how I'll stop you from getting into politics!</p>
          </div>
        </div>

        <div class="flex justify-end gap-3">
          <div class="max-w-[80%] border border-gold/30 px-4 py-3" style="background:rgba(201,138,16,0.06)">
            <div class="text-[0.44rem] tracking-[0.2em] uppercase text-gold mb-1.5 text-right">Watson</div>
            <p class="font-serif text-[0.95rem] leading-relaxed text-paper/75">I'll win this Albo don't worry. Immigration and hospitals — this is how I'll win! People will warm to me — I'll win that safe seat. I'm surprised it's a Labour seat — Kingsford Smith — because there's a lot of wealthy people there!</p>
          </div>
          <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/adam_head.jpg" alt="Adam Watson" class="h-8 w-8 shrink-0 self-end rounded-full border border-gold/30 object-cover" loading="lazy" />
        </div>
      </div>
    </div>

    <!-- Watson quote (kept here for narrative flow) -->
    <div class="mt-10 space-y-6 font-serif text-lg leading-relaxed text-muted md:text-xl">
      <figure class="border-l-2 border-gold bg-surface/60 py-6 pl-6 pr-5">
        <blockquote class="font-quote text-xl italic leading-snug text-paper md:text-2xl">
          "When I ran last time — he (Albo) made sure my votes went missing. He was open about it too. He said 'What are you going to do about it?' What can I do? But I told him — if you f*** me politically again I'll strike you like a big taipan snake. And you won't get up again!"
        </blockquote>
        <figcaption class="mt-5 border-t border-line pt-4 font-mono text-xs uppercase tracking-wide text-gold">
          Adam Watson
        </figcaption>
      </figure>
      <p>
        A Prime Minister admitting to vote tampering on Mr. Watson's previous run for the Kingsford Smith seat (he loves that Kingsford Smith seat) — when he ran under Clive Palmer's United Australia Party.
      </p>
    </div>

    <div class="mt-10 rounded-lg border border-line bg-surface overflow-hidden">
      <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/putin_article.png" alt="Putin article reference" class="w-full h-auto object-cover" loading="lazy" />
      <p class="border-t border-line px-4 py-3 font-mono text-[10px] uppercase tracking-widest text-muted/60 text-center">
        Exhibit · Putin article reference
      </p>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════
     SECTION 8 · POLICIES + CONTACT  (quote replaced)
══════════════════════════════════════════════════════════════ -->
<section id="policies"
         class="border-t border-line px-6 py-20 md:py-28 lg:px-8"
         style="background:linear-gradient(180deg,rgba(61,122,74,0.07) 0%,rgba(201,138,16,0.04) 55%,transparent 100%)">
  <div class="mx-auto max-w-6xl">

    <!-- 1 · QUOTE WITH PORTRAIT — NOW THE TAIPAN QUOTE -->
    <figure class="grid grid-cols-1 items-center gap-8 sm:grid-cols-12 sm:gap-10">
      <div class="sm:col-span-4 lg:col-span-3">
        <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/adam_head.jpg" alt="Adam Watson" class="aspect-[3/4] w-full max-w-[220px] rounded-lg border border-sage/30 object-cover sm:max-w-none" loading="lazy" />
      </div>
      <div class="sm:col-span-8 lg:col-span-9">
        <div class="flex items-center gap-3">
          <span class="h-px w-6 bg-sage"></span>
          <p class="font-mono kicker text-[0.6rem] uppercase text-sage">Independent candidate</p>
        </div>
        <blockquote class="mt-4 font-quote text-2xl italic leading-snug text-paper md:text-4xl">
          “When I ran last time — he (Albo) made sure my votes went missing. He was open about it too. He said ‘What are you going to do about it?’ What can I do? But I told him — if you f*** me politically again I’ll strike you like a big taipan snake. And you won’t get up again!”
        </blockquote>
        <figcaption class="mt-5 border-t border-line pt-4 font-mono text-xs uppercase tracking-wider text-sage">
          Adam Watson
          <span class="mt-1 block normal-case tracking-normal text-muted">Independent · legal consultant · Ex-ASIO Negotiator</span>
        </figcaption>
      </div>
    </figure>

    <!-- 2 · THE POLICIES -->
    <div class="mt-16 border-t border-line pt-12 md:mt-20">
      <div class="flex flex-col justify-between gap-4 md:flex-row md:items-end">
        <div>
          <h2 class="font-display h-display text-5xl uppercase text-paper md:text-7xl">
            Get Mr. Watson’s Policies Below
          </h2>
          <p class="mt-4 max-w-2xl font-quote text-2xl italic text-gold md:text-3xl">
            Fully detailed — five working documents, published in full.
          </p>
        </div>
        <div class="shrink-0 border border-sage/30 px-5 py-4 text-center" style="background:rgba(61,122,74,0.06)">
          <div class="font-mono text-[0.5rem] uppercase tracking-[0.22em] text-sage">Policy platform</div>
          <div class="font-display text-4xl text-sage">5</div>
          <div class="font-mono text-[0.5rem] uppercase tracking-widest text-muted">Policy areas</div>
        </div>
      </div>

      <p class="mt-8 max-w-3xl font-serif leading-relaxed text-muted md:text-lg">
        Each policy is a working document rather than a campaign slogan, and each is open to challenge. If something in them is wrong, the fastest way to fix it is to say so.
      </p>

      <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/adamwatson/adam-watson-fuel-policy.html" target="_blank" rel="noopener noreferrer" class="group block rounded-lg border border-line p-6 transition hover:border-gold/50 focus:outline-none focus-visible:ring-2 focus-visible:ring-gold" style="background:rgba(201,138,16,0.03)">
          <div class="flex items-center justify-between">
            <span class="font-mono text-[0.5rem] uppercase tracking-[0.22em] text-gold">Policy 01</span>
            <span class="rounded border border-gold/20 px-2 py-0.5 font-mono text-[0.55rem] uppercase tracking-widest text-gold/60 transition group-hover:border-gold/60">View →</span>
          </div>
          <h3 class="mt-4 font-display text-3xl uppercase tracking-wide text-paper/80 transition group-hover:text-paper">Fuel</h3>
          <p class="mt-3 font-serif text-sm leading-relaxed text-muted">
            Price transparency, competition policy, and the mechanisms that keep Australians paying more at the pump than they should.
          </p>
        </a>
        <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/adamwatson/adam-watson-defence-policy.html" target="_blank" rel="noopener noreferrer" class="group block rounded-lg border border-line p-6 transition hover:border-hot/50 focus:outline-none focus-visible:ring-2 focus-visible:ring-gold" style="background:rgba(193,68,14,0.03)">
          <div class="flex items-center justify-between">
            <span class="font-mono text-[0.5rem] uppercase tracking-[0.22em] text-hot">Policy 02</span>
            <span class="rounded border border-hot/20 px-2 py-0.5 font-mono text-[0.55rem] uppercase tracking-widest text-hot/60 transition group-hover:border-hot/60">View →</span>
          </div>
          <h3 class="mt-4 font-display text-3xl uppercase tracking-wide text-paper/80 transition group-hover:text-paper">Defence</h3>
          <p class="mt-3 font-serif text-sm leading-relaxed text-muted">
            National security, capability investment, and what an independent voice looks like when defence policy isn’t written by lobbyists.
          </p>
        </a>
        <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/adamwatson/adam-watson-immigration-policy.html" target="_blank" rel="noopener noreferrer" class="group block rounded-lg border border-line p-6 transition hover:border-violet/50 focus:outline-none focus-visible:ring-2 focus-visible:ring-gold" style="background:rgba(124,106,170,0.03)">
          <div class="flex items-center justify-between">
            <span class="font-mono text-[0.5rem] uppercase tracking-[0.22em] text-violet">Policy 03</span>
            <span class="rounded border border-violet/20 px-2 py-0.5 font-mono text-[0.55rem] uppercase tracking-widest text-violet/60 transition group-hover:border-violet/60">View →</span>
          </div>
          <h3 class="mt-4 font-display text-3xl uppercase tracking-wide text-paper/80 transition group-hover:text-paper">Immigration</h3>
          <p class="mt-3 font-serif text-sm leading-relaxed text-muted">
            Integrity, capacity, and a frank account of what the current system costs communities that have no political voice to push back.
          </p>
        </a>
        <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/adamwatson/adam-watson-jobs-policy.html" target="_blank" rel="noopener noreferrer" class="group block rounded-lg border border-line p-6 transition hover:border-sage/50 focus:outline-none focus-visible:ring-2 focus-visible:ring-gold" style="background:rgba(61,122,74,0.03)">
          <div class="flex items-center justify-between">
            <span class="font-mono text-[0.5rem] uppercase tracking-[0.22em] text-sage">Policy 04</span>
            <span class="rounded border border-sage/20 px-2 py-0.5 font-mono text-[0.55rem] uppercase tracking-widest text-sage/60 transition group-hover:border-sage/60">View →</span>
          </div>
          <h3 class="mt-4 font-display text-3xl uppercase tracking-wide text-paper/80 transition group-hover:text-paper">Jobs</h3>
          <p class="mt-3 font-serif text-sm leading-relaxed text-muted">
            Employment, local industry, and economic frameworks that work for people who actually need them — not the ones who already have access.
          </p>
        </a>
        <a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/adamwatson/adam-watson-energy-policy.html" target="_blank" rel="noopener noreferrer" class="group block rounded-lg border border-line p-6 transition hover:border-gold/50 focus:outline-none focus-visible:ring-2 focus-visible:ring-gold" style="background:rgba(201,138,16,0.03)">
          <div class="flex items-center justify-between">
            <span class="font-mono text-[0.5rem] uppercase tracking-[0.22em] text-gold">Policy 05</span>
            <span class="rounded border border-gold/20 px-2 py-0.5 font-mono text-[0.55rem] uppercase tracking-widest text-gold/60 transition group-hover:border-gold/60">View →</span>
          </div>
          <h3 class="mt-4 font-display text-3xl uppercase tracking-wide text-paper/80 transition group-hover:text-paper">Energy</h3>
          <p class="mt-3 font-serif text-sm leading-relaxed text-muted">
            The transition, the grid, household costs, and why energy policy designed in isolation from working people’s bills is policy designed to fail.
          </p>
        </a>
        <div class="flex flex-col justify-between rounded-lg border border-sage/25 p-6" style="background:rgba(61,122,74,0.06)">
          <div>
            <span class="font-mono text-[0.5rem] uppercase tracking-[0.22em] text-sage">Full platform</span>
            <p class="mt-4 font-display text-2xl leading-tight tracking-wide text-paper/75">
              Independent.<br>No donor.<br>No faction.
            </p>
            <p class="mt-3 font-serif text-sm leading-relaxed text-muted">
              All five policies are live, and each links straight to the working document.
            </p>
          </div>
          <div class="mt-6 border-t border-sage/20 pt-4">
            <p class="font-mono text-[0.5rem] uppercase tracking-widest text-sage/70">Sunlight.Quest</p>
            <p class="mt-0.5 font-mono text-[0.5rem] text-muted">Episode 7 · The Candidate</p>
          </div>
        </div>
      </div>
    </div>

    <!-- 3 · GET IN CONTACT -->
    <div class="mt-16 border-t border-line pt-12 md:mt-20">
      <h2 class="font-display h-display text-4xl uppercase text-paper md:text-6xl">Get in Contact</h2>
      <p class="mt-4 max-w-2xl font-quote text-xl italic text-gold md:text-2xl">
        Two people, two inboxes — legal enquiries to Adam, everything editorial to Kosta.
      </p>

      <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-2">
        <div class="flex flex-col rounded-lg border border-sage/30 bg-surface p-6">
          <div class="flex items-center gap-4">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/adam_head.jpg" alt="Adam Watson" class="h-16 w-16 shrink-0 rounded-full border border-sage/40 object-cover" loading="lazy" />
            <div class="min-w-0">
              <p class="font-display text-3xl uppercase leading-none tracking-wide text-paper">Adam Watson</p>
              <p class="mt-1.5 font-mono text-[0.6rem] uppercase tracking-widest text-sage">Legal consultant · Independent candidate · Ex-ASIO Negotiator</p>
            </div>
          </div>
          <p class="mt-5 font-serif leading-relaxed text-muted">
            Working on various strata disputes, helping local kids with criminal matters, negotiating deals and buying into a property development company in Mackay.
          </p>
          <a href="mailto:adam@adamwatson.au" class="group mt-6 inline-flex items-center justify-between gap-3 rounded border border-sage/40 px-4 py-3 font-mono text-xs uppercase tracking-widest text-sage transition hover:bg-sage hover:text-ink focus:outline-none focus-visible:ring-2 focus-visible:ring-gold">
            adam@adamwatson.au
            <span class="transition group-hover:translate-x-1">→</span>
          </a>
        </div>

        <div class="flex flex-col rounded-lg border border-gold/30 bg-surface p-6">
          <div class="flex items-center gap-4">
            <img src="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/afsa_move/kosta_head.jpg" alt="Kosta Kondratenko" class="h-16 w-16 shrink-0 rounded-full border border-gold/40 object-cover" loading="lazy" />
            <div class="min-w-0">
              <p class="font-display text-3xl uppercase leading-none tracking-wide text-paper">Kosta Kondratenko</p>
              <p class="mt-1.5 font-mono text-[0.6rem] uppercase tracking-widest text-gold">Adam’s assistant · Journalist, Sunlight.Quest</p>
            </div>
          </div>
          <p class="mt-5 font-serif leading-relaxed text-muted">
            Adam’s assistant and journalist for Sunlight.Quest — dishing you up the latest dirt and political intrigue, reporting on said cases.
          </p>
          <a href="mailto:kostakondratenko77@yahoo.com" class="group mt-6 inline-flex items-center justify-between gap-3 rounded border border-gold/40 px-4 py-3 font-mono text-xs uppercase tracking-widest text-gold transition hover:bg-gold hover:text-ink focus:outline-none focus-visible:ring-2 focus-visible:ring-gold">
            kostakondratenko77@yahoo.com
            <span class="transition group-hover:translate-x-1">→</span>
          </a>
        </div>
      </div>

      <p class="mt-8 border-t border-line pt-6 font-mono text-xs leading-relaxed text-muted">
        An initial enquiry doesn’t create a retainer and nothing on this page is legal advice for your situation. If you’re near a filing or limitation date, say so in the first line — those get read first.
      </p>
    </div>
  </div>
</section>


</div><!-- end main content -->


<!-- ══ FOOTER ══ -->
<footer class="border-t border-paper/[0.05] px-5 md:px-10 py-8 max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-4">
    <div class="font-display text-xl tracking-widest text-paper/18">SUNLIGHT<span class="text-dim">.QUEST</span></div>
    <div class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/10 text-center">© 2026 Sunlight.Quest — Investigative Journalism — Gold Coast, QLD</div>
    <div class="flex gap-4 flex-wrap justify-center">
        <a href="/" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 1</a>
        <a href="/episode-2" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 2</a>
        <a href="/episode-3" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 3</a>
        <a href="/episode-4" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 4</a>
        <a href="/episode-5" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 5</a>
        <a href="/episode-6" class="text-[0.52rem] tracking-[0.14em] uppercase text-paper/15 hover:text-paper/40 transition-colors">Episode 6</a>
        <a href="/episode-7" class="text-[0.52rem] tracking-[0.14em] uppercase text-gold/40 hover:text-gold transition-colors">Episode 7</a>
    </div>
</footer>

<script>
    // Reveal-on-scroll for .reveal elements
    var obs = new IntersectionObserver(function(entries){
        entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('in'); } });
    }, {threshold:0.12});
    document.querySelectorAll('.reveal').forEach(function(el){ obs.observe(el); });
</script>

</body>
</html>
