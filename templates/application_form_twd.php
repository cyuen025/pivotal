<form action="php/sending_mail_twd.php" method="POST" id="noreq_form">
	<fieldset>
        <legend>Please complete the application form below:</legend>
        <label for="name">Name*: </label>
        <br>
        <input type="text" name="name" id="name" max-length="30" required>
        <br>
        <label for="contact_num">Phone number*: </label>
        <br>
        <input type="tel" name="contact_num" max-length="12" id="contact_num" pattern="^([0-9\(\)\/\+ \-]*)$" required>
        <br>
        <fieldset class="radio">
            <legend>The best time to contact you?</legend>
            <br>
            <input type="checkbox" id="best_time_contact" name="best_time_contact[]" value="morning">
            <label for="best_time_contact" class="label_radio">Morning </label>
            <input type="checkbox" id="best_time_contact1" name="best_time_contact[]" value="afternoon">
            <label for="best_time_contact1" class="label_radio">Afternoon </label>
            <input type="checkbox" id="best_time_contact2" name="best_time_contact[]" value="evening">
            <label for="best_time_contact2" class="label_radio">Evening </label>
        </fieldset>
        <br>
        <label for="email">Email*: </label>
        <br>
        <input type="email" name="email" max-length="40" id="email" required>
        <br>
        <label for="business_name">Business Name*: </label>
        <br>
        <input type="text" name="business_name" max-length="40" id="business_name" required>
        <br>
        <label for="business_profile">Business Profile*: </label>
        <br>
        <textarea name="business_profile" id="business_profile" placeholder = "(What service or product are you providing?)"required rows="8" cols="50"></textarea>
        <br>
        <label for="domain_name">Domain Name: </label>
        <br>
        <input type="text" name="domain_name" id="domain_name" max-length="100">
        <br>
        <label for="status_website">Status of the current website: </label>
        <br>
        <textarea name="status_website" id="status_website" rows="8" cols="50"></textarea>
        <br>
        <label for="describe_your_need">Please explain why your business needs a website*: </label>
        <br>
        <textarea name="describe_your_need" id="describe_your_need" rows="8" cols="50" required></textarea>
        <br>
        <label for="website_visitor">What would you like website visitors to do on your website?*: </label>
        <br>
        <textarea name="website_visitor" id="website_visitor" rows="8" cols="50" required></textarea>
        <br>
        <label for="describe_website_need">Brief Description of Website Needs*: </label>
        <br>
        <textarea name="describe_website_need" id="describe_website_need" rows="8" cols="50" placeholder="(What functions, pages you think you need - just ideas...)" required></textarea>
        <br>
        <fieldset class="radio">
            <legend>Do you have web content ready?</legend>
            <br>
            <input type="radio" id="have_content" name="have_content" value="yes" checked>
            <label for="have_content" class="label_radio">Yes </label>
            <input type="radio" id="have_content" name="have_content" value="no">
            <label for="have_content" class="label_radio">No </label>
        </fieldset>
        <br>
        <input type="submit" id="submit">
	</fieldset>
</form>