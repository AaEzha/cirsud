<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		parent::auth('csunitit');
	}

	public function index()
	{
		$this->load->model('M_unit','mu');
		$data = [
			'title' => 'Dashboard CS Unit IT',
			'hal' => 'dashboard/index',
			'datas' => $this->mu->cari(),
			'permintaan' => $this->mu->jumlah_dashboard(1),
			'proses' => $this->mu->jumlah_dashboard(3),
			'selesai' => $this->mu->jumlah_dashboard(4),
			'pending' => $this->mu->jumlah_dashboard(5),
			'css' => 'download/css',
			'js' => 'download/js'
		];
		$this->load->view('layout', $data);
	}

	public function perbaikan()
	{
		$this->load->model('M_unit','mu');
		$data = [
			'title' => 'Dashboard CS Unit IT',
			'hal' => 'dashboard/index',
			'datas' => $this->mu->cari(1),
			'permintaan' => $this->mu->jumlah_dashboard(1),
			'proses' => $this->mu->jumlah_dashboard(3),
			'selesai' => $this->mu->jumlah_dashboard(4),
			'pending' => $this->mu->jumlah_dashboard(5),
			'css' => 'download/css',
			'js' => 'download/js'
		];
		$this->load->view('layout', $data);
	}

	public function maintenance()
	{
		$this->load->model('M_unit','mu');
		$data = [
			'title' => 'Dashboard CS Unit IT',
			'hal' => 'dashboard/index',
			'datas' => $this->mu->cari(2),
			'permintaan' => $this->mu->jumlah_dashboard(1),
			'proses' => $this->mu->jumlah_dashboard(3),
			'selesai' => $this->mu->jumlah_dashboard(4),
			'pending' => $this->mu->jumlah_dashboard(5),
			'css' => 'download/css',
			'js' => 'download/js'
		];
		$this->load->view('layout', $data);
	}

	public function board()
	{
		$this->load->view('dashboard/onboard');
	}

	public function tabel()
	{
		$this->load->model('csunitit/M_unit','munit');
		// die($this->munit->dashboard_info(2,1));
		$data = [
			'title' => 'Dashboard Admin Pusat',
			'hal' => 'dashboard/tabel',
			'a_it' => $this->munit->dashboard_info("2","1"),
			'a_ips' => $this->munit->dashboard_info("3","1"),
			'a_itp' => $this->munit->dashboard_info("4","1"),
			'b_it' => $this->munit->dashboard_info("2","2"),
			'b_ips' => $this->munit->dashboard_info("3","2"),
			'b_itp' => $this->munit->dashboard_info("4","2"),
			'js' => 'dashboard/grafik'
		];
		$this->load->view('layout', $data);
	}

	public function tes()
	{
		$query = "
                select t.id
                from troubleshooting_tickets t
                join troubleshooting_status s on s.id=t.troubleshootingstatus_id
                where t.ticket_date::varchar like '$tgl *'
        ";

        $d = $this->db->query($query);

        echo $e = $d->num_rows();
	}

}

/* End of file Dashboard.php */
/* Location: ./application/modules/csunitit/controllers/Dashboard.php */