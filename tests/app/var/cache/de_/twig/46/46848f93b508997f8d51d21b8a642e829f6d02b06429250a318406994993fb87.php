<?php

/* node_modules/core-js/library/modules/_hide.js */
class __TwigTemplate_050be36fe3b042204506fdf08f418d71a8090800e7ecc8e7b92d439a44c6883d extends Twig_Template
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
        $__internal_4184205c967b5621c1b4ce90ad96a4d9b9fe668afcad66d932a55650860041a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4184205c967b5621c1b4ce90ad96a4d9b9fe668afcad66d932a55650860041a5->enter($__internal_4184205c967b5621c1b4ce90ad96a4d9b9fe668afcad66d932a55650860041a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_hide.js"));

        // line 1
        echo "var dP = require('./_object-dp');
var createDesc = require('./_property-desc');
module.exports = require('./_descriptors') ? function (object, key, value) {
  return dP.f(object, key, createDesc(1, value));
} : function (object, key, value) {
  object[key] = value;
  return object;
};
";
        
        $__internal_4184205c967b5621c1b4ce90ad96a4d9b9fe668afcad66d932a55650860041a5->leave($__internal_4184205c967b5621c1b4ce90ad96a4d9b9fe668afcad66d932a55650860041a5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_hide.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var dP = require('./_object-dp');
var createDesc = require('./_property-desc');
module.exports = require('./_descriptors') ? function (object, key, value) {
  return dP.f(object, key, createDesc(1, value));
} : function (object, key, value) {
  object[key] = value;
  return object;
};
", "node_modules/core-js/library/modules/_hide.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_hide.js");
    }
}
