<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Tip #{{ $tip->id }} — Sunlight.Quest Admin</title>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background: #0c0804;
            color: #f5ead4;
            font-family: Georgia, serif;
            min-height: 100vh;
        }

        /* Top bar */
        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.9rem 1.75rem;
            border-bottom: 1px solid rgba(245,234,212,0.07);
            background: rgba(0,0,0,0.3);
        }
        .topbar-brand { display: flex; align-items: baseline; gap: 0.6rem; }
        .topbar-brand .wordmark {
            font-family: 'Arial Black', Arial, sans-serif;
            font-size: 1.1rem;
            letter-spacing: 0.12em;
            color: #c1440e;
        }
        .topbar-brand .section-label {
            font-size: 0.52rem;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            color: rgba(245,234,212,0.3);
        }
        .logout-btn {
            background: transparent;
            border: 1px solid rgba(245,234,212,0.15);
            color: rgba(245,234,212,0.45);
            font-family: Georgia, serif;
            font-size: 0.62rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            padding: 0.4rem 0.9rem;
            cursor: pointer;
            transition: border-color 0.2s, color 0.2s;
        }
        .logout-btn:hover { border-color: #c1440e; color: #c1440e; }

        /* Main */
        .main { padding: 2rem 1.75rem; max-width: 860px; margin: 0 auto; }

        .back-link {
            display: inline-block;
            font-size: 0.58rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: rgba(245,234,212,0.35);
            text-decoration: none;
            margin-bottom: 1.5rem;
            transition: color 0.15s;
        }
        .back-link:hover { color: #c1440e; }

        .tip-header {
            display: flex;
            align-items: baseline;
            gap: 1rem;
            margin-bottom: 0.4rem;
            flex-wrap: wrap;
        }
        .tip-id {
            font-family: 'Arial Black', Arial, sans-serif;
            font-size: 1.3rem;
            color: #f5ead4;
        }
        .tip-date {
            font-size: 0.65rem;
            color: rgba(245,234,212,0.35);
            letter-spacing: 0.06em;
        }

        /* Success flash */
        .success-box {
            background: rgba(61,122,74,0.12);
            border: 1px solid rgba(61,122,74,0.3);
            color: #4fa062;
            font-size: 0.72rem;
            padding: 0.6rem 0.9rem;
            margin-bottom: 1.25rem;
            letter-spacing: 0.04em;
        }

        /* Status badge */
        .badge {
            display: inline-block;
            font-size: 0.42rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            padding: 0.25rem 0.55rem;
            border-radius: 2px;
        }
        .badge-new      { background: rgba(193,68,14,0.2); color: #e05a25; border: 1px solid rgba(193,68,14,0.35); }
        .badge-read     { background: rgba(201,138,16,0.15); color: #c98a10; border: 1px solid rgba(201,138,16,0.3); }
        .badge-reviewed { background: rgba(61,122,74,0.2); color: #4fa062; border: 1px solid rgba(61,122,74,0.35); }
        .badge-actioned { background: rgba(245,234,212,0.06); color: rgba(245,234,212,0.4); border: 1px solid rgba(245,234,212,0.12); }

        /* Sections */
        .section {
            border: 1px solid rgba(245,234,212,0.07);
            background: rgba(245,234,212,0.015);
            margin-bottom: 1.25rem;
            padding: 1.25rem 1.4rem;
        }
        .section-title {
            font-size: 0.44rem;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            color: rgba(245,234,212,0.22);
            margin-bottom: 0.9rem;
            padding-bottom: 0.6rem;
            border-bottom: 1px solid rgba(245,234,212,0.05);
        }

        /* Field rows */
        .field { display: flex; gap: 1rem; margin-bottom: 0.65rem; }
        .field:last-child { margin-bottom: 0; }
        .field-label {
            width: 160px;
            flex-shrink: 0;
            font-size: 0.52rem;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: rgba(245,234,212,0.3);
            padding-top: 0.05rem;
        }
        .field-value {
            flex: 1;
            font-size: 0.8rem;
            color: #f5ead4;
            line-height: 1.55;
            word-break: break-word;
        }
        .field-value.muted { color: rgba(245,234,212,0.35); font-style: italic; }
        .field-value a { color: #c98a10; text-decoration: none; }
        .field-value a:hover { text-decoration: underline; }

        /* Boolean pill */
        .bool-yes { color: #4fa062; }
        .bool-no  { color: rgba(245,234,212,0.3); }

        /* Contact box (gold border when not anonymous) */
        .contact-box {
            border: 1px solid rgba(201,138,16,0.35);
            background: rgba(201,138,16,0.04);
            margin-bottom: 1.25rem;
            padding: 1.25rem 1.4rem;
        }
        .contact-box .section-title { color: #c98a10; border-bottom-color: rgba(201,138,16,0.12); }

        /* Status update form */
        .status-form {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            flex-wrap: wrap;
        }
        select {
            background: rgba(245,234,212,0.04);
            border: 1px solid rgba(245,234,212,0.15);
            color: #f5ead4;
            font-family: Georgia, serif;
            font-size: 0.78rem;
            padding: 0.55rem 0.85rem;
            outline: none;
            cursor: pointer;
            transition: border-color 0.2s;
        }
        select:focus { border-color: rgba(193,68,14,0.5); }
        select option { background: #1a0f0a; }
        .update-btn {
            background: #c1440e;
            color: #f5ead4;
            border: none;
            font-family: Georgia, serif;
            font-size: 0.62rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            padding: 0.6rem 1.4rem;
            cursor: pointer;
            transition: background 0.2s;
        }
        .update-btn:hover { background: #7a2b09; }
    </style>
</head>
<body>

    <div class="topbar">
        <div class="topbar-brand">
            <span class="wordmark">SUNLIGHT.QUEST</span>
            <span class="section-label">Admin</span>
        </div>
        <form method="POST" action="/admin/logout">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>

    <div class="main">

        <a href="/admin" class="back-link">← Back to dashboard</a>

        @if (session('success'))
        <div class="success-box">✓ &nbsp;{{ session('success') }}</div>
        @endif

        <div class="tip-header">
            <span class="tip-id">Submission #{{ $tip->id }}</span>
            <span class="tip-date">{{ $tip->created_at->format('d M Y, g:ia') }}</span>
            @php
                $badgeClass = match($tip->status) {
                    'new'      => 'badge-new',
                    'read'     => 'badge-read',
                    'reviewed' => 'badge-reviewed',
                    default    => 'badge-actioned',
                };
            @endphp
            <span class="badge {{ $badgeClass }}">{{ $tip->status }}</span>
        </div>

        {{-- Status update --}}
        <div class="section" style="margin-top:1rem">
            <div class="section-title">Update Status</div>
            <form method="POST" action="/admin/tips/{{ $tip->id }}" class="status-form">
                @csrf
                @method('PATCH')
                <select name="status">
                    @foreach (['new','read','reviewed','actioned'] as $s)
                        <option value="{{ $s }}" {{ $tip->status === $s ? 'selected' : '' }}>{{ ucfirst($s) }}</option>
                    @endforeach
                </select>
                <button type="submit" class="update-btn">Update Status</button>
            </form>
        </div>

        {{-- Core submission --}}
        <div class="section">
            <div class="section-title">Submission Details</div>

            <div class="field">
                <div class="field-label">UUID</div>
                <div class="field-value" style="font-size:0.7rem;color:rgba(245,234,212,0.4)">{{ $tip->uuid }}</div>
            </div>
            <div class="field">
                <div class="field-label">Subject</div>
                <div class="field-value {{ $tip->subject ? '' : 'muted' }}">
                    {{ $tip->subject ?: 'Not provided' }}
                    @if ($tip->subject_other)
                        <span style="color:rgba(245,234,212,0.5)"> — {{ $tip->subject_other }}</span>
                    @endif
                </div>
            </div>
            <div class="field">
                <div class="field-label">Summary</div>
                <div class="field-value">{{ $tip->summary }}</div>
            </div>
            <div class="field">
                <div class="field-label">IP Address</div>
                <div class="field-value" style="font-size:0.72rem;color:rgba(245,234,212,0.45)">{{ $tip->ip_address ?: '—' }}</div>
            </div>
        </div>

        {{-- Evidence --}}
        <div class="section">
            <div class="section-title">Evidence</div>
            <div class="field">
                <div class="field-label">Evidence Type</div>
                <div class="field-value {{ $tip->evidence_type ? '' : 'muted' }}">{{ $tip->evidence_type ?: 'Not provided' }}</div>
            </div>
            <div class="field">
                <div class="field-label">Drive Link</div>
                <div class="field-value">
                    @if ($tip->drive_link)
                        <a href="{{ $tip->drive_link }}" target="_blank" rel="noopener">{{ $tip->drive_link }}</a>
                    @else
                        <span class="muted">Not provided</span>
                    @endif
                </div>
            </div>
            <div class="field">
                <div class="field-label">Direct URL</div>
                <div class="field-value">
                    @if ($tip->direct_url)
                        <a href="{{ $tip->direct_url }}" target="_blank" rel="noopener">{{ $tip->direct_url }}</a>
                    @else
                        <span class="muted">Not provided</span>
                    @endif
                </div>
            </div>
            <div class="field">
                <div class="field-label">Description</div>
                <div class="field-value {{ $tip->evidence_desc ? '' : 'muted' }}">{{ $tip->evidence_desc ?: 'Not provided' }}</div>
            </div>
        </div>

        {{-- Pickup --}}
        <div class="section">
            <div class="section-title">Physical Pickup</div>
            <div class="field">
                <div class="field-label">Wants Pickup</div>
                <div class="field-value {{ $tip->wants_pickup ? 'bool-yes' : 'bool-no' }}">{{ $tip->wants_pickup ? 'Yes' : 'No' }}</div>
            </div>
            @if ($tip->wants_pickup)
            <div class="field">
                <div class="field-label">Suburb</div>
                <div class="field-value {{ $tip->pickup_suburb ? '' : 'muted' }}">{{ $tip->pickup_suburb ?: '—' }}</div>
            </div>
            <div class="field">
                <div class="field-label">Timing</div>
                <div class="field-value {{ $tip->pickup_timing ? '' : 'muted' }}">{{ $tip->pickup_timing ?: '—' }}</div>
            </div>
            <div class="field">
                <div class="field-label">Notes</div>
                <div class="field-value {{ $tip->pickup_notes ? '' : 'muted' }}">{{ $tip->pickup_notes ?: '—' }}</div>
            </div>
            @endif
        </div>

        {{-- Background --}}
        <div class="section">
            <div class="section-title">Background &amp; Flags</div>
            <div class="field">
                <div class="field-label">Relation to Subject</div>
                <div class="field-value {{ $tip->relation_to_subject ? '' : 'muted' }}">{{ $tip->relation_to_subject ?: 'Not provided' }}</div>
            </div>
            <div class="field">
                <div class="field-label">Has Corroboration</div>
                <div class="field-value {{ $tip->has_corroboration ? 'bool-yes' : 'bool-no' }}">{{ $tip->has_corroboration ? 'Yes' : 'No' }}</div>
            </div>
            <div class="field">
                <div class="field-label">Reported Before</div>
                <div class="field-value {{ $tip->reported_before ? 'bool-yes' : 'bool-no' }}">{{ $tip->reported_before ? 'Yes' : 'No' }}</div>
            </div>
            <div class="field">
                <div class="field-label">Safety Concern</div>
                <div class="field-value {{ $tip->safety_concern ? 'bool-yes' : 'bool-no' }}">{{ $tip->safety_concern ? 'Yes' : 'No' }}</div>
            </div>
            <div class="field">
                <div class="field-label">Consents to Publish</div>
                <div class="field-value {{ $tip->consents_publish ? 'bool-yes' : 'bool-no' }}">{{ $tip->consents_publish ? 'Yes' : 'No' }}</div>
            </div>
        </div>

        {{-- Contact (gold box when not anonymous) --}}
        @if (!$tip->is_anonymous)
        <div class="contact-box">
            <div class="section-title">Contact Details</div>
            <div class="field">
                <div class="field-label">Name</div>
                <div class="field-value {{ $tip->contact_name ? '' : 'muted' }}">{{ $tip->contact_name ?: '—' }}</div>
            </div>
            <div class="field">
                <div class="field-label">Email</div>
                <div class="field-value {{ $tip->contact_email ? '' : 'muted' }}">{{ $tip->contact_email ?: '—' }}</div>
            </div>
            <div class="field">
                <div class="field-label">Phone</div>
                <div class="field-value {{ $tip->contact_phone ? '' : 'muted' }}">{{ $tip->contact_phone ?: '—' }}</div>
            </div>
            <div class="field">
                <div class="field-label">Preferred Contact</div>
                <div class="field-value {{ $tip->contact_pref ? '' : 'muted' }}">{{ $tip->contact_pref ?: '—' }}</div>
            </div>
            <div class="field">
                <div class="field-label">Notes</div>
                <div class="field-value {{ $tip->contact_notes ? '' : 'muted' }}">{{ $tip->contact_notes ?: '—' }}</div>
            </div>
        </div>
        @else
        <div class="section">
            <div class="section-title">Contact</div>
            <div class="field">
                <div class="field-label">Anonymous</div>
                <div class="field-value muted">This submission was made anonymously.</div>
            </div>
        </div>
        @endif

    </div>

</body>
</html>
