<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class patient_model extends Model
{
    public function process_login_patient(){
        $array = DB::select('select * from patients where email=? and password = ?',[

            $this->email,
            $this->password

        ]);
        // dd($array);
        return $array;
        
    }


     static function majors(){
        $sql = "select * from majors ";
        $result = DB::select($sql);

        return $result;
        
    }
        public function register(){
        DB::insert('insert into patients(name,email,password) 
        values (?,?,?)', 
        [ $this->name,
          $this->email,
          $this->password,

        ]);
    }


     static function doctors_mgt(){
        $sql = "select * from doctors join majors on doctors.major_id=majors.major_id ";
        $result = DB::select($sql);

        return $result;
        
    }
        static function get_doctor_by_major_for_user($major_id){

        $sql    = "select * from doctors where major_id='$major_id'";
        // die($sql);
        $doctor_name = DB::select($sql);
        
                                
        return $doctor_name;
    }


    static function get_shift_by_doctor_for_user($doctor_id,$date){
        $doctor_shift = DB::select("select * from shifts where shift_id not in (select shift_id from patient_records where date=? and doctor_id=?)",[
            $date,
            $doctor_id
        ]);
        // $sql = "select * from shifts where shift_id not in (select shift_id from patient_records where record_date='$record_date' and doctor_id=$doctor_id )";

        // $sql    = "select * from shifts join patient_records on shifts.shift_id=patient_records.shift_id where patient_records.record_date='$record_date' and patient_records.doctor_id=$doctor_id ";

        // $doctor_shift = DB::select($sql);
        // dd($doctor_shift);
                                
        return $doctor_shift;
    }

    public function process_add_patient_appointment(){
        $sql   = "insert into patient_records (doctor_id,date,shift_id,patient_id) values ('$this->doctor_id','$this->date','$this->shift_id','$this->patient_id')";
        DB::insert($sql);  
    }

    public function get_user_infomation($patient){
        $sql  = "select * from patients where patient_id = '$this->patient_id'";
        // die($sql);
        $array_patient = DB::select($sql); 
        // dd($array_patient);
        return $array_patient;

    }
    static function view_all_appointment(){
        $records = DB::table('patient_records')
            ->join('doctors', 'doctors.doctor_id', '=', 'patient_records.doctor_id')
            ->join('shifts', 'shifts.shift_id', '=', 'patient_records.shift_id')
            ->select('doctors.name','patient_records.*','shifts.*')
            ->get();
         return $records;
    }
    public function delete_appointment(){
        $sql = "delete from patient_records where record_id = '$this->record_id'";
         DB::delete($sql);
    }


    public function process_change_password_for_user(){
        $sql   = "update patients set  password = '$this->password' where patient_id='$this->patient_id'";
        $array_patient = DB::update($sql);
        return $array_patient;  
    }



}
