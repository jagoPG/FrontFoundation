<?php

/* node_modules/es5-ext/test/string/#/normalize/shim.js */
class __TwigTemplate_69197491094d943246d61a5385f6a219b0042c66a4ce8b5afd67cd45e31b5a38 extends Twig_Template
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
        $__internal_b14e8643123fa920775950c0a43cc5f30309841bf4ff7310a393b2ba4fdb4393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14e8643123fa920775950c0a43cc5f30309841bf4ff7310a393b2ba4fdb4393->enter($__internal_b14e8643123fa920775950c0a43cc5f30309841bf4ff7310a393b2ba4fdb4393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/normalize/shim.js"));

        // line 1
        echo "// Taken from: https://github.com/walling/unorm/blob/master/test/es6-shim.js

\"use strict\";

var str = \"äiti\";

module.exports = function (t, a) {
\ta(t.call(str), \"\\u00e4iti\");
\ta(t.call(str, \"NFC\"), \"\\u00e4iti\");
\ta(t.call(str, \"NFD\"), \"a\\u0308iti\");
\ta(t.call(str, \"NFKC\"), \"\\u00e4iti\");
\ta(t.call(str, \"NFKD\"), \"a\\u0308iti\");
};
";
        
        $__internal_b14e8643123fa920775950c0a43cc5f30309841bf4ff7310a393b2ba4fdb4393->leave($__internal_b14e8643123fa920775950c0a43cc5f30309841bf4ff7310a393b2ba4fdb4393_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/normalize/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Taken from: https://github.com/walling/unorm/blob/master/test/es6-shim.js

\"use strict\";

var str = \"äiti\";

module.exports = function (t, a) {
\ta(t.call(str), \"\\u00e4iti\");
\ta(t.call(str, \"NFC\"), \"\\u00e4iti\");
\ta(t.call(str, \"NFD\"), \"a\\u0308iti\");
\ta(t.call(str, \"NFKC\"), \"\\u00e4iti\");
\ta(t.call(str, \"NFKD\"), \"a\\u0308iti\");
};
", "node_modules/es5-ext/test/string/#/normalize/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/normalize/shim.js");
    }
}
