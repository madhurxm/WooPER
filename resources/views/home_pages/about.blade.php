@include('home_pages.header_home_pages')

{{-- MAIN SECTION START --}}

<div class="container vh-100">
    <div class="row mt-5">
      <div class="col m-3 pe-5 ps-2">
        <h1 class="h4 fw-semibold">| OUR STORY</h1>
        <p
          class="display-6 fs-4 my-4"
          style="text-align: justify; text-justify: inter-word"
        >
          At WooPER, our mission is to continuously innovate the best ways to
          train the next generation of developers and to transform the the way
          tech education is delivered.
        </p>
        <p
          class="display-6 fs-5 my-4"
          style="text-align: justify; text-justify: inter-word"
        >
          WooPER was founded in 2023 to bridge the knowledge gap between
          colleges and industry. Founded by Madhur Gupta, Ashish, Piyush,
          Shubham and Surya, WooPER boasts of world-class teaching faculty and
          a state-of-art learning platform for Coding education with faculty
          alumni of IIT, Stanford, IIIT and Facebook. WooPER teaches 17+
          Programming courses in Foundation,l Advanced, Data & Development
          courses such as Machine Learning, Data Science, Web Development,
          Android and more. Today, WooPER ecosystem comprises of 40,000+
          students and alumni, 1000+ Campus Ambassadors, 2000+ Teaching
          Assistants, and 150+ employees.
        </p>
      </div>
      <div class="col mx-3 my-5 text-center">
        <img src="{{  URL::asset('assets/home_pages/image/aboutus_image.PNG') }}" class="img-fluid rounded-top" alt="" />
      </div>
    </div>
  </div>

{{-- MAIN SECTION END --}}

@include('home_pages.footer_home_pages')
