<div class="table-responsive">
    <table class="table table-hover display" id="_table">
        <thead>
            <tr>
                <th scope="col">Created At</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Content</th>
                <th scope="col">No. of views</th>
                <th scope="col">Published</th>
                <th scope="col">Trending</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($topics as $topic)
                <tr>
                    <th scope="row">{{ date('d M Y', strtotime($topic['updated_at'])) }}</th>
                    <td><a class="text-decoration-none text-dark"
                            href="{{ route('topics.details') }}">{{ $topic['topicTitle'] }}</a>
                    </td>
                    <td {{ $category['id'] }}>{{ $topic->category }}</td>
                    <td>{{ Str::limit($topic['content'], 44, $end = ' ...') }}</td>
                    <td>{{ $topic['views'] }}</td>
                    <td>{{ $topic['published'] == 1 ? 'yes' : 'no' }}</td>
                    {{-- <td>@if ($info['fulled'] == 1) yes @else no @endif</td> --}}

                    {{-- {{-- @if ($trendings->count()) --}}
                    {{-- @foreach ($trendings as $trend) --}}
                    {{-- <td>{{ $trend->views >= 15 ? 'yes' : 'no' }}</td> --}}
                    <td>{{ in_array($topic['id'], $trendings->pluck('id')->toArray()) ? 'yes' : 'no' }}</td>
                    {{-- @endforeach --}}
                    {{-- @endif --}}
                    <td class="text-center"><a class="text-decoration-none text-dark"
                            href="{{ route('topics.edit') }}"><img
                                src="{{ asset('assets/admin/images/edit-svgrepo-com.svg') }}"></a></td>
                    <td class="text-decoration-none text-dark">
                        <form action="{{ route('topics.destroy', $topic['id']) }}" method='POST'
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
