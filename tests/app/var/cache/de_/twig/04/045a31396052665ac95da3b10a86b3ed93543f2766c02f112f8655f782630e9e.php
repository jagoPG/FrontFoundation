<?php

/* node_modules/es5-ext/test/date/valid-date.js */
class __TwigTemplate_2c776f9c21f13604c0327df11ef08842bfcd93894c14032fcf3c4e868e2a52ab extends Twig_Template
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
        $__internal_a7303331cc3879ecb07c7de6629de9fd1c22c07e5c5df3e27b41adc02fb67828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7303331cc3879ecb07c7de6629de9fd1c22c07e5c5df3e27b41adc02fb67828->enter($__internal_a7303331cc3879ecb07c7de6629de9fd1c22c07e5c5df3e27b41adc02fb67828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/date/valid-date.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar d = new Date();
\ta(t(d), d, \"Date\");
\ta.throws(function () {
\t\tt({});
\t}, \"Object\");
\ta.throws(function () {
\t\tt({ valueOf: function () {
 return 20;
} });
\t}, \"Number object\");
};
";
        
        $__internal_a7303331cc3879ecb07c7de6629de9fd1c22c07e5c5df3e27b41adc02fb67828->leave($__internal_a7303331cc3879ecb07c7de6629de9fd1c22c07e5c5df3e27b41adc02fb67828_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/date/valid-date.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar d = new Date();
\ta(t(d), d, \"Date\");
\ta.throws(function () {
\t\tt({});
\t}, \"Object\");
\ta.throws(function () {
\t\tt({ valueOf: function () {
 return 20;
} });
\t}, \"Number object\");
};
", "node_modules/es5-ext/test/date/valid-date.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/date/valid-date.js");
    }
}
