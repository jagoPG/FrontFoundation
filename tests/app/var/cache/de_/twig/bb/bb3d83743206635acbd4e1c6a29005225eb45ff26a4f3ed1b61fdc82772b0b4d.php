<?php

/* node_modules/core-js/library/modules/core.object.define.js */
class __TwigTemplate_6764534a1dbb693af873079b217c132a1d5187078476ce52d2be2be9ea683737 extends Twig_Template
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
        $__internal_49185c8c68961f0a0de28fbbdc4e30efafcda49ed2ac69ae4f953945427e1831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49185c8c68961f0a0de28fbbdc4e30efafcda49ed2ac69ae4f953945427e1831->enter($__internal_49185c8c68961f0a0de28fbbdc4e30efafcda49ed2ac69ae4f953945427e1831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/core.object.define.js"));

        // line 1
        echo "var \$export = require('./_export');
var define = require('./_object-define');

\$export(\$export.S + \$export.F, 'Object', { define: define });
";
        
        $__internal_49185c8c68961f0a0de28fbbdc4e30efafcda49ed2ac69ae4f953945427e1831->leave($__internal_49185c8c68961f0a0de28fbbdc4e30efafcda49ed2ac69ae4f953945427e1831_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/core.object.define.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');
var define = require('./_object-define');

\$export(\$export.S + \$export.F, 'Object', { define: define });
", "node_modules/core-js/library/modules/core.object.define.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/core.object.define.js");
    }
}
