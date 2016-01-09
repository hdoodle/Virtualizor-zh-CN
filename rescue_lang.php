<?php

//////////////////////////////////////////////////////////////
//===========================================================
// changepassword_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('Hacking Attempt');

}

$l['err_rescue_enable'] = '启动救援模式时遇到了错误';
$l['err_rescue_disable'] = '停用救援模式时遇到了错误';
$l['err_downloading'] = '下载救援模板时遇到了错误';
$l['err_delete_disk'] = '删除救援磁盘时遇到了错误';
$l['cant_rescue'] = '当ISO被挂载时无法进行救援操作。请先移除ISO';

// Theme strings
$l['<title>'] = '救援模式';
$l['rescue_exp'] = '救援模式提供从另一个磁盘启动一个小型Linux环境的能力，这样你可以拯救你的主VPS或者是其上的备份文件';
$l['enable_rescue'] = '启动救援模式';
$l['rescue_enabled'] = '救援模式目前已启用。';
$l['disable_rescue'] = '停用救援模式';
$l['rescue_disabled'] = '救援模式目前已停用。';
$l['resuce_enable_success'] = '成功启用救援模式';
$l['resuce_disable_success'] = '成功停用救援模式';
$l['rescue_enable_notify'] = '正在启用救援模式……';
$l['rescue_disable_notify'] = '正在禁用救援模式……';
$l['root_pass'] = 'ROOT密码';
$l['root_pass_conf'] = '确认密码';



?>
