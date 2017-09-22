<?php

/* node_modules/tape/test/max_listeners.js */
class __TwigTemplate_5eba4b5a3695c87ad77fef15da261592ecc42875246840dd975e883819993285 extends Twig_Template
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
        $__internal_43afdf73a3751aae78cde31aefa6e7a60a38ed9e623953bcb08821b777877f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43afdf73a3751aae78cde31aefa6e7a60a38ed9e623953bcb08821b777877f58->enter($__internal_43afdf73a3751aae78cde31aefa6e7a60a38ed9e623953bcb08821b777877f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/max_listeners.js"));

        // line 1
        echo "var spawn = require('child_process').spawn;
var path = require('path');

var ps = spawn(process.execPath, [path.join(__dirname, 'max_listeners', 'source.js')]);

ps.stdout.pipe(process.stdout, { end : false });

ps.stderr.on('data', function (buf) {
    console.log('not ok ' + buf);
});
";
        
        $__internal_43afdf73a3751aae78cde31aefa6e7a60a38ed9e623953bcb08821b777877f58->leave($__internal_43afdf73a3751aae78cde31aefa6e7a60a38ed9e623953bcb08821b777877f58_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/max_listeners.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var spawn = require('child_process').spawn;
var path = require('path');

var ps = spawn(process.execPath, [path.join(__dirname, 'max_listeners', 'source.js')]);

ps.stdout.pipe(process.stdout, { end : false });

ps.stderr.on('data', function (buf) {
    console.log('not ok ' + buf);
});
", "node_modules/tape/test/max_listeners.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/max_listeners.js");
    }
}
