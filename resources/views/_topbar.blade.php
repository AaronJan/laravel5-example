<div class="ui fixed menu">
    <div class="item title"><i class="browser icon"></i> Message board</div>

    @if ($userInfo)
        <div class="right menu">
            <div class="item">{{ $userInfo['name'] }}</div>
            <a class="item" href="/auth/logout">Logout</a>
            <!-- <a class="item" href="#">Something hidden</a> -->
        </div>
    @else
        <div class="right menu">
            <a class="item" href="/auth/login">Login</a>
            <a class="item" href="/auth/register">Regist</a>
            <!-- <a class="item" href="#">Something hidden</a> -->
        </div>
    @endif
</div>