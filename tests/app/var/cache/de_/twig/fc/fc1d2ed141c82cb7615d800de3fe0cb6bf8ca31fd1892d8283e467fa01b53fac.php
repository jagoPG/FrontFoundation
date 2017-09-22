<?php

/* node_modules/lodash/fp/shuffle.js */
class __TwigTemplate_354e4263930bcd7d79864db206f865b68d677750372d874729a4afd3de6412be extends Twig_Template
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
        $__internal_628a2720049a545ec37ad537e94986fb08cf395f49f0d7667a94a5afd7779e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628a2720049a545ec37ad537e94986fb08cf395f49f0d7667a94a5afd7779e98->enter($__internal_628a2720049a545ec37ad537e94986fb08cf395f49f0d7667a94a5afd7779e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/shuffle.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('shuffle', require('../shuffle'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_628a2720049a545ec37ad537e94986fb08cf395f49f0d7667a94a5afd7779e98->leave($__internal_628a2720049a545ec37ad537e94986fb08cf395f49f0d7667a94a5afd7779e98_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/shuffle.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('shuffle', require('../shuffle'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/shuffle.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/shuffle.js");
    }
}
