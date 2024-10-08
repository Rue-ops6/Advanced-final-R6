<h2 class="fw-bold fs-2 mb-5 pb-2">Edit Testimonial</h2>
<form action="{{ route('testimonials.update', $test->id) }}" method="POST" class="px-md-5" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
        <div class="col-md-10">
            <input type="text" placeholder="e.g. Jhon-Doe" class="form-control py-2"
                value="{{ old('name', $test->name) }}" name="name" />
            @error('name')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Content:</label>
        <div class="col-md-10">
            <textarea id="" rows="5" class="form-control" name="content">{{ old('content', $test->content) }}</textarea>
            @error('content')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
        <div class="col-md-10">
            <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" value="1"
                @checked($test->published) name="published" />
        </div>
    </div>
    <hr>
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
        <div class="col-md-10">
            <input type="file" class="form-control" style="padding: 0.7rem; margin-bottom: 10px;"
                value="{{ old('image', $test->image) }}" name="image" />
            <img src="{{ asset('assets/admin/images/testimonials/' . $test->image) }}" alt=""
                style="width: 30rem;">
            @error('image')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="text-md-end">
        <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Edit Testimonial
        </button>
    </div>
</form>
</div>
</div>
</main>
