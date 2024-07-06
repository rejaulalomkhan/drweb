<main>

           <!-- personal introduction -->
           <div class=" my-5 ">
            <div class="">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 ">
                                <div class="card ">
                                    <div class="card-body p-1">
                                        <img src="front/images/matt-vander-heiden-cropped-805x1024.jpg" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 col-md-8 col-lg-8 ">
                                <div class="">
                                    <div class="">
                                        <h3 class="fw-bold" style="font-size: 13.5pt; font-family: arial;">Matt Vander Heiden</h3>
                                        <p class=""><i>Principal Investigator</i></p>

                                        <p class="text-start" style="font-size: 13pt; font-family: calibri ;">Matthew Vander Heiden is the director of the Koch
                                            Institute at MIT,
                                            the Lester Wolfe (1919) Professor of Molecular Biology, and a member of the
                                            Broad Institute. He is a practicing oncologist and instructor in medicine at
                                            Dana-Farber Cancer Institute/Harvard Medical School. He earned his doctoral
                                            and medical degrees from the University of Chicago, where he worked in the
                                            laboratory of Craig Thompson. Vander Heiden then completed a residency in
                                            internal medicine at Boston’s Brigham & Women’s Hospital and a
                                            hematology-oncology fellowship at Dana-Farber Cancer Institute/Massachusetts
                                            General Hospital. He was a postdoctoral fellow in the laboratory of Lewis
                                            Cantley at Harvard Medical School, where he was supported by a Mel Karmazin
                                            Fellowship from the Damon Runyon Cancer Research Foundation. In 2010, Vander
                                            Heiden joined the MIT faculty. His work has been recognized by many awards
                                            including the Burroughs Wellcome Fund Career Award for Medical Sciences, the
                                            AACR Gertrude B. Elion Award, the HHMI Faculty Scholar Award, and an NCI
                                            Outstanding Investigator Award.</p>
                                        <a href="#" class="btn text-uppercase mt-3 mb-5 site-btn"> View All People</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- team area sention start-->
        <section class="mt-5">
            <div class="container-fluid">
                <div class="container">
                    <hr>
                    <div class="row">
                        @if ($peoples->isNotEmpty() )

                            @foreach ($peoples as $people)
                                <div class="col-12 col-md-3 col-lg-3">
                                    <x-people-card :people="$people" />
                                </div>
                            @endforeach

                        @endif

                    </div>
                </div>
            </div>
        </section>

        <!-- team area sention end -->




</main>
