<?php
    if (!defined('ABSPATH')) {
        exit;
    }?>
		 <?php $dealer_state = $dealer[0]->state?>
         <div class="wrap">
    		     <h2>Update Dealer</h2>
    		     <?php if (isset($message)): ?><div class="updated"><p><?php echo $message; ?></p></div><?php endif; ?>
    		     <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
    		     <input type="hidden" name="dealer_id" value="$dealer[0]->id">
    		         <table class='wp-list-table widefat fixed'>
    		             <tr>
    		                 <th class="ss-th-width">Zip Code</th>
    		                 <td><input type="text" name="zip-code"  class="ss-field-width" value="<?php echo $dealer[0]->{'zip-code'};?>" /></td>
    		             </tr>
    		             <tr>
    		                 <th class="ss-th-width">City</th>
    		                 <td><input type="text" name="city" class="ss-field-width" value="<?php echo $dealer[0]->city;?>"/></td>
    		             </tr>
    		             <tr>
    		                 <th class="ss-th-width">State</th>
    		            		<td> 
                    			<select name="state" class="form-control" id="FormStates">
                    			    <option value=""></option>
                        <option value="AL" <?php echo ($dealer_state == "AL" ? "selected" : "")?> >Alabama</option>
                        <option value="AK" <?php echo ($dealer_state == "AK" ? "selected" : "")?> >Alaska</option>
                        <option value="AZ" <?php echo ($dealer_state == "AZ" ? "selected" : "")?> >Arizona</option>
                        <option value="AR" <?php echo ($dealer_state == "AR" ? "selected" : "")?> >Arkansas</option>
                        <option value="CA" <?php echo ($dealer_state == "CA" ? "selected" : "")?> >California</option>
                        <option value="CO" <?php echo ($dealer_state == "CO" ? "selected" : "")?> >Colorado</option>
                        <option value="CT" <?php echo ($dealer_state == "CT" ? "selected" : "")?> >Connecticut</option>
                        <option value="DE" <?php echo ($dealer_state == "DE" ? "selected" : "")?> >Delaware</option>
                        <option value="DC" <?php echo ($dealer_state == "DC" ? "selected" : "")?> >District Of Columbia</option>
                        <option value="FL" <?php echo ($dealer_state == "FL" ? "selected" : "")?> >Florida</option>
                        <option value="GA" <?php echo ($dealer_state == "GA" ? "selected" : "")?> >Georgia</option>
                        <option value="HI" <?php echo ($dealer_state == "HI" ? "selected" : "")?> >Hawaii</option>
                        <option value="ID" <?php echo ($dealer_state == "ID" ? "selected" : "")?> >Idaho</option>
                        <option value="IL" <?php echo ($dealer_state == "IL" ? "selected" : "")?> >Illinois</option>
                        <option value="IN" <?php echo ($dealer_state == "IN" ? "selected" : "")?> >Indiana</option>
                        <option value="IA" <?php echo ($dealer_state == "IA" ? "selected" : "")?> >Iowa</option>
                        <option value="KS" <?php echo ($dealer_state == "KS" ? "selected" : "")?> >Kansas</option>
                        <option value="KY" <?php echo ($dealer_state == "KY" ? "selected" : "")?> >Kentucky</option>
                        <option value="LA" <?php echo ($dealer_state == "LA" ? "selected" : "")?> >Louisiana</option>
                        <option value="ME" <?php echo ($dealer_state == "ME" ? "selected" : "")?> >Maine</option>
                        <option value="MD" <?php echo ($dealer_state == "MD" ? "selected" : "")?> >Maryland</option>
                        <option value="MA" <?php echo ($dealer_state == "MA" ? "selected" : "")?> >Massachusetts</option>
                        <option value="MI" <?php echo ($dealer_state == "MI" ? "selected" : "")?> >Michigan</option>
                        <option value="MN" <?php echo ($dealer_state == "MN" ? "selected" : "")?> >Minnesota</option>
                        <option value="MS" <?php echo ($dealer_state == "MS" ? "selected" : "")?> >Mississippi</option>
                        <option value="MO" <?php echo ($dealer_state == "MO" ? "selected" : "")?> >Missouri</option>
                        <option value="MT" <?php echo ($dealer_state == "MT" ? "selected" : "")?> >Montana</option>
                        <option value="NE" <?php echo ($dealer_state == "NE" ? "selected" : "")?> >Nebraska</option>
                        <option value="NV" <?php echo ($dealer_state == "NV" ? "selected" : "")?> >Nevada</option>
                        <option value="NH" <?php echo ($dealer_state == "NH" ? "selected" : "")?> >New Hampshire</option>
                        <option value="NJ" <?php echo ($dealer_state == "NJ" ? "selected" : "")?> >New Jersey</option>
                        <option value="NM" <?php echo ($dealer_state == "NM" ? "selected" : "")?> >New Mexico</option>
                        <option value="NY" <?php echo ($dealer_state == "NY" ? "selected" : "")?> >New York</option>
                        <option value="NC" <?php echo ($dealer_state == "NC" ? "selected" : "")?> >North Carolina</option>
                        <option value="ND" <?php echo ($dealer_state == "ND" ? "selected" : "")?> >North Dakota</option>
                        <option value="OH" <?php echo ($dealer_state == "OH" ? "selected" : "")?> >Ohio</option>
                        <option value="OK" <?php echo ($dealer_state == "OK" ? "selected" : "")?> >Oklahoma</option>
                        <option value="OR" <?php echo ($dealer_state == "OR" ? "selected" : "")?> >Oregon</option>
                        <option value="PA" <?php echo ($dealer_state == "PA" ? "selected" : "")?> >Pennsylvania</option>
                        <option value="RI" <?php echo ($dealer_state == "RI" ? "selected" : "")?> >Rhode Island</option>
                        <option value="SC" <?php echo ($dealer_state == "SC" ? "selected" : "")?> >South Carolina</option>
                        <option value="SD" <?php echo ($dealer_state == "SD" ? "selected" : "")?> >South Dakota</option>
                        <option value="TN" <?php echo ($dealer_state == "TN" ? "selected" : "")?> >Tennessee</option>
                        <option value="TX" <?php echo ($dealer_state == "TX" ? "selected" : "")?> >Texas</option>
                        <option value="UT" <?php echo ($dealer_state == "UT" ? "selected" : "")?> >Utah</option>
                        <option value="VT" <?php echo ($dealer_state == "VT" ? "selected" : "")?> >Vermont</option>
                        <option value="VA" <?php echo ($dealer_state == "VA" ? "selected" : "")?> >Virginia</option>
                        <option value="WA" <?php echo ($dealer_state == "WA" ? "selected" : "")?> >Washington</option>
                        <option value="WV" <?php echo ($dealer_state == "WV" ? "selected" : "")?> >West Virginia</option>
                        <option value="WI" <?php echo ($dealer_state == "WI" ? "selected" : "")?> >Wisconsin</option>
                        <option value="WY" <?php echo ($dealer_state == "WY" ? "selected" : "")?> >Wyoming</option>
			<option value="PR" <?php echo ($dealer_state == "PR" ? "selected" : "")?> >Puerto Rico</option>
                    	</select></td>

    		             </tr>
    		             <tr>
    		                 <th class="ss-th-width">Dealer</th>
    		                 <td><input type="text" name="dealer" class="ss-field-width" value="<?php echo $dealer[0]->dealer;?>"/></td>
    		             </tr>
    		             <tr>
    		                 <th class="ss-th-width">Dealer Contact</th>
    		                 <td><input type="text" name="dealer-contact" class="ss-field-width" value="<?php echo $dealer[0]->{'dealer-contact'};?>"/></td>
    		             </tr>
    		             <tr>
    		                 <th class="ss-th-width">Dealer Email</th>
    		                 <td><input type="text" name="dealer-email" class="ss-field-width" value="<?php echo $dealer[0]->{'dealer-email'};?>"/></td>
    		             </tr>
    		         </table>
    		         <input type="submit" name="update-dealer" value="update" class="button">
    		     </form>
    		 </div>
