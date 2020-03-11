<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_unit extends CI_Model {

	public function data()
	{
		return $this->db->get('units')->result();
	}

	public function jumlah() // jumlah seluruh unit
	{
		return $this->db->get('units')->num_rows();
	}

	public function detail($id)
	{
		return $this->db->where('id', $id)->get('units')->row();
	}

	public function dashboard_info($unit, $status)
	{
		/**

		$unit 
			1 => Pusat
			2 => Unit IT
			3 => Unit IPS
			4 => Unit ITP
			5 => Unit Ruangan
			Yang dipakai hanya 2, 3 dan 4

		$status
			1 => Open
			2 => Close
			3 => Pending
			Yang dipakai hanya 1 dan 2

		*/
		$query = "
				select t.id
				from troubleshooting_tickets t
				join troubleshooting_status s on s.id=t.troubleshootingstatus_id
				where t.unit_id='$unit' and s.id='$status'
		";
		return $this->db->query($query)->num_rows();
	}

	public function cari($unit='2', $aktifitas='1')
	{
		$query ="
		SELECT  troubleshooting_tickets.ticket_date AS Tanggal,
        troubleshooting_tickets.id_ticket_register AS Tiket,
        troubleshooting_tickets.unit_id AS Unit,
        troubleshooting_tickets.ticket_date AS Waktu,
        room_categories.name AS Ruangan,
        asset_products.id_asset_register AS ID_Aset,
        asset_products.name AS Nama_Aset,
        room_areas.name AS Area_Ruangan,
        room_details.name AS Detail_Ruangan,
        troubleshooting_status.name AS Status
FROM    troubleshooting_tickets,
	    troubleshooting_status,
        troubleshootings,
        room_details,
        room_categories,
        room_areas,
        asset_products
WHERE   troubleshooting_tickets.roomcategory_id = room_categories.id AND
        troubleshooting_tickets.roomdetail_id = room_details.id AND
        troubleshooting_tickets.troubleshootingstatus_id = troubleshooting_status.id AND
        troubleshooting_tickets.troubleshootingtype_id = '$aktifitas' AND
        troubleshooting_tickets.unit_id = '$unit' AND
        troubleshootings.troubleshootingticket_id = troubleshooting_tickets.id AND
        troubleshootings.assetproduct_id = asset_products.id AND
        room_details.roomarea_id = room_areas.id
		";

		return $this->db->query($query)->result();
	}

	public function petugas()
	{
		# code...
	}

	public function perbaikan()
	{
		# code...
	}

	public function pending()
	{
		# code...
	}

}

/* End of file M_unit.php */
/* Location: ./application/modules/adminpusat/models/M_unit.php */