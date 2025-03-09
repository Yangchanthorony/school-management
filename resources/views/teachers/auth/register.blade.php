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
              <a href="javascript:void()" class="logo d-flex align-items-center w-auto">
                <h3>វិទ្យាល័យហ៊ុនសែនត្បែង</h3>
              </a>
            </div>

            <div class="card mb-3">
              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">បង្កើតគណនី</h5>
                  <p class="text-center small">បន្ទាប់ពីបង្កើតត្រូវរងចាំការត្រួតពិនិត្យពីអ្នកគ្រប់គ្រងប្រព័ន្ធជាមុនសិន</p>
                </div>

                <form id="form-login" action="" class="row g-3 needs-validation" method="POST">
                  @csrf
                  <!-- Display messages -->
                  @if (Session::has('error'))
                    <p class="text-center alert bg-danger text-light p-2">{{ Session::get('error') }}</p>
                  @elseif (Session::has('success'))
                    <p class="text-center alert bg-success text-light p-2">{{ Session::get('success') }}</p>
                  @elseif (Session::has('cooldown'))
                    <p id="cooldown-message" class="text-center alert bg-warning text-dark p-2">
                      {{ Session::get('cooldown') }}
                    </p>
                  @endif

                  <div class="col-12 mt-2">
                    <label for="yourUsername" class="form-label">គោត្តនាម នាម</label>
                    <div class="form-group">
                      <input value="{{ old('email') }}" type="text" name="khmer_name" class="form-control shadow-none @error('khmer_name') is-invalid @enderror">
                      @error('khmer_name')
                        <span style=" font-size:10px;" class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>


                  <div class="col-12 mt-2">
                    <label for="yourUsername" class="form-label">លេខទូរស័ព្ទ</label>
                    <div class="form-group">
                      <input value="{{ old('phone') }}" type="text" name="phone" class="form-control shadow-none @error('phone') is-invalid @enderror">
                      @error('khmer_name')
                        <span style=" font-size:10px;" class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  

                  <div class="col-12 mt-2">
                    <label for="yourUsername" class="form-label">អាសយដ្ឋានអ៊ីម៉ែល</label>
                    <div class="form-group">
                      <input value="{{ old('email') }}" type="text" name="email" class="form-control shadow-none @error('email') is-invalid @enderror">
                      @error('email')
                        <span style=" font-size:10px;" class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>



                  <div class="col-12">
                    <label class="form-label">លេខកូដសម្ងាត់</label>
                    <input value="{{ old('password') }}" type="password" name="password" class="form-control shadow-none @error('password') is-invalid @enderror">
                    @error('password')
                      <span style=" font-size:10px;" class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="col-12">
                    <label class="form-label">បញ្ចាក់លេខកូដសម្ងាត់</label>
                    <input value="{{ old('confirm_password') }}" type="password" name="confirm_password" class="form-control shadow-none @error('password') is-invalid @enderror">
                    @error('confirm_password')
                      <span style=" font-size:10px;" class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  

                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit" id="submit-button">បង្កើត</button>
                  </div>

                  <div class="col-12">
                    <p class="small mb-0">តើអ្នកមានគណនីហើយមែន? <a href="">ចូលទៅកាន់ប្រព័ន្ធ</a></p>
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

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script>
  
  
  document.getElementById('form-login').addEventListener('submit', function () {
    document.getElementById('loading-spinner').style.display = 'block';
    submitButton.disabled = true;
  });
  
</script>

</body>
</html>