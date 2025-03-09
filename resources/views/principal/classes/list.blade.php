@extends('components.master')
@section('contents')


    @include('principal.classes.modals.schedule-create')
    @include('principal.classes.modals.schedule-update')


    <div class="card">
        <div class="card-body p-5">
            <!-- Alert message -->
            @if(session('success'))
                <div id="alertMessage" class="alert alert-success pb-0" role="alert">
                    <p style="font-size:15px; color: black;">{{ session('success') }}</p>
                </div>
            @endif

            <h5 class="mb-4">បន្ទាប់រៀនតាមថ្នាក់នីមួយៗ</h5>
            <table class="table table-hover datatable">
                <thead>
                    <tr style="background-color: black; color: white;">
                        <th>ល.រ</th>
                        <th>ឈ្មោះថ្នាក់</th>
                        <th>គ្រូបន្ទុកថ្នាក់</th>
                        <th>សកម្មភាព</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($classes as $key => $class)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $class->name }}</td>
                            <td>
                                @if($class->teacher != '')
                                    {{ $class->teacher->full_name }}
                                @else
                                    <span class="text-danger">មិនមានគ្រូបន្ទុក</span>
                                @endif
                            </td>
                            <td class=" d-flex align-items-center">
                                <a class=" btn btn-success btn-sm" href="{{ route('admin.class.view', $class->id) }}"><i
                                        class="bi bi-eye"></i></a>
                                <a class=" btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this?')"
                                    href="{{ route('admin.class.destroy', $class->id) }}" class=" text-danger"><i
                                        class="bi bi-trash2-fill"></i></a>
                                <a class=" btn btn-primary btn-sm" href="{{ route('admin.class.edit', $class->id) }}"><i
                                        class="bi bi-pen"></i></a>

                                <div class="dropdown">
                                    <button class="btn btn-secondary btn-sm" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="bi bi-calendar-day"></i>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">ពិនិត្យមើលកាវិភាគ</a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a class="dropdown-item"
                                                onclick="openModal({{ $class->id }})"
                                                href="javascript:void()">បន្ថែមការវិភាគ</a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#schedule-update"><a class="dropdown-item"
                                                href="javascript:void()">កែសម្រួលកាលវិភាគ</a></li>
                                    </ul>
                                </div>


                                {{-- <i class="bi bi-calendar-day"></i> --}}

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- Button trigger modal -->





@endsection

@section('scripts')
    <script>
        setTimeout(function () {
            var alertMessage = document.getElementById('alertMessage');
            if (alertMessage) {
                alertMessage.style.display = 'none';
            }
        }, 2000);


        const openModal = (id) => {
            // Show Bootstrap placeholder loading before AJAX call
            let loadingHtml = `
                <div class="modal-header">
                    <h1 class="modal-title fs-5 placeholder-glow">
                        <span class="placeholder col-6"></span>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 mb-3 placeholder-glow">
                                    <label class="placeholder col-4"></label>
                                    <select class="form-control placeholder col-12" disabled></select>
                                </div>

                                <div class="col-12 mb-3 placeholder-glow">
                                    <label class="placeholder col-4"></label>
                                    <select class="form-control placeholder col-12" disabled></select>
                                </div>
                                
                                <div class="col-6 mb-3 placeholder-glow">
                                    <label class="placeholder col-4"></label>
                                    <select class="form-control placeholder col-12" disabled></select>
                                </div>
                                <div class="col-6 mb-3 placeholder-glow">
                                    <label class="placeholder col-4"></label>
                                    <select class="form-control placeholder col-12" disabled></select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            $(".display-modal").html(loadingHtml);

            $.ajax({
                type: "GET",
                url: "{{ route('admin.schedule.create') }}",
                data: {
                    'id': id
                },
                dataType: "json",
                success: function (response) {
                    if (response.status === 200) {
                        let teachers = response.teachers;
                        let htmlModal = `
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                    បន្ថែមការវិភាគសម្រាប់ថ្នាក់ ${response.classroom.name}
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="formCreateSchedule">
                                    <div class="row p-0">
                                        <div class="col-12 mb-3">
                                            <label for="">គ្រូបង្រៀន</label>
                                            <input type="hidden" name="study_class_id" value="${response.classroom.id}" >
                                            <input type="hidden"  name="student_level_id" value="${response.classroom.class_level_id}" >
                                            <select onchange="handleSelect(this)" name="teacher_id" id="all_teachers" class="form-control">`;
                                                $.each(teachers, function (index, value) { 
                                                    let levelsText = value.levels.map(item => item.name).join(", ");
                                                    htmlModal += `
                                                        <option value="${value.id}" data-subject-id="${value.subjects[0].id}">
                                                            ${value.full_name} (បង្រៀនថ្នាក់ ៖ ${levelsText} ~‍ ឯកទេស ៖ ${value.specialization})
                                                        </option>
                                                    `;
                                                });

                                            htmlModal += `
                                            </select>
                                        </div>`;
                                        htmlModal += `

                                       <div class="col-12 mb-3">
                                            <label for="">មុខវិជ្ជាបង្រៀន</label>
                                            <select name="subject_id" id="subject_id" class="form-control shadow-none"></select>
                                                                                
                                            </select>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="">ថ្ងៃបង្រៀន</label>
                                            <select name="day" class="form-control shadow-none">
                                                <option value="ច័ន្ទ">ច័ន្ទ</option>
                                                <option value="អង្គារ">អង្គារ</option>
                                                <option value="ពុធ">ពុធ</option>
                                                <option value="ព្រ.ហ">ព្រ.ហ</option>
                                                <option value="សុក្រ">សុក្រ</option>
                                                <option value="សៅរ៍">សៅរ៍</option>
                                            </select>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="">ពេលវេលា</label>
                                            <select name="study_time_id" class="form-control shadow-none">
                                                @foreach ($studyTimes as $time)
                                                    <option value="{{ $time->id }}">
                                                        {{ $time->start_time }} - {{ $time->end_time }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </form>
                        </div>`;

                        $(".display-modal").html(htmlModal);
                    }
                }
            });
        };


        const handleSelect = (option) => {
            let teacherId = $(option).val();
            if (teacherId) {
                $.ajax({
                    url: 'get-subjects/' + teacherId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (response) {
                        let subjectDropdown = $('#subject_id');
                        subjectDropdown.empty(); 

                        if (response.subjects.length > 0) {
                            $.each(response.subjects, function (index, subject) {
                                subjectDropdown.append(`<option value="${subject.id}">${subject.subject_name}</option>`);
                            });
                        } else {
                            subjectDropdown.append(`<option value="">No subjects available</option>`);
                        }
                    },
                    error: function () {
                        alert('Error fetching subjects. Please try again.');
                    }
                });
            } else {
                $('#subject_id').empty().append(`<option value="">Select a subject</option>`);
            }
            
        }


      


        // Listen for change event on teacher select dropdown
        $('#all_teachers').on('change', function () {

           let teacherId = $(this).val(); 

           alert("hello")
           

            if (teacherId) {
                $.ajax({
                    url: 'admin/get-subjects/' + teacherId, // API route to fetch subjects
                    type: 'GET',
                    dataType: 'json',
                    success: function (response) {
                        let subjectDropdown = $('#subject_id');
                        subjectDropdown.empty(); // Clear old options

                        if (response.subjects.length > 0) {
                            $.each(response.subjects, function (index, subject) {
                                subjectDropdown.append(`<option value="${subject.id}">${subject.name}</option>`);
                            });
                        } else {
                            subjectDropdown.append(`<option value="">No subjects available</option>`);
                        }
                    },
                    error: function () {
                        alert('Error fetching subjects. Please try again.');
                    }
                });
            } else {
                $('#subject_id').empty().append(`<option value="">Select a subject</option>`);
            }
        });

        const scheduleSave = () => {
            try {
                let formData = new FormData($("#formCreateSchedule")[0]);
                let submitButton = $("#scheduleSubmitBtn"); // Target the button
        
                // Change button state to loading
                submitButton.prop("disabled", true).html('<span class="spinner-border spinner-border-sm"></span> កំពុងផ្ទុក...');

                $.ajax({
                    type: "POST",
                    url: "{{ route('admin.schedule.store') }}",
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response.status == 200) {
                            submitButton.prop("disabled", false).html("បន្ថែម");

                            // Display success message
                            message(response.message, true);

                            //close modal
                            $("#exampleModal").modal("hide");
                            
                        } else {
                            message(response.message, false);
                            submitButton.prop("disabled", false).html("បន្ថែម");
                        }
                    },
                    error: function () {
                        // Reset button state on error
                        submitButton.prop("disabled", false).html("បន្ថែម");
                    }
                });

            } catch (e) {
                console.log(e);
                $("#scheduleSubmitBtn").prop("disabled", false).html("បន្ថែម");
            }
        };


        
    </script>
@endsection