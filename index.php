<!DOCTYPE html>
<html>
<head>
    <meta charset="UFT-8">
    <meta name="viewpost"
          content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <tile>Document</tile>
</head>
<body>
<form method="post" action="index1.php">
    <h1>Chuyển đổi tiền tệ</h1>
    <div>
        Amount:<input type="text" name="amount" id="amount">

        From Currency:<select name="from currency" id="from_currency" value="vnd"
                      <option value="VND">VND</option>
                      <option value="usd">USD</option>
        </select>

        To Currency:<select name="to currency" value="to_currency">
            <option value="usd">USD</option>
            <option value="VND">VND</option>
        </select>
        <div id="buttons">
            <input type="submit" value="computations"/>
        </div>
    </div>
</form>
</body>
</html>