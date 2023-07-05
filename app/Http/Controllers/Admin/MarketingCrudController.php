<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MarketingRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MarketingCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MarketingCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Marketing::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/marketing');
        CRUD::setEntityNameStrings('marketing', 'marketings');
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
                'name'  => 'type',
                'label' => "Type",
                'type'  => 'text',
            ],
            [
                'name'  => 'title',
                'label' => "Title",
                'type'  => 'text',
            ],
            [
                'name'  => 'description',
                'label' => "Description",
                'type'  => 'text',
            ],
            [
                'name'  => 'location_from',
                'label' => "From",
                'type'  => 'text',
            ],
            [
                'name'  => 'location_to',
                'label' => "To",
                'type'  => 'text',
            ],
            [
                'name'      => 'year', // The db column name
                'label'     => 'Year', // Table column heading
                'type'      => 'date',
            ],
            [
                'name'  => 'amount',
                'label' => "Amount",
                'type'  => 'text',
            ],
            [
                'name'      => 'image', // The db column name
                'label'     => 'Image', // Table column heading
                'type'      => 'image',
            ]
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
        CRUD::setValidation(MarketingRequest::class);

        // CRUD::setFromDb(); // fields

        $this->crud->addFields([
            [   // select_from_array
                'name'        => 'type',
                'label'       => "Type",
                'type'        => 'select2_from_array',
                'options'     => ['import' => 'Import', 'export' => 'Export'],
                'allows_null' => false,
                'default'     => 'one',
            ],
            [
                'name'  => 'title',
                'label' => "Title",
                'type'  => 'text',
            ],
            [
                'name'  => 'description',
                'label' => "Description",
                'type'  => 'textarea',
            ],
            [
                'name'  => 'location_from',
                'label' => "From",
                'type'  => 'text',
            ],
            [
                'name'  => 'location_to',
                'label' => "To",
                'type'  => 'text',
            ],
            [
                'name'      => 'year', // The db column name
                'label'     => 'Year', // Table column heading
                'type'      => 'date',
            ],
            [
                'name'  => 'amount',
                'label' => "Amount",
                'type'  => 'text',
            ],
            [
                'label' => "Image",
                'name' => "image",
                'type' => 'image',
                'crop' => false, // set to true to allow cropping, false to disable
                'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
                // 'disk'      => 's3_bucket', // in case you need to show images from a different disk
                // 'prefix'    => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
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
