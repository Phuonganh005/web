<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Hiển thị danh sách tất cả sách.
     */
    public function index()
    {
        $books = Book::all();
        return view('Book.index', compact('books'));
    }

    /**
     * Hiển thị form tạo sách mới.
     */
    public function create()
    {
        return view('Book.create'); // View đặt trong thư mục Book/
    }

    /**
     * Lưu sách mới vào database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bookName' => 'required|string|max:255',
            'bookCode' => 'required|string|max:50|unique:books',
            'bookAuthor' => 'required|string|max:255',
        ]);

        Book::create($request->all());

        return redirect()->route('book.index')->with('success', 'Đã thêm sách mới');
    }

    /**
     * Hiển thị form sửa sách.
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('Book.edit', compact('book'));
    }

    /**
     * Cập nhật thông tin sách.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'bookName' => 'required|string|max:255',
            'bookCode' => 'required|string|max:50|unique:books,bookCode,' . $id,
            'bookAuthor' => 'required|string|max:255',
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());

        return redirect()->route('book.index')->with('success', 'Đã cập nhật sách');
    }

    /**
     * Xóa sách khỏi database.
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('book.index')->with('success', 'Đã xóa sách');
    }
}