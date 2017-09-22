<?php

/* node_modules/resolve/test/symlinks.js */
class __TwigTemplate_c50e8d026114866c99633c2df541a68f54577729a7cbff8687da23f39dbc9458 extends Twig_Template
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
        $__internal_0037d95092e929949677e25397a3864183776deccdfe60598ab98e6795cced73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0037d95092e929949677e25397a3864183776deccdfe60598ab98e6795cced73->enter($__internal_0037d95092e929949677e25397a3864183776deccdfe60598ab98e6795cced73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/symlinks.js"));

        // line 1
        echo "var path = require('path');
var fs = require('fs');
var test = require('tape');
var resolve = require('../');

var symlinkDir = path.join(__dirname, 'resolver', 'symlinked', 'symlink');
try {
    fs.unlinkSync(symlinkDir);
} catch (err) {}
try {
    fs.symlinkSync('./_/symlink_target', symlinkDir, 'dir');
} catch (err) {
    // if fails then it is probably on Windows and lets try to create a junction
    fs.symlinkSync(path.join(__dirname, 'resolver', 'symlinked', '_', 'symlink_target') + '\\\\', symlinkDir, 'junction');
}

test('symlink', function (t) {
    t.plan(1);

    resolve('foo', { basedir: symlinkDir, preserveSymlinks: false }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(__dirname, 'resolver', 'symlinked', '_', 'node_modules', 'foo.js'));
    });
});

test('sync symlink when preserveSymlinks = true', function (t) {
    t.plan(4);

    resolve('foo', { basedir: symlinkDir }, function (err, res, pkg) {
        t.ok(err, 'there is an error');
        t.notOk(res, 'no result');

        t.equal(err && err.code, 'MODULE_NOT_FOUND', 'error code matches require.resolve');
        t.equal(
            err && err.message,
            'Cannot find module \\'foo\\' from \\'' + symlinkDir + '\\'',
            'can not find nonexistent module'
        );
    });
});

test('sync symlink', function (t) {
    var start = new Date();
    t.equal(resolve.sync('foo', { basedir: symlinkDir, preserveSymlinks: false }), path.join(__dirname, 'resolver', 'symlinked', '_', 'node_modules', 'foo.js'));
    t.ok(new Date() - start < 50, 'resolve.sync timedout');
    t.end();
});

test('sync symlink when preserveSymlinks = true', function (t) {
    t.throws(function () {
        resolve.sync('foo', { basedir: symlinkDir });
    }, /Cannot find module 'foo'/);
    t.end();
});
";
        
        $__internal_0037d95092e929949677e25397a3864183776deccdfe60598ab98e6795cced73->leave($__internal_0037d95092e929949677e25397a3864183776deccdfe60598ab98e6795cced73_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/symlinks.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var path = require('path');
var fs = require('fs');
var test = require('tape');
var resolve = require('../');

var symlinkDir = path.join(__dirname, 'resolver', 'symlinked', 'symlink');
try {
    fs.unlinkSync(symlinkDir);
} catch (err) {}
try {
    fs.symlinkSync('./_/symlink_target', symlinkDir, 'dir');
} catch (err) {
    // if fails then it is probably on Windows and lets try to create a junction
    fs.symlinkSync(path.join(__dirname, 'resolver', 'symlinked', '_', 'symlink_target') + '\\\\', symlinkDir, 'junction');
}

test('symlink', function (t) {
    t.plan(1);

    resolve('foo', { basedir: symlinkDir, preserveSymlinks: false }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(__dirname, 'resolver', 'symlinked', '_', 'node_modules', 'foo.js'));
    });
});

test('sync symlink when preserveSymlinks = true', function (t) {
    t.plan(4);

    resolve('foo', { basedir: symlinkDir }, function (err, res, pkg) {
        t.ok(err, 'there is an error');
        t.notOk(res, 'no result');

        t.equal(err && err.code, 'MODULE_NOT_FOUND', 'error code matches require.resolve');
        t.equal(
            err && err.message,
            'Cannot find module \\'foo\\' from \\'' + symlinkDir + '\\'',
            'can not find nonexistent module'
        );
    });
});

test('sync symlink', function (t) {
    var start = new Date();
    t.equal(resolve.sync('foo', { basedir: symlinkDir, preserveSymlinks: false }), path.join(__dirname, 'resolver', 'symlinked', '_', 'node_modules', 'foo.js'));
    t.ok(new Date() - start < 50, 'resolve.sync timedout');
    t.end();
});

test('sync symlink when preserveSymlinks = true', function (t) {
    t.throws(function () {
        resolve.sync('foo', { basedir: symlinkDir });
    }, /Cannot find module 'foo'/);
    t.end();
});
", "node_modules/resolve/test/symlinks.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/symlinks.js");
    }
}
