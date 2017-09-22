<?php

/* node_modules/es5-ext/appveyor.yml */
class __TwigTemplate_1bd0f467343a436552e9b6aa080b11570f35f5ccab3fcae7a7c94691059fd083 extends Twig_Template
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
        $__internal_cdf1e2c1bd9b780ee101747822252b4c789d642f151407834e43156721fe8a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf1e2c1bd9b780ee101747822252b4c789d642f151407834e43156721fe8a6d->enter($__internal_cdf1e2c1bd9b780ee101747822252b4c789d642f151407834e43156721fe8a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/appveyor.yml"));

        // line 1
        echo "# Test against the latest version of this Node.js version
environment:
  matrix:
    # node.js
    - nodejs_version: \"0.12\"
    - nodejs_version: \"4\"
    - nodejs_version: \"6\"
    - nodejs_version: \"8\"

# Install scripts. (runs after repo cloning)
install:
  # Get the latest stable version of Node.js or io.js
  - ps: Install-Product node \$env:nodejs_version
  # install modules
  - npm install

# Post-install test scripts.
test_script:
  # Output useful info for debugging.
  - node --version
  - npm --version
  # run tests
  - npm test

# Don't actually build.
build: off
";
        
        $__internal_cdf1e2c1bd9b780ee101747822252b4c789d642f151407834e43156721fe8a6d->leave($__internal_cdf1e2c1bd9b780ee101747822252b4c789d642f151407834e43156721fe8a6d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/appveyor.yml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Test against the latest version of this Node.js version
environment:
  matrix:
    # node.js
    - nodejs_version: \"0.12\"
    - nodejs_version: \"4\"
    - nodejs_version: \"6\"
    - nodejs_version: \"8\"

# Install scripts. (runs after repo cloning)
install:
  # Get the latest stable version of Node.js or io.js
  - ps: Install-Product node \$env:nodejs_version
  # install modules
  - npm install

# Post-install test scripts.
test_script:
  # Output useful info for debugging.
  - node --version
  - npm --version
  # run tests
  - npm test

# Don't actually build.
build: off
", "node_modules/es5-ext/appveyor.yml", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/appveyor.yml");
    }
}
