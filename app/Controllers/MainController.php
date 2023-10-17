<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PetModel;

class MainController extends BaseController
{
    private $pet;

    public function __construct()
    {
        $this->pet = new PetModel();
    }

    public function edit($id)
    {
        $data = [
            'tablepet' => $this->pet->findAll(),
            'pro' => $this->pet->where('id', $id)->first(),
        ];


        if (!$data['pro']) {
            echo 'ERROR';
        }

        return view('admin', $data);
    }
    
    public function admin()
    {
        $data = [
            'tablepet' => $this->pet->findAll()
        ];
        return view('admin', $data);
    }


    public function delete($id)
    {
        $this->pet->delete($id);
        return redirect()->to('/admin');
    }

    public function save()
  {
      $id = $this->request->getPost('id');
      $data = [
          'name' => $this->request->getPost('name'),
          'description' => $this->request->getPost('description'),
          'price' => $this->request->getPost('price'),
      ];
  
      // Check kung ang image file was uploaded
      if ($imageFile = $this->request->getFile('image')) {
          // Generate a unique name for the uploaded image
          $imageName = $imageFile->getRandomName();
  
          // Set the path to the upload directory
          $uploadPath = FCPATH . 'uploads/';

          // Move the uploaded image to the upload directory
          if ($imageFile->move($uploadPath, $imageName)) {
              // Image upload successful, store the image filename in the database
              $data['image'] = $imageName;
          } else {
              $error = $imageFile->getError();
          }
      }
  
      if (!empty($id)) {
          // Update the existing record
          $this->pet->set($data)->where('id', $id)->update();
      } else {
          // Insert a new record
          $this->pet->insert($data);
      }
  
      return redirect()->to('/admin');
  }


   
}