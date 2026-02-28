<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 50px auto;
            padding: 40px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
            color: white;
        }

        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background: #4e73df;
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
            transition: 0.3s;
        }

        .tasks {
            margin-top: 40px;
            background: white;
            padding: 20px;
            border-radius: 12px;
            color: #333;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .tasks ul {
            list-style: none;
            padding: 0;
        }

        .tasks li {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .tasks li:last-child {
            border-bottom: none;
        }

        .info {
            margin-top: 30px;
            padding: 15px;
            background: rgba(255,255,255,0.2);
            border-radius: 10px;
            font-size: 14px;
        }
    </style>

    <div class="container">
        <h2>Product List</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['category'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="tasks">
            <h1>Tasks</h1>
            <ul>
                @foreach ($tasks as $task)
                    <li>{{ $task }}</li>
                @endforeach
            </ul>
        </div>

        <div class="info">
            <p><strong>Global Variable:</strong> {{ $sharedVariable }}</p>
            <p><strong>Product Key:</strong> {{ $productKey }}</p>
        </div>
    </div>
</div>