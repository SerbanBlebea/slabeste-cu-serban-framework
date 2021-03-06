{extends file='layouts/checkout_layout.tpl'}

{block name="nav"}
    <div class="nav animated slideInDown">
        <img style="display:block;margin:auto;max-width: 120px;" src="{$app_path}/img/logos/logo_site.png" />
    </div>
{/block}

{block name="body"}
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-sm-12 col-md-12">
                {if $error == true}
                    {include 'partials/notification.tpl'
                        type="danger"
                        message="Eroare! Plata nu a putut fi efectuata. Verifica datele si incearca din nou"}
                {/if}
            </div>
        </div>
        <div class="row mb-2 animated fadeIn">
            <div class="col-sm-12 col-md-6">
                <form id="checkout-form" method="post" action="{$app_path}/checkout/payment">
                    <div class="form-group">
                        <label>Nume:</label>
                        <input id="first-name" name="firstName" onkeyup="validateFirstName('first-name');" type="text" class="form-control" placeholder="ex. Popescu" required>
                        <div class="invalid-feedback">
                            Numele de familie trebuie sa aiba mai mult de 3 litere, dar nu spatii libere.
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Prenume:</label>
                        <input id="last-name" name="lastName" onkeyup="validateFirstName('last-name');" type="text" class="form-control" placeholder="ex. Maria" required>
                        <div class="invalid-feedback">
                            Numele mic trebuie sa aiba mai mult de 3 litere, dar nu spatii libere.
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input id="email" name="email" onkeyup="validateEmail('email');" type="email" class="form-control" placeholder="" required>
                        <div class="invalid-feedback">
                            Adresa de email trebuie sa fie una valida.
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Telefon:</label>
                        <input id="phone" name="phone" type="text" class="form-control" placeholder="" required>
                    </div>
                    <div class="alert alert-success" role="alert">
                        Plateste cu cardul apasand butonul "Cumpara acum" sau prin PayPal
                    </div>

                    <input name="program_price" type="hidden" value="{$discountPrice}">
                    <input name="programTag" type="hidden" value="{$program->program_tag}">

                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <div id="dropin-container"></div>
                            </div>
                        </div>
                    </div>
                    <input id="send-button" type="submit" value="Cumpara acum" class="btn btn-success btn-lg btn-block">
                </form>
                <img style="display:block;margin:auto;" src="{$app_path}/img/logos/plata_sigura.png" />
                <p class="text-center mt-2">
                    Siguranta platii tale este importanta pentru noi. De aceea, folosim cele mai moderne filtre de securitate pentru platile online. Nicio informatie confidentiala nu este stocata pe acest site.
                </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="text-center program-name">Programul {$program->program_name}</p>

                {if $discount == true}
                    <div class="alert alert-success" role="alert">
                        Profita de <strong>-{$discountProcent}% reducere</strong>!
                    </div>
                {/if}
                <img style="width:100%" class="mb-3 animated fadeIn" src="{$app_path}/{$program->program_image}" />

                <div class="row">
                    {if $discount == false}
                        <div class="col">
                            {include 'partials/checkout/price.tpl'
                                text  = "Pret Special"
                                price = $program->program_price
                                mode  = "new-price"}
                        </div>
                    {else}
                        <div class="col-md-6">
                            {include 'partials/checkout/price.tpl'
                                text  = "Pret Redus"
                                price = $discountPrice
                                mode  = "new-price"}
                        </div>
                        <div class="col-md-6">
                            {include 'partials/checkout/price.tpl'
                                text  = "Vechiul Pret"
                                price = $program->program_price
                                mode  = "old-price"}
                        </div>
                    {/if}
                </div>
                <hr />
                <div class="business-details">
                    <p><strong>Ai nevoie de ajutor?</strong></p>
                    <p>Pentru orice intrebari ne poti contacta:</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> Telefon: 0757.103.898</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> Email: office@slabestecuserban.ro</p>
                    <p>FIT MAKER SRL</p>
                    <p>Aleea Giurgeni, sector 3, Bucuresti</p>
                </div>
                <div class="card">
                    <div class="card-body guarantee">
                        <div class="justify-content-center align-items-center">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-4">
                                    <img style="max-width: 150px;" src="{$app_path}/img/logos/garantie.png" />
                                </div>
                                <div class="col-md-8">
                                    <h4><strong>Garantia de 14 zile</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Iti garantam maxima calitate. Daca din orice motiv nu esti multumit/a de calitatea produselor noastre, poti solicita in termen de 14 zile restituirea contravalorii acestora si inchiderea contului tau pe acest site. - Echipa Slabeste Cu Serban</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}

{block name="script"}
<script>

    function changeDOM(el, valid)
    {
        var button = document.getElementById('send-button');
        if(valid == false)
        {
            el.classList.add('is-invalid');
            button.disabled = true;
            button.value = "Corecteaza erorile din formular";

        } else {
            el.classList.remove('is-invalid');
            button.disabled = false;
            button.value = "Cumpara acum";
        }
    }

    function validateFirstName(elementId)
    {
        var valid = true;
        var el = document.getElementById(elementId);

        if(el.value == "")
        {
            valid = false;
        }

        if(el.value.length < 3)
        {
            valid = false;
        }

        if(el.value.indexOf(" ") > 0)
        {
            valid = false;
        }

        changeDOM(el, valid);
    }

    function validateEmail(elementId)
    {
        var valid = true;
        var el = document.getElementById(elementId);
        var button = document.getElementById('send-button');

        if(el.value == "")
        {
            valid = false;
        }

        if(el.value.indexOf('@') < 0)
        {
            valid = false;
        }

        if(el.value.indexOf(' ') > 0)
        {
            valid = false;
        }

        if(el.value.indexOf('.') < 0)
        {
            valid = false;
        }

        changeDOM(el, valid);
    }
</script>

<script type="text/javascript">
	var trackcmp_email = '';
	var trackcmp = document.createElement("script");
	trackcmp.async = true;
	trackcmp.type = 'text/javascript';
	trackcmp.src = '//trackcmp.net/visit?actid=475048887&e='+encodeURIComponent(trackcmp_email)+'&r='+encodeURIComponent(document.referrer)+'&u='+encodeURIComponent(window.location.href);
	var trackcmp_s = document.getElementsByTagName("script");
	if (trackcmp_s.length) {
		trackcmp_s[0].parentNode.appendChild(trackcmp);
	} else {
		var trackcmp_h = document.getElementsByTagName("head");
		trackcmp_h.length && trackcmp_h[0].appendChild(trackcmp);
	}
</script>
{/block}
