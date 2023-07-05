<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ShipVideoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ShipVideoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ShipVideoCrudController extends CrudController
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
        CRUD::setModel(\App\Models\ShipVideo::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/ship-video');
        CRUD::setEntityNameStrings('ship video', 'ship videos');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::column('title');
        // CRUD::column('video')->type("json");

        $this->crud->setColumns([
            
            [
                'name'  => 'title',
                'label' => "Title",
                'type'  => 'text',
            ],
            // [
            //     'name'      => 'image', // The db column name
            //     'label'     => 'Image', // Table column heading
            //     'type'      => 'json',
            // ],
            [
                'name'  => 'video',
                'label' => "Video",
                'type'  => 'text',
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
        CRUD::setValidation(ShipVideoRequest::class);

        // CRUD::field('title');
        // CRUD::field('video')->type("image");

        $this->crud->addFields([
            [
                'name'  => 'title',
                'label' => "Title",
                'type'  => 'text',
            ],
            // [   // Upload
            //     'name'      => 'image',
            //     'label'     => 'Image',
            //     'type'      => 'upload_multiple',
            //     'upload'    => true,
            //     'disk'      => 'uploads', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
            //     // optional:
            //     'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
            // ],
            [   // Upload
                'name'      => 'video',
                'label'     => 'Video',
                'type'      => 'upload',
                'upload'    => true,
                // 'disk'      => 'uploads', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // optional:
                'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
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
