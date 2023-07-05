<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BorderRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BorderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BorderCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Border::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/border');
        CRUD::setEntityNameStrings('border', 'borders');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('district')->label("Province");

        CRUD::column('border');

        // CRUD::setFromDb();
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
        CRUD::setValidation(BorderRequest::class);

        CRUD::field('district')->label("Province")->type('select2_from_array')
            ->options([
                'ah' => 'Ahal',
                'bn' => 'Balkan',
                'dz' => 'Dashoguz',
                'lb' => 'Lebap',
                'mr' => 'Mary',
            ])->allows_null(false);

        CRUD::field('border');
        // ->type("repeatable")->fields([
        //     [
        //         'name'    => 'border_name',
        //         'type'    => 'text',
        //         'label'   => 'Border Name',
        //         'wrapper' => ['class' => 'form-group col-md-4'],
        //     ],
        //     [   // select_from_array
        //         'name'        => 'type',
        //         'label'       => "Type",
        //         'type'        => 'select2_from_array',
        //         'options'     => [
        //             'in' => 'IN',
        //             'ouy' => 'OUT'
        //         ],
        //         'allows_null' => false,
        //         'default'     => 'one',
        //     ],
        //     [
        //         'name'  => 'items',
        //         'label' => 'Items',
        //         'type'  => 'repeatable',
        //         'subfields' => [ // also works as: "fields"
        //             [
        //                 'name'    => 'image',
        //                 'type'    => 'upload',
        //                 'label'   => 'Image',
        //                 'upload'    => true,
        //                 'wrapper' => ['class' => 'form-group col-md-4'],
        //             ],
        //             [
        //                 'name'    => 'name_tm',
        //                 'type'    => 'text',
        //                 'label'   => 'Name Tm',
        //                 'wrapper' => ['class' => 'form-group col-md-4'],
        //             ],
        //             [
        //                 'name'    => 'name_ru',
        //                 'type'    => 'text',
        //                 'label'   => 'Name Ru',
        //                 'wrapper' => ['class' => 'form-group col-md-4'],
        //             ],
        //             [
        //                 'name'    => 'name_en',
        //                 'type'    => 'text',
        //                 'label'   => 'Name En',
        //                 'wrapper' => ['class' => 'form-group col-md-4'],
        //             ],

        //         ],
        //     ],

        // ]);

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
