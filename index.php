<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查水表</title>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <h1>聯絡人管理</h1>
    <hr>

    <form action="" id="contact">
        <div>
            <label for="name">姓名：</label>
            <input type="text" name="name" id="name"/>
        </div><br>

        <a href="#" class="getnum">查詢電話：</a>
        <br><br>

        <div>
            <label for="phone">電話：</label>
            <input type="text" name="phone" id="phone">
        </div><br>

        <input type="submit" value="新增聯絡人"/>
    </form>
    
    <div id="msg" class="box"></div>
</body>
</html>