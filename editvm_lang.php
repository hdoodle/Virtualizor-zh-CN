<?php

//////////////////////////////////////////////////////////////
//===========================================================
// vpsmanage_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 2.0.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Julien
// Date:       14th Dec 2011
// Time:       16:00 hrs
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

// Theme strings
$l['<title>'] = '编辑VPS';
$l['page_head'] = '编辑实例';
$l['vs_user'] = '用户';
$l['vs_user_exp'] = '选择现有的用户或添加用户';
$l['user_email'] = '用户电子邮件';
$l['user_pass'] = '密码';
$l['add_user'] = '添加用户';
$l['unknown'] = '未知';
$l['vsos'] = '操作系统';
$l['vsos_exp'] = '选择VPS的操作系统';
$l['vsiso'] = 'ISO';
$l['vsiso_exp'] = '如果ISO选择了该机将会从ISO启动';
$l['none'] = '无';
$l['hostname'] = '主机名';
$l['hostname_exp'] = '输入VPS主机名。e.g. www.domain.com';
$l['rootpass'] = 'VPS Root密码';
$l['rootpass_exp'] = 'VPS的root/Administraotor的密码';
$l['randpass'] = '另一个随机密码';
$l['ips'] = 'IP地址';
$l['ips_exp'] = '可以指定IP数量来分配';
$l['ips6_subnet'] = 'IPv6子网';
$l['ips6_subnet_exp'] = '可以指定IPv6子网的数量分配';
$l['randpass'] = '另一个随机密码';
$l['free'] = '免费';
$l['ips6'] = 'IPv6地址';
$l['ips6_exp'] = '您可以指定的IPv6数量来分配或从IPv6池选择';
$l['space'] = '磁盘空间';
$l['space_exp'] = 'VPS允许的磁盘空间';
$l['ram'] = '保证内存';
$l['ram_exp'] = '保障的VPS内存大小';
$l['burst'] = '突发RAM';
$l['burst_exp'] = '突发的VPS内存大小';
$l['swap'] = 'Swap内存';
$l['swap_exp'] = '';
$l['bandwidth'] = '流量';
$l['bandwidth_exp'] = '每个月VPS的流量限制。0表示不限制';
$l['cores'] = 'CPU核心';
$l['cpucore_exp'] = '推荐值：';
$l['cores_max'] = '最大核心数';
$l['unlimited'] = '无限制';
$l['network_speed'] = '网络速度';
$l['network_speed_exp'] = '输入0或留空为不限制。<br />可以从选择框中获得值';
$l['upload_speed'] = '上传速度';
$l['upload_speed_exp'] = '输入0或留空为不限制。<br />可以从选择框中获得值';
$l['net_kb'] = 'KB/s';
$l['no_limit'] = '不限制';
$l['vncpass'] = 'VNC密码';
$l['vncpass_exp'] = 'VPS的VNC密码。点击图标生成一个新的随机密码';
$l['submit'] = '编辑虚拟服务器';
$l['done'] = '虚拟服务器编辑完成。返回<a href="'.$globals['index'].'act=listvs">虚拟服务器总览</a>';
$l['addvoption'] = '高级选项';
$l['no_uid'] = '未选择用固话';
$l['usevirtio'] = '启用virtio';
$l['exp_usevirtio'] = '使用<b>virtio</b>为IO虚拟化技术';	

// Error strings
$l['no_nonalphanumeric'] = '没有非字母数字字符允许用于VNC密码';
$l['less_space'] = '您没有足够的磁盘空间来创建此VPS';
$l['less_ram'] = '您没有足够的内存来创建此VPS';
$l['max_cores_exceeded'] = '不允许创建一个有如此多核心的虚拟机';
$l['less_cores'] = '您没有足够的CPU内核来创建此VPS';
$l['less_burst'] = '您没有足够的脉冲RAM来创建此VPS';
$l['ipv4_over'] = '您选择的区域没有足够的IPv4资源来创建此虚拟机。请向管理员报告';
$l['ipv6_over'] = '您选择的区域没有足够的IPv6资源来创建此虚拟机。请向管理员报告';
$l['ipv6_subnet_over'] = '您选择的区域没有足够的IPv4子网来创建此虚拟机。请向管理员报告';
$l['less_ipv4'] = '您没有足够的IPv4地址来创建此VPS';
$l['less_ipv6'] = '您没有足够的IPv6地址来创建此VPS';
$l['less_ipv6_subnet'] = '您没有足够的IPv6子网来创建此VPS';
$l['wrong_user'] = '你不能改变用户';
$l['only_user'] = '编辑VM的用户，资源不能被改变';
$l['strength_indicator'] = '强度指示';
$l['bad'] = '弱';
$l['good'] = '一般';
$l['strong'] = '强';
$l['short'] = '过短';
$l['weak_pass'] = '密码必须包含至少以下3个：大写字母，小写字母，数字或特殊符号';

?>
