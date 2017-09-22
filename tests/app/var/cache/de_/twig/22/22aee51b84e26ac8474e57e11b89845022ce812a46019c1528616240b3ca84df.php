<?php

/* node_modules/mkdirp/bin/cmd.js */
class __TwigTemplate_bd7f1422632fb150a9f977c99835d1e8266c7c641e255cb44b903326e095fd35 extends Twig_Template
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
        $__internal_afae6a6b247dabdbd0e117854008ef1f914fd3de7e9a9e01659e9f41e9161add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afae6a6b247dabdbd0e117854008ef1f914fd3de7e9a9e01659e9f41e9161add->enter($__internal_afae6a6b247dabdbd0e117854008ef1f914fd3de7e9a9e01659e9f41e9161add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/bin/cmd.js"));

        // line 1
        echo "#!/usr/bin/env node

var mkdirp = require('../');
var minimist = require('minimist');
var fs = require('fs');

var argv = minimist(process.argv.slice(2), {
    alias: { m: 'mode', h: 'help' },
    string: [ 'mode' ]
});
if (argv.help) {
    fs.createReadStream(__dirname + '/usage.txt').pipe(process.stdout);
    return;
}

var paths = argv._.slice();
var mode = argv.mode ? parseInt(argv.mode, 8) : undefined;

(function next () {
    if (paths.length === 0) return;
    var p = paths.shift();
    
    if (mode === undefined) mkdirp(p, cb)
    else mkdirp(p, mode, cb)
    
    function cb (err) {
        if (err) {
            console.error(err.message);
            process.exit(1);
        }
        else next();
    }
})();
";
        
        $__internal_afae6a6b247dabdbd0e117854008ef1f914fd3de7e9a9e01659e9f41e9161add->leave($__internal_afae6a6b247dabdbd0e117854008ef1f914fd3de7e9a9e01659e9f41e9161add_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/bin/cmd.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node

var mkdirp = require('../');
var minimist = require('minimist');
var fs = require('fs');

var argv = minimist(process.argv.slice(2), {
    alias: { m: 'mode', h: 'help' },
    string: [ 'mode' ]
});
if (argv.help) {
    fs.createReadStream(__dirname + '/usage.txt').pipe(process.stdout);
    return;
}

var paths = argv._.slice();
var mode = argv.mode ? parseInt(argv.mode, 8) : undefined;

(function next () {
    if (paths.length === 0) return;
    var p = paths.shift();
    
    if (mode === undefined) mkdirp(p, cb)
    else mkdirp(p, mode, cb)
    
    function cb (err) {
        if (err) {
            console.error(err.message);
            process.exit(1);
        }
        else next();
    }
})();
", "node_modules/mkdirp/bin/cmd.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/bin/cmd.js");
    }
}
