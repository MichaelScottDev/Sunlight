<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
    <title>Confidential Case File — Incident Report for Queensland Police</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=DM+Mono:wght@400;500&family=Newsreader:ital,opsz@0,6..72;1,6..72&display=swap" rel="stylesheet">
    <style>
        :root{
            --bg:#0c0804; --panel:rgba(20,13,9,0.55); --paper:#f5ead4;
            --hot:#c1440e; --gold:#c98a10; --sage:#3d7a4a;
            --line:rgba(245,234,212,0.09); --dim:rgba(245,234,212,0.5);
        }
        *{margin:0;padding:0;box-sizing:border-box}
        body{background:var(--bg);color:var(--paper);font-family:'Space Grotesk',-apple-system,sans-serif;line-height:1.6;padding:0 0 60px;
            background-image:radial-gradient(ellipse at top,rgba(193,68,14,0.06),transparent 55%);min-height:100vh}
        .mono{font-family:'DM Mono',monospace}
        .wrap{max-width:840px;margin:0 auto;padding:0 20px}

        /* top bar */
        .topbar{border-bottom:1px solid var(--line);padding:16px 0;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:8px}
        .brand{font-weight:700;letter-spacing:0.14em;font-size:0.95rem}
        .brand span{color:var(--hot)}
        .filetag{font-family:'DM Mono',monospace;font-size:0.55rem;letter-spacing:0.24em;text-transform:uppercase;color:var(--dim);border:1px solid var(--line);padding:5px 10px}

        /* confidential banner */
        .conf{background:linear-gradient(90deg,rgba(138,28,28,0.9),rgba(193,68,14,0.85));color:#fff;text-align:center;
            font-family:'DM Mono',monospace;font-size:0.6rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500;padding:10px;margin:22px 0 34px}

        /* hero */
        .eyebrow{font-family:'DM Mono',monospace;font-size:0.58rem;letter-spacing:0.28em;text-transform:uppercase;color:var(--hot);margin-bottom:14px;display:flex;align-items:center;gap:10px}
        .eyebrow::before{content:"";width:26px;height:1px;background:var(--hot)}
        h1{font-size:clamp(2.1rem,6vw,3.4rem);font-weight:700;line-height:0.98;letter-spacing:-0.01em;margin-bottom:14px}
        h1 span{color:var(--hot)}
        .lede{font-family:'Newsreader',serif;font-style:italic;font-size:1.05rem;color:var(--dim);max-width:44ch;line-height:1.5}

        /* section */
        section{margin-top:44px}
        .label{font-family:'DM Mono',monospace;font-size:0.56rem;letter-spacing:0.24em;text-transform:uppercase;color:var(--gold);margin-bottom:14px;padding-bottom:8px;border-bottom:1px solid var(--line)}
        p{font-size:0.9rem;color:rgba(245,234,212,0.62);margin-bottom:12px}
        strong{color:rgba(245,234,212,0.92);font-weight:500}
        em{font-style:italic;color:rgba(245,234,212,0.8)}

        /* parties grid */
        .parties{display:grid;grid-template-columns:1fr;gap:1px;background:var(--line);border:1px solid var(--line)}
        .party{background:var(--bg);padding:16px 18px}
        .party .k{font-family:'DM Mono',monospace;font-size:0.52rem;letter-spacing:0.18em;text-transform:uppercase;color:var(--dim);margin-bottom:5px}
        .party .v{font-size:0.86rem;color:rgba(245,234,212,0.85)}
        .party.hot{border-left:3px solid var(--hot)}

        /* timeline */
        .event{border:1px solid var(--line);border-left:3px solid var(--hot);background:var(--panel);padding:18px 20px;margin-bottom:14px}
        .event .d{font-family:'DM Mono',monospace;font-size:0.56rem;letter-spacing:0.16em;text-transform:uppercase;color:var(--hot);margin-bottom:8px}
        .event h3{font-size:1.15rem;font-weight:500;margin-bottom:9px;letter-spacing:-0.01em}
        .event p:last-child{margin-bottom:0}

        /* evidence */
        .ev{display:grid;grid-template-columns:1fr;gap:1px;background:var(--line);border:1px solid var(--line)}
        .evrow{background:var(--bg);padding:13px 16px;display:flex;align-items:center;gap:14px;flex-wrap:wrap}
        .evrow .n{font-family:'DM Mono',monospace;font-size:0.7rem;color:var(--gold);width:20px;flex-shrink:0}
        .evrow .t{flex:1;min-width:180px;font-size:0.82rem;color:rgba(245,234,212,0.8)}
        .evrow .t small{display:block;color:var(--dim);font-size:0.68rem;margin-top:2px}
        .evrow a{font-family:'DM Mono',monospace;font-size:0.56rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--hot);border:1px solid rgba(193,68,14,0.4);padding:5px 11px;text-decoration:none;white-space:nowrap}
        .evrow a:hover{background:rgba(193,68,14,0.1)}
        .evrow .ref{font-family:'DM Mono',monospace;font-size:0.6rem;color:var(--dim);white-space:nowrap}

        /* requests */
        ol.req{list-style:none;counter-reset:r}
        ol.req li{counter-increment:r;position:relative;padding:12px 0 12px 44px;border-bottom:1px solid var(--line);font-size:0.88rem;color:rgba(245,234,212,0.7)}
        ol.req li:last-child{border-bottom:0}
        ol.req li::before{content:counter(r,decimal-leading-zero);position:absolute;left:0;top:11px;font-family:'DM Mono',monospace;font-size:0.7rem;color:var(--hot)}

        /* notice */
        .notice{border:1px solid rgba(201,138,16,0.3);background:rgba(201,138,16,0.05);padding:16px 18px;margin-top:34px;font-size:0.78rem;color:rgba(245,234,212,0.6);line-height:1.6}
        .notice b{color:var(--gold);font-weight:500}
        .foot{margin-top:26px;padding-top:16px;border-top:1px solid var(--line);font-family:'DM Mono',monospace;font-size:0.58rem;letter-spacing:0.06em;color:rgba(245,234,212,0.28);line-height:1.7}

        @media(min-width:560px){
            .parties{grid-template-columns:1fr 1fr}
            .party.full{grid-column:1/-1}
        }
        @media print{body{background:#fff;color:#111}.conf{-webkit-print-color-adjust:exact;print-color-adjust:exact}}
    </style>
</head>
<body>
    <div class="wrap">
        <div class="topbar">
            <div class="brand">SUNLIGHT<span>.QUEST</span></div>
            <div class="filetag">Confidential Case File · QPS</div>
        </div>

        <div class="conf">Confidential — Prepared for Queensland Police — Not for Publication</div>

        <div class="eyebrow">Incident Report · 25 July 2026</div>
        <h1>Money by threat.<br><span>Then a knife, and a licence that lies.</span></h1>
        <p class="lede">A person presenting as an adult — confirmed by police to be a 16-year-old on false papers — has extorted, threatened, and terrorised the complainant. This is the record, laid out for the officers who can act on it.</p>

        <section>
            <div class="label">The Parties</div>
            <div class="parties">
                <div class="party"><div class="k">Complainant</div><div class="v">Adam Watson (Director)<br>adam@adamwatson.au · 0419 135 888</div></div>
                <div class="party"><div class="k">Reported by</div><div class="v">Kosta Kondratenko<br>Attended Broadbeach Station on the complainant's behalf</div></div>
                <div class="party hot full"><div class="k">Alleged offender</div><div class="v"><strong>Isaac Ramsden</strong> — aged <strong>16</strong>, age confirmed by Queensland Police. Presents himself as 19 using a fraudulent driver's licence. Understood to be the son of John Ramsden of Ramsden Lawyers — noted only to assist identification.</div></div>
                <div class="party full"><div class="k">Co-party — 18 July</div><div class="v">Z Soeilman — present and participating in the incident of 18 July 2026 (below).</div></div>
            </div>
        </section>

        <section>
            <div class="label">In Short</div>
            <p>Someone who looked like an adult, acted with an adult's menace, and hid behind an adult's identity document turned out to be a child of sixteen — a fact Queensland Police have now confirmed. In the space of days he has, on the complainant's account, taken money by threat, sent a written threat to kill, cornered and abused the complainant in a residential corridor while demanding a five-figure sum, and threatened to attack him with a machete over the phone. Police have advised the complainant he is not the first person this offender has used a false licence on. This document sets out each event in order, points to the evidence for every one of them, and asks for the follow-up a matter this serious should already have.</p>
        </section>

        <section>
            <div class="label">What Happened — In Order</div>

            <div class="event">
                <div class="d">Event 01 · The Extortion</div>
                <h3>Pay, or he tells the world you're a rapist</h3>
                <p>The offender's leverage was the ugliest one available. Unless the complainant paid, he would publicly claim that the complainant had admitted to raping Bodie Chalmers — and that the complainant had raped him. <strong>The complainant states, unequivocally, that both allegations are false.</strong> Faced with a threat engineered to destroy a reputation whether true or not, the complainant paid. The transfers are documented in the evidence schedule.</p>
            </div>

            <div class="event">
                <div class="d">Event 02 · The Death Threat</div>
                <h3>Told he'd be reported — he answered with a threat to kill</h3>
                <p>When the offender was informed by SMS that his conduct would be documented and handed to police, he did not back down or go quiet. He replied with a message threatening to kill. The screenshot is preserved and listed below.</p>
            </div>

            <div class="event">
                <div class="d">Event 03 · 18 July 2026 · Meriton, Southport</div>
                <h3>A corridor ambush, and a $12,000 demand</h3>
                <p>The offender and <strong>Z Soeilman</strong> came to the Meriton building in Southport where the complainant was staying. They demanded <strong>$12,000</strong>, claiming he owed it, and shouted through the corridor. The complainant was chased along it while both men yelled words to the effect of <em>"give me my money you child molesting faggot."</em> A residential tower does not miss this: it should be on <strong>Meriton security CCTV</strong>, which needs to be secured before it is overwritten.</p>
            </div>

            <div class="event">
                <div class="d">Event 04 · 22 July 2026 · The Machete Threat</div>
                <h3>"I'll machete you" — said down the phone, on camera</h3>
                <p>On a call the complainant made to the offender, the offender threatened to attack him with a machete. The interaction was recorded; the video is in the evidence schedule. A threat to kill and a threat to use a bladed weapon are not idle words on this record — they are a pattern.</p>
            </div>

            <div class="event">
                <div class="d">Event 05 · 25 July 2026, ~1:00 PM · Broadbeach Police Station</div>
                <h3>Reported in person — and left without a reference number</h3>
                <p>Kosta Kondratenko attended Broadbeach Police Station on the complainant's behalf. The attending officer photographed the SMS and the fraudulent driver's licence and took the mobile phone — but provided <strong>no reference number, no contact card, and no follow-up of any kind</strong>. He declined to accept the payment receipts, saying Adam Watson would have to provide them himself. A policewoman later phoned the complainant and confirmed two things that matter a great deal: that the offender is <strong>16</strong>, and that he had <strong>used the false licence before, on others</strong>. The willingness to confirm the offence is welcome. The absence of any means to follow it up is the gap this report exists to close.</p>
            </div>
        </section>

        <section>
            <div class="label">The Evidence</div>
            <div class="ev">
                <div class="evrow"><span class="n">01</span><div class="t">Payment receipt — money transferred under threat <small>1 of 2</small></div><a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/isaac_ramsden_1_redacted.jpeg">Open</a></div>
                <div class="evrow"><span class="n">02</span><div class="t">Payment receipt — money transferred under threat <small>2 of 2</small></div><a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/isaac_ramsden_2_redacted.jpeg">Open</a></div>
                <div class="evrow"><span class="n">03</span><div class="t">SMS screenshot — threat to kill</div><a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/death_threat.jpeg">Open</a></div>
                <div class="evrow"><span class="n">04</span><div class="t">Video — machete threat <small>22 July 2026</small></div><a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/machete_threat_1.mp4">Open</a></div>
                <div class="evrow"><span class="n">05</span><div class="t">Photograph of the alleged offender</div><a href="https://sunlightquest.s3.ap-southeast-2.amazonaws.com/isaac_ramsden/isaac_ramsden.jpeg">Open</a></div>
                <div class="evrow"><span class="n">06</span><div class="t">Fraudulent driver's licence</div><span class="ref">Photographed by officer · Broadbeach · 25 Jul 2026</span></div>
                <div class="evrow"><span class="n">07</span><div class="t">Meriton Southport security CCTV <small>18 July 2026</small></div><span class="ref">To be preserved &amp; obtained</span></div>
            </div>
        </section>

        <section>
            <div class="label">What We're Asking Queensland Police To Do</div>
            <ol class="req">
                <li>Investigate the extortion, the threat to kill, the threat with a weapon (machete), and the use of fraudulent identity documents.</li>
                <li>Issue the complainant a <strong>reference / occurrence number</strong> and a named point of contact for follow-up.</li>
                <li>Preserve and obtain the <strong>Meriton Southport CCTV</strong> for 18 July 2026 before it is overwritten.</li>
                <li>Formally accept and record the payment receipts and all other evidence above.</li>
                <li>Treat the confirmed prior use of false licences on other victims as what it is — a <strong>pattern with more than one complainant</strong>.</li>
            </ol>
        </section>

        <div class="notice"><b>A note on identity.</b> The alleged offender is a minor. He is named here for one reason only: so that police can identify and investigate him. This document is confidential, is not published, and is not part of any public website or of Sunlight.Quest. It must not be circulated beyond Queensland Police and the complainant's legal representatives.</div>

        <div class="foot">Confidential incident report · prepared for submission to Queensland Police · not for publication.<br>All allegations are the account of the complainant, provided to assist a police investigation.</div>
    </div>
</body>
</html>
