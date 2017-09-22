<?php

/* node_modules/node-libs-browser/mock/punycode.js */
class __TwigTemplate_f917df0ad502c8ecc3afe867cd06b539c638686861cbafb9b87d629aa27e76b3 extends Twig_Template
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
        $__internal_b9961101963cde50bf7566bffd3ba321327cfc125602b3786d0b8a5fc2bb303d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9961101963cde50bf7566bffd3ba321327cfc125602b3786d0b8a5fc2bb303d->enter($__internal_b9961101963cde50bf7566bffd3ba321327cfc125602b3786d0b8a5fc2bb303d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-libs-browser/mock/punycode.js"));

        // line 1
        echo "exports.ucs2 = {};
exports.encode = exports.decode =
exports.ucs2.encode = exports.ucs2.decode =
exports.toUnicode = exports.toASCII =
function (s) { return s };
exports.version = \"0.0.0\";";
        
        $__internal_b9961101963cde50bf7566bffd3ba321327cfc125602b3786d0b8a5fc2bb303d->leave($__internal_b9961101963cde50bf7566bffd3ba321327cfc125602b3786d0b8a5fc2bb303d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-libs-browser/mock/punycode.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.ucs2 = {};
exports.encode = exports.decode =
exports.ucs2.encode = exports.ucs2.decode =
exports.toUnicode = exports.toASCII =
function (s) { return s };
exports.version = \"0.0.0\";", "node_modules/node-libs-browser/mock/punycode.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-libs-browser/mock/punycode.js");
    }
}
