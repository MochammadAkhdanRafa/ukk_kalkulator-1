<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi kalkulator</title>\
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <form action="hasil.php">
        <h1>kalkulator</h1>
        <input type="number" name="angka1">
        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>:</option>
            <option>x</option>
            <option>%</option>
        </select>
        <input type="number" name="angka2">
        <button type="submit">Hitung</button>
    </form>
            
</body>
</html>