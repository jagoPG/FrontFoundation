<?php

/* node_modules/pbkdf2/lib/precondition.js */
class __TwigTemplate_bfee7f6fd722756d2324a9741028ca5e691ad1fa7b330ca9186563c2eebb578b extends Twig_Template
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
        $__internal_e7fc381a20e9e237d47f970d92620a98d0274d586a848c0b2a41f94c5621ab36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fc381a20e9e237d47f970d92620a98d0274d586a848c0b2a41f94c5621ab36->enter($__internal_e7fc381a20e9e237d47f970d92620a98d0274d586a848c0b2a41f94c5621ab36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pbkdf2/lib/precondition.js"));

        // line 1
        echo "var MAX_ALLOC = Math.pow(2, 30) - 1 // default in iojs
module.exports = function (iterations, keylen) {
  if (typeof iterations !== 'number') {
    throw new TypeError('Iterations not a number')
  }

  if (iterations < 0) {
    throw new TypeError('Bad iterations')
  }

  if (typeof keylen !== 'number') {
    throw new TypeError('Key length not a number')
  }

  if (keylen < 0 || keylen > MAX_ALLOC || keylen !== keylen) { /* eslint no-self-compare: 0 */
    throw new TypeError('Bad key length')
  }
}
";
        
        $__internal_e7fc381a20e9e237d47f970d92620a98d0274d586a848c0b2a41f94c5621ab36->leave($__internal_e7fc381a20e9e237d47f970d92620a98d0274d586a848c0b2a41f94c5621ab36_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pbkdf2/lib/precondition.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var MAX_ALLOC = Math.pow(2, 30) - 1 // default in iojs
module.exports = function (iterations, keylen) {
  if (typeof iterations !== 'number') {
    throw new TypeError('Iterations not a number')
  }

  if (iterations < 0) {
    throw new TypeError('Bad iterations')
  }

  if (typeof keylen !== 'number') {
    throw new TypeError('Key length not a number')
  }

  if (keylen < 0 || keylen > MAX_ALLOC || keylen !== keylen) { /* eslint no-self-compare: 0 */
    throw new TypeError('Bad key length')
  }
}
", "node_modules/pbkdf2/lib/precondition.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pbkdf2/lib/precondition.js");
    }
}
