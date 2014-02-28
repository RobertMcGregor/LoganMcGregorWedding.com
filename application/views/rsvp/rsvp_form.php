<?php session_start();?>

<form action="http://www.logan-mcgregor-wedding.com/rsvp/add_guest" method="post" id="add_guest_form">

	<?php
	if($_SESSION['guest_list_id']){?>

	<input type="hidden" name="guest_list_id" value="<?=$_SESSION['guest_list_id']?>"/>	
	<table>
		<tr>
			<td> Will you be attending our wedding? </td>
		</tr>
		<tr>
			<td> 
				<label for="attending_yes">Yes</label>
				<input type="radio" name="attending" value="1" class="required" id="attending_yes"> 
			</td>
		</tr>
		<tr>
			<td>
				<label for="attending_yes">No</label>
				<input type="radio" name="attending" value="0" class="required" id="attending_no"> 
			</td>
		</tr>
	</table>
	
	<?php
	if($_SESSION['guest_list_childrens_names']){?>
	
	<br />
	<table>
		<tr>
			<td> Will <?=$_SESSION['guest_list_childrens_names']?> be joining you? </td>
		</tr>
		<tr>
			<td> 
				<label for="children_attending_yes">Yes</label>
				<input type="radio" name="children_attending" value="1" class="required" id="children_attending_yes"> 
			</td>
		</tr>
		<tr>
			<td>
				<label for="children_attending_no">No</label>
				<input type="radio" name="children_attending" value="0" class="required" id="children_attending_no"> 
			</td>
		</tr>
	</table>
	
	<?php
	}else{?>
	
			<input type="hidden" name="children_attending" value="0"/>
	
	<?php
	}?>
	
	<br />	
	
	<table>
		<tr>
			<td> 
				If you have any food allergies or food preferences please let us know. 
				<br />
				<textarea rows="2" name="food_needs" cols="20" ></textarea>
			</td>
		</tr>
	</table>
	
	<br />
	
	<table>
		<tr>
			<td> 
				Comments
				<br />
				<textarea rows="2" name="comments" cols="20" ></textarea>
			</td>
		</tr>
	</table>
	
	<br />
	
	<table>
		<tr>
			<td> <input type="submit" value="Proceed"/> </td>
		</tr>
	</table>

	<?php
	}else{?>

	Your name was not found on our guest list. 
	<br />
	<br />
	Dont worry your name may still be on it. We forget things sometimes (we have kids). To make sure we did not leave you out please email <a href="mailto:dad@damianmcgregor.com">dad@damianmcgregor.com</a> and we will be sure to respond proptly

	<?php
	}?>
	
</form>

<script>

	$(document).ready(function() { 

		$("#add_guest_form").validate();

		$('#add_guest_form').ajaxForm({ 
			success: addForm
		});

	});

  function addForm(results) { 
		$('#add_guest_form').css({opacity:0.2}).load('http://www.logan-mcgregor-wedding.com/rsvp/thank_you?no_css=1&no_footer', function() {
			$(this).css({opacity:1}); 
		});
  }


</script>
