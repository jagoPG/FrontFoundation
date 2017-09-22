<?php

/* node_modules/lodash/fp/isObjectLike.js */
class __TwigTemplate_5a77eb9b594c1e68cbebe388827fb58b1e207e01874717ace0be31a3cf41150c extends Twig_Template
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
        $__internal_270d471f4014eea89c69f8f6d177981213fe9fe0eeaf924be29335dae2d88563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270d471f4014eea89c69f8f6d177981213fe9fe0eeaf924be29335dae2d88563->enter($__internal_270d471f4014eea89c69f8f6d177981213fe9fe0eeaf924be29335dae2d88563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isObjectLike.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isObjectLike', require('../isObjectLike'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_270d471f4014eea89c69f8f6d177981213fe9fe0eeaf924be29335dae2d88563->leave($__internal_270d471f4014eea89c69f8f6d177981213fe9fe0eeaf924be29335dae2d88563_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isObjectLike.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isObjectLike', require('../isObjectLike'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isObjectLike.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isObjectLike.js");
    }
}
