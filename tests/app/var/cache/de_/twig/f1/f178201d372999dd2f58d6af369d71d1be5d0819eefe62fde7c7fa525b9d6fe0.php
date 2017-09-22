<?php

/* node_modules/es5-ext/test/array/#/values/shim.js */
class __TwigTemplate_50c65d751ed26799496d5d162c75cf3854a36322d2595f9b3bb9c6b62c32ca64 extends Twig_Template
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
        $__internal_91647af1c2b76ceabf6e206b90fd498bbaaab0cf066dab86c0a9452478bae633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91647af1c2b76ceabf6e206b90fd498bbaaab0cf066dab86c0a9452478bae633->enter($__internal_91647af1c2b76ceabf6e206b90fd498bbaaab0cf066dab86c0a9452478bae633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/values/shim.js"));

        // line 1
        echo "\"use strict\";

exports.__generic = function (t, a) {
\tvar iterator = t.call(this);
\ta.deep(iterator.next(), { value: \"1\", done: false });
\ta.deep(iterator.next(), { value: \"2\", done: false });
\ta.deep(iterator.next(), { value: \"3\", done: false });
\ta.deep(iterator.next(), { value: undefined, done: true });
};
";
        
        $__internal_91647af1c2b76ceabf6e206b90fd498bbaaab0cf066dab86c0a9452478bae633->leave($__internal_91647af1c2b76ceabf6e206b90fd498bbaaab0cf066dab86c0a9452478bae633_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/values/shim.js";
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
\ta.deep(iterator.next(), { value: \"1\", done: false });
\ta.deep(iterator.next(), { value: \"2\", done: false });
\ta.deep(iterator.next(), { value: \"3\", done: false });
\ta.deep(iterator.next(), { value: undefined, done: true });
};
", "node_modules/es5-ext/test/array/#/values/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/values/shim.js");
    }
}
