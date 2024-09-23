<div class="col-md-7">
    <form method="POST" action="{{ route('register') }}"
        class="text-center h-100 px-3 d-flex flex-column justify-content-center">
        <h3 class="fw-semibold mb-5">REGISERTATION FORM</h3>
        @csrf

        <div class="form-group d-flex mb-3">
            <input id="name" type="text" placeholder="First Name" for="name"
                class="form-control me-2 @error('FirstName') is-invalid @enderror" name="FirstName"
                value="{{ old('FirstName') }}" required autocomplete="FirstName" autofocus>
            @error('FirstName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="name" type="text" placeholder="Last Name" for="name"
                class="form-control @error('LastName') is-invalid @enderror" name="LastName"
                value="{{ old('LastName') }}" required autocomplete="LastName">
            @error('LastName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <input id="name" type="text" placeholder="Username" for="name"
                class="form-control @error('UserName') is-invalid @enderror" name="UserName"
                value="{{ old('UserName') }}" required autocomplete="UserName">
            <img src= "{{ asset('assets/admin/images/user-svgrepo-com.svg') }}" alt="" class="input-group-text">
            @error('UserName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <input id="email" type="text" placeholder="Email Address" for="email"
                class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                required autocomplete="email">
            <img src= "{{ asset('assets/admin/images/email-svgrepo-com.svg') }}" alt=""
                class="input-group-text">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <input id="password" type="password" placeholder="Password" for="password"
                class="form-control @error('password') is-invalid @enderror" name="password" required
                autocomplete="new-password">
            <img src= "{{ asset('assets/admin/images/password-svgrepo-com.svg') }}" alt=""
                class="input-group-text">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-5">
            <input id="password-confirm" type="password" placeholder="Confirm Password" for="password-confirm"
                class="form-control" name="password_confirmation" required autocomplete="new-password">
            <img src= "{{ asset('assets/admin/images/password-svgrepo-com.svg') }}" alt=""
                class="input-group-text">
        </div>

        <button class="btn btn-dark px-5 mb-2">
            REGISTER
            <img src= "{{ asset('assets/admin/images/arrow-sm-right-svgrepo-com.svg') }}" alt="">
        </button>

        <a href="{{ route('login') }}" class="fw-semibold fs-6 text-decoration-none text-dark">Already have
            account?</a>

        {{-- sociallogin --}}
        <div class="row mb-3">
            <a href="{{ route('sociallogin') }}">Sign-up with Github</a>
        </div>
    </form>
</div>
