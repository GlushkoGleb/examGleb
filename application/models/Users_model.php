<?php
class Users_model extends CI_Model
{
    public function reg_insert($fio, $email, $login, $password)
    {
        $sql = "INSERT INTO users (fio, email, login, password) VALUES (?, ?, ?, ?)";
        $result = $this->db->query($sql, array($fio, $email, $login, $password));
        return $this->db->insert_id();
    }
    public function autch_select($login, $password)
    {
        $sql = "SELECT * FROM users WHERE login = ? AND password = ?";
        $result = $this->db->query($sql, array($login, $password));
        return $result->row_array();
    }
}
?>