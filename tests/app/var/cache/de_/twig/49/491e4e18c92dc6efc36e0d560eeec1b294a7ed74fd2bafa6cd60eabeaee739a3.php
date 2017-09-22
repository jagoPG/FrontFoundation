<?php

/* node_modules/core-js/library/modules/_math-log1p.js */
class __TwigTemplate_17dd1a50337fe71f629236909c8bdb7925a123c1ab45239c2273cc0db5b7846b extends Twig_Template
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
        $__internal_b569adbb0a392d4db943a3937970918b7b2be230caa69e5c5b2c4c90bec7f1fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b569adbb0a392d4db943a3937970918b7b2be230caa69e5c5b2c4c90bec7f1fe->enter($__internal_b569adbb0a392d4db943a3937970918b7b2be230caa69e5c5b2c4c90bec7f1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_math-log1p.js"));

        // line 1
        echo "// 20.2.2.20 Math.log1p(x)
module.exports = Math.log1p || function log1p(x) {
  return (x = +x) > -1e-8 && x < 1e-8 ? x - x * x / 2 : Math.log(1 + x);
};
";
        
        $__internal_b569adbb0a392d4db943a3937970918b7b2be230caa69e5c5b2c4c90bec7f1fe->leave($__internal_b569adbb0a392d4db943a3937970918b7b2be230caa69e5c5b2c4c90bec7f1fe_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_math-log1p.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.20 Math.log1p(x)
module.exports = Math.log1p || function log1p(x) {
  return (x = +x) > -1e-8 && x < 1e-8 ? x - x * x / 2 : Math.log(1 + x);
};
", "node_modules/core-js/library/modules/_math-log1p.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_math-log1p.js");
    }
}
