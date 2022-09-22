<?php

use \Phan\Issue;

/**
 * This configuration will be read and overlayed on top of the
 * default configuration. Command line arguments will be applied
 * after this file is read.
 *
 * @see src/Phan/Config.php
 * See Config for all configurable options.
 *
 * A Note About Paths
 * ==================
 *
 * Files referenced from this file should be defined as
 *
 * ```
 *   Config::projectPath('relative_path/to/file')
 * ```
 *
 * where the relative path is relative to the root of the
 * project which is defined as either the working directory
 * of the phan executable or a path passed in via the CLI
 * '-d' flag.
 */
$config = [
    // The PHP version that will be used for feature/syntax compatibility warnings.
    // Supported values: `'5.6'`, `'7.0'`, `'7.1'`, `'7.2'`, `'7.3'`, `'7.4'`,
    // `'8.0'`, `'8.1'`, `null`.
    // If this is set to `null`, Phan will first attempt to infer the value from
    // the project's composer.json's `{"require": {"php": "version range"}}` if possible.
    // If that could not be determined, then Phan assumes `target_php_version`.
    'minimum_target_php_version' => '7.2',

    // If true, missing properties will be created when
    // they are first seen. If false, we'll report an
    // error message.
    "allow_missing_properties" => false,

    // Allow null to be cast as any type and for any
    // type to be cast to null.
    "null_casts_as_any_type" => false,

    // If enabled, Phan will warn if **any** type in a method invocation's object
    // is definitely not an object,
    // or if **any** type in an invoked expression is not a callable.
    // Setting this to true will introduce numerous false positives
    // (and reveal some bugs).
    'strict_method_checking' => true,

    // If enabled, Phan will warn if **any** type in the argument's union type
    // cannot be cast to a type in the parameter's expected union type.
    // Setting this to true will introduce numerous false positives
    // (and reveal some bugs).
    'strict_param_checking' => true,

    // If enabled, Phan will warn if **any** type in a property assignment's union type
    // cannot be cast to a type in the property's declared union type.
    // Setting this to true will introduce numerous false positives
    // (and reveal some bugs).
    // (For self-analysis, Phan has a large number of suppressions and file-level suppressions, due to \ast\Node being difficult to type check)
    'strict_property_checking' => true,

    // If enabled, Phan will warn if **any** type in a returned value's union type
    // cannot be cast to the declared return type.
    // Setting this to true will introduce numerous false positives
    // (and reveal some bugs).
    // (For self-analysis, Phan has a large number of suppressions and file-level suppressions, due to \ast\Node being difficult to type check)
    'strict_return_checking' => true,

    // If enabled, Phan will warn if **any** type of the object expression for a property access
    // does not contain that property.
    'strict_object_checking' => true,

    // If enabled, scalars (int, float, bool, string, null)
    // are treated as if they can cast to each other.
    'scalar_implicit_cast' => false,

    // If true, seemingly undeclared variables in the global
    // scope will be ignored. This is useful for projects
    // with complicated cross-file globals that you have no
    // hope of fixing.
    'ignore_undeclared_variables_in_global_scope' => false,

    // Backwards Compatibility Checking
    'backward_compatibility_checks' => false,

    // If enabled, check all methods that override a
    // parent method to make sure its signature is
    // compatible with the parent's. This check
    // can add quite a bit of time to the analysis.
    'analyze_signature_compatibility' => true,

    // Set to true in order to attempt to detect dead
    // (unreferenced) code. Keep in mind that the
    // results will only be a guess given that classes,
    // properties, constants and methods can be referenced
    // as variables (like `$class->$property` or
    // `$class->$method()`) in ways that we're unable
    // to make sense of.
    'dead_code_detection' => false,

    'unused_variable_detection' => true,

    // Run a quick version of checks that takes less
    // time
    "quick_mode" => false,

    // Enable or disable support for generic templated
    // class types.
    'generic_types_enabled' => true,

    // The minimum severity level to report on. This can be
    // set to Issue::SEVERITY_LOW, Issue::SEVERITY_NORMAL or
    // Issue::SEVERITY_CRITICAL.
    'minimum_severity' => Issue::SEVERITY_LOW,

    // Add any issue types (such as 'PhanUndeclaredMethod')
    // here to inhibit them from being reported
    'suppress_issue_types' => [
    ],

    // A list of files to include in analysis
    'file_list' => [
        // 'vendor/phpunit/phpunit/src/Framework/TestCase.php',
    ],

    // A file list that defines files that will be excluded
    // from parsing and analysis and will not be read at all.
    //
    // This is useful for excluding hopelessly unanalyzable
    // files that can't be removed for whatever reason.
    'exclude_file_list' => [
    ],

    // The number of processes to fork off during the analysis
    // phase.
    'processes' => 1,

    // A list of directories that should be parsed for class and
    // method information. After excluding the directories
    // defined in exclude_analysis_directory_list, the remaining
    // files will be statically analyzed for errors.
    //
    // Thus, both first-party and third-party code being used by
    // your application should be included in this list.
    'directory_list' => [
        'src',
    ],

    // List of case-insensitive file extensions supported by Phan.
    // (e.g. php, html, htm)
    'analyzed_file_extensions' => ['php'],

    // A directory list that defines files that will be excluded
    // from static analysis, but whose class and method
    // information should be included.
    //
    // Generally, you'll want to include the directories for
    // third-party code (such as "vendor/") in this list.
    //
    // n.b.: If you'd like to parse but not analyze 3rd
    //       party code, directories containing that code
    //       should be added to the `directory_list` as
    //       to `exclude_analysis_directory_list`.
    "exclude_analysis_directory_list" => [
        // 'src/custom',
    ],

    // A list of plugin files to execute
    'plugins' => [
        'AlwaysReturnPlugin',
        'DollarDollarPlugin',
        'UnreachableCodePlugin',
        // NOTE: src/Phan/Language/Internal/FunctionSignatureMap.php mixes value without keys (as return type) with values having keys deliberately.
        'DuplicateArrayKeyPlugin',
        'PregRegexCheckerPlugin',
        'PrintfCheckerPlugin',
    ],

];
return $config;
