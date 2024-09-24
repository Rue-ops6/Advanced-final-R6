<div class="table-responsive">
    <table class="table table-hover display" id="_table">
        <thead>
            <tr>
                <th scope="col">Latest Modify</th>
                <th scope="col">Name</th>
                <th scope="col">Content</th>
                <th scope="col">Published</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($testimonials as $test)
                <tr>
                    <th scope="row">{{ date('d M Y', strtotime($test['updated_at'])) }}</th>
                    <td>{{ $test['name'] }}</td>
                    <td>{{ $test['content'] }}</td> {{-- there is no details to show the rest of the txt --}}
                    <td>{{ $test['published'] == 1 ? 'yes' : 'no' }}</td>
                    <td class="text-center"><a class="text-decoration-none text-dark"
                            href="{{ route('testimonials.edit', $test['id']) }}"><img
                                src="{{ asset('assets/admin/images/edit-svgrepo-com.svg') }}"></a></td>
                    <td class="text-decoration-none text-dark">
                        <form action="{{ route('testimonials.destroy', $test['id']) }}" method='POST'
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
