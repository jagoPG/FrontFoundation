<?php

/* node_modules/es5-ext/number/epsilon/implement.js */
class __TwigTemplate_1064c4b161ceb638d47bb0945607deca79a233ded5104e2692357664fad0aa6f extends Twig_Template
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
        $__internal_75696acdaa039b3bc461c31f7243a3523b949bc4b569da3d90ee86ce6495b90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75696acdaa039b3bc461c31f7243a3523b949bc4b569da3d90ee86ce6495b90d->enter($__internal_75696acdaa039b3bc461c31f7243a3523b949bc4b569da3d90ee86ce6495b90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/epsilon/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Number, \"EPSILON\", { value: require(\"./\"),
\t\tconfigurable: false,
enumerable: false,
writable: false });
}
";
        
        $__internal_75696acdaa039b3bc461c31f7243a3523b949bc4b569da3d90ee86ce6495b90d->leave($__internal_75696acdaa039b3bc461c31f7243a3523b949bc4b569da3d90ee86ce6495b90d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/epsilon/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Number, \"EPSILON\", { value: require(\"./\"),
\t\tconfigurable: false,
enumerable: false,
writable: false });
}
", "node_modules/es5-ext/number/epsilon/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/epsilon/implement.js");
    }
}
