<?php

/* node_modules/lin3s-front-foundation/src/scss/base/_common.scss */
class __TwigTemplate_93f9f691695dee21a2962bcae2cbc9c07ce724711dff6472e6d8d591d3376ada extends Twig_Template
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
        $__internal_82dac3a9d584e830413651d41ea8c26e5b3bf9697365e1feb1f7e0a36129530e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82dac3a9d584e830413651d41ea8c26e5b3bf9697365e1feb1f7e0a36129530e->enter($__internal_82dac3a9d584e830413651d41ea8c26e5b3bf9697365e1feb1f7e0a36129530e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/src/scss/base/_common.scss"));

        // line 1
        echo "// This file is part of the Front Foundation package.
//
// Copyright (c) 2017-present LIN3S <info@lin3s.com>
//
// For the full copyright and license information, please view the LICENSE
// file that was distributed with this source code.
//
// @author Beñat Espiña <benatespina@gmail.com>
// @author Gorka Laucirica <gorka.lauzirika@gmail.com>

\$body-background-color: #fff !default;
\$selection-text-color: #fff !default;
\$selection-background-color: #ccc !default;
\$small-font-size: .7em !default;
\$strong-font-weight: 700 !default;

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  overflow-x: hidden;

  .no-scroll,
  .no-scroll body {
    overflow: hidden !important;
  }

  .no-scroll {
    overflow-y: scroll !important;
  }
}

body {
  background-color: \$body-background-color;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  min-height: 100%;
  overflow-x: hidden; // Prevents mobile menu been shown when is hidden
  overflow-y: auto;
  text-rendering: optimizelegibility;
}

small {
  font-size: \$small-font-size;
}

strong {
  font-weight: \$strong-font-weight;
}

em {
  font-style: italic;
}

// scss-lint:disable VendorPrefix
::-moz-selection,
::selection {
  background: \$selection-background-color;
  color: \$selection-text-color;
}

// Placeholders' ellipsis if not enough place
input[placeholder],
::-moz-placeholder,
input:-moz-placeholder {
  text-overflow: ellipsis;
}

// scss-lint:enable VendorPrefix
";
        
        $__internal_82dac3a9d584e830413651d41ea8c26e5b3bf9697365e1feb1f7e0a36129530e->leave($__internal_82dac3a9d584e830413651d41ea8c26e5b3bf9697365e1feb1f7e0a36129530e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/src/scss/base/_common.scss";
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
// @author Gorka Laucirica <gorka.lauzirika@gmail.com>

\$body-background-color: #fff !default;
\$selection-text-color: #fff !default;
\$selection-background-color: #ccc !default;
\$small-font-size: .7em !default;
\$strong-font-weight: 700 !default;

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  overflow-x: hidden;

  .no-scroll,
  .no-scroll body {
    overflow: hidden !important;
  }

  .no-scroll {
    overflow-y: scroll !important;
  }
}

body {
  background-color: \$body-background-color;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  min-height: 100%;
  overflow-x: hidden; // Prevents mobile menu been shown when is hidden
  overflow-y: auto;
  text-rendering: optimizelegibility;
}

small {
  font-size: \$small-font-size;
}

strong {
  font-weight: \$strong-font-weight;
}

em {
  font-style: italic;
}

// scss-lint:disable VendorPrefix
::-moz-selection,
::selection {
  background: \$selection-background-color;
  color: \$selection-text-color;
}

// Placeholders' ellipsis if not enough place
input[placeholder],
::-moz-placeholder,
input:-moz-placeholder {
  text-overflow: ellipsis;
}

// scss-lint:enable VendorPrefix
", "node_modules/lin3s-front-foundation/src/scss/base/_common.scss", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/src/scss/base/_common.scss");
    }
}
