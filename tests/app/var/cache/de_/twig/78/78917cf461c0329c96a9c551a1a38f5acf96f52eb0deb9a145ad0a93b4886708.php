<?php

/* node_modules/es5-ext/math/log10/is-implemented.js */
class __TwigTemplate_51e90426d6a192cd09527094b1771a50dadb1cbc73e175b25a57c89d035c9ffd extends Twig_Template
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
        $__internal_364bf40b6ff55bab12eb70f17230f6e599d9a3b8aa3e6b3cf0bd9b97c8e15321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364bf40b6ff55bab12eb70f17230f6e599d9a3b8aa3e6b3cf0bd9b97c8e15321->enter($__internal_364bf40b6ff55bab12eb70f17230f6e599d9a3b8aa3e6b3cf0bd9b97c8e15321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/log10/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar log10 = Math.log10;
\tif (typeof log10 !== \"function\") return false;
\treturn log10(2) === 0.3010299956639812;
};
";
        
        $__internal_364bf40b6ff55bab12eb70f17230f6e599d9a3b8aa3e6b3cf0bd9b97c8e15321->leave($__internal_364bf40b6ff55bab12eb70f17230f6e599d9a3b8aa3e6b3cf0bd9b97c8e15321_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/log10/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar log10 = Math.log10;
\tif (typeof log10 !== \"function\") return false;
\treturn log10(2) === 0.3010299956639812;
};
", "node_modules/es5-ext/math/log10/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/log10/is-implemented.js");
    }
}
