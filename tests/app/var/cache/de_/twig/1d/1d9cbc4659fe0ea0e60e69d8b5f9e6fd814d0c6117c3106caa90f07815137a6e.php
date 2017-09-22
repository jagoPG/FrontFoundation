<?php

/* node_modules/memory-fs/lib/join.js */
class __TwigTemplate_ae37d624f0fefe42ba5ea6c21bbc7631a0779d4decb2bf14e56b78d185329232 extends Twig_Template
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
        $__internal_bc67d0c15c29891fd3acbfa216715af676db9201539b93e9838d797d20f0b52f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc67d0c15c29891fd3acbfa216715af676db9201539b93e9838d797d20f0b52f->enter($__internal_bc67d0c15c29891fd3acbfa216715af676db9201539b93e9838d797d20f0b52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/memory-fs/lib/join.js"));

        // line 1
        echo "var normalize = require(\"./normalize\");

var absoluteWinRegExp = /^[A-Z]:([\\\\\\/]|\$)/i;
var absoluteNixRegExp = /^\\//i;

module.exports = function join(path, request) {
\tif(!request) return normalize(path);
\tif(absoluteWinRegExp.test(request)) return normalize(request.replace(/\\//g, \"\\\\\"));
\tif(absoluteNixRegExp.test(request)) return normalize(request);
\tif(path == \"/\") return normalize(path + request);
\tif(absoluteWinRegExp.test(path)) return normalize(path.replace(/\\//g, \"\\\\\") + \"\\\\\" + request.replace(/\\//g, \"\\\\\"));
\tif(absoluteNixRegExp.test(path)) return normalize(path + \"/\" + request);
\treturn normalize(path + \"/\" + request);
};
";
        
        $__internal_bc67d0c15c29891fd3acbfa216715af676db9201539b93e9838d797d20f0b52f->leave($__internal_bc67d0c15c29891fd3acbfa216715af676db9201539b93e9838d797d20f0b52f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/memory-fs/lib/join.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var normalize = require(\"./normalize\");

var absoluteWinRegExp = /^[A-Z]:([\\\\\\/]|\$)/i;
var absoluteNixRegExp = /^\\//i;

module.exports = function join(path, request) {
\tif(!request) return normalize(path);
\tif(absoluteWinRegExp.test(request)) return normalize(request.replace(/\\//g, \"\\\\\"));
\tif(absoluteNixRegExp.test(request)) return normalize(request);
\tif(path == \"/\") return normalize(path + request);
\tif(absoluteWinRegExp.test(path)) return normalize(path.replace(/\\//g, \"\\\\\") + \"\\\\\" + request.replace(/\\//g, \"\\\\\"));
\tif(absoluteNixRegExp.test(path)) return normalize(path + \"/\" + request);
\treturn normalize(path + \"/\" + request);
};
", "node_modules/memory-fs/lib/join.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/memory-fs/lib/join.js");
    }
}
