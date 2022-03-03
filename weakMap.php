<?php

class Account
{
    public $name, $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}

class EmailMessage
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }
}

class EmailSender {
    private WeakMap $counter;

    public function __construct() {
        $this->counter = new WeakMap();
    }

    public function send(Account $account, EmailMessage $emailMessage) {
        $this->counter[$account] = $emailMessage;
    }

    public function getStats(): iterable {
        return $this->counter->getIterator();
    }
}

$account = new Account('gustavo', 'gustavo@email.com');
$sender = new EmailSender();
$message = new EmailMessage("Account validated with success!");
$sender->send($account, $message);
// unset($account); // when the account is deleted its message is also deleted from memory
$list = $sender->getStats();
foreach($list as $item){
    var_dump($item);echo "\n\n";
}