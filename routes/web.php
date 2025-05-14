<?php

use Illuminate\Support\Facades\Route;

Route::fallback( function () {
    if (str_starts_with(request()->path(), 'api')) {
        return response()->json(['error' => 'Not Found'], 404);
    }

    return file_get_contents(public_path('index.html'));
});
