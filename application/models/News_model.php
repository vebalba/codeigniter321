<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		public function get_news($slug = FALSE)
        {
        if ($slug === FALSE)
        {
                $query = $this->db->get('balba_news');
                return $query->result_array();
        }

        $query = $this->db->get_where('balba_news', array('slug' => $slug));
        return $query->row_array();
        }
}
