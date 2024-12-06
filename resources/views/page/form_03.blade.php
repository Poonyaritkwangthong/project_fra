@extends('layouts.app')

@section('title')
    ความรักใคร่ผูกพันในครอบครัว
@endsection

@section('content')
<h1>หน้าถัดไป</h1>
<p>ตัวเลือกที่คุณเลือกจากหน้าก่อนหน้า:</p>
<ul>
    @foreach ($income as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>

<a href="{{ route('form_02') }}">
    <button type="button">กลับไปหน้าก่อน</button>
</a>
@endsection
