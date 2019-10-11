<?php declare(strict_types=1);

namespace Medology\GherkinCsFixer\Parsers;

use Medology\GherkinCsFixer\Dto\StepDto;
use Medology\GherkinCsFixer\Exceptions\InvalidKeywordException;

/**
 * Parse the line from file, into step and keywords.
 */
class StepParser
{
    /** @var string Regular exp rule for parsing step line. */
    private $regex;

    /**
     * Compute and keep regex.
     */
    public function __construct()
    {
        $this->regex = '/^(\s+)?(?P<keyword>' .
            implode('|', StepDto::STEP_KEYWORDS) . '|\|)(?P<body>.*)/';
    }

    /**
     * Parses the line from the file and return as StepDTO.
     *
     * @param  string                  $raw_step Raw text line from the file
     * @throws InvalidKeywordException When the keyword mismatched with check.
     * @return StepDto
     */
    public function run(string $raw_step): StepDto
    {
        return preg_match($this->regex, $raw_step, $m)
            ? new StepDto($m)
            : new StepDto(['body'=>$raw_step]);
    }
}
