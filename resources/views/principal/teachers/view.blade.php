@extends('components.master')
@section('contents')

  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <h2>ផាន សុផាត់</h2>
            <h3>គណិតវិទ្យា</h3>
            <div class="social-links mt-2">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">ព័ត្នមានផ្ទាល់ខ្លួន</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">សរុបការងារ</button>
              </li>

              

            </ul>

            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                

                <p>បានចូលបង្រៀននៅថ្ងៃទី ១០​​​​/០៦​/2018</p>

                <div class="card-title">បង្ហាញព័ត៌មាន</div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">ឈ្មោះ</div>
                  <div class="col-lg-9 col-md-8">ផាន សុផាត់</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">អាយុ</div>
                    <div class="col-lg-9 col-md-8">35 ឆ្នាំ</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">ភេទ</div>
                  <div class="col-lg-9 col-md-8">ប្រុស</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">មុខវិជ្ជា</div>
                  <div class="col-lg-9 col-md-8">គណិតវិទ្យា</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">ទីកន្លែងកំណើត</div>
                    <div class="col-lg-9 col-md-8">ខេត្តកំពង់ធំ , ស្រុកកំពង់ស្វាយ , ឃុំត្បែង , ភូមិតារាម </div>
                </div>


                <div class="row">
                  <div class="col-lg-3 col-md-4 label">ទីលំនៅបច្ចុប្បន្ន</div>
                  <div class="col-lg-9 col-md-8">ខេត្តកំពង់ធំ , ស្រុកកំពង់ស្វាយ , ឃុំត្បែង , ភូមិតារាម </div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">លេខទូរស័ព្ទ</div>
                  <div class="col-lg-9 col-md-8">0645756765 / 023564545</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">អីម៉ែល</div>
                  <div class="col-lg-9 col-md-8">sokpath@gmai.com</div>
                </div>

              </div>

              <div class="tab-pane fade profile-overview pt-3" id="profile-edit">

            

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">ថ្នាក់បង្រៀនសរុប</div>
                  <div class="col-lg-9 col-md-8">3 ថ្នាក់</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">កំរិតថ្នាក់</div>
                    <div class="col-lg-9 col-md-8">7A , 7B , 7F</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">សិស្សសរុប</div>
                  <div class="col-lg-9 col-md-8">90នាក់</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">ទទួលបន្ទុក</div>
                  <div class="col-lg-9 col-md-8">7F</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">អវត្តមាន</div>
                  <div class="col-lg-9 col-md-8">1</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">អវត្តមានចុងក្រោយ</div>
                  <div class="col-lg-9 col-md-8">10/10/2024</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">ស្ថានភាព</div>
                  <div class="col-lg-9 col-md-8"><span class=" badge bg-success">បន្តបង្រៀន</span></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">មុខវិជ្ជាបង្រៀនបច្ចុប្បន្ន</div>
                  <div class="col-lg-9 col-md-8">គណិត , រូប</div>
                </div>

              </div>

           

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection