
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

                  
                    <form method="POST" action="" id="reset-form" class="row g-3 needs-validation p-3">
                        @csrf
                        
                        <div class="col-12">
                            <input type="hidden" value="" name="token" id="token">
                            <input type="hidden" value="" name="code" id="code">
                            <label class="form-label">លេខសម្ងាត់ថ្មី</label>
                            <input type="password" name="password" class="form-control shadow-none @error('password') is-invalid @enderror">
                            @error('password')
                                <span style="font-size: 10px;" class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="col-12">
                            <label class="form-label">បញ្ជាក់លេខសម្ងាត់ថ្មី</label>
                            <input type="password" name="password_confirmation" class="form-control shadow-none @error('password_confirmation') is-invalid @enderror">
                            @error('password')
                                <span style="font-size: 10px;" class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">កំណត់លេខសម្ងាត់ថ្មី</button>
                        </div>
                    </form>

                    <!-- Loading Spinner -->
                    <div id="loading-spinner" class="text-center" style="display:none;">
                      <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                      </div>
                      <p>សូមមេត្តារង់ចាំបន្តិចសិន...</p>
                    </div>
                    

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

</body>
<script>
  // When the form is submitted
  document.getElementById('reset-form').addEventListener('submit', function(e) {
    // Show the loading spinner
    document.getElementById('loading-spinner').style.display = 'block';

    // Disable the submit button to prevent multiple clicks
    document.querySelector('button[type="submit"]').disabled = true;
  });
</script>
</html>
