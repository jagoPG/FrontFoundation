<?php

/* node_modules/es5-ext/number/is-nan/implement.js */
class __TwigTemplate_19ed9e4ab79e8b58193bd6e63f64e6cda08a886cbbcd542cbc0a879ca214aa6f extends Twig_Template
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
        $__internal_59a0374932dbf82d041e68fe50024c33c9cacc4a2a52cce97701a4306961124c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a0374932dbf82d041e68fe50024c33c9cacc4a2a52cce97701a4306961124c->enter($__internal_59a0374932dbf82d041e68fe50024c33c9cacc4a2a52cce97701a4306961124c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-nan/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Number, \"isNaN\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_59a0374932dbf82d041e68fe50024c33c9cacc4a2a52cce97701a4306961124c->leave($__internal_59a0374932dbf82d041e68fe50024c33c9cacc4a2a52cce97701a4306961124c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-nan/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Number, \"isNaN\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/number/is-nan/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-nan/implement.js");
    }
}
