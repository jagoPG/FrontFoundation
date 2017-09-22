<?php

/* node_modules/es5-ext/test/function/is-arguments.js */
class __TwigTemplate_e9a40a6ea5f7f99f131b2d46de9126bbc5faf5e322222cfdd46dac789132724b extends Twig_Template
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
        $__internal_59c763247e467077136ed53dd88c35e1c3565fbc96a49c369e6e3d0ca13d4a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c763247e467077136ed53dd88c35e1c3565fbc96a49c369e6e3d0ca13d4a87->enter($__internal_59c763247e467077136ed53dd88c35e1c3565fbc96a49c369e6e3d0ca13d4a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/is-arguments.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar args, dummy;
\targs = (function () {
 return arguments;
}());
\tdummy = { 0: 1, 1: 2 };
\tObject.defineProperty(dummy, \"length\", { value: 2 });
\ta(t(args), true, \"Arguments\");
\ta(t(dummy), false, \"Dummy\");
\ta(t([]), false, \"Array\");
};
";
        
        $__internal_59c763247e467077136ed53dd88c35e1c3565fbc96a49c369e6e3d0ca13d4a87->leave($__internal_59c763247e467077136ed53dd88c35e1c3565fbc96a49c369e6e3d0ca13d4a87_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/is-arguments.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar args, dummy;
\targs = (function () {
 return arguments;
}());
\tdummy = { 0: 1, 1: 2 };
\tObject.defineProperty(dummy, \"length\", { value: 2 });
\ta(t(args), true, \"Arguments\");
\ta(t(dummy), false, \"Dummy\");
\ta(t([]), false, \"Array\");
};
", "node_modules/es5-ext/test/function/is-arguments.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/is-arguments.js");
    }
}
