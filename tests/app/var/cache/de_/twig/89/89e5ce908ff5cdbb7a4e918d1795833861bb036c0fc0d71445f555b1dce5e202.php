<?php

/* node_modules/events/tests/legacy-compat.js */
class __TwigTemplate_4a0cfe883b568696914b76059fc26a2ad5e410899f746b151050953990995332 extends Twig_Template
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
        $__internal_daeacf2306e525818ecc793aa2c587ecc971e151a3875f4f967f7ffec37afdb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daeacf2306e525818ecc793aa2c587ecc971e151a3875f4f967f7ffec37afdb0->enter($__internal_daeacf2306e525818ecc793aa2c587ecc971e151a3875f4f967f7ffec37afdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/events/tests/legacy-compat.js"));

        // line 1
        echo "// sigh... life is hard
if (!global.console) {
    console = {}
}

var fns = ['log', 'error', 'trace'];
for (var i=0 ; i<fns.length ; ++i) {
    var fn = fns[i];
    if (!console[fn]) {
        console[fn] = function() {};
    }
}

if (!Array.isArray) {
    Array.isArray = function(arr) {
        return Object.prototype.toString.call(arr) === '[object Array]';
    }
}
";
        
        $__internal_daeacf2306e525818ecc793aa2c587ecc971e151a3875f4f967f7ffec37afdb0->leave($__internal_daeacf2306e525818ecc793aa2c587ecc971e151a3875f4f967f7ffec37afdb0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/events/tests/legacy-compat.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// sigh... life is hard
if (!global.console) {
    console = {}
}

var fns = ['log', 'error', 'trace'];
for (var i=0 ; i<fns.length ; ++i) {
    var fn = fns[i];
    if (!console[fn]) {
        console[fn] = function() {};
    }
}

if (!Array.isArray) {
    Array.isArray = function(arr) {
        return Object.prototype.toString.call(arr) === '[object Array]';
    }
}
", "node_modules/events/tests/legacy-compat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/events/tests/legacy-compat.js");
    }
}
