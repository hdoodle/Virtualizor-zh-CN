<?php

//////////////////////////////////////////////////////////////
//===========================================================
// dashboard_lang.php
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

$l['no_username'] = '您没填用户名';
$l['no_password'] = '您没填密码';
$l['too_many_attempts'] = '你已经用完了你的失败登陆次数限制'.$globals['login_attempts'].'！<b>Please wait '.$globals['login_ban_time'].' minutes before trying again.</b> Don\'t forget that the password is case sensitive. Forgotten your password? Please try the <a href="'.$globals['index'].'act=login&sa=fpass">Forgot Password</a> utility.';

$l['<title>'] = '登录';
$l['sign_in'] = '登录';
$l['log_user'] = '邮箱或用户名';
$l['log_pass'] = '密码';
$l['login'] = '登录';
$l['sub_but'] = '登录';

$l['<title_fpass>'] = '忘记密码';
$l['pass_nomatch'] = '密码不匹配';
$l['forgotpass'] = '忘记密码';
$l['emailuser'] = '邮箱';
$l['enteremail'] = '请输入您的邮箱';
$l['sub_email'] = '提交';
$l['no_email'] = '您还没提交邮箱呢';
$l['invalidemail'] = '您提交的邮箱好像不太对的样子';
$l['mail_sub'] = '重置密码';
$l['mail_body'] = '嗨，

请求重置您的密码已经取得进展。
如果您没有要求重设密码，请忽略此电子邮件。

如果您想重置密码，那么请点击以下链接：
https://{{node_ip}}:4083/index.php?act=login&sa=resetpass&key=&soft-1;

请注意：上面的链接有效期只有24小时。

Regards,
'.$globals['sn'];
$l['mail_done'] = '已发送一封邮件用来重设密码';
$l['back_to_login'] = '返回登陆';

$l['<title_reset>'] = '重设密码';
$l['resetpass'] = '重设密码';
$l['log_new_pass'] = '新密码'; 
$l['log_reppass'] = '确认密码';
$l['changepass'] = '更改密码';
$l['no_key'] = '没有复位键提交';
$l['invalidkey'] = '指定了无效的密钥';
$l['no_new'] = '请输入有效密码';
$l['no_reppass'] = '请输入确认密码';
$l['no_match'] = '密码不匹配';
$l['keyexpire'] = '密匙不再有效';
$l['passchanged'] = '密码修改成功。请继续<a href="'.$globals['index'].'act=login">登录</a>';
$l['forgot_pass'] = '忘记密码';

?>
