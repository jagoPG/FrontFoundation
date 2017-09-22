<?php

/* node_modules/es5-ext/test/number/is-finite/shim.js */
class __TwigTemplate_81026916af2012bd638cd54a187478bda092347500940aa6ec2f4e0c40070bef extends Twig_Template
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
        $__internal_2dca47caffe470d35c43242133d3d3ffa360af1a89026666afbaf38260dd6907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dca47caffe470d35c43242133d3d3ffa360af1a89026666afbaf38260dd6907->enter($__internal_2dca47caffe470d35c43242133d3d3ffa360af1a89026666afbaf38260dd6907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/is-finite/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(2), true, \"Number\");
\ta(t(\"23\"), false, \"Not numeric\");
\ta(t(NaN), false, \"NaN\");
\ta(t(Infinity), false, \"Infinity\");
};
";
        
        $__internal_2dca47caffe470d35c43242133d3d3ffa360af1a89026666afbaf38260dd6907->leave($__internal_2dca47caffe470d35c43242133d3d3ffa360af1a89026666afbaf38260dd6907_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/is-finite/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(2), true, \"Number\");
\ta(t(\"23\"), false, \"Not numeric\");
\ta(t(NaN), false, \"NaN\");
\ta(t(Infinity), false, \"Infinity\");
};
", "node_modules/es5-ext/test/number/is-finite/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/is-finite/shim.js");
    }
}
