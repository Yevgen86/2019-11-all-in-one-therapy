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

    <div class="sliderContainer">
        <div class="card">
            <img src="{{ asset('/images/woman-in-black.jpg') }}" alt="Anna Fink-first-slider">
            <div class="card__head">
                <a href="#anna-fink" data-toggle="modal" data-target="#anna-fink">Anna Fink</a>
            </div>

            <!-- Modal Anna Fink Slider-->
            <div class="modal fade" id="anna-fink" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Anna Fink</h5>
                            <button type="button" class="close" data-dismiss="modal-anna-fink" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Als Physiotherapeutin ist mir die ganzheitliche Arbeit mit dem Patienten wichtig. Die Osteopathie biete
                ich ebenfalls an - sie ergänzt die Behandlung optimal. Barbara und ich arbeiten schon lange zusammen und
                wir freuen uns, auch Sie in unserer Praxis begrüßen zu dürfen.

                Ausbildungen:

                2016: FDM Modul 1 + 2

                Seit 2012: Osteopathie an der Wiener Schule für Osteopathie

                2010-2012: Sportphysiotherapie

                2007-2010: Akademie für Physiotherapie am Wilhelminenspital

                Berufliche Aktivitäten:

                Seit 2019: Praxisgemeinschaft mit Barbara

                Seit 2011: SPORTO-Praxisgemeinschaft

                2010-2011: Elements of Performance-Sportphysiotherapie Hagenstadt

                2008-2009: Orthopädisches Zentrum Otto Meier Krankenhaus

                Sportphysiotherapeutische Aktivitäten:

                2011: Austria Wien Junioren U13 und U14

                2010: Fussball Damen U18, Herren FCZ Bern, Balletttänzerinnen Opernhaus Bern, BZ Adelbrie Europacup
                Niederlande

                2009: AON-N-Volleys

                Therapeutische Erfahrung mit Sportarten:

                Laufen, Fussball, Volleyball, Ballett, Ausdruckstanz, Boden- und Geräteturnen

                Hobbies:

                Reisen, Bodenturnen, Tanzen, Laufen, Freunde, Musik, Schlagzeug spielen</p>
        </div>
        <div class="card">
            <img src="{{  asset('/images/women-s-white.jpg') }}" alt="Barbara Berg-second-slider">
            <div class="card__head">Barbara Berg</div>
            <p>Ich kenne Anna schon seit der Schulzeit und wir haben Teile unserer Ausbildungen gemeinsam gemacht.
                Gemeinsam möchten wir unseren Patientinnen und Patienten stets das Allerbeste bieten und das gelingt uns
                jeden tag aufs Neue.

                Zur Person

                Ausbildungen:

                2012 – 2014: Yoga Ausbildung in Tirol

                2012: Budo-Teacher-Training in Graz

                2011: Yoga Master-Training in Nepal

                2010: Yoga & Spiralakrobatik Foundation Level

                2002 – 2008: Wiener Schule für Osteopathie

                1997 – 2000: Akademie für Physiotherapie SFB

                Berufliche Aktivitäten:

                Seit 2019: Praxisgemeinschaft mit Anna

                2010 – 2018: Sport-ORTOPABST-Praxisgemeinschaft

                2006 – 2010: GOLDO Praxisgemeinschaft

                2005 – 2006: Health & More We do it for you Consult AG

                2004 – 2005: Sanatorium Helga

                2000 – 2004: Physikalisches Institut Voltenberg
            </p>
        </div>
        <div class="card">
            <img src="{{ asset('/images/fitness-girl.jpg') }}">
            <div class="card__head">Leistungen & Preise</div>
            <article>
                <h2>Leistungen</h2>
                <p>Physiotherapie
                    Sport-Physiotherapie
                    Fußreflexzonenmassage
                    Lymphdrainage
                    Kinesio-Taping
                    Osteopathie
                    Fasziendistorsionsmodell (FDM)
                    Craniosacral-Therapie</p>
            </article>
            <article>
                <h2>Preise & Verrechnung</h2>
                <p> Physiotherapie 45 min 75 €
                    Osteopathie 45 min 90 €
                    Kinesiotape Stk. 15-25 €

                    Sollten Sie Ihren vereinbarten Termin nicht 24 Stunden vorher absagen (Telefon, Email), wird Ihnen
                    dieser in Rechnung gestellt.

                    Wir sind umsatzsteuerbefreit gem. § 19 UStg.

                    <strong>Kostenrückerstattung</strong>

                    Für eine Rückerstattung der Therapiekosten bei Ihrer Krankenkasse benötigen Sie eine Verordnung für
                    Physiotherapie von Ihrem Haus- oder Facharzt. Diese muss chefärztlich von Ihrer Krankenkasse
                    bewilligt werden (übernehmen wir auch gerne für Sie).

                    Nach Therapieabschluss erhalten Sie eine Rechnung, die Sie gemeinsam mit der bewilligten Verordnung
                    bei Ihrer Krankenkasse einreichen.

                    Sie bekommen einen Teil Ihrer Kosten (unterschiedlicher Teil je nach Kasse) von Ihrer Krankenkasse
                    rückerstattet. Verbleibende Restkosten können von Ihrer Zusatzversicherung übernommen werden.
                </p>
            </article>
        </div>
        <div class="card">
            <img src="{{ asset('/images/contact.jpg') }}">
            <div class="card__head">Kontakt & Termine</div>
            <article>
                <p>Mitzubringen

                    Bequeme Kleidung
                    Bewilligte Verordnung
                    Befunde (Röntgen, MRT, Arztbrief) falls vorhanden
                    Handtuch


                    Sie können bei unserer Assistentin Clara während der Sekretariatsöffnungszeiten einen Termin
                    vereinbaren.

                    Unsere Sekretariatsöffnungszeiten sind:
                    Montag - Freitag 8:00 - 11:00

                    +43 / 123 123 123 123
                    office@example.com

                    Wenn Sie uns nicht sofort erreichen, hinterlassen Sie bitte Name und Telefonnummer, wir rufen Sie
                    verlässlich so bald wie möglich zurück.</p>
            </article>
        </div>
        <div class="card">
            <img src="{{ asset('/images/calories.jpg') }}">
            <div class="card__head">Ernährung</div>
            <article>
                <p> 2800kcal / day
                    187g protein / day 750KCAL worth
                    68g fett / day 650kcal worth

                    fat + protein = 1400kcal / day

                    remaining 1400kcal.</p>
            </article>
        </div>
    </div>
@stop
