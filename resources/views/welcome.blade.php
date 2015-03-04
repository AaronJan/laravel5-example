@extends('app')

@section('content')
    <div class="page-welcome">
        <div class="ui container">
            <!-- 注册、登陆提示 start -->
            <div class="ui stacked segment">
                <div class="ui two column middle aligned relaxed fitted stackable grid">
                    <div class="column">
                        <form action="?" method="post" class="ui form">
                            <div class="field">
                                <label>用户名</label>
                                <div class="ui left icon input">
                                    <input type="text" placeholder="用户名">
                                    <i class="user icon"></i>
                                </div>
                            </div>
                            <div class="field">
                                <label>密码</label>
                                <div class="ui left icon input">
                                    <input type="password" placeholder="密码">
                                    <i class="lock icon"></i>
                                </div>
                            </div>
                            <button class="ui blue submit button fluid">登陆</button>
                        </form>
                    </div>
                    <div class="ui vertical divider">
                        或
                    </div>
                    <div class="center aligned column">
                        <a href="#" class="huge green ui labeled icon button">
                            <i class="signup icon"></i>
                            注册
                        </a>
                    </div>
                </div>
            </div>
            <!-- 注册、登陆提示 end -->

            <!-- 留言区域 start -->
            <div class="ui grid">
                <div class="column sixteen wide">
                    <div class="ui segment">
                        <h2 class="ui dividing header">留言板</h2>

                        <div class="ui feed">
                            <div class="event">
                                <div class="label">
                                    <img src="/image/user.png">
                                </div>
                                <div class="content">
                                    <div class="summary">
                                        <span class="ui blue label">游客1</span>
                                        很高兴来到这里！
                                        <div class="date">
                                            1 Hour Ago
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a class="like">
                                            <i class="like icon"></i> 4 个赞
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="event">
                                <div class="label">
                                    <img src="/image/user.png">
                                </div>
                                <div class="content">
                                    <div class="summary">
                                        <span class="ui blue label">游客2</span>
                                        很高兴来到这里！
                                        <div class="date">
                                            1 Hour Ago
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a class="like">
                                            <i class="like icon"></i> 4 个赞
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="event">
                                <div class="label">
                                    <img src="/image/user.png">
                                </div>
                                <div class="content">
                                    <div class="summary">
                                        <span class="ui blue label">游客2232</span>
                                        很高兴来到这里！
                                        <div class="date">
                                            1 Hour Ago
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a class="like">
                                            <i class="like icon"></i> 4 个赞
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination start -->
                        <div class="ui column center aligned">
                            <div class="ui buttons ">
                                <div class="ui labeled icon button yellow">
                                    <i class="left refresh icon"></i>
                                    最新
                                </div>
                                <a class="ui labeled icon button teal">
                                    <i class="left chevron icon"></i>
                                    上一页
                                </a>
                                <a class="ui right labeled icon button teal disabled">
                                    下一页
                                    <i class="right chevron icon"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Pagination end -->

                        <div class="ui divider"></div>

                        <form class="ui form">
                            <div class="field">
                                <label>留言</label>
                                <textarea name="content"></textarea>
                            </div>

                            <button type="submit" class="ui submit button green fluid">发布</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- 留言区域 end -->
        </div>
    </div>
@endsection
