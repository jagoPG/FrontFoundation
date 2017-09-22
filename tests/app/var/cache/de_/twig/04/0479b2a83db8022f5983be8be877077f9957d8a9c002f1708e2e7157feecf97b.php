<?php

/* node_modules/core-js/library/modules/_replacer.js */
class __TwigTemplate_6714f25f497a586e1cf136814470cd4670cfcf29d40f4e48684c4f4c60ab7c10 extends Twig_Template
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
        $__internal_1e5b0c3ef26e234f4a48a047daa899a5529d3850dbc2efb31d2636214aa92b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5b0c3ef26e234f4a48a047daa899a5529d3850dbc2efb31d2636214aa92b77->enter($__internal_1e5b0c3ef26e234f4a48a047daa899a5529d3850dbc2efb31d2636214aa92b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_replacer.js"));

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
        
        $__internal_1e5b0c3ef26e234f4a48a047daa899a5529d3850dbc2efb31d2636214aa92b77->leave($__internal_1e5b0c3ef26e234f4a48a047daa899a5529d3850dbc2efb31d2636214aa92b77_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_replacer.js";
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
", "node_modules/core-js/library/modules/_replacer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_replacer.js");
    }
}
