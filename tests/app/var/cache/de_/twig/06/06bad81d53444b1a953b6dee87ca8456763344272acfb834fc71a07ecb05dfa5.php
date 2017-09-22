<?php

/* node_modules/lodash/fp/isBuffer.js */
class __TwigTemplate_3386c15dfa2a8689ce63ab0ce1a75522f6f5a5c53841e1105fd0c6e71d439022 extends Twig_Template
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
        $__internal_a6b08c5f1043c793af0312434958bcfd7e79a13b33de3ef7c30219c9ab3b9782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b08c5f1043c793af0312434958bcfd7e79a13b33de3ef7c30219c9ab3b9782->enter($__internal_a6b08c5f1043c793af0312434958bcfd7e79a13b33de3ef7c30219c9ab3b9782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isBuffer.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isBuffer', require('../isBuffer'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_a6b08c5f1043c793af0312434958bcfd7e79a13b33de3ef7c30219c9ab3b9782->leave($__internal_a6b08c5f1043c793af0312434958bcfd7e79a13b33de3ef7c30219c9ab3b9782_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isBuffer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isBuffer', require('../isBuffer'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isBuffer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isBuffer.js");
    }
}
