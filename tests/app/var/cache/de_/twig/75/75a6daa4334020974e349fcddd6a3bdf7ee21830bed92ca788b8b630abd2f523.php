<?php

/* node_modules/core-js/modules/_has.js */
class __TwigTemplate_1f1e65e25bae356709f38d5c63857ecee186bd146e9bed21771b482ebed6025f extends Twig_Template
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
        $__internal_91489414ba8f511e0c5ccc10d8da676d9c4394b871371d2a5488507447c2ec3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91489414ba8f511e0c5ccc10d8da676d9c4394b871371d2a5488507447c2ec3b->enter($__internal_91489414ba8f511e0c5ccc10d8da676d9c4394b871371d2a5488507447c2ec3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_has.js"));

        // line 1
        echo "var hasOwnProperty = {}.hasOwnProperty;
module.exports = function (it, key) {
  return hasOwnProperty.call(it, key);
};
";
        
        $__internal_91489414ba8f511e0c5ccc10d8da676d9c4394b871371d2a5488507447c2ec3b->leave($__internal_91489414ba8f511e0c5ccc10d8da676d9c4394b871371d2a5488507447c2ec3b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_has.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var hasOwnProperty = {}.hasOwnProperty;
module.exports = function (it, key) {
  return hasOwnProperty.call(it, key);
};
", "node_modules/core-js/modules/_has.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_has.js");
    }
}
