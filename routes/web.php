<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MatiereController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware('guest')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('index');
    Route::get('/register', [UserController::class, 'register'])->name('registration');
    Route::post('/register', [UserController::class, 'handleRegistration'])->name('registration');
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'handleLogin'])->name('login');
});

Route::middleware(['auth'])->group(function () {

    Route::prefix('rolesPermissions')->group(function () {
        Route::get('/newRole', [RoleController::class, 'newRole'])->name('role.new');
        Route::post('/createRole', [RoleController::class, 'create_role'])->name('role.create');
        Route::get('/listRoles', [RoleController::class, 'getUserRoles'])->name('role.list');
        
        Route::get('/attributPermissionToRole', [RoleController::class, 'attributPermissionToRole'])->name('role.attributPermissionToRole');
        Route::get('/attributRoleUser', [RoleController::class, 'attributRoleUser'])->name('role.attributRoleUser');
        
        
        Route::post('/createPermission', [RoleController::class, 'create_permission'])->name('permission.create');
        Route::post('/attachPermissionToRole', [RoleController::class, 'attach_permission_to_role'])->name('permission.givePermissionToRole');
        Route::post('/attributeRoleToUser', [RoleController::class, 'attribute_role_to_user'])->name('permission.attributeRoleToUser');
    });

    Route::prefix('matiere')->group(function () {
        Route::get('/newMatiere', [MatiereController::class, 'newMatiere'])->name('matiere.new');
        Route::post('/createMatiere', [MatiereController::class, 'createMatiere'])->name('matiere.create');
        Route::get('/listMatieres', [MatiereController::class, 'getMatieres'])->name('matiere.list');
    });

    
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/home', [UserController::class, 'dashboard'])->name('dashboard');
});
