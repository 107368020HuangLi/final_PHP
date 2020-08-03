<html>
    <head>
    <center><h1>運用機器學習於結構式病歷以預測骨科病患住院日數</h1></center>
        <meta http-equiv="Access-Control-Allow-Origin" content="*" />
        <meta charset="UTF-8"></meta>
        <title>運用機器學習於結構式病歷以預測骨科病患住院日數</title>
        <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@0.11.7"></script>

    <script>
        function send_data(){
            var Age = document.getElementById("Age").value;
            var BMI = document.getElementById("BMI").value;
            var Temperature = document.getElementById("Temperature").value;
            var Pulse = document.getElementById("Pulse").value;
            var Respiration = document.getElementById("Respiration").value;

            var wBC = document.getElementById("wBC").value;
            var HEMOGLOBIN = document.getElementById("HEMOGLOBIN").value;
            var HCT = document.getElementById("HCT").value;
            var PLATELETS = document.getElementById("PLATELETS").value;
            var BUN = document.getElementById("BUN").value;
            var CREATININE = document.getElementById("CREATININE").value;

            var GENDER_Index = GENDER.options[GENDER.selectedIndex].value;
            var fracture_type_Index = fracture_type.options[fracture_type.selectedIndex].value;
            var painsco_Index = painsco.options[painsco.selectedIndex].value;
            var OP_CODE_Index = OP_CODE.options[OP_CODE.selectedIndex].value;
            
            var occupation_Index = occupation.options[occupation.selectedIndex].value;
            var arr_occupation = occupation_Index.split(",");

            var WHERE_Index = WHERE.options[WHERE.selectedIndex].value;
            var arr_WHERE = WHERE_Index.split(",");

            var ANESTHESIA_TYPE_Index = ANESTHESIA_TYPE.options[ANESTHESIA_TYPE.selectedIndex].value;
            var arr_ANESTHESIA_TYPE = ANESTHESIA_TYPE_Index.split(",");

            var PATIENT_ORIGIN_Index = PATIENT_ORIGIN.options[PATIENT_ORIGIN.selectedIndex].value;
            var arr_PATIENT_ORIGIN = PATIENT_ORIGIN_Index.split(",");

            var OP_TYPE_Index = OP_TYPE.options[OP_TYPE.selectedIndex].value;
            var arr_OP_TYPE = OP_TYPE_Index.split(",");

            var PRE_DIAG_Index = PRE_DIAG.options[PRE_DIAG.selectedIndex].value;
            var arr_PRE_DIAG = PRE_DIAG_Index.split(",");

            var POST_DIAG_Index = POST_DIAG.options[POST_DIAG.selectedIndex].value;
            var arr_POST_DIAG = POST_DIAG_Index.split(",");

            var httpr = new XMLHttpRequest();
            httpr.open("POST","send_into_database.php",true);
            httpr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            httpr.onreadystatechange = function(){
                if(httpr.readyState == 4 && httpr.status == 200){
                    document.getElementById("response").innerHTML = httpr.responseText;
                }
            }
            httpr.send("Age="+Age+"&GENDER_Index="+GENDER_Index+"&BMI="+BMI+"&Temperature="+Temperature+"&Pulse="+Pulse+"&Respiration="+Respiration+
                       "&fracture_type_Index="+fracture_type_Index+"&painsco_Index="+painsco_Index+"&OP_CODE_Index="+OP_CODE_Index+"&wBC="+wBC+"&HEMOGLOBIN="+HEMOGLOBIN+"&HCT="+HCT+"&PLATELETS="+PLATELETS+"&BUN="+BUN+"&CREATININE="+CREATININE +
                       "&occupation_A="+ arr_occupation[0] + "&occupation_B="+ arr_occupation[1] + "&occupation_C="+ arr_occupation[2] + "&occupation_D="+ arr_occupation[3] + "&occupation_E="+ arr_occupation[4] + "&occupation_F="+ arr_occupation[5] + "&occupation_G="+ arr_occupation[6] + "&occupation_H="+ arr_occupation[7] +
                       "&WHERE_A="+ arr_WHERE[0] + "&WHERE_B="+ arr_WHERE[1] + "&WHERE_C="+ arr_WHERE[2] + "&WHERE_D="+ arr_WHERE[3] + "&WHERE_E="+ arr_WHERE[4] + "&WHERE_F="+ arr_WHERE[5] + "&WHERE_G="+ arr_WHERE[6] + "&WHERE_H="+ arr_WHERE[7] + "&WHERE_I="+ arr_WHERE[8] + "&WHERE_J="+ arr_WHERE[9] +
                       "&ANESTHESIA_TYPE_A=" + arr_ANESTHESIA_TYPE[0] + "&ANESTHESIA_TYPE_B=" + arr_ANESTHESIA_TYPE[1] + "&ANESTHESIA_TYPE_C=" + arr_ANESTHESIA_TYPE[2] +
                       "&PATIENT_ORIGIN_A=" + arr_PATIENT_ORIGIN[0] + "&PATIENT_ORIGIN_B=" + arr_PATIENT_ORIGIN[1] + "&PATIENT_ORIGIN_C=" + arr_PATIENT_ORIGIN[2] +
                       "&OP_TYPE_A=" + arr_OP_TYPE[0] + "&OP_TYPE_B=" + arr_OP_TYPE[1] + "&OP_TYPE_C=" + arr_OP_TYPE[2] +
                       "&PRE_DIAG_A=" + arr_PRE_DIAG[0] + "&PRE_DIAG_B=" + arr_PRE_DIAG[1] + "&PRE_DIAG_C=" + arr_PRE_DIAG[2] + "&PRE_DIAG_D=" + arr_PRE_DIAG[3] + "&PRE_DIAG_E=" + arr_PRE_DIAG[4] +
                       "&POST_DIAG_A=" + arr_POST_DIAG[0] + "&POST_DIAG_B=" + arr_POST_DIAG[1] + "&POST_DIAG_C=" + arr_POST_DIAG[2] + "&POST_DIAG_D=" + arr_POST_DIAG[3] + "&POST_DIAG_E=" + arr_POST_DIAG[4] );
        }
       

        function ShowToday(){           
            window.location = 'http://140.124.72.9/tt/0710start.php';
        }

        function init(){
        var btn = document.getElementById("btn");
        var handler = function(){
////////////////////////////////////////////////////////////////////////////////////////數值/////////////////////////////////////////////////////////////////////////
            var Age2 = document.getElementById("Age").value;
            var BMI2 = document.getElementById("BMI").value;
            var Temperature2 = document.getElementById("Temperature").value;
            var Pulse2 = document.getElementById("Pulse").value;
            var Respiration2 = document.getElementById("Respiration").value;

            var wBC2 = document.getElementById("wBC").value;
            var HEMOGLOBIN2 = document.getElementById("HEMOGLOBIN").value;
            var HCT2 = document.getElementById("HCT").value;
            var PLATELETS2 = document.getElementById("PLATELETS").value;
            var BUN2 = document.getElementById("BUN").value;
            var CREATININE2 = document.getElementById("CREATININE").value;
////////////////////////////////////////////////////////////////////////////////////////數值結束/////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////下拉/////////////////////////////////////////////////////////////////////////
            var GENDER_Index2 = GENDER.options[GENDER.selectedIndex].value;
            var fracture_type_Index2 = fracture_type.options[fracture_type.selectedIndex].value;
            var painsco_Index2 = painsco.options[painsco.selectedIndex].value;

            /////////////////////////////////////////////////////////////////////
            var OP_CODE_Index2 = OP_CODE.selectedIndex;     //抓 index
            var OP_CODE_value = OP_CODE.options[OP_CODE.selectedIndex].value;  // 抓值
            /////////////////////////////////////////////////////////////////////
            var occupation_Index2 = occupation.selectedIndex;
            var occupation_value = occupation.options[occupation.selectedIndex].value;
            /////////////////////////////////////////////////////////////////////
            var WHERE_Index2 = WHERE.selectedIndex;
            var WHERE_value = WHERE.options[WHERE.selectedIndex].value;
            /////////////////////////////////////////////////////////////////////
            var ANESTHESIA_TYPE_Index2 = ANESTHESIA_TYPE.selectedIndex;
            var ANESTHESIA_TYPE_value = ANESTHESIA_TYPE.options[ANESTHESIA_TYPE.selectedIndex].value;
            /////////////////////////////////////////////////////////////////////
            var PATIENT_ORIGIN_Index2 = PATIENT_ORIGIN.selectedIndex;
            var PATIENT_ORIGIN_value = PATIENT_ORIGIN.options[PATIENT_ORIGIN.selectedIndex].value;
            /////////////////////////////////////////////////////////////////////
            var OP_TYPE_Index2 = OP_TYPE.selectedIndex;
            var OP_TYPE_value = OP_TYPE.options[OP_TYPE.selectedIndex].value;
            /////////////////////////////////////////////////////////////////////
            var PRE_DIAG_Index2 = PRE_DIAG.selectedIndex;
            var PRE_DIAG_value = PRE_DIAG.options[PRE_DIAG.selectedIndex].value;
            /////////////////////////////////////////////////////////////////////
            var POST_DIAG_Index2 = POST_DIAG.selectedIndex;
            var POST_DIAG_value = POST_DIAG.options[POST_DIAG.selectedIndex].value;
            /////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////下拉結束/////////////////////////////////////////////////////////////////////////
                var Age_mean = 51.612565; var Age_std = 20.526918;
                var GENDER_mean = 0.523560; var GENDER_std = 0.500757;
                var BMI_mean = 24.790890; var BMI_std = 4.303283;
                var Temperature_mean = 36.460209; var Temperature_std = 0.503135;
                var Pulse_mean = 81.638743; var Pulse_std = 13.235533;
                
                var Respiration_mean = 16.774869; var Respiration_std = 2.228192;
                var fracture_type_mean = 0.104712; var fracture_type_std = 0.306987;
                var painsco_mean = 2.246073; var painsco_std = 0.730661;
                var OP_CODE_mean = 7850.015707; var OP_CODE_std = 3540.000314;
                var wBC_mean = 8.542408; var wBC_std = 3.459226;
                
                var HEMOGLOBIN_mean = 13.169634; var HEMOGLOBIN_std = 1.917460;
                var HCT_mean = 40.267016; var HCT_std = 4.966711;
                var PLATELETS_mean = 271.104712; var PLATELETS_std = 62.967824;
                var BUN_mean = 14.851309; var BUN_std = 4.081200;
                var CREATININE_mean = 0.756545; var CREATININE_std = 0.189032;
                
                var occupation_A_mean = 0.230366; var occupation_A_std = 0.422174;
                var occupation_B_mean = 0.151832; var occupation_B_std = 0.359802;
                var occupation_C_mean = 0.204188; var occupation_C_std = 0.404167;
                var occupation_D_mean = 0.167539; var occupation_D_std = 0.374438;
                var occupation_E_mean = 0.073298; var occupation_E_std = 0.261311;

                var occupation_F_mean = 0.073298; var occupation_F_std = 0.261311;
                var occupation_G_mean = 0.031414; var occupation_G_std = 0.174891;
                var occupation_H_mean = 0.068063; var occupation_H_std = 0.252516;
                var WHERE_A_mean = 0.109948; var WHERE_A_std = 0.313647;
                var WHERE_B_mean = 0.068063; var WHERE_B_std = 0.252516;
                
                var WHERE_C_mean = 0.115183; var WHERE_C_std = 0.320082;
                var WHERE_D_mean = 0.225131; var WHERE_D_std = 0.418766;
                var WHERE_E_mean = 0.089005; var WHERE_E_std = 0.285500;
                var WHERE_F_mean = 0.219895; var WHERE_F_std = 0.415264;
                var WHERE_G_mean = 0.052356; var WHERE_G_std = 0.223329;

                var WHERE_H_mean = 0.020942; var WHERE_H_std = 0.143568;
                var WHERE_I_mean = 0.047120; var WHERE_I_std = 0.212453;
                var WHERE_J_mean = 0.052356; var WHERE_J_std = 0.223329;
                var ANESTHESIA_TYPE_A_mean = 0.942408; var ANESTHESIA_TYPE_A_std = 0.233582;
                var ANESTHESIA_TYPE_B_mean = 0.031414; var ANESTHESIA_TYPE_B_std = 0.174891;

                var ANESTHESIA_TYPE_C_mean = 0.026178; var ANESTHESIA_TYPE_C_std = 0.160084;
                var PATIENT_ORIGIN_A_mean = 0.916230; var PATIENT_ORIGIN_A_std = 0.277770;
                var PATIENT_ORIGIN_B_mean = 0.026178; var PATIENT_ORIGIN_B_std = 0.160084;
                var PATIENT_ORIGIN_C_mean = 0.057592; var PATIENT_ORIGIN_C_std = 0.233582;
                var OP_TYPE_A_mean = 0.910995; var OP_TYPE_A_std = 0.285500;

                var OP_TYPE_B_mean = 0.068063; var OP_TYPE_B_std = 0.252516;
                var OP_TYPE_C_mean = 0.020942; var OP_TYPE_C_std = 0.143568;
                var PRE_DIAG_A_mean = 0.130890; var PRE_DIAG_A_std = 0.338166;
                var PRE_DIAG_B_mean = 0.157068; var PRE_DIAG_B_std = 0.364821;
                var PRE_DIAG_C_mean = 0.225131; var PRE_DIAG_C_std = 0.418766;

                var PRE_DIAG_D_mean = 0.376963; var PRE_DIAG_D_std = 0.485899;
                var PRE_DIAG_E_mean = 0.109948; var PRE_DIAG_E_std = 0.313647;
                var POST_DIAG_A_mean = 0.125654; var POST_DIAG_A_std = 0.332331;
                var POST_DIAG_B_mean = 0.157068; var POST_DIAG_B_std = 0.364821;
                var POST_DIAG_C_mean = 0.235602; var POST_DIAG_C_std = 0.425490;

                var POST_DIAG_D_mean = 0.371728; var POST_DIAG_D_std = 0.484536;
                var POST_DIAG_E_mean = 0.109948; var POST_DIAG_E_std = 0.313647;
/////////////////////////////////////////////////////////////////////參數平均,標準差結束////////////////////////////////////////////////////////////////
                //分割//
                var arr_occupation2 = occupation_value.split(",");  //8種
                var arr_WHERE2 = WHERE_value.split(",");  //10種
                var arr_ANESTHESIA_TYPE2 = ANESTHESIA_TYPE_value.split(",");  //3種
                var arr_PATIENT_ORIGIN2 = PATIENT_ORIGIN_value.split(",");  //3種
                var arr_OP_TYPE2 = OP_TYPE_value.split(",");  //3種
                var arr_PRE_DIAG2 = PRE_DIAG_value.split(",");  //5種
                var arr_POST_DIAG2 = POST_DIAG_value.split(",");  //5種
                //分割//
///////////////////////////////////////////////////////////////////////////////標準化//////////////////////////////////////////////////////////////////
                var Age_scale = ( parseFloat(Age2) - Age_mean ) / Age_std ;
                var GENDER_scale = ( parseFloat(GENDER_Index2) - GENDER_mean ) / GENDER_std ; //單值下拉選單
                var BMI_scale = ( parseFloat(BMI2) - BMI_mean ) / BMI_std ;
                var Temperature_scale = ( parseFloat(Temperature2) - Temperature_mean ) / Temperature_std ;
                var Pulse_scale = ( parseFloat(Pulse2) - Pulse_mean ) / Pulse_std ;
                
                var Respiration_scale = ( parseFloat(Respiration2) - Respiration_mean ) / Respiration_std ;
                var fracture_type_scale = ( parseFloat(fracture_type_Index2) - fracture_type_mean ) / fracture_type_std ; //單值下拉選單
                var painsco_scale = ( parseFloat(painsco_Index2) - painsco_mean ) / painsco_std ; //單值下拉選單
                
                var OP_CODE_scale = ( parseFloat(OP_CODE_value) - OP_CODE_mean ) / OP_CODE_std ; //單值下拉選單

                var wBC_scale = ( parseFloat(wBC2) - wBC_mean ) / wBC_std ;
                
                var HEMOGLOBIN_scale = ( parseFloat(HEMOGLOBIN2) - HEMOGLOBIN_mean ) / HEMOGLOBIN_std ;
                var HCT_scale = ( parseFloat(HCT2) - HCT_mean ) / HCT_std ;
                var PLATELETS_scale = ( parseFloat(PLATELETS2) - PLATELETS_mean ) / PLATELETS_std ;
                var BUN_scale = ( parseFloat(BUN2) - BUN_mean ) / BUN_std ;
                var CREATININE_scale = ( parseFloat(CREATININE2) - CREATININE_mean ) / CREATININE_std ;


                var occupation_A_scale = ( parseFloat(arr_occupation2[0]) - occupation_A_mean ) / occupation_A_std ;
                var occupation_B_scale = ( parseFloat(arr_occupation2[1]) - occupation_B_mean ) / occupation_B_std ;
                var occupation_C_scale = ( parseFloat(arr_occupation2[2]) - occupation_C_mean ) / occupation_C_std ;
                var occupation_D_scale = ( parseFloat(arr_occupation2[3]) - occupation_D_mean ) / occupation_D_std ;
                var occupation_E_scale = ( parseFloat(arr_occupation2[4]) - occupation_E_mean ) / occupation_E_std ;
                var occupation_F_scale = ( parseFloat(arr_occupation2[5]) - occupation_F_mean ) / occupation_F_std ;
                var occupation_G_scale = ( parseFloat(arr_occupation2[6]) - occupation_G_mean ) / occupation_G_std ;
                var occupation_H_scale = ( parseFloat(arr_occupation2[7]) - occupation_H_mean ) / occupation_H_std ;

                var WHERE_A_scale = ( parseFloat(arr_WHERE2[0]) - WHERE_A_mean ) / WHERE_A_std ;
                var WHERE_B_scale = ( parseFloat(arr_WHERE2[1]) - WHERE_B_mean ) / WHERE_B_std ;
                var WHERE_C_scale = ( parseFloat(arr_WHERE2[2]) - WHERE_C_mean ) / WHERE_C_std ;
                var WHERE_D_scale = ( parseFloat(arr_WHERE2[3]) - WHERE_D_mean ) / WHERE_D_std ;
                var WHERE_E_scale = ( parseFloat(arr_WHERE2[4]) - WHERE_E_mean ) / WHERE_E_std ;
                var WHERE_F_scale = ( parseFloat(arr_WHERE2[5]) - WHERE_F_mean ) / WHERE_F_std ;
                var WHERE_G_scale = ( parseFloat(arr_WHERE2[6]) - WHERE_G_mean ) / WHERE_G_std ;
                var WHERE_H_scale = ( parseFloat(arr_WHERE2[7]) - WHERE_H_mean ) / WHERE_H_std ;
                var WHERE_I_scale = ( parseFloat(arr_WHERE2[8]) - WHERE_I_mean ) / WHERE_I_std ;
                var WHERE_J_scale = ( parseFloat(arr_WHERE2[9]) - WHERE_J_mean ) / WHERE_J_std ;

                var ANESTHESIA_TYPE_A_scale = ( parseFloat(arr_ANESTHESIA_TYPE2[0]) - ANESTHESIA_TYPE_A_mean ) / ANESTHESIA_TYPE_A_std ;
                var ANESTHESIA_TYPE_B_scale = ( parseFloat(arr_ANESTHESIA_TYPE2[1]) - ANESTHESIA_TYPE_B_mean ) / ANESTHESIA_TYPE_B_std ;
                var ANESTHESIA_TYPE_C_scale = ( parseFloat(arr_ANESTHESIA_TYPE2[2]) - ANESTHESIA_TYPE_C_mean ) / ANESTHESIA_TYPE_C_std ;

                var PATIENT_ORIGIN_A_scale = ( parseFloat(arr_PATIENT_ORIGIN2[0]) - PATIENT_ORIGIN_A_mean ) / PATIENT_ORIGIN_A_std ;
                var PATIENT_ORIGIN_B_scale = ( parseFloat(arr_PATIENT_ORIGIN2[1]) - PATIENT_ORIGIN_B_mean ) / PATIENT_ORIGIN_B_std ;
                var PATIENT_ORIGIN_C_scale = ( parseFloat(arr_PATIENT_ORIGIN2[2]) - PATIENT_ORIGIN_C_mean ) / PATIENT_ORIGIN_C_std ; 

                var OP_TYPE_A_scale = ( parseFloat(arr_OP_TYPE2[0]) - OP_TYPE_A_mean ) / OP_TYPE_A_std ;
                var OP_TYPE_B_scale = ( parseFloat(arr_OP_TYPE2[1]) - OP_TYPE_B_mean ) / OP_TYPE_B_std ;
                var OP_TYPE_C_scale = ( parseFloat(arr_OP_TYPE2[2]) - OP_TYPE_C_mean ) / OP_TYPE_C_std ;

                var PRE_DIAG_A_scale = ( parseFloat(arr_PRE_DIAG2[0]) - PRE_DIAG_A_mean ) / PRE_DIAG_A_std ;
                var PRE_DIAG_B_scale = ( parseFloat(arr_PRE_DIAG2[1]) - PRE_DIAG_B_mean ) / PRE_DIAG_B_std ;
                var PRE_DIAG_C_scale = ( parseFloat(arr_PRE_DIAG2[2]) - PRE_DIAG_C_mean ) / PRE_DIAG_C_std ;
                var PRE_DIAG_D_scale = ( parseFloat(arr_PRE_DIAG2[3]) - PRE_DIAG_D_mean ) / PRE_DIAG_D_std ;
                var PRE_DIAG_E_scale = ( parseFloat(arr_PRE_DIAG2[4]) - PRE_DIAG_E_mean ) / PRE_DIAG_E_std ;

                var POST_DIAG_A_scale = ( parseFloat(arr_POST_DIAG2[0]) - POST_DIAG_A_mean ) / POST_DIAG_A_std ;
                var POST_DIAG_B_scale = ( parseFloat(arr_POST_DIAG2[1]) - POST_DIAG_B_mean ) / POST_DIAG_B_std ;
                var POST_DIAG_C_scale = ( parseFloat(arr_POST_DIAG2[2]) - POST_DIAG_C_mean ) / POST_DIAG_C_std ;
                var POST_DIAG_D_scale = ( parseFloat(arr_POST_DIAG2[3]) - POST_DIAG_D_mean ) / POST_DIAG_D_std ;
                var POST_DIAG_E_scale = ( parseFloat(arr_POST_DIAG2[4]) - POST_DIAG_E_mean ) / POST_DIAG_E_std ;

///////////////////////////////////////////////////////////////////////////////標準化結束//////////////////////////////////////////////////////////////////
            
            (async () => {
                if( ( parseFloat(Age2) >= 0 )  && ( parseFloat(BMI2) >= 0 ) && ( parseFloat(Temperature2) >= 0 ) && ( parseFloat(Pulse2) >= 0 ) &&
                        ( parseFloat(Respiration2) >= 0 )  && ( parseFloat(wBC2) >= 0 ) && 
                        ( parseFloat(HEMOGLOBIN2) >= 0 ) && ( parseFloat(HCT2) >= 0 ) && ( parseFloat(PLATELETS2) >= 0 ) && ( parseFloat(BUN2) >= 0 ) && ( parseFloat(CREATININE2) >= 0 ) && 
                        ( GENDER_Index2 != "請選擇病患性別" ) && ( fracture_type_Index2 != "請選擇病患骨折型態" ) && ( painsco_Index2 != "請選擇病患疼痛指數" ) && ( OP_CODE_Index2 != 0 ) && 
                        ( occupation_Index2 != 0 ) && ( WHERE_Index2 != 0 ) && ( ANESTHESIA_TYPE_Index2 != 0 ) && ( PATIENT_ORIGIN_Index2 != 0 ) && ( OP_TYPE_Index2 != 0 ) &&
                        ( PRE_DIAG_Index2 != 0 ) && ( POST_DIAG_Index2 != 0 ) ){
                        const model = await tf.loadModel('./model_file0707/model.json'); 
                        final_output = model.predict(tf.tensor2d([parseFloat(Age_scale),parseFloat(GENDER_scale),parseFloat(BMI_scale),parseFloat(Temperature_scale),parseFloat(Pulse_scale),
                                                parseFloat(Respiration_scale),parseFloat(fracture_type_scale),parseFloat(painsco_scale),parseFloat(OP_CODE_scale),parseFloat(wBC_scale),
                                                parseFloat(HEMOGLOBIN_scale),parseFloat(HCT_scale),parseFloat(PLATELETS_scale),parseFloat(BUN_scale),parseFloat(CREATININE_scale),
                                                
                                                parseFloat(occupation_A_scale),parseFloat(occupation_B_scale),parseFloat(occupation_C_scale),parseFloat(occupation_D_scale),
                                                parseFloat(occupation_E_scale),parseFloat(occupation_F_scale),parseFloat(occupation_G_scale),parseFloat(occupation_H_scale),
                                                
                                                parseFloat(WHERE_A_scale),parseFloat(WHERE_B_scale),parseFloat(WHERE_C_scale),parseFloat(WHERE_D_scale),parseFloat(WHERE_E_scale),
                                                parseFloat(WHERE_F_scale),parseFloat(WHERE_G_scale),parseFloat(WHERE_H_scale),parseFloat(WHERE_I_scale),parseFloat(WHERE_J_scale),
                                                
                                                parseFloat(ANESTHESIA_TYPE_A_scale),parseFloat(ANESTHESIA_TYPE_B_scale),parseFloat(ANESTHESIA_TYPE_C_scale),
                                                parseFloat(PATIENT_ORIGIN_A_scale),parseFloat(PATIENT_ORIGIN_B_scale),parseFloat(PATIENT_ORIGIN_C_scale),
                                                parseFloat(OP_TYPE_A_scale),parseFloat(OP_TYPE_B_scale),parseFloat(OP_TYPE_C_scale),

                                                parseFloat(PRE_DIAG_A_scale),parseFloat(PRE_DIAG_B_scale),parseFloat(PRE_DIAG_C_scale),parseFloat(PRE_DIAG_D_scale),parseFloat(PRE_DIAG_E_scale),
                                                parseFloat(POST_DIAG_A_scale),parseFloat(POST_DIAG_B_scale),parseFloat(POST_DIAG_C_scale),parseFloat(POST_DIAG_D_scale),parseFloat(POST_DIAG_E_scale)
                                            ], [1,52])).dataSync();
                }
                if( ( parseFloat(Age2) < 0 ) || ( isNaN( parseFloat( Age2 ) ) == true ) ){
                        alert("年齡欄位輸入格式有誤");
                    }
                    if( GENDER_Index2 == "請選擇病患性別" ){
                        alert("未選擇性別");
                    }
                    if( ( parseFloat(BMI2) < 0 ) || ( isNaN( parseFloat( BMI2 ) ) == true ) ){
                        alert("BMI輸入格式有誤");
                    }
                    if( ( parseFloat(Temperature2) < 0 ) || ( isNaN( parseFloat( Temperature2 ) ) == true ) ){
                        alert("體溫欄位輸入格式有誤");
                    }
                    if( ( parseFloat(Pulse2) < 0 ) || ( isNaN( parseFloat( Pulse2 ) ) == true ) ){
                        alert("脈搏欄位輸入格式有誤");
                    }
                    if( ( parseFloat(Respiration2) < 0 ) || ( isNaN( parseFloat( Respiration2 ) ) == true ) ){
                        alert("呼吸欄位輸入格式有誤");
                    }
                    if( fracture_type_Index2 == "請選擇病患骨折型態" ){
                        alert("未選擇骨折型態");
                    }
                    if( painsco_Index2 == "請選擇病患疼痛指數" ){
                        alert("未選擇疼痛指數");
                    }
                    if( OP_CODE_Index2 == 0 ){
                        alert("未選擇病患手術代碼");
                    }
                    if( occupation_Index2 == 0 ){
                        alert("未選擇病患職業");
                    }
                    if( WHERE_Index2 == 0 ){
                        alert("未選擇病患骨折位置");
                    }
                    if( ANESTHESIA_TYPE_Index2 == 0 ){
                        alert("未選擇病患麻醉方式");
                    }
                    if( PATIENT_ORIGIN_Index2 == 0 ){
                        alert("未選擇病患來源");
                    }
                    if( OP_TYPE_Index2 == 0 ){
                        alert("未選擇手術方式");
                    }
                    if( PRE_DIAG_Index2 == 0 ){
                        alert("未選擇手術前診斷");
                    }
                    if( POST_DIAG_Index2 == 0 ){
                        alert("未選擇手術後診斷");
                    }


                var final_output_string = String(final_output);
                var arr_final_output = final_output_string.split(","); 
                
                if( ( parseFloat(arr_final_output[0]) >= parseFloat(arr_final_output[1]) ) && ( parseFloat(arr_final_output[0]) >= parseFloat(arr_final_output[2]) ) && ( parseFloat(arr_final_output[0]) >= parseFloat(arr_final_output[3]) ) ){
                    document.write("<center><h2>"+"預測建議住院( 1 ~  3)天機率為: "+"<font color='#FF00FF'>"+ Math.round(parseFloat(arr_final_output[0])*100 * 10 ) / 10 +"%"+"</font>" +"</center></h2>"+"<br>");
                    document.write("<center><h2>"+"預測建議住院( 4 ~  7)天機率為: "+ Math.round(parseFloat(arr_final_output[1])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
                    document.write("<center><h2>"+"預測建議住院( 8 ~ 14)天機率為: "+ Math.round(parseFloat(arr_final_output[2])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
                    document.write("<center><h2>"+"預測建議住院(15 ~ 30)天機率為: "+ Math.round(parseFloat(arr_final_output[3])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
                }

                if( ( parseFloat(arr_final_output[1]) >= parseFloat(arr_final_output[0]) ) && ( parseFloat(arr_final_output[1]) >= parseFloat(arr_final_output[2]) ) && ( parseFloat(arr_final_output[1]) >= parseFloat(arr_final_output[3]) ) ){
                    document.write("<center><h2>"+"預測建議住院( 1 ~  3)天機率為: "+ Math.round(parseFloat(arr_final_output[0])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
                    document.write("<center><h2>"+"預測建議住院( 4 ~  7)天機率為: "+"<font color='#FF00FF'>"+ Math.round(parseFloat(arr_final_output[1])*100 * 10 ) / 10 +"%" +"</font>"+"</center></h2>"+"<br>");
                    document.write("<center><h2>"+"預測建議住院( 8 ~ 14)天機率為: "+ Math.round(parseFloat(arr_final_output[2])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
                    document.write("<center><h2>"+"預測建議住院(15 ~ 30)天機率為: "+ Math.round(parseFloat(arr_final_output[3])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
                }

                if( ( parseFloat(arr_final_output[2]) >= parseFloat(arr_final_output[0]) ) && ( parseFloat(arr_final_output[2]) >= parseFloat(arr_final_output[1]) ) && ( parseFloat(arr_final_output[2]) >= parseFloat(arr_final_output[3]) ) ){
                    document.write("<center><h2>"+"預測建議住院( 1 ~  3)天機率為: "+ Math.round(parseFloat(arr_final_output[0])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
                    document.write("<center><h2>"+"預測建議住院( 4 ~  7)天機率為: "+ Math.round(parseFloat(arr_final_output[1])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
                    document.write("<center><h2>"+"預測建議住院( 8 ~ 14)天機率為: "+"<font color='#FF00FF'>"+ Math.round(parseFloat(arr_final_output[2])*100 * 10 ) / 10 +"%" +"</font>"+"</center></h2>"+"<br>");
                    document.write("<center><h2>"+"預測建議住院(15 ~ 30)天機率為: "+ Math.round(parseFloat(arr_final_output[3])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
                }

                if( ( parseFloat(arr_final_output[3]) >= parseFloat(arr_final_output[0]) ) && ( parseFloat(arr_final_output[3]) >= parseFloat(arr_final_output[1]) ) && ( parseFloat(arr_final_output[3]) >= parseFloat(arr_final_output[2]) ) ){
                    document.write("<center><h2>"+"預測建議住院( 1 ~  3)天機率為: "+ Math.round(parseFloat(arr_final_output[0])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
                    document.write("<center><h2>"+"預測建議住院( 4 ~  7)天機率為: "+ Math.round(parseFloat(arr_final_output[1])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
                    document.write("<center><h2>"+"預測建議住院( 8 ~ 14)天機率為: "+ Math.round(parseFloat(arr_final_output[2])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
                    document.write("<center><h2>"+"預測建議住院(15 ~ 30)天機率為: "+"<font color='#FF00FF'>"+ Math.round(parseFloat(arr_final_output[3])*100 * 10 ) / 10 +"%"+"</font>" +"</center></h2>"+"<br>");
                }

                document.write("<br>");
                   
                document.write("<center>");
                    document.write("<table border='1'>");
                        document.write("<tr>");
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"年齡"+"</strong>"+"</font>"+"數值為:"); document.write("</td>");
                                if( isNaN( parseFloat( Age2 ) ) == true ){
                                    document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write("未填入數值"); document.write("</strong>"+"</font>"+"</td>");
                                }else{
                                    document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(Age2); document.write("</strong>"+"</font>"+"</td>");
                                    //document.write("<td>"+"<font color='#228B22'>"+"<strong>"+"<input type='text' id='Age_return' value="+Age2+">"+"</input>"+"</strong>"+"</font>"+"</td>");
                                }

                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"BMI"+"</strong>"+"</font>"+"數值為:"); document.write("</td>");
                                if( isNaN( parseFloat( BMI2 ) ) == true ){
                                    document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write("未填入數值"); document.write("</strong>"+"</font>"+"</td>");
                                }else{
                                    document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(BMI2); document.write("</strong>"+"</font>"+"</td>");
                                }
                        document.write("</tr>");

                        document.write("<tr>");
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"體溫"+"</strong>"+"</font>"+"數值為:"); document.write("</td>");
                                if( isNaN( parseFloat( Temperature2 ) ) == true ){
                                    document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write("未填入數值"); document.write("</strong>"+"</font>"+"</td>");
                                }else{
                                    document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(Temperature2); document.write("</strong>"+"</font>"+"</td>");
                                }

                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"脈搏"+"</strong>"+"</font>"+"數值為:"); document.write("</td>");
                                if( isNaN( parseFloat( Pulse2 ) ) == true ){
                                    document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write("未填入數值"); document.write("</strong>"+"</font>"+"</td>");
                                }else{
                                    document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(Pulse2); document.write("</strong>"+"</font>"+"</td>");
                                }
                                    
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"呼吸"+"</strong>"+"</font>"+"數值為:"); document.write("</td>");
                                if( isNaN( parseFloat( Respiration2 ) ) == true ){    
                                    document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write("未填入數值"); document.write("</strong>"+"</font>"+"</td>");
                                }else{
                                    document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(Respiration2); document.write("</strong>"+"</font>"+"</td>");
                                }
                        document.write("</tr>");
                    document.write("</table>");
                document.write("</center>");
                
                document.write("<br>");
                
                document.write("<center>");
                    document.write("<table border='1'>");
                        document.write("<tr>");
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"白血球"+"</strong>"+"</font>"+"數值為:"); document.write("</td>");
                                if( isNaN( parseFloat( wBC2 ) ) == true ){
                                    document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write("未填入數值"); document.write("</strong>"+"</font>"+"</td>");
                                }else{
                                    document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(wBC2); document.write("</strong>"+"</font>"+"</td>");
                                }

                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"血紅素檢查"+"</strong>"+"</font>"+"數值為:"); document.write("</td>");
                                if( isNaN( parseFloat( HEMOGLOBIN2 ) ) == true ){
                                    document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write("未填入數值"); document.write("</strong>"+"</font>"+"</td>");
                                }else{
                                    document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(HEMOGLOBIN2); document.write("</strong>"+"</font>"+"</td>");
                                }
                                    
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"血球比容值"+"</strong>"+"</font>"+"數值為:"); document.write("</td>");
                                if( isNaN( parseFloat( HCT2 ) ) == true ){
                                    document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write("未填入數值"); document.write("</strong>"+"</font>"+"</td>");
                                }else{
                                    document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(HCT2); document.write("</strong>"+"</font>"+"</td>");
                                }
                        document.write("</tr>");

                        document.write("<tr>");
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"血小板數"+"</strong>"+"</font>"+"數值為:"); document.write("</td>");
                                if( isNaN( parseFloat( PLATELETS2 ) ) == true ){
                                    document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write("未填入數值"); document.write("</strong>"+"</font>"+"</td>");
                                }else{
                                    document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(PLATELETS2); document.write("</strong>"+"</font>"+"</td>");
                                }

                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"血液尿素氮"+"</strong>"+"</font>"+"數值為:"); document.write("</td>");
                                if( isNaN( parseFloat( BUN2 ) ) == true ){
                                    document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write("未填入數值"); document.write("</strong>"+"</font>"+"</td>");
                                }else{
                                    document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(BUN2); document.write("</strong>"+"</font>"+"</td>");
                                }
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"肌酐"+"</strong>"+"</font>"+"數值為:"); document.write("</td>");
                                if( isNaN( parseFloat( CREATININE2 ) ) == true ){
                                    document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write("未填入數值"); document.write("</strong>"+"</font>"+"</td>");
                                }else{
                                    document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(CREATININE2); document.write("</strong>"+"</font>"+"</td>");
                                }                            
                        document.write("</tr>");
                    document.write("</table>");
                document.write("</center>");

                document.write("<br>");

                document.write("<center>");
                    document.write("<table border='1'>");
                        document.write("<tr>");
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"性別"+"</strong>"+"</font>"+"為:"); document.write("</td>");
                            if(GENDER_Index2 == "請選擇病患性別"){
                                show_GENDER = "未選擇";
                                document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write(show_GENDER); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(GENDER_Index2 == 1){
                                show_GENDER = "男性";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_GENDER); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(GENDER_Index2 == 0){
                                show_GENDER = "女性";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_GENDER); document.write("</strong>"+"</font>"+"</td>");
                            }
                        document.write("</tr>");

                        document.write("<tr>");
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"骨折型態"+"</strong>"+"</font>"+"為:"); document.write("</td>");
                            if(fracture_type_Index2 == "請選擇病患骨折型態"){
                                show_fracture_type = "未選擇";
                                document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write(show_fracture_type); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(fracture_type_Index2 == 1){
                                show_fracture_type = "開放性骨折";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_fracture_type); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(fracture_type_Index2 == 0){
                                show_fracture_type = "閉鎖性骨折";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_fracture_type); document.write("</strong>"+"</font>"+"</td>");
                            }
                        document.write("</tr>");

                        document.write("<tr>");
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"病患疼痛指數"+"</strong>"+"</font>"+"為:"); document.write("</td>");
                            if(painsco_Index2 == "請選擇病患疼痛指數"){
                                show_painsco = "未選擇";
                                document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write(show_painsco); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(painsco_Index2 == 0){
                                show_painsco = "疼痛指數0";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_painsco); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(painsco_Index2 == 1){
                                show_painsco = "疼痛指數1";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_painsco); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(painsco_Index2 == 2){
                                show_painsco = "疼痛指數2";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_painsco); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(painsco_Index2 == 3){
                                show_painsco = "疼痛指數3";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_painsco); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(painsco_Index2 == 4){
                                show_painsco = "疼痛指數4";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_painsco); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(painsco_Index2 == 5){
                                show_painsco = "疼痛指數5";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_painsco); document.write("</strong>"+"</font>"+"</td>");
                            }
                        document.write("</tr>");

                        document.write("<tr>");
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"手術代碼"+"</strong>"+"</font>"+"為:"); document.write("</td>");
                            if(OP_CODE_Index2 == 0){
                                show_OP_CODE = "未選擇";
                                document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 1){
                                show_OP_CODE = "48001C(淺部創傷處理 － 傷口長 小於5公分者)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 2){
                                show_OP_CODE = "48005C(深部複雜創傷處理 － 傷口長 5-10 公分者)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 3){
                                show_OP_CODE = "48006C(深部複雜創傷處理 － 傷口長 10 公分以上者)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 4){
                                show_OP_CODE = "48033C(深部複雜臉部創傷處理– 小5公分以內)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 5){
                                show_OP_CODE = "62016B(多層皮膚移植 － 每增加100平方公分)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 6){
                                show_OP_CODE = "64002B(骨或軟骨移植術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }

                            if(OP_CODE_Index2 == 7){
                                show_OP_CODE = "64003C(骨髓炎之死骨切除術或蝶形手術及擴創術(包含指骨、掌骨、蹠骨）)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 8){
                                show_OP_CODE = "64015C(鎖骨骨折開放復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 9){
                                show_OP_CODE = "64023B(四肢切斷術 － 小腿、上臂、前臂)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 10){
                                show_OP_CODE = "64028C(股骨幹骨折開放性復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 11){
                                show_OP_CODE = "64029B(股骨頸骨折開放性復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 12){
                                show_OP_CODE = "64031C(脛骨骨折開放性復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 13){
                                show_OP_CODE = "64032B(橈骨、尺骨骨折開放性復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }

                            if(OP_CODE_Index2 == 14){
                                show_OP_CODE = "64034B(膝蓋骨骨折開放性復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 15){
                                show_OP_CODE = "64035C(腕、跗、掌、蹠骨骨折開放性復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 16){
                                show_OP_CODE = "64044C(前臂骨骨折徒手復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 17){
                                show_OP_CODE = "64053B(急性化膿性關節炎切開術 － 肩關節、肘關節、腕關節、膝關節、踝關節)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 18){
                                show_OP_CODE = "64065B(肩關節脫位開放性復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 19){
                                show_OP_CODE = "64067C(膝關節脫位開放性復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 20){
                                show_OP_CODE = "64069C(踝關節脫位開放性復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }

                            if(OP_CODE_Index2 == 21){
                                show_OP_CODE = "64108B(下顎骨骨折開放性復位 ( 簡單 ))";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 22){
                                show_OP_CODE = "64117C(跟腱斷裂縫合術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 23){
                                show_OP_CODE = "64122B(肩旋轉袖破裂修補術 － 大破裂)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 24){
                                show_OP_CODE = "64128B(足踝韌帶修補術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 25){
                                show_OP_CODE = "64133C(大腳趾外翻（ 截骨術 ）)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 26){
                                show_OP_CODE = "64161B(骨盆骨折開放性復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 27){
                                show_OP_CODE = "64162B(全股關節置換術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }

                            if(OP_CODE_Index2 == 28){
                                show_OP_CODE = "64164B(全膝關節置換術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 29){
                                show_OP_CODE = "64165B(全肘關節置換術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 30){
                                show_OP_CODE = "64170B(部份關節置換術併整型術 － 只置換髖臼或股骨或半股關節或半肩關節)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 31){
                                show_OP_CODE = "64175B(踝關節整形術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 32){
                                show_OP_CODE = "64180B(膝關節固定術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 33){
                                show_OP_CODE = "64183B(踝關節固定術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 34){
                                show_OP_CODE = "64187B(十字韌帶重建術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            
                            if(OP_CODE_Index2 == 35){
                                show_OP_CODE = "64188B(十字韌帶修補術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 36){
                                show_OP_CODE = "64195C(肌腱或韌帶完全切斷修補)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 37){
                                show_OP_CODE = "64239B(開放性或閉鎖性肱骨粗隆或骨幹或踝部骨折，開放性復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 38){
                                show_OP_CODE = "64242B(橈骨頭切除術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 39){
                                show_OP_CODE = "64244B(關節鏡手術 － 關節鏡下關節面磨平成形術，打洞，游離體或骨軟骨碎片取出手術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 40){
                                show_OP_CODE = "64245C(骨內固定物拔除術 － 骨盆，髖骨，肱骨，股骨，尺骨，橈骨，脛骨)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 41){
                                show_OP_CODE = "64247C(骨內固定物拔除術 － 其他部位)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }

                            if(OP_CODE_Index2 == 42){
                                show_OP_CODE = "64259B(半肩關節成形術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 43){
                                show_OP_CODE = "64263B(膝關節半月軟骨修補術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 44){
                                show_OP_CODE = "64266B(脊椎骨全部切除術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 45){
                                show_OP_CODE = "64267C(舟狀骨骨折開放性復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 46){
                                show_OP_CODE = "64272C(腓外踝或脛內踝單一骨折開放性復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 47){
                                show_OP_CODE = "64273C(足踝關節內、外或後踝之雙踝或三踝骨折開放性復位術)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 48){
                                show_OP_CODE = "83044B(脊椎融合術－前融合 2.有固定物(1)≦四節)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_CODE_Index2 == 49){
                                show_OP_CODE = "83046B(脊椎融合術－後融合 2.有固定物(1)≦六節)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_CODE); document.write("</strong>"+"</font>"+"</td>");
                            }
                        document.write("</tr>");

                        document.write("<tr>");
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"病患職業"+"</strong>"+"</font>"+"為:"); document.write("</td>");
                            if(occupation_Index2 == 0){
                                show_occupation = "未選擇";
                                document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write(show_occupation); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(occupation_Index2 == 1){
                                show_occupation = "無";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_occupation); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(occupation_Index2 == 2){
                                show_occupation = "退休";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_occupation); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(occupation_Index2 == 3){
                                show_occupation = "其他服務業";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_occupation); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(occupation_Index2 == 4){
                                show_occupation = "營建工程業";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_occupation); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(occupation_Index2 == 5){
                                show_occupation = "教育業";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_occupation); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(occupation_Index2 == 6){
                                show_occupation = "批發及零售業";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_occupation); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(occupation_Index2 == 7){
                                show_occupation = "醫療保健及社會工作服務業";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_occupation); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(occupation_Index2 == 8){
                                show_occupation = "其他職業";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_occupation); document.write("</strong>"+"</font>"+"</td>");
                            }
                        document.write("</tr>");

                        document.write("<tr>");
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"病患骨折位置"+"</strong>"+"</font>"+"為:"); document.write("</td>");
                            if(WHERE_Index2 == 0){
                                show_WHERE = "未選擇";
                                document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write(show_WHERE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(WHERE_Index2 == 1){
                                show_WHERE = "肱骨";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_WHERE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(WHERE_Index2 == 2){
                                show_WHERE = "鎖骨";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_WHERE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(WHERE_Index2 == 3){
                                show_WHERE = "橈骨 或 尺骨";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_WHERE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(WHERE_Index2 == 4){
                                show_WHERE = "股骨";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_WHERE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(WHERE_Index2 == 5){
                                show_WHERE = "髕骨";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_WHERE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(WHERE_Index2 == 6){
                                show_WHERE = "脛骨 或 腓骨";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_WHERE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(WHERE_Index2 == 7){
                                show_WHERE = "踝骨";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_WHERE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(WHERE_Index2 == 8){
                                show_WHERE = "脊椎 或 月狀骨";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_WHERE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(WHERE_Index2 == 9){
                                show_WHERE = "骨盆 或 髖臼";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_WHERE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(WHERE_Index2 == 10){
                                show_WHERE = "跟骨 或 蹠骨";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_WHERE); document.write("</strong>"+"</font>"+"</td>");
                            }
                        document.write("</tr>");

                        document.write("<tr>");
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"病患麻醉方式"+"</strong>"+"</font>"+"為:"); document.write("</td>");
                            if(ANESTHESIA_TYPE_Index2 == 0){
                                show_ANESTHESIA_TYPE = "未選擇";
                                document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write(show_ANESTHESIA_TYPE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(ANESTHESIA_TYPE_Index2 == 1){
                                show_ANESTHESIA_TYPE = "全身麻醉";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_ANESTHESIA_TYPE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(ANESTHESIA_TYPE_Index2 == 2){
                                show_ANESTHESIA_TYPE = "局部麻醉";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_ANESTHESIA_TYPE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(ANESTHESIA_TYPE_Index2 == 3){
                                show_ANESTHESIA_TYPE = "脊椎麻醉";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_ANESTHESIA_TYPE); document.write("</strong>"+"</font>"+"</td>");
                            }
                        document.write("</tr>");

                        document.write("<tr>");
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"病患來源"+"</strong>"+"</font>"+"為:"); document.write("</td>");
                            if(PATIENT_ORIGIN_Index2 == 0){
                                show_PATIENT_ORIGIN = "未選擇";
                                document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write(show_PATIENT_ORIGIN); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(PATIENT_ORIGIN_Index2 == 1){
                                show_PATIENT_ORIGIN = "住院病患";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_PATIENT_ORIGIN); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(PATIENT_ORIGIN_Index2 == 2){
                                show_PATIENT_ORIGIN = "門診病患";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_PATIENT_ORIGIN); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(PATIENT_ORIGIN_Index2 == 3){
                                show_PATIENT_ORIGIN = "急診病患";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_PATIENT_ORIGIN); document.write("</strong>"+"</font>"+"</td>");
                            }
                        document.write("</tr>");

                        document.write("<tr>");
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"手術方式"+"</strong>"+"</font>"+"為:"); document.write("</td>");
                            if(OP_TYPE_Index2 == 0){
                                show_OP_TYPE = "未選擇";
                                document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write(show_OP_TYPE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_TYPE_Index2 == 1){
                                show_OP_TYPE = "一般";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_TYPE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_TYPE_Index2 == 2){
                                show_OP_TYPE = "急件";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_TYPE); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(OP_TYPE_Index2 == 3){
                                show_OP_TYPE = "補送";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_OP_TYPE); document.write("</strong>"+"</font>"+"</td>");
                            }
                        document.write("</tr>");

                        document.write("<tr>");
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"手術前診斷"+"</strong>"+"</font>"+"為:"); document.write("</td>");
                            if(PRE_DIAG_Index2 == 0){
                                show_PRE_DIAG = "未選擇";
                                document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write(show_PRE_DIAG); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(PRE_DIAG_Index2 == 1){
                                show_PRE_DIAG = "前臂骨折(S52)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_PRE_DIAG); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(PRE_DIAG_Index2 == 2){
                                show_PRE_DIAG = "股骨骨折(S72)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_PRE_DIAG); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(PRE_DIAG_Index2 == 3){
                                show_PRE_DIAG = "小腿骨折(包含踝)(S82)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_PRE_DIAG); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(PRE_DIAG_Index2 == 4){
                                show_PRE_DIAG = "其他損傷(S10-S51,S53-S71,S73-S81,S83-T14,T79)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_PRE_DIAG); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(PRE_DIAG_Index2 == 5){
                                show_PRE_DIAG = "其於ICD-10代碼";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_PRE_DIAG); document.write("</strong>"+"</font>"+"</td>");
                            }
                        document.write("</tr>");

                        document.write("<tr>");
                            document.write("<td>"); document.write("您剛剛輸入的"+"<font color='#FF4500'>"+"<strong>"+"手術後診斷"+"</strong>"+"</font>"+"為:"); document.write("</td>");
                            if(POST_DIAG_Index2 == 0){
                                show_POST_DIAG = "未選擇";
                                document.write("<td>"+"<font color='#FF1493'>"+"<strong>");document.write(show_POST_DIAG); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(POST_DIAG_Index2 == 1){
                                show_POST_DIAG = "前臂骨折(S52)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_POST_DIAG); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(POST_DIAG_Index2 == 2){
                                show_POST_DIAG = "股骨骨折(S72)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_POST_DIAG); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(POST_DIAG_Index2 == 3){
                                show_POST_DIAG = "小腿骨折(包含踝)(S82)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_POST_DIAG); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(POST_DIAG_Index2 == 4){
                                show_POST_DIAG = "其他損傷(S10-S51,S53-S71,S73-S81,S83-T14,T79)";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_POST_DIAG); document.write("</strong>"+"</font>"+"</td>");
                            }
                            if(POST_DIAG_Index2 == 5){
                                show_POST_DIAG = "其於ICD-10代碼";
                                document.write("<td>"+"<font color='#228B22'>"+"<strong>");document.write(show_POST_DIAG); document.write("</strong>"+"</font>"+"</td>");
                            }
                        document.write("</tr>");
                        document.write("</table>");
                        //document.write("<body>");
                        document.write("<center>");
                            document.write("<input type='button' value='返回' onclick='ShowToday();'>")
                        document.write("</center>");
                        //document.write("</body>");
            })();
        };
        btn.addEventListener("click",handler);
    }
    </script>

        <body bgcolor="#ffe4e1">
            <div class="form">
            <hr/>
            <center>
                <table border="1">
                    <font color='#FF00FF'><sup>*</sup></font><strong><font color="#880000">為必填之欄位</font></strong>
                    <tr>
                        <td><strong><font color='#FF00FF'><sup>*</sup></font>病患年齡(Age):  </strong><input type="number" id="Age" placeholder = "Enter Age (ex:45)" min="0" ></input><strong> 歲 </strong></td>
                        <td><strong><font color='#FF00FF'><sup>*</sup></font>病患BMI(BMI):  </strong><input type="number" id="BMI" placeholder = "Enter BMI (ex:23.56)" min="0" step="0.01" ></input><strong> 體重(公斤) / ( 身高<sup>2</sup>(公尺<sup>2</sup>)  )</strong></td>
                    </tr>

                    <tr>
                        <td><strong><font color='#FF00FF'><sup>*</sup></font>病患體溫(Temperature): </strong><input type="number" id ="Temperature" placeholder = "Enter BMI (ex:36.5)" min="30" step="0.1"> </input><strong> <sup>。</sup>C</strong></td> 
                        <td><strong><font color='#FF00FF'><sup>*</sup></font>病患脈搏(Pulse):</strong><input type="number" id ="Pulse" placeholder = "Enter Pulse (ex:80)" min="0"> </input><strong> (次/分)</strong></td> 
                        <td><strong><font color='#FF00FF'><sup>*</sup></font>病患呼吸頻率(Respiration):</strong><input type="number" id ="Respiration" placeholder = "Enter Respiration (ex:20)" min="0" > </input> <strong> (次/分)</strong></td>
                    </tr>
                </table>
            </center>
            <br></br>
            <center>
                <table border="1">
                    <tr>
                        <td><strong><font color='#FF00FF'><sup>*</sup></font>病患白血球計數(wBC):</strong><input type="number" id ="wBC" placeholder = "Enter wBC (ex:13.5)" min="0" step="0.1"> </input> <strong> (10<sup>3</sup>/uL)</strong></td>
                        <td><strong><font color='#FF00FF'><sup>*</sup></font>病患血色素檢查(HEMOGLOBIN):</strong><input type="number" id ="HEMOGLOBIN" placeholder = "Enter HEMO (ex:12.1)" min="0" step="0.1"> </input> <strong> (g/uL)</strong></td>
                        <td><strong><font color='#FF00FF'><sup>*</sup></font>病患血球比容值測定(HCT):</strong><input type="number" id ="HCT" placeholder = "Enter HCT (ex:40.1)" min="0" step="0.1"> </input> <strong> (%)</strong></td>
                    </tr>

                    <tr>
                        <td><strong><font color='#FF00FF'><sup>*</sup></font>病患血小板計數(PLATELETS):</strong><input type="number" id ="PLATELETS" placeholder = "Enter wBC (ex:273)" min="0"> </input><strong> (10<sup>3</sup>/uL)</strong></td>
                        <td><strong><font color='#FF00FF'><sup>*</sup></font>病患血中尿素氮(BUN):</strong><input type="number" id ="BUN" placeholder = "Enter wBC (ex:13.9)" min="0" step="0.1"> </input><strong> (mg/dL)</strong></td>
                        <td><strong><font color='#FF00FF'><sup>*</sup></font>病患血液肌酐值(CREATININE):</strong><input type="number" id ="CREATININE" placeholder = "Enter wBC (ex:1.1)" min="0" step="0.1"> </input> <strong> (mg/dL)</strong> </td>
                    </tr>       
                </table>
            </center>
            <br></br>

            <center>
                <table border="1">
                    <tr>
                        <td>
                            <font color='#FF00FF'><sup>*</sup></font>
                            <strong>請選擇病患性別:</strong>
                                <select id = "GENDER" name= "GENDER">
                                    <option values="select_GENDER">請選擇病患性別</option>
                                    <option value="1">男性</option>
                                    <option value="0">女性</option>
                                </select>
                        </td>
                        
                        <td>
                            <font color='#FF00FF'><sup>*</sup></font>
                            <strong>請選擇病患骨折型態:</strong>
                                <select id = "fracture_type" name= "fracture_type">
                                    <option values="select_fracture_type">請選擇病患骨折型態</option>
                                    <option value="1">開放性骨折</option>
                                    <option value="0">閉鎖性骨折</option>
                                </select>
                        </td>

                        <td>
               
                            <font color='#FF00FF'><sup>*</sup></font>
                            <strong>請選擇病患疼痛指數:</strong>
                                <select id="painsco" name= "painsco">
                                    <option values="select_painsco">請選擇病患疼痛指數</option>
                                    <option value="0">疼痛指數0</option>
                                    <option value="1">疼痛指數1</option>
                                    <option value="2">疼痛指數2</option>
                                    <option value="3">疼痛指數3</option>
                                    <option value="4">疼痛指數4</option>
                                    <option value="5">疼痛指數5</option>
                                </select>
                        </td>
                    </tr>
                </table>
            </center>
            <br></br>

            <center>
                <table border="1">
            <tr>
                <td>
                <font color='#FF00FF'><sup>*</sup></font>
                <strong>請選擇病患手術代碼:</strong>
                    <select id= "OP_CODE" name= "OP_CODE">
                        <option values="select_OP_CODE">請選擇病患手術代碼</option>
                        <option value="420">48001C(淺部創傷處理 － 傷口長 小於5公分者)</option>
                        <option value="3043">48005C(深部複雜創傷處理 － 傷口長 5-10 公分者)</option>
                        <option value="4792">48006C(深部複雜創傷處理 － 傷口長 10 公分以上者)</option>
                        <option value="2445">48033C(深部複雜臉部創傷處理– 小5公分以內)</option>
                        <option value="3588">62016B(多層皮膚移植 － 每增加100平方公分)</option>
            
                        <option value="4018">64002B(骨或軟骨移植術)</option>
                        <option value="5852">64003C(骨髓炎之死骨切除術或蝶形手術及擴創術(包含指骨、掌骨、蹠骨）)</option>
                        <option value="5604">64015C(鎖骨骨折開放復位術)</option>
                        <option value="6057">64023B(四肢切斷術 － 小腿、上臂、前臂)</option>
                        <option value="11000">64028C(股骨幹骨折開放性復位術)</option>
            
                        <option value="12000">64029B(股骨頸骨折開放性復位術)</option>
                        <option value="10000">64031C(脛骨骨折開放性復位術)</option>
                        <option value="4938">64032B(橈骨、尺骨骨折開放性復位術)</option>
                        <option value="4480">64034B(膝蓋骨骨折開放性復位術)</option>
                        <option value="6720">64035C(腕、跗、掌、蹠骨骨折開放性復位術)</option>
                        
                        <option value="2845">64044C(前臂骨骨折徒手復位術)</option>
                        <option value="6373">64053B(急性化膿性關節炎切開術 － 肩關節、肘關節、腕關節、膝關節、踝關節)</option>
                        <option value="5834">64065B(肩關節脫位開放性復位術)</option>
                        <option value="6439">64067C(膝關節脫位開放性復位術)</option>
                        <option value="4331">64069C(踝關節脫位開放性復位術)</option>
                        
                        <option value="11154">64108B(下顎骨骨折開放性復位 ( 簡單 ))</option>
                        <option value="6491">64117C(跟腱斷裂縫合術)</option>
                        <option value="7070">64122B(肩旋轉袖破裂修補術 － 大破裂)</option>
                        <option value="4940">64128B(足踝韌帶修補術)</option>
                        <option value="5275">64133C(大腳趾外翻（ 截骨術 ）)</option>
                        
                        <option value="10560">64161B(骨盆骨折開放性復位術)</option>
                        <option value="19608">64162B(全股關節置換術)</option>
                        <option value="19608">64164B(全膝關節置換術)</option>
                        <option value="9035">64165B(全肘關節置換術)</option>
                        <option value="11500">64170B(部份關節置換術併整型術 － 只置換髖臼或股骨或半股關節或半肩關節)</option>
                        
                        <option value="7920">64175B(踝關節整形術)</option>
                        <option value="9040">64180B(膝關節固定術)</option>
                        <option value="8200">64183B(踝關節固定術)</option>
                        <option value="11830">64187B(十字韌帶重建術)</option>
                        <option value="7060">64188B(十字韌帶修補術)</option>
                        
                        <option value="5236">64195C(肌腱或韌帶完全切斷修補)</option>
                        <option value="8000">64239B(開放性或閉鎖性肱骨粗隆或骨幹或踝部骨折，開放性復位術)</option>
                        <option value="4827">64242B(橈骨頭切除術)</option>
                        <option value="8000">64244B(關節鏡手術 － 關節鏡下關節面磨平成形術，打洞，游離體或骨軟骨碎片取出手術)</option>
                        <option value="4182">64245C(骨內固定物拔除術 － 骨盆，髖骨，肱骨，股骨，尺骨，橈骨，脛骨)</option>
                        
                        <option value="3589">64247C(骨內固定物拔除術 － 其他部位)</option>
                        <option value="11500">64259B(半肩關節成形術)</option>
                        <option value="7640">64263B(膝關節半月軟骨修補術)</option>
                        <option value="15300">64266B(脊椎骨全部切除術)</option>
                        <option value="6000">64267C(舟狀骨骨折開放性復位術)</option>
                        
                        <option value="5691">64272C(腓外踝或脛內踝單一骨折開放性復位術)</option>
                        <option value="6376">64273C(足踝關節內、外或後踝之雙踝或三踝骨折開放性復位術)</option>
                        <option value="18992">83044B(脊椎融合術－前融合 2.有固定物(1)≦四節)</option>
                        <option value="19406">83046B(脊椎融合術－後融合 2.有固定物(1)≦六節)</option>
                    </select>
                </td>

                <td>
                <font color='#FF00FF'><sup>*</sup></font>
                    <strong>請選擇病患職業:</strong>
                    <select id="occupation" name= "occupation">
                        <option values="select_occupation">請選擇病患職業</option>
                        <option value=1,0,0,0,0,0,0,0>無</option>
                        <option value=0,1,0,0,0,0,0,0>退休</option>
                        <option value=0,0,1,0,0,0,0,0>其他服務業</option>
                        <option value=0,0,0,1,0,0,0,0>營建工程業</option> 
                        <option value=0,0,0,0,1,0,0,0>教育業</option>
                        <option value=0,0,0,0,0,1,0,0>批發及零售業</option> 
                        <option value=0,0,0,0,0,0,1,0>醫療保健及社會工作服務業</option>
                        <option value=0,0,0,0,0,0,0,1>其他職業</option>  
                    </select>
                </td>

                <td>
                <font color='#FF00FF'><sup>*</sup></font>
                    <strong>請選擇病患骨折位置:</strong>
                    <select id= "WHERE" name= "WHERE">
                        <option values="select_WHERE">請選擇病患骨折位置</option>
                        <option value=1,0,0,0,0,0,0,0,0,0>肱骨</option>
                        <option value=0,1,0,0,0,0,0,0,0,0>鎖骨</option>
                        <option value=0,0,1,0,0,0,0,0,0,0>橈骨 或 尺骨</option>
                        <option value=0,0,0,1,0,0,0,0,0,0>股骨</option>
                        <option value=0,0,0,0,1,0,0,0,0,0>髕骨</option>
                        <option value=0,0,0,0,0,1,0,0,0,0>脛骨 或 腓骨</option>
                        <option value=0,0,0,0,0,0,1,0,0,0>踝骨</option>
                        <option value=0,0,0,0,0,0,0,1,0,0>脊椎 或 月狀骨</option>
                        <option value=0,0,0,0,0,0,0,0,1,0>骨盆 或 髖臼</option>
                        <option value=0,0,0,0,0,0,0,0,0,1>跟骨 或 蹠骨</option> 
                    </select>
                </td>
            </tr>
            </table>

            </center>
            <br></br>
            <center>
                <table border="1">
                <tr>
                <td>
                <font color='#FF00FF'><sup>*</sup></font>
                    <strong>請選擇病患麻醉方式:</strong>
                    <select id= "ANESTHESIA_TYPE" name= "ANESTHESIA_TYPE">
                        <option values="select_ANESTHESIA_TYPE">請選擇病患麻醉方式</option>
                        <option value=1,0,0>全身麻醉</option>
                        <option value=0,1,0>局部麻醉</option>
                        <option value=0,0,1>脊椎麻醉</option> 
                    </select>
                </td>

                <td>
                <font color='#FF00FF'><sup>*</sup></font>
                    <strong>請選擇病患來源:</strong>
                    <select id= "PATIENT_ORIGIN" name= "PATIENT_ORIGIN">
                        <option values="select_PATIENT_ORIGIN">請選擇病患來源</option>
                        <option value=1,0,0>住院病患</option>
                        <option value=0,1,0>門診病患</option> 
                        <option value=0,0,1>急診病患</option> 
                    </select>
                </td>   

                <td>
                <font color='#FF00FF'><sup>*</sup></font>
                    <strong>請選擇手術方式:</strong>
                    <select id="OP_TYPE" name= "OP_TYPE">
                        <option values="select_OP_TYPE">請選擇手術方式</option>
                        <option value=1,0,0>一般</option>
                        <option value=0,1,0>急件</option> 
                        <option value=0,0,1>補送</option>
                    </select> 
                </td>
                </tr>
                </table>

            </center>
            <br></br>
            <center>
                <table border="1">
                <tr>
                <td>
                <font color='#FF00FF'><sup>*</sup></font>
                    <strong>請選擇手術前診斷ICD-10代碼:</strong>
                    <select id="PRE_DIAG" name= "PRE_DIAG">
                        <option values="select_PRE_DIAG">請選擇手術前診斷ICD-10代碼</option>
                        <option value=1,0,0,0,0>前臂骨折(S52)</option>
                        <option value=0,1,0,0,0>股骨骨折(S72)</option> 
                        <option value=0,0,1,0,0>小腿骨折(包含踝)(S82)</option>
                        <option value=0,0,0,1,0>其他損傷(S10-S51,S53-S71,S73-S81,S83-T14,T79)</option>
                        <option value=0,0,0,0,1>其於ICD-10代碼</option>  
                    </select>
                </td>

                <td>
                <font color='#FF00FF'><sup>*</sup></font>
                    <strong>請選擇手術後診斷ICD-10代碼:</strong>
                    <select id = "POST_DIAG" name= "POST_DIAG">
                        <option values="select_POST_DIAG">請選擇手術後診斷ICD-10代碼:</option>
                        <option value=1,0,0,0,0>前臂骨折(S52)</option>
                        <option value=0,1,0,0,0>股骨骨折(S72)</option> 
                        <option value=0,0,1,0,0>小腿骨折(包含踝)(S82)</option>
                        <option value=0,0,0,1,0>其他損傷(S10-S51,S53-S71,S73-S81,S83-T14,T79)</option>
                        <option value=0,0,0,0,1>其於ICD-10代碼</option>  
                    </select>
                </td>
                <tr>
                <table>
            </center>
            <br></br>
            <center>
            
            <table border="1">
            <tr>
                <td>
                    <form>
                    <input type="button" value="儲存於資料庫" onclick="send_data()" />
                    <span id = "response"></span>
                    </form>
                </td>
        
                <td>
                    <form method="post" action="export.php">
                        <input type="submit" name="export" value="匯出表單"/>
                    </form>
                </td>
            </tr>
            </table>
            </center>
  
        </body>
        <br></br>
        
        <body onload="init();">
            <center>
                <button id="btn">開始預測</button>
            </center> 
        </body>

        <center>
        <br>
            本設備為研究論文用。指導教授:段裘慶教授,<br> 
            研究生:黃 立。@國立台北科技大學網路應用實驗室
        </center>
    </head>
<html>