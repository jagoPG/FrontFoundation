<?php

/* node_modules/lodash/fp/intersectionWith.js */
class __TwigTemplate_b245ba310d720c423b0e3dc778457f346aa17be9e285bc02564b4b717efd9ee9 extends Twig_Template
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
        $__internal_c5823d32fe69133e51430fc178bec41bf321a14ea212f6b163eac5722960da84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5823d32fe69133e51430fc178bec41bf321a14ea212f6b163eac5722960da84->enter($__internal_c5823d32fe69133e51430fc178bec41bf321a14ea212f6b163eac5722960da84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/intersectionWith.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('intersectionWith', require('../intersectionWith'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_c5823d32fe69133e51430fc178bec41bf321a14ea212f6b163eac5722960da84->leave($__internal_c5823d32fe69133e51430fc178bec41bf321a14ea212f6b163eac5722960da84_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/intersectionWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('intersectionWith', require('../intersectionWith'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/intersectionWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/intersectionWith.js");
    }
}
