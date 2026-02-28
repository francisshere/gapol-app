<html>
<head>
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 60px 80px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .container:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
        }

        h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
            opacity: 0.9;
        }

        .btn {
            margin-top: 25px;
            padding: 12px 28px;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            background: white;
            color: #764ba2;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background: #f3f3f3;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to {{ $name }}</h1>
        <p>Your modern Laravel page is ready.</p>
        <button class="btn">Get Started</button>
    </div>

</body>
</html>