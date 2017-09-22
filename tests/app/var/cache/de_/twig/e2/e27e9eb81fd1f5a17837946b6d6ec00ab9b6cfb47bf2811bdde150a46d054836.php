<?php

/* node_modules/lodash/fp/spreadFrom.js */
class __TwigTemplate_1182e93442b4edd8a0c10a10a6a2281ed20b2afb153bdce86f01a2110ac27d0d extends Twig_Template
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
        $__internal_8b74fe169e631b737763ed7278cfaf2a45e3c9f8b0f850d2883052a6316411ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b74fe169e631b737763ed7278cfaf2a45e3c9f8b0f850d2883052a6316411ba->enter($__internal_8b74fe169e631b737763ed7278cfaf2a45e3c9f8b0f850d2883052a6316411ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/spreadFrom.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('spreadFrom', require('../spread'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_8b74fe169e631b737763ed7278cfaf2a45e3c9f8b0f850d2883052a6316411ba->leave($__internal_8b74fe169e631b737763ed7278cfaf2a45e3c9f8b0f850d2883052a6316411ba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/spreadFrom.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('spreadFrom', require('../spread'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/spreadFrom.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/spreadFrom.js");
    }
}
