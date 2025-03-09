<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentLevel;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
{

    #the function we used for subject list
    public function index(){
        $subjects = Subject::with('level')->get();
        
        return view('principal.subjects.list',compact('subjects'));
    }

    #the function we used for show creating new subject
    public function create(){

        $student_levels = StudentLevel::all();

        $data['levels'] = $student_levels;

        return view('principal.subjects.create',$data);
    }

    #the function we used for saving new subject
    public function store(Request $request){
        
        $validator = Validator::make($request->all(), [
            'subject_name' => 'required|string|max:255',
            'subject_type' => 'required|in:1,2,3',
            'credit'       => 'required|min:0',
            'hours_per_week' => 'required|integer|min:0', // Added validation
            'grade'        => 'required|string|max:255',
            'book_number'  => 'nullable|min:0',
            'note'         => 'nullable|string',
        ], [
            'subject_name.required' => 'ឈ្មោះមុខវិជ្ជា គឺត្រូវតែបញ្ជាក់។',
            'subject_type.required' => 'ប្រភេទមុខវិជ្ជា គឺត្រូវតែបញ្ជាក់។',
            'subject_type.in'       => 'ប្រភេទមុខវិជ្ជា គឺត្រូវតែជាប្រភេទ 1, 2, ឬ 3 ប៉ុណ្ណោះ។',
            'credit.required'       => 'ពិន្ទុសរុបសម្រាប់មុខវិជ្ជា គឺត្រូវតែបញ្ជាក់។',
            'hours_per_week.required' => 'ចំនួនម៉ោងក្នុងមួយសប្តាហ៍ គឺត្រូវតែបញ្ជាក់។', // Added message
            'grade.required'        => 'កំរិតថ្នាក់ គឺត្រូវតែបញ្ជាក់។',
        ]);
        

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create a new subject
        Subject::create($request->all());


         

        return redirect()->route('admin.subject.list')
            ->with('success', 'បង្កើតមុខវិជ្ជាបានជោគជ័យ');
    }

    #the function we used for show editting subject
    public function edit($id){

        $subject = Subject::find($id);

        $student_levels = StudentLevel::all();

        //check if subject not found with id
        if(!$subject){
            return redirect()->back()->with('error','មុខវិជ្ជារកមិនឃើញជាមួយនឹងសម្រាប់ ID '.$id);
        }


        return view('principal.subjects.edit',[
             "subject" => $subject,
             "levels"  => $student_levels
        ]);

        
        
    }

    #the function we used for updating subject
    public function update(Request $request, $id){
        $subject = Subject::find($id);

        //check if subject not found with id
        if(!$subject){
            return redirect()->back()->with('error','មុខវិជ្ជារកមិនឃើញជាមួយនឹងសម្រាប់ ID '.$id);
        }

        //validator
        $validator = Validator::make($request->all(), [
            'subject_name' => 'required|string|max:255',
            'subject_type' => 'required|in:1,2,3',
            'credit'       => 'required|min:0',
            'hours_per_week' => 'required|integer|min:0', // Added validation
            'grade'        => 'required|string|max:255',
            'book_number'  => 'nullable|min:0',
            'note'         => 'nullable|string',
        ], [
            'subject_name.required' => 'ឈ្មោះមុខវិជ្ជា គឺត្រូវតែបញ្ជាក់។',
            'subject_type.required' => 'ប្រភេទមុខវិជ្ជា គឺត្រូវតែបញ្ជាក់។',
            'subject_type.in'       => 'ប្រភេទមុខវិជ្ជា គឺត្រូវតែជាប្រភេទ 1, 2, ឬ 3 ប៉ុណ្ណោះ។',
            'credit.required'       => 'ពិន្ទុសរុបសម្រាប់មុខវិជ្ជា គឺត្រូវតែបញ្ជាក់។',
            'hours_per_week.required' => 'ចំនួនម៉ោងក្នុងមួយសប្តាហ៍ គឺត្រូវតែបញ្ជាក់។', // Added message
            'grade.required'        => 'កំរិតថ្នាក់ គឺត្រូវតែបញ្ជាក់។',
        ]);
        

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Update the subject
        $subject->update($request->all());

        return redirect()->route('admin.subject.list')->with('success','មុខវិជ្ជាត្រូវបានកែសម្រួលដោយជោគជ័យ');
        
    }

    #the function we used for deleting subject
    public function destroy($id){

        $subject = Subject::find($id);

        if(!$subject){
            return redirect()->back()->with('error','មុខវិជ្ជារកមិនឃើញជាមួយនឹង ID :'.$id);
        }

        $subject->delete();

        return redirect()->back()->with('success','មុខវិជ្ជាត្រូវបានលុបដោយជោគជ័យ');

    }

    
}