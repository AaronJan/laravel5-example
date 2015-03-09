@extends('app')

@section('content')
    @include('_topbar')

    <div class="page-welcome">
        <div class="ui container">

            @if (!$userInfo)
                <!-- 注册、登陆提示 start -->
                <div class="ui stacked segment">
                    <div class="ui two column middle aligned relaxed fitted stackable grid">
                        <div class="center aligned column">
                            <a href="{{ url('/auth/login') }}" class="huge blue ui labeled icon button">
                                <i class="signup icon"></i>
                                登陆
                            </a>
                        </div>
                        <div class="ui vertical divider">
                            或
                        </div>
                        <div class="center aligned column">
                            <a href="{{ url('/auth/register') }}" class="huge green ui labeled icon button">
                                <i class="signup icon"></i>
                                注册
                            </a>
                        </div>
                    </div>
                </div>
                <!-- 注册、登陆提示 end -->
            @endif
            <!-- 留言区域 start -->
            <div class="ui grid">
                <div class="column sixteen wide">
                    <div class="ui segment">
                        <h2 class="ui dividing header">留言板</h2>

                        <div class="ui feed">
                            @foreach($messages->getCollection()->all() as $message)
                                <div class="event">
                                    <div class="label">
                                        <img src="/image/user.png">
                                    </div>
                                    <div class="content">
                                        <div class="summary">
                                            <span class="ui blue label">{{ $message->user()->getResults()->name }}</span>
                                            {{ $message->content }}
                                            <div class="date">
                                                {{ $message->created_at->diffForHumans() }}
                                            </div>
                                        </div>
                                        <!-- 未实现点赞
                                        <div class="meta">
                                            <a class="like">
                                                <i class="like icon"></i> 点赞
                                            </a>
                                        </div>
                                        -->
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination start -->
                        <div class="ui column center aligned">
                            {!! with(new App\Presenter\SemanticUiPresenter($messages))->render() !!}
                        </div>
                        <!-- Pagination end -->

                        <div class="ui divider"></div>

                        @if ($userInfo)
                            @if (count($errors) > 0)
                                <div class="ui primary inverted red segment">
                                    @foreach ($errors->all() as $error)
                                        <p>{{$error}}</p>
                                    @endforeach
                                </div>
                            @endif

                            <form action="/message/store" method="post" class="ui form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="field">
                                    <label>留言</label>
                                    <textarea name="content"></textarea>
                                </div>

                                <button type="submit" class="ui submit button green fluid">发布</button>
                            </form>
                        @else
                            <div class="ui info message">
                                <p>
                                    登陆后即可留言！
                                </p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
            <!-- 留言区域 end -->
        </div>
    </div>
@endsection
