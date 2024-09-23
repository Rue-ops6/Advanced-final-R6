<h2 class="fw-bold fs-2 mb-5 pb-2">Edit USER</h2>
<form action="{{ route('users.update', $user->id) }}" method="POST" class="px-md-5" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
        <div class="col-md-5">
            <input type="text" placeholder="First Name" class="form-control py-2"
                value="{{ old('FirstName', $user->FirstName) }}" name="FirstName" />
            @error('FirstName')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-5">
            <input type="text" placeholder="Last Name" class="form-control py-2"
                value="{{ old('LastName', $user->LastName) }}" name="LastName" />
            @error('LastName')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">UserName:</label>
        <div class="col-md-10">
            <input type="text" placeholder="e.g. Jhon33" class="form-control py-2"
                value="{{ old('UserName', $user->UserName) }}" name="UserName" />
            @error('UserName')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Email:</label>
        <div class="col-md-10">
            <input type="email" placeholder="e.g. Jhon@example.com" class="form-control py-2"
                value="{{ old('email', $user->email) }}" name="email" />
            @error('email')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Password:</label>
        <div class="col-md-10">
            <input type="password" placeholder="Password" class="form-control py-2" value="{{ $user->password }}"
                name="password" />
            {{-- we don't do it to password as it's coming hashed from DB neither the pwd_confirmation --}}
            @error('password')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Active:</label>
        <div class="col-md-10">
            <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" value="1"
                @checked($user->active) name="active" />
        </div>
    </div>
    <div class="text-md-end">
        <button type="submit" class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Edit User
        </button>
    </div>
</form>
</div>
</div>
</main>
