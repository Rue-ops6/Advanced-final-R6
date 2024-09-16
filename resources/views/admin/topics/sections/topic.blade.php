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
            <tr>
                <th scope="row">18 Jul 2024</th>
                <td><a class="text-decoration-none text-dark" href="{{ route('topic_details') }}">Machine
                        learning</a>
                </td>
                <td>Computer Science</td>
                <td>Lorem ipsum dolor sit amet consectetur...</td>
                <td>12</td>
                <td>YES</td>
                <td>NO</td>
                <td class="text-center"><a class="text-decoration-none text-dark" href="{{ route('edit_topic') }}"><img
                            src="{{ asset('assets/admin/images/edit-svgrepo-com.svg') }}"></a></td>
                <td class="text-center"><a class="text-decoration-none text-dark" href="#"><img
                            src="{{ asset('assets/admin/images/trash-can-svgrepo-com.svg') }}"></a></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div>
