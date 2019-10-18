<?php declare(strict_types=1);

namespace Medology\GherkinCsFixer\Fixers;

use Medology\GherkinCsFixer\Dto\MultilineDto;

/**
 * Fixes the multiple line text formatting.
 */
class MultilineFixer
{
    /** @var int Padding value from left */
    private const PADDING = 13;

    /** @var string Text block starting and ending */
    private const KEYWORD = '"""';

    /**
     * Reformat the text.
     *
     * @param  MultilineDto $dto Text content dto.
     * @return string
     */
    public function run(MultilineDto $dto): string
    {
        $block_tag = str_pad(self::KEYWORD, self::PADDING, " ", STR_PAD_LEFT) .PHP_EOL;
        return $block_tag . implode('', $dto->getContent()) . $block_tag;
    }
}
