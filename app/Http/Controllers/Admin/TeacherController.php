<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentLevel;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TeacherSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{


    #the function we used for show teachers list
    public function index(){
        
        // Get all teachers with their subjects
        $teachers = Teacher::with('subjects')->get();

        // Collect all grade IDs from subjects
        $levelIds = $teachers->pluck('subjects.*.grade')->flatten()->unique();

        
        // Retrieve the corresponding student levels
        $levels = StudentLevel::whereIn('id', $levelIds)->get();

        
        return view('principal.teachers.list', compact('teachers', 'levels'));
   }

    #the function we used for show creating new teacher
    public function create(){

        $subjects = Subject::with('level')->get();

        


        // return $subjects;

        return view('principal.teachers.create',compact('subjects'));
    }

    #the function we used for store teacher to db
    public function store(Request $request){
        $request->validate([
            'full_name' => 'required|string|max:255|regex:/^[\p{Khmer}\s]+$/u',
            'latin_name' => 'required|string|max:255|regex:/^[A-Z\s]+$/',
            'gender' => 'required|in:1,2',
            'marital_status' => 'required|in:1,2',
            'dob' => 'required|date',
            'national_id' => 'nullable|string|unique:teachers,national_id',
            'subject_id' => 'required|array',
            'subject_id.*' => 'exists:subjects,id',
            'specialization' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'phone' => 'required|string|max:20',
            'password' => 'nullable|string|min:6',
            'hire_date' => 'required|date',
            'created_by' => 'nullable|integer',
            'note' => 'nullable|string',
            'village' => 'required|string|max:255',
            'commune' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'current_address' => 'nullable|string|max:255',
        ], [
            'full_name.required' => 'សូមបញ្ចូលឈ្មោះជាភាសាខ្មែរ',
            'full_name.regex' => 'ឈ្មោះត្រូវតែជាអក្សរខ្មែរ',
            'latin_name.required' => 'សូមបញ្ចូលឈ្មោះជាភាសាអង់គ្លេស',
            'latin_name.regex' => 'ឈ្មោះជាភាសាអង់គ្លេសត្រូវតែជាអក្សរធំ',
            'gender.required' => 'សូមជ្រើសរើសភេទ',
            'gender.in' => 'ភេទត្រូវតែ 1 (ប្រុស) ឬ 2 (ស្រី)',
            'marital_status.required' => 'សូមជ្រើសរើសស្ថានភាពគ្រួសារ',
            'marital_status.in' => 'ស្ថានភាពគ្រួសារត្រូវតែ 1 (រៀបការហើយ) ឬ 2 (នៅលីវ)',
            'dob.required' => 'សូមបញ្ចូលថ្ងៃ ខែ ឆ្នាំ កំណើត',
            'national_id.unique' => 'លេខអត្តសញ្ញាណប័ណ្ណនេះមានរួចហើយ',
            'subject_id.required' => 'សូមជ្រើសរើសមុខវិជ្ជាដែលបង្រៀន',
            'subject_id.exists' => 'មុខវិជ្ជាដែលបានជ្រើសរើសមិនមាន',
            'specialization.required' => 'សូមបញ្ចូលឯកទេស',
            'degree.required' => 'សូមបញ្ចូលកំរិតវប្បធម៌',
            'university.required'  => 'សូមបញ្ចូលសាលាដែរបានបញ្ចប់ការសិក្សា',
            'university.max' => 'សាកលវិទ្យាល័យមិនអាចលើសពី 255 តួអក្សរ',
            'email.required' => 'សូមបញ្ចូលអាសយដ្ឋានអ៊ីមែល',
            'email.unique' => 'អាសយដ្ឋានអ៊ីមែលនេះមានរួចហើយ',
            'phone.required' => 'សូមបញ្ចូលលេខទូរស័ព្ទ',
            'password.min' => 'ពាក្យសម្ងាត់ត្រូវមានយ៉ាងតិច 6 តួអក្សរ',
            'hire_date.required' => 'សូមបញ្ចូលថ្ងៃចូលធ្វើការ',
            'note.string' => 'កំណត់ចំណាំត្រូវតែជាអក្សរ',
            'village.required' => 'សូមបញ្ចូលភូមិកំណើត',
            'village.string' => 'ភូមិត្រូវតែជាអក្សរ',
            'commune.required' => 'សូមបញ្ចូលឃុំ',
            'commune.string' => 'ឃុំត្រូវតែជាអក្សរ',
            'district.required' => 'សូមបញ្ចូលស្រុក',
            'district.string' => 'ស្រុកត្រូវតែជាអក្សរ',
            'province.required' => 'សូមបញ្ចូលខេត្ត',
            'province.string' => 'ខេត្តត្រូវតែជាអក្សរ',
            'current_address.string' => 'អាសយដ្ឋានបច្ចុប្បន្នត្រូវតែជាអក្សរ',
        ]);
    
        DB::transaction(function () use ($request) {
            $teacher = Teacher::create([
                "full_name" => $request->full_name,
                "latin_name" => $request->latin_name,
                "gender" => $request->gender,
                "marital_status" => $request->marital_status,
                "dob" => $request->dob,
                "national_id" => $request->national_id,
                "specialization" => $request->specialization,
                "degree" => $request->degree,
                "university" => $request->university,
                "email" => $request->email,
                "phone" => $request->phone,
                "password" => $request->filled('password') ? Hash::make($request->password) : null,
                "hire_date" => $request->hire_date,
                "created_by" => $request->created_by,
                "note" => $request->note,
            ]);
    
            $teacher->addresses()->create([
                'village' => $request->village,
                'commune' => $request->commune,
                'district' => $request->district,
                'province' => $request->province,
                'current_address' => $request->current_address,
            ]);
    
            $teacherSubjects = [];
    
            foreach ($request->subject_id as $subjectId) {
                $subject = Subject::find($subjectId);
                $studentLevels = $subject->level->pluck('id');
    
                foreach ($studentLevels as $studentLevelId) {
                    $teacherSubjects[] = [
                        'teacher_id' => $teacher->id,
                        'subject_id' => $subjectId,
                        'student_level_id' => $studentLevelId,
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                }
            }
    
            TeacherSubject::insert($teacherSubjects);
        });
    
    
        return redirect()->route('admin.teachers.index')->with('success','គ្រូបង្រៀនត្រូវបានបង្កើតដោយជោគជ័យ');
    }

    #the function we used for show updating teacher
    public function edit($id){

       

        $teacher = Teacher::findOrFail($id); 


        

        $subjects = Subject::with('level')->get();


        $address = $teacher->addresses()->first();

       
        
        $subjectIds = $teacher->subjects->pluck('id')->toArray(); 

        

        return view("principal.teachers.edit", compact('teacher', 'subjects', 'address', 'subjectIds'));

    }

    #the function wd used  for updating teacher
    public function update(Request $request, $id){

        $teacher = Teacher::find($id);

        $request->validate([
            'full_name' => 'required|string|max:255|regex:/^[\p{Khmer}\s]+$/u',
            'latin_name' => 'required|string|max:255|regex:/^[A-Z\s]+$/',
            'gender' => 'required|in:1,2',
            'marital_status' => 'required|in:1,2',
            'dob' => 'required',
            'national_id' => 'nullable|string|unique:teachers,national_id,' . $teacher->id,
            'subject_id' => 'required|array',
            'subject_id.*' => 'exists:subjects,id',
            'specialization' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email,' . $teacher->id,
            'phone' => 'required|string|max:20',
            'password' => 'nullable|string|min:6',
            'hire_date' => 'required',
            'created_by' => 'nullable|integer',
            'note' => 'nullable|string',
            'village' => 'required|string|max:255',
            'commune' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'current_address' => 'nullable|string|max:255',
        ], [
            'full_name.required' => 'សូមបញ្ចូលឈ្មោះជាភាសាខ្មែរ',
            'full_name.regex' => 'ឈ្មោះត្រូវតែជាអក្សរខ្មែរ',
            'latin_name.required' => 'សូមបញ្ចូលឈ្មោះជាភាសាអង់គ្លេស',
            'latin_name.regex' => 'ឈ្មោះជាភាសាអង់គ្លេសត្រូវតែជាអក្សរធំ',
            'gender.required' => 'សូមជ្រើសរើសភេទ',
            'gender.in' => 'ភេទត្រូវតែ 1 (ប្រុស) ឬ 2 (ស្រី)',
            'marital_status.required' => 'សូមជ្រើសរើសស្ថានភាពគ្រួសារ',
            'marital_status.in' => 'ស្ថានភាពគ្រួសារត្រូវតែ 1 (រៀបការហើយ) ឬ 2 (នៅលីវ)',
            'dob.required' => 'សូមបញ្ចូលថ្ងៃ ខែ ឆ្នាំ កំណើត',
            'national_id.unique' => 'លេខអត្តសញ្ញាណប័ណ្ណនេះមានរួចហើយ',
            'subject_id.required' => 'សូមជ្រើសរើសមុខវិជ្ជាដែលបង្រៀន',
            'subject_id.exists' => 'មុខវិជ្ជាដែលបានជ្រើសរើសមិនមាន',
            'specialization.required' => 'សូមបញ្ចូលឯកទេស',
            'degree.required' => 'សូមបញ្ចូលកំរិតវប្បធម៌',
            'university.required'  => 'សូមបញ្ចូលសាលាដែរបានបញ្ចប់ការសិក្សា',
            'university.max' => 'សាកលវិទ្យាល័យមិនអាចលើសពី 255 តួអក្សរ',
            'email.required' => 'សូមបញ្ចូលអាសយដ្ឋានអ៊ីមែល',
            'email.unique' => 'អាសយដ្ឋានអ៊ីមែលនេះមានរួចហើយ',
            'phone.required' => 'សូមបញ្ចូលលេខទូរស័ព្ទ',
            'password.min' => 'ពាក្យសម្ងាត់ត្រូវមានយ៉ាងតិច 6 តួអក្សរ',
            'hire_date.required' => 'សូមបញ្ចូលថ្ងៃចូលធ្វើការ',
            'note.string' => 'កំណត់ចំណាំត្រូវតែជាអក្សរ',
            'village.required' => 'សូមបញ្ចូលភូមិកំណើត',
            'village.string' => 'ភូមិត្រូវតែជាអក្សរ',
            'commune.required' => 'សូមបញ្ចូលឃុំ',
            'commune.string' => 'ឃុំត្រូវតែជាអក្សរ',
            'district.required' => 'សូមបញ្ចូលស្រុក',
            'district.string' => 'ស្រុកត្រូវតែជាអក្សរ',
            'province.required' => 'សូមបញ្ចូលខេត្ត',
            'province.string' => 'ខេត្តត្រូវតែជាអក្សរ',
            'current_address.string' => 'អាសយដ្ឋានបច្ចុប្បន្នត្រូវតែជាអក្សរ',
        ]);

        DB::transaction(function () use ($request, $teacher) {
            // Update teacher information
            $teacher->update($request->only([
                "full_name",
                "latin_name",
                "gender",
                "marital_status",
                "dob",
                "national_id",
                "specialization",
                "degree",
                "university",
                "email",
                "phone",
                "hire_date",
                "created_by",
                "note"
            ]));

            // Update address
            $teacher->addresses()->updateOrCreate(
                ['addressable_id' => $teacher->id, 'addressable_type' => Teacher::class],
                $request->only([
                    'village',
                    'commune',
                    'district',
                    'province',
                    'current_address'
                ])
            );


            TeacherSubject::where('teacher_id', $teacher->id)->delete();

            // Prepare new TeacherSubject records
            
            // Update subjects
            foreach ($request->subject_id as $subjectId) {
                $subject = Subject::find($subjectId);
                $studentLevels = $subject->level()->pluck('id');
            
                foreach ($studentLevels as $studentLevelId) {
                    TeacherSubject::updateOrCreate(
                        [
                            'teacher_id' => $teacher->id,
                        ],
                        [
                            
                            'subject_id' => $subjectId,
                            'student_level_id' => $studentLevelId
                        ]
                    );
                }
            }


        });

        
        
        return redirect()->route('admin.teacher.index')->with('success', 'ព័ត៌មានគ្រូបង្រៀនត្រូវបានកែប្រែដោយជោគជ័យ');
    }



    #the function we used for teacher deleting
    public function destroy($id){

        $teacher = Teacher::find($id);

        //delete from addressable 
        $teacher->addresses()->delete();

        $teacher->delete();

        return redirect()->back()->with('success','គ្រូបង្រៀនត្រូវបានដកចេញពីប្រព័ន្ធដោយជោគជ័យ');

        
    }

    
}