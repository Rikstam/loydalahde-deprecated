<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\SpringRequest as StoreRequest;
use App\Http\Requests\SpringRequest as UpdateRequest;


class SpringCrudController extends CrudController
{
    public function setup()
    {
        $this->crud->setModel("App\Spring");
        $this->crud->setRoute("admin/spring");
        $this->crud->setEntityNameStrings('spring', 'springs');

        $this->crud->setColumns(['title', 'alias', 'status', 'tested_at', 'latitude', 'longitude', 'visibility']);
        $this->crud->addField([
            'name' => 'title',
            'label' => "Spring name",
            'type' => 'text',
            'wrapperAttributes' => [
                'class' => 'form-group col-lg-6'
            ]
        ]);

        $this->crud->addField([
            'name' => 'alias',
            'label' => "Alternative names for the spring",
            'type' => 'text',
            'wrapperAttributes' => [
                'class' => 'form-group col-lg-6'
            ]
        ]);

        $this->crud->addField([
            'name' => 'slug',
            'label' => "Slug (URL)",
            'type' => 'text',
            'hint' => 'Will be automatically generated from your title, if left empty.',
            // 'disabled' => 'disabled'
        ]);

        $this->crud->addField([    // CHECKBOX
            'name' => 'visibility',
            'label' => "Public ?",
            'type' => 'checkbox'
        ]);

        $this->crud->addField([
             // select_from_array
                'name' => 'status',
                'label' => "Status",
                'type' => 'select_from_array',
                'options' => ['juomakelpoista' => 'Juomakelpoista', 'ei tietoa' => 'Ei tietoa', 'ei juomakelpoista' => 'Ei juomakelpoista'],
                'allows_null' => false,
        ]);

        $this->crud->addField([   // Number
                'name' => 'latitude',
                'label' => 'Latitude',
                'type' => 'number',
                // optionals
                'prefix' => "ltd",
                // 'suffix' => ".00",

        ]);

        $this->crud->addField([   // Number
            'name' => 'longitude',
            'label' => 'Longitude',
            'type' => 'number',
            // optionals
            'prefix' => "lng",
            // 'suffix' => ".00",
        ]);

        $this->crud->addField([
            'name' => 'tested_at',
            'label' => "Tested at",
            'type' => 'date',
            'wrapperAttributes' => [
                'class' => 'form-group col-lg-6'
            ]
        ]);

        $this->crud->addField([    // Image
            'name' => 'image',
            'label' => 'Image',
            'type' => 'browse',
            'wrapperAttributes' => [
                'class' => 'form-group col-lg-6'
            ]
        ]);

        $this->crud->addField([
            'name' => 'short_description',
            'label' => 'Short Description',
            'type' => 'textarea'
        ]);

        $this->crud->addField([    // WYSIWYG
            'name' => 'description',
            'label' => 'Description',
            'type' => 'summernote',
            'placeholder' => 'Your textarea text here'
        ]);


    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}