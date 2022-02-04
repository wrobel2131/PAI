<?php
 require_once 'AppController.php';
 require_once __DIR__.'/../models/User.php';
 require_once __DIR__.'/../repository/UserRepository.php';

 class SecurityController extends AppController
 {
     private $userRepository;
     private $nameCookie;

     public function __construct()
     {
         parent::__construct();
         $this->userRepository = new UserRepository();
         $this->nameCookie = 'user_id_for_cookie';
     }

     public function login()
     {


         if (!$this->isPost()) {
             return $this->render('sign-in');
         }

         $email = $_POST['email'];
         $password = $_POST['password'];

         $user = $this->userRepository->getUser($email);

         if(!$user) {
             return $this->render('sign-in', ['messages' => ['User does not exist']]);

         }

         if ($user->getEmail() !== $email) {
             return $this->render('sign-in', ['messages' => ['User with this email not exists']]);

         }

         if (!password_verify($password, $user->getHashedPassword())) {
             return $this->render('sign-in', ['messages' => ['Wrong password']]);
         }

//         if (isset($_COOKIE[$this->nameCookie])) {
//             echo "Cookie is sewt";
//         } else {
//             echo "Cookie is not set";
//         }
//         die();
         $user_id = $this->userRepository->getUserId($email);
//         unset($_COOKIE[$this->nameCookie]);
//         var_dump(isset($_COOKIE[$this->nameCookie]));
//         die();
         if (!isset($_COOKIE[$this->nameCookie])) {
             setcookie($this->nameCookie, $user_id, time() + (60*60*24), '/');
         }
//
//         var_dump($_COOKIE[$this->nameCookie]);
//        die();

//         return $this->render('home-app');
         $url = "http://$_SERVER[HTTP_HOST]";
         header("Location: {$url}/home");
     }

     public function register()
     {
         if (!$this->isPost()) {
             return $this->render('sign-up');
         }

         $name = $_POST['name'];
         $surname = $_POST['surname'];
         $email = $_POST['email'];
         $password = $_POST['password'];
         $confirmPassword = $_POST['confirm-password'];

         if ($password !== $confirmPassword) {
             return $this->render('sign-up', ['messages' => ['Please provide proper password']]);

         }


         $hashedPassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 10));

         $user = new User($name, $surname, $email, $hashedPassword);

         $this->userRepository->addUser($user);

         return $this->render('sign-in', ['messages' => ['You\'ve been succesfully registrated!']]);


     }

     public function logout()
     {
//         echo "essa";
//         http_response_code(200);
//          var_dump("ESSAAAA");
//            setcookie($this->nameCookie);
         if (isset($_COOKIE[$this->nameCookie])) {
             setcookie($this->nameCookie, time() -(60*60*24), '/');
//             return $this->render('sign-in');
         }
         return $this->render('sign-in');

     }

     public function home()
     {
         if (!isset($_COOKIE[$this->nameCookie])) {
             $this->render('sign-in');
         }

         $id_user = $_COOKIE[$this->nameCookie];


         $user = $this->userRepository->getUserById($id_user);

         $this->render('home-app', ['user' => $user]);
     }

 }