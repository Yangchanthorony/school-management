@extends('components.master')

@section('contents')
<div class="card">
    <div class="card-body p-5">
      <h5 class="mb-3">កែសម្រួលមុខវិជ្ជាទៅក្នុងប្រព័ន្ធ</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3" action="{{ route('admin.subject.update', $subject->id) }}" method="POST" id="subjectForm">
        @csrf
        @method('PUT')
    
        <div class="col-md-6">
            <label for="subject_name" class="form-label">ឈ្មោះមុខវិជ្ជា</label>
            <input type="text" class="form-control shadow-none" id="subject_name" name="subject_name" value="{{ old('subject_name', $subject->subject_name) }}">
            @error('subject_name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="col-md-6">
            <label for="grade" class="form-label">កំរិតមុខថ្នាក់</label>
            <select name="grade" id="grade" class="form-control shadow-none">
                @foreach ($levels as $level)
                  <option value="{{ $level->id }}" {{ $level->id == $subject->grade ? 'selected' : '' }}>
                      {{ $level->name }}
                  </option>
                @endforeach
            </select>
            @error('grade')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        
        <div class="col-md-6">
            <label for="hours_per_week" class="form-label">ម៉ោងដែលមុខវិជ្ជាតម្រូវការក្នុងមួយសប្ដាហ៍</label>
            <select name="hours_per_week" id="hours_per_week" class="form-control shadow-none @error('hours_per_week') is-invalid @enderror">
                <option value="6">6h/សប្ដាហ៍</option>
                <option value="5">5h/សប្ដាហ៍</option>
                <option value="4">4h/សប្ដាហ៍</option>
                <option value="3">3h/សប្ដាហ៍</option>
                <option value="2">2h/សប្ដាហ៍</option>
                <option value="1">1h/សប្ដាហ៍</option>
            </select>
            @error('hours_per_week')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="col-md-6">
            <label for="credit" class="form-label">ពិន្ទុពេញសម្រាប់មុខវិជ្ជា</label>
            <input type="number" min="0" max="200" class="form-control shadow-none" id="credit" name="credit" value="{{ old('credit', $subject->credit) }}">
            @error('credit')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="subject_type" class="form-label">ប្រភេទមុខវិជ្ជា</label>
            <select name="subject_type" id="subject_type" class="form-control shadow-none">
                <option value="3" {{ $subject->subject_type == '3' ? 'selected' : '' }}>ទូទៅ</option>
                <option value="1" {{ $subject->subject_type == '1' ? 'selected' : '' }}>សម្រាប់ថ្នាក់ សង្គម</option>
                <option value="2" {{ $subject->subject_type == '2' ? 'selected' : '' }}>សម្រាប់ថ្នាក់ វិទ្យាសាស្រ្ត</option>
            </select>
            @error('subject_type')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="col-md-6">
            <label for="book_number" class="form-label">ចំនួនសៀវភៅសម្រាប់មុខវិជ្ជា</label>
            <input type="number" min="0" class="form-control shadow-none" id="book_number" name="book_number" value="{{ old('book_number', $subject->book_number) }}">
            @error('book_number')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="col-12">
            <label for="description" class="form-label">ផ្សេងៗ</label>
            <textarea name="description" class="form-control shadow-none" id="description" rows="5">{{ old('description', $subject->description) }}</textarea>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="text-center">
            <button type="submit" class="btn btn-success" id="submitBtn">
                <span id="spinner" class="spinner-border spinner-border-sm text-light" role="status" aria-hidden="true" style="display: none;"></span>
                កែសម្រួល
            </button>
            <a href="{{ url('/admin/subject') }}" class="btn btn-danger">ត្រឡប់ក្រោយ</a>

        </div>
    </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {
    let form = document.getElementById('subjectForm');
    if (form) {
        form.addEventListener('submit', function() {
            document.getElementById('spinner').style.display = 'inline-block';
            document.getElementById('submitBtn').disabled = true;
        });
    }
});
</script>
@endsection
