<?php /* Smarty version Smarty-3.1.12, created on 2013-06-08 16:21:33
         compiled from "/www/yiya/trunk/admin/Smarty/templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104523456951b2e98d1d8ec2-44997984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e45041b384d9c2fa5e015f6aa4cb0658e8629c91' => 
    array (
      0 => '/www/yiya/trunk/admin/Smarty/templates/register.tpl',
      1 => 1370677921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104523456951b2e98d1d8ec2-44997984',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51b2e98d1dae32_83871843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b2e98d1dae32_83871843')) {function content_51b2e98d1dae32_83871843($_smarty_tpl) {?><html>

<head>
<title>ע��</title>
<script language="javascript" src="js/xmlhttprequest.js"></script>
<script language="javascript" src="js/register.js"></script>
</head>

<body>
<div id="container">
  <div id="rgbgdiv">
    <div id="regnamediv"><b>ע�����ƣ�</b>
      <input id="regname" name="regname" type="text" />
      <div id="namediv">�������û���</div>
    </div>
    <div id="regpwddiv1"><b>ע�����룺</b>
      <input id="regpwd1" name="regpwd1" type="password" />
      <div id="pwddiv1">����������</div>
    </div>
    <div id="regpwddiv2"><b>ȷ�����룺</b>
      <input id="regpwd2" name="regpwd2" type="password" />
      <div id="pwddiv2">������ȷ������</div>
    </div>
    <div id="regemaildiv"><b>�������䣺</b>
      <input id="email" name="email" type="text" />
      <div id="emaildiv">�û�������һ�����ʹ��</div>
    </div>
    <div id="morediv" style="display:none;">
      <hr id="part" />
      <div id="regquestiondiv"><b>�ܱ����⣺</b>
        <input id="question" name="question" type="text" />
        <div id="questiondiv">�û�������һ�����ʹ��</div>
      </div>
      <div id="reganswerdiv"><b>�ܱ��𰸣�</b>
        <input id="answer" name="answer" type="text" />
        <div id="answerdiv">�û�������һ�����ʹ��</div>
      </div>
      <div id="regrealnamediv"><b>��ʵ������</b>
        <input id="realname" name="realname" type="text" />
        <div id="realnamediv">�û�����ʵ����</div>
      </div>
      <div id="regbirthdaydiv"><b>�������ڣ�</b>
        <input id="birthday" name="birthday" type="text" />
        <div id="birthdaydiv">�û��ĳ������ڡ���ʽ��YYYY-MM-DD</div>
      </div>
      <div id="regtelephonediv"><b>��ϵ�绰��</b>
        <input id="telephone" name="telephone" type="text" />
        <div id="telephonediv">�û�����ϵ�绰</div>
      </div>
      <div id="regqqdiv"><b>QQ�� �룺</b>
        <input id="qq" name="qq" type="text" />
        <div id="qqdiv">�û�QQ��</div>
      </div>
    </div>
    <div id="btndiv2">
      <button id="regbtn" disabled="disabled">&nbsp;</button>
      <button id="morebtn">&nbsp;</button>
      <button id="logbtn">&nbsp;</button>
    </div>
  </div>
  <div id="imgdiv" style=" visibility: hidden;">&nbsp;</div>
</div>
</body>
</html>
<?php }} ?>