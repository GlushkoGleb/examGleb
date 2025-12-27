<?php
class Zakaz_model extends CI_Model
{
    public function zakaz_select($id_users)
    {
        $sql = "SELECT * FROM zakaz, tovar WHERE id_users = ? AND zakaz.id_tovar=tovar.id_tovar";
        $result = $this->db->query($sql, $id_users);
        return $result->result_array();
    }
    public function zakaz_insert($id_users, $id_tovar, $data_zakaz, $address, $sposob_oplaty)
    {
        $sql = "INSERT INTO zakaz (id_users, id_tovar, data_zakaz, address, sposob_oplaty) VALUES (?, ?, ?, ?, ?)";
        $result = $this->db->query($sql, array($id_users, $id_tovar, $data_zakaz, $address, $sposob_oplaty));
        return $this->db->insert_id();
    }
    public function zakaz_delete($id_zakaz)
    {
        $sql = "DELETE FROM zakaz WHERE id_zakaz = $id_zakaz";
        $result = $this->db->query($sql);
    }
}
?>