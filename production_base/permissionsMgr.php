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

class PermissionsMgr
{
    public function PermissionsMgr()
    {
        $this->cache   = Array();
        $this->actions = Array(ACTION_NEW_QUESTION          => PERMISSION_ALLOWED,
                               ACTION_NEW_ARGUMENT          => PERMISSION_ALLOWED,
                               ACTION_NEW_COUNTER_ARGUMENT  => PERMISSION_ALLOWED,
                               ACTION_LOGIN                 => PERMISSION_ALLOWED,
                               ACTION_VOTE                  => PERMISSION_ALLOWED,
                               ACTION_NEW_GROUP             => PERMISSION_ALLOWED);
    }

    public function getPermission(User $user, $action)
    {
        global $sDB;

        if(!$this->validateAction($action))
        {
            return PERMISSION_DISALLOWED;
        }

        $group = $user->group();
        $this->load($group);

        if(@$this->cache[$group][$action])
        {
            return $this->cache[$group][$action];
        }

        return $this->actions[$action];
    }

    private function validateAction($action)
    {
        if(@$this->actions[$action])
        {
            return true;
        }

        return false;
    }

    private function load($group)
    {
        global $sDB;

        if(@$this->cache[$group])
        {
            return true;
        }

        $this->cache[$group] = Array();

        $res = $sDB->exec("SELECT * FROM `permissions` WHERE `groupId` = '".i($group)."';");
        while($row = mysqli_fetch_object($res))
        {
            $this->cache[$group][$row->action] = $row->state;
        }

        return true;
    }

    private $cache;
    private $actions;
}
?>
