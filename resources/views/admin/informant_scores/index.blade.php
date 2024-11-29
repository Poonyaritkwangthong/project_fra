@extends('layouts.admin')

@section('title')
    ตารางคะเเนนของผู้ให้ข้อมูล
@endsection

@section('content')
    <h1 class="text-3xl text-center">ตารางคะเเนนของผู้ให้ข้อมูล</h1>
@endsection

@section('table')
        <table class="w-full border border-gray-400">
            <thead>
              <tr class=" text-gray-600 text-sm border-b text-center bg-[#ffbae9]">
                <th class="p-2 pb-4">ชื่อ นามสกุล (ผู้ให้ข้อมูล)</th>
                <th class="p-2 pb-4">คำถามที่ตอบ</th>
                <th class="p-2 pb-4">ตัวเลือกที่เลือก (ตามคำถาม)</th>
                <th class="p-2 pb-4">คะเเนนรวม</th>
              </tr>
            </thead>
            <tbody>
                  <tr class="text-[#7d8a99] border-b text-center">
                    <td class="p-4"></td>
                    <td class="p-4"></td>
                    <td class="p-4"></td>
                    <td class="p-4"></td>
                  </tr>
            </tbody>
          </table>

@endsection
