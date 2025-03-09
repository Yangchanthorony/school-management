@extends('components.master')
@section('contents')
<div class="card">
    <div class="card-body p-5">
      <h5 class="mb-4">បញ្ចូលអាណាព្យាបាលសិស្សទៅក្នុងប្រព័ន្ធ</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3">

        <div class="col-md-4 mb-2">
          <label for="inputName5" class="form-label">ឈ្មោះឱពុក</label>
          <input type="text" class="form-control shadow-none" name="khmer_name" placeholder="ផាន សុផាត់">
        </div>

        <div class="col-md-4 mb-2">
          <label for="inputEmail5" class="form-label">ថ្ងៃ ខែ ឆ្នាំ កំណើត</label>
          <input type="text" class="form-control shadow-none" name="english_name">
        </div>

        <div class="col-md-4 mb-2">
            <label for="inputEmail5" class="form-label">មុខរបរ</label>
            <input type="text" class="form-control shadow-none" name="english_name">
        </div>


        <div class="col-md-6 mb-2">
            <label for="inputEmail5" class="form-label">ទីកន្លែងកំណើត</label>
            <input type="text" name="" id="" class=" form-control shadow-none">
        </div>

        <div class="col-md-6 mb-2">
            <label for="inputEmail5" class="form-label">ទីលំនៅបច្ចុបន្បន្ន</label>
            <input type="text" name="" id="" class=" form-control shadow-none">
        </div>
        
        <div class="col-md-4 mb-2">
          <label for="inputName5" class="form-label">ឈ្មោះម្តាយ</label>
          <input type="text" class="form-control shadow-none" name="khmer_name" placeholder="ផាន សុផាត់">
        </div>

        <div class="col-md-4 mb-2">
          <label for="inputEmail" class="form-label">ថ្ងៃ ខែ ឆ្នាំ កំណើត</label>
          <input type="text" class="form-control shadow-none" name="english_name">
        </div>

        <div class="col-md-4 mb-2">
            <label for="inputEmail5" class="form-label">មុខរបរ</label>
            <input type="text" class="form-control shadow-none" name="english_name">
        </div>


        <div class="col-md-6 mb-2">
            <label for="inputEmail5" class="form-label">ទីកន្លែងកំណើត</label>
            <input type="text" name="" id="" class=" form-control shadow-none">
        </div>

        <div class="col-md-6 mb-2">
            <label for="inputEmail5" class="form-label">ទីលំនៅបច្ចុបន្បន្ន</label>
            <input type="text" name="" id="" class=" form-control shadow-none">
        </div>
        <div class="col-md-4 mb-2">
          <label for="inputName5" class="form-label">អាណាព្យាបាលសិស្ស</label>
          <input type="text" class="form-control shadow-none" name="khmer_name" placeholder="">
        </div>

        <div class="col-md-4 mb-2">
          <label for="inputEmail5" class="form-label">ថ្ងៃ ខែ ឆ្នាំ កំណើត</label>
          <input type="text" class="form-control shadow-none" name="english_name" placeholder="">
        </div>

        <div class="col-md-4 mb-2">
            <label for="inputEmail5" class="form-label">មុខរបរ</label>
            <input type="text" class="form-control shadow-none" name="english_name" placeholder="">
        </div>


        <div class="col-md-6 mb-2">
            <label for="inputEmail5" class="form-label">ទីកន្លែងកំណើត</label>
            <input type="text" name="" id="" class=" form-control shadow-none">
        </div>

        <div class="col-md-6 mb-2">
            <label for="inputEmail5" class="form-label">ទីលំនៅបច្ចុបន្បន្ន</label>
            <input type="text" name="" id="" class=" form-control shadow-none" >
        </div>
        <div class="col-md-6 mb-2">
          <label for="inputEmail5" class="form-label">មានកូនក្នុងបន្ទុក</label>
          <input type="text" name="" id="" class=" form-control shadow-none" >
      </div>
      <div class="col-md-6 mb-2">
        <label for="inputEmail5" class="form-label">កូនស្រីសរុប</label>
        <input type="text" name="" id="" class=" form-control shadow-none" >
    </div>

        <div class="col-md-6 mb-2">
            <label for="inputEmail5" class="form-label">លេខទូរស័ព្ទទំនាក់ទំនង</label>
            <input type="text" name="" id="" class=" form-control shadow-none">
        </div>

        <div class="col-md-6 mb-2">
            <label for="inputEmail5" class="form-label">អាសយដ្ឋានអ៊ីម៉ែល</label>
            <input type="text" name="" id="" class=" form-control shadow-none">
        </div>



        <div class="col-md-12 mb-2">
            <label for="inputEmail5" class="form-label">ឈ្មោះសិស្ស</label>
            <input type="text" name="" id="" class=" form-control shadow-none">
        </div>


        

        <div class="col-12">
            <label class="form-label">ផ្សេងៗ</label>
            <textarea name="" class="form-control shadow-none" rows="5"></textarea>
        </div>

       
        <div class="text-center">
          <button type="submit" class="btn btn-success">បង្កើត</button>
          <button type="reset" class="btn btn-danger">ត្រឡប់ក្រោយ</button>
        </div>

        

      </form><!-- End Multi Columns Form -->

    </div>
</div>
@endsection