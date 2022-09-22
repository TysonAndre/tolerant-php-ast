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

    // If true, check to make sure the return type declared
    // in the doc-block (if any) matches the return type
    // declared in the method signature.
    'check_docblock_signature_return_type_match' => true,

    // If true, check to make sure the param types declared
    // in the doc-block (if any) matches the param types
    // declared in the method signature.
    'check_docblock_signature_param_type_match' => true,

    // If true, make narrowed types from phpdoc params override
    // the real types from the signature, when real types exist.
    // (E.g. allows specifying desired lists of subclasses,
    //  or to indicate a preference for non-nullable types over nullable types)
    //
    // Affects analysis of the body of the method and the param types passed in by callers.
    //
    // (*Requires `check_docblock_signature_param_type_match` to be true*)
    'prefer_narrowed_phpdoc_param_type' => true,

    // (*Requires `check_docblock_signature_return_type_match` to be true*)
    //
    // If true, make narrowed types from phpdoc returns override
    // the real types from the signature, when real types exist.
    //
    // (E.g. allows specifying desired lists of subclasses,
    //  or to indicate a preference for non-nullable types over nullable types)
    // Affects analysis of return statements in the body of the method and the return types passed in by callers.
    'prefer_narrowed_phpdoc_return_type' => true,

    // If enabled, check all methods that override a
    // parent method to make sure its signature is
    // compatible with the parent's. This check
    // can add quite a bit of time to the analysis.
    'analyze_signature_compatibility' => true,

    // Set this to true to enable the plugins that Phan uses to infer more accurate return types of `implode`, `json_decode`, and many other functions.
    //
    // Phan is slightly faster when these are disabled.
    'enable_extended_internal_return_type_plugins' => true,

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


    // Set to true in order to attempt to detect redundant and impossible conditions.
    //
    // This has some false positives involving loops,
    // variables set in branches of loops, and global variables.
    'redundant_condition_detection' => true,

    // Set to true in order to attempt to detect error-prone truthiness/falsiness checks.
    //
    // This is not suitable for all codebases.
    'error_prone_truthy_condition_detection' => true,

    // Enable this to warn about harmless redundant use for classes and namespaces such as `use Foo\bar` in namespace Foo.
    //
    // Note: This does not affect warnings about redundant uses in the global namespace.
    'warn_about_redundant_use_namespaced_class' => true,
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
        'UseReturnValuePlugin',

        'DuplicateExpressionPlugin',
        // warns about carriage returns("\r"), trailing whitespace, and tabs in PHP files.
        'WhitespacePlugin',
        // Warn about inline HTML anywhere in the files.
        'InlineHTMLPlugin',
        // 'PossiblyStaticMethodPlugin',

        'PreferNamespaceUsePlugin',
        'EmptyStatementListPlugin',

        // Report empty (not overridden or overriding) methods and functions
        // 'EmptyMethodAndFunctionPlugin',

        // Warn about using the same loop variable name as a loop variable of an outer loop.
        'LoopVariableReusePlugin',
        // Warn about assigning the value the variable already had to that variable.
        'RedundantAssignmentPlugin',
        'StrictComparisonPlugin',
        // Warn about `$var == SOME_INT_OR_STRING_CONST` due to unintuitive behavior such as `0 == 'a'`
        'StrictLiteralComparisonPlugin',
        'ShortArrayPlugin',
        'SimplifyExpressionPlugin',
        'DeprecateAliasPlugin',
    ],

];
return $config;
