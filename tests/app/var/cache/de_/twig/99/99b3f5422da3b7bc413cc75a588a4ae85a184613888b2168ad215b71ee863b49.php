<?php

/* node_modules/es5-ext/test/object/map.js */
class __TwigTemplate_b80bc833cdbf27e12dd382ac625609d154a6ad8810a079d5e50106a7d5af446e extends Twig_Template
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
        $__internal_7bf98af117aba042332fab370811441d099997d107e97bb27c0122d544bf6407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf98af117aba042332fab370811441d099997d107e97bb27c0122d544bf6407->enter($__internal_7bf98af117aba042332fab370811441d099997d107e97bb27c0122d544bf6407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/map.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar obj = { 1: 1, 2: 2, 3: 3 };
\ta.deep(t(obj, function (value, key, context) {
\t\ta(context, obj, \"Context argument\");
\t\treturn (value + 1) + key;
\t}), { 1: \"21\", 2: \"32\", 3: \"43\" });
};
";
        
        $__internal_7bf98af117aba042332fab370811441d099997d107e97bb27c0122d544bf6407->leave($__internal_7bf98af117aba042332fab370811441d099997d107e97bb27c0122d544bf6407_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar obj = { 1: 1, 2: 2, 3: 3 };
\ta.deep(t(obj, function (value, key, context) {
\t\ta(context, obj, \"Context argument\");
\t\treturn (value + 1) + key;
\t}), { 1: \"21\", 2: \"32\", 3: \"43\" });
};
", "node_modules/es5-ext/test/object/map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/map.js");
    }
}
