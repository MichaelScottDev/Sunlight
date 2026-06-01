<?php

namespace App\Http\Controllers;

use App\Models\TipSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TipController extends Controller
{
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'summary' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Summary is required'], 422);
        }

        TipSubmission::create([
            'uuid'                => (string) Str::uuid(),
            'subject'             => $request->input('subject'),
            'subject_other'       => $request->input('subject_other'),
            'summary'             => $request->input('summary'),
            'evidence_type'       => $request->input('evidence_type'),
            'drive_link'          => $request->input('drive_link'),
            'direct_url'          => $request->input('direct_url'),
            'evidence_desc'       => $request->input('evidence_desc'),
            'wants_pickup'        => (bool) $request->input('wants_pickup', false),
            'pickup_suburb'       => $request->input('pickup_suburb'),
            'pickup_timing'       => $request->input('pickup_timing'),
            'pickup_notes'        => $request->input('pickup_notes'),
            'relation_to_subject' => $request->input('relation_to_subject'),
            'has_corroboration'   => (bool) $request->input('has_corroboration', false),
            'reported_before'     => (bool) $request->input('reported_before', false),
            'safety_concern'      => (bool) $request->input('safety_concern', false),
            'consents_publish'    => (bool) $request->input('consents_publish', false),
            'is_anonymous'        => (bool) $request->input('is_anonymous', true),
            'contact_name'        => $request->input('contact_name'),
            'contact_phone'       => $request->input('contact_phone'),
            'contact_email'       => $request->input('contact_email'),
            'contact_pref'        => $request->input('contact_pref'),
            'contact_notes'       => $request->input('contact_notes'),
            'status'              => 'new',
            'ip_address'          => $request->ip(),
            'user_agent'          => $request->userAgent(),
        ]);

        return response()->json(['success' => true]);
    }
}
