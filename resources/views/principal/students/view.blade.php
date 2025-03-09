@extends('components.master')
@section('contents')
<section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body p-4">
            <h4 class="mb-4">អំពីសិស្ស</h4>
            <!-- Default Accordion -->
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     ឈ្មោះ អាណាព្យាបាលសិស្ស
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <ul>
                        <li>លោក ៖ ឡុន បញ្ញា</li>
                        <li>អ្នកស្រី ៖ សាន សេរី</li>
                        <li><strong class=" text-danger">លោក និង អ្នកស្រី គឺ ជាអាណាព្យាបាលសិស្សផ្ទាល់</strong></li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    សិស្សធ្លាប់រៀននៅថ្នាក់
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <ul>
                        <li>7A</li>
                        <li>8A</li>
                        <li>9D</li>
                      </ul>
                  </div>
                </div>
              </div>
              
            </div><!-- End Default Accordion Example -->

          </div>
        </div>

      </div>

      <div class="col-lg-6">

        <div class="card">
          <div class="card-body p-4">
            <h4 class="mb-4">អំពីស្ថានសិស្ស</h4>
            <ul>
                <li>
                  <p>ឈ្មោះសិស្ស ៖ ហ៊ុន បញ្ញា</p>
                </li>
                <li>
                  <p>ភេទ ប្រុស</p>
                </li>
                <li>
                  <p>អាយុ 16 ឆ្នាំ</p>
                </li>

                <li>
                    <p>ថ្នាក់រៀនបច្ចុបន្បន្ន ៖ 8A</p>
                </li>

                <li>
                    <p>ចំណាត់ថ្នាក់ចុងក្រោយ ៖ ទទួលបានលេខ <strong class=" text-danger">2</strong>  ជាមួយនឹង មធ្យមភាគ <strong class=" text-danger">75.89%</strong></p>
                </li>

                <li>
                    <p>អវត្តមានសរុប ៖ ចំនួន <strong>5</strong> ដង</p>
                </li>

                <li>
                    <p>អវត្តចុងក្រោយ ៖ <strong>30/5/2024</strong> (គ្មានច្បាប់)</p>
                </li>

                <li>
                    <p>សម្ថភាពសិក្សា ៖ <strong class=" badge bg-success">ល្អបង្គួរ</strong> </p>
                </li>

                <li>
                   <p>ស្ថានភាពសិក្សា ៖ <strong class="badge bg-danger">បានផ្ទេរចេញ</strong> </p>
                </li>

               
 
            </ul>

          </div>
        </div>

      </div>

    </div>
  </section>
@endsection