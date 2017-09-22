<?php

/* node_modules/core-js/modules/_math-log1p.js */
class __TwigTemplate_4c7ea87c3fb953ce3b6e69a03a1e365fb8bc7d06f987b3dbb9e5ccdd78070ed2 extends Twig_Template
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
        $__internal_43347fddae452671abe833a3e865a91a71c987464823261d2a546d21df15fed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43347fddae452671abe833a3e865a91a71c987464823261d2a546d21df15fed5->enter($__internal_43347fddae452671abe833a3e865a91a71c987464823261d2a546d21df15fed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_math-log1p.js"));

        // line 1
        echo "// 20.2.2.20 Math.log1p(x)
module.exports = Math.log1p || function log1p(x) {
  return (x = +x) > -1e-8 && x < 1e-8 ? x - x * x / 2 : Math.log(1 + x);
};
";
        
        $__internal_43347fddae452671abe833a3e865a91a71c987464823261d2a546d21df15fed5->leave($__internal_43347fddae452671abe833a3e865a91a71c987464823261d2a546d21df15fed5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_math-log1p.js";
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
", "node_modules/core-js/modules/_math-log1p.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_math-log1p.js");
    }
}
