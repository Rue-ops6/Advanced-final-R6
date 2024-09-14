<div class="col-md-7">
    <form action="" class="text-center h-100 px-3 d-flex flex-column justify-content-center">
        <h3 class="fw-semibold mb-5">REGISERTATION FORM</h3>
        <div class="form-group d-flex mb-3">
            <input type="text" placeholder="First Name" class="form-control me-2">
            <input type="text" placeholder="Last Name" class="form-control">
        </div>
        <div class="input-group mb-3">
            <input type="text" placeholder="Username" class="form-control">
            <img src= "{{ asset('assets/admin/images/user-svgrepo-com.svg') }}" alt="" class="input-group-text">
        </div>
        <div class="input-group  mb-3">
            <input type="text" placeholder="Email Address" class="form-control">
            <img src= "{{ asset('assets/admin/images/email-svgrepo-com.svg') }}" alt=""
                class="input-group-text">
        </div>
        <div class="input-group mb-3">
            <input type="password" placeholder="Password" class="form-control">
            <img src= "{{ asset('assets/admin/images/password-svgrepo-com.svg') }}" alt=""
                class="input-group-text">
        </div>
        <div class="input-group mb-5">
            <input type="password" placeholder="Confirm Password" class="form-control">
            <img src= "{{ asset('assets/admin/images/password-svgrepo-com.svg') }}" alt=""
                class="input-group-text">
        </div>
        <button class="btn btn-dark px-5 mb-2">
            REGISTER
            <img src= "{{ asset('assets/admin/images/arrow-sm-right-svgrepo-com.svg') }}" alt="">
        </button>
        <a href="login.html" class="fw-semibold fs-6 text-decoration-none text-dark">Already have account?</a>
    </form>
</div>
</div>
</div>
