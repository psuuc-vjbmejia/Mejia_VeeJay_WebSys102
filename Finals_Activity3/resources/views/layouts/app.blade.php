<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1000px;
            margin: 2rem auto;
            background: #fff;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #e9ecef;
            font-weight: bold;
            font-size: 0.9rem;
        }

        td {
            font-size: 0.9rem;
            color: #343a40;
        }

        tr:hover td {
            background-color: #f1f3f5;
        }

        @media (max-width: 576px) {
            .container {
                padding: 1rem;
                margin: 1rem;
            }

            th, td {
                padding: 0.5rem;
                font-size: 0.85rem;
            }
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#myTable').DataTable({
                "paging": true,
                "searching": false,
                "ordering": true,
                "pageLength": 10
            });
        });
    </script>
</body>
</html>