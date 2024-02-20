<?php
namespace Pv\BanKhoaHoc\Models;

use Pv\BanKhoaHoc\Commons\Model;

class Status extends Model
{
    public function getAll()
    {
        try {
            $sql = "SELECT * FROM statuses";

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
            $sql = "SELECT * FROM statuses WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return $stmt->fetch();

        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function insert($name)
    {
        try {
            $sql = "INSERT INTO statuses (name) 
                    VALUES (:name)";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':name', $name);

            $stmt->execute();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function update($id, $name)
    {
        try {
            $sql = "UPDATE  statuses 
                    SET     name = :name
                    WHERE   id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);

            $stmt->execute();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function deleteByID($id)
    {
        try {
            $sql = "DELETE FROM statuses WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function getByStatusName($name)
    {
        try {
            $sql = "SELECT * FROM statuses WHERE name = :name";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':name', $name);

            $stmt->execute();

            return $stmt->fetch();

        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
}