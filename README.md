# 📝 2nd Laboratory Exam - Full CRUD Simple Notepad System

## 🎯 Project Objectives
* Implement a complete **CRUD** system (Create, Read, Update, Delete).
* Use **Laravel Resource Controllers** to handle data logic.
* Work with **Eloquent Models** and Database Migrations.
* Store **Notepads** in the database and utilize **CRUD** system
---

## 🗺️ Notepad File Location Map
This map shows the specific files created for the Notepad functionality:

```text
notepad/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── NotepadController.php    <-- [Logic] Handles CRUD actions (index, store, etc.)
│   └── Models/
│       └── Notepad.php                  <-- [Model] Represents the 'notepads' table (Mass Assignment)
├── database/
│   └── migrations/
│       └── xxxx_create_notepad_table.php <-- [Database] Schema for 'title' and 'body'
├── resources/
│   └── views/
│       └── notepads/                    <-- [Folder] All Notepad-related views
│           ├── index.blade.php       <-- [Read] Lists all notepads
│           ├── create.blade.php      <-- [Create] Form for new posts
│           ├── edit.blade.php        <-- [Update] Form for editing existing notepads
│           └── show.blade.php        <-- [Read] Displays a single full notepad
└── routes/
    └── web.php                       <-- [Routes] Uses Route::resource for 'notepads'