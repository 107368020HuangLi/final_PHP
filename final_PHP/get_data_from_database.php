<!DOCTYPE html>
<html>
    <head>
        <center><h1>運用機器學習於結構式病歷以預測骨科病患住院日數</h1></center>
        <meta http-equiv="Access-Control-Allow-Origin" content="*" />
        <meta charset="UTF-8"></meta>
        <title>運用機器學習於結構式病歷以預測骨科病患住院日數</title>
        <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@0.11.7"></script>

<script type="text/javascript" >
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "find_database.php";
    var asynchronous = true;

    ajax.open(method,url,asynchronous);
    ajax.send();

    ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.write("<body bgcolor='#ffe4e1'>");
            var data = JSON.parse(this.responseText);
            console.log(data);           
            var row_Age = data[0].age;
            var row_gender = data[0].gender;
            document.write(row_Age);
            document.write("<br>");
            document.write(row_gender);
            document.write("</body>");
            //window.location.href = "fff.html";
            
        }
    }

    // function init(){
    //     var btn = document.getElementById("btn");
    //     var handler = function(){
    //         (async () => {
    //                     const model = await tf.loadModel('./model_file0505/model.json'); 
    //                     final_output = model.predict(tf.tensor2d([parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
    //                                             parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
    //                                             parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
                                                
    //                                             parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
    //                                             parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
                                                
    //                                             parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
    //                                             parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
                                                
    //                                             parseFloat(0),parseFloat(0),parseFloat(0),
    //                                             parseFloat(0),parseFloat(0),parseFloat(0),
    //                                             parseFloat(0),parseFloat(0),parseFloat(0),

    //                                             parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
    //                                             parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0)
    //                                         ], [1,52])).dataSync();
    //             var final_output_string = String(final_output);
    //             var arr_final_output = final_output_string.split(","); 
    //                 document.write("<center><h2>"+"預測建議住院( 1 ~  3)天機率為: "+"<font color='#FF00FF'>"+ Math.round(parseFloat(arr_final_output[0])*100 * 10 ) / 10 +"%"+"</font>" +"</center></h2>"+"<br>");
    //                 document.write("<center><h2>"+"預測建議住院( 4 ~  7)天機率為: "+ Math.round(parseFloat(arr_final_output[1])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
    //                 document.write("<center><h2>"+"預測建議住院( 8 ~ 14)天機率為: "+ Math.round(parseFloat(arr_final_output[2])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
    //                 document.write("<center><h2>"+"預測建議住院(15 ~ 30)天機率為: "+ Math.round(parseFloat(arr_final_output[3])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
    //         })();
    //     };
    //     btn.addEventListener("click",handler);
    // }
</script>

<!-- <script type="text/javascript">
    function init(){
        var btn = document.getElementById("btn");
        var handler = function(){
            (async () => {
                        const model = await tf.loadModel('./model_file0505/model.json'); 
                        final_output = model.predict(tf.tensor2d([parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
                                                parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
                                                parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
                                                
                                                parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
                                                parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
                                                
                                                parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
                                                parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
                                                
                                                parseFloat(0),parseFloat(0),parseFloat(0),
                                                parseFloat(0),parseFloat(0),parseFloat(0),
                                                parseFloat(0),parseFloat(0),parseFloat(0),

                                                parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),
                                                parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0),parseFloat(0)
                                            ], [1,52])).dataSync();
                var final_output_string = String(final_output);
                var arr_final_output = final_output_string.split(","); 
                    document.write("<center><h2>"+"預測建議住院( 1 ~  3)天機率為: "+"<font color='#FF00FF'>"+ Math.round(parseFloat(arr_final_output[0])*100 * 10 ) / 10 +"%"+"</font>" +"</center></h2>"+"<br>");
                    document.write("<center><h2>"+"預測建議住院( 4 ~  7)天機率為: "+ Math.round(parseFloat(arr_final_output[1])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
                    document.write("<center><h2>"+"預測建議住院( 8 ~ 14)天機率為: "+ Math.round(parseFloat(arr_final_output[2])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
                    document.write("<center><h2>"+"預測建議住院(15 ~ 30)天機率為: "+ Math.round(parseFloat(arr_final_output[3])*100 * 10 ) / 10 +"%" +"</center></h2>"+"<br>");
            })();
        };
        btn.addEventListener("click",handler);
    }
</script> -->
</head>
<body onload="init();">
        <center>
            <button id="btn">開始預測</button>
            <!-- <button type="submit" id="btn2"><a href="get_data_from_database.php">計算介面</a></button> -->
        </center> 
</body>
</html>

