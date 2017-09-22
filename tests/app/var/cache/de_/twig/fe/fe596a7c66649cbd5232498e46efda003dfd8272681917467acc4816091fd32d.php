<?php

/* node_modules/es5-ext/test/object/count.js */
class __TwigTemplate_f0484591d3442e397567591a8df3faa8563598b0e9e4140faa57570401018537 extends Twig_Template
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
        $__internal_6a360f5b0f30b51bb995b164d6b369c90f6e4170dc72313ebb9beed6c0c4daec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a360f5b0f30b51bb995b164d6b369c90f6e4170dc72313ebb9beed6c0c4daec->enter($__internal_6a360f5b0f30b51bb995b164d6b369c90f6e4170dc72313ebb9beed6c0c4daec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/count.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), 0, \"Empty\");
\ta(t({ raz: 1, dwa: null, trzy: undefined, cztery: 0 }), 4,
\t\t\"Some properties\");
\ta(t(Object.defineProperties({}, {
\t\traz: { value: \"raz\" },
\t\tdwa: { value: \"dwa\", enumerable: true }
\t})), 1, \"Some properties hidden\");
};
";
        
        $__internal_6a360f5b0f30b51bb995b164d6b369c90f6e4170dc72313ebb9beed6c0c4daec->leave($__internal_6a360f5b0f30b51bb995b164d6b369c90f6e4170dc72313ebb9beed6c0c4daec_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/count.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t({}), 0, \"Empty\");
\ta(t({ raz: 1, dwa: null, trzy: undefined, cztery: 0 }), 4,
\t\t\"Some properties\");
\ta(t(Object.defineProperties({}, {
\t\traz: { value: \"raz\" },
\t\tdwa: { value: \"dwa\", enumerable: true }
\t})), 1, \"Some properties hidden\");
};
", "node_modules/es5-ext/test/object/count.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/count.js");
    }
}
