<?php

/* node_modules/parsleyjs/src/i18n/el.js */
class __TwigTemplate_844087e49681821e46ab494ab44b8354c1cc720e381978158dc302f68822934d extends Twig_Template
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
        $__internal_698bd47d905edac528cd4503bb6ac985c795a9a5958f9b08759fdb97210fcdc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698bd47d905edac528cd4503bb6ac985c795a9a5958f9b08759fdb97210fcdc5->enter($__internal_698bd47d905edac528cd4503bb6ac985c795a9a5958f9b08759fdb97210fcdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/el.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('el', {
  defaultMessage: \"Η τιμή φαίνεται να είναι μη έγκυρη.\",
  type: {
    email:        \"Η τιμή πρέπει να είναι ένα έγκυρο email.\",
    url:          \"Η τιμή πρέπει να είναι ένα έγκυρο url.\",
    number:       \"Η τιμή πρέπει να είναι ένας έγκυρος αριθμός.\",
    integer:      \"Η τιμή πρέπει να είναι ένας έγκυρος ακέραιος.\",
    digits:       \"Η τιμή πρέπει να είναι ψηφία.\",
    alphanum:     \"Η τιμή πρέπει να είναι αλφαριθμητικό.\"
  },
  notblank:       \"Η τιμή δεν πρέπει να είναι κενή.\",
  required:       \"Η τιμή αυτή απαιτείται.\",
  pattern:        \"Η τιμή φαίνεται να είναι μη έγκυρη.\",
  min:            \"Η τιμή πρέπει να είναι μεγαλύτερη ή ίση με %s.\",
  max:            \"Η τιμή πρέπει να είναι μικρότερη ή ίση με %s.\",
  range:          \"Η τιμή πρέπει να είναι μεταξύ %s και %s.\",
  minlength:      \"Το κείμενο είναι πολύ μικρό. Πρέπει να είναι %s ή και περισσότεροι χαρακτήρες.\",
  maxlength:      \"Η κείμενο είναι πολύ μεγάλο. Πρέπει να είναι %s ή και λιγότεροι χαρακτήρες.\",
  length:         \"Το μήκος του κειμένου είναι μη έγκυρο. Πρέπει να είναι μεταξύ %s και %s χαρακτήρων.\",
  mincheck:       \"Πρέπει να επιλέξετε τουλάχιστον %s επιλογές.\",
  maxcheck:       \"Πρέπει να επιλέξετε %s ή λιγότερες επιλογές.\",
  check:          \"Πρέπει να επιλέξετε μεταξύ %s και %s επίλογων.\",
  equalto:        \"Η τιμή πρέπει να είναι η ίδια.\"
});

Parsley.setLocale('el');
";
        
        $__internal_698bd47d905edac528cd4503bb6ac985c795a9a5958f9b08759fdb97210fcdc5->leave($__internal_698bd47d905edac528cd4503bb6ac985c795a9a5958f9b08759fdb97210fcdc5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/el.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('el', {
  defaultMessage: \"Η τιμή φαίνεται να είναι μη έγκυρη.\",
  type: {
    email:        \"Η τιμή πρέπει να είναι ένα έγκυρο email.\",
    url:          \"Η τιμή πρέπει να είναι ένα έγκυρο url.\",
    number:       \"Η τιμή πρέπει να είναι ένας έγκυρος αριθμός.\",
    integer:      \"Η τιμή πρέπει να είναι ένας έγκυρος ακέραιος.\",
    digits:       \"Η τιμή πρέπει να είναι ψηφία.\",
    alphanum:     \"Η τιμή πρέπει να είναι αλφαριθμητικό.\"
  },
  notblank:       \"Η τιμή δεν πρέπει να είναι κενή.\",
  required:       \"Η τιμή αυτή απαιτείται.\",
  pattern:        \"Η τιμή φαίνεται να είναι μη έγκυρη.\",
  min:            \"Η τιμή πρέπει να είναι μεγαλύτερη ή ίση με %s.\",
  max:            \"Η τιμή πρέπει να είναι μικρότερη ή ίση με %s.\",
  range:          \"Η τιμή πρέπει να είναι μεταξύ %s και %s.\",
  minlength:      \"Το κείμενο είναι πολύ μικρό. Πρέπει να είναι %s ή και περισσότεροι χαρακτήρες.\",
  maxlength:      \"Η κείμενο είναι πολύ μεγάλο. Πρέπει να είναι %s ή και λιγότεροι χαρακτήρες.\",
  length:         \"Το μήκος του κειμένου είναι μη έγκυρο. Πρέπει να είναι μεταξύ %s και %s χαρακτήρων.\",
  mincheck:       \"Πρέπει να επιλέξετε τουλάχιστον %s επιλογές.\",
  maxcheck:       \"Πρέπει να επιλέξετε %s ή λιγότερες επιλογές.\",
  check:          \"Πρέπει να επιλέξετε μεταξύ %s και %s επίλογων.\",
  equalto:        \"Η τιμή πρέπει να είναι η ίδια.\"
});

Parsley.setLocale('el');
", "node_modules/parsleyjs/src/i18n/el.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/el.js");
    }
}
