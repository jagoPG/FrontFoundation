<?php

/* node_modules/lodash/fp/sortedLastIndexBy.js */
class __TwigTemplate_fc044744162b2b25cdc4f56a80296c24b7c80bcc8a2aa8684274abb671765ae0 extends Twig_Template
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
        $__internal_f4f783e0199db2e4361e8b10296dba2e8c886e73cc5d92a89b47b598326b6525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f783e0199db2e4361e8b10296dba2e8c886e73cc5d92a89b47b598326b6525->enter($__internal_f4f783e0199db2e4361e8b10296dba2e8c886e73cc5d92a89b47b598326b6525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/sortedLastIndexBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('sortedLastIndexBy', require('../sortedLastIndexBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_f4f783e0199db2e4361e8b10296dba2e8c886e73cc5d92a89b47b598326b6525->leave($__internal_f4f783e0199db2e4361e8b10296dba2e8c886e73cc5d92a89b47b598326b6525_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/sortedLastIndexBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('sortedLastIndexBy', require('../sortedLastIndexBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/sortedLastIndexBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/sortedLastIndexBy.js");
    }
}
