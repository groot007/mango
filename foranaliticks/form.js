$( document ).ready(function() {
	$(".price-form-wrap").find("input[type=submit]").val("Узнать");
	$(".price-form-wrap").find("input#desc").hide();
    $(".mainform").submit(function(e){
        e.preventDefault();
    var $this = $(this);
    var data ={};
    $this.find('input').each(function(){
        var $el = $(this);
        var key =$el.attr('name');
        if(key){
            data[key]=$el.val();
        }
        });
	
	var specform_id = $this.parent().data('id');
	$(".mainform select[name=specform] option")[specform_id].getAttribute("value");
    var selected_lead = $this.find('select[name=leadsource]').find('option[selected]').val();
    data.leadsource = selected_lead;
	var selected_spec = $(".mainform select[name=specform] option")[specform_id].getAttribute("value");
    data.specform = selected_spec;
    var formURL = $(this).attr("action");
	var messAddr = 'thankyou/masseg_ok.php';
    $.post(formURL, data)
    .done(function(){
        $('input').attr('disabled','disabled');
        $("input[type=submit]").val("Спасибо за заявку!");
        $("#success-ajax").modal('show');
        
        
        console.log(data);
        })
    .fail(function(){
        alert('not good');
    });
	$.post(messAddr, data)
	.done(function(){
		
		console.log('sent');
		})
	.fail(function(){
		console.log('wronk');
		});
   
    
     //STOP default action
    return false;
});
 

});