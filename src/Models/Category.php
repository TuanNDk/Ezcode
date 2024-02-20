<?php
namespace Pv\BanKhoaHoc\Models;

use Pv\BanKhoaHoc\Commons\Model;

class Category extends Model
{
    public function getAll()
    {
        try {
            $sql = "SELECT      ct.id           ct_id,
                                ct.name         ct_name,
                                ct.thumbnail    ct_thumbnail,
                                ct.status_id    ct_status_id,
                                s.id            s_id,
                                s.name          s_name
                    FROM        categories ct
                    INNER JOIN  statuses s
                    ON          s.id    =       ct.status_id
                    ORDER BY    ct_id DESC";

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
            $sql = "SELECT      ct.id           ct_id,
                                ct.name         ct_name,
                                ct.thumbnail    ct_thumbnail,
                                ct.status_id    ct_status_id,
                                s.id            s_id,
                                s.name          s_name
                    FROM        categories ct
                    INNER JOIN  statuses s
                    ON          s.id    =       ct.status_id
                    WHERE       ct.id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function insert($name, $status_id, $thumbnail = null)
    {
        try {
            $sql = "INSERT INTO categories (name, status_id, thumbnail) 
                    VALUES (:name, :status_id, :thumbnail)";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':status_id', $status_id);
            $stmt->bindParam(':thumbnail', $thumbnail);

            $stmt->execute();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function update($id, $name, $thumbnail, $status_id)
    {
        try {
            $sql = "UPDATE  categories 
                    SET     name = :name,
                            thumbnail = :thumbnail,
                            status_id = :status_id
                    WHERE   id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':status_id', $status_id);
            $stmt->bindParam(':thumbnail', $thumbnail);

            $stmt->execute();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function deleteByID($id)
    {
        try {
            $sql = "DELETE FROM categories WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function getByCategoryName($name)
    {
        try {
            $sql = "SELECT * FROM categories WHERE name = :name";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':name', $name);

            $stmt->execute();

            return $stmt->fetch();

        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function getCategoryForMenu()
    {
        try {
            $sql = "SELECT ct.id, ct.name, ct.status_id 
                    FROM categories ct 
                    INNER JOIN statuses s
                    ON ct.status_id = s.id
                    ORDER BY id ASC";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function getByKyw($kyw)
    {
        try {
            $sql = "SELECT      ct.id           ct_id,
                                ct.name         ct_name,
                                ct.thumbnail    ct_thumbnail,
                                ct.status_id    ct_status_id,
                                s.id            s_id,
                                s.name          s_name
                    FROM        categories ct
                    INNER JOIN  statuses s
                    ON          s.id    =       ct.status_id
                    WHERE 1";
            if ($kyw != '') {
                $sql .= " AND ct.name like '%" . $kyw . "%'";
                $sql .= " OR s.name like '%" . $kyw . "%'";
            }
            $sql .= " order by ct_id desc";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();

        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
}