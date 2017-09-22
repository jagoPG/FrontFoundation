<?php

/* node_modules/core-js/library/modules/core.regexp.escape.js */
class __TwigTemplate_04285572a6fa52fe543e5014fd41c326f044f1a9dd9b4f0a55126e048e547364 extends Twig_Template
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
        $__internal_0792a876053bf7ab80adf44f421a6392861c77b1b3ca17fab69b3657a3952c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0792a876053bf7ab80adf44f421a6392861c77b1b3ca17fab69b3657a3952c32->enter($__internal_0792a876053bf7ab80adf44f421a6392861c77b1b3ca17fab69b3657a3952c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/core.regexp.escape.js"));

        // line 1
        echo "// https://github.com/benjamingr/RexExp.escape
var \$export = require('./_export');
var \$re = require('./_replacer')(/[\\\\^\$*+?.()|[\\]{}]/g, '\\\\\$&');

\$export(\$export.S, 'RegExp', { escape: function escape(it) { return \$re(it); } });
";
        
        $__internal_0792a876053bf7ab80adf44f421a6392861c77b1b3ca17fab69b3657a3952c32->leave($__internal_0792a876053bf7ab80adf44f421a6392861c77b1b3ca17fab69b3657a3952c32_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/core.regexp.escape.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/benjamingr/RexExp.escape
var \$export = require('./_export');
var \$re = require('./_replacer')(/[\\\\^\$*+?.()|[\\]{}]/g, '\\\\\$&');

\$export(\$export.S, 'RegExp', { escape: function escape(it) { return \$re(it); } });
", "node_modules/core-js/library/modules/core.regexp.escape.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/core.regexp.escape.js");
    }
}
