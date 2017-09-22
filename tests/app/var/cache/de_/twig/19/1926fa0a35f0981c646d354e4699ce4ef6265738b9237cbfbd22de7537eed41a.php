<?php

/* node_modules/es5-ext/test/string/#/repeat/is-implemented.js */
class __TwigTemplate_01fe8cea545fde67a5c398dc6624b9b3cadcfb3d71fb0abf4885d3857c7d37dd extends Twig_Template
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
        $__internal_1a2ddeb56b3fcb6fd311b764b19ba11684b617e691db6b2ef824fadf629db04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2ddeb56b3fcb6fd311b764b19ba11684b617e691db6b2ef824fadf629db04c->enter($__internal_1a2ddeb56b3fcb6fd311b764b19ba11684b617e691db6b2ef824fadf629db04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/repeat/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_1a2ddeb56b3fcb6fd311b764b19ba11684b617e691db6b2ef824fadf629db04c->leave($__internal_1a2ddeb56b3fcb6fd311b764b19ba11684b617e691db6b2ef824fadf629db04c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/repeat/is-implemented.js";
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
", "node_modules/es5-ext/test/string/#/repeat/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/repeat/is-implemented.js");
    }
}
