<?php

/* node_modules/es5-ext/string/#/ends-with/index.js */
class __TwigTemplate_38b73516172fc8fcf84d85260155612ff4fb4aff18a56969bc19a5da3800996b extends Twig_Template
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
        $__internal_06ee24ae52300e9ca8a28bc8d8dea00d3eac25e05927daf1df628bf884900841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ee24ae52300e9ca8a28bc8d8dea00d3eac25e05927daf1df628bf884900841->enter($__internal_06ee24ae52300e9ca8a28bc8d8dea00d3eac25e05927daf1df628bf884900841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/ends-with/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.prototype.endsWith
\t: require(\"./shim\");
";
        
        $__internal_06ee24ae52300e9ca8a28bc8d8dea00d3eac25e05927daf1df628bf884900841->leave($__internal_06ee24ae52300e9ca8a28bc8d8dea00d3eac25e05927daf1df628bf884900841_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/ends-with/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.prototype.endsWith
\t: require(\"./shim\");
", "node_modules/es5-ext/string/#/ends-with/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/ends-with/index.js");
    }
}
