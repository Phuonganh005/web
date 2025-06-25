<!DOCTYPE html>
<html>
<head>
    <title>Thư viện sách</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f6fa;
        }
        .table thead {
            background-color: #64c6f5;
            color: #000;
            text-align: center;
        }
        .table td, .table th {
            text-align: center;
            vertical-align: middle;
        }
        h2 {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
            font-weight: bold;
        }
        .btn-create {
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>sách hiện có trong thư viện</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên Sách</th>
                    <th>Mã sách</th>
                    <th>Tác giả</th>
                    <th>tùy chỉnh</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->bookName }}</td>
                        <td>{{ $book->bookCode }}</td>
                        <td>{{ $book->bookAuthor }}</td>
                        <td>
                            <a href="{{ url('book.edit', $book->id) }}" class="btn btn-success btn-sm">Edit</a>
                            <form action="{{ url('book.destroy', $book->id) }}" method="POST" style="display:inline-block;">

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('book/create') }}" class="btn btn-primary btn-create">Create</a>
    </div>

</body>
</html>
