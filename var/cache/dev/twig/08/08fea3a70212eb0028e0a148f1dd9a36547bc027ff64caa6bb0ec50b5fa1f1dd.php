<?php

/* @SonataUser/Admin/Core/user_block.html.twig */
class __TwigTemplate_2ff53f066745ab33a2220e547d7a62efcdca33292cf2c2cc81775a72ef8d19b8 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Core/user_block.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "user", array())) {
            // line 3
            echo "        ";
            $context["_bg_class"] = "bg-light-blue";
            // line 4
            echo "        ";
            $context["_logout_uri"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sonata_user_admin_security_logout");
            // line 5
            echo "        ";
            $context["_logout_text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_block_logout", array(), "SonataUserBundle");
            // line 6
            echo "        ";
            $context["_profile_uri"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 6, $this->source); })()), "userAdmin", array()), "isGranted", array(0 => "EDIT", 1 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "user", array())), "method")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 6, $this->source); })()), "userAdmin", array()), "generateUrl", array(0 => "edit", 1 => array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "user", array()), "id", array()))), "method")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 6, $this->source); })()), "userAdmin", array()), "generateUrl", array(0 => "show", 1 => array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "user", array()), "id", array()))), "method")));
            // line 7
            echo "        ";
            $context["_profile_text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_block_profile", array(), "SonataUserBundle");
            // line 8
            echo "        ";
            $context["_user_image"] = ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 8, $this->source); })()), "defaultAvatar", array())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 8, $this->source); })()), "defaultAvatar", array()))) : (null));
            // line 9
            echo "        ";
            // line 10
            echo "        ";
            // line 11
            echo "
        ";
            // line 12
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN") && twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 12, $this->source); })()), "impersonating", array()))) {
                // line 13
                echo "            ";
                $context["_bg_class"] = "bg-light-green";
                // line 14
                echo "            ";
                $context["_logout_uri"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 14, $this->source); })()), "impersonating", array()), "route", array()), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_user" does not exist.', 14, $this->source); })()), "impersonating", array()), "parameters", array()), array("_switch_user" => "_exit")));
                // line 15
                echo "            ";
                $context["_logout_text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("switch_user_exit", array(), "SonataUserBundle");
                // line 16
                echo "        ";
            }
            // line 17
            echo "
        <li class=\"user-header ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["_bg_class"]) || array_key_exists("_bg_class", $context) ? $context["_bg_class"] : (function () { throw new Twig_Error_Runtime('Variable "_bg_class" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\">
            ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "user", array()), "media", array())) {
                // line 20
                echo "                ";
                echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "user", array()), "media", array()), "avatar", array("class" => "img-circle", "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "user", array()), "username", array())));
                // line 21
                echo "            ";
            } elseif ((isset($context["_user_image"]) || array_key_exists("_user_image", $context) ? $context["_user_image"] : (function () { throw new Twig_Error_Runtime('Variable "_user_image" does not exist.', 21, $this->source); })())) {
                // line 22
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["_user_image"]) || array_key_exists("_user_image", $context) ? $context["_user_image"] : (function () { throw new Twig_Error_Runtime('Variable "_user_image" does not exist.', 22, $this->source); })()), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"Avatar\"/>
            ";
            }
            // line 24
            echo "            <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->source); })()), "user", array()), "html", null, true);
            echo "</p>
        </li>

        ";
            // line 33
            echo "
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["_profile_uri"]) || array_key_exists("_profile_uri", $context) ? $context["_profile_uri"] : (function () { throw new Twig_Error_Runtime('Variable "_profile_uri" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i
                            class=\"fa fa-user\"></i> ";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["_profile_text"]) || array_key_exists("_profile_text", $context) ? $context["_profile_text"] : (function () { throw new Twig_Error_Runtime('Variable "_profile_text" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["_logout_uri"]) || array_key_exists("_logout_uri", $context) ? $context["_logout_uri"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_uri" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i
                            class=\"fa fa-sign-out fa-fw\"></i> ";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["_logout_text"]) || array_key_exists("_logout_text", $context) ? $context["_logout_text"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_text" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "</a>
            </div>
        </li>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  138 => 42,  134 => 41,  127 => 37,  123 => 36,  118 => 33,  111 => 24,  105 => 22,  102 => 21,  99 => 20,  97 => 19,  93 => 18,  90 => 17,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  76 => 12,  73 => 11,  71 => 10,  69 => 9,  66 => 8,  63 => 7,  60 => 6,  57 => 5,  54 => 4,  51 => 3,  48 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}
    {% if app.user %}
        {% set _bg_class          = \"bg-light-blue\" %}
        {% set _logout_uri        = url('sonata_user_admin_security_logout') %}
        {% set _logout_text       = 'user_block_logout'|trans({}, 'SonataUserBundle') %}
        {% set _profile_uri       = sonata_user.userAdmin.isGranted('EDIT', app.user) ? sonata_user.userAdmin.generateUrl('edit', {id: app.user.id}) : sonata_user.userAdmin.generateUrl('show', {id: app.user.id}) %}
        {% set _profile_text      = 'user_block_profile'|trans({}, 'SonataUserBundle') %}
        {% set _user_image        = sonata_user.defaultAvatar ? asset(sonata_user.defaultAvatar) : null %}
        {# Customize this with your profile picture implementation, see below for example #}
        {#{% set _user_image  = app.user.profilePicture|default(asset(sonata_user.defaultAvatar)) %}#}

        {% if is_granted('ROLE_PREVIOUS_ADMIN') and sonata_user.impersonating %}
            {% set _bg_class    = \"bg-light-green\" %}
            {% set _logout_uri  = url(sonata_user.impersonating.route, sonata_user.impersonating.parameters| merge({'_switch_user': '_exit'})) %}
            {% set _logout_text = 'switch_user_exit'|trans({}, 'SonataUserBundle') %}
        {% endif %}

        <li class=\"user-header {{ _bg_class }}\">
            {% if app.user.media %}
                {% thumbnail app.user.media, 'avatar' with {'class': 'img-circle', 'alt': app.user.username } %}
            {% elseif _user_image %}
                <img src=\"{{ _user_image }}\" class=\"img-circle\" alt=\"Avatar\"/>
            {% endif %}
            <p>{{ app.user }}</p>
        </li>

        {#
            Uncomment to add some information
                <li class=\"user-body\">

                </li>
        #}

        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"{{ _profile_uri }}\" class=\"btn btn-default btn-flat\"><i
                            class=\"fa fa-user\"></i> {{ _profile_text }}</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"{{ _logout_uri }}\" class=\"btn btn-default btn-flat\"><i
                            class=\"fa fa-sign-out fa-fw\"></i> {{ _logout_text }}</a>
            </div>
        </li>
    {% endif %}
{% endblock %}
", "@SonataUser/Admin/Core/user_block.html.twig", "E:\\ESTUDIO\\TESIS\\sucu_etecsa\\app\\Resources\\SonataUserBundle\\views\\Admin\\Core\\user_block.html.twig");
    }
}
