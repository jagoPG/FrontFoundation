<?php

/* node_modules/es5-ext/number/is-nan/index.js */
class __TwigTemplate_08261c1deae970794d460d9f461820f5dbe71a9710f199b9cdcbad05ea9b7601 extends Twig_Template
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
        $__internal_f68d5ec1ec9145768ae34bb630f1f89e6851a50faf25deafea6f47558b14e94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68d5ec1ec9145768ae34bb630f1f89e6851a50faf25deafea6f47558b14e94b->enter($__internal_f68d5ec1ec9145768ae34bb630f1f89e6851a50faf25deafea6f47558b14e94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-nan/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Number.isNaN
\t: require(\"./shim\");
";
        
        $__internal_f68d5ec1ec9145768ae34bb630f1f89e6851a50faf25deafea6f47558b14e94b->leave($__internal_f68d5ec1ec9145768ae34bb630f1f89e6851a50faf25deafea6f47558b14e94b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-nan/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Number.isNaN
\t: require(\"./shim\");
", "node_modules/es5-ext/number/is-nan/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-nan/index.js");
    }
}
