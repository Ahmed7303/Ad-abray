<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NewsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class NewsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class NewsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\News::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/news');
        CRUD::setEntityNameStrings('news', 'news');
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

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */

        $this->crud->setColumns([
            [
                'name'  => 'title_tm',
                'label' => "Title",
                'type'  => 'text',
            ],
            [
                'name'  => 'description_tm',
                'label' => "Description",
                'type'  => 'text',
            ],
            [
                // 1-n relationship
                'label'     => 'Category', // Table column heading
                'type'      => 'select',
                'name'      => 'category_id', // the column that contains the ID of that connected entity;
                'entity'    => 'category', // the method that defines the relationship in your Model
                'attribute' => 'name_tm', // foreign key attribute that is shown to user
                'model'     => "App\Models\NewsCategory", // foreign key model
             ],
             [
                'name'      => 'image', // The db column name
                'label'     => 'Image', // Table column heading
                'type'      => 'image',
                // 'prefix' => 'folder/subfolder/',
                // image from a different disk (like s3 bucket)
                // 'disk'   => 'disk-name', 
                // optional width/height if 25px is not ok with you
                // 'height' => '30px',
                // 'width'  => '30px',
            ],
            [
                'name'  => 'image',
                'label' => "Image Location",
                'type'  => 'text',
            ],
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(NewsRequest::class);

        // CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */

        $this->crud->addFields([
            [
                'name'  => 'title_tm',
                'label' => "Title TM",
                'type'  => 'text',
            ],
            [
                'name'  => 'title_ru',
                'label' => "Title Ru",
                'type'  => 'text',
            ],
            [
                'name'  => 'title_en',
                'label' => "Title En",
                'type'  => 'text',
            ],
            [
                'name'  => 'description_tm',
                'label' => "Description Tm",
                'type'  => 'textarea',
            ],
            [
                'name'  => 'description_ru',
                'label' => "Description Ru",
                'type'  => 'textarea',
            ],
            [
                'name'  => 'description_en',
                'label' => "Description En",
                'type'  => 'textarea',
            ],

            [
                'label'     => "Category",
                'type'      => 'select',
                'name'      => 'category_id', // the db column for the foreign key

                // optional 
                // 'entity' should point to the method that defines the relationship in your Model
                // defining entity will make Backpack guess 'model' and 'attribute'
                'entity'    => 'category', 

                // optional - manually specify the related model and attribute
                'model'     => "App\Models\NewsCategory", // related model
                'attribute' => 'name_tm', // foreign key attribute that is shown to user

                // optional - force the related options to be a custom query, instead of all();
                // 'options'   => (function ($query) {
                //         return $query->orderBy('name', 'ASC')->where('depth', 1)->get();
                //     }), //  you can use this to filter the results show in the select
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
