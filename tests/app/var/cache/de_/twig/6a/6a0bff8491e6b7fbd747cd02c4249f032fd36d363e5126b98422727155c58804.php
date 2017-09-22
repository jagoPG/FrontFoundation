<?php

/* node_modules/es5-ext/test/array/#/find-index/implement.js */
class __TwigTemplate_8d1266ede1036f74b12aeabaae127d9865ee55f859580a9abf2e095a16ef9073 extends Twig_Template
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
        $__internal_f1ff55566f00a464bb8d0411a21b6699ff860702bb1f48c56d5fbf8a4b4b5fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ff55566f00a464bb8d0411a21b6699ff860702bb1f48c56d5fbf8a4b4b5fdf->enter($__internal_f1ff55566f00a464bb8d0411a21b6699ff860702bb1f48c56d5fbf8a4b4b5fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/find-index/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../array/#/find-index/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_f1ff55566f00a464bb8d0411a21b6699ff860702bb1f48c56d5fbf8a4b4b5fdf->leave($__internal_f1ff55566f00a464bb8d0411a21b6699ff860702bb1f48c56d5fbf8a4b4b5fdf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/find-index/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../array/#/find-index/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/array/#/find-index/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/find-index/implement.js");
    }
}
