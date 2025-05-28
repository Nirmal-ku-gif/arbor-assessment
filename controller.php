namespace App\Http\Controllers;

use App\Services\WordPuzzleService;
use Illuminate\Http\Request;

class WordPuzzleController extends Controller
{
    protected $wordPuzzleService;

    public function __construct(WordPuzzleService $wordPuzzleService)
    {
        $this->wordPuzzleService = $wordPuzzleService;
    }

    public function submit(Request $request)
    {
        $request->validate(['word' => 'required|string', 'availableLetters' => 'required|string']);
        $score = $this->wordPuzzleService->submitWord($request->word, $request->availableLetters);
        return ['score' => $score];
    }

    public function leaderboard()
    {
        $scores = $this->wordPuzzleService->getLeaderboard();
        return response()->json($scores);
    }
}
