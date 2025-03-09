@extends('components.master')
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
                <h5 class=" card-title">គ្រូបង្រៀន <span>| ឆ្នាំ 2024-2025</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-workspace"></i>
                  </div>
                  <div class="ps-3">
                    <h6>40 នាក់</h6>
                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

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
                <h5 class="card-title">សិក្សានុសិស្ស<span> | ឆ្នាំ 2024-2025</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-bounding-box"></i>
                  </div>
                  <div class="ps-3">
                    <h6>3,264 នាក់</h6>
                    <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

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
                <h5 class="card-title">បន្ទប់រៀន <span>| ឆ្នាំ 2024-2025</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-houses-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6>30 បន្ទប់</h6>
                    <span class="text-danger small pt-1 fw-bold">20</span> <span class="text-muted small pt-2 ps-1">ត្រូវបានប្រើ</span>

                  </div>
                </div>

              </div>
            </div>

          </div>
           <!-- End Class stady Card -->

           {{-- Custormer start --}}
          <div class="col-xxl-4 col-md-6">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li><a class="dropdown-item" href="#">ឆ្នាំ 2022-2023</a></li>
                  <li><a class="dropdown-item" href="#">ឆ្នាំ 2023-2024</a></li>
                  <li><a class="dropdown-item" href="#">ឆ្នាំ 2024-2025</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">អ្នកប្រើប្រាស់ <span>| ឆ្នាំ 2024-2025</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6>300</h6>
                    <span class="text-danger small pt-1 fw-bold">15</span> <span class="text-muted small pt-2 ps-1">ជាគ្រូបង្រៀន</span>
                  </div>
                </div>

              </div>
            </div>

          </div>
          {{-- Customer end --}}
         

          {{-- Electricity and water expenses start --}}
          <div class="col-12">
            <div class="card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  

                  <li><a class="dropdown-item" href="#">5 ខែចុងក្រោយ</a></li>
                  <li><a class="dropdown-item" href="#">1 ឆ្នាំចុងក្រោយ</a></li>

                </ul>
              </div>

              
              <div class="card-body">
                <h5 class="card-title">ការចំណាយថ្លៃទឹក-ភ្លើង <span>/ ខែនេះ</span></h5>

                <!-- Line Chart -->
                <div id="reportsChart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#reportsChart"), {
                      series: [
                        {
                          name: 'ទឹកភ្លើង', // Khmer for "electricity"
                          data: [30, 40, 28, 100], // Numeric values only
                        },
                      ],
                      chart: {
                        height: 350,
                        type: 'area',
                        toolbar: {
                          show: false,
                        },
                      },
                      markers: {
                        size: 4,
                      },
                      colors: ['green'],
                      fill: {
                        type: "gradient",
                        gradient: {
                          shadeIntensity: 1,
                          opacityFrom: 0.3,
                          opacityTo: 0.4,
                          stops: [0, 90, 100],
                        },
                      },
                      dataLabels: {
                        enabled: false,
                      },
                      stroke: {
                        curve: 'smooth',
                        width: 2,
                      },
                      xaxis: {
                        type: 'datetime',
                        categories: [
                          "2024-09-19T00:00:00.000Z",
                          "2024-10-19T01:30:00.000Z",
                          "2024-11-19T02:30:00.000Z",
                          "2024-12-19T03:30:00.000Z",
                        ],
                      },
                      yaxis: {
                        labels: {
                          formatter: function (value) {
                            return value + "$";
                          },
                        },
                      },
                      tooltip: {
                        y: {
                          formatter: function (value) {
                            return value + "$";
                          },
                        },
                        x: {
                          format: 'dd/MM/yyyy HH:mm',
                        },
                      },
                    }).render();
                  });
                </script>
                
                

                <!-- End Line Chart -->

              </div>
               

            </div>
          </div>
          {{-- Electricity and water expenses start --}}

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

        <!-- Bac II Report -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">ឆ្នាំ 2022-2023</a></li>
              <li><a class="dropdown-item" href="#">ឆ្នាំ 2023-2024</a></li>
              <li><a class="dropdown-item" href="#">ឆ្នាំ 2024-2025</a></li>
            </ul>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">ស្ថិតិនៃការប្រឡងបាឌុប<span> | ឆ្នាំសិក្សា 2023-2024</span></h5>

            <div id="bacIIChart" style="min-height: 400px;" class="echart "></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#bacIIChart")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'ចំនួនសិស្សទទួលបាន',
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
                    data: [
                      {
                        value: 20,
                        name: 'Grade F',
                        itemStyle: { color: 'red' } // Yellow
                      },
                      {
                        value: 30,
                        name: 'Grade E',
                        itemStyle: { color: '#fc9b9b' }
                        
                      },
                      {
                        value: 70,
                        name: 'Grade D',
                        itemStyle: { color: '#f9b41f' }
                        
                      },
                      {
                        value: 50,
                        name: 'Grade C',
                        itemStyle: { color: '#5969f3' }
                      },
                      {
                        value: 10,
                        name: 'Grade B',
                        itemStyle: { color: '#2eca6a' }
                      },
                      {
                        value: 2,
                        name: 'Grade A',
                        itemStyle: { color: 'green' }
                      }

                    ]
                  }]
                });
              });
            </script>

          </div>

          
        </div>
        <!-- End Bac II Report -->

       

        <!-- News & Updates Traffic -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              
              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">ស្ថិតិនៃគ្រូបង្រៀន<span> | ឆ្នាំសិក្សា 2024-2025</span></h5>

            <div id="teacherChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#teacherChart")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'ចំនួនគ្រូបង្រៀន',
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
                        fontSize: '20',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [{
                        value: 20,
                        name: 'លោកគ្រូ'
                      },
                      
                      {
                        value: 10,
                        name: 'អ្នកគ្រូ'
                      }
                    ]
                  }]
                });
              });
            </script>

          </div>
        </div>
        <!-- End News & Updates -->

      </div>
      <!-- End Right side columns -->

    </div>
</section>

@endsection