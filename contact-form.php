<div class="contact-form">
	<div class="contact-errors">
	</div>

	<form action="send-mail.php" method="post">
		<p class="muted">Fields with an asterisk(*) must be filled in.</p>
		<label for="">
			Your Name*
			<input type="text" name="name" autocomplete="off"/>
		</label>
		<label for="">
			Your Email Address *
			<input type="text" name="email" autocomplete="off"/>
		</label>
		<label for="">
			Your Message *
			<textarea name="message" id="" cols="30" rows="10"></textarea>
		</label>

		<input type="submit" value="Send"/>

	</form>
</div>