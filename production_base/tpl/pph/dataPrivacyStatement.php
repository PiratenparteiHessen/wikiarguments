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
 *   Andreas Wierz (andreas.wierz@gmail.com).
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

$page    = "";
$language  = $sTemplate->getLangBase();
?>
<? include($sTemplate->getTemplateRootAbs()."header.php"); ?>

<div id = "content">

<div class="headline"><? echo $sTemplate->getString("DATA_PRIVACY_STATEMENT"); ?></div>

<p><strong>1. Selbstverständnis</strong>
<br /><br />
Die Piratenpartei fordert nicht nur strengeren Datenschutz, sie setzt ihn auch selber praktisch um. Personenbezogene Daten werden auf dieser Webseite nur im technisch unbedingt notwendigen Umfang erhoben. In keinem Fall werden die erhobenen Daten verkauft oder aus anderen Gründen an Dritte weitergegeben. Sollte es ausnahmsweise doch einmal notwendig werden, ihre Daten an Dritte weiterzugeben, so werden wir sie, für jede Übermittlung einzeln, vorher um Erlaubnis fragen.
</p>

<p><strong>2. Strafttaten</strong>
<br /><br />
Sollten unsere Systeme allerdings einmal zu Straftaten missbraucht werden, kann es passieren, das wir dazu verpflichtet werden, diese und andere Daten zu speichern und den Ermittlungsbehörden auszuhändigen. Soweit es uns erlaubt ist, werden wir sie in einem solchen Fall davon unterrichten. Im Falle eines laufenden Ermitlungsverfahrens müssten wir diese Daten an Ermitlungsbehörden oder Privatpersonen herausgeben. In unserem Wiki können sie nachlesen, wie sie <a href="http://wiki.piratenpartei.de/HowTo_Anonym_Browsen">die Übermittlung aller in diesem Absatz genannten Daten an uns und andere unterbinden können</a>.
</p>

<p><strong>3. Datenverarbeitung auf dieser Webseite</strong>
<br /><br />
Von ihrem Computer werden verschiedene Daten an uns übermittelt, diese sind je nach Browser- und Betriebssytemtyp, -version und -einstellung unterschiedlich. Einige davon können sein:
<ul>
  <li>&middot; Browsertyp/ -version</li>
  <li>&middot; verwendetes Betriebssystem</li>
  <li>&middot; Referrer URL (die zuvor besuchte Seite)</li>
  <li>&middot; Hostname des zugreifenden Rechners (IP Adresse)</li>
  <li>&middot; Uhrzeit der Serveranfrage</li>
</ul>
<br />
Die Piratenpartei lehnt eine vollständige Speicherung derartiger Daten strikt ab.
<br /><br />
Für den Dienst WikiArguments ist diese Speicherung in der Regel, außer im Wartungsfall, komplett abgeschaltet.
</p>

<p><strong>4. Cookies</strong>
<br /><br />
Die Internetseiten verwenden an mehreren Stellen sogenannte Cookies. Cookies sind kleine Textdateien, die auf Ihrem Rechner abgelegt werden und die Ihr Browser speichert. Cookies richten auf Ihrem Rechner keinen Schaden an und enthalten keine Viren. Die meisten der von uns verwendeten Cookies sind sogenannte „Session-Cookies“. Das heißt, sie werden nach Ende Ihres Besuchs automatisch gelöscht.
Cookies können es auch ermöglichen, sie nach Verlassen der Website wiederzuerkennen. Leider wird diese Funktion von einigen Firmen dazu missbraucht, das Surfverhalten von Internetnutzern auszuspionieren. Die Piraten lehnen ein solches Verhalten als datenschutzwidrig ab.
<br /><br />
Im Einzelnen: WikiArguments verwendet Cookies dazu, um sie nach dem Einloggen als der Benutzer zu identifizieren, als der sie sich eingeloggt haben. Ansonsten verwenden wir Cookies auch ohne Einloggen dazu Ihnen eine Session bereitstellen zu können und zur Speicherung der Einverständnisses zur Nutzung von Cookies.
<br /><br />
In ihren Browsereinstellungen können sie die Annahme von Cookies unterbinden.
</p>

<p><strong>5. Personenbezogene Daten</strong>
<br /><br />
Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich.
<br /><br />
Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name oder eMail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis.
Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben.
<br /><br />
Die Benutzung eines Pseudonyms ist möglich und erwünscht.
</p>

<p><strong>6. Allgemein</strong>
<br /><br />
Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich. Desweiteren weisen wir darauf hin, dass die auf dieser Webseite getätigten Äußerungen weltweit eingesehen werden können und bitten dies
bei der Benutzung zu berücksichtigen. Wir raten von der Preisgabe von persönlichen Daten ab.
</p>

<p><strong>7. Kinder</strong>
<br /><br />
Personen unter 18 Jahren sollten ohne Zustimmung der Eltern oder  Erziehungsberechtigten keine personenbezogenen Daten an uns übermitteln.
</p>

<p><strong>8. Server Standort</strong>
<br /><br />
Die Verarbeitung der Daten (Benutzername, E-Mail, Antworten und Gewichtungen, sowie weitere Einstellungen, die von Ihnen gemacht werden) erfolgt ausschliesslich in Deutschland und nach deutschen respektive europäischen Recht.
</p>

<p><strong>9. Recht auf Widerruf und Korrektur</strong>
<br /><br />
Sollten Sie mit der Speicherung Ihrer persönlichen Daten nicht mehr einverstanden, oder diese unrichtig geworden sein, werden wir auf eine entsprechende Weisung hin die Löschung oder Sperrung Ihrer Daten veranlassen, oder notwendige Korrekturen vornehmen, soweit dies nach geltendem Recht möglich ist.
<br /><br />
Auf Wunsch erhalten Sie unentgeltlich Auskunft über alle personenbezogenen Daten, die wir über Sie gespeichert haben.
</p>

<p><strong>10. Über diese Datenschutzerklärung</strong>
<br /><br />
Wir behalten uns das Recht vor, diese Datenschutzerklärung bei Bedarf zu ändern oder zu ergänzen. Die Änderungen werden wir auf dieser Seite veröffentlichen. Daher sollten Sie diese Seite regelmäßig aufrufen, um sich über den aktuellen Stand zu informieren.
<br /><br />
Bei Fragen zur Erhebung, Verarbeitung oder Nutzung Ihrer persönlichen Daten, bei Auskünften, Berichtigungen, Sperrung oder Löschung von Daten wenden Sie sich bitte an: <span class="email">mail[at]piratenpartei-hessen[dot]de</span>
</p>

<p><strong>11. Weitere Informationen</strong>
<br /><br />
Ihr Vertrauen ist uns wichtig. Daher werden wir Ihnen jederzeit Rede und Antwort bezüglich der Verarbeitung Ihrer personenbezogenen Daten stehen. Wenn Sie Fragen haben, die Ihnen diese Datenschutzerklärung nicht beantworten konnte oder wenn Sie zu einem Punkt vertiefte Informationen wünschen, wenden Sie sich bitte jederzeit an die Piraten. Sie können ihre Fragen und Anregungen im Forum oder unter <span class="email">mail[at]piratenpartei-hessen[dot]de</span> stellen.
</p>

</div>

<? include($sTemplate->getTemplateRootAbs()."footer.php"); ?>
