<?php

/* node_modules/fsevents/node_modules/gauge/set-immediate.js */
class __TwigTemplate_4cd169e572cb0178b5a094b3b00666714499694b94ab4f958efee59d6d026dbf extends Twig_Template
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
        $__internal_06f74cc5b672af01456a4939f6bbe59fb1cf099b78d119fb7b234f1d14d536f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f74cc5b672af01456a4939f6bbe59fb1cf099b78d119fb7b234f1d14d536f3->enter($__internal_06f74cc5b672af01456a4939f6bbe59fb1cf099b78d119fb7b234f1d14d536f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/gauge/set-immediate.js"));

        // line 1
        echo "'use strict'
var process = require('./process')
try {
  module.exports = setImmediate
} catch (ex) {
  module.exports = process.nextTick
}
";
        
        $__internal_06f74cc5b672af01456a4939f6bbe59fb1cf099b78d119fb7b234f1d14d536f3->leave($__internal_06f74cc5b672af01456a4939f6bbe59fb1cf099b78d119fb7b234f1d14d536f3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/gauge/set-immediate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
var process = require('./process')
try {
  module.exports = setImmediate
} catch (ex) {
  module.exports = process.nextTick
}
", "node_modules/fsevents/node_modules/gauge/set-immediate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/gauge/set-immediate.js");
    }
}
