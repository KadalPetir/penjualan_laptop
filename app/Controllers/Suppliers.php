<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuppliersModel;
use CodeIgniter\HTTP\ResponseInterface;

class Suppliers extends BaseController
{
    protected $sup;

    public function __construct()
    {
        $this->sup = new SuppliersModel();
    }

    public function index()
    {
        $data['suppliers'] = $this->sup->findAll();
        return view('suppliers/index', $data);
    }

    public function create()
    {
        $item = $this->request->getPost();
        if (count($item) > 0) {
            try {
                $this->sup->insert($item);
                return redirect()->to(base_url('suppliers'));
            } catch (\Throwable $th) {
                //throw $th;
            }
        } else return view('suppliers/create');
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
                        "phone" => $item['phone'],
                        "email" => $item['email'],
                        "address" => $item['address'],
                    ];
                    $this->sup->update($id, $value);
                    return redirect()->to(base_url('suppliers'));
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        } else {
            $item['item'] = $this->sup->where('id', $id)->first();
            return view('suppliers/edit', $item);
        }

        
    }

    public function delete($id = null)
    {
        $this->sup->delete($id);
        return redirect()->to('suppliers');
    }
}
