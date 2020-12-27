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

<div id = "content">

<div class="headline"><? echo $sTemplate->getString("TERMS_OF_USE"); ?></div>

<p><strong>1. Allgemeines</strong>
<br /><br />
1.1. Der Landesverband Hessen betreibt seine Wikiarguments-Instanzen in Eigenregie und für die Nutzenden unentgeltlich unter Wahrung der Werte und Ideale der Piratenpartei Deutschland sowie den Beschlüssen des Landesparteitages und des Landesvorstandes.
<br /><br />
1.2. Das virtuelle Hausrecht liegt beim Landesvorstand. Die technische Administration obliegt den IT-Beauftragten des Landesverbandes, welche durch den Landesvorstand bestellt werden.
<br /><br />
1.3. Es besteht kein Anspruch darauf, dass die Dienste angeboten werden oder richtig funktionieren. Es ergibt sich kein Nutzungsrecht, beispielsweise durch die Mitgliedschaft im Landesverband Hessen.
<br /><br />
1.4. Ohne Zustimmung zu diesen Nutzungsbedingungen ist ein Schreibzugriff auf die Dienste nicht erlaubt. Der Lesezugriff ist uneingeschränkt möglich. Die Dienste dürfen nur im gesetzlich zulässigen Rahmen genutzt werden.
<br /><br />
1.5. Nicht näher spezifizierte Punkte kann der Landesvorstand in seiner Geschäftsordnung ergänzen, sofern sie nicht dem Geiste dieser Nutzungsbedingungen zuwiderlaufen.
</p>


<p><strong>2. Dienste</strong>
<br /><br />
2.1. Wikiarguments
<br /><br />
2.1.1. Jedem Nutzendem mit einer gültigen E-Mail-Adresse steht auf Wunsch ein Wikiarguments-Konto unter der Domain wikiarguments.piratenpartei-hessen.de zur Verfügung.
<br /><br />
2.1.2. Der Benutzername kann frei gewählt werden. Die Benutzung eines Pseudonyms ist möglich und erwünscht, sofern nicht bereits vergeben. Weitergehend darf ein Pseudonym nicht gegen gültige Rechtsnormen verstossen.
</p>

<p><strong>3. Rechtliches</strong>
<br /><br />
3.1. Pflichten der Nutzenden
<br /><br />
3.1.1. Formulierung und Inhalt  sollten  dem Zielpublikum gegenüber angemessen sein. Insbesondere sollten   Unhöflichkeit, Doppeldeutigkeit oder gar Beleidigungen nicht die   Kommunikation per Text, der die Sinngebung durch nonverbale Signale   fehlt, erschweren.
<br /><br />
3.1.2. Es ist ausdrücklich untersagt, die Identität eines anderen Nutzenden und/oder persönliche Daten anderer Nutzenden preis zu geben.
<br /><br />
3.1.3. Bei Unregelmäßigkeiten in der Benutzung der Dienste (z.B. Spam-Versand, kein Zugang mehr, etc.) sind umgehend der Landesvorstand Hessen oder seine IT-Beauftragten darüber zu informieren.
<br /><br />
3.1.4. Die Nutzenden stellen den Landesverband Hessen von sämtlichen Schäden und Ansprüchen Dritter frei, die auf einer rechtswidrigen Verwendung des Dienstes durch den Nutzenden und / oder auf einem Verstoß gegen vorliegende Vereinbarung beruhen, dies erstreckt sich auch auf für mit der Inanspruchnahme bzw. deren Abwehr zusammenhängende Kosten und Aufwendungen.
<br /><br />
3.1.5. Erkennen Nutzende oder müssen sie erkennen, dass eine solche Rechtsverletzung und / oder ein solcher Verstoß vorliegt oder droht, ist der Landesvorstand Hessen oder seine IT-Beauftragten unverzüglich auf diesen Umstand hinzuweisen.
<br /><br />
3.2. Gewährleistung und Haftungsausschluss
<br /><br />
3.2.1. Der Betreiber übernimmt keine Haftung für jegliche Schäden, die durch die Nutzung entstehen könnten.
<br /><br />
3.2.2. Der Betreiber ist nicht verantwortlich für die Inhalte, die von den Nutzenden geführt oder veröffentlicht werden. Solche Aussagen sind als Privatmeinungen anzusehen.
<br /><br />
3.3. Über diese Nutzungsbedingungen
<br /><br />
3.3.1. Diese Nutzungsbedingungen können sich jederzeit ändern. Es ist die Pflicht des Nutzenden, diese Seite zu besuchen, um sich über die Nutzungsbedingungen zu informieren. Änderungen gelten nicht rückwirkend und werden frühestens 14 Tage nach ihrer Veröffentlichung wirksam. Änderungen hinsichtlich einer neuen Funktion für einen Dienst oder Änderungen aus rechtlichen Gründen sind jedoch sofort wirksam. Wenn Sie den geänderten Nutzungsbedingungen eines Dienstes nicht zustimmen, müssen Sie die Nutzung dieses Dienstes einstellen.
<br /><br />
3.4. Salvatorische Klausel
<br /><br />
3.4.1. Sollten einzelne Bestimmungen dieser Nutzungsbedingungen unwirksam oder undurchführbar sein oder nach Vertragsschluss unwirksam oder undurchführbar werden, bleibt davon die Wirksamkeit der Nutzungsbedingungen im Übrigen unberührt. An die Stelle der unwirksamen oder undurchführbaren Bestimmung soll diejenige wirksame und durchführbare Regelung treten, deren Wirkungen der Zielsetzung am nächsten kommen, die die Vertragsparteien mit der unwirksamen bzw. undurchführbaren Bestimmung verfolgt haben. Die vorstehenden Bestimmungen gelten entsprechend für den Fall, dass sich die Nutzungsbedingungen als lückenhaft erweisen.
</p>

</div>

<? include($sTemplate->getTemplateRootAbs()."footer.php"); ?>
