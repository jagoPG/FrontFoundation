<?php

/* node_modules/lin3s-front-foundation/dist/scss/mixins/_aspect-ratio.scss */
class __TwigTemplate_52bcc1b1884770c6d072b86dfc89b49e5091b04a6ba70bbdf911bc46ee482e56 extends Twig_Template
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
        $__internal_32d8f7504e4602b69c0e8a4d014786c2da15068d3b3c6dc3f9d56eb2bba72dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d8f7504e4602b69c0e8a4d014786c2da15068d3b3c6dc3f9d56eb2bba72dbd->enter($__internal_32d8f7504e4602b69c0e8a4d014786c2da15068d3b3c6dc3f9d56eb2bba72dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/dist/scss/mixins/_aspect-ratio.scss"));

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
        
        $__internal_32d8f7504e4602b69c0e8a4d014786c2da15068d3b3c6dc3f9d56eb2bba72dbd->leave($__internal_32d8f7504e4602b69c0e8a4d014786c2da15068d3b3c6dc3f9d56eb2bba72dbd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/dist/scss/mixins/_aspect-ratio.scss";
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
", "node_modules/lin3s-front-foundation/dist/scss/mixins/_aspect-ratio.scss", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/dist/scss/mixins/_aspect-ratio.scss");
    }
}
