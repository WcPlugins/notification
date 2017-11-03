# Email Notification Library using phpMailer

This library has the function of sending e-mail using the phpmailer library. Doing this in an uncomplicated way is essential for any system.

To install the library, run the following command:

```sh
composer requires gustavoweb/composer_teste
```

To make use of the library, simply require the autoload of the composer, invoke the class and make the method call:

```sh
<? php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$mail = new Email (2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587)", "from@email.com", "From Name");

$email->sendEmail ("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note that the entire configuration of sending the email is using the magic method builder! Once you've invoked the constructor method within your application, your system will be able to fire the shots.

### Developers
* [WcPlugins] - Developer of this library and tutor of the course Composer in the Practice!
* [phpMailer] - Lib to send Email

License
----

MIT

** One more UpInside Training course, make good use! **

[//]: #
[WcPlugins]: <mailto: sales@pluginswc.com>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>
