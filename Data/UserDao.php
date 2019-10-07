<?php
/**
 * Created by PhpStorm.
 * User: vvthg
 * Date: 2/19/2019
 * Time: 2:57 PM
 */

class UserDao
{
    var $dbu;

    public function __construct() {
        $this->dbu = new DatabaseUtil();
        $this->dbu->Open();
    }

    public function Insert(User $user)
    {
        $sql = "insert into users(username, email, password, fullname, image, role) values(:username, :email, :password, :fullname, :image, :role)";

        $args = array(
            "username"=>$user->Username,
            "email"=>$user->Email,
            "password"=>$user->Password,
            "fullname"=>$user->Fullname,
            "image"=>$user->Image,
            "role"=>$user->Role
        );

        $this->dbu->Execute($sql, $args);

        $user->Id = $this->dbu->GetLastInsertedId();

        return $user;
    }

    public function Delete($id)
    {
        $sql = "Delete from users where id = :id";

        $args = array(
            'id'=>$id
        );

        $result = $this->dbu->Execute($sql, $args);

        return $result;
    }

    public function Update(User $user)
    {
        $sql = "update users set username =:username, password =:password, email = :email, fullname = :fullname, image = :image, role = :role where id =:id";

        $args = array(
            'id'=>$user->Id,
            "username"=>$user->Username,
            "email"=>$user->Email,
            "password"=>$user->Password,
            "fullname"=>$user->Fullname,
            "image"=>$user->Image,
            "role"=>$user->Role
        );

        $result = $this->dbu->Execute($sql, $args);

        return $result;
    }

    public function Find()
    {
        $sql = "select * from users";

        $users = $this->dbu->Query($sql, array());

        return $users;
    }

    public function FindOne($id)
    {
        $sql = "select * from users where id = :id";

        $args = array(
            'id'=>$id
        );

        $user = $this->dbu->Query($sql, $args, true);

        return $user;
    }

    public function FindByName($name)
    {
        $sql = "select * from users where name like :username";

        $args = array(
            'name'=>"%$name%"
        );

        $user = $this->dbu->Query($sql, $args);

        return $user;
    }


    public function CheckLogin($username, $password)
    {
        $sql = "select * from users where username = :username and password = :password";

        $args = array(
            'username'=>$username,
            'password'=>$password
        );

        $user = $this->dbu->Query($sql, $args, true);

        return $user != null;
    }

    public function is_valid_email($email)
    {
            $sql = "select * from users where email= :email";

            $args = array(
                'email'=>$email
            );

            $valid_email = $this->dbu->Query($sql, $args, true);

            return $valid_email;
    }

    public function is_valid_user($username)
    {
        $sql = "select * from users where username= :username";

        $args = array(
            'username'=>$username
        );

        $valid_user = $this->dbu->Query($sql, $args, true);

        return $valid_user;
    }

    public function upload()
    {
        if (isset($_POST["ok"])) //kiem tra xem nguoi xu dung da bam vao nut "tai len" hay chua
        {

            if ($_FILES["file"]["name"] != NULL) {

                if ($_FILES["file"]["type"] == "image/jpeg"
                    || $_FILES["file"]["type"] == "image/png"
                    || $_FILES["file"]["type"] == "image/gif"
                ) {
                    $path = "Assets/img/user/"; // file luu vào thu muc chua file upload
                    $tmp_name = $_FILES['file']['tmp_name'];
                    $name = $_FILES['file']['name'];
// Upload file
                    move_uploaded_file($tmp_name, $path . $name);
                }
            }
        }
    }
}