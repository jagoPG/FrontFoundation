<?php

/* node_modules/source-list-map/lib/helpers.js */
class __TwigTemplate_4f27c7de84c4607797cec73e849ee5520fd9478a705ed20479e53b14b503d1b2 extends Twig_Template
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
        $__internal_c447a4361918102c3a937f815cd6162c770af4aa34cd65c9c69139c5aadee912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c447a4361918102c3a937f815cd6162c770af4aa34cd65c9c69139c5aadee912->enter($__internal_c447a4361918102c3a937f815cd6162c770af4aa34cd65c9c69139c5aadee912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/source-list-map/lib/helpers.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

exports.getNumberOfLines = function getNumberOfLines(str) {
\tlet nr = -1;
\tlet idx = -1;
\tdo {
\t\tnr++
\t\tidx = str.indexOf(\"\\n\", idx + 1);
\t} while(idx >= 0);
\treturn nr;
};

exports.getUnfinishedLine = function getUnfinishedLine(str) {
\tconst idx = str.lastIndexOf(\"\\n\");
\tif(idx === -1)
\t\treturn str.length;
\telse
\t\treturn str.length - idx - 1;
};
";
        
        $__internal_c447a4361918102c3a937f815cd6162c770af4aa34cd65c9c69139c5aadee912->leave($__internal_c447a4361918102c3a937f815cd6162c770af4aa34cd65c9c69139c5aadee912_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/source-list-map/lib/helpers.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

exports.getNumberOfLines = function getNumberOfLines(str) {
\tlet nr = -1;
\tlet idx = -1;
\tdo {
\t\tnr++
\t\tidx = str.indexOf(\"\\n\", idx + 1);
\t} while(idx >= 0);
\treturn nr;
};

exports.getUnfinishedLine = function getUnfinishedLine(str) {
\tconst idx = str.lastIndexOf(\"\\n\");
\tif(idx === -1)
\t\treturn str.length;
\telse
\t\treturn str.length - idx - 1;
};
", "node_modules/source-list-map/lib/helpers.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/source-list-map/lib/helpers.js");
    }
}
