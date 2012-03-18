<?php
// Common
$lang['friendlyname'] = 'CDN Pickrrr';
$lang['moddescription'] = 'CDNPickrrr is a simple listing of libraries hosted on a CDN in your CMSMS backend';
$lang['postinstall'] = 'CDNPickrrr has been installed. Make sure you have "Use CDNPickrrr" or "Modify Templates" permissions set.';
$lang['postuninstall'] = 'Thank you for trying this module';
$lang['really_uninstall'] = 'Are you sure you want to uninstall this module?';
$lang['uninstalled'] = 'CDNPickrrr Module Uninstalled.';
$lang['installed'] = 'Module version %s installed.';
$lang['upgraded'] = 'CDNPickrrr Module upgraded to version %s.';
// Panel
$lang['admin_description'] = '<h3>Copying single Library link</h3>
<p>If you quickly want to copy a library link simply click on "copy" icon which will copy whole script tag to your clipboard.</p>
<h3>Selecting multiple libraries</h3>
<p>To copy multiple Libraries, select these by clicking on "On" button.<br /> On top of Admin panel a code box will appear, showing your selection. Copy text inside of it and simply paste in your Template.</p>';
$lang['provider'] = 'Provider';
$lang['on'] = 'On';
$lang['off'] = 'Off';
$lang['copied_to_clipboard'] = 'Copied to clipboard:';
$lang['copy_to_clipboard'] = 'Copy to clipboard';
// Help
$lang['help_text'] = '
<h3>What does this module do?</h3>
<p>Well to be honest not much.<br />
<strong>It has no Tag and no parameters</strong><br />
If you have ever been in a situation where you wanted to include a Library from a CDN like Google or Microsoft but just couldn\'t remember what the URL was.<br />
Then opening yet another Browser tab, searching through your Bookmarks. Now this module comes to your rescue.</p>
<p>CDNPickrrr doesn\'t do much but listing all possible libraries in CMSMS backend, making it easy for you to choose and copy correct path to your chosen library.</p>
<h3>Using it</h3>
<p>Using the module is staright forward. After the module has been installed you can find it under "Layout &raquo; CDN Pickrrr". You will find a simple panel with a long list of popular JavaScript Libraries.<br />
You have the possibility to simply copy the &lt;script&gt; tag with CDN path to script by clicking on "Copy to clipboard" icon. If you want to select multiple Libraries, simply select these by clicking on "On" button, when you are done
copy tags that are visible in code box</p>
<p>You probably wonder why doesn\'t this module do more. Like why isn\'t there a simple tag that would output your selection in your template.<br />
Well there is a reason why i made a decision not to make it that easy for you. As you might know every active module needs memory, every tag has to be rendered first through Smarty, means slowing your site down, wasting resources.<br />
This might not make you as happy but there is no reason to have a Smarty tag for a simple action like inserting a simple html tag in your Template.</p>
<p><strong>After you are done with your selection or finished with your Template and ready to deploy, i would suggest to disable or even uninstall this module as it\'s not like you are going to change your included Libraries daily right?</strong></p>  
<h3>Contribute</h3>
<p>If you find more CDN\'s that might be useful and would like to see these included in next releases feel free to commit to GitHub https://github.com/uniqu3/CDNPickrrr/blob/master/lib/scripts/resources.json</p> 
';
$lang['changelog'] = 'It\'s fresh nothing changed';
?>
