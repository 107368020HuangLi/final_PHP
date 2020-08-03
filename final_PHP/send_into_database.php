<?php
    if(isset($_POST['Age'])){
        $Age = $_POST['Age'];
        $BMI = $_POST['BMI'];
        $Temperature = $_POST['Temperature'];
        $Pulse = $_POST['Pulse'];
        $Respiration = $_POST['Respiration'];

        $wBC = $_POST['wBC'];
        $HEMOGLOBIN = $_POST['HEMOGLOBIN'];
        $HCT = $_POST['HCT'];
        $PLATELETS = $_POST['PLATELETS'];
        $BUN = $_POST['BUN'];
        $CREATININE = $_POST['CREATININE'];

        $gender_Index = $_POST['GENDER_Index'];
        $fracture_type_Index = $_POST['fracture_type_Index'];
        $painsco_Index = $_POST['painsco_Index'];
        $OP_CODE_Index = $_POST['OP_CODE_Index'];
        
        $occupation_A = $_POST['occupation_A'];
        $occupation_B = $_POST['occupation_B'];
        $occupation_C = $_POST['occupation_C'];
        $occupation_D = $_POST['occupation_D'];
        $occupation_E = $_POST['occupation_E'];
        $occupation_F = $_POST['occupation_F'];
        $occupation_G = $_POST['occupation_G'];
        $occupation_H = $_POST['occupation_H'];

        $WHERE_A = $_POST['WHERE_A'];
        $WHERE_B = $_POST['WHERE_B'];
        $WHERE_C = $_POST['WHERE_C'];
        $WHERE_D = $_POST['WHERE_D'];
        $WHERE_E = $_POST['WHERE_E'];
        $WHERE_F = $_POST['WHERE_F'];
        $WHERE_G = $_POST['WHERE_G'];
        $WHERE_H = $_POST['WHERE_H'];
        $WHERE_I = $_POST['WHERE_I'];
        $WHERE_J = $_POST['WHERE_J'];

        $ANESTHESIA_TYPE_A = $_POST['ANESTHESIA_TYPE_A'];
        $ANESTHESIA_TYPE_B = $_POST['ANESTHESIA_TYPE_B'];
        $ANESTHESIA_TYPE_C = $_POST['ANESTHESIA_TYPE_C'];

        $PATIENT_ORIGIN_A = $_POST['PATIENT_ORIGIN_A'];
        $PATIENT_ORIGIN_B = $_POST['PATIENT_ORIGIN_B'];
        $PATIENT_ORIGIN_C = $_POST['PATIENT_ORIGIN_C'];

        $OP_TYPE_A = $_POST['OP_TYPE_A'];
        $OP_TYPE_B = $_POST['OP_TYPE_B'];
        $OP_TYPE_C = $_POST['OP_TYPE_C'];

        $PRE_DIAG_A = $_POST['PRE_DIAG_A'];
        $PRE_DIAG_B = $_POST['PRE_DIAG_B'];
        $PRE_DIAG_C = $_POST['PRE_DIAG_C'];
        $PRE_DIAG_D = $_POST['PRE_DIAG_D'];
        $PRE_DIAG_E = $_POST['PRE_DIAG_E'];
        
        $POST_DIAG_A = $_POST['POST_DIAG_A'];
        $POST_DIAG_B = $_POST['POST_DIAG_B'];
        $POST_DIAG_C = $_POST['POST_DIAG_C'];
        $POST_DIAG_D = $_POST['POST_DIAG_D'];
        $POST_DIAG_E = $_POST['POST_DIAG_E'];

        $conx = mysqli_connect("localhost","root","123456789","hospital_final");
        //$sql = "insert INTO cal_man_age(cal_method,cal_column,final_result) VALUES ( '$name' ,'$col','45');";
        $sql = "insert INTO hospital_dataset(age,gender,BMI,temperature,pulse,respiration,fracture_type,painsco,op_code,wbc,hemoglobin,hct,platelets,bun,creatinine,
                                             occupation_A,occupation_B,occupation_C,occupation_D,occupation_E,occupation_F,occupation_G,occupation_H,
                                             where_A,where_B,where_C,where_D,where_E,where_F,where_G,where_H,where_I,where_J,
                                             anesthesia_A,anesthesia_B,anesthesia_C,patient_origin_A,patient_origin_B,patient_origin_C,
                                             op_type_A,op_type_B,op_type_C,
                                             pre_diag_A,pre_diag_B,pre_diag_C,pre_diag_D,pre_diag_E,
                                             post_diag_A,post_diag_B,post_diag_C,post_diag_D,post_diag_E)
                                      VALUES('$Age', '$gender_Index', '$BMI', '$Temperature', '$Pulse', '$Respiration', '$fracture_type_Index', '$painsco_Index', '$OP_CODE_Index', '$wBC', '$HEMOGLOBIN', '$HCT', '$PLATELETS', '$BUN', '$CREATININE',
                                             '$occupation_A' ,'$occupation_B','$occupation_C', '$occupation_D' ,'$occupation_E','$occupation_F', '$occupation_G' ,'$occupation_H',
                                             '$WHERE_A', '$WHERE_B' ,'$WHERE_C','$WHERE_D', '$WHERE_E' ,'$WHERE_F','$WHERE_G', '$WHERE_H' ,'$WHERE_I','$WHERE_J', 
                                             '$ANESTHESIA_TYPE_A' ,'$ANESTHESIA_TYPE_B','$ANESTHESIA_TYPE_C', '$PATIENT_ORIGIN_A' ,'$PATIENT_ORIGIN_B','$PATIENT_ORIGIN_C',
                                             '$OP_TYPE_A' ,'$OP_TYPE_B','$OP_TYPE_C',
                                             '$PRE_DIAG_A' ,'$PRE_DIAG_B','$PRE_DIAG_C', '$PRE_DIAG_D' ,'$PRE_DIAG_E',
                                             '$POST_DIAG_A' ,'$POST_DIAG_B','$POST_DIAG_C', '$POST_DIAG_D' ,'$POST_DIAG_E' );";

        if($Age != null && $BMI != null && $Temperature != null && $Pulse != null && $Respiration != null && $wBC != null && $HEMOGLOBIN != null && $HCT != null && $PLATELETS != null && $BUN != null && $CREATININE != null &&
           $gender_Index != "請選擇病患性別" && $fracture_type_Index != "請選擇病患骨折型態" && $painsco_Index != "請選擇病患疼痛指數" && $OP_CODE_Index != "請選擇病患手術代碼" &&
           ($occupation_A != 0 || $occupation_B != 0 || $occupation_C != 0 || $occupation_D != 0 || $occupation_E != 0 || $occupation_F != 0 || $occupation_G != 0 || $occupation_H != 0) &&
           ($WHERE_A !=0 || $WHERE_B !=0 || $WHERE_C !=0 || $WHERE_D !=0 || $WHERE_E !=0 || $WHERE_F !=0 || $WHERE_G !=0 || $WHERE_H !=0 || $WHERE_I !=0 || $WHERE_J !=0 ) &&
           ($ANESTHESIA_TYPE_A != 0 || $ANESTHESIA_TYPE_B != 0 || $ANESTHESIA_TYPE_C !=0 ) && ($OP_TYPE_A != 0 || $OP_TYPE_B != 0 || $OP_TYPE_C != 0 ) &&
           ($PRE_DIAG_A != 0 || $PRE_DIAG_B != 0 || $PRE_DIAG_C != 0 || $PRE_DIAG_D != 0 || $PRE_DIAG_E != 0) &&
           ($POST_DIAG_A != 0 || $POST_DIAG_B != 0 || $POST_DIAG_C != 0 || $POST_DIAG_D != 0 || $POST_DIAG_E != 0) ){
            $result = mysqli_query($conx,$sql);
            echo "<strong><font size = 20 color='#880000'>SUCCESS to insert into database!</font></strong>";
        }else{
            echo "<strong><font size = 20 color='#880000'>fail to insert into database!</font></strong>";
            if($Age == null){
               echo "<script language=\"JavaScript\">alert(\"未填入年齡數值\");</script>";
            }
        }   
    }

?>