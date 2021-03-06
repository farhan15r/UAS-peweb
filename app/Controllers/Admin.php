<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\SellRecordModel;
use CodeIgniter\View\ViewDecoratorInterface;

class Admin extends BaseController
{
    public function index()
    {
        $SellRecordModel = new SellRecordModel();
        $SellRecordModel->orderBy('id', 'desc');
        $SellRecordModel->limit(12);

        $records = $SellRecordModel->asArray()->find();
        $records = array_reverse($records);

        $data = [
            'records' => $records,
        ];

        return view('admin/index', $data);
    }
    
    public function customers()
    {
        $UserModel = new UserModel();
        $users = $UserModel->findAll();

        $data = [
            'users' => $users,
        ];

        return view('admin/customers', $data);
    }

    public function customer($id)
    {
        $UserModel = new UserModel();
        $user = $UserModel->where('id', $id)->first();

        $data = [
            'user' => $user,
        ];

        return view('/admin/customer', $data);
    }
    
    public function update($id)
    {
        $UserModel = new UserModel();
        $UserModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'username' => $this->request->getVar('username'),
            'phone' => $this->request->getVar('phone'),
            'job' => $this->request->getVar('job'),
            'isinfluencer' => $this->request->getVar('isinfluencer')
        ]);

        return redirect()->to('/admin/customers');
    }

    public function addCustomer()
    {
        return view('admin/addCustomer');
    }

    public function storeCustomer()
    {
        $UserModel = new UserModel();
        $UserModel->save([
            'name' => $this->request->getVar('name'),
            'username' => $this->request->getVar('username'),
            'phone' => $this->request->getVar('phone'),
            'job' => $this->request->getVar('job'),
            'isinfluencer' => $this->request->getVar('isinfluencer')
        ]);

        return redirect()->to('/admin/customers');
    }
    
    public function deleteCustomer($id)
    {
        $UserModel = new UserModel();
        $UserModel->delete($id);
        
        return redirect()->to('/admin/customers');
    }
}
