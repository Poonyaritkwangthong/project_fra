<?php

namespace App\Http\Controllers;

use App\Models\Choices;
use App\Models\Questions;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    // แสดงรายการคำถามทั้งหมด
    public function index()
    {
        $choices = Choices::with('question')->get();
        return view('/admin/choice.index', ['choices' => $choices]);
    }

    // แสดงฟอร์มสร้างคำถามใหม่
    public function create()
    {
        $questions = Questions::all();// ดึงคำถามทั้งหมด
        return view('/admin/choice.create', compact('questions'));
    }

    // บันทึกคำถามใหม่ลงฐานข้อมูล
    public function store(Request $request)
    {
        $request->validate([
            'choice' => 'required',
            'point' => 'required',
            'question_id' => 'required',
            'c_status' => 'required',
        ]);

        Choices::create($request->all());

        return redirect()->route('choice.index')->with('success', 'เพิ่มตัวเลือกสำเร็จ');
    }

    public function show(Choices $choice)
    {
        $choice = Choices::with('question')->get();
        return view('choice.show', compact('choice'));
    }

    public function edit($id)
    {
        $choice = Choices::findOrFail($id); // ดึงโมเดลตาม id
        $questions = Questions::all(); // ดึงคำถามสำหรับ dropdown
        return view('admin.choice.edit', compact('choice', 'questions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'choice' => 'required',
            'point' => 'required',
            'question_id' => 'required',
            'c_status' => 'required',
        ]);

        $question = Choices::findOrFail($id); // ดึงโมเดลตาม id
        $question->update($request->all());

        return redirect()->route('choice.index')->with('success', 'แก้ไขตัวเลือกสำเร็จ');
    }
}
