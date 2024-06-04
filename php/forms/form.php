<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="process.php" method="post">
        <h3>full name:</h3><br>
        <input type="text" name="textName" id="name"><br>
        <h3>gender:</h3>
        <span>male</span>
        <input type="radio" name="gender" id="gender" value="male">
        <span>female</span>
        <input type="radio" name="gender" id="gender" value="female">
        <h3>civil status:</h3>
        <select name="civilstatus" id="civilstatus">
            <option value="null">select...</option>
            <option value="single">single</option>
            <option value="married">married</option>
        </select>
        <input type="submit" name="btnSubmit" value="submit">
        <input type="submit" name="clear" value="clear">
    </form>
</body>
</html>