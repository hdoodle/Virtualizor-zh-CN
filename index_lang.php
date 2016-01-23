<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
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

$l['virt_openvz'] = 'OpenVZ';
$l['virt_xen'] = 'Xen';
$l['virt_xenhvm'] = 'Xen HVM';
$l['virt_kvm'] = 'KVM';
$l['virt_xcp'] = 'XCP';
$l['virt_xcphvm'] = 'XCP HVM';
$l['virt_lxc'] = 'LXC';

$l['user_data_error_t'] = '用户数据错误';
$l['user_data_error'] = '控制面板未能加载您的账户信息。请向管理员报告此消息！';

$l['no_license'] = '许可证文件未被找到！请向管理员报告此消息。';

$l['today'] = '<b>今天</b> 在 ';//The today string for showing todays post time

$l['init_theme_error_t'] = '主题错误';//Title
$l['init_theme_error'] = '未能加载主题文件 - &soft-1;。';

$l['init_theme_func_error_t'] = '主题功能错误';//Title
$l['init_theme_func_error'] = '未能加载主题 &soft-1; 的功能。';

$l['load_theme_settings_error'] = '未能加载主题设置文件。';


//Error Handle Function
$l['following_errors_occured'] = '发现下列错误';

//Success Message Function
$l['following_message'] = '返回了以下消息';

//Major Error Function
$l['fatal_error'] = '致命错误';
$l['following_fatal_error'] = '发生以下错误';

//Message Function
$l['soft_message'] = '消息';
$l['following_soft_message'] = '返回以下消息';

$l['err_user_head'] = '错误';
$l['err_user'] = '无法确定用户类型';

//Update Softaculous
$l['getting_info'] = '正在请求信息……';
$l['error_getting_latest'] = '不能获取信息……放弃';
$l['got_info'] = '获得的信息';
$l['manual_mode'] = 'Softaculous新版本需要人工操作……放弃';
$l['no_updates'] = '目前版本最新……继续';
$l['fetch_upgrade'] = '获取升级……';
$l['error_fetch_upgrade'] = '不能获取升级文件……放弃';
$l['error_save_upgrade'] = '不能保存升级文件……放弃';
$l['got_upgrade'] = '升级文件已保存';
$l['unzip_upgrade'] = '正在解压缩……';
$l['error_unzip_upgrade'] = '解压缩错误……放弃';
$l['unzipped_upgrade'] = '成功解压缩';
$l['running_upgrade'] = '执行升级……';
$l['succ_upgrade'] = '完成';
$l['error_upgrade'] = '升级时遇到以下错误：';

//MySQL Errors
$l['err_selectmy'] = '不能选择此MySQL数据库。';
$l['err_myconn'] = '不能建立MySQL连接。';
$l['err_makequery'] = '不能进行此查询';
$l['err_mynum'] = 'MySQL错误';
$l['err_myerr'] = 'MySQL错误';

//hf_theme.php
$l['welcome'] = '欢迎';
$l['logout'] = '登出';
$l['page_time'] = '页面创建在';
$l['times_are'] = '时区为GMT';
$l['time_is'] = '现在时间';
$l['load_start'] = '启动中';
$l['load_stop'] = '停止中';
$l['load_restart'] = '重启中';
$l['load_poweroff'] = '关机中';

//The Category Language Variables
$l['dock_restart'] = '重启容器';
$l['dock_stop'] = '停止容器';
$l['dock_start'] = '启动容器';
$l['dock_poweroff'] = '关机容器';
$l['dock_home'] = '主页';
$l['dock_settings'] = '修改设置';
$l['dock_help'] = '帮助支持';
$l['dock_sync'] = '与其他自动安装程序同步';
$l['go_home'] = '主页';
$l['dock_user'] = '用户信息';
$l['dock_password'] = '修改密码';
$l['dock_vps'] = '列出虚拟服务器';

// Left Menu
$l['lm_file_mgr'] = '文件管理';
$l['lm_res'] = '资源';
$l['lm_performance'] = '性能';
$l['lm_process'] = '进程';
$l['lm_service'] = '服务';
$l['lm_firewall'] = '防火墙';
$l['lm_ssh'] = 'SSH';
$l['lm_vnc'] = 'VNC';
$l['lm_vncpass'] = 'VNC密码';
$l['lm_statusc'] = '状态日志';
$l['lm_res_a'] = '系统警报';
$l['lm_logs'] = '任务日志';
$l['lm_bandwidth'] = '流量';
$l['lm_accountpass'] = '用户密码';
$l['lm_changepass'] = '用户密码';
$l['lm_controlpanel'] = '控制面板';
$l['lm_recipes'] = '配方';
$l['lm_disk'] = '磁盘';
$l['lm_backup'] = '备份';
$l['lm_ostemp'] ='系统重装';
$l['lm_cpu'] = '处理器';
$l['lm_ram'] = '内存';
$l['lm_host'] = '主机名';
$l['lm_logs'] = '日志';
$l['lm_ips'] = 'IP';
$l['lm_backup'] = '备份';
$l['lm_hvmsettings'] = 'VPS设置';
$l['lm_apikey'] = 'API令牌';
$l['lm_pdns'] = 'DNS';
$l['lm_rdns'] = '逆向DNS';
$l['lm_support'] = '支持';

// Users left menu
$l['lm_vs'] = 'VPS列表';
$l['lm_addvs'] = '启动实例';
$l['lm_resources'] = '云资源';
$l['lm_users'] = '用户';
$l['lm_usr_settings'] = '设置';
$l['lm_profile'] = '我的个人信息';
$l['you_are_admin'] = '您是一位管理员';

// Page Jump Related :
$l['page_jump_title'] = '输入转到的页数';
$l['page_page'] = '页';
$l['page_of'] = '/';
$l['page_go'] = '转到';

// Create VPS related for Kernel
$l['build_no_vs'] = '在数据库中没有找到此VPS';
$l['build_no_os'] = '没有找到这个系统模板';
$l['build_no_ip'] = '此VPS的主IP丢失';
$l['build_no_os_iso'] = '没有找到系统模板或ISO文件';

// Wrong and Right Kernel
$l['wrong_kernel'] = '您进入了错误的内核 - ';
$l['correct_kernel'] = '请重启进入正确的内核。';
$l['kvm_module'] = '未加载Linux-KVM模块。';
$l['kvm_network'] = $globals['bridge'].'未启动。请运行<b>service virtnetwork start</b>';
$l['temp_exists'] = '模板文件已存在';
$l['temp_snap_err'] = '不能创建快照，于是模板创建失败。此快照创建失败主要是由于磁盘空间不足';
$l['wrong_xm'] = '加载XEN模块不正确';

// Xen VPS Creation errors
$l['xen_err_lvm'] = '创建LVM时出现错误';
$l['xen_err_swap'] = '创建SWAP时出现错误';
$l['xen_err_tmp'] = '创建挂载点时出现错误';
$l['xen_err_mount'] = '挂载LVM时出现错误';
$l['xen_err_unmount'] = '卸载LVM时出现错误';
$l['xen_err_dd'] = '磁盘复制操作出现错误';
$l['xen_err_mkfs'] = '格式化VPS时出现错误';
$l['xen_err_mkswap'] = '格式化SWAP时出现错误';
$l['xen_err_untar'] = '释放系统模板时出现错误';
$l['xen_err_part'] = '创建分区时出现错误';
$l['xen_err_kpart'] = '映射分区时出现错误';
$l['xen_err_resizefs'] = '调整文件系统大小时出现错误';

// XCP VPS Creation errors
$l['xcp_err_vdi'] = '创建VDI时出现错误';
$l['xcp_err_iso'] = '加载ISO时出现错误';
$l['xcp_err_vif'] = '创建VIF时出现错误';

// KVM VPS Creation errors
$l['kvm_err_lvm'] = '创建LVM时出现错误';
$l['kvm_err_mount'] = '挂载LVM时出现错误';
$l['kvm_err_unmount'] = '卸载LVM时出现错误';
$l['kvm_err_dd'] = '磁盘复制操作出现错误';
$l['kvm_err_resizefs'] = '调整文件系统大小时出现错误';
$l['kvm_err_part'] = '创建分区时出现错误';
$l['kvm_err_kpart'] = '映射分区时出现错误';
$l['kvm_err_mkswap'] = '格式化SWAP时出现错误';

//Backup errors
$l['backup_err_mount'] = '挂载LVM临时分区时出现错误';
$l['backup_err_lvm'] = '创建LVM临时分区时出现错误';
$l['backup_err_mkfs'] = '格式化LVM临时分区时出现错误';
$l['backup_err_mkdir'] = '创建临时分区挂载点时出现错误';
$l['kvm_err_tar'] = '压缩文件时出现错误';
$l['xen_err_tar'] = '压缩文件时出现错误';
$l['kvm_err_untar'] = '解压缩文件时出现错误';
$l['backup_err_untar'] = '解压缩文件时出现错误';
$l['err_vzdump'] = '备份工具出现错误';
$l['err_create_backup_folder'] = '创建备份启动目录时出现错误';
$l['err_create_backup_date_folder'] = '创建备份目录时出现错误';

// OpenVZ VPS Creation errors
$l['openvz_err_ubc'] = '设置UBC设置时出现错误';
$l['openvz_err_ostemplate'] = '设置OS模板时出现错误';
$l['openvz_err_space'] = '设置磁盘空间时出现错误';
$l['openvz_err_inodes'] = '设置磁盘空间时出现错误';
$l['openvz_err_hostname'] = '设置主机名时出现错误';
$l['openvz_err_ip'] = '设置IP地址时出现错误';
$l['openvz_err_dns'] = '设置DNS时出现错误';
$l['openvz_err_cpu'] = '设置CPU单元时出现错误';
$l['openvz_err_cpulim'] =  '设置CPU限制时出现错误';
$l['openvz_err_cores'] = '设置CPU核心时出现错误';
$l['openvz_err_ioprio'] = '设置IO优先级时出现错误';
$l['openvz_err_create'] = '创建容器时出现错误';
$l['vswap_error'] = '设置VSwap时出现错误';

// Rescue Disk Errors
$l['err_downloading'] = '下载救援模板时遇到了错误';
$l['err_delete_disk'] = '删除救援磁盘时遇到了错误';

// Enduser VPS status column
$l['lm_status_online'] = '在线';
$l['lm_status_offline'] = '离线';
$l['lm_status_suspended'] = '暂停';
$l['vps_is_suspended'] = '此VPS已暂停。你不能为此VPS执行任何操作！';
$l['suspend_reason_bw'] = '此VPS由于流量用完而被暂停。你不能为此VPS执行任何操作！';

$l['unknown'] = '未知';
$l['bandwidth_mail_sub'] = 'VPS超出流量被暂停';
$l['bandwidth_mail_message'] = '嗨，

您的VPS `{{hostname}}`已被暂停，因为它已经超出了流量限制。

VPS已经使用了{{used_gb}}GB流量，但它被限制了{{limit_gb}}GB。

Best Regards,
{{sn}}';

?>
