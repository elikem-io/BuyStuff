<?php
    class Users extends Db{
        private $firstname = mysqli_real_string_escape($_POST['firstname']);
        private $lastname = mysqli_real_string_escape($_POST['lastname']);
        private $email = mysqli_real_string_escape($_POST['email']);
        private $username = mysqli_real_string_escape($_POST['username']);
        private $pwd = mysqli_real_string_escape($_POST['password']);

        public function signUp($firstname, $lastname, $email, $username, $hashedPwd){
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->username = $username;
            $this->pwd = $pwd;

        //validating the dields
            //check for empty fields
            if(empty($this->firstname) || empty($this->lastname) || empty($this->email) || empty($this->username) || empty($this->pwd)){
                header('Location: ../index.php?signup=empty');
                exit();
            }else{
                //check for appropriate characters
                if(!preg_match("/^[a-zA-Z]*$/", $this->firstname) || !preg_match("/^[a-zA-Z]*$/" ,$this->lastname),!preg_match("$^/a-zA-Z/*", $this->username)){
                    header('Location: ../index.php?signup=invalidCharacters');
                    exit();
                }else{
                    //check for valid email
                    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
                        header('Location: ../index.php?signup=email');
                        exit();
                    }else{
                        //check if usernamealready exists
                        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE username = '?';");
                        $stmt->execute([$this->username]);
                        $numRows = $stmt->num_rows;
                        if($numRows > 0){
                            header('Location: ../index.php?signup=email');
                            exit();
                        }else{
                            //hash the  password
                            $hashedPwd = password_hash($this->pwd, PASSWORD_DEFAULT);

                            //create the user
                            $stmt->connect()->prepare("INSERT INTO users (firstname, lastname, email, username, pwd) VALUES (?,?,?,?,?)");
                            $stmt->execute([$this->firstname, $this->lastname, $this->email, $this->username, $this->hashedPwd]);
                            header("Location: ../index.php?signupsuccessful");
                        }
                    }
                }
            }
         
           
        }
    }