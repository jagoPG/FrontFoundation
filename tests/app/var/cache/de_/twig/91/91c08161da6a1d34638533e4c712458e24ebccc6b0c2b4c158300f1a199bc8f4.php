<?php

/* node_modules/es5-ext/string/#/@@iterator/is-implemented.js */
class __TwigTemplate_c36d711dbbd187d6a45d83a2ad3642453570c87dd636895fe69aee3efda80907 extends Twig_Template
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
        $__internal_962fb3e437132ef89b8dce1350fe69e16ad856cdcc2edc0afd3e1759e6216241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962fb3e437132ef89b8dce1350fe69e16ad856cdcc2edc0afd3e1759e6216241->enter($__internal_962fb3e437132ef89b8dce1350fe69e16ad856cdcc2edc0afd3e1759e6216241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/@@iterator/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var iteratorSymbol = require(\"es6-symbol\").iterator;

module.exports = function () {
\tvar str = \"🙈f\", iterator, result;
\tif (typeof str[iteratorSymbol] !== \"function\") return false;
\titerator = str[iteratorSymbol]();
\tif (!iterator) return false;
\tif (typeof iterator.next !== \"function\") return false;
\tresult = iterator.next();
\tif (!result) return false;
\tif (result.value !== \"🙈\") return false;
\tif (result.done !== false) return false;
\treturn true;
};
";
        
        $__internal_962fb3e437132ef89b8dce1350fe69e16ad856cdcc2edc0afd3e1759e6216241->leave($__internal_962fb3e437132ef89b8dce1350fe69e16ad856cdcc2edc0afd3e1759e6216241_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/@@iterator/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var iteratorSymbol = require(\"es6-symbol\").iterator;

module.exports = function () {
\tvar str = \"🙈f\", iterator, result;
\tif (typeof str[iteratorSymbol] !== \"function\") return false;
\titerator = str[iteratorSymbol]();
\tif (!iterator) return false;
\tif (typeof iterator.next !== \"function\") return false;
\tresult = iterator.next();
\tif (!result) return false;
\tif (result.value !== \"🙈\") return false;
\tif (result.done !== false) return false;
\treturn true;
};
", "node_modules/es5-ext/string/#/@@iterator/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/@@iterator/is-implemented.js");
    }
}
