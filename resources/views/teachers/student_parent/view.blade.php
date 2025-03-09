@extends('components.master')
@section('contents')
<section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body p-4">
            <h4 class="mb-4">អំពីអាណាព្យាបាល</h4>
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
                    កូនៗដែរបានមោរៀន
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <ul>
                        <li>គណិតវិទ្យា</li>
                        <li>រូបវិទ្យា</li>
                        <li>គីមីវិទ្យា</li>
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
            <h4 class="mb-4">អំពីស្ថានភាពគ្រួសារ</h4>
            <ul>
                <li>
                  <p>បច្ចុប្បន្ន មាន សមាជិកគ្រួសារ សរុប ៖ <strong>5 នាក់</strong></p>
                </li>
                <li>
                  <p>កូនស្រី <strong>2 នាក់</strong> </p>
                </li>
                <li>
                  <p>មុខរបបសម្រាប់គ្រួសារ ៖ <strong>ធ្វើស្រែចម្ការ</strong></p>
                </li>

                <li>
                    <p>ទីលំនៅបច្ចុប្បន្នសម្រាប់គ្រួសារ <strong>ដថាដសាសថ</strong></p>
                </li>

                <li>
                    <p>ស្ថានភាពគ្រួសារ មធ្យម</p>
                </li>

            </ul>

          </div>
        </div>

      </div>

    </div>
  </section>
@endsection