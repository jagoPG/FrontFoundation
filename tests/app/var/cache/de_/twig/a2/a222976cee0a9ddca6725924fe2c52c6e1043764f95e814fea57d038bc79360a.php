<?php

/* node_modules/node-libs-browser/mock/tty.js */
class __TwigTemplate_1e69eea7a37697c6f36a67b3f8a21a17bdd1108a633fd562e91a072af9d7d6aa extends Twig_Template
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
        $__internal_de5b19551cef390692caaceee8bdbc0d5d1c4bcedd14417450a6cfea3c8f1b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5b19551cef390692caaceee8bdbc0d5d1c4bcedd14417450a6cfea3c8f1b44->enter($__internal_de5b19551cef390692caaceee8bdbc0d5d1c4bcedd14417450a6cfea3c8f1b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-libs-browser/mock/tty.js"));

        // line 1
        echo "exports.isatty = function () {};
exports.setRawMode = function () {};
";
        
        $__internal_de5b19551cef390692caaceee8bdbc0d5d1c4bcedd14417450a6cfea3c8f1b44->leave($__internal_de5b19551cef390692caaceee8bdbc0d5d1c4bcedd14417450a6cfea3c8f1b44_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-libs-browser/mock/tty.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.isatty = function () {};
exports.setRawMode = function () {};
", "node_modules/node-libs-browser/mock/tty.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-libs-browser/mock/tty.js");
    }
}
