@extends('layouts.app')

@section('title')
    testformLoop2
@endsection

@section('content')
    <style>
        #page-1,
        #page-2 {
            display: none;
        }

        #page-1.active,
        #page-2.active {
            display: block;
        }
    </style>
    <form id="scoreForm" action="{{ route('form_test2.store') }}" method="POST">
        <div id="page-1" class="active">
            <div class="flex justify-center">
                <div>
                    @csrf <!-- ป้องกัน CSRF (จำเป็นใน Laravel) -->
                    <div class="mb-[2rem]">
                        <h1 class="text-3xl">หน้ากรอกข้อมูลของผู้ให้ข้อมูล</h1>
                        <p class="text-gray-500">เมื่อกรอกครบเเลวกดปุ่มถัดไปเพื่อทำเเบบสอบถามได้เลย</p>
                    </div>
                    <div class="border-b border-white border-t py-2 mb-[2rem]">

                        <div class="mb-[1rem] border-b border-white">
                            <div class="mb-4">
                                <label for="question">ชื่อ นามสกุล (ผู้ให้ข้อมูล)</label><br>
                                <input class="rounded-lg w-[29.7rem] pl-2 p-2" type="text" name="informant_name"
                                    id="informant_name" required>
                            </div>
                            <div class="flex gap-4">
                                <div class="mb-4">
                                    <label for="question">อายุ (ผู้ให้ข้อมูล)</label><br>
                                    <input class="rounded-lg w-[6rem] pl-2 p-2" type="number" name="informant_age"
                                        id="informant_age" required>
                                </div>
                                <div class="mb-4">
                                    <label for="question">เกี่ยวข้องเป็น</label><br>
                                    <input class="rounded-lg w-[22rem] pl-2 p-2" type="text" name="related"
                                        id="related" required>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div classinformant_name <label for="question">ชื่อ นามสกุล (ผู้ป่วย)</label><br>
                                <input class="rounded-lg w-[29.7rem] pl-2 p-2" type="text" name="patient_name"
                                    id="patient_name" required>
                            </div>
                            <div class="flex gap-7">
                                <div class="mb-4">
                                    <label for="question">รหัสผู้ป่วย (HN)</label><br>
                                    <input class="rounded-lg w-[22rem] pl-2 p-2" type="text" name="HN"
                                        id="HN" required>
                                </div>
                                <div class="mb-4">
                                    <label for="question">อายุ (ผู้ป่วย)</label><br>
                                    <input class="rounded-lg w-[6em] pl-2 p-2" type="number" name="patient_age"
                                        id="patient_age" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="flex justify-end">
                        <button onclick="changePageHandle(2)" class="bg-[#f45a15] p-2 text-white rounded-lg"
                            type="button">ถัดไป</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="page-2">
            @php
                $questionNumber = 1; // เริ่มนับจาก 1
            @endphp
            @foreach ($groupedChoices as $questionId => $choices)
                <div class="border-b border-white p-[2rem] mb-[2rem]">
                    @if ($choices->first()->question->q_status === 'start')
                        <label for="option{{ $questionId }}">
                            <h1 class="text-2xl mb-2"> {{ $questionNumber }}.{{ $choices->first()->question->question }}</h1>
                        </label>
                        @php
                            $questionNumber++; // เพิ่มหมายเลขคำถาม
                            $choiceIndex = 0; // ตัวแปรเริ่มต้นนับหมายเลข choice
                        @endphp
                        @if ($choices->first()->question->q_type === 'radio')
                            @foreach ($choices as $item)
                                @if ($item->c_status === 'start')
                                    <!-- ส่งค่า question_id และ choice_id -->
                                    <div class="pl-4">
                                        <input type="hidden" name="scores[{{ $loop->parent->index }}][question_id]"
                                            value="{{ $item->question->id }}">
                                        <input type="radio" name="scores[{{ $loop->parent->index }}][choice_id]"
                                            value="{{ $item->point }}">
                                        <label for="option{{ $loop->index }}" class="text-lg">{{ $choiceIndex }}.
                                            {{ $item->choice }}</label><br>
                                    </div>
                                    @php $choiceIndex++; @endphp
                                @endif
                            @endforeach
                        @elseif ($choices->first()->question->q_type === 'checkbox')
                            @foreach ($choices as $item)
                                @if ($item->c_status === 'start')
                                    <!-- ส่งค่า question_id และ choice_id -->
                                    <div class="pl-4">
                                        <input type="hidden" name="scores[{{ $loop->parent->index }}][question_id]"
                                            value="{{ $item->question->id }}">
                                        <input type="checkbox" name="scores[{{ $loop->parent->index }}][choice_id][]"
                                            value="{{ $item->point }}">
                                        <label for="option{{ $loop->index }}" class="text-lg">{{ $choiceIndex }}.
                                            {{ $item->choice }}</label><br>
                                    </div>
                                    @php $choiceIndex++; @endphp
                                @endif
                            @endforeach
                        @endif
                    @endif
                </div>
            @endforeach
            <div class="flex justify-between ml-[4rem] mr-[4rem]">
                <button onclick="changePageHandle(1)" class="bg-[#f45a15] p-2 text-white rounded-lg"
                    type="button">กลับ</button>
                <button class="bg-[#00a651] p-2 text-white rounded-lg" type="submit">ส่งแบบสอบถาม</button>
            </div>
        </div>
    </form>

    <script>
        function changePageHandle(pageNumber) {
            // รีเซ็ตการแสดงผลทุกหน้า
            document.getElementById("page-1").classList.remove("active");
            document.getElementById("page-2").classList.remove("active");

            // แสดงหน้าที่เลือก
            if (pageNumber === 1) {
                document.getElementById("page-1").classList.add("active");
            } else if (pageNumber === 2) {
                document.getElementById("page-2").classList.add("active");
            }
        }


        document.addEventListener('DOMContentLoaded', () => {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            let lastSelectedValue = null;

            // Function to hide all checkboxes except the one selected with value = 0
            function hideOtherCheckboxes() {
                checkboxes.forEach(checkbox => {
                    if (checkbox.value !== "0") {
                        checkbox.style.display = 'none'; // Hide checkboxes with value > 0
                    }
                });
            }

            // Function to show all checkboxes
            function showAllCheckboxes() {
                checkboxes.forEach(checkbox => {
                    checkbox.style.display = ''; // Show all checkboxes
                });
            }

            // Checkbox change event listener
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', () => {
                    const selectedValue = checkbox.value;

                    if (selectedValue === "0") {
                        if (lastSelectedValue === "0") {
                            // If the same checkbox with value 0 is clicked again, show all checkboxes
                            showAllCheckboxes();
                        } else {
                            // Hide all checkboxes with value > 0
                            hideOtherCheckboxes();
                        }
                        lastSelectedValue = selectedValue; // Store the selected value
                    } else {
                        // If a checkbox with value > 0 is selected, show all checkboxes
                        showAllCheckboxes();
                        lastSelectedValue = selectedValue; // Store the selected value
                    }
                });
            });
        });
    </script>
@endsection