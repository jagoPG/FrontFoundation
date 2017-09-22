<?php

/* node_modules/core-js/modules/es7.set.to-json.js */
class __TwigTemplate_eadf6fbbd231478c3c2b5894088f04dc77bbe1e373234f35768643ebb16a2a2b extends Twig_Template
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
        $__internal_20ea9705f81d5f87475f9fe37466c652db0a04cb3086d503fbaf03b2a0dfc7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ea9705f81d5f87475f9fe37466c652db0a04cb3086d503fbaf03b2a0dfc7c2->enter($__internal_20ea9705f81d5f87475f9fe37466c652db0a04cb3086d503fbaf03b2a0dfc7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.set.to-json.js"));

        // line 1
        echo "// https://github.com/DavidBruant/Map-Set.prototype.toJSON
var \$export = require('./_export');

\$export(\$export.P + \$export.R, 'Set', { toJSON: require('./_collection-to-json')('Set') });
";
        
        $__internal_20ea9705f81d5f87475f9fe37466c652db0a04cb3086d503fbaf03b2a0dfc7c2->leave($__internal_20ea9705f81d5f87475f9fe37466c652db0a04cb3086d503fbaf03b2a0dfc7c2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.set.to-json.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/DavidBruant/Map-Set.prototype.toJSON
var \$export = require('./_export');

\$export(\$export.P + \$export.R, 'Set', { toJSON: require('./_collection-to-json')('Set') });
", "node_modules/core-js/modules/es7.set.to-json.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.set.to-json.js");
    }
}
