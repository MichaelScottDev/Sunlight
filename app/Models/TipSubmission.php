<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'subject',
        'subject_other',
        'summary',
        'evidence_type',
        'drive_link',
        'direct_url',
        'evidence_desc',
        'wants_pickup',
        'pickup_suburb',
        'pickup_timing',
        'pickup_notes',
        'relation_to_subject',
        'has_corroboration',
        'reported_before',
        'safety_concern',
        'consents_publish',
        'is_anonymous',
        'contact_name',
        'contact_phone',
        'contact_email',
        'contact_pref',
        'contact_notes',
        'status',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'wants_pickup'      => 'boolean',
        'has_corroboration' => 'boolean',
        'reported_before'   => 'boolean',
        'safety_concern'    => 'boolean',
        'consents_publish'  => 'boolean',
        'is_anonymous'      => 'boolean',
    ];
}
