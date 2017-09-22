<?php

/* node_modules/es5-ext/test/global.js */
class __TwigTemplate_8bac067779e553ef43f262a0c074d4c2249c4a97309ef11b46ce96cce9734fc0 extends Twig_Template
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
        $__internal_afea22d1b442f1e7e2ebc5457ec9f614f146d9da308c4bd23c59c86c85d44f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afea22d1b442f1e7e2ebc5457ec9f614f146d9da308c4bd23c59c86c85d44f2b->enter($__internal_afea22d1b442f1e7e2ebc5457ec9f614f146d9da308c4bd23c59c86c85d44f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/global.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta.ok(t && typeof t === \"object\");
\ta(typeof t.Array, \"function\");
};
";
        
        $__internal_afea22d1b442f1e7e2ebc5457ec9f614f146d9da308c4bd23c59c86c85d44f2b->leave($__internal_afea22d1b442f1e7e2ebc5457ec9f614f146d9da308c4bd23c59c86c85d44f2b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta.ok(t && typeof t === \"object\");
\ta(typeof t.Array, \"function\");
};
", "node_modules/es5-ext/test/global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/global.js");
    }
}
