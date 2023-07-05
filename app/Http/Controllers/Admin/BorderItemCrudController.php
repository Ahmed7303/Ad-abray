<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BorderItemRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BorderItemCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BorderItemCrudController extends CrudController
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
        CRUD::setModel(\App\Models\BorderItem::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/border-item');
        CRUD::setEntityNameStrings('border item', 'border items');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // columns

        $this->crud->setColumns([
            [
                'name'  => 'title',
                'label' => "Title",
                'type'  => 'text',
            ],
            [
                'name'    => 'type',
                'label'   => 'Type',
                'type'    => 'select_from_array',
                'options' => ['in' => 'Traffic IN', 'out' => 'Traffic OUT'],
            ],
            [
                // 1-n relationship
                'label'     => 'Border', // Table column heading
                'type'      => 'select',
                'name'      => 'border_id', // the column that contains the ID of that connected entity;
                'entity'    => 'border', // the method that defines the relationship in your Model
                'attribute' => 'border', // foreign key attribute that is shown to user
                'model'     => "App\Models\Border", // foreign key model
            ],
            [
                'name'      => 'image', // The db column name
                'label'     => 'Image', // Table column heading
                'type'      => 'upload',

            ],
        ]);

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
        CRUD::setValidation(BorderItemRequest::class);

        // CRUD::setFromDb(); // fields

        $this->crud->addFields([
            [
                'label'     => "Border",
                'type'      => 'select2',
                'name'      => 'border_id', // the db column for the foreign key

                // optional 
                // 'entity' should point to the method that defines the relationship in your Model
                // defining entity will make Backpack guess 'model' and 'attribute'
                'entity'    => 'border',

                // optional - manually specify the related model and attribute
                'model'     => "App\Models\Border", // related model
                'attribute' => 'border', // foreign key attribute that is shown to user

                // optional - force the related options to be a custom query, instead of all();
                // 'options'   => (function ($query) {
                //         return $query->orderBy('name', 'ASC')->where('depth', 1)->get();
                //     }), //  you can use this to filter the results show in the select
            ],
            [   // select_from_array
                'name'        => 'type',
                'label'       => "Type",
                'type'        => 'select2_from_array',
                'options'     => [
                    'in' => 'IN',
                    'out' => 'OUT'
                ],
                'allows_null' => false,
                'default'     => 'one',
            ],
            [
                'name'  => 'title',
                'label' => "Title",
                'type'  => 'text',
            ],
            [
                'name'    => 'image',
                'type'    => 'upload',
                'label'   => 'Image',
                'upload'    => true,
            ]

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
