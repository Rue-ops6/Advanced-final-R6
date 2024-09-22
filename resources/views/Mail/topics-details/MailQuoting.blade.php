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

            <p>Thanks for your subscribtion in our Quoting Newsletter Service!</p>
            {{-- <div>{{session('msg')}}</div> --}}
            <div class="form-group mb-3 row">
                <label class="form-label col-12 fw-bold">
                    <i>{!! \Illuminate\Foundation\Inspiring::quote() !!}</i></label> {{-- {!!!!} is an echo that do orders. the inseides are the use of the page --}}
                {{-- Illuminate\Foundation\Inspiring is the use in the console of routes, we get quotes from --}}
                <div class="col-12">
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
