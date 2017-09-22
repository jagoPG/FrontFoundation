<?php

/* node_modules/core-js/library/modules/_math-sign.js */
class __TwigTemplate_f4cddbefe89259f0f3b3c090a6a7827144e97226050df5a9327d6230e9918845 extends Twig_Template
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
        $__internal_b53a7065526d36a521c1fa945d4d1737898ad7b1fbbf3215334fd76e0bfc94fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53a7065526d36a521c1fa945d4d1737898ad7b1fbbf3215334fd76e0bfc94fe->enter($__internal_b53a7065526d36a521c1fa945d4d1737898ad7b1fbbf3215334fd76e0bfc94fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_math-sign.js"));

        // line 1
        echo "// 20.2.2.28 Math.sign(x)
module.exports = Math.sign || function sign(x) {
  // eslint-disable-next-line no-self-compare
  return (x = +x) == 0 || x != x ? x : x < 0 ? -1 : 1;
};
";
        
        $__internal_b53a7065526d36a521c1fa945d4d1737898ad7b1fbbf3215334fd76e0bfc94fe->leave($__internal_b53a7065526d36a521c1fa945d4d1737898ad7b1fbbf3215334fd76e0bfc94fe_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_math-sign.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.28 Math.sign(x)
module.exports = Math.sign || function sign(x) {
  // eslint-disable-next-line no-self-compare
  return (x = +x) == 0 || x != x ? x : x < 0 ? -1 : 1;
};
", "node_modules/core-js/library/modules/_math-sign.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_math-sign.js");
    }
}
