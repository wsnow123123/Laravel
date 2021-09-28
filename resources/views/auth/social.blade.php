<!DOCTYPE html>
<html>
    <head>
        <title>Social Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            @if ($errors->has('msg'))
                <div class="alert alert-warning">
                    {{ $errors->first('msg') }}
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading text-center">Social Login </div>

                <div class="panel-body">
                    <p class="lead text-center">Authenticate using your social network account from one of following providers</p>
                    <a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-primary btn-block">
                        Login with Facebook
                    </a>
                    <a href="{{ route('social.oauth', 'twitter') }}" class="btn btn-info btn-block">
                        Login with Twitter
                    </a>
                    <a href="{{ route('social.oauth', 'google') }}" class="btn btn-danger btn-block">
                        Login with Google
                    </a>
                    <a href="{{ route('social.oauth', 'github') }}" class="btn btn-default btn-block">
                        Login with Github
                    </a>
                    <hr>
                    <a href="{{ route('login') }}" class="btn btn-default btn-block">
                        Login with Email
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
</html>