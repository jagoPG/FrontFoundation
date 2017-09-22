<?php

/* node_modules/core-js/library/modules/_cof.js */
class __TwigTemplate_da25deca7e9fabdac48c2bb05a9907764bfa90a04565676e50d24776a5a626ae extends Twig_Template
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
        $__internal_87f0657bbe0158941c6e2fe6fa085ba7ce55e118fa1230ba16319d1e5cc786db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f0657bbe0158941c6e2fe6fa085ba7ce55e118fa1230ba16319d1e5cc786db->enter($__internal_87f0657bbe0158941c6e2fe6fa085ba7ce55e118fa1230ba16319d1e5cc786db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_cof.js"));

        // line 1
        echo "var toString = {}.toString;

module.exports = function (it) {
  return toString.call(it).slice(8, -1);
};
";
        
        $__internal_87f0657bbe0158941c6e2fe6fa085ba7ce55e118fa1230ba16319d1e5cc786db->leave($__internal_87f0657bbe0158941c6e2fe6fa085ba7ce55e118fa1230ba16319d1e5cc786db_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_cof.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toString = {}.toString;

module.exports = function (it) {
  return toString.call(it).slice(8, -1);
};
", "node_modules/core-js/library/modules/_cof.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_cof.js");
    }
}
