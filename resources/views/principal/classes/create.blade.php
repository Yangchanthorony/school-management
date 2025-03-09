@extends('components.master')
@section('contents')
<div class="card">
    <div class="card-body p-5">
      <h5 class=" mb-3">បញ្ចូលបន្ទប់រៀនទៅក្នុងប្រព័ន្ធ</h5>
      
    
      <!-- Multi Columns Form -->
      <form class="row g-3" method="POST" id="studyClassForm" action="{{ route('admin.class.store') }}">
        @csrf
        <div class="col-md-12">
          <label class="form-label">ឈ្មោះបន្ទប់រៀន</label>
          <input type="text" name="name" class="form-control shadow-none" value="{{ old('name') }}">
          @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-6">
          <label class="form-label">កំរិតថ្នាក់</label>
          <select name="level_id" class="form-control shadow-none">
            <option value="">ជ្រើសរើសកំរិតថ្នាក់</option>
            @foreach($levels as $level)
                <option value="{{ $level->id }}" {{ old('level_id') == $level->id ? 'selected' : '' }}>
                    {{ $level->name }}
                </option>
            @endforeach
          </select>
          @error('homeroom_teacher') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        
        <div class="col-6">
          <label class="form-label">គ្រូបន្ទុកថ្នាក់</label>
          <select name="homeroom_teacher" class="form-control shadow-none">
            <option value="">ជ្រើសរើសគ្រូបន្ទុកថ្នាក់</option>
            @foreach($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{ old('homeroom_teacher') == $teacher->id ? 'selected' : '' }}>
                    {{ $teacher->full_name }}
                </option>
            @endforeach
          </select>
          @error('homeroom_teacher') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-12">
          <label class="form-label">ចំនួនកៅអី</label>
          <input type="number" name="desk" class="form-control shadow-none" value="{{ old('desk', 10) }}">
          @error('desk') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">កង្ហារ</label>
          <input type="text" name="fan" class="form-control shadow-none" value="{{ old('fan') }}">
          @error('fan') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-md-4">
          <label class="form-label">ក្តារខៀន</label>
          <select name="whiteboard" class="form-select shadow-none">
            <option value="">ជ្រើសរើសចំនួនក្តារខៀន</option>
            <option value="1" {{ old('whiteboard') == 1 ? 'selected' : '' }}>១</option>
            <option value="2" {{ old('whiteboard') == 2 ? 'selected' : '' }}>២</option>
            <option value="3" {{ old('whiteboard') == 3 ? 'selected' : '' }}>៣</option>
          </select>
          @error('whiteboard') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-md-2">
          <label class="form-label">អំពូលភ្លើង</label>
          <input type="text" name="light" class="form-control shadow-none" value="{{ old('light') }}">
          @error('light') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-12">
            <label class="form-label">ផ្សេងៗ</label>
            <textarea name="note" class="form-control shadow-none" rows="5">{{ old('note') }}</textarea>
            @error('note') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-success" id="submitBtn">
            <span id="spinner" class="spinner-border spinner-border-sm text-light" role="status" aria-hidden="true" style="display: none;"></span>
            បង្កើត
          </button>
          <button type="reset" class="btn btn-danger">ត្រឡប់ក្រោយ</button>
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
</div>
@endsection
@section('scripts')
 <script>
    //Loading submit
    document.getElementById('studyClassForm').addEventListener('submit', function(event) {
        // Show the spinner and disable the submit button
        document.getElementById('spinner').style.display = 'inline-block';
        document.getElementById('submitBtn').disabled = true;
    });
 </script>
@endsection