<div class="table-responsive">
    <table class="table table-hover display" id="_table">
        <thead>
            <tr>
                <th scope="col">Registration Date</th>
                <th scope="col">FullName</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Active</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ date('d M Y', strtotime($user['updated_at'])) }}</th>
                    <td>{{ $user['FirstName'] }} {{ $user['LastName'] }}</td>
                    <td>{{ $user['UserName'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['expired'] == 1 ? 'yes' : 'no' }}</td>
                    <td class="text-center"><a class="text-decoration-none text-dark"
                            href="{{ route('users.edit') }}"><img
                                src="{{ asset('assets/admin/images/edit-svgrepo-com.svg') }}"></a></td>
                    <td class="text-decoration-none text-dark">
                        <form action="{{ route('users.destroy', $user['id']) }}" method='POST'
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
