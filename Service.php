namespace App\Services;

use App\Models\Score;

class WordPuzzleService
{
    protected $dictionary;

    public function __construct()
    {
        // Load a dictionary of valid words
        $this->dictionary = file('path/to/dictionary.txt', FILE_IGNORE_NEW_LINES);
    }

    public function validateWord($word, $availableLetters)
    {
        // Check if the word is valid and can be formed with available letters
        // Implement logic to validate the word
    }

    public function scoreWord($word)
    {
        return strlen($word);
    }

    public function submitWord($word, $availableLetters)
    {
        if ($this->validateWord($word, $availableLetters)) {
            $score = $this->scoreWord($word);
            Score::updateOrCreate(['word' => $word], ['score' => $score]);
            return $score;
        }
        return 0;
    }

    public function getLeaderboard()
    {
        return Score::orderBy('score', 'desc')->take(10)->get();
    }
}
