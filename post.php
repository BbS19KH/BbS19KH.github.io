<DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?php
		mb_language("Japanease");
		mb_internal_encoding("UTF-8");
      	$to = $_POST['email'];
      	$title = $_POST['name'];
      	$content = $_POST['message'];
      	if(mb_send_mail($to, $title, $content)){
        	echo "メールを送信しました";
      	} else {
        	echo "メールの送信に失敗しました";
      	};
    ?>
	</body>
</html>