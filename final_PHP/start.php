<html>
    <head>

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
    </script>
        
        <body bgcolor="#ffe4e1">
            <div class="form">
            <center><h1>運用機器學習於結構式病歷以預測骨科病患住院日數</h1></center>
            <hr/>
            <center>
                <table border="1">
                    <tr>
                        <td><strong>病患年齡(Age):  </strong><input type="number" id="Age" placeholder = "Enter Age (ex:45)" min="0" /></input><strong> 歲 </strong></td>
                        <td><strong>病患BMI(BMI):  </strong><input type="number" id="BMI" placeholder = "Enter BMI (ex:23.56)" min="0" step="0.01" /></input><strong> 體重(公斤) / ( 身高(公尺) * 身高(公尺) )</strong></td>
                    </tr>

                    <tr>
                        <td><strong>病患體溫(Temperature): </strong><input type="number" id ="Temperature" placeholder = "Enter BMI (ex:36.5)" min="30" step="0.1"> </input><strong> 度</strong></td> 
                        <td><strong>病患脈搏(Pulse):</strong><input type="number" id ="Pulse" placeholder = "Enter Pulse (ex:80)" min="0"> </input><strong> (次/分)</strong></td> 
                        <td><strong>病患呼吸頻率(Respiration):</strong><input type="number" id ="Respiration" placeholder = "Enter Respiration (ex:20)" min="0" > </input> <strong> (次/分)</strong></td>
                    </tr>
                </table>
            </center>
            <br></br>
            <center>
                <table border="1">
                    <tr>
                        <td><strong>病患白血球計數(wBC):</strong><input type="number" id ="wBC" placeholder = "Enter wBC (ex:13.5)" min="0" step="0.1"> </input> <strong> (1000/uL)</strong></td>
                        <td><strong>病患血色素檢查(HEMOGLOBIN):</strong><input type="number" id ="HEMOGLOBIN" placeholder = "Enter HEMO (ex:12.1)" min="0" step="0.1"> </input> <strong> (g/uL)</strong></td>
                        <td><strong>病患血球比容值測定(HCT):</strong><input type="number" id ="HCT" placeholder = "Enter HCT (ex:40.1)" min="0" step="0.1"> </input> <strong> (%)</strong></td>
                    </tr>

                    <tr>
                        <td><strong>病患血小板計數(PLATELETS):</strong><input type="number" id ="PLATELETS" placeholder = "Enter wBC (ex:273)" min="0"> </input><strong> (1000/uL)</strong></td>
                        <td><strong>病患血中尿素氮(BUN):</strong><input type="number" id ="BUN" placeholder = "Enter wBC (ex:13.9)" min="0" step="0.1"> </input><strong> (mg/dL)</strong></td>
                        <td><strong>病患血液肌酐值(CREATININE):</strong><input type="number" id ="CREATININE" placeholder = "Enter wBC (ex:1.1)" min="0" step="0.1"> </input> <strong> (mg/dL)</strong> </td>
                    </tr>       
                </table>
            </center>
            <br></br>
            <center>
                <table border="1">
                        <strong>請選擇病患性別:</strong>
                        <select id = "GENDER" name= "GENDER">
                            <option values="select_GENDER">請選擇病患性別</option>
                            <option value="1">男性</option>
                            <option value="0">女性</option>
                        </select>
                </table>
            </center>
            <br></br>
            <center>
                <table border="1">
                        <strong>請選擇病患骨折型態:</strong>
                        <select id = "fracture_type" name= "fracture_type">
                            <option values="select_fracture_type">請選擇病患骨折型態</option>
                            <option value="1">開放性骨折</option>
                            <option value="0">閉鎖性骨折</option>
                        </select>
                </table>
            </center>
            <br></br>
            <center>
                <table border="1">
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
                </table>
            </center>
            <br></br>
            <center>
                <table border="1">
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
                </table>
            </center>
            <br></br>
            <center>
                <table border="1">
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
                </table>
            </center>
            <br></br>
            <center>
                <table border="1">
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
                </table>
            </center>
            <br></br>
            <center>
                <table border="1">
                    <strong>請選擇病患麻醉方式:</strong>
                    <select id= "ANESTHESIA_TYPE" name= "ANESTHESIA_TYPE">
                        <option values="select_ANESTHESIA_TYPE">請選擇病患麻醉方式</option>
                        <option value=1,0,0>全身麻醉</option>
                        <option value=0,1,0>局部麻醉</option>
                        <option value=0,0,1>脊椎麻醉</option> 
                    </select>
                </table>
            </center>
            <br></br>
            <center>
                <table border="1">
                    <strong>請選擇病患來源:</strong>
                    <select id= "PATIENT_ORIGIN" name= "PATIENT_ORIGIN">
                        <option values="select_PATIENT_ORIGIN">請選擇病患來源</option>
                        <option value=1,0,0>住院病患</option>
                        <option value=0,1,0>門診病患</option> 
                        <option value=0,0,1>急診病患</option> 
                    </select>
                </table>   
            </center>
            <br></br>
            <center>
                <table border="1">
                    <strong>請選擇手術方式:</strong>
                    <select id="OP_TYPE" name= "OP_TYPE">
                        <option values="select_OP_TYPE">請選擇手術方式</option>
                        <option value=1,0,0>一般</option>
                        <option value=0,1,0>急件</option> 
                        <option value=0,0,1>補送</option>
                    </select> 
                </table>
            </center>
            <br></br>
            <center>
                <table border="1">
                    <strong>請選擇手術前診斷ICD-10代碼:</strong>
                    <select id="PRE_DIAG" name= "PRE_DIAG">
                        <option values="select_PRE_DIAG">請選擇手術前診斷ICD-10代碼</option>
                        <option value=1,0,0,0,0>前臂骨折(S52)</option>
                        <option value=0,1,0,0,0>股骨骨折(S72)</option> 
                        <option value=0,0,1,0,0>小腿骨折(包含踝)(S82)</option>
                        <option value=0,0,0,1,0>其他損傷(S10-S51,S53-S71,S73-S81,S83-T14,T79)</option>
                        <option value=0,0,0,0,1>其於ICD-10代碼</option>  
                    </select>
                </table>
            </center>
            <br></br>
            <center>
                <table border="1">
                    <strong>請選擇手術後診斷ICD-10代碼:</strong>
                    <select id = "POST_DIAG" name= "POST_DIAG">
                        <option values="select_POST_DIAG">請選擇手術後診斷ICD-10代碼:</option>
                        <option value=1,0,0,0,0>前臂骨折(S52)</option>
                        <option value=0,1,0,0,0>股骨骨折(S72)</option> 
                        <option value=0,0,1,0,0>小腿骨折(包含踝)(S82)</option>
                        <option value=0,0,0,1,0>其他損傷(S10-S51,S53-S71,S73-S81,S83-T14,T79)</option>
                        <option value=0,0,0,0,1>其於ICD-10代碼</option>  
                    </select>
                </table>
            </center>
            <center>
            <br/>
            <input type="button" value="儲存於資料庫" onclick="send_data()" /><br/>
            <span id = "response"></span>
            <br>
            <button type="submit" id="btn2"><a href="get_data_from_database.php">計算介面</a></button>
            </center>
            <div>
        </body>
        <center>
        <br>
            本設備為研究論文用。指導教授:段裘慶教授,<br> 
            研究生:黃 立。@國立台北科技大學網路應用實驗室
        </center>
    </head>
<html>