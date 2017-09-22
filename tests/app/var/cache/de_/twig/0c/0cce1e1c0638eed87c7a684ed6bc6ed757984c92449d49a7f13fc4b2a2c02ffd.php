<?php

/* node_modules/lodash/date.js */
class __TwigTemplate_037d5cc4cd7bc9b4a39649b9a84aad01fce5cfdf17c8aadbd025d0d9de218387 extends Twig_Template
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
        $__internal_79a2919db11b48ea2aa10f69eb691860e12272a837c978585a8c13863319ebff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a2919db11b48ea2aa10f69eb691860e12272a837c978585a8c13863319ebff->enter($__internal_79a2919db11b48ea2aa10f69eb691860e12272a837c978585a8c13863319ebff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/date.js"));

        // line 1
        echo "module.exports = {
  'now': require('./now')
};
";
        
        $__internal_79a2919db11b48ea2aa10f69eb691860e12272a837c978585a8c13863319ebff->leave($__internal_79a2919db11b48ea2aa10f69eb691860e12272a837c978585a8c13863319ebff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/date.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = {
  'now': require('./now')
};
", "node_modules/lodash/date.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/date.js");
    }
}
