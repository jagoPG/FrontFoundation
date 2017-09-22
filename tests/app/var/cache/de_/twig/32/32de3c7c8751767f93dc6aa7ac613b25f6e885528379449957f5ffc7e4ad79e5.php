<?php

/* node_modules/loader-utils/lib/isUrlRequest.js */
class __TwigTemplate_f3afe5e5f87677772877c91ef3b4086487b8cd087354cfbd4f57508ac738f322 extends Twig_Template
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
        $__internal_335a01a8e2c3ca1e76f2b7438db117576518bb6df71854565d3f31c24ca41c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335a01a8e2c3ca1e76f2b7438db117576518bb6df71854565d3f31c24ca41c95->enter($__internal_335a01a8e2c3ca1e76f2b7438db117576518bb6df71854565d3f31c24ca41c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loader-utils/lib/isUrlRequest.js"));

        // line 1
        echo "\"use strict\";

function isUrlRequest(url, root) {
\t// An URL is not an request if
\t// 1. it's a Data Url
\t// 2. it's an absolute url or and protocol-relative
\t// 3. it's some kind of url for a template
\tif(/^data:|^chrome-extension:|^(https?:)?\\/\\/|^[\\{\\}\\[\\]#*;,'§\\\$%&\\(=?`´\\^°<>]/.test(url)) return false;
\t// 4. It's also not an request if root isn't set and it's a root-relative url
\tif((root === undefined || root === false) && /^\\//.test(url)) return false;
\treturn true;
}

module.exports = isUrlRequest;
";
        
        $__internal_335a01a8e2c3ca1e76f2b7438db117576518bb6df71854565d3f31c24ca41c95->leave($__internal_335a01a8e2c3ca1e76f2b7438db117576518bb6df71854565d3f31c24ca41c95_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loader-utils/lib/isUrlRequest.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

function isUrlRequest(url, root) {
\t// An URL is not an request if
\t// 1. it's a Data Url
\t// 2. it's an absolute url or and protocol-relative
\t// 3. it's some kind of url for a template
\tif(/^data:|^chrome-extension:|^(https?:)?\\/\\/|^[\\{\\}\\[\\]#*;,'§\\\$%&\\(=?`´\\^°<>]/.test(url)) return false;
\t// 4. It's also not an request if root isn't set and it's a root-relative url
\tif((root === undefined || root === false) && /^\\//.test(url)) return false;
\treturn true;
}

module.exports = isUrlRequest;
", "node_modules/loader-utils/lib/isUrlRequest.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loader-utils/lib/isUrlRequest.js");
    }
}
