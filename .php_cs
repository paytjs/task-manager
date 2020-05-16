<?php

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
    ])
    ->setUsingCache(false)
    ->setFinder(
      PhpCsFixer\Finder::create()
        ->in(__DIR__)
    );
