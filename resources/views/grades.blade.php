@extends('layouts.app')

@section('content')
<style>
    .grades-container { background: white; border-radius: 18px; padding: 30px; border: 1px solid rgba(0,0,0,0.05); }
    .grades-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    .grades-table th { text-align: left; font-size: 12px; color: #888; text-transform: uppercase; padding: 15px; border-bottom: 2px solid #f4f4f4; }
    .grades-table td { padding: 20px 15px; font-size: 15px; color: #1d1d1f; border-bottom: 1px solid #f9f9f9; }
    
  
    .grade-val { font-weight: 700; color: var(--school-red); }
    .status-pill { 
    background: rgba(34, 197, 94, 0.15); 
    color: #15803d; 
    padding: 6px 14px; 
    border-radius: 20px; 
    font-size: 11px; 
    font-weight: 800; 
    border: 1px solid rgba(34, 197, 94, 0.3); 
    text-transform: uppercase;
    display: inline-block;
}
</style>

<div class="grades-container">
    <h2 style="font-weight: 600; color: #1d1d1f;">Academic Performance</h2>
    <p style="color: #666; font-size: 14px;">Logged in as: <strong>{{ $name }}</strong></p>

    <table class="grades-table">
        <thead>
            <tr>
                <th>Subject Description</th>
                <th>Final Grade</th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grades as $item)
                <tr>
                    <td>{{ $item['subject'] }}</td>
                    <td class="grade-val">{{ $item['grade'] }}</td>
                    <td><span class="status-pill">PASSED</span></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<footer style="margin-top: 60px; border-top: 1px solid rgba(0,0,0,0.05); padding-top: 20px; text-align: center;">
    <p style="font-size: 12px; color: #999;">
        Official Student Records of {{ $universityName }}
    </p>
</footer>
@endsection