<!DOCTYPE html>
<html lang="en">

<head>
    <title>New Contact Message</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-image: linear-gradient(180deg, #296d8a, #80d0c7);">
    <div class="container my-5">
        <div class="py-5 px-md-5 px-1 rounded-1 mx-md-5" style="background-color: #fffffff2;">
            <h2 class="fw-bold fs-1 mb-3 pb-2 text-center">New Contact Message</h2>
            {{-- <div>{{session('msg')}}</div> --}}
            {{-- No need to show name and email here as it doesn't in normal email due to the fact that it's already the data of the sender in the top of the email, we only show his regard --}}
            {{-- Is needed to be saved in DB tho --}}
            <div class="form-group mb-3 row">
                <label class="form-label col-md-2 fw-bold text-md-end"><strong>Name:</strong></label>
                <div class="col-md-10">
                    <p>{{ $data['name'] }}</p>
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label class="form-label col-md-2 fw-bold text-md-end"><strong>Email:</strong></label>
                <div class="col-md-10">
                    <p>{{ $data['email'] }}</p>
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label class="form-label col-md-2 fw-bold text-md-end"><strong>Subject:</strong></label>
                <div class="col-md-10">
                    <p>{{ $data['msgTitle'] }}</p>
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label class="form-label col-12 fw-bold"><strong>Message:</strong></label>
                <div class="col-12">
                    <p>{{ $data['content'] }}</p>
                </div>
            </div>
        </div>
    </div>
</body>

{{-- <body>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subject:</strong> {{ $data['msgTitle'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['content'] }}</p>
</body> --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
