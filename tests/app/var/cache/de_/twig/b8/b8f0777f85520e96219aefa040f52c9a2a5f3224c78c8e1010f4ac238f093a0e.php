<?php

/* node_modules/es5-ext/test/string/#/indent.js */
class __TwigTemplate_ac0fcec8b83a6adddf32eb1c95ed42d8922b8a31d8853489f6340875e47f2bee extends Twig_Template
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
        $__internal_cfb088da34ebc4af4c0708ac72e6dc27dbd695cd450a0bcdc058473f80c2cca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb088da34ebc4af4c0708ac72e6dc27dbd695cd450a0bcdc058473f80c2cca7->enter($__internal_cfb088da34ebc4af4c0708ac72e6dc27dbd695cd450a0bcdc058473f80c2cca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/indent.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"ra\\nzz\", \"\"), \"ra\\nzz\", \"Empty\");
\ta(t.call(\"ra\\nzz\", \"\\t\", 3), \"\\t\\t\\tra\\n\\t\\t\\tzz\", \"String repeat\");
\ta(t.call(\"ra\\nzz\\nsss\\nfff\\n\", \"\\t\"), \"\\tra\\n\\tzz\\n\\tsss\\n\\tfff\\n\",
\t\t\"Multi-line\");
\ta(t.call(\"ra\\n\\nzz\\n\", \"\\t\"), \"\\tra\\n\\n\\tzz\\n\", \"Don't touch empty lines\");
};
";
        
        $__internal_cfb088da34ebc4af4c0708ac72e6dc27dbd695cd450a0bcdc058473f80c2cca7->leave($__internal_cfb088da34ebc4af4c0708ac72e6dc27dbd695cd450a0bcdc058473f80c2cca7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/indent.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"ra\\nzz\", \"\"), \"ra\\nzz\", \"Empty\");
\ta(t.call(\"ra\\nzz\", \"\\t\", 3), \"\\t\\t\\tra\\n\\t\\t\\tzz\", \"String repeat\");
\ta(t.call(\"ra\\nzz\\nsss\\nfff\\n\", \"\\t\"), \"\\tra\\n\\tzz\\n\\tsss\\n\\tfff\\n\",
\t\t\"Multi-line\");
\ta(t.call(\"ra\\n\\nzz\\n\", \"\\t\"), \"\\tra\\n\\n\\tzz\\n\", \"Don't touch empty lines\");
};
", "node_modules/es5-ext/test/string/#/indent.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/indent.js");
    }
}
