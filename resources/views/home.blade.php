@include("includes.header")

<div class="container">
    <form class="form-horizontal" method="post" action="{{ url("/register") }}">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
        <legend>Sample Registration Form</legend>

        @if(count($errors) > 0)
            @foreach($errors -> all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif


        @if(session('response'))
            <div class="col-md-8 alert alert-success">
                {{session('success')}}
            </div>
        @endif


        <!-- Name Section -->
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="Name" class="form-control" id="inputName" placeholder="Name">
            </div>
        </div>

        <!-- Email Section -->
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="Email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>

        <!-- Password Section -->
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="Password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sign in</button>
                <button type="reset" class="btn btn-default">Cancel</button>
            </div>
        </div>
    </form>
</div>

@include("includes.footer")