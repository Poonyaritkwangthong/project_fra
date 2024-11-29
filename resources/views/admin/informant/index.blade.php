@extends('layouts.admin')

@section('title')
    ตารางผู้ให้ข้อมูล
@endsection

@section('content')
    <h1 class="text-3xl text-center">ตารางผู้ให้ข้อมูล</h1>
@endsection

@section('table')
    <table class="w-full border border-gray-400">
        <thead>
            <tr class=" text-gray-600 text-sm border-b text-center bg-[#ffbae9]">
                <th class="p-2 pb-4">ชื่อ นามสกุล (ผู้ให้ข้อมูล)</th>
                <th class="p-2 pb-4">อายุ (ผู้ให้ข้อมูล)</th>
                <th class="p-2 pb-4">เกี่ยวข้องเป็น</th>
                <th class="p-2 pb-4">ชื่อ นามสกุล (ผู้ป่วย)</th>
                <th class="p-2 pb-4">รหัสผู้ป่วย (HN)</th>
                <th class="p-2 pb-4">อายุ (ผู้ป่วย)</th>
                <th class="p-2 pb-4">จัดการข้อมูล</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-[#7d8a99] border-b text-center">
                <td class="p-4"></td>
                <td class="p-4"></td>
                <td class="p-4"></td>
                <td class="p-4"></td>
                <td class="p-4"></td>
                <td class="p-4"></td>
                <td class="p-4">
                    <div class="bg-[#ffbae9] rounded-lg text-center text-[#d60092]  hover:bg-[#ffd9f3] p-2 text-sm">
                        <button class="">เเก้ไข</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
