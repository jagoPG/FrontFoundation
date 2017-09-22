<?php

/* node_modules/es5-ext/string/random-uniq.js */
class __TwigTemplate_0a8266a7fd657f966103bcf325fca883912456aced2e732c19423a0b535d0429 extends Twig_Template
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
        $__internal_10a147e9f1ec3b12238b98a4244e846d58ed990297172926a1d271cadda809c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a147e9f1ec3b12238b98a4244e846d58ed990297172926a1d271cadda809c4->enter($__internal_10a147e9f1ec3b12238b98a4244e846d58ed990297172926a1d271cadda809c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/random-uniq.js"));

        // line 1
        echo "\"use strict\";

var generated = Object.create(null)

  , random = Math.random;

module.exports = function () {
\tvar str;
\tdo {
 str = random().toString(36).slice(2);
} while (generated[str]);
\treturn str;
};
";
        
        $__internal_10a147e9f1ec3b12238b98a4244e846d58ed990297172926a1d271cadda809c4->leave($__internal_10a147e9f1ec3b12238b98a4244e846d58ed990297172926a1d271cadda809c4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/random-uniq.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var generated = Object.create(null)

  , random = Math.random;

module.exports = function () {
\tvar str;
\tdo {
 str = random().toString(36).slice(2);
} while (generated[str]);
\treturn str;
};
", "node_modules/es5-ext/string/random-uniq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/random-uniq.js");
    }
}
