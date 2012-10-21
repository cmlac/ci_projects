<?php
	class Admin_model extends CI_Model
	{
		function verifyMember ($u,$pw)
		{
			$this->db->select('member_id, username');
			$this->db->where('username', $u);
			$this->db->where('password', $pw);
			$this->db->where('status', 1);
			$this->db->limit(1);
			$Q = $this->db->get('members');
			if($Q->num_rows()>0)
			{
				$row = $Q->row_array();
				$_SESSION['userid']= $row['member_id'];
				$_SESSION['username']= $row['username'];
			}
			else
			{
				$this->session->set_flashdata('error', 'Sorry, your username or password is incorrect');
			}
		}
	}
?>