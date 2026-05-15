<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessagesController;
use App\Http\Controllers\DisponibilityController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SkillsController;
use App\Models\About;
use App\Models\Contact;
use App\Models\Contactinfo;
use App\Models\Disponibility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// require __DIR__.'/settings.php';

// LandingController

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::prefix('/admin')->group(function () {
    // DashboardController
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    // AboutController
    Route::get('/about', [AboutController::class, 'index'])->name('admin.about.index');
    Route::post('/about', [AboutController::class, 'create'])->name('admin.about.create');
    // ContactController
    Route::get('/contact', [ContactController::class, 'index'])->name('admin.contact.info');
    Route::post('/contact',  [ContactController::class, 'create'])->name('admin.contact.create');
    // ContactMessages
    Route::get('/contacts', [ContactMessagesController::class, 'index'])->name('admin.contacts.list');
    Route::post('/contacts', [ContactMessagesController::class, 'create'])->name('admin.contacts.create');
    Route::get('/contacts/show/{id}', [ContactMessagesController::class, 'show'])->name('admin.contacts.show')->whereNumber('id');
    Route::delete('/contact/delete/{id}', [ContactMessagesController::class, 'delete'])->name('admin.contacts.delete')->whereNumber('id');

    // DisponibilityController
    Route::get('/disponibility', [DisponibilityController::class, 'index'])->name('admin.disponibility.index');
    Route::post('/disponibility', [DisponibilityController::class, 'create'])->name('admin.disponibility.create');

    // skills
    Route::get('/skills', [SkillsController::class, 'index'])->name('admin.skills.index');
    Route::get('/skills/create', [SkillsController::class, 'create'])->name('admin.skills.create');
    Route::post('/skills/store', [SkillsController::class, 'store'])->name('admin.skills.store');
    Route::get('/skills/{id}', [SkillsController::class, 'edit'])->name('admin.skills.edit');
    Route::put('/skills/{id}', [SkillsController::class, 'update'])->name('admin.skills.update');
    Route::get('/skills/show/{id}', [SkillsController::class, 'show'])->name('admin.skills.show');
    Route::delete('/skills/{id}', [SkillsController::class, 'destroy'])->name('admin.skills.destroy');

    // projects
    Route::get('/projects', [ProjectsController::class, 'index'])->name('admin.projects.index');
    Route::get('/projects/create', [ProjectsController::class, 'create'])->name('admin.projects.create');
    Route::post('/projects/store', [ProjectsController::class, 'store'])->name('admin.projects.store');
    Route::get('/projects/{id}', [ProjectsController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/projects/{id}', [ProjectsController::class, 'update'])->name('admin.projects.update');
    Route::get('/projects/show/{id}', [ProjectsController::class, 'show'])->name('admin.projects.show');
    Route::delete('/projects/{id}', [ProjectsController::class, 'destroy'])->name('admin.projects.destroy');
});