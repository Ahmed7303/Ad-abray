<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DiagramRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class DiagramCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DiagramCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Diagram::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/diagram');
        CRUD::setEntityNameStrings('diagram', 'diagrams');
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


        CRUD::column('title');
        CRUD::column('type')->type('select2_from_array')
            ->options([
                'Air freight' => 'Air freight',
                'Ocean freight' => 'Ocean freight',
                'Road freight' => 'Road freight',
                'Rail freight' => 'Rail freight',
                'Container Transport' => 'Container Transport',
                'Ship' => 'Ship',
                'Tender' => 'Tender',
            ])->allows_null(false);
        CRUD::column('image')->type('image');

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
        CRUD::setValidation(DiagramRequest::class);

        CRUD::field('title');
        CRUD::field('type')->type('select2_from_array')
            ->options([
                'Air freight' => 'Air freight',
                'Ocean freight' => 'Ocean freight',
                'Road freight' => 'Road freight',
                'Rail freight' => 'Rail freight',
                'Container Transport' => 'Container Transport',
                'Ship' => 'Ship',
                'Tender' => 'Tender',
            ])->allows_null(false);
        CRUD::field('image')->type("image");

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
