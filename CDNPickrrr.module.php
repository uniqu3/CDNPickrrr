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
/**
 * @author Goran Ilic
 * @since 0.1
 * @version 0.1
 * @license GPL
 **/ 
class CDNPickrrr extends CMSModule {

    function GetName() {
        return 'CDNPickrrr';
    }

    function GetFriendlyName() {
        return $this->Lang('friendlyname');
    }

    function GetVersion() {
        return '0.2';
    }

    function GetHelp() {
        $this->smarty->assign('help_text', $this->Lang('help_text'));
        return $this->ProcessTemplate('help.tpl');
    }

    function GetAuthor() {
        return 'Goran Ilic';
    }

    function GetAuthorEmail() {
        return 'uniqu3e@gmail.com';
    }

    function GetChangeLog() {
        return $this->Lang('changelog');
    }

    function IsPluginModule() {
        return false;
    }

    function HasAdmin() {
        return true;
    }

    function GetAdminSection() {
        return 'layout';
    }

    function GetAdminDescription() {
        return $this->Lang('moddescription');
    }

    public function CheckAccess() {
         return $this->CheckPermission('Use CDNPickrrr') || $this->CheckPermission('Modify Templates');
    }    

    function VisibleToAdminUser() {
        return $this->CheckAccess();
    }

    function GetDependencies() {
        return array();
    }

    function MinimumCMSVersion() {
        return "1.9";
    }

    function MaximumCMSVersion() {
        return "1.10.3";
    }

    public function SetParameters() {
        if (version_compare(CMS_VERSION, '1.10') < 0) {
            $this->InitializeFrontend();
            $this->InitializeAdmin();
        }
    }
    
    public function GetHeaderHTML() {
        $header = '
        <link rel="stylesheet" type="text/css" href="' . $this->GetModuleURLPath() . '/lib/style/style.css" />
        <script src="' . $this->GetModuleURLPath() . '/lib/scripts/ZeroClipboard.js" type="text/javascript" charset="utf-8"></script>
        <script src="' . $this->GetModuleURLPath() . '/lib/scripts/functions.js" type="text/javascript" charset="utf-8"></script>
        ';        
        return $header;
    }
    
    public function LazyLoadAdmin() {
        return true;
    }    

    function InstallPostMessage() {
        return $this->Lang('postinstall');
    }

    function UninstallPostMessage() {
        return $this->Lang('postuninstall');
    }

    function UninstallPreMessage() {
        return $this->Lang('really_uninstall');
    }  
} //end class
?>
