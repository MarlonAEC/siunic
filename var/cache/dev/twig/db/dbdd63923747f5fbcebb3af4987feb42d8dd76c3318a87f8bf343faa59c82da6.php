<?php

/* AppBundle:Admin:User/edit.html.twig */
class __TwigTemplate_c407aa66e9bd47dfa4b58bbd7e8eb004178d6a6052d8d6d8396c9c712c207011 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "AppBundle:Admin:User/edit.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:User/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:User/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).on('ready', function () {
            \$('form div.form-actions button[name=\"btn_update_and_edit\"]').parent().append('<a class=\"btn btn-info\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 7, $this->source); })()), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 7, $this->source); })())), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-user\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_block_profile", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>');
            \$('form div.form-actions button[name=\"btn_update_and_edit\"]').parent().append('<a class=\"btn btn-info\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_dashboard");
        echo "\" style=\"margin-left:5px;\"><i class=\"fa fa-home\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
        echo "</a>');
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:User/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  60 => 7,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SonataAdminBundle:CRUD:edit.html.twig\" %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">
        \$(document).on('ready', function () {
            \$('form div.form-actions button[name=\"btn_update_and_edit\"]').parent().append('<a class=\"btn btn-info\" href=\"{{ admin.generateObjectUrl('show',object) }}\"><i class=\"fa fa-user\"></i> {{ 'user_block_profile'|trans({}, 'SonataUserBundle') }}</a>');
            \$('form div.form-actions button[name=\"btn_update_and_edit\"]').parent().append('<a class=\"btn btn-info\" href=\"{{ path('sonata_admin_dashboard') }}\" style=\"margin-left:5px;\"><i class=\"fa fa-home\"></i> {{ 'title_dashboard'|trans({},'SonataAdminBundle') }}</a>');
        });
    </script>
{% endblock %}", "AppBundle:Admin:User/edit.html.twig", "D:\\ESTUDIO\\siunic_etecsa\\siunic_etecsa\\app/Resources/AppBundle/views/Admin/User/edit.html.twig");
    }
}
