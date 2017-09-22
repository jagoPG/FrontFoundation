<?php

/* node_modules/diffie-hellman/index.js */
class __TwigTemplate_6689708807629bff3b58e8a7e02d6098a1d16644c42ac17af035be6bd9ef51e6 extends Twig_Template
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
        $__internal_d6e86f641fe1b543f45fa03c809bd2331f39f7dbf740255c23176ba4a027ad6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e86f641fe1b543f45fa03c809bd2331f39f7dbf740255c23176ba4a027ad6f->enter($__internal_d6e86f641fe1b543f45fa03c809bd2331f39f7dbf740255c23176ba4a027ad6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/diffie-hellman/index.js"));

        // line 1
        echo "var crypto = require('crypto')

// getDiffieHellman
exports.DiffieHellmanGroup = crypto.DiffieHellmanGroup
exports.createDiffieHellmanGroup = crypto.createDiffieHellmanGroup
exports.getDiffieHellman = crypto.getDiffieHellman

// createDiffieHellman
exports.createDiffieHellman = crypto.createDiffieHellman
exports.DiffieHellman = crypto.DiffieHellman
";
        
        $__internal_d6e86f641fe1b543f45fa03c809bd2331f39f7dbf740255c23176ba4a027ad6f->leave($__internal_d6e86f641fe1b543f45fa03c809bd2331f39f7dbf740255c23176ba4a027ad6f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/diffie-hellman/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var crypto = require('crypto')

// getDiffieHellman
exports.DiffieHellmanGroup = crypto.DiffieHellmanGroup
exports.createDiffieHellmanGroup = crypto.createDiffieHellmanGroup
exports.getDiffieHellman = crypto.getDiffieHellman

// createDiffieHellman
exports.createDiffieHellman = crypto.createDiffieHellman
exports.DiffieHellman = crypto.DiffieHellman
", "node_modules/diffie-hellman/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/diffie-hellman/index.js");
    }
}
