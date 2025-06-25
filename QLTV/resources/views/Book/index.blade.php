<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư viện sách</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        
        body {
            background-color: #f2f6fa; 
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }

      
        .navbar {
            background-color: #ffffff; 
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Bóng mờ */
            border-radius: 0 0 8px 8px; /* Bo tròn các góc dưới */
        }
        .navbar-nav .nav-link {
            color: #333; /* Chữ màu tối cho các liên kết */
            font-weight: bold;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            background-color: #e9ecef; /* Màu xám nhạt khi di chuột qua */
        }
        .search-container {
            display: flex;
            align-items: center;
        }
        .search-container .form-control {
            border-radius: 0.5rem 0 0 0.5rem; /* Bo tròn bên trái */
            border-color: #ced4da;
        }
        .search-container .btn-primary {
            background-color: #007bff; 
            border-color: #007bff;
            border-radius: 0 0.5rem 0.5rem 0; /* Bo tròn bên phải */
            padding: 0.375rem 0.75rem; 
        }
        .search-container .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

    
        .container-main {
            flex-grow: 1; 
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 30px;
            background-color: #ffffff; /* Nền trắng cho thẻ chính */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

     
        .main-heading {
            text-align: center;
            font-weight: bold;
            color: #333;
            margin-bottom: 30px;
            font-size: 2.25rem; /* Kích thước font lớn hơn */
        }

      
        .table {
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 8px; 
            overflow: hidden; 
            margin-bottom: 20px; 
        }
        .table thead {
            background-color: #64c6f5; 
            color: #000; 
            text-align: center;
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
            padding: 12px; 
            border: 1px solid #dee2e6; 
        }

        .table thead th:first-child {
            border-top-left-radius: 8px;
        }
        .table thead th:last-child {
            border-top-right-radius: 8px;
        }

       
        .btn-sm {
            padding: 0.25rem 0.75rem;
            font-size: 0.875rem;
            border-radius: 0.5rem; 
        }
        .btn-edit {
            background-color: #28a745; 
            border-color: #28a745;
            color: white;
            transition: background-color 0.3s ease;
        }
        .btn-edit:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .btn-delete {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
            margin-left: 5px; 
            transition: background-color 0.3s ease;
        }
        .btn-delete:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .btn-save {
            background-color: #007bff; 
            border-color: #007bff;
            color: white;
            transition: background-color 0.3s ease;
        }
        .btn-save:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-cancel {
            background-color: #6c757d; 
            border-color: #6c757d;
            color: white;
            margin-left: 5px;
            transition: background-color 0.3s ease;
        }
        .btn-cancel:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        /* Nút Tạo */
        .btn-create {
            display: block;
            margin: 20px auto 0 auto;
            background-color: #007bff;
            border-color: #007bff;
            color: white;
            padding: 12px 35px;
            font-size: 1.1rem; 
            border-radius: 0.5rem; 
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-create:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            transform: translateY(-2px); 
        }

       
        .footer {
            background-color: #343a40; 
            color: #f8f9fa;
            padding: 30px 0;
            text-align: center;
            border-radius: 8px 8px 0 0; 
            margin-top: auto; 
        }
        .footer p {
            margin-bottom: 5px;
            font-size: 0.9rem;
        }
        .footer strong {
            color: #ffffff;
        }
        .footer i {
            margin-right: 8px;
            color: #007bff; 
        }

    
        @media (max-width: 768px) {
            .navbar-nav {
                flex-direction: column;
                align-items: flex-start;
            }
            .search-container {
                width: 100%;
                margin-top: 10px;
            }
            .search-container .form-control {
                border-radius: 0.5rem; 
            }
            .search-container .btn-primary {
                border-radius: 0.5rem; 
                margin-left: 10px;
            }
            .table th, .table td {
                padding: 8px; 
                font-size: 0.9rem;
            }
            .btn-sm {
                font-size: 0.75rem;
                padding: 0.2rem 0.5rem;
            }
            .btn-delete {
                margin-left: 2px;
            }
            .btn-create {
                padding: 10px 25px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mượn sách</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.blade.php">Quản lý sách</a>
                    </li>
                </ul>
                <div class="search-container">
                    <input type="text" class="form-control" placeholder="Tìm kiếm sách..." id="searchInput">
                    <button class="btn btn-primary" type="button" id="searchButton">Tìm</button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-main">
        <h2 class="main-heading">sách hiện có trong thư viện</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên Sách</th>
                    <th>Mã sách</th>
                    <th>Tác giả</th>
                    <th>tùy chỉnh</th>
                </tr>
            </thead>
            <tbody id="bookTableBody">
                <tr data-book-id="1">
                    <td contenteditable="false">Lập trình Web nâng cao</td>
                    <td contenteditable="false">WEB123</td>
                    <td contenteditable="false">Phenikaa University</td>
                    <td>
                        <button class="btn btn-edit btn-sm" data-action="edit">Edit</button>
                        <button class="btn btn-delete btn-sm" data-action="delete">Delete</button>
                    </td>
                </tr>
                <tr data-book-id="2">
                    <td contenteditable="false">Cơ sở dữ liệu</td>
                    <td contenteditable="false">DB456</td>
                    <td contenteditable="false">Phenikaa University</td>
                    <td>
                        <button class="btn btn-edit btn-sm" data-action="edit">Edit</button>
                        <button class="btn btn-delete btn-sm" data-action="delete">Delete</button>
                    </td>
                </tr>
                <tr data-book-id="3">
                    <td contenteditable="false">Kĩ thuật phần mềm</td>
                    <td contenteditable="false">kt13</td>
                    <td contenteditable="false">Phenikaa University</td>
                    <td>
                        <button class="btn btn-edit btn-sm" data-action="edit">Edit</button>
                        <button class="btn btn-delete btn-sm" data-action="delete">Delete</button>
                    </td>
                </tr>
                <tr data-book-id="4">
                    <td contenteditable="false">Hệ điều hành</td>
                    <td contenteditable="false">hdh01</td>
                    <td contenteditable="false">Phenikaa University</td>
                    <td>
                        <button class="btn btn-edit btn-sm" data-action="edit">Edit</button>
                        <button class="btn btn-delete btn-sm" data-action="delete">Delete</button>
                    </td>
                </tr>
                <tr data-book-id="5">
                    <td contenteditable="false">Lập trình hướng đối tượng</td>
                    <td contenteditable="false">oop25</td>
                    <td contenteditable="false">Phenikaa University</td>
                    <td>
                        <button class="btn btn-edit btn-sm" data-action="edit">Edit</button>
                        <button class="btn btn-delete btn-sm" data-action="delete">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <button class="btn btn-primary btn-create" id="createButton">Create</button>
    </div>

    <footer class="footer">
        <p><strong>Liên hệ với chúng tôi</strong></p>
        <p><i class="fas fa-map-marker-alt"></i> Địa chỉ: Số 47 Bà Triệu, Hoàn Kiếm, Hà Nội, Việt Nam</p>
        <p><i class="fas fa-envelope"></i> Email: trungtamthuvien@gmail.com</p>
        <p><i class="fas fa-phone"></i> Điện thoại: 028 39 969 661</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // JavaScript cho các tương tác nút
        document.addEventListener('DOMContentLoaded', function() {
            const bookTableBody = document.getElementById('bookTableBody');
            const createButton = document.getElementById('createButton');
            const searchInput = document.getElementById('searchInput');
            const searchButton = document.getElementById('searchButton');

            // Bộ đếm cho ID sách mới (để mô phỏng phía client)
            let nextBookId = 6;

            // Hàm đính kèm trình lắng nghe sự kiện vào các nút
            function attachButtonListeners() {
                // Xóa các trình lắng nghe hiện có để tránh trùng lặp
                bookTableBody.querySelectorAll('.btn-edit, .btn-delete, .btn-save-row, .btn-cancel-row').forEach(button => {
                    button.removeEventListener('click', handleButtonClick);
                });

                // Thêm các trình lắng nghe mới
                bookTableBody.querySelectorAll('.btn-edit, .btn-delete, .btn-save-row, .btn-cancel-row').forEach(button => {
                    button.addEventListener('click', handleButtonClick);
                });
            }

            // Trình xử lý nhấp nút tập trung
            function handleButtonClick(event) {
                const button = event.target;
                const action = button.dataset.action;
                const row = button.closest('tr');
                const bookId = row.dataset.bookId;
                const bookNameCell = row.querySelector('td:nth-child(1)'); // Tên Sách
                const bookCodeCell = row.querySelector('td:nth-child(2)'); // Mã sách
                const bookAuthorCell = row.querySelector('td:nth-child(3)'); // Tác giả

                switch (action) {
                    case 'edit':
                        // Cho phép chỉnh sửa nội dung
                        bookNameCell.contentEditable = true;
                        bookCodeCell.contentEditable = true;
                        bookAuthorCell.contentEditable = true;
                        // Thêm một lớp để làm nổi bật các ô có thể chỉnh sửa (tùy chọn)
                        bookNameCell.classList.add('table-active');
                        bookCodeCell.classList.add('table-active');
                        bookAuthorCell.classList.add('table-active');

                        // Tập trung vào ô đầu tiên có thể chỉnh sửa
                        bookNameCell.focus();

                        // Thay đổi các nút thành Lưu và Hủy
                        button.textContent = 'Save';
                        button.classList.remove('btn-edit');
                        button.classList.add('btn-save', 'btn-save-row');
                        button.dataset.action = 'save';

                        const deleteButton = row.querySelector('.btn-delete');
                        deleteButton.textContent = 'Cancel';
                        deleteButton.classList.remove('btn-delete');
                        deleteButton.classList.add('btn-cancel', 'btn-cancel-row');
                        deleteButton.dataset.action = 'cancel';

                        console.log(`Đang chỉnh sửa sách: ${bookNameCell.textContent} (ID: ${bookId})`);
                        break;

                    case 'save':
                        // Lưu thay đổi
                        bookNameCell.contentEditable = false;
                        bookCodeCell.contentEditable = false;
                        bookAuthorCell.contentEditable = false;
                        // Xóa lớp nổi bật
                        bookNameCell.classList.remove('table-active');
                        bookCodeCell.classList.remove('table-active');
                        bookAuthorCell.classList.remove('table-active');

                        // Thay đổi các nút trở lại thành Edit và Delete
                        button.textContent = 'Edit';
                        button.classList.remove('btn-save', 'btn-save-row');
                        button.classList.add('btn-edit');
                        button.dataset.action = 'edit';

                        const cancelButton = row.querySelector('.btn-cancel');
                        cancelButton.textContent = 'Delete';
                        cancelButton.classList.remove('btn-cancel', 'btn-cancel-row');
                        cancelButton.classList.add('btn-delete');
                        cancelButton.dataset.action = 'delete';

                        alert(`Đã lưu thay đổi cho sách: "${bookNameCell.textContent}" (ID: ${bookId})`);
                        console.log(`Đã lưu thay đổi cho sách: ${bookNameCell.textContent} (ID: ${bookId})`);
                        // Trong một ứng dụng thực tế, gửi dữ liệu đến backend ở đây (ví dụ: API fetch)
                        break;

                    case 'delete':
                        if (confirm(`Bạn có chắc muốn xóa sách "${bookNameCell.textContent}" (ID: ${bookId}) không?`)) {
                            row.remove(); // Xóa hàng khỏi bảng
                            alert(`Đã xóa sách: "${bookNameCell.textContent}" (ID: ${bookId})`);
                            console.log(`Đã xóa sách: ${bookNameCell.textContent} (ID: ${bookId})`);
                            // Trong một ứng dụng thực tế, gửi yêu cầu xóa đến backend ở đây
                        } else {
                            console.log(`Đã hủy xóa sách: ${bookNameCell.textContent} (ID: ${bookId})`);
                        }
                        break;

                    case 'cancel':
                        
                        bookNameCell.contentEditable = false;
                        bookCodeCell.contentEditable = false;
                        bookAuthorCell.contentEditable = false;
                        // Xóa lớp nổi bật
                        bookNameCell.classList.remove('table-active');
                        bookCodeCell.classList.remove('table-active');
                        bookAuthorCell.classList.remove('table-active');

                        // Thay đổi các nút trở lại thành Edit và Delete
                        button.textContent = 'Delete';
                        button.classList.remove('btn-cancel', 'btn-cancel-row');
                        button.classList.add('btn-delete');
                        button.dataset.action = 'delete';

                        const saveButton = row.querySelector('.btn-save');
                        saveButton.textContent = 'Edit';
                        saveButton.classList.remove('btn-save', 'btn-save-row');
                        saveButton.classList.add('btn-edit');
                        saveButton.dataset.action = 'edit';

                        console.log(`Đã hủy chỉnh sửa cho sách: ${bookNameCell.textContent} (ID: ${bookId})`);

                        // Nếu đó là một hàng mới được thêm vào đã bị hủy, hãy xóa nó.
                        if (row.dataset.isNew === 'true') {
                            row.remove();
                            console.log('Đã xóa hàng mới sau khi hủy.');
                        }
                        break;
                }
            }

            // Xử lý nhấp nút Create
            createButton.addEventListener('click', function() {
                const newRow = bookTableBody.insertRow(); // Chèn một hàng mới vào cuối
                newRow.dataset.bookId = nextBookId++; // Gán một ID mới
                newRow.dataset.isNew = 'true'; // Đánh dấu là một hàng mới

                // Tạo các ô cho chi tiết sách và cho phép chỉnh sửa
                const nameCell = newRow.insertCell();
                nameCell.contentEditable = true;
                nameCell.textContent = 'Tên Sách Mới';
                nameCell.classList.add('table-active'); // Làm nổi bật các ô có thể chỉnh sửa mới

                const codeCell = newRow.insertCell();
                codeCell.contentEditable = true;
                codeCell.textContent = 'Mã Mới';
                codeCell.classList.add('table-active');

                const authorCell = newRow.insertCell();
                authorCell.contentEditable = true;
                authorCell.textContent = 'Tác Giả Mới';
                authorCell.classList.add('table-active');

                // Tạo ô cho các nút hành động
                const actionsCell = newRow.insertCell();
                actionsCell.innerHTML = `
                    <button class="btn btn-save btn-sm btn-save-row" data-action="save-new">Save</button>
                    <button class="btn btn-cancel btn-sm btn-cancel-row" data-action="cancel-new">Cancel</button>
                `;

                nameCell.focus(); // Tập trung vào ô nhập liệu đầu tiên

                alert('Đã tạo một hàng mới. Vui lòng nhập thông tin và bấm Save!');
                console.log('Đã thêm hàng mới để tạo.');

                // Đính kèm trình lắng nghe vào các nút của hàng mới
                attachButtonListeners();
            });

            // Xử lý Lưu/Hủy cho các hàng mới (trường hợp đặc biệt của lưu/hủy)
            bookTableBody.addEventListener('click', function(event) {
                const button = event.target;
                const action = button.dataset.action;
                const row = button.closest('tr');

                if (action === 'save-new') {
                    const nameCell = row.querySelector('td:nth-child(1)');
                    const codeCell = row.querySelector('td:nth-child(2)');
                    const authorCell = row.querySelector('td:nth-child(3)');

                    // Không cho phép chỉnh sửa nội dung
                    nameCell.contentEditable = false;
                    codeCell.contentEditable = false;
                    authorCell.contentEditable = false;
                    nameCell.classList.remove('table-active');
                    codeCell.classList.remove('table-active');
                    authorCell.classList.remove('table-active');

                    // Thay thế các nút Lưu/Hủy bằng các nút Edit/Delete
                    const actionsCell = row.querySelector('td:nth-child(4)');
                    actionsCell.innerHTML = `
                        <button class="btn btn-edit btn-sm" data-action="edit">Edit</button>
                        <button class="btn btn-delete btn-sm" data-action="delete">Delete</button>
                    `;
                    row.removeAttribute('data-is-new'); // Xóa hàng mới

                    alert(`Đã thêm sách mới: "${nameCell.textContent}"`);
                    console.log(`Đã lưu sách mới: ${nameCell.textContent}`);
                    attachButtonListeners(); // Đính kèm lại trình lắng nghe cho hàng đã cập nhật
                } else if (action === 'cancel-new') {
                    row.remove(); // Xóa hàng mới
                    alert('Đã hủy tạo sách mới.');
                    console.log('Đã hủy tạo sách mới.');
                }
            });


            // Xử lý nhấp nút Tìm kiếm
            searchButton.addEventListener('click', function() {
                const searchTerm = searchInput.value.toLowerCase();
                const rows = bookTableBody.querySelectorAll('tr');

                rows.forEach(row => {
                    const bookName = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
                    const bookCode = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                    const bookAuthor = row.querySelector('td:nth-child(3)').textContent.toLowerCase();

                    // Kiểm tra xem bất kỳ chi tiết sách nào có chứa từ khóa tìm kiếm hay không
                    if (bookName.includes(searchTerm) || bookCode.includes(searchTerm) || bookAuthor.includes(searchTerm)) {
                        row.style.display = ''; // Hiển thị hàng
                    } else {
                        row.style.display = 'none'; // Ẩn hàng
                    }
                });

                if (searchTerm) {
                    console.log(`Đang tìm kiếm: "${searchTerm}"`);
                } else {
                    alert('Vui lòng nhập từ khóa tìm kiếm để lọc bảng.');
                    console.log('Đã nhấp nút tìm kiếm với từ khóa trống, hiển thị tất cả các hàng.');
                    // Nếu từ khóa tìm kiếm trống, hiển thị lại tất cả các hàng
                    rows.forEach(row => row.style.display = '');
                }
            });

            
            attachButtonListeners();
        });
    </script>
</body>
</html>