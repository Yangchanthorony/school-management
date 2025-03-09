<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style=" max-width: 40%;">
    <div class="modal-content">
      <div class="display-modal">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">បន្ថែមការវិភាគសម្រាប់ថ្នាក់ 10A</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="row p-0">
                    <div class="col-12 mb-3">
                        <label for="">គ្រូបង្រៀន</label>
                        <select name="" class=" form-control">

                        </select>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="">ថ្ងៃបង្រៀន</label>
                        <select name="" class=" form-control shadow-none">
                            <option value="ច័ន្ទ">ច័ន្ទ</option>
                            <option value="អង្គារ">ច័អង្គារ</option>
                            <option value="ពុធ">ពុធ</option>
                            <option value="ព្រ.ហ">ព្រ.ហ</option>
                            <option value="សុក្រ">សុក្រ</option>
                            <option value="សៅរ៍ិ">សៅរ៍ិ</option>
                        </select>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="">ពេលវេលា</label>
                        <select name="" class=" form-control shadow-none">
                            @foreach ($studyTimes as $time )
                                <option value="{{ $time->id }}">{{ $time->start_time }}  - {{ $time->end_time }}</option>
                            @endforeach
                            
                        </select>
                    </div>


                </div>

            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button id="scheduleSubmitBtn" onclick="scheduleSave()" type="button" class="btn btn-primary">បន្ថែម</button>
      </div>
    </div>
  </div>
</div>