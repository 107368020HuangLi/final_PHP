<?php
    if(isset($_POST['export'])){
        $connect = mysqli_connect("localhost","root","123456789","hospital_final");
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=data.csv');
        $output = fopen("php://output","w");
        fputcsv($output , array ('data_id','age','gender','BMI','temperature','pulse','respiration','fracture_type','painsco','op_code','wbc','hemoglobin','hct','platelets',
                                 'bun','creatinine','occupation_A','occupation_B','occupation_C','occupation_D','occupation_E','occupation_F','occupation_G','occupation_H',
                                 'where_A','where_B','where_C','where_D','where_E','where_F','where_G','where_H','where_I','where_J','ANESTHESIA_A','ANESTHESIA_B','ANESTHESIA_C',
                                 'PATIENT_ORIGIN_A','PATIENT_ORIGIN_B','PATIENT_ORIGIN_C','op_type_A','op_type_B','op_type_C',
                                 'pre_diag_A','pre_diag_B','pre_diag_C','pre_diag_D','pre_diag_E','post_diag_A','post_diag_B','post_diag_C','post_diag_D','post_diag_E'));

        $query = "SELECT * from hospital_dataset ORDER BY data_id ASC";
        $result = mysqli_query($connect,$query);
        while($rows = mysqli_fetch_assoc($result)){
            fputcsv($output,$rows);
        }
        fclose($output);
    }
?>