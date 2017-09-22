<?php

/* node_modules/core-js/modules/core.object.define.js */
class __TwigTemplate_190cb4fe6c8ff5a53b209492fc0d01fa5b2bcb3442a04e83c2be5b05c0ed2ca1 extends Twig_Template
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
        $__internal_67b5921a43e531f31f507e66df3fbc67bd89006f3a2b62694aaf69864b73aab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b5921a43e531f31f507e66df3fbc67bd89006f3a2b62694aaf69864b73aab5->enter($__internal_67b5921a43e531f31f507e66df3fbc67bd89006f3a2b62694aaf69864b73aab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/core.object.define.js"));

        // line 1
        echo "var \$export = require('./_export');
var define = require('./_object-define');

\$export(\$export.S + \$export.F, 'Object', { define: define });
";
        
        $__internal_67b5921a43e531f31f507e66df3fbc67bd89006f3a2b62694aaf69864b73aab5->leave($__internal_67b5921a43e531f31f507e66df3fbc67bd89006f3a2b62694aaf69864b73aab5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/core.object.define.js";
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
", "node_modules/core-js/modules/core.object.define.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/core.object.define.js");
    }
}
