<?php

/* node_modules/webpack/lib/compareLocations.js */
class __TwigTemplate_d790323372569d23874a399efb97a70b3ee1eb65b0dc76ec00d63956028db58b extends Twig_Template
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
        $__internal_ad1fb345c6dacd30dec6787750eaa3f464a1941d12056cb82c4048a84f6afdb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1fb345c6dacd30dec6787750eaa3f464a1941d12056cb82c4048a84f6afdb3->enter($__internal_ad1fb345c6dacd30dec6787750eaa3f464a1941d12056cb82c4048a84f6afdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/compareLocations.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";
module.exports = function compareLocations(a, b) {
\tif(typeof a === \"string\") {
\t\tif(typeof b === \"string\") {
\t\t\tif(a < b) return -1;
\t\t\tif(a > b) return 1;
\t\t\treturn 0;
\t\t} else if(typeof b === \"object\") {
\t\t\treturn 1;
\t\t} else {
\t\t\treturn 0;
\t\t}
\t} else if(typeof a === \"object\") {
\t\tif(typeof b === \"string\") {
\t\t\treturn -1;
\t\t} else if(typeof b === \"object\") {
\t\t\tif(a.start && b.start) {
\t\t\t\tconst ap = a.start;
\t\t\t\tconst bp = b.start;
\t\t\t\tif(ap.line < bp.line) return -1;
\t\t\t\tif(ap.line > bp.line) return 1;
\t\t\t\tif(ap.column < bp.column) return -1;
\t\t\t\tif(ap.column > bp.column) return 1;
\t\t\t}
\t\t\tif(a.index < b.index) return -1;
\t\t\tif(a.index > b.index) return 1;
\t\t\treturn 0;
\t\t} else {
\t\t\treturn 0;
\t\t}
\t}
};
";
        
        $__internal_ad1fb345c6dacd30dec6787750eaa3f464a1941d12056cb82c4048a84f6afdb3->leave($__internal_ad1fb345c6dacd30dec6787750eaa3f464a1941d12056cb82c4048a84f6afdb3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/compareLocations.js";
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
module.exports = function compareLocations(a, b) {
\tif(typeof a === \"string\") {
\t\tif(typeof b === \"string\") {
\t\t\tif(a < b) return -1;
\t\t\tif(a > b) return 1;
\t\t\treturn 0;
\t\t} else if(typeof b === \"object\") {
\t\t\treturn 1;
\t\t} else {
\t\t\treturn 0;
\t\t}
\t} else if(typeof a === \"object\") {
\t\tif(typeof b === \"string\") {
\t\t\treturn -1;
\t\t} else if(typeof b === \"object\") {
\t\t\tif(a.start && b.start) {
\t\t\t\tconst ap = a.start;
\t\t\t\tconst bp = b.start;
\t\t\t\tif(ap.line < bp.line) return -1;
\t\t\t\tif(ap.line > bp.line) return 1;
\t\t\t\tif(ap.column < bp.column) return -1;
\t\t\t\tif(ap.column > bp.column) return 1;
\t\t\t}
\t\t\tif(a.index < b.index) return -1;
\t\t\tif(a.index > b.index) return 1;
\t\t\treturn 0;
\t\t} else {
\t\t\treturn 0;
\t\t}
\t}
};
", "node_modules/webpack/lib/compareLocations.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/compareLocations.js");
    }
}
