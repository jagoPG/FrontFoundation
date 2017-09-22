<?php

/* node_modules/core-js/modules/_math-sign.js */
class __TwigTemplate_009aa3d42bfc43eddc812d1bc7d5834325a842f33d02429c3daf73ee645ba505 extends Twig_Template
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
        $__internal_d96e867dfc74ce1074da7583bad0b72b4010f0bdf7b3dbccc4e1ae5ab324484c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96e867dfc74ce1074da7583bad0b72b4010f0bdf7b3dbccc4e1ae5ab324484c->enter($__internal_d96e867dfc74ce1074da7583bad0b72b4010f0bdf7b3dbccc4e1ae5ab324484c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_math-sign.js"));

        // line 1
        echo "// 20.2.2.28 Math.sign(x)
module.exports = Math.sign || function sign(x) {
  // eslint-disable-next-line no-self-compare
  return (x = +x) == 0 || x != x ? x : x < 0 ? -1 : 1;
};
";
        
        $__internal_d96e867dfc74ce1074da7583bad0b72b4010f0bdf7b3dbccc4e1ae5ab324484c->leave($__internal_d96e867dfc74ce1074da7583bad0b72b4010f0bdf7b3dbccc4e1ae5ab324484c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_math-sign.js";
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
", "node_modules/core-js/modules/_math-sign.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_math-sign.js");
    }
}
