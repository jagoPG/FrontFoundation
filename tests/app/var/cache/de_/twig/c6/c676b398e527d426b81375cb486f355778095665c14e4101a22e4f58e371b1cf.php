<?php

/* node_modules/lodash/_reInterpolate.js */
class __TwigTemplate_170b1354b601b043bd871ebb5533c4e78b51f7f0ae2587097e9dfe3d20569995 extends Twig_Template
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
        $__internal_096da6495d300d11822707165fe8f9538ca31e4b1f7a9ef029480addd7dd756f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096da6495d300d11822707165fe8f9538ca31e4b1f7a9ef029480addd7dd756f->enter($__internal_096da6495d300d11822707165fe8f9538ca31e4b1f7a9ef029480addd7dd756f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_reInterpolate.js"));

        // line 1
        echo "/** Used to match template delimiters. */
var reInterpolate = /<%=([\\s\\S]+?)%>/g;

module.exports = reInterpolate;
";
        
        $__internal_096da6495d300d11822707165fe8f9538ca31e4b1f7a9ef029480addd7dd756f->leave($__internal_096da6495d300d11822707165fe8f9538ca31e4b1f7a9ef029480addd7dd756f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_reInterpolate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used to match template delimiters. */
var reInterpolate = /<%=([\\s\\S]+?)%>/g;

module.exports = reInterpolate;
", "node_modules/lodash/_reInterpolate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_reInterpolate.js");
    }
}
