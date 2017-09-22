<?php

/* node_modules/lin3s-front-foundation/src/scss/mixins/_aspect-ratio.scss */
class __TwigTemplate_cfae335de532ef1d0f9206b0c98fe4ca0fc3553de952f79d61ec06065a04b3dc extends Twig_Template
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
        $__internal_671b4c4019d027130bf052e80e3a7b8566c22256ff1eef6c109487d6ceacb9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671b4c4019d027130bf052e80e3a7b8566c22256ff1eef6c109487d6ceacb9f4->enter($__internal_671b4c4019d027130bf052e80e3a7b8566c22256ff1eef6c109487d6ceacb9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/src/scss/mixins/_aspect-ratio.scss"));

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

@mixin aspect-ratio(\$width, \$height) {
  display: block;
  position: relative;

  &:before {
    content: '';
    display: block;
    padding-top: (\$height / \$width) * 100%;
    width: 100%;
  }

  > img {
    bottom: 0;
    display: block;
    height: 100%;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
  }
}
";
        
        $__internal_671b4c4019d027130bf052e80e3a7b8566c22256ff1eef6c109487d6ceacb9f4->leave($__internal_671b4c4019d027130bf052e80e3a7b8566c22256ff1eef6c109487d6ceacb9f4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/src/scss/mixins/_aspect-ratio.scss";
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

@mixin aspect-ratio(\$width, \$height) {
  display: block;
  position: relative;

  &:before {
    content: '';
    display: block;
    padding-top: (\$height / \$width) * 100%;
    width: 100%;
  }

  > img {
    bottom: 0;
    display: block;
    height: 100%;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
  }
}
", "node_modules/lin3s-front-foundation/src/scss/mixins/_aspect-ratio.scss", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/src/scss/mixins/_aspect-ratio.scss");
    }
}
