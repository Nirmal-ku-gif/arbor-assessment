namespace Tests\Unit;

use Tests\TestCase;
use App\Services\WordPuzzleService;

class WordPuzzleServiceTest extends TestCase
{
    protected $wordPuzzleService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->wordPuzzleService = new WordPuzzleService();
    }

    public function testScoreWord()
    {
        $this->assertEquals(3, $this->wordPuzzleService->scoreWord('fox'));
    }

    public function testValidateWord()
    {
        
    }
}
