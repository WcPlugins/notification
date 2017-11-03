<?php

require __DIR__ . '/_libext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um envio de e-mail de <b>teste</b>!</p>", "sales@pluginswc.com", "Plugins WC", "leonardo@neppo.com.br", "Leonardo Marques Borges");
