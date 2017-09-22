<?php

/* node_modules/es5-ext/package.json */
class __TwigTemplate_c23bf1feeb1503b0383d059ac49ef95e5499a364885eec077fc613959204f57a extends Twig_Template
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
        $__internal_24ef78941301451c6e3e72c91f5788b5fb615b7fb572e559813e0c3bba42e2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ef78941301451c6e3e72c91f5788b5fb615b7fb572e559813e0c3bba42e2e7->enter($__internal_24ef78941301451c6e3e72c91f5788b5fb615b7fb572e559813e0c3bba42e2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/package.json"));

        // line 1
        echo "{
  \"name\": \"es5-ext\",
  \"version\": \"0.10.30\",
  \"description\": \"ECMAScript extensions and shims\",
  \"author\": \"Mariusz Nowak <medyk@medikoo.com> (http://www.medikoo.com/)\",
  \"keywords\": [
    \"ecmascript\",
    \"ecmascript5\",
    \"ecmascript6\",
    \"es5\",
    \"es6\",
    \"extensions\",
    \"ext\",
    \"addons\",
    \"extras\",
    \"harmony\",
    \"javascript\",
    \"polyfill\",
    \"shim\",
    \"util\",
    \"utils\",
    \"utilities\"
  ],
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/medikoo/es5-ext.git\"
  },
  \"dependencies\": {
    \"es6-iterator\": \"2\",
    \"es6-symbol\": \"~3.1\"
  },
  \"devDependencies\": {
    \"eslint\": \"^4.2.0\",
    \"eslint-config-medikoo-es5\": \"^1.4.1\",
    \"tad\": \"~0.2.7\"
  },
  \"eslintConfig\": {
    \"extends\": \"medikoo-es5\",
    \"root\": true,
    \"rules\": {
      \"no-extend-native\": \"off\"
    }
  },
  \"scripts\": {
    \"lint\": \"eslint --ignore-path=.gitignore .\",
    \"test\": \"node ./node_modules/tad/bin/tad\"
  },
  \"license\": \"MIT\"
}
";
        
        $__internal_24ef78941301451c6e3e72c91f5788b5fb615b7fb572e559813e0c3bba42e2e7->leave($__internal_24ef78941301451c6e3e72c91f5788b5fb615b7fb572e559813e0c3bba42e2e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"es5-ext\",
  \"version\": \"0.10.30\",
  \"description\": \"ECMAScript extensions and shims\",
  \"author\": \"Mariusz Nowak <medyk@medikoo.com> (http://www.medikoo.com/)\",
  \"keywords\": [
    \"ecmascript\",
    \"ecmascript5\",
    \"ecmascript6\",
    \"es5\",
    \"es6\",
    \"extensions\",
    \"ext\",
    \"addons\",
    \"extras\",
    \"harmony\",
    \"javascript\",
    \"polyfill\",
    \"shim\",
    \"util\",
    \"utils\",
    \"utilities\"
  ],
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/medikoo/es5-ext.git\"
  },
  \"dependencies\": {
    \"es6-iterator\": \"2\",
    \"es6-symbol\": \"~3.1\"
  },
  \"devDependencies\": {
    \"eslint\": \"^4.2.0\",
    \"eslint-config-medikoo-es5\": \"^1.4.1\",
    \"tad\": \"~0.2.7\"
  },
  \"eslintConfig\": {
    \"extends\": \"medikoo-es5\",
    \"root\": true,
    \"rules\": {
      \"no-extend-native\": \"off\"
    }
  },
  \"scripts\": {
    \"lint\": \"eslint --ignore-path=.gitignore .\",
    \"test\": \"node ./node_modules/tad/bin/tad\"
  },
  \"license\": \"MIT\"
}
", "node_modules/es5-ext/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/package.json");
    }
}
