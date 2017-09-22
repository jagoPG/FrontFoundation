<?php

/* node_modules/lin3s-front-foundation/dist/scss/definitions/_animations.scss */
class __TwigTemplate_ff31d4a4f071a2211e9eb7cb376b6041217f234cb41dfdf9471bfa9a1410f7ab extends Twig_Template
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
        $__internal_2af91036730c94343c12a1b5404bb8bb491c21d41d73c3d0080791b08a82bb41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af91036730c94343c12a1b5404bb8bb491c21d41d73c3d0080791b08a82bb41->enter($__internal_2af91036730c94343c12a1b5404bb8bb491c21d41d73c3d0080791b08a82bb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/dist/scss/definitions/_animations.scss"));

        // line 1
        echo "// This file is part of the Front Foundation package.
//
// Copyright (c) 2017-present LIN3S <info@lin3s.com>
//
// For the full copyright and license information, please view the LICENSE
// file that was distributed with this source code.
//
// @author Mikel Tuesta <mikeltuesta@gmail.com>

\$animation-vertical-node-in: vertical-node-in .5s ease-in-out;
\$animation-infinite-scale-out: scale-out 1.5s infinite ease-in-out;

@keyframes vertical-node-in {
  0% {
    opacity: 0;
    transform: translateY(-15px);
  }

  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes scale-out {
  0% {
    transform: scale(0);
  }

  66%,
  100% {
    opacity: 0;
    transform: scale(1);
  }
}
";
        
        $__internal_2af91036730c94343c12a1b5404bb8bb491c21d41d73c3d0080791b08a82bb41->leave($__internal_2af91036730c94343c12a1b5404bb8bb491c21d41d73c3d0080791b08a82bb41_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/dist/scss/definitions/_animations.scss";
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
// @author Mikel Tuesta <mikeltuesta@gmail.com>

\$animation-vertical-node-in: vertical-node-in .5s ease-in-out;
\$animation-infinite-scale-out: scale-out 1.5s infinite ease-in-out;

@keyframes vertical-node-in {
  0% {
    opacity: 0;
    transform: translateY(-15px);
  }

  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes scale-out {
  0% {
    transform: scale(0);
  }

  66%,
  100% {
    opacity: 0;
    transform: scale(1);
  }
}
", "node_modules/lin3s-front-foundation/dist/scss/definitions/_animations.scss", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/dist/scss/definitions/_animations.scss");
    }
}
