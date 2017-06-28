<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<style>
    #desc{
        display: none;
    }
    #myModal2 input[name="description"]{
        display: block;
    }
    #myModal2 input[name="firstname"]{
        display: none;
    }
</style>
<form name="mainforms" 	action="post.php" class="mainform" id="modalform" method="POST" accept-charset="utf-8" enctype="multipart/form-data" >
    
<input type="hidden" name="publicid" value="e6633f2aebb3faa63040fa00fc4e981c">
<input type="hidden" name="name" value="mainforms">
<input type="hidden" name="VTIGER_RECAPTCHA_PUBLIC_KEY" value="RECAPTCHA PUBLIC KEY FOR THIS DOMAIN">
<input type="hidden" name="lastname" value="" >
<input type="text" class="form-control" name="firstname"  required="" value="" placeholder="Имя"> 
<input type="text" class="form-control" name="mobile" value=""  required="" placeholder="Телефон">
<input type="text" id="desc" name="description" class="form-control"  value=""    style="border: 1px solid green;background-color: white;font-size: 28px;" placeholder="Ваш вопрос">
<input type="hidden" name="city" value="<?echo $get_city ?>">
<input type="hidden" name="adcamp" value="<?echo $get_campaign;?>">
<input type="hidden" name="source" value="<?echo $get_source;?>">
<input type="hidden" name="keyword" value="<?echo $get_term;?>">
<select hidden name="leadsource">
 <option value="">Выберите значение</option>
                                               
                                                <option value="Конденсаторный лендинг">Конденсаторный лендинг</option>
                                                <option selected=""  value="Лендинг Бочки">Лендинг Фитобочки</option>
                                                <option value="Лендинг дроссель">Лендинг дроссель</option>
                                                <option value="Лендинг электрощи">Лендинг электрощи</option>
                              </select>
                                            <select name="specform" hidden="">
                                                <option  value="Заказать в шапке">Заказать в шапке</option>
                                                <option  value="Первый экран">Первый экран</option>
                                                <option  value="Хочу дешевле">Хочу дешевле</option>
                                                <option  value="Вторая форма сайта">Вторая форма сайта</option>
                                                <option  value="Алене">Алене</option>
                                                <option  value="Третья форма сайта">Третья форма сайта</option>
                                            </select>

<input type="submit" class="btn btn-default" value="Закзать рекламу">
</form>
<script  type="text/javascript">window.onload = function() { var N=navigator.appName, ua=navigator.userAgent, tem;var M=ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];M=M? [M[1], M[2]]: [N, navigator.appVersion, "-?"];var browserName = M[0];var form = document.forms[0], inputs = form.elements; form.onsubmit = function() { var required = [], att, val; for (var i = 0; i < inputs.length; i++) { att = inputs[i].getAttribute("required"); val = inputs[i].value; type = inputs[i].type; if(type == "email") {if(val != "") {var elemLabel = inputs[i].getAttribute("label");var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;var illegalChars= /[\(\)\<\>\,\;\:\"\[\]]/ ;if (!emailFilter.test(val)) {alert("For "+ elemLabel +" field please enter valid email address"); return false;} else if (val.match(illegalChars)) {alert(elemLabel +" field contains illegal characters");return false;}}}if (att != null) { if (val.replace(/^\s+|\s+$/g, "") == "") { required.push(inputs[i].getAttribute("label")); } } } if (required.length > 0) { alert("The following fields are required: " + required.join()); return false; } var numberTypeInputs = document.querySelectorAll("input[type=number]");for (var i = 0; i < numberTypeInputs.length; i++) { val = numberTypeInputs[i].value;var elemLabel = numberTypeInputs[i].getAttribute("label");if(val != "") {var intRegex = /^[+-]?\d+$/;if (!intRegex.test(val)) {alert("For "+ elemLabel +" field please enter valid number"); return false;}}}}; }</script>
