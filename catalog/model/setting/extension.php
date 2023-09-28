<?php
class ModelSettingExtension extends Model {
	public function getExtensions($type) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "extension WHERE `type` = '" . $this->db->escape($type) . "'");

		return $query->rows;
	}

    public function getHeaderText()
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "running_text");

        if ($query->num_rows) {
            return $query->row['text'];
        } else {
            return '';
        }
    }
}