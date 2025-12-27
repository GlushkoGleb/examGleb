<?php
class Tovar_model extends CI_Model
{
    public function tovar_select()
    {
        $sql = "SELECT * FROM tovar";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    public function tovar_delete($id_tovar)
    {
        $sql = "DELETE FROM tovar WHERE id_tovar = $id_tovar";
        $result = $this->db->query($sql);
    }
    public function tovar_insert($photo, $name_tovar, $ves, $price)
    {
        $sql = "INSERT INTO tovar(photo, name_tovar, ves, price) VALUES (?, ?, ?, ?)";
        $result = $this->db->query($sql, array($photo, $name_tovar, $ves, $price));
        return $this->db->insert_id();
    }
}
?>