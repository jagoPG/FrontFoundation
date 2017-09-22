<?php

/* node_modules/tape/bin/tape */
class __TwigTemplate_221f4543e58740effb1396f9a2a2bc2289d33f8dbcc3083d0def0dd605c864e3 extends Twig_Template
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
        $__internal_ae3d335892ca6772abb40bb9c68dc5c07ca62f1b56a20937fd4a251a3dab81ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3d335892ca6772abb40bb9c68dc5c07ca62f1b56a20937fd4a251a3dab81ef->enter($__internal_ae3d335892ca6772abb40bb9c68dc5c07ca62f1b56a20937fd4a251a3dab81ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/bin/tape"));

        // line 1
        echo "#!/usr/bin/env node

var resolveModule = require('resolve').sync;
var resolvePath = require('path').resolve;
var parseOpts = require('minimist');
var glob = require('glob');

var opts = parseOpts(process.argv.slice(2), {
        alias: { r: 'require' },
        string: 'require',
        default: { r: [] }
    });

var cwd = process.cwd();

if (typeof opts.require === 'string') {
    opts.require = [opts.require];
}

opts.require.forEach(function(module) {
    if (module) {
      /* This check ensures we ignore `-r \"\"`, trailing `-r`, or
       * other silly things the user might (inadvertently) be doing. */
      require(resolveModule(module, { basedir: cwd }));
    }
});

opts._.forEach(function (arg) {
    // If glob does not match, `files` will be an empty array.
    // Note: `glob.sync` may throw an error and crash the node process.
    var files = glob.sync(arg);

    if (!Array.isArray(files)) {
      throw new TypeError('unknown error: glob.sync did not return an array or throw. Please report this.');
    }

    files.forEach(function (file) {
        require(resolvePath(cwd, file));
    });
});

// vim: ft=javascript
";
        
        $__internal_ae3d335892ca6772abb40bb9c68dc5c07ca62f1b56a20937fd4a251a3dab81ef->leave($__internal_ae3d335892ca6772abb40bb9c68dc5c07ca62f1b56a20937fd4a251a3dab81ef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/bin/tape";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node

var resolveModule = require('resolve').sync;
var resolvePath = require('path').resolve;
var parseOpts = require('minimist');
var glob = require('glob');

var opts = parseOpts(process.argv.slice(2), {
        alias: { r: 'require' },
        string: 'require',
        default: { r: [] }
    });

var cwd = process.cwd();

if (typeof opts.require === 'string') {
    opts.require = [opts.require];
}

opts.require.forEach(function(module) {
    if (module) {
      /* This check ensures we ignore `-r \"\"`, trailing `-r`, or
       * other silly things the user might (inadvertently) be doing. */
      require(resolveModule(module, { basedir: cwd }));
    }
});

opts._.forEach(function (arg) {
    // If glob does not match, `files` will be an empty array.
    // Note: `glob.sync` may throw an error and crash the node process.
    var files = glob.sync(arg);

    if (!Array.isArray(files)) {
      throw new TypeError('unknown error: glob.sync did not return an array or throw. Please report this.');
    }

    files.forEach(function (file) {
        require(resolvePath(cwd, file));
    });
});

// vim: ft=javascript
", "node_modules/tape/bin/tape", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/bin/tape");
    }
}
