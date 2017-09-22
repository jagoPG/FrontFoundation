<?php

/* node_modules/core-js/library/modules/_descriptors.js */
class __TwigTemplate_47bda25a529c8ed53c012df23b09b0a47da414964a4c9f0e177a0487730061af extends Twig_Template
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
        $__internal_4a6ee6d70c4b578f9e30c8e58761deafde28946f35b1302d99e6966269aa58dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6ee6d70c4b578f9e30c8e58761deafde28946f35b1302d99e6966269aa58dd->enter($__internal_4a6ee6d70c4b578f9e30c8e58761deafde28946f35b1302d99e6966269aa58dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_descriptors.js"));

        // line 1
        echo "// Thank's IE8 for his funny defineProperty
module.exports = !require('./_fails')(function () {
  return Object.defineProperty({}, 'a', { get: function () { return 7; } }).a != 7;
});
";
        
        $__internal_4a6ee6d70c4b578f9e30c8e58761deafde28946f35b1302d99e6966269aa58dd->leave($__internal_4a6ee6d70c4b578f9e30c8e58761deafde28946f35b1302d99e6966269aa58dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_descriptors.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Thank's IE8 for his funny defineProperty
module.exports = !require('./_fails')(function () {
  return Object.defineProperty({}, 'a', { get: function () { return 7; } }).a != 7;
});
", "node_modules/core-js/library/modules/_descriptors.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_descriptors.js");
    }
}
