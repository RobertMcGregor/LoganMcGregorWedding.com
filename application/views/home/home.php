<script>

jQuery(function(){
	var myNew3DTransition = {};
	$("#slider").chopSlider({
		/* Slide Element */
		slide : ".slide",
		/* Controlers */
		nextTrigger : "a#slide-next",
		prevTrigger : "a#slide-prev",
		hideTriggers : true,
		sliderPagination : ".slider-pagination",
		/* Captions */
		useCaptions : false,
		everyCaptionIn : ".sl-descr",
		showCaptionIn : ".caption",
		captionTransform : "scale(0) translate(-600px,0px) rotate(45deg)",
		/* Autoplay */
		autoplay : true,
		autoplayDelay : 6000,
		/* Default Parameters */
		t2D : csTransitions['vertical'][1],
		/* Extend the previous transition */
		t3D: $.extend(
			myNew3DTransition , 
			csTransitions['vertical'][1],
			{
				type: "multiFlipV",
				hPieces:1,
				multiDelay:"linear"	
			}
		),
		onStart: function(){ /* Do Something*/ },
		onEnd: function(){ /* Do Something*/ }
	})
})


$(document).ready(function() { 
		
	$('.quiz').ajaxForm({ 
		
		success: showResult
	});

});

function showResult(results) { 
	//alert(results.wedding_quiz_questions_id);
	$('#quiz_item'+results.wedding_quiz_questions_id).css({opacity:0.2}).load('http://www.logan-mcgregor-wedding.com/home/quiz_answer?answer_result='+results.answer_result+'&wedding_quiz_questions_id='+results.wedding_quiz_questions_id+'&quiz_type='+results.quiz_type, function() {
		$(this).css({opacity:1}); 
	});
}


</script>


<div id="home-outter">
	<div id="home-inner">
		
		<div id="slider-wrapper">
			<div id="slider-wrapper-inner">
			
				<div class="wrapper">
					<div class="s-shadow-b"></div>
					<a id="slide-next" href="#"></a> 
					<a id="slide-prev" href="#"></a>
					
					<div id="slider">
						<div class="slide cs-activeSlide"> <img src="<?=IMG?>home/slider/1.jpg" width="600" height="250" alt="slide1" /> </div>
						<div class="slide"> <img src="<?=IMG?>home/slider/2.jpg" width="600" height="250" alt="slide2" /> </div>
						<div class="slide"> <img src="<?=IMG?>home/slider/3.jpg" width="600" height="250" alt="slide3" /> </div>
						<div class="slide"> <img src="<?=IMG?>home/slider/4.jpg" width="600" height="250" alt="slide4" /> </div>
						<div class="slide"> <img src="<?=IMG?>home/slider/5.jpg" width="600" height="250" alt="slide5" /> </div>
					</div>
					<div class="pagination"> 
						<span class="slider-pagination"></span> 
						<span class="slider-pagination"></span> 
						<span class="slider-pagination"></span> 
						<span class="slider-pagination"></span> 
						<span class="slider-pagination"></span> 
					</div>
					<div class="slide-descriptions">
						<div class="sl-descr">First Slide Caption</div>
						<div class="sl-descr">Second Slide Caption</div>
						<div class="sl-descr">Third Slide Caption</div>
						<div class="sl-descr">Fourth Slide Caption</div>
						<div class="sl-descr">Fourth Slide Caption</div>
					</div>
					<div class="caption"></div>
				</div>
				
			</div>
		</div>

		<div class="home-content">
				<div id="home-content-inner">
				<p>
					<strong>Hello <?=(isset($name))?$name.'!':'everyone!'?></strong>
					<br />
					<br />
					Thanks for visiting our wedding website. We have quizzes and all sorts of fun stuff on this thing. 
					<br />
					<br />
					We made this thing from scratch so if you notice any errors or anything please blame your computer, just kidding. Please let us know and we will fix the problem. Yuo never know it may be a great conversation starter :)
					<br />
					<br />
					The ceremony will be taking place in the chaple at the Old Mill at 7pm. A reception in room Brulé Room A of the old mill will follow. For more information click <a href="http://www.logan-mcgregor-wedding.com/event">here</a> 
					<br />
					<br />
					Enjoy surfing! 
					<br />
					~ Love Kristine and Robert
					<br />
					<br />
				</p>

				<hr>
				<br />
				<br />
				<table >
					<tr >
						<?php 
						$quiz_item = array();
						$current_wedding_quiz_questions_id = '';
						for($i = 0;$i < sizeof($quiz); $i++ ){
							
							$quiz_item = $quiz[$i];
							
							if($quiz[$i]['wedding_quiz_questions_id'] != $current_wedding_quiz_questions_id){?>
								<td class="quiz_item" id="quiz_item<?=$quiz_item['wedding_quiz_questions_id']?>">
									<div class='quiz_question_div'><?=$quiz_item['question']?></div>
									<br />
									<form action="http://www.logan-mcgregor-wedding.com/home/process_quiz_answer" method="post" class="quiz" >
									<input type="hidden" value="<?=$quiz_item['wedding_quiz_questions_id']?>" name="wedding_quiz_questions_id" />
									<input type="hidden" value="quiz" name="quiz_type" />
							<?php
							$current_wedding_quiz_questions_id = $quiz_item['wedding_quiz_questions_id'];
							}?>
							
								<input type="radio" name="answer_result" value="<?=$quiz_item['qid']?>" id="radio-<?=$quiz_item['qid']?>" > 
								<label for="radio-<?=$quiz_item['qid']?>" ><?=$quiz_item['answer_text']?></label>
								<br />

							<?php
							if(isset($quiz[$i + 1]) && $i > 2 && $quiz[$i + 1]['wedding_quiz_questions_id'] != $current_wedding_quiz_questions_id){?>
										<input type="submit" value="submit">
									</form>
								</td>

							<?php
							}elseif(!isset($quiz[$i + 1])){?>
										<input type="submit" value="submit">
									</form>
								</td>

							<?php
							}//end if
						}//end for?>								
					</tr>
				</table>

				<br />
				<br />
				<table >
					<tr >
						<?php 
						$poll_item = array();
						$current_wedding_poll_questions_id = '';
						for($i = 0;$i < sizeof($poll); $i++ ){
							
							$poll_item = $poll[$i];
							
							if($poll[$i]['wedding_quiz_questions_id'] != $current_wedding_poll_questions_id){?>
								<td class="quiz_item" id="quiz_item<?=$poll_item['wedding_quiz_questions_id']?>">
									<div class='quiz_question_div'><?=$poll_item['question']?></div>
									<br />
									<form action="http://www.logan-mcgregor-wedding.com/home/process_quiz_answer" method="post" class="quiz" >
									<input type="hidden" value="<?=$poll_item['wedding_quiz_questions_id']?>" name="wedding_quiz_questions_id" />
									<input type="hidden" value="poll" name="quiz_type" />
							<?php
							$current_wedding_poll_questions_id = $poll_item['wedding_quiz_questions_id'];
							}?>
							
								<input type="radio" name="answer_result" value="<?=$poll_item['qid']?>" id="radio-<?=$poll_item['qid']?>" > 
								<label for="radio-<?=$poll_item['qid']?>" ><?=$poll_item['answer_text']?></label>
								<br />

							<?php
							if(isset($poll[$i + 1]) && $i > 2 && $poll[$i + 1]['wedding_quiz_questions_id'] != $current_wedding_poll_questions_id){?>
										<input type="submit" value="submit">
									</form>
								</td>

							<?php
							}elseif(!isset($poll[$i + 1])){?>
										<input type="submit" value="submit">
									</form>
								</td>

							<?php
							}//end if
						}//end for?>								
					</tr>
				</table>
				
		
			</div>
			
		</div> <!-- home-content -->
		
	</div> <!-- home inner-->
</div> <!-- home outter-->


