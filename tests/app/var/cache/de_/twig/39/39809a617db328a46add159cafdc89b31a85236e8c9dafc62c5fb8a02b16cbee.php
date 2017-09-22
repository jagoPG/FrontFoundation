<?php

/* node_modules/es5-ext/test/string/raw/shim.js */
class __TwigTemplate_e3b5bc20fee8ce2eb6638a738bf7357817310f026456dfc82af750138159c66b extends Twig_Template
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
        $__internal_ff74e9e950a60d9c689f003e48277217ed223cc66a5b13c417c8498e64097d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff74e9e950a60d9c689f003e48277217ed223cc66a5b13c417c8498e64097d5d->enter($__internal_ff74e9e950a60d9c689f003e48277217ed223cc66a5b13c417c8498e64097d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/raw/shim.js"));

        // line 1
        echo "// Partially taken from:
// https://github.com/paulmillr/es6-shim/blob/master/test/string.js

\"use strict\";

module.exports = function (t, a) {
\tvar callSite = [];

\tcallSite.raw = [\"The total is \", \" (\$\", \" with tax)\"];
\ta(t(callSite, \"{total}\", \"{total * 1.01}\"),
\t\t\"The total is {total} (\${total * 1.01} with tax)\");

\tcallSite.raw = [];
\ta(t(callSite, \"{total}\", \"{total * 1.01}\"), \"\");
};
";
        
        $__internal_ff74e9e950a60d9c689f003e48277217ed223cc66a5b13c417c8498e64097d5d->leave($__internal_ff74e9e950a60d9c689f003e48277217ed223cc66a5b13c417c8498e64097d5d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/raw/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Partially taken from:
// https://github.com/paulmillr/es6-shim/blob/master/test/string.js

\"use strict\";

module.exports = function (t, a) {
\tvar callSite = [];

\tcallSite.raw = [\"The total is \", \" (\$\", \" with tax)\"];
\ta(t(callSite, \"{total}\", \"{total * 1.01}\"),
\t\t\"The total is {total} (\${total * 1.01} with tax)\");

\tcallSite.raw = [];
\ta(t(callSite, \"{total}\", \"{total * 1.01}\"), \"\");
};
", "node_modules/es5-ext/test/string/raw/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/raw/shim.js");
    }
}
