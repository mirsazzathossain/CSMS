<x-app-layout>
    <section class="login-form page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Forget Password</h2>
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
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email* </label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="Entre Email">
                            </div>

                            <button type="submit" class="button red"> Email Password Reset Link </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
