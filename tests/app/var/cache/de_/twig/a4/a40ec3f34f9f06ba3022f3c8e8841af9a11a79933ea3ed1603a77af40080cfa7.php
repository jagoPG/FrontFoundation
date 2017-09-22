<?php

/* node_modules/lodash/fp/defaults.js */
class __TwigTemplate_edc270286afce0c6496271f9394f066e6b8846f5c338872248dfa25dddcc8ba9 extends Twig_Template
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
        $__internal_a49de9cc338d88590002f1a4f08d7d007a365fa99380a51ba8a369ee8ae98c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49de9cc338d88590002f1a4f08d7d007a365fa99380a51ba8a369ee8ae98c92->enter($__internal_a49de9cc338d88590002f1a4f08d7d007a365fa99380a51ba8a369ee8ae98c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/defaults.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('defaults', require('../defaults'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_a49de9cc338d88590002f1a4f08d7d007a365fa99380a51ba8a369ee8ae98c92->leave($__internal_a49de9cc338d88590002f1a4f08d7d007a365fa99380a51ba8a369ee8ae98c92_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/defaults.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('defaults', require('../defaults'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/defaults.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/defaults.js");
    }
}
