<?php

/* node_modules/path-parse/index.min.js */
class __TwigTemplate_546c76f3665aa69ba676200a60ce594bf7e4e110d9da079e26f1e4e5ee4924b1 extends Twig_Template
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
        $__internal_110216699310e1519ae9358c7044941fe4c0973cfee583b8af161812ce23b25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110216699310e1519ae9358c7044941fe4c0973cfee583b8af161812ce23b25f->enter($__internal_110216699310e1519ae9358c7044941fe4c0973cfee583b8af161812ce23b25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/path-parse/index.min.js"));

        // line 1
        echo "\"use strict\";var isWindows=process.platform===\"win32\";var splitDeviceRe=/^([a-zA-Z]:|[\\\\\\/]{2}[^\\\\\\/]+[\\\\\\/]+[^\\\\\\/]+)?([\\\\\\/])?([\\s\\S]*?)\$/;var splitTailRe=/^([\\s\\S]*?)((?:\\.{1,2}|[^\\\\\\/]+?|)(\\.[^.\\/\\\\]*|))(?:[\\\\\\/]*)\$/;var win32={};function win32SplitPath(b){var a=splitDeviceRe.exec(b),g=(a[1]||\"\")+(a[2]||\"\"),e=a[3]||\"\";var d=splitTailRe.exec(e),c=d[1],h=d[2],f=d[3];return[g,c,h,f]}win32.parse=function(b){if(typeof b!==\"string\"){throw new TypeError(\"Parameter 'pathString' must be a string, not \"+typeof b)}var a=win32SplitPath(b);if(!a||a.length!==4){throw new TypeError(\"Invalid path '\"+b+\"'\")}return{root:a[0],dir:a[0]+a[1].slice(0,-1),base:a[2],ext:a[3],name:a[2].slice(0,a[2].length-a[3].length)}};var splitPathRe=/^(\\/?|)([\\s\\S]*?)((?:\\.{1,2}|[^\\/]+?|)(\\.[^.\\/]*|))(?:[\\/]*)\$/;var posix={};function posixSplitPath(a){return splitPathRe.exec(a).slice(1)}posix.parse=function(b){if(typeof b!==\"string\"){throw new TypeError(\"Parameter 'pathString' must be a string, not \"+typeof b)}var a=posixSplitPath(b);if(!a||a.length!==4){throw new TypeError(\"Invalid path '\"+b+\"'\")}a[1]=a[1]||\"\";a[2]=a[2]||\"\";a[3]=a[3]||\"\";return{root:a[0],dir:a[0]+a[1].slice(0,-1),base:a[2],ext:a[3],name:a[2].slice(0,a[2].length-a[3].length)}};if(isWindows){module.exports=win32.parse}else{module.exports=posix.parse}module.exports.posix=posix.parse;module.exports.win32=win32.parse;";
        
        $__internal_110216699310e1519ae9358c7044941fe4c0973cfee583b8af161812ce23b25f->leave($__internal_110216699310e1519ae9358c7044941fe4c0973cfee583b8af161812ce23b25f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/path-parse/index.min.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";var isWindows=process.platform===\"win32\";var splitDeviceRe=/^([a-zA-Z]:|[\\\\\\/]{2}[^\\\\\\/]+[\\\\\\/]+[^\\\\\\/]+)?([\\\\\\/])?([\\s\\S]*?)\$/;var splitTailRe=/^([\\s\\S]*?)((?:\\.{1,2}|[^\\\\\\/]+?|)(\\.[^.\\/\\\\]*|))(?:[\\\\\\/]*)\$/;var win32={};function win32SplitPath(b){var a=splitDeviceRe.exec(b),g=(a[1]||\"\")+(a[2]||\"\"),e=a[3]||\"\";var d=splitTailRe.exec(e),c=d[1],h=d[2],f=d[3];return[g,c,h,f]}win32.parse=function(b){if(typeof b!==\"string\"){throw new TypeError(\"Parameter 'pathString' must be a string, not \"+typeof b)}var a=win32SplitPath(b);if(!a||a.length!==4){throw new TypeError(\"Invalid path '\"+b+\"'\")}return{root:a[0],dir:a[0]+a[1].slice(0,-1),base:a[2],ext:a[3],name:a[2].slice(0,a[2].length-a[3].length)}};var splitPathRe=/^(\\/?|)([\\s\\S]*?)((?:\\.{1,2}|[^\\/]+?|)(\\.[^.\\/]*|))(?:[\\/]*)\$/;var posix={};function posixSplitPath(a){return splitPathRe.exec(a).slice(1)}posix.parse=function(b){if(typeof b!==\"string\"){throw new TypeError(\"Parameter 'pathString' must be a string, not \"+typeof b)}var a=posixSplitPath(b);if(!a||a.length!==4){throw new TypeError(\"Invalid path '\"+b+\"'\")}a[1]=a[1]||\"\";a[2]=a[2]||\"\";a[3]=a[3]||\"\";return{root:a[0],dir:a[0]+a[1].slice(0,-1),base:a[2],ext:a[3],name:a[2].slice(0,a[2].length-a[3].length)}};if(isWindows){module.exports=win32.parse}else{module.exports=posix.parse}module.exports.posix=posix.parse;module.exports.win32=win32.parse;", "node_modules/path-parse/index.min.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/path-parse/index.min.js");
    }
}
