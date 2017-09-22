<?php

/* node_modules/es5-ext/test/string/#/contains/is-implemented.js */
class __TwigTemplate_ece86662572e33954713863d73eb611499e08da79657f80b6e15366609f276d1 extends Twig_Template
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
        $__internal_ed4ddb831f840204c4db9310ebaab9d27044d8f665b500834a08826123f523d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4ddb831f840204c4db9310ebaab9d27044d8f665b500834a08826123f523d6->enter($__internal_ed4ddb831f840204c4db9310ebaab9d27044d8f665b500834a08826123f523d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/contains/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_ed4ddb831f840204c4db9310ebaab9d27044d8f665b500834a08826123f523d6->leave($__internal_ed4ddb831f840204c4db9310ebaab9d27044d8f665b500834a08826123f523d6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/contains/is-implemented.js";
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
", "node_modules/es5-ext/test/string/#/contains/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/contains/is-implemented.js");
    }
}
