<?php

/* node_modules/es5-ext/test/array/#/values/implement.js */
class __TwigTemplate_e5eac7d35cd787b5017d99fca6dc495f20c6731979f6fa927126a18127a6a9d4 extends Twig_Template
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
        $__internal_d34a439ed651d7e298a7cd6e698fd2f7bfa0c9327815478957d73380604b95de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34a439ed651d7e298a7cd6e698fd2f7bfa0c9327815478957d73380604b95de->enter($__internal_d34a439ed651d7e298a7cd6e698fd2f7bfa0c9327815478957d73380604b95de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/values/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../array/#/values/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_d34a439ed651d7e298a7cd6e698fd2f7bfa0c9327815478957d73380604b95de->leave($__internal_d34a439ed651d7e298a7cd6e698fd2f7bfa0c9327815478957d73380604b95de_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/values/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../array/#/values/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/array/#/values/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/values/implement.js");
    }
}
