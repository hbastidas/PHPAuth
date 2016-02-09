<?php

$lang = array();

$lang['user_blocked'] = "En este momento su usuario está bloqueado del sistema";
$lang['user_verify_failed'] = "Código Captcha invalido.";

$lang['email_password_invalid'] = "dirección de correo electrónico / contraseña no son válidos.";
$lang['email_password_incorrect'] = "dirección de correo electrónico / contraseña son incorrectos .";
$lang['remember_me_invalid'] = "El campo no es válido .";

$lang['password_short'] = "La contraseña es demasiado corta.";
$lang['password_weak'] = "La contraseña es demasiado débil.";
$lang['password_nomatch'] = "Las contraseñas no coinciden.";
$lang['password_changed'] = "Contraseña cambiada con éxito.";
$lang['password_incorrect'] = "La contraseña actual es incorrecta.";
$lang['password_notvalid'] = "Contraseña inválida.";

$lang['newpassword_short'] = "La nueva contraseña es demasiado corta .";
$lang['newpassword_long'] = "La nueva contraseña es demasiado largo ";
$lang['newpassword_invalid'] = "La nueva contraseña debe contener al menos una mayúscula y minúscula , y al menos un dígito.";
$lang['newpassword_nomatch'] = "Las nuevas contraseñas no coinciden.";
$lang['newpassword_match'] = "La nueva contraseña es la misma que la contraseña anterior.";

$lang['email_short'] = "dirección de correo electrónico es demasiado corto .";
$lang['email_long'] = "dirección de correo electrónico es demasiado largo .";
$lang['email_invalid'] = "Dirección de correo electrónico es inválida.";
$lang['email_incorrect'] = "correo electrónico es incorrecto ";
$lang['email_banned'] = "Esta dirección de correo electrónico no está permitida";
$lang['email_changed'] = "dirección de correo electrónico ha cambiado correctamente .";

$lang['newemail_match'] = "Nuevo correo electrónico coincide correo electrónico anterior .";

$lang['account_inactive'] = "Cuenta aún no ha sido activada.";
$lang['account_activated'] = "Cuenta activado.";

$lang['logged_in'] = "Ahora está conectado.";
$lang['logged_out'] = "You are now logged out.";

$lang['system_error'] = "A system error has been encountered. Please try again.";

$lang['register_success'] = "Account created. Activation email sent to email.";
$lang['register_success_emailmessage_suppressed'] = "Account created.";
$lang['email_taken'] = "The email address is already in use.";

$lang['resetkey_invalid'] = "Reset key is invalid.";
$lang['resetkey_incorrect'] = "Reset key is incorrect.";
$lang['resetkey_expired'] = "Reset key has expired.";
$lang['password_reset'] = "Password reset successfully.";

$lang['activationkey_invalid'] = "Activation key is invalid.";
$lang['activationkey_incorrect'] = "Activation key is incorrect.";
$lang['activationkey_expired'] = "Activation key has expired.";

$lang['reset_requested'] = "Password reset request sent to email address.";
$lang['reset_requested_emailmessage_suppressed'] = "Password reset request is created.";
$lang['reset_exists'] = "A reset request already exists.";

$lang['already_activated'] = "Account is already activated.";
$lang['activation_sent'] = "Activation email has been sent.";
$lang['activation_exists'] = "An activation email has already been sent.";

$lang['email_activation_subject'] = '%s - Activate account';
$lang['email_activation_body'] = 'Hello,<br/><br/> To be able to log in to your account you first need to activate your account by clicking on the following link : <strong><a href="%1$s/%2$s%3$s">%1$s/%2$s%3$s</a></strong><br/><br/> You then need to use the following activation key: <strong>%3$s</strong><br/><br/> If you did not sign up on %1$s recently then this message was sent in error, please ignore it.';
$lang['email_activation_altbody'] = 'Hello, ' . "\n\n" . 'To be able to log in to your account you first need to activate your account by visiting the following link :' . "\n" . '%1$s/%2$s%3$s' . "\n\n" . 'You then need to use the following activation key: %3$s' . "\n\n" . 'If you did not sign up on %1$s recently then this message was sent in error, please ignore it.';

$lang['email_reset_subject'] = '%s - Password reset request';
$lang['email_reset_body'] = 'Hello,<br/><br/>To reset your password click the following link :<br/><br/><strong><a href="%1$s/%2$s%3$s#resetclave">%1$s/%2$s%3$s#resetclave</a></strong><br/><br/>You then need to use the following password reset key: <strong>%3$s</strong><br/><br/>If you did not request a password reset key on %1$s recently then this message was sent in error, please ignore it.';
$lang['email_reset_altbody'] = 'Hello, ' . "\n\n" . 'To reset your password please visiting the following link :' . "\n" . '%1$s/%2$s%3$s#resetclave' . "\n\n" . 'You then need to use the following password reset key: %3$s' . "\n\n" . 'If you did not request a password reset key on %1$s recently then this message was sent in error, please ignore it.';

$lang['account_deleted'] = "Account deleted successfully.";
$lang['function_disabled'] = "This function has been disabled.";