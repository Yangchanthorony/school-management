@extends('components.master')
@section('contents')
<div class="card">
    <div class="card-body p-5">
      <h5 class="mb-3">កែប្រែព័ត៌មានបន្ទប់រៀន</h5>
      
      <form class="row g-3" method="POST" id="editStudyClassForm" action="{{ route('admin.class.update', $classes->id) }}">
        @csrf
        @method('PUT')
        
        <div class="col-md-12">
          <label class="form-label">ឈ្មោះបន្ទប់រៀន</label>
          <input type="text" name="name" class="form-control shadow-none" value="{{ old('name', $classes->name) }}">
          @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-6">
          <label class="form-label">កំរិតថ្នាក់</label>
          <select name="level_id" class="form-control shadow-none">
            <option value="">ជ្រើសរើសកំរិតថ្នាក់</option>
            @foreach($levels as $level)
                <option value="{{ $level->id }}" {{ old('level_id', $classes->level_id) == $level->id ? 'selected' : '' }}>
                    {{ $level->name }}
                </option>
            @endforeach
          </select>
          @error('level_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        
        <div class="col-6">
          <label class="form-label">គ្រូបន្ទុកថ្នាក់</label>
          <select name="homeroom_teacher" class="form-control shadow-none">
            <option value="">ជ្រើសរើសគ្រូបន្ទុកថ្នាក់</option>
            @foreach($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{ old('homeroom_teacher', $classes->homeroom_teacher) == $teacher->id ? 'selected' : '' }}>
                    {{ $teacher->full_name }}
                </option>
            @endforeach
          </select>
          @error('homeroom_teacher') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-12">
          <label class="form-label">ចំនួនកៅអី</label>
          <input type="number" name="desk" class="form-control shadow-none" value="{{ old('desk', $classes->desk) }}">
          @error('desk') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">កង្ហារ</label>
          <input type="text" name="fan" class="form-control shadow-none" value="{{ old('fan', $classes->fan) }}">
          @error('fan') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-md-4">
          <label class="form-label">ក្តារខៀន</label>
          <select name="whiteboard" class="form-select shadow-none">
            <option value="">ជ្រើសរើសចំនួនក្តារខៀន</option>
            <option value="1" {{ old('whiteboard', $classes->whiteboard) == 1 ? 'selected' : '' }}>១</option>
            <option value="2" {{ old('whiteboard', $classes->whiteboard) == 2 ? 'selected' : '' }}>២</option>
            <option value="3" {{ old('whiteboard', $classes->whiteboard) == 3 ? 'selected' : '' }}>៣</option>
          </select>
          @error('whiteboard') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-md-2">
          <label class="form-label">អំពូលភ្លើង</label>
          <input type="text" name="light" class="form-control shadow-none" value="{{ old('light', $classes->light) }}">
          @error('light') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-12">
            <label class="form-label">ផ្សេងៗ</label>
            <textarea name="note" class="form-control shadow-none" rows="5">{{ old('note', $classes->note) }}</textarea>
            @error('note') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-success" id="submitBtn">
            <span id="spinner" class="spinner-border spinner-border-sm text-light" role="status" aria-hidden="true" style="display: none;"></span>
            ធ្វើបច្ចុប្បន្នភាព
          </button>
          <a href="{{ route('admin.class.index') }}" class="btn btn-danger">ត្រឡប់ក្រោយ</a>
        </div>
      </form>
    </div>
</div>
@endsection