<?php
session_start();
session_unset();
session_destroy();
?>
	<script language="JavaScript">
            alert('Berhasil Keluar');
            document.location='auth/login';
        	</script>
<?php
 ?>