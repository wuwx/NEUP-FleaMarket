<html>
    <title>登陆</title>
    <body>
        <form action="/login" method="POST">
            <div>
                用户名:<input type="text" name="username">
            </div>
            <div>
                密码:<input type="text" name="password">
            </div>
            {!! csrf_field() !!}
            <div>
                <input type="submit" name="submit" value="登陆">
            </div>
        </form>
    </body>
</html>