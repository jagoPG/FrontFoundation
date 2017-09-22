<?php

/* node_modules/es5-ext/test/reg-exp/#/split/shim.js */
class __TwigTemplate_ee2e723be4853e5569ef2d3b005b087a66f5ff00b8a651d405bd112d70371940 extends Twig_Template
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
        $__internal_3e7a6f19460d133e6aa29df843fec319d7aa5fdfa40bfa505aaeb8883d4629c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7a6f19460d133e6aa29df843fec319d7aa5fdfa40bfa505aaeb8883d4629c3->enter($__internal_3e7a6f19460d133e6aa29df843fec319d7aa5fdfa40bfa505aaeb8883d4629c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/#/split/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta.deep(t.call(/\\|/, \"bar|foo\"), [\"bar\", \"foo\"]);
};
";
        
        $__internal_3e7a6f19460d133e6aa29df843fec319d7aa5fdfa40bfa505aaeb8883d4629c3->leave($__internal_3e7a6f19460d133e6aa29df843fec319d7aa5fdfa40bfa505aaeb8883d4629c3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/#/split/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta.deep(t.call(/\\|/, \"bar|foo\"), [\"bar\", \"foo\"]);
};
", "node_modules/es5-ext/test/reg-exp/#/split/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/#/split/shim.js");
    }
}
