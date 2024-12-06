@extends('layouts.app')

@section('title')
    ผลคะเเนนเเละเกณต์การวัด
@endsection

@section('content')
    <div>
        <h1>ข้อมูลผู้ให้ข้อมูล</h1>
        <p>ชื่อ: {{ $informant->informant_name }}</p>
        <p>คะแนนรวม: {{ $informant->total_score }}</p>
        <p>@if ($informant->total_score <= 20)
            <h1>ระดับความพร้อมน้อย</h1>
        @elseif ($informant->total_score <= 30)
            <h1>ระดับความพร้อมปลานกลาง</h1>
        @elseif ($informant->total_score <= 40)
            <h1>ระดับความพร้อมมาก</h1>
        @elseif ($informant->total_score <= 47)
            <h1>ระดับความพร้อมมากที่สุด</h1>
        @endif</p>
        <a href="{{ route('form_test2.store') }}">กลับไปที่ฟอร์ม</a>
    </div>
@endsection
