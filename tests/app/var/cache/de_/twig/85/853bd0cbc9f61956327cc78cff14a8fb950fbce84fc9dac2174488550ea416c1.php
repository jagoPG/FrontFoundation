<?php

/* node_modules/fsevents/package.json */
class __TwigTemplate_80745685c22381f5b6d16488d1d34b4b8646d6a336aa32d953a380cad9402581 extends Twig_Template
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
        $__internal_3c8f64e059f925a17355c54e4caf8e273565a3022afd0a3d1203d8c31ca88338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8f64e059f925a17355c54e4caf8e273565a3022afd0a3d1203d8c31ca88338->enter($__internal_3c8f64e059f925a17355c54e4caf8e273565a3022afd0a3d1203d8c31ca88338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/package.json"));

        // line 1
        echo "{
  \"name\": \"fsevents\",
  \"version\": \"1.1.2\",
  \"description\": \"Native Access to Mac OS-X FSEvents\",
  \"main\": \"fsevents.js\",
  \"dependencies\": {
    \"nan\": \"^2.3.0\",
    \"node-pre-gyp\": \"^0.6.36\"
  },
  \"os\": [
    \"darwin\"
  ],
  \"engines\": {
    \"node\": \">=0.8.0\"
  },
  \"scripts\": {
    \"install\": \"node install\",
    \"prepublish\": \"if [ \$(npm -v | head -c 1) -lt 3 ]; then exit 1; fi && npm dedupe\",
    \"test\": \"tap ./test\",
    \"node-pre-gyp\": \"node-pre-gyp\"
  },
  \"binary\": {
    \"module_name\": \"fse\",
    \"module_path\": \"./lib/binding/{configuration}/{node_abi}-{platform}-{arch}/\",
    \"remote_path\": \"./v{version}/\",
    \"package_name\": \"{module_name}-v{version}-{node_abi}-{platform}-{arch}.tar.gz\",
    \"host\": \"https://fsevents-binaries.s3-us-west-2.amazonaws.com\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/strongloop/fsevents.git\"
  },
  \"keywords\": [
    \"fsevents\",
    \"mac\"
  ],
  \"author\": \"Philipp Dunkel <pip@pipobscure.com>\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/strongloop/fsevents/issues\"
  },
  \"bundledDependencies\": [
    \"node-pre-gyp\"
  ],
  \"homepage\": \"https://github.com/strongloop/fsevents\",
  \"devDependencies\": {
    \"tap\": \"~0.4.8\"
  }
}
";
        
        $__internal_3c8f64e059f925a17355c54e4caf8e273565a3022afd0a3d1203d8c31ca88338->leave($__internal_3c8f64e059f925a17355c54e4caf8e273565a3022afd0a3d1203d8c31ca88338_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"fsevents\",
  \"version\": \"1.1.2\",
  \"description\": \"Native Access to Mac OS-X FSEvents\",
  \"main\": \"fsevents.js\",
  \"dependencies\": {
    \"nan\": \"^2.3.0\",
    \"node-pre-gyp\": \"^0.6.36\"
  },
  \"os\": [
    \"darwin\"
  ],
  \"engines\": {
    \"node\": \">=0.8.0\"
  },
  \"scripts\": {
    \"install\": \"node install\",
    \"prepublish\": \"if [ \$(npm -v | head -c 1) -lt 3 ]; then exit 1; fi && npm dedupe\",
    \"test\": \"tap ./test\",
    \"node-pre-gyp\": \"node-pre-gyp\"
  },
  \"binary\": {
    \"module_name\": \"fse\",
    \"module_path\": \"./lib/binding/{configuration}/{node_abi}-{platform}-{arch}/\",
    \"remote_path\": \"./v{version}/\",
    \"package_name\": \"{module_name}-v{version}-{node_abi}-{platform}-{arch}.tar.gz\",
    \"host\": \"https://fsevents-binaries.s3-us-west-2.amazonaws.com\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/strongloop/fsevents.git\"
  },
  \"keywords\": [
    \"fsevents\",
    \"mac\"
  ],
  \"author\": \"Philipp Dunkel <pip@pipobscure.com>\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/strongloop/fsevents/issues\"
  },
  \"bundledDependencies\": [
    \"node-pre-gyp\"
  ],
  \"homepage\": \"https://github.com/strongloop/fsevents\",
  \"devDependencies\": {
    \"tap\": \"~0.4.8\"
  }
}
", "node_modules/fsevents/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/package.json");
    }
}
