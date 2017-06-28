





<script type="text/javascript" src="http://scriptjava.net/source/scriptjava/scriptjava.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>

<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter30320717 = new Ya.Metrika({
                    id:30320717,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
                // alert(w.yaCounter30320717.getClientID()); 
                $$a({
                    type:'post',//тип запроса: get,post либо head
                    url:'ajaxclientID.php',//url адрес файла обработчика
                    
                    data:{'z':yaCounter30320717.getClientID()},//параметры запроса
                    response:'text',//тип возвращаемого ответа text либо xml
                    success:function (data) {//возвращаемый результат от сервера
                        $$('result',$$('result').innerHTML+'<br />'+data);
                    }
                });
            } catch(e) { }
        });
 
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
    
  //  function SendPost() {
    //отправляю POST запрос и получаю ответ

// }


</script>

<body>
<div id="result">Тут будет ответ от сервера</div><br /><br />


<?php
$fd = fopen("clientid.txt", 'r') or die("не удалось открыть файл");
while(!feof($fd))
{
    $str = htmlentities(fgets($fd));
 //   echo $str;
}
fclose($fd);

?>


	
