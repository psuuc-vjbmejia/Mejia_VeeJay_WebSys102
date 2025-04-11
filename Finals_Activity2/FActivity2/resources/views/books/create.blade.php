<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #212529;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container {
            max-width: 500px;
            margin: 0 auto;
        }

        .mb-3 {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #495057;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="date"]:focus {
            border-color: #28a745;
            outline: none;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.3);
        }

        button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin-right: 10px;
        }

        button:hover {
            background-color: #218838;
        }

        a.cancel-link {
            display: inline-block;
            color: #6c757d;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 14px;
            border: 1px solid #6c757d;
            border-radius: 4px;
        }

        a.cancel-link:hover {
            background-color: #6c757d;
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Add New Book</h1>
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="author">Author:</label>
                    <input type="text" id="author" name="author" required>
                </div>
                <div class="mb-3">
                    <label for="published_date">Published Date:</label>
                    <input type="date" id="published_date" name="published_date" required>
                </div>
                <button type="submit">Save</button>
                <a href="{{ route('books.index') }}" class="cancel-link">Cancel</a>
            </form>
        </div>
    </div>
</body>
</html>