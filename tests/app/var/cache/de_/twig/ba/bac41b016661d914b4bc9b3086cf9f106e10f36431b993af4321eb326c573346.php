<?php

/* node_modules/resolve/test/mock_sync.js */
class __TwigTemplate_99e071e3a3d6f32a1453cc975c334bbb3a9e774ae92078ba862b41c9a5a26df3 extends Twig_Template
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
        $__internal_87fa7810abc8604e66b3da29b78b98d4ccda5ec492ae7c8a0aed2e5e35e07374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fa7810abc8604e66b3da29b78b98d4ccda5ec492ae7c8a0aed2e5e35e07374->enter($__internal_87fa7810abc8604e66b3da29b78b98d4ccda5ec492ae7c8a0aed2e5e35e07374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/mock_sync.js"));

        // line 1
        echo "var path = require('path');
var test = require('tape');
var resolve = require('../');

test('mock', function (t) {
    t.plan(4);

    var files = {};
    files[path.resolve('/foo/bar/baz.js')] = 'beep';

    function opts(basedir) {
        return {
            basedir: path.resolve(basedir),
            isFile: function (file) {
                return Object.prototype.hasOwnProperty.call(files, file);
            },
            readFileSync: function (file) {
                return files[file];
            }
        };
    }

    t.equal(
        resolve.sync('./baz', opts('/foo/bar')),
        path.resolve('/foo/bar/baz.js')
    );

    t.equal(
        resolve.sync('./baz.js', opts('/foo/bar')),
        path.resolve('/foo/bar/baz.js')
    );

    t.throws(function () {
        resolve.sync('baz', opts('/foo/bar'));
    });

    t.throws(function () {
        resolve.sync('../baz', opts('/foo/bar'));
    });
});

test('mock package', function (t) {
    t.plan(1);

    var files = {};
    files[path.resolve('/foo/node_modules/bar/baz.js')] = 'beep';
    files[path.resolve('/foo/node_modules/bar/package.json')] = JSON.stringify({
        main: './baz.js'
    });

    function opts(basedir) {
        return {
            basedir: path.resolve(basedir),
            isFile: function (file) {
                return Object.prototype.hasOwnProperty.call(files, file);
            },
            readFileSync: function (file) {
                return files[file];
            }
        };
    }

    t.equal(
        resolve.sync('bar', opts('/foo')),
        path.resolve('/foo/node_modules/bar/baz.js')
    );
});
";
        
        $__internal_87fa7810abc8604e66b3da29b78b98d4ccda5ec492ae7c8a0aed2e5e35e07374->leave($__internal_87fa7810abc8604e66b3da29b78b98d4ccda5ec492ae7c8a0aed2e5e35e07374_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/mock_sync.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var path = require('path');
var test = require('tape');
var resolve = require('../');

test('mock', function (t) {
    t.plan(4);

    var files = {};
    files[path.resolve('/foo/bar/baz.js')] = 'beep';

    function opts(basedir) {
        return {
            basedir: path.resolve(basedir),
            isFile: function (file) {
                return Object.prototype.hasOwnProperty.call(files, file);
            },
            readFileSync: function (file) {
                return files[file];
            }
        };
    }

    t.equal(
        resolve.sync('./baz', opts('/foo/bar')),
        path.resolve('/foo/bar/baz.js')
    );

    t.equal(
        resolve.sync('./baz.js', opts('/foo/bar')),
        path.resolve('/foo/bar/baz.js')
    );

    t.throws(function () {
        resolve.sync('baz', opts('/foo/bar'));
    });

    t.throws(function () {
        resolve.sync('../baz', opts('/foo/bar'));
    });
});

test('mock package', function (t) {
    t.plan(1);

    var files = {};
    files[path.resolve('/foo/node_modules/bar/baz.js')] = 'beep';
    files[path.resolve('/foo/node_modules/bar/package.json')] = JSON.stringify({
        main: './baz.js'
    });

    function opts(basedir) {
        return {
            basedir: path.resolve(basedir),
            isFile: function (file) {
                return Object.prototype.hasOwnProperty.call(files, file);
            },
            readFileSync: function (file) {
                return files[file];
            }
        };
    }

    t.equal(
        resolve.sync('bar', opts('/foo')),
        path.resolve('/foo/node_modules/bar/baz.js')
    );
});
", "node_modules/resolve/test/mock_sync.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/mock_sync.js");
    }
}
