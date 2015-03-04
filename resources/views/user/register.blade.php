@extends('app')

@section('content')

<div class="page-register">
    <div class="ui container">
        <div class="ui stacked segment">
            <form class="ui form">
                <div class=" field">
                    <div class="required field">
                        <label>用户名</label>
                        <div class="ui icon input">
                            <input type="text" placeholder="Username">
                            <i class="user icon"></i>
                        </div>
                    </div>
                    <div class="required field">
                        <label>密码</label>
                        <div class="ui icon input">
                            <input type="password">
                            <i class="lock icon"></i>
                        </div>
                    </div>
                    <div class="required field">
                        <label>再输入一次密码</label>
                        <div class="ui icon input">
                            <input type="password">
                            <i class="lock icon"></i>
                        </div>
                    </div>
                </div>
                <div class="ui grid">
                    <div class="column center aligned">
                        <button type="submit" class="ui submit button green labeled icon huge">
                            <i class="signup icon"></i>
                            注册
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
