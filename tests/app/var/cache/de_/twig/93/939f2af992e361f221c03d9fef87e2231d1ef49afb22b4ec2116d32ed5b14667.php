<?php

/* node_modules/es5-ext/test/string/#/last.js */
class __TwigTemplate_3e76dcf08f3e105cc9d95320e6146a3dedd84b3b90d6ca2b13a97d06bf272e02 extends Twig_Template
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
        $__internal_ffce222744a8d880e83f0b2891fb0b5345c8105d41928012e4ae94fd0be7693d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffce222744a8d880e83f0b2891fb0b5345c8105d41928012e4ae94fd0be7693d->enter($__internal_ffce222744a8d880e83f0b2891fb0b5345c8105d41928012e4ae94fd0be7693d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/last.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"\"), null, \"Null\");
\ta(t.call(\"abcdef\"), \"f\", \"String\");
};
";
        
        $__internal_ffce222744a8d880e83f0b2891fb0b5345c8105d41928012e4ae94fd0be7693d->leave($__internal_ffce222744a8d880e83f0b2891fb0b5345c8105d41928012e4ae94fd0be7693d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/last.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"\"), null, \"Null\");
\ta(t.call(\"abcdef\"), \"f\", \"String\");
};
", "node_modules/es5-ext/test/string/#/last.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/last.js");
    }
}
