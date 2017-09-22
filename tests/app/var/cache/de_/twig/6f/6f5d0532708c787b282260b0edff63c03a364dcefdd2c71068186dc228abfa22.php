<?php

/* node_modules/core-js/library/modules/es7.map.to-json.js */
class __TwigTemplate_dcc773b10f137be8c2341bdb488c8c60776b2ec72605f74ff7713a1005b88a32 extends Twig_Template
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
        $__internal_a32450e8ddc8c31ea87ac8a821e48ee31b75bad19cdac889c7ef23e2e2f1d6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32450e8ddc8c31ea87ac8a821e48ee31b75bad19cdac889c7ef23e2e2f1d6e1->enter($__internal_a32450e8ddc8c31ea87ac8a821e48ee31b75bad19cdac889c7ef23e2e2f1d6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.map.to-json.js"));

        // line 1
        echo "// https://github.com/DavidBruant/Map-Set.prototype.toJSON
var \$export = require('./_export');

\$export(\$export.P + \$export.R, 'Map', { toJSON: require('./_collection-to-json')('Map') });
";
        
        $__internal_a32450e8ddc8c31ea87ac8a821e48ee31b75bad19cdac889c7ef23e2e2f1d6e1->leave($__internal_a32450e8ddc8c31ea87ac8a821e48ee31b75bad19cdac889c7ef23e2e2f1d6e1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.map.to-json.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/DavidBruant/Map-Set.prototype.toJSON
var \$export = require('./_export');

\$export(\$export.P + \$export.R, 'Map', { toJSON: require('./_collection-to-json')('Map') });
", "node_modules/core-js/library/modules/es7.map.to-json.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.map.to-json.js");
    }
}
