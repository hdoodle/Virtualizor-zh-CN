<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cron_lang.php
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

$l['upd_avail_sub'] = 'Virtualizor升级v&soft-1;可用';
$l['upd_avail'] = 'Virtualizor升级v&soft-1;可用。
由于“自动升级”被关闭，你将需要手工升级到最新版本。
要做到这一点，请访问：
管理面板->配置->更新

关于新版本以下信息：
&soft-2;

来自Virtualizor计划作业';

$l['upd_avail_suc_sub'] = '成功升级到Virtualizor v&soft-1;';
$l['upd_avail_suc'] = 'Virtualizor升级v&soft-1;可用。
Virtualizor成功升级到最新版本。
下面是升级尝试的日志：
&soft-2;

关于新版本以下信息：
&soft-3;

来自Virtualizor计划作业';

$l['upd_avail_err_sub'] = '失败升级到Virtualizor v&soft-1;';
$l['upd_avail_err'] = 'Virtualizor升级v&soft-1;可用。
Virtualizor尝试升级到最新版本但失败。
下面是升级尝试的日志：
&soft-2;

由于“自动升级”被关闭，你将需要手工升级到最新版本。
要做到这一点，请访问：
管理面板->配置->更新

关于新版本以下信息：
&soft-3;

来自Virtualizor计划作业';

//Admin email limit alert
$l['admin_mail_limit_sub'] = '超出系统资源的使用限制';
$l['admin_mail_limit'] = '

服务器IP：{{ip}}

负载：{{load}}

CPU使用：{{cpu_usage}} %

内存使用：{{ram_usage}} %

磁盘使用：{{disk_usage}} %

/tmp使用：{{tmp_disk_usage}} %

{{sn}} {{ip}}';

// Slave server status email
$l['slave_offline_sub'] = '从属服务器离线';
$l['slave_offline'] = '下面从属服务器处于离线：

{{slave_text}}

{{sn}} {{ip}}';


?>
