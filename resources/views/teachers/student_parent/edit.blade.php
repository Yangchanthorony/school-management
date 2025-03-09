@extends('components.master')
@section('contents')
<div class="card">
    <div class="card-body p-5">
      <h5 class="mb-4">កែសម្រួលគ្រួសារសិស្សទៅក្នុងប្រព័ន្ធ</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3">

        <div class="col-md-6 mb-2">
          <label for="inputName5" class="form-label">ឈ្មោះ</label>
          <input type="text" class="form-control shadow-none" name="khmer_name" placeholder="ផាន សុផាត់">
        </div>

        <div class="col-md-6 mb-2">
            <label for="inputName5" class="form-label">ត្រូវជា</label>
             <select name="" id="" class=" form-control">
                <option value="">ឱពុក</option>
                <option value="">ម្តាយ</option>
                <option value="">អាណាព្យាបាល</option>
             </select>
        </div>


        <div class="col-md-3">
            <label class="form-label">ភូមិ​​​</label>
            <input type="text" class="form-control shadow-none">
          </div>
          <div class="col-md-3">
              <label class="form-label">ឃុំ​/សង្កាត់</label>
             <input type="text" class="form-control shadow-none">
          </div>
  
          <div class="col-md-3">
            <label for="inputZip" class="form-label">ស្រុក​/ក្រុង​/ខណ្ឌ</label>
            <input type="text" class="form-control shadow-none" id="inputZip">
          </div>
  
          <div class="col-md-3">
              <label for="inputZip" class="form-label">រាជធានី​/ខេត្ត</label>
              <input type="text" class="form-control shadow-none" id="inputZip">
          </div>

        <div class="col-md-12">
            <label for="inputZip" class="form-label">ទីលំនៅបច្ចុប្បន្ន</label>
            <input type="text" class="form-control shadow-none" id="inputZip">
            <input type="checkbox">
            <span style="font-size: 15px;">ទីតាំងដដែល</span>
        </div>


        <div class="col-md-6">
            <label for="inputZip" class="form-label">លេខទូរស័ព្ទ</label>
            <input type="text" class="form-control shadow-none" id="inputZip">
        </div>

        <div class="col-md-6">
            <label for="inputZip" class="form-label">អាសយដ្ឋានអ៊ីម៉ែល</label>
            <input type="text" class="form-control shadow-none" id="inputZip">
        </div>
        
        <div class="col-md-12 mb-2">
            <label for="inputName5" class="form-label">ត្រូវជាឱពុកម្តាយរបស់សិស្ស</label>
             <select name="" id="" class=" form-control shadow-none">
                <option value="">ផាន់ លីកា</option>
             </select>
        </div>

        
        <div class="text-center">
          <button type="submit" class="btn btn-success">បង្កើត</button>
          <button type="reset" class="btn btn-danger">ត្រឡប់ក្រោយ</button>
        </div>

        

      </form><!-- End Multi Columns Form -->

    </div>
</div>
@endsection