<!doctype html>
<html lang = "en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>FORM</h1>
    <form id="massageForm" method="post">
        <input type="text"  name="username" id="username"  class="form-control" placeholder="Enter name"><br>

        <input type="email" aria-describedby="emailHelp"     name="email" id="email"  class="form-control" placeholder="Enter email"><br>

        <input type="phone"  name="phone" id="phone"  class="form-control" placeholder="Enter phone"><br>

        <textarea id="message"  name="message" class="form-control" placeholder="Enter message" rows="3"></textarea><br>

        <button class="btn btn-success" id="send" type ="button" >Send</button>
    </form>
    <div id="error"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/form.js"></script>

</body>
</html>