<form action="php/sending_mail.php" method="POST" id="noreq_form">
    <fieldset>
        <legend>Please complete the application form below:</legend>
        <label for="name">Name*: </label>
        <br>
        <input type="text" name="name" id="name" max-length="30" required>
        <br>
        <label for="contact_num">Phone number*: </label>
        <br>
        <!--<input type="tel" name="contact_num" max-length="12" id="contact_num" pattern="^(?:(d{3})|d{3})[- ]?d{3}[- ]?d{4}$" required>-->
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
        <textarea name="business_profile" id="business_profile" placeholder = "(Please provide a brief company description)" rows="8" cols="50" required></textarea>
        <br>
        <label for="business_description">Business Description*: </label>
        <br>
        <textarea name="business_description" id="business_description" placeholder = "(The objectives of the position, as specific as possible and what programs/software will be used)" rows="8" cols="50" required></textarea>
        <br>
        <input type="submit" id="submit">
    </fieldset>
</form>