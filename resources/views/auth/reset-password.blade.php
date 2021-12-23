<x-app-layout>
    <section class="login-form page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Reset Password</h2>
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
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div class="form-group">
                                <label for="email">Email* </label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus placeholder="Entre Email">
                            </div>
                            <div class="form-group">
                                <label for="Password">New Password* </label>
                                <input id="Password password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <label for="Password">Confirm New Password* </label>
                                <input id="Password password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm New Password">
                            </div>
                            <button type="submit" class="button red"> Reset Password </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>