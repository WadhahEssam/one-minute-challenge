<?php
session_start();
session_unset();
session_destroy();
?>

<html>
    <body>
        <script>
            window.location = 'index.php?dir=enter&message=تم حفظ النتيجة ';
        </script>
    </body>
</html>


