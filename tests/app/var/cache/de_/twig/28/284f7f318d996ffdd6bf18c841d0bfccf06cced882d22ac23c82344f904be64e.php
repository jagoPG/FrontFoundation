<?php

/* node_modules/es5-ext/array/from/is-implemented.js */
class __TwigTemplate_ac8fc18573d12d5c7e9459085833b3667f5f092258d9a327d361740bd286a110 extends Twig_Template
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
        $__internal_50e38c7fb37d75913a3fbfdd5d8a2560146380ad0b762b622c97ef39f6ed13a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e38c7fb37d75913a3fbfdd5d8a2560146380ad0b762b622c97ef39f6ed13a2->enter($__internal_50e38c7fb37d75913a3fbfdd5d8a2560146380ad0b762b622c97ef39f6ed13a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/from/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar from = Array.from, arr, result;
\tif (typeof from !== \"function\") return false;
\tarr = [\"raz\", \"dwa\"];
\tresult = from(arr);
\treturn Boolean(result && (result !== arr) && (result[1] === \"dwa\"));
};
";
        
        $__internal_50e38c7fb37d75913a3fbfdd5d8a2560146380ad0b762b622c97ef39f6ed13a2->leave($__internal_50e38c7fb37d75913a3fbfdd5d8a2560146380ad0b762b622c97ef39f6ed13a2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/from/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar from = Array.from, arr, result;
\tif (typeof from !== \"function\") return false;
\tarr = [\"raz\", \"dwa\"];
\tresult = from(arr);
\treturn Boolean(result && (result !== arr) && (result[1] === \"dwa\"));
};
", "node_modules/es5-ext/array/from/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/from/is-implemented.js");
    }
}
