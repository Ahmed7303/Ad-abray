<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\PermissionManager\app\Http\Requests\UserStoreCrudRequest as StoreRequest;
use Backpack\PermissionManager\app\Http\Requests\UserUpdateCrudRequest as UpdateRequest;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation { update as traitUpdate; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {

        $this->crud->setModel(\App\Models\User::class);
        $this->crud->setEntityNameStrings('user', 'users');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/user');

        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    // protected function setupListOperation()
    // {
    //     CRUD::setFromDb(); // columns

    //     /**
    //      * Columns can be defined using the fluent syntax or array syntax:
    //      * - CRUD::column('price')->type('number');
    //      * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
    //      */
    // }

    public function setupListOperation()
    {
        $this->crud->setColumns([
            [
                'name'  => 'name',
                'label' => trans('Name'),
                'type'  => 'text',
            ],
            [
                'name'  => 'email',
                'label' => trans('Email'),
                'type'  => 'email',
            ],
            // [
            //     'name'  => 'password',
            //     'label' => "Password",
            //     'type'  => 'text',
            // ],
            [
                'name'  => 'is_admin',
                'label' => "Admin",
                'type'  => 'boolean',
            ],
           
        ]);

        
    }

    // /**
    //  * Define what happens when the Create operation is loaded.
    //  * 
    //  * @see https://backpackforlaravel.com/docs/crud-operation-create
    //  * @return void
    //  */
    // protected function setupCreateOperation()
    // {
    //     CRUD::setValidation(UserRequest::class);
        
    //     $this->crud->setRequest($this->handlePasswordInput($this->crud->getRequest()));

    //     // CRUD::setFromDb(); // fields

    //     /**
    //      * Fields can be defined using the fluent syntax or array syntax:
    //      * - CRUD::field('price')->type('number');
    //      * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
    //      */
    // }

    // /**
    //  * Define what happens when the Update operation is loaded.
    //  * 
    //  * @see https://backpackforlaravel.com/docs/crud-operation-update
    //  * @return void
    //  */
    // protected function setupUpdateOperation()
    // {
    //     $this->setupCreateOperation();
    // }

    public function setupCreateOperation()
    {
        $this->addUserFields();
        CRUD::setValidation(UserRequest::class);
    }

    public function setupUpdateOperation()
    {
        $this->addUserFields();
        CRUD::setValidation(UserRequest::class);
    }

    /**
     * Store a newly created resource in the database.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        // $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->setRequest($this->handlePasswordInput($this->crud->getRequest()));
        $this->crud->unsetValidation(); // validation has already been run

        return $this->traitStore();
    }

    /**
     * Update the specified resource in the database.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update()
    {
        // $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->setRequest($this->handlePasswordInput($this->crud->getRequest()));
        $this->crud->unsetValidation(); // validation has already been run

        return $this->traitUpdate();
    }

    /**
     * Handle password input fields.
     */
   

    protected function handlePasswordInput($request)
    {
        // Remove fields not present on the user.
        $request->request->remove('password_confirmation');

        // Encrypt password if specified.
        if ($request->input('password')) {
            $request->request->set('password', Hash::make($request->input('password')));
        } else {
            $request->request->remove('password');
        }

        return $request;
    }

    protected function addUserFields()
    {
        $this->crud->addFields([
            [
                'name'  => 'name',
                'label' => "Name",
                'type'  => 'text',
            ],
            [
                'name'  => 'email',
                'label' => "Email",
                'type'  => 'email',
            ],
            [
                'name'  => 'password',
                'label' => "Password",
                'type'  => 'password',
            ],
            [
                'name'  => 'is_admin',
                'label' => "Admin",
                'type'  => 'boolean',
            ],
           
        ]);
    }
}
