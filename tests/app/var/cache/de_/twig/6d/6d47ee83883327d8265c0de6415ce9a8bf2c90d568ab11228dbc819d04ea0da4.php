<?php

/* node_modules/core-js/library/modules/_has.js */
class __TwigTemplate_24b9f4012eb6e09e097964c32c7046b59bc430f0f75dd79410c8f54e50b8eb87 extends Twig_Template
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
        $__internal_26abc20eb61ed3b6fc8052d35a2cfd944cd942b0891c38b10a98650c66621a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26abc20eb61ed3b6fc8052d35a2cfd944cd942b0891c38b10a98650c66621a29->enter($__internal_26abc20eb61ed3b6fc8052d35a2cfd944cd942b0891c38b10a98650c66621a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_has.js"));

        // line 1
        echo "var hasOwnProperty = {}.hasOwnProperty;
module.exports = function (it, key) {
  return hasOwnProperty.call(it, key);
};
";
        
        $__internal_26abc20eb61ed3b6fc8052d35a2cfd944cd942b0891c38b10a98650c66621a29->leave($__internal_26abc20eb61ed3b6fc8052d35a2cfd944cd942b0891c38b10a98650c66621a29_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_has.js";
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
", "node_modules/core-js/library/modules/_has.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_has.js");
    }
}
