<div id="banner">
	<div id="banner_buttons">
    	<table>
        	<tr>
            	<?php $flag=0;
				foreach ($banners as $i => $banner) {
					if ($flag==0) $flag++;
					else echo "<td>&nbsp;</td>";
					?><td id="btn<?=$i?>" class="banner_button banner_<?=$banner['code']?>">
						<?=$banner['title']?>
                    </td><?php
				} ?>
            </tr>
        </table>
    </div>
    
    <?=vspace(20)?>
    
    <div id="banners">
    	<?php foreach ($banners as $banner) { ?>
        	<div id="banner_<?=$banner['code']?>" class="banner">
            	<?=$banner['content']?>
            </div>
        <?php } ?>
    </div>
</div>

<script type="text/javascript">
$(document).ready( function() {
	$("#banners").cycle({
		delay: 3000,
		timeout: 6000,
		pause: 1,
		before: function (currSlideElement, nextSlideElement, options, forwardFlag) {
			$(".banner_button").removeClass("on");
			$(".banner_button."+nextSlideElement.id).addClass("on");
		}
	});
	
	$(".banner_button").click( function () {
		$("#banners").cycle(parseInt($(this).attr("id").charAt(3)));
	});
});

$("#btn0").addClass("on");
</script>