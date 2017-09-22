<?php

/* node_modules/json5/lib/cli.js */
class __TwigTemplate_4e003e19866173f74c2d4b2ec3d04541b6a2f0c44881313ad8c1df5b51c62643 extends Twig_Template
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
        $__internal_e3f7f869320b107d03b3de262da16ed22d039ce7561abdddf124e3168442ac66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f7f869320b107d03b3de262da16ed22d039ce7561abdddf124e3168442ac66->enter($__internal_e3f7f869320b107d03b3de262da16ed22d039ce7561abdddf124e3168442ac66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json5/lib/cli.js"));

        // line 1
        echo "#!/usr/bin/env node

// cli.js
// JSON5 command-line interface.
//
// This is pretty minimal for now; just supports compiling files via `-c`.
// TODO More useful functionality, like output path, watch, etc.?

var FS = require('fs');
var JSON5 = require('./json5');
var Path = require('path');

var USAGE = [
    'Usage: json5 -c path/to/file.json5 ...',
    'Compiles JSON5 files into sibling JSON files with the same basenames.',
].join('\\n');

// if valid, args look like [node, json5, -c, file1, file2, ...]
var args = process.argv;

if (args.length < 4 || args[2] !== '-c') {
    console.error(USAGE);
    process.exit(1);
}

var cwd = process.cwd();
var files = args.slice(3);

// iterate over each file and convert JSON5 files to JSON:
files.forEach(function (file) {
    var path = Path.resolve(cwd, file);
    var basename = Path.basename(path, '.json5');
    var dirname = Path.dirname(path);

    var json5 = FS.readFileSync(path, 'utf8');
    var obj = JSON5.parse(json5);
    var json = JSON.stringify(obj, null, 4); // 4 spaces; TODO configurable?

    path = Path.join(dirname, basename + '.json');
    FS.writeFileSync(path, json, 'utf8');
});
";
        
        $__internal_e3f7f869320b107d03b3de262da16ed22d039ce7561abdddf124e3168442ac66->leave($__internal_e3f7f869320b107d03b3de262da16ed22d039ce7561abdddf124e3168442ac66_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json5/lib/cli.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node

// cli.js
// JSON5 command-line interface.
//
// This is pretty minimal for now; just supports compiling files via `-c`.
// TODO More useful functionality, like output path, watch, etc.?

var FS = require('fs');
var JSON5 = require('./json5');
var Path = require('path');

var USAGE = [
    'Usage: json5 -c path/to/file.json5 ...',
    'Compiles JSON5 files into sibling JSON files with the same basenames.',
].join('\\n');

// if valid, args look like [node, json5, -c, file1, file2, ...]
var args = process.argv;

if (args.length < 4 || args[2] !== '-c') {
    console.error(USAGE);
    process.exit(1);
}

var cwd = process.cwd();
var files = args.slice(3);

// iterate over each file and convert JSON5 files to JSON:
files.forEach(function (file) {
    var path = Path.resolve(cwd, file);
    var basename = Path.basename(path, '.json5');
    var dirname = Path.dirname(path);

    var json5 = FS.readFileSync(path, 'utf8');
    var obj = JSON5.parse(json5);
    var json = JSON.stringify(obj, null, 4); // 4 spaces; TODO configurable?

    path = Path.join(dirname, basename + '.json');
    FS.writeFileSync(path, json, 'utf8');
});
", "node_modules/json5/lib/cli.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json5/lib/cli.js");
    }
}
