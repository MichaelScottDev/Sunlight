<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin Dashboard — Sunlight.Quest</title>
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

        /* Main content */
        .main { padding: 2rem 1.75rem; max-width: 1200px; margin: 0 auto; }

        .page-title {
            font-size: 0.5rem;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            color: rgba(245,234,212,0.25);
            margin-bottom: 1.5rem;
        }

        /* Stats */
        .stats {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }
        .stat-box {
            flex: 1;
            min-width: 140px;
            border: 1px solid rgba(245,234,212,0.08);
            background: rgba(245,234,212,0.02);
            padding: 1.1rem 1.25rem;
        }
        .stat-label {
            font-size: 0.45rem;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            color: rgba(245,234,212,0.25);
            margin-bottom: 0.4rem;
        }
        .stat-number {
            font-family: 'Arial Black', Arial, sans-serif;
            font-size: 1.8rem;
            line-height: 1;
        }
        .stat-number.white  { color: #f5ead4; }
        .stat-number.red    { color: #c1440e; }
        .stat-number.green  { color: #3d7a4a; }

        /* Table */
        .table-wrap {
            border: 1px solid rgba(245,234,212,0.07);
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.78rem;
        }
        thead tr {
            border-bottom: 1px solid rgba(245,234,212,0.08);
        }
        thead th {
            padding: 0.7rem 0.9rem;
            text-align: left;
            font-size: 0.44rem;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: rgba(245,234,212,0.25);
            font-weight: normal;
            white-space: nowrap;
        }
        tbody tr {
            border-bottom: 1px solid rgba(245,234,212,0.04);
            transition: background 0.15s;
        }
        tbody tr:last-child { border-bottom: none; }
        tbody tr:hover { background: rgba(245,234,212,0.03); }
        tbody td {
            padding: 0.75rem 0.9rem;
            vertical-align: middle;
        }
        tbody tr a {
            display: contents;
            color: inherit;
            text-decoration: none;
        }
        .row-link {
            display: table-row;
            color: inherit;
            text-decoration: none;
        }
        .row-link:hover td { background: rgba(245,234,212,0.03); }

        .td-date  { color: rgba(245,234,212,0.45); font-size: 0.72rem; white-space: nowrap; }
        .td-subject { color: #f5ead4; }
        .td-none  { color: rgba(245,234,212,0.3); font-style: italic; }
        .td-summary { color: rgba(245,234,212,0.6); font-size: 0.75rem; }
        .td-contact { font-size: 0.75rem; }
        .td-anon  { color: rgba(245,234,212,0.3); font-style: italic; }

        /* Status badges */
        .badge {
            display: inline-block;
            font-size: 0.42rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            padding: 0.25rem 0.55rem;
            border-radius: 2px;
            white-space: nowrap;
        }
        .badge-new      { background: rgba(193,68,14,0.2); color: #e05a25; border: 1px solid rgba(193,68,14,0.35); }
        .badge-read     { background: rgba(201,138,16,0.15); color: #c98a10; border: 1px solid rgba(201,138,16,0.3); }
        .badge-reviewed { background: rgba(61,122,74,0.2); color: #4fa062; border: 1px solid rgba(61,122,74,0.35); }
        .badge-actioned { background: rgba(245,234,212,0.06); color: rgba(245,234,212,0.4); border: 1px solid rgba(245,234,212,0.12); }

        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 3.5rem 1rem;
            color: rgba(245,234,212,0.25);
            font-size: 0.78rem;
            letter-spacing: 0.1em;
        }

        /* Pagination */
        .pagination-wrap {
            margin-top: 1.5rem;
            display: flex;
            justify-content: center;
            gap: 0.35rem;
            flex-wrap: wrap;
        }
        .pagination-wrap a,
        .pagination-wrap span {
            display: inline-block;
            padding: 0.35rem 0.65rem;
            font-size: 0.7rem;
            border: 1px solid rgba(245,234,212,0.1);
            color: rgba(245,234,212,0.45);
            text-decoration: none;
            transition: border-color 0.15s, color 0.15s;
        }
        .pagination-wrap a:hover { border-color: #c1440e; color: #c1440e; }
        .pagination-wrap span.active { border-color: #c1440e; color: #c1440e; }
        .pagination-wrap span.disabled { opacity: 0.3; }
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
        <div class="page-title">Tip Submissions Dashboard</div>

        {{-- Stats --}}
        <div class="stats">
            <div class="stat-box">
                <div class="stat-label">Total Submissions</div>
                <div class="stat-number white">{{ $total }}</div>
            </div>
            <div class="stat-box">
                <div class="stat-label">New</div>
                <div class="stat-number red">{{ $newCount }}</div>
            </div>
            <div class="stat-box">
                <div class="stat-label">Reviewed</div>
                <div class="stat-number green">{{ $reviewedCount }}</div>
            </div>
        </div>

        {{-- Table --}}
        <div class="table-wrap">
            @if ($tips->isEmpty())
                <div class="empty-state">No submissions yet.</div>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Subject</th>
                            <th>Summary</th>
                            <th>Contact</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tips as $tip)
                        <tr onclick="window.location='/admin/tips/{{ $tip->id }}'" style="cursor:pointer">
                            <td class="td-date">{{ $tip->created_at->format('d M Y g:ia') }}</td>
                            <td class="td-subject">
                                @if ($tip->subject)
                                    {{ $tip->subject }}
                                @else
                                    <span class="td-none">No subject</span>
                                @endif
                            </td>
                            <td class="td-summary">{{ Str::limit($tip->summary, 80) }}</td>
                            <td class="td-contact">
                                @if (!$tip->is_anonymous && $tip->contact_email)
                                    {{ $tip->contact_email }}
                                @else
                                    <span class="td-anon">Anonymous</span>
                                @endif
                            </td>
                            <td>
                                @php
                                    $badgeClass = match($tip->status) {
                                        'new'      => 'badge-new',
                                        'read'     => 'badge-read',
                                        'reviewed' => 'badge-reviewed',
                                        default    => 'badge-actioned',
                                    };
                                @endphp
                                <span class="badge {{ $badgeClass }}">{{ $tip->status }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        {{-- Pagination --}}
        @if ($tips->hasPages())
        <div class="pagination-wrap">
            {{-- Previous --}}
            @if ($tips->onFirstPage())
                <span class="disabled">&laquo;</span>
            @else
                <a href="{{ $tips->previousPageUrl() }}">&laquo;</a>
            @endif

            {{-- Page numbers --}}
            @foreach ($tips->getUrlRange(1, $tips->lastPage()) as $page => $url)
                @if ($page == $tips->currentPage())
                    <span class="active">{{ $page }}</span>
                @else
                    <a href="{{ $url }}">{{ $page }}</a>
                @endif
            @endforeach

            {{-- Next --}}
            @if ($tips->hasMorePages())
                <a href="{{ $tips->nextPageUrl() }}">&raquo;</a>
            @else
                <span class="disabled">&raquo;</span>
            @endif
        </div>
        @endif
    </div>

</body>
</html>
