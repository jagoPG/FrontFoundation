<?php

/* node_modules/es5-ext/math/sign/implement.js */
class __TwigTemplate_91af021a8143bf3acc88717ad9936fbc58d1b981841bc88c9f80a42478c28587 extends Twig_Template
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
        $__internal_ca82d79246909c7007e2c34d0c54193f93456a8dbd92b31910c3fa26b39d9e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca82d79246909c7007e2c34d0c54193f93456a8dbd92b31910c3fa26b39d9e59->enter($__internal_ca82d79246909c7007e2c34d0c54193f93456a8dbd92b31910c3fa26b39d9e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/sign/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"sign\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_ca82d79246909c7007e2c34d0c54193f93456a8dbd92b31910c3fa26b39d9e59->leave($__internal_ca82d79246909c7007e2c34d0c54193f93456a8dbd92b31910c3fa26b39d9e59_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/sign/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"sign\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/sign/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/sign/implement.js");
    }
}
