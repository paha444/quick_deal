<?php

namespace App\Http\Controllers\Admin;

//use App\Http\Controllers\Controller;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\TasksCrudRequest;



use Illuminate\Http\Request;

class TasksController extends CrudController
{
    //

  use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    
    //public $crud;
    
    public function setup()
    {
      $this->crud->setModel('App\Models\Tasks');
      $this->crud->setRoute('admin/tasks');
      $this->crud->setEntityNameStrings('task', 'tasks');
    }
    
    public function setupListOperation()
    {
      $this->crud->setColumns(['date','name', 'status']);
    }
    
    public function setupCreateOperation()
    {
        
        $this->crud->setValidation(TasksCrudRequest::class);
        
        $this->crud->addField([  
            'name'        => 'status',
            'label'       => "Статус",
            'type'        => 'select_from_array',
            'options'     => ['0' => 'Отключен', '1' => 'Включен'],
            'allows_null' => false,
            'default'     => '0',
        ]);
    
        $this->crud->addField([   // Textarea
            'name'  => 'name',
            'label' => 'Название',
            'type'  => 'text'
        ]);     
          
        $this->crud->addField([   // Textarea
            'name'  => 'description',
            'label' => 'Описание',
            'type'  => 'textarea'
        ]);      
          
        $this->crud->addField([   // Date
            'name'  => 'date',
            'label' => 'Дата',
            'type'  => 'date'
        ]);
      
    }
    
    public function setupUpdateOperation()
    {
      $this->setupCreateOperation();
    }
    
}
