<?php

/* node_modules/es5-ext/test/reg-exp/#/is-sticky.js */
class __TwigTemplate_c6b2e0a9fc5a9d048096f7567daf4c9c0e661372d6c83bdd7ff84ae95b7eaa59 extends Twig_Template
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
        $__internal_3ad48fc6136ee5519a8f494327718c9d4a47af946c45af47adc1b89ab6581caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad48fc6136ee5519a8f494327718c9d4a47af946c45af47adc1b89ab6581caa->enter($__internal_3ad48fc6136ee5519a8f494327718c9d4a47af946c45af47adc1b89ab6581caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/#/is-sticky.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar re;
\ta(t.call(/raz/), false, \"Normal\");
\ta(t.call(/raz/g), false, \"Global\");
\ttry {
\t\t// eslint-disable-next-line no-invalid-regexp
\t\tre = new RegExp(\"raz\", \"y\");
\t} catch (ignore) {}
\tif (!re) return;
\ta(t.call(re), true, \"Sticky\");
};
";
        
        $__internal_3ad48fc6136ee5519a8f494327718c9d4a47af946c45af47adc1b89ab6581caa->leave($__internal_3ad48fc6136ee5519a8f494327718c9d4a47af946c45af47adc1b89ab6581caa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/#/is-sticky.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar re;
\ta(t.call(/raz/), false, \"Normal\");
\ta(t.call(/raz/g), false, \"Global\");
\ttry {
\t\t// eslint-disable-next-line no-invalid-regexp
\t\tre = new RegExp(\"raz\", \"y\");
\t} catch (ignore) {}
\tif (!re) return;
\ta(t.call(re), true, \"Sticky\");
};
", "node_modules/es5-ext/test/reg-exp/#/is-sticky.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/#/is-sticky.js");
    }
}
