@extends('components.master')
@section('contents')
<section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body p-4">
            <h4 class="mb-4">អំពីមុខវិជ្ជា</h4>
            <!-- Default Accordion -->
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     គ្រូដែរបានបង្រៀនសម្រាប់មុខវិជ្ជា
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <ul>
                        <li>លោកគ្រូ ៖ ឡុន បញ្ញា</li>
                        <li>លោកគ្រូ ៖ សាន សេរី</li>
                        <li>លោកគ្រូ ៖ អ៊ុន ឆវី</li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ប្រើប្រាស់ដោយថ្នាក់
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <ul>
                        <li>ថ្នាក់ 7A ៖ 25 ក្បាល </li>
                        <li>ថ្នាក់ 7B ៖ 35 ក្បាល </li>
                        <li>ថ្នាក់ 7C ៖ 35 ក្បាល </li>
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
            <h4 class="mb-4">អំពីសៀវភៅសម្រាប់មុខវិជ្ជា</h4>
            <ul>
                <li>
                  <p>គណិតវិទ្យា</p>
                </li>
                <li>
                  <p>សម្រាប់ថ្នាក់ទី១២</p>
                </li>
                <li>
                  <p>ផ្នែកសង្គម</p>
                </li>

                <li>
                    <p>សៀវភៅសរុប <strong>250</strong> ក្បាល (ប្រើប្រាស់បាន)</p>
                </li>

                <li>
                    <p>ប្រើអស់ <strong>200</strong> ក្បាល</p>
                </li>

                <li>
                    <p>នៅសល់ <strong>200</strong> ក្បាល</p>
                </li>

                <li>
                    <p>ប្រើលែងកើតសរុបទាំងអស់ <strong>50</strong> ក្បាល</p>
                </li>
                
            </ul>

            <div class=" p-3">
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
            </div>
            

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection