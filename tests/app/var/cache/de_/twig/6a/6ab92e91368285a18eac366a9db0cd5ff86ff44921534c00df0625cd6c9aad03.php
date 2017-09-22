<?php

/* node_modules/path-parse/test.js */
class __TwigTemplate_282ff3b827d75b984be334c64824b4c7a61e02e558e84b6b757ba051f436ec81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f33a15dada0cc4595dc0bb3c60758dca05312db70ade722a5878d1cda1343081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33a15dada0cc4595dc0bb3c60758dca05312db70ade722a5878d1cda1343081->enter($__internal_f33a15dada0cc4595dc0bb3c60758dca05312db70ade722a5878d1cda1343081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/path-parse/test.js"));

        // line 1
        echo "var assert = require('assert');
var pathParse = require('./index');

var winParseTests = [
  [{ root: 'C:\\\\', dir: 'C:\\\\path\\\\dir', base: 'index.html', ext: '.html', name: 'index' }, 'C:\\\\path\\\\dir\\\\index.html'],
  [{ root: 'C:\\\\', dir: 'C:\\\\another_path\\\\DIR\\\\1\\\\2\\\\33', base: 'index', ext: '', name: 'index' }, 'C:\\\\another_path\\\\DIR\\\\1\\\\2\\\\33\\\\index'],
  [{ root: '', dir: 'another_path\\\\DIR with spaces\\\\1\\\\2\\\\33', base: 'index', ext: '', name: 'index' }, 'another_path\\\\DIR with spaces\\\\1\\\\2\\\\33\\\\index'],
  [{ root: '\\\\', dir: '\\\\foo', base: 'C:', ext: '', name: 'C:' }, '\\\\foo\\\\C:'],
  [{ root: '', dir: '', base: 'file', ext: '', name: 'file' }, 'file'],
  [{ root: '', dir: '.', base: 'file', ext: '', name: 'file' }, '.\\\\file'],

  // unc
  [{ root: '\\\\\\\\server\\\\share\\\\', dir: '\\\\\\\\server\\\\share\\\\', base: 'file_path', ext: '', name: 'file_path' }, '\\\\\\\\server\\\\share\\\\file_path'],
  [{ root: '\\\\\\\\server two\\\\shared folder\\\\', dir: '\\\\\\\\server two\\\\shared folder\\\\', base: 'file path.zip', ext: '.zip', name: 'file path' }, '\\\\\\\\server two\\\\shared folder\\\\file path.zip'],
  [{ root: '\\\\\\\\teela\\\\admin\$\\\\', dir: '\\\\\\\\teela\\\\admin\$\\\\', base: 'system32', ext: '', name: 'system32' }, '\\\\\\\\teela\\\\admin\$\\\\system32'],
  [{ root: '\\\\\\\\?\\\\UNC\\\\', dir: '\\\\\\\\?\\\\UNC\\\\server', base: 'share', ext: '', name: 'share' }, '\\\\\\\\?\\\\UNC\\\\server\\\\share']
];

var winSpecialCaseFormatTests = [
  [{dir: 'some\\\\dir'}, 'some\\\\dir\\\\'],
  [{base: 'index.html'}, 'index.html'],
  [{}, '']
];

var unixParseTests = [
  [{ root: '/', dir: '/home/user/dir', base: 'file.txt', ext: '.txt', name: 'file' }, '/home/user/dir/file.txt'],
  [{ root: '/', dir: '/home/user/a dir', base: 'another File.zip', ext: '.zip', name: 'another File' }, '/home/user/a dir/another File.zip'],
  [{ root: '/', dir: '/home/user/a dir/', base: 'another&File.', ext: '.', name: 'another&File' }, '/home/user/a dir//another&File.'],
  [{ root: '/', dir: '/home/user/a\$\$\$dir/', base: 'another File.zip', ext: '.zip', name: 'another File' }, '/home/user/a\$\$\$dir//another File.zip'],
  [{ root: '', dir: 'user/dir', base: 'another File.zip', ext: '.zip', name: 'another File' }, 'user/dir/another File.zip'],
  [{ root: '', dir: '', base: 'file', ext: '', name: 'file' }, 'file'],
  [{ root: '', dir: '', base: '.\\\\file', ext: '', name: '.\\\\file' }, '.\\\\file'],
  [{ root: '', dir: '.', base: 'file', ext: '', name: 'file' }, './file'],
  [{ root: '', dir: '', base: 'C:\\\\foo', ext: '', name: 'C:\\\\foo' }, 'C:\\\\foo']
];

var unixSpecialCaseFormatTests = [
  [{dir: 'some/dir'}, 'some/dir/'],
  [{base: 'index.html'}, 'index.html'],
  [{}, '']
];

var errors = [
  {input: null, message: /Parameter 'pathString' must be a string, not/},
  {input: {}, message: /Parameter 'pathString' must be a string, not object/},
  {input: true, message: /Parameter 'pathString' must be a string, not boolean/},
  {input: 1, message: /Parameter 'pathString' must be a string, not number/},
  {input: undefined, message: /Parameter 'pathString' must be a string, not undefined/},
];

checkParseFormat(pathParse.win32, winParseTests);
checkParseFormat(pathParse.posix, unixParseTests);
checkErrors(pathParse.win32);
checkErrors(pathParse.posix);

function checkErrors(parse) {
  errors.forEach(function(errorCase) {
    try {
      parse(errorCase.input);
    } catch(err) {
      assert.ok(err instanceof TypeError);
      assert.ok(
        errorCase.message.test(err.message),
        'expected ' + errorCase.message + ' to match ' + err.message
      );
      return;
    }

    assert.fail('should have thrown');
  });
}

function checkParseFormat(parse, testCases) {
  testCases.forEach(function(testCase) {
    assert.deepEqual(parse(testCase[1]), testCase[0]);
  });
}
";
        
        $__internal_f33a15dada0cc4595dc0bb3c60758dca05312db70ade722a5878d1cda1343081->leave($__internal_f33a15dada0cc4595dc0bb3c60758dca05312db70ade722a5878d1cda1343081_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/path-parse/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var assert = require('assert');
var pathParse = require('./index');

var winParseTests = [
  [{ root: 'C:\\\\', dir: 'C:\\\\path\\\\dir', base: 'index.html', ext: '.html', name: 'index' }, 'C:\\\\path\\\\dir\\\\index.html'],
  [{ root: 'C:\\\\', dir: 'C:\\\\another_path\\\\DIR\\\\1\\\\2\\\\33', base: 'index', ext: '', name: 'index' }, 'C:\\\\another_path\\\\DIR\\\\1\\\\2\\\\33\\\\index'],
  [{ root: '', dir: 'another_path\\\\DIR with spaces\\\\1\\\\2\\\\33', base: 'index', ext: '', name: 'index' }, 'another_path\\\\DIR with spaces\\\\1\\\\2\\\\33\\\\index'],
  [{ root: '\\\\', dir: '\\\\foo', base: 'C:', ext: '', name: 'C:' }, '\\\\foo\\\\C:'],
  [{ root: '', dir: '', base: 'file', ext: '', name: 'file' }, 'file'],
  [{ root: '', dir: '.', base: 'file', ext: '', name: 'file' }, '.\\\\file'],

  // unc
  [{ root: '\\\\\\\\server\\\\share\\\\', dir: '\\\\\\\\server\\\\share\\\\', base: 'file_path', ext: '', name: 'file_path' }, '\\\\\\\\server\\\\share\\\\file_path'],
  [{ root: '\\\\\\\\server two\\\\shared folder\\\\', dir: '\\\\\\\\server two\\\\shared folder\\\\', base: 'file path.zip', ext: '.zip', name: 'file path' }, '\\\\\\\\server two\\\\shared folder\\\\file path.zip'],
  [{ root: '\\\\\\\\teela\\\\admin\$\\\\', dir: '\\\\\\\\teela\\\\admin\$\\\\', base: 'system32', ext: '', name: 'system32' }, '\\\\\\\\teela\\\\admin\$\\\\system32'],
  [{ root: '\\\\\\\\?\\\\UNC\\\\', dir: '\\\\\\\\?\\\\UNC\\\\server', base: 'share', ext: '', name: 'share' }, '\\\\\\\\?\\\\UNC\\\\server\\\\share']
];

var winSpecialCaseFormatTests = [
  [{dir: 'some\\\\dir'}, 'some\\\\dir\\\\'],
  [{base: 'index.html'}, 'index.html'],
  [{}, '']
];

var unixParseTests = [
  [{ root: '/', dir: '/home/user/dir', base: 'file.txt', ext: '.txt', name: 'file' }, '/home/user/dir/file.txt'],
  [{ root: '/', dir: '/home/user/a dir', base: 'another File.zip', ext: '.zip', name: 'another File' }, '/home/user/a dir/another File.zip'],
  [{ root: '/', dir: '/home/user/a dir/', base: 'another&File.', ext: '.', name: 'another&File' }, '/home/user/a dir//another&File.'],
  [{ root: '/', dir: '/home/user/a\$\$\$dir/', base: 'another File.zip', ext: '.zip', name: 'another File' }, '/home/user/a\$\$\$dir//another File.zip'],
  [{ root: '', dir: 'user/dir', base: 'another File.zip', ext: '.zip', name: 'another File' }, 'user/dir/another File.zip'],
  [{ root: '', dir: '', base: 'file', ext: '', name: 'file' }, 'file'],
  [{ root: '', dir: '', base: '.\\\\file', ext: '', name: '.\\\\file' }, '.\\\\file'],
  [{ root: '', dir: '.', base: 'file', ext: '', name: 'file' }, './file'],
  [{ root: '', dir: '', base: 'C:\\\\foo', ext: '', name: 'C:\\\\foo' }, 'C:\\\\foo']
];

var unixSpecialCaseFormatTests = [
  [{dir: 'some/dir'}, 'some/dir/'],
  [{base: 'index.html'}, 'index.html'],
  [{}, '']
];

var errors = [
  {input: null, message: /Parameter 'pathString' must be a string, not/},
  {input: {}, message: /Parameter 'pathString' must be a string, not object/},
  {input: true, message: /Parameter 'pathString' must be a string, not boolean/},
  {input: 1, message: /Parameter 'pathString' must be a string, not number/},
  {input: undefined, message: /Parameter 'pathString' must be a string, not undefined/},
];

checkParseFormat(pathParse.win32, winParseTests);
checkParseFormat(pathParse.posix, unixParseTests);
checkErrors(pathParse.win32);
checkErrors(pathParse.posix);

function checkErrors(parse) {
  errors.forEach(function(errorCase) {
    try {
      parse(errorCase.input);
    } catch(err) {
      assert.ok(err instanceof TypeError);
      assert.ok(
        errorCase.message.test(err.message),
        'expected ' + errorCase.message + ' to match ' + err.message
      );
      return;
    }

    assert.fail('should have thrown');
  });
}

function checkParseFormat(parse, testCases) {
  testCases.forEach(function(testCase) {
    assert.deepEqual(parse(testCase[1]), testCase[0]);
  });
}
", "node_modules/path-parse/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/path-parse/test.js");
    }
}
