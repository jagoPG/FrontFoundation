<?php

/* node_modules/core-js/fn/typed/float64-array.js */
class __TwigTemplate_958aeda2dae24fa796df9d4fbdb823169763210a08dbb2c6a57310e31fbdc0c2 extends Twig_Template
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
        $__internal_c948b21634234f070a960e239934215318529df31c062b70aed8aa164576536c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c948b21634234f070a960e239934215318529df31c062b70aed8aa164576536c->enter($__internal_c948b21634234f070a960e239934215318529df31c062b70aed8aa164576536c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/typed/float64-array.js"));

        // line 1
        echo "require('../../modules/es6.typed.float64-array');
module.exports = require('../../modules/_core').Float64Array;
";
        
        $__internal_c948b21634234f070a960e239934215318529df31c062b70aed8aa164576536c->leave($__internal_c948b21634234f070a960e239934215318529df31c062b70aed8aa164576536c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/typed/float64-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.typed.float64-array');
module.exports = require('../../modules/_core').Float64Array;
", "node_modules/core-js/fn/typed/float64-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/typed/float64-array.js");
    }
}
