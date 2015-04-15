<?php
namespace MiniGame\Test\Mock;

use MiniGame\Hangman\Hangman;
use MiniGame\Hangman\Options\HangmanOptions;

trait HangmanMocker {

    /**
     * Returns a hangman mini-game
     * @param  int $id
     * @return Hangman
     */
    public function getHangmanMiniGame($id)
    {
        $h = \Mockery::mock('\\MiniGame\\Hangman\\Hangman');
        $h->shouldReceive('getId')->andReturn($id);

        return $h;
    }

    /**
     * @param  string $word
     * @param  int    $length
     * @param  int    $level
     * @param  array  $players
     * @return HangmanOptions
     */
    public function getHangmanOptions($word = null, $length = null, $level = null, array $players = array())
    {
        $options = \Mockery::mock('\\MiniGame\\Hangman\\Options\\HangmanOptions');

        $options->shouldReceive('getWord')->andReturn($word);
        $options->shouldReceive('getLength')->andReturn($length);
        $options->shouldReceive('getLevel')->andReturn($level);
        $options->shouldReceive('getPlayers')->andReturn($players);

        return $options;
    }
} 