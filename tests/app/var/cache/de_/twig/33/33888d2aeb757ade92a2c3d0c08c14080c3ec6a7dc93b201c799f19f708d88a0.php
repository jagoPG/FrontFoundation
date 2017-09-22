<?php

/* node_modules/es5-ext/test/date/#/copy.js */
class __TwigTemplate_acbb8b8f6458bcc5b25b930d202ad9a9ae30caa5f263e066a17637096742f2a7 extends Twig_Template
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
        $__internal_a807058bce5e3cd4ecd1d7dd2fa21e8ecda9ad181f34b6a731cd11731c6fcc48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a807058bce5e3cd4ecd1d7dd2fa21e8ecda9ad181f34b6a731cd11731c6fcc48->enter($__internal_a807058bce5e3cd4ecd1d7dd2fa21e8ecda9ad181f34b6a731cd11731c6fcc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/date/#/copy.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar o = new Date(), o2;

\to2 = t.call(o);
\ta.not(o, o2, \"Different objects\");
\ta.ok(o2 instanceof Date, \"Instance of Date\");
\ta(o.getTime(), o2.getTime(), \"Same time\");
};
";
        
        $__internal_a807058bce5e3cd4ecd1d7dd2fa21e8ecda9ad181f34b6a731cd11731c6fcc48->leave($__internal_a807058bce5e3cd4ecd1d7dd2fa21e8ecda9ad181f34b6a731cd11731c6fcc48_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/date/#/copy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar o = new Date(), o2;

\to2 = t.call(o);
\ta.not(o, o2, \"Different objects\");
\ta.ok(o2 instanceof Date, \"Instance of Date\");
\ta(o.getTime(), o2.getTime(), \"Same time\");
};
", "node_modules/es5-ext/test/date/#/copy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/date/#/copy.js");
    }
}
