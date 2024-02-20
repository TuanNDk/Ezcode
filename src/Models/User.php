<?php
namespace Pv\BanKhoaHoc\Models;

use Pv\BanKhoaHoc\Commons\Model;

class User extends Model
{
    public function getAll()
    {
        try {
            $sql = "SELECT * FROM users ORDER BY id DESC";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();

        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function getByID($id)
    {
        try {
            $sql = "SELECT * FROM users WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function insert($username, $fullname, $dob, $tel, $address, $email, $password, $avatar = null)
    {
        try {
            $sql = "INSERT INTO users (username, fullname, dob, tel, address, email, password, avatar) 
            VALUES (:username, :fullname, :dob, :tel, :address, :email, :password, :avatar)";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':fullname', $fullname);
            $stmt->bindParam(':dob', $dob);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':avatar', $avatar);

            $stmt->execute();

        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function update($id, $username, $fullname, $dob, $tel, $address, $email, $password, $avatar = null)
    {
        try {
            $sql = "UPDATE      users 
                    SET         username = :username,
                                fullname = :fullname,
                                dob = :dob,
                                tel = :tel,
                                address = :address, 
                                email = :email, 
                                password = :password, 
                                avatar = :avatar 
                    WHERE       id = :id
            ";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':fullname', $fullname);
            $stmt->bindParam(':dob', $dob);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':avatar', $avatar);

            $stmt->execute();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function deleteByID($id)
    {
        try {
            $sql = "DELETE FROM users WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }


    public function getByEmailAndPassword($email, $password)
    {
        try {
            $sql = "SELECT * FROM users WHERE email = :email AND password = :password";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            $stmt->execute();

            return $stmt->fetch();

        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function getByKyw($kyw)
    {
        try {
            $sql = "SELECT * FROM users WHERE 1";
            if ($kyw != '') {
                $sql .= " AND username like '%" . $kyw . "%'";
                $sql .= " OR email like '%" . $kyw . "%'";
                $sql .= " OR tel like '%" . $kyw . "%'";
            }
            $sql .= " order by id desc";

            $stmt = $this->conn->prepare($sql);

            // $stmt->bindParam(':kyw', $kyw);

            $stmt->execute();

            return $stmt->fetchAll();

        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
}