<?php

namespace App\Http\Controllers;

use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
// use Notification;
// use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }

    public function upload(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'speciality' => 'required|string|max:255',
            'room' => 'required|string|max:10',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);
        // Validate the request data

        $doctor = new Doctor;
        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('doctorimage', $imagename);
        $doctor->image = $imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');
    }


    public function show_appointment(){
        $data = appointment::all();
        return view('admin.showAppointment', compact('data'));
    }

    public function approved($id){
        $data = appointment::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }

    public function cancelled($id){
        $data = appointment::find($id);
        $data->status = 'Cancelled';
        $data->save();
        return redirect()->back();
    }


    public function show_doctor(){
        $data = doctor::all();
        return view('admin.showDoctor', compact('data'));
    }

    public function delete_doctor($id){
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back()->with('message','Doctor Data Deleted Successfully.');
    }

    public function update_doctor($id){

        $datas = doctor::find($id);
        return view('admin.updateDoctor', compact('datas'));
    }

    public function editdoctor(Request $request , $id){
        $doctor = doctor::find($id);

        $doctor->name = request('name');
        $doctor->phone = request('phone');
        $doctor->speciality = request('speciality');
        $doctor->room = request('room');

        $image = $request->file;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('doctorimage', $imagename);
            $doctor->image = $imagename;
        }

        $doctor->save();
        return redirect()->back()->with('message','Doctor Detail Updated Successfully.');
    }

    public function emailview($id){
        $data = appointment::find($id);
        return view('admin.email_view', compact('data'));
    }


    public function sendemail(Request $request, $id){
        $data = appointment::find($id);
        
        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart,
        ];

        Notification::send($data, new SendEmailNotification($details));

        return redirect()->back()->with('message','Email Sent Successfully.');
    }
}
