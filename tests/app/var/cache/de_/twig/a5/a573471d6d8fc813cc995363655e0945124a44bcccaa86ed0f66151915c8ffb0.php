<?php

/* node_modules/public-encrypt/withPublic.js */
class __TwigTemplate_ec2dd10c2db8112318fa07ab0a26e6b0b7598cf2384b04fedd8225d6ce4b08e6 extends Twig_Template
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
        $__internal_ef6ef45573107535676c897c07503c55605c1aae0a0c398bc8d30aa1fee2cd78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6ef45573107535676c897c07503c55605c1aae0a0c398bc8d30aa1fee2cd78->enter($__internal_ef6ef45573107535676c897c07503c55605c1aae0a0c398bc8d30aa1fee2cd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/public-encrypt/withPublic.js"));

        // line 1
        echo "var bn = require('bn.js');
function withPublic(paddedMsg, key) {
  return new Buffer(paddedMsg
    .toRed(bn.mont(key.modulus))
    .redPow(new bn(key.publicExponent))
    .fromRed()
    .toArray());
}

module.exports = withPublic;";
        
        $__internal_ef6ef45573107535676c897c07503c55605c1aae0a0c398bc8d30aa1fee2cd78->leave($__internal_ef6ef45573107535676c897c07503c55605c1aae0a0c398bc8d30aa1fee2cd78_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/public-encrypt/withPublic.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var bn = require('bn.js');
function withPublic(paddedMsg, key) {
  return new Buffer(paddedMsg
    .toRed(bn.mont(key.modulus))
    .redPow(new bn(key.publicExponent))
    .fromRed()
    .toArray());
}

module.exports = withPublic;", "node_modules/public-encrypt/withPublic.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/public-encrypt/withPublic.js");
    }
}
