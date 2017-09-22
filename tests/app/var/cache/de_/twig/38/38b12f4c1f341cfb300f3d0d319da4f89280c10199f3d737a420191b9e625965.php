<?php

/* node_modules/es5-ext/string/from-code-point/implement.js */
class __TwigTemplate_8fabf0428c8599d3106ff79b4512a3048294fff4ede1638af213453e958c5083 extends Twig_Template
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
        $__internal_02c79a051b8110f92a651608dc14fa2eb01a990963a22fe3ba92d028c85a72af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c79a051b8110f92a651608dc14fa2eb01a990963a22fe3ba92d028c85a72af->enter($__internal_02c79a051b8110f92a651608dc14fa2eb01a990963a22fe3ba92d028c85a72af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/from-code-point/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String, \"fromCodePoint\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_02c79a051b8110f92a651608dc14fa2eb01a990963a22fe3ba92d028c85a72af->leave($__internal_02c79a051b8110f92a651608dc14fa2eb01a990963a22fe3ba92d028c85a72af_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/from-code-point/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String, \"fromCodePoint\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/string/from-code-point/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/from-code-point/implement.js");
    }
}
