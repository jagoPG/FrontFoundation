<?php

/* node_modules/core-js/fn/math/clz32.js */
class __TwigTemplate_6f38b4ffb5993c40bb42f1ba410c90ddbf9eae0aa4ef0deaa1e00022058ca51a extends Twig_Template
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
        $__internal_f85df97b3aa657b77d030ec637f2b2c223c1194f506b48aea58b888d7bd49d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85df97b3aa657b77d030ec637f2b2c223c1194f506b48aea58b888d7bd49d5b->enter($__internal_f85df97b3aa657b77d030ec637f2b2c223c1194f506b48aea58b888d7bd49d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/math/clz32.js"));

        // line 1
        echo "require('../../modules/es6.math.clz32');
module.exports = require('../../modules/_core').Math.clz32;
";
        
        $__internal_f85df97b3aa657b77d030ec637f2b2c223c1194f506b48aea58b888d7bd49d5b->leave($__internal_f85df97b3aa657b77d030ec637f2b2c223c1194f506b48aea58b888d7bd49d5b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/math/clz32.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.math.clz32');
module.exports = require('../../modules/_core').Math.clz32;
", "node_modules/core-js/fn/math/clz32.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/math/clz32.js");
    }
}
