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

<div class="headline"><? echo $sTemplate->getString("FAQ"); ?></div>

<h2>Allgemein</h2>
<h3>Worum geht es hier?</h3>
<p>Wikiarguments Hessen ist eine Online-Applikation, um Pro- und Contra-Argumente zu Diskussionsgegenständen (wie Anträge, virtuelle Meinungsbilder, etc.) übersichtlich an einem Ort zu sammeln.</p>

<h3>Wo kann ich bei Fragen und Problemen Hilfe bekommen? Wo kann ich mich beschweren?</h3>
<p>Bei Fragen oder Problemen mit Wikiarguments Hessen wende dich bitte an: <span class="email">it[at]piratenpartei-hessen[dot]de</span>.
<br /><br />
Hier ist noch ein Pad, um Probleme, Verbesserungsvorschläge und weitere Fragen für diese FAQ zu sammeln: <a href="https://hessen-it.piratenpad.de/wikiarguments-faq">https://hessen-it.piratenpad.de/wikiarguments-faq</a>
</p>

<h3>Wo gibt es Neuigkeiten zu Wikiarguments Hessen?</h3>
<p>Im GitHub-Repository: <a href="https://github.com/PiratenparteiHessen/wikiarguments">https://github.com/PiratenparteiHessen/wikiarguments</a></p>

<h3>Was ist Wikiarguments Hessen und was bringt das hier?</h3>
<p>Das ist die kostenlose Software Wikiarguments (mit ein paar eigenen Anpassungen, Code gibt es auf GitHub), die wir nutzen. Wie der Name sagt, geht es hier vor allem um Argumente. Zu den eingereichten Anträgen soll hier die Pro- und Contra-Seite dargestellt werden. Bitte trage deine Argumente ein, warum ein Diskussionsgegenstand angenommen oder abgelehnt werden sollte! Genauso kannst du Gegenargumente zu fremden Argumenten eintragen.</p>

<h2>Allgemein</h2>
<h3>Muss ich stimmberechtigt sein, um mitmachen zu können?</h3>
<p>Nein.</p>

<h2>Funktionen</h2>
<h3>Welche Funktionen gibt es?</h3>
<p>Du kannst einen Diskussionsgegenstand unterstützen, indem du oben links auf den grauen Pfeil klickst, wodurch dieser orange wird. Dies signalisiert, dass du den Diskussionsgegenstand unterstützt. Ein weiterer Klick zieht die Unterstützung zurück. Unterhalb des Diskussionsgegenstandes , auf der linken Seite findest du die Pro-Argumente, die für den Antrag sprechen (blaue Markierung am Rand). Die rechte Seite stellt entsprechend die Contra-Argumente zum Diskussionsgegenstand dar (orange Markierung). Die Argumente werden auf der Seite mit ihrer Überschrift und dem kurzen Argument-Text dargestellt. Falls beim Argument ein Detailtext angegeben wurde, sieht man am Ende des Argument-Texts einen orangen Doppelpfeil.</p>
<p>Argumente haben keinen Detailtext. Durch einen Klick auf diesen Pfeil oder die Überschrift des Arguments kann man den Detailtext lesen (siehe auch nächste Frage).</p>
<p>Die wichtigste Funktion ist „(Pro-/Contra-)Argument hinzufügen“. Nach einem Klick auf eine der beiden Flächen kannst du auf der linken Seite ein Pro bzw. rechts ein Contra-Argument hinzufügen.</p>
<p>Durch einen Klick auf einen der beiden Pfeile neben jedem Argument kannst du das Argument bewerten (+1 nach oben -> Zustimmung, -1 nach unten -> Ablehnung, 0 -> neutral). Willst du die Bewertung rückgängig machen, klicke einfach nochmal auf den ausgewählten Pfeil. Das lässt sich jederzeit ändern. Das Argument mit der höchsten Summe der Bewertungen steht oben.</p>

<h3>Welche Bedeutung haben die einzelnen Felder, wenn man ein neues Argument hinzufügt?</h3>
<p>Ein Eintrag für ein Argument hat drei Bestandteile, die Überschrift, das Argument und die Argument-Details. Überschrift und Argument werden direkt auf der Antragsseite (siehe vorherige Frage) angezeigt. Bitte wähle daher eine aussagekräftige Überschrift (nur 25 Zeichen) und stelle die wichtigsten Punkte im kurzen „Argument“-Text (140 Zeichen) dar.</p>
<p>Im Feld „Argument-Details“, kannst du soviel Text schreiben, wie du willst, um dein Argument zu begründen. Dieser Text ist für den Leser aber erst sichtbar, wenn er die Argument-Seite selbst aufruft. Der Detail-Text kann auch leer bleiben. Nach dem Abschicken kannst du das Argument noch 10 Minuten bearbeiten, danach ist es gesperrt.</p>

<h3>Welche Bedeutung haben die Punkte bei (Gegen-)Argumenten?</h3>
<p>Die Punkte geben sozusagen das „Gewicht“ oder die „Wichtigkeit“ an, welche die Gruppe dem Argument beimisst. Wenn dir ein Diskussionsgegenstand wichtig oder unwichtig erscheint, klicke auf den Pfeil nach oben oder unten neben dem Argument. Das lässt sich auch jederzeit wieder ändern. Diese Bewertung beeinflusst die Reihenfolge, wobei die Argumente mit der höchsten Bewertung oben stehen.</p>

</div>

<? include($sTemplate->getTemplateRootAbs()."footer.php"); ?>