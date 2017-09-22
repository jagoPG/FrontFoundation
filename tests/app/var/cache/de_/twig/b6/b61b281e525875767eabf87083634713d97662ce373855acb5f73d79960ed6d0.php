<?php

/* node_modules/jquery/src/manipulation/wrapMap.js */
class __TwigTemplate_8721bd08b9e7996f20bd326ae7c7b9c368718b7fed8deae7e1427f9475e88cc5 extends Twig_Template
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
        $__internal_e9f2fed59739e80b078806a3a9823fbdc5978cc347c4569a21cba777f1e1d740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f2fed59739e80b078806a3a9823fbdc5978cc347c4569a21cba777f1e1d740->enter($__internal_e9f2fed59739e80b078806a3a9823fbdc5978cc347c4569a21cba777f1e1d740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/manipulation/wrapMap.js"));

        // line 1
        echo "define( function() {

\"use strict\";

// We have to close these tags to support XHTML (#13200)
var wrapMap = {

\t// Support: IE <=9 only
\toption: [ 1, \"<select multiple='multiple'>\", \"</select>\" ],

\t// XHTML parsers do not magically insert elements in the
\t// same way that tag soup parsers do. So we cannot shorten
\t// this by omitting <tbody> or other required elements.
\tthead: [ 1, \"<table>\", \"</table>\" ],
\tcol: [ 2, \"<table><colgroup>\", \"</colgroup></table>\" ],
\ttr: [ 2, \"<table><tbody>\", \"</tbody></table>\" ],
\ttd: [ 3, \"<table><tbody><tr>\", \"</tr></tbody></table>\" ],

\t_default: [ 0, \"\", \"\" ]
};

// Support: IE <=9 only
wrapMap.optgroup = wrapMap.option;

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;

return wrapMap;
} );
";
        
        $__internal_e9f2fed59739e80b078806a3a9823fbdc5978cc347c4569a21cba777f1e1d740->leave($__internal_e9f2fed59739e80b078806a3a9823fbdc5978cc347c4569a21cba777f1e1d740_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/manipulation/wrapMap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( function() {

\"use strict\";

// We have to close these tags to support XHTML (#13200)
var wrapMap = {

\t// Support: IE <=9 only
\toption: [ 1, \"<select multiple='multiple'>\", \"</select>\" ],

\t// XHTML parsers do not magically insert elements in the
\t// same way that tag soup parsers do. So we cannot shorten
\t// this by omitting <tbody> or other required elements.
\tthead: [ 1, \"<table>\", \"</table>\" ],
\tcol: [ 2, \"<table><colgroup>\", \"</colgroup></table>\" ],
\ttr: [ 2, \"<table><tbody>\", \"</tbody></table>\" ],
\ttd: [ 3, \"<table><tbody><tr>\", \"</tr></tbody></table>\" ],

\t_default: [ 0, \"\", \"\" ]
};

// Support: IE <=9 only
wrapMap.optgroup = wrapMap.option;

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;

return wrapMap;
} );
", "node_modules/jquery/src/manipulation/wrapMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/manipulation/wrapMap.js");
    }
}
