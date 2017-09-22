<?php

/* node_modules/es5-ext/test/array/_sub-array-dummy-safe.js */
class __TwigTemplate_c777f33bc540123694894c52bec06d322494d645109f86febba132b93b3799cb extends Twig_Template
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
        $__internal_a331f18094860d7d5113d8135fcad02434ea1fe03f6f68e8ec915aa42908ec8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a331f18094860d7d5113d8135fcad02434ea1fe03f6f68e8ec915aa42908ec8a->enter($__internal_a331f18094860d7d5113d8135fcad02434ea1fe03f6f68e8ec915aa42908ec8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/_sub-array-dummy-safe.js"));

        // line 1
        echo "\"use strict\";

var isArray = Array.isArray;

module.exports = function (t) {
\tt(t === null || isArray(t.prototype), true);
};
";
        
        $__internal_a331f18094860d7d5113d8135fcad02434ea1fe03f6f68e8ec915aa42908ec8a->leave($__internal_a331f18094860d7d5113d8135fcad02434ea1fe03f6f68e8ec915aa42908ec8a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/_sub-array-dummy-safe.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isArray = Array.isArray;

module.exports = function (t) {
\tt(t === null || isArray(t.prototype), true);
};
", "node_modules/es5-ext/test/array/_sub-array-dummy-safe.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/_sub-array-dummy-safe.js");
    }
}
