<?
    if (mail($_POST['ola190.ger@gmail.com'],"FD Traning",$_POST['phone'],$_POST['name'],"Content-type: text/html; charset=utf-8")) {
		echo "Сообщение отправленно!";
	}
    else {
		echo "Ошибка отправки сообщения.";
	}
?>