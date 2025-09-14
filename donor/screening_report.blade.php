@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Screening Report for Donation #{{ $donation->id }}</h2>

    <p><strong>Donor Name:</strong> {{ $donation->donor->username ?? 'N/A' }}</p>
    <p><strong>Blood Group:</strong> {{ $donation->blood_group }}</p>
    <p><strong>Status:</strong> {{ ucfirst($donation->status) }}</p>

    @if($donation->screeningReport)
        <div style="margin-top:20px;">
            <a href="{{ asset('storage/'.$donation->screeningReport->file_path) }}" target="_blank"
               style="background:#007bff; color:white; padding:8px 14px; border-radius:5px; text-decoration:none;">
                View Report
            </a>

            <a href="{{ asset('storage/'.$donation->screeningReport->file_path) }}" download
               style="background:#28a745; color:white; padding:8px 14px; border-radius:5px; text-decoration:none; margin-left:10px;">
                Download
            </a>
        </div>
    @else
        <p style="color:red;">No screening report available.</p>
    @endif
</div>
@endsection
