<?php

/* node_modules/es5-ext/test/object/filter.js */
class __TwigTemplate_e7a4ac41dd0b7ccdc3ad5a2c066a822876f86857fc76de6fd247f4100cff72ee extends Twig_Template
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
        $__internal_4b0a49070e9001683518c24f2e0d454e3f7dceebaec25748c9f6c0223cf76c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0a49070e9001683518c24f2e0d454e3f7dceebaec25748c9f6c0223cf76c4d->enter($__internal_4b0a49070e9001683518c24f2e0d454e3f7dceebaec25748c9f6c0223cf76c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/filter.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta.deep(t({ 1: 1, 2: 2, 3: 3, 4: 4 },
\t\tfunction (value) {
 return Boolean(value % 2);
}), { 1: 1, 3: 3 });
};
";
        
        $__internal_4b0a49070e9001683518c24f2e0d454e3f7dceebaec25748c9f6c0223cf76c4d->leave($__internal_4b0a49070e9001683518c24f2e0d454e3f7dceebaec25748c9f6c0223cf76c4d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/filter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta.deep(t({ 1: 1, 2: 2, 3: 3, 4: 4 },
\t\tfunction (value) {
 return Boolean(value % 2);
}), { 1: 1, 3: 3 });
};
", "node_modules/es5-ext/test/object/filter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/filter.js");
    }
}
