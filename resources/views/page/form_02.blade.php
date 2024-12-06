@extends('layouts.app')

@section('title')
    สภาพเเวดล้อมภายในบ้าน
@endsection

@section('content')



<form action="{{ route('form_02.process') }}" method="POST">
    @csrf
    <label for="">2. สภาพแวดล้อมภายในบ้าน (ตอบได้มากกว่า 1 ข้อ) ข้อละ 1 คะแนน</label><br>

    <input type="checkbox" name="income[]" value="1" id="option0"
        {{ is_array($selectedIncome) && in_array('0', $selectedIncome) ? 'checked' : '' }}>
    <label for="option0">0. ไม่มีที่อยู่แน่นอน เร่ร่อน ไร้บ้าน</label><br>

    <input type="checkbox" name="income[]" value="1" id="option1"
        {{ is_array($selectedIncome) && in_array('1', $selectedIncome) ? 'checked' : '' }}>
    <label for="option1">1. มีที่อยู่แน่นอน แต่สภาพแวดล้อมไม่เหมาะสม</label><br>

    <input type="checkbox" name="income[]" value="1" id="option2"
        {{ is_array($selectedIncome) && in_array('2', $selectedIncome) ? 'checked' : '' }}>
    <label for="option2">2. ที่อยู่มีความเป็นสัดส่วน</label><br>

    <input type="checkbox" name="income[]" value="1" id="option3"
        {{ is_array($selectedIncome) && in_array('3', $selectedIncome) ? 'checked' : '' }}>
    <label for="option3">3. ที่อยู่ถุกสุขลักษณะ ความสะอาด เรียบร้อย</label><br>

    <input type="checkbox" name="income[]" value="1" id="option4"
        {{ is_array($selectedIncome) && in_array('4', $selectedIncome) ? 'checked' : '' }}>
    <label for="option4">4. ที่อยู่มีความปลอยภัยทางกายภาพ</label><br>

    <input type="checkbox" name="income[]" value="1" id="option5"
        {{ is_array($selectedIncome) && in_array('5', $selectedIncome) ? 'checked' : '' }}>
    <label for="option5">5. ที่อยู่มีพื้นที่ว่างในการทำกิจกรรม</label><br>

    <button type="submit">ไปหน้าถัดไป</button>
</form>
<a href="{{ route('form_01') }}">
    <button type="button">กลับไปหน้าก่อน</button>
</a>
@endsection
