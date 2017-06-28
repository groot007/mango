
<style>






#menu.default {
    display: none;}
#menu.fixed {background-color: rgba(255, 0, 0, 0);
position:fixed;
 bottom:30; right:50;z-index: 1000;

}






</style>



<script type="text/javascript"


<script>
$(document).ready(function(){

        var $menu = $("#menu");
       $(window).scroll(function(){
            if ( $(this).scrollTop() > 800 && $menu.hasClass("default") ){

                $menu.removeClass("default").addClass("fixed");
            } else if($(this).scrollTop() <= 800 && $menu.hasClass("fixed")) {

                $menu.removeClass("fixed").addClass("default");
            }
        });//scroll
    });</script>





 <div  id="menu" class="default panel  wow pulse" >  <a class="btn btn-primary" href="#myModal" data-toggle="modal"><img src="./img/phone-button.jpg" alt="">Заказать звонок</a>
 </div>
			
     <!-- HTML-код модального окна -->
<div id="myModal" class="modal fade">
	
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Заголовок модального окна -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Отправьте свой телефонный номер, и мы Вам перезвоним!</h4>
      </div>
      <!-- Основное содержимое модального окна -->
      <div class="modal-body">
			
        <div data-id="0"><? include('mainforms.php'); ?></div>
      </div>
      <!-- Футер модального окна 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>-->
    </div>
  </div>
</div>

<div id="myModal2" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Заголовок модального окна -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Отправьте свой телефонный номер и мы Вам перезвоним!</h4>
      </div>
      <!-- Основное содержимое модального окна -->
      <div class="modal-body">
        <div data-id="4"><? include('mainforms.php'); ?></div>
      <!-- Футер модального окна 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>-->
    </div>
  </div>
</div>
</div>
<style>
	#success-ajax .modal-body{
		min-height:250px;
    padding: 35px;
	}
</style>
<div id="success-ajax" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Заголовок модального окна -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title"></h4>
      </div>
      <!-- Основное содержимое модального окна -->
      <div class="modal-body text-center">
        <h2>Ваша форма отправлена</h2>
		<h4>Вскоре с вами свяжутся</h4>
      <!-- Футер модального окна 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>-->
    </div>
  </div>
</div>
</div>
