<x-app-layout>
    <section class="login-form page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <span>This is a secure area of the application. Please confirm your password before continuing.</span>
                        <h2>Confirm Password</h2>
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
                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf
                            <div class="form-group">
                                <label for="Password">Password* </label>
                                <input id="Password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Password" autofocus>
                            </div>
                            <button type="submit" class="button red"> Confirm </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>