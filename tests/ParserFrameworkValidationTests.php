<?php
/*---------------------------------------------------------------------------------------------
 *  Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

use Phan\TolerantPhpAst\Token;
use PHPUnit\Framework\TestCase;

class ParserFrameworkValidationTests extends TestCase {
    public function frameworkErrorProvider() {
        $totalSize = 0;
        $frameworks = glob(__DIR__ . "/../validation/frameworks/*", GLOB_ONLYDIR);

        $testProviderArray = [];
        foreach ($frameworks as $frameworkDir) {
            $frameworkName = basename($frameworkDir);
            $iterator = new RecursiveDirectoryIterator(__DIR__ . "/../validation/frameworks/" . $frameworkName);

            foreach (new RecursiveIteratorIterator($iterator) as $file) {
                $pathName = $file->getPathname();
                if (preg_match('/\.php$/', $pathName) > 0) {
                    // Include files ending in ".php", but don't include XML(foo.phpunit.xml) or binary files (foo.php.gz)
                    $totalSize += $file->getSize();
                    $testProviderArray[$frameworkName . "::" . $file->getBasename()] = [$pathName, $frameworkName];
                }
            }
        }
        if (count($testProviderArray) === 0) {
            throw new Exception("ERROR: Validation testsuite frameworks not found - run `git submodule update --init --recursive` to download.");
        }
        return $testProviderArray;
    }

    /**
     * @dataProvider frameworkErrorProvider
     */
    public function testFrameworkErrors($testCaseFile, $frameworkName) {
        $fileContents = file_get_contents($testCaseFile);
        $parser = new \Phan\TolerantPhpAst\Parser();
        $sourceFile = $parser->parseSourceFile($fileContents);

        $directory = __DIR__ . "/output/$frameworkName/";
        if (!file_exists($dir = __DIR__ . "/output")) {
            mkdir($dir);
        }
        if (!file_exists($directory)) {
            mkdir($directory);
        }
        $outFile = $directory . basename($testCaseFile);
        file_put_contents($outFile, $fileContents);

        foreach ($sourceFile->getDescendantNodesAndTokens() as $child) {
            if ($child instanceof Token) {
                $this->assertNotEquals(\Phan\TolerantPhpAst\TokenKind::Unknown, $child->kind, "input: $testCaseFile\r\nexpected: ");
                $this->assertNotInstanceOf(\Phan\TolerantPhpAst\SkippedToken::class, $child, "input: $testCaseFile\r\nexpected: ");
                $this->assertNotInstanceOf(\Phan\TolerantPhpAst\MissingToken::class, $child, "input: $testCaseFile\r\nexpected: ");
            }
        }

        unlink($outFile);
        // echo json_encode($parser->getErrors($sourceFile));
    }
}
