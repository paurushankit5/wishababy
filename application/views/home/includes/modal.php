 
<div id="getaquote" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Get A Quote</h4>
      </div>
      <div class="modal-body">
		<div id="quotemsg"></div>
        <form class="from-horizontal"" id="quoteform"">
			<div class="form-group">
				<textarea class="form-control" id="quote_message" placeholder="Enter Your Requirements"></textarea>
			</div>
			<div class="form-group">
				<input type="text" id="quote_name" class="form-control" placeholder="Name"/>
			</div>
			<div class="form-group">
				<input type="text" id="quote_email" class="form-control" placeholder="Email"/>
			</div>
			<div class="form-group">
				<input type="text" id="quote_mobile" class="form-control" placeholder="Mobile"/>
			</div>
			
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onClick="getaquote();">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  
<script>
	function getaquote()
	{
		var quote_name	=	$('#quote_name').val();
		var quote_email	=	$('#quote_email').val();
		var quote_mobile=	$('#quote_mobile').val();
		var quote_message	=	$('#quote_message').val();
		if(quote_name=='')
		{
			$('#quotemsg').fadeIn().html('<div class="alert alert-warning">Please Enter your name.</div>').delay(2000).fadeOut();
		}
		else if(quote_email=='')
		{
			$('#quotemsg').fadeIn().html('<div class="alert alert-warning">Please Enter your email.</div>').delay(2000).fadeOut();
		}
		else if(quote_mobile=='')
		{
			$('#quotemsg').fadeIn().html('<div class="alert alert-warning">Please Enter your mobile number.</div>').delay(2000).fadeOut();
		}
		else if(quote_message=='')
		{
			$('#quotemsg').fadeIn().html('<div class="alert alert-warning">Please Enter your message.</div>').delay(2000).fadeOut();
		}
		else
		{
			$.ajax({
				type	:	'POST',
				url		:	'<?= base_url('home/storequote');?>',
				data	:	{
							'quote_name'	:	quote_name,
							'quote_email'	:	quote_email,
							'quote_mobile'	:	quote_mobile,
							'quote_message'	:	quote_message,
				},
				beforeSend : function(){$('#loadingDiv').show();},
				success	:	function(data){
					data	=	data.trim();
					$('#loadingDiv').hide();
					if(data==1)
					{
						$('#quotemsg').fadeIn().html('<div class="alert alert-success">We recieved your request. We will get back to you soon.</div>').delay(4000).fadeOut();

					}
					else
					{
						$('#quotemsg').fadeIn().html('<div class="alert alert-warning">We are facing some technical issue. Please try after some time.</div>').delay(4000).fadeOut();
					}
					setTimeout(function(){$('#getaquote').modal('toggle');},4000);
					$('#quoteform').trigger('reset');
					//$('#getaquote').toggle();
				}
				
			});
		}
		
		
	}
</script>

<!-------------------------Rating Modal---------------------->

<div id="searchbyname" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">         
        <h4 class="modal-title">Search Clinic/Expert by Name</h4>
      </div>
      <div class="modal-body">
		 
        <form class="from-horizontal" action="<?= base_url('search/findmembers');?>">
			<div class="form-group">
				<input type="text" minlength="4" autocomplete="on" required id="search_clinic_expert_name" onkeyup="showclinicexperthint(this);" list="clinicexpertname" name="clinicexpertname"  class="form-control" placeholder="Name"/>
				<datalist id="clinicexpertname">
					 
				</datalist>
			</div>
			 
			
		
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Search</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>

  </div>
</div>

<!-------------------------Rating Modal---------------------->
<script>
	function showclinicexperthint(a){
		//console.log($(a).val());

		var str = $(a).val();
		str= str.trim();
		if(str.length>3)
		{
			$.ajax({
				type : 'POST',
				url  : '<?= base_url('home/showclinicexpertname');?>',
				data : 'name='+str,
				success : function(data){
					data = data.trim();
					$('#clinicexpertname').html(data); 
					$('#clinicexpertname2').html(data); 
				}
			});
		}
	}
</script>







