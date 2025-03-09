@extends('teachers.components.master')
@section('contents')
<div class="card">
    <div class="card-body p-5">
      
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-4">ស្រង់វត្តមានសិស្ស</h5>
        <button type="button" class="btn btn-success" id="select-all-present">ជ្រើសទាំងអស់ (មានវត្តមាន)</button>
      </div>

      <form action="/attendance/save" method="POST">
        @csrf <!-- Include this if you're using Laravel to handle form submissions -->
        <table class="table table-hover">
          <thead>
            <tr style="background-color: black; color: white;">
              <th>ល.រ</th>
              <th>ឈ្មោះសិស្ស</th>
              <th>ភេទ</th>
              <th>មានវត្តមាន</th>
              <th>មានច្បាប់</th>
            </tr>
          </thead>
          <tbody>
            <!-- Example rows, dynamic rendering will depend on backend data -->
            <tr>
              <td>1</td>
              <td>Unity Pugh</td>
              <td>ប្រុស</td>
              <td>
                <input type="checkbox" class="checkbox-present" name="attendance[1]" value="present">
              </td>
              <td>
                <input type="checkbox" class="checkbox-absent" name="attendance[1]" value="absent">
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Theodore Duran</td>
              <td>ប្រុស</td>
              <td>
                <input type="checkbox" class="checkbox-present" name="attendance[2]" value="present">
              </td>
              <td>
                <input type="checkbox" class="checkbox-absent" name="attendance[2]" value="absent">
              </td>
            </tr>
            <!-- Add rows dynamically -->
          </tbody>
        </table>
  
        <div class="d-flex justify-content-between mt-4">
          <button class=" btn btn-danger"><a href="" class=" text-light">ត្រឡប់ក្រោយ</a></button>
          <button type="submit" class="btn btn-primary">រក្សាទុក</button>
        </div>
      </form>
    </div>
</div>  

<script>
  // Toggle Select All "Present" Checkboxes
  let isAllSelected = false;

  document.getElementById('select-all-present').addEventListener('click', function () {
    const checkboxes = document.querySelectorAll('.checkbox-present');
    isAllSelected = !isAllSelected; // Toggle the selection state
    // Update checkbox states
    checkboxes.forEach(checkbox => {
      checkbox.checked = isAllSelected;
    });

    // Update button text
    this.textContent = isAllSelected 
      ? 'ដកជ្រើសទាំងអស់ (មានវត្តមាន)' // "Unselect All (Present)"
      : 'ជ្រើសទាំងអស់ (មានវត្តមាន)';  // "Select All (Present)"
  });
</script>
@endsection