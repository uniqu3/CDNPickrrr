<?php
#-------------------------------------------------------------------------
# Module: CDNPickrrr
# Version: 0.1 Goran Ilic
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2010 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
# The module's homepage is: https://github.com/uniqu3/CDNPickrrr & http://dev.cmsmadesimple.org/projects/cdnpickrrr
#
#-------------------------------------------------------------------------
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------
if (!is_object(cmsms()))exit ;

if (!$this->CheckAccess()) {
    echo $this->ShowErrors($this->Lang('accessdenied', array('Use CDNPickrrr')));
    return;
}

$admintheme = cmsms()->get_variable('admintheme');
$resources = file_get_contents(dirname(__FILE__) . '/lib/scripts/resources.json');
$items     = json_decode($resources);

$smarty->assign('admin_description', $this->Lang('admin_description'));
$smarty->assign('items', $items);
$smarty->assign('provider', $this->Lang('provider'));
$smarty->assign('on', $this->Lang('on'));
$smarty->assign('off', $this->Lang('off'));
$smarty->assign('copied', $this->Lang('copied_to_clipboard'));
$smarty->assign('copy_image', $admintheme->DisplayImage('icons/system/copy.gif', $this->Lang('copy_to_clipboard')));
echo $this->ProcessTemplate('adminpanel.tpl');
?>