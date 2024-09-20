<div class="table-responsive">
    <table class="table table-hover display" id="_table">
        <thead>
            <tr>
                <th scope="col">Created At</th>
                <th scope="col">Category</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $cat)
                <tr>
                    <th scope="row">{{ date('d M Y', strtotime($cat['updated_at'])) }}</th>
                    <td {{ $cat['id'] }}>{{ $cat->category }}</td>
                    <td class="text-center"><a class="text-decoration-none text-dark"
                            href="{{ route('categories.edit') }}"><img
                                src="{{ asset('assets/admin/images/edit-svgrepo-com.svg') }}"></a></td>
                    <td class="text-decoration-none text-dark">
                        <form action="{{ route('categories.destroy', $cat['id']) }}" method='POST'
                            onclick="return confirm('Are you sure you want to delete?')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-link m-0 p-0"><img
                                    src="{{ asset('assets/admin/images/trash-can-svgrepo-com.svg') }}"></button>
                        </form>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
