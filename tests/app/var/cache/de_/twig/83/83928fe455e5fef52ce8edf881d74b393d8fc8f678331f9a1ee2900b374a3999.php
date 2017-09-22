<?php

/* node_modules/es5-ext/test/object/clear.js */
class __TwigTemplate_5b57340b860383b08c2b055269d5b5d383954a2f9047034e114e67c5d88c365e extends Twig_Template
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
        $__internal_03cd78981dec9abd4b09a88c6fc0e317014ed1a9c629c760324de7cdbe59bccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03cd78981dec9abd4b09a88c6fc0e317014ed1a9c629c760324de7cdbe59bccc->enter($__internal_03cd78981dec9abd4b09a88c6fc0e317014ed1a9c629c760324de7cdbe59bccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/clear.js"));

        // line 1
        echo "\"use strict\";

var isEmpty = require(\"../../object/is-empty\");

module.exports = function (t, a) {
\tvar x = {};
\ta(t(x), x, \"Empty: Returns same object\");
\ta(isEmpty(x), true, \"Empty: Not changed\");
\tx.foo = \"raz\";
\tx.bar = \"dwa\";
\ta(t(x), x, \"Same object\");
\ta(isEmpty(x), true, \"Emptied\");
};
";
        
        $__internal_03cd78981dec9abd4b09a88c6fc0e317014ed1a9c629c760324de7cdbe59bccc->leave($__internal_03cd78981dec9abd4b09a88c6fc0e317014ed1a9c629c760324de7cdbe59bccc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/clear.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isEmpty = require(\"../../object/is-empty\");

module.exports = function (t, a) {
\tvar x = {};
\ta(t(x), x, \"Empty: Returns same object\");
\ta(isEmpty(x), true, \"Empty: Not changed\");
\tx.foo = \"raz\";
\tx.bar = \"dwa\";
\ta(t(x), x, \"Same object\");
\ta(isEmpty(x), true, \"Emptied\");
};
", "node_modules/es5-ext/test/object/clear.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/clear.js");
    }
}
