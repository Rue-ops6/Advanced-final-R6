<section class="section-padding section-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-12">
                <img src="{{ asset('assets/public/images/rear-view-young-college-student.jpg') }}"
                    class="newsletter-image img-fluid" alt="">
            </div>

            <div class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                <form action="{{ route('MailQuoting') }}" method="POST" class="custom-form subscribe-form"
                    role="form">
                    @csrf
                    <h4 class="mb-4 pb-2">Get Newsletter</h4>

                    <input type="email" id="subscribe-email" pattern="[^ @]*@[^ @]*"
                        class="form-control @error('email') is-invalid @enderror" placeholder="Email Address"
                        required="" name="email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-lg-12 col-12">
                        <button type="submit" class="form-control">Subscribe</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
