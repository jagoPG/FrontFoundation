<?php

/* node_modules/commondir/test/dirs.js */
class __TwigTemplate_d486396fb81b0dca2257dd0de7c922a49f7080566b98cc56a7d4f1d1d144054d extends Twig_Template
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
        $__internal_1acf8fe2feb69d2b19892b922dba6d56d2e7def1db442d956c55c1b0d446d3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acf8fe2feb69d2b19892b922dba6d56d2e7def1db442d956c55c1b0d446d3e9->enter($__internal_1acf8fe2feb69d2b19892b922dba6d56d2e7def1db442d956c55c1b0d446d3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/commondir/test/dirs.js"));

        // line 1
        echo "var test = require('tape');
var commondir = require('../');

test('common', function (t) {
    t.equal(
        commondir([ '/foo', '//foo/bar', '/foo//bar/baz' ]),
        '/foo'
    );
    t.equal(
        commondir([ '/a/b/c', '/a/b', '/a/b/c/d/e' ]),
        '/a/b'
    );
    t.equal(
        commondir([ '/x/y/z/w', '/xy/z', '/x/y/z' ]),
        '/'
    );
    t.equal(
        commondir([ 'X:\\\\foo', 'X:\\\\\\\\foo\\\\bar', 'X://foo/bar/baz' ]),
        'X:/foo'
    );
    t.equal(
        commondir([ 'X:\\\\a\\\\b\\\\c', 'X:\\\\a\\\\b', 'X:\\\\a\\\\b\\\\c\\\\d\\\\e' ]),
        'X:/a/b'
    );
    t.equal(
        commondir([ 'X:\\\\x\\\\y\\\\z\\\\w', '\\\\\\\\xy\\\\z', '\\\\x\\\\y\\\\z' ]),
        '/'
    );
    t.throws(function () {
        commondir([ '/x/y/z/w', 'qrs', '/x/y/z' ]);
    });
    t.end();
});

test('base', function (t) {
    t.equal(
        commondir('/foo/bar', [ 'baz', './quux', '../bar/bazzy' ]),
        '/foo/bar'
    );
    t.equal(
        commondir('/a/b', [ 'c', '../b/.', '../../a/b/e' ]),
        '/a/b'
    );
    t.equal(
        commondir('/a/b/c', [ '..', '../d', '../../a/z/e' ]),
        '/a'
    );
    t.equal(
        commondir('/foo/bar', [ 'baz', '.\\\\quux', '..\\\\bar\\\\bazzy' ]),
        '/foo/bar'
    );
    // Tests including X:\\ basedirs must wait until path.resolve supports
    // Windows-style paths, starting in Node.js v0.5.X
    t.end();
});
";
        
        $__internal_1acf8fe2feb69d2b19892b922dba6d56d2e7def1db442d956c55c1b0d446d3e9->leave($__internal_1acf8fe2feb69d2b19892b922dba6d56d2e7def1db442d956c55c1b0d446d3e9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/commondir/test/dirs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var commondir = require('../');

test('common', function (t) {
    t.equal(
        commondir([ '/foo', '//foo/bar', '/foo//bar/baz' ]),
        '/foo'
    );
    t.equal(
        commondir([ '/a/b/c', '/a/b', '/a/b/c/d/e' ]),
        '/a/b'
    );
    t.equal(
        commondir([ '/x/y/z/w', '/xy/z', '/x/y/z' ]),
        '/'
    );
    t.equal(
        commondir([ 'X:\\\\foo', 'X:\\\\\\\\foo\\\\bar', 'X://foo/bar/baz' ]),
        'X:/foo'
    );
    t.equal(
        commondir([ 'X:\\\\a\\\\b\\\\c', 'X:\\\\a\\\\b', 'X:\\\\a\\\\b\\\\c\\\\d\\\\e' ]),
        'X:/a/b'
    );
    t.equal(
        commondir([ 'X:\\\\x\\\\y\\\\z\\\\w', '\\\\\\\\xy\\\\z', '\\\\x\\\\y\\\\z' ]),
        '/'
    );
    t.throws(function () {
        commondir([ '/x/y/z/w', 'qrs', '/x/y/z' ]);
    });
    t.end();
});

test('base', function (t) {
    t.equal(
        commondir('/foo/bar', [ 'baz', './quux', '../bar/bazzy' ]),
        '/foo/bar'
    );
    t.equal(
        commondir('/a/b', [ 'c', '../b/.', '../../a/b/e' ]),
        '/a/b'
    );
    t.equal(
        commondir('/a/b/c', [ '..', '../d', '../../a/z/e' ]),
        '/a'
    );
    t.equal(
        commondir('/foo/bar', [ 'baz', '.\\\\quux', '..\\\\bar\\\\bazzy' ]),
        '/foo/bar'
    );
    // Tests including X:\\ basedirs must wait until path.resolve supports
    // Windows-style paths, starting in Node.js v0.5.X
    t.end();
});
", "node_modules/commondir/test/dirs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/commondir/test/dirs.js");
    }
}
