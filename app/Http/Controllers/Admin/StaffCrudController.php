<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StaffRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class StaffCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class StaffCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Staff::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/staff');
        CRUD::setEntityNameStrings('staff', 'staffs');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // columns


        // $this->crud->setColumns(
        //     [
        //         'name'  => 'name_tm',
        //         'label' => "Name",
        //         'type'  => 'text',
        //     ],
           
        //     [
        //         'name'  => 'type',
        //         'label' => "Type",
        //         'type'  => 'text',
        //     ],
           
           
        //     [
        //         'name'  => 'email',
        //         'label' => "Email",
        //         'type'  => 'text',
        //     ],
        //     [
        //         'name'  => 'phone',
        //         'label' => "Phone",
        //         'type'  => 'text',
        //     ],
        //     [
        //         'name'  => 'address_tm',
        //         'label' => "Address",
        //         'type'  => 'text',
        //     ],
        //     [
        //         'name'  => 'hours_tm',
        //         'label' => "Work Hours",
        //         'type'  => 'text',
        //     ],
        // );

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(StaffRequest::class);

        // CRUD::setFromDb(); // fields

        $this->crud->addFields([
            [
                'name'  => 'name_tm',
                'label' => "Name Tm",
                'type'  => 'text',
            ],
            [
                'name'  => 'name_ru',
                'label' => "Name Ru",
                'type'  => 'text',
            ],
            [
                'name'  => 'name_en',
                'label' => "Name En",
                'type'  => 'text',
            ],
            
            // [
            //     'name'  => 'type',
            //     'label' => "Type",
            //     'type'  => 'enum',
            // ],
            [   // select_from_array
                'name'        => 'type',
                'label'       => "Type",
                'type'        => 'select2_from_array',
                'options'     => [
                    'Air freight' => 'Air freight',
                    'Ocean freight' => 'Ocean freight',
                    'Road freight' => 'Road freight',
                    'Rail freight' => 'Rail freight',
                    'Container Transport' => 'Container Transport',
                    'Ship' => 'Ship',
                    'Tender' => 'Tender',
                ],
                'allows_null' => false,
                'default'     => 'one',
            ],
           
            [
                'name'  => 'email',
                'label' => "Email",
                'type'  => 'text',
            ],
            [
                'name'  => 'phone',
                'label' => "Phone",
                'type'  => 'text',
            ],
            [
                'name'  => 'address_tm',
                'label' => "Address Tm",
                'type'  => 'text',
            ],
            [
                'name'  => 'address_ru',
                'label' => "Address Ru",
                'type'  => 'text',
            ],
            [
                'name'  => 'address_en',
                'label' => "Address En",
                'type'  => 'text',
            ],

            [
                'name'  => 'hours_tm',
                'label' => "Work hours Tm",
                'type'  => 'text',
            ],
            
            [
                'name'  => 'hours_ru',
                'label' => "Work hours Ru",
                'type'  => 'text',
            ],
            
            [
                'name'  => 'hours_en',
                'label' => "Work hours En",
                'type'  => 'text',
            ],
            
           
           
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
