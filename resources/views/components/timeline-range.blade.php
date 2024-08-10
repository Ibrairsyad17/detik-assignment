<div class="row timeline-card mt-6">
    <div class="col-2 col-md-1 d-flex flex-column justify-content-center align-tems-center">
        <img src="{{ asset('assets/img/timeline.png') }}" alt="timeline" class="timeline-img">
    </div>
    <div class="col-10 col-md-11 d-flex flex-column justify-content-between align-items-start">
        <h3 class="text-white">{{ $title }}</h3>
        <h5 class="date-text">{{ $dateRange }}</h5>
        <p class="text-white">{{ $description }}</p>
    </div>
</div>
