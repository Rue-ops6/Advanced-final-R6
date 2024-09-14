<div class="col-md-7">
    <form action="" class="text-center h-100 px-3 d-flex flex-column justify-content-center">
        <h3 class="fw-semibold mb-5">LOGIN FORM</h3>
        <div class="input-group mb-3">
            <input type="text" placeholder="Username" class="form-control">
            <img src= "{{ asset('assets/admin/images/user-svgrepo-com.svg') }}" alt="" class="input-group-text">
        </div>
        <div class="input-group mb-3">
            <input type="password" placeholder="Password" class="form-control">
            <img src= "{{ asset('assets/admin/images/password-svgrepo-com.svg') }}" alt=""
                class="input-group-text">
        </div>
        <button class="btn btn-dark px-5 mb-2">
            LOGIN
            <img src= "{{ asset('assets/admin/images/arrow-sm-right-svgrepo-com.svg') }} alt="">
        </button>
        <a href="register.html" class="fw-semibold fs-6 text-decoration-none text-dark">New User?</a>
    </form>
</div>
</div>
</div>
