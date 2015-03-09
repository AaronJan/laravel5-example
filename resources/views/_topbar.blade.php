<div class="ui fixed menu">
    <div class="item title"><i class="browser icon"></i> 留言板</div>

    @if ($userInfo)
        <div class="right menu">
            <div class="item">{{ $userInfo['name'] }}</div>
            <a class="item" href="/auth/logout">注销</a>
            <!-- <a class="item" href="#">管理后台</a> -->
        </div>
    @else
        <div class="right menu">
            <a class="item" href="/auth/login">登陆</a>
            <a class="item" href="/auth/register">注册</a>
            <!-- <a class="item" href="#">管理后台</a> -->
        </div>
    @endif
</div>