<?php

/* node_modules/es5-ext/math/log10/index.js */
class __TwigTemplate_68e6d911e82b79b587bb723faabe90e12fb571e112c71841b7ede12b9ad52597 extends Twig_Template
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
        $__internal_2b41f87dc0a5e5e7f1119ab52ae123caf7b0eb69eb0963b17a35a7aa286a82f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b41f87dc0a5e5e7f1119ab52ae123caf7b0eb69eb0963b17a35a7aa286a82f7->enter($__internal_2b41f87dc0a5e5e7f1119ab52ae123caf7b0eb69eb0963b17a35a7aa286a82f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/log10/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.log10
\t: require(\"./shim\");
";
        
        $__internal_2b41f87dc0a5e5e7f1119ab52ae123caf7b0eb69eb0963b17a35a7aa286a82f7->leave($__internal_2b41f87dc0a5e5e7f1119ab52ae123caf7b0eb69eb0963b17a35a7aa286a82f7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/log10/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.log10
\t: require(\"./shim\");
", "node_modules/es5-ext/math/log10/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/log10/index.js");
    }
}
