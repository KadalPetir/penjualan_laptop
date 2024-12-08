<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomersModel;
use CodeIgniter\HTTP\ResponseInterface;

class Customers extends BaseController
{
    protected $cus;

    public function __construct()
    {
        $this->cus = new CustomersModel();
    }

    public function index()
    {
        $data['customers'] = $this->cus->findAll();
        return view('customers/index', $data);
    }

    public function create()
    {
        $item = $this->request->getPost();
        if (count($item) > 0) {
            try {
                $this->cus->insert($item);
                return redirect()->to(base_url('customers'));
            } catch (\Throwable $th) {
                //throw $th;
            }
        } else return view('customers/create');
    }

    public function edit($id = null)
    {
        

        $item = $this->request->getPost();
        if (isset($item['name'])) {
            $item = $this->request->getPost();
            if (count($item) > 0) {
                try {
                    $value = [
                        "name" => $item['name'], 
                        "email" => $item['email'],
                        "phone" => $item['phone'],
                        "address" => $item['address'],
                    ];
                    $this->cus->update($id, $value);
                    return redirect()->to(base_url('customers'));
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        } else {
            $item['item'] = $this->cus->where('id', $id)->first();
            return view('customers/edit', $item);
        }

        
    }

    public function delete($id = null)
    {
        $this->cus->delete($id);
        return redirect()->to('customers');
    }
}
