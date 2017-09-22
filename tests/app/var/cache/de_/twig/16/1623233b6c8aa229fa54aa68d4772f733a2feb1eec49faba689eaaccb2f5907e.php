<?php

/* node_modules/es5-ext/object/for-each.js */
class __TwigTemplate_2b8cbbb561d412c3f3df668737b6ffe6069a6144702a55b44559376ac7759413 extends Twig_Template
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
        $__internal_0183e728e50b8774b7519a745b47c1176fe5ae3afd0271b4d2e56b297d3ce8dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0183e728e50b8774b7519a745b47c1176fe5ae3afd0271b4d2e56b297d3ce8dd->enter($__internal_0183e728e50b8774b7519a745b47c1176fe5ae3afd0271b4d2e56b297d3ce8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/for-each.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./_iterate\")(\"forEach\");
";
        
        $__internal_0183e728e50b8774b7519a745b47c1176fe5ae3afd0271b4d2e56b297d3ce8dd->leave($__internal_0183e728e50b8774b7519a745b47c1176fe5ae3afd0271b4d2e56b297d3ce8dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/for-each.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./_iterate\")(\"forEach\");
", "node_modules/es5-ext/object/for-each.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/for-each.js");
    }
}
