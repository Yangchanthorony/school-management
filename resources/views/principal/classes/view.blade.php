@extends('components.master')
@section('contents')
<section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body p-4">
            <h4 class="mb-4">អំពីថ្នាក់រៀន {{ $data['name'] }}</h4>
            <!-- Default Accordion -->
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     គ្រូដែរបានបង្រៀនសម្រាប់សម្រាប់ថ្នាក់ 11A
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <ul>
                        @if ($data->teachers->isNotEmpty())
                            <li>លោកគ្រូ ៖ ឡុន បញ្ញា</li>
                            <li>លោកគ្រូ ៖ សាន សេរី</li>
                            <li>លោកអ្នកគ្រូ ៖ អ៊ុន ឆវី</li>
                        @endif
                        @if ($data->teacher != "")
                           <li><strong class=" text-danger">គ្រូបន្ទុកថ្នាក់ លោកគ្រូ ៖ ចាន់ កុសល</strong></li>
                        @endif
                        
                      </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    មុខវិជ្ជាសម្រាប់ថ្នាក់ទី 11A
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
            <h4 class="mb-4">អំពីស្ថានភាពក្នុងថ្នាក់</h4>
            <ul>
                <li>
                  <p>ថ្នាក់ទី 11 A </p>
                </li>
                <li>
                  <p>សិស្សសរុប 38 នាក់</p>
                </li>
                <li>
                  <p>សិស្សស្រី 19 នាក់</p>
                </li>

                <li>
                    <p>ក្តាខៀនសរុបចំនួន <strong>2</strong></p>
                </li>

                <li>
                    <p>តុសម្រាប់សិស្សសរុបចំនួន <strong>16</strong></p>
                </li>

                <li>
                    <p>តុសម្រាប់គ្រូសរុបចំនួន <strong>2</strong></p>
                </li>

                <li>
                    <p>កង្ហារសរុបចំនួន  <strong>2</strong></p>
                </li>

                <li>
                    <p>អំពូលភ្លើងសរុប  <strong>2</strong></p>
                </li>
                
            </ul>

          </div>
        </div>

      </div>

    </div>
  </section>
@endsection