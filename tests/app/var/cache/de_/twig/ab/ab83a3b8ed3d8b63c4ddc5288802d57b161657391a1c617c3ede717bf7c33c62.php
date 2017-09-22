<?php

/* node_modules/lodash/fp/endsWith.js */
class __TwigTemplate_7296e389180a32b471b6cd1d8f575783364a2aed669e2b441a70e0d290ac97ae extends Twig_Template
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
        $__internal_ffa1ef5d8a2fe4642337720f7d4787d1d2ae63a9afeb9b43ccab489df6b0f003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa1ef5d8a2fe4642337720f7d4787d1d2ae63a9afeb9b43ccab489df6b0f003->enter($__internal_ffa1ef5d8a2fe4642337720f7d4787d1d2ae63a9afeb9b43ccab489df6b0f003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/endsWith.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('endsWith', require('../endsWith'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_ffa1ef5d8a2fe4642337720f7d4787d1d2ae63a9afeb9b43ccab489df6b0f003->leave($__internal_ffa1ef5d8a2fe4642337720f7d4787d1d2ae63a9afeb9b43ccab489df6b0f003_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/endsWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('endsWith', require('../endsWith'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/endsWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/endsWith.js");
    }
}
