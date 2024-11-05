<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOODING SHOP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #efcac3;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 600px;
            width: 60%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input.error {
            border: 1px solid red;
        }

        label.error {
            color: red;
        }

        .error-message {
            color: red;
            font-size: 12px;
            text-align: left;
            display: none;
            margin-top: -5px;
            padding-bottom: 10px;
        }

        input[type="submit"] {
            font-size: larger;
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
            width: 100%;
            margin-top: 15px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Đăng Nhập</h1>
        <form action="" method="post" onsubmit="return validateForm()">
            <label>Họ Và Tên:</label>
            <input type="text" name="ten" id="ten">
            <span class="error-message" id="ten-error">Vui lòng nhập họ và tên</span>
            <label>Mật Khẩu:</label>
            <input type="password" name="matkhau" id="matkhau">
            <span class="error-message" id="matkhau-error">Vui lòng nhập mật khẩu</span>
            <hr>
            <input type="submit" value="Đăng Nhập" name="btn_login">
        </form>
    </div>

    <script>
        function validateForm() {
            const tenInput = document.getElementById('ten');
            const matkhauInput = document.getElementById('matkhau');

            const tenError = document.getElementById('ten-error');
            const matkhauError = document.getElementById('matkhau-error');

            // Reset the error styles and messages
            tenInput.classList.remove('error');
            matkhauInput.classList.remove('error');
            tenError.style.display = 'none';
            matkhauError.style.display = 'none';

            const ten = tenInput.value;
            const matkhau = matkhauInput.value;
            let hasError = false;

            if (ten === '') {
                tenInput.classList.add('error');
                tenError.style.display = 'block';
                hasError = true;
            }

            if (matkhau === '') {
                matkhauInput.classList.add('error');
                matkhauError.style.display = 'block';
                hasError = true;
            }

            if (hasError) {
                alert('Vui lòng điền đầy đủ thông tin');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>