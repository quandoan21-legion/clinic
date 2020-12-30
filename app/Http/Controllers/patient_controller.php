<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient_model;
use App\major;
use App\Http\Requests\PatientRequest;
use App\Http\Requests\AppointmentRequest;



class patient_controller extends Controller
{
	 // login
	 public function login_patient(){
	    return view('patient.login');

	}


    public function process_login_patient(Request $rq){
			$email    = $rq->get('email');
			$password = $rq->get('password');

			$patient           = new patient_model();
			$patient->email    = $email;	 
			$patient->password = $password;
			$array           = $patient->process_login_patient();
			if (count($array)==1) {
				$rq->session()->put('patient_id',$array[0]->patient_id);
				$rq->session()->put('name',$array[0]->name);
				$rq->session()->put('profile_image',$array[0]->profile_image);
				// dd(session()->all());
				return redirect()->route('patient');

			}
			else{
				return redirect()->route('login_patient')->with('error','Incorrect email or password');
			}

	 }

	public function process_register(Request $rq) {
    	$patient              = new patient_model();
    	$patient->name        = $rq->get('name');
    	$patient->email       = $rq->get('email');
    	$patient->password    = $rq->get('password');
    	 $this->validate($rq, [
    			'name' => 'required',
    			'email' => 'required|email|unique:patients,email',
    			'password' => 'required',
				]);   
    	$patient->register();

    	return redirect()->route('login_patient')->with('success','Successful :3');
    }

	 public function patient(){
	 	return view('patient.welcome');
	 }


	  public function all_doctor(){
	  	$result = patient_model::doctors_mgt();
	  	// dd($result);
	 	return view('patient.appointment_mgt.all_doctor', compact('result'));
	 }


	 public function set_appointment(){

        $result = patient_model::majors();
	 	return view('patient.appointment_mgt.set_appointment', compact('result'));
	 }

	public function get_doctor_by_major_for_user(Request $rq){
		$doctor_id   = $rq->doctor_id;
		$doctor_name = patient_model::get_doctor_by_major_for_user($doctor_id);
		$doctor_option = "<option value='0'>-Select doctor-</option>";
		foreach ($doctor_name as $each) {
			$doctor_option .= "<option value='$each->doctor_id'>$each->name</option>";
		}
		echo $doctor_option;
	}


	public function get_shift_by_doctor_for_user(Request $rq){
		// dd('abc');
			$doctor_id     = $rq->doctor_id;
			$record_date          = $rq->record_date;
			// dd($doctor_id);
			// dd($date);
			$doctor_shift  = patient_model::get_shift_by_doctor_for_user($doctor_id,$record_date);
			// dd($doctor_shift);
			// dd($doctor_shift);
			$shift_option = "<option value='0'>-Select shifts-</option>";
			foreach ($doctor_shift as $each) {
				$shift_option .= "<option value='$each->shift_id'>$each->begin - $each->end</option>";
			}
		echo $shift_option;
	}

		public function process_add_patient_appointment(AppointmentRequest $rq){
		$patient             = new patient_model();
		$patient->doctor_id  =$rq->doctor_id;
		$patient->date       =$rq->date;
		$patient->shift_id   =$rq->shift_id;
		$patient->patient_id =$rq->patient_id;        

		// dd($admin);        
	    $patient->process_add_patient_appointment();
	    return redirect()->route('patient');
	}

		 public function logout_patient(Request $rq){
	    $rq->session()->flush();
	    return redirect()->route('login_patient')->with('success','You have logged out of the system');
	}

	public function view_infomation_for_user($patient_id){
			$patient             = new patient_model();
			$patient->patient_id = $patient_id;
			// dd($patient);
			$array_patient       = $patient->get_user_infomation($patient_id);
			// dd($array_patient);
	 	return view('patient.information', compact('array_patient'));
	 }

		public function view_all_appointment(){
			$records = patient_model::view_all_appointment();
			// dd($records);
			return view('patient.appointment_mgt.view_all_appointment', compact('records'));
		}

	public function delete_appointment($record_id){
		$patient             = new patient_model();
		$patient->record_id = $record_id;
	    $patient->delete_appointment();
	    return redirect()->route('view_all_appointment');
	}


	 public function change_password_for_user($patient_id){
			$patient             = new patient_model();
			$patient->patient_id = $patient_id;
			$array_patient       = $patient->get_user_infomation($patient_id);
			// dd($patient);
			
			// dd($array_patient);
	 	return view('patient.change_password_for_user', compact('array_patient'));
	 }



	 public function process_change_password_for_user(Request $rq, $patient_id){
			$patient             = new patient_model();
			$patient->patient_id = $rq->patient_id;
			$patient->password   = $rq->password;
			$patient->process_change_password_for_user();
			$array_patient       = $patient->get_user_infomation($patient_id);
			
			// dd($array_patient);
	 	return view('patient.change_password_for_user', compact('array_patient'))->with('success','You have changed your password successfully');
	 }






}
