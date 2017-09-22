<?php

/* node_modules/es5-ext/test/array/#/is-uniq.js */
class __TwigTemplate_70cbbdba3c0a16f4ad7ad17aaa91486036af0c7ccf00704cf20aa7b98333468c extends Twig_Template
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
        $__internal_b4f0896458f1f06fb597520214609924e150a6d920350fbd907bf0e4500dca5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f0896458f1f06fb597520214609924e150a6d920350fbd907bf0e4500dca5f->enter($__internal_b4f0896458f1f06fb597520214609924e150a6d920350fbd907bf0e4500dca5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/is-uniq.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar x = {};
\ta(t.call([]), true, \"Empty\");
\ta(t.call({}), true, \"Empty lists\");
\ta(t.call([1, x, \"raz\"]), true, \"Uniq\");
\ta(t.call([1, x, 1, \"raz\"]), false, \"Not Uniq: primitive\");
\ta(t.call([1, x, \"1\", \"raz\"]), true, \"Uniq: primitive\");
\ta(t.call([1, x, 1, {}, \"raz\"]), false, \"Not Uniq: Obj\");
};
";
        
        $__internal_b4f0896458f1f06fb597520214609924e150a6d920350fbd907bf0e4500dca5f->leave($__internal_b4f0896458f1f06fb597520214609924e150a6d920350fbd907bf0e4500dca5f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/is-uniq.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar x = {};
\ta(t.call([]), true, \"Empty\");
\ta(t.call({}), true, \"Empty lists\");
\ta(t.call([1, x, \"raz\"]), true, \"Uniq\");
\ta(t.call([1, x, 1, \"raz\"]), false, \"Not Uniq: primitive\");
\ta(t.call([1, x, \"1\", \"raz\"]), true, \"Uniq: primitive\");
\ta(t.call([1, x, 1, {}, \"raz\"]), false, \"Not Uniq: Obj\");
};
", "node_modules/es5-ext/test/array/#/is-uniq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/is-uniq.js");
    }
}
