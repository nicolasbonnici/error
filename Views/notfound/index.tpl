{% block main %}
<div class="row">
    <div class="col-md-12 column">
        <div class="alert alert-error">
            <h1>{{tr['not_found']}}</h1>
            <p>{{tr['not_found_info']}}</p>
            {% if sRedirectUrl|Exists %}
            <p>
                <a href="{{sRedirectUrl}}" class="btn btn-lg btn-primary" title="Connection à votre compte">
                    {{tr['login']}} </a>
            </p>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}
