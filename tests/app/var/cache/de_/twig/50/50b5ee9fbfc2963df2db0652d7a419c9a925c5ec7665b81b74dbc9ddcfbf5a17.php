<?php

/* node_modules/es6-set/test/ext/every.js */
class __TwigTemplate_20fcc72acac6b067601a6d5dcfa68d977b806f67e71da1b1c13b4a86eb42a0c8 extends Twig_Template
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
        $__internal_918b51d76823a8332b659c7a8ce745d7f3a4ee13a92b025b1bfd3654005b7848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918b51d76823a8332b659c7a8ce745d7f3a4ee13a92b025b1bfd3654005b7848->enter($__internal_918b51d76823a8332b659c7a8ce745d7f3a4ee13a92b025b1bfd3654005b7848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/ext/every.js"));

        // line 1
        echo "'use strict';

var Set = require('../../');

module.exports = function (t, a) {
\ta(t.call(new Set(), Boolean), true, \"Empty set\");
\ta(t.call(new Set([2, 3, 4]), Boolean), true, \"Truthy\");
\ta(t.call(new Set([2, 0, 4]), Boolean), false, \"Falsy\");
};
";
        
        $__internal_918b51d76823a8332b659c7a8ce745d7f3a4ee13a92b025b1bfd3654005b7848->leave($__internal_918b51d76823a8332b659c7a8ce745d7f3a4ee13a92b025b1bfd3654005b7848_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/ext/every.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var Set = require('../../');

module.exports = function (t, a) {
\ta(t.call(new Set(), Boolean), true, \"Empty set\");
\ta(t.call(new Set([2, 3, 4]), Boolean), true, \"Truthy\");
\ta(t.call(new Set([2, 0, 4]), Boolean), false, \"Falsy\");
};
", "node_modules/es6-set/test/ext/every.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/ext/every.js");
    }
}
