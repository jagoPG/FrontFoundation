<?php

/* node_modules/lin3s-front-foundation/src/scss/atoms/_parsley.scss */
class __TwigTemplate_05959de7553cd7b9b02f4a6c80837515f874fd9d2e55cb8799c9578715b69fe6 extends Twig_Template
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
        $__internal_363e2e3371a1dce1e6aece5c680e40bd5728ed23ac3fbed993f1a0c4fe4bbc1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363e2e3371a1dce1e6aece5c680e40bd5728ed23ac3fbed993f1a0c4fe4bbc1a->enter($__internal_363e2e3371a1dce1e6aece5c680e40bd5728ed23ac3fbed993f1a0c4fe4bbc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/src/scss/atoms/_parsley.scss"));

        // line 1
        echo "// This file is part of the Front Foundation package.
//
// Copyright (c) 2017-present LIN3S <info@lin3s.com>
//
// For the full copyright and license information, please view the LICENSE
// file that was distributed with this source code.
//
// @author Beñat Espiña <benatespina@gmail.com>
// @author Andrés Montejo <andres@lin3s.com>

\$parley-background-color: #f2b8c2 !default;
\$parley-color: #b20008 !default;
\$parley-transition-duration: .3s !default;
\$parley-transition-type: cubic-bezier(.94, .06, .32, .95) !default;
\$parley-transition-delay: 0s !default;
\$parsley-z-index: 1 !default;

.parsley-errors-list {
  margin-top: -5px;
  order: 2;
  padding-top: 5px;
  position: relative;
  transform: translateY(-45px);
  transition: transform \$parley-transition-duration \$parley-transition-type \$parley-transition-delay;
  width: 100%;
  z-index: \$parsley-z-index;

  [class*='parsley'] {
    background-color: \$parley-background-color;
    border-radius: 0 0 6px 6px;
    color: \$parley-color;
    left: 0;
    margin-top: -5px;
    padding: 18px 15px 15px;
    position: relative;
    width: 100%;
    z-index: \$parsley-z-index;
  }

  &.filled {
    transform: translateY(0);
  }
}

.parsley-error {
  border: 1px solid \$parley-color;
  position: relative;
  z-index: #{\$parsley-z-index + 1};
}
";
        
        $__internal_363e2e3371a1dce1e6aece5c680e40bd5728ed23ac3fbed993f1a0c4fe4bbc1a->leave($__internal_363e2e3371a1dce1e6aece5c680e40bd5728ed23ac3fbed993f1a0c4fe4bbc1a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/src/scss/atoms/_parsley.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// This file is part of the Front Foundation package.
//
// Copyright (c) 2017-present LIN3S <info@lin3s.com>
//
// For the full copyright and license information, please view the LICENSE
// file that was distributed with this source code.
//
// @author Beñat Espiña <benatespina@gmail.com>
// @author Andrés Montejo <andres@lin3s.com>

\$parley-background-color: #f2b8c2 !default;
\$parley-color: #b20008 !default;
\$parley-transition-duration: .3s !default;
\$parley-transition-type: cubic-bezier(.94, .06, .32, .95) !default;
\$parley-transition-delay: 0s !default;
\$parsley-z-index: 1 !default;

.parsley-errors-list {
  margin-top: -5px;
  order: 2;
  padding-top: 5px;
  position: relative;
  transform: translateY(-45px);
  transition: transform \$parley-transition-duration \$parley-transition-type \$parley-transition-delay;
  width: 100%;
  z-index: \$parsley-z-index;

  [class*='parsley'] {
    background-color: \$parley-background-color;
    border-radius: 0 0 6px 6px;
    color: \$parley-color;
    left: 0;
    margin-top: -5px;
    padding: 18px 15px 15px;
    position: relative;
    width: 100%;
    z-index: \$parsley-z-index;
  }

  &.filled {
    transform: translateY(0);
  }
}

.parsley-error {
  border: 1px solid \$parley-color;
  position: relative;
  z-index: #{\$parsley-z-index + 1};
}
", "node_modules/lin3s-front-foundation/src/scss/atoms/_parsley.scss", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/src/scss/atoms/_parsley.scss");
    }
}
