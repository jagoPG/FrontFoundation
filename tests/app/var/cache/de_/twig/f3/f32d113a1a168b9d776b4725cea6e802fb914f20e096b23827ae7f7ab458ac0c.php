<?php

/* node_modules/es5-ext/test/array/#/@@iterator/shim.js */
class __TwigTemplate_f2aae691068ec4c806f18f6a5d35d57e124c9a968ccf179be9010a17a19674b4 extends Twig_Template
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
        $__internal_b26f2add238bbb183411dbf76b4e2858f676c7bbf6308b50f5525409c116ad20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26f2add238bbb183411dbf76b4e2858f676c7bbf6308b50f5525409c116ad20->enter($__internal_b26f2add238bbb183411dbf76b4e2858f676c7bbf6308b50f5525409c116ad20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/@@iterator/shim.js"));

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
        
        $__internal_b26f2add238bbb183411dbf76b4e2858f676c7bbf6308b50f5525409c116ad20->leave($__internal_b26f2add238bbb183411dbf76b4e2858f676c7bbf6308b50f5525409c116ad20_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/@@iterator/shim.js";
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
", "node_modules/es5-ext/test/array/#/@@iterator/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/@@iterator/shim.js");
    }
}
