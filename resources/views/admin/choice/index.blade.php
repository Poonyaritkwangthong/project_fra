@extends('layouts.admin')

@section('title')
    ตารางตัวเลือก
@endsection

@section('table')
    <div class="">
        <div class="mx-auto">
        </div>
        <div class="mt-4 w-[96rem] h-full border mx-auto bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-[#7d8a99] text-4xl font-bold mt-2 mb-4">
                ตารางตัวเลือก
            </h1>
            <div class="text-[#707c8a] flex gap-4 justify-end items-center mb-4">
                <div class="">
                    <br />
                    <a href="{{ route('choice.create') }}">
                        <button
                            class="text-center bg-[#ffbae9] text-[#d60092] p-3 rounded-lg w-[22rem] hover:scale-105 delay-100 hover:bg-[#ffd1f1]">
                            เพิ่มตัวเลือก
                        </button>
                    </a>
                </div>
            </div>
            <div class="flex justify-between border-t mb-6">
                <div class="text-[#707c8a] flex gap-2 items-center mt-4">
                    <p>Show</p>
                    <select class="border p rounded-lg">
                        <option >10</option>
                        <option >25</option>
                        <option >50</option>
                        <option >100</option>
                    </select>
                    <p>entries</p>
                </div>
                <div class="text-[#707c8a] flex gap-2 items-center mt-4">
                    <label htmlFor="search">ค้นหา</label>
                    <input id="search" class="border p-1 pl-2 rounded-lg" type="text" placeholder="ค้นหา" />
                </div>
            </div>
            <div class="mx-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-center text-[#7d8a99] text-sm border-b">
                            <th class="p-2 pb-4">ตัวเลือก</th>
                            <th class="p-2 pb-4">คะเเนน (ตามตัวเลือก)</th>
                            <th class="p-2 pb-4">คำถาม (ตัวเลือก)</th>
                            <th class="p-2 pb-4">สถานะ</th>
                            <th class="p-2 pb-4">จัดการข้อมูล</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($choices as $item)
                            <tr class="text-[#7d8a99] border-b text-center">
                                <td class="p-4">{{ $item->choice }}</td>
                                <td class="p-4">{{ $item->point }}</td>
                                <td class="p-4">{{ $item->question->question }}</td>
                                <td class="p-4">{{ $item->c_status }}</td>
                                <td class="p-4">
                                    <div class="flex gap-2 justify-center items-center">
                                        <a href="{{ route('choice.edit', $item->id) }}">
                                            <div
                                                class="bg-[#ffbae9] rounded-lg text-center text-[#d60092]  hover:bg-[#ffd9f3] p-2 text-sm">
                                                <button class="">เเก้ไข</button>
                                            </div>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex justify-between items-center mt-4">
                <p class="text-[#d60092]">จำนวนหน้า</p>

                <div class="flex gap-2">
                    <button class="p-2 bg-gray-100 text-gray-500 rounded-lg hover:scale-105 hover:bg-gray-200 shadow-xl">
                        ย้อนกลับ
                    </button>
                    <button class="p-2 bg-gray-100 text-gray-500 rounded-lg hover:scale-105 hover:bg-gray-200 shadow-xl">
                        ถัดไป
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
