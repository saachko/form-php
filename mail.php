<?php
  // if (isset($_POST['name'] && isset($_POST['surname']) && isset($_POST['text']))) {};
  
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $text = $_POST['text'];

  mail('rle21374@nezid.com',
      'Новое письмо',
      'Имя: '.$name."\n".
      'Фамилия: '.$surname."\n".
      'Сообщение: '.$text
  )

  // if (mail('brle21374@nezid.com',
  //     'Новое письмо',
  //     'Имя: '.$name."\n".
  //     'Фамилия: '.$surname."\n".
  //     'Сообщение: '.$text
  // )) {
  //   echo('Сообщение отправлено')
  // } else {
  //   echo('Ошибка!')
  // }
?>

<p>Привет, форма отправлена</p>
