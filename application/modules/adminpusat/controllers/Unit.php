<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		parent::auth('adminpusat');
	}

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('unit', 'Unit', 'trim|required|numeric');
		$this->form_validation->set_rules('aktifitas', 'aktifitas', 'trim|required|numeric');
		$this->load->model('adminpusat/M_unit','munit');

		if ($this->form_validation->run() == FALSE) {
			$data = $this->munit->cari();
			$hal = 'unit/index';
			$teks = 'Perbaikan';
			$unit = 'IT';
		} else {
			$post = $this->input->post();
			$unit = htmlspecialchars(trim($post['unit']));
			$aktifitas = htmlspecialchars(trim($post['aktifitas']));

			if( $unit=='2' and $aktifitas=='1' ){				// IT & Perbaikan
				$data = $this->munit->cari($unit, $aktifitas);
				$hal = 'unit/index';
				$teks = 'Perbaikan';
				$unit = 'IT';
			}elseif( $unit=='2' and $aktifitas=='2' ){			// IT & Maintenance
				$data = $this->munit->cari($unit, $aktifitas);
				$hal = 'unit/it_maintenance';
				$teks = 'Maintenance';
				$unit = 'IT';
			}elseif( $unit=='3' and $aktifitas=='1' ){			// IPS & Perbaikan
				$data = $this->munit->cari($unit, $aktifitas);
				$hal = 'unit/index';
				$teks = 'Perbaikan';
				$unit = 'IPS';
			}elseif( $unit=='3' and $aktifitas=='2' ){			// IPS & Maintenance
				$data = $this->munit->cari($unit, $aktifitas);
				$hal = 'unit/it_maintenance';
				$teks = 'Maintenance';
				$unit = 'IPS';
			}elseif( $unit=='2' and $aktifitas=='3' ){			// IT & Petugas
				$data = $this->munit->cari($unit, $aktifitas);
				$hal = 'unit/it_petugas';
				$teks = 'Petugas';
				$unit = 'IT';
			}elseif( $unit=='3' and $aktifitas=='3' ){			// IPS & Petugas
				$data = $this->munit->cari($unit, $aktifitas);
				$hal = 'unit/it_petugas';
				$teks = 'Petugas';
				$unit = 'IPS';
			}else{
				$data = $this->munit->cari($unit, $aktifitas);
				$hal = 'unit/index';
				$teks = 'Perbaikan';
				$unit = 'IT';
			}
		}

		$data = [
			'title' => 'Aktifitas Unit',
			'hal' => $hal,
			'units' => $this->munit->data(),
			'datas' => $data,
			'teks' => $teks,
			'unit' => $unit
		];
		
		$this->load->view('layout', $data);
	}

	public function laporan()
	{
		$data = [
			'title' => 'Laporan Aktifitas',
			'hal' => 'unit/index'
		];
		$this->load->view('layout', $data);
	}

	public function tes()
	{
		$this->load->model('adminunit/M_unit','munit');
		echo $this->munit->tes();
	}
}

/* End of file Unit.php */
/* Location: ./application/modules/adminpusat/controllers/Unit.php */