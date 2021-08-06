@extends('layouts.general')

@section('content')
<sections class="signup-section">
    <div class="row">
        <div class="signup">
            <form ction="{{ route('register') }}" method="POST">
                @csrf
                <h3>Sign-Up</h3>
                <div class="form-control">
                    <label for="username">Enter Name</label>
                    <input type="text" id="username" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" placeholder="Enter name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-control ">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-control ">
                    <label for="confirm">Comfirm password</label>
                    <input type="password" id="confirm" placeholder="Enter password agin" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <small>Error message</small>
                </div>
                <div class="sign">
                    <button type="submit">signup</button>
                </div>
            </form>
        </div>
    </div>
    </section>
@endsection
