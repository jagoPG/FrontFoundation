<?php

/* node_modules/isarray/index.js */
class __TwigTemplate_7ee0add84b8f3de4cb6586f97033ab3d7c24b6ad48a5d4804b06bf90b52e8ba9 extends Twig_Template
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
        $__internal_2f412912238a3a62f46646febf7931de6f1df930f7c806d33385fd7e98eaf47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f412912238a3a62f46646febf7931de6f1df930f7c806d33385fd7e98eaf47b->enter($__internal_2f412912238a3a62f46646febf7931de6f1df930f7c806d33385fd7e98eaf47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/isarray/index.js"));

        // line 1
        echo "var toString = {}.toString;

module.exports = Array.isArray || function (arr) {
  return toString.call(arr) == '[object Array]';
};
";
        
        $__internal_2f412912238a3a62f46646febf7931de6f1df930f7c806d33385fd7e98eaf47b->leave($__internal_2f412912238a3a62f46646febf7931de6f1df930f7c806d33385fd7e98eaf47b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/isarray/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toString = {}.toString;

module.exports = Array.isArray || function (arr) {
  return toString.call(arr) == '[object Array]';
};
", "node_modules/isarray/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/isarray/index.js");
    }
}
