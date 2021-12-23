<x-app-layout>
    <section class="login-form page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <span>Log in with your credentials </span>
                        <h2>Admin Login</h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="gray-form clearfix">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email* </label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="Entre Email">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password* </label>
                                <input id="Password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="remember-checkbox mb-4">
                                    <input type="checkbox" id="one" name="remember">
                                    <label for="one"> Remember me</label>
                                    @if (Route::has('password.request'))
                                    <a class="float-right" href="{{ route('password.request') }}">
                                        Forgot your password?
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="button red"> Log in </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
