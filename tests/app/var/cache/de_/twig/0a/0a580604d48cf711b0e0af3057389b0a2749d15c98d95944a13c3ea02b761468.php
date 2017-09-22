<?php

/* node_modules/lodash/fp/countBy.js */
class __TwigTemplate_9ab478c084d8ffc91d86e02dd908ced1cd98974f779f86e5f42650fb4d187ddb extends Twig_Template
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
        $__internal_8923434219b73d04b8f0db450247dae8bb996fd71034140a188ff96d6aaeb2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8923434219b73d04b8f0db450247dae8bb996fd71034140a188ff96d6aaeb2e7->enter($__internal_8923434219b73d04b8f0db450247dae8bb996fd71034140a188ff96d6aaeb2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/countBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('countBy', require('../countBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_8923434219b73d04b8f0db450247dae8bb996fd71034140a188ff96d6aaeb2e7->leave($__internal_8923434219b73d04b8f0db450247dae8bb996fd71034140a188ff96d6aaeb2e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/countBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('countBy', require('../countBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/countBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/countBy.js");
    }
}
