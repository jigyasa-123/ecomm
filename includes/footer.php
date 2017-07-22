</div><br><br>
<div class="col-md-12 text-center">&copy; Copyright 2013-2017 Shaunta's Boutique </div>
<script>
jQuery(window).scroll(function(){
  var vscroll=jQuery(this).scrollTop();
  jQuery('#logotext').css({
      "transform":"translate(0px,"+vscroll/2+"px)"
      });
  });
function detailsmodal(id){
	var data = {"id":id};
	jQuery.ajax({
		url: '/ecomm/includes/detailsmodal.php',
		method:"post",
		data:data,
		success:function(data){
			jQuery('body').append(data);
			jQuery('#details-modal').modal('toggle');
			},
		errotr:function(){
			alert('something went wrong');
			}
		});
	}
</script>
</body>
</html> 
