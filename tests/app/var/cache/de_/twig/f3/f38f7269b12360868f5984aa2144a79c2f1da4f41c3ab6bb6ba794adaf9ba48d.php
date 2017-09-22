<?php

/* node_modules/core-js/fn/array/push.js */
class __TwigTemplate_a0b306b5904bc8788595330d5d11b3f076dc36ecc09a7be3da8e3c9ebeb83dbc extends Twig_Template
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
        $__internal_2c24232454c08a73931ac1a20c4bc76c372ea8d2b56fa42db44d9b5904e1362c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c24232454c08a73931ac1a20c4bc76c372ea8d2b56fa42db44d9b5904e1362c->enter($__internal_2c24232454c08a73931ac1a20c4bc76c372ea8d2b56fa42db44d9b5904e1362c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/push.js"));

        // line 1
        echo "// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.push, arguments);
};
";
        
        $__internal_2c24232454c08a73931ac1a20c4bc76c372ea8d2b56fa42db44d9b5904e1362c->leave($__internal_2c24232454c08a73931ac1a20c4bc76c372ea8d2b56fa42db44d9b5904e1362c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/push.js";
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
", "node_modules/core-js/fn/array/push.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/push.js");
    }
}
