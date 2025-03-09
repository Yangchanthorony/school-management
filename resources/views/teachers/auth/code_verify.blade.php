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
                <form id="verify-form" action="" class="row g-3 needs-validation" method="POST">
                  @csrf
                  <div class="col-12 p-3">
                    @if (Session::has('status'))
                      <p class="text-center alert bg-success text-light p-2">{{ Session::get('status') }}</p>
                    @endif
                    <input type="hidden" value="" name="token" id="token">
                    <input type="hidden" value="" name="code" id="code">
                    <p class="text-center">សូមបញ្ចូលកូដទាំង 6 ខ្ទង់របស់អ្នក</p>
                    <div class="form-group mt-3">
                      <div class="row" id="code-inputs">
                        <div class="col-2"><input max="9" type="text" class="form-control shadow-none"></div>
                        <div class="col-2"><input max="9" type="text" class="form-control shadow-none"></div>
                        <div class="col-2"><input max="9" type="text" class="form-control shadow-none"></div>
                        <div class="col-2"><input max="9" type="text" class="form-control shadow-none"></div>
                        <div class="col-2"><input max="9" type="text" class="form-control shadow-none"></div>
                        <div class="col-2"><input max="9" type="text" class="form-control shadow-none"></div>
                      </div>
                      @error('email')
                        <span style="font-size:10px;" class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <div class="col-6">
                    <button class="btn btn-primary w-100" type="submit">បញ្ចូន</button>
                  </div>
                  <div class="col-6 text-center mt-3">
                    <button id="retrieve-code-btn" type="button" class="btn btn-success" onclick="retrieveCode()">ទទួលយកកូដពីអ៊ីម៉ែល</button>
                  </div>
                </form>

                <!-- Resend Code Section -->
                <div class="text-center mt-3">
                  <p id="confirmation-message" style="font-size: 13px; color:green;" class="text-muted">តើអ្នកបានទទួលកូដតាមអ៊ីម៉ែលហើយឬនៅ?</p>
                  <button id="resend-code-btn" class="btn btn-secondary" onclick="resendCode()" disabled>ផ្ញើកូដម្តងទៀត (30)</button>
                </div>

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

<script>

  // When the form is submitted
  document.getElementById('verify-form').addEventListener('submit', function(e) {
      // Show the loading spinner
      document.getElementById('loading-spinner').style.display = 'block';

      // Disable the submit button to prevent multiple clicks
      document.querySelector('button[type="submit"]').disabled = true;
  });

  // Countdown for the resend code button
  let countdown = 30;
  const resendButton = document.getElementById('resend-code-btn');
  const interval = setInterval(() => {
    countdown--;
    resendButton.textContent = `ផ្ញើកូដម្តងទៀត (${countdown})`;
    if (countdown === 0) {
      clearInterval(interval);
      resendButton.disabled = false;
      resendButton.textContent = "ផ្ញើកូដម្តងទៀត";
    }
  }, 1000);

  // Function to resend code
  function resendCode() {
   
  }

 
  function retrieveCode() {
    const emailCode = document.getElementById('code').value;

    if (emailCode.length !== 6) {
      alert('កូដមិនត្រឹមត្រូវ ឬមិនមាន! សូមពិនិត្យម្តងទៀត។');
      return;
    }

    // Fill each character of the code into the corresponding input fields
    const inputFields = document.querySelectorAll('#code-inputs input');
    for (let i = 0; i < emailCode.length; i++) {
      inputFields[i].value = emailCode[i];
    }

  }
</script>

</body>
</html>