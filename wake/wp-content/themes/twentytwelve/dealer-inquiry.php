<h1 class="popup-title">Apply to become a Pavati Dealer!</h1>
<button class="close-popup"><i class="icon-remove"></i></button>

<form action="./" class="popup-form" id="form-dealer" method="post">
    
    <div class="popup-input-row">
        <input class="popup-input popup-input-half" name="dealer_dealership" placeholder="Dealership Name" type="text" />
        <input class="popup-input popup-input-half" name="dealer_rep" placeholder="Dealership Representative" type="text" />
    </div>

    <div class="popup-input-row">
        <input class="popup-input popup-input-half" name="dealer_website" placeholder="Website URL" type="text" />
        <input class="popup-input popup-input-half" id="input-email" name="dealer_email" placeholder="Email Address" type="text" />
    </div>

    <div class="popup-input-row">
        <input class="popup-input popup-input-half" name="dealer_phone" placeholder="Phone Number" type="text" />
        <select class="popup-input popup-input-half" name="dealer_years">
            <option selected value="-">Years in business</option>
            <option value="1 year">1 year</option>
            <option value="2 years">2 years</option>
            <option value="3 years">3 years</option>
            <option value="4 years">4 years</option>
            <option value="5 years">5 years</option>
            <option value="Over 5 years">Over 5 years</option>
        </select>
    </div>

    <input class="input-checkbox" id="dealer-showroom" name="dealer_showroom" type="checkbox" />
    <label class="checkbox-label" for="dealer-showroom">We have a showroom available</label>

    <textarea class="popup-input popup-input-full" name="dealer_message" placeholder="Message"></textarea>
    <input class="popup-submit" name="dealer_submit" type="submit" value="Send Message" />
    <label class="popup-label"><h1>OR</h1>Call us at 1-800-866-5269!</label>

</form>