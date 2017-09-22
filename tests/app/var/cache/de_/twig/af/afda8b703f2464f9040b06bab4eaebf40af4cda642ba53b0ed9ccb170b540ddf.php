<?php

/* node_modules/lin3s-front-foundation/src/scss/atoms/_icon.scss */
class __TwigTemplate_0375884527392e1a027074b5526e2db01736fed0c49d069746a0420b9454fe16 extends Twig_Template
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
        $__internal_b0440774a9b1a443476b2189f63348af372da44c1b553bbbb0703279e590d75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0440774a9b1a443476b2189f63348af372da44c1b553bbbb0703279e590d75f->enter($__internal_b0440774a9b1a443476b2189f63348af372da44c1b553bbbb0703279e590d75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/src/scss/atoms/_icon.scss"));

        // line 1
        echo "// This file is part of the Front Foundation package.
//
// Copyright (c) 2017-present LIN3S <info@lin3s.com>
//
// For the full copyright and license information, please view the LICENSE
// file that was distributed with this source code.
//
// @author Beñat Espiña <benatespina@gmail.com>
// @author Mikel Tuesta <mikeltuesta@gmail.com>

\$icon-color-primary: #f00 !default;
\$icon-color-secondary: #000 !default;
\$icon-stroke-miterlimit: 10 !default;
\$icon-stroke-width: 2 !default;
\$icon-vector-effect: non-scaling-stroke !default;

.icon {
  fill: none;
  stroke-miterlimit: \$icon-stroke-miterlimit;
  stroke-width: \$icon-stroke-width;
}

.icon--rounded {
  stroke-linecap: round;
  stroke-linejoin: round;
}

.icon--stroke-scale {
  .icon__glyph {
    vector-effect: none;
  }
}

.icon__glyph {
  vector-effect: \$icon-vector-effect;
}

// scss-lint:disable ImportantRule
.icon__glyph--primary {
  fill: none !important;
  stroke: \$icon-color-primary;
}

.icon__glyph--secondary {
  fill: none !important;
  stroke: \$icon-color-secondary;
}

.icon__glyph--primary-filled {
  fill: \$icon-color-primary;
  stroke: none !important;
}

.icon__glyph--secondary-filled {
  fill: \$icon-color-secondary;
  stroke: none !important;
}

// scss-lint:enable ImportantRule
";
        
        $__internal_b0440774a9b1a443476b2189f63348af372da44c1b553bbbb0703279e590d75f->leave($__internal_b0440774a9b1a443476b2189f63348af372da44c1b553bbbb0703279e590d75f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/src/scss/atoms/_icon.scss";
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
// @author Mikel Tuesta <mikeltuesta@gmail.com>

\$icon-color-primary: #f00 !default;
\$icon-color-secondary: #000 !default;
\$icon-stroke-miterlimit: 10 !default;
\$icon-stroke-width: 2 !default;
\$icon-vector-effect: non-scaling-stroke !default;

.icon {
  fill: none;
  stroke-miterlimit: \$icon-stroke-miterlimit;
  stroke-width: \$icon-stroke-width;
}

.icon--rounded {
  stroke-linecap: round;
  stroke-linejoin: round;
}

.icon--stroke-scale {
  .icon__glyph {
    vector-effect: none;
  }
}

.icon__glyph {
  vector-effect: \$icon-vector-effect;
}

// scss-lint:disable ImportantRule
.icon__glyph--primary {
  fill: none !important;
  stroke: \$icon-color-primary;
}

.icon__glyph--secondary {
  fill: none !important;
  stroke: \$icon-color-secondary;
}

.icon__glyph--primary-filled {
  fill: \$icon-color-primary;
  stroke: none !important;
}

.icon__glyph--secondary-filled {
  fill: \$icon-color-secondary;
  stroke: none !important;
}

// scss-lint:enable ImportantRule
", "node_modules/lin3s-front-foundation/src/scss/atoms/_icon.scss", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/src/scss/atoms/_icon.scss");
    }
}
