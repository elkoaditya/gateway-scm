<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Redirect...</center>
<span>Anda akan di arahkan ke {{$url}} yang anda tuju</span>
<span>Apa bila anda tidak di redirect silahkan klick link ini <a onclick="document.getElementById('form-login').submit()"  style="color: blue" >{{$url}}</a></span>



<form method="post" action="https://{{$url}}/api/login/token" id="form-login">
    <input name="token" type="hidden" value="{{$token}}">
</form>

</body>
<script>
    window.setTimeout(function(){
        document.getElementById('form-login').submit();

    }, 500);
</script>



</html>
