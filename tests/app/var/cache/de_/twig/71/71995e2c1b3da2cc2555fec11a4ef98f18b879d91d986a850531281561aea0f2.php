<?php

/* node_modules/merge-descriptors/package.json */
class __TwigTemplate_631338ddf850b8f1633637138baa8febb72ef3ac3f509879be61d3531c6b363b extends Twig_Template
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
        $__internal_ac3a6e27c330ac3e10f9a04ee01405698095b164ed266c81ad82027601bff28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3a6e27c330ac3e10f9a04ee01405698095b164ed266c81ad82027601bff28f->enter($__internal_ac3a6e27c330ac3e10f9a04ee01405698095b164ed266c81ad82027601bff28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/merge-descriptors/package.json"));

        // line 1
        echo "{
  \"name\": \"merge-descriptors\",
  \"description\": \"Merge objects using descriptors\",
  \"version\": \"1.0.1\",
  \"author\": {
    \"name\": \"Jonathan Ong\",
    \"email\": \"me@jongleberry.com\",
    \"url\": \"http://jongleberry.com\",
    \"twitter\": \"https://twitter.com/jongleberry\"
  },
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Mike Grabowski <grabbou@gmail.com>\"
  ],
  \"license\": \"MIT\",
  \"repository\": \"component/merge-descriptors\",
  \"devDependencies\": {
    \"istanbul\": \"0.4.1\",
    \"mocha\": \"1.21.5\"
  },
  \"files\": [
    \"HISTORY.md\",
    \"LICENSE\",
    \"README.md\",
    \"index.js\"
  ],
  \"scripts\": {
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\"
  }
}
";
        
        $__internal_ac3a6e27c330ac3e10f9a04ee01405698095b164ed266c81ad82027601bff28f->leave($__internal_ac3a6e27c330ac3e10f9a04ee01405698095b164ed266c81ad82027601bff28f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/merge-descriptors/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"merge-descriptors\",
  \"description\": \"Merge objects using descriptors\",
  \"version\": \"1.0.1\",
  \"author\": {
    \"name\": \"Jonathan Ong\",
    \"email\": \"me@jongleberry.com\",
    \"url\": \"http://jongleberry.com\",
    \"twitter\": \"https://twitter.com/jongleberry\"
  },
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Mike Grabowski <grabbou@gmail.com>\"
  ],
  \"license\": \"MIT\",
  \"repository\": \"component/merge-descriptors\",
  \"devDependencies\": {
    \"istanbul\": \"0.4.1\",
    \"mocha\": \"1.21.5\"
  },
  \"files\": [
    \"HISTORY.md\",
    \"LICENSE\",
    \"README.md\",
    \"index.js\"
  ],
  \"scripts\": {
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\"
  }
}
", "node_modules/merge-descriptors/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/merge-descriptors/package.json");
    }
}
