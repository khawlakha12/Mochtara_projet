<form action="{{ route('password.email') }}" method="POST">
    @csrf
    <h3>Reset Password</h3>
    <div class="form-wrapper">
        <input type="email" name="email" placeholder="Email Address" class="form-control">
        <i class="zmdi zmdi-email"></i>
    </div>
    <span>We will send you an email to reset your password.</span>
    <button type="submit">Send Reset Link
        <i class="zmdi zmdi-arrow-right"></i>
    </button>
</form>