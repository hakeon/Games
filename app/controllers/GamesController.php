<?php

// app/controllers/GamesController.php

class GamesController extends BaseController
{
    public function index()
    {
        // Display a list of games
        return View::make('index');
    }

    public function create()
    {
        // Display the create game form
        return View::make('create');
    }

    public function handleCreate()
    {
        // Handles the create form submission
    }

    public function edit(Game $game)
    {
        // Display the edit game form
        return View::make('edit');
    }

    public function handleEdit()
    {
        // Handles the edit form submission
    }

    public function delete()
    {
        // Displays the delete confirmation page
        return View::make('delete');
    }

    public function handleDelete()
    {
        // Handles the delete confirmation
    }
}