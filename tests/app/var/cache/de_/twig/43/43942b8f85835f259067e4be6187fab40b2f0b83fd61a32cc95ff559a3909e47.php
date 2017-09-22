<?php

/* node_modules/es5-ext/math/tanh/implement.js */
class __TwigTemplate_967ade3732d058742176858d84455e317aa4a5728d92b6c343a1eeca4268f44b extends Twig_Template
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
        $__internal_1f7884ce8aaa788059dbc9af696713069baae2ee0ba9c97ce03d2cc00ae72322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7884ce8aaa788059dbc9af696713069baae2ee0ba9c97ce03d2cc00ae72322->enter($__internal_1f7884ce8aaa788059dbc9af696713069baae2ee0ba9c97ce03d2cc00ae72322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/tanh/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"tanh\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_1f7884ce8aaa788059dbc9af696713069baae2ee0ba9c97ce03d2cc00ae72322->leave($__internal_1f7884ce8aaa788059dbc9af696713069baae2ee0ba9c97ce03d2cc00ae72322_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/tanh/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"tanh\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/tanh/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/tanh/implement.js");
    }
}
