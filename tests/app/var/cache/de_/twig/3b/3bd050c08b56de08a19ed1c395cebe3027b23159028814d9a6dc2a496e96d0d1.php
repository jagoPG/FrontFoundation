<?php

/* node_modules/core-js/modules/_an-object.js */
class __TwigTemplate_414663d9a1266ac24395f0dff5e783ae5c9a6c206492466f09fd2c7fcb211c6c extends Twig_Template
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
        $__internal_8dfbfa10649fcd171973a1781bb125d92204e8523bc490a8443a245e991e8bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfbfa10649fcd171973a1781bb125d92204e8523bc490a8443a245e991e8bc0->enter($__internal_8dfbfa10649fcd171973a1781bb125d92204e8523bc490a8443a245e991e8bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_an-object.js"));

        // line 1
        echo "var isObject = require('./_is-object');
module.exports = function (it) {
  if (!isObject(it)) throw TypeError(it + ' is not an object!');
  return it;
};
";
        
        $__internal_8dfbfa10649fcd171973a1781bb125d92204e8523bc490a8443a245e991e8bc0->leave($__internal_8dfbfa10649fcd171973a1781bb125d92204e8523bc490a8443a245e991e8bc0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_an-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isObject = require('./_is-object');
module.exports = function (it) {
  if (!isObject(it)) throw TypeError(it + ' is not an object!');
  return it;
};
", "node_modules/core-js/modules/_an-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_an-object.js");
    }
}
