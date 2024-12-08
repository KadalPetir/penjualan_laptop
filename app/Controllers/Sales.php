<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomersModel;
use App\Models\LaptopModel;
use App\Models\SalesModel;
use CodeIgniter\HTTP\ResponseInterface;

class Sales extends BaseController
{
    protected $sls;
    protected $cus; // Jika ada relasi dengan pemesanan
    protected $ltp;
    public function __construct()
    {
        $this->sls = new SalesModel();
        $this->cus = new CustomersModel(); 
        $this->ltp = new LaptopModel();// Jika ada relasi dengan pemesanan
    }

    public function index()
    {
        $data['sales'] = $this->sls->findAll();
        return view('sales/index', $data);
    }

    public function create()
    {
        $data['customers'] = $this->cus->findAll();
        $data['laptop'] = $this->ltp->findAll(); // Ambil data pemesanan dari model
        // Jika ada relasi dengan pemesanan, ambil data pemesanan

        $item = $this->request->getPost();
        if (count($item) > 0) {
            try {
                $this->sls->insert($item);
                return redirect()->to(base_url('sales'));
            } catch (\Throwable $th) {
                //throw $th;
            }
        } else return view('sales/create', $data);
        
    }

    public function edit($id = null)
{
    $data['sales'] = $this->sls->find($id); // Ambil data pesanan berdasarkan ID

    // Fetch details related to the pesanan using the correct foreign key
    $data['customers'] = $this->cus->where('id', $id)->findAll(); // Make sure 'pesanan_id' is the correct column name

    $data['laptop'] = $this->ltp->findAll();  

    $item = $this->request->getPost();

    if (isset($item['customer_name'])) {
        try {
            $this->sls->update($id, $item);
            return redirect()->to(base_url('sales'));
        } catch (\Throwable $th) {
            session()->setFlashdata('error', 'Gagal mengupdate pesanan.');
        }
    }

    return view('sales/edit', $data);
}
    public function delete($id = null)
    {
        try {
            $this->sls->delete($id);
            return redirect()->to(base_url('sales'));
        } catch (\Throwable $th) {
            // Handle error, misalnya jika data terkait dengan data lain
            session()->setFlashdata('error', 'Gagal menghapus pelanggan.');
        }
    }
}
