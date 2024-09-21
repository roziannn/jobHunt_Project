<?php

namespace App\Http\Controllers\Admin;

use App\Services\Notify;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $roles = Role::all();

        return view('admin.access-management.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $permissions = Permission::all()->groupBy('group');
        // dd($permissions);

        return view('admin.access-management.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:50', 'unique:roles,name']
        ]);

        /**create role */
        $role = Role::create(['guard_name' => 'admin', 'name' => $request->name]);

        /**assign permissions to the role */
        $role->syncPermissions($request->permission);

        // dd($role);

        Notify::createdNotification();

        return to_route('admin.role.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all()->groupBy('group'); // all to show toggle

        $rolePermissions = $role->permissions;  //all on that spesific role
        $rolePermissions = $rolePermissions->pluck('name')->toArray();

        return view('admin.access-management.role.edit', compact('permissions', 'role', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:50', 'unique:roles,name,' . $id]
        ]);

        /**create role */
        $role = Role::findOrFail($id);
        $role->update(['guard_name' => 'admin', 'name' => $request->name]);

        /**assign permissions to the role */
        $role->syncPermissions($request->permission);

        // dd($role);

        Notify::createdNotification();

        return to_route('admin.role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Role::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
