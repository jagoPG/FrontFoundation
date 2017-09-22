<?php

/* node_modules/fsevents/node_modules/form-data/lib/populate.js */
class __TwigTemplate_8255e0c1bb82366f0c84d97248816438f68933daf8d5366f01cc9df72e1ec8f5 extends Twig_Template
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
        $__internal_0da1adaf7eff6848927ad366b835b8dda3c2774e75eca374d64f2f577d9d221b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da1adaf7eff6848927ad366b835b8dda3c2774e75eca374d64f2f577d9d221b->enter($__internal_0da1adaf7eff6848927ad366b835b8dda3c2774e75eca374d64f2f577d9d221b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/form-data/lib/populate.js"));

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
        
        $__internal_0da1adaf7eff6848927ad366b835b8dda3c2774e75eca374d64f2f577d9d221b->leave($__internal_0da1adaf7eff6848927ad366b835b8dda3c2774e75eca374d64f2f577d9d221b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/form-data/lib/populate.js";
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
", "node_modules/fsevents/node_modules/form-data/lib/populate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/form-data/lib/populate.js");
    }
}
