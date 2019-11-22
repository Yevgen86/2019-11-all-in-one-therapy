@extends('base')

@section('title', 'Welcome AIOT')

@section('top-links')
    @auth
        <a href="{{ url('/') }}">Patient</a>
        <a href="{{ url('/') }}">Kalender</a>
        <a href="{{ url('/') }}">Doku</a>
        <a href="{{ url('/backend') }}">BackEnd</a>
    @endauth
@stop

@section('main')

@endsection

@section('front')
    {{--<h1>Willkommen zu Vegas Therapy!</h1>--}}

    <div class="sliderContainer flexbox-slider flexbox-slider-2">
        <div class="card flexbox-slide">
            <img src="{{ asset('/images/woman-in-black.jpg') }}" alt="Anna Fink-first-slider">
            <div class="card__head">
                Anna Fink
            </div>
            <article class="text-block">
                <ul class="text">
                    <li>Als Physiotherapeutin ist mir die ganzheitliche Arbeit mit dem Patienten wichtig. Die
                        Osteopathie biete
                        ich ebenfalls an - sie ergänzt die Behandlung optimal. Barbara und ich arbeiten schon lange
                        zusammen
                        und wir freuen uns, auch Sie in unserer Praxis begrüßen zu dürfen.<hr>

                    <li><h4>Ausbildungen:</h4></li>

                    <li>2016: FDM Modul 1 + 2</li>

                    <li>Seit 2012: Osteopathie an der Wiener Schule für Osteopathie</li>

                    <li>2010-2012: Sportphysiotherapie</li>

                    <li>2007-2010: Akademie für Physiotherapie am Wilhelminenspital<hr></li>

                    <li><h4>Berufliche Aktivitäten:</h4></li>

                    <li>Seit 2019: Praxisgemeinschaft mit Barbara</li>

                    <li>Seit 2011: SPORTO-Praxisgemeinschaft</li>

                    <li>2010-2011: Elements of Performance-Sportphysiotherapie Hagenstadt</li>

                    <li>2008-2009: Orthopädisches Zentrum Otto Meier Krankenhaus<hr></li>

                    <li><h4>Sportphysiotherapeutische Aktivitäten:</h4></li>

                    <li>2011: Austria Wien Junioren U13 und U14</li>

                    <li>2010: Fussball Damen U18, Herren FCZ Bern, Balletttänzerinnen Opernhaus Bern, BZ Adelbrie
                        Europacup
                        Niederlande
                    </li>

                    <li>2009: AON-N-Volleys<hr></li>

                    <li><h4>Therapeutische Erfahrung mit Sportarten:</h4></li>

                    <li>Laufen, Fussball, Volleyball, Ballett, Ausdruckstanz, Boden- und Geräteturnen</li>

                    <li><h4>Hobbies:</h4></li>

                    <li>Reisen, Bodenturnen, Tanzen, Laufen, Freunde, Musik, Schlagzeug spielen</li>
                </ul>
            </article>
        </div>
        <div class="card flexbox-slide">
            <img src="{{  asset('/images/women-s-white.jpg') }}" alt="Barbara Berg-second-slider">
            <div class="card__head">Barbara Berg</div>
            <article class="text-block">
                <ul class="text">
                    <li>Ich kenne Anna schon seit der Schulzeit und wir haben Teile unserer Ausbildungen
                        gemeinsam gemacht.
                    </li>
                    <li>Gemeinsam möchten wir unseren Patientinnen und Patienten stets das Allerbeste bieten und das
                        gelingt uns jeden tag aufs Neue.<hr>
                    </li>

                    <li><h4>Zur Person</h4></li>

                    <li>
                        <ul>
                            <li><h4>Ausbildungen:</h4></li>
                            <li>2012 – 2014: Yoga Ausbildung in Tirol</li>

                            <li>2012: Budo-Teacher-Training in Graz</li>

                            <li>2011: Yoga Master-Training in Nepal</li>

                            <li>2010: Yoga & Spiralakrobatik Foundation Level</li>

                            <li>2002 – 2008: Wiener Schule für Osteopathie</li>

                            <li>1997 – 2000: Akademie für Physiotherapie SFB</li>
                        </ul><hr>
                    </li>

                    <li>
                        <ul>
                            <li><h4>Berufliche Aktivitäten:</h4></li>

                            <li>Seit 2019: Praxisgemeinschaft mit Anna</li>

                            <li>2010 – 2018: Sport-ORTOPABST-Praxisgemeinschaft</li>

                            <li>2006 – 2010: GOLDO Praxisgemeinschaft</li>

                            <li>2005 – 2006: Health & More We do it for you Consult AG</li>

                            <li>2004 – 2005: Sanatorium Helga</li>

                            <li>2000 – 2004: Physikalisches Institut Voltenberg</li>
                        </ul><hr>
                    </li>
                </ul>
            </article>
        </div>
        <div class="card flexbox-slide">
            <img src="{{ asset('/images/fitness-girl.jpg') }}" alt="fitness girl">
            <div class="card__head">Leistungen & Preise</div>
            <article class="text-block">
                <h2>Leistungen</h2><hr>
                <ul class="text">
                    <li>Physiotherapie</li>
                    <li>Sport-Physiotherapie</li>
                    <li>Fußreflexzonenmassage</li>
                    <li>Lymphdrainage</li>
                    <li>Kinesio-Taping</li>
                    <li>Osteopathie</li>
                    <li>Fasziendistorsionsmodell (FDM)</li>
                    <li>Craniosacral-Therapie</li>
                </ul>
                <hr>
                <h2>Preise & Verrechnung</h2><hr>
                <ul class="text">
                    <li>Physiotherapie 45 min 75 €</li>
                    <li>Osteopathie 45 min 90 €</li>
                    <li>Kinesiotape Stk. 15-25 €<hr></li>

                    <li>Sollten Sie Ihren vereinbarten Termin nicht 24 Stunden vorher absagen (Telefon, Email), wird
                        Ihnen
                        dieser in Rechnung gestellt.
                    </li>

                    <li>Wir sind umsatzsteuerbefreit gem. § 19 UStg.<hr></li>

                    <li><strong>Kostenrückerstattung</strong></li>

                    <li>Für eine Rückerstattung der Therapiekosten bei Ihrer Krankenkasse benötigen Sie eine Verordnung
                        für
                        Physiotherapie von Ihrem Haus- oder Facharzt. Diese muss chefärztlich von Ihrer Krankenkasse
                        bewilligt werden (übernehmen wir auch gerne für Sie).<hr>
                    </li>

                    <li>Nach Therapieabschluss erhalten Sie eine Rechnung, die Sie gemeinsam mit der bewilligten
                        Verordnung bei Ihrer Krankenkasse einreichen.
                    </li>

                    <li>Sie bekommen einen Teil Ihrer Kosten (unterschiedlicher Teil je nach Kasse) von Ihrer
                        Krankenkasse rückerstattet. Verbleibende Restkosten können von Ihrer Zusatzversicherung übernommen werden.<hr>
                    </li>
                </ul>
            </article>
        </div>
        <div class="card flexbox-slide">
            <img src="{{ asset('/images/contact.jpg') }}" alt="contact image">
            <div class="card__head">Kontakt & Termine</div>
            <article class="text-block">
                <ul class="text">
                    <li>
                        <ul>
                            <li><h4>Mitzubringen</h4>
                                <hr></li>
                            <li>Bequeme Kleidung</li>
                            <li>Bewilligte Verordnung</li>
                            <li>Befunde (Röntgen, MRT, Arztbrief) falls vorhanden</li>
                            <li>Handtuch</li>
                        </ul>
                        <hr>
                    </li>

                    <li>Sie können bei unserer Assistentin Clara während der Sekretariatsöffnungszeiten einen Termin
                        vereinbaren.</li>

                    <li>Unsere Sekretariatsöffnungszeiten sind:</li>
                    <li>Montag - Freitag 8:00 - 11:00</li>

                    <li>+43 / 123 123 123 123</li>
                    <li>office@example.com<hr></li>

                    <li>Wenn Sie uns nicht sofort erreichen, hinterlassen Sie bitte Name und Telefonnummer, wir rufen
                        Sie verlässlich so bald wie möglich zurück.
                    </li>
                </ul>
            </article>
        </div>
        <div class="card flexbox-slide">
            <img src="{{ asset('/images/food2.jpg') }}" alt="healthy food image">
            <div class="card__head">Ernährung</div>
            <article class="text-block">
                <ul class="text">
                    <li>2800kcal / day</li>
                    <li>187g protein / day 750KCAL worth</li>
                    <li>68g fett / day 650kcal worth</li>

                    <li>fat + protein = 1400kcal / day</li>

                    <li>remaining 1400kcal.</li>
                </ul>
            </article>
        </div>
    </div>
@stop
