<?php

namespace Pv\BanKhoaHoc\Models;

use Pv\BanKhoaHoc\Commons\Model;

class Dashboard extends Model
{
    public function countAcc()
    {
        try {
            $sql = "SELECT COUNT(*) FROM users";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function countCategory()
    {
        try {
            $sql = "SELECT COUNT(*) FROM categories";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function countCourse()
    {
        try {
            $sql = "SELECT COUNT(*) FROM courses";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function countStatus()
    {
        try {
            $sql = "SELECT COUNT(*) FROM statuses";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
}