<?php

/* node_modules/es6-set/test/ext/some.js */
class __TwigTemplate_319bf09a89c10067e24189abdc669916477c4b2ede981ac1e3ea29bbb89b85b9 extends Twig_Template
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
        $__internal_0cc14935f3f3767bef77bcef5c1c63ed527f34ce25889f1ed0202e748f35a3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc14935f3f3767bef77bcef5c1c63ed527f34ce25889f1ed0202e748f35a3cc->enter($__internal_0cc14935f3f3767bef77bcef5c1c63ed527f34ce25889f1ed0202e748f35a3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/ext/some.js"));

        // line 1
        echo "'use strict';

var Set = require('../../');

module.exports = function (t, a) {
\ta(t.call(new Set(), Boolean), false, \"Empty set\");
\ta(t.call(new Set([2, 3, 4]), Boolean), true, \"All true\");
\ta(t.call(new Set([0, false, 4]), Boolean), true, \"Some false\");
\ta(t.call(new Set([0, false, null]), Boolean), false, \"All false\");
};
";
        
        $__internal_0cc14935f3f3767bef77bcef5c1c63ed527f34ce25889f1ed0202e748f35a3cc->leave($__internal_0cc14935f3f3767bef77bcef5c1c63ed527f34ce25889f1ed0202e748f35a3cc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/ext/some.js";
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
\ta(t.call(new Set(), Boolean), false, \"Empty set\");
\ta(t.call(new Set([2, 3, 4]), Boolean), true, \"All true\");
\ta(t.call(new Set([0, false, 4]), Boolean), true, \"Some false\");
\ta(t.call(new Set([0, false, null]), Boolean), false, \"All false\");
};
", "node_modules/es6-set/test/ext/some.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/ext/some.js");
    }
}
