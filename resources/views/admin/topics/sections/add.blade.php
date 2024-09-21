<h2 class="fw-bold fs-2 mb-5 pb-2">Add Topic</h2>
<form action="{{ route('topics.store') }}" method="POST" class="px-md-5" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Topic Title:</label>
        <div class="col-md-10">
            <input type="text" placeholder="e.g. Design Patterns" class="form-control py-2"
                value="{{ old('topicTitle') }}" name="topicTitle" />
            @error('topicTitle')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Category:</label>
        <div class="col-md-10">
            <select name="catID" id="" class="form-control py-1">
                <option value="">Select category</option>
                @foreach ($category as $cat)
                    <option value="{{ $cat->id }}" @selected(old('catID') == $cat->id)>{{ $cat->category }}</option>
                @endforeach
            </select>
            @error('catID')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Content:</label>
        <div class="col-md-10">
            <textarea name="" id="" rows="5" class="form-control" name="content">{{ old('content') }}</textarea>
            @error('content')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Trending:</label>
        <div class="col-md-10">
            <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" value="1"
                @checked(old('views')) name="views" />
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
            Add Topic
        </button>
    </div>
</form>
</div>
</div>
</main>
