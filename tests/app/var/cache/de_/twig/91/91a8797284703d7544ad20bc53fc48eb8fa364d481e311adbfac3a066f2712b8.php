<?php

/* node_modules/es5-ext/test/array/#/entries/shim.js */
class __TwigTemplate_aa3883004570a2708364544f5a7aa95e7a4b568f84fbbececc2696c152efc156 extends Twig_Template
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
        $__internal_96cb27f76d07713c9014b7dd1742f9f7680eec000ed36b754a2feb4507eddee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cb27f76d07713c9014b7dd1742f9f7680eec000ed36b754a2feb4507eddee2->enter($__internal_96cb27f76d07713c9014b7dd1742f9f7680eec000ed36b754a2feb4507eddee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/entries/shim.js"));

        // line 1
        echo "\"use strict\";

exports.__generic = function (t, a) {
\tvar iterator = t.call(this);
\ta.deep(iterator.next(), { value: [0, \"1\"], done: false });
\ta.deep(iterator.next(), { value: [1, \"2\"], done: false });
\ta.deep(iterator.next(), { value: [2, \"3\"], done: false });
\ta.deep(iterator.next(), { value: undefined, done: true });
};
";
        
        $__internal_96cb27f76d07713c9014b7dd1742f9f7680eec000ed36b754a2feb4507eddee2->leave($__internal_96cb27f76d07713c9014b7dd1742f9f7680eec000ed36b754a2feb4507eddee2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/entries/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__generic = function (t, a) {
\tvar iterator = t.call(this);
\ta.deep(iterator.next(), { value: [0, \"1\"], done: false });
\ta.deep(iterator.next(), { value: [1, \"2\"], done: false });
\ta.deep(iterator.next(), { value: [2, \"3\"], done: false });
\ta.deep(iterator.next(), { value: undefined, done: true });
};
", "node_modules/es5-ext/test/array/#/entries/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/entries/shim.js");
    }
}
