<?php

/* node_modules/es5-ext/test/array/#/copy-within/is-implemented.js */
class __TwigTemplate_51bf12430bb49faaa7857c96d25dd8da509b98b194c78dd4f70d9b28728555cb extends Twig_Template
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
        $__internal_0dcf972924ec3d3afe4d85945a34ab045e2a02fa611df7a999775a849f262e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dcf972924ec3d3afe4d85945a34ab045e2a02fa611df7a999775a849f262e80->enter($__internal_0dcf972924ec3d3afe4d85945a34ab045e2a02fa611df7a999775a849f262e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/copy-within/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_0dcf972924ec3d3afe4d85945a34ab045e2a02fa611df7a999775a849f262e80->leave($__internal_0dcf972924ec3d3afe4d85945a34ab045e2a02fa611df7a999775a849f262e80_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/copy-within/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
", "node_modules/es5-ext/test/array/#/copy-within/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/copy-within/is-implemented.js");
    }
}
