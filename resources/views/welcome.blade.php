@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="h1 col-md-12 text-left alert alert-success">
                <?php
                echo "「".\Auth::user()->name . "」's Timeline";
                ?>
            </aside>
            <div class="col-md-6 col-md-offset-3">
                <h3>Write a New Post!!</h3>
                @if (Auth::user()->id == $user->id)
                  {!! Form::open(['route' => 'microposts.store']) !!}
                      <div class="form-group">
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
                @endif
            </div>
            <div class="col-xs-8 col-xs-offset-4">
                @if (count($microposts) > 0)
                    @include('microposts.microposts', ['microposts' => $microposts])
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Microposts</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection