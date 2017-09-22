<?php

/* node_modules/es5-ext/math/imul/shim.js */
class __TwigTemplate_ef60d714eb2e3012df781064043ce55962372af6ce063652c6971c8aa79b9d5e extends Twig_Template
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
        $__internal_962ad36cc51fc6e3787ce70cc6d431cdeab20d1e885d99947d02664f04b92287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962ad36cc51fc6e3787ce70cc6d431cdeab20d1e885d99947d02664f04b92287->enter($__internal_962ad36cc51fc6e3787ce70cc6d431cdeab20d1e885d99947d02664f04b92287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/imul/shim.js"));

        // line 1
        echo "/* eslint no-bitwise: \"off\" */

// Thanks: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference
//         /Global_Objects/Math/imul

\"use strict\";

module.exports = function (val1, val2) {
\tvar xh = (val1 >>> 16) & 0xffff
\t  , xl = val1 & 0xffff
\t  , yh = (val2 >>> 16) & 0xffff
\t  , yl = val2 & 0xffff;

\t// The shift by 0 fixes the sign on the high part
\t// the final |0 converts the unsigned value into a signed value
\treturn (xl * yl + ((xh * yl + xl * yh) << 16 >>> 0)) | 0;
};
";
        
        $__internal_962ad36cc51fc6e3787ce70cc6d431cdeab20d1e885d99947d02664f04b92287->leave($__internal_962ad36cc51fc6e3787ce70cc6d431cdeab20d1e885d99947d02664f04b92287_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/imul/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint no-bitwise: \"off\" */

// Thanks: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference
//         /Global_Objects/Math/imul

\"use strict\";

module.exports = function (val1, val2) {
\tvar xh = (val1 >>> 16) & 0xffff
\t  , xl = val1 & 0xffff
\t  , yh = (val2 >>> 16) & 0xffff
\t  , yl = val2 & 0xffff;

\t// The shift by 0 fixes the sign on the high part
\t// the final |0 converts the unsigned value into a signed value
\treturn (xl * yl + ((xh * yl + xl * yh) << 16 >>> 0)) | 0;
};
", "node_modules/es5-ext/math/imul/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/imul/shim.js");
    }
}
