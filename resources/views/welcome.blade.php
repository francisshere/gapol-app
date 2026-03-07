<x-layout>
<x-slot:heading>
    Home
</x-slot>
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        x-layout, x-slot {
            display: contents;
        }

        .container {
            margin: auto;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: clamp(40px, 8vw, 60px) clamp(30px, 10vw, 80px);
            width: 90%;
            max-width: 600px;
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
            font-size: clamp(28px, 6vw, 42px);
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

    <div class="container">
        <h1>Welcome to {{ $name }}</h1>
        <p>Your modern Laravel page is ready.</p>
        <button class="btn">Get Started</button>
    </div>
</x-layout>