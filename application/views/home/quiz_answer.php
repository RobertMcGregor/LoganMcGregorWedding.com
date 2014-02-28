<?php /*
if($quiz_type == 'quiz'){?>

<h1>
	<?=($quiz_result)? 'Correct!' : 'Incorrect!' ?>

</h1>

<?php
}elseif($quiz_type == 'poll'){?>

sdjafhsjdfhlasjk

<?php
} */ ?>

<h1><?=$quiz_results[0]['question']?></h1>
<br />
<table class="answer_table">
<?php
foreach($quiz_results as $quiz_result){?>
	<tr <?=($quiz_result['correct'])?'class="positive_bg" style="color:black;"':''?>">
		<td><?=$quiz_result['answer_text']?></td>
		<td><?=$quiz_result['number_of_responses']?></td>
	</tr>
<?php
}?>
</table>
