<html>
<body>
<h3>phpmailer Unit Test</h3>
请你输入<font color="#FF6666">收信</font>的邮箱地址:
<form name="phpmailer" action="test1.php" method="post">
    <input type="hidden" name="submitted" value="1"/>
    邮箱地址: <input type="text" size="50" name="address" />
    <br/>
    <input type="submit" value="发送"/>
</form>
</body>
</html>
<?php
require_once("PHPMailer-master/class.phpmailer.php"); //下载的文件必须放在该文件所在目录
require_once("PHPMailer-master/class.SMTP.php");
$mail = new PHPMailer(); //建立邮件发送类
if(empty($_POST['address'])){
    $address = "15136894115@163.com";
}else{
    $address = $_POST['address'];
}
$mail->IsSMTP(); // 使用SMTP方式发送
$mail->CharSet = "utf8";// 编码格式为utf8，不设置编码的话，中文会出现乱码
$mail->Host = "smtp.163.com";// 发送方的SMTP服务器地址
$mail->SMTPAuth = true; // 启用SMTP验证功能
$mail->Port = 25;// 163邮箱的ssl协议方式端口号是465/994
$mail->Username = "lucky_zhang2017@163.com";// 发送方的163邮箱用户名
$mail->Password = "zjz1170158182";// 发送方的邮箱密码，注意用163邮箱这里填写的是“客户端授权密码”而不是邮箱的登录密码！
$mail->From = "lucky_zhang2017@163.com"; //邮件发送者email地址
$mail->FromName = "您的名称";
$mail->AddAddress($address, "收件人");//收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
//$mail->AddReplyTo("", "");
//$mail->AddAttachment("/var/tmp/file.tar.gz"); // 添加附件
//$mail->IsHTML(true); // set email format to HTML //是否使用HTML格式
$mail->Subject = "这是一封发给读者的新"; //邮件标题
$mail->Body = "欢迎您的加入"; //邮件内容
$mail->AltBody = "This is the body in plain text for non-HTML mail clients"; //附加信息，可以省略
if(!$mail->Send())
{
    echo "邮件发送失败. <p>";
    echo "错误原因: " . $mail->ErrorInfo;
    exit;
}
echo "邮件发送成功";
?>