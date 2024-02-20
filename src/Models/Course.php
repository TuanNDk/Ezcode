<?php

namespace Pv\BanKhoaHoc\Models;

use Pv\BanKhoaHoc\Commons\Model;

class Course extends Model
{
    public function getAll()
    {
        try {
            $sql = "SELECT      ct.id               ct_id,
                                ct.name             ct_name,
                                c.id                c_id,
                                c.name              c_name,
                                c.category_id       c_category_id,
                                c.description       c_description,
                                c.price             c_price,
                                c.status_id         c_status_id,
                                c.thumbnail         c_thumbnail,
                                st.name             st_name,
                                st.id               st_id
                    FROM        courses c
                    INNER JOIN  categories ct
                    ON          ct.id           =   c.category_id
                    INNER JOIN  statuses st
                    ON          st.id           =   c.status_id
                    ORDER BY    c.id ASC
                    ";

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
            $sql = "SELECT      ct.id,
                                ct.name             ct_name,
                                c.id                c_id,
                                c.name              c_name,
                                c.category_id       c_category_id,
                                c.description       c_description,
                                c.price             c_price,
                                c.status_id         c_status_id,
                                c.thumbnail         c_thumbnail,
                                st.name             st_name,
                                st.id               st_id
                    FROM        courses c
                    INNER JOIN  categories ct
                    ON          ct.id           =   c.category_id
                    INNER JOIN  statuses            st
                    ON          st.id           =   c.status_id
                    WHERE       c.id            =   :id
                    ";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return $stmt->fetch();

        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function insert($name, $category_id, $description, $price, $status_id, $thumbnail = null)
    {
        try {
            $sql = "INSERT INTO courses (name, category_id, description, price, status_id, thumbnail)
            VALUES (:name, :category_id, :description, :price, :status_id, :thumbnail)";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':category_id', $category_id);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':status_id', $status_id);
            $stmt->bindParam(':thumbnail', $thumbnail);

            $stmt->execute();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }


    public function update($id, $name, $category_id, $description, $price, $status_id, $thumbnail)
    {
        try {
            $sql = "UPDATE  courses
                    SET     name            =   :name,
                            category_id     =   :category_id,
                            description     =   :description,
                            price           =   :price,
                            status_id       =   :status_id,
                            thumbnail       =   :thumbnail
                    WHERE   id              =   :id;
                    ";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':category_id', $category_id);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':status_id', $status_id);
            $stmt->bindParam(':thumbnail', $thumbnail);

            $stmt->execute();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }


    public function deteleByID($id)
    {
        try {
            $sql = "DELETE FROM courses WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function getCourseTop4()
    {
        try {
            $sql = "SELECT  c.id            c_id,
                            c.name          c_name,
                            c.category_id   c_category_id,
                            c.thumbnail     c_thumbnail,
                            c.price         c_price,
                            c.status_id     c_status_id,
                            ct.id           ct_id,
                            ct.name         ct_name
                    FROM    courses c
                    INNER JOIN categories ct
                    ON          c.category_id = ct.id
                    ORDER BY c.id ASC
                    LIMIT 4";

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
            $sql = "SELECT      ct.id               ct_id,
                                ct.name             ct_name,
                                c.id                c_id,
                                c.name              c_name,
                                c.category_id       c_category_id,
                                c.description       c_description,
                                c.price             c_price,
                                c.status_id         c_status_id,
                                c.thumbnail         c_thumbnail,
                                st.name             st_name,
                                st.id               st_id
                    FROM        courses c
                    INNER JOIN  categories ct
                    ON          ct.id           =   c.category_id
                    INNER JOIN  statuses st
                    ON          st.id           =   c.status_id
                    WHERE 1";

            if ($kyw != '') {
                $sql .= " AND c.name like '%" . $kyw . "%'";
                $sql .= " OR st.name like '%" . $kyw . "%'";
            }

            $sql .= " ORDER BY c.id ASC";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();

        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function getByPrice($from = '', $to = '')
    {
        try {
            $sql = "SELECT      ct.id               ct_id,
                                ct.name             ct_name,
                                c.id                c_id,
                                c.name              c_name,
                                c.category_id       c_category_id,
                                c.price             c_price,
                                c.status_id         c_status_id,
                                c.thumbnail         c_thumbnail,
                                st.name             st_name,
                                st.id               st_id
                    FROM        courses c
                    INNER JOIN  categories ct
                    ON          ct.id           =   c.category_id
                    INNER JOIN  statuses st
                    ON          st.id           =   c.status_id
                    WHERE 1";

            if ($from != '' && $to != '') {
                $sql .= " AND c.price BETWEEN $from AND $to";
            } else if ($from = '' && $to != '') {
                $sql .= " AND c.price >= 0 AND c.price <= $to";
            } else if ($from != '' && $to = '') {
                $sql .= " AND c.price >= $from";
            }

            $sql .= " ORDER BY c.id ASC";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();

        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
}