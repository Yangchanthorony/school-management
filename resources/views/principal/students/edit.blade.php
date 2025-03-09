@extends('components.master')
@section('contents')
<div class="card">
    <div class="card-body p-5">
      <h5 class="mb-4">កែសម្រួលសិស្សទៅក្នុងប្រព័ន្ធ</h5>
      <!-- Multi Columns Form -->
      <form class="row g-3">
        <div class="col-md-6">
          <label for="inputName5" class="form-label">ឈ្មោះជាភាសាខ្មែរ</label>
          <input type="text" class="form-control shadow-none" name="khmer_name" placeholder="ផាន សុផាត់">
        </div>

        <div class="col-md-6">
          <label for="inputEmail5" class="form-label">ឈ្មោះជាភាសាឡាតាំង</label>
          <input type="text" class="form-control shadow-none" name="english_name" placeholder="PHAN SOPHAT">
        </div>

        <div class="col-md-6">
          <label class="form-label"><strong>ភេទ</strong></label>
          <select name="" class=" form-control shadow-none" name="english_name">
            <option value="">ជ្រើសរើសភេទ</option>
            <option value="">ភេទស្រី</option>
            <option value="">ភេទប្រុស</option>
          </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">ថ្ងៃ ខែ ឆ្នាំ កំណើត</label>
            <input type="text" name=""  class=" form-control shadow-none" placeholder="30/5/2007">
        </div>

        <div class="col-md-6">
          <label class="form-label"><strong>ឱពុក</strong></label>
          <select name="" class=" form-control shadow-none" name="english_name">
            <option value="">ហ៊ុន ប៉ុនថា</option>
            <option value="">លី ឆុងហេង</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label"><strong>ម្តាយ</strong></label>
          <select name="" class=" form-control shadow-none" name="english_name">
            <option value="">ហ៊ុន ប៉ុនថា</option>
            <option value="">លី ឆុងហេង</option>
          </select>
        </div>




        <div class="col-md-6">
          <label class="form-label">ជាសិស្សមកពី បឋម រី អនុវិទ្យាល័យ​</label>
          <input type="text" class="form-control shadow-none">
        </div>

        <div class="col-md-6">
          <label class="form-label"><strong>ស្ថានភាពសិក្សា</strong></label>
          <select name="" class=" form-control shadow-none" name="english_name">
            <option value="">ពូកែ</option>
            <option value="">មធ្យម</option>
            <option value="">ខ្សោយ</option>
          </select>
        </div>


        <div class="col-md-12 d-flex my-5 justify-content-center">
          <div class="form-check mx-4">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
            <label class="form-check-label" for="gridRadios1">
              ពិការភាព
            </label>
          </div>
          <div class="form-check mx-4">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" checked>
            <label class="form-check-label" for="gridRadios2">
              ធម្មតា
            </label>
          </div>
          
        </div>


        
        <div class="text-center">
          <button type="submit" class="btn btn-success">កែសម្រួល</button>
          <button type="reset" class="btn btn-danger">ត្រឡប់ក្រោយ</button>
        </div>

      </form><!-- End Multi Columns Form -->

    </div>
</div>
@endsection