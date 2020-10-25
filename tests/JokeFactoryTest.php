<?php

namespace Ensiente\ChuckNorrisJokes\Tests;

use Ensiente\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReutrnRandomJoke()
    {

        $allJokes = [
            "Chuck Norris doesn’t read books. He stares them down until he gets the information he wants.",
            "Time waits for no man. Unless that man is Chuck Norris.",
            "If you spell Chuck Norris in Scrabble, you win. Forever.",
            "Chuck Norris breathes air … five times a day.",
            "In the Beginning there was nothing … then Chuck Norris roundhouse kicked nothing and told it to get a job.",
        ];

        $jokes = new JokeFactory($allJokes);
        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $allJokes);
    }
}
