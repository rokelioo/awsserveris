@include('base.htmlHead')
@include('base.publicHeader')

<body style="background: #631da3">
<br/>
<div class="container box" style="background: white;width:600px; margin:0 auto; border:1px solid #ccc;">
    <h3 align="center">ElderCare Registration</h3><br/>
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
    <form action="{{ url('/checkRegistration') }}">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Repeat password</label>
            <input type="password" name="confirm_password" class="form-control" id="confirm_password">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" name="surname" class="form-control" id="surname">
        </div>
        <button type="submit" name="login" value="login" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>

@include('base.htmlFoot')
