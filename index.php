<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link rel="stylesheet" href="Style.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 20%;
        background: white;
        padding: 20px 20px 20px 40px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .choose {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .choose select {
        padding: 10px 20px;
        margin: 5px;
        border: none;
        border-radius: 5px;
        background-color: #009c1f;
        color: white;
    }

    .btn {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    button {
        width: 100px;
        padding: 10px 15px;
        margin: 5px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: white;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

<body>


    <div class="form-container">

        <h1>ماشین حساب</h1>

        <form method="post">
            <label> عدد اول</label>
            <input type="text" id="num1" name="num1" placeholder="عدد اول">
            <label> عدد دوم</label>
            <input type="text" id="num2" name="num2" placeholder="عدد دوم">
            <label> خروجی</label>
            <input type="text" id="result" name="output" placeholder='خروجی' readonly
                value="<?php
                        if (isset($_POST['calculate'])) {
                            $num1 = $_POST['num1'];
                            $num2 = $_POST['num2'];
                            $operation = $_POST['operation'];
                            $result = "";

                            if (is_numeric($num1) && is_numeric($num2)) {
                                switch ($operation) {
                                    case "plus":
                                        $result = $num1 + $num2;
                                        break;
                                    case "minus":
                                        $result = $num1 - $num2;
                                        break;
                                    case "multiply":
                                        $result = $num1 * $num2;
                                        break;
                                    case "divide":
                                        $result = $num1 / $num2;
                                        break;
                                }
                            } else {
                                $result = "لطفاً اعداد معتبر وارد کنید.";
                            }
                            echo $result;
                        }
                        ?>">
            <div class="choose">
                <select class="button" name="operation">
                    <option value="plus">جمع</option>
                    <option value="minus">تفریق</option>
                    <option value="multiply">ضرب</option>
                    <option value="divide">تقسیم</option>
                </select>
            </div>

            <div class="btn">
                <button class="button" type="submit" name="calculate">محاسبه</button>
                <button class="button" type="reset">پاک کردن</button>
            </div>
        </form>
    </div>

</body>

</html>