<!DOCTYPE html>
<html lang="en">
@include('components.header')
<body>

  <!-- ======= Header ======= -->
  @include('components.navbar')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('components.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">
     @yield('contents')
  </main>
  <!-- End #main -->

  
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; <strong>វិទ្យាល័យ ហ៊ុន សែន ត្បែង</strong>. គុណធម៍ សុជីវធម៌ បណ្តុះចំណេះដឹង
    </div>
    <div class="credits">
       អភិវឌ្ឈនិងកសាងឡេីងតាំងពី ឆ្នាំ ២០០២
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
</body>

    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- My Script --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });


      const message = (message,status) => {
        Toastify({
          text: `${message}`,
          duration: 3000,
          destination: "https://github.com/apvarun/toastify-js",
          newWindow: true,
          close: true,
          gravity: "top", 
          position: "right", 
          stopOnFocus: true, 
          style: {
            background:  `${ status == true ? 'green' : 'red'}`,
          },
          onClick: function(){}
        }).showToast();
      }


    </script>


    


    @yield('scripts')
    
</html>