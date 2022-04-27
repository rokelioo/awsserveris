@include('base.htmlHead')
@include('base.publicHeader')

{{--<body style="background: #631da3">--}}
{{--<br/>--}}
{{--<div class="container box" style="background: white;width:600px; margin:0 auto; border:1px solid #ccc;">--}}
{{--    <h3 align="center">ElderCare Login</h3><br/>--}}

{{--    <form action="{{ url('/elder-list') }}">--}}
{{--        <div class="mb-3">--}}
{{--            <label for="exampleInputEmail1" class="form-label">Email address</label>--}}
{{--            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--        </div>--}}
{{--        <div class="mb-3">--}}
{{--            <label for="exampleInputPassword1" class="form-label">Password</label>--}}
{{--            <input type="password" name="password" class="form-control" id="exampleInputPassword1">--}}
{{--        </div>--}}
{{--        <button type="submit" name="login" value="login" class="btn btn-primary">Submit</button>--}}
{{--    </form>--}}
{{--</div>--}}
{{--</body>--}}

{{--@include('base.htmlFoot')--}}


<html>
<head>

    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
    </style>
</head>
<body>
<br />
<div class="container box">
    <h3 align="center">Login</h3><br />
    @if ($message = Session::get('error'))
        <div class="alert alert-danger" role="alert">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/checklogin') }}">
{{--        {{ csrf_field() }}--}}
        <div class="form-group mb-3">
            <label for="email">Enter Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email"/>
        </div>
        <div class="form-group mb-3">
            <label for="password">Enter Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password"/>
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" />
        </div>
    </form>
</div>
</body>
</html>
