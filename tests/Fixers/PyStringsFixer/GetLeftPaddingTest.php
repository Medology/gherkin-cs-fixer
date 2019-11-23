<?php declare(strict_types=1);

use Medology\GherkinCsFixer\Fixers\PyStringsFixer;
use Tests\TestCase;

/**
 * @covers \Medology\GherkinCsFixer\Fixers\PyStringsFixer::getLeftPadding
 */
class GetLeftPaddingTest extends TestCase
{
    /**
     * Test the final amount of padding is correct.
     *
     * @dataProvider paddingExamples
     *
     * @param  int                 $startPadding    The staring amount of padding
     * @param  int                 $textPadding     The amount of padding the text is supposed to have
     * @param  int                 $expectedPadding The expected amount of padding
     * @throws ReflectionException When fails to create a reflection class.
     */
    public function testTheAmountOfPaddingTheTextShouldBePaddedWith(
        int $startPadding,
        int $textPadding,
        int $expectedPadding
    ) {
        $actualPadding = $this->invokeMethod(
            new PyStringsFixer(),
            'getLeftPadding',
            [$startPadding, $textPadding]
        );

        $this->assertSame(
            $expectedPadding,
            $actualPadding,
            "Expected the amount of padding to be $expectedPadding but got $actualPadding"
        );
    }

    /**
     * Examples of padding.
     */
    public function paddingExamples()
    {
        return [
            [10, 10, 10],
            [5, 10, 15],
            [10, 5, 10],
            [10, 20, 20],
        ];
    }
}
