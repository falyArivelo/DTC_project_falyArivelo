<?php

use App\Http\Controllers\ClasseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\ProfesseurController;

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
        Route::get('/listMatieres', [MatiereController::class, 'listMatieres'])->name('matiere.list');
        Route::get('/atributeToProf', [MatiereController::class, 'form_atributeToProf'])->name('matiere.atributeToProf');
        Route::post('/atributeToProf', [MatiereController::class, 'atributeToProf'])->name('matiere.atributeToProf');
        Route::get('/list_atributeToProf', [MatiereController::class, 'list_atributeToProf'])->name('matiere.list_atributeToProf');


    });


    Route::prefix('classe')->group(function () {
        Route::get('/newClasse', [ClasseController::class, 'newClasse'])->name('classe.new');
        Route::post('/createClasse', [ClasseController::class, 'createClasse'])->name('classe.create');
        Route::get('/listClasses', [ClasseController::class, 'getClasses'])->name('classe.list');
    });

    Route::prefix('professeur')->group(function () {
        Route::get('/newProfesseur', [ProfesseurController::class, 'newProfesseur'])->name('professeur.new');
        Route::post('/createProfesseur', [ProfesseurController::class, 'createProfesseur'])->name('professeur.create');
        Route::get('/listProfesseurs', [ProfesseurController::class, 'listProfesseurs'])->name('professeur.list');
    });
    

    Route::prefix('eleve')->group(function () {
        Route::get('/newEleve', [EleveController::class, 'newEleve'])->name('eleve.new');
        Route::post('/createEleve', [EleveController::class, 'createEleve'])->name('eleve.create');
        Route::get('/listEleves', [EleveController::class, 'listEleves'])->name('eleve.list');
    });
    
    
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/home', [UserController::class, 'dashboard'])->name('dashboard');
});
