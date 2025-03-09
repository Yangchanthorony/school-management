<!DOCTYPE html>
<html lang="en">
@include('components.header')
<body>

  <!-- ======= Header ======= -->
  @include('teachers.components.navbar')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('teachers.components.sidebar')
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

  <!-- Vendor JS Files -->
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

</body>

</html>