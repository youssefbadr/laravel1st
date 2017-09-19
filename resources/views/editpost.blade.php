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

                  edit Post :  <?php echo $postid?>
                        <br><br>
                        <div class="links">
                            <a href="{{ url('/posts') }}">All Posts</a>
                            <a href="{{ url('/posts/new') }}" style="margin-left: 50px;">New</a>

                        </div>
                </div>


                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">New Post</div>

                                <div class="panel-body">
                                    <form class="form-horizontal" method="POST" action="{{ url('posts/submit') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Title</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">Post</label>

                                            <div class="col-md-6">
                                                <textarea id="email" class="form-control" name="post" value="{{ old('post') }}" cols="15" rows="7" required>
                                                </textarea>
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="photo" class="col-md-4 control-label">Photo</label>

                                            <div class="col-md-6">
                                                <input id="photo" type="file" class="form-control" name="photo" required>

                                                @if ($errors->has('photo'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                   Post
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



            </div>
        </div>
    </div>
</div>
@endsection
