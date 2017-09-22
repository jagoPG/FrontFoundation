<?php

/* node_modules/uglify-js/node_modules/yargs/completion.sh.hbs */
class __TwigTemplate_4fffeb9ea1fde5fa800c083ce8cc12213490fcc2196363949fcd7b50995bae97 extends Twig_Template
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
        $__internal_fa0fc5f1cf8ccea2463c9bd05c472bb58c8966d94bf07721934141c7a265fe3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0fc5f1cf8ccea2463c9bd05c472bb58c8966d94bf07721934141c7a265fe3e->enter($__internal_fa0fc5f1cf8ccea2463c9bd05c472bb58c8966d94bf07721934141c7a265fe3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uglify-js/node_modules/yargs/completion.sh.hbs"));

        // line 1
        echo "###-begin-";
        echo twig_escape_filter($this->env, ($context["app_name"] ?? null), "html", null, true);
        echo "-completions-###
#
# yargs command completion script
#
# Installation: ";
        // line 5
        echo twig_escape_filter($this->env, ($context["app_path"] ?? null), "html", null, true);
        echo " completion >> ~/.bashrc
#    or ";
        // line 6
        echo twig_escape_filter($this->env, ($context["app_path"] ?? null), "html", null, true);
        echo " completion >> ~/.bash_profile on OSX.
#
_yargs_completions()
{
    local cur_word args type_list

    cur_word=\"\${COMP_WORDS[COMP_CWORD]}\"
    args=\$(printf \"%s \" \"\${COMP_WORDS[@]}\")

    # ask yargs to generate completions.
    type_list=`";
        // line 16
        echo twig_escape_filter($this->env, ($context["app_path"] ?? null), "html", null, true);
        echo " --get-yargs-completions \$args`

    COMPREPLY=( \$(compgen -W \"\${type_list}\" -- \${cur_word}) )
    return 0
}
complete -F _yargs_completions ";
        // line 21
        echo twig_escape_filter($this->env, ($context["app_name"] ?? null), "html", null, true);
        echo "
###-end-";
        // line 22
        echo twig_escape_filter($this->env, ($context["app_name"] ?? null), "html", null, true);
        echo "-completions-###
";
        
        $__internal_fa0fc5f1cf8ccea2463c9bd05c472bb58c8966d94bf07721934141c7a265fe3e->leave($__internal_fa0fc5f1cf8ccea2463c9bd05c472bb58c8966d94bf07721934141c7a265fe3e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uglify-js/node_modules/yargs/completion.sh.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 22,  55 => 21,  47 => 16,  34 => 6,  30 => 5,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("###-begin-{{app_name}}-completions-###
#
# yargs command completion script
#
# Installation: {{app_path}} completion >> ~/.bashrc
#    or {{app_path}} completion >> ~/.bash_profile on OSX.
#
_yargs_completions()
{
    local cur_word args type_list

    cur_word=\"\${COMP_WORDS[COMP_CWORD]}\"
    args=\$(printf \"%s \" \"\${COMP_WORDS[@]}\")

    # ask yargs to generate completions.
    type_list=`{{app_path}} --get-yargs-completions \$args`

    COMPREPLY=( \$(compgen -W \"\${type_list}\" -- \${cur_word}) )
    return 0
}
complete -F _yargs_completions {{app_name}}
###-end-{{app_name}}-completions-###
", "node_modules/uglify-js/node_modules/yargs/completion.sh.hbs", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uglify-js/node_modules/yargs/completion.sh.hbs");
    }
}
