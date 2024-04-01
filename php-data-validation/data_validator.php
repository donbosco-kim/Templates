<?php
//create a user validator class to handle validation
class UserValidator {
    private $data;
    private $errors = [];
    private static $fields = ['username', 'email', 'phonenumber']; //fields that need to be validated
    //constructor which takes in POST data from the form
    public function __construct($post_data)
    {
        $this->data = $post_data;
    }
    //check required "fields to check" are present in the data
    public function validateForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }
        $this->validateUsername();
        $this->validateEmail();
        $this->validatePhonenumber();
        //return an error array once all checks are done
        return $this->errors;
    }
    //create methods to validate individual fields
    //a method to validate a username
    private function validateUsername(){
        $val = trim($this->data['username']);

        if(empty($val)){ //if the field is empty
            $this->addError('username', 'username cannot be empty');
        }else {
            if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)){
                $this->addError('username', 'username must be 6-12 chars & alphanumeric');
            }
        }
    }

    //-- a method to validate an email
    private function validateEmail(){
        $val = trim($this->data['email']);

        if(empty($val)){ //if the field is empty
            $this->addError('email', 'email cannot be empty');
        }else {
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
                $this->addError('email', 'Invalid email format');
            }
        }
    }
    //-- a method to validate phone number
    private function validatePhonenumber(){
        $val = trim($this->data['phonenumber']);
        if(empty($val)){
            $this->addError('phonenumber', 'Phone number cannot be empty');
        }else {
            if(!preg_match('/^\d{3}-\d{3}-\d{4}$/', $val)){
                $this->addError('phonenumber', 'Invalid phone number format');
            }
        }
    }    
    private function addError($key, $val){
        $this->errors[$key] = $val;
    }
}
?>