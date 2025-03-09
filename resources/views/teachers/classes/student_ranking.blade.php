@extends('teachers.components.master')
@section('contents')


    <!-- Page 1 -->
   
     
        <div class="card">
          <div class="card-body p-4">
            <!-- Document Header -->
            <div class="document-header">
              
              <div class=" text-center">
                <h6 class="main-title" style="font-size: 24px;">ព្រះរាជាណាចក្រកម្ពុជា</h6>
                <h6 class="sub-title">ជាតិ សាសនា ព្រះមហាក្សត្រ</h6>
                <img class="" style="width: 200px;" src="{{ asset('save1.jpg') }}" alt="">
              </div>
              
              <div class="div">
                <p>ខេត្ត កំពង់ធំ</p>
                <h6>មន្ទីអប់រំយុវជននិងកីឡា</h6>
                <p>វិទ្យាល័យ ហ៊ុន សែន ត្បែង</p>
                <p>ថ្នាក់ទី 10A </p>
              </div>
              <h6 class="text-center">តារាងស្រង់ពិន្ទុប្រចាំខែ មិថុនា ថ្នាក់ទី 10A</h6>
            </div>

            <!-- Table Section -->
            <table class="student_ranking">
              <thead>
                <tr>
                  <th>ល.រ</th>
                  <th>អត្តលេខ</th>
                  <th>គោត្តនាម និង នាម</th>
                  <th>ភេទ</th>
                  <th>ថ្ងៃ ខែ ឆ្នាំកំណើត</th>
                  <th>អវត្តមាន</th>
                  <th>មានច្បាប</th>
                  <th>ពិន្ទុសរុប</th>
                  <th>មធ្យមភាគ</th>
                  <th>ចំណាត់ថ្នាក់</th>
                </tr>
              </thead>
              <tbody id="table-body">
                  <tr>
                     <td>1</td>
                     <td>1001</td>
                     <td>យ៉ង់ ចន្ទធរណី</td>
                     <td>ប</td>
                     <td>10 មករា 2003</td>
                     <td>3</td>
                     <td>2</td>
                     <td>590</td>
                     <td>95.50%</td>
                     <td>1</td>
                  </tr>
              </tbody>
            </table>

            <!-- Footer Section -->
            <div class="footer">
              <p>សេចក្តីបញ្ជាក់៖ មួយចំនួននៃឈ្មោះត្រូវបានផ្ទៀងផ្ទាត់</p>
              <div class="footer-signature">

                <div class="class_info">
                  <p>សិស្សសរុប ៖ <span style="color: red;">28</span> នាក់ &emsp;&emsp; ស្រី <span style="color: red;">16</span> នាក់</p>
                  <p>ការសិក្សាខ្សោយ ៖ <span style="color: red;">5</span> នាក់ &emsp;&emsp; ស្រី <span style="color: red;">2</span> </p>
                  <p>ការសិក្សាមធ្យម ៖ <span style="color: red;">5</span> នាក់ &emsp;&emsp; ស្រី <span style="color: red;">2</span> </p>
                  <p>ការសិស្សបង្គួរ ៖ <span style="color: red;">20</span> នាក់ &emsp;&emsp; ស្រី <span style="color: red;">4</span> </p>
                  <p>ការសិស្សល្អ ៖ <span style="color: red;">5</span> នាក់ &emsp;&emsp; ស្រី <span style="color: red;">1</span> </p>
                 
                </div>

                <div>
                  <p>គ្រូបន្ទុកថ្នាក់</p>
                  <p>ហត្ថលេខានិងឈ្មោះ</p>
                  <div style="margin-top:60px;"></div>
                  <p>ឈ្មោះ................................</p>
                </div>

                <div>
                  <p>វិ.ហ៊ុនសែនត្បែងថ្ងៃទី.......ខែ.......ឆ្នាំ 2024</p>
                  <p>បានឃើញនិងឯកភាពដោយ</p>
                  <div style="margin-top:60px;"></div>
                  <p>ឈ្មោះ................................</p>
                </div>

              </div>
            </div>

            <div style="font-size: 20px; cursor: pointer; color:rgb(8, 149, 25);" >
              <i class="bi bi-printer-fill"></i>
              <span>Prin ឯកសារ</span>
            </div>
          </div>
        </div>
@endsection