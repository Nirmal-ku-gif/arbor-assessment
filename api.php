use App\Http\Controllers\WordPuzzleController;

Route::post('/submit', [WordPuzzleController::class, 'submit']);
Route::get('/leaderboard', [WordPuzzleController::class, 'leaderboard']);
