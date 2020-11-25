
	<section class="right">
	<p>Please call us on  01604 90345 or email <a href="mailto:enquiries@fransfurniture.co.uk">enquiries@fransfurniture.co.uk</a></p>
	<?php echo $warn; ?><br><br>

	<h2>Fill up the form for enqueries</h2>

	<form action="?page=contact" method="POST">
			<label>Customer Name</label>
			<input type="text" name="enquiry[name]">
			<label>Mail</label>
			<input type="text" name="enquiry[mail]">
			<label>Contact</label>
			<input type="text" name="enquiry[contact]">
			<label>Enquery</label>
			<input type="text" name="enquiry[enquiry]">
			<input type="submit" name="submitEnquiry" value="Submit Enquiry">

	</form>
	</section>
