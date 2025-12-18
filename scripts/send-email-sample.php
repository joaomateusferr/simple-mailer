<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Services\EmailProvider as Provider;
use App\Services\EmailContent as Content;
use App\Services\EmailSender;

try{

    $Provider = new Provider('localhost', 1025);
    $Content =  new Content('Teste de script', 'Veio do script!');

    $Recipients = ['joaomateusferr@gmail.com'];
    $EmailSender = new EmailSender($Provider, 'joaomateusferr@gmail.com', $Recipients, $Content);
    $EmailSender->sendOneByOne();

} catch (Exception $Exception) {

    echo $Exception->getMessage()."\n";

}




