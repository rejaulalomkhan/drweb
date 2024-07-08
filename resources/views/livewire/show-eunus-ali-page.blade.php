<main class="main main--interior">

    <section class="faded-image">
        <div class="faded-image__main-container">
            <div class="faded-image__main-image">
                <picture>
                    @if ($values->isNotEmpty() )
                    <img src="{{ asset('storage/'.$values[0]->image) }}" alt="" />
                    @endif
                </picture>
            </div>
            <div class="faded-image__overlay">
                <div class="faded-image__content fadeInInit transparent">
                    <h2 style="font-size: var(--my-heading); font-family: var(--my-font-arial);">Eunus Ali </h2>


                    <p style="font-size: var(--my-body-text); font-family: var(--my-font-pera);">Dave MacMillan was born in Bellshill, Scotland and received his undergraduate degree in
                        chemistry from the University of Glasgow, where he worked with Dr. Ernie Colvin. In 1990, he
                        began his doctoral studies with Professor Larry Overman at the University of California,
                        Irvine, before undertaking a postdoctoral position with Professor Dave Evans at Harvard
                        University in 1996. He began his independent career at the University of California,
                        Berkeley in 1998 before moving to Caltech in 2000 as the Earle C. Anthony Chair of Organic
                        Chemistry.</p>
                    <p>In 2006, Dave moved to Princeton University as the A. Barton Hepburn Professor of Chemistry.
                        He served as Department Chair from 2010–15, and is currently the James S. McDonnell
                        Distinguished University Professor of Chemistry. Dave shares the 2021 Nobel Prize in
                        Chemistry with Benjamin List &#8220;for the development of asymmetric
                        organocatalysis&#8221;.</p>
                </div>
                <div class="clearfix">
                    
                </div>
            </div>
        </div>
    </section>



</main>

