@extends('components.master')
@section('contents')
<div class="card">
    <div class="card-body p-5">
      <h5 class="mb-4">កែបន្ទប់រៀននៅក្នុងប្រព័ន្ធ</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3">
        <div class="col-md-12">
          <label for="inputName5" class="form-label">ឈ្មោះបន្ទប់រៀន</label>
          <input type="text" class="form-control shadow-none" id="inputName5">
        </div>
        <div class="col-md-6">
          <label for="inputEmail5" class="form-label">មុខវិជ្ជា</label>
          <select name="" class=" form-control shadow-none" id="">
            <option value="">ជ្រើសរើសមុខវិជ្ជា</option>
            <option value="">គណិត</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputPassword5" class="form-label">គ្រូបង្រៀន</label>
          <select name="" class=" form-control shadow-none" id="">
            <option value="">ជ្រើសរើសគ្រូបង្រៀន</option>
            <option value="">បញ្ញា</option>
          </select>
        </div>
        <div class="col-12">
          <label for="inputAddress5" class="form-label">គ្រូបន្ទុកថ្នាក់</label>
          <select name="" class=" form-control shadow-none" id="">
            <option value="">ជ្រើសរើសគ្រូបន្ទុកថ្នាក់</option>
            <option value="">បញ្ញា</option>
          </select>
        </div>
        <div class="col-12">
          <label class="form-label">ចំនួនកៅអី</label>
          <input type="text" class="form-control shadow-none" >
        </div>
        <div class="col-md-6">
          <label class="form-label">កង្ហារ</label>
          <input type="text" class="form-control shadow-none">
        </div>
        <div class="col-md-4">
          <label class="form-label">ក្តារខៀន</label>
          <select id="inputState" class="form-select shadow-none">
            <option selected>ជ្រើសរើសចំនួនក្តារខៀន</option>
            <option>១</option>
            <option>២</option>
            <option>៣</option>
          </select>
        </div>

        <div class="col-md-2">
          <label for="inputZip" class="form-label">អំពូលភ្លើង</label>
          <input type="text" class="form-control shadow-none" id="inputZip">
        </div>

        <div class="col-12">
            <label class="form-label">ផ្សេងៗ</label>
            <textarea name="" class="form-control shadow-none" rows="5"></textarea>
        </div>

        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
</div>
@endsection