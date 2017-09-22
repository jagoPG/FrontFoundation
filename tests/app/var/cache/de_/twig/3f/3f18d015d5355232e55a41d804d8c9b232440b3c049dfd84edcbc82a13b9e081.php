<?php

/* node_modules/lin3s-front-foundation/dist/scss/ui/components/_gmap-marker-detail.scss */
class __TwigTemplate_62a0751fb63525bf4514818333817536a9b37b749106d92823e468ec94b4e5b3 extends Twig_Template
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
        $__internal_177c4f8425a3b541110bbf06d184b63afac415e6d57f9928a2cd6f55354faa9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177c4f8425a3b541110bbf06d184b63afac415e6d57f9928a2cd6f55354faa9b->enter($__internal_177c4f8425a3b541110bbf06d184b63afac415e6d57f9928a2cd6f55354faa9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/dist/scss/ui/components/_gmap-marker-detail.scss"));

        // line 1
        echo "// This file is part of the Euskaltel project.
//
// Copyright (c) 2017 LIN3S <info@lin3s.com>
//
// For the full copyright and license information, please view the LICENSE
// file that was distributed with this source code.
//
// @author Mikel Tuesta <mikel@lin3s.com>

@import './../../definitions/animations';
@import './../../variables/transitions';

\$gmap-marker-detail-background-color: #fff !default;
\$gmap-marker-detail-animation: \$animation-vertical-node-in;
\$gmap-marker-detail-transition: \$transition-opacity, \$transition-transform;
\$gmap-marker-detail-box-shadow-color: #222 !default;
\$gmap-marker-detail-box-shadow: 0 5px 30px -10px rgba(\$gmap-marker-detail-box-shadow-color, .25);
\$gmap-marker-detail-close-button-side: 40px;
\$gmap-marker-detail-close-button-icon-stroke-color: #e1e1e1 !default;
\$gmap-marker-detail-triangle-fill-color: \$gmap-marker-detail-background-color;
\$gmap-marker-detail-triangle-width: 30px;
\$gmap-marker-detail-triangle-height: 30px;

.gmap-marker-detail {
  background-color: \$gmap-marker-detail-background-color;
  box-shadow: \$gmap-marker-detail-box-shadow;
  opacity: 0;
  padding: 20px;
  pointer-events: none;
  position: relative;
  transform: translateY(-30px);
  transition: \$gmap-marker-detail-transition;

  .triangle {
    bottom: -20px;
    fill: \$gmap-marker-detail-triangle-fill-color;
    height: \$gmap-marker-detail-triangle-height;
    left: calc(50% - #{\$gmap-marker-detail-triangle-width / 2});
    position: absolute;
    width: \$gmap-marker-detail-triangle-width;
  }
}

.gmap-marker-detail--loading {
  .gmap-marker-detail__loader {
    animation: \$gmap-marker-detail-animation;
    display: flex;
  }

  .gmap-marker-detail__content {
    display: none;
  }
}

.gmap-marker-detail--visible {
  opacity: 1;
  pointer-events: auto;
  transform: translateY(0);
}

.gmap-marker-detail__close {
  background: none;
  border: 0;
  cursor: pointer;
  height: \$gmap-marker-detail-close-button-side;
  outline: none;
  position: absolute;
  right: 0;
  top: 0;
  width: \$gmap-marker-detail-close-button-side;

  .icon__glyph {
    stroke: \$gmap-marker-detail-close-button-icon-stroke-color;
  }

  &:active,
  &:focus {
    outline: none;
  }
}

.gmap-marker-detail__loader {
  align-items: center;
  display: none;
  justify-content: center;
  min-height: 120px;
  width: 100%;
}

.gmap-marker-detail__content {
  animation: \$gmap-marker-detail-animation;
  display: flex;
  padding-right: 20px;
}
";
        
        $__internal_177c4f8425a3b541110bbf06d184b63afac415e6d57f9928a2cd6f55354faa9b->leave($__internal_177c4f8425a3b541110bbf06d184b63afac415e6d57f9928a2cd6f55354faa9b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/dist/scss/ui/components/_gmap-marker-detail.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// This file is part of the Euskaltel project.
//
// Copyright (c) 2017 LIN3S <info@lin3s.com>
//
// For the full copyright and license information, please view the LICENSE
// file that was distributed with this source code.
//
// @author Mikel Tuesta <mikel@lin3s.com>

@import './../../definitions/animations';
@import './../../variables/transitions';

\$gmap-marker-detail-background-color: #fff !default;
\$gmap-marker-detail-animation: \$animation-vertical-node-in;
\$gmap-marker-detail-transition: \$transition-opacity, \$transition-transform;
\$gmap-marker-detail-box-shadow-color: #222 !default;
\$gmap-marker-detail-box-shadow: 0 5px 30px -10px rgba(\$gmap-marker-detail-box-shadow-color, .25);
\$gmap-marker-detail-close-button-side: 40px;
\$gmap-marker-detail-close-button-icon-stroke-color: #e1e1e1 !default;
\$gmap-marker-detail-triangle-fill-color: \$gmap-marker-detail-background-color;
\$gmap-marker-detail-triangle-width: 30px;
\$gmap-marker-detail-triangle-height: 30px;

.gmap-marker-detail {
  background-color: \$gmap-marker-detail-background-color;
  box-shadow: \$gmap-marker-detail-box-shadow;
  opacity: 0;
  padding: 20px;
  pointer-events: none;
  position: relative;
  transform: translateY(-30px);
  transition: \$gmap-marker-detail-transition;

  .triangle {
    bottom: -20px;
    fill: \$gmap-marker-detail-triangle-fill-color;
    height: \$gmap-marker-detail-triangle-height;
    left: calc(50% - #{\$gmap-marker-detail-triangle-width / 2});
    position: absolute;
    width: \$gmap-marker-detail-triangle-width;
  }
}

.gmap-marker-detail--loading {
  .gmap-marker-detail__loader {
    animation: \$gmap-marker-detail-animation;
    display: flex;
  }

  .gmap-marker-detail__content {
    display: none;
  }
}

.gmap-marker-detail--visible {
  opacity: 1;
  pointer-events: auto;
  transform: translateY(0);
}

.gmap-marker-detail__close {
  background: none;
  border: 0;
  cursor: pointer;
  height: \$gmap-marker-detail-close-button-side;
  outline: none;
  position: absolute;
  right: 0;
  top: 0;
  width: \$gmap-marker-detail-close-button-side;

  .icon__glyph {
    stroke: \$gmap-marker-detail-close-button-icon-stroke-color;
  }

  &:active,
  &:focus {
    outline: none;
  }
}

.gmap-marker-detail__loader {
  align-items: center;
  display: none;
  justify-content: center;
  min-height: 120px;
  width: 100%;
}

.gmap-marker-detail__content {
  animation: \$gmap-marker-detail-animation;
  display: flex;
  padding-right: 20px;
}
", "node_modules/lin3s-front-foundation/dist/scss/ui/components/_gmap-marker-detail.scss", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/dist/scss/ui/components/_gmap-marker-detail.scss");
    }
}
