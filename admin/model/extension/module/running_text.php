<?php

class ModelExtensionModuleRunningText extends Model
{
    public function getText()
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "running_text");

        if ($query->num_rows) {
            return $query->row['text'];
        } else {
            return '';
        }
    }

    public function editText($text)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "running_text");
        $this->db->query("INSERT INTO " . DB_PREFIX . "running_text SET text = '" . $this->db->escape($text) . "'");
    }
}
