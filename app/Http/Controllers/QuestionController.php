<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    // แสดงรายการคำถามทั้งหมด
    public function index()
    {
        $questions = Questions::all();
        return view('/admin/question.index', ['questions' => $questions]);
    }

    // แสดงฟอร์มสร้างคำถามใหม่
    public function create()
    {
        return view('/admin/question.create');
    }

    // บันทึกคำถามใหม่ลงฐานข้อมูล
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'q_type' => 'required',
            'q_status' => 'required',
        ]);

        Questions::create($request->only('question', 'q_type', 'q_status'));

        return redirect()->route('question.index')->with('success', 'เพิ่มคำถามสำเร็จ');
    }

    public function show(Questions $question)
{
    return view('question.show', compact('question'));
}

public function edit($id)
{
    $question = Questions::findOrFail($id); // ดึงโมเดลตาม id
    return view('admin.question.edit', compact('question'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'question' => 'required',
        'q_type' => 'required|in:radio,checkbox',
        'q_status' => 'required|in:start,stop',
    ]);

    $question = Questions::findOrFail($id); // ดึงโมเดลตาม id
    $question->update($request->only(['question', 'q_type', 'q_status']));

    return redirect()->route('question.index')->with('success', 'แก้ไขคำถามสำเร็จ');
}
}
