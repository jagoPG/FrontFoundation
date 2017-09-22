<?php

/* node_modules/core-js/modules/_replacer.js */
class __TwigTemplate_bd01b5296828d4bf18bc0deb35f10c0a8ce6409a3e8bb7cd5415943c4a57907d extends Twig_Template
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
        $__internal_f1ff74db327c0bacb19ced668dfbdb9c257e7c306896e1b374ee470467690426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ff74db327c0bacb19ced668dfbdb9c257e7c306896e1b374ee470467690426->enter($__internal_f1ff74db327c0bacb19ced668dfbdb9c257e7c306896e1b374ee470467690426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_replacer.js"));

        // line 1
        echo "module.exports = function (regExp, replace) {
  var replacer = replace === Object(replace) ? function (part) {
    return replace[part];
  } : replace;
  return function (it) {
    return String(it).replace(regExp, replacer);
  };
};
";
        
        $__internal_f1ff74db327c0bacb19ced668dfbdb9c257e7c306896e1b374ee470467690426->leave($__internal_f1ff74db327c0bacb19ced668dfbdb9c257e7c306896e1b374ee470467690426_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_replacer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (regExp, replace) {
  var replacer = replace === Object(replace) ? function (part) {
    return replace[part];
  } : replace;
  return function (it) {
    return String(it).replace(regExp, replacer);
  };
};
", "node_modules/core-js/modules/_replacer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_replacer.js");
    }
}
