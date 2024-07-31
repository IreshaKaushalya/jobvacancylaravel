    <section id="portfolio" class="portfolio section">

      
<div class="container section-title" data-aos="fade-up">
  <h2>Job Vacancy</h2>
  <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div>

<div class="container">

  <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
      <li data-filter="*" class="filter-active">All</li>
      <li data-filter=".filter-IT">Information Technology</li>
      <li data-filter=".filter-BA">Business administration</li>
      <li data-filter=".filter-Marketing">Marketing</li>
      <li data-filter=".filter-Healthcare">Health care</li>
    </ul>

    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
      @foreach($jobs as $job)
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $job->jobtype }}">
          <div class="portfolio-content h-100">
            <img src="companyimage/{{$job->image}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $job->jobtype }}</h4><br><br>

              <label>Company Name:</label>
              <p>{{ $job->name }}</p><br>

             
              <a href="companyimage/{{$job->image}}" title="{{ $job->title }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="{{ url('jobvarcancy') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

  </div>

</div>


    </section>