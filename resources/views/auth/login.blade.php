@extends('app')


@section('javascript')
    <script>
        $('.ui.checkbox').checkbox();
    </script>
@endsection


@section('content')
    <div class="page-login">
        <div class="ui container">
            <div class="ui stacked segment">

                @if (count($errors) > 0)
                    <div class="ui primary inverted red segment">
                        @foreach ($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    </div>
                @endif

                {!! Form::open(['class' => 'ui form', 'method' => 'post']) !!}
                <div class=" field">
                    <div class="required field">
                        {!! Form::label('name', '用户名') !!}

                        <div class="ui icon input">
                            {!! Form::text('name', old('name'), ['placeholder' => '用户名', 'maxlength' => '16']) !!}
                            <i class="user icon"></i>
                        </div>
                    </div>
                    <div class="required field">
                        {!! Form::label('password', '密码') !!}

                        <div class="ui icon input">
                            {!! Form::password('password', ['placeholder' => '密码', 'maxlength' => '20']) !!}
                            <i class="lock icon"></i>
                        </div>
                    </div>
                    <div class="required field">
                        <div class="ui checkbox">
                            {!! Form::checkbox('remember') !!}
                            {!! Form::label('remember', '保持登陆') !!}
                        </div>
                    </div>
                </div>
                <div class="ui grid">
                    <div class="column center aligned">
                        <button type="submit"
                                class="ui submit button green labeled huge">
                            登陆
                        </button>
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection
