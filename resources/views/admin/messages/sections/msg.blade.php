<div class="row justify-content-between mb-2 pb-2">
    <h2 class="fw-bold fs-2 col-auto">Unread Messages</h2>
</div>
<div class="table-responsive">
    <table class="table table-hover table-borderless display" id="_table">
        <thead>
            <tr>
                <th scope="col">Created At</th>
                <th scope="col">Message</th>
                <th scope="col">Sender</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($unreadMsg as $unread)
                <tr>
                    <th scope="row">{{ date('d M Y', strtotime($unread['updated_at'])) }}</th>
                    <td><a href="{{ route('messages.details', $unread['id']) }}"
                            class="text-decoration-none text-dark">{{ Str::limit($unread['content'], 44, $end = ' ...') }}</a>
                    </td>
                    <td>{{ $unread['name'] }}</td>
                    <td class="text-decoration-none text-dark">
                        <form action="{{ route('messages.destroy', $unread['id']) }}" method='POST'
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

<hr>
<div class="mx-2">
    <div class="row justify-content-between mb-2 pb-2">
        <h2 class="fw-bold fs-2 col-auto">Read Messages</h2>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-borderless display" id="_table2">
            <thead>
                <tr>
                    <th scope="col">Created At</th>
                    <th scope="col">Message</th>
                    <th scope="col">Sender</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($readMsg as $read)
                    <tr>
                        <th scope="row">{{ date('d M Y', strtotime($read['updated_at'])) }}</th>
                        <td><a href="{{ route('messages.details', $read['id']) }}"
                                class="text-decoration-none text-dark">{{ Str::limit($read['content'], 44, $end = ' ...') }}</a>
                        </td>
                        <td>{{ $read['name'] }}</td>
                        <td class="text-decoration-none text-dark">
                            <form action="{{ route('messages.destroy', $read['id']) }}" method='POST'
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
