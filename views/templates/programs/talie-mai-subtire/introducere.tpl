{extends file='layouts/membership/membership_layout.tpl'}

{block name="body"}
    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                {include "partials/page-title.tpl"
                    title="Talie Mai Subtire In 21 De Zile"
                    sub_title="Bine ai venit in program {$auth->first_name} {$auth->last_name}"}

                <div class="text-section">
                    <p>Talie Mai Subtire in 21 de zile este rezultatul a peste 7 ani de experienta in domeniul transformarilor corporale.</p>
                    <p>Inainte de a incepe, <strong>te invit sa urmaresti cu atentie videoclipul de introducere de mai jos. </strong></p>
                    <p>Urmareste cu atentie videoclipurile cu antrenamente eficiente si urmeaza planul de alimentatie, iar rezultatele vor incepe sa apara in maxim 21 de zile. Repeta circuitul de 21 de zile ori de cate ori vrei sa inlaturi cativa centimetri in plus de pe talie sau abdomen.</p>
                </div>

                {include "partials/video.tpl"
                    video_link="https://player.vimeo.com/video/175065719"}

                <a class="btn btn-primary btn-lg button-center" href="{$app_path}/member/talie-mai-subtire/saptamana-1">Sunt pregatita sa incep</a>
            </div>
        </div>
    </div>
{/block}
