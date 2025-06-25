<?php

namespace App\Http\Controllers;

use App\Models\BorrowRecord;
use App\Models\Book;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBorrowRecordRequest;
use App\Http\Requests\UpdateBorrowRecordRequest;

class BorrowRecordController extends Controller
{
    public function index()
    {
        // Lấy danh sách phiếu mượn cùng với thông tin sách và sinh viên
        $borrowRecords = BorrowRecord::with(['book', 'student'])->get();
        return view('borrow_records.index', compact('borrowRecords'));
    }

    public function create()
    {
        // Lấy danh sách tất cả sách và sinh viên
        $books = Book::all();
        $students = Student::all();
        return view('borrow_records.create', compact('books', 'students'));
    }

    public function store(StoreBorrowRecordRequest $request)
    {
        $validated = $request->validated();

        // Tìm sách theo bookCode 
        $book = Book::where('bookCode', $validated['bookCode'])->first();

        if (!$book) {
            return redirect()->back()->withErrors(['bookError' => 'Không tìm thấy sách với mã code này.'])->withInput();
        }

        // Tạo phiếu mượn mới
        BorrowRecord::create([
            'student_id' => $validated['student_id'],
            'book_id' => $book->id, 
            'borrow_date' => $validated['borrow_date'],
            'return_date' => $validated['return_date'],
        ]);

        return redirect()->route('borrow-records.index')->with('success', 'Phiếu mượn đã được tạo!');
    }

    public function edit(BorrowRecord $borrowRecord)
    {
        // Lấy danh sách sách và sinh viên để hiển thị trong form chỉnh sửa
        $books = Book::all();
        $students = Student::all();
        return view('borrow_records.edit', compact('borrowRecord', 'books', 'students'));
    }

    public function update(UpdateBorrowRecordRequest $request, BorrowRecord $borrowRecord)
    {
        $validated = $request->validated();
        $borrowRecord->update($validated);
        return redirect()->route('borrow-records.index')->with('success', 'Phiếu mượn đã được cập nhật!');
    }

    public function destroy(BorrowRecord $borrowRecord)
    {
        // Xóa phiếu mượn
        $borrowRecord->delete();
        return redirect()->route('borrow-records.index')->with('success', 'Phiếu mượn đã bị xóa!');
    }

    public function show(BorrowRecord $borrowRecord)
    {
        // Tải thông tin sách và sinh viên liên quan đến phiếu mượn
        $borrowRecord->load(['book', 'student']);
        return view('borrow_records.show', compact('borrowRecord'));
    }
}
