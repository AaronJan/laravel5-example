<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>博客首页</title>

    <link rel="stylesheet" type="text/css" href="/bower/semantic-ui/dist/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/app.css" />

</head>
<body>
    <div class="ui fixed menu">
        <div class="item title"><i class="browser icon"></i> 留言板</div>

        <div class="right menu">
            <a class="item" href="#">注册</a>
            <a class="item" href="#">登陆</a>
            <a class="item" href="#">管理后台</a>
        </div>
    </div>

	@yield('content')

    <script src="/bower/jquery/dist/jquery.min.js"></script>
    <script src="/bower/semantic-ui/dist/semantic.min.js"></script>
</body>
</html>
