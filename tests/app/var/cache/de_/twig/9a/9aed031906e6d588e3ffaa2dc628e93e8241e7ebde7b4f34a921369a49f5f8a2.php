<?php

/* node_modules/es5-ext/array/#/keys/implement.js */
class __TwigTemplate_074f4a2b02d7f1f3a0c88510c35bf18b9f31fd8556b40322371259e1fb318659 extends Twig_Template
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
        $__internal_4273b2701f1ad2ebd3660582b53cafdbabf9a314a94905e7acf28f4973f06cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4273b2701f1ad2ebd3660582b53cafdbabf9a314a94905e7acf28f4973f06cc9->enter($__internal_4273b2701f1ad2ebd3660582b53cafdbabf9a314a94905e7acf28f4973f06cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/keys/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"keys\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_4273b2701f1ad2ebd3660582b53cafdbabf9a314a94905e7acf28f4973f06cc9->leave($__internal_4273b2701f1ad2ebd3660582b53cafdbabf9a314a94905e7acf28f4973f06cc9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/keys/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"keys\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/array/#/keys/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/keys/implement.js");
    }
}
