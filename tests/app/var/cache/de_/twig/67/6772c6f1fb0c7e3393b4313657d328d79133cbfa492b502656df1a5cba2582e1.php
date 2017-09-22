<?php

/* node_modules/resolve/lib/node-modules-paths.js */
class __TwigTemplate_fb9b248da014ff056d88cf66cebe534e277c9e99e2aacee3148a81734901b3eb extends Twig_Template
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
        $__internal_0fc5d37b1bbfe067e3911b5150ca44602725d9cfab5f1db716c926c676018c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc5d37b1bbfe067e3911b5150ca44602725d9cfab5f1db716c926c676018c60->enter($__internal_0fc5d37b1bbfe067e3911b5150ca44602725d9cfab5f1db716c926c676018c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/lib/node-modules-paths.js"));

        // line 1
        echo "var path = require('path');
var fs = require('fs');
var parse = path.parse || require('path-parse');

module.exports = function nodeModulesPaths(start, opts) {
    var modules = opts && opts.moduleDirectory
        ? [].concat(opts.moduleDirectory)
        : ['node_modules'];

    // ensure that `start` is an absolute path at this point,
    // resolving against the process' current working directory
    var absoluteStart = path.resolve(start);

    if (opts && opts.preserveSymlinks === false) {
        try {
            absoluteStart = fs.realpathSync(absoluteStart);
        } catch (err) {
            if (err.code !== 'ENOENT') {
                throw err;
            }
        }
    }

    var prefix = '/';
    if (/^([A-Za-z]:)/.test(absoluteStart)) {
        prefix = '';
    } else if (/^\\\\\\\\/.test(absoluteStart)) {
        prefix = '\\\\\\\\';
    }

    var paths = [absoluteStart];
    var parsed = parse(absoluteStart);
    while (parsed.dir !== paths[paths.length - 1]) {
        paths.push(parsed.dir);
        parsed = parse(parsed.dir);
    }

    var dirs = paths.reduce(function (dirs, aPath) {
        return dirs.concat(modules.map(function (moduleDir) {
            return path.join(prefix, aPath, moduleDir);
        }));
    }, []);

    return opts && opts.paths ? dirs.concat(opts.paths) : dirs;
};
";
        
        $__internal_0fc5d37b1bbfe067e3911b5150ca44602725d9cfab5f1db716c926c676018c60->leave($__internal_0fc5d37b1bbfe067e3911b5150ca44602725d9cfab5f1db716c926c676018c60_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/lib/node-modules-paths.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var path = require('path');
var fs = require('fs');
var parse = path.parse || require('path-parse');

module.exports = function nodeModulesPaths(start, opts) {
    var modules = opts && opts.moduleDirectory
        ? [].concat(opts.moduleDirectory)
        : ['node_modules'];

    // ensure that `start` is an absolute path at this point,
    // resolving against the process' current working directory
    var absoluteStart = path.resolve(start);

    if (opts && opts.preserveSymlinks === false) {
        try {
            absoluteStart = fs.realpathSync(absoluteStart);
        } catch (err) {
            if (err.code !== 'ENOENT') {
                throw err;
            }
        }
    }

    var prefix = '/';
    if (/^([A-Za-z]:)/.test(absoluteStart)) {
        prefix = '';
    } else if (/^\\\\\\\\/.test(absoluteStart)) {
        prefix = '\\\\\\\\';
    }

    var paths = [absoluteStart];
    var parsed = parse(absoluteStart);
    while (parsed.dir !== paths[paths.length - 1]) {
        paths.push(parsed.dir);
        parsed = parse(parsed.dir);
    }

    var dirs = paths.reduce(function (dirs, aPath) {
        return dirs.concat(modules.map(function (moduleDir) {
            return path.join(prefix, aPath, moduleDir);
        }));
    }, []);

    return opts && opts.paths ? dirs.concat(opts.paths) : dirs;
};
", "node_modules/resolve/lib/node-modules-paths.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/lib/node-modules-paths.js");
    }
}
