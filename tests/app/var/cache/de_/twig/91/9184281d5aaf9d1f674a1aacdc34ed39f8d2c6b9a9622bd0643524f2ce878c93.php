<?php

/* node_modules/core-js/library/fn/array/push.js */
class __TwigTemplate_0932b5a27fe7142b7c6a15a5bf0c81eaa7315e08e173b89c6d169327c4479d63 extends Twig_Template
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
        $__internal_e5fa47c293788f2aecbc4813b13043fce4e7a0bca4f7c429c097f381394cef7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fa47c293788f2aecbc4813b13043fce4e7a0bca4f7c429c097f381394cef7b->enter($__internal_e5fa47c293788f2aecbc4813b13043fce4e7a0bca4f7c429c097f381394cef7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/push.js"));

        // line 1
        echo "// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.push, arguments);
};
";
        
        $__internal_e5fa47c293788f2aecbc4813b13043fce4e7a0bca4f7c429c097f381394cef7b->leave($__internal_e5fa47c293788f2aecbc4813b13043fce4e7a0bca4f7c429c097f381394cef7b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/push.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.push, arguments);
};
", "node_modules/core-js/library/fn/array/push.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/push.js");
    }
}
