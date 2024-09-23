<h2 class="fw-bold fs-2 mb-5 pb-2">Add Testimonial</h2>
<form action="{{ route('testimonials.store') }}" method="POST" class="px-md-5" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
        <div class="col-md-10">
            <input type="text" placeholder="e.g. Jane_Doe" class="form-control py-2" value="{{ old('name') }}"
                name="name" />
            @error('name')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Content:</label>
        <div class="col-md-10">
            <textarea id="" rows="5" class="form-control" name="content">{{ old('content') }}</textarea>
            @error('content')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
        <div class="col-md-10">
            <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" value="1"
                @checked(old('published')) name="published" />
        </div>
    </div>
    <hr>
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
        <div class="col-md-10">
            <input type="file" class="form-control" style="padding: 0.7rem;" value="{{ old('image') }}"
                name="image" />
            @error('image')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="text-md-end">
        <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Add Testimonial
        </button>
    </div>
</form>
</div>
</div>
</main>
