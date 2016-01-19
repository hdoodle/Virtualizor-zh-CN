<?php

//////////////////////////////////////////////////////////////
//===========================================================
// enduser_lang.php
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

// Header
$l['loading'] = '加载中……';
$l['disconnected'] = '未连接。请稍后重试。';
$l['save'] = '保存';
$l['delete'] = '删除';
$l['edit'] = '编辑';
$l['id'] = 'ID';
$l['ip'] = 'IP地址';
$l['name'] = '名称';
$l['domain'] = '域名';
$l['manage'] = '管理';
$l['desc'] = '描述';
$l['cancel'] = '取消';
$l['ram'] = '保障内存';
$l['burst'] = '突发内存';
$l['user'] = '用户';
$l['state'] = '状态';
$l['hostname'] = '主机名';
$l['close'] = '关闭';
$l['disk'] = '磁盘';
$l['time'] = '时间';
$l['cpu'] = 'CPU';
$l['strength_indicator'] = '强度指示';
$l['bad'] = '弱';
$l['good'] = '一般';
$l['strong'] = '强';
$l['short'] = '过短';
$l['weak_pass'] = '密码必须包含至少以下3个：大写字母，小写字母，数字或特殊符号';
$l['pass_match'] = '密码不匹配';
$l['refresh_page'] = '重载页面';
$l['logo'] = '徽标';
$l['execute'] = '执行';
$l['go'] = '前往';
$l['info'] = '信息';
$l['total_speed'] = '目前速度';
$l['upload'] = '上传';
$l['download'] = '下载';
$l['free'] = '空闲';
$l['used'] = '已使用';
$l['in'] = '进';
$l['out'] = '出';
$l['usage'] = '使用量';
$l['with_selected'] = '对选中的';
$l['jan'] = '一月';
$l['feb'] = '二月';
$l['mar'] = '三月';
$l['apr'] = '四月';
$l['may'] = '五月';
$l['jun'] = '六月';
$l['jul'] = '七月';
$l['aug'] = '八月';
$l['sep'] = '九月';
$l['oct'] = '十月';
$l['nov'] = '十一月';
$l['dec'] = '十二月';
$l['month'] = '月';
$l['bandwidth'] = '流量';
$l['january'] = '一月';
$l['february'] = '二月';
$l['march'] = '三月';
$l['april'] = '四月';
$l['may_long'] = '五月';
$l['june'] = '六月';
$l['july'] = '七月';
$l['august'] = '八月';
$l['september'] = '九月';
$l['october'] = '十月';
$l['november'] = '十一月';
$l['december'] = '十二月';
$l['sunday'] = '周日';
$l['monday'] = '周一';
$l['tuesday'] = '周二';
$l['wednesday'] = '周三';
$l['thursday'] = '周四';
$l['friday'] = '周五';
$l['saturday'] = '周六';
$l['total'] = '总计';
$l['day'] = '天';

// Datatable related langs
$l['to'] = 'to';
$l['of'] = 'of';
$l['search'] = '搜索';
$l['entries'] = '项';
$l['showing'] = '显示';
$l['show'] = '显示';
$l['previous'] = '前一个';
$l['next'] = '下一个';
$l['first'] = '第一';
$l['last'] = '最后';
$l['no_data_avail'] = '无可用数据在表中';
$l['filtered_from'] = '从过滤';
$l['total_entries'] = '总数';
$l['no_match_record'] = '未找到匹配的记录';

$l['is_managed'] = '此VPS只能被管理员管理。';

// VPS Manage lang string - prefix : vm_
$l['vm_no_new'] = '没有指定新密码。';
$l['vm_no_conf'] = '确认密码丢失。';
$l['vm_no_match'] = '密码不匹配';
$l['vm_err_changing'] = '更改密码时出现错误';
$l['vm_no_nonalphanumeric'] = '没有非字母数字字符被允许';

// Theme strings
$l['vm_vpsmanagement'] = 'VPS管理';
$l['vm_advoptions'] = '高级选项';
$l['vm_lm_ssh'] = 'SSH';
$l['vm_lm_controlpanel'] = '控制面板';
$l['vm_info'] = '信息';
$l['vm_lv_type'] = '类别';
$l['vm_lv_os'] = '系统';
$l['vm_lv_hname'] = '主机名';
$l['vm_lv_sname'] = '服务器';
$l['vm_lv_IP'] = 'IP地址';
$l['vm_vps_start'] = '启动';
$l['vm_vps_stop'] = '停止';
$l['vm_vps_restart'] = '重启';
$l['vm_vps_poweroff'] = '关机';
$l['vm_vps_suspended'] = '暂停';
$l['vm_monitor'] = '监控';
$l['vm_lm_changepass'] = '修改密码';
$l['vm_lm_hvmsettings'] = 'VPS设置';
$l['vm_lm_vnc'] = 'VNC';
$l['vm_lm_vncpass'] = 'VNC密码';
$l['vm_lm_ostemp'] = '重装系统';
$l['vm_lv_backtolist'] = '返回VPS列表';
$l['vm_bandwidth'] = '流量';
$l['vm_lm_rescue_mode'] = '救援模式';
$l['vm_lm_support'] = '支持';
$l['vm_lv_status'] = '状态';
$l['vm_lm_manage_subnet'] = '管理IPv6子网';
$l['vm_lm_console'] = '串行控制台';
$l['vm_tip_startstop'] = '启动/停止VPS';
$l['vm_tip_restart'] = '重新启动VPS';
$l['vm_tip_poweroff'] = '令VPS关机';
$l['vm_tip_hname'] = '改变VPS的主机名';
$l['vm_tip_rootpassword'] = '更改VPS的root密码';
$l['vm_tip_ips'] = '设置主IP';
$l['vm_tip_vpsconfig'] = '配置其它设置';
$l['vm_tip_ssh'] = '通过SSH连接到VPS。';
$l['vm_tip_vnc'] = '通过VNC连接到VPS。';
$l['vm_tip_vncpass'] = '修改VNC密码。';
$l['vm_tip_os'] = '重新安装当前或新的操作系统。';
$l['vm_tip_cp'] = '安装您选择的控制面板。';
$l['vm_tip_backup'] = '备份或恢复VPS。';
$l['vm_tip_monitor'] = '监测VPS的资源使用情况。';
$l['vm_tip_proc'] = '查看在VPS内运行的进程的列表。';
$l['vm_tip_services'] = '查看在VPS内运行的服务的列表。';
$l['vm_tip_slogs'] = '查看VPS的状态日志。';
$l['vm_tip_logs'] = '查看VPS的日志。';
$l['vm_tip_sysalerts'] = '查看VPS的关键系统警报。';
$l['vm_tip_bandwidth'] = '查看该VPS的带宽使用';
$l['vm_tip_rescue'] = 'Rescue Mode';
$l['vm_tip_manage_subnet'] = '添加/删除IPv6地址';
$l['vm_ssh_notice'] = 'SSH将工作如果Java安装并启用。';
$l['vm_tip_console'] = '控制台访问';
$l['vm_vps_access_control'] = '电源选项';
$l['vm_bw_stats'] = '流量统计';
$l['vm_monthly_chart'] = '月度图';
$l['vm_server_stats'] = '服务器状态';
$l['vm_lm_status_online'] = '在线';
$l['vm_lm_status_offline'] = '离线';
$l['vm_lm_status_suspended'] = '已暂停';
$l['vm_vps_is_suspended'] = '这VPS被暂停。你不能对VPS进行任何操作！';
$l['vm_suspend_reason_bw'] = '这VPS是由于带宽的过度使用暂停。你不能对VPS进行任何操作！';
$l['vm_tip_recipe'] = '菜谱';
$l['vm_lm_recipe'] = '菜谱';

// listvs lang string - prefix : lst_
$l['lst_virtual_servers'] = '虚拟服务器';
$l['lst_page_head'] = '虚拟服务器';
$l['lst_no_vs'] = '您的账号下暂无VPS';
$l['lst_lv_mb'] = 'MB';
$l['lst_vps_id_stat_off'] = '离线';
$l['lst_vps_id_stat_on'] = '在线';
$l['lst_lv_managevps'] = '点这里管理VPS';
$l['lst_lv_type'] = '型号';
$l['lst_lv_os'] = '操作系统';
$l['lst_lv_hname'] = '主机名';
$l['lst_lv_IP'] = 'IP地址';
$l['lst_lv_user'] = '用户';
$l['lst_lv_state'] = '状态';
$l['lst_lv_delvs'] = '删除VPS';
$l['lst_vps_state_started'] = '已启动';
$l['lst_vps_state_stopped'] = '已停止';
$l['lst_vps_state_suspended'] = '已暂停';
$l['lst_conf_del'] = '您真的要删除该VPS吗？';
$l['lst_error_connect'] = '连接宿主机时发生了错误';
$l['lst_del_done_msg'] = '该VPS已被删除';
$l['lst_sus_done_msg'] = '该VPS已被暂停';
$l['lst_unsus_done_msg'] = '该VPS已解除暂停';
$l['lst_lv_editvs'] = '修改VPS';
$l['lst_lv_sname'] = '服务器';
$l['lst_conf_sus'] = '您真的要暂停该VPS吗？';
$l['lst_conf_unsus'] = '您真的要解除对该VPS的暂停吗？';
$l['lst_lv_suspendvs'] = '暂停VPS';
$l['lst_lv_unsuspendvs'] = '解除VPS的暂停';

// start lang string - prefix : svm_
$l['svm_some_error'] = '未能成功完成此操作';
$l['svm_page_head'] = '启动VPS';
$l['svm_done'] = '成功启动VPS';
$l['svm_sub_but'] = '启动VPS';
$l['svm_cur_stat'] = '状态';
$l['svm_status_1'] = '在线';
$l['svm_status_0'] = '离线';
$l['svm_vps_stop'] = '停止';

// stop lang string - prefix : stvm_
$l['stvm_some_error'] = '未完成操作';
$l['stvm_page_head'] = '停止VPS';
$l['stvm_done'] = '成功停止VPS';
$l['stvm_sub_but'] = '停止VPS';
$l['stvm_cur_stat'] = '状态';
$l['stvm_status_1'] = '在线';
$l['stvm_status_0'] = '离线';
$l['stvm_signal_sent'] = '关机信号已送往VPS';
$l['stvm_vps_start'] = '启动';

// restart lang string - prefix : re_
$l['re_some_error'] = '未完成操作';
$l['re_page_head'] = '重启VPS';
$l['re_done'] = '成功重启VPS';
$l['re_sub_but'] = '重启VPS';
$l['re_cur_stat'] = '状态';
$l['re_status_1'] = '在线';
$l['re_status_0'] = '离线';
$l['re_signal_sent'] = 'VPS正在重启';
$l['re_vps_restart'] = '重启';
$l['re_vps_stop'] = '停止';

// poweroff lang string - prefix : po_
$l['po_some_error'] = '未完成操作';
$l['po_page_head'] = '关闭VPS';
$l['po_done'] = '成功关闭VPS';
$l['po_sub_but'] = '关闭VPS';
$l['po_cur_stat'] = '状态';
$l['po_status_1'] = '在线';
$l['po_status_0'] = '离线';
$l['po_vps_start'] = '启动';
$l['po_vps_restart'] = '重启';
$l['po_vps_stop'] = '停止';
$l['po_vps_poweroff'] = '关机';

// users lang string - prefix : usr_
$l['usr_page_head'] = '用户';
$l['usr_add_user'] = '添加用户';
$l['usr_del_not_allowed'] = '你不能删除这个用户';
$l['usr_del_conf'] = '你确定要删除这个用户？';
$l['usr_no_users'] = '没有用户';
$l['usr_user_del'] = '用户已删除';
$l['usr_del_not_allowed_has_vps'] = '用户有VPS，请删除这些，然后删除该用户';

// apikey lang string - prefix : apik_
$l['apik_heading'] = 'API凭证';
$l['apik_api_credentials'] = 'API凭证';
$l['apik_no_key'] = '您没有API凭证，请添加一个。';
$l['apik_h_apikey'] = 'API Key';
$l['apik_h_apipass'] = 'API 密码';
$l['apik_h_del'] = '删除';
$l['apik_create_api_key'] = '创建 API Key Pair';
$l['apik_key_added'] = 'API key pair 已经被创建';
$l['apik_key_deleted'] = 'API key pair 已经被删除';

// adduser lang string - prefix : adu_
$l['adu_no_user_email'] = '您没有输入电子邮箱';
$l['adu_no_user_password'] = '您没有输入密码';
$l['adu_invalid_email'] = '您输入的电子邮箱是错误的';
$l['adu_userlimit_exceeded'] = '您不能再创建新的VPS了，如有问题请联系管理员';
$l['adu_useradd_error'] = '您不能再创建新的用户了，请联系管理员';
$l['adu_page_head'] = '添加用户';
$l['adu_done'] = '已成功添加用户';
$l['adu_user_email'] = '电子邮箱';
$l['adu_user_password'] = '密码';
$l['adu_user_exists'] = '用户已存在。请换一个电子邮箱';

// changepassword lang string - prefix : cpas_
$l['cpas_no_new'] = '您没有指定新密码';
$l['cpas_no_conf'] = '确认密码丢失';
$l['cpas_no_match'] = '密码不匹配';
$l['cpas_err_changing'] = '更改密码时发生了错误。';
$l['cpas_submit_button'] = '更改密码';
$l['cpas_new_pass'] = '新密码';
$l['cpas_old_pass'] = '旧密码';
$l['cpas_retype_pass'] = '重复新密码';
$l['cpas_change_note'] = '更改Root密码';
$l['cpas_change_final'] = '您的密码已经成功更改';
$l['cpas_change_onboot'] = '新密码将在VPS下一次启动后生效';
$l['cpas_change_notify'] = '正在更改VPS的root密码……';
$l['cpas_strength_indicator'] = '强度指示';
$l['cpas_bad'] = '弱';
$l['cpas_good'] = '一般';
$l['cpas_strong'] = '强';
$l['cpas_short'] = '过短';
$l['cpas_weak_pass'] = '密码必须至少含有以下条件中的3个条件：大写字母，小写字母，数字，特殊符号';
$l['cpas_pass_match'] = '密码不匹配';
$l['cpas_disabled'] = '管理员禁止了修改密码';

// cloudres lang string - prefix : cr_
$l['cr_header'] = '云资源';
$l['cr_resource_type'] = '资源类型';
$l['cr_limit'] = '限制';
$l['cr_used'] = '使用量';
$l['cr_left'] = '可用量';
$l['cr_unlimited'] = '无限';
$l['cr_num_vs'] = '虚拟机数量';
$l['cr_num_users'] = '用户数量';
$l['cr_num_space'] = '硬盘';
$l['cr_num_ram'] = '内存';
$l['cr_num_bandwidth'] = '流量';
$l['cr_num_cores'] = '总核心数';
$l['cr_max_cores'] = '最大核心数 / 虚拟机';
$l['cr_num_ipv4'] = 'IPv4';
$l['cr_num_ipv6_subnet'] = 'IPv6子网';
$l['cr_num_ipv6'] = 'IPv6';
$l['cr_cpuinfo'] = 'CPU信息';

// console lang string - prefix : cs_
$l['cs_disabled'] = '控制台被禁用';
$l['cs_call_failed'] = 'API调用失败。请联系管理员。';
$l['cs_heading'] = '控制台';
$l['cs_none'] = '没有现成的控制台会话。请创建一个！';
$l['cs_create'] = '创建会话';
$l['cs_creating'] = '正在创建会话……';
$l['cs_destroying'] = '正在结束会话……';
$l['cs_details'] = '以下是命令行详情';
$l['cs_expires'] = '过期';
$l['cs_ip'] = 'IP地址';
$l['cs_port'] = '端口';
$l['cs_username'] = '用户名';
$l['cs_password'] = '密码';
$l['cs_destroy'] = '结束会话';
$l['cs_java_console'] = 'Java命令行';

// hostname lang string - prefix : hn_
$l['hn_no_new'] = '请指定修改的主机名。';
$l['hn_new_host'] = '新主机名';
$l['hn_submit_button'] = '修改主机名';
$l['hn_err_changing'] = '修改主机名时发生了错误。';
$l['hn_host_final'] = '您的主机名已成功修改';
$l['hn_invalid_hostname'] = '您提交的主机名无效';
$l['hn_change_onboot'] = '您的主机名将在VPS下一次启动时生效';
$l['hn_current_hostname'] = '目前主机名';
$l['hn_change_notify'] = '正在修改主机名……';
$l['hn_disable_change_hostname'] = '修改主机名被管理员禁止';

// ips lang string - prefix : ips_
$l['ips_no_ip_sel'] = '未选择IP';
$l['ips_ip_not_exists'] = 'IP不存在';
$l['ips_header'] = ' IP';
$l['ips_ipinfo'] = 'IP信息';
$l['ips_reorderips'] = '设置主IP';
$l['ips_done'] = '已经保存您的IP设置。';
$l['ips_change_onboot'] = '您的IP设置将在VPS下次启动后应用。';
$l['ips_primary_ip'] = '选择主IP';
$l['ips_ipv6_ips_list'] = 'IPv6';
$l['ips_ipv6_empty'] = 'IPv6空';
$l['ips_change_notify'] = '正在更改IP设置……';

// monitor lang string - prefix : mon_
$l['mon_header'] = ' CPU ';
$l['mon_cpuinfo'] = 'CPU 信息';
$l['mon_totalcpu'] = '总 CPU :'; 
$l['mon_cpuutilised'] = '利用率 : ';
$l['mon_poweredby'] = '动力源 : ';
$l['mon_graphheader'] = 'CPU 使用率';
$l['mon_trademarks'] = '使用的 Logo 均为各自公司的注册商标。';
$l['mon_not_supported'] = '不支持当前资源利用率的监测。';
$l['mon_disabled'] = '监视器选项被管理员禁用';

// os lang string - prefix : os_
$l['os_not_selected'] = '您尚未选择系统';
$l['os_invalid_os'] = '您提交的系统是无效的';
$l['os_no_new'] = '您尚未输入新密码。';
$l['os_no_conf'] = '您尚未输入确认密码。';
$l['os_no_match'] = '您的确认密码与新密码不匹配。';
$l['os_error_reins'] = '重新安装系统时出现了错误。';
$l['os_err_changing'] = '设置密码时出现了错误。';
$l['os_err_log_osreinstall'] = '您已经达到了重装系统限制。请联系管理员。';
$l['os_reins_os'] = '重装系统';
$l['os_os_reinstall'] = '重装';
$l['os_new_pass'] = '新密码';
$l['os_retype_pass'] = '确认密码';
$l['os_done'] = '系统成功重新安装。';
$l['os_reins_notify'] = '正在重新安装VPS系统……';
$l['os_centos_line1'] = 'CentOS是由著名的北美企业Linux供应商免费提供给公众的企业级Linux发行版。';
$l['os_centos_line2'] = 'CentOS完全遵循上游厂商的发行标准，100%二进制兼容。它的修改主要是去除商标和艺术品。';
$l['os_centos_line3'] = 'CentOS由一个小但仍在成长的团队的核心开发者开发，是免费的。';
$l['os_fedora_line1'] = 'Fedora基于Linux，展示了最新的自由开源软件。Fedora允许任何人自由地使用、修改和分发。';
$l['os_fedora_line2'] = '它由个人组成的全球性组织The Fedora Project构建。The Fedora Project是开放的，欢迎任何人加入。';
$l['os_fedora_line3'] = 'Fedora项目始终处于前沿，引领着自由开源软件及内容的进步。';
$l['os_suse_line1'] = 'The openSUSE project是全球性的努力，促进了Linux的使用范围延伸。';
$l['os_suse_line2'] = 'openSUSE是世界上最好的Linux发行版之一，是全球自由开源软件社区的每个人公开、透明和友好的工作成果。';
$l['os_suse_line3'] = '该项目由社区控制，依赖于个人的贡献：测试员、作家、翻译家、可用性专家、艺术家、大使或开发者。';
$l['os_suse_line4'] = 'openSUSE是免费的个人电脑、服务器Linux操作系统。';
$l['os_ubuntu_line1'] = 'Ubuntu是Debian家族的Linux操作系统，它提供了大量有才的开发人才，囊括了各种由专家创建的软件包。';
$l['os_ubuntu_line2'] = 'Canonical严谨的发布管理、质量保证、压力测试和产品设计提升了Ubuntu服务器的质量。';
$l['os_ubuntu_line3'] = '急速又美观，Ubuntu是一个安全且直观的操作系统，它运行在台式机、服务器、上网本和笔记本电脑上。Ubuntu将永远完全免费。';
$l['os_debian_line1'] = 'Debian是一个各种计算机使用免费的操作系统。它提供了一组基本程序和工具使您的电脑运行。';
$l['os_debian_line2'] = 'Debian使用Linux内核，但大多数的基本系统工具都来自于GNU项目；因而得名GNU/Linux操作系统。';
$l['os_debian_line3'] = 'Debian GNU/Linux提供的不仅仅是一个纯粹的操作系统，它还有超过25000份软件可供你在机器上安装。';
$l['os_scientific_line1'] = 'Scientific Linux是由Fermi National Accelerator Laboratory制作的 Linux 发行版。';
$l['os_scientific_line2'] = '它是基于RedHat Enterprise的一个免费的开源操作系统，其目标是“尽可能达到商业级发行标准”。';
$l['os_scientific_line3'] = '该产品是由RedHat所提供的免费开源软件衍生，但RedHat不提供生产、维护或支持。';
$l['os_strength_indicator'] = '强度指示';
$l['os_bad'] = '弱';
$l['os_good'] = '一般';
$l['os_strong'] = '强';
$l['os_short'] = '过短';
$l['os_weak_pass'] = '密码至少包含以下三样：大写字母、小写字母、数字或特殊符号';
$l['os_pass_match'] = '不匹配';
$l['os_reinstall_wait'] = '正在重新安装操作系统，请稍候……';
$l['os_reinstall_disabled'] = '系统重装被管理员禁用';

// vnc lang string - prefix : vnc_
$l['vnc_vnc_info'] = 'VNC 信息';
$l['vnc_vnc_ip'] = 'VNC IP';
$l['vnc_vnc_port'] = 'VNC 端口';
$l['vnc_novnc_button'] = '启动 HTML5 VNC客户端';
$l['vnc_launch_vnc'] = '启动JAVA VNC查看器';
$l['vnc_notice'] = '使用VNC需要你的浏览器安装并启用JAVA。';
$l['vnc_not_enabled'] = 'VNC未启用';

// vncpass lang string - prefix : vncpas_
$l['vncpas_no_new'] = '您没有输入新密码。';
$l['vncpas_no_conf'] = '您没有输入确认密码。';
$l['vncpas_no_match'] = '您输入的新密码与确认密码不匹配。';
$l['vncpas_err_changing'] = '修改密码时遇到了错误。';
$l['vncpas_no_nonalphanumeric'] = '禁止非字母数字字符。';
$l['vncpas_submit_button'] = '修改VNC密码';
$l['vncpas_new_pass'] = '新密码';
$l['vncpas_old_pass'] = '旧密码';
$l['vncpas_retype_pass'] = '确认新密码';
$l['vncpas_change_note'] = '修改VNC密码';
$l['vncpas_change_final'] = '您的VNC密码修改成功。';
$l['vncpas_change_notify'] = '正在修改VNC密码……';

// userpassword lang string - prefix : up_
$l['up_no_new'] = '您尚未给出新密码';
$l['up_no_conf'] = '您尚未输入确认密码';
$l['up_no_match'] = '您的确认密码与新密码不匹配';
$l['up_err_changing'] = '更改密码时出现错误';
$l['up_new_pass'] = '新密码';
$l['up_old_pass'] = '旧密码';
$l['up_retype_pass'] = '确认密码';
$l['up_page_head'] = '修改密码';
$l['up_change_final'] = '成功更改您的密码';

// profile lang string - prefix : pr_
$l['pr_change_profile'] = '更改个人信息';
$l['pr_no_fname'] = '您未输入名字';
$l['pr_no_lname'] = '您未输入姓氏';
$l['pr_firstname'] = '名字';
$l['pr_lastname'] = '姓氏';
$l['pr_done'] = '成功保存您的更改';

// services lang string - prefix : ser_
$l['ser_heading'] = '服务';
$l['ser_sstart'] = '启动';
$l['ser_sstop'] = ' 停止';
$l['ser_srestart'] = '重启';
$l['ser_status'] = '状态';
$l['ser_statrun'] = '运行中';
$l['ser_statoff'] = '关';
$l['ser_staton'] = '开';
$l['ser_autostart'] = '自启动';
$l['ser_select'] = '选择';
$l['ser_vps_is_off'] = 'VPS已关机！';
$l['ser_no_feature'] = '此特性不可用！';
$l['ser_notice_start'] = '正在启动所选服务……';
$l['ser_notice_stop'] = '正在停止所选服务……';
$l['ser_notice_restart'] = '正在重新启动所选服务……';

// processes lang string - prefix : proc_
$l['proc_heading'] = '进程列表';
$l['proc_usr'] = '用户';
$l['proc_pid'] = 'PID';
$l['proc_cpu'] = '%CPU';
$l['proc_mem'] = '%MEM';
$l['proc_command'] = '命令';
$l['proc_rss'] = 'RSS';
$l['proc_time'] = '实际';
$l['proc_select'] = '选择';
$l['proc_pstart'] = '启动';
$l['proc_pkill'] = '结束';
$l['proc_prefresh'] = '自动刷新';
$l['proc_vps_is_off'] = 'VPS关机了！';
$l['proc_no_feature'] = '这个功能不可用！';
$l['proc_notice_pkill'] = '正在杀死所选的进程：';
$l['proc_with_selected'] = '对所选的：';

// logs lang string - prefix : log_
$l['log_heading'] = '日志';
$l['log_date'] = '日期';
$l['log_task'] = '任务';
$l['log_status'] = '状态';
$l['log_ip'] = 'IP';
$l['log_success'] = '成功';
$l['log_fail'] = '失败';

// managesubnets lang string - prefix : mng_
$l['mng_heading'] = '管理IPv6子网';
$l['mng_done'] = '成功保存IP';
$l['mng_add_ipv6'] = '添加一个IPv6地址';
$l['mng_add_ip_button'] = '添加IP';
$l['mng_back_button'] = '返回';
$l['mng_save_button'] = '保存';
$l['mng_delete_confirm'] = '确定删除此IPv6地址？';
$l['mng_ipv6_invalid'] = 'IPv6地址有错误';
$l['mng_ipv6_address'] = 'IPv6地址';
$l['mng_ipv6_delete'] = '删除';
$l['mng_ipv6_subnet'] = 'IPv6子网';
$l['mng_edit_subnet'] = '编辑';
$l['mng_no_vps'] = '没有找到VPS';
$l['mng_inv_ipaddress'] = '给出的IP不属于你';

// managezone lang string - prefix : mz_
$l['mz_page_head'] = 'Manage Zone';
$l['mz_zone_conf_del'] = 'Are you sure you want to delete the PDNS Server ?';
$l['mz_add_pdns'] = 'Add PDNS Server';
$l['mz_dns_mgmt'] = 'DNS Management';
$l['mz_zone_add_done'] = 'The Zone has been added successfully';
$l['mz_add_zone'] = 'Add Zone Record';
$l['mz_zone_name'] = 'Zone Name';
$l['mz_pdns_zones'] = 'View Zones';
$l['mz_manage_zone'] = 'Manage';
$l['mz_conf_del'] = 'Are you sure you want to delete this record ?';
$l['mz_add_done'] = 'The record has been added sucessfully';
$l['mz_edit_done'] = 'The record has been edited sucessfully';
$l['mz_del_done'] = 'The record has been deleted sucessfully';
$l['mz_priority'] = 'Priority';
$l['mz_ttl'] = 'TTL';
$l['mz_content'] = 'Content';
$l['mz_type'] = 'Type';
$l['mz_host'] = 'Host';
$l['mz_points_to'] = 'Points to';
$l['mz_txt_value'] = 'TXT Value';
$l['mz_pdns_name'] = 'Server Name';
$l['mz_submit_button'] = 'Add Record';
$l['mz_edit_button'] = 'Edit Record';
$l['mz_no_domains'] = 'There are no zones on record';
$l['mz_err_addzone'] = 'There was an error adding the zone';
$l['mz_inv_name'] = 'Invalid hostname specified';
$l['mz_inv_ip'] = 'Invalid IP Address specified';
$l['mz_inv_tld'] = 'Invalid top level domain specified';
$l['mz_inv_ipv6'] = 'Invalid IPv6 specified';
$l['mz_inv_int'] = 'Invalid integer specified';
$l['mz_err_add'] = 'There was an error while adding the record';
$l['mz_err_del'] = 'There was an error while deleting the record';
$l['mz_err_edit'] = 'There was an error while editing the record';
$l['mz_err_soa'] = 'There was an error while updating the SOA serial';
$l['mz_rec_exists'] = 'The record already exists';
$l['mz_records_limit'] = 'The limit for adding records has been reached';
$l['mz_err_connect'] = 'There was an error while connecting to the nameserver';
$l['mz_zone_restricted'] = 'The Zone you are trying to edit is restricted';

// pdns lang string - prefix : pdns_
$l['pdns_conf_del'] = 'Are you sure you want to delete this domain ?';
$l['pdns_page_head'] = 'DNS Management';
$l['pdns_add_done'] = 'The Zone has been added successfully';
$l['pdns_delete_done'] = 'The Zone has been deleted successfully';
$l['pdns_add_zone'] = 'Add Zone';
$l['pdns_zone_name'] = 'Zone Name';
$l['pdns_manage_zone'] = 'Manage';
$l['pdns_no_domains'] = 'There are no zones on record';
$l['pdns_no_name'] = 'The domain name was not specified';
$l['pdns_err_addzone'] = 'There was an error adding the zone';
$l['pdns_err_delete'] = 'There was an error deleting the zone';
$l['pdns_inv_domain'] = 'The specified domain name is invalid';
$l['pdns_limit_domains'] = 'The maximum number of domains that can be added has been reached';
$l['pdns_domain_exists'] = 'This domain name already exists';
$l['pdns_err_connect'] = 'There was an error in connecting to the nameserver';
$l['pdns_no_dns'] = 'DNS management not available';
$l['pdns_invalid_zone'] = 'The DNS Zone you are trying to delete is invalid';
$l['pdns_primary_nameserver'] = 'Primary Nameserver';
$l['pdns_hostmaster_email'] = 'Domain Admin Email';
$l['pdns_inv_email'] = 'Invalid Domain Admin Email specified';
$l['pdns_inv_ns'] = 'Invalid Primary Nameserver specified';

// rdns lang string - prefix : rdns_
$l['rdns_page_head'] = 'Add Reverse DNS';
$l['rdns_zone_name'] = 'Zone Name';
$l['rdns_exp_zone_name'] = 'The Zone Name';
$l['rdns_ns'] = 'Nameserver';
$l['rdns_hostmasteremail'] = 'Hostmaster Email';
$l['rdns_exp_hostmasteremail'] = 'Hostmaster Email';
$l['rdns_pdns_server'] = 'Select server';
$l['rdns_exp_pdns_server'] = 'The DNS server to add the record to';
$l['rdns_sub_but'] = 'Submit';
$l['rdns_rdns_ip'] = 'IP Address';
$l['rdns_exp_rdns_ip'] = 'Enter your VM IP address';
$l['rdns_rdns_domain'] = 'Domain name';
$l['rdns_exp_rdns_domain'] = 'Enter the Fully qualified domain name';
$l['rdns_no_rnds_ip'] = 'Please enter the IP address';
$l['rdns_no_rdns_domain'] = 'Please enter the Domain name';
$l['rdns_no_pdnsid'] = 'PowerDNS ID is invalid';
$l['rdns_err_zone'] = 'RDNS Zone entry not found. Please contact the Administrator';
$l['rdns_is_rdns'] = 'Reverse DNS entry already present';
$l['rdns_no_dns'] = 'The DNS server has not been setup by the Admin. Please contact the Admin for this.';
$l['rdns_no_zone_name'] = 'The zone name was not specified';
$l['rdns_no_ns'] = 'The nameserver must be specified. Atleast two are required';
$l['rdns_no_hostmasteremail'] = 'The hostmaster email was not specified';
$l['rdns_inv_revzone'] = 'The Reverse DNS zone specified is invalid';
$l['rdns_inv_ns'] = 'The nameserver TLDs specified are invalid';
$l['rdns_inv_hostemail'] = 'The Hostmaster Email specified is invalid';
$l['rdns_err_connect'] = 'Could not connect to the server. Please check if it is online';
$l['rdns_err_save'] = 'There was an error in saving the data';
$l['rdns_done'] = 'The reverse DNS zone has been successfully added';
$l['rdns_zone_exists'] = 'This zone already exists';
$l['rdns_inv_ipaddress'] = 'IP address entered is invalid';
$l['rdns_rdns_existing'] = 'rDNS Records';
$l['rdns_deleted'] = 'The rDNS record has been deleted';
$l['rdns_id'] = 'ID';
$l['rdns_ip'] = 'IP';
$l['rdns_name'] = 'Name';
$l['rdns_domain'] = 'Domain';

// edituser lang string - prefix : edu_
$l['edu_no_user_email'] = '您尚未填写电子邮箱';
$l['edu_no_user_password'] = '您尚未填写密码';
$l['edu_invalid_email'] = '电子邮箱格式无效';
$l['edu_uid_not_found'] = '未找到该用户名';
$l['edu_useradd_error'] = '编辑用户细节时出现了错误';
$l['edu_page_head'] = '编辑用户';
$l['edu_done'] = '您已成功编辑';
$l['edu_user_email'] = '电子邮箱';
$l['edu_user_password'] = '密码';

// rescue lang string - prefix : resc_
$l['resc_err_rescue_enable'] = '启动救援模式时遇到了错误';
$l['resc_err_rescue_disable'] = '停用救援模式时遇到了错误';
$l['resc_err_downloading'] = '下载救援模板时遇到了错误';
$l['resc_err_delete_disk'] = '删除救援磁盘时遇到了错误';
$l['resc_cant_rescue'] = '当ISO被挂载时无法进行救援操作。请先移除ISO';
$l['resc_heading'] = '救援模式';
$l['resc_rescue_exp'] = '救援模式提供从另一个磁盘启动一个小型Linux环境的能力，这样你可以拯救你的主VPS或者是其上的备份文件';
$l['resc_enable_rescue'] = '启动救援模式';
$l['resc_rescue_enabled'] = '救援模式目前已启用。';
$l['resc_disable_rescue'] = '停用救援模式';
$l['resc_rescue_disabled'] = '救援模式目前已停用。';
$l['resc_resuce_enable_success'] = '成功启用救援模式';
$l['resc_resuce_disable_success'] = '成功停用救援模式';
$l['resc_rescue_enable_notify'] = '正在启用救援模式……';
$l['resc_rescue_disable_notify'] = '正在禁用救援模式……';
$l['resc_root_pass'] = 'ROOT密码';
$l['resc_root_pass_conf'] = '确认密码';
$l['resc_resc_disable_rescue_err'] = '救援模式被管理员禁用';

// usersettings lang string - prefix : us_
$l['us_no_lang'] = '未选择语言';
$l['us_wrong_lang'] = '选择的语言不存在';
$l['us_no_timezone'] = '未选择时区';
$l['us_timezone_invalid'] = '选择的时区是无效的';
$l['us_wrong_theme'] = '选择的主题不存在';
$l['us_page_head'] = '用户设置';
$l['us_change_final'] = '成功保存您的设置';
$l['us_choose_lang'] = '选择语言';
$l['us_exp_lang'] = '选择您偏好的语言';
$l['us_timezone'] = '时区';
$l['us_default_timezone'] = '服务器默认';
$l['us_edit_settings'] = '修改设置';
$l['us_done'] = '成功保存您的设置';
$l['us_choose_theme'] = '选择主题';
$l['us_exp_theme'] = '选择您偏好的主题';
$l['us_no_theme'] = '未选择主题';
$l['us_logo'] = 'Logo URL';
$l['us_logo_exp'] = '如果留空，默认LOGO将被显示';

// create lang string - prefix : li_
$l['li_no_type'] = '请给出虚拟化类型';
$l['li_num_vs_over'] = '你已经创建了所允许的VM最大数目';
$l['li_no_hname'] = '请给出主机名';
$l['li_no_os'] = '请选择VPS的系统';
$l['li_no_rootpass'] = '请给出ROOT密码';
$l['li_no_disk_space'] = '请给出需要分配的磁盘大小';
$l['li_no_ram'] = '请给出需要分配的内存大小';
$l['li_no_vncpass'] = '请给出VNC密码';
$l['li_no_bandwidth'] = '请给出流量限制';
$l['li_no_cpu_units'] = '请给出CPU单元';
$l['li_no_cpu_cores'] = '请给出CPU核心数';
$l['li_cores_max'] = '最大核心数';
$l['li_invalid_sg'] = '您选择的区域无效';
$l['li_invalid_virt'] = '您选择的区域不支持您所选择的虚拟化';
$l['li_no_percent_cpu'] = '请指定允许的百分比的CPU利用率';
$l['li_no_swap_ram'] = '请指定SWAP RAM';
$l['li_no_burst_ram'] = '请指定突发内存的限制';
$l['li_invalid_os'] = '您提交的操作系统是无效的';
$l['li_no_ip'] = '请为VPS至少指定一个IP';
$l['li_invalid_uid'] = '您提交的用户不存在';
$l['li_no_user'] = '您没有指定用户的电子邮件';
$l['li_no_user_pass'] = '您没有指定用户密码';
$l['li_invalid_email'] = '用户的电子邮件地址无效';
$l['li_emailexist'] = '您指定的新用户的电子邮件已经存在';
$l['li_err_user'] = '新建用户时出错';
$l['li_invalid_hostname'] = '您提交的主机名无效';
$l['li_less_ram'] = '您没有足够的内存来创建此VPS';
$l['li_less_burst'] = '您没有足够的脉冲RAM来创建此VPS';
$l['li_less_space'] = '您没有足够的磁盘空间来创建此VPS';
$l['li_less_inodes'] = '索引节点应该不低于50000';
$l['li_less_vs'] = '您不被允许创建更多虚拟机';
$l['li_less_bandwidth'] = '您没有足够的带宽来创建此VPS';
$l['li_less_ipv4'] = '您没有足够的IPv4地址来创建此VPS';
$l['li_less_ipv6'] = '您没有足够的IPv6地址来创建此VPS';
$l['li_less_ipv6_subnet'] = '您没有足够的IPv6子网来创建此VPS';
$l['li_max_cores_exceeded'] = '不允许创建一个有如此多核心的虚拟机';
$l['li_less_cores'] = '您没有足够的CPU内核来创建此VPS';
$l['li_no_user_resource'] = '您已达到允许您创建的用户的最大数量';
$l['li_no_server'] = '您选择的服务器已用完，没有足够的资源来创建此VM。请向管理员报告';
$l['li_ipv4_over'] = '您选择的区域没有足够的IPv4资源来创建此虚拟机。请向管理员报告';
$l['li_ipv6_over'] = '您选择的区域没有足够的IPv6资源来创建此虚拟机。请向管理员报告';
$l['li_ipv6_subnet_over'] = '您选择的区域没有足够的IPv4子网来创建此虚拟机。请向管理员报告';
$l['li_no_webuzo_template'] = '您选择的操作系统模板不是Webuzo模板';
$l['li_err_swapsize'] = '指定的SWAP大小不能大于或等于规定的总磁盘空间';
$l['li_inv_kvm_cache'] = '提交的磁盘缓存是无效的';
$l['li_inv_io_mode'] = '提交的I/O策略是无效的';
$l['li_inv_vnc_keymap'] = '提交的VNC键盘映射无效';
$l['li_err_vpslimit'] = '超过VPS创建限制';
$l['li_page_head'] = '启动实例';
$l['li_vstype'] = '类别';
$l['li_done'] = '虚拟服务器已创建。';
$l['li_newvs_vpsid'] = 'VPS ID';
$l['li_newvs_vps_name'] = 'VPS名称';
$l['li_newvs_rootpass'] = 'Root密码';
$l['li_newvs_vnc'] = 'VNC详情';
$l['li_newvs_vncpass'] = 'VNC密码';
$l['li_newvs_ips'] = 'IP';
$l['li_newvs_ips6'] = 'IPv6';
$l['li_vs_server'] = '服务器';
$l['li_exp_server'] = '改变当前服务器来更改服务器';
$l['li_vs_ser_id'] = 'ID';
$l['li_vs_user'] = '用户';
$l['li_vs_user_exp'] = '选择现有的用户或添加用户';
$l['li_user_email'] = '用户电子邮件';
$l['li_user_pass'] = '密码';
$l['li_add_user'] = '添加用户';
$l['li_regions'] = '区域';
$l['li_virt_type'] = '虚拟化技术';
$l['li_os'] = '操作系统';
$l['li_select'] = '选择';
$l['li_vs_plan'] = '选择套餐';
$l['li_plan_exp'] = '选择预先定义好的套餐';
$l['li_hvm'] = 'Xen HVM';
$l['li_hvm_exp'] = '是否要为这个VPS启用完全虚拟化？';
$l['li_vsos'] = '操作系统';
$l['li_vsos_exp'] = '选择VPS的操作系统';
$l['li_vsiso'] = 'ISO';
$l['li_vsiso_exp'] = '如果ISO选择了该机将会从ISO启动';
$l['li_sec_vsiso'] = 'ISO次要CD ROM';
$l['li_sec_vsiso_exp'] = '选择ISO作为次要CD ROM';
$l['li_none'] = '无';
$l['li_rootpass'] = 'VPS Root密码';
$l['li_rootpass_exp'] = 'VPS的root/Administraotor的密码';
$l['li_randpass'] = '另一个随机密码';
$l['li_hostname'] = '主机名';
$l['li_hostname_exp'] = '输入VPS主机名。e.g. www.domain.com';
$l['li_ip'] = 'IP地址';
$l['li_ips'] = 'IP地址';
$l['li_ips_exp'] = '可以指定IP数量来分配';
$l['li_ips6_subnet'] = 'IPv6子网';
$l['li_ips6_subnet_exp'] = '可以指定IPv6子网的数量分配';
$l['li_ips6'] = 'IPv6地址';
$l['li_ips6_exp'] = '可以指定IPv6的数量来分配';
$l['li_add_ip'] = '+';
$l['li_remove_ip'] = '-';
$l['li_add_to_ips'] = '<<';
$l['li_rem_from_ips'] = '删除这个IP';
$l['li_add_dns'] = '+';
$l['li_hdd'] = '磁盘空间';
$l['li_exp_hdd'] = 'VPS允许的磁盘空间';
$l['li_mac'] = 'MAC地址';
$l['li_exp_mac'] = '六组的两个十六进制数字用冒号分隔，例如01:23:45:67:89:ab';
$l['li_space_gb'] = 'GB';
$l['li_inodes'] = '索引节点';
$l['li_iondisk'] = '允许在VPS内索引节点（即文件）的最大数量。建议值：500000+';
$l['li_gram'] = '保证内存';
$l['li_exp_gram'] = '保障的VPS内存大小';
$l['li_ram_mb'] = 'MB';
$l['li_bram'] = '突发内存';
$l['li_exp_bram'] = '突发的VPS内存大小';
$l['li_swap'] = '交换内存';
$l['li_exp_swap'] = '';
$l['li_exp_swap_hvm'] = '如果上面有选择操作系统模板，将尝试创建交换分区';
$l['li_band'] = '流量';
$l['li_exp_band'] = 'VPS的每月流量限制。0表示无限制';
$l['li_band_gb'] = 'GB';
$l['li_cpunit'] = 'CPU单元';
$l['li_cpalloc'] = 'CPU单元待分配';
$l['li_cpalloc_xen'] = '推荐值：256';
$l['li_cpalloc_openvz'] = '推荐值：1000';
$l['li_cpalloc_kvm'] = '推荐值：1024';
$l['li_units'] = '单元';
$l['li_cores'] = 'CPU核心';
$l['li_cpucore_exp'] = '推荐值：';
$l['li_percent'] = 'CPU %';
$l['li_cpuperutil'] = '相应的VPS不允许超过CPU时间百分比。<br />设置<b>0</b>表示不限制。<br />推荐值10';
$l['li_io'] = 'I/O优先级';
$l['li_io0-7'] = '从0-7选择优先级';
$l['li_na'] = '网络速度';
$l['li_na_exp'] = '请提起网络速度';
$l['li_ubcsettings'] = 'UBC设置';
$l['li_exp_ubc'] = '如果选中，那么你将被重定向到编辑VPS的UBC设置';
$l['li_submit'] = '添加虚拟服务器';
$l['li_addvoption'] = '高级选项';
$l['li_addvhide']	= '隐藏高级选项';
$l['li_network_speed'] = '网络速度';
$l['li_network_speed_exp'] = '输入0或留空为不限制。<br />可以从选择框中获得值';
$l['li_upload_speed'] = '上传速度';
$l['li_upload_speed_exp'] = '输入0或留空为不限制。<br />可以从选择框中获得值';
$l['li_net_kb'] = 'KB/s';
$l['li_no_limit'] = '不限制';
$l['li_shadow'] = '影子内存';
$l['li_shadow_exp'] = '推荐值：8 MB';
$l['li_vncpass'] = 'VNC密码';
$l['li_vncpass_exp'] = 'VPS的VNC密码。点击图标生成一个新的随机密码';
$l['li_free'] = '免费';
$l['li_band_suspend']= '流量暂停';
$l['li_exp_band_suspend'] = '如果超过规定的带宽暂停VPS';
$l['li_tuntap'] = 'Tun/Tap';
$l['li_ppp'] = 'PPP';
$l['li_exp_tuntap'] = '启用Tun/Tap';
$l['li_exp_ppp'] = '启用PPP';
$l['li_osreinstall'] = '系统重装限制';
$l['li_exp_osreinstall'] = '如果你想限制每月重装系统的次数。<br />Eg. 0 - 无限制';
$l['li_changenic'] = '虚拟网络接口类型';
$l['li_exp_changenic'] = '如果你想改变网络接口类型。选项为默认或E1000。<b>virtio</b>将用作虚拟NIC类型如果<b>virtio</b>被启用';
$l['li_add_route'] = '使用路由网络';
$l['li_exp_add_route'] = '如果选中，它将使用路由的网络。';
$l['li_nic_default'] = 'Realtek 8139';
$l['li_nic_e1000'] = 'Intel E1000';
$l['li_change_vif_type'] = '虚拟网络接口模拟类型';
$l['li_exp_change_vif_type'] = '如果你想改变网络接口仿真类型。选项为<b>netfront</b>和<b>ioemu</b>。';
$l['li_viftype_ioemu'] = 'ioemu';
$l['li_viftype_netfront'] = 'netfront';
$l['li_usevirtio'] = '启用Virtio';
$l['li_exp_usevirtio'] = '使用<b>virtio</b>为IO虚拟化方式';	
$l['li_usesec_cdrom'] = '启用次要CD-ROM';
$l['li_exp_usesec_cdrom'] = '启用这个来附加一个次要的ISO到虚拟机。';	
$l['li_kvm_cache'] = '磁盘缓存';
$l['li_exp_kvm_cache'] = '控制的缓存机制';
$l['li_io_mode'] = 'I/O策略';
$l['li_vnc_keymap'] = 'VNC命令行键盘映射';
$l['li_dns'] = 'DNS域名服务器';
$l['li_exp_dns'] = '如果不了解，那么请使用4.2.2.1和4.2.2.2';
$l['li_mg'] = '介质组';
$l['li_mg_exp'] = '如果没有赋予介质组，那么所有的介质将提供给该VPS。';
$l['li_apps'] = '应用程序';
$l['li_apps_exp'] = '选择你要安装的Webuzo应用';
$l['li_ploop'] = 'Ploop';
$l['li_ploop_exp'] = '如果启用，VPS将以Ploop格式创建';
$l['li_mac_temp_vncdetails'] = 'MAC地址：';
$l['li_mail_temp_vnctitle'] = 'VNC详情：';
$l['li_mail_temp_vncdetails'] = 'VNC详情：';
$l['li_mail_temp_vncpasswd'] = 'VNC密码：';
$l['li_reinstall'] = '重装虚拟服务器';
$l['li_space'] = '磁盘空间';
$l['li_space_exp'] = 'VPS允许的磁盘空间';
$l['li_ram'] = '保证内存';
$l['li_ram_exp'] = '保障的VPS内存大小';
$l['li_burst'] = '突发RAM';
$l['li_burst_exp'] = '突发的VPS内存大小';
$l['li_swap'] = 'Swap内存';
$l['li_swap_exp'] = '';
$l['li_swap_hvm'] = '如果上面有选择操作系统模板，将尝试创建交换分区';
$l['li_bandwidth'] = '流量';
$l['li_bandwidth_exp'] = '每个月VPS的流量限制。0表示不限制';
$l['li_free'] = '免费';
$l['li_unlimited'] = '无限制';
$l['li_submit'] = '创建';
$l['li_weak_pass'] = '密码必须包含至少以下3个：大写字母，小写字母，数字或特殊符号';
$l['li_usevirtio'] = '启用virtio';
$l['li_usevirtio_exp'] = '使用virtio作为I/O虚拟化技术';


// editvm lang string - prefix : ei_
$l['ei_page_head'] = '编辑实例';
$l['ei_vs_user'] = '用户';
$l['ei_vs_user_exp'] = '选择现有的用户或添加用户';
$l['ei_user_email'] = '用户电子邮件';
$l['ei_user_pass'] = '密码';
$l['ei_add_user'] = '添加用户';
$l['ei_unknown'] = '未知';
$l['ei_vsos'] = '操作系统';
$l['ei_vsos_exp'] = '选择VPS的操作系统';
$l['ei_vsiso'] = 'ISO';
$l['ei_vsiso_exp'] = '如果ISO选择了该机将会从ISO启动';
$l['ei_none'] = '无';
$l['ei_hostname'] = '主机名';
$l['ei_hostname_exp'] = '输入VPS主机名。e.g. www.domain.com';
$l['ei_rootpass'] = 'VPS Root密码';
$l['ei_rootpass_exp'] = 'VPS的root/Administraotor的密码';
$l['ei_randpass'] = '另一个随机密码';
$l['ei_ips'] = 'IP地址';
$l['ei_ips_exp'] = '可以指定IP数量来分配';
$l['ei_ips6_subnet'] = 'IPv6子网';
$l['ei_ips6_subnet_exp'] = '可以指定IPv6子网的数量分配';
$l['ei_free'] = '免费';
$l['ei_ips6'] = 'IPv6地址';
$l['ei_ips6_exp'] = '您可以指定的IPv6数量来分配或从IPv6池选择';
$l['ei_space'] = '磁盘空间';
$l['ei_space_exp'] = 'VPS允许的磁盘空间';
$l['ei_ram'] = '保证内存';
$l['ei_ram_exp'] = '保障的VPS内存大小';
$l['ei_burst'] = '突发RAM';
$l['ei_burst_exp'] = '突发的VPS内存大小';
$l['ei_swap'] = 'Swap内存';
$l['ei_swap_exp'] = '';
$l['ei_bandwidth'] = '流量';
$l['ei_bandwidth_exp'] = '每个月VPS的流量限制。0表示不限制';
$l['ei_cores'] = 'CPU核心';
$l['ei_cpucore_exp'] = '推荐值：';
$l['ei_cores_max'] = '最大核心数';
$l['ei_unlimited'] = '无限制';
$l['ei_network_speed'] = '网络速度';
$l['ei_network_speed_exp'] = '输入0或留空为不限制。<br />可以从选择框中获得值';
$l['ei_upload_speed'] = '上传速度';
$l['ei_upload_speed_exp'] = '输入0或留空为不限制。<br />可以从选择框中获得值';
$l['ei_net_kb'] = 'KB/s';
$l['ei_no_limit'] = '不限制';
$l['ei_vncpass'] = 'VNC密码';
$l['ei_vncpass_exp'] = 'VPS的VNC密码。点击图标生成一个新的随机密码';
$l['ei_submit'] = '编辑虚拟服务器';
$l['ei_done'] = '虚拟服务器编辑完成。返回<a href="'.$globals['index'].'act=listvs">虚拟服务器总览</a>';
$l['ei_addvoption'] = '高级选项';
$l['ei_no_uid'] = '未选择用固话';
$l['ei_no_nonalphanumeric'] = '没有非字母数字字符允许用于VNC密码';
$l['ei_less_space'] = '您没有足够的磁盘空间来创建此VPS';
$l['ei_less_ram'] = '您没有足够的内存来创建此VPS';
$l['ei_max_cores_exceeded'] = '不允许创建一个有如此多核心的虚拟机';
$l['ei_less_cores'] = '您没有足够的CPU内核来创建此VPS';
$l['ei_less_burst'] = '您没有足够的脉冲RAM来创建此VPS';
$l['ei_ipv4_over'] = '您选择的区域没有足够的IPv4资源来创建此虚拟机。请向管理员报告';
$l['ei_ipv6_over'] = '您选择的区域没有足够的IPv6资源来创建此虚拟机。请向管理员报告';
$l['ei_ipv6_subnet_over'] = '您选择的区域没有足够的IPv4子网来创建此虚拟机。请向管理员报告';
$l['ei_less_ipv4'] = '您没有足够的IPv4地址来创建此VPS';
$l['ei_less_ipv6'] = '您没有足够的IPv6地址来创建此VPS';
$l['ei_less_ipv6_subnet'] = '您没有足够的IPv6子网来创建此VPS';
$l['ei_wrong_user'] = '你不能改变用户';
$l['ei_only_user'] = '编辑VM的用户，资源不能被改变';
$l['ei_less_swap'] = '您没有足够的交换区内存';
$l['ei_usevirtio'] = '启用virtio';
$l['ei_exp_usevirtio'] = '使用<b>virtio</b>为IO虚拟化技术';

// controlpanel lang string - prefix : cpan_
$l['cpan_wrong_panel'] = '您选择的面板无效';
$l['cpan_err_installing'] = '安装面板时出现错误';
$l['cpan_wrong_os'] = '此控制面板只能用于CentOS';
$l['cpan_confirm'] = '您是否确定要安装这个控制面板？服务器上的数据将被显著改变。';
$l['cpan_done'] = '面板安装已经开始，将在一段时间后完成';
$l['cpan_change_onboot'] = '面板将在你关机再启动VPS后安装完成';
$l['cpan_heading'] = '控制面板';

// backup lang string - prefix : bkup_
$l['bkup_err_virt'] = '到现在为止该VPS不支持备份';
$l['bkup_err_backup'] = '创建备份时出错';
$l['bkup_err_restore'] = '同时恢复VPS时出错';
$l['bkup_page_head'] = '备份';
$l['bkup_done'] = '该VPS备份进程已经启动。请您稍等几分钟。备份完成后您将收到电子邮件通知。';
$l['bkup_done_restore'] = '该VPS恢复过程已经开始。请您稍等几分钟。恢复完成后您将收到电子邮件通知';
$l['bkup_cbackup'] = '创建备份';
$l['bkup_restore'] = '恢复VPS';
$l['bkup_conf_cbackup'] = '您是否确定要创建备份 ?';
$l['bkup_conf_restore'] = '您是否确定要通过最新的备份恢复 ?';
$l['bkup_backup_exp'] = '在这里，您可以创建你的VPS备份，也从旧的备份恢复。';
$l['bkup_backupnotify'] = '备份 VPS 中 ...';
$l['bkup_restorenotify'] = '恢复 VPS 中...';
$l['bkup_backup_email_subject'] = '成功创建VPS备份';
$l['bkup_restore_email_subject'] = '成功恢复VPS';
$l['bkup_deletevpsbackup_email_subject'] = '成功删除VPS备份';
$l['bkup_backup_email_body_start'] = '您的VPS上的备份进程 : [ ';
$l['bkup_restore_email_body_start'] = '您的VPS上的恢复进程 : [';
$l['bkup_deletevpsbackup_email_body_start'] = '您的VPS上的删除进程 : [';
$l['bkup_backup_email_body_end'] = '] 已经成功完成.
您将在VPS控制面板日志中浏览通知。

Regards,
{{sn}}';
$l['bkup_err_deletevpsbackup'] = '删除VPS备份时出错';
$l['bkup_del_backup'] = '删除备份';
$l['bkup_done_deletevpsbackup'] = '该VPS备份删除过程已经完成。';
$l['bkup_del_backupnotify'] = "删除 VPS 中...";
$l['bkup_conf_del_backup'] = '您是否确定要删除备份 ?';
$l['bkup_bkup_done_delete'] = '该VPS备份删除进程已经启动。请等待几分钟让它完成。当其完成后，您会收到电子邮件通知。';

// hvmsettings lang string - prefix : hvm_
$l['hvm_virt_error'] = '此虚拟化技术不包括HVM设置';
$l['hvm_rescue_enabled'] = 'VPS处于救援模式暂时无法更改';
$l['hvm_invalid_iso'] = '您选择的ISO无效';
$l['hvm_err_editing'] = '保存设置时遇到了错误';
$l['hvm_heading'] = 'HVM设置';
$l['hvm_submit_button'] = '提交';
$l['hvm_done'] = '设置成功保存';
$l['hvm_apic'] = 'APIC';
$l['hvm_acpi'] = 'ACPI';
$l['hvm_vnc'] = 'VNC';
$l['hvm_boot_order'] = '启动顺序';
$l['hvm_isos'] = '选择ISO';
$l['hvm_none'] = '无';
$l['hvm_tuntap_enable'] = '启用TUN/TAP';
$l['hvm_ppp_enable'] = '启用PPP(点对点协议)';
$l['hvm_disabled'] = 'HVM设置被管理员禁用';

// cpu lang string - prefix : cpu_
$l['cpu_header'] = ' CPU ';
$l['cpu_cpuinfo'] = 'CPU信息';
$l['cpu_totalcpu'] = '目前CPU：'; 
$l['cpu_cpuutilised'] = '已使用：';
$l['cpu_poweredby'] = '厂家：';
$l['cpu_graphheader'] = 'CPU使用率';
$l['cpu_trademarks'] = '使用的Logo均为各公司商标。';
$l['cpu_not_supported'] = '不支持当前资源利用率的监测。';

// ram lang string - prefix : ram_
$l['ram_header'] = ' 内存';
$l['ram_raminfo'] = '内存信息';
$l['ram_totalram'] = '内存：';
$l['ram_gaurateed'] = '保障内存：';
$l['ram_burstable'] = '突发内存：';
$l['ram_swap'] = 'SWAP';
$l['ram_utilised'] = '已使用 :';
$l['ram_percentram'] = '使用率 % :';
$l['ram_graphheader'] = '内存使用率';
$l['ram_not_supported'] = '不支持此当前资源利用率的监测。';

// disk lang string - prefix : disk_
$l['disk_header'] = '磁盘';
$l['disk_diskinfo'] = '磁盘信息';
$l['disk_totaldisk'] = '目前磁盘空间 : ';
$l['disk_diskutilised'] = '使用 : ';
$l['disk_percentdisk'] = '使用率 % : ';
$l['disk_graphheader'] = '磁盘使用率';
$l['disk_inodesinfo'] ='搜引节点信息';
$l['disk_inodestotal'] = '目前搜引节点 :'; 
$l['disk_inodesutilised'] = '使用 : ';
$l['disk_percent_inodes'] = '使用率 % :'; 
$l['disk_inodesheader'] = '节点利用率';
$l['disk_not_supported'] = '不支持当前资源利用率的监测。';

// bandwidth lang string - prefix : band_
$l['band_heading'] = '流量';
$l['band_bandwidthinfo'] = '流量信息';
$l['band_Total_Bandwidth'] = '总流量 :';
$l['band_Bandwidth_utilised'] = '已用流量 : ';
$l['band_percent_utilised'] = '% 已用 : ';
$l['band_graphheader'] = '占比';
$l['band_unlimited'] = '无限';
$l['band_network_speed'] = '网速（MB/s）';
$l['band_prev'] = '上月';
$l['band_next'] = '下月';

// console lang string - prefix : cs_
$l['cs_disabled'] = '控制台被禁用';
$l['cs_call_failed'] = 'API调用失败。请联系管理员。';
$l['cs_heading'] = '控制台';
$l['cs_none'] = '没有现成的控制台会话。请创建一个！';
$l['cs_create'] = '创建会话';
$l['cs_creating'] = '正在创建会话……';
$l['cs_destroying'] = '正在结束会话……';
$l['cs_details'] = '以下是命令行详情';
$l['cs_expires'] = '过期';
$l['cs_ip'] = 'IP地址';
$l['cs_port'] = '端口';
$l['cs_username'] = '用户名';
$l['cs_password'] = '密码';
$l['cs_destroy'] = '结束会话';
$l['cs_java_console'] = 'Java命令行';

// statuslogs lang string - prefix : sts_
$l['sts_heading'] = '状态日志';
$l['sts_running'] = '运行中';
$l['sts_stopped'] = '已停止';
$l['sts_sts'] = '系统状态';
$l['sts_time'] = '时间';

// system_alerts lang string - prefix : sysa_
$l['sysa_alert_heading'] = '系统警报';


// login lang string - prefix : login_
$l['login_no_username'] = '您没填用户名';
$l['login_no_password'] = '您没填密码';
$l['login_too_many_attempts'] = '你已经用完了你的失败登陆次数限制'.$globals['login_attempts'].'！<b>Please wait '.$globals['login_ban_time'].' minutes before trying again.</b> Don\'t forget that the password is case sensitive. Forgotten your password? Please try the <a href="'.$globals['index'].'act=login&sa=fpass">Forgot Password</a> utility.';

$l['login_sign_in'] = '登录';
$l['login_log_user'] = '邮箱或用户名';
$l['login_log_pass'] = '密码';
$l['login'] = '登录';
$l['login_sub_but'] = '登录';

$l['login_pass_nomatch'] = '密码不匹配';
$l['login_forgotpass'] = '忘记密码';
$l['login_emailuser'] = '邮箱';
$l['login_enteremail'] = '请输入您的邮箱';
$l['login_sub_email'] = '提交';
$l['login_no_email'] = '您还没提交邮箱呢';
$l['login_invalidemail'] = '您提交的邮箱好像不太对的样子';
$l['login_mail_sub'] = '重置密码';
$l['login_mail_body'] = '嗨，

请求重置您的密码已经取得进展。
如果您没有要求重设密码，请忽略此电子邮件。

如果您想重置密码，那么请点击以下链接：
https://{{node_ip}}:4083/index.php?act=login&sa=resetpass&key=&soft-1;

请注意：上面的链接有效期只有24小时。

Regards,
'.$globals['sn'];
$l['login_mail_done'] = '已发送一封邮件用来重设密码';
$l['login_back_to_login'] = '返回登陆';

$l['login_resetpass'] = '重设密码';
$l['login_log_new_pass'] = '新密码'; 
$l['login_log_reppass'] = '确认密码';
$l['login_changepass'] = '更改密码';
$l['login_no_key'] = '没有复位键提交';
$l['login_invalidkey'] = '指定了无效的密钥';
$l['login_no_new'] = '请输入有效密码';
$l['login_no_reppass'] = '请输入确认密码';
$l['login_no_match'] = '密码不匹配';
$l['login_keyexpire'] = '密匙不再有效';
$l['login_passchanged'] = '密码修改成功。';
$l['login_forgot_pass'] = '忘记密码';
$l['login_goto_login'] = '前往登录页面';

// listrecipe lang string - prefix : recipe_
$l['recipe_err_exec'] = '菜谱执行错误';
$l['recipe_no_selected'] = '没有选择菜谱';
$l['recipe_wrong'] = '不正确的菜谱选择';
$l['recipe_heading'] = '菜谱';
$l['recipe_choose'] = '选择菜谱';
$l['recipe_exp_choose_recipe'] = '选择您想要做的菜谱';
$l['recipe_update'] = '制作菜谱';
$l['recipe_none'] = '无';
$l['recipe_done'] = '菜谱已保存';
$l['recipe_exec_onboot'] = '当您重新启动VPS，菜谱将被执行';
$l['no_desc'] = '无描述';
$l['ingredients'] = '配料';
$l['recipe'] = '菜谱';
$l['conf_execute'] = '你确定你要执行这个菜谱？';
$l['rec_short_desc'] = '盯~这是为您准备的Bash菜谱！';

// ssh lang string - prefix : ssh_
$l['ssh_disabled'] = 'SSH被管理员禁用';

?>
