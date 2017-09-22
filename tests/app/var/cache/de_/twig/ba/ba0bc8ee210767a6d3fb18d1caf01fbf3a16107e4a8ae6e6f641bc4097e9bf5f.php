<?php

/* node_modules/es5-ext/string/#/starts-with/implement.js */
class __TwigTemplate_98d5ac812bd09724e6115f18280cf643ab6b08265e2bf91d6761625a347184f4 extends Twig_Template
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
        $__internal_7fcf10308eed3a3d39decc6daf61aca15231dc17fa03ec6154e47995a0f9e19f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcf10308eed3a3d39decc6daf61aca15231dc17fa03ec6154e47995a0f9e19f->enter($__internal_7fcf10308eed3a3d39decc6daf61aca15231dc17fa03ec6154e47995a0f9e19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/starts-with/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String.prototype, \"startsWith\",
\t\t{ value: require(\"./shim\"),
configurable: true,
enumerable: false,
\t\t\twritable: true });
}
";
        
        $__internal_7fcf10308eed3a3d39decc6daf61aca15231dc17fa03ec6154e47995a0f9e19f->leave($__internal_7fcf10308eed3a3d39decc6daf61aca15231dc17fa03ec6154e47995a0f9e19f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/starts-with/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String.prototype, \"startsWith\",
\t\t{ value: require(\"./shim\"),
configurable: true,
enumerable: false,
\t\t\twritable: true });
}
", "node_modules/es5-ext/string/#/starts-with/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/starts-with/implement.js");
    }
}
