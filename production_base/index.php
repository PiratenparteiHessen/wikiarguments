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

include("commonHeaders.php");

$sTimer->start('packetRun');

$sPacket = false;
$sPage   = false;

$handler = false;
$packetTable = Array(CMSG_INIT_PAGE => "CmsgInitPage");

if(@$packetTable[$sRequest->getString('opcode')])
{
    $handler = $packetTable[$sRequest->getString('opcode')];
}else
{
    $handler = $packetTable[CMSG_INIT_PAGE];
}

if($handler)
{
    $sPacket = new $handler();
}else
{
    die("INVALID_OPCODE");
}

$sTimer->stop('packetRun');

$sTimer->start('templateRun');
$sTemplate->run();
$sTimer->stop('templateRun');

$sTimer->start('serialization');
$sSession->serialize();
$sTimer->stop('serialization');

if($sTimer->getGlobalRuntime() >= 1000)
{
    $sTimer->logPerformance("index.php", $requestObj);
}

?>