@extends('components.master')
@section('contents')
<div class="card">
    <div class="card-body p-5">
      <h5 class="mb-4">បញ្ចូលគ្រូបង្រៀនទៅក្នុងប្រព័ន្ធ</h5>

      <!-- Multi Columns Form -->
      <form id="teacherForm" class="row g-3" method="POST" action="{{ route('admin.teachers.store') }}">
        @csrf
        <div class="col-md-6">
          <label class="form-label">ឈ្មោះជាភាសាខ្មែរ</label>
          <input type="hidden" name="created_by" value="{{ Auth::guard('admin')->user()->id }}">
          <input type="text" 
                 class="form-control shadow-none @error('full_name') is-invalid @enderror" 
                 name="full_name" 
                 value="{{ old('full_name') }}" 
                 placeholder="ផាន សុផាត់">
          @error('full_name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        
        <div class="col-md-6">
          <label class="form-label">ឈ្មោះជាភាសាឡាតាំង</label>
          <input type="text" 
                 class="form-control shadow-none @error('latin_name') is-invalid @enderror" 
                 name="latin_name" 
                 value="{{ old('latin_name') }}" 
                 placeholder="PHAN SOPHAT">
          @error('latin_name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label"><strong>ភេទ</strong></label>
          <select name="gender" 
                  class="form-control shadow-none @error('gender') is-invalid @enderror">
            <option value="">ជ្រើសរើសភេទ</option>
            <option value="1" {{ old('gender') == '1' ? 'selected' : '' }}>ភេទប្រុស</option>
            <option value="2" {{ old('gender') == '2' ? 'selected' : '' }}>ភេទស្រី</option>
          </select>
          @error('gender')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">លេខអត្តសញ្ញាណប័ណ្ណ</label>
          <input type="text" 
                 class="form-control shadow-none @error('national_id') is-invalid @enderror" 
                 name="national_id" 
                 value="{{ old('national_id') }}">
          @error('national_id')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">ថ្ងៃ ខែ ឆ្នាំ កំណើត</label>
            <input type="text" 
                   name="dob" 
                   class="form-control shadow-none @error('dob') is-invalid @enderror" 
                   value="{{ old('dob') }}">
            @error('dob')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">ស្ថានភាពជិវិត</label>
            <select name="marital_status" 
                    class="form-control shadow-none @error('marital_status') is-invalid @enderror">
              <option value="1" {{ old('marital_status') == '1' ? 'selected' : '' }}>មានគ្រួសារ</option>
              <option value="2" {{ old('marital_status') == '2' ? 'selected' : '' }}>នៅលីវ</option>
            </select>
            @error('marital_status')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        

      <div class="col-6">
        <label>មុខវិជ្ជាបង្រៀន</label>
        <select name="subject_id[]" id="subjects" class="form-select shadow-none" multiple="multiple"
            style="width: 100%;">
            @foreach ($subjects as $subject )
              <option value="{{ $subject->id }}">{{ $subject->subject_name }} (ទី{{ $subject->level->name }})</option>
            @endforeach 
        </select>

      </div>
      

        <div class="col-6">
            <label class="form-label">មុខវិជ្ជាជំនាញ</label>
            <input type="text" 
                   class="form-control shadow-none @error('specialization') is-invalid @enderror" 
                   name="specialization" 
                   value="{{ old('specialization') }}" 
                   placeholder="ឯកទេស">
            @error('specialization')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-6">
            <label class="form-label">កំរិតសញ្ញាប័ត្រ</label>
            <input type="text" 
                   class="form-control shadow-none @error('degree') is-invalid @enderror" 
                   name="degree" 
                   value="{{ old('degree') }}" 
                   placeholder="បរិញ្ញាប័ត្រ">
            @error('degree')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-6">
            <label class="form-label">បញ្ចប់ការសិក្សារមកពីសាលា</label>
            <input type="text" 
                   class="form-control shadow-none @error('university') is-invalid @enderror" 
                   name="university" 
                   value="{{ old('university') }}">
            @error('university')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-6">
          <label class="form-label">លេខទូរស័ព្ទទំនាក់ទំនង</label>
          <input type="text" 
                 class="form-control shadow-none @error('phone') is-invalid @enderror" 
                 name="phone" 
                 value="{{ old('phone') }}" 
                 placeholder="លេខទូរស័ព្ទ">
          @error('phone')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-6">
            <label class="form-label">អាសយដ្ឋាន Email</label>
            <input type="email" 
                   class="form-control shadow-none @error('email') is-invalid @enderror" 
                   name="email" 
                   value="{{ old('email') }}" 
                   placeholder="example@email.com">
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-3">
          <label class="form-label">ភូមិ​​​</label>
          <input type="text" name="village" class="form-control shadow-none  @error('village') is-invalid @enderror">
          @error('village')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-3">
           <label class="form-label">ឃុំ​/សង្កាត់</label>
           <input type="text" name="commune" class="form-control shadow-none @error('commune') is-invalid @enderror" value="{{ old('commune') }}">

           @error('commune')
              <div class="invalid-feedback">{{ $message }}</div>
           @enderror

        </div>

        <div class="col-md-3">
          <label class="form-label">ស្រុក​/ក្រុង​/ខណ្ឌ</label>
          <input type="text" name="district" class="form-control shadow-none @error('district') is-invalid @enderror" value="{{ old('district') }}">
          @error('district')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-3">
            <label class="form-label">រាជធានី​/ខេត្ត</label>
            <input type="text" name="province" class="form-control shadow-none @error('province') is-invalid @enderror" value="{{ old('province') }}">
            @error('province')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-12">
          <label class="form-label">ថ្ងៃចាប់ផ្តើមការងារ</label>
          <input type="text" 
                 class="form-control shadow-none @error('hire_date') is-invalid @enderror" 
                 name="hire_date" 
                 value="{{ old('hire_date') }}" 
                 placeholder="ថ្ងៃទី 12 ខែ មិនា ឆ្នាំ 2024">
          @error('hire_date')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
            <label class="form-label">ផ្សេងៗ</label>
            <textarea name="note" 
                      class="form-control shadow-none @error('note') is-invalid @enderror" 
                      rows="5">{{ old('note') }}</textarea>
            @error('note')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-success" id="submitBtn">
              <span id="spinner" class="spinner-border spinner-border-sm text-light" role="status" aria-hidden="true" style="display: none;"></span>
              បង្កើត
          </button>
          <button type="reset" class="btn btn-danger">ត្រឡប់ក្រោយ</button>
      </div>
      </form>
    </div>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script> --}}
</div>

@endsection
@section('scripts')
<script>
    $(document).ready(function () {
        $('#subjects').select2({
            placeholder: 'ជ្រើសរើសមុខវិជ្ជា',
            allowClear: true,
            tags: false,
            width: '100%'
        });
    });


  document.getElementById('teacherForm').addEventListener('submit', function(event) {
      document.getElementById('spinner').style.display = 'inline-block';
      document.getElementById('submitBtn').disabled = true;
  });
</script>
@endsection