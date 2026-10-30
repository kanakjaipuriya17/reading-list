<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Reading List</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #fff7fa;
            color: #51475b;
        }

        header {
            background: linear-gradient(135deg, #f3d9e8, #e4dcf8);
            padding: 28px 20px;
            border-bottom: 2px solid #eadcf0;
        }

        .header-inner {
            max-width: 1000px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .brand {
            font-size: 27px;
            font-weight: 700;
            color: #765c85;
        }

        .tagline {
            margin: 7px 0 0;
            color: #796b86;
            font-size: 14px;
        }

        .header-icon {
            font-size: 42px;
        }

        main {
            max-width: 1000px;
            margin: 35px auto;
            padding: 0 20px 35px;
        }

        h1, h2, h3 {
            color: #80648e;
        }

        h1 {
            font-size: 30px;
            margin-top: 0;
        }

        p {
            line-height: 1.6;
        }

        a {
            text-decoration: none;
        }

        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #e6d8ee;
            border-radius: 10px;
            margin: 7px 0 16px;
            background: #fff;
            color: #51475b;
            font: inherit;
        }

        input:focus, select:focus {
            outline: 2px solid #d8c5ed;
            border-color: #b99bd4;
        }

        button, .btn {
            display: inline-block;
            padding: 11px 17px;
            border: none;
            border-radius: 10px;
            background: #c9b4e8;
            color: #493958;
            font: inherit;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }

        button:hover, .btn:hover {
            background: #b9a0dd;
        }

        .delete {
            background: #f2c4cc;
            color: #783e50;
        }

        .delete:hover {
            background: #e9aebc;
        }

        .message {
            padding: 14px 16px;
            margin-bottom: 22px;
            border-radius: 10px;
            background: #e0f3e7;
            color: #37664b;
            border: 1px solid #c5e6d1;
        }

        .error {
            padding: 12px 16px;
            margin-bottom: 18px;
            border-radius: 10px;
            background: #fff0f0;
            color: #a34d5a;
        }

        .book {
            background: #fff;
            border: 1px solid #f0dfec;
            border-radius: 16px;
            padding: 22px;
            margin-top: 18px;
            box-shadow: 0 5px 18px rgba(165, 133, 178, 0.10);
        }

        .book h3 {
            margin-top: 0;
            font-size: 21px;
        }

        .actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 16px;
        }

        .actions form {
            margin: 0;
        }

        .filter {
            max-width: 400px;
            margin: 22px 0;
            padding: 20px;
            background: #f0eafa;
            border-radius: 14px;
            border: 1px solid #e5d9f4;
        }

        .filter select {
            margin-bottom: 12px;
        }

        .empty {
            text-align: center;
            background: #fff;
            padding: 35px 20px;
            margin-top: 20px;
            border-radius: 15px;
            border: 1px dashed #dfcde8;
        }

        footer {
            text-align: center;
            padding: 22px 15px;
            color: #94829b;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            header {
                padding: 22px 16px;
            }

            main {
                margin-top: 25px;
                padding: 0 15px 25px;
            }

            h1 {
                font-size: 25px;
            }

            .book {
                padding: 17px;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="header-inner">
            <div>
                <div class="brand">📚 My Reading List</div>
                <p class="tagline">
                    Your little corner of books & dreams 🌷
                </p>
            </div>

            <div class="header-icon">🦋</div>
        </div>
    </header>

    <main>
        @if (session('success'))
            <div class="message">
                ✓ {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer>
        Made with ♡ and a little bit of book magic ✨
    </footer>
</body>
</html>