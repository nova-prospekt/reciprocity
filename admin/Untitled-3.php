<div id="mc" class="hh">
  <div id="mc-innb">
    <div id="su">
    <h1>Sign up</h1>
    <div class="cont-bg1">
    <div class="cont-bg2">
    <form name="signup" action="" method="post" class="form">
    <div style='display:none'>
      <input type='hidden' name='csrfmiddlewaretoken' value='5d97bd93d45f668c196838e26c14e04d' />
    </div>
    <div class="pre-info req" id="marks-required-field"> <span>* </span> marks a required field </div>
    <fieldset>
      <legend>About You</legend>
      <div class="req" id="id_signup-title_row"> <span>* </span>
        <label for="id_signup-title"> Title: </label>
        <select name="signup-title" id="id_signup-title">
          <option value="" selected="selected">Select...</option>
          <option value="Mr">Mr</option>
          <option value="Mrs">Mrs</option>
          <option value="Miss">Miss</option>
          <option value="Ms">Ms</option>
          <option value="Madam">Madam</option>
          <option value="Dr">Dr</option>
          <option value="Lord">Lord</option>
          <option value="Lady">Lady</option>
          <option value="Sir">Sir</option>
          <option value="Professor">Professor</option>
        </select>
      </div>
      <div class="req" id="id_signup-first_name_row"> <span>* </span>
        <label for="id_signup-first_name"> First name: </label>
        <input id="id_signup-first_name" type="text" class="txt-input" name="signup-first_name" maxlength="50" />
      </div>
      <div class="req" id="id_signup-last_name_row"> <span>* </span>
        <label for="id_signup-last_name"> Last name: </label>
        <input id="id_signup-last_name" type="text" class="txt-input" name="signup-last_name" maxlength="50" />
      </div>
      <div class="req" id="id_signup-telephone_row"> <span>* </span>
        <label for="id_signup-telephone"> Telephone no.: </label>
        <input id="id_signup-telephone" type="text" class="txt-input" name="signup-telephone" maxlength="15" />
        <div class="info">
          <p>Just in case our opticians need to call you to discuss your order. We&#39;ll never pass on your details to third parties for marketing purposes.</p>
        </div>
      </div>
    </fieldset>
    <fieldset>
      <legend>Log in details</legend>
      <div class="req" id="id_signup-email_row"> <span>* </span>
        <label for="id_signup-email"> Email address: </label>
        <input id="id_signup-email" type="text" class="txt-input" name="signup-email" />
        <div class="info">
          <p>So we can let you know when your order has been put in the post.</p>
        </div>
      </div>
      <div class="req" id="id_signup-password1_row"> <span>* </span>
        <label for="id_signup-password1"> Password: </label>
        <input id="id_signup-password1" type="password" class="txt-input" name="signup-password1" />
      </div>
      <div class="req" id="id_signup-password2_row"> <span>* </span>
        <label for="id_signup-password2"> Re-type password: </label>
        <input id="id_signup-password2" type="password" class="txt-input" name="signup-password2" />
      </div>
    </fieldset>
    <fieldset class="address-lookup" id="billing-address">
    <legend>Billing address</legend>
    <a href="#" class="postcode-getaddress"><img src="/assets/gduk/btn-find-address.20130326070128791460.gif" alt="find address"></a>
    <p class="postcode-searching" style="display: none;">Searching...</p>
    <div class="address-list-box">
    <form action="" method="post">
    <select class="address-list" size="6">
      <optgroup label="Please select your address:">
      <option> </option>
      </optgroup>
    </select>
    <a class="use-this-address"><img src="/assets/gduk/btn-use-address.20130326070128791460.gif" alt="Use selected address"></a>
    </submit>
    </div>
    <p class="address-error"></p>
    <!--end address menu list--> 
    
    <!--<hr style="float:left;clear:both; margin:1em 0; width:31em; border-color:#ccc;">-->
    <p class="su-p-pad">If we couldn't find your postcode, please enter your delivery address below:</p>
    <div class="address-fields">
      <div class="req" id="id_billing_address-address1_row"> <span>* </span>
        <label for="id_billing_address-address1"> Address1: </label>
        <input id="id_billing_address-address1" type="text" class="txt-input" name="billing_address-address1" maxlength="255" />
      </div>
      <div class="" id="id_billing_address-address2_row">
        <label for="id_billing_address-address2"> Address2: </label>
        <input id="id_billing_address-address2" type="text" class="txt-input" name="billing_address-address2" maxlength="255" />
      </div>
      <div class="req" id="id_billing_address-town_row"> <span>* </span>
        <label for="id_billing_address-town"> Town: </label>
        <input id="id_billing_address-town" type="text" class="txt-input" name="billing_address-town" maxlength="255" />
      </div>
      <div class="" id="id_billing_address-county_row">
        <label for="id_billing_address-county"> County: </label>
        <input id="id_billing_address-county" type="text" class="txt-input" name="billing_address-county" maxlength="255" />
      </div>
      <div class="req" id="id_billing_address-postcode_row"> <span>* </span>
        <label for="id_billing_address-postcode"> Postcode: </label>
        <input id="id_billing_address-postcode" type="text" class="txt-input" name="billing_address-postcode" maxlength="15" />
      </div>
      <div class="req" id="id_billing_address-country_row"> <span>* </span>
        <label for="id_billing_address-country"> Country: </label>
        <select name="billing_address-country" id="id_billing_address-country">
          <option value="AU">Australia</option>
          <option value="AT">Austria</option>
          <option value="BE">Belgium</option>
          <option value="CA">Canada</option>
          <option value="DK">Denmark</option>
          <option value="FI">Finland</option>
          <option value="FR">France</option>
          <option value="DE">Germany</option>
          <option value="IE">Ireland</option>
          <option value="IM">Isle of Man</option>
          <option value="IT">Italy</option>
          <option value="MT">Malta</option>
          <option value="NZ">New Zealand</option>
          <option value="PL">Poland</option>
          <option value="PT">Portugal</option>
          <option value="ZA">South Africa</option>
          <option value="ES">Spain</option>
          <option value="SE">Sweden</option>
          <option value="CH">Switzerland</option>
          <option value="GB" selected="selected">United Kingdom</option>
          <option value="US">United States</option>
        </select>
      </div>
    </div>
    </fieldset>
    <fieldset class="address-lookup">
    <legend>Delivery address</legend>
    <div id="address-delivery-label">My delivery address is the same as my billing address</div>
    <div id="address-delivery-checkbox">
      <input id="billing-delivery-same-yes" type="radio" checked="checked" value="yes" name="billing-delivery-same" style="float:left;">
      <label class="radio-label" for="billing-delivery-same-yes">yes</label>
      <input id="billing-delivery-same-no" type="radio" value="no" name="billing-delivery-same" style="float:left;">
      <label class="radio-label" for="billing-delivery-same-no">no</label>
    </div>
    <div id="delivery-address">
    <a href="#" class="postcode-getaddress"><img src="/assets/gduk/btn-find-address.20130326070128791460.gif" alt="find address"></a>
    <p class="postcode-searching" style="display: none;">Searching...</p>
    <div class="address-list-box">
    <form action="" method="post">
      <select class="address-list" size="6">
        <optgroup label="Please select your address:">
        <option> </option>
        </optgroup>
      </select>
      <a class="use-this-address"><img src="/assets/gduk/btn-use-address.20130326070128791460.gif" alt="Use selected address"></a>
      </submit>
      </div>
      <p class="address-error"></p>
      <!--end address menu list--> 
      
      <!--<hr style="float:left;clear:both; margin:1em 0; width:31em; border-color:#ccc;">-->
      <p class="su-p-pad">If we couldn't find your postcode, please enter your delivery address below:</p>
      <div class="address-fields">
        <div class="req" id="id_delivery_address-address1_row"> <span>* </span>
          <label for="id_delivery_address-address1"> Address1: </label>
          <input id="id_delivery_address-address1" type="text" class="txt-input" name="delivery_address-address1" maxlength="255" />
        </div>
        <div class="" id="id_delivery_address-address2_row">
          <label for="id_delivery_address-address2"> Address2: </label>
          <input id="id_delivery_address-address2" type="text" class="txt-input" name="delivery_address-address2" maxlength="255" />
        </div>
        <div class="req" id="id_delivery_address-town_row"> <span>* </span>
          <label for="id_delivery_address-town"> Town: </label>
          <input id="id_delivery_address-town" type="text" class="txt-input" name="delivery_address-town" maxlength="255" />
        </div>
        <div class="" id="id_delivery_address-county_row">
          <label for="id_delivery_address-county"> County: </label>
          <input id="id_delivery_address-county" type="text" class="txt-input" name="delivery_address-county" maxlength="255" />
        </div>
        <div class="req" id="id_delivery_address-postcode_row"> <span>* </span>
          <label for="id_delivery_address-postcode"> Postcode: </label>
          <input id="id_delivery_address-postcode" type="text" class="txt-input" name="delivery_address-postcode" maxlength="15" />
        </div>
        <div class="req" id="id_delivery_address-country_row"> <span>* </span>
          <label for="id_delivery_address-country"> Country: </label>
          <select name="delivery_address-country" id="id_delivery_address-country">
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="BE">Belgium</option>
            <option value="CA">Canada</option>
            <option value="DK">Denmark</option>
            <option value="FI">Finland</option>
            <option value="FR">France</option>
            <option value="DE">Germany</option>
            <option value="IE">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IT">Italy</option>
            <option value="MT">Malta</option>
            <option value="NZ">New Zealand</option>
            <option value="PL">Poland</option>
            <option value="PT">Portugal</option>
            <option value="ZA">South Africa</option>
            <option value="ES">Spain</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="GB" selected="selected">United Kingdom</option>
            <option value="US">United States</option>
          </select>
        </div>
      </div>
      </div>
      </fieldset>
      <fieldset>
        <div class="" id="id_signup-heard_from_row">
          <label for="id_signup-heard_from"> How did you hear about us? </label>
          <select name="signup-heard_from" id="id_signup-heard_from">
            <option value="" selected="selected">Please select...</option>
            <option value="11">Friend told me</option>
            <option value="12">Magazine or paper</option>
            <option value="1">Search engine</option>
            <option value="2">Web site</option>
            <optgroup label="TV Advert">
            <option value="7">Dave</option>
            <option value="9">E4</option>
            <option value="4">Five USA</option>
            <option value="5">ITV</option>
            <option value="6">ITV2</option>
            <option value="3">ITV3</option>
            <option value="8">More4</option>
            <option value="10">Other TV advert</option>
            </optgroup>
          </select>
        </div>
      </fieldset>
      <div class="bn-cont">
        <input type="image" src="/assets/gduk/purple/bt_continue_large.20130326070128791460.gif" alt="Continue" value="submit" id="signupcontinue">
      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>
</div>
