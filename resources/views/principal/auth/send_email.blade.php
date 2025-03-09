<!DOCTYPE html>
<html lang="en">
@include("components.header")
<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <h3>វិទ្យាល័យហ៊ុនសែនត្បែង</h3>
                </a>
              </div>

              <div class="card mb-3">

                <div class="card-body">
                  <form id="forgot-password-form" action="{{route('admin.send.email.process')}}" class="row g-3 needs-validation" method="POST">
                    @csrf
                    <div class="col-12 p-3">
                      @if (Session::has('error'))
                        <p class="text-center alert bg-danger text-light p-2">{{ Session::get('error') }}</p>
                      @elseif (Session::has('success'))
                        <p class="text-center alert bg-success text-light p-2">{{ Session::get('error') }}</p>
                      @endif
                      <label class="form-label">បញ្ចូលអ៊ីម៉ែលរបស់អ្នក</label>
                      <div class="form-group">
                        <input value="{{ old('email') }}" type="text" name="email" class="form-control shadow-none @error('email') is-invalid @enderror">
                        @error('email')
                          <span style=" font-size:10px;" class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">បញ្ចូន</button>
                    </div>
                  </form>

                  <!-- Loading Spinner -->
                  <d  iv id="loading-spinner" class="text-center" style="display:none;">
                    <div class="spinner-border text-primary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                    <p>សូមមេត្តារង់ចាំបន្តិចសិន...</p>
                  </d>
                  
                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>
  <!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <script>
    // When the form is submitted
    document.getElementById('forgot-password-form').addEventListener('submit', function(e) {
      document.getElementById('loading-spinner').style.display = 'block';
      document.querySelector('button[type="submit"]').disabled = true;
    });
  </script>

</body>

</html>