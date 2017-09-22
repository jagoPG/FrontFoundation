<?php

/* node_modules/form-data/lib/populate.js */
class __TwigTemplate_32597871e600037326a9287dd2854572e73a40e57b083e328dd050ae95bd4a71 extends Twig_Template
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
        $__internal_c9b8e3d60aeec081338e978cd838806f59efac4f54c822dee0d5578b335df2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b8e3d60aeec081338e978cd838806f59efac4f54c822dee0d5578b335df2aa->enter($__internal_c9b8e3d60aeec081338e978cd838806f59efac4f54c822dee0d5578b335df2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/form-data/lib/populate.js"));

        // line 1
        echo "// populates missing values
module.exports = function(dst, src) {

  Object.keys(src).forEach(function(prop)
  {
    dst[prop] = dst[prop] || src[prop];
  });

  return dst;
};
";
        
        $__internal_c9b8e3d60aeec081338e978cd838806f59efac4f54c822dee0d5578b335df2aa->leave($__internal_c9b8e3d60aeec081338e978cd838806f59efac4f54c822dee0d5578b335df2aa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/form-data/lib/populate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// populates missing values
module.exports = function(dst, src) {

  Object.keys(src).forEach(function(prop)
  {
    dst[prop] = dst[prop] || src[prop];
  });

  return dst;
};
", "node_modules/form-data/lib/populate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/form-data/lib/populate.js");
    }
}
