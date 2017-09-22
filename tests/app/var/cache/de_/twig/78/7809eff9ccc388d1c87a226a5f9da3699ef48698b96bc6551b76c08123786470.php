<?php

/* node_modules/semver/range.bnf */
class __TwigTemplate_87221f6e5e7933500d45ade949c59ef421e154277c119c60c97e74ed2f2ffe9c extends Twig_Template
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
        $__internal_e9024a7616bc0f439d63ae5f75db68e2492b8259a7553a25893b58f48d942034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9024a7616bc0f439d63ae5f75db68e2492b8259a7553a25893b58f48d942034->enter($__internal_e9024a7616bc0f439d63ae5f75db68e2492b8259a7553a25893b58f48d942034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/semver/range.bnf"));

        // line 1
        echo "range-set  ::= range ( logical-or range ) *
logical-or ::= ( ' ' ) * '||' ( ' ' ) *
range      ::= hyphen | simple ( ' ' simple ) * | ''
hyphen     ::= partial ' - ' partial
simple     ::= primitive | partial | tilde | caret
primitive  ::= ( '<' | '>' | '>=' | '<=' | '=' | ) partial
partial    ::= xr ( '.' xr ( '.' xr qualifier ? )? )?
xr         ::= 'x' | 'X' | '*' | nr
nr         ::= '0' | ['1'-'9'] ( ['0'-'9'] ) *
tilde      ::= '~' partial
caret      ::= '^' partial
qualifier  ::= ( '-' pre )? ( '+' build )?
pre        ::= parts
build      ::= parts
parts      ::= part ( '.' part ) *
part       ::= nr | [-0-9A-Za-z]+
";
        
        $__internal_e9024a7616bc0f439d63ae5f75db68e2492b8259a7553a25893b58f48d942034->leave($__internal_e9024a7616bc0f439d63ae5f75db68e2492b8259a7553a25893b58f48d942034_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/semver/range.bnf";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("range-set  ::= range ( logical-or range ) *
logical-or ::= ( ' ' ) * '||' ( ' ' ) *
range      ::= hyphen | simple ( ' ' simple ) * | ''
hyphen     ::= partial ' - ' partial
simple     ::= primitive | partial | tilde | caret
primitive  ::= ( '<' | '>' | '>=' | '<=' | '=' | ) partial
partial    ::= xr ( '.' xr ( '.' xr qualifier ? )? )?
xr         ::= 'x' | 'X' | '*' | nr
nr         ::= '0' | ['1'-'9'] ( ['0'-'9'] ) *
tilde      ::= '~' partial
caret      ::= '^' partial
qualifier  ::= ( '-' pre )? ( '+' build )?
pre        ::= parts
build      ::= parts
parts      ::= part ( '.' part ) *
part       ::= nr | [-0-9A-Za-z]+
", "node_modules/semver/range.bnf", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/semver/range.bnf");
    }
}
