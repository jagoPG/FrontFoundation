<?php

/* node_modules/es5-ext/reg-exp/#/match/is-implemented.js */
class __TwigTemplate_e687463c95356fbcdcec8790bcff5eea6b27c0f314cc2981d16b443e409efb4d extends Twig_Template
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
        $__internal_3bca7b7d69ea2eab80be415c6b0f5775beafe3362973a241a9ed08b4bd43f36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bca7b7d69ea2eab80be415c6b0f5775beafe3362973a241a9ed08b4bd43f36d->enter($__internal_3bca7b7d69ea2eab80be415c6b0f5775beafe3362973a241a9ed08b4bd43f36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/match/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var re = /foo/;

module.exports = function () {
\tif (typeof re.match !== \"function\") return false;
\treturn re.match(\"barfoobar\") && !re.match(\"elo\");
};
";
        
        $__internal_3bca7b7d69ea2eab80be415c6b0f5775beafe3362973a241a9ed08b4bd43f36d->leave($__internal_3bca7b7d69ea2eab80be415c6b0f5775beafe3362973a241a9ed08b4bd43f36d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/match/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var re = /foo/;

module.exports = function () {
\tif (typeof re.match !== \"function\") return false;
\treturn re.match(\"barfoobar\") && !re.match(\"elo\");
};
", "node_modules/es5-ext/reg-exp/#/match/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/match/is-implemented.js");
    }
}
