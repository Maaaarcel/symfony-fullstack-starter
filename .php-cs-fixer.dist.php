<?php

declare(strict_types = 1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

$finder = new Finder()
    ->in(__DIR__)
    ->exclude('var')
    ->notPath([
        'config/bundles.php',
        'config/reference.php',
    ]);

return new Config()
    ->setParallelConfig(ParallelConfigFactory::detect())
    ->setRiskyAllowed(true)
    ->setFinder($finder)
    ->setIndent('    ')
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'declare_equal_normalize' => [
            'space' => 'single',
        ],
        'declare_strict_types' => true,
        'strict_comparison' => true,
        'braces_position' => [
            'allow_single_line_anonymous_functions' => false,
            'anonymous_classes_opening_brace' => 'same_line',
            'anonymous_functions_opening_brace' => 'same_line',
            'classes_opening_brace' => 'same_line',
            'control_structures_opening_brace' => 'same_line',
            'functions_opening_brace' => 'same_line',
        ],
        'class_keyword' => true,
        'concat_space' => [
            'spacing' => 'one',
        ],
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
        'fully_qualified_strict_types' => [
            'import_symbols' => true,
        ],
        'yoda_style' => [
            'equal' => false,
            'identical' => false,
            'less_and_greater' => false,
        ],
        'void_return' => true,
        'phpdoc_to_param_type' => [
            'scalar_types' => true,
            'union_types' => true,
        ],
        'phpdoc_to_comment' => [
            'allow_before_return_statement' => true,
        ],
        'nullable_type_declaration' => [
            'syntax' => 'union',
        ],
        'return_assignment' => true,
        'phpdoc_align' => [
            'align' => 'left',
        ],
        'combine_consecutive_issets' => true,
        'static_lambda' => true,
        'phpdoc_to_property_type' => [
            'scalar_types' => true,
            'union_types' => true,
        ],
        'regular_callable_call' => true,
        'single_line_empty_body' => true,
        'use_arrow_functions' => true,
    ]);
