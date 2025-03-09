@extends('components.master')
@section('contents')
<section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body p-4">
            <h4 class="mb-4">អំពីអាណាព្យាលបាល</h4>
            <!-- Default Accordion -->
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     ឈ្មោះអាណាព្យាបាលសិស្ស
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <ul>
                        <li>លោកគ្រូ ៖ ឡុន បញ្ញា</li>
                        <li>លោកគ្រូ ៖ សាន សេរី</li>
                        
                        <li >
                            <p style="color:red">លោក និង អ្នកស្រី គឺ ជាអាណាព្យាបាលសិស្សផ្ទាល់</p>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    កូនៗដែលបានមករៀន
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <ul>
                        <li>គណិត </li>
                        <li>រូបវិទ្យា </li>
                        <li>គីមី </li>
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
                  <p>បច្ចុប្បន្ន មាន សមាជិកគ្រួសារ សរុប ៖​ 5 នាក់</p>
                </li>
                <li>
                  <p>កូនស្រី 2 នាក់</p>
                </li>
                <li>
                  <p>មុខរបរសម្រាប់គ្រួសារ​ ៖​ ធ្វើស្រែចំការ </p>
                </li>

                <li>
                    <p>ទីលំនៅបច្ចុប្បន្នសម្រាប់គ្រួសារនោតាកែវ</p>
                </li>

                <li>
                    <p>ស្ថានភាពគ្រួសារ</p>
                </li>

                
                
            </ul>

            {{-- <div class=" p-3">
                <h6 class="mb-4">ស្ថានភាពសៀវភៅ</h6>
                <div class="row">
                    <div class="col-lg-2">ថ្មី</div>
                    <div class="col-lg-10">
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">មធ្យម</div>
                    <div class="col-lg-10">
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-2">ចាស់</div>
                    <div class="col-lg-10">
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                        </div>
                    </div>
                    
                </div>
            </div> --}}
            

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection