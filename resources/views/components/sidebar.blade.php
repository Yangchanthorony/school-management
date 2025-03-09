<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="index.html">
        <i class="bi bi-grid"></i>
        <span>ផ្នែកគ្រប់គ្រង</span>
      </a>
    </li>
    <!-- End Dashboard Nav -->

    {{-- Class start --}}
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#subject-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-collection-fill"></i></i><span>មុខវិជ្ជា</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="subject-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('admin.subject.list')}}">
            <i class="bi bi-circle"></i><span>តារាងមុខវិជ្ជា</span>
          </a>
        </li>
        <li>
          <a href="{{ route('admin.subject.create') }}">
            <i class="bi bi-circle"></i><span>បន្ថែមមុខវិជ្ជា</span>
          </a>
        </li>
      </ul>
    </li>



    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#teacher-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-workspace"></i><span>គ្រូបង្រៀន</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="teacher-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('admin.teachers.index')}}">
            <i class="bi bi-circle"></i><span>តារាងគ្រូបង្រៀន</span>
          </a>
        </li>
        <li>
          <a href="{{route("admin.teachers.create")}}">
            <i class="bi bi-circle"></i><span>បន្ថែមគ្រូបង្រៀន</span>
          </a>
        </li>
      </ul>
    </li>
  

    {{-- Subject start --}}
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#class-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-houses-fill"></i></i><span>បន្ទប់រៀន</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="class-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route("admin.class.index")}}">
            <i class="bi bi-circle"></i><span>ពិនិត្យមើលមុខវិជ្ជា</span>
          </a>
        </li>
        <li>
          <a href="{{route("admin.class.create")}}">
            <i class="bi bi-circle"></i><span>បន្ថែមគ្រូមុខវិជ្ជា</span>
          </a>
        </li>
      </ul>
    </li>
    {{-- Subject end --}}


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#guardian-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-people-fill"></i></i><span>អាណាព្យាបាលសិស្ស</span>
      </a>
      {{-- <ul id="guardian-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="components-alerts.html">
            <i class="bi bi-circle"></i><span>តារាងអាណាព្យាបាលសិស្ស</span>
          </a>
        </li>
        <li>
          <a href="components-accordion.html">
            <i class="bi bi-circle"></i><span>បន្ថែមអាណាព្យាបាលសិស្ស</span>
          </a>
        </li>
      </ul> --}}
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#student-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-bounding-box"></i><span>សិក្សានុសិស្ស</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="student-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="components-alerts.html">
            <i class="bi bi-circle"></i><span>តារាងសិស្ស</span>
          </a>
        </li>
        <li>
          <a href="components-accordion.html">
            <i class="bi bi-circle"></i><span>បន្ថែមសិស្ស</span>
          </a>
        </li>
      </ul>
    </li>


   


  


    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="users-profile.html">
        <i class="bi bi-person"></i>
        <span>អំពីអ្នក</span>
      </a>
    </li><!-- End Profile Page Nav -->

   
    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-contact.html">
        <i class="bi bi-envelope"></i>
        <span>ទំនាក់ទំនង</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-contact.html">
        <i class="bi bi-gear"></i>
        <span>ការកំណត់</span>
      </a>
    </li>

    
    <!-- End Contact Page Nav -->
  </ul>

</aside>