<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class doctor_model extends Model
{
    // login_model
    public function login_doctor(){
        $array = DB::select('select * from doctors where email=? and password = ?',[

            $this->email,
            $this->password

        ]);

        return $array;
    }
    
    public function view_information_doctor(){
        $sql    = "select * from doctors where doctor_id='$this->doctor_id' ";
        $result = DB::select($sql);
        // dd($result);
        // dd($sql);

        return $result;
    }

    public function process_change_password_for_doctor(){
        $sql    = "update doctors set  password = '$this->password' where doctor_id='$this->doctor_id' ";
        // die($sql);
        DB::update($sql);
   
    }

    static function get_todo_list($year,$month,$doctor_id){
        $sql ="select * from patient_records join doctors on patient_records.doctor_id=doctors.doctor_id  where YEAR(patient_records.date) = '$year' AND MONTH(patient_records.date) = '$month' AND (patient_records.doctor_id) = '$doctor_id' ";

        $result = DB::select($sql);
        return $result;
    }


   

    static function get_doctor_record_for_doctor($start,$end,$doctor_id){
        $result = DB::select("
            SELECT 
            patient_records.*, 
            shifts.begin, 
            shifts.end 
            from patient_records 
            join shifts on patient_records.shift_id = shifts.shift_id 
            join doctors on patient_records.doctor_id=doctors.doctor_id  
            join patients on patient_records.patient_id=patients.patient_id  
            where 
            patient_records.date >= ? 
            AND patient_records.date <= ? 
            AND (patient_records.doctor_id) = ?",[
                $start,
                $end,
                $doctor_id
            ]);
        // dd($result);
        return $result;
        
    }


}
