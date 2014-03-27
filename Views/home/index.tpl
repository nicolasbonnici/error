{% block main %}

            <div class="row">
                <div class="col-md-12 column">
                    <div class="alert alert-error">
                        <h1>Forbidden access</h1>
                        <p>Vous devez être connecté pour visualisé ce contenu. Merci de vous reconnecter.</p>
                        {% if sRedirectUrl|Exists %}
                            <p>
                                <a href="{{sRedirectUrl}}" class="btn btn-lg btn-primary" title="Connection à votre compte">
                                    Connection
                                </a>
                            </p>
                        {% endif %}
                    </div>
                </div>
            </div> 
{% endblock %}