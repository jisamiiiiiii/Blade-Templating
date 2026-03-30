@extends('layouts.app')

@section('content')
<style>
    
    .status-container { margin-bottom: 25px; display: flex; gap: 12px; }
    .status-chip { font-size: 10px; background: #f0f0f0; padding: 6px 10px; border-radius: 6px; color: #555; font-weight: 500; border: 1px solid #e5e5e5; }

    .bento-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 20px; }
    .bento-card { background: #fbfbfd; border-radius: 15px; padding: 25px; border: 1px solid #efeff4; }
    
    .stat-label { font-size: 13px; color: #86868b; font-weight: 600; }
    .stat-value { font-size: 22px; font-weight: 500; color: #1d1d1f; margin: 10px 0; }
    .subject-list { list-style: none; margin-top: 15px; }
    .subject-item { 
        background: white; 
        padding: 15px; 
        border-radius: 12px; 
        margin-bottom: 10px; 
        box-shadow: 0 2px 5px rgba(0,0,0,0.02); 
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 14px;
    }
    .status-badge { background: #34c759; color: white; font-size: 10px; padding: 4px 8px; border-radius: 20px; text-transform: uppercase; font-weight: 800; }

    .footer-section { margin-top: 50px; border-top: 1px solid #efeff4; padding-top: 20px; text-align: center; }
</style>

<div class="status-container">
    <span class="status-chip">
        STATUS: <strong>@upper('authenticated')</strong>
    </span>
    <span class="status-chip">
        SESSION ID: <strong>@lower('UM-STUDENT-PORTAL-2026')</strong>
    </span>
</div>

<div class="bento-grid">
    <div class="bento-card">
        <p class="stat-label">Welcome Message</p>
        <p class="stat-value">Welcome to your dashboard, {{ $name }}!</p> 
        <p style="color: #666; font-size: 14px;">You are currently logged into the BSIT Academic Portal.</p>
        
        <h4 style="margin-top: 30px; font-size: 14px; color: #86868b;">CURRENT ENROLLMENT</h4>
        <ul class="subject-list">
            @if($isEnrolled)
                @foreach($subjects as $subject)
                    <li class="subject-item">
                        {{ $subject }}
                        <span class="status-badge">Active</span>
                    </li>
                @endforeach
            @else
                <p style="color: #ff3b30; margin-top: 10px;">Account restricted. Please enroll.</p>
            @endif
        </ul>
    </div>

    <div class="bento-card" style="background: var(--school-red); color: white;">
        <p style="opacity: 0.8; font-size: 11px; font-weight: 700; letter-spacing: 1px;">STUDENT PROFILE</p>
        <h2 style="font-size: 24px; margin: 15px 0;">{{ $name }}</h2>
        <p style="opacity: 0.9; font-size: 14px;">Program: {{ $course }}</p>
        <hr style="margin: 20px 0; opacity: 0.2;">
        <p style="font-size: 12px; opacity: 0.8;">Academic Year: 2025-2026</p>
    </div>
</div>

<footer class="footer-section">
    <p style="font-size: 12px; color: #86868b;">
        © 2026 {{ $universityName }} | All Rights Reserved.
    </p>
</footer>

@endsection