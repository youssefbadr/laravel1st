@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<br>

                   Posts :
                        <br><br>
                        <div class="links">
                            <a href="{{ url('/posts') }}">All Posts</a>
                            <a href="{{ url('/posts/new') }}" style="margin-left: 50px;">New</a>

                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
