<div class="row">
    <section id="searchBox" class="col-md-6 col-md-offset-3">
        <form method="POST" action="/hakutulokset">
            {{ csrf_field() }}
            <div class="form-group main-search">
                <button class="btn btn-primary search-button" type="submit"><i class="fa fa-search"></i>
                    Hae
                </button>
                <angucomplete-alt id="search"
                                  placeholder="Etsi kaupungin tai lähteen nimellä"
                                  pause="300"
                                  selected-object="city"
                                  remote-url="/api/cities/"
                                  remote-url-data-field="cities"
                                  title-field="name"
                                  description-field="hits"
                                  input-name="searchTerm"
                                  input-class="form-control main-search"/>

            </div>

        </form>
        <br>
        <a class="link-to-springs" href="/lahteet/">
            <h2>Katso kaikki lähteet <i class="fa fa-arrow-circle-right"></i>
            </h2>
        </a>
    </section>
</div>