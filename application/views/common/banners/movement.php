<a class="like_weday" href="http://www.facebook.com/weday" target="_blank"><img src="<?=IMG?>banner/like-weday.jpg" alt="Like We Day on Facebook" /></a>
<div class="subscribe">
	<img src="<?=IMG?>subscribe-logo.png" alt="" style="position: absolute; top: 0; right: 0; z-index: 5;" />
    <img src="<?=IMG?>banner/stay-connected-text.png" alt="" style="position: absolute; bottom: 0; right: 0; z-index: 5;" />
    <div class="subscribe_inner">
    	<div class="signup">
        	<form name="newsletter_signup" id="newsletter_signup" method="post" action="<?=WEBROOT?>forms/newsletter/submit">
            	<input type="hidden" name="campaign" value="newsletter" />
                <input type="text" class="innerlabel" title="please enter your name..." />
                <input type="text" name="email" class="innerlabel" title="please enter your e-mail..." />
            </form>
            
            <p class="disclaimer">We'll only use your email to keep you updated about We Day, Free The Children and Me to We. </p>
            <?=shadow_button("Subscribe", "javascript:submit_newsletter()")?>
        </div>
    </div>
</div>
<?=vspace()?>
<script type="text/javascript">
$("#newsletter_signup").submit( function (event) {
	event.preventDefault();
	submitNewsletter();
});

function submit_newsletter () {
	$("#newsletter_signup").ajaxSubmit({
		target: '.subscribe .signup',
		success: function () {}
	});
}
</script>