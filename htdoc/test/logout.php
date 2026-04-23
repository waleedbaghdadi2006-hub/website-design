<?php
session_start();
session_destroy(); // إنهاء الجلسة
header("Location: HomePage.php"); // إعادة التوجيه إلى صفحة تسجيل الدخول
exit();
?>