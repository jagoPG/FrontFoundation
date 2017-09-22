<?php

/* node_modules/core-js/fn/object/is-frozen.js */
class __TwigTemplate_fa8a4513baccd14036f6a25c4238b1f1ed50ef2b4bc33750a7ac0d5adbf8783d extends Twig_Template
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
        $__internal_fc04f4fd3ee892842d495dde185738439ad6ff0fb30133ccd0fb72d54b1b3cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc04f4fd3ee892842d495dde185738439ad6ff0fb30133ccd0fb72d54b1b3cee->enter($__internal_fc04f4fd3ee892842d495dde185738439ad6ff0fb30133ccd0fb72d54b1b3cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/is-frozen.js"));

        // line 1
        echo "require('../../modules/es6.object.is-frozen');
module.exports = require('../../modules/_core').Object.isFrozen;
";
        
        $__internal_fc04f4fd3ee892842d495dde185738439ad6ff0fb30133ccd0fb72d54b1b3cee->leave($__internal_fc04f4fd3ee892842d495dde185738439ad6ff0fb30133ccd0fb72d54b1b3cee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/is-frozen.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.is-frozen');
module.exports = require('../../modules/_core').Object.isFrozen;
", "node_modules/core-js/fn/object/is-frozen.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/is-frozen.js");
    }
}
