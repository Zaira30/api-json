<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorIdentifierResource;
use App\Http\Resources\PeopleResource;
use App\People;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function show(People $author)
    {
        PeopleResource::withoutWrapping();
        return new PeopleResource($author);
    }
}
