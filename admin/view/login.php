<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng Nhập</title>
    <style>
            body {
                  font-family: Arial, sans-serif;
                  background-color: #efcac3;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  height: 100vh;
                  margin: 0;
            }
            .login-container {
                  background-color: white;
                  padding: 20px;
                  border-radius: 8px;
                  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                  width: 600px;
                  text-align: center;
            }
            h3 {
                  margin-bottom: 20px;
                  color: #333;
                  font-size: 30px;
            }
            label {
                  font-weight: bold;
                  display: block;
                  margin-bottom: 8px;
                  text-align: left;
            }
            input[type="text"], input[type="password"] {
                  width: 100%;
                  padding: 10px;
                  margin-bottom: 20px;
                  border: 1px solid #ccc;
                  border-radius: 4px;
                  box-sizing: border-box;
            }
            input[type="submit"] {
                  background-color: #4CAF50;
                  color: white;
                  padding: 10px 20px;
                  border: none;
                  border-radius: 4px;
                  cursor: pointer;
                  width: 100%;
                  font-size: 20px;
            }
            input[type="submit"]:hover {
                  background-color: #45a049;
            }
      </style>
</head>
<body>
    <div class="login-container">
        <h3>Trang đăng nhập</h3>
        <form action="" method="POST">
            <label for="ten">Họ và Tên:</label>
            <input type="text" id="ten" placeholder="UserName...." name="ten">
            <label for="matkhau">PassWork:</label>
            <input type="password" id="matkhau" placeholder="Passwork...." name="matkhau">
            <input type="submit" value="Login" name="btn_login">
        </form>
    </div>
</body>
</html>