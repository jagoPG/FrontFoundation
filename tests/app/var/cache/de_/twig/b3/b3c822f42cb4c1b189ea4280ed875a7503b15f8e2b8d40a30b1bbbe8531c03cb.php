<?php

/* node_modules/lin3s-front-foundation/src/js/parsley/setLocale.js */
class __TwigTemplate_e7c66dd8a060539853db12863a452f270e31f9e93451baa6705cf2c69c04170e extends Twig_Template
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
        $__internal_323973cc5881b1a95dfa909d7bcc34bb294166947cb254409f3f19b56775f002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323973cc5881b1a95dfa909d7bcc34bb294166947cb254409f3f19b56775f002->enter($__internal_323973cc5881b1a95dfa909d7bcc34bb294166947cb254409f3f19b56775f002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/src/js/parsley/setLocale.js"));

        // line 1
        echo "/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */

const getLang = (lang) => {
  if (null !== lang) {
    return lang;
  }

  return document.getElementsByTagName('html')[0].getAttribute('lang');
};

export default (lang = null) => {
  const dividedLang = getLang(lang).split('_');

  let locale = lang;
  if (dividedLang.length > 0) {
    locale = dividedLang[0];
  }

  require(`parsleyjs/dist/i18n/\${locale}`);
  window.Parsley.setLocale(locale);
};
";
        
        $__internal_323973cc5881b1a95dfa909d7bcc34bb294166947cb254409f3f19b56775f002->leave($__internal_323973cc5881b1a95dfa909d7bcc34bb294166947cb254409f3f19b56775f002_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/src/js/parsley/setLocale.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */

const getLang = (lang) => {
  if (null !== lang) {
    return lang;
  }

  return document.getElementsByTagName('html')[0].getAttribute('lang');
};

export default (lang = null) => {
  const dividedLang = getLang(lang).split('_');

  let locale = lang;
  if (dividedLang.length > 0) {
    locale = dividedLang[0];
  }

  require(`parsleyjs/dist/i18n/\${locale}`);
  window.Parsley.setLocale(locale);
};
", "node_modules/lin3s-front-foundation/src/js/parsley/setLocale.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/src/js/parsley/setLocale.js");
    }
}
