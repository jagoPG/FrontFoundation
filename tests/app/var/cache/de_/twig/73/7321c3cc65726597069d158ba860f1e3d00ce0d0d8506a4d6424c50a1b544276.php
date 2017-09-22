<?php

/* node_modules/core-js/library/modules/_defined.js */
class __TwigTemplate_79fdb4578dc6d68d5a90bd03cc6d946b3ebd266604929c401c7f781ec89404bb extends Twig_Template
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
        $__internal_9fcf9a17623067eb35068e16fca2378cc6efa59a26350e301ec12813ce2bfd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcf9a17623067eb35068e16fca2378cc6efa59a26350e301ec12813ce2bfd16->enter($__internal_9fcf9a17623067eb35068e16fca2378cc6efa59a26350e301ec12813ce2bfd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_defined.js"));

        // line 1
        echo "// 7.2.1 RequireObjectCoercible(argument)
module.exports = function (it) {
  if (it == undefined) throw TypeError(\"Can't call method on  \" + it);
  return it;
};
";
        
        $__internal_9fcf9a17623067eb35068e16fca2378cc6efa59a26350e301ec12813ce2bfd16->leave($__internal_9fcf9a17623067eb35068e16fca2378cc6efa59a26350e301ec12813ce2bfd16_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_defined.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 7.2.1 RequireObjectCoercible(argument)
module.exports = function (it) {
  if (it == undefined) throw TypeError(\"Can't call method on  \" + it);
  return it;
};
", "node_modules/core-js/library/modules/_defined.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_defined.js");
    }
}
