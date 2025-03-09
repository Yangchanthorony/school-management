@extends('components.master')
@section('contents')
    <div class="card">
        <div class="card-body p-5">
            <!-- Alert message -->
            @if(session('success'))
                <div id="alertMessage" class="alert alert-success pb-0" role="alert">
                    <p style="font-size:15px; color: black;">{{ session('success') }}</p>
                </div>
            @endif

            <h5 class="mb-4">មុខវិជ្ជាបង្រៀនទាំងអស់</h5>
            <table class="table table-hover datatable">
                <thead>
                    <tr style="background-color: black;">
                        <th><b>ឈ្មោះមុខវិជ្ជា</b></th>
                        <th>ប្រភេទមុខវិជ្ជា</th>
                        <th>ពិន្ទុសម្រាប់មុខវិទ្យា</th>
                        <th>កំរិតថ្នាក់</th>
                        <th>ចំនួនសៀវភៅ</th>
                        <th>សកម្មភាព</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subjects as $subject)
                        <tr>
                            <td>{{ $subject->subject_name }}</td>
                            <td>
                                @if($subject->subject_type == 1)
                                    សម្រាប់ថ្នាក់ សង្គម
                                @elseif($subject->subject_type == 2)
                                    សម្រាប់ថ្នាក់ វិទ្យាសាស្រ្ត
                                @else
                                    សម្រាប់ថ្នាក់ទូទៅ
                                @endif
                            </td>
                            <td>{{ $subject->credit }}</td>
                            <td>{{ $subject->level->name }}</td>
                            <td>{{ $subject->book_number }}</td>
                            <td>
                                <a href="{{ route('admin.subject.edit',$subject->id) }}"><i class="bi bi-eye"></i></a>
                                <a onclick="return confirm('Do you want to delete this?')" href="{{ route('admin.subject.destroy',$subject->id) }}" class=" text-danger"><i class="bi bi-trash2-fill"></i></a>
                                <a href="{{ route('admin.subject.edit',$subject->id) }}"><i class="bi bi-pen"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    setTimeout(function() {
        var alertMessage = document.getElementById('alertMessage');
        if (alertMessage) {
            alertMessage.style.display = 'none';
        }
    },2000);
</script>
@endsection