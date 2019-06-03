<?php

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRules([
        '@PSR2' => true,
        'ordered_imports' => true,
        'phpdoc_order' => true,
        'array_syntax' => [ 'syntax' => 'short' ],
        'strict_comparison' => true,
        'strict_param' => true,
        'no_trailing_whitespace' => false,
        'no_trailing_whitespace_in_comment' => false,
        'braces' => false,
        'single_blank_line_at_eof' => false,
        'blank_line_after_namespace' => false,
        'single_quote' => true,
        'phpdoc_add_missing_param_annotation' => true,
        'no_empty_phpdoc' => true,
        'phpdoc_indent' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
        ->exclude('test')
        ->exclude('tests')
        ->in(__DIR__)
    );
