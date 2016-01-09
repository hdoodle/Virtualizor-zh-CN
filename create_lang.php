<?php

//////////////////////////////////////////////////////////////
//===========================================================
// create_lang.php
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

$l['no_type'] = '请给出虚拟化类型';
$l['num_vs_over'] = '你已经创建了所允许的VM最大数目';

$l['slave_cant'] = '添加虚拟服务器错误';
$l['slave_cant_exp'] = '从属服务器不允许添加虚拟服务器！';
$l['none_plan'] = '无';
$l['no_hname'] = '请给出主机名';
$l['no_os'] = '请选择VPS的系统';
$l['no_rootpass'] = '请给出ROOT密码';
$l['no_disk_space'] = '请给出需要分配的磁盘大小';
$l['no_ram'] = '请给出需要分配的内存大小';
$l['no_vncpass'] = '请给出VNC密码';
$l['no_bandwidth'] = '请给出流量限制';
$l['no_cpu_units'] = '请给出CPU单元';
$l['no_cpu_cores'] = '请给出CPU核心数';
$l['cores_max'] = '最大核心数';
$l['invalid_sg'] = '您选择的区域无效';
$l['invalid_virt'] = '您选择的区域不支持您所选择的虚拟化';
$l['no_percent_cpu'] = '请指定允许的百分比的CPU利用率';
$l['no_swap_ram'] = '请指定SWAP RAM';
$l['no_burst_ram'] = '请指定突发内存的限制';
$l['no_inodes'] = '请指定允许的inode数';
$l['no_io'] = '请选择I/O优先级';
$l['invalid_os'] = '您提交的操作系统是无效的';
$l['no_ip'] = '请为VPS至少指定一个IP';
$l['invalid_ip'] = '下面的IP无效：';
$l['used_ip'] = '下面的IP被其他VPS使用：';
$l['err_insert'] = '保存新的VPS信息时出错。';
$l['err_create'] = '创建VPS错误。<a href="'.$globals['index'].'act=rebuild&vpsid=&soft-1;">点击此处重新安装虚拟服务器</a>';
$l['err_rootpass'] = '设置新的VPS的root密码错误';
$l['err_vncpass'] = '设置新的VNC的密码错误';
$l['invalid_uid'] = '您提交的用户不存在';
$l['no_user'] = '您没有指定用户的电子邮件';
$l['no_user_pass'] = '您没有指定用户密码';
$l['invalid_email'] = '用户的电子邮件地址无效';
$l['emailexist'] = '您指定的新用户的电子邮件已经存在';
$l['err_user'] = '新建用户时出错';
$l['err_start'] = '启动新的VPS时出错';
$l['err_numvs'] = '您的许可不允许建立更多VPS';
$l['err_mac'] = '请指定MAC地址';
$l['err_dns'] = '请指定正确的域名服务器';
$l['err_tccreate'] = '设置网络限制时出错';
$l['invalid_hostname'] = '您提交的主机名无效';
$l['no_nonalphanumeric'] = '没有非字母数字字符允许用于VNC密码';
$l['no_shadow'] = '你没有指定阴影内存';
$l['err_save_slave'] = '保存VPS数据在从服务器时出错。请确保从服务器工作正常。';
$l['less_ram'] = '您没有足够的内存来创建此VPS';
$l['less_burst'] = '您没有足够的脉冲RAM来创建此VPS';
$l['less_space'] = '您没有足够的磁盘空间来创建此VPS';
$l['less_inodes'] = '索引节点应该不低于50000';
$l['less_vs'] = '您不被允许创建更多虚拟机';
$l['less_bandwidth'] = '您没有足够的带宽来创建此VPS';
$l['less_ipv4'] = '您没有足够的IPv4地址来创建此VPS';
$l['less_ipv6'] = '您没有足够的IPv6地址来创建此VPS';
$l['less_ipv6_subnet'] = '您没有足够的IPv6子网来创建此VPS';
$l['max_cores_exceeded'] = '不允许创建一个有如此多核心的虚拟机';
$l['less_cores'] = '您没有足够的CPU内核来创建此VPS';
$l['no_user_resource'] = '您已达到允许您创建的用户的最大数量';
$l['no_server'] = '您选择的服务器已用完，没有足够的资源来创建此VM。请向管理员报告';
$l['ipv4_over'] = '您选择的区域没有足够的IPv4资源来创建此虚拟机。请向管理员报告';
$l['ipv6_over'] = '您选择的区域没有足够的IPv6资源来创建此虚拟机。请向管理员报告';
$l['ipv6_subnet_over'] = '您选择的区域没有足够的IPv4子网来创建此虚拟机。请向管理员报告';
$l['no_webuzo_template'] = '您选择的操作系统模板不是Webuzo模板';
$l['err_swapsize'] = '指定的SWAP大小不能大于或等于规定的总磁盘空间';
$l['inv_kvm_cache'] = '提交的磁盘缓存是无效的';
$l['inv_io_mode'] = '提交的I/O策略是无效的';
$l['inv_vnc_keymap'] = '提交的VNC键盘映射无效';
$l['err_vpslimit'] = '超过VPS创建限制';


// Theme strings
$l['<title>'] = '启动实例';
$l['page_head'] = '启动实例';
$l['vstype'] = '类别';

$l['add_vs'] = '添加虚拟服务器';
$l['done'] = '虚拟服务器已创建。返回<a href="'.$globals['index'].'act=listvs">虚拟服务器总览</a>';
$l['newvs_vpsid'] = 'VPS ID';
$l['newvs_vps_name'] = 'VPS名称';
$l['newvs_rootpass'] = 'Root密码';
$l['newvs_vnc'] = 'VNC详情';
$l['newvs_vncpass'] = 'VNC密码';
$l['newvs_ips'] = 'IP';
$l['newvs_ips6'] = 'IPv6';
$l['vs_server'] = '服务器';
$l['exp_server'] = '改变当前服务器来更改服务器';
$l['vs_ser_id'] = 'ID';
$l['vs_user'] = '用户';
$l['vs_user_exp'] = '选择现有的用户或添加用户';
$l['user_email'] = '用户电子邮件';
$l['user_pass'] = '密码';
$l['add_user'] = '添加用户';
$l['regions'] = '区域';
$l['virt_type'] = '虚拟化技术';
$l['os'] = '操作系统';
$l['select'] = '选择';
$l['vs_plan'] = '选择套餐';
$l['plan_exp'] = '选择预先定义好的套餐';
$l['hvm'] = 'Xen HVM';
$l['hvm_exp'] = '是否要为这个VPS启用完全虚拟化？';
$l['vsos'] = '操作系统';
$l['vsos_exp'] = '选择VPS的操作系统';
$l['vsiso'] = 'ISO';
$l['vsiso_exp'] = '如果ISO选择了该机将会从ISO启动';
$l['sec_vsiso'] = 'ISO次要CD ROM';
$l['sec_vsiso_exp'] = '选择ISO作为次要CD ROM';
$l['none'] = '无';
$l['rootpass'] = 'VPS Root密码';
$l['rootpass_exp'] = 'VPS的root/Administraotor的密码';
$l['randpass'] = '另一个随机密码';
$l['hostname'] = '主机名';
$l['hostname_exp'] = '输入VPS主机名。e.g. www.domain.com';
$l['ip'] = 'IP地址';
$l['ips_exp'] = '您可以从IP池选择或指定其他IP地址';

$l['ips'] = 'IP地址';
$l['ips_exp'] = '可以指定IP数量来分配';
$l['ips6_subnet'] = 'IPv6子网';
$l['ips6_subnet_exp'] = '可以指定IPv6子网的数量分配';
$l['ips6'] = 'IPv6地址';
$l['ips6_exp'] = '可以指定IPv6的数量来分配';
$l['add_ip'] = '+';
$l['remove_ip'] = '-';
$l['add_to_ips'] = '<<';
$l['rem_from_ips'] = '删除这个IP';
$l['add_dns'] = '+';
$l['hdd'] = '磁盘空间';
$l['exp_hdd'] = 'VPS允许的磁盘空间';
$l['mac'] = 'MAC地址';
$l['exp_mac'] = '六组的两个十六进制数字用冒号分隔，例如01:23:45:67:89:ab';
$l['space_gb'] = 'GB';
$l['inodes'] = '索引节点';
$l['iondisk'] = '允许在VPS内索引节点（即文件）的最大数量。建议值：500000+';
$l['gram'] = '保证内存';
$l['exp_gram'] = '保障的VPS内存大小';
$l['ram_mb'] = 'MB';
$l['bram'] = '突发内存';
$l['exp_bram'] = '突发的VPS内存大小';
$l['swap'] = '交换内存';
$l['exp_swap'] = '';
$l['exp_swap_hvm'] = '如果上面有选择操作系统模板，将尝试创建交换分区';
$l['band'] = '流量';
$l['exp_band'] = 'VPS的每月流量限制。0表示无限制';
$l['band_gb'] = 'GB';
$l['cpunit'] = 'CPU单元';
$l['cpalloc'] = 'CPU单元待分配';
$l['cpalloc_xen'] = '推荐值：256';
$l['cpalloc_openvz'] = '推荐值：1000';
$l['cpalloc_kvm'] = '推荐值：1024';
$l['units'] = '单元';
$l['cores'] = 'CPU核心';
$l['cpucore_exp'] = '推荐值：';
$l['percent'] = 'CPU %';
$l['cpuperutil'] = '相应的VPS不允许超过CPU时间百分比。<br />设置<b>0</b>表示不限制。<br />推荐值10';
$l['io'] = 'I/O优先级';
$l['io0-7'] = '从0-7选择优先级';
$l['na'] = '网络速度';
$l['na_exp'] = '请提起网络速度';
$l['ubcsettings'] = 'UBC设置';
$l['exp_ubc'] = '如果选中，那么你将被重定向到编辑VPS的UBC设置';
$l['submit'] = '添加虚拟服务器';
$l['addvoption'] = '高级选项';
$l['addvhide']	= '隐藏高级选项';
$l['network_speed'] = '网络速度';
$l['network_speed_exp'] = '输入0或留空为不限制。<br />可以从选择框中获得值';
$l['upload_speed'] = '上传速度';
$l['upload_speed_exp'] = '输入0或留空为不限制。<br />可以从选择框中获得值';
$l['net_kb'] = 'KB/s';
$l['no_limit'] = '不限制';
$l['shadow'] = '影子内存';
$l['shadow_exp'] = '推荐值：8 MB';
$l['vncpass'] = 'VNC密码';
$l['vncpass_exp'] = 'VPS的VNC密码。点击图标生成一个新的随机密码';
$l['free'] = '免费';
$l['band_suspend']= '流量暂停';
$l['exp_band_suspend'] = '如果超过规定的带宽暂停VPS';
$l['tuntap'] = 'Tun/Tap';
$l['ppp'] = 'PPP';
$l['exp_tuntap'] = '启用Tun/Tap';
$l['exp_ppp'] = '启用PPP';
$l['osreinstall'] = '系统重装限制';
$l['exp_osreinstall'] = '如果你想限制每月重装系统的次数。<br />Eg. 0 - 无限制';
$l['changenic'] = '虚拟网络接口类型';
$l['exp_changenic'] = '如果你想改变网络接口类型。选项为默认或E1000。<b>virtio</b>将用作虚拟NIC类型如果<b>virtio</b>被启用';
$l['add_route'] = '使用路由网络';
$l['exp_add_route'] = '如果选中，它将使用路由的网络。';
$l['nic_default'] = 'Realtek 8139';
$l['nic_e1000'] = 'Intel E1000';
$l['change_vif_type'] = '虚拟网络接口模拟类型';
$l['exp_change_vif_type'] = '如果你想改变网络接口仿真类型。选项为<b>netfront</b>和<b>ioemu</b>。';
$l['viftype_ioemu'] = 'ioemu';
$l['viftype_netfront'] = 'netfront';
$l['usevirtio'] = '启用Virtio';
$l['exp_usevirtio'] = '使用<b>virtio</b>为IO虚拟化方式';	
$l['usesec_cdrom'] = '启用次要CD-ROM';
$l['exp_usesec_cdrom'] = '启用这个来附加一个次要的ISO到虚拟机。';	
$l['kvm_cache'] = '磁盘缓存';
$l['exp_kvm_cache'] = '控制的缓存机制';
$l['io_mode'] = 'I/O策略';
$l['vnc_keymap'] = 'VNC命令行键盘映射';
$l['dns'] = 'DNS域名服务器';
$l['exp_dns'] = '如果不了解，那么请使用4.2.2.1和4.2.2.2';
$l['mg'] = '介质组';
$l['mg_exp'] = '如果没有赋予介质组，那么所有的介质将提供给该VPS。';
$l['apps'] = '应用程序';
$l['apps_exp'] = '选择你要安装的Webuzo应用';
$l['ploop'] = 'Ploop';
$l['ploop_exp'] = '如果启用，VPS将以Ploop格式创建';

$l['mac_temp_vncdetails'] = 'MAC地址：';
$l['mail_temp_vnctitle'] = 'VNC详情：';
$l['mail_temp_vncdetails'] = 'VNC详情：';
$l['mail_temp_vncpasswd'] = 'VNC密码：';

$l['reinstall'] = '重装虚拟服务器';
$l['space'] = '磁盘空间';
$l['space_exp'] = 'VPS允许的磁盘空间';
$l['ram'] = '保证内存';
$l['ram_exp'] = '保障的VPS内存大小';
$l['burst'] = '突发RAM';
$l['burst_exp'] = '突发的VPS内存大小';
$l['swap'] = 'Swap内存';
$l['swap_exp'] = '';
$l['swap_hvm'] = '如果上面有选择操作系统模板，将尝试创建交换分区';
$l['bandwidth'] = '流量';
$l['bandwidth_exp'] = '每个月VPS的流量限制。0表示不限制';


//Progress Updates
$l['checking_data'] = '正在检查提交数据……';
$l['beginning_creation'] = '正在开始VPS创建……';
$l['building_vps'] = '正在构建VPS……';
$l['setting_mac'] = '正在插入数据库……';
$l['setting_pass'] = '正在设置ROOT密码……';
$l['starting_vps'] = '正在启动VPS……';
$l['verfying_vps'] = '正在验证VPS构建……';
$l['final_steps'] = '正在完成最后操作……';
$l['pbar_notice'] = '注意：这个操作可能要一小会儿。';
$l['pbar_tip'] = '从这个页面导航走，不会影响这一操作。';
$l['overcomit_free'] = '过量使用免费的RAM';
$l['free'] = '免费';
$l['unlimited'] = '无限制';
$l['submit'] = '创建';
$l['strength_indicator'] = '强度指示';
$l['bad'] = '弱';
$l['good'] = '一般';
$l['strong'] = '强';
$l['short'] = '过短';
$l['weak_pass'] = '密码必须包含至少以下3个：大写字母，小写字母，数字或特殊符号';


?>
