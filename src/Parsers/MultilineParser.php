<?php declare(strict_types=1);

namespace Medology\GherkinCsFixer\Parsers;

use Generator;
use Medology\GherkinCsFixer\Dto\MultilineDto;

/**
 * Parse consecutive lines as text and fix the formatting.
 */
class MultilineParser
{
    /**
     * Parses the text block and return reformatted new one.
     *
     * @param  Generator $fileReader File streamer
     * @return MultilineDTO
     */
    public function run(Generator $fileReader): MultilineDTO
    {
        // Skip the start line (starting """)
        $fileReader->next();
        $rows = [];
        while ('"""' != trim(($line = $fileReader->current()))) {
            $rows[] = $line;
            $fileReader->next();
        }
        // Skip the ending line
        $fileReader->next();

        return new MultilineDTO($rows);
    }
}
