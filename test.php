<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;



class User 
{
    public $id;
    public $name;
    public $email;
    public $password;

    public function __construct($id, $name, $email, $password)
    {
        $form = [
            $this->id = $id, 
            $this->name = $name, 
            $this->email = $email,
            $this->password = $password
        ];
    }
}
	/*
	public function getTime(){
        function validation(){
            $validator = Validation::createValidator();
            $constraint = new Collection([    
                'id' => new Assert\Regex('/^[0-9]-_+$/'),
                'name' => new Assert\Regex('/^[A-Za-z]+\s[A-Za-z]+$/u'),   	
                'email' => new Assert\Email(),
                'password' => [
                    new Assert\NotBlank(),
                    new Assert\Length(['min' => 7]),
                    new Assert\Length(['max' => 64])
                ]
            ]);
            $violations = $validator->validate($form, $constraint);
            $errors = [];
            if (0 !== count($violations)) {
                foreach ($violations as $violation) {
                    //$errors[] = array($violation->getPropertyPath() => $violation->getMessage()); //!
					$errors[] = $violation->getPropertyPath() . ' : ' . $violation->getMessage();
                }
            } 
        }
        if (empty($errors)){
            return date("d.m.Y H:i:s", time());
        }
        else return $errors;
    } 
    } 
	
}
var_dump($var1 = new User(111, 'John', 'test@pius.ru', 'qwerty123'));
var_dump($var1->getTime());
var_dump($var2 = new User(222, 'Frank!', 'test@test@com', '1234'));
//var_dump($var2->getTime());
var_dump($var3 = new User(333, 'Nick Nickolson', 'a@b.ru', '123456789'));
var_dump($var3->getTime());


class Comment extends User
{
    public $comment;

    public function __construct($comment)
    {
        $this->comment = $comment;
    }
    public function setArray(){
        $this->array = $arr + $this->array; 
        return $this;
    }
}

?>
*/
