<form method="POST" action="{{ route('password.reset')}}">
    @csrf
    <h3>Reset Password</h3>
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="form-wrapper">
        <input type="email" name="email" placeholder="Email Address" class="form-control" value="{{ $email }}" required>
        <i class="zmdi zmdi-email"></i>
    </div>
    <div class="form-wrapper">
        <input type="password" name="password" placeholder="Password" class="form-control" required>
        <i class="zmdi zmdi-lock"></i>
    </div>
    <div class="form-wrapper">
        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control" required>
        <i class="zmdi zmdi-lock"></i>
    </div>
    <button type="submit">Reset Password
        <i class="zmdi zmdi-arrow-right"></i>
    </button>
</form>