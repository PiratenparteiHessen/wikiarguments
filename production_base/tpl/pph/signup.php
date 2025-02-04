<?
/********************************************************************************
 * The contents of this file are subject to the Common Public Attribution License
 * Version 1.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at
 * http://www.wikiarguments.net/license/. The License is based on the Mozilla
 * Public License Version 1.1 but Sections 14 and 15 have been added to cover
 * use of software over a computer network and provide for limited attribution
 * for the Original Developer. In addition, Exhibit A has been modified to be
 * consistent with Exhibit B.
 *
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 *
 * The Original Code is Wikiarguments. The Original Developer is the Initial
 * Developer and is Wikiarguments GbR. All portions of the code written by
 * Wikiarguments GbR are Copyright (c) 2012. All Rights Reserved.
 * Contributor(s):
 *     Andreas Wierz (andreas.wierz@gmail.com).
 *
 * Attribution Information
 * Attribution Phrase (not exceeding 10 words): Powered by Wikiarguments
 * Attribution URL: http://www.wikiarguments.net
 *
 * This display should be, at a minimum, the Attribution Phrase displayed in the
 * footer of the page and linked to the Attribution URL. The link to the Attribution
 * URL must not contain any form of 'nofollow' attribute.
 *
 * Display of Attribution Information is required in Larger Works which are
 * defined in the CPAL as a work which combines Covered Code or portions
 * thereof with code not governed by the terms of the CPAL.
 *******************************************************************************/

global $sTemplate, $sUser, $sDB, $sPacket, $sPage;

$page       = "";
$language   = $sTemplate->getLangBase();
?>
<? include($sTemplate->getTemplateRootAbs()."header.php"); ?>

<div id = "content_wide">
  <div class = "thin">

  <div class="headline"><? echo $sTemplate->getString("SIGNUP"); ?></div>

  <div class = "signup">
    <form id = "form_submit" action = "<? echo $sTemplate->getRoot(); ?>signup/" method = "POST">
      <div class = "row">
        <div class = "text"><? echo $sTemplate->getString("SIGNUP_HEADLINE"); ?></div>
      </div>
      <div class = "row">
        <div class = "label"><? echo $sTemplate->getString("SIGNUP_USERNAME"); ?></div>
        <div class = "input">
          <input type = "text" id = "signup_username" name = "signup_username" value = "<? echo $sRequest->getStringPlain("signup_username"); ?>"></input>
        </div>
      </div>

      <div class = "row">
        <div class = "label"><? echo $sTemplate->getString("SIGNUP_PASSWORD"); ?></div>
        <div class = "input">
          <input type = "password" id = "signup_password" name = "signup_password"></input>
        </div>
      </div>

      <div class = "row">
        <div class = "label"><? echo $sTemplate->getString("SIGNUP_PASSWORD_REPEAT"); ?></div>
        <div class = "input">
          <input type = "password" id = "signup_password_2" name = "signup_password_2"></input>
        </div>
      </div>

      <div class = "row">
        <div class = "label"><? echo $sTemplate->getString("SIGNUP_EMAIL"); ?></div>
        <div class = "input">
          <input type = "text" id = "signup_email" name = "signup_email" value = "<? echo $sRequest->getStringPlain("signup_email"); ?>"></input>
        </div>
      </div>

      <div class = "row">
        <div class = "label"></div>
        <div class = "input_checkbox">
          <input type = "checkbox" id = "signup_termsofuse" name = "signup_termsofuse" value = "<? echo $sRequest->getStringPlain("signup_termsofuse"); ?>"></input>
          <label for = "signup_termsofuse"><? echo $sTemplate->getString("SIGNUP_TERMS_OF_USE"); ?></label>

        </div>
      </div>

      <div class = "row">
        <div class = "label"></div>
        <div class = "input_checkbox">
          <input type = "checkbox" id = "signup_dataprivacystatement" name = "signup_dataprivacystatement" value = "<? echo $sRequest->getStringPlain("signup_dataprivacystatement"); ?>"></input>
          <label for = "signup_dataprivacystatement"><? echo $sTemplate->getString("SIGNUP_DATA_PRIVACY_STATEMENT"); ?></label>
        </div>
      </div>

      <div class = "row row_submit">
<?
if (SIGNUP_REQUIRE_TOKEN) {
    $tokenValid = $sPage->checkSessionSignupToken();
    if(!$tokenValid) {
        echo "<span class='token-feedback invalid'>Token ist ungültig / verbraucht</span>";
    }
    else { ?>
        <button class="button_orange" onclick="$('#form_submit').submit(); return false;"><? echo $sTemplate->getString("SIGNUP_SUBMIT"); ?></button>
        <span class='token-feedback valid'>Token ist gültig</span>
<? }
}

else { ?>
        <button class = "button_orange" onclick = "$('#form_submit').submit(); return false;"><? echo $sTemplate->getString("SIGNUP_SUBMIT"); ?></button>
<? }
?>
      </div>
      <input type = "hidden" name = "signup" value = "1" />
    </form>

  </div>

  <div class = "clear"></div>
  </div>

</div>

<? include($sTemplate->getTemplateRootAbs()."footer.php"); ?>
