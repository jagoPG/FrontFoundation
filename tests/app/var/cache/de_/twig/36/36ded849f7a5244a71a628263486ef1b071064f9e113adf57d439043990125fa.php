<?php

/* node_modules/es5-ext/test/string/#/plain-replace.js */
class __TwigTemplate_f321911676a6af532f2c7aacb31a5594c664146f9b3d1dcb0c1e5ef9b311d4fe extends Twig_Template
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
        $__internal_ff17d8d710a410502f8fe04a5ed6d82b531dde2e280ae83f74761b2e9785f786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff17d8d710a410502f8fe04a5ed6d82b531dde2e280ae83f74761b2e9785f786->enter($__internal_ff17d8d710a410502f8fe04a5ed6d82b531dde2e280ae83f74761b2e9785f786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/plain-replace.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"razdwatrzy\", \"dwa\", \"olera\"), \"razoleratrzy\", \"Basic\");
\ta(t.call(\"razdwatrzy\", \"dwa\", \"ole\$&a\"), \"razole\$&atrzy\", \"Inserts\");
\ta(t.call(\"razdwa\", \"ola\", \"sdfs\"), \"razdwa\", \"No replace\");
};
";
        
        $__internal_ff17d8d710a410502f8fe04a5ed6d82b531dde2e280ae83f74761b2e9785f786->leave($__internal_ff17d8d710a410502f8fe04a5ed6d82b531dde2e280ae83f74761b2e9785f786_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/plain-replace.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"razdwatrzy\", \"dwa\", \"olera\"), \"razoleratrzy\", \"Basic\");
\ta(t.call(\"razdwatrzy\", \"dwa\", \"ole\$&a\"), \"razole\$&atrzy\", \"Inserts\");
\ta(t.call(\"razdwa\", \"ola\", \"sdfs\"), \"razdwa\", \"No replace\");
};
", "node_modules/es5-ext/test/string/#/plain-replace.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/plain-replace.js");
    }
}
