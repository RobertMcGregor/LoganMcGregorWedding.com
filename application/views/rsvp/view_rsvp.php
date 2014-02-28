
<div id="rsvp-outter">
	<div id="rsvp-inner">

		<div class="rsvp-content">
			
			<br/>
		
			</p>

			<form action="http://www.logan-mcgregor-wedding.com/rsvp/check_guest" method="post" id="check_guest_form" >
		
				
				<table>
					<tr>
						<td> 
							<?php 
							if($first_name && $last_name){?>
								
								<input type="hidden" name="first_name" value="<?=$first_name?>"/>
								<input type="hidden" name="last_name" value="<?=$last_name?>"/>
								
								<h1>Welcome <?=$first_name?></h1>
								
							<?php 
							}else{?>
								
								<h1>Welcome </h1>
								
								<table>
									<tr>
										<td colspan=2>
											
											<p>
												To make sure you are on our guest list. Please enter your first and last name.
											</p>
										</td>
									</tr>
									<tr>
										<td>First name &nbsp;&nbsp;&nbsp;</td>
										<td><input type="text" name="first_name" class='required'/></td>
									</tr>
									<tr>
										<td>Last name &nbsp;&nbsp;&nbsp;</td>
										<td><input type="text" name="last_name" class="required"/></td>
									</tr>
								</table>
								
							<?php
							}?>
						</td>
					</tr>
					<tr>
						<td>
							<br/>
							<br/>
							<input type="submit" value="Proceed"/>
						</td>
					</tr>
				</table>

			</form>
			
		</div>
		
	</div>
</div>

<script>

	$(document).ready(function() { 

		$("#check_guest_form").validate();

		$('#check_guest_form').ajaxForm({ 
			success: addForm
		});

	});

  function addForm(results) { 
		$('#check_guest_form').css({opacity:0.2}).load('http://www.logan-mcgregor-wedding.com/rsvp/rsvp_form?no_css=1&no_footer', function() {
			$(this).css({opacity:1}); 
		});
  }


</script>
  
	
  

