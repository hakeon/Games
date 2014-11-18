<?php

// app/controllers/GamesController.php

class GamesController extends BaseController
{
    public function index()
    {
        // Display a list of games
        $games = Game::all();
        return View::make('index', compact('games'));
    }

    public function create()
    {
        // Display the create game form
        return View::make('create');
    }

    public function handleCreate()
    {
        // Handles the create form submission
        $game = new Game;
        $game->title = Input::get('title');
        $game->publisher = Input::get('publisher');
        $game->complete = Input::has('complete');
        $game->save();

        return Redirect::action('GamesController@index');
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