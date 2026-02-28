<div>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .wrapper {
            width: 90%;
            max-width: 1000px;
            margin: 60px auto;
            padding: 40px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        th, td {
            padding: 16px;
            text-align: center;
        }

        th {
            background-color: #4e73df;
            color: white;
            font-weight: 600;
        }

        td {
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f8f9fc;
        }

        tr:hover {
            background-color: #e2e6ff;
            transition: 0.3s ease;
        }

        .empty {
            padding: 20px;
            font-weight: 500;
            color: #777;
        }
    </style>

    <div class="wrapper">
        <h1>Product List</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['category'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="empty">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>