@extends('teachers.components.master')
@section('contents')
<section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Teachers Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class=" card-title">ថ្នាក់បង្រៀន <span>| ឆ្នាំ 2024-2025</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-houses-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6>5 ថ្នាក់</h6>
                    <span class="text-success small pt-1 fw-bold">7A</span> <span class="text-muted small pt-2 ps-1">បន្ទុកថ្នាក់</span>

                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- End Teachers Card -->

          <!-- Students Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li><a class="dropdown-item" href="#">ឆ្នាំសិក្សា 2022-2023</a></li>
                  <li><a class="dropdown-item" href="#">ឆ្នាំសិក្សា 2023-2024</a></li>
                  <li><a class="dropdown-item" href="#">ឆ្នាំសិក្សា 2024-2025</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">សិស្សសរុប<span> | ឆ្នាំ 2024-2025</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-bounding-box"></i>
                  </div>
                  <div class="ps-3">
                    <h6>100 នាក់</h6>
                    <span class="text-success small pt-1 fw-bold">60%</span> <span class="text-muted small pt-2 ps-1">ស្រី</span>

                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- End Student Card -->

          <!-- Class stady Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">មុខវិជ្ជា <span>| ឆ្នាំ 2024-2025</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-houses-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6>2 មុខ</h6>
                    <span class="text-danger small pt-1 fw-bold">ភូមិ និង ប្រវត្តិវិទ្យា</span>

                  </div>
                </div>

              </div>
            </div>

          </div>
           <!-- End Class stady Card -->


          <div class="col-xxl-12 col-12">
            <div class="card info-card customers-card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">បន្ទប់រៀន <span>| ឆ្នាំ 2024-2025</span></h5>

                <div class="row">

                   <div class="col-lg-3 col-md-6 col-12 mb-3">
                      <a href="">
                        <div class="card bg-primary text-light p-3">
                            <h4 class="text-center">ថ្នាក់ទី 7A</h4>
                            <div class="p-3">
                              <p>សិស្សសរុប៖  35 នាក់</p>
                              <p>ស្រី ៖ 24 នាក់</p>
                            </div>  
                        </div>
                      </a>
                   </div> 

                  <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <a href="">
                      <div class="card p-3">
                          <h4>ថ្នាក់ទី 7A</h4>
                          <div class="p-3">
                            <p>សិស្សសរុប៖  35 នាក់</p>
                            <p>ស្រី ៖ 24 នាក់</p>
                          </div>  
                      </div>
                    </a>
                  </div> 

                  <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <a href="">
                      <div class="card p-3">
                          <h4 class="text-center">ថ្នាក់ទី 7A</h4>
                          <div class="p-3">
                            <p>សិស្សសរុប៖  35 នាក់</p>
                            <p>ស្រី ៖ 24 នាក់</p>
                          </div>  
                      </div>
                    </a>
                 </div> 

                <div class="col-lg-3 col-md-6 col-12 mb-3">
                  <a href="">
                    <div class="card p-3">
                        <h4 class="text-center">ថ្នាក់ទី 7A</h4>
                        <div class="p-3">
                          <p>សិស្សសរុប៖  35 នាក់</p>
                          <p>ស្រី ៖ 24 នាក់</p>
                        </div>  
                    </div>
                  </a>
                </div> 

                <div class="col-lg-3 col-md-6 col-12 mb-3">
                  <a href="">
                    <div class="card p-3">
                        <h4 class="text-center">ថ្នាក់ទី 7A</h4>
                        <div class="p-3">
                          <p>សិស្សសរុប៖  35 នាក់</p>
                          <p>ស្រី ៖ 24 នាក់</p>
                        </div>  
                    </div>
                  </a>
                </div> 

                </div>

              </div>
            </div>

          </div>

        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <!-- Recent Activity -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              
              <li><a class="dropdown-item" href="#">ឆ្នាំ 2022-2023</a></li>
              <li><a class="dropdown-item" href="#">ឆ្នាំ 2023-2024</a></li>
              <li><a class="dropdown-item" href="#">ឆ្នាំ 2024-2025</a></li>
            </ul>
            
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">ស្ថិតិនៃសិស្សសរុប<span> | ឆ្នាំសិក្សា 2024-2025</span></h5>

            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'ចំនួនសិស្ស',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                      show: false,
                      position: 'center'
                    },
                    emphasis: {
                      label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [{
                        value: 500,
                        name: 'សិស្សប្រុស',
                        itemStyle: { color: 'red' } // Yellow
                      },
                      
                      {
                        value: 600,
                        name: 'សិស្សស្រី',
                        itemStyle: { color: 'green' }
                      }
                    ]
                  }]
                });
              });
            </script>

          </div>

        </div>
        <!-- End Recent Activity -->


      </div>
      <!-- End Right side columns -->

    </div>
</section>

@endsection