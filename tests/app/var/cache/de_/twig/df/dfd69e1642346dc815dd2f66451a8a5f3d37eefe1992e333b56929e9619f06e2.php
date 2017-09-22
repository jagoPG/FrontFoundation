<?php

/* node_modules/core-js/library/modules/es6.object.create.js */
class __TwigTemplate_9efc0cdb1699ccbb3b08fc44822a339331d8f5f2171725b083ad538c824d874f extends Twig_Template
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
        $__internal_5ce801ddcdb4e6ea775de9057d97e976923d4a30c9f40bf19fde0bc4622475bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce801ddcdb4e6ea775de9057d97e976923d4a30c9f40bf19fde0bc4622475bf->enter($__internal_5ce801ddcdb4e6ea775de9057d97e976923d4a30c9f40bf19fde0bc4622475bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.object.create.js"));

        // line 1
        echo "var \$export = require('./_export');
// 19.1.2.2 / 15.2.3.5 Object.create(O [, Properties])
\$export(\$export.S, 'Object', { create: require('./_object-create') });
";
        
        $__internal_5ce801ddcdb4e6ea775de9057d97e976923d4a30c9f40bf19fde0bc4622475bf->leave($__internal_5ce801ddcdb4e6ea775de9057d97e976923d4a30c9f40bf19fde0bc4622475bf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.object.create.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');
// 19.1.2.2 / 15.2.3.5 Object.create(O [, Properties])
\$export(\$export.S, 'Object', { create: require('./_object-create') });
", "node_modules/core-js/library/modules/es6.object.create.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.object.create.js");
    }
}
