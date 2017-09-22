<?php

/* node_modules/es5-ext/test/array/#/keys/shim.js */
class __TwigTemplate_e0b3c549b31bdc032670b76d850dd2ae2d08a90a45bc2fd6d43f0346b200c81b extends Twig_Template
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
        $__internal_8c47f6838d119c362d50f3364c6d1a2325bea59d8aba06165c09274e212733be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c47f6838d119c362d50f3364c6d1a2325bea59d8aba06165c09274e212733be->enter($__internal_8c47f6838d119c362d50f3364c6d1a2325bea59d8aba06165c09274e212733be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/keys/shim.js"));

        // line 1
        echo "\"use strict\";

exports.__generic = function (t, a) {
\tvar iterator = t.call(this);
\ta.deep(iterator.next(), { value: 0, done: false });
\ta.deep(iterator.next(), { value: 1, done: false });
\ta.deep(iterator.next(), { value: 2, done: false });
\ta.deep(iterator.next(), { value: undefined, done: true });
};
";
        
        $__internal_8c47f6838d119c362d50f3364c6d1a2325bea59d8aba06165c09274e212733be->leave($__internal_8c47f6838d119c362d50f3364c6d1a2325bea59d8aba06165c09274e212733be_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/keys/shim.js";
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
\ta.deep(iterator.next(), { value: 0, done: false });
\ta.deep(iterator.next(), { value: 1, done: false });
\ta.deep(iterator.next(), { value: 2, done: false });
\ta.deep(iterator.next(), { value: undefined, done: true });
};
", "node_modules/es5-ext/test/array/#/keys/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/keys/shim.js");
    }
}
